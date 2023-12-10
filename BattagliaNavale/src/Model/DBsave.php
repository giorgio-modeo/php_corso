<?php
header("Access-Control-Allow-Origin: *");

$dsn = 'mysql:dbname=battleship;host=127.0.0.1';
$user = 'root';
$password = '';
// var_dump($_POST['nome']);

try {
  $pdo = new PDO($dsn, $user, $password);

} catch (PDOException $e) {
  printf("Connection failed: %s \n", $e->getMessage());
  exit(1);
}
   
   $nome = $_POST['nome'];
   $pswd = $_POST['pswd'];
   
   try {
      // login query
      $login = 'SELECT id_user FROM player WHERE pname = :nome and pswd = :pswd';
      $query = $pdo->prepare($login);
      $query->bindParam(':nome', $nome, PDO::PARAM_STR);
      $query->bindParam(':pswd', $pswd, PDO::PARAM_STR);
      $response = $query->execute();
      $numRows = $query->rowCount();
      if ($numRows > 0) {
         $_SESSION['user'] = true;
         setcookie("nome",$nome , time() + 3600);
         $_COOKIE['nome'] = $nome;
         echo('login successful');
      } else {
         echo('login failed');
      }
   } catch (PDOException $e) {
      echo('query failed: ' . $e->getMessage());
      exit(1);
   }
