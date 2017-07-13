SELECT
	IF (
		estado_uf = 'PB',
		'Aparecida de Goiânia',
		estado_nome
	)
FROM
	estado