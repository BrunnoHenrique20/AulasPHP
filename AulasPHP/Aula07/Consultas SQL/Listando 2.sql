/* LER Registros no Banco de Dados */

SELECT
	estado_ibge_id,
	estado_nome,
	estado_uf
FROM
	estado
WHERE
	estado_ibge_id < 20 && estado_ibge_id > 12
	
/* Pode utilizar " SELECT * " para selecionar todas as colunas de uma tabela */