-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Out-2018 às 05:45
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dados`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `historia`
--

CREATE TABLE `historia` (
  `ID` int(11) NOT NULL,
  `TITULO` text,
  `IMGURL` text,
  `DESCR` text,
  `DAT` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `robocup`
--

CREATE TABLE `robocup` (
  `ID` int(11) NOT NULL,
  `TITULO` text,
  `IMGURL` text,
  `DESCR` text,
  `DAT` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `NOME` text NOT NULL,
  `USUARIO` text NOT NULL,
  `SENHA` text NOT NULL,
  `INTEGRANTE` tinyint(1) NOT NULL DEFAULT '0',
  `FBID` text,
  `DESCRICAO` text,
  `FUNCAO` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`ID`, `NOME`, `USUARIO`, `SENHA`, `INTEGRANTE`, `FBID`, `DESCRICAO`, `FUNCAO`) VALUES
(1, 'Lucas Tomaz Cantuária', 'kmrbels', '777', 1, '100000612946188', 'Entusiasta de programação e jogos digitais, aspira tornar-se desenvolvedor na área de inteligência artificial. Tem como hobby criar hacks usando c++.', 'É o Gerente do projeto, mesmo sendo o mais jovem do grupo, seu grande conhecimento em técnologia faz com que seja apto a função.'),
(2, 'Pedro Estevam Oliveira Fonseca', 'papitoti', '123', 1, '100002115606423', 'O integrante mais carismático do grupo. Apaixonado por tecnologias inovadoras de tenis, tem como hobby estudar calçados para os mais variados tipos de esporte.', 'É responsável pela construção da carcaça do robô e auxilia no desenvolvimento do site.'),
(3, 'Gabriel Oliveira Magalhães', 'cthulhu', '123', 1, '100001786181196', 'Otimista e Bem Humorado, procura sempre estar zen, ama fortemente a primeira e a décima arte, sonha em poder trabalhar na indústria de desenvolvimento de Games.', 'É o Designer do jogo, criador das sprites e mapas utilizados e também é o nosso game-tester.'),
(4, 'Mauricio Sideira Peres Junior', 'maauh', '123', 1, '1437967511', 'Para ele a velocidade dos motores é tudo, também conhecido como Drift King, é o piloto do nosso robô WALL-E e que nos levará a vitória do robocup.', 'Responsável pelo desenvolvimento do site e do banco de dados.'),
(5, 'Gustavo Alex de Sousa Fernandes', 'gugapower', '123', 1, '100024474408428', 'Nem playboy, nem bilionário, nem filantropo, muito menos um gênio, só um nerd entusiasta de jogos eletrônicos que adora competir e é apaixonado por cálculos e programação. Hobbies? Jogar, estudar, e desenvolver, oras! O que mais alguém com tal descrição poderia fazer da vida?', 'Tem como função a criação da história do jogo, suas instruções, jogabilidade e balanceamento.'),
(6, 'Admistrador', 'admin', 'password', 0, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `historia`
--
ALTER TABLE `historia`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `historia`
--
ALTER TABLE `historia`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
