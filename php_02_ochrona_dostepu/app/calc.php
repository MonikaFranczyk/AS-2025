<?php
$admin_only = false;
require_once dirname(__FILE__).'/../config.php';
include _ROOT_PATH.'/app/security/check.php';

function getParamsCalc(&$x, &$y, &$operation) {
    $x = $_REQUEST['x'] ?? null;
    $y = $_REQUEST['y'] ?? null;
    $operation = $_REQUEST['op'] ?? null;
}

function validateCalc($x, $y, $operation, &$messages) {

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') return false; 

    if ($x === '') $messages[] = 'Nie podano liczby 1';
    if ($y === '') $messages[] = 'Nie podano liczby 2';

    if (!empty($messages)) return false;

    if (!is_numeric($x)) $messages[] = 'Pierwsza wartość nie jest liczbą';
    if (!is_numeric($y)) $messages[] = 'Druga wartość nie jest liczbą';

    return empty($messages);
}

function processCalc($x, $y, $operation, &$messages) {
    $x = floatval($x);
    $y = floatval($y);

    switch ($operation) {
        case 'minus': return $x - $y;
        case 'times': return $x * $y;
        case 'div':
            if ($y == 0) {
                $messages[] = 'Nie wolno dzielić przez zero!';
                return null;
            }
            return $x / $y;
        case 'plus':
        default:
            return $x + $y;
    }
}

// --- GŁÓWNY PRZEPŁYW KONTROLERA ---

$messages = [];
$x = $y = $operation = null;
$result = null;

getParamsCalc($x, $y, $operation);

if (validateCalc($x, $y, $operation, $messages)) {
    $result = processCalc($x, $y, $operation, $messages);
}

include 'calc_view.php';
