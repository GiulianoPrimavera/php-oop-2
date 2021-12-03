<?php 
// include_once __DIR__ ."/../data/dataUser.php";

class User {
    private $nome;
    private $cognome;
    private $email;
    private $numeroCellulare;

    function __construct($arrUsers){
        $this->setName($arrUsers);
    }

    public function setName($value){
        if(array_key_exists("nome", $value)){
            $this->nome = $value["nome"];
        }
    }

}
?>