<?php
require_once 'CharacterInterface.php';
class Warrior implements CharacterInterface {
    public function getDescription(): string {
        return 'Guerrero';
    }
    public function getDamage(): int {
        return 10;
    }
}
