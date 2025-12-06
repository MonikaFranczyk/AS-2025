<?php

class LoginCtrl {

    private ?LoginForm $form = null;

    public function __construct() {
        $this->form = new LoginForm();
    }

    public function action_loginShow(): void {
        View::render('login.tpl', [
            'form' => $this->form
        ]);
    }

   public function action_login() {

    $login = trim($_POST['login'] ?? '');
    $pass  = trim($_POST['pass'] ?? '');

    // 1) Walidacja pustych pól
    if ($login === '') {
        Messages::addError("Nie podano loginu.");
    }

    if ($pass === '') {
        Messages::addError("Nie podano hasła.");
    }

    // Jeśli już są błędy → nie sprawdzamy dalej
    if (!Messages::isEmpty()) {
        View::render('login.tpl', [
            'messages' => Messages::getAll()
        ]);
        return;
    }

    // 2) Walidacja danych logowania
    if ($login === 'admin' && $pass === 'admin') {
        $_SESSION['role'] = 'admin';
    } elseif ($login === 'user' && $pass === 'user') {
        $_SESSION['role'] = 'user';
    } else {
        Messages::addError("Niepoprawne dane logowania.");
        View::render('login.tpl', [
            'messages' => Messages::getAll()
        ]);
        return;
    }

    // 3) Sukces
    redirectTo('menu');
}

}

