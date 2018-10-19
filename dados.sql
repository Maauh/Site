-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Out-2018 às 23:59
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
-- Estrutura da tabela `robocup`
--

CREATE TABLE `robocup` (
  `ID` int(11) NOT NULL,
  `TITULO` text,
  `IMGURL` text,
  `DESCR` text,
  `DAT` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `robocup`
--

INSERT INTO `robocup` (`ID`, `TITULO`, `IMGURL`, `DESCR`, `DAT`) VALUES
(1, 'Musaranho', 'https://www.estudokids.com.br/wp-content/uploads/2014/07/musaranho.jpg', 'Se lhe perguntarem qual é o menor mamífero do planeta, o que você responderia? Acertou quem respondeu o musaranho! Pois bem, entre as várias espécies de musaranho já catalogado no mundo, existe uma que é caracterizada como a de menor tamanho entre os mamíferos.', NULL),
(3, 'Naja', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/66/Indiancobra.jpg/375px-Indiancobra.jpg', 'As diferentes espÃ©cies Naja existentes variam de comprimento e sÃ£o, na sua maioria, de corpo delgado. Grande parte sÃ£o capazes de atingir comprimentos de 1,84 m. O comprimento mÃ¡ximo de algumas das maiores espÃ©cies de cobra sÃ£o em torno de 3,1 m, com a Naja ashei (2,7 m), sendo a maior da espÃ©cie e encontrada na QuÃªnia de acordo com a ONG que cuida da preservaÃ§Ã£o de rÃ©pteis WildlifeDirect. Ainda de acordo com a organizaÃ§Ã£o, a referida espÃ©cie possui veneno suficiente para matar 15 humanos adultos.[5] Outra com tamanho avantajado Ã© a Naja melanoleuca (1,50 m), que pode crescer atÃ© cerca de 3,0 m.[6] Todas tÃªm uma capacidade caracterÃ­stica de levantar os quartos dianteiros de seus corpos do chÃ£o e achatar seus pescoÃ§os para parecer maior para um predador em potencial.', '18/10/2018 05:12 pm'),
(4, 'TardÃ­grado', 'https://ciencianautas.com/wp-content/uploads/2017/11/1_Tardigrado-800x498.jpg', 'O animal mais resistente do planeta Terra Ã© microscÃ³pico. Ele tem apenas meio milÃ­metro de comprimento e pode ser encontrado em todos os lugares, pois vive na camada aquosa de musgos e lÃ­quenes de todo o planeta. Esse Ã© o tardÃ­grado, tambÃ©m conhecido como â€œurso dâ€™Ã¡guaâ€ por sua maneira particular de andar semelhante ao desses potentes mamÃ­feros. O tardÃ­grado Ã© um dos micro-animais mais fascinantes da Terra e, toda vez que Ã© descoberto algo novo sobre o seu genoma, aparece nas revistas cientÃ­ficas mais prestigiadas. Mas o que esse animal tem para capturar toda a atenÃ§Ã£o da comunidade cientÃ­fica?', '18/10/2018 05:35 pm'),
(6, 'OnÃ§a-Pintada', 'https://static.todamateria.com.br/upload/57/bf/57bf43483180b-onca-pintada.jpg', 'A OnÃ§a-Pintada, tambÃ©m chamada de Jaguar, Ã© o maior felino das AmÃ©ricas e o terceiro maior do mundo, depois dos tigres e dos leÃµes.\r\n\r\nTrata-se de um animal predador (que estÃ¡ no topo da cadeia alimentar), carnÃ­voro e vertebrado (possui vÃ©rtebras). Pertence Ã  ordem carnÃ­vora e Ã  famÃ­lia felidae. Seu nome cientÃ­fico Ã© Panthera onca.', '18/10/2018 06:16 pm');

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
-- Indexes for table `robocup`
--
ALTER TABLE `robocup`
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
-- AUTO_INCREMENT for table `robocup`
--
ALTER TABLE `robocup`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
