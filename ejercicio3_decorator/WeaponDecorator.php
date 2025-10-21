<?php
require_once 'CharacterInterface.php';

abstract class WeaponDecorator implements CharacterInterface {
    protected $character;

    public function __construct(CharacterInterface $character) {
        $this->character = $character;
    }

    abstract public function getDescription(): string;
    abstract public function getDamage(): int;
}
