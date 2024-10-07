<?php 

    require_once "Ator.class.php";
    require_once "Filme.class.php";
    require_once "Papel.class.php";


    $ator = new Ator("Brad Pitt");
    $filme = new Filme("Trem Bala");

    $papel = new Papel("Joãozinho Papel", $filme, $ator);

    // echo "<pre>";
    // var_dump( $papel );
    // echo "</pre>";


    echo"Nome do Papel: {$papel->getNome()}<br>"; //pega lá da classe Papel
    echo"Nome do Filme: {$papel->getFilme()->getNome()}<br>";
    echo"Nome do Ator: {$papel->getAtor()->getNome()}<br>";

?>