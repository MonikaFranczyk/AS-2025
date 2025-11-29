<?php

class CalcForm {
    public string $x = '';
    public string $y = '';
    public string $op = '';
    public array $messages = [];

    public function load(array $data): void {
        $this->x = $data['x'] ?? '';
        $this->y = $data['y'] ?? '';
        $this->op = $data['op'] ?? '';
    }

    public function validate(): bool {
        $this->messages = [];

        if ($this->x === '') $this->messages[] = "Nie podano liczby 1";
        if ($this->y === '') $this->messages[] = "Nie podano liczby 2";

        if (!empty($this->messages)) return false;

        if (!is_numeric($this->x)) $this->messages[] = "Liczba 1 nie jest prawidłowa";
        if (!is_numeric($this->y)) $this->messages[] = "Liczba 2 nie jest prawidłowa";

        return empty($this->messages);
    }
}
