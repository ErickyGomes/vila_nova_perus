-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Dez-2021 às 20:43
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_vila`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `entrada`
--

CREATE TABLE `entrada` (
  `idEnt` int(11) NOT NULL,
  `dataEnt` date NOT NULL,
  `valorEnt` float NOT NULL,
  `pixEnt` varchar(25) NOT NULL,
  `tipoEnt` varchar(50) NOT NULL,
  `modEnt` date DEFAULT NULL,
  `motivoEnt` varchar(250) DEFAULT NULL,
  `userEnt` varchar(250) DEFAULT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `entrada`
--

INSERT INTO `entrada` (`idEnt`, `dataEnt`, `valorEnt`, `pixEnt`, `tipoEnt`, `modEnt`, `motivoEnt`, `userEnt`, `status`) VALUES
(18, '2021-12-26', 150.3, 'Sim', 'Dizimo', NULL, NULL, NULL, 'Ativo'),
(19, '2021-12-26', 500.15, 'Não', 'Oferta', NULL, NULL, NULL, 'Ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `saida`
--

CREATE TABLE `saida` (
  `id-saida` int(11) NOT NULL,
  `data-saida` date NOT NULL,
  `valor-saida` float NOT NULL,
  `desc-saida` varchar(250) NOT NULL,
  `igreja-saida` varchar(250) NOT NULL,
  `mod-saida` date DEFAULT NULL,
  `motivo-saida` varchar(250) DEFAULT NULL,
  `user-saida` varchar(250) DEFAULT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `viewentdizimo`
-- (Veja abaixo para a view atual)
--
CREATE TABLE `viewentdizimo` (
`somaEntDizimo` double
);

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `viewentoferta`
-- (Veja abaixo para a view atual)
--
CREATE TABLE `viewentoferta` (
`somaEntOferta` double
);

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `viewentpix`
-- (Veja abaixo para a view atual)
--
CREATE TABLE `viewentpix` (
`somaEntPix` double
);

-- --------------------------------------------------------

--
-- Estrutura para vista `viewentdizimo`
--
DROP TABLE IF EXISTS `viewentdizimo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewentdizimo`  AS SELECT sum(`entrada`.`valorEnt`) AS `somaEntDizimo` FROM `entrada` WHERE `entrada`.`tipoEnt` = 'Dizimo' ;

-- --------------------------------------------------------

--
-- Estrutura para vista `viewentoferta`
--
DROP TABLE IF EXISTS `viewentoferta`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewentoferta`  AS SELECT sum(`entrada`.`valorEnt`) AS `somaEntOferta` FROM `entrada` WHERE `entrada`.`tipoEnt` = 'Oferta' ;

-- --------------------------------------------------------

--
-- Estrutura para vista `viewentpix`
--
DROP TABLE IF EXISTS `viewentpix`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewentpix`  AS SELECT sum(`entrada`.`valorEnt`) AS `somaEntPix` FROM `entrada` WHERE `entrada`.`pixEnt` = 'Sim' ;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `entrada`
--
ALTER TABLE `entrada`
  ADD PRIMARY KEY (`idEnt`);

--
-- Índices para tabela `saida`
--
ALTER TABLE `saida`
  ADD PRIMARY KEY (`id-saida`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `entrada`
--
ALTER TABLE `entrada`
  MODIFY `idEnt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `saida`
--
ALTER TABLE `saida`
  MODIFY `id-saida` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
