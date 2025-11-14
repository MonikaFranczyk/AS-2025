<?php
// 1. Wczytanie konfiguracji (definiuje _ROOT_PATH, _APP_URL, Smarty)
require_once __DIR__ . '/config.php';

// 2. Wczytanie kontrolera StartCtrl
require_once _ROOT_PATH . '/app/controllers/StartCtrl.php';

// 3. Uruchomienie kontrolera
$ctrl = new StartCtrl();
$ctrl->goShow();

