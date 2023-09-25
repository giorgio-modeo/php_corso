<?php
include 'ReadCsv.php';
$file = new ReadCsv('users.csv');
var_dump($file->read());
var_dump($file->readUsers());

?>
<?php
include 'WriteCvs.php';
$file = new WriteCsv('users2.csv');
$array = ['nome1','cogniome1','email@1.com'];
$array2 = ['nome2','cogniome2','email@2.com'];
$file->write($array);
var_dump($file->writeUsers($array2));


