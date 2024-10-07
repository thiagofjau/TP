<?php

class Endereco
{
    public function __construct(
        private string $logradouro = "",
        private string $numero = "",
        private string $cep = "",
        private $pessoa = null, /*fracamente tipado*/
    ) {
    }
    //Tipagem forte só na última versao do PHP:  public function __construct(
    //     private string $logradouro = "",
    //     private string $numero = "",
    //     private string $cep = "",
    //     private Pessoa $pessoa = new Pessoa, /*tipo Pessoa recebe objeto*/
    // ) {
    // }

    public function getLogradouro()
    {
        return $this->logradouro;
    }
    public function getNumero()
    {
        return $this->numero;
    }
    public function getCep()
    {
        return $this->cep;
    }
    public function getPessoa()
    {
        return $this->pessoa;
    }
}

?>