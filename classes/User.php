<?php 

require_once __DIR__ . "/../traits/Cart.php";

class User {
    private $nome;
    private $cognome;
    private $email;
    private $numeroCellulare;
    protected $eta;
    protected $credit = 200;

    use Cart;

    function __construct($_nome, $_cognome, $_email, $_numeroCell, $_eta, $_credit){
        $this->setName($_nome);
        $this->setLastName($_cognome);
        $this->setEmail($_email);
        $this->setPhoneNumber($_numeroCell);
        $this->setEta($_eta);
        $this->setCredit($_credit);
    }

    public function setName($value){
        $this->nome = $value;
    }

    public function setLastName($value){
        $this->cognome = $value;
    }

    public function setEmail($value){
        
        if(!filter_var($value, FILTER_VALIDATE_EMAIL) ){
            throw new Exception("email non valida");
        }
        $this->email = $value;
    }

    public function setPhoneNumber($value){
        $this->numeroCellulare = $value;
    }

    public function setEta($value){
        $this->eta = $value;    
    }

    public function setCredit($value){
        $this->credit = $value;    
    }

    //funzione che gestisce il credito dell'utente all'acquisto di un prodotto
    public function setNewCredit($productPrice){
        $this->credit = $this->credit - $productPrice;
    }

}
?>