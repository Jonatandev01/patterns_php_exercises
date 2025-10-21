<?php
require_once 'WeaponDecorator.php';
class Sword extends WeaponDecorator {
    public function getDescription(): string {
        return $this->character->getDescription() . ' + Espada';
    }
    public function getDamage(): int {
        return $this->character->getDamage() + 5;
    }
}
