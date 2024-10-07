<?php
class Cliente
{
    public function __construct(
        public int $id_cliente = 0,
        public string $nome = "",
        public string $sobrenome = "",
        public string $cpf = "",

    ) {
    } //fim construtor

    //inserir
    public function inserir($conexao)
    {
        $sql = "INSERT INTO clientes (nome, sobrenome, cpf)
                            VALUES(?,?,?)";
        //??? para evitar injeção sql, segurança
        $stm = $conexao->prepare($sql);
        $stm->bindValue(1, $this->nome);
        $stm->bindValue(2, $this->sobrenome);
        $stm->bindValue(3, $this->cpf);

        $stm->execute();

        return "Cliente inserido com sucesso";
    }


    //conexao com banco
    public function conexao()
    {
        $parametros = "mysql:host=localhost;dbname=primeirophp;charset=utf8mb4";
        //instanciando um objeto da classe PDO que é uma classe que vem com o PHP
        // user root e senha ""(vazia)
        $conexao = new PDO($parametros, "root", "");

        //retornando conexao aberta
        return $conexao;
    }

    //BUSCAR CLIENTES
    public function buscar_todos_cliente($conexao)
    {
        $sql = "SELECT * FROM CLIENTES";

        $stm = $conexao->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
        //return $stm->fetchAll(PDO::FETCH_OBJ); modo do banco de dados
        //return $stm->fetchAll(PDO::FETCH_NUM); modo numerico

    }

    //ALTERAR

    //EXCLUIR

    //ex matriz: $mat[0][1] (linha 0 coluna 1, pense como 2 dimensões, 2 indices pra achar 1 elemento, pode ter mais que 3/4 dimensoes)


} //fim da classe
?>
