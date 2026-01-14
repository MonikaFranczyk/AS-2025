<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\OrderStatus;
use core\ParamUtils;

class OrderCtrl extends BaseCtrl {

    public function action_moje_zamowienia() {

        $this->prepareLayout();
        $userId = $_SESSION['user_id'];

        $orders = App::getDB()->select(
    "ZAMOWIENIE",
    "*",
    [
        "ID_KLIENTA" => $userId,
        "ID_STATUS[>]" => OrderStatus::CART
        ]);

        App::getSmarty()->assign('orders', $orders);
        App::getSmarty()->display('MojeZamowienia.tpl');
    }

    // „FAKE” płatność
    public function action_order_pay() {

    $userId  = $_SESSION['user_id'];
    $orderId = ParamUtils::getFromRequest('id', true);

    // sprawdzamy czy zamówienie należy do klienta
    $order = App::getDB()->get(
        "ZAMOWIENIE",
        "*",
        [
            "ID_ZAMOWIENIA" => $orderId,
            "ID_KLIENTA"    => $userId,
            "ID_STATUS"     => OrderStatus::ZLOZONE
        ]
    );

    if (!$order) {
        App::getMessages()->addMessage(
            new Message('Nie można opłacić tego zamówienia', Message::ERROR)
        );
        App::getRouter()->redirectTo('moje_zamowienia');
        return;
    }

    App::getDB()->update(
        "ZAMOWIENIE",
        ["ID_STATUS" => OrderStatus::OPLACONE],
        ["ID_ZAMOWIENIA" => $orderId]
    );

    App::getMessages()->addMessage(
        new Message('Zamówienie zostało opłacone', Message::INFO)
    );

    App::getRouter()->redirectTo('moje_zamowienia');
}
}
