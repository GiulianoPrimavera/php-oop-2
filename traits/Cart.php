<?php 

trait Cart {
    protected $cart = [];

    //funzione che gestisce i pagamenti
    public function addProduct($prodotto){
        if(array_key_exists($prodotto->getNome(), $this->cart)){
            $this->cart[$prodotto->getNome()]["quantita"]++;
        }else{
            $this->cart[$prodotto->getNome()] = ["prodotto" => $prodotto, "quantita" => 1];
        }
        // $this->setNewCredit($prodotto->prezzo);
    }

    //funzione remove product
    public function removeProduct($prodotto){
        if(array_key_exists($prodotto->getNome(), $this->cart) && $this->cart[$prodotto->getNome()]["quantita"] > 1){
            //riduco la quantità -1
            $this->cart[$prodotto->getNome()]["quantita"]--;
        }else if(array_key_exists($prodotto->getNome(), $this->cart) && $this->cart[$prodotto->getNome()]["quantita"] === 1){
            //rimuovo il prodotto
            unset($this->cart[$prodotto->getNome()]);
        }
    }

    //funzione calcola prezzo
    
}

?>