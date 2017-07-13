<HTML>
	<HEAD>
		<TITLE>Segunda Aula de PHP</TITLE>
	</HEAD>
	<BODY>
		<H1>Trabalhando com ARRAY, vetores e listas</H1>
		<?php
		
			// 1º Forma de criar um ARRAY
			$listaAluno = array( // Cria uma matriz de vetores (varios valores salvos dentro de uma unica matriz)
				1 => 'Douglas',
				2 => 'Lucas',
				3 => 'Rhuan',
				'e' => 'Brunno',
				5 => 'Tais',
				6 => 'Daniele' // os numeros atrás da seta são os INDICES modificados
			);
		
			// 2º Forma de criar um ARRAY
				$listaFornecedor = array();
				$listaFornecedor[15] = 'Imageria';
				$listaFornecedor[39] = 'Tech';
		
			//ARRAY Simples
			$fichaCadastral = array (
				'nomeCompleto' => 'Brunno Henrique',
				'profissao' => 'Analista de Sistemas',
				'dataNascimento' => '29/08/1996',
				'Email Pessoal' => 'brunnobellaart@gmail.com'
			);
		
			//ARRAY Multidimensional: Um Array dentro de outro Array, ou seja, quando um dos INDICES armazena um ARRAY
			$listaProfessor = array(
				
				array(
					'nomeProfessor' => 'Douglas de Jesus',
					'Email' => 'douglasdejesus@hotmail.com',
					'Curso' => 'ImagePHP'
				),
				array(
					'nomeProfessor' => 'Bruno Marcorio',
					'Email' => 'brunomarcorio@gmail.com',
					'Curso' => 'ImagePress'
				)
				
			);
		
		
		
			print '<pre>'; // Responsavel pela formatação do ARRAY
		
				print_r ($listaFornecedor); // o print_r lista informações detalhadas sobre os ARRAY
				print "<br />";
				print "<br />";
				print_r ($listaAluno);
				print "<br />";
				print "<br />";
				print $listaAluno[3]; // Está listando somente um dos INDICES do Array listaAluno
				print "<br />";
				print "<br />";
				print_r ($fichaCadastral);
				print "<br />";
				print "<br />";
				print $fichaCadastral['profissao'];
				print "<br />";
				print "<br />";
				print $listaProfessor[1]['nomeProfessor'];
				print "<br />";
				print "<br />";
				print_r ($listaProfessor);
				print "<br />";
				print "<br />";
				var_dump ($fichaCadastral); // Lista informações mais detalhadas ainda sobre os ARRAY
		
				// A Tag BR para pular linha é escrita dessa forma somente quando está dentro do código PHP
			print '</pre>';
		?>
		
		
			<hr></hr>
			<H1>Expressões Aritméticas</H1>
			
			<p>Adição</p>
			<?php
				$valor1= 10;
				$valor2= 20;
				$resultado= $valor1 + $valor2;
				print $resultado;
			?>
			<p>Subtração</p>
			<?php
				$valor1= 40; // As variaveis podem ter nomes iguais com valores diferentes se estiverem em outro bloco de código PHP
				$valor2= 15;
				$resultado= $valor1 - $valor2;
				print $resultado;
			?>
			<p>Multiplicação</p>
			<?php
				$valor1= 4.2;
				$valor2= 5.1;
				$resultado= $valor1 * $valor2;
				print $resultado;
			?>
			<p>Divisão</p>
			<?php
				$valor1= 76;
				$valor2= 25;
				$resultado= $valor1 / $valor2;
				print $resultado;
			?>
			<p>Resto da Divisão (%)</p>
			<?php
				$valor1= 42;
				$valor2= 12;
				$resultado= $valor1 % $valor2;
				print $resultado;
			?>
			<p>Incrementar</p>
			<?php
				$i= 10;
				$i++;
				print $i;
			?>
			<p>Decrementar</p>
			<?php
				$i= 20;
				$i--;
				print $i;
			?>
		
		
			<hr></hr>
			<H1>Trabalhando com estrutura de controle</H1>
			<p>if</p>
			<p>else</p>
			<p>ifelse / if else</p>
			<p>switch</p>
			
			<?php

				// = representa Atribuição e == representa Comparação
				$x=3;
				$y=3;
				if ($x==$y){
					print 'Os valores comparados são iguais!'; // Se $x for igual a $y a mensagem será mostrada na tela!
				}

				print '<br/>';

				$z=0;
				if ($z){
					print $z; // Se a variavel $z conter algum valor positivo que não seja 0, a variavel $z será mostrado na tela!
				}
				
				print '<br/>';

				$x=5;
				$y=6;
				if ($x>=$y){
					print 'O valor na variavel X é maior que o valor na variavel Y!';
				}
				else {
					print 'O valor na variavel X é menor que o valor na variavel Y!';
				}

				print '<br/>';

				if (true){ // o padrão de um valor Booleano é sempre "True"
					print 'Verdadeiro';
				}
				else {
					print 'Falso'; // true == !false , false == !true
				}

				print '<br/>';

				$a=18;
				$b=25;
				if ($a != $b){
					print 'Os valores de A e B são diferentes!';
				}

				print '<br/>';

				$uf = 'SP';
				switch($uf){
					case 'SP':
						print 'São Paulo';
						break; // Para a execução do case
					case 'RJ':
						print 'Rio de Janeiro';
						break;
					case 'GO':
						print 'Goiás';
						break;
					default: // Executa de uma forma "padrão" caso nenhum dos cases forem atendidos!
						print 'UF não localizado';
						break;
				}


			?>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	</BODY>
</HTML>