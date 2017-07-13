<?php
//ini_set('display_errors', 1);
require_once('../functions.php');
?>

<HTML>
	<HEAD><TITLE>Exercicio 01</TITLE></HEAD>
	<BODY>
		<H1>Integrando PHP com HTML</H1>
		
		<form method="post" action="index.php">
			<div>
				<label>Numero 1:</label><br/>
				<input type="input" name="numero1"/>
			</div>
			<div>
				<label>Numero 2:</label>
				<br/><input type="input" name="numero2"/>
			</div>
			<div>
				<label>Operação:</label><br/>
				<br/>
				<select name="operacao">
					<option value="<?php print ADICAO; ?>">Adicao</option>
					<option value="<?php print SUBTRACAO; ?>">Subtracao</option>
					<option value="<?php print MULTIPLICACAO; ?>">Multiplicacao</option>
					<option value="<?php print DIVISAO; ?>">Divisao</option>
				</select>
			</div>
			<div>
				<br/><input type="submit" value="Enviar" name="Enviar"/>
			</div>
		</form>
		
		<?php
		// Action: arquivo para onde vão ser passados as informações
		// Method: POST ou GET, o POST é onde vão ser passados as informações do formulário sem passar por uma URL
		
	if (isset($_POST["Enviar"])){
			
		if (!isset($x1)){
			$x1=0;
		}
		
		if (!isset($_POST['numero2']) || empty($_POST['numero2'])){
			$x2=0;
		}
		
		if (!isset($_POST['operacao'])){
			$operacao = null;
		}
		
		if (!isset($resultado)){
			$resultado=0;
		}
		
		$x1 = $_POST['numero1'];
		$x2 = $_POST['numero2'];
		$operacao = $_POST['operacao'];
		
		$resultado = operacaoMatematica($x1, $x2, $operacao);
		
		print 'O Resultado e '.$resultado;
	}
		
		?>
	</BODY>
</HTML>