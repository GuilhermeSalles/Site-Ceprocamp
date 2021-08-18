CREATE DATABASE `Registro`;
USE `Registro`;

CREATE TABLE `Dados` (
  `Nome` varchar(60) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Unidade` varchar(30) NOT NULL,
  `Curso` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
