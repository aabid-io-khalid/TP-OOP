<?php


trait LoggerTrait {
    public function logAction(string $message): void {
        echo "log " . $message;
    }
}