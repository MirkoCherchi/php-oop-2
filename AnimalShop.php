<?php

class Prodotto
{
    protected $nome;
    protected $prezzo;

    public function __construct($nome, $prezzo)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getPrezzo()
    {
        return $this->prezzo;
    }
}


class ProdottoAnimale extends Prodotto
{
    protected $tipoAnimale;

    public function __construct($nome, $prezzo, $tipoAnimale)
    {
        parent::__construct($nome, $prezzo);
        $this->tipoAnimale = $tipoAnimale;
    }

    public function getTipoAnimale()
    {
        return $this->tipoAnimale;
    }
}


class AnimalShop
{
    protected $prodotti;

    public function __construct()
    {

        $this->prodotti[] = new ProdottoAnimale("Cibo per gatti", 10.99, "Gatto");
        $this->prodotti[] = new ProdottoAnimale("Giocattolo per cani", 15.99, "Cane");
        $this->prodotti[] = new ProdottoAnimale("Lettiera per gabbia", 8.49, "Uccello");
    }

    public function mostraProdotti()
    {
        echo "<h1>Benvenuto nello Animal Shop!</h1>";
        echo "<h2>Prodotti Disponibili:</h2>";

        foreach ($this->prodotti as $prodotto) {
            echo "<p><strong>Nome:</strong> " . $prodotto->getNome() . "<br>";
            echo "<strong>Prezzo:</strong> € " . $prodotto->getPrezzo() . "<br>";
            if ($prodotto instanceof ProdottoAnimale) {
                echo "<strong>Tipo Animale:</strong> " . $prodotto->getTipoAnimale() . "</p>";
            }
            echo "<hr>";
        }
    }
}
