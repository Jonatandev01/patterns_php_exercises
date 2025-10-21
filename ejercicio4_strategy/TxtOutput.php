<?php
require_once 'OutputStrategy.php';
class TxtOutput implements OutputStrategy {
    private $file;
    public function __construct($file = 'messages.txt') {
        $this->file = $file;
    }
    public function output(string $message) {
        file_put_contents($this->file, $message . PHP_EOL, FILE_APPEND);
        echo "[TXT] Mensaje guardado en " . $this->file . "\n";
    }
}
