<?php

class Paciente
{
    public function __construct(
        private string $nome = "",
        private string $rg = "",
        private string $endereco = "",
        private string $telefone = "",
        private string $data_nasc = "",
        private string $profissao = ""
    ) {
    }

    //métodos Gets e Setters

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getRg()
    {
        return $this->rg;
    }

    public function setRg($rg)
    {
        $this->rg = $rg;
    }
    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }
    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function getDataNasc()
    {
        return $this->data_nasc;
    }

    public function setDataNasc($data_nasc)
    {
        $this->data_nasc = $data_nasc;
    }

    public function getProfissao()
    {
        return $this->profissao;
    }

    public function setProfissao($profissao)
    {
        $this->profissao = $profissao;
    }


    //Métodos

    // //Verificar paciente cadastrado
    // public function verificarPacienteCadastrado()
    // {
        
    // }

    // //Adicionar paciente
    // public function adicionarPaciente()
    // {

    // }

    // //Obter paciente
    // public function obterPaciente()
    // {

    // }

    // //Obter consulta
    // public function obterConsulta()
    // {

    // }

    // //Adicionar consulta
    // public function adicionarConsulta()
    // {

    // }

    // //Localizar paciente
    // public function localizarPaciente() 
    // {
        
    // }

    // //Cadastrar paciente
    // public function cadastrarPaciente()
    // {

    // }

}//fim da classe

?>