<HTML>
	<HEAD><TITLE>Validacao de CPF</TITLE></HEAD>
	<BODY>
		<?php
		//Calcular a validação de um CPF se o número 111.444.777-XX é válido, descobrindo os dois ultimos digitos verificadores
		
		//Montamos o Array do CPF digitado pelo usuário
		$primeirodigito=array(
			1=>1,
			2=>1,
			3=>1,
			4=>4,
			5=>4,
			6=>4,
			7=>7,
			8=>7,
			9=>7
		);
		
		//Montamos o Array dos dois dígitos verificadores
		$segundodigito=array(
			10=>0,
			11=>0
		);
		
		//Montamos o Array com os Pesos de entrada que vão ser utilizados na Somatória
		$pesoentrada=array(
			0=>11,
			1=>10,
			2=>9,
			3=>8,
			4=>7,
			5=>6,
			6=>5,
			7=>4,
			8=>3,
			9=>2
		);
		
		//Fazemos um 'for' com a multiplicação do digito[i] com o peso de entrada[i] de todos os dígitos do Array $primeirodigito e junto fazemos a Somatória de cada resultado obtido na variável $soma
		
		$soma=null;

		print '<table width="100" border="1"><tbody>';
			
		for ($j=1; $j<=3; $j++){
			switch($j){
				
				case 1:
					print '<tr>';
					for ($i=1; $i<=9; $i++){
						print "<td align=center>$primeirodigito[$i]</td>";
					}
					print '</tr>';
				break;
				
				case 2:
					print '<tr>';
					for ($i=1; $i<=9; $i++){
						print "<td align=center>$pesoentrada[$i]</td>";
					}
				break;
					
				case 3:
					print '<tr>';
					for ($i=1; $i<=9; $i++){
						$mult=$primeirodigito[$i]*$pesoentrada[$i];
						$soma=$soma+$mult;
						print "<td align=center>$mult</td>";
					}
				break;
			}
		}
		
		print '</tbody></table>';
		
		print '<br/>';
		print 'Soma: '.$soma;
		print '<br/><br/>';
		
		//Dividimos o Resultado da Somatória por 11, obtendo o Quociente e o Resto da divisão
		$quociente= $soma / 11;
		$resto= $soma % 11;
		
		//Formatamos o Quociente para 1 casa decimal após a vírgula
		print 'Quociente: '.number_format($quociente,1,',','.');
		print '<br/><br/>';
		print 'Resto: '.$resto;
		
		//Caso o resto for menor que 2 o Primeiro Dígito Verificador será 0, caso contrário, será 11 - o Resto
		if ($resto<2){
			$segundodigito[10]=0;
		}
		else {
			$segundodigito[10]=11-$resto;
		}
		
		print '<br/><br/>';
		print 'Primeiro Digito Verificador: '.$segundodigito[10];
		print '<br/><br/>';
		
		//Montamos um Array igual o do $primeirodigito, porém acrescentamos o resultado do Primeiro Dígito Verificador
		$calculandoindicefinal=array(
			1=>$primeirodigito[1],
			2=>$primeirodigito[2],
			3=>$primeirodigito[3],
			4=>$primeirodigito[4],
			5=>$primeirodigito[5],
			6=>$primeirodigito[6],
			7=>$primeirodigito[7],
			8=>$primeirodigito[8],
			9=>$primeirodigito[9],
			10=>$segundodigito[10]
		);
		
		//Fazemos os mesmo cálculos que fizemos anteriormente para descobrir o Segundo Dígito Verificador
		$soma=null;
		
		print '<table width="100" border="1"><tbody>';
		
		for ($j=1; $j<=2; $j++){
			switch($j){
				
				case 1:
					print '<tr>';
					for ($i=1; $i<=10; $i++){
						print "<td align=center>$calculandoindicefinal[$i]</td>";
					}
					print '</tr>';
					
				case 2:
					print '<tr>';
					for ($i=0; $i<=9; $i++){
						print "<td align=center>$pesoentrada[$i]</td>";
						
						for ($i=1; $i<=9; $i++){
							$mult=$calculandoindicefinal[$i]*$pesoentrada[$i];
							$soma=$soma+$mult;
							print "<td align=center>$mult</td>";
						}
					}
					print '</tr>';
				}
			}
		
		print '</tbody></table>';
		
		print '<br/>';
		print 'Soma: '.$soma;
		print '<br/><br/>';
		
		$quociente= $soma/11;
		$resto= $soma % 11;
		
		print 'Quociente: '.number_format($quociente,1,',','.');
		print '<br/><br/>';
		print 'Resto: '.$resto;
		
		if ($resto<2){
			$segundodigito[11]=0;
		}
		else {
			$segundodigito[11]=11-$resto;
		}
		
		print '<br/><br/>';
		print 'Segundo Digito Verificador: '.$segundodigito[11];
		print '<br/><br/>';
		
		
		
		//Criamos duas variáveis que vão receber o CPF digitado pelo usuário (sem dígitos verificadores), e o CPF total com os 2 dígitos verificadores
		$CPFtotal=null;
		$CPFdigitado=null;
		for ($i=1; $i<=11; $i++){
			if ($i>=10){
				$CPFtotal=$CPFtotal.$segundodigito[$i];
			}
			else {
				$CPFdigitado=$CPFdigitado.$primeirodigito[$i];
				$CPFtotal=$CPFtotal.$primeirodigito[$i];
			}
		}
		
		//Mostra o Resultado final para o usuário
		print 'Os digitos finais do CPF digitado '.$CPFdigitado.' sao '.$CPFtotal.'.';
		
/* <table width="50" border="1">
  <tbody>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
*/
?>

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	</BODY>
</HTML>