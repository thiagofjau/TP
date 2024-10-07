<?php

require_once "Produto.class.php";

$produto1 = new Produto(
    "Lápis Preto",
    "Lápis Preto Número 2",
    1000,
    2.00
);

echo $produto1->getNome() . "<br>"; //encapsulado(privado) precisa usar get(nada a ver com $_GET), nao precisa param aqui

$produto1->setNome("Caneta"); //pra atribuir precisa usar o set

echo $produto1->getNome();

?>