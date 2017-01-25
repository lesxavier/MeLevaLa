-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25-Jan-2017 às 22:06
-- Versão do servidor: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `melevala`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `compras`
--

CREATE TABLE `compras` (
  `id` int(3) NOT NULL,
  `nome` tinytext NOT NULL,
  `evento` varchar(10) NOT NULL,
  `nasc` date NOT NULL,
  `rg` varchar(12) NOT NULL,
  `org` varchar(10) NOT NULL,
  `ufrg` varchar(2) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cel` varchar(14) NOT NULL,
  `tel` varchar(13) NOT NULL,
  `op_quarto` varchar(2) NOT NULL,
  `acompanhante` varchar(50) NOT NULL,
  `ind` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `cod` varchar(6) NOT NULL,
  `titulo` tinytext NOT NULL,
  `dias` tinytext NOT NULL,
  `onibus` tinytext NOT NULL,
  `hotel` tinytext NOT NULL,
  `pcb_duplo` float NOT NULL,
  `pcb_casal` float NOT NULL,
  `pcb_triplo` float NOT NULL,
  `vagas_duplo` int(11) NOT NULL,
  `vagas_casal` int(11) NOT NULL,
  `vagas_triplo` int(11) NOT NULL,
  `vagas_total` int(11) NOT NULL,
  `tx_dp` float NOT NULL,
  `tx_db` float NOT NULL,
  `tx_bl` float NOT NULL,
  `tx_pc` float NOT NULL,
  `pc_ingresso` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`cod`, `titulo`, `dias`, `onibus`, `hotel`, `pcb_duplo`, `pcb_casal`, `pcb_triplo`, `vagas_duplo`, `vagas_casal`, `vagas_triplo`, `vagas_total`, `tx_dp`, `tx_db`, `tx_bl`, `tx_pc`, `pc_ingresso`) VALUES
('bgs17', 'Me Leva Lá na Brasil Game Show 2017 - 2 Dias', '14 e 15 de Outubro', 'Transturismo - Executivo', 'Luni Hotel', 270, 540, 255, 40, 13, 18, 44, 1.05, 1.1, 1.075, 1.1478, 109.99);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
