<?php
// core/functions.php

function getFromRequest(string $name, $default = null) {
    if (isset($_POST[$name])) {
        return $_POST[$name];
    }
    if (isset($_GET[$name])) {
        return $_GET[$name];
    }
    return $default;
}

function redirectTo(string $action): void {
    global $conf;

    $url = $conf->app_url . '/index.php?' . urlencode($conf->action_param) . '=' . urlencode($action);
    header("Location: " . $url);
    exit();
}




