<?php
	ini_set('display_errors', 0);
	require_once('inc/config.php');
	require_once('inc/functions.php');
	
	$conn = abrirConexaoBanco();

	if (isset( $_GET['curriculoId']) && !empty ($_GET['curriculoId']) ){
		sqlExcluirCurriculo($conn, $_GET['curriculoId']);
	}

	$sql = "SELECT * FROM curriculo";
	$listaDados = consultarNoBanco($conn, $sql);
?>
<html>
	<head>
		<title>:: Projeto 1 - Cadastro do Currículo ::</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<div id="boxPrincipal">
			<h1>Lista dos Currículos</h1>
			<ul>
				<li><a href="index.php">Cadastrar novo Currículo</a></li>
				<li><a href="lista.php">Listar todos os Currículos</a></li>
			</ul>
			<table border="1" width="100%">
				<thead>
					<tr>
						<th>Código</th>
						<th>Nome completo</th>
						<th>CPF</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					<?php
						if (count($listaDados) > 0) {
							foreach ($listaDados as $dados) {
					?>
					<tr>
						<td><?php print $dados['curriculo_id']; ?></td>
						<td><?php print $dados['curriculo_nome_completo']; ?></td>
						<td><?php print $dados['curriculo_cpf']; ?></td>
						<td>
							<a href="index.php?curriculoId=<?php print $dados['curriculo_id']; ?>">Editar</a> |
							<a href="lista.php?curriculoId=<?php print $dados['curriculo_id']; ?>">Excluir</a>
						</td>
					</tr>
					<?php
							}
						}
					?>
				</tbody>
			</table>
		</div>
	</body>
</html>