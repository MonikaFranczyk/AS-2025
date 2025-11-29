<?php
// app/forms/CreditForm.class.php

class CreditForm {
    public string $kwota = '';
    public string $oprocentowanie = '';
    public string $miesiace = '';
    public array $messages = [];

    public function load(array $data): void {
        // trimujemy żeby nie mieć spacji jako "wartości"
        $this->kwota = isset($data['kwota']) ? trim($data['kwota']) : '';
        $this->oprocentowanie = isset($data['oprocentowanie']) ? trim($data['oprocentowanie']) : '';
        $this->miesiace = isset($data['miesiace']) ? trim($data['miesiace']) : '';
    }

    public function validate(): bool {
        $this->messages = [];

        if ($this->kwota === '') $this->messages[] = "Nie podano kwoty kredytu.";
        if ($this->oprocentowanie === '') $this->messages[] = "Nie podano oprocentowania.";
        if ($this->miesiace === '') $this->messages[] = "Nie podano liczby miesięcy.";

        if (!empty($this->messages)) return false;

        if (!is_numeric($this->kwota)) $this->messages[] = "Kwota musi być liczbą.";
        if (!is_numeric($this->oprocentowanie)) $this->messages[] = "Oprocentowanie musi być liczbą.";
        if (!ctype_digit($this->miesiace) && !is_numeric($this->miesiace)) $this->messages[] = "Liczba miesięcy musi być liczbą całkowitą.";

        // dodatkowe warunki logiczne
        if (empty($this->messages)) {
            if (floatval($this->kwota) <= 0) $this->messages[] = "Kwota musi być większa od zera.";
            if (intval($this->miesiace) <= 0) $this->messages[] = "Liczba miesięcy musi być większa od zera.";
            if (floatval($this->oprocentowanie) < 0) $this->messages[] = "Oprocentowanie nie może być ujemne.";
        }

        return empty($this->messages);
    }
}
