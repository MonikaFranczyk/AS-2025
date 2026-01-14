<?php

namespace app\controllers;

use core\App;

class KlientCtrl extends BaseCtrl {
    
    public function action_main_klient() {

        $this->prepareLayout();

        App::getSmarty()->assign('pageTitle', 'Panel klienta');
        App::getSmarty()->display('Klient.tpl');
    }
    public function action_restauracje() {

        $this->prepareLayout();

        $restauracje = App::getDB()->select(
            "restauracja",
            ["ID_RESTAURACJI", "NAZWA"],
            ["AKTYWNA" => 'Y']
        );

        App::getSmarty()->assign('restauracje', $restauracje);
        App::getSmarty()->display('Restauracje.tpl');
    }

    public function action_restauracja_menu() {

        $this->prepareLayout();

        $idRestauracji = $_GET['id'] ?? null;

        if (!$idRestauracji) {
            App::getRouter()->redirectTo('restauracje');
        }

        // pobierz restaurację
        $restauracja = App::getDB()->get(
            "restauracja",
            ["ID_RESTAURACJI", "NAZWA"],
            ["ID_RESTAURACJI" => $idRestauracji]
        );

    // pobierz menu + typy
    $menu = App::getDB()->select(
    "menu_item",
    [
        "[>]kat_typ_dania" => ["ID_TYP_DANIA" => "ID_TYP_DANIA"]
    ],
    [
        "menu_item.ID_MENU_ITEM",
        "menu_item.NAZWA",
        "menu_item.CENA",
        "kat_typ_dania.NAZWA(TYP)"
    ],
    [
        "menu_item.ID_RESTAURACJI" => $idRestauracji,
        "menu_item.AKTYWNY" => 'Y',
        "ORDER" => ["kat_typ_dania.ID_TYP_DANIA"]
    ]
);

        $menuGrouped = [];
        foreach ($menu as $item) {
            $menuGrouped[$item['TYP']][] = $item;
        }

        App::getSmarty()->assign('restauracja', $restauracja);
        App::getSmarty()->assign('menu', $menuGrouped);
        App::getSmarty()->display('MenuRestauracji.tpl');
    }
}
