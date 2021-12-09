<?php 

trait Cart {
    protected $cart = [];

    //funzione che gestisce i pagamenti
    public function buyProduct($prodotto){
        $this->cart[] = $prodotto;
        $this->setNewCredit($prodotto->prezzo);
    }

}

?>