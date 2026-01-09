<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\RoleUtils;
use app\forms\LoginForm;

class AuthCtrl {

    private LoginForm $form;

    public function __construct() {
        $this->form = new LoginForm();
    }

    //przekierowanie wg roli
    private function redirectLoggedUser() {
        if (RoleUtils::inRole('ADMIN')) {
            App::getRouter()->redirectTo('main_admin');
        }
        if (RoleUtils::inRole('PRACOWNIK_RESTAURACJI')) {
            App::getRouter()->redirectTo('main_pracownik');
        }
        if (RoleUtils::inRole('DOSTAWCA')) {
            App::getRouter()->redirectTo('main_dostawca');
        }
        if (RoleUtils::inRole('KLIENT')) {
            App::getRouter()->redirectTo('main_klient');
        }
    }

    //login
    public function action_login() {

        //jeśli użytkownik jest już zalogowan -> przekieruj i nie generuj widoku loginu
        $this->redirectLoggedUser();

        //pierwsze wejście – pokaż formularz
        if (!isset($_POST['login'])) {
            $this->generateView();
            return;
        }

        //pobraie danych z formularza
        $this->form->load();

        if (!$this->form->validate()) {
            $this->generateView();
            return;
        }

        try {
            //pobranie danych użytkownika
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
                $this->generateView();
                return;
            }

            //pobranie id roli z tabeli asocjacyjnej
            $userRole = App::getDB()->get(
                "USER_ROLE",
                "ID_ROLA",
                ["ID_USER" => $user['ID_USER']]
            );

            if (!$userRole) {
                App::getMessages()->addMessage(
                    new Message('Użytkownik nie ma przypisanej roli', Message::ERROR)
                );
                $this->generateView();
                return;
            }

            //pobranie nazwy roli
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
                $this->generateView();
                return;
            }

            //dodanie roli
            RoleUtils::addRole($roleName);

            //dodanie loginu do sesji (żeby później wyświetlić informację o zalogowany użytkowniku)
            $_SESSION['user_login'] = $user['LOGIN'];

            //redirect do roli
            $this->redirectLoggedUser();

        } catch (\PDOException $e) {
            App::getMessages()->addMessage(
                new Message('Błąd połączenia z bazą danych', Message::ERROR)
            );
            $this->generateView();
        }
    }

    //logout
    public function action_logout() {

        App::getConf()->roles = [];
        unset($_SESSION['_amelia_roles']);
        session_destroy();

        App::getRouter()->redirectTo('main');
    }

    //view
    private function generateView() {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('Login.tpl');
    }
}