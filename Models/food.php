<?php
require_once 'product.php';

class Food extends Product {
    private $peso;
    private $scadenza;

    public function __construct($_id_product, $_name,  $_price, $_category, $_peso, $_scadenza) {
        parent::__construct($_id_product, $_name, $_price, $_category);
        $this->peso = $_peso;
        $this->scadenza = $_scadenza;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function getScadenza() {
        return $this->scadenza;
    }

    public function getCategory() {
        return $this->category;
    }
}
?>
