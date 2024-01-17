<?php

class AnimalShop
{
    public $prodotti;

    public function __construct()
    {
        $this->prodotti[] = new ProdottoAnimale("Cibo per gatti", 10.99, "Cibo", "Gatto");
        $this->prodotti[] = new ProdottoAnimale("Giocattolo per cani", 15.99, "Giochi", "Cane");
        $this->prodotti[] = new ProdottoAnimale("Lettiera per gabbia", 8.49, "Accessori", "Uccello");
        $this->prodotti[] = new ProdottoAnimale("Cuccia imbottita", 29.99, "Cucce", "Cane");
    }

    public function getProdotti()
    {
        $result = [];

        foreach ($this->prodotti as $prodotto) {
            $item = [
                'Nome' => $prodotto->getNome(),
                'Prezzo' => $prodotto->getPrezzo(),
                'Categoria' => $prodotto->getCategoria()
            ];

            if ($prodotto instanceof ProdottoAnimale) {
                $item['TipoAnimale'] = $prodotto->getTipoAnimale();
            }

            $result[] = $item;
        }

        // Restituisci l'array di oggetti
        return $result;
    }
}
