<?php 

class Matematica{
	
	var $x1, $x2;

	function Adicionar(){
		return $this->x1 + $this->x2;
	}
	
	function Subtrair(){
		return $this->x1 - $this->x2;
	}
	
	function Multiplicar(){
		return $this->x1 * $this->x2;
	}
	
	function Dividir(){
		return $this->x1 / $this->x2;
	}
	
}

$objMatematica = new Matematica;
$objMatematica -> x1 = 10;
$objMatematica -> x2 = 5;

print 'Somando: '.$objMatematica -> Adicionar();
print '<br/>';
print 'Subtraindo: '.$objMatematica -> Subtrair();
print '<br/>';
print 'Multiplicando: '.$objMatematica -> Multiplicar();
print '<br/>';
print 'Dividindo: '.$objMatematica -> Dividir();
print '<br/>';



?>