-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 25-Set-2023 às 21:50
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bancodados`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabpessoas`
--

DROP TABLE IF EXISTS `tabpessoas`;
CREATE TABLE IF NOT EXISTS `tabpessoas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `senha` varchar(6) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `tabpessoas`
--

INSERT INTO `tabpessoas` (`id`, `nome`, `email`, `senha`) VALUES
(28, 'a', 'add', 'a'),
(26, 'aa', 'a1', 'aa'),
(27, 'paulo', 'paulo', 'paulo'),
(29, 'a', 'a', 'a'),
(30, 'qq', 'qq', 'qq');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
