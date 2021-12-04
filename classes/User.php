<?php 
// include_once __DIR__ ."/../data/dataUser.php";

class User {
    private $nome;
    private $cognome;
    private $email;
    private $numeroCellulare;
    protected $eta;

    function __construct($_nome, $_cognome, $_email, $_numeroCell, $_eta){
        $this->setName($_nome);
        $this->setLastName($_cognome);
        $this->setEmail($_email);
        $this->setPhoneNumber($_numeroCell);
        $this->setEta($_eta);
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

    public function setEta($value){
        $this->eta = $value;    
    }

}
?>