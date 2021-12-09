<?php 

require_once __DIR__ . "/Product.php";

class ProductFood extends Product{
    private $foodType;

    public function setFoodType($value){
        $this->foodType = $value;
    } 
}
?>