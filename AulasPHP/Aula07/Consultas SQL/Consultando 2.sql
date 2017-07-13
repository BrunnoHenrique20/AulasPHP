SELECT cidade_nome, estado_uf FROM cidade
INNER JOIN estado
ON cidade_estado_ibge_id = estado_ibge_id