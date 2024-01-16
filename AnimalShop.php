<?php

class Prodotto
{
    protected $nome;
    protected $prezzo;
    protected $categoria;

    public function __construct($nome, $prezzo, $categoria)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->categoria = $categoria;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getPrezzo()
    {
        return $this->prezzo;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }
}

class ProdottoAnimale extends Prodotto
{
    protected $tipoAnimale;

    public function __construct($nome, $prezzo, $categoria, $tipoAnimale)
    {
        parent::__construct($nome, $prezzo, $categoria);
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

        $this->prodotti[] = new ProdottoAnimale("Cibo per gatti", 10.99, "Cibo", "Gatto");
        $this->prodotti[] = new ProdottoAnimale("Giocattolo per cani", 15.99, "Giochi", "Cane");
        $this->prodotti[] = new ProdottoAnimale("Lettiera per gabbia", 8.49, "Accessori", "Uccello");
        $this->prodotti[] = new ProdottoAnimale("Cuccia imbottita", 29.99, "Cucce", "Cane");
    }

    public function getProdotti()
    {
        $output = "<h1>Benvenuto nello Animal Shop!</h1>";
        $output .= "<h2>Prodotti Disponibili:</h2>";

        foreach ($this->prodotti as $prodotto) {
            $output .= "<p><strong>Nome:</strong> " . $prodotto->getNome() . "<br>";
            $output .= "<strong>Prezzo:</strong> $" . $prodotto->getPrezzo() . "<br>";
            $output .= "<strong>Categoria:</strong> " . $prodotto->getCategoria() . "<br>";
            if ($prodotto instanceof ProdottoAnimale) {
                $output .= "<strong>Tipo Animale:</strong> " . $prodotto->getTipoAnimale() . "</p>";
            }
            $output .= "<hr>";
        }

        return $output;
    }
}
