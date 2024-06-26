<?php

require_once __DIR__ . "/Models/product.php";
require_once __DIR__ . "/Models/category.php";
require_once __DIR__ . "/Models/game.php";
require_once __DIR__ . "/Models/food.php";
require_once __DIR__ . "/Models/sit.php";
require_once __DIR__ . '/Trait/material.php';






// Creo categorie
$categoria_gatto = new Category("Gatto");
$categoria_gatto->setIcon("fa-solid fa-cat");
//$categoria_gatto->getIcon("fa-solid fa-cat");

$categoria_cane = new Category("Cane");
$categoria_cane->setIcon("fa-solid fa-dog");
//$categoria_cane->getIcon("fa-solid fa-dog");
//var_dump($categoria_cane);

// Crea prodotti
//solo con categoria
$prodotto1 = new Product(1, "Tira Graffi", 12.90, $categoria_gatto);
//$prodotto1->setImage("./img/tiragraffi");
//con categoria e gioco
$prodotto2 = new Game(2, "Pallina", 2, $categoria_cane,);
$prodotto2->setImage("./img/pallina.jpg");
$prodotto2->setMaterial("Plastica");
//con categoria e cibo
$prodotto3 = new Food(3, "Dentastics", 1.99, $categoria_cane, 1, "14/05/2026");
$prodotto3->setImage("./img/dentastix.webp");
//con categoria e cuccia
$prodotto4 = new Sit(4, "Lettiera", 50.99, $categoria_gatto, 1.20);
$prodotto4->setImage("./img/lettiera.jpg");
$prodotto4->setMaterial("Plastica");

// Aggiungi prodotto alla categorie gatto
$categoria_gatto->addProduct($prodotto1);
$categoria_gatto->addProduct($prodotto4);

// Aggiungi prodotto alla categorie cane
$categoria_cane->addProduct($prodotto3);
$categoria_cane->addProduct($prodotto2);




//stampo la lista di prodotti presenti alla categoria cane
$prodottiCane = $categoria_cane->getProduct();
//var_dump($prodottiCane);


//stampo la lista di prodotti presenti alla categoria gatti
$prodottiGatto = $categoria_gatto->getProduct();
//var_dump($categoria_gatto);

//cattura l'eccezione
// 
try {
 $prodotto1->setImage("");
} catch (Exception $e) {
  echo "<br>Eccezzione: " . $e->getMessage();
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

  <title>Document</title>
</head>

<body>
  <div class="container">
    <div class="row justify-content-around">
      <h1 class="text-center">Prodotti</h1>
      <?php foreach ($prodottiCane as $prodotto) : ?>
        <div class="card mt-4" style="width: 18rem;">
          <h3 class="text-center">Categoria prodotto: <i class="<?php echo $categoria_cane->getIcon() ?>"></i> <?php echo $categoria_cane->getName() ?></h3>
           <img src="<?php echo $prodotto->getImage(); ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $prodotto->getName() ?></h5>
            <p class="card-text">Prezzo: <?php echo $prodotto->getPrice() ?> euro</p>
            <?php if ($prodotto instanceof Game) : ?>
              <p class="card-text">Materiale: <?php echo $prodotto->getMaterial() ?></p>
            <?php elseif ($prodotto instanceof Food) : ?>
              <p class="card-text">Scadenza: <?php echo $prodotto->getScadenza() ?></p>
              <p class="card-text">Peso: <?php echo $prodotto->getPeso() ?>kg</p>
            <?php else : ?>
              <p class="card-text">Materiale: <?php echo $prodotto->getMaterial() ?></p>
            <?php endif; ?>
            <p class="card-title">Id Prototto:<?php echo $prodotto->getId() ?></p>
          </div>
        </div>
      <?php endforeach; ?>
      <?php foreach ($prodottiGatto as $prodotto) : ?>
        <div class="card mt-4" style="width: 18rem;">
          <h3 class="text-center">Categoria prodotto:<i class="<?php echo $categoria_gatto->getIcon() ?>"></i> <?php echo $categoria_gatto->getName() ?></h3>
          <img src="<?php echo $prodotto->getImage(); ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Id Prototto:<?php echo $prodotto->getId() ?></h5>
            <h5 class="card-title"><?php echo $prodotto->getName() ?></h5>
            <p class="card-text">Prezzo: <?php echo $prodotto->getPrice() ?> euro</p>
            <?php if ($prodotto instanceof Game) : ?>
              <p class="card-text">Materiale: <?php echo $prodotto->getMaterial() ?></p>
            <?php elseif ($prodotto instanceof Food) : ?>
              <p class="card-text">Scadenza: <?php echo $prodotto->getScadenza() ?></p>
              <p class="card-text">Peso: <?php echo $prodotto->getPeso() ?>kg</p>
            <?php elseif ($prodotto instanceof Sit) : ?>
              <p class="card-text">Materiale: <?php echo $prodotto->getMaterial() ?></p>
            <?php endif; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  </body>

</html>