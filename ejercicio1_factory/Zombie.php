<?php
require_once 'Character.php';
class Zombie implements Character {
    public function attack(): string {
        return "Zombi ataca con mordisco lento pero poderoso!";
    }
    public function speed(): int {
        return 3;
    }
    public function getName(): string {
        return "Zombi";
    }
}
