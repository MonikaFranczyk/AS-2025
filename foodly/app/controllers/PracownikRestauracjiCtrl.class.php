<?php

namespace app\controllers;

use core\App;

class PracownikRestauracjiCtrl extends BaseCtrl {

    public function action_main_pracownik() {

        $this->prepareLayout();

        App::getSmarty()->assign('pageTitle', 'Panel restauracji');
        App::getSmarty()->display('Pracownik_restauracji.tpl');
    }
}


