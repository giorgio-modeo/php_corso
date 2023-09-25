<?php
include 'WriteCsvInterface.php';
class WriteCsv implements WriteCsvInterface{
    public $filename;

    public function __construct(string $filename){
        $this->filename = fopen($filename,'w');
    }

    public function write(array $rows): bool{
            /** 

     * Returns true if the operation is successfull, false otherwise.
     */
        if (!$this->filename){
            return false;
        }
        else{
        foreach($rows as $row){

            fwrite($this->filename,$row);
        }
        return true;
        }
    }
        public function writeUsers(array $users): bool{

            if ($this->filename){
                
                foreach($users as $user){
                    fwrite($this->filename,$user);
                }
                return true;
            }
            else{
                return false;
            }
            
        }
        
}