<?php
// core/Route.class.php

class Route {

    public string $action;
    public string $controller;
    public string $method;
    /** @var string[] */
    public array $roles;

    /**
     * @param string $action nazwa akcji z parametru ?action=
     * @param string $controller nazwa klasy kontrolera
     * @param string $method metoda kontrolera
     * @param string[] $roles list ról, które mają dostęp (pusta = wszyscy)
     */
    public function __construct(string $action, string $controller, string $method, array $roles = []) {
        $this->action = $action;
        $this->controller = $controller;
        $this->method = $method;
        $this->roles = $roles;
    }

    public function isAllowed(?string $userRole): bool {
        if (empty($this->roles)) {
            // dostęp dla wszystkich
            return true;
        }
        if ($userRole === null) {
            return false;
        }
        return in_array($userRole, $this->roles, true);
    }
}
