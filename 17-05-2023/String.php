<?php
    #string concatenation
$name = 'Giorgio';
$surname = 'Modeo';
$fullname = $name . ' ' . $surname;
echo $fullname; // Giorgio Modeo

$name = 'Giorgio';
$name .= 'Modeo';
echo $name; // Giorgio Modeo

    #string function
$text = 'eXamle teXt';
echo strlen($text) . "\n"; // 16
echo strpos($text, 'text') . "\n"; // 11
echo substr($text, 11, 5) . "\n"; // teXt
echo strtoupper($text) . "\n"; // EXAMPLE TEXT
echo strtolower($text) . "\n"; // example text

$text = 'Nel mezzo del cammin di nostra vita';
$text2 = str_replace(' ','',lcfirst(ucwords($text)));
echo $text2;