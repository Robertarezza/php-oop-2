<?php

require_once __DIR__ . "/Models/product.php";
require_once __DIR__ . "/Models/category.php";

$category_gat = new Category ("Gatti");

$prodotto1 = new Product (1, "lettiera", 12.90, $category_gat);
var_dump($prodotto1);
