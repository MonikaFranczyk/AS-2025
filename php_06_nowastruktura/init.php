<?php
// init.php - inicjalizacja aplikacji, Smarty i autoloader

// wczytaj konfigurację (musi definiować _ROOT_PATH i _APP_URL)
require_once __DIR__ . '/config.php';

// start sesji jeśli jeszcze nie ma
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// --- Smarty (Smarty 5.x) ---
// dopasuj ścieżkę jeśli masz inną strukturę Smarty
require_once _ROOT_PATH . '/lib/smarty/libs/Smarty.class.php';

$smarty = new Smarty\Smarty();
$smarty->setTemplateDir(_ROOT_PATH . '/app/views/templates');
$smarty->setCompileDir(_ROOT_PATH . '/app/views/templates_c');
$smarty->setCacheDir(_ROOT_PATH . '/app/views/cache');
$smarty->setConfigDir(_ROOT_PATH . '/app/views/configs');

// przypisanie globalnych zmiennych (tablica - bez konfliktów)
$smarty->assign('conf', [
    'app_url' => _APP_URL,
    'app_root'=> _APP_ROOT ?? ''   // jeżeli masz _APP_ROOT
]);

// rola użytkownika dla szablonów
$smarty->assign('role', $_SESSION['role'] ?? null);

// globalna funkcja (opcjonalnie) do pobrania obiektu Smarty
function getSmarty(): Smarty\Smarty {
    global $smarty;
    return $smarty;
}

// --- Autoloader ---
// próbuje załadować klasę z listy katalogów i różnych konwencji nazw
spl_autoload_register(function(string $className) {
    $base = _ROOT_PATH;

    $candidates = [
        $base . '/core/' . $className . '.php',
        $base . '/core/' . $className . '.class.php',
        $base . '/app/controllers/' . $className . '.php',
        $base . '/app/controllers/' . $className . '.class.php',
        $base . '/app/forms/' . $className . '.php',
        $base . '/app/forms/' . $className . '.class.php',
        $base . '/app/results/' . $className . '.php',
        $base . '/app/results/' . $className . '.class.php',
        $base . '/app/lib/' . $className . '.php',
        $base . '/app/lib/' . $className . '.class.php',
        $base . '/app/security/' . $className . '.php',
        $base . '/app/security/' . $className . '.class.php',
    ];

    foreach ($candidates as $file) {
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});

