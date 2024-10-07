<?php

require_once "Produto.class.php";
require_once "Categoria.class.php";

//relação fraca, pq categoria pode tá relacionada a mais de 1 produto ou não ter nenhum produto
$categoria = new Categoria("Material Escolar");

$produto = new Produto(
    "Caderno",
    "Caderno Brochura",
    15.3,
    120,
    $categoria
);
$produto2 = new Produto(
    "Apontador",
    "Apontador azul",
    4.1,
    1000,
    $categoria
);

echo "<h3>Produtos</h3>";
echo "Nome: {$produto->getNome()} <br />";
echo "Descrição: {$produto->getDescricao()} <br />";
$precoFormatado = number_format($produto->getPreco(), 2, ",", ".");
echo "Preço: {$precoFormatado} <br />";
echo "Estoque: {$produto->getEstoque()} <br />";
echo "Categoria: {$produto->getCategoria()->getDescritivo()} <br />";





//fazer o contrário: instanciar uma categoria e associar produto

$categoria2 = new Categoria("Material de Escritório", array($produto, $produto2));

echo "<hr>";

echo "<h3>Categoria: {$categoria2->getDescritivo()}</h3>";

foreach ($categoria2->getProduto() as $prodsDaCat) {
    echo "Produto: {$prodsDaCat->getNome()} <br />";
    echo "Descricao: {$prodsDaCat->getDescricao()} <br />";

    //calc total estoque
    $totalEstoque = $prodsDaCat->getPreco() * $prodsDaCat->getEstoque();

    echo "Estoque: {$prodsDaCat->getEstoque()} <br>";

    //formatação dos cálculos. //obs: ao formatar, transforma em string, então formata antes de calcular
    $totalEstoque = number_format($totalEstoque, 2, ",", ".");
    $preco = number_format($prodsDaCat->getPreco(), 2, ",", ".");

    echo "Preco: R$ $preco <br>";
    echo "Valor total do Estoque: R$ {$totalEstoque} <br>";

    echo "------------------------------------------------------<br>";
}

echo "<hr>";












// echo "<h4>Fornecedores</h4>";
// foreach ($produto6->getFornecedor() as $produtoDados) {
//     echo "Razao Social: {$produtoDados->getRazaoSocial()} <br>";
//     echo "CNPJ: {$produtoDados->getCnpj()} <br>";
//     echo "Telefone: {$produtoDados->getTelefone()} <br> <br>";
// }

?>