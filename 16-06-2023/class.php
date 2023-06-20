<?php
class Studente{
    public string $nome;
    public string $cognome;

    public function hello(){
        return "hello";
    }
    public function getNomeCompleto (): string{
        return $this->nome . ' ' . $this->cognome;
    }
}


$alunno1 = new Studente;
$alunno2 = new STUDENTE;
$alunno3 = new StUdEnTe;
$alunno4 = new STUdente;
$alunno1->nome = 'mario';
$alunno1->cognome = 'rossi';
echo $alunno1->hello();
echo $alunno1->getNomeCompleto();


class Punto {
    //defoult public
    public $x;
    private $y;
    protected $z;
    }
    $a = new Punto;
    $a->x = 1;
    // $a->y = 2; // Fatal error: cannot access private property
    // $a->z = 1; // Fatal error: cannot access protected property

class Studente2
{
    private PDO $pdo; // PDO è l'oggetto per collegarsi al database
    public function __construct () {
        $this->pdo = new PDO("mysql:host=localhost;dbname=farm", 'root', '');
    }
    
    public function getEmail(): string {
        $sth = $this->pdo->query('SELECT * from job');
        return $sth->fetch();
    }
}
$alunno = new Studente2; // viene eseguito __construct()
echo $alunno->getEmail();
?>