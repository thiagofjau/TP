<?php

class Filme
{
    public function __construct(private string $nome = "")
    {
    }

    public function getNome()
    {
        return $this->nome;
    }
}//fimclasse

?>