<?php

namespace app\controllers;

use core\App;

class AdminCtrl extends BaseCtrl {

    public function action_main_admin() {

        $this->prepareLayout();

        App::getSmarty()->assign('pageTitle', 'Panel administratora');
        App::getSmarty()->display('Admin.tpl');
    }
}


