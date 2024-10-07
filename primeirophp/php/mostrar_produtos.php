<?php

if ($_GET) {
    require_once "Produtos.class.php";

    $objProd = new Produtos(
        nome: $_GET["nome"],
        descricao: $_GET["descricao"],
        valor: $_GET["valor"]
    );

    $conect = $objProd->conexao();

    $msg = $objProd->inserir($conect);

    header("location:index_prod.php?msg=$msg");
    die();

}//fim if
else {
    header("location:produtos.html");
}

?>