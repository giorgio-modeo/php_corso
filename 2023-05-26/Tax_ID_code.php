<?php
$cf= 'MLLMRC99A01F205K';


$nc=substr($cf,0,6);
$yy=substr($cf,6,2);
$m=substr($cf,8,1);
$g=substr($cf,9,2);
$l=substr($cf,15,1);
echo $l."\n";

printf($cf);
printf("\n".$nc . $yy . $m . $g);

$flag1= is_string($nc);
$flag2= is_numeric($yy);
$flag3= is_string($m);
$flag4= is_numeric($g);
$flag5= is_string($l);
$flag6=strlen($cf);


echo ($flag1 && $flag2 && $flag3 && $flag4 && $flag5 && $flag6 ==16) ? "\n$cf è valido": "\n$cf non è valido";

$valDisp = array("0" => "1", "1" => "0", "2" => "5", "3" => "7", "4" => "9", "5" => "13", "6" => "15", "7" => "17", "8" => "19", "9" => "21", "A" => "1", "B" => "0", "C" => "5", "D" => "7", "E" => "9", "F" => "13", "G" => "15", "H" => "17", "I" => "19", "J" => "21", "K" => "2", "L" => "4", "M" => "18", "N" => "20", "O" => "11", "P" => "3", "Q" => "6", "R" => "8", "S" => "12", "T" => "14", "U" => "16", "V" => "10", "W" => "22", "X" => "25", "Y" => "24", "Z" => "23");

$valPar = array("0" => "0", "1" => "1", "2" => "2", "3" => "3", "4" => "4", "5" => "5", "6" => "6", "7" => "7", "8" => "8", "9" => "9", "A" => "0", "B" => "1", "C" => "2", "D" => "3", "E" => "4", "F" => "5", "G" => "6", "H" => "7", "I" => "8", "J" => "9", "K" => "10", "L" => "11", "M" => "12", "N" => "13", "O" => "14", "P" => "15", "Q" => "16", "R" => "17", "S" => "18", "T" => "19", "U" => "20", "V" => "21", "W" => "22", "X" => "23", "Y" => "24", "Z" => "25");

$valResto = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
  
$spari= $valDisp[$cf[0]]+$valDisp[$cf[2]]+$valDisp[$cf[4]]+$valDisp[$cf[6]]+$valDisp[$cf[8]]+$valDisp[$cf[10]]+$valDisp[$cf[12]]+$valDisp[$cf[14]];0
$sdispari= $valPar[$cf[1]]+$valPar[$cf[3]]+$valPar[$cf[5]]+$valPar[$cf[7]]+$valPar[$cf[9]]+$valPar[$cf[11]]+$valPar[$cf[13]];
$stot=($spari+$sdispari)%26;
print ("\n".$stot);




