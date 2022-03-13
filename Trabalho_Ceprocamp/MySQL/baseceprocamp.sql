CREATE DATABASE IF NOT EXISTS `baseceprocamp` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `baseceprocamp`;


CREATE TABLE `registro` (
  `Nome` varchar(60) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Telefone` varchar(50) NOT NULL,
  `Unidade` varchar(30) NOT NULL,
  `Curso` varchar(30) NOT NULL
)

CREATE TABLE `usuarios_alunos`(
    `id` int(200) PRIMARY KEY AUTO_INCREMENT,
    `nome` varchar(220),
    `email` varchar(220),
    `usuario` varchar(220),
    `nivel` varchar(10)
  )

INSERT INTO `usuarios_alunos` (`nome`,`email`, `usuario`,`nivel`) VALUES
('Guilherme Baltazar V. de Sales','estagio.guilhermesales@educa.fumec.sp.gov.br','Guilherme','1'),
('CPD CEPROCAMP OURO VERDE','cpd.ouroverde@educa.fumec.sp.gov.br','CPD OV','2'),
('CEPROCAMP OURO VERDE','ceprocamp.ouroverde@educa.fumec.sp.gov.br','OV','2'),


CREATE TABLE emprestimos (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `nomeEmatriculaProf` varchar(40),
  `nomeQuemAutorizou` varchar(20),
  `local` varchar(10) DEFAULT ‘Ouro Verde’,
  `sala` varchar(25),
  `controleDS` varchar(4),
  `canetaDS` varchar(4),
  `controleAr` varchar(4),
  `notebooks` varchar(80),
  `KitArduino` varchar(4),
  `mouse` varchar(3),
  `carregadorNot` varchar(3),
  `devolveu` varchar(4),
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
)

CREATE TABLE salas (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `sala` varchar(40)
)

CREATE TABLE QuemPediu (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `Nome_Matricula` varchar(60)
)

CREATE TABLE nomeQuemAutorizou (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `nomeQuemAutorizou` varchar(50)
)

CREATE TABLE quemAutorizou (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `QuemAutorizou` varchar(50)
)

CREATE TABLE qtdArduino (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `arduino` varchar(4)
)
CREATE TABLE qtdMouses (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `mouses` varchar(4)
)
CREATE TABLE qtdCarregadores (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `carregadores` varchar(4)
)



      