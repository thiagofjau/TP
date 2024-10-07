<?php
    require_once 'Aluno.class.php';
    require_once 'Editora.class.php';
    require_once 'Publicacoes.class.php';
    require_once 'Emprestimo.class.php';
    require_once 'Itens.class.php';
    require_once 'Livro.class.php';
    require_once 'Revista.class.php';
    require_once 'Genero.class.php';

// obj editora
$editora = new Editora("Editora ABC", "12.345.678/0001-99");

// obj livro e revista
$publicacaoLivro = new Publicacoes("Livro PHP", "1998-10-01", $editora);
$publicacaoRevista = new Publicacoes("Revista de Programação", "2005-10-01", $editora);

// obj gêneros
$genero1 = new Genero("Programação");
$genero2 = new Genero("Tecnologia");

// obj livro e adicionando gêneros
$livro = new Livro("Desvendando os segredos do PHP", "978-3-16-148410-0", $publicacaoLivro);
$livro->adicionarGenero($genero1);
$livro->adicionarGenero($genero2);

// obj revista
$revista = new Revista("10", "1234-5678", $publicacaoRevista);

// obj aluno
$aluno = new Aluno("Thiago Figueredo", "RA321321");

// obj empréstimo
$emprestimo = new Emprestimo("2024-10-04", $aluno);

// obj itens e vinculando ao empréstimo
$item1 = new Itens("2026-10-10", $emprestimo, $livro);
$item2 = new Itens("2025-10-12", $emprestimo, $livro);


// include "../pages/saida.php";
