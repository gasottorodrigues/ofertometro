-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 26-Set-2018 às 20:45
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `ofertometro`
--
CREATE DATABASE IF NOT EXISTS `ofertometro` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ofertometro`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cupom`
--

CREATE TABLE IF NOT EXISTS `cupom` (
  `cupom` varchar(256) NOT NULL,
  `promocao` int(16) NOT NULL,
  PRIMARY KEY (`cupom`),
  KEY `promocao` (`promocao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estabelecimento`
--

CREATE TABLE IF NOT EXISTS `estabelecimento` (
  `nome` varchar(256) NOT NULL,
  PRIMARY KEY (`nome`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estabelecimento`
--



-- --------------------------------------------------------

--
-- Estrutura da tabela `oferta`
--

CREATE TABLE IF NOT EXISTS `oferta` (
  `idOf` int(16) NOT NULL AUTO_INCREMENT,
  `estabelecimento` varchar(256) NOT NULL,
  `descricao` varchar(256) NOT NULL,
  `tipo` varchar(1) NOT NULL,
  PRIMARY KEY (`idOf`),
  KEY `estabelecimento` (`estabelecimento`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Extraindo dados da tabela `oferta`
--



-- --------------------------------------------------------

--
-- Estrutura da tabela `promocao`
--

CREATE TABLE IF NOT EXISTS `promocao` (
  `idProm` int(11) NOT NULL AUTO_INCREMENT,
  `oferta` int(1) NOT NULL,
  `desconto` int(11) NOT NULL,
  PRIMARY KEY (`idProm`),
  KEY `oferta` (`oferta`),
  KEY `oferta_2` (`oferta`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Extraindo dados da tabela `promocao`
--


--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cupom`
--
ALTER TABLE `cupom`
  ADD CONSTRAINT `cupom_ibfk_1` FOREIGN KEY (`promocao`) REFERENCES `promocao` (`idProm`);

--
-- Limitadores para a tabela `oferta`
--
ALTER TABLE `oferta`
  ADD CONSTRAINT `oferta_ibfk_1` FOREIGN KEY (`estabelecimento`) REFERENCES `estabelecimento` (`nome`);

--
-- Limitadores para a tabela `promocao`
--
ALTER TABLE `promocao`
  ADD CONSTRAINT `promocao_ibfk_1` FOREIGN KEY (`oferta`) REFERENCES `oferta` (`idOf`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
