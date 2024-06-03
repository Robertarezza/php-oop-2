<?php

class Category {
    private $name;
    private $products = [];

    public function __construct($_name) {
        $this->name = $_name;
    }

    public function addProduct($_product) {
        $this->products[] = $_product;
    }

    // public function listProduct() {
    //     $cur_product = [];
    //     foreach ($this->products as $_product) {
    //         $cur_product[] = $_product;
    //     }
    //     return $cur_product;
    // }

    public function getName() {
        return $this->name;
    }

    public function getProduct() {
        return $this->products;
    }

    
}
?>

