<?php
require_once dirname(__FILE__).'/../../config.php';
//inicjacja mechanizmu sesji
session_start();

//pobranie roli
$role = isset($_SESSION['role']) ? $_SESSION['role'] : '';

//jeśli brak parametru (niezalogowanie) to idź na stronę logowania
if ( empty($role) ){
	include _ROOT_PATH.'/app/security/login_view.php';
	//zatrzymaj dalsze przetwarzanie skryptów
	exit();
}

// JEŚLI STRONA WYMAGA ADMINA:
if (($admin_only ?? false) && $role !== 'admin') {
    echo "<h2 style='color:red; text-align:center; margin-top:40px;'>Brak uprawnień!</h2>";
    exit();
}
//jeśli ok to idź dalej