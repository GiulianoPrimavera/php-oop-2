<?php 

class Product{
    private $nome;
    private $prezzo;
    private $descrizione;
    private $quantita;

    function __construct($_nome, $_prezzo, $_descrizione, $_quantita){
        $this->setName($_nome);
        $this->setPrezzo($_prezzo);
        $this->setDescrizione($_descrizione);
        $this->setQuantita($_quantita);
    }

    public function setName($value){
        $this->nome = $value;
    }
    public function setPrezzo($value){
        $this->prezzo = $value;
    }
    public function setDescrizione($value){
        $this->descrizione = $value;
    }
    public function setQuantita($value){
        $this->quantita = $value;
    }
}
?>