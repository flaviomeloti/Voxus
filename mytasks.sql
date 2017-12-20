-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 20-Dez-2017 às 22:52
-- Versão do servidor: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mytasks`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tasks`
--

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `descricao` text COLLATE latin1_general_ci NOT NULL,
  `anexo` varchar(255) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_fk_usuario` (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `tasks`
--

INSERT INTO `tasks` (`id`, `id_usuario`, `nome`, `descricao`, `anexo`) VALUES
(1, 1, 'Desenvolver proj. Voxus', 'Desenvolver CRUD em PHP e MySQLi e subir no Git.', '1513810323.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) NOT NULL,
  `email` varchar(150) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `senha` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Flavio', 'flavio@email.com', 'senha123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
