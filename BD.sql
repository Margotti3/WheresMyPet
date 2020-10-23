-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Jul-2018 às 22:54
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cadastrs`
--
CREATE DATABASE IF NOT EXISTS `cadastrs` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cadastrs`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(5) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `confirmacao` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `confirmacao`) VALUES
(1, 'Mateus Margotti', 'mateusmargotti@hotmail.com', 'mnbvcxz', 1),
(2, 'doido', 'doidera@gmail.com', 'mnbvcxz', 1),
(3, 'uou', 'uou@gmial.com', 'mnbvcxz', 0),
(4, '123', '123@f.com', 'aa', 0),
(8, 'ana elizia', 'aaaaa@gga.com', 'aaaaaa', 0),
(9, 'barbara', 'ba@fa.com', 'mnbvcxz', 0),
(12, 'bjd', 'gggg@t', 'mnbvcxz', 0),
(17, 'Margotti', 'mmargottia@gmail.com', 'mnbvcxz', 0),
(18, 'doido', 'doido@gmail.com', 'mnbvcxz', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
