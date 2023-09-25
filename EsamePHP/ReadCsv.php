<?php
include 'ReadCsvInterface.php';
class ReadCsv implements ReadCsvInterface{
    public $file;
    public $line =[];

    public function __construct(string $filename){
        $this->file = fopen($filename , "r");
    }


    // Restituisce un array di array in cui ogni elemento è una riga del file CSV.
    // Ogni elemento è un array contenente i valori della colonna.

    function read() : array {
        //saltare la prima riga del csv
        fgetcsv($this->file);

        while(($data = fgetcsv($this->file))!== false) {
                $this->line[] = $data;
        }
        return $this->line;
    }

    function readUsers() : array {
        // Returns an array of User objects.
        // @returns array User[]
        return $this->read();
    }

}