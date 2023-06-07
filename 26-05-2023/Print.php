<?php
$r = 2;
$area = M_PI * $r * $r;
printf("A circle of radius %d has area %.4f \n", $r, $area);

$name = 'Alberto' ;
printf("Hello %s \n", $name);

$name = 'Alberto' ;
$hello = sprintf("Hello %s" , $name);
printf("%s\n", $hello); // equivalent to echo $hello."\n";

$number=32;
$binary = sprintf("32 in binary is %b",$number);
printf($binary);
$octal = sprintf("\n32 in octal is %o",$number);
printf($octal);
$hexadecimal = sprintf("\n32 in hexadecimal is %x",$number);
printf($hexadecimal);
