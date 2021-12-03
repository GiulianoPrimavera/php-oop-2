<?php 
/*  classe user
        -classe user premium

    classe prodotto
        -prodotto     
*/

include "data/dataUser.php";
include "classes/User.php"; 

$pippo = new User($dataUser);
var_dump($pippo);


// echo $pippo->nome;


?>