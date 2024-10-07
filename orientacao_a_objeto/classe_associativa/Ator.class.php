<?php

class Ator
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