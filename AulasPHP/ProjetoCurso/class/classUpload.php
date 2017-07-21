<?php

class upload {

	function __construct( $arquivo, $arquivoID ) {
		$extensaoDoArquivo = $this->getExtensaoArquivo( $arquivo );
		$nomeDoArquivo = $this->getNomeArquivo($arquivo);
		
		if ( !$this->validarExtensao( $extensaoDoArquivo ) ) { // Se o método não for válido e retornar FALSE vai cair nessa condição
			print 'Extensão do arquivo não é válida!';
			die(); // O comando die() serve para parar a execução do código!
		}

		if ( !$this->efetuarUpload( $arquivo, $arquivoID, $nomeDoArquivo, $extensaoDoArquivo ) ) {
			print 'Erro ao efetuar o upload';
			die();
		}
	}


	function getExtensaoArquivo( $arquivo ) {
		$extArquivo = explode( '.', $arquivo[ 'name' ] );
		return end( $extArquivo ); // Retorna a última posição do "explode" do "nome do arquivo" , ou seja , a extensão do arquivo
	}
	
	
	function getNomeArquivo( $arquivo ) {
		$nomArquivo = explode( '.', $arquivo[ 'name' ] );
		return ($nomArquivo[0]);
	}


	function extensoesAceitasParaUpload() {
		return array( 'jpg', 'png' );
	}


	function validarExtensao( $extensaoDoArquivo ) { // Método que vai validar se a extensão do arquivo é permitida para fazer o Upload

		if ( in_array( $extensaoDoArquivo, $this->extensoesAceitasParaUpload() ) ) {
			// in_array <<< vai verificar se a String da variavel $extensaoDoArquivo está dentro do Array selecionado
			return true;
		} else {
			return false;
		}
	}


	function efetuarUpload( $arquivo, $arquivoID, $nomeDoArquivo, $extensaoDoArquivo ) {

		if ( !is_uploaded_file( $arquivo[ 'tmp_name' ] ) ) { // Se não existir, ou seja, se o arquivo não foi feito o Upload (não estiver no temporário do SO)
			print 'Erro ao efetuar o upload';
			die();
		}


		if ( move_uploaded_file( $arquivo[ 'tmp_name' ],
								 'upload/'.$arquivoID.'- '.$nomeDoArquivo.'.'.$extensaoDoArquivo ) ) {
			return true;
		} else {
			return false;
		}
	}
}




?>