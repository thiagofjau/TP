<?php
    class Categoria
    {
        public function __construct(
            private string $descritivo = "",
            private array $produto = array(),
            ) {}

            public function getDescritivo() {
                return $this->descritivo;
            }

            public function getProduto() 
            {
                return $this->produto; 
            }

      

            //e set pra colocar mais prod na cat
    }//fim classe
?>