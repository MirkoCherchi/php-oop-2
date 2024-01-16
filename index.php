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
class Categoria
{
    protected $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }
}
class NegozioOnline
{
    protected $prodotti = [];

    public function aggiungiProdotto(Prodotto $prodotto)
    {
        $this->prodotti[] = $prodotto;
    }

    public function visualizzaProdotti()
    {
        foreach ($this->prodotti as $prodotto) {
            echo "Nome: " . $prodotto->getNome() . ", Prezzo: " . $prodotto->getPrezzo() . "€, Categoria: " . $prodotto->getCategoria() . "<br>";
        }
    }
}
