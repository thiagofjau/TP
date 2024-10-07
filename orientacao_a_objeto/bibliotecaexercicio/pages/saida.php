<!DOCTYPE html>
<html lang="en"></html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            box-sizing: border-box;
        }
        h1, h2 {
            color: #444;
            width: 100%;
        }
        .section {
            margin-bottom: 20px;
            flex: 1 1 30%;
            box-sizing: border-box;
            padding: 10px;
        }
        .section h2 {
            border-bottom: 2px solid #ddd;
            padding-bottom: 10px;
        }
        .item {
            margin-bottom: 10px;
        }
        .item span {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Informações da Biblioteca</h1>
        
        <div class="section">
            <h2>Editora</h2>
            <div class="item"><span>Nome:</span> <?php echo $editora->getNome(); ?></div>
            <div class="item"><span>CNPJ:</span> <?php echo $editora->getCnpj(); ?></div>
        </div>
        
        <div class="section">
            <h2>Aluno</h2>
            <div class="item"><span>Nome:</span> <?php echo $aluno->getNome(); ?></div>
            <div class="item"><span>Matrícula:</span> <?php echo $aluno->getRa(); ?></div>
        </div>
        
        <div class="section">
            <h2>Livro</h2>
            <div class="item"><span>Sinopse:</span> <?php echo $livro->getSinopse(); ?></div>
            <div class="item"><span>ISBN:</span> <?php echo $livro->getIsbn(); ?></div>
            <div class="item"><span>Publicação:</span> <?php echo $livro->getPublicacao()->getTitulo(); ?></div>
            <div class="item"><span>Gêneros:</span> 
                <?php foreach ($livro->getGeneros() as $genero) {
                    echo $genero->getDescritivo() . " ";
                } ?>
            </div>
        </div>
        
        <div class="section">
            <h2>Revista</h2>
            <div class="item"><span>Número:</span> <?php echo $revista->getNumero(); ?></div>
            <div class="item"><span>ISSN:</span> <?php echo $revista->getIssn(); ?></div>
            <div class="item"><span>Publicação:</span> <?php echo $revista->getPublicacao()->getTitulo(); ?></div>
        </div>
        
        <div class="section">
            <h2>Publicações</h2>
            <div class="item"><span>Livro:</span> <?php echo $publicacaoLivro->getTitulo(); ?></div>
            <div class="item"><span>Data:</span> <?php echo date('d/m/Y', strtotime($publicacaoLivro->getDataPublicacao())); ?></div>
            <div class="item"><span>Editora:</span> <?php echo $publicacaoLivro->getEditora()->getNome(); ?></div>
            <div class="item"><span>Revista:</span> <?php echo $publicacaoRevista->getTitulo(); ?></div>
            <div class="item"><span>Data:</span> <?php echo date('d/m/Y', strtotime($publicacaoRevista->getDataPublicacao())); ?></div>
            <div class="item"><span>Editora:</span> <?php echo $publicacaoRevista->getEditora()->getNome(); ?></div>
        </div>
        
        <div class="section">
            <h2>Empréstimo</h2>
            <div class="item"><span>Data:</span> <?php echo date('d/m/Y', strtotime($emprestimo->getDataEmprestimo())); ?></div>
            <div class="item"><span>Aluno:</span> <?php echo $emprestimo->getAluno()->getNome(); ?></div>
            <div class="item"><span>RA:</span> <?php echo $emprestimo->getAluno()->getRa(); ?></div>
        </div>
        
        <div class="section">
            <h2>Itens do Empréstimo</h2>
            <div class="item"><span>Item 1 - Data de Devolução:</span> <?php echo date('d/m/Y', strtotime($item1->getDataDevolucao())); ?></div>
            <div class="item"><span>Título:</span> <?php echo $item1->getLivro()->getPublicacao()->getTitulo(); ?></div>
            <div class="item"><span>Item 2 - Data de Devolução:</span> <?php echo date('d/m/Y', strtotime($item2->getDataDevolucao())); ?></div>
            <div class="item"><span>Título:</span> <?php echo $item2->getLivro()->getPublicacao()->getTitulo(); ?></div>
        </div>
    </div>
</body>
</html>
