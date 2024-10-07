<?php
require_once 'Pessoa.class.php';

class Aluno extends Pessoa
{
    private $ra;

    public function __construct($nome, $ra)
    {
        parent::__construct($nome);
        $this->ra = $ra;
    }

    public function getRa()
    {
        return $this->ra;
    }

    public function setRa($ra)
    {
        $this->ra = $ra;
    }
}
?>