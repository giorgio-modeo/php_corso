<?php
class accesso{
    protected $email ;
    protected $pwd;
    // protected $dato = [];

    public function setEmail(string $email):bool{
        $this-> email = $email;
        return true;
    }
    
    public function setPwd(string $pwd):bool{
        $this-> pwd = $pwd;
        return true;
    }

    public function getEmal() { return $this-> email; }
    
    // return matrix 
    public function getCredenziali() { 
        $file = file_get_contents("credenziali.csv");
        foreach (explode(PHP_EOL, $file) as $dati) {
            array_push($dato, explode(":", $dati));
        }
        return $dato;
    }
    
    public function matrixToArray($matrix){
        return array_column($matrix, 0);
    }
    
    public function login($indice){
        if ($indice !== false) {
            session_start();
            $_SESSION['user'] = true;
            header('Location: home.php');
        }else{
            header('Location: index.html');
        }
    }
}
// include 'login.php';
// $user = new accesso();
// $user->setEmail($_POST["email"]);
// $user->setPwd($_POST["pwd"]);
// $indice = array_search($user->getEmal(), $user->matrixToArray($user->getCredenziali()));
// $user-> login($indice);

?>
