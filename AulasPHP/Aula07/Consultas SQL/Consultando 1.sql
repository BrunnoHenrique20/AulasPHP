SELECT 
	cidade_nome,
	estado_uf
FROM
	cidade,
	estado
WHERE
	cidade_estado_ibge_id = estado_ibge_id