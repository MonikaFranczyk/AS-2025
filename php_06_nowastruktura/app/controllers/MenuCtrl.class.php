<?php
class MenuCtrl {
    public function __construct() {
        if (session_status() === PHP_SESSION_NONE) session_start();
    }

    public function action_menu(): void {
        // jeśli nie zalogowany -> przekieruj do loginShow
        if (!isset($_SESSION['role'])) {
            header("Location: " . _APP_URL . "/index.php?action=loginShow");
            exit();
        }
        View::render('menu.tpl', [
            'role' => $_SESSION['role']
        ]);
    }
}
