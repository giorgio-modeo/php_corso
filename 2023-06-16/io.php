<?php
include 'Studente.php';
$andrea = new Studente();
$andrea->nome='giorgio';
$andrea->cognome='modeo';
$andrea->email='giorgio.modeo@gmail.com';
$andrea->dataDiNascita='08-12-2002';
$andrea->addCorso("PHP Programming");
$andrea->addVotoEsame("PHP Programming",26);
var_dump($andrea);

