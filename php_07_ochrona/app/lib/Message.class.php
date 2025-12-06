<?php

class Messages {
    private array $messages = [];

    /**
     * Dodaje nową wiadomość
     * @param string $msg
     */
    public function add(string $msg): void {
        $this->messages[] = $msg;
    }

    /**
     * Sprawdza czy są jakieś wiadomości
     * @return bool
     */
    public function isEmpty(): bool {
        return empty($this->messages);
    }

    /**
     * Zwraca wszystkie wiadomości
     * @return array
     */
    public function getMessages(): array {
        return $this->messages;
    }

    /**
     * Czyści wszystkie wiadomości
     */
    public function clear(): void {
        $this->messages = [];
    }
}