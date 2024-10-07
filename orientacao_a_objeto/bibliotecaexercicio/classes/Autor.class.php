<?php
require_once 'Pessoa.class.php';

class Autor extends Pessoa
{
    private $nacionalidade;

    public function __construct($nome, $nacionalidade)
    {
        parent::__construct($nome);
        $this->nacionalidade = $nacionalidade;
    }

    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    public function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;
    }
}
?>