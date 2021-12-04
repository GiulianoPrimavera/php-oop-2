<?php 


class UserPrime extends User{
    private $codiceSconto;

    public function setCodice($value){
        $this->codiceSconto = $value;
    }
}
?>