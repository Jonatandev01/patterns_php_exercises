<?php
require_once 'Windows7FileInterface.php';
require_once 'Windows10System.php';

// Adapter que convierte Windows7FileInterface a ModernFileInterface
class Adapter implements ModernFileInterface {
    private $legacyFile;

    public function __construct(Windows7FileInterface $legacyFile) {
        $this->legacyFile = $legacyFile;
    }

    public function getContent(): string {
        $legacy = $this->legacyFile->getLegacyContent();
        // Proceso de adaptación: quitar etiqueta [OLD_FORMAT] y convertir a texto moderno
        return str_replace('[OLD_FORMAT]', '', $legacy);
    }

    public function getName(): string {
        return $this->legacyFile->getFilename();
    }
}
