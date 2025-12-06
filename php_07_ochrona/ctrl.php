<?php
// ctrl.php – główny kontroler, konfiguracja routera

require_once __DIR__ . '/init.php';

// Konfiguracja tras
$router = new Router();

// start, strona główna
$router->addRoute('start', 'StartCtrl', 'action_start');

// logowanie
$router->addRoute('loginShow', 'LoginCtrl', 'action_loginShow');
$router->addRoute('login',     'LoginCtrl', 'action_login');

// menu – tylko zalogowani (user lub admin)
$router->addRoute('menu',      'MenuCtrl', 'action_menu', ['user','admin']);
$router->addRoute('menu','StartCtrl','action_menu',['user','admin']);

// kalkulator – user + admin
$router->addRoute('calc',      'CalcCtrl', 'action_calc', ['user','admin']);

// kalkulator kredytowy – tylko admin
$router->addRoute('credit',    'CreditCtrl', 'action_credit', ['admin']);

// panel admina – tylko admin
$router->addRoute('admin',     'AdminPanelCtrl', 'action_admin', ['admin']);

// wylogowanie – tylko zalogowani
$router->addRoute('logout',    'SecurityCtrl', 'action_logout', ['user','admin']);

// pobierz akcję z żądania
global $conf;
$action = getFromRequest($conf->action_param, 'start');

// uruchom router
$router->go($action);