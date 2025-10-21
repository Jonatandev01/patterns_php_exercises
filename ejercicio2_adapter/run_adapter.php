<?php
require_once 'OldDoc.php';
require_once 'Adapter.php';
require_once 'Windows10System.php';

echo "=== Demo Adapter (Compatibilidad Windows7 -> Windows10) ===\n";

$old = new OldDoc('informe_old.doc', 'Contenido con formato antiguo de Word (versión 2007)');
$adapter = new Adapter($old);

$win10 = new Windows10System();
$win10->openFile($adapter);
