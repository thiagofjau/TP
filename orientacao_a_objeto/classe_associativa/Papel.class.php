<?php

class Papel
{
    public function __construct(private string $nome = "",
    //pra relacionar com ator e filme, precisa criar os atributos como null e inserir os get de ator e filme
    private $filme = null, private $ator = null)
    {
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function getFilme()
    {
            return $this->filme;
    }

    public function getAtor()
    {
        return $this->ator;
    }
}//fimclasse

?>