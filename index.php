<?php 

include "classes/User.php"; 
include "classes/UserPrime.php"; 
include "classes/Product.php"; 
include "classes/ProductFood.php"; 

$pippo = new User("marco", "magno", "marco.magno@html.co", "3334445566", "32", "250");
var_dump($pippo);

$pluto = new UserPrime("pluto", "magno", "pluto.magno@html.co", "4445556677", "40", "300");
$pluto->setCodice();
var_dump($pluto);

$paperino = new UserPrime("Paperino", "Duck", "paperino.duck@html.co", "2221113344", "20", "150");
$paperino->setCodice();
var_dump($paperino);

$lavatrice = new Product("lavatrice2000", "100", "lavatrice grande", "20");
var_dump($lavatrice);

$sushi = new ProductFood("sushi", "20", "sushi rolls", "10");
$sushi->setFoodType("not vegan");
var_dump($sushi);

//faccio comprare a pluto una lavatrice e un sushi
$pluto->carrello[] = $lavatrice;
$pluto->setNewCredit(intval($lavatrice->prezzo));
var_dump($pluto);

$pluto->carrello[] = $sushi;
$pluto->setNewCredit(intval($sushi->prezzo));
var_dump($pluto);




?>