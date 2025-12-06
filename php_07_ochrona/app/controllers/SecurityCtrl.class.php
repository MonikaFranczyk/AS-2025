<?php

class SecurityCtrl {

    /**
     * sprawdza czy użytkownik jest zalogowany
     * @return bool
     */
    public static function isLogged(): bool {
        return isset($_SESSION["role"]);
    }

    /**
     * sprawdza czy użytkownik ma rolę user
     * @return bool
     */
    public static function isUser(): bool {
        return isset($_SESSION["role"]) && $_SESSION["role"] == "user";
    }

    /**
     * sprawdza czy użytkownik ma rolę admin
     * @return bool
     */
    public static function isAdmin(): bool {
        return isset($_SESSION["role"]) && $_SESSION["role"] == "admin";
    }

    /**
     * ochrona dostępu do stron wymagających zalogowania
     */
    public static function requireLogin() {

        if (!self::isLogged()) {
            Messages::addError("Musisz się zalogować.");
            self::redirectToLogin();
        }
    }

    /**
     * ochrona przed dostępem tylko dla admina
     */
    public static function requireAdmin() {

        if (!self::isAdmin()) {
            Messages::addError("Brak uprawnień administratora.");
            self::redirectToLogin();
        }
    }

    /**
     * szybkie przekierowanie
     */
    private static function redirectToLogin() {
        global $conf;

        header("Location: " . $conf->app_url . "/index.php?" . $conf->action_param . "=loginShow");
        exit();
    }


    /** 
     * 🔥 BRAKOWAŁO TEGO — WYLOGOWANIE
     */
    public static function action_logout(): void {

        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $_SESSION = [];
        session_destroy();

        Messages::addInfo("Wylogowano pomyślnie.");

        self::redirectToLogin();
    }
}




