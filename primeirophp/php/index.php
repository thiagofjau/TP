<?php
require_once "Cliente.class.php";

$cliente = new Cliente();

$connect = $cliente->conexao();

$resultado = $cliente->buscar_todos_cliente($connect);

// echo "<pre>"; //var_dump pra ver o resultado de buscar_todos_clientes
// var_dump($resultado);
// echo "</pre>";

if ($_GET) {
    echo $_GET["msg"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <a href="../html/form_produtos.html">
        <h2>Cadastrar Produto</h2>
    </a>
    <h1>Clientes</h1>
    <a href="../html/form_cliente.html">Novo Cliente</a>
    <br>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
            </tr>
        </thead>
        <tbody>
            <?php //para usar um comando php como forEach, precisa abrir um php e colocar dentro
            //primeiro parametro resultdo(matriz inteira) "as" cria var(ex: $dado) que pega linha toda da sua matriz, pega o index 0 e guarda nessa var
            foreach ($resultado as $dado) {
                //escreve o html, para isso usa o echo
                echo "
                    <tr>
                    <td>
                    {$dado->nome} {$dado->sobrenome}
                    </td> 
                    <td>
                	{$dado->cpf}
                    </td>
                </tr>";
            }
            ?>
        </tbody>
    </table>

    </form>
</body>

</html>