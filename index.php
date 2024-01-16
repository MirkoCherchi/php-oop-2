<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Shop</title>
</head>

<body>

    <?php

    include 'AnimalShop.php';

    $animalShop = new AnimalShop();

    $output = $animalShop->getProdotti();

    // stampa l'output nell'HTML
    echo $output;
    ?>

</body>

</html>