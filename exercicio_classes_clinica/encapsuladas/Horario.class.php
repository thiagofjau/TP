<?php

class Horario
{
    public function __construct(
        protected string $data = "", //classe horario
        protected string $hora = "", //classe horario
    ) {
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData(string $data)
    {
        $this->data = $data;
    }
    public function getHora()
    {
        return $this->hora;
    }

    public function setHora(string $hora)
    {
        $this->hora = $hora;
    }
}

?>