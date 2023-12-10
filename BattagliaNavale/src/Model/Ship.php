<?php 
declare(strict_types=1);
namespace App\Model;
class Ship{
    public $tipo;
    public $lunghezza;
    public $affondata = false;
    public $coordinate = [];

    public function __construct($tipo, $lunghezza){
        $this->tipo = $tipo;
        $this->lunghezza = $lunghezza;
    }

    public function colpito($colpo){
        if ($this->affondata === true) {
            return "già affondata";
        }

        if(in_array($colpo, $this->coordinate)){
            $this->rimuoviCoordinate($colpo);
            if(count($this->coordinate) == 0){
                $this->setAffondata();
                return 'affondata';
            }
            return 'colpito';
        }
        return 'acqua';
        
       
    }

    public function rimuoviCoordinate($colpo){
        unset($this->coordinate[array_search($colpo, $this->coordinate)]);
    }
    public function setAffondata(){
        $this->affondata = true;
    }

    

    public function impostaPosizione($coordinate) {
        if ($this->verificaVicinanza($coordinate)) {
            $this->coordinate = $coordinate;
            return true;
        } else {
            return false;
        }
    }

    public function verificaVicinanza($coordinate): bool {
        $lunghezza = count($coordinate);
        $lettere = [];
        $numeri = [];
            // Controllo per coordinate duplicate
            if (count($coordinate) > count(array_unique($coordinate))) {
                return false;
            }

        foreach ($coordinate as $c) {
            $lettere[] = substr($c, 0, 1);
            $numeri[] = substr($c, 1, 1);
        }
        $lettere = array_unique($lettere);
        $numeri = array_unique($numeri);
        if (count($lettere) == 1) {
            sort($numeri);
            for ($i = 0; $i < count($numeri) - 1; $i++) {
                if ($numeri[$i] + 1 != $numeri[$i + 1]) {
                    return false;
                }
            }
            return true;
        } else if (count($numeri) == 1) {
            sort($lettere);
            for ($i = 0; $i < count($lettere) - 1; $i++) {
                if (ord($lettere[$i]) + 1 != ord($lettere[$i + 1])) {
                    return false;
                }
            }
            return true;
        }
        return false;
    }
}

 