<?php

class CreditForm {

    public ?float $amount = null;
    public ?int $months = null;
    public ?float $interest = null;

    public function load(): void {
        $this->amount    = getFromRequest('kwota');           // ← poprawione
        $this->months    = getFromRequest('miesiace');        // ← poprawione
        $this->interest  = getFromRequest('oprocentowanie');  // ← poprawione
    }

    public function validate(): bool {

        if ($this->amount === null || $this->amount === '') {
            Messages::addError("Nie podano kwoty kredytu.");
            return false;
        }
        if (!is_numeric($this->amount) || floatval($this->amount) <= 0) {
            Messages::addError("Kwota kredytu musi być dodatnią liczbą.");
            return false;
        }

        if ($this->months === null || $this->months === '') {
            Messages::addError("Nie podano liczby miesięcy.");
            return false;
        }
        if (!is_numeric($this->months) || intval($this->months) <= 0) {
            Messages::addError("Liczba miesięcy musi być dodatnią liczbą.");
            return false;
        }

        if ($this->interest === null || $this->interest === '') {
            Messages::addError("Nie podano oprocentowania.");
            return false;
        }
        if (!is_numeric($this->interest) || floatval($this->interest) < 0) {
            Messages::addError("Oprocentowanie musi być nieujemną liczbą.");
            return false;
        }

        return true;
    }

    public function calculate(): float {

        $P = floatval($this->amount);
        $n = intval($this->months);
        $r = floatval($this->interest) / 100.0 / 12.0;

        if ($r == 0.0) {
            return round($P / $n, 2);
        }

        $rate = $P * ($r * pow(1 + $r, $n)) / (pow(1 + $r, $n) - 1);
        return round($rate, 2);
    }
}

