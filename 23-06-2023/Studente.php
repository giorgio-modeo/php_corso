<?php
include 'CorsiInterface.php';
class Studente implements CorsiInterface{
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
    public function setCognome(string $cognome): bool
    {
        $this->cognome = $cognome;
        return true;
    }
    
    public function setEmail(string $email): bool
    {
        $this->email = $email;
        return true;
    }
    public function setDataDiNascita(int $anno, int $mese, int $giorno): bool
    {
        $this->dataDiNascita = $anno . '-' . $mese . '-' . $giorno;
        return true;    
    }

    

    public function getNome(string $nome): string
    {
        return $this->nome;
    }

    public function getCognome(string $cognome): string
    {
        return $this->cognome;
    }


    
    public function getCorsi(): array
    {
        return $this->corsi;
    }

    public function addCorso(string $corso): bool
    {
        if (!isset($this->corsi[$corso])) {
            $this->corsi[$corso] = 0;
            return true;
        }else{
            return false;
        }

    }

    public function addVoto(string $corso, int $voto): bool
    {
        if (isset($this->corsi[$corso])) {
            $this->corsi[$corso] = $voto;
            return true;
        }
        else {
            return false;
        }
    }

    public function getMediaCorsi(): float
    {
        if (empty($this->corsi)) {
            return null;
        }
        return array_sum($this->corsi) / count($this->corsi);
    }
}
