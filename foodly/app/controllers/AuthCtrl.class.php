<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\RoleUtils;
use app\forms\LoginForm;
use app\forms\RegisterForm;

class AuthCtrl {

    private LoginForm $form;
    private RegisterForm $registerForm;

    public function __construct() {
        $this->form = new LoginForm();
        $this->registerForm = new RegisterForm();
    }

    // przekierowanie wg roli
    private function redirectLoggedUser() {
        if (RoleUtils::inRole('ADMIN')) {
            App::getRouter()->redirectTo('main_admin');
            return;
        }
        if (RoleUtils::inRole('PRACOWNIK_RESTAURACJI')) {
            App::getRouter()->redirectTo('main_pracownik');
            return;
        }
        if (RoleUtils::inRole('DOSTAWCA')) {
            App::getRouter()->redirectTo('main_dostawca');
            return;
        }
        if (RoleUtils::inRole('KLIENT')) {
            App::getRouter()->redirectTo('main_klient');
            return;
        }
        App::getRouter()->redirectTo('main');
    }

    //login
    public function action_login() {

        if (!empty(App::getConf()->roles)) {
            $this->redirectLoggedUser();
            return;
        }

        if (!isset($_POST['login'])) {
            $this->generateLoginView();
            return;
        }

        $this->form->load();

        if (!$this->form->validate()) {
            $this->generateLoginView();
            return;
        }

        try {
            $user = App::getDB()->get(
                "USER",
                ["ID_USER", "LOGIN", "PASSWORD"],
                [
                    "LOGIN" => $this->form->login,
                    "AKTYWNY" => 'Y'
                ]
            );

            if (!$user || $user['PASSWORD'] !== $this->form->pass) {
                App::getMessages()->addMessage(
                    new Message('Niepoprawny login lub hasło', Message::ERROR)
                );
                $this->generateLoginView();
                return;
            }

            $userRole = App::getDB()->get(
                "USER_ROLE",
                "ID_ROLA",
                ["ID_USER" => $user['ID_USER']]
            );

            if (!$userRole) {
                App::getMessages()->addMessage(
                    new Message('Użytkownik nie ma przypisanej roli', Message::ERROR)
                );
                $this->generateLoginView();
                return;
            }

            $roleName = App::getDB()->get(
                "ROLE",
                "NAZWA",
                [
                    "ID_ROLA" => $userRole,
                    "AKTYWNA" => 'Y'
                ]
            );

            if (!$roleName) {
                App::getMessages()->addMessage(
                    new Message('Rola użytkownika jest nieaktywna', Message::ERROR)
                );
                $this->generateLoginView();
                return;
            }

            RoleUtils::addRole($roleName);
            $_SESSION['user_id']    = $user['ID_USER'];
            $_SESSION['user_login'] = $user['LOGIN'];

            $this->redirectLoggedUser();

        } catch (\PDOException $e) {
            App::getMessages()->addMessage(
                new Message('Błąd połączenia z bazą danych', Message::ERROR)
            );
            $this->generateLoginView();
        }
    }

    //rejestracja
    public function action_register() {

        if (!isset($_POST['login'])) {
            $this->generateRegisterView();
            return;
        }

        $this->registerForm->loadFromRequest();

        if (!$this->registerForm->validate()) {
            $this->generateRegisterView();
            return;
        }

        // sprawdzenie unikalności
        $exists = App::getDB()->has("USER", [
            "OR" => [
                "LOGIN" => $this->registerForm->login,
                "EMAIL" => $this->registerForm->email
            ]
        ]);

        if ($exists) {
            App::getMessages()->addMessage(
                new Message('Użytkownik o podanym loginie lub adresie email już istnieje', Message::ERROR)
            );
            $this->generateRegisterView();
            return;
        }

        // zapis użytkownika
        App::getDB()->insert("USER", [
            "LOGIN" => $this->registerForm->login,
            "EMAIL" => $this->registerForm->email,
            "PASSWORD" => $this->registerForm->password,
            "AKTYWNY" => 'Y'
        ]);

        $userId = App::getDB()->id();

        // domyślna rola – klient
        App::getDB()->insert("USER_ROLE", [
            "ID_USER" => $userId,
            "ID_ROLA" => 2 // KLIENT
        ]);

        App::getMessages()->addMessage(
            new Message('Rejestracja zakończona sukcesem – możesz się zalogować', Message::INFO)
        );

        App::getRouter()->redirectTo('login');
    }

    // logout
    public function action_logout() {
        App::getConf()->roles = [];
        unset($_SESSION['_amelia_roles']);
        session_destroy();
        App::getRouter()->redirectTo('main');
    }

    // widoki
    private function generateLoginView() {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('Login.tpl');
    }

    private function generateRegisterView() {
        App::getSmarty()->assign('form', $this->registerForm);
        App::getSmarty()->display('Rejestracja.tpl');
    }
}
