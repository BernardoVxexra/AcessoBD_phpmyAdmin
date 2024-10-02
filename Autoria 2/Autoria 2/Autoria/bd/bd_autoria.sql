-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30/05/2024 às 20:20
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_autoria`
--
 CREATE DATABASE `bd_autoria`;
 USE `bd_autoria`;
-- --------------------------------------------------------

--
-- Estrutura para tabela `autor`
--

CREATE TABLE `autor` (
  `Cod_autor` int(10) NOT NULL,
  `NomeAutor` varchar(25) NOT NULL,
  `Sobrenome` varchar(30) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Nasc` datetime(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `autor`
--

INSERT INTO `autor` (`Cod_autor`, `NomeAutor`, `Sobrenome`, `Email`, `Nasc`) VALUES
(1, 'Jack Rowling', 'Tolkien', 'tolkien@example.com', '2015-05-13 00:00:00.000000'),
(2, 'Gabriel', 'García Márquez', 'garciamarquez@example.com', '2017-05-17 00:00:00.000000'),
(3, 'Dan', 'Brown', 'danbrown@example.com', '2018-05-09 00:00:00.000000'),
(4, 'George', 'Orwell', 'georgeorwell@example.com', '2021-05-12 00:00:00.000000'),
(5, 'Jackie', 'Rowleng', 'jkrowling@example.com', '2016-05-11 00:00:00.000000'),
(6, 'Agatha', 'Christie', 'agathachristie@example.co', '2017-05-10 00:00:00.000000'),
(7, 'Leo', 'Tolstoy', 'leotolstoy@example.com', '2014-05-01 00:00:00.000000');

-- --------------------------------------------------------

--
-- Estrutura para tabela `autoria`
--

CREATE TABLE `autoria` (
  `Cod_autor` int(10) NOT NULL,
  `Cod_livro` int(10) NOT NULL,
  `DataLancamento` datetime(6) NOT NULL,
  `Editora` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `autoria`
--

INSERT INTO `autoria` (`Cod_autor`, `Cod_livro`, `DataLancamento`, `Editora`) VALUES
(1, 2, '0000-00-00 00:00:00.000000', ''),
(2, 4, '0000-00-00 00:00:00.000000', ''),
(3, 6, '1954-07-29 00:00:00.000000', 'HarperCollins'),
(4, 8, '1967-05-30 00:00:00.000000', 'Harper & Row'),
(5, 10, '2003-03-18 00:00:00.000000', 'Doubleday'),
(6, 12, '1949-06-08 00:00:00.000000', 'Secker & Warburg'),
(7, 14, '1997-06-26 00:00:00.000000', 'Bloomsbury'),
(8, 16, '1954-11-11 00:00:00.000000', 'HarperCollinsLTDA');

-- --------------------------------------------------------

--
-- Estrutura para tabela `livro`
--

CREATE TABLE `livro` (
  `Cod_Livro` int(10) NOT NULL,
  `Titulo` varchar(30) NOT NULL,
  `Categoria` varchar(25) NOT NULL,
  `ISBN` int(30) NOT NULL,
  `Idioma` varchar(20) NOT NULL,
  `QtdePag` int(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `livro`
--

INSERT INTO `livro` (`Cod_Livro`, `Titulo`, `Categoria`, `ISBN`, `Idioma`, `QtdePag`) VALUES
(1, 'O Senhor dos Anéis', 'Fantasia', 261103571, 'Português', 576),
(2, 'Cem Anos de Solidão', 'Ficção', 60883286, 'Português', 417),
(3, 'O Código Da Vinci', 'Mistério', 307474275, 'Português', 489),
(4, 'Sapiens', 'Distopia', 451524934, 'Português', 328),
(5, 'Harry Potter e a Pedra Filosof', 'Fantasia', 590353426, ' Português', 309);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`Cod_autor`);

--
-- Índices de tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`Cod_Livro`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `autor`
--
ALTER TABLE `autor`
  MODIFY `Cod_autor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `Cod_Livro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
