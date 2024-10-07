<?php

class Corrente extends Conta
{
    public function __construct(
        protected float $limite = 0.00, //trocado de PRIVATE para PROTECTED
        string $agencia = "", //do construtor da classe pai
        string $numero = "", //do construtor da classe pai
        string $titular = "", //do construtor da classe pai
        float $saldo = 0.00  //do construtor da classe pai...pode tipar
    ) //na herança, abre as chaves abaixo do CONSTRUTOR e recebe dados da classe pai, por param
    {//chama construtor da classe pai
        parent::__construct(
            $agencia,
            $numero,
            $titular,
            $saldo
        );
    }

    public function getLimite()
    {
        return $this->limite;
    }

    public function setLimite($limite)
    {
        $this->limite = $limite;
    }
}


?>