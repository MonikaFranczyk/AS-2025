<?php
// core/View.php

class View {

    private static ?View $instance = null;
    private \Smarty\Smarty $smarty;

    private function __construct() {
        global $conf;

        $path = $conf->root_path . '/lib/smarty/libs/Smarty.class.php';
        require_once $path;

        $this->smarty = new \Smarty\Smarty();

        // katalogi Smarty
        $this->smarty->setTemplateDir($conf->templates_dir);
        $this->smarty->setCompileDir($conf->templates_c_dir);
        $this->smarty->setCacheDir($conf->smarty_cache_dir);
        $this->smarty->setConfigDir($conf->smarty_config_dir);

        // 🔥 KLUCZOWA ZMIANA:
        // zamiast przekazywać obiekt Config, przekazujemy prostą tablicę
        $this->smarty->assign('conf', [
            'app_url'      => $conf->app_url,
            'root_path'    => $conf->root_path,
            'server_url'   => $conf->server_url ?? '',
            'action_param' => $conf->action_param ?? 'action',
        ]);
    }

    public static function getInstance(): View {
        if (self::$instance === null) {
            self::$instance = new View();
        }
        return self::$instance;
    }

    public static function render(string $template, array $params = []): void {
    global $conf;

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $view = self::getInstance();

    // ZAWSZE przekaż conf (tablica!)
    $view->smarty->assign('conf', [
        'app_url'      => $conf->app_url,
        'root_path'    => $conf->root_path,
        'server_url'   => $conf->server_url ?? '',
        'action_param' => $conf->action_param ?? 'action'
    ]);

    // rola użytkownika
    $view->smarty->assign('role', $_SESSION['role'] ?? null);

    // parametry widoku
    foreach ($params as $k => $v) {
        $view->smarty->assign($k, $v);
    }

    // wiadomości systemowe
    $view->smarty->assign('messages', Messages::getAll());

    $view->smarty->display($template);
}
}
