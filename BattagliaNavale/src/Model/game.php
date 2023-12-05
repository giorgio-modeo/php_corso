<?php
    declare(strict_types=1);
    header("Access-Control-Allow-Origin: *");
    require_once __DIR__ . '/../Model/Ship.php';
    echo('send successful');

    var_dump($_POST);
    echo('<br>');
    var_dump($_POST['navi']);
    echo('<br>');
    echo('<br>');

    // print only value of ships  ["navi"]=> string(93) "[["A0","A1","A2","A3"],["A5","A6","A7"],["A9","B9","C9"],["D8","D7"],["D5","D4"],["D2","D1"]]" }
    $navi = json_decode($_POST['navi']);
var_dump($navi);
echo('<br>');
echo('<br>');
var_dump($navi[0]);
echo('<br>');
echo('<br>');
var_dump($navi[0][0]);
echo('<br>');



    
    