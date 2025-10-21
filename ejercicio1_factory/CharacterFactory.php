<?php
require_once 'Skeleton.php';
require_once 'Zombie.php';

class CharacterFactory {
    public static function create(string $level): Character {
        $levelLower = strtolower($level);
        if ($levelLower === 'facil' || $levelLower === 'fácil' || $levelLower === 'easy') {
            return new Skeleton();
        } elseif ($levelLower === 'dificil' || $levelLower === 'difícil' || $levelLower === 'hard') {
            return new Zombie();
        } else {
            // Por defecto: Skeleton
            return new Skeleton();
        }
    }
}
