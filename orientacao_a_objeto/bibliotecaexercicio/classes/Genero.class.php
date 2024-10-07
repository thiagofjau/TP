<?php
class Genero
{
    private $descritivo;

    public function __construct($descritivo)
    {
        $this->descritivo = $descritivo;
    }

    public function getDescritivo()
    {
        return $this->descritivo;
    }
}
?>