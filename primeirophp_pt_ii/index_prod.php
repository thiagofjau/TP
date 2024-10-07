<?php
require_once "Produtos.class.php";

$produto = new Produtos();

$connect = $produto->conexao();

$resultado = $produto->buscar_todos_produtos($connect);

if ($_GET)
{
    echo $_GET["msg"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- <a href="./produtos.html"><h2>Cadastrar Produto</h2></a> -->
    <h1>Produtos</h1>
    <a href="form_produtos.html">Novo Produto</a>
    <br>
    <table>
        <thead>
            <tr>
                <th>Produto</th>
                <th>Descrição</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody>
           <?php //para usar um comando php como forEach, precisa abrir um php e colocar dentro
                    //primeiro parametro resultdo(matriz inteira) "as" cria var(ex: $dado) que pega linha toda da sua matriz, pega o index 0 e guarda nessa var
            foreach($resultado as $dado) {
                //escreve o html, para isso usa o echo
                echo "
                    <tr>
                    <td>
                    {$dado->nome}
                    </td> 
                    <td>
                	{$dado->descricao}
                    </td>
                    <td>
                	{$dado->valor}
                    </td>
                </tr>";
            }
           ?>
        </tbody>
    </table>
    
    </form>
</body>
</html>