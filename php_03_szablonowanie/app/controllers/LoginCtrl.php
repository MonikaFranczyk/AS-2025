<?php
require_once dirname(__FILE__).'/../../config.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$form = $_POST ?? [];
$messages = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $form['login'] ?? '';
    $pass  = $form['pass'] ?? '';

    if ($login === '') $messages[] = 'Nie podano loginu';
    if ($pass === '') $messages[] = 'Nie podano hasła';

    if (empty($messages)) {
        if ($login === 'admin' && $pass === 'admin') $_SESSION['role'] = 'admin';
        elseif ($login === 'user' && $pass === 'user') $_SESSION['role'] = 'user';
        else $messages[] = 'Niepoprawny login lub hasło';
    }

    if (empty($messages)) {
        header("Location: "._APP_URL."/app/controllers/MenuCtrl.php");
        exit();
    }
}

$smarty = getSmarty();
$smarty->assign('messages', $messages);
$smarty->display('login.tpl');
