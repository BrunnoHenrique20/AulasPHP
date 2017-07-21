<?php
require_once( 'class/classUpload.php' );
require_once( 'class/classCrud.php' );

class index {

	function __construct() { // O __construct() é o Método DEFAULT ou Padrão de toda a classe, então sempre será carregada primeiro mesmo sem chamar
		if ( isset( $_GET ) ) {
			switch ( $_GET[ 'pagina' ] ) {

				case 'formulario':
					$this->viewFormulario();
					break;

				case 'lista':
					$this->viewLista();
					break;
			}
			// Vai entrar na condição se o endereço acessado for:
			// http://localhost/Projeto02/?pagina=formulario OU http://localhost/Projeto02/?pagina=lista
		}


		// Se existir POST é porque o usuário clicou no botão "Salvar"
		if ( isset( $_POST ) ) {
			$this->actionInserir();
		}
	}



	function viewFormulario() {
		require_once( 'view/formulario.php' );
	}


	function viewLista() {
		require_once( 'view/lista.php' );
	}


	function actionInserir() {
		$objCrud = new crud;
		$arquivoID = $objCrud->InserirSQL($_POST);
		new upload( $_FILES[ 'arquivo' ] , $arquivoID);

		// Listando informações do Arquivo
		print '<pre>';
		print_r( $_POST );
		print '<br/>';
		print_r( $_FILES );
		print '</pre>';
	}


	function actionEditar() {

	}
	
}


new index;

?>