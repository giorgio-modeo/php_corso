<?php
class Foglio {
    private $file;
    private $mediaFile;

    public function __construct($fr, $fw)
    {
        $this->file = fopen($fr, "r");
        $this->mediaFile = fopen($fw, "w");
    }

    public function leggiCsv($fr)
    {
        fgetcsv($this->file);
        fclose($this->file);
    }

    public function media()
    {
        while (($data = fgetcsv($this->file,null,';')) !== false) {
            $media = array_sum($data) / count($data);
            fwrite($this->mediaFile, number_format($media, 4) . PHP_EOL);
        }
        fclose($this->file);
        fclose($this->mediaFile);
    }

    public function mediaTot()
    {
        $sum = 0;
        $count = 0;

        foreach ($this->file as $number) {
            foreach ($this->file as $number) {

                $sum += $number;
                $count++;
            }
        return $sum / $count;
        }
    //create a function that returns the sum of all numbers in the file
        function getSum() {
            $sum = 0;
            foreach ($this->file as $number) {
                $sum += $number;
            }
            return $sum;
        } 
        // 
        function getAverage() {
            
        }
    }

}