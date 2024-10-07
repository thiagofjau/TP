<?php
    class Cliente
    {
        //atributos da classe. Sempre dizer se é public ou não acessável por outras partes do cód
        public string $nome;  /*procure tipar classes, mesmo php não sendo fort tipado*/
        public string $sobrenome;
        public string $cpf;

        //métodos
        public function inserir() {
            echo "Estou no inserir";
        }
        //im da classe
    }
?>