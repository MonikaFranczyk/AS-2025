<?php
// config.php – globalna konfiguracja, tworzy obiekt $conf

require_once __DIR__ . '/core/Config.class.php';

$conf = new Config();
$conf->root_path = __DIR__;
$conf->server_name = $_SERVER['HTTP_HOST'] ?? 'localhost:8080';

$conf->server_url  = (
    (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
        ? 'https://'
        : 'http://'
) . $conf->server_name;

$conf->app_root = dirname($_SERVER['SCRIPT_NAME']);
$conf->app_root = str_replace('\\', '/', $conf->app_root);
$conf->app_root = rtrim($conf->app_root, '/');

if ($conf->app_root === '/') {
    $conf->app_root = '';
}

$conf->app_url = rtrim($conf->server_url . $conf->app_root, '/');

$conf->action_param = 'action';

$conf->templates_dir      = $conf->root_path . '/app/views/templates';
$conf->templates_c_dir    = $conf->root_path . '/templates_c';
$conf->smarty_cache_dir   = $conf->root_path . '/smarty_cache';
$conf->smarty_config_dir  = $conf->root_path . '/smarty_configs';
