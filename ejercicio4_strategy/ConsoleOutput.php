<?php
require_once 'OutputStrategy.php';
class ConsoleOutput implements OutputStrategy {
    public function output(string $message) {
        echo "[CONSOLE] " . $message . "\n";
    }
}
