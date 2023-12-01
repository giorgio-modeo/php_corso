<?php
header("Access-Control-Allow-Origin: *");

$dsn = 'mysql:dbname=battleship;host=127.0.0.1';
$user = 'root';
$password = '';

try {
  $pdo = new PDO($dsn, $user, $password);
  //echo('connection established');
} catch (PDOException $e) {
  printf("Connection failed: %s \n", $e->getMessage());
  exit(1);
}

$pswd = $_POST['pswd'];
$nome = $_POST['nome'];

// var_dump($_POST);

try {
   // login query
   $login = 'SELECT * FROM player WHERE pname = :nome and pswd = :pswd';
   $query = $pdo->prepare($login);
   $query->bindParam(':nome', $nome, PDO::PARAM_STR);
   $query->bindParam(':pswd', $pswd, PDO::PARAM_STR);
   $query->execute();
   
   
   // Check if the query returned any rows
   $numRows = $query->rowCount();

   if ($numRows > 0) {
      //set session start on client
      session_start();
      $_SESSION['nome'] = $nome;

      echo('login successful');
   } else {
      echo('login failed');
   }

} catch (PDOException $e) {
   echo('query failed: ' . $e->getMessage());
   exit(1);
}
