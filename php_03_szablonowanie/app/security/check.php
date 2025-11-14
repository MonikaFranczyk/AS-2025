<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['role'])) {
    header("Location: "._APP_URL."/index.php");
    exit();
}

function checkRole($roles) {
    if (!isset($_SESSION['role'])) {
        header("Location: "._APP_URL."/index.php");
        exit();
    }

    if (is_string($roles)) $roles = [$roles];

    if (!in_array($_SESSION['role'], $roles)) {
        $_SESSION['error'] = "Brak uprawnień do tej strony!";
        header("Location: "._APP_URL."/app/controllers/MenuCtrl.php");
        exit();
    }
}
