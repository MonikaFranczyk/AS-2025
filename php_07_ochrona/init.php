<?php
// init.php – wspólna inicjalizacja

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/core/ClassLoader.class.php';
require_once __DIR__ . '/core/Messages.class.php';
require_once __DIR__ . '/core/functions.php';
require_once __DIR__ . '/core/Route.class.php';
require_once __DIR__ . '/core/Router.class.php';
require_once __DIR__ . '/core/View.php';

ClassLoader::register();

