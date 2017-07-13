<?php
// Trabalhando com funções personalizadas
// .= atribui o próximo valor novo concatenando com o valor anterior que ja foi atribuido na variável

define('ADICAO',		1);
define('SUBTRACAO',		2);
define('MULTIPLICACAO',	3);
define('DIVISAO',		4);

function criarTabela($linha, $coluna){
	
	$html='';
	$html.='<table border="2" bgcolor="#9BEDFB" align="center"><tbody><tr>';
	 
	// $i = 10;  Quantidade de Linhas
	// $j = 5;   Quantidade de Colunas
		
	for ($i=1; $i<=$linha; $i++){
			$html.='<tr>';
			for ($j=1; $j<=$coluna; $j++){
				$html.='<td>Linha = '.$i.' | Coluna = '.$j.'</td>';
			}
			$html.='</tr>';
		}
	
	$html.='</table>';
	
	return $html; // Retorna o valor da variável
}


function operacaoMatematica($x1, $x2, $operacao){
	
	switch($operacao){
			
		case ADICAO:
			$resultado=$x1+$x2;
			break;
			
		case SUBTRACAO:
			$resultado=$x1-$x2;
			break;
			
		case MULTIPLICACAO:
			$resultado=$x1*$x2;
			break;
			
		case DIVISAO:
			$resultado=$x1/$x2;
			break;
	}
	
	return $resultado;
}
?>