<?php
namespace app\controllers;

use core\App;
use core\RoleUtils;

abstract class BaseCtrl {

    protected function prepareLayout() {

        App::getSmarty()->assign(
            'isLogged',
            !empty(App::getConf()->roles)
        );

        App::getSmarty()->assign(
            'userLogin',
            $_SESSION['user_login'] ?? null
        );

        $mainRoute = 'main';

        if (RoleUtils::inRole('ADMIN')) {
            $mainRoute = 'main_admin';
        } elseif (RoleUtils::inRole('KLIENT')) {
            $mainRoute = 'main_klient';
        } elseif (RoleUtils::inRole('DOSTAWCA')) {
            $mainRoute = 'main_dostawca';
        } elseif (RoleUtils::inRole('PRACOWNIK_RESTAURACJI')) {
            $mainRoute = 'main_pracownik';
        }

        App::getSmarty()->assign('mainRoute', $mainRoute);
    }
}