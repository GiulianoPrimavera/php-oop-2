<?php 

class Product{
    private $nome;
    private $prezzo;
    private $descrizione;
    private $quantità = 10;

    function __construct($_nome, $_prezzo, $_descrizione){
        $this->setName($_nome);
        $this->setPrezzo($_prezzo);
        $this->setDescrizione($_descrizione);
    }

    function setName($value){
        $this->nome = $value;
    }
    function setPrezzo($value){
        $this->prezzo = $value;
    }
    function setDescrizione($value){
        $this->descrizione = $value;
    }
}
?>