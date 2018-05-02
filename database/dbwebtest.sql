-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 02-Maio-2018 às 03:51
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
-- Database: `dbwebtest`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `corridas`
--

DROP TABLE IF EXISTS `corridas`;
CREATE TABLE IF NOT EXISTS `corridas` (
  `id_corrida` int(11) NOT NULL AUTO_INCREMENT,
  `id_passageiro` int(11) NOT NULL,
  `id_motorista` int(11) NOT NULL,
  `valor` double NOT NULL,
  PRIMARY KEY (`id_corrida`),
  KEY `id_cliente` (`id_passageiro`),
  KEY `id_motorista` (`id_motorista`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `corridas`
--

INSERT INTO `corridas` (`id_corrida`, `id_passageiro`, `id_motorista`, `valor`) VALUES
(1, 3, 5, 50);

-- --------------------------------------------------------

--
-- Estrutura da tabela `motoristas`
--

DROP TABLE IF EXISTS `motoristas`;
CREATE TABLE IF NOT EXISTS `motoristas` (
  `m_id_motorista` int(11) NOT NULL AUTO_INCREMENT,
  `nome_motorista` varchar(40) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `data_nascimento` date NOT NULL,
  `modelo_do_carro` varchar(20) NOT NULL,
  `m_status` varchar(7) NOT NULL,
  `sexo` varchar(9) NOT NULL,
  PRIMARY KEY (`m_id_motorista`),
  UNIQUE KEY `cpf` (`cpf`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `motoristas`
--

INSERT INTO `motoristas` (`m_id_motorista`, `nome_motorista`, `cpf`, `data_nascimento`, `modelo_do_carro`, `m_status`, `sexo`) VALUES
(1, 'Motorista1', '123.456.789-10', '1998-01-01', 'Gol', 'Ativo', 'Masculino'),
(2, 'Motorista2', '123.456.789-11', '1998-01-01', 'Gol', 'Inativo', 'Masculino'),
(3, 'Motorista3', '123.456.789-12', '1998-01-01', 'Gol', 'Ativo', 'Masculino'),
(4, 'Motorista4', '123.456.789-13', '1998-01-01', 'Gol', 'Inativo', 'Masculino'),
(5, 'Motorista5', '123.456.789-19', '1198-01-01', 'Gol', 'Ativo', 'Masculino');

-- --------------------------------------------------------

--
-- Estrutura da tabela `passageiros`
--

DROP TABLE IF EXISTS `passageiros`;
CREATE TABLE IF NOT EXISTS `passageiros` (
  `p_id_passageiro` int(11) NOT NULL AUTO_INCREMENT,
  `nome_passageiro` varchar(40) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `data_nascimento` date NOT NULL,
  `sexo` varchar(9) NOT NULL,
  PRIMARY KEY (`p_id_passageiro`),
  UNIQUE KEY `cpf` (`cpf`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `passageiros`
--

INSERT INTO `passageiros` (`p_id_passageiro`, `nome_passageiro`, `cpf`, `data_nascimento`, `sexo`) VALUES
(1, 'Passageiro1', '123.456.789-15', '1998-01-01', 'Masculino'),
(2, 'Passageiro2', '123.456.789-16', '1998-01-01', 'Masculino'),
(3, 'Passageiro3', '123.456.789-17', '1998-01-01', 'Masculino'),
(4, 'Passageiro4', '123.456.789-18', '1998-01-01', 'Masculino'),
(5, 'Passageiro5', '123.456.789-20', '1998-01-01', 'Masculino');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `corridas`
--
ALTER TABLE `corridas`
  ADD CONSTRAINT `corridas_ibfk_1` FOREIGN KEY (`id_passageiro`) REFERENCES `passageiros` (`p_id_passageiro`),
  ADD CONSTRAINT `corridas_ibfk_2` FOREIGN KEY (`id_motorista`) REFERENCES `motoristas` (`m_id_motorista`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
