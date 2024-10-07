<?php
require_once "Produto.class.php";
require_once "Fornecedor.class.php";

$produto1 = new Produto(
    "Lápis Preto",
    "Número 6",
    3.20,
    1000
); //tem que criar o obj produto

$produto2 = new Produto(
    "Caixa de Lápis de Cor",
    "Caixa c/ 12 un.",
    20.00,
    100
); //tem que criar o obj produto
$produto3 = new Produto(
    "Lápis Preto redondo",
    "Número 6",
    3.20,
    1000
); //tem que criar o obj produto

$produto4 = new Produto(
    "Outra coisaápis de Cor",
    "Caixa c/ 12 un.",
    20000,
    100,

);


//aqui foi criado como produto array lá em Produtos
$produto5 = new Produto(
    "Borracha",
    "Borracha macia",
    3.1,
    2000,

); //tem que criar o obj produto



//qual objeto eu quero, pe o fornecedor. cria o obj forn
$fornecedor = new Fornecedor(
    //passar os valores/params
    "Faber Castell",
    "11.111.111/0001-91",
    "(12) 99999-9999",
    //produtos em array, tem que criar o produto acima
    array($produto1, $produto2, $produto3, $produto4) /*cada produto que criar, precisa chamar aqui tbm/**/
    //acima são os produtos, var dos objetos, num array de produto que gerou chamando class de outra classe

);





$fornecedor->setProduto($produto5); //tem de ser abaixo do obj fornecedor, pq só pode usar depois de criada



// echo "<pre>";
// var_dump($fornecedor);
// echo "</pre>";



echo "<h3>Fornecedor</h3>";
echo "Razão Social : {$fornecedor->getRazaoSocial()} <br>";
echo "CNPJ : {$fornecedor->getCnpj()} <br>";
echo "Telefone : {$fornecedor->getTelefone()} <br>";
//produto é um array então precisa de um forEach
echo "<h4>Produtos</h4>";

foreach ($fornecedor->getProduto() as $produto/*essa var aqui poderia ser qlq nome, mas usamos produto*/) {
    echo "Nome: {$produto->getNome()} <br />";
    echo "Descrição: {$produto->getDescricao()} <br />";
    //formatando preco, mas poderia ser dentro do echo
    $preco = number_format($produto->getPreco(), 2, ",", ".");
    // echo "Preco: {$produto->getPreco()} <br />"; como formatou, comentei aqui e chemei a var direto
    echo "Preco: R$ $preco <br />"; /** */

    echo "Estoque: {$produto->getEstoque()} <br /><br />";
    //primeira mostra lapis preto, repete e mostra lpis de cor... e assim por diante, um loop


}


// 1 produto com 2 fornecedores criar

$fornecedor1 = new Fornecedor(
    "Tilibra",
    "22.222.22/0001-91",
    "(12) 68486-9999",
);
$fornecedor2 = new Fornecedor(
    "Pilot",
    "33.333.22/0001-91",
    "(12) 66657-9999",
);

$produto6 = new Produto(
    "Caderno",
    "espiral 500 fl",
    13.58,
    200,
    array($fornecedor1) //colocamos 1 por exemplo, e o 2 exemplo do set
);
$produto6->setFornecedor($fornecedor2);

//mostra produto e infos dele uma por uma
echo "<br><br>";
echo "<h3>Produto</h3>";
echo "Nome: {$produto6->getNome()} <br>";
echo "Descrição: {$produto6->getDescricao()} <br>";
echo "Preço: {$produto6->getPreco()} <br>";
echo "Estoque: {$produto6->getEstoque()} <br>";

// foreach para trazer as todas infos de todos fornecedores
echo "<h4>Fornecedores</h4>";
foreach ($produto6->getFornecedor() as $produtoDados) {
    echo "Razao Social: {$produtoDados->getRazaoSocial()} <br>";
    echo "CNPJ: {$produtoDados->getCnpj()} <br>";
    echo "Telefone: {$produtoDados->getTelefone()} <br> <br>";
}



?>