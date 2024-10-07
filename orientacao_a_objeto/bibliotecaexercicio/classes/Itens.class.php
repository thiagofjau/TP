<?php
class Itens
{
    private $dataDevolucao;
    private $emprestimo; // Relacionamento com a classe Emprestimo
    private $livro; // Relacionamento com a classe Livro

    public function __construct($dataDevolucao, Emprestimo $emprestimo, Livro $livro)
    {
        $this->dataDevolucao = $dataDevolucao;
        $this->emprestimo = $emprestimo;
        $this->livro = $livro;
        $this->emprestimo->adicionarItem($this); // Vincula o item ao empréstimo
    }

    public function getDataDevolucao()
    {
        return $this->dataDevolucao;
    }

    public function getEmprestimo()
    {
        return $this->emprestimo;
    }

    public function getLivro()
    {
        return $this->livro;
    }
}
?>