/* LER Registros no Banco de Dados */

SELECT
	estado_ibge_id,
	estado_nome,
	estado_uf
FROM
	estado
ORDER BY estado_ibge_id ASC
	
/* Ordenando o estado_ibge_id em ordem CRESCENTE */