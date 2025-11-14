<?php
require_once dirname(__FILE__).'/../../config.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

class SecurityCtrl {
    public function run() {
        $action = $_GET['action'] ?? null;

        if ($action === 'logout') {
            session_unset();
            session_destroy();
            header("Location: "._APP_URL."/index.php");
            exit();
        }

        header("Location: "._APP_URL."/index.php");
        exit();
    }
}

$ctrl = new SecurityCtrl();
$ctrl->run();
