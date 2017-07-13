/* LER Registros no Banco de Dados */

SELECT
	estado_ibge_id,
	estado_nome,
	estado_uf
FROM
	estado
WHERE
	estado_uf = 'OO'
	
/* Pode utilizar " SELECT * " para selecionar todas as colunas de uma tabela */