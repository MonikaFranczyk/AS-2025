<?php

namespace app\controllers;

use core\App;

class DostawcaCtrl extends BaseCtrl {

    public function action_main_dostawca() {

        $this->prepareLayout();

        App::getSmarty()->assign('pageTitle', 'Panel dostawcy');
        App::getSmarty()->display('Dostawca.tpl');
    }
}


