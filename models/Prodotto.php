<?php
class Prodotto
{
    public $nome;
    public $prezzo;
    public $categoria;

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
