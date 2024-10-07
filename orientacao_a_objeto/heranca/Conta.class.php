<?php

class Conta
{
    public function __construct(
        protected string $agencia = "", //trocado de PRIVATE para PROTECTED
        protected string $numero = "",
        protected string $titular = "",
        protected float $saldo = 0.00
    ) {
    } //por criar PRIVATE(encapsulado), tem que criar um GET e um SET pra cada um

    //agencia
    public function getAgencia()
    {
        return $this->agencia;
    }

    public function setAgencia(string $agencia) //pode TIPAR o param
    {
        $this->agencia = $agencia;
    }

    //numero
    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    //titular
    public function getTitular()
    {
        return $this->titular;
    }


    public function setTitular($titular)
    {
        $this->titular = $titular;
    }

    //saldo
    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    //metodo retirar
    public function Sacar(float $valor = 0) //pode tipar e ainda iniciar como ex zero 
    {
        $this->saldo -= $valor;
        // $this->saldo = $this->saldo = $valor; 
    }

    //metodo depositar
    public function Depositar(float $valor)
    {
        $this->saldo += $valor;
    }






}//fim classe

?>