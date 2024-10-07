<?php
require_once 'Pessoa.class.php';

class Editora extends Pessoa
{
    private $cnpj;
    private $publicacoes = [];

    public function __construct($nome, $cnpj)
    {
        parent::__construct($nome);
        $this->cnpj = $cnpj;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    public function adicionarPublicacao($publicacao)
    {
        $this->publicacoes[] = $publicacao;
    }

    public function getPublicacoes()
    {
        return $this->publicacoes;
    }
}
?>