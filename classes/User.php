<?php 
// include_once __DIR__ ."/../data/dataUser.php";

class User {
    private $nome;
    private $cognome;
    private $email;
    private $numeroCellulare;

    function __construct($_nome, $_cognome, $_email, $_numeroCell){
        $this->setName($_nome);
        $this->setLastName($_cognome);
        $this->setEmail($_email);
        $this->setPhoneNumber($_numeroCell);
        // setPhoneNumber
    }

    public function setName($value){
        $this->nome = $value;
    }

    public function setLastName($value){
        $this->cognome = $value;
    }

    public function setEmail($value){
        $this->email = $value;
    }

    public function setPhoneNumber($value){
        $this->numeroCellulare = $value;
    }

}
?>