<?php
$email = $_POST["email"];
$pwd = $_POST["pwd"];

$dati = unserialize(file_get_contents("credenziali.csv"));


if ($email == $dati["email"] && $pwd == $dati["password"]) {
    echo "<script> alert('ciao')</script>";
    session_start();
    $_SESSION['user'] = $email;
    header("Location: home.php");
    exit;
}else {
    echo "<script> alert('non ciaoS')</script>";
header("Location: index.html");
}
?>
