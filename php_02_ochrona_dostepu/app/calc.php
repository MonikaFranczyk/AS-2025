<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// 1. pobranie parametrów (bez błędów jeśli nie istnieją)
$x = $_REQUEST['x'] ?? null;
$y = $_REQUEST['y'] ?? null;
$operation = $_REQUEST['op'] ?? null;

// zainicjuj zmienne widoku
$messages = [];
$result = null;

// 2. WALIDACJA — wykonujemy ją tylko gdy formularz został wysłany (metodą POST)
//    Dzięki temu przy pierwszym wejściu na stronę nie będą pokazywane błędy "brak wartości".
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // sprawdzenie, czy parametry zostały przekazane
    if (!isset($x, $y, $operation)) {
        $messages[] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
    } else {
        // sprawdzenie, czy potrzebne wartości zostały przekazane (niepuste)
        if ($x === '') {
            $messages[] = 'Nie podano liczby 1';
        }
        if ($y === '') {
            $messages[] = 'Nie podano liczby 2';
        }

        // dalsza walidacja tylko gdy brak powyższych błędów
        if (empty($messages)) {
            if (!is_numeric($x)) {
                $messages[] = 'Pierwsza wartość nie jest liczbą';
            }
            if (!is_numeric($y)) {
                $messages[] = 'Druga wartość nie jest liczbą';
            }
        }
    }

    // 3. wykonaj zadanie jeśli wszystko w porządku
    if (empty($messages)) {
        // konwersja parametrów na liczby
        // używam floatval aby obsłużyć liczby zmiennoprzecinkowe
        $x = floatval($x);
        $y = floatval($y);

        // wykonanie operacji
        switch ($operation) {
            case 'minus':
                $result = $x - $y;
                break;
            case 'times':
                $result = $x * $y;
                break;
            case 'div':
                if ($y == 0) {
                    $messages[] = 'Nie wolno dzielić przez zero!';
                } else {
                    $result = $x / $y;
                }
                break;
            case 'plus':
            default:
                $result = $x + $y;
                break;
        }
    }
}

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';
