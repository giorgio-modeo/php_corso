<?php
$a = 1;
$b = '1';
if ($a > $b) {
printf("%d è maggiore di %d \n", $a, $b);
}
if ($a > $b) {
    printf("%d è maggiore di %d \n", $a, $b);
    } else {
    printf("%d è minore o uguale di %d \n", $a, $b);
    }

if ($a == $b) {
    echo "Valori uguali \n";
}
if ($a === $b) {
    echo "Valori e tipi uguali \n";
}

$a = 'ciao';
$b = 0;
if ($a == $b) {
echo "Ma sono uguali? \n";
}
if ($a !== $b) {
echo "Ok, non sono uguali \n";
}
