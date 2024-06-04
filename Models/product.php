<?php

class Product {

    protected int $id_product;
    protected string $name;
    protected float $price;
    protected Category $category;

    public function __construct(int $_id_product, string $_name, float $_price, Category $_category ) {
        
        $this->id_product = $_id_product;
        $this->name = $_name;
        $this->price = $_price;
        $this->category = $_category;
    }

    public function getId() {
        return $this->id_product;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getCategory() {
        return $this->category;
    }
    
}
