<?php
function hello(string $name): string
{
    
    if (date("H") >=18)
    return "buona sera ".$name;
    elseif (date("H")>= 12)
    return "buon pomegiggio ".$name;
    elseif (date("H")>= 6)
    return "buon giorno ".$name;
    else 
    return "buona notte ".$name;
    
}
echo hello('Alberto' );

$voti = [30,24,28.10,30,27,20,24,27,18,24,25,26];
function media(array $voti):float 
{
    $sum = 0;
    foreach ($voti as $va){
        $sum += $va;
    }
    return $sum/sizeof($voti);

}

echo "\n".media($voti);

function fizzbuzz(int $n1):string
{
    
    if ($n1 % 15 ==0)
    return "flizzbuzz";
    elseif ($n1 % 3 == 0)
    return "fizz";
    elseif ($n1 %5 == 0)
    return "buzz";
    else 
    return "non e divisibile ne per 3 ne per 5";
}

echo "\n".fizzbuzz(9);
echo "\n".fizzbuzz(10);
echo "\n".fizzbuzz(15);
echo "\n".fizzbuzz(4);
for ($i=1; $i < 101; $i++) { 
    if (fizzbuzz($i)=="flizzbuzz")
        echo "\n".fizzbuzz($i);
    else 
    echo "\n$i ".fizzbuzz($i);
}