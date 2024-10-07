<?php
class Publicacoes {
    private $dataPublicacao;
    private $titulo;
    private $editora;

    public function __construct($titulo, $dataPublicacao, Editora $editora) {
        $this->titulo = $titulo;
        $this->dataPublicacao = $dataPublicacao;
        $this->editora = $editora;
        $this->editora->adicionarPublicacao($this); // Vincula a publicação à editora
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getDataPublicacao() {
        return $this->dataPublicacao;
    }

    public function getEditora() {
        return $this->editora;
    }
}
?>
