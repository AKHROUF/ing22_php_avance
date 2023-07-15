<?php
require_once 'point.php';
require_once 'forme.php';

use DZ\Etm\Formation\Models\{Point, };

$p = new Point(5,5);
var_dump($p);
echo $p;
$p->afficher();

echo $p->__toString();