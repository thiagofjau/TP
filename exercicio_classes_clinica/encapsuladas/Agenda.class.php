<?php

class Agenda
{
    public function __construct(
        protected string $ano = "", //protected no pai, só filha vai conseguir acessar, mas se private no pai, filha não consegue acessar
    ) {}

    //ano
    public function getAno()
    {
        return $this->ano;
    }

    public function setAno(string $ano) //pode TIPAR o param
    {
        $this->ano = $ano;
    }

}//fim classe

?>