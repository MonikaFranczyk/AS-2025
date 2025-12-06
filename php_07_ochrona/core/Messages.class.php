<?php
// core/Messages.class.php

class Messages {

    const SESSION_KEY = '_messages';

    public static function addInfo(string $text): void {
        self::add('info', $text);
    }

    public static function addError(string $text): void {
        self::add('error', $text);
    }

    public static function add(string $type, string $text): void {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION[self::SESSION_KEY][] = [
            'type' => $type,
            'text' => $text
        ];
    }

    public static function getAll(): array {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $messages = $_SESSION[self::SESSION_KEY] ?? [];
        // po odczycie czyścimy
        unset($_SESSION[self::SESSION_KEY]);
        return $messages;
    }

    public static function isEmpty(): bool {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        return empty($_SESSION[self::SESSION_KEY]);
    }
}


