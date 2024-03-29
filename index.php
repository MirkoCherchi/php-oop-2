<?php

require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Category.php";
require_once __DIR__ . "/Models/Food.php";
require_once __DIR__ . "/Models/Game.php";

$cani = new Category('Cani', '<i class="fa-solid fa-dog"></i>');
$gatti = new Category('Gatti', '<i class="fa-solid fa-cat"></i>');
$uccelli = new Category('Uccello', '<i class="fa-solid fa-crow"></i>');

$gabbia_uccello = new Product(100, 'https://arcaplanet.vtexassets.com/arquivos/ids/265344/gabbia-per-uccelli-mosca1.jpg?v=637726721456030000', '€ 39.50', 'Gabbia', $uccelli);
$cibo_cane = new Food(259, 'https://arcaplanet.vtexassets.com/arquivos/ids/267123/hi-beef-adult-10kg.jpg?v=637806850286130000', '€ 45', 'Cibo', $cani);
$cibo_cane->set_ingredients('Pollo, Verdure');
$cibo_cane->setDescription('Questo è un cibo per cani con carne di manzo');
$Palla_gatto = new Game(357, 'https://arcaplanet.vtexassets.com/arquivos/ids/209753/YES--pallina-in-corda-65cm.jpg?v=637413991274900000', '€ 6.99', 'Gioco', $gatti);
$Palla_gatto->set_material('Lana');


$products = [
    $gabbia_uccello,
    $cibo_cane,
    $Palla_gatto
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Shop</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- /Bootstrap -->

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- /FontAwesome -->

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">
        <h1 class="py-5 text-center text-uppercase">Animal Shop</h1>
        <div class="row justify-content-center">
            <?php foreach ($products as $product) : ?>

                <!-- Colonna -->
                <div class="col-3">

                    <!-- Card -->
                    <div class="card">
                        <img src="<?php echo $product->getImage(); ?>" class="card-img-top" alt="<?php echo $product->getName(); ?>">
                        <div class="card-body">
                            <h5 class="card-title  d-flex justify-content-center flex-column align-items-center py-2">
                                <?php echo $product->getName(); ?>
                            </h5>
                            <div>
                                <p><span class="strong">Categoria:</span> <?php echo $product->getCategory()->getName(); ?> <?php echo $product->getCategory()->getIcon(); ?></p>
                                <p><span class="strong">Prezzo: </span> <?php echo $product->getPrice(); ?> </p>

                                <?php if (method_exists($product, 'getDescription')) : ?>
                                    <?php $description = $product->getDescription(); ?>
                                    <?php if ($description !== null && $description !== '') : ?>
                                        <p><span class="strong">Descrizione: </span> <?php echo $description; ?></p>
                                    <?php else : ?>
                                        <p><span class="strong">Descrizione: </span> Nessuna descrizione per questo articolo</p>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn-primary">Aggiungi al Carrello</a>
                            </div>
                        </div>
                    </div>
                    <!-- /Card -->
                </div>
                <!-- /Colonna -->
            <?php endforeach; ?>
        </div>
    </div>

</body>

</html>