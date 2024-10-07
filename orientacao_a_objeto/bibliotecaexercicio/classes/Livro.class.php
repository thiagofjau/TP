<?php
require_once 'Publicacoes.class.php';

class Livro
{
    private $sinopse;
    private $isbn;
    private $generos = []; // Relacionamento com múltiplos gêneros
    private $publicacao; // Relacionamento com a classe Publicacoes

    public function __construct($sinopse, $isbn, Publicacoes $publicacao)
    {
        $this->sinopse = $sinopse;
        $this->isbn = $isbn;
        $this->publicacao = $publicacao;
    }

    public function getSinopse()
    {
        return $this->sinopse;
    }

    public function getIsbn()
    {
        return $this->isbn;
    }

    public function getPublicacao()
    {
        return $this->publicacao;
    }

    public function adicionarGenero(Genero $genero)
    {
        $this->generos[] = $genero;
    }

    public function getGeneros()
    {
        return $this->generos;
    }
}
?>