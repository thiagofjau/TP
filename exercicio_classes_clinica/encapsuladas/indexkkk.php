<?php

require_once "Paciente.class.php";
require_once "Servico.class.php";
// require_once "Exame.class.php";
// require_once "Consulta.class.php";


$paciente1 = new Paciente(
    "João Carlos",
    "11111111111",
    "Rua 13 de maio, 29 - Jaú SP",
    "(14) 99999-9999",
    "27/04/2000",
    "Desenvolvedor de Software"
);
$exame = new Servico(
    "Exame de sangue",
    preco: 120.23 //pode chamar com preco: o nome da var para chamar só ela ou não ter erro...
);

// $data = new Agenda(
//     "1999",
//     "auhsuh"
// );

echo "nome antigo: " . $paciente1->getNome() . "<br><br>"; //encapsulado(privado) precisa usar get(nada a ver com $_GET), nao precisa param aqui

$paciente1->setNome("João Carlos Almeida Prado nome reSetado"); //pra atribuir/regravar precisa usar o set, só grava e não show, precisa do echo

echo "Paciente: " . $paciente1->getNome() . "<br>";
echo "RG: " . $paciente1->getRg() . "<br>";
echo "Endereço: " .$paciente1->getEndereco() . "<br>";
echo "Telefone: " .$paciente1->getTelefone() . "<br>";
echo "Nascimento: " . $paciente1->getDataNasc() . "<br>";
echo "Profissão: " .$paciente1->getProfissao() . "<br><br>";

//echo da classe servico
echo "Tipo: " . $exame->getDescricao() . "<br>";
echo "Preço: " . $exame->getPreco() . "<br><br>";

//echo da filha exame
// echo "Med. Prevent.: " . $exame->getMedidaPreventiva() . "<br><br>";

echo $exame->setPreco(6540.23) .  " Novo preco setado, aqui não mostra, só setou, mostra abaixo no get: <br>";
echo $exame->getPreco() . "<br>";
// echo $exame->getConsulta() . "<br>";


?>