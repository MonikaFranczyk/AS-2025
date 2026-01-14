<?php

namespace app\controllers;

use core\App;
use core\RoleUtils;

class AccessDeniedCtrl extends BaseCtrl {

    public function action_accessdenied() {
        
        $backAction = 'main';

        if (RoleUtils::inRole('ADMIN')) {
            $backAction = 'main_admin';
        } elseif (RoleUtils::inRole('PRACOWNIK_RESTAURACJI')) {
            $backAction = 'main_pracownik';
        } elseif (RoleUtils::inRole('DOSTAWCA')) {
            $backAction = 'main_dostawca';
        } elseif (RoleUtils::inRole('KLIENT')) {
            $backAction = 'main_klient';
        }

        App::getSmarty()->assign('backAction', $backAction);
        App::getSmarty()->display('AccessDenied.tpl');
    }
}


