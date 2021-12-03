<?php 
/*  classe user
        -classe user premium

    classe prodotto
        -prodotto     
*/

include "data/dataUser.php";
include "classes/User.php"; 

$pippo = new User("marco", "magno", "marco.magno@html.co", "3334445566");
var_dump($pippo);


// echo $pippo->nome;


?>