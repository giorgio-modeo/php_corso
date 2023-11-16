<?php 
declare(strict_types=1);
namespace App\Controller;
class Ship{
    public $tipo;
    public $lunghezza;
    public $affondata = false;
    public $coordinate = [];

    public function __construct($tipo, $lunghezza, $coordinate){
        $this->tipo = $tipo;
        $this->lunghezza = $lunghezza;
        $this->coordinate = $coordinate;
    }  

    public function colpito($colpo){
        if ($this->affondata === true)return "già affondata";

        if(in_array($colpo, $this->coordinate)){

            unset($this->coordinate[1]);
            return $this->coordinate[$colpo];
            
            if (empty($this->coordinate)){
                $this->affondata = true;
                return "affondata";
            }
            return "colpito";
        }
        return "acqua";
    }
    // public function rimuoviCoordinate($colpo){
    //     unset($this->coordinate[$colpo]);
    //     return true;
    // }
}
?>
 