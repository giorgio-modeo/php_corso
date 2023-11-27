<?php
declare(strict_types=1);
namespace App\Controller;
include 'Ship.php';
$ship = new Ship('Patrol Boat', 2);
$ship->impostaPosizione(['a1','a2']);
var_dump($ship->coordinate );
$result = $ship->colpito('a1');
echo("console.log($result)");
?>