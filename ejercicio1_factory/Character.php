<?php
interface Character {
    public function attack(): string;
    public function speed(): int;
    public function getName(): string;
}
