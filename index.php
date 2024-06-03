<?php

require_once __DIR__ . "/Models/product.php";
require_once __DIR__ . "/Models/category.php";
require_once __DIR__ . "/Models/game.php";

//categoria
$category_gat = new Category ("Gatti");
$catetory_dog = new Category ("Cane");

//prodotto 1 generico con categpria
$prodotto1 = new Product (1, "lettiera", 12.90, $category_gat);
var_dump($prodotto1);

//prodotto con categoria più specifica "GIOCO"
$prodotto2 = new Game (2, "pallina", 2, $catetory_dog, "plastica");
var_dump($prodotto2);

//aggiungo prodotti alla categoria cane
$catetory_dog->addProduct("casetta");
$catetory_dog->addProduct("cuscino");
var_dump($prodotto2);

//stampo la lista di prodotti presenti alla categoria cane
$catetory_dog->listProduct();
var_dump($catetory_dog);

// echo $prodotto2->getName();
// echo $prodotto2->getPrice();