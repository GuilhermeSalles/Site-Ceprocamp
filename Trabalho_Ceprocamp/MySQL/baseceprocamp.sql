CREATE DATABASE IF NOT EXISTS `baseceprocamp` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `baseceprocamp`;


CREATE TABLE `registro` (
  `Nome` varchar(60) NOT NULL,
  `Email` varchar(50) NOT NULL,
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
('','','',''),
