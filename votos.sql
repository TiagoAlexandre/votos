-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18-Maio-2015 às 02:47
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `votos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidatos`
--

CREATE TABLE IF NOT EXISTS `candidatos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `numero` int(150) NOT NULL,
  `partido` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `candidatos`
--

INSERT INTO `candidatos` (`id`, `nome`, `numero`, `partido`) VALUES
(1, 'Julio Batista', 1020, 'Verde'),
(2, 'Romildo Granero', 1234, 'Azul'),
(3, 'Wagner de Souza', 3456, 'Vermelho'),
(4, 'Carlos Romagnolli', 1700, 'Amarelo'),
(5, 'Jorge Luis', 5050, 'Marrom');

-- --------------------------------------------------------

--
-- Estrutura da tabela `votacao`
--

CREATE TABLE IF NOT EXISTS `votacao` (
  `num_candidatos` int(150) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `votacao`
--

INSERT INTO `votacao` (`num_candidatos`, `id`) VALUES
(1020, 1),
(3456, 2),
(1234, 3),
(1020, 4),
(5050, 5),
(1020, 6),
(1700, 7),
(5050, 8),
(3456, 9),
(5050, 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
