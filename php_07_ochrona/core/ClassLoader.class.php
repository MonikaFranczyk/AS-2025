<?php

class ClassLoader {

    public static function register(): void {
        spl_autoload_register([self::class, 'autoload']);
    }

    public static function autoload(string $className): void {
        global $conf;

        $paths = [
            $conf->root_path . '/app/controllers/' . $className . '.class.php',
            $conf->root_path . '/app/forms/' . $className . '.class.php',
            $conf->root_path . '/app/results/' . $className . '.class.php',
            $conf->root_path . '/core/' . $className . '.class.php',
            $conf->root_path . '/core/' . $className . '.php',
            $conf->root_path . '/app/core/' . $className . '.php',
        ];

        foreach ($paths as $path) {
            if (file_exists($path)) {
                require_once $path;
                return;
            }
        }
    }
}


