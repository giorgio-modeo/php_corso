<?php
    $week = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
$start_time = microtime(true);
    for($i=0; $i<count($week); $i++) {
        printf("Il valore di week[%d] è %s \n", $i, $week[$i]); 
    }
$end_time = microtime(true);
$execution_time = ($end_time - $start_time) * 1000; // tempo di esecuzione in millisecondi
echo "\n".$execution_time."\n";

$start_time = microtime(true);
$weekleght= count($week);
for($i=0; $i<$weekleght; $i++) {
    printf("Il valore di week[%d] è %s \n", $i, $week[$i]);
}
$end_time = microtime(true);
$execution_time = ($end_time - $start_time) * 1000; // tempo di esecuzione in millisecondi
echo "\n".$execution_time."\n";


$start_time = microtime(true);
foreach($week as $value) {
    printf("%s\n", $value);
}
$end_time = microtime(true);
$execution_time = ($end_time - $start_time) * 1000; // tempo di esecuzione in millisecondi
echo "\n".$execution_time."\n";
$start_time = microtime(true);
$i = 0;
while ($i < 7) {
printf("Il valore di week[%d] è %s \n", $i, $week[$i]);
$i++;
}
$end_time = microtime(true);
$execution_time = ($end_time - $start_time) * 1000; // tempo di esecuzione in millisecondi
echo "\n".$execution_time."\n";

