<?php
require_once 'product.php';

class Sit extends Product {
    private $dimensions;
    private $material;

    public function __construct($_id_product, $_name, $_price, $_category, $_dimensions, $_material) {
        parent::__construct($_id_product, $_name, $_price, $_category);
        $this->dimensions = $_dimensions;
        $this->material = $_material;
    }

    public function getDimensioni() {
        return $this->dimensions;
    }

    public function getMateriale() {
        return $this->material;
    }

    
}
?>
