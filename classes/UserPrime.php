<?php 

require_once __DIR__ . "/User.php";

class UserPrime extends User{
    private $codiceSconto = 30;

    public function setCodice(){
        if(intval($this->eta) > 30){
            $this->codiceSconto = 60;
        }

        $this->credit = $this->credit + $this->codiceSconto; 
    }
}
?>