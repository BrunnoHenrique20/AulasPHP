<?php

define( 'HOST', 'localhost' );
define( 'BASE', 'projeto_2' );
define( 'USER', 'root' );
define( 'PASS', '' );

class crud {

	function InserirSQL( $dados ) {
		$sql = "INSERT INTO imagem (imagem_desc)
				VALUES (:IMAGEM_DESC)";
		$conexao = $this->abrirConexao();
		$stmte = $conexao->prepare( $sql );
		$stmte->bindValue( 'IMAGEM_DESC', $dados[ 'descricao' ], PDO::PARAM_STR );
		
		
		if ($stmte->execute()){  // Se conseguir inserir esse registro no Banco de Dados vai entrar nessa condição
			return $conexao->lastInsertId();   // Retorna o último ID criado no Banco de Dados
		}
		else {
			return false;
		}
	}


	function abrirConexao() {
		$conexao = new PDO( 'mysql:host=' . HOST . ';dbname=' . BASE . ';', USER, PASS );
		return $conexao;
	}

}

?>