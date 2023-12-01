<?php
$dsn = 'mysql:dbname=battleship;host=127.0.0.1' ;
$user = 'root';
$password = '';
try {
   $pdo = new PDO($dsn, $user, $password);
    echo('connection established');
} catch (PDOException $e) {
   printf("Connection failed: %s \n", $e->getMessage());
   exit(1);
}
$email=$_POST['email'];
$pswd=$_POST['pswd'];
echo("console.log("+$email+")");
echo($pswd);

