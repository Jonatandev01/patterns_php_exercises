<?php
require_once 'Character.php';
class Skeleton implements Character {
    public function attack(): string {
        return "Esqueleto lanza una flecha ósea!";
    }
    public function speed(): int {
        return 8;
    }
    public function getName(): string {
        return "Esqueleto";
    }
}
