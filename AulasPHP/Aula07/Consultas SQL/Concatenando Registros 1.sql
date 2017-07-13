SELECT
	CONCAT( 'nome da cidade: ', cidade_nome,' codigo do ibge do estado: ', cidade_estado_ibge_id )
FROM
	cidade
WHERE
	cidade_estado_ibge_id = 11