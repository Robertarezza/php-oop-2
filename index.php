<?php

require_once __DIR__ . "/Models/product.php";
require_once __DIR__ . "/Models/category.php";
require_once __DIR__ . "/Models/game.php";
require_once __DIR__ . "/Models/food.php";
require_once __DIR__ . "/Models/sit.php";

// Creo categorie
$categoria_gatto = new Category("Gatto");
$categoria_cane = new Category("Cane");

// Crea prodotti
//solo con categoria
$prodotto1 = new Product(1, "Tira Graffi", 12.90, $categoria_gatto);
//con categoria e gioco
$prodotto2 = new Game(2, "pallina", 2, $categoria_cane, "plastica");
//con categoria e cibo
$prodotto3 = new Food(3, "bastoncino", 1.99, $categoria_cane, 1, 2024);
//con categoria e cuccia
$prodotto4 = new Sit(4, "Lettiera", 50.99, $categoria_gatto, 1.20, "Plastica");

// Aggiungi prodotto alla categorie gatto
$categoria_gatto->addProduct($prodotto1);
$categoria_gatto->addProduct($prodotto4);

// Aggiungi prodotto alla categorie cane
$categoria_cane->addProduct($prodotto3);
$categoria_cane->addProduct($prodotto2);



echo $categoria_cane->getName();
echo $prodotto1->getId();
echo $prodotto1->getName();
echo $prodotto1->getPrice();
//echo $categoria_cane->getProduct();

//echo $categoria_cane->getProduct();

//stampo la lista di prodotti presenti alla categoria cane
$prodottiCane = $categoria_cane->getProduct();
var_dump($prodottiCane);

// foreach ($prodottiCane as $prodotto) {
//     echo $prodotto->getID(). "<br>";
//     echo $prodotto->getName(). "<br>";
//     echo $prodotto->getPrice(). "<br>";
//     echo $prodotto->getScadenza(). "<br>";
//     echo $prodotto->getPeso(). "<br>";
//     echo $prodotto->getMaterial(). "<br>";
// }

//stampo la lista di prodotti presenti alla categoria gatti
$prodottiGatto = $categoria_gatto->getProduct();
//var_dump($categoria_gatto);

// echo $category_cat->listProduct();

// echo $prodotto2->getName();
// echo $prodotto2->getPrice();


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Document</title>
</head>

<<body>
  <div class="container">
    <div class="row">
      <?php foreach ($prodottiCane as $prodotto): ?>
        <div class="card" style="width: 18rem;">
          <h1>Categoria prodotto: <?php echo $categoria_cane->getName() ?></h1>
          <!-- <img src="..." class="card-img-top" alt="..."> -->
          <div class="card-body">
          <h5 class="card-title">Id Prototto:<?php echo $prodotto->getId() ?></h5>
            <h5 class="card-title"><?php echo $prodotto->getName() ?></h5>
            <p class="card-text">Prezzo: <?php echo $prodotto->getPrice() ?> euro</p>
            <?php if ($prodotto instanceof Game): ?>
              <p class="card-text">Materiale: <?php echo $prodotto->getMateriale() ?></p>
            <?php elseif ($prodotto instanceof Food): ?>
              <p class="card-text">Scadenza: <?php echo $prodotto->getScadenza() ?></p>
              <p class="card-text">Peso: <?php echo $prodotto->getPeso() ?>kg</p>
            <?php else: ?>
              <p class="card-text">Materiale: <?php echo $prodotto->getMaterial() ?></p>
            <?php endif; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</body>

</html>