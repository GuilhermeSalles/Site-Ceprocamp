-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 02, 2022 at 03:48 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baseceprocamp`
--

-- --------------------------------------------------------

--
-- Table structure for table `emprestimos`
--

CREATE TABLE `emprestimos` (
  `id` int(11) NOT NULL,
  `nomeEmatriculaProf` varchar(40) DEFAULT NULL,
  `nomeQuemAutorizou` varchar(20) DEFAULT NULL,
  `local` varchar(10) DEFAULT 'Ouro Verde',
  `sala` varchar(25) DEFAULT NULL,
  `controleDS` varchar(4) DEFAULT NULL,
  `canetaDS` varchar(4) DEFAULT NULL,
  `controleAr` varchar(4) DEFAULT NULL,
  `notebooks` varchar(80) DEFAULT NULL,
  `KitArduino` varchar(4) DEFAULT NULL,
  `mouse` varchar(3) DEFAULT NULL,
  `carregadorNot` varchar(3) DEFAULT NULL,
  `devolveu` varchar(4) DEFAULT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emprestimos`
--

INSERT INTO `emprestimos` (`id`, `nomeEmatriculaProf`, `nomeQuemAutorizou`, `local`, `sala`, `controleDS`, `canetaDS`, `controleAr`, `notebooks`, `KitArduino`, `mouse`, `carregadorNot`, `devolveu`, `data`) VALUES
(1, 'ADRIANA APARECIDA BROTTO DA SILVA	- 1051', 'Guilherme - CPD', 'Ouro Verde', 'Sala - 01', 'NÃ£o', 'NÃ£o', 'NÃ£o', '24234', '0', '0', '0', 'Sim', '2022-04-28 15:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `professores_existentes`
--

CREATE TABLE `professores_existentes` (
  `id` int(11) NOT NULL,
  `Nome_Matricula` varchar(60) DEFAULT NULL,
  `notebooks` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professores_existentes`
--

INSERT INTO `professores_existentes` (`id`, `Nome_Matricula`, `notebooks`) VALUES
(1, 'ADRIANA APARECIDA BROTTO DA SILVA	- 10515', '');

-- --------------------------------------------------------

--
-- Table structure for table `qtdarduino`
--

CREATE TABLE `qtdarduino` (
  `id` int(11) NOT NULL,
  `arduino` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qtdarduino`
--

INSERT INTO `qtdarduino` (`id`, `arduino`) VALUES
(0, '0'),
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6'),
(7, '7'),
(8, '8'),
(9, '9'),
(10, '10');

-- --------------------------------------------------------

--
-- Table structure for table `qtdcarregadores`
--

CREATE TABLE `qtdcarregadores` (
  `id` int(11) NOT NULL,
  `carregadores` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qtdcarregadores`
--

INSERT INTO `qtdcarregadores` (`id`, `carregadores`) VALUES
(0, '0'),
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6'),
(7, '7'),
(8, '8'),
(9, '9'),
(10, '10');

-- --------------------------------------------------------

--
-- Table structure for table `qtdmouses`
--

CREATE TABLE `qtdmouses` (
  `id` int(11) NOT NULL,
  `mouses` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qtdmouses`
--

INSERT INTO `qtdmouses` (`id`, `mouses`) VALUES
(0, '0'),
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6'),
(7, '7'),
(8, '8'),
(9, '9'),
(10, '10');

-- --------------------------------------------------------

--
-- Table structure for table `quais_nots`
--

CREATE TABLE `quais_nots` (
  `id` int(11) NOT NULL,
  `curso` varchar(40) DEFAULT NULL,
  `notebooks` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quais_nots`
--

INSERT INTO `quais_nots` (`id`, `curso`, `notebooks`) VALUES
(1, 'Web - manhÃ£ ', '24234');

-- --------------------------------------------------------

--
-- Table structure for table `quemautorizou`
--

CREATE TABLE `quemautorizou` (
  `id` int(11) NOT NULL,
  `QuemAutorizou` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quemautorizou`
--

INSERT INTO `quemautorizou` (`id`, `QuemAutorizou`) VALUES
(2, 'Guilherme - CPD'),
(3, 'Mateus - CPD');

-- --------------------------------------------------------

--
-- Table structure for table `quempediu`
--

CREATE TABLE `quempediu` (
  `id` int(11) NOT NULL,
  `Nome_Matricula` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quempediu`
--

INSERT INTO `quempediu` (`id`, `Nome_Matricula`) VALUES
(1, 'ADRIANA APARECIDA BROTTO DA SILVA	- 10515'),
(2, 'ADRIANA HELENA NECHITA - 10536'),
(3, 'ALENCAR OLIVEIRA SCAFI - 10502'),
(4, 'ALESSANDRA REINATO WOLFF - 10495'),
(5, 'ALEX SEIITI HAYASHIDA - 10417'),
(6, 'ALEXANDRE EMIGDIO DA SILVA - 10529'),
(7, 'ANA ANGELIK - 10551'),
(8, 'ANA FLAVIA GRESPAN BASSI - 10434'),
(9, 'ANA LEILA OLIVEIRA DOS SANTOS - 10592'),
(10, 'ANDREA REGINA SAMPAIO PEREIRA - 10441'),
(11, 'BRUNO KENZO KAGAWA - 10418'),
(12, 'CIRLENE DOS SANTOS - 10535'),
(13, 'CLAUDIA NISHIBE FUREGATTI SPINELLA - 10422'),
(14, 'DENILSON FERNANDO PEREIRA - 10424'),
(15, 'DENILTON DA SILVA - 10414'),
(16, 'DIEGO SALVIANO DE MATOS - 10565'),
(17, 'EDISON BENEDITO MARCON - 10448'),
(18, 'EDUARDO BECKER SPACH - 10598'),
(19, 'EDVALDO DA COSTA PASSOS JUNIOR - 10542'),
(20, 'EDVALDO DA COSTA PASSOS JUNIOR - 10435'),
(21, 'ELISABETE GOMES LEAL - 10534'),
(22, 'ELLEN POMPEI - 10425'),
(23, 'ERIKA KATE DE OLIVEIRA LIMA - 10523'),
(24, 'ERIKSEN KOJI MIYASAKI - 10419'),
(25, 'ESTEFANIE SIQUEIRA VIGATO - 10454'),
(26, 'FABIO NASCIMENTO DA SILVA - 10545'),
(27, 'FERNANDA NUNES COUTINHO - 10586'),
(28, 'FERNANDO ELIAS BORGES - 10412'),
(29, 'FERNANDO SABINO DA SILVA - 10426'),
(30, 'GERALDO PAULO GUIMARAES - 10552'),
(31, 'GLEIDA DE CARVALHO INACIO - 10596'),
(32, 'GUSTAVO BARONI STEGER - 10423'),
(33, 'GUSTAVO FARIA DE OLIVEIRA - 10427'),
(34, 'ISAQUE SQUARIZI CARRILIO - 10581'),
(35, 'IZABELA RIBEIRO ZULATO - 10594'),
(36, 'JAKSON DA CRUZ PEREIRA - 10453'),
(37, 'JONATHAN PAULO FIORI - 10590'),
(38, 'JOSE AUGUSTO POLIZELLO - 10505'),
(39, 'JOSICLEIDE OLIVEIRA DOS SANTOS - 10450'),
(40, 'JULIANA MORAIS BELO - 10566'),
(41, 'JULIO CESAR DE PAULA - 10591'),
(42, 'KARINA HYMNO DE SOUZA - 10589'),
(43, 'LEANDRO MARTINS DA SILVA - 10572'),
(44, 'LIGIA FRUHVALD LISATCHOK - 10428'),
(45, 'LUCIANA PAIVA MEIRA - 10530'),
(46, 'MARCOS PAULO HIRAYAMA - 10433'),
(47, 'MARILIA RIBEIRO ZANETTI - 10593'),
(48, 'MARTA MARIA PAGADIGORRIA - 10531'),
(49, 'MARIZE DE ALMEIDA KOSLOWKI	'),
(50, 'MAURILIO LOPES DE SANTANA - 10585'),
(51, 'MISAEL VICTOR NICOLUCI - 10442'),
(52, 'MOACIR JOSE TEIXEIRA - 10528'),
(53, 'MONICA DE MEDEIROS REZENDE - 10550'),
(54, 'OSMAR ALVES TEIXEIRA - 10494'),
(55, 'PAULA REGINA DA COSTA - 10564'),
(56, 'REGIANNE FONTANA - 10553'),
(57, 'REGINALDO ROBERTO DA SILVA - 10503'),
(58, 'REGISLENE DIAS DE ALMEIDA - 10578'),
(59, 'RICARDO AUGUSTO BUENO - 10421'),
(60, 'RODOLFO DA SILVA SANTOS - 10416'),
(61, 'ROSIMERE FLORENZIANO - 10511'),
(62, 'SABRINA MOMESSO VIGANO - 10504'),
(63, 'SAUL AFONSO CAMARGO - 10415'),
(64, 'TERCIA BARREIRA VIADANNA - 10597'),
(65, 'TERESA CANDOLO - 10549'),
(66, 'URUBATAN LOPES DA SILVA - 10440'),
(67, 'VALERIA CRISTINA GOMES LEAL - 10496'),
(68, 'VANESSA FERREIRA MAGNIN - 10544'),
(69, 'VANESSA SILVA PEREIRA ARAUJO - 10584'),
(70, 'VERA LUCIA PAQUE - 10561'),
(71, 'VILSON ROBERTO DE OLIVEIRA - 10430'),
(72, 'WAGNER DA CUNHA ALVARES - 10562'),
(73, 'WAGNER GOMES - 10447'),
(74, 'WESLLEY GARCIA SANCHES - 10431'),
(75, 'WESLLEY GARCIA SANCHES - 10563');

-- --------------------------------------------------------

--
-- Table structure for table `registro`
--

CREATE TABLE `registro` (
  `Nome` varchar(60) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Telefone` varchar(50) NOT NULL,
  `Unidade` varchar(30) NOT NULL,
  `Curso` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registro`
--

INSERT INTO `registro` (`Nome`, `Email`, `Telefone`, `Unidade`, `Curso`) VALUES
('TYU', 'TYU@GMAIL.COM', '19 983223688', 'Campo grande - PraÃ§a ConcÃ³rd', 'Almoxarife');

-- --------------------------------------------------------

--
-- Table structure for table `salas`
--

CREATE TABLE `salas` (
  `id` int(11) NOT NULL,
  `sala` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salas`
--

INSERT INTO `salas` (`id`, `sala`) VALUES
(1, 'Sala - 01'),
(2, 'Sala - 02'),
(3, 'Sala - 03'),
(4, 'Sala - 04'),
(5, 'Sala Gamer');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(200) NOT NULL,
  `nome` varchar(220) DEFAULT NULL,
  `email` varchar(220) DEFAULT NULL,
  `nivel` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `nivel`) VALUES
(1, 'Guilherme Baltazar V. de Sales', 'estagio.guilhermesales@educa.fumec.sp.gov.br', 'CPD-OV'),
(2, 'CPD CEPROCAMP OURO VERDE', 'cpd.ouroverde@educa.fumec.sp.gov.br', 'CPD-OV');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emprestimos`
--
ALTER TABLE `emprestimos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professores_existentes`
--
ALTER TABLE `professores_existentes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qtdarduino`
--
ALTER TABLE `qtdarduino`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qtdcarregadores`
--
ALTER TABLE `qtdcarregadores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qtdmouses`
--
ALTER TABLE `qtdmouses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quais_nots`
--
ALTER TABLE `quais_nots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quemautorizou`
--
ALTER TABLE `quemautorizou`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quempediu`
--
ALTER TABLE `quempediu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salas`
--
ALTER TABLE `salas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emprestimos`
--
ALTER TABLE `emprestimos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `professores_existentes`
--
ALTER TABLE `professores_existentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `qtdarduino`
--
ALTER TABLE `qtdarduino`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `qtdcarregadores`
--
ALTER TABLE `qtdcarregadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `qtdmouses`
--
ALTER TABLE `qtdmouses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `quais_nots`
--
ALTER TABLE `quais_nots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `quemautorizou`
--
ALTER TABLE `quemautorizou`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `quempediu`
--
ALTER TABLE `quempediu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `salas`
--
ALTER TABLE `salas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
