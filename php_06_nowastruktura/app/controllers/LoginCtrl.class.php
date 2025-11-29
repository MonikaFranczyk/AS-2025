<?php
class LoginCtrl {
    public function __construct() {
        if (session_status() === PHP_SESSION_NONE) session_start();
    }

    public function action_loginShow(): void {
        View::render('login.tpl', [
            'messages' => $_SESSION['messages'] ?? []
        ]);
        unset($_SESSION['messages']);
    }

    public function action_login(): void {
        $form = new LoginForm();
        $form->load($_POST);

        if ($form->validate()) {
            // success
            header("Location: " . _APP_URL . "/index.php?action=menu");
            exit();
        } else {
            // show errors
            View::render('login.tpl', [
                'form' => $form
            ]);
        }
    }
}
