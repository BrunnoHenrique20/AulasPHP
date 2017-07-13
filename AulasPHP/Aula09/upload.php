<HTML>
	<HEAD>
		<meta charset="utf-8"/>
	</HEAD>
	
<?php

require_once('classupload.php');
$objupload = new upload;
print $objupload -> validararquivo($_FILES);

$objupload -> efetuarupload($_FILES);
/*

print '<pre>';
print_r($_FILES); // Responsavel por mostrar as informações do Browser que foram enviadas para o Servidor
print '</pre>';

*/


/* Atributos de informação do arquivo:

[name] = Nome do arquivo
[tmp_name] = Arquivo Temporário (upload para dentro do SO)
[error] = Recebe um valor que é o código do erro: disponível no site " http://php.net/manual/en/features.file-upload.errors.php "
[size] = Tamanho do arquivo dado em bytes

*/
?>
</HTML>