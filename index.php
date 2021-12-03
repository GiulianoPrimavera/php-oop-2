<?php 
/*  classe user
        -classe user premium

    classe prodotto
        -prodotto     
*/

include "classes/User.php"; 
include "classes/UserPrime.php"; 

$pippo = new User("marco", "magno", "marco.magno@html.co", "3334445566", "32");
var_dump($pippo);

$pluto = new UserPrime("luigi", "magno", "luigi.magno@html.co", "4445556677", "40");
var_dump($pluto)


// echo $pippo->nome;


?>