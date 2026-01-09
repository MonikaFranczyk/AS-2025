<?php

namespace app\controllers;

use core\App;

class KlientCtrl extends BaseCtrl {

    public function action_main_klient() {

        $this->prepareLayout();

        App::getSmarty()->assign('pageTitle', 'Panel klienta');
        App::getSmarty()->display('Klient.tpl');
    }
}


