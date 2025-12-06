<?php
// core/Router.class.php

class Router {

    private array $routes = [];

    public function addRoute(string $action, string $controller, string $method, array $roles = []): void {
        $this->routes[$action] = new Route($action, $controller, $method, $roles);
    }

    public function go(?string $action): void {

        global $conf;

        // domyślna akcja
        if (empty($action)) {
            $action = "start";
        }

        // brak zarejestrowanej trasy
        if (!isset($this->routes[$action])) {
            Messages::addError("Nieznana akcja: $action");
            $this->redirect("start");
            return;
        }

        $route = $this->routes[$action];

        // sesja
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $userRole = $_SESSION["role"] ?? null;

        // autoryzacja
        if (!$route->isAllowed($userRole)) {

            Messages::addError("Brak uprawnień do tej operacji.");

            // jeśli nie zalogowany → na logowanie
            if ($userRole === null) {
                $this->redirect("login");
                return;
            }

            // jeśli zalogowany, ale rola zła → menu
            $this->redirect("menu");
            return;
        }

        // nazwy kontrolera i metody
        $controllerName = $route->controller;
        $methodName = $route->method;

        // kontroler istnieje?
        if (!class_exists($controllerName)) {
            Messages::addError("Brak klasy kontrolera: $controllerName");
            $this->redirect("start");
            return;
        }

        $ctrl = new $controllerName();

        // metoda istnieje?
        if (!method_exists($ctrl, $methodName)) {
            Messages::addError("Brak metody akcji: {$controllerName}::{$methodName}");
            $this->redirect("start");
            return;
        }

        $ctrl->$methodName();
    }

    private function redirect(string $action): void {

        global $conf;

        header("Location: " . $conf->app_url . "/index.php?" . $conf->action_param . "=" . $action);
        exit();
    }
}


