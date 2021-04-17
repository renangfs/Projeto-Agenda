-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 17-Abr-2021 às 14:49
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `id14771691_name`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `telefone` varchar(220) NOT NULL,
  `datas` date NOT NULL,
  `hora` time NOT NULL,
  `servico` varchar(220) NOT NULL,
  `info` varchar(220) NOT NULL,
  `valor` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `telefone`, `datas`, `hora`, `servico`, `info`, `valor`) VALUES
(1, 'Renan Germano', '(21) 96847-4254', '2021-03-10', '10:00:00', 'servico1', 'teste1', 'R$ 10,00'),
(2, 'brabão', '(21) 99999-9999', '2021-03-10', '10:00:00', 'servico1', 'teste2', 'R$ 20,00'),
(3, 'renan', '(21) 98338-9514', '2021-03-10', '09:00:00', 'servico1', 'teste3', 'R$ 10,00'),
(4, 'teste1', '(21) 98338-9516', '2021-03-12', '12:00:00', 'servico1', 'teste dia', 'R$ 30,00'),
(5, 'Teste4', '(21) 96847-4254', '2021-03-11', '18:00:00', 'servico1', 'Teste4', 'R$ 10,00'),
(6, 'Teste 6', '(22)911338-3882', '2021-03-11', '12:00:00', 'servico1', '', 'R$: 0,00'),
(7, 'Teste7', '(22)911338-3882', '2021-03-30', '12:00:00', 'servico1', 'Teste7', 'R$ 30,00'),
(8, 'Lili', '(21) 99056-9905', '2021-03-13', '11:00:00', 'servico1', '', 'R$ 30,00'),
(9, 'Desabrigada', '(21) 98328-4579', '2021-04-07', '21:00:00', 'servico1', '', 'R$ 30,00'),
(12, 'Renan Germano', '(21) 99999-9999', '2021-03-12', '17:00:00', 'servico1', 'teste msg', 'R$ 30,00'),
(13, 'Renan Germano ', '(99) 99999-9999', '2021-03-19', '15:00:00', 'servico1', 'Teste 07', 'R$ 30,00'),
(14, 'Abandonada ', '(21) 98328-4579', '2021-03-22', '12:00:00', 'servico1', '', 'R$ 10,00'),
(19, 'renan', '(21) 98338-9514', '2021-03-17', '11:00:00', 'servico1', 'teste', 'R$ 30,00'),
(20, 'renan', '(21) 98338-9514', '2021-03-17', '10:00:00', 'servico1', 'teste', 'R$ 20,00'),
(25, 'Renan Germano ', '(21) 96847-4254', '2021-03-16', '12:00:00', '20,00', 'teste30', 'R$: 0,00'),
(26, 'renan', '(21) 98338-9514', '2021-03-16', '17:00:00', 'servico', 'teste', 'R$ 10,00'),
(27, 'Zanza', '(21) 98328-4579', '2021-03-20', '12:00:00', 'servico', '', 'R$ 10,00'),
(28, 'Elisângela ', '(21) 98328-4579', '2021-03-23', '11:00:00', 'servico', '', 'R$ 10,00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
