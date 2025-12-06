<?php

class LoginForm {

    public ?string $login = null;
    public ?string $password = null;

    public function load(): void {
        $this->login = trim((string)getFromRequest('login'));
        $this->password = trim((string)getFromRequest('password'));
    }

    public function validate(): bool {

        if ($this->login === '') {
            Messages::addError("Nie podano loginu.");
            return false;
        }
        if ($this->password === '') {
            Messages::addError("Nie podano hasła.");
            return false;
        }

        // tu możesz zrobić upgrade na bazę danych :)
        if ($this->login !== 'admin' && $this->login !== 'user') {
            Messages::addError("Niepoprawny login (użyj user lub admin).");
            return false;
        }
        if ($this->password !== 'admin' && $this->password !== 'pass') {
            Messages::addError("Niepoprawne hasło (admin / pass).");
            return false;
        }

        return true;
    }
}
