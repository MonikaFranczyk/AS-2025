<?php
// core/Config.class.php

class Config {
    public string $root_path;
    public string $server_name;
    public string $server_url;
    public string $app_root;
    public string $app_url;
    public string $action_param = 'action';

    public string $templates_dir;
    public string $templates_c_dir;
    public string $smarty_cache_dir;
    public string $smarty_config_dir;

    public function __construct() {
        $this->root_path = dirname(__DIR__);
        $this->server_name = $_SERVER['HTTP_HOST'] ?? 'localhost:8080';
        $this->server_url  = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https://' : 'http://') . $this->server_name;
        $this->app_root    = dirname($_SERVER['SCRIPT_NAME']);
        $this->app_url     = rtrim($this->server_url . $this->app_root, '/');

        $this->templates_dir     = $this->root_path . '/templates';
        $this->templates_c_dir   = $this->root_path . '/templates_c';
        $this->smarty_cache_dir  = $this->root_path . '/smarty_cache';
        $this->smarty_config_dir = $this->root_path . '/smarty_configs';
    }
}



