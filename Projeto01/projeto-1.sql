-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.14 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para projeto_1
CREATE DATABASE IF NOT EXISTS `projeto_1` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `projeto_1`;

-- Copiando estrutura para tabela projeto_1.curriculo
CREATE TABLE IF NOT EXISTS `curriculo` (
  `curriculo_id` int(11) NOT NULL AUTO_INCREMENT,
  `curriculo_nome_completo` varchar(255) DEFAULT NULL,
  `curriculo_cpf` char(11) DEFAULT NULL,
  `curriculo_estado_ibge_id` int(11) DEFAULT NULL,
  `curriculo_data_nascimento` date DEFAULT NULL,
  `curriculo_sexo` enum('F','M') DEFAULT NULL,
  `curriculo_experiencia_profissional` text,
  `curriculo_dh_cadastro` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`curriculo_id`),
  KEY `FK_curriculo_estado` (`curriculo_estado_ibge_id`),
  CONSTRAINT `FK_curriculo_estado` FOREIGN KEY (`curriculo_estado_ibge_id`) REFERENCES `estado` (`estado_ibge_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projeto_1.curriculo: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `curriculo` DISABLE KEYS */;
/*!40000 ALTER TABLE `curriculo` ENABLE KEYS */;

-- Copiando estrutura para tabela projeto_1.estado
CREATE TABLE IF NOT EXISTS `estado` (
  `estado_ibge_id` int(11) NOT NULL,
  `estado_nome` varchar(60) DEFAULT NULL,
  `estado_uf` char(2) NOT NULL,
  PRIMARY KEY (`estado_ibge_id`),
  UNIQUE KEY `estado_ibge_id_UNIQUE` (`estado_ibge_id`),
  UNIQUE KEY `estado_uf_UNIQUE` (`estado_uf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projeto_1.estado: ~27 rows (aproximadamente)
/*!40000 ALTER TABLE `estado` DISABLE KEYS */;
INSERT IGNORE INTO `estado` (`estado_ibge_id`, `estado_nome`, `estado_uf`) VALUES
	(11, 'RONDÔNIA', 'RO'),
	(12, 'ACRE', 'AC'),
	(13, 'AMAZONAS', 'AM'),
	(14, 'RORAIMA', 'RR'),
	(15, 'PARÁ', 'PA'),
	(16, 'AMAPÁ', 'AP'),
	(17, 'TOCANTINS', 'TO'),
	(21, 'MARANHÃO', 'MA'),
	(22, 'PIAUÍ', 'PI'),
	(23, 'CEARÁ', 'CE'),
	(24, 'RIO GRANDE DO NORTE', 'RN'),
	(25, 'PARAÍBA', 'PB'),
	(26, 'PERNAMBUCO', 'PE'),
	(27, 'ALAGOAS', 'AL'),
	(28, 'SERGIPE', 'SE'),
	(29, 'BAHIA', 'BA'),
	(31, 'MINAS GERAIS', 'MG'),
	(32, 'ESPÍRITO SANTO', 'ES'),
	(33, 'RIO DE JANEIRO', 'RJ'),
	(35, 'SÃO PAULO', 'SP'),
	(41, 'PARANÁ', 'PR'),
	(42, 'SANTA CATARINA', 'SC'),
	(43, 'RIO GRANDE DO SUL', 'RS'),
	(50, 'MATO GROSSO DO SUL', 'MS'),
	(51, 'MATO GROSSO', 'MT'),
	(52, 'GOIÁS', 'GO'),
	(53, 'DISTRITO FEDERAL', 'DF');
/*!40000 ALTER TABLE `estado` ENABLE KEYS */;

-- Copiando estrutura para tabela projeto_1.habilidade
CREATE TABLE IF NOT EXISTS `habilidade` (
  `habilidade_id` int(11) NOT NULL AUTO_INCREMENT,
  `habilidade_curriculo_id` int(11) DEFAULT NULL,
  `habilidade_tipo` int(11) DEFAULT NULL,
  PRIMARY KEY (`habilidade_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projeto_1.habilidade: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `habilidade` DISABLE KEYS */;
/*!40000 ALTER TABLE `habilidade` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
