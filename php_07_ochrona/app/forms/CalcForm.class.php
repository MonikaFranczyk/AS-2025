<?php

class CalcForm {

    public ?float $x = null;
    public ?float $y = null;
    public ?string $operation = null;

    public function load(): void {
        $this->x = getFromRequest('x');
        $this->y = getFromRequest('y');
        $this->operation = getFromRequest('op');   // ← poprawione
    }

    public function validate(): bool {

        if ($this->x === null || $this->x === '') {
            Messages::addError("Nie podano pierwszej liczby.");
            return false;
        }
        if ($this->y === null || $this->y === '') {
            Messages::addError("Nie podano drugiej liczby.");
            return false;
        }

        if (!is_numeric($this->x)) {
            Messages::addError("Pierwsza wartość nie jest liczbą.");
            return false;
        }
        if (!is_numeric($this->y)) {
            Messages::addError("Druga wartość nie jest liczbą.");
            return false;
        }

        if ($this->operation === null || $this->operation === '') {
            Messages::addError("Nie wybrano operacji matematycznej.");
            return false;
        }

        return true;
    }

    public function calculate(): float {
        $x = floatval($this->x);
        $y = floatval($this->y);

        switch ($this->operation) {
            case 'plus':  return $x + $y;   // ← dopasowane
            case 'minus': return $x - $y;
            case 'times': return $x * $y;
            case 'div':
                if ($y == 0.0) {
                    Messages::addError("Nie można dzielić przez zero!");
                    return 0.0;
                }
                return $x / $y;
        }

        Messages::addError("Nieznana operacja.");
        return 0.0;
    }
}

