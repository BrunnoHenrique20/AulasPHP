<html>
<head><meta charset="utf-8" /></head>
<?php

// trabalhando com PDO

// MYSQL
// mysql_connect

// POSTGRES
// pg_connect

// SQL SERVER
// ms_connect

// Para escolher com qual Servidor de Banco de Dados trabalhar é só ir no arquivo wamp/bin/php.ini e localizar "pdo" e tirar o ";" do extension de onde está o pdo_Banco_de_dados


/* Parâmetros do PDO:
(DSN , usuario , senha)
DSN = Driver de Banco de Dados a ser trabalhado
*/

define('HOST', 'localhost');
define('BASE', 'ibge');
define('USER','root');
define('PASS','');

$objConexao = new PDO('mysql:host='.HOST.';dbname='.BASE.';', USER, PASS);

//var_dump($objConexao); <<< Somente para saber se a conexão já está aberta

$sql = "SELECT * FROM estado";
$resultado = $objConexao-> query($sql);

/*	print '<pre>';
print_r($resultado-> fetchall());  // fetchall() <<< Mostra na tela todos os registros que estão salvos dentro da variavel $resultado
print '</pre>'; 				*/

$sql = "SELECT * FROM estado WHERE estado_uf = :UF";  // : serve como ponto de referência, ou seja o SQL localiza e substitui pelo valor que quero procurar
$stmte = $objConexao-> prepare($sql);  // prepare <<< ele prepara a consulta SQL para substituir os dados através do ponto de referência colocado na variavel $sql
// $stmte (preparação)

$stmte-> bindValue('UF', 'GO', PDO::PARAM_STR);  // bindValue <<< Localiza o valor da referência do código do $sql
// bindValue( 'Ponto de Referencia' , 'Valor que quero localizar' , 'Identificador do Tipo da informação (int,string,array...)')

$stmte-> execute();

print '<pre>';
print_r($stmte-> fetch(PDO::FETCH_ASSOC));  // Mostrando o Retorno da Consulta
print '</pre>';

	
	
// FAZENDO A INSERÇÃO
	
	
/*
$sql = "INSERT INTO estado VALUES (:CODIGO,:NOME_ESTADO,:NOME_UF)";
$stmte = $objConexao-> prepare($sql);
$stmte-> bindValue('CODIGO', 9, PDO::PARAM_INT);
$stmte-> bindValue('NOME_ESTADO', 'Nome do Estado', PDO::PARAM_STR);
$stmte-> bindValue('NOME_UF', 'NE', PDO::PARAM_STR);
$stmte-> execute();
*/
	
	
// FAZENDO A EDIÇÃO
	
	
/*
$sql =
"UPDATE estado
SET
estado_nome = :NOME_ESTADO, estado_uf = :NOME_UF
WHERE estado_ibge_id = :CODIGO";
	
$stmte = $objConexao-> prepare($sql);
$stmte-> bindValue('CODIGO', 13, PDO::PARAM_INT);
$stmte-> bindValue('NOME_ESTADO', 'Nome Atualizado2', PDO::PARAM_STR);
$stmte-> bindValue('NOME_UF', 'EN', PDO::PARAM_STR);
$stmte-> execute();
*/
	
	
// DELETANDO
	
	
/*
$sql = "DELETE FROM estado WHERE estado_uf = :NOME_UF";
$stmte = $objConexao-> prepare($sql);
$stmte-> bindValue('NOME_UF','ST',PDO::PARAM_STR);
$stmte-> execute();
*/
	
	
	
	
	
	
	
	
	
	
	
?>
</html>