<?php 

// include "classes/User.php"; 
include_once "classes/UserPrime.php"; 
// include "classes/Product.php"; 
include_once "classes/ProductFood.php"; 

$pippo = new User("pippo", "magno", "pippo.magno@html.co", "3334445566", "32", 250);
var_dump($pippo);

$pluto = new UserPrime("pluto", "magno", "pluto.magno@html.co", "4445556677", "40", 300);
$pluto->setCodice();
var_dump($pluto);

$paperino = new UserPrime("Paperino", "Duck", "paperino.duck@html.co", "2221113344", "20", 150);
$paperino->setCodice();
var_dump($paperino);

$lavatrice = new Product("lavatrice2000", "100", "lavatrice grande");
var_dump($lavatrice);

$sushi = new ProductFood("sushi", "20", "sushi rolls");
$sushi->setFoodType("not vegan");
var_dump($sushi);

//faccio comprare a pluto una lavatrice e un sushi
$pluto->addProduct($lavatrice);
$pluto->addProduct($sushi);
var_dump($pluto);

//faccio comprare a paperino due sushi
$paperino->addProduct($sushi);
$paperino->addProduct($sushi);
var_dump($paperino);

$paperino->removeProduct($sushi);
var_dump($paperino);

?>