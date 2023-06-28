<?php
class Studente implements CorsiInterface,CorsiInterface{
    public $nome;
    public $cognome;
    public $email;
    public $dataDiNascita;
    protected $corsi = [];


    public function setNome(string $nome): bool
    {
        $this->nome = $nome;
        return true;
    }
    
    public function getNome(string $nome): string
    {
        return $this->nome;
    }
    public function setCognome(string $cognome): bool
    {
        $this->cognome = $cognome;
        return true;
    }

    public function getCognome(string $cognome): string
    {
        return $this->cognome;
    }




    public function addCorso(string $corso): bool
    {
        if (!isset($this->corsi[$corso])) {
            $this->corsi[$corso] = 0;
        }
    }

    public function addVotoEsame(string $corso, int $voto): bool
    {
        if (isset($this->corsi[$corso])) {
            $this->corsi[$corso] = $voto;
        }
    }

    public function getMediaEsami(): ?float
    {
        if (empty($this->corsi)) {
            return null;
        }
        return array_sum($this->corsi) / count($this->corsi);
    }
}
