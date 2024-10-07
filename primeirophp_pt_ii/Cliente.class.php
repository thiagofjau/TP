<?php

//******************classe é um modelo para Criar objeto!

    class Cliente
    //class é reservada, Cliente é nome da classe e não fecha, só {}
    {
        //atributos da classe. Sempre dizer se é public ou não acessável por outras partes do cód
        
        //criar um construtor, em vez do padrão(new)
        public function __construct(
            public int $id_cliente = 0,
            public string $nome = "",  /*procure tipar classes, mesmo php não sendo fort tipado*/
            public string $sobrenome = "", //tem que atribuir vazio, pq se ficar null(vazio) dá erro
            public string $cpf = "" //troca ; por ,
            
){} //fim construtor

        //métodos***********

        //inserir
        public function inserir($conexao) {
                            //pra inserir precisamos da conexao e já passamos de param
        $sql = "INSERT INTO clientes (nome, sobrenome, cpf)
                            VALUES(?,?,?)";
                                //??? para evitar injeção sql, segurança
                            $stm = $conexao->prepare($sql);
                            //metodo pra preparar $sql, segurança, substitui os ????
                            $stm->bindValue(1,$this->nome);
                            $stm->bindValue(2,$this->sobrenome);
                            $stm->bindValue(3,$this->cpf);
                                        //1 esse nome
                            //substituir uma frase, ex se coloca drop table no nome, ai nao executa, isso pra seguranca

                            //agora já preparado para inserir:
                            $stm->execute();

                            //retorna mensagem de sucesso, quando chama a função lá ela executa tudo, e o retorno tá uma string
                            //com mensagem de sucesso
                            return "Cliente inserido com sucesso";
        }
        //im da classe

        //conexao com banco
        public function conexao() {
            //params p/ abrir conexao c/ o DB utilizandoa Class PDO ()biblioteca que vem com php data object multibanco
                            //isso ela ensinou, não pegou emnenhum lugar
            $parametros = "mysql:host=localhost;dbname=primeirophp;charset=utf8mb4";
            
            //instanciando um objeto da classe PDO que é uma classe que vem com o PHP
                                // user root e senha ""(vazia)
            $conexao = new PDO($parametros, "root", "");
            
            //retornando conexao aberta
            return $conexao;
        }

        //BUSCAR CLIENTES
        public function buscar_todos_cliente($conexao) {
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