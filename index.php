<?php 
/*  classe user
        -classe user premium

    classe prodotto
        -prodotto     
*/

include "classes/User.php"; 
include "classes/UserPrime.php"; 
include "classes/Product.php"; 
include "classes/ProductFood.php"; 

$pippo = new User("marco", "magno", "marco.magno@html.co", "3334445566", "32");
var_dump($pippo);

$pluto = new UserPrime("luigi", "magno", "luigi.magno@html.co", "4445556677", "40");
$pluto->setCodice();
var_dump($pluto);

$paperino = new UserPrime("Paperino", "Duck", "paperino.duck@html.co", "2221113344", "20");
$paperino->setCodice();
var_dump($paperino);

$lavatrice = new Product("lavatrice2000", "2000", "lavatrice grande", "20");
var_dump($lavatrice);

$sushi = new ProductFood("sushi", "20", "sushi rolls", "10");
$sushi->setFoodType("not vegan");
var_dump($sushi);

$pippo->carrello[] = $sushi;
$pippo->carrello[] = $sushi;
var_dump($pippo);



?>