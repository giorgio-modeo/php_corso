<?php
if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === FALSE) {
    printf(" email not valid ");
    exit;
}
if(strlen($_POST["pwd"]) < 8) {
    printf("password must be at least 8 characters");
    exit;
}
printf("registrazione avvenuta con successo");

