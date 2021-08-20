CREATE DATABASE `BaseCEPROCAMP`;
USE `BaseCEPROCAMP`;

CREATE TABLE `Registro` (
  `Nome` varchar(40) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Unidade` varchar(20) NOT NULL,
  `Curso` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
