<?php

require_once "Pessoa.class.php";
require_once "Endereco.class.php";

//fazer uma lado: endereço, saber a quem pertence

$pessoa1 = new Pessoa("Maria da Silva", "123.456.789-12");


$endereco1 = new endereco(
    "Rua XV de Novembro",
    "123",
    "123456",/*associa pessoa 
aqui*/ $pessoa1
);
//ex associado a um segundo endereço da maria
$endereco2 = new endereco(
    "José João de Mello",
    "123",
    "123456",/*associa pessoa 
aqui*/ $pessoa1
);





// echo "<pre>";
// var_dump($endereco1, $endereco2);
// echo "</pre>";

echo "<h3>Endereço</h3>";
echo "Logradouro: {$endereco1->getLogradouro()}<br>";
echo "Número: {$endereco1->getNumero()}<br>";
echo "Cep: {$endereco1->getCep()}<br><br>";

//a quem esse endereço pertence
echo "<h4>O endereço pertence</h4>";
echo "Nome: {$endereco1->getPessoa()->getNome()}";
//precisa chamar a var do objeto endereco, acesssar get da pessoa e o get do atributo
echo "CPF: {$endereco1->getPessoa()->getCPF()}";

//pessoas quais sao os endereços

$pessoa2 = new Pessoa("Juliano Martins da Silva", "555.456.789-12", "Rua Ramos", "123", "17200500");

//add outro endereço ao juliano pessoa2
$pessoa2->setEndereco("Rua Pedro Alcantara", "123", "17208569", null); //pessoa:null pq criou lá en endereçoc

echo "<pre>";
var_dump($pessoa2);
echo "</pre>";

echo "<h3>Dados de Pessoa</h3>";
echo "Nome: {$pessoa2->getNome()}<br>";
echo "CPF: {$pessoa2->getCpf()}<br>";

echo "<h4></h4>";
//endereco é array.
foreach ($pessoa2->getEndereco() as $endereco) {
    echo "Logradouro: {$endereco->getLogradouro()} - {$endereco->getNumero()}<br>";
    echo "CEP: {$endereco->getCep()}<br>";
}

?>