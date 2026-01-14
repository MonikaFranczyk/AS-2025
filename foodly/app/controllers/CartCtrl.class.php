<?php

namespace app\controllers;

use core\App;
use core\OrderStatus;
use core\ParamUtils;
use core\Message;

class CartCtrl extends BaseCtrl {
    private function getUserId(): int {

        if (isset($_SESSION['user_id'])) {
            return (int) $_SESSION['user_id'];
        }

        if (!empty($_SESSION['user_login'])) {
            $userId = App::getDB()->get(
                "USER",
                "ID_USER",
                ["LOGIN" => $_SESSION['user_login'], "AKTYWNY" => 'Y']
            );

            if ($userId) {
                $_SESSION['user_id'] = $userId;
                return (int) $userId;
            }
        }

        App::getMessages()->addMessage(
            new Message('Sesja wygasła – zaloguj się ponownie', Message::ERROR)
        );
        App::getRouter()->redirectTo('logout');
        exit;
    }

    private function getActiveCart(): ?array {

        return App::getDB()->get(
            "ZAMOWIENIE",
            "*",
            [
                "ID_KLIENTA" => $this->getUserId(),
                "ID_STATUS"  => OrderStatus::CART
            ]
        );
    }

    private function getOrCreateActiveOrder(?int $restaurantId): array {

        $order = $this->getActiveCart();
        if ($order) return $order;

        if (!$restaurantId) {
            App::getMessages()->addMessage(
                new Message('Nie wybrano restauracji', Message::ERROR)
            );
            App::getRouter()->redirectTo('main_klient');
            exit;
        }

        App::getDB()->insert("ZAMOWIENIE", [
            "ID_KLIENTA"      => $this->getUserId(),
            "ID_RESTAURACJI"  => $restaurantId,
            "ID_STATUS"       => OrderStatus::CART,
            "MENU_ITEM_LISTA" => json_encode([]),
            "KWOTA_CALKOWITA" => 0
        ]);

        return App::getDB()->get(
            "ZAMOWIENIE",
            "*",
            ["ID_ZAMOWIENIA" => App::getDB()->id()]
        );
    }

    private function recalcTotal(array $items): float {
        $total = 0;
        foreach ($items as $item) {
            $total += $item['price'] * $item['qty'];
        }
        return $total;
    }

    //koszyk
    public function action_cart() {

        $this->prepareLayout();

        $order = $this->getActiveCart();
        $items = $order ? json_decode($order['MENU_ITEM_LISTA'], true) ?? [] : [];

        App::getSmarty()->assign('order', $order);
        App::getSmarty()->assign('items', $items);
        App::getSmarty()->display('Cart.tpl');
    }

    //dodanie elementu do koszyka
    public function action_cart_add_item() {

        $itemId       = ParamUtils::getFromRequest('id', true);
        $restaurantId = ParamUtils::getFromRequest('rest_id', true);

        $order = $this->getOrCreateActiveOrder($restaurantId);
        $items = json_decode($order['MENU_ITEM_LISTA'], true) ?? [];

        $item = App::getDB()->get(
            "MENU_ITEM",
            ["ID_MENU_ITEM", "NAZWA", "CENA"],
            ["ID_MENU_ITEM" => $itemId]
        );

        if (!$item) {
            App::getMessages()->addMessage(
                new Message('Produkt nie istnieje', Message::ERROR)
            );
            App::getRouter()->redirectTo('restauracja_menu&id='.$restaurantId);
            return;
        }

        if (!isset($items[$itemId])) {
            $items[$itemId] = [
                'id'    => $item['ID_MENU_ITEM'],
                'name'  => $item['NAZWA'],
                'price' => $item['CENA'],
                'qty'   => 0
            ];
        }

        $items[$itemId]['qty']++;

        App::getDB()->update(
            "ZAMOWIENIE",
            [
                "MENU_ITEM_LISTA" => json_encode($items),
                "KWOTA_CALKOWITA" => $this->recalcTotal($items)
            ],
            ["ID_ZAMOWIENIA" => $order['ID_ZAMOWIENIA']]
        );

        App::getMessages()->addMessage(
            new Message('Dodano do koszyka', Message::INFO)
        );

        App::getRouter()->redirectTo('restauracja_menu&id='.$restaurantId);
    }

    public function action_cart_update_item() {

        $itemId = ParamUtils::getFromRequest('id', true);
        $qty    = ParamUtils::getFromRequest('qty', true);

        $order = $this->getActiveCart();
        if (!$order) return App::getRouter()->redirectTo('cart');

        $items = json_decode($order['MENU_ITEM_LISTA'], true) ?? [];

        if ($qty <= 0) {
            unset($items[$itemId]);
        } elseif (isset($items[$itemId])) {
            $items[$itemId]['qty'] = $qty;
        }

        App::getDB()->update(
            "ZAMOWIENIE",
            [
                "MENU_ITEM_LISTA" => json_encode($items),
                "KWOTA_CALKOWITA" => $this->recalcTotal($items)
            ],
            ["ID_ZAMOWIENIA" => $order['ID_ZAMOWIENIA']]
        );

        App::getRouter()->redirectTo('cart');
    }

    public function action_cart_remove_item() {

        $itemId = ParamUtils::getFromRequest('id', true);

        $order = $this->getActiveCart();
        if (!$order) return App::getRouter()->redirectTo('cart');

        $items = json_decode($order['MENU_ITEM_LISTA'], true) ?? [];
        unset($items[$itemId]);

        App::getDB()->update(
            "ZAMOWIENIE",
            [
                "MENU_ITEM_LISTA" => json_encode($items),
                "KWOTA_CALKOWITA" => $this->recalcTotal($items)
            ],
            ["ID_ZAMOWIENIA" => $order['ID_ZAMOWIENIA']]
        );

        App::getRouter()->redirectTo('cart');
    }

    public function action_cart_submit() {

        $order = $this->getActiveCart();

        if (!$order || empty(json_decode($order['MENU_ITEM_LISTA'], true))) {
            App::getMessages()->addMessage(
                new Message('Koszyk jest pusty', Message::ERROR)
            );
            App::getRouter()->redirectTo('cart');
            return;
        }

        App::getRouter()->redirectTo('checkout');
    }

    //checkout
    public function action_checkout() {

        $this->prepareLayout();

        $order = $this->getActiveCart();
        if (!$order) return App::getRouter()->redirectTo('cart');

        $payments = App::getDB()->select(
            "KAT_PLATNOSC",
            ["ID_PLATNOSC", "NAZWA"],
            ["AKTYWNA" => 'Y']
        );

        App::getSmarty()->assign('order', $order);
        App::getSmarty()->assign('payments', $payments);
        App::getSmarty()->assign('deliveryCost', 10);
        App::getSmarty()->display('Checkout.tpl');
    }

public function action_checkout_submit() {

    $userId = $this->getUserId();

    $paymentId = ParamUtils::getFromRequest('payment_id', true);
    $address   = ParamUtils::getFromRequest('address', true);

    if (!$paymentId || !$address) {
        App::getMessages()->addMessage(
            new Message('Uzupełnij wszystkie dane zamówienia', Message::ERROR)
        );
        App::getRouter()->redirectTo('checkout');
        return;
    }

    $order = App::getDB()->get(
        "ZAMOWIENIE",
        "*",
        [
            "ID_KLIENTA" => $userId,
            "ID_STATUS"  => OrderStatus::CART
        ]
    );

    if (!$order) {
        App::getRouter()->redirectTo('cart');
        return;
    }

    $items = json_decode($order['MENU_ITEM_LISTA'], true) ?? [];

    if (empty($items)) {
        App::getMessages()->addMessage(
            new Message('Koszyk jest pusty', Message::ERROR)
        );
        App::getRouter()->redirectTo('cart');
        return;
    }

    $itemsTotal = 0;
    foreach ($items as $item) {
        $itemsTotal += $item['price'] * $item['qty'];
    }

    $deliveryCost = 10;
    $total = $itemsTotal + $deliveryCost;

    $newStatus = OrderStatus::ZLOZONE;

    App::getDB()->update(
        "ZAMOWIENIE",
        [
            "ID_PLATNOSC"     => $paymentId,
            "ADRES_DOSTAWY"   => $address,
            "KOSZT_DOSTAWY"   => $deliveryCost,
            "KWOTA_CALKOWITA" => $total,
            "ID_STATUS"       => $newStatus
        ],
        ["ID_ZAMOWIENIA" => $order['ID_ZAMOWIENIA']]
    );

    App::getMessages()->addMessage(
        new Message('Zamówienie zostało złożone', Message::INFO)
    );

    App::getRouter()->redirectTo('main_klient');
}

}