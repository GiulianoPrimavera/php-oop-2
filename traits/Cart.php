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

    //funzione calcola prezzo
    
}

?>