<?php
require_once dirname(__FILE__).'/../../config.php';
require_once _ROOT_PATH.'/app/security/check.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$role = $_SESSION['role'] ?? null;
$error = $_SESSION['error'] ?? null;
unset($_SESSION['error']);

$smarty = getSmarty();
$smarty->assign('role', $role);
$smarty->assign('error', $error);
$smarty->display('menu.tpl');
