<?php
    declare(string_types=1);
    namespace App\Controller;
    class Player{
        protected $nome;
        protected $mosse = [];

        public function __construct($nome){
            $this->nome = $nome;
        }
        
    }