<?php
// Interfaz que representa archivos 'viejos' (Windows 7)
interface Windows7FileInterface {
    public function getLegacyContent(): string;
    public function getFilename(): string;
}
