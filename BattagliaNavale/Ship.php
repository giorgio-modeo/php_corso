<?php 
class ship{
    public $affondata = false;
    public $coordinate = [];

    public function colpito($x){
        unset($this->coordinate[$x]);        
    }
}

