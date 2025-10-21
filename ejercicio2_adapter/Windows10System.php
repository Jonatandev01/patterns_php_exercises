<?php
// Sistema moderno que espera archivos con método getContent() y getName()
interface ModernFileInterface {
    public function getContent(): string;
    public function getName(): string;
}

class Windows10System {
    public function openFile(ModernFileInterface $file) {
        echo "Abriendo '" . $file->getName() . "' en Windows 10...\n";
        echo "Contenido:\n" . $file->getContent() . "\n";
    }
}
