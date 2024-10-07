<?php

class Produto
{
    public function __construct(
        private string $nome = "",
        private string $descricao = "",
        private int $estoque = 0,
        private float $preco = 0.00
    ) {
    }

    //métodos Gets e Setters
    //get
    public function getNome()
    {
        return $this->nome; /*this substitui o objeto, ex produto1 ou produto2*/
    }

    //set
    public function setNome($nome) //vai parâmetro pra settar, pode ser qlq nome, mas padrao criar com mesmo nome do atrib
    {
        $this->nome = $nome;
    }
    public function getDescricao()
    {
        return $this->descricao; /*this substitui o objeto, ex produto1 ou produto2*/
    }

    //set
    public function setDescricao($descricao) //vai parâmetro pra settar, pode ser qlq nome, mas padrao criar com mesmo nome do atrib
    {
        $this->descricao = $descricao;
    }
    public function getEstoque()
    {
        return $this->estoque; /*this substitui o objeto, ex produto1 ou produto2*/
    }

    //set
    public function setEstoque($estoque) //vai parâmetro pra settar, pode ser qlq nome, mas padrao criar com mesmo nome do atrib
    {
        $this->estoque = $estoque;
    }
    public function getPreco()
    {
        return $this->preco; /*this substitui o objeto, ex produto1 ou produto2*/
    }

    //set
    public function setPreco($preco) //vai parâmetro pra settar, pode ser qlq nome, mas padrao criar com mesmo nome do atrib
    {
        $this->preco = $preco;
    }
}//fim da classe

?>
