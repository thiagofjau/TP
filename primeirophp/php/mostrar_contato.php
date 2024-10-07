<?php

if ($_GET) {

    require_once "Cliente.Class.php";

    $obj = new Cliente(nome: $_GET["nome"], sobrenome: $_GET["sobrenome"], cpf: $_GET["cpf"]);

    $conect = $obj->conexao();

    $msg = $obj->inserir($conect);

    header("location:index.php?msg=$msg");
    die();

} else {
    header("location:form_cliente.html");
}

?>