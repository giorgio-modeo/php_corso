<?php
function hello(string $name): string
{
    
    if (date("H") >18)
    return "buona sera";
    elseif (date("H")> 12)
    return "buon pomegiggio";
    elseif (date("H")> 6)
    return "buon giorno";
    else 
    return "buona notte";
    
}
echo hello('Alberto' );

$voti = [30,24,28.10,30,27,20,24,27,18,24,25,26];
function media(array $voti)
{
    $sum = 0;
    foreach ($voti as $va){
        $sum += $va;
    }
    return $sum/sizeof($voti);

}

echo "\n".media($voti);




































