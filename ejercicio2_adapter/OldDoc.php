<?php
require_once 'Windows7FileInterface.php';

class OldDoc implements Windows7FileInterface {
    private $filename;
    private $content;

    public function __construct($filename, $content) {
        $this->filename = $filename;
        $this->content = $content;
    }

    public function getLegacyContent(): string {
        // Simula formato viejo (por ejemplo, texto con marcas antiguas)
        return "[OLD_FORMAT]" . $this->content;
    }

    public function getFilename(): string {
        return $this->filename;
    }
}
