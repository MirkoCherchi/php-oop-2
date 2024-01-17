<?php


class ProdottoAnimale extends Prodotto
{
    public $tipoAnimale;

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
