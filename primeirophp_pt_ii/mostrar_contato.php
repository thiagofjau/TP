<?php

    if ($_GET) {

    require_once "Cliente.Class.php"; 

    $obj = new Cliente(nome:$_GET["nome"], sobrenome:$_GET["sobrenome"], cpf:$_GET["cpf"]);
  
    $conect = $obj->conexao();

    $msg = $obj->inserir($conect);

    // echo $msg;// deletar esse acho para criar um header location
    header("location:index.php?msg=$msg"); //?NomeDoQueVaiReceberAVar=variavelDeRetornoDaMensagem ex: mensagem do link do whatsapp que passa parametro como msg na pag
    die(); //comando die para morrer, não executar nada mais abaixo...

    }
    else {
        header("location:form_cliente.html");
    }

?>


<!-- <?php /* -->
.,

 
        //treinar: CRIAR UMA CLASSE PRODUTO, INTERFACE 

    //verificar
    if ($_GET) // ==true, não precisa colocar o ==true, se true roda normal, else volta para index.html
    {
       //chamar o arquivo PHP lá da classe
    require_once "Cliente.Class.php"; //once é chamar uma só vez, usar o maiúsculo C, ex
    //require se não achar para, trava, no include se ele não achar ele executa,só da erro quando precisar

    // //criar objeto a partir da nossa classe com construtor padrão NEW
    // $obj = new Cliente(); //new é usado para criar esse objeto $obj,
    // //o NEW chama um construtor de casse padrão(dá pra criar um), chamou classe e atribuiu na var obj
    // //**desvantagem new: toda vez que criar objeto tem que passar as var abaixo $obj>nome = $_GET[""]...
    // // //para ver o obj criado, só pra ver:
 

    // $obj->nome = $_GET["nome"]; //para inserir/atribuir e acessar em vez de obj.nome seria obj->nome
    // $obj->sobrenome = $_GET["sobrenome"]; //$GET para puxar lá do get do html e nome do name da prop do html
    // $obj->cpf = $_GET["cpf"];

            //new normal faz com que tenha que escrevar mais e pesa performance, ex: $obj->nome =
            //o __construct faz escrever menos e ganha performance

    //COM CONSTRUTOR se passa as var obj->nome no parâmetro da criação do obj:
    $obj = new Cliente(nome:$_GET["nome"], sobrenome:$_GET["sobrenome"], cpf:$_GET["cpf"]);
    //se quiser passar param fora de ordem, passar nome var sem $ ex: nome:$_GET["cpf"]...
        // se não colocar nome: deveria colocar 0 do id 
    //abrir CONEXAO com DB
    $conect = $obj->conexao();

    //ai chama o metodo inserir e passa o param da conexao acima 
    $msg = $obj->inserir($conect);

    //$conect = null; //FECHOU CONEXAO?
    //retornar mensagem de sucesso
    echo $msg;

    // echo "<pre>"; //prev formata melhor pra gente ver o var_dump
    // var_dump($obj); //pra ver obj, matriz... se precisar ver se o conteúdo tá certo, o que tem... etc
    // echo "</pre>";  
    }
    else { //se erro, voltar para o arquivo, ex index.html
        header("location:index.html");
    }

    


//ou 
// echo "Nome: {$_GET["nome"]}<br>"; //interpolado {}
// echo "O nome é " . $_GET["sobrenome"]; //concatenado


/*
Orientação a Objeto

- Abstração: trazer coisas da ideia, requisitos, para o mundo real.
ex: pra fz um ecommerce. vou precisar do registro do do cliente, nome, cpf, ele vai fazer compra, colocar no carrinho... 
tudo que vai levantar a gente vai transformar em objeto... 

- Objeto: variáveis(guardar dados temporariamente). 
persistencia, guarda no banco, pro dado persistir

- Classes: será o tipo de variável, é um modelo que serve pra criar o objeto, que é gerado a partir de uma classe

pensar antes, desenvolver depois, pq pode criar coisa que não vai usar, perder tempo...


pensar numa classe cliente. fiz uma abstração e criei a classe Cliente.
3 compartimentos. 
1º Cliente,
2º atributos(elementos que vamos precisar, ex nome, sobrenome e cpf), 
3º ações que essa classe vai fazer(métodos ex: inserir cliente no db, excluir, bloquear, várias ações)


*/
