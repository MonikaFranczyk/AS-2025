<?php
// index.php - front controller / router
require_once __DIR__ . '/init.php';

$action = $_GET['action'] ?? 'start';

// helper: utwórz instancję kontrolera (autoloader załaduje plik)
function getController(string $className) {
    if (!class_exists($className)) {
        // spróbuj dołączyć plik ręcznie (opcjonalne) lub wyświetl błąd
        $file = __DIR__ . '/app/controllers/' . $className . '.class.php';
        if (file_exists($file)) require_once $file;
    }
    if (!class_exists($className)) {
        header("HTTP/1.0 404 Not Found");
        echo "Kontroler $className nie znaleziony.";
        exit();
    }
    return new $className();
}

switch ($action) {

    case 'loginShow':
        $ctrl = getController('LoginCtrl');
        $ctrl->action_loginShow();
        break;

    case 'login':
        $ctrl = getController('LoginCtrl');
        $ctrl->action_login();
        break;

    case 'logout':
        $ctrl = getController('SecurityCtrl');
        $ctrl->action_logout();
        break;

    case 'menu':
        $ctrl = getController('MenuCtrl');
        $ctrl->action_menu();
        break;

    case 'calc':
        $ctrl = getController('CalcCtrl');
        $ctrl->action_calc();
        break;

    case 'credit':
        $ctrl = getController('CreditCtrl');
        $ctrl->action_credit();
        break;

    case 'admin':
        $ctrl = getController('AdminPanelCtrl');
        $ctrl->action_admin();
        break;

    default:
        $ctrl = getController('StartCtrl');
        $ctrl->action_start();
        break;
}