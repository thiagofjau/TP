<?php
class Emprestimo {
    private $dataEmprestimo;
    private $aluno; // Relacionamento com a classe Aluno
    private $itens = []; // Relacionamento com vários itens

    public function __construct($dataEmprestimo, Aluno $aluno) {
        $this->dataEmprestimo = $dataEmprestimo;
        $this->aluno = $aluno;
    }

    public function getDataEmprestimo() {
        return $this->dataEmprestimo;
    }

    public function getAluno() {
        return $this->aluno;
    }

    public function adicionarItem(Itens $item) {
        $this->itens[] = $item;
    }

    public function getItens() {
        return $this->itens;
    }
}
?>
