<?php

//Incluir um arquivo dentro de outro arquivo (require_once ou include) (vantagem:reduz o tamanho do código)
// require_once(local do arquivo) <<< Estrutura
require_once('../functions.php');

// Trabalhando com Array Super Global: Vai capturar as informações enviadas pelo formulário

/*
$_GET
$_POST
$_REQUEST: Pode ser usado tanto para GET como tambem para POST

$_POST['name'] <<< Estrutura

*/

//isset: é uma função Booleana, que pergunta se existe a condição dentro do parênteses
//!isset: Se não existir...

if (!isset($_POST['linha']) || empty($_POST['linha'])){ //Verifique se não existe o campo linha ou se o campo linha está vazio
	print 'Preencha o campo linha!';
	print '<br/><br/>';
	print '<a href="index.html">Voltar</a>';
	print '<br/><br/>';
}

if (!isset($_POST['coluna']) || empty($_POST['coluna'])){ //Verifique se não existe o campo linha ou se o campo linha está vazio
	print 'Preencha o campo coluna!';
	print '<br/><br/>';
	print '<a href="index.html">Voltar</a>';
}

$linha = $_POST['linha'];
$coluna = $_POST['coluna'];

print criarTabela($linha, $coluna);