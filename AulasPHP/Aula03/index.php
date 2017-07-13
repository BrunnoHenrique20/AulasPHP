<HTML>
	<HEAD><TITLE>Aula 03</TITLE></HEAD>
	<BODY>
	<H1>Operadores Lógicos</H1><br><br>
		<?php
		// Operadores Lógicos
		// E: and, &&
		// OU: or, ||
		
		$x1=10;
		$x2='10';
		$x3=15;
		$x4=20;
		
		// = Atribuição , == Comparação , === Comparação com Tipo
		
		// Comando &&
		
		if ($x1==$x2 && $x3==$x4){
			print 'Verdadeiro e Falso = Falso';
			print '<br/>';
		}
		
		if ($x1===$x2 && $x3==$x4){
			print 'Falso e Falso = Falso';
			print '<br/>';
		}
		
		if ($x1 != $x2 && $x3==$x4){
			print 'Falso e Falso = Falso';
			print '<br/>';
		}
		
		if ($x1==$x2 && $x3 != $x4){
			print 'Verdadeiro e Verdadeiro = Verdadeiro';
			print '<br/>';
		}
		
		// Comando ||
		
		if ($x1==$x2 || $x3==$x4){
			print 'Verdadeiro ou Falso = Verdadeiro';
			print '<br/>';
		}
		
		if ($x1 != $x2 || $x3 != $x4){
			print 'Falso ou Verdadeiro = Verdadeiro';
			print '<br/>';
		}
		
		if ($x1===$x2 || $x3==$x4){
			print 'Falso ou Falso = Falso';
			print '<br/>';
		}
		
		if ($x1==$x2 || $x3 != $x4){
			print 'Verdadeiro ou Verdadeiro = Verdadeiro';
			print '<br/>';
		}
			
		?><H1>Trabalhando com Estrutura de Repetição</H1><br><br><?php
		
		// Foreach, For, While, Do While
		
		$estado = array(
			5 => 'GO',
			15 => 'DF',
			30 => 'BA',
			45 => 'SP',
			60 => 'MG'
		);
		
		// Foreach: Ele passa por todos os elementos do array repetindo eles e jogando na tela

		foreach ($estado as $indice => $valor){ // A primeira variavel depois do AS dentro do Foreach sempre vai ser definida como o INDICE (mesma sintaxe do ARRAY)
			print 'Indice = ' . $indice . ' - Valor = ' . $valor . '<br/>'; // O "." serve para Concatenação dentro do PHP
		}
		
		print '<br/>';
		
		/* Sintaxe do For:
		
		for (1; 2; 3){
			
		}
		
		1 = Inicio da Contagem
		2 = Ate onde vai a Contagem
		3 = Incremento/Decremento da Contagem
		
		*/
		
		for ($i=0; $i<10; $i++){
			print 'Valor do indice = '.$i.'<br/>';
		}
		
		print '<br/>';
		// While: Faz a verificação e executa
		
		$c = 0;
		while ($c < 10){
			print $c.'<hr/>';
			$c++;
		}
		
		print '<br/>';
		
		// Do While: É igual o While, porém o comando vai ser executado automaticamente e depooois sim ele vai fazer a Verificação
		
		/* do {
			
		} while () */
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		?>
	</BODY>
</HTML>