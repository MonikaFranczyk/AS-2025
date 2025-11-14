<?php

require_once dirname(__FILE__).'/init.php';

$action = $_GET['action'] ?? 'start';

switch ($action) {

    case 'loginShow':
        require_once 'controllers/LoginCtrl.class.php';
        (new LoginCtrl())->action_loginShow();
        break;

    case 'login':
        require_once 'controllers/LoginCtrl.class.php';
        (new LoginCtrl())->action_login();
        break;

    case 'logout':
        require_once 'controllers/LoginCtrl.class.php';
        (new LoginCtrl())->action_logout();
        break;

    case 'menu':
        require_once 'controllers/MenuCtrl.class.php';
        (new MenuCtrl())->action_menu();
        break;

    case 'calc':
        require_once 'controllers/CalcCtrl.class.php';
        (new CalcCtrl())->action_calc();
        break;

    case 'credit':
        require_once 'controllers/CreditCtrl.class.php';
        (new CreditCtrl())->action_credit();
        break;

    default:
        require_once 'controllers/StartCtrl.class.php';
        (new StartCtrl())->action_start();
}