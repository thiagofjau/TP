<?php
class Produto
{
    public function __construct(
        private string $nome = "",
        private string $descricao = "",
        private float $preco = 0.00,
        private int $estoque = 0,
        private array $fornecedor = array() //relacao bilateral/bidirecional private tipo array $var de onde vai puxar recebe array vazio
        /*fornecedor não é atributo natural*/) {
    }

    public function getNome() 
    {
        return $this->nome;
    }
    public function getDescricao() 
    {
        return $this->descricao;
    }
    public function getPreco() 
    {
        return $this->preco;
    }
    public function getEstoque() 
    {
        return $this->estoque;
    }
    public function getFornecedor() 
    {
        return $this->fornecedor;
    }

    public function setFornecedor(Fornecedor $fornecedor)
    {
        $this->fornecedor[] = $fornecedor; //tem que chamar colchete pq aqui é array
    }
    
}
?>