<?php
class AdminPanelCtrl {
    public function __construct() {
        if (session_status() === PHP_SESSION_NONE) session_start();
    }

    public function action_admin(): void {
        if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
            $_SESSION['error'] = "Brak dostępu do panelu administratora!";
            header("Location: " . _APP_URL . "/index.php?action=menu");
            exit();
        }
        View::render('admin_panel.tpl', []);
    }
}
