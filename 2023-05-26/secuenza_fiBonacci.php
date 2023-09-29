<?php
$phi2 = 0;
$phi1 = 1;
for ($i=0; $i <= 80 ; $i++) { 
    $phi3 = $phi1 + $phi2;
    $phi1 = $phi2;
    $phi2 = $phi3;
    echo ($phi3." ");
}
echo ("\n\n");
$phi2 = 0;
$phi1 = 1;
for ($i=0; $i <= 100 ; $i++) { 
    $phi3 = bcadd($phi1 , $phi2);
    $phi1 = $phi2;
    $phi2 = $phi3;
    echo ($phi3." ");
}

echo ("\n\n");
$phi2 = 0;
$phi1 = 1;
$i = 0;
while ($i <= 80 ) {
    $phi3 = bcadd($phi1 , $phi2);
    $phi1 = $phi2;
    $phi2 = $phi3;
    echo ($phi3." ");
    $i++;
}
echo ("\n\n");
$phi2 = 0;
$phi1 = 1;
$i = 0;
do {
    $phi3 = bcadd($phi1 , $phi2);
    $phi1 = $phi2;
    $phi2 = $phi3;
    echo ($phi3." ");
    $i++;
} while ($i <= 80 );


//