<?php
class SecurityCtrl {
    public function __construct() {
        if (session_status() === PHP_SESSION_NONE) session_start();
    }

    public function action_logout(): void {
        session_unset();
        session_destroy();
        header("Location: " . _APP_URL . "/index.php");
        exit();
    }
}

