<?php

class Exame extends Servico
{
    public function __construct(
        private string $medidaPreventiva = "", //this class, FILHAS SEMPE PRIVATE
        private string $tipoExame = "", //this class
        $descricao = "", //classe pai, SÒ ATRIBUTOS, sem string.. ou protected
        $preco = 0.00, //classe pai
    ) {//chama construtor da classe pai e chama var
        parent::__construct(
            $descricao, //recebe só a var da classe pai
            $preco
        );
    }

    //medidaPreventiva
    public function getMedidaPreventiva()
    {
        return $this->medidaPreventiva;
    }

    public function setMedidaPreventiva(string $medidaPreventiva)
    {
        $this->medidaPreventiva = $medidaPreventiva;
    }

    //tipoExame
    public function getTipoExame()
    {
        return $this->tipoExame;
    }

    public function setTipoExame(string $tipoExame)
    {
        $this->tipoExame = $tipoExame;
    }

}//fim classe

?>