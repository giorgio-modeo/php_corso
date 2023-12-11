<?php

namespace App\Model;
require_once './DBgame.php';
require './Ship.php';
header("Access-Control-Allow-Origin: *");

    $navi = json_decode($_POST['navi']);
    $naviCreate=[];


    for ($i = 0; $i < count($navi); $i++) {
        try {
            if ($i == 0) {
                $ship = new Ship("portaerei", 4);
            } elseif ($i == 1 || $i == 2) {
                $ship = new Ship("sottomarino", 3);
            } else{
                $ship = new Ship("cacciatorpediniere", 2);
            }
            if($ship -> impostaPosizione($navi[$i])){
                $naviCreate[] = $ship;
            }else{

        }
        } catch (\Throwable $th) {
            throw $th;
        }
        
    }
    if(count($naviCreate) == 6){
        $dbGame = new DBgame();
        
        $dbGame -> createGame();

        echo"all ships positioned";
    }
    
    else{
        echo"le sezioni delle navi non possono sovrapporsi o essere lontahe tra loro";
    }
