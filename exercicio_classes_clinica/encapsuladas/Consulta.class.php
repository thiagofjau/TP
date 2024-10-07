<?php

class Consulta
{
    public function __construct(
        protected string $consulta = "", 
    ) {
    } //por criar Protected(encapsulado), tem que criar um GET e um SET pra cada um

    //consulta
    public function getConsulta()
    {
        return $this->consulta;
    }

    public function setConsulta(string $consulta) //pode TIPAR o param
    {
        $this->consulta = $consulta;
    }

}//fim classe

?>