-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Nov-2019 às 14:23
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `multi_login`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_type` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`) VALUES
(NULL, 'john', 'joh@hotmail.com', 'user', 'e10adc3949ba59abbe56e057f20f883e'),
(NULL, 'bruno', 'a@asdas.com.br', 'admin', 'e10adc3949ba59abbe56e057f20f883e'),
(NULL, 'eduardo', 'eduar@hotmail.com', 'user', 'e10adc3949ba59abbe56e057f20f883e'),
(NULL, 'oisplson', 'sadasdsadasd@hotma.com', 'user', 'e10adc3949ba59abbe56e057f20f883e'),
(NULL, 'asdasdasd', 'a@asdas.com.br', 'user', '81dc9bdb52d04dc20036dbd8313ed055'),
(NULL, 'gugaaa', 'a@asdas.com.br', 'user', 'd7f374ca3c49bad1a006f86ac5c50f39'),
(NULL, 'marcos', 'marcos@hotma.com', 'user', '81dc9bdb52d04dc20036dbd8313ed055'),
(NULL, 'jackseira', 'joh@hotmail.com', 'user', '8d4884c1c07358122eaf4e03c8864cc6'),
(NULL, 'eduardo', 'joh@hotmail.com', 'user', 'bb606e504fca2bbbac8ba302b2e4c178'),
(NULL, 'gugu', 'joh@hotmail.com', 'user', 'eb1c5eeacce168e435c2a157f1f39594');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
