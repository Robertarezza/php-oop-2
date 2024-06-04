<?php
require_once __DIR__ . '/product.php';
require_once "./Trait/material.php";

class Game extends Product {
    use Material;

    private $type;

    public function __construct($_id_product, $_name,  $_price, $_category) {
        parent::__construct($_id_product, $_name, $_price, $_category);
        $this->material = ''; // Inizializza $material con un valore predefinito
    }

    public function getType() {
        return $this->type;
    }
}
?>