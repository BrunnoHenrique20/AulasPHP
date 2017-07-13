<HTML>
	<HEAD><TITLE>Trabalhando com Funções Nativas (function)</TITLE></HEAD>
	<BODY>
		<H1>Trabalhando com Funções Nativas</H1>
		<?php
		// Função que remove espaço a direita (rtrim):
		// r: right
		// trim: cortar
		
		$str = 'Imageria   ';
		print rtrim($str).'Criativa';
		
		print '<br/></br>';
		
		//Remove espaço a esquerda (ltrim):
		$aluno='   Brunno';
		print ltrim($aluno);
		
		print '<br/></br>';
		
		//Remove espaços da esquerda e da direita (trim):
		$aluno='       Brunno      ';
		print trim($aluno);
		
		//O trim é importante para a utilização no banco de dados para que os valores digitados pelo usuário fique de forma mais legível possível.
		
		//Quantidade de caracteres de uma string (strlen)
		
		print '<br/></br>';
		$escola='Imageria Criativa';
		print strlen($escola);
		
		//strtolower: converte o texto em string para caixa baixa
		//str: Função de String
		//to: para
		//lower: Caixa baixa
		
		print '<br/></br>';
		$texto='IMAGERIA CRIATIVA - TEXTO EM CAIXA ALTA';
		print strtolower($texto);
		
		//strtoupper: converte o texto em string para caixa alta
		print '<br/></br>';
		$texto='IMAGERIA CRIATIVA - TEXTO EM CAIXA BAIXA';
		print strtoupper($texto);
		
		/* Substituir parte da minha string (str_replace)
		(1,2,3)
		1: Localiza o Parâmetro para substituir
		2: Substitui o 1º Parametro pelo texto digitado nesse parâmetro
		3: A variável string
		*/
		
		print '<br/></br>';
		$cpf='000.000.000-00';
		$cpf= str_replace('.', '', $cpf); //Remove os pontos
		$cpf= str_replace('-', '', $cpf); //Remove os hifens
		print $cpf; //Printa o CPF já com as duas remoções anteriores
		
		//Outro Método mais simples de se fazer:
		//print str_replace(array('.','-'), '', $cpf);
		
		print '<br/><br/>';
		
		//Formatando um Double
		$dinheiro = 8542.85;
		print number_format($dinheiro, 2, ',', '.');
		
		/* NUMBER_FORMAT(1,2,3,4);
		   1: Variável double
		   2: Número de casas decimais que serão mostradas após a vírgula
		   3: ',' Parâmetro Final
		   4: '.' Parâmetro Inicial    */
		
		print '<br/><br/>';
		
		//INVERTER UMA STRING (strrev)
		$nome='Criatividade';
		print strrev($nome);
		
		print '<br/><br/>';
		
		//Adicionar barra invertida
		$nomeProduto = addslashes("TV LED 21'5"); //addslashes: Insere a barra invertida antes das aspas simples dentro da string
		print "INSERT INTO produtos (nomeProduto) VALUES ('".$nomeProduto."')";
		//Se eu quiser que apareça as aspas simples (') no comando devemos utilizar as aspas duplas (") no código PHP
		
		print '<br/><br/>';
		
		//Outro método mais simples de se escrever o comando, sem usar Aspas Duplas no código:
		print 'INSERT INTO produtos (nomeProduto) VALUES (\''.$nomeProduto.'\')';
		print '<br/><br/>';
		
		
		/* Verificando uma string
		
		substr(1,2,3);
		1: Valor da variavel string
		2: Posição em que vai se iniciar a printagem
		3: Quantidade de caracteres que vão ser printados
		
		*/
		$texto= substr('abcdefg',1,5);
		print $texto;
		
		print '<br/><br/>';
		
		//Adicionando espaços
		$nomeProduto='Camisa';
		print str_pad($nomeProduto, 10, '-', STR_PAD_LEFT);
		
		/* str_pad(1,2,3,4);
			1: Variável
			2: Define o numero de caracteres que vai ter o valor da variável
			3: Ao inves de adicionar espaços em branco ele adiciona o valor contido nesse parâmetro
			4: Define a posição de onde vai ser adicionado, se é antes da palavra, ou depois da palavra   */
		
		print '<br/><br/>';
		
		
		
		
		
		//Convertendo uma string em uma Array
		$nome="Douglas de Jesus";
		print_r(explode(' ', $nome)); //Aonde encontrar um espaço, ele cria a próxima posição do ARRAY (vai ser um Array de 3 posições nesse caso)
		print_r($nome);
		print '<br/><br/>';
		
		
		//Convertendo um Array em uma string
		$nome= array(
				"Douglas",
				"de",
				"Jesus"
		);
		print implode(', ', $nome);
		print '<br/><br/>';
		
		
		
		
		print str_shuffle('Douglas de Jesus'); //Embaralha toda uma String
		
		
		
		
		
		?><hr/><H1>Trabalhando com Criptografia</H1><?php
		print '<br/><br/>';
		
		print md5('123456'); // 32 caracteres
		print sha1('123456'); // 40 caracteres
		
		$criptografando = base64_encode('123456'); //Criptografando a informação
		print $criptografando;
		print '<br/><br/>';
		print base64_decode($criptografando); //Descriptografando a informação
		
		
		//Outra forma de fazer a impressão verificando a string de uma ARRAY:
		$nomes= array(
				"Douglas",
				"Lucas",
				"Brunno"
		);
		
		print '<br/><br/>';
		print $nomes[0];
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		?>
	</BODY>
</HTML>