<!-- index.php -->

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Shop</title>
</head>

<body>

    <?php
    // includi la classe
    include 'AnimalShop.php';

    // crea un'istanza della classe AnimalShop
    $animalShop = new AnimalShop();

    // mostra alcuni prodotti
    $animalShop->mostraProdotti();
    ?>

</body>

</html>