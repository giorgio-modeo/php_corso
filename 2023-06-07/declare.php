<?php
//declare(strict_types=1);

function sum(int $a, int $b): int {
    return $a + $b;
};
echo sum('1', 1); // 2

function sum2(int $a, int $b): int {
    return $a + $b;
};
//echo sum2('1', 1); // TypeError

function hello(string $name, string $greeting = 'Hello'): string
{
return sprintf("%s %s", $greeting , $name);
}
echo hello('Alberto' ); // 'Hello Alberto'
echo hello('Alberto' , 'Buongiorno' ); // 'Buongiorno Alberto'
echo hello('Alberto' , 'Hello'); // 'Hello Alberto'
echo hello(); // Fatal error: Too few arguments

