<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów

$kwota = $_REQUEST['kwota'] ?? null;
$lata = $_REQUEST['lata'] ?? null;
$oprocentowanie = $_REQUEST['oprocentowanie'] ?? null;
$messages = [];

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

if (!isset($kwota, $lata, $oprocentowanie)) {
    $messages[] = 'Błędne wywołanie aplikacji. Brak parametrów.';
} else {
    if ($kwota === '') $messages[] = 'Nie podano kwoty kredytu';
    if ($lata === '') $messages[] = 'Nie podano liczby lat';
    if ($oprocentowanie === '') $messages[] = 'Nie podano oprocentowania';
}

if (empty($messages)) {
    if (!is_numeric($kwota) || $kwota <= 0)
        $messages[] = 'Kwota musi być dodatnią liczbą';
    if (!is_numeric($lata) || $lata <= 0)
        $messages[] = 'Liczba lat musi być dodatnią liczbą';
    if (!is_numeric($oprocentowanie))
        $messages[] = 'Oprocentowanie musi być liczbą';
    else if ($oprocentowanie < 0 || $oprocentowanie > 50)
        $messages[] = 'Oprocentowanie musi być w przedziale 0–50%';
}

// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty($messages)) {
    $P = floatval($kwota);
    $years = floatval($lata);
    $r = floatval($oprocentowanie) / 100 / 12;
    $n = $years * 12;

    if ($r > 0) {
        $rata = $P * ($r * pow(1 + $r, $n)) / (pow(1 + $r, $n) - 1);
    } else {
        $rata = $P / $n;
    }
}

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'kredyt_view.php';
?>