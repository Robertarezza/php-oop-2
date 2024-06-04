<?php

class Category {

    private $name;
    private $icon;
    private $products = [];
   

    public function __construct(string $_name) {
        $this->name = $_name;
    }

    public function addProduct($_product) {
        $this->products[] = $_product;
    }


    public function getName() {
        return $this->name;
    }

    public function getProduct() {
        return $this->products;
    }

    public function setIcon($_icon) {

         $this->icon = $_icon;
    } 


    public function getIcon() {
        return $this->icon;
    } 
}
?>

