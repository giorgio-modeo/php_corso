<?php
function sum(array $items): int
{
$sum = 0;
foreach ($items as $value) {
$sum += $value;
}
return $sum;
}
$sum = 10;
$numbers = [3, 12, 4];
printf("Sum: %d\n", sum($numbers)); // Sum: 19
printf("Sum: %d\n", $sum); // Sum: 10

function sum2(array $items): int
{
global $sum;
foreach ($items as $value) {
$sum += $value;
}
return $sum;
}
$sum = 10;
$numbers = [3, 12, 4];
printf("Sum: %d\n", sum2($numbers)); // Sum: 29
printf("Sum: %d\n", $sum); // Sum: 29