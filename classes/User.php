<?php 
// include_once __DIR__ ."/../data/dataUser.php";

class User {
    private $nome;
    private $cognome;
    private $email;
    private $numeroCellulare;

    function __construct($_nome, $_cognome, $_email){
        $this->setName($_nome);
        $this->setLastName($_cognome);
        $this->setEmail($_email);
    }

    public function setName($value){
        if(isset($value)){
            $this->nome = $value;
        }else{
            $this->nome = null;
        }
    }

    public function setLastName($value){
        if(isset($value)){
            $this->cognome = $value;
        }
    }

    public function setEmail($value){
        if(isset($value)){
            $this->email = $value;
        }
    }

}
?>