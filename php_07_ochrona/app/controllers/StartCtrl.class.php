<?php

class StartCtrl {

    public function action_start(): void {
        $role = $_SESSION['role'] ?? null;

        View::render('start.tpl', [
            'role' => $role
        ]);
    }

    public function action_menu(): void {
    View::render('menu.tpl', [
        'role' => $_SESSION['role'] ?? null,
        'messages' => Messages::getAll()
    ]);
    }

}


