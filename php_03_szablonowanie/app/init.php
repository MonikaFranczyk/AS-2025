<?php

require_once dirname(__FILE__).'/../config.php';

session_start();

require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';
$smarty = new Smarty\Smarty();
$smarty->setTemplateDir(_ROOT_PATH.'/app/views/templates');
$smarty->setCompileDir(_ROOT_PATH.'/app/views/templates_c');

$conf = new stdClass();
$conf->app_url = _APP_URL;
$conf->root_path = _ROOT_PATH;

$smarty->assign('conf', $conf);

if (isset($_SESSION['role'])) {
    $smarty->assign('user', ['role'=>$_SESSION['role']]);
}
