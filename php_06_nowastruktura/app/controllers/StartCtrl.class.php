<?php
class StartCtrl {
    public function __construct() {
        if (session_status() === PHP_SESSION_NONE) session_start();
    }

    public function action_start(): void {
        View::render('start.tpl', [
            "role" => $_SESSION['role'] ?? null
        ]);
    }
}

