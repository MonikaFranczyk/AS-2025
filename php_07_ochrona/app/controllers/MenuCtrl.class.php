<?php

class MenuCtrl {

    public function action_menu(): void {

        $role = $_SESSION['role'] ?? null;

        View::render('menu.tpl', [
            'role' => $role
        ]);
    }
}

    
