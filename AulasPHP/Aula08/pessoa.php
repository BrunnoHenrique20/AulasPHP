<?php

//Declaração da classe Pessoa
class pessoa {

	// Propriedades
	var $perna;
	var $braco;
	
	// Metodos
	function andar() {
		print 'Pessoa andando';
	}
	
	function digitar() {
		print 'Pessoa digitando';
	}
	
	function sentar() {
		print 'Pessoa sentando';
	}
}


// Criando um novo objeto utilizando a palavra reservada NEW
$objPessoa = new pessoa;

// Chamando os Metodos
$objPessoa -> andar();
print '<br/>';
$objPessoa -> digitar();
print '<br/>';
$objPessoa -> sentar();
print '<br/>';



?>