<?php
require_once 'CharacterInterface.php';
class Mage implements CharacterInterface {
    public function getDescription(): string {
        return 'Mago';
    }
    public function getDamage(): int {
        return 6;
    }
}
