<?php
$ruolo = $utente ?? 'ospite';
// equivale a
$ruolo = isset($utente) ? $utente : 'ospite';

echo 1 <=> 1; // 0
echo 3 <=> 4; // -1
echo 4 <=> 3; // 1
// confronto tra stringhe
echo "x" <=> "x"; // 0
echo "x" <=> "y"; // -1
echo "y" <=> "x"; // 1

$day = 'Mon';
switch ($day) {
    case 'Mon':
        echo 'Lunedì';
    break;
    case 'Tue':
    echo 'Martedì';
    break;
    default:
    echo 'Ne Lunedì ne Martedì';
};

$food = 'cake';
$return_value = match ($food) {
'apple' => 'This food is an apple',
'bar' => 'This food is a bar',
'cake' => 'This food is a cake',
};
printf("%s\n", $return_value); # This food is a cake