<?php

require_once __DIR__ . "/Models/product.php";
require_once __DIR__ . "/Models/category.php";
require_once __DIR__ . "/Models/game.php";
require_once __DIR__ . "/Models/food.php";
require_once __DIR__ . "/Models/sit.php";

//categoria
$category_cat = new Category ("Gatto");
$category_dog = new Category ("Cane");

//prodotto 1 generico con categpria
$prodotto1 = new Product (1, "Tira Graffi", 12.90, $category_cat);
//var_dump($prodotto1);

//prodotto con categoria più specifica "GIOCO"
$prodotto2 = new Game (2, "pallina", 2, $category_dog, "plastica");
//var_dump($prodotto2);

//prodotto con categoria più CIBO
$prodotto3 = new Food (3, "bastoncino",1.99, $category_dog, 1, 2024);
//var_dump($prodotto3);

//prodotto con categoria più cuccia
$prodotto4 = new Sit (4,"Lettiera", 50.99, $category_cat, 1.20, "Plastica");

//aggiungo prodotti alla categoria gatto
$category_cat->addProduct($prodotto1);
$category_cat->addProduct($prodotto4);

//aggiunta prodotto cibo con relativi valori cani
$category_dog->addProduct($prodotto3);
//var_dump($prodotto2);
$category_dog->addProduct($prodotto2);



//stampo la lista di prodotti presenti alla categoria cane
$category_dog->listProduct();
var_dump($category_dog);

//stampo la lista di prodotti presenti alla categoria gatti
$category_cat->listProduct();
var_dump($category_cat);

// echo $category_cat->listProduct();

// echo $prodotto2->getName();
// echo $prodotto2->getPrice();