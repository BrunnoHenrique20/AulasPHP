/* Atualizando um registro no banco de dados */

UPDATE estado
SET
	estado_ibge_id = 11,
	estado_nome = 'TESTE Rondonia',
	estado_uf = 'OO'
WHERE
	estado_uf = 'RO'