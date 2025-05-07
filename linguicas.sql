-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07/05/2025 às 22:13
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `linguica_cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `linguicas`
--

CREATE TABLE `linguicas` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `tamanho` float NOT NULL,
  `preco` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `linguicas`
--

INSERT INTO `linguicas` (`id`, `nome`, `tamanho`, `preco`) VALUES
(1, 'Linguica &quot;Teste&quot;', 99.99, 10),
(3, 'Linguica &quot;Teste&quot;', 99.99, 10),
(5, 'Linguica toscana', 12, 12),
(6, 'Linguica toscana', 12, 12),
(7, 'Linguica toscana', 69, 420),
(8, 'linguica calabresa', 69, 420),
(9, 'linguica de frango', 25, 98),
(10, 'linguica portuguesa', 12, 12),
(11, 'Linguica toscana', 12, 12);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `linguicas`
--
ALTER TABLE `linguicas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `linguicas`
--
ALTER TABLE `linguicas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
