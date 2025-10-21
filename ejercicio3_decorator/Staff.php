<?php
require_once 'WeaponDecorator.php';
class Staff extends WeaponDecorator {
    public function getDescription(): string {
        return $this->character->getDescription() . ' + Bastón';
    }
    public function getDamage(): int {
        return $this->character->getDamage() + 4;
    }
}
