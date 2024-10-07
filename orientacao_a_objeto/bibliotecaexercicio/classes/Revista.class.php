<?php
require_once 'Publicacoes.class.php';

class Revista
{
    private $numero;
    private $issn;
    private $publicacao; // Relacionamento com a classe Publicacoes

    public function __construct($numero, $issn, Publicacoes $publicacao)
    {
        $this->numero = $numero;
        $this->issn = $issn;
        $this->publicacao = $publicacao;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function getIssn()
    {
        return $this->issn;
    }

    public function getPublicacao()
    {
        return $this->publicacao;
    }
}
?>