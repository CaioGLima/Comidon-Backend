

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Banco de dados: `comidon`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

DROP TABLE IF EXISTS `tb_usuarios`;
CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE latin1_general_cs NOT NULL,
 `nusuario` varchar(100) COLLATE latin1_general_cs NOT NULL,
  `email` varchar(50) COLLATE latin1_general_cs NOT NULL,
  `senha` varchar(50) COLLATE latin1_general_cs NOT NULL,
 `idade` varchar(50) COLLATE latin1_general_cs NOT NULL,
 `telefone` varchar(50) COLLATE latin1_general_cs NOT NULL,
 `cpf` varchar(50) COLLATE latin1_general_cs NOT NULL,
  `estado` varchar(50) COLLATE latin1_general_cs NOT NULL,
 `genero` varchar(50) COLLATE latin1_general_cs NOT NULL,
 `cidade` varchar(50) COLLATE latin1_general_cs NOT NULL,
 `tipo` varchar(50) COLLATE latin1_general_cs NOT NULL,

  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)

) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id`, `nome`, `nusuario`, `email`, `senha`, `idade`, `telefone`, `cpf`, `estado`, `genero`, `cidade`,`tipo`) VALUES
(1, 'Caio Sales',  'Caiog', 'test@admin.com', 'admin11', '19', '123456789', '111.111.111-11','solteiro', 'masculino', 'campinas','admin');
COMMIT;

