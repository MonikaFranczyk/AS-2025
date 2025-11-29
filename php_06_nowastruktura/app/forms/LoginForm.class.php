<?php

class LoginForm {
    public string $login = '';
    public string $pass = '';
    public array $messages = [];

    public function load(array $data): void {
        $this->login = $data['login'] ?? '';
        $this->pass  = $data['pass'] ?? '';
    }

    public function validate(): bool {
        $this->messages = [];

        if ($this->login === '') {
            $this->messages[] = "Nie podano loginu.";
        }

        if ($this->pass === '') {
            $this->messages[] = "Nie podano hasła.";
        }

        if (!empty($this->messages)) return false;

        if ($this->login === 'admin' && $this->pass === 'admin') {
            $_SESSION['role'] = 'admin';
            return true;
        }

        if ($this->login === 'user' && $this->pass === 'user') {
            $_SESSION['role'] = 'user';
            return true;
        }

        $this->messages[] = "Niepoprawny login lub hasło";
        return false;
    }
}