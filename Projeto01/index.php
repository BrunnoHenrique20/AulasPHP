<?php
	ini_set('display_errors', 1);
	require_once('inc/config.php');
	require_once('inc/functions.php');
	
	$conn = abrirConexaoBanco();
	$sql = "SELECT * FROM estado";
	$listaDados = consultarNoBanco($conn, $sql);
	
	if (isset($_GET['curriculoId']) && !empty($_GET['curriculoId'])) {
		$dados = sqlRecuperarCurriculo($conn, $_GET['curriculoId']);
	}
	
?>
<html>
	<head>
		<title>:: Projeto 1 - Cadastro do Currículo ::</title>
		<meta charset="UTF-8">
		<style>
			.red {
				background-color:#F00;
				color:#FFF;
				width:100%;
			}
			.green {
				background-color:#006400;
				color:#FFF;
				width:100%;
			}
		</style>
	</head>
	<body>
		<div id="boxPrincipal">
			<h1>Cadastro do Currículo</h1>
			<ul>
				<li><a href="index.php">Cadastrar novo Currículo</a></li>
				<li><a href="lista.php">Listar todos os curriculos</a></li>
			</ul>
			<?php
				if (isset($_POST) && count($_POST) > 0) {
					$resultado =  validarFormulario($_POST);
					if (!$resultado['status']) {
						print '<div class="'.$resultado['classCSS'].'">'.$resultado['mensagem'].'</div>';
					} else {
						
						$dataNascimento = $_POST['ano'].'-'.$_POST['mes'].'-'.$_POST['dia'];
						if (sqlInserirCurriculo(
							$conn,
							$_POST['curriculo_nome_completo'],
							$_POST['curriculo_cpf'],
							$_POST['curriculo_estado_ibge_id'],
							$dataNascimento,
							$_POST['curriculo_sexo'],
							$_POST['curriculo_experiencia_profissional']
						)) {
							print '<div class="green">Curriculo cadastrado com sucesso!</div>';
						} else {
							print '<div class="red">Não foi possivel cadastrar o curriculo.</div>';
						}
					}
				}
			?>
			<form method="post" action="index.php">
				<div>
					<label>Nome completo:</label>
					<br />
					<input type="text" name="curriculo_nome_completo" maxlength="255" value="<?php print $dados['curriculo_nome_completo']; ?>" />
				</div>
				<div>
					<label>CPF:</label>
					<br />
					<input type="text" name="curriculo_cpf" maxlength="11" />
				</div>
				<div>
					<label>Estado:</label>
					<br />
					<select name="curriculo_estado_ibge_id">
						<option value="">:: Selecione o estado ::</option>
						<?php
							print comboBox($listaDados, '');
						?>
					</select>
				</div>
				<div>
					<label>Data de nascimento:</label>
					<br />
					<input type="text" name="dia" maxlength="2" /> / 
					<input type="text" name="mes" maxlength="2" /> /
					<input type="text" name="ano" maxlength="4" />
				</div>
				<div>
					<label>Sexo:</label>
					<br />
					<input type="radio" name="curriculo_sexo" value="F" /> Feminino
					<input type="radio" name="curriculo_sexo" value="M" /> Masculino
				</div>
				<div>
					<label>Habilidades:</label>
					<br />
					<input type="checkbox" name="habilidade_tipo[]" value="1" /> HTML
					<input type="checkbox" name="habilidade_tipo[]" value="2" /> CSS
					<input type="checkbox" name="habilidade_tipo[]" value="3" /> JS
					<input type="checkbox" name="habilidade_tipo[]" value="4" /> PHP
					<input type="checkbox" name="habilidade_tipo[]" value="5" /> MySQL
				</div>
				<div>
					<label>Experiencia profissional:</label>
					<br />
					<textarea name="curriculo_experiencia_profissional"></textarea>
				</div>
				<div>
					<input type="submit" value="Salvar curriculo" />
				</div>
			</form>
		</div>
	</body>
</html>