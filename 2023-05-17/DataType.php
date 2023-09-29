<?php
    #variable
# variable starting with alphabetic characters or underscore
/*
$a
$_a1
$foo
*/
# variable can't start with numbers or special characters
/*
$1a 
$!_a 
$-a
*/
$a = 'hi';
echo "<p>",gettype($a),"</p>";
$a = 1;
echo "<p>",gettype($a),"</p>";
$a = [7,2,3];
echo "<p>",gettype($a),"</p>";

    #constant 
define ('VERSION', '1.0');
echo "<p>",VERSION,"</p>";
echo "<p>",constant('VERSION'),"</p>";
echo "<p>",constant('PHP_OS'),"</p>";

    #defoult constants
echo "<p> File : " , __FILE__ ,"</p>";
echo "<p> Directory: " , __DIR__ ,"</p>";
echo "<p> Linea : " , __LINE__ ,"</p>";

define('PHP_OS','prova');
echo "PHP_OS";

echo "<p>Max : " , PHP_INT_MAX . "</p>";
echo "<p>Min : " , PHP_INT_MIN . "</p>";
echo "<p>Byte : " , PHP_INT_SIZE . "</p>";