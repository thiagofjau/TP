<?php
class Produto
{
    public function __construct(
        private string $nome = "",
        private string $descricao = "",
        private float $preco = 0.00,
        private int $estoque = 0,
        private $categoria = null //fracamente tipado
        //fort tipado, classe Categoria $categoria = new Categoria(params da classe Cat) ou sem classe pode ser null
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

    public function getCategoria()
    {
        return $this->categoria;
    }






    // public function getFornecedor() 
    // {
    //     return $this->fornecedor;
    // }

    // public function setFornecedor(Fornecedor $fornecedor)
    // {
    //     $this->fornecedor[] = $fornecedor; //tem que chamar colchete pq aqui é array
    // }
    
}
?>