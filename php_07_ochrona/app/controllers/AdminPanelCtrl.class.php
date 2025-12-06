<?php

class AdminPanelCtrl {

    public function action_admin(): void {

        // dostęp tylko dla admina
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
            Messages::addError("Brak uprawnień administratora.");
            header("Location: index.php?action=menu");
            exit();
        }

        View::render('admin_panel.tpl', [
            'role' => $_SESSION['role']
        ]);
    }
}


