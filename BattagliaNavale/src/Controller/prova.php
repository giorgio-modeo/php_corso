<?php
 echo(false);
include 'ship.php';
$a = new Ship();
$a->coordinate = ["a1","a2", "a3"];
$registro =[];
array_push($registro,$_POST['coordinata']);
var_dump(end($registro));


if(in_array(end($registro) ,$a->coordinate)) {
    $index = array_search($_POST['coordinata'] ,$a->coordinate);
    $a->colpito($index);
    var_dump($a->coordinate);

}
else {
    echo(false);
}