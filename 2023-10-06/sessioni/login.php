<?php
$email = $_POST["email"];
$pwd = $_POST["pwd"];

$credenziali = explode(PHP_EOL, file_get_contents("credenziali.csv"));
$dato = [];
foreach ($credenziali as $dati) {
    array_push($dato, explode(":", $dati));
}

$indirizzi_email = array_column($dato, 0);

$indice = array_search($email, $indirizzi_email);
if ($indice !== false) {
    session_start();
    $_SESSION['user'] = true;
    header('Location: home.php');
}else{
    header('Location: index.html');

}

?>
