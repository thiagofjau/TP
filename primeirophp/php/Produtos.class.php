<?php

class Produtos
{
    public function __construct(
        public int $id_produto = 0,
        public string $nome = "",
        public string $descricao = "",
        public float $valor = 0
    ) {
    }//fim construct

    //conexao
    public function conexao()
    {
        $params = "mysql:host=localhost;dbname=primeirophp;charset=utf8mb4";

        $conexao = new PDO($params, "root", "");

        return $conexao;
    }//fim conexao

    //inserir
    public function inserir($conexao)
    {
        $sql = "INSERT INTO produtos (nome, descricao, valor)
                            VALUES(?, ?, ?)";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(1, $this->nome);
        $stmt->bindValue(2, $this->descricao);
        $stmt->bindValue(3, $this->valor);

        $stmt->execute();

        return "Produto cadastrado com sucesso!";
    }
    //fim inserir

    //buscar todos os produtos
    public function buscar_todos_produtos($conexao)
    {
        $sql = "SELECT * FROM PRODUTOS";
        $stm = $conexao->prepare($sql);
        $stm->execute();

        return $stm->fetchAll(PDO::FETCH_OBJ);
    }


}//fim classe

?>