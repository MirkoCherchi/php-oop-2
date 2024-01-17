<?php

// Includi la definizione delle classi
include 'models/Prodotto.php';
include 'models/ProdottoAnimale.php';
include 'models/AnimalShop.php';

// Crea un array di oggetti ProdottoAnimale
$prodottiAnimali = array(
    new ProdottoAnimale("Cibo per gatti", 10.99, "Cibo", "Gatto"),
    new ProdottoAnimale("Giocattolo per cani", 15.99, "Giochi", "Cane"),
    new ProdottoAnimale("Lettiera per gabbia", 8.49, "Accessori", "Uccello"),
    new ProdottoAnimale("Cuccia imbottita", 29.99, "Cucce", "Cane")
);

// Visualizza le card senza utilizzare una stringa di output esplicita
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Shop</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Benvenuto nell' Animal Shop!</h1>
    <h2>Prodotti Disponibili:</h2>
    <div class="flex">

        <?php foreach ($prodottiAnimali as $prodottoAnimale) : ?>
            <div class="card">

                <p><strong>Nome:</strong> <?= $prodottoAnimale->getNome() ?><br>
                    <strong>Prezzo:</strong> € <?= $prodottoAnimale->getPrezzo() ?><br>
                    <strong>Categoria:</strong> <?= $prodottoAnimale->getCategoria() ?><br>
                    <?php if ($prodottoAnimale instanceof ProdottoAnimale) : ?>
                        <strong>Tipo Animale:</strong> <?= $prodottoAnimale->getTipoAnimale() ?>
                </p>
            <?php endif; ?>
            </div>
    </div>
<?php endforeach; ?>

</body>

</html>