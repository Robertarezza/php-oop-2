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

    public function listProduct() {
        $output = [];
        foreach ($this->products as $product) {
            $output[] =  $product;
        }
        return $output;
    }

    public function getNome() {
        return $this->name;
    }

    public function getProduct() {
        return $this->products;
    }

    
}
?>

