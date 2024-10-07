<?php

class LimpezaRestauracao extends Servico
{
    public function __construct(
        private string $materialUsado = "", //PRIVATE nas filhas, NUNCA protected, pq protected só o pai.. só filha acessa atributos do pai
        private string $denteTratado = "", //PRIVATE nas filhas
        $descricao = "", //Pai vai sem o private/protected
        $preco = 0.00, //Pai vai sem o private/protected
    ) {//chama construtor da classe pai e chama var
        parent::__construct(
            $descricao, //recebe só a var da classe pai
            $preco
        );
    }

    //materialUsado
    public function getMaterialUsado()
    {
        return $this->materialUsado;
    }

    public function setMaterialUsado(string $materialUsado)
    {
        $this->materialUsado = $materialUsado;
    }

    public function getDenteTratado()
    {
        return $this->denteTratado;
    }

    public function setDenteTratado(string $denteTratado)
    {
        $this->denteTratado = $denteTratado;
    }

}//fim classe

?>