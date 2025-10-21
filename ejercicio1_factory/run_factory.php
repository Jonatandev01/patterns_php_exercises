<?php
require_once 'CharacterFactory.php';

function demo($level) {
    $char = CharacterFactory::create($level);
    echo "Nivel: $level\n";
    echo "Personaje creado: " . $char->getName() . "\n";
    echo "Ataque: " . $char->attack() . "\n";
    echo "Velocidad: " . $char->speed() . "\n\n";
}

echo "=== Demo Factory ===\n";
demo('facil');
demo('dificil');
