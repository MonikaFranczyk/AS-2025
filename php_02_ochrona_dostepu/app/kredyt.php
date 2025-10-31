<?php
require_once dirname(__FILE__).'/../config.php';
include _ROOT_PATH.'/app/security/check.php';

$kwota = $_REQUEST['kwota'] ?? null;
$oprocentowanie = $_REQUEST['oprocentowanie'] ?? null;
$miesiace = $_REQUEST['miesiace'] ?? null;

$messages = [];
$result = null;

// Walidacja i obliczenia tylko po wysłaniu formularza
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Sprawdzenie, czy wprowadzono wszystkie dane
    if ($kwota === '' || $oprocentowanie === '' || $miesiace === '') {
        if ($kwota === '') $messages[] = 'Nie podano kwoty kredytu.';
        if ($oprocentowanie === '') $messages[] = 'Nie podano oprocentowania.';
        if ($miesiace === '') $messages[] = 'Nie podano liczby miesięcy.';
    }

    // Jeśli dane wprowadzono — walidacja typu i zakresu
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

    // Obliczenia, jeśli brak błędów
    if (empty($messages)) {
        $oprocentowanie_miesieczne = ($oprocentowanie / 100) / 12;

        if ($oprocentowanie_miesieczne > 0) {
            $rata = ($kwota * $oprocentowanie_miesieczne) / 
                    (1 - pow(1 + $oprocentowanie_miesieczne, -$miesiace));
        } else {
            $rata = $kwota / $miesiace;
        }

        $result = $rata;
    }
}

include _ROOT_PATH.'/app/kredyt_view.php';