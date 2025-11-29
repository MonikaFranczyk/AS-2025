<?php

class LoginService {
    /**
     * Loguje użytkownika i ustawia rolę w sesji
     * @param string $login
     * @param string $pass
     * @return bool true jeśli logowanie poprawne
     */
    public static function login(string $login, string $pass): bool {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if ($login === 'admin' && $pass === 'admin') {
            $_SESSION['role'] = 'admin';
            return true;
        }

        if ($login === 'user' && $pass === 'user') {
            $_SESSION['role'] = 'user';
            return true;
        }

        return false;
    }

    /**
     * Wylogowuje użytkownika
     */
    public static function logout(): void {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        session_destroy();
    }

    /**
     * Pobiera rolę aktualnie zalogowanego użytkownika
     * @return string|null
     */
    public static function getRole(): ?string {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        return $_SESSION['role'] ?? null;
    }

    /**
     * Sprawdza, czy aktualny użytkownik ma uprawnienia
     * @param array|string $roles
     * @return bool
     */
    public static function checkRole($roles): bool {
        if (is_string($roles)) $roles = [$roles];
        $role = self::getRole();
        return $role !== null && in_array($role, $roles);
    }
}

