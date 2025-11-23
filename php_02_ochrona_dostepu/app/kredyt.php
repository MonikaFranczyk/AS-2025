<?php
$admin_only = true;
require_once dirname(__FILE__).'/../config.php';
include _ROOT_PATH.'/app/security/check.php';

function getParamsKredyt(&$kwota, &$oprocentowanie, &$miesiace) {
    $kwota = $_REQUEST['kwota'] ?? null;
    $oprocentowanie = $_REQUEST['oprocentowanie'] ?? null;
    $miesiace = $_REQUEST['miesiace'] ?? null;
}

function validateKredyt($kwota, $oprocentowanie, $miesiace, &$messages) {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') return false;

    if ($kwota === '') $messages[] = 'Nie podano kwoty kredytu.';
    if ($oprocentowanie === '') $messages[] = 'Nie podano oprocentowania.';
    if ($miesiace === '') $messages[] = 'Nie podano liczby miesięcy.';

    if (!empty($messages)) return false;

    if (!is_numeric($kwota) || !is_numeric($oprocentowanie) || !is_numeric($miesiace))
        $messages[] = 'Wszystkie wartości muszą być liczbami.';

    if (!empty($messages)) return false;

    $kwota = floatval($kwota);
    $oprocentowanie = floatval($oprocentowanie);
    $miesiace = intval($miesiace);

    if ($kwota <= 0 || $oprocentowanie < 0 || $miesiace <= 0)
        $messages[] = 'Wszystkie wartości muszą być większe od zera.';

    return empty($messages);
}

function processKredyt($kwota, $oprocentowanie, $miesiace) {
    $oprocentowanie_miesieczne = ($oprocentowanie / 100) / 12;

    if ($oprocentowanie_miesieczne > 0) {
        return ($kwota * $oprocentowanie_miesieczne) /
               (1 - pow(1 + $oprocentowanie_miesieczne, -$miesiace));
    } else {
        return $kwota / $miesiace;
    }
}

// --- GŁÓWNY PRZEPŁYW ---

$messages = [];
$result = null;

getParamsKredyt($kwota, $oprocentowanie, $miesiace);

if (validateKredyt($kwota, $oprocentowanie, $miesiace, $messages)) {
    $result = processKredyt($kwota, $oprocentowanie, $miesiace);
}

include _ROOT_PATH.'/app/kredyt_view.php';
