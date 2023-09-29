<?php
    #number system
$num = 255; // decimal 
$num = 0b11111111; // binary
$num = 0377; // octal
$num = 0xff; // hexadecimal
    #mathematical action
$num1 = 234;
$num2 = 45.6;
$result = $num1+$num2;
echo "$result\n";

$num1 = 1234;
$num2 = 23.12;
$result = $num1-$num2;
echo "$result\n";

$num1 = 6789;
$num2 = 123;
$result = $num1/$num2;
echo "$result\n";

$num1 = 234;
$num2 = 3451;
$result = $num1*$num2;
echo "$result\n";

$num1 = 3452;
$num2 = 245;
$result = $num1%$num2;
echo "$result\n";

$num1 = 345;
$num2 = 12;
$result = $num1**$num2;
echo "$result\n";

$num = [12,45,37,24];
foreach($num as &$num1) {
    $EvenOdd = (($num1 % 2)==0) ? "$num1 even number \n":"$num1 odd number \n";
    echo $EvenOdd;
    /*
    if (($num1 % 2)==0){
        echo "$num1 even number \n";
    }else echo "$num1 odd number \n";
    */
}
    #increment operator
$a = 1;
echo ++$a; // 2
echo $a++; // 2
echo $a; // 3
$a = 3;
echo --$a; // 2
echo $a--; // 2
echo $a; // 1

    #convert decimal in another
$num1 = 121;
$num2 = decbin($num1);
echo "\n$num1 in binary is $num2\n";

$num1 = 34526;
$num2 = dechex($num1);
echo "\n$num1 in hexadecimal is $num2\n";

$num1 = 324;
$num2 = decoct($num1);
echo "\n$num1 in octal is $num2\n";

$num1 =  0.9438;
$num2 = sqrt(1 - $num1**2);
echo "\n$num2";


