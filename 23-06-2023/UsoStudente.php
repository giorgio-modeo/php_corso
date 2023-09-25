<?php
include 'Studente.php';
$studente = new Studente();
$studente->setNome('Mario');
$studente->setCognome('Rossi');
$studente->setEmail('mario.rossi@example.com');
$studente->setDataDiNascita(1, 1, 2000); // la data di nascita è il 1 gennaio 2000
$studente->addCorso('Matematica');
$studente->addVoto('Matematica', 25);
$studente->addCorso('Informatica');
$studente->addVoto('Informatica', 30);
$mediaEsami = $studente->getMediaCorsi();
$corsi = $studente->getCorsi();

var_dump($mediaEsami);
time_sleep_until(time());
var_dump($corsi);
time_sleep_until(time() );
var_dump($studente);