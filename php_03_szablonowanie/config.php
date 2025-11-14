<?php
define('_SERVER_NAME', 'localhost:8080');
define("_ROOT_PATH", dirname(__FILE__));
define('_SERVER_URL', 'http://'._SERVER_NAME);
define('_APP_ROOT', '/php_03_szablonowanie');
define('_APP_URL', _SERVER_URL._APP_ROOT);

// Smarty 5.x
require_once _ROOT_PATH.'/lib/smarty/libs/Smarty.class.php';

function getSmarty() {
    $smarty = new Smarty\Smarty();
 $smarty->setTemplateDir(_ROOT_PATH.'/app/templates');
    $smarty->setCompileDir(_ROOT_PATH.'/app/templates_c');
    $smarty->setCacheDir(_ROOT_PATH.'/app/cache');
    $smarty->setConfigDir(_ROOT_PATH.'/app/configs');

    // przekazanie podstawowych zmiennych globalnych
    $smarty->assign('conf', [
        'app_url' => _APP_URL,
        'app_root' => _APP_ROOT
    ]);

    // sesja jeśli istnieje
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $role = $_SESSION['role'] ?? null;
    $smarty->assign('role', $role);

 return $smarty;
 
}