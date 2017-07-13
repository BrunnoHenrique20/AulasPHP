<?php

//Insere um arquivo dentro de outro arquivo
require_once('../functions.php');

$x1 = $_POST['numero1'];
$x2 = $_POST['numero2'];
$operacao = $_POST['operacao'];

$resultado = operacaoMatematica($x1, $x2, $operacao);

print 'O Resultado é '.$resultado;