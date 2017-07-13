<?php

class upload {
	
	// Verifica se o usuario colocou algum arquivo antes de iniciar o upload
	function validararquivo($arquivo){
		
		if (empty($arquivo['arquivo']['tmp_name'])) {   // Se o count for maior que 0 é porque o arquivo foi enviado e está pronto para o upload
			$str = 'Nenhum arquivo foi adicionado ao formulário';
			return $str;
		}
		
	}
	
	
	// Pega o arquivo do Browser e salva no Servidor
	function efetuarupload($arquivo){
		
		$this-> criardiretorio();  //  Chamando um metodo dentro de outro metodo
		$nomearquivo = $this-> pegarnomearquivo($arquivo);
		$extensaoArquivo = $this-> pegarextensao($arquivo);
		
		if (is_uploaded_file($arquivo['arquivo']['tmp_name'])){  // o is_uploaded_file é Responsavel por fazer o Upload do arquivo
			
			move_uploaded_file ($arquivo['arquivo']['tmp_name'], "uploads/".$nomearquivo.".".$extensaoArquivo);
			// o move_uploaded_file move o arquivo para um determinado diretório
			
			// Estrutura: move_uploaded_file(arquivo, diretório)
			
		}
		
	}
	
	
	function criardiretorio(){
		
		if (!file_exists("uploads")){   // o file_exists("nome do diretorio ou do arquivo") Verifica se o diretório existe e verifica se o arquivo existe
			mkdir("uploads");  //  o mkdir("nome do diretorio") Cria uma pasta dentro do SO
		}
	}
	
	
	function pegarextensao($arquivo){
		$file = explode('.', $arquivo['arquivo']['name']);
		return end($file);  // Pega o último indice de um Array 
	}
	
	
	function pegarnomearquivo($arquivo){
		$file = explode('.', $arquivo['arquivo']['name']);
		return ($file[0]); // Pega o primeiro índice do Array
	}
	
}

?>