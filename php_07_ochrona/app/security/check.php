<?php
require_once __DIR__ . '/LoginService.class.php';

/**
 * Funkcja pomocnicza do sprawdzenia roli
 * Jeśli użytkownik nie ma wymaganej roli → redirect
 * @param array|string $roles
 */
function checkRole($roles): void {
    if (!LoginService::checkRole($roles)) {
        $_SESSION['error'] = "Brak uprawnień do tej strony!";
        header("Location: ../controllers/MenuCtrl.php");
        exit();
    }
}

