<?php 

class Product{
    private $nome;
    public $prezzo;
    private $descrizione;
    // private $quantita;

    function __construct($_nome, $_prezzo, $_descrizione/*,  $_quantita = 1 */){
        $this->setName($_nome);
        $this->setPrezzo($_prezzo);
        $this->setDescrizione($_descrizione);
        // $this->setQuantita($_quantita);
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
    public function getNome(){
        return $this->nome;
    }
    // public function setQuantita($value){
    //     $this->quantita = $value;

    //     /* if(isset($value)){
    //         $this->quantita = $value;
    //     }else{
    //         $this->quantita = 0;
    //     } */
    // }
}
?>