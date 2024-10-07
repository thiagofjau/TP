<?php
class Fornecedor
{
    public function __construct(
        private string $razaoSocial = "",
        private string $cnpj = "",
        private string $telefone = "",
        private array $produto = array() //produto não é atributo natural, é do produto. 
        /*relacao bilateral/bidirecional private tipo array $var de onde vai puxar recebe array vazio
        obs: qnd é n pra n, tipo do banco, classe n pra n não gera nova tabela como banco*/
    ) {
    }

    public function getRazaoSocial() 
    {
        return $this->razaoSocial;
    }
    public function getCnpj() 
    {
        return $this->cnpj;
    }
    public function getTelefone() 
    {
        return $this->telefone;
    }
    public function getProduto() 
    {
        return $this->produto;
    }

    public function setProduto(Produto $produto) 
    //..se quiser colocar mais um produto lá dentro. Tipa como o Classe Produto para só receber produto, e não outra coisa...
    {
        $this->produto[] = $produto; /**recebe o produto que tá ali na tipagem/definicao e como Array pq ele é array */;
    }

}

?>