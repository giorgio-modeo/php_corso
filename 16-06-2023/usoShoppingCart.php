<?php
include 'ShoppingCart.php';
$carrello = new ShoppingCart();
$carrello ->addProdotto("latte",3);
var_dump($carrello);

$carrello ->addProdotto("carne",6);
var_dump($carrello);
$carrello ->removeProdotto("carne",6);
var_dump($carrello);

var_dump($carrello);
$carrello ->changeQuantity("latte",6);
var_dump($carrello);


$carrello ->removeAllProducts();
var_dump($carrello);

