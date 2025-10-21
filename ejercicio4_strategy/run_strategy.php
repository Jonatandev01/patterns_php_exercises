<?php
require_once 'ConsoleOutput.php';
require_once 'JsonOutput.php';
require_once 'TxtOutput.php';
require_once 'MessagePrinter.php';

echo "=== Demo Strategy (Múltiples salidas) ===\n";

$console = new ConsoleOutput();
$json = new JsonOutput();
$txt = new TxtOutput(__DIR__ . '/out_messages.txt');

$printer = new MessagePrinter($console);
$printer->print('Hola desde consola');

$printer->setStrategy($json);
$printer->print('Hola en JSON');

$printer->setStrategy($txt);
$printer->print('Hola guardado en TXT');
