<?php

class Product {
    protected int $id_product;
    protected string $name;
    protected float $price;
    protected string $category;

    public function __construct(int $_id_product, string $_name, float $_price, string $_category) {
        $this->id_product = $_id_product;
        $this->name = $_name;
        $this->price = $_price;
        $this->category = $_category;
    }


    
}
