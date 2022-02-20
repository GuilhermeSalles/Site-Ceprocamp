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
('Guilherme Baltazar V. de Sales','estagio.guilhermesales@educa.fumec.sp.gov.br','Guilherme','1')
('CPD CEPROCAMP OURO VERDE','cpd.ouroverde@educa.fumec.sp.gov.br','CPD OV','2'),
('CEPROCAMP OURO VERDE','ceprocamp.ouroverde@educa.fumec.sp.gov.br','OV','2'),


CREATE TABLE ´emprestimoOv´ (
  `id` int AUTO_INCREMENT PRIMARY KEY,
  `nomeProfessor` varchar(40), 
  `local` varchar(10),
  `sala` varchar(10), 
  `data` varchar(10),
  `devolveu`varchar(10), 
  `notebooks` varchar(20)
)