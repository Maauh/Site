-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Out-2018 às 23:17
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
(1, 'A primeira frustração a gente nunca esquece', 'imagem/historia/Primeira_arma.jpg', 'A esperança de fazer uma arma que utilizasse da energia potencial elástica, de maneira similar à empregada neste brinquedo, foi frustrada por Belizário em uma de suas passagens mais icônicas: “Sua arma precisa ser recolhida em 15 segundos!”', '2018-03-09 00:53:00', 'img'),
(2, 'O rascunho da conquista', 'imagem/historia/Cortar.jpg', 'Praticamente os construtores das pirâmides de Gizé. Será que elas também foram rascunhadas de alguma maneira? Fica aí a reflexão...', '2018-08-08 19:52:00', 'img'),
(3, 'Tantas opções', 'imagem/historia/Tantas_opcoes.jpg', 'Eram tantas opções... Tamanhos, modelos, a indecisão tomou conta do grupo. Foram realizados tantos cálculos nesse dia que todos saímos com as cabeças doendo. Pode ter certeza que o professor de cálculo ficaria orgulhoso de todo o progresso feito naquele dia.', '2018-03-22 11:08:00', 'img'),
(4, 'Lição do dia', 'imagem/historia/Protoboard.jpg', 'É... A protoboard não é uma boa maneira de construir circuitos com tantos jumpers... Aprendemos da pior maneira.', '2018-03-21 17:50:00', 'img'),
(5, 'Wall-E no oitavo mês de gestação', 'imagem/historia/Ultrassom.jpg', 'A emoção de uma mãe ao ver o ultrassom de seu feto... foi isso que sentimos nesse dia. Nossas mãos eram seu útero.', '2018-03-27 11:01:00', 'img'),
(6, 'Wall-E em seus primeiros meses de vida', 'imagem/historia/Vivo.jpg', 'Como qualquer criança de sua idade, dando seus primeiros passos pelo mundo. Por favor, não repare na falta de fraldas. Eles crescem tão rápido, não é mesmo?', '2018-05-02 22:57:00', 'img'),
(7, 'Wall-E na adolescência', 'imagem/historia/Adolescente.jpg', 'Como qualquer pessoa nessa idade, ele passou por diversas fases, uma delas sendo essa relatada na foto. Raspou a cabeça e começou a treinar duro para suas futuras batalhas. Um verdadeiro monge Shaolin.', '2018-09-12 18:33:00', 'img'),
(8, 'Chegou o grande dia', 'imagem/historia/O_Dia.jpg', 'Todos os momentos vividos pelo grupo culminam neste. O tão aguardado grande dia da competição havia chegado... A ansiedade dos membros do grupo nesse dia é inesquecível, assim como o próprio dia como um todo.', '2018-10-08 20:24:00', 'img'),
(9, 'Calma, garoto', 'imagem/historia/Teste.jpg', 'É só um teste, não tem necessidade de agressão...\r\n', '2018-10-09 22:12:00', 'img'),
(10, 'Nas mãos do pai', 'imagem/historia/Pai.jpg', 'Wall-E visto nas mãos de seu pai, mais conhecido como \"drift king\". Se você estava lá, sabe a razão de tal nomenclatura. Se não estava, acredite: foi de tirar o fôlego, o coração quase sai pela garganta.', '2018-10-09 21:47:00', 'img'),
(11, '\"A paciência é a maior virtude\"', 'imagem/historia/Paciente.jpg', 'Já diziam os sábios. A maior das virtudes aprendidas por Wall-E na sua jornada para se tornar um monge Shaolin foi a paciência. É... Esse era mesmo um dia em que tudo seria testado até o limite, até mesmo isso.', '2018-10-09 21:41:00', 'img'),
(12, 'Galvão Bueno perderia a voz', 'https://www.youtube.com/embed/z09wQ2_jDLA', 'Você acha que as partidas de <del>briga de galo</del> UFC são interessantes? Lutas de espada da era medieval? Ou talvez uma guerra mundial seja emocionante pra você? Se você respondeu sim para alguma das três perguntas, você claramente não conhece a RoboCup <del>ou conhece, não sei</del>.', '2018-09-10 20:10:27', 'iframe'),
(27, 'Vamos com calma galera...', 'imagem/historia/robov.jpeg', 'E esse era o robô que nós todos pensamos que iamos montar, no dia em que o Belizário apresentou o projeto da matéria de Sensores e circuitos digitais.\r\n<a href=\"http://pacificrim.wikia.com/wiki/File:Gipsy_Danger_Blueprints.jpg\"> Fonte.</a>', '2018-03-01 23:58:07', 'img'),
(28, 'Aquele suporte honrado', 'imagem/historia/vareta.jpeg', 'E quem disse que não valeu a pena tomar aquela chuva no dia 14/04/2018 para comprar o suporte que nos levaria à vitória...\r\n<br>\r\nEDIT: É... não nos levou à vitória, mas, fomos à final no NEXT!!!', '2018-04-14 15:32:55', 'img'),
(29, 'Tracionando o MITO', 'imagem/historia/drift.jpeg', 'Sabe aquele momento em que as montadoras de carros esportivos estão fazendo aquele projeto de tração 4x4 estilo Lancer Rally Art e Subaru? Então, nesse exato momento em nosos lab rooms, estávamos pensando na tração ideal para atingirmos o melhor resultado nas <del>ruas</del> \r\n pistas da FIAP.\r\n<br><br>\r\n-DK        mais conhecido com DRIFT KING.', '2018-03-28 15:59:15', 'img'),
(30, 'Soldador do Tatuapé', 'imagem/historia/lus.jpeg', 'E nesse longo projeto, alguns de nós até aprendemos a soldar, e olha... que soldas perfeitas foram essas, mesmo com todos os impactos e batidas nas <del>RUAS</del> arenas da FIAP, elas estão firmes e fortes até hoje.', '2018-09-18 22:21:18', 'img'),
(31, 'Já ouviu falar do Gandalf, o Cinzento?', 'imagem/historia/metal.png', 'Digo... Wall-E, o Cinzento, no início ele era assim, meio sério demais para com os seus desenvolvedores, logo seus <del>neurônios</del> circuitos e chips foram infectados por nosso movimento <del>Walter RED and White</del> e ele ficou <del>com raiva</del>, digo... vermelho...', '2018-08-30 12:57:11', 'img'),
(32, 'Cara, estou com a cabeça a mil...', 'imagem/historia/cabeca.png', 'Relatos de um Wall-E:\r\n<p>Aqui meus pais me ensinavam como dar meus primeiros passos... E cara, como foi emociante aprender a andar, rodar <del>e fazer uns drifts</del>, nunca vou me esquecer de cada gesto que vocês me ensinaram, como me defender usando apenas <del> uma agulha</del> meus braços e tantas outras coisas, obrigado por me fazer sentir vivo, essa sensação é maravilhosa!!!</p>\r\n\r\n<p>-Wall-E.</p>', '2018-05-04 23:49:13', 'img'),
(33, 'Coloca na balança o que pra ti tem mais valor...', 'imagem/historia/balanca.png', 'Aquele momento que um pai nunca se esquece, assistir ao parto de um filho é algo tão lindo... \r\n<br>\r\nWall-E, nasceu saudável, bonito e pesando exatamente 394g...\r\n\r\n', '2018-04-05 11:43:40', 'img'),
(34, 'O bonde formou', 'imagem/historia/Nos.png', 'Da esquerda para a direita: um dungeon master que cria narrativas de deixar de Machado de Assis a George R. R. Martin de queixo caído, um gerente de vendas erudito em calçados capaz de escrever uma enciclopédia de 1250 páginas sobre os mais variados tipos de pisantes e convencer um paraplégico a comprar um par de tênis para usar nas mãos, um motorista habilidoso o suficiente para deixar Michael Schumacher comendo poeira e fazer baliza com drift em plena 25 de março, um nerd que usa os horários de almoço do trabalho para estudar, surpreendentemente não usa óculos, mas para compensar anda mais torto que o corcunda de Notre-Dame e um jovem programador prodígio que prefere usar suas fantásticas habilidades para a criação de trapaças para joguinhos eletrônicos. Uma equipe dessas poderia dar errado? Não responda!', '2018-10-09 20:32:09', 'img');

-- --------------------------------------------------------

--
-- Estrutura da tabela `index`
--

CREATE TABLE `index` (
  `ID` int(11) NOT NULL,
  `TITULO` text,
  `IMGURL` text,
  `DESCR` text,
  `DAT` datetime DEFAULT NULL,
  `POSTTYPE` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `index`
--

INSERT INTO `index` (`ID`, `TITULO`, `IMGURL`, `DESCR`, `DAT`, `POSTTYPE`) VALUES
(1, 'XIV RoboCup', 'imagem/historia/RoboCup.jpg', 'A RoboCup é a competição mais antiga da FIAP, e em 2018 chega à sua 14ª edição.\r\n<p>Seu objetivo é simples quando visto superficialmente: uma disputa entre robôs, capazes de segurar uma bexiga e de utilizar uma arma ativada através de colisão, para ver quem consegue estourar a bexiga do adversário primeiro.</p>\r\n<p>Porém, quando visto de perto, especialmente por aqueles que participam dela, a coisa vai muito além. Existem diversas regras e requisitos que precisam ser cumpridos. Exemplos seriam: armas devem ser recolhidas para dentro do perímetro do robô em 15 segundos, a bexiga deve permanecer sempre ao centro do robô, o robô possui dimensões máximas, tanto em altura quanto largura, e muitas outras, e o descumprimento de qualquer uma dessas significa a desqualificação do robô. E é exatamente isso que faz da RoboCup interessante.</p>\r\n<p>A competição permite total criatividade, qualquer tipo de tática de ataque e defesa pode ser empregada com maestria, porém nada injusto. Todos sempre podem vencer todos, o que deixa a competição extremamente emocionante. No final, vence aquele que empregar o melhor conjunto de toda a obra. Ou melhor, vence quem se divertiu, e nesse caso, todos são vencedores.</p>\r\n', '2018-10-21 18:54:22', 'img'),
(2, 'Disciplinas participantes do projeto', '', '<b>Sensores e circuitos digitais:</b> construção, manutenção e programação do robô, atendendo a todos os requisitos e regras da competição.\r\n<p><b>Web standards and game developing:</b> desenvolvimento de um site memorial do robô e sua construção, dispondo de imagens e textos do grupo e seus integrantes além do desenvolvimento do projeto como um todo (história, acontecimentos, curiosidades) e o desenvolvimento de um jogo utilizando a linguagem de programação javascript em conjunto com o elemento canvas da linguagem de marcação HTML.</p>\r\n<p><b>Storytelling e inspiração empreendedora:</b> elaboração do GDD(Game Design Document) do jogo produzido para a disciplina web standards and game developing, colocando em formato de texto empresarial num artigo acadêmico explicações e detalhamentos relacionados à mecânica, sistema e gameplay do jogo, além de sua logline e sua história.</p>\r\n<p><b>Sistemas de informação e resultados empresariais:</b> documentação de todo o projeto nos moldes do PMBok, dividida nas seguintes seções:\r\n<ul>\r\n<li>Escopo: detalhamento de quais processos o grupo elegeu para vencer a competição (armas, mobilidade, estratégia, combinação de outras, etc.);</li>\r\n<li>Tempo: como a EAP (Estrutura Analítica do Projeto) foi prevista para produzir o robô no tempo designado;</li>\r\n<li>Riscos: reconhecimento, detalhamento e criação de ações corretivas para os riscos relacionados à integridade do robô e à vitória da competição;</li>\r\n<li>Custos: planejamento e controle de todos os custos envolvidos no projeto de construção do robô;</li>\r\n<li>Recursos humanos: descrição das funções dos membros do grupo e sua formação de competências;</li>\r\n<li>Qualidade: como o grupo pretende manter a filosofia de projeto durante a sua execução: critérios e mudanças;</li>\r\n<li>Comunicação: a organização de um relatório para tornar clara a rede de comunicação do grupo, tanto interna quanto externa e sua relação com as partes interessadas;</li>\r\n<li>Integração: como agregar todas as informações com eficiência para não haver perda do foco no projeto como um todo.</li>\r\n</ul></p>\r\n', '2018-10-21 18:56:05', 'texto');

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

--
-- Extraindo dados da tabela `next`
--

INSERT INTO `next` (`ID`, `TITULO`, `IMGURL`, `DESCR`, `DAT`, `POSTTYPE`) VALUES
(3, 'FIAP Next Festival', '', '<p>O Next é um festival promovido pela FIAP em parceria com muitas empresas renomadas que reúne diversas atrações em tecnologia, arte, entretenimento, sempre com um foco em comum: inovação disruptiva.</p>\r\n<p>No que se refere ao contexto da RoboCup, o Next abriga a disputa final entre os competidores que mais se destacaram (campeões e vice-campeões de suas respectivas chaves) na fase realizada na faculdade, com muita festa e premiações para os 3 melhores colocados <del>que diga-se de passagem não somos nós</del>.</p>', '2018-10-21 18:43:35', 'texto'),
(5, 'Festa', 'imagem/next/festa.jpeg', 'Muita mulher bonita, muita azaração... bebidas com faíscas e muito mais.', '2018-10-21 19:52:58', 'img'),
(6, 'VR simulação do jogo', 'imagem/next/vr.jpeg', 'Simulação do segundo melhor jogo já feito, perdendo apenas para o nosso <del>OCOLAST</del> Viruz TD.', '2018-10-21 20:04:54', 'img'),
(7, 'UPMove', 'imagem/next/moveup.jpeg', 'Projeto voltado aos deficientes visuais, uma câmera detecta um obstáculo à frente, e um sensor no peito vibra para avisar.', '2018-10-21 20:16:49', 'img'),
(8, 'VR Experience', 'https://www.youtube.com/embed/XgK0RJpRwX8', '<del>Um jogo, uma imagem 360, propaganda Jequiti.</del>\r\n<br>\r\nUm jogo de terror ambientado em uma mansão mal-assombrada de onde o jogador deve escapar. Será que você consegue resolver!?', '2018-10-21 20:24:53', 'iframe'),
(9, 'Shake ur face', 'https://www.youtube.com/embed/F1iCidf8_VE', '<del>Não estava sofrendo um AVC nem tive paralisia facial. </del>\r\n<br>\r\nEste game foi desenvolvido para motivar crianças que não podem sair da cama.\r\nCrianças são geralmente muito hiperativas, então, para ajudá-las a passar por este período, o projeto \"shake-up\" é um jogo que mistura emoticons com expressões faciais, muito divertido por sinal.   ', '2018-10-21 20:47:27', 'iframe'),
(10, 'GAME+', 'imagem/next/games.jpeg', 'No next desse ano teve um grande numero de consoles, desde o ATARI até o PS4.\r\nNosso gamer aprovou, e não queria parar de jogar. Fazer o que? Sempre tem aquele sentimento nostálgico.\r\n<br>\r\n<del>Para tirar ele daí, apenas com um cigarro San Marino e uma dose de Velho com limão</del>', '2018-10-21 21:01:24', 'img'),
(11, 'Cultura POP? Tem também!', 'imagem/next/saida.jpeg', 'O Next também tem passagem para o mundo mágico pelo beco diagonal.\r\n<del>Apenas os trouxas não veem.</del>', '2018-10-21 21:08:55', 'img'),
(12, 'Mind Race', 'imagem/next/mindrace.jpeg', 'Um game que podemos jogar usando apenas o poder da mente para movimentar carros em uma corrida alucinante <del> ou não</del>.\r\nOs jogadores aceleram os carros com a concentração, quanto mais concentrado, mais rápido.', '2018-10-21 21:26:14', 'img'),
(13, 'JOGO É JOGO', 'imagem/next/jo.jpeg', 'Nosso gamer não pode ver um jogo dando sopa. \r\nReparem na organizadora do evento, que pelo semblante nunca viu alguém com tamanha destreza e coordenação <del>depois até pediu um autógrafo </del>.', '2018-10-21 21:42:51', 'img'),
(14, 'Next também é para os baladeiros', 'imagem/next/casais.jpeg', 'O Next é para todos, desde os casais até os <del>forever alones</del> solteiros, aqui tem muita festa e diversão.', '2018-10-21 22:30:51', 'img'),
(15, 'O quinteto', 'imagem/next/suco.jpeg', 'Da esquerda para a direita:\r\n<br>\r\n<del>Gandalf, o rolezeiro</del> Gabriel\r\n<br>\r\n<del>Príncipe do eletro-funk 2012</del> Pedro\r\n<br>\r\n<del>PT de del valle</del> Lucas\r\n<br>\r\n<del>Drift King: a história de</del> Mauricio\r\n<br>\r\n<del>O homem invisível Gustavo</del>', '2018-10-21 23:29:05', 'img'),
(16, 'Túnel do tempo ', 'imagem/next/tuneldotempo.jpeg', 'Aqui haviam todos os vídeo-games já inventados posicionados em ordem cronológica dentro de um túnel do tempo. <del>Reza a lenda que aquele que chegar no final do túnel e escrever uma tabela da verdade libera a skin do Belizário adolescente.</del>', '2018-10-22 00:04:09', 'img'),
(17, 'A competição', 'imagem/next/next.jpeg', 'A grande luta <del>(talvez não tão grande assim)</del>.\r\n<br>\r\nUm dia de muita empolgação e alegria contagiante pairando no ar.\r\n<br>\r\nNa arena entram dois sonhos e sobrevive apenas um. Estilo agoge de Esparta, uma luta inesquecível.', '2018-10-22 00:36:04', 'img');

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
(5, 'Mauricio Sideria Peres Junior', 'maauh', '123', 1, '1437967511', 'Para ele a velocidade dos motores é tudo, também conhecido como Drift King, é o piloto do nosso robô WALL-E e que nos levará a <del>derrota</del> vitória no robocup.', 'Responsável pelo desenvolvimento do site e do banco de dados.'),
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
-- Indexes for table `index`
--
ALTER TABLE `index`
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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `index`
--
ALTER TABLE `index`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `next`
--
ALTER TABLE `next`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
