<?php
require_once dirname(__FILE__).'/../../config.php';
include _ROOT_PATH.'/app/security/check.php';

$smarty = getSmarty();
$smarty->assign('page_title', 'Kalkulator kredytowy');
$smarty->assign('role', $_SESSION['role']);

$kwota = $_POST['kwota'] ?? null;
$oprocentowanie = $_POST['oprocentowanie'] ?? null;
$miesiace = $_POST['miesiace'] ?? null;
$messages = [];
$result = null;

// Sprawdzenie uprawnień
if ($_SESSION['role'] !== 'admin') {
    // Brak dostępu dla zwykłego użytkownika
    $messages[] = 'Brak dostępu do kalkulatora kredytowego!';
    $smarty->assign('messages', $messages);
    $smarty->assign('show_form', false); // nie pokazuj formularza
    $smarty->display('kredyt.tpl');
    exit(); // zakończ skrypt
}

// Poniżej kod tylko dla admina
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($kwota === '' || $oprocentowanie === '' || $miesiace === '') {
        if ($kwota === '') $messages[] = 'Nie podano kwoty kredytu.';
        if ($oprocentowanie === '') $messages[] = 'Nie podano oprocentowania.';
        if ($miesiace === '') $messages[] = 'Nie podano liczby miesięcy.';
    }

    if (empty($messages)) {
        if (!is_numeric($kwota) || !is_numeric($oprocentowanie) || !is_numeric($miesiace)) {
            $messages[] = 'Wszystkie wartości muszą być liczbami.';
        } else {
            $kwota = floatval($kwota);
            $oprocentowanie = floatval($oprocentowanie);
            $miesiace = intval($miesiace);

            if ($kwota <= 0 || $oprocentowanie < 0 || $miesiace <= 0) {
                $messages[] = 'Wszystkie wartości muszą być większe od zera.';
            }
        }
    }

    if (empty($messages)) {
        $oprocentowanie_miesieczne = ($oprocentowanie / 100) / 12;
        if ($oprocentowanie_miesieczne > 0) {
            $result = ($kwota * $oprocentowanie_miesieczne) / 
                      (1 - pow(1 + $oprocentowanie_miesieczne, -$miesiace));
        } else {
            $result = $kwota / $miesiace;
        }
    }
}

// Przekazanie zmiennych do Smarty
$smarty->assign('kwota', $kwota);
$smarty->assign('oprocentowanie', $oprocentowanie);
$smarty->assign('miesiace', $miesiace);
$smarty->assign('messages', $messages);
$smarty->assign('result', $result);
$smarty->assign('show_form', true); // pokaż formularz tylko dla admina
$smarty->display('kredyt.tpl');
?>

