-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Out-2018 às 17:47
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
  `DAT` datetime DEFAULT NULL,
  `POSTTYPE` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `historia`
--

INSERT INTO `historia` (`ID`, `TITULO`, `IMGURL`, `DESCR`, `DAT`, `POSTTYPE`) VALUES
(1, 'A primeira frustração a gente nunca esquece', 'imagem/historia/Primeira_arma.jpg', 'A esperança de fazer uma arma que utilizasse da energia potencial elástica, de maneira similar à empregada neste brinquedo, foi frustrada por Belizário em uma de suas passagens mais icônicas: “Sua arma precisa ser recolhida em 15 segundos!”', '2018-10-19 11:42:00', 'img'),
(2, 'O rascunho da conquista', 'imagem/historia/Cortar.jpg', 'Praticamente os construtores das pirâmides de Gizé. Será que elas também foram rascunhadas de alguma maneira? Fica aí a reflexão...', '2018-10-19 11:43:00', 'img'),
(3, 'Tantas opções', 'imagem/historia/Tantas_opcoes.jpg', 'Eram tantas opções... Tamanhos, modelos, a indecisão tomou conta do grupo. Foram realizados tantos cálculos nesse dia que todos saímos com as cabeças doendo. Pode ter certeza que o professor de cálculo ficaria orgulhoso de todo o progresso feito naquele dia.', '2018-10-19 11:44:00', 'img'),
(4, 'Lição do dia', 'imagem/historia/Protoboard.jpg', 'É... A protoboard não é uma boa maneira de construir circuitos com tantos jumpers... Aprendemos da pior maneira.', '2018-10-19 11:45:00', 'img'),
(5, 'Wall-E no oitavo mês de gestação', 'imagem/historia/Ultrassom.jpg', 'A emoção de uma mãe ao ver o ultrassom de seu feto... foi isso que sentimos nesse dia. Nossas mãos eram seu útero.', '2018-10-19 11:47:00', 'img'),
(6, 'Wall-E em seus primeiros meses de vida', 'imagem/historia/Vivo.jpg', 'Como qualquer criança de sua idade, dando seus primeiros passos pelo mundo. Por favor, não repare na falta de fraldas. Eles crescem tão rápido, não é mesmo?', '2018-10-19 11:48:00', 'img'),
(7, 'Wall-E na adolescência', 'imagem/historia/Adolescente.jpg', 'Como qualquer pessoa nessa idade, ele passou por diversas fases, uma delas sendo essa relatada na foto. Raspou a cabeça e começou a treinar duro para suas futuras batalhas. Um verdadeiro monge Shaolin.', '2018-10-19 11:50:00', 'img'),
(8, 'Chegou o grande dia', 'imagem/historia/O_Dia.jpg', 'Todos os momentos vividos pelo grupo culminam neste. O tão aguardado grande dia da competição havia chegado... A ansiedade dos membros do grupo nesse dia é inesquecível, assim como o próprio dia como um todo.', '2018-10-19 11:59:00', 'img'),
(9, 'Calma, garoto', 'imagem/historia/Teste.jpg', 'É só um teste, não tem necessidade de agressão...', '2018-10-19 12:00:00', 'img'),
(10, 'Nas mãos do pai', 'imagem/historia/Pai.jpg', 'Wall-E visto nas mãos de seu pai, mais conhecido como \"drift king\". Se você estava lá, sabe a razão de tal nomenclatura. Se não estava, acredite: foi de tirar o fôlego, o coração quase sai pela garganta.', '2018/10/19 12:03:00', 'img'),
(11, '\"A paciência é a maior virtude\"', 'imagem/historia/Paciente.jpg', 'Já diziam os sábios. A maior das virtudes aprendidas por Wall-E na sua jornada para se tornar um monge Shaolin foi a paciência. É... Esse era mesmo um dia em que tudo seria testado até o limite, até mesmo isso.', '2018-10-19 12:06:00', 'img'),
(12, 'Galvão Bueno perderia a voz', 'imagem/historia/RoboCup.jpg', 'Você acha que as partidas de UFC são interessantes? Lutas de espada da era medieval? Ou talvez uma guerra mundial seja emocionante pra você? Se você respondeu sim para alguma das três perguntas, você claramente não conhece a RoboCup.', '2018-10-19 12:29:00', 'img');

-- --------------------------------------------------------

--
-- Estrutura da tabela `next`
--

CREATE TABLE `next` (
  `ID` int(11) NOT NULL,
  `TITULO` text,
  `IMGURL` text,
  `DESCR` text,
  `DAT` datetime DEFAULT NULL,
  `POSTTYPE` text
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
(2, 'Admistrador', 'admin', 'password', 0, NULL, NULL, NULL),
(3, 'Pedro Estevam Oliveira Fonseca', 'papitoti', '123', 1, '100002115606423', 'O integrante mais carismático do grupo. Apaixonado por tecnologias inovadoras de tenis, tem como hobby estudar calçados para os mais variados tipos de esporte.', 'É responsável pela construção da carcaça do robô e auxilia no desenvolvimento do site.'),
(4, 'Gabriel Oliveira Magalhães', 'cthulhu', '123', 1, '100001786181196', 'Otimista e Bem Humorado, procura sempre estar zen, ama fortemente a primeira e a décima arte, sonha em poder trabalhar na indústria de desenvolvimento de Games.', 'É o Designer do jogo, criador das sprites e mapas utilizados e também é o nosso game-tester.'),
(5, 'Mauricio Sideira Peres Junior', 'maauh', '123', 1, '1437967511', 'Para ele a velocidade dos motores é tudo, também conhecido como Drift King, é o piloto do nosso robô WALL-E e que nos levará a vitória do robocup.', 'Responsável pelo desenvolvimento do site e do banco de dados.'),
(6, 'Gustavo Alex de Sousa Fernandes', 'gugapower', '123', 1, '100024474408428', 'Nem playboy, nem bilionário, nem filantropo, muito menos um gênio, só um nerd entusiasta de jogos eletrônicos que adora competir e é apaixonado por cálculos e programação. Hobbies? Jogar, estudar, e desenvolver, oras! O que mais alguém com tal descrição poderia fazer da vida?', 'Tem como função a criação da história do jogo, suas instruções, jogabilidade e balanceamento.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `historia`
--
ALTER TABLE `historia`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `next`
--
ALTER TABLE `next`
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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `next`
--
ALTER TABLE `next`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
