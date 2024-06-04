<?php
require_once __DIR__ . '/product.php';
require_once "./Trait/material.php";

class Sit extends Product {
use Material;

    private $dimensions;
 

    public function __construct($_id_product, $_name, $_price, $_category, $_dimensions) {
        parent::__construct($_id_product, $_name, $_price, $_category);
        $this->dimensions = $_dimensions;
        $this->material = ''; // Inizializza $material con un valore predefinito
       
    }

    public function getDimensioni() {
        return $this->dimensions;
    }

   

    
}
?>
