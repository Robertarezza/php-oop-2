<?php
require_once 'product.php';

class Game extends Product {
    private $material;

    public function __construct($_id_product, $_name,  $_price, $_category, $_material) {
       
        parent::__construct($_id_product, $_name, $_price, $_category);
        $this->material = $_material;
    }

    public function getMateriale() {
        return $this->material;
    }
    public function getCategory() {
        return $this->category;
    }
    
}
?>
