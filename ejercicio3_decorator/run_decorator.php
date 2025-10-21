<?php
require_once 'Warrior.php';
require_once 'Mage.php';
require_once 'Sword.php';
require_once 'Staff.php';

echo "=== Demo Decorator (Armas para personajes) ===\n";

$warrior = new Warrior();
echo $warrior->getDescription() . " - Daño: " . $warrior->getDamage() . "\n";

$warriorWithSword = new Sword($warrior);
echo $warriorWithSword->getDescription() . " - Daño: " . $warriorWithSword->getDamage() . "\n";

$mage = new Mage();
$mageWithStaff = new Staff($mage);
echo $mageWithStaff->getDescription() . " - Daño: " . $mageWithStaff->getDamage() . "\n";

// Decorators encadenados
$warriorWithBoth = new Sword(new Staff($warrior));
echo $warriorWithBoth->getDescription() . " - Daño: " . $warriorWithBoth->getDamage() . "\n";
