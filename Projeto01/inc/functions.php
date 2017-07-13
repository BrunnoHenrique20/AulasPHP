<?php

function abrirConexaoBanco() {
	$conn = mysql_connect(SERVIDOR, USUARIO, SENHA);
	if ($conn) {
		mysql_select_db(BANCO);
	}
	
	return $conn;
}

function consultarNoBanco($conn, $sql) {
	$resultado = mysql_query($sql, $conn);
	
	$listaDados = array();
	while ($dados = mysql_fetch_assoc($resultado)) {
		$listaDados[] = $dados;
	}
	
	return $listaDados;
}

function comboBox($listaDados, $selecionado) {
	$html = '';
	
	foreach ($listaDados as $valorDados) {
		$html .= '<option value="';
		$html .= $valorDados['estado_ibge_id'];
		$html .= '"';
		
		if ($valorDados['estado_ibge_id'] == $selecionado) {
			$html .= ' selected="selected"';
		}
		
		$html .= '>';
		$html .= utf8_encode($valorDados['estado_nome']);
		$html .= '</option>'.PHP_EOL;		
	}
	
	return $html;
}

function sqlInserirCurriculo($conn, $nomeCompleto, $cpf, $estadoIbgeId, $dataNascimento, $sexo, $experiencia) {
	$sql = "INSERT INTO	curriculo
			(
				curriculo_nome_completo,
				curriculo_cpf,
				curriculo_estado_ibge_id,
				curriculo_data_nascimento,
				curriculo_sexo,
				curriculo_experiencia_profissional
			)
			VALUES
			(
				'".$nomeCompleto."',
				'".$cpf."',
				".$estadoIbgeId.",
				'".$dataNascimento."',
				'".$sexo."',
				'".$experiencia."'
			)";
	
	$resultado = mysql_query($sql, $conn);
	if ($resultado) {
		return true;
	} else {
		return false;
	}
}

function sqlEditarCurriculo($conn, $curriculoId, $nomeCompleto, $cpf, $estadoIbgeId, $dataNascimento, $sexo, $experiencia) {
	$sql = "UPDATE curriculo
			SET
				curriculo_nome_completo = '".$nomeCompleto."',
				curriculo_cpf = '".$cpf."',
				curriculo_estado_ibge_id = ".$estadoIbgeId.",
				curriculo_data_nascimento = '".$dataNascimento."',
				curriculo_sexo = '".$sexo."',
				curriculo_experiencia_profissional = '".$experiencia."'
			WHERE
				curriculo_id = ".$curriculoId;
	
	$resultado = mysql_query($sql, $conn);
	if ($resultado) {
		return true;
	} else {
		return false;
	}
}

function sqlRecuperarCurriculo($conn, $curriculoId) {
	$sql = "SELECT * FROM curriculo WHERE curriculo_id = ".$curriculoId;
	
	$resultado = mysql_query($sql, $conn);
	if ($resultado) {
		return mysql_fetch_assoc($resultado);
	}
}

function sqlExcluirCurriculo($conn, $curriculoId) {
	$sql = "DELETE FROM curriculo WHERE curriculo_id = ".$curriculoId;
	
	$resultado = mysql_query($sql, $conn);
	if ($resultado) {
		return true;
	} else {
		return false;
	}
}

function verificarData($dia, $mes, $ano) {
	return checkdate($mes, $dia, $ano);
}

function verificarCPF($cpf) {
	$s = str_replace(array('.', '-'), '', $cpf);
	
	if (strlen($s) != 11) {
		return false;
	}
	
	$n = array();
	for ($i=0; $i<=10; $i++) {
		$n[] = $s[$i];
	}
	
	$r = 0;
	$ii = 0;
	for ($i=10; $i>=2; $i--) {
		$r += $n[$ii] * $i;
		$ii++;
	}
	
	$r = $r % 11;
	$dv1 = ($r < 2 ? 0 : 11 - $r);
	
	$r = 0;
	$ii = 0;
	for ($i=11; $i>=2; $i--) {
		$r += $n[$ii] * $i;
		$ii++;
	}
	
	$r = $r % 11;
	$dv2 = ($r < 2 ? 0 : 11 - $r);
	
	if ($dv1 == $n[9] && $dv2 == $n[10]) {
		return true;
	} else {
		return false;
	}
}

// $dadosFormulario = $_POST
function validarFormulario($dadosFormulario) {
	
	$retorno = array();
	$retorno['status'] = true;
	if (!isset($dadosFormulario['curriculo_nome_completo']) || empty($dadosFormulario['curriculo_nome_completo'])) {
		$retorno['status']   = false;
		$retorno['mensagem'] = 'Preencha o campo nome completo.';
		$retorno['classCSS'] = 'red';
	} else if (!isset($dadosFormulario['curriculo_cpf']) || empty($dadosFormulario['curriculo_cpf'])) {
		$retorno['status']   = false;
		$retorno['mensagem'] = 'Preencha o campo CPF.';
		$retorno['classCSS'] = 'red';
	} else if (!verificarCPF($dadosFormulario['curriculo_cpf'])) {
		$retorno['status']   = false;
		$retorno['mensagem'] = 'CPF inválido.';
		$retorno['classCSS'] = 'red';
	} else if (!isset($dadosFormulario['curriculo_estado_ibge_id']) || empty($dadosFormulario['curriculo_estado_ibge_id'])) {
		$retorno['status']   = false;
		$retorno['mensagem'] = 'Selecione o estado.';
		$retorno['classCSS'] = 'red';
	} else if (!isset($dadosFormulario['dia']) || empty($dadosFormulario['dia'])) {
		$retorno['status']   = false;
		$retorno['mensagem'] = 'Preencha o campo dia da data de nascimento.';
		$retorno['classCSS'] = 'red';
	} else if (!isset($dadosFormulario['mes']) || empty($dadosFormulario['mes'])) {
		$retorno['status']   = false;
		$retorno['mensagem'] = 'Preencha o campo mês da data de nascimento.';
		$retorno['classCSS'] = 'red';
	} else if (!isset($dadosFormulario['ano']) || empty($dadosFormulario['ano'])) {
		$retorno['status']   = false;
		$retorno['mensagem'] = 'Preencha o campo ano da data de nascimento.';
		$retorno['classCSS'] = 'red';
	} else if (!verificarData($dadosFormulario['dia'], $dadosFormulario['mes'], $dadosFormulario['ano'])) {
		$retorno['status']   = false;
		$retorno['mensagem'] = 'Data inválido';
		$retorno['classCSS'] = 'red';
	} else if (!isset($dadosFormulario['curriculo_sexo']) || empty($dadosFormulario['curriculo_sexo'])) {
		$retorno['status']   = false;
		$retorno['mensagem'] = 'Selecione o sexo.';
		$retorno['classCSS'] = 'red';
	} else if (!isset($dadosFormulario['habilidade_tipo']) || count($dadosFormulario['habilidade_tipo']) == 0) {
		$retorno['status']   = false;
		$retorno['mensagem'] = 'Selecione as habilidades.';
		$retorno['classCSS'] = 'red';
	}
	return $retorno;
}