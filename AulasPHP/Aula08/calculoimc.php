<html>
	<head>
		<title>Calculo do IMC</title>
		<meta charset="utf-8"/>
	</head>
<?php

// IMC = PESO / (ALTURA*ALTURA)

/* Validações:

Baixo Peso Grave < 16
Baixo Peso >= 16 && < 18.5
Peso Normal >= 18.5 && < 25
Sobrepeso >= 25 && < 40
Obesidade Mórbida >= 40

*/
	
class Imc {
	
	var $peso, $altura, $resultado;
	
	function Calculo(){
		$this-> resultado = $this-> peso / ($this-> altura * $this-> altura);
		return $this-> resultado;
	}
	
	function Validar(){
		if ($this-> resultado < 16){
			$mensagem = "<b>Baixo Peso Grave</b>";
		}
		else if ($this->resultado >= 16 && $this->resultado < 18.5){
			$mensagem = "<b>Baixo Peso</b>";
		}
		else if ($this->resultado >= 18.5 && $this->resultado < 25){
			$mensagem = "<b>Peso Normal</b>";
		}
		else if ($this->resultado >= 25 && $this->resultado < 40){
			$mensagem = "<b>Sobrepeso</b>";
		}
		else if ($this-> resultado >= 40){
			$mensagem = "<b>Obesidade Mórbida</b>";
		}
		return $mensagem;
	}
	
}

$objimc = new Imc;
$objimc -> peso = 65;
$objimc -> altura = 1.70;

print 'Seu IMC é de '.$objimc -> Calculo();
print '<br/>';
print 'Você está com '.$objimc -> Validar();

?>
</html>