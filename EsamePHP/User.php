<?php
class User {
    public $nome;
    public $cognome;
    public $email

    function __construct($nome, $cognome, $email){
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->email = $email;
    }
}