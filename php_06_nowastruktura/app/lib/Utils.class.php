<?php

class Utils {

    /**
     * Sprawdza, czy zmienna jest liczbą dodatnią
     * @param mixed $value
     * @return bool
     */
    public static function isPositiveNumber($value): bool {
        return is_numeric($value) && $value > 0;
    }

    /**
     * Formatowanie liczby do postaci PLN
     * @param float $value
     * @return string
     */
    public static function formatPLN(float $value): string {
        return number_format($value, 2, ',', ' ') . ' PLN';
    }

    /**
     * Bezpieczne pobranie wartości z tablicy
     * @param array $array
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public static function get(array $array, string $key, $default = null) {
        return $array[$key] ?? $default;
    }
}
