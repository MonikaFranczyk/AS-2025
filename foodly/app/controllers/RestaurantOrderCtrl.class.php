<?php

namespace app\controllers;

use core\OrderStatus;
use core\App;
use core\Message;
use core\ParamUtils;

class RestaurantOrderCtrl extends BaseCtrl {

    private function getRestaurantId(): int {
        return App::getDB()->get(
            "RESTAURACJA_USER",
            "ID_RESTAURACJI",
            ["ID_USER" => $_SESSION['user_id']]
        );
    }

public function action_orders_restaurant() {

    $this->prepareLayout();

    $userId = $_SESSION['user_id'];

    $restaurantId = App::getDB()->get(
        "RESTAURACJA_USER",
        "ID_RESTAURACJI",
        ["ID_USER" => $userId]
    );

 $orders = App::getDB()->select(
    "ZAMOWIENIE",
    "*",
    [
        "ID_RESTAURACJI" => $restaurantId,
        "ID_STATUS" => [OrderStatus::ZLOZONE, OrderStatus::OPLACONE]
    ]
);
    App::getSmarty()->assign('orders', $orders);
    App::getSmarty()->display('OrdersRestaurant.tpl');
}

    public function action_order_accept() {

        $id = ParamUtils::getFromRequest('id', true);

        App::getDB()->update(
            "ZAMOWIENIE",
            ["ID_STATUS" => OrderStatus::W_REALIZACJI],
            ["ID_ZAMOWIENIA" => $id]
        );

        App::getMessages()->addMessage(
            new Message('Zamówienie przyjęte', Message::INFO)
        );

        App::getRouter()->redirectTo('orders_restaurant');
    }

    public function action_order_cancel() {

        $id = ParamUtils::getFromRequest('id', true);

        App::getDB()->update(
            "ZAMOWIENIE",
            ["ID_STATUS" => OrderStatus::ANULOWANE],
            ["ID_ZAMOWIENIA" => $id]
        );

        App::getMessages()->addMessage(
            new Message('Zamówienie anulowane', Message::INFO)
        );

        App::getRouter()->redirectTo('orders_restaurant');
    }
}


