<?php 
    require_once "Servico.class.php";
    require_once "../herancas/Exame.class.php";

    $exame = new Exame(preco: 12.20, descricao: "descricao"); //verificar pq não roda no echo
    // $exame = new Exame("aush", "qwqw", "akijskas", 12.20);
    echo $exame->getPreco() . "<br>";
    echo $exame->getDescricao();


/*tema da aula: associação bilateral e unilateral entre classes
produto-----fornecedor umproduto pode ter varios fornc assim como varios fornec podem ter 1 produt




*/
?>