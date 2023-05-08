-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Maio-2023 às 03:18
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `locacao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `abril`
--

CREATE TABLE `abril` (
  `id` int(11) UNSIGNED NOT NULL,
  `dia` int(11) DEFAULT NULL,
  `mes` varchar(50) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `usuario_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `abril`
--

INSERT INTO `abril` (`id`, `dia`, `mes`, `ano`, `usuario_id`, `name`) VALUES
(2, 1, 'Abril', 2023, 1, 'marcio Henrique'),
(3, 1, 'Abril', 2023, 3, 'Rodrigo  Muniz'),
(4, 6, 'Abril', 2023, 3, 'Rodrigo  Muniz'),
(5, 4, 'Abril', 2023, 26, 'marcio henrique');

-- --------------------------------------------------------

--
-- Estrutura da tabela `agosto`
--

CREATE TABLE `agosto` (
  `id` int(11) UNSIGNED NOT NULL,
  `dia` int(11) DEFAULT NULL,
  `mes` varchar(50) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `usuario_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `agosto`
--

INSERT INTO `agosto` (`id`, `dia`, `mes`, `ano`, `usuario_id`, `name`) VALUES
(3, 1, 'Agosto', 2023, 1, 'marcio Henrique'),
(5, 31, 'Agosto', 2023, 3, 'Rodrigo  Muniz'),
(7, 6, 'Agosto', 2023, 1, 'marcio Henrique');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dezembro`
--

CREATE TABLE `dezembro` (
  `id` int(11) UNSIGNED NOT NULL,
  `dia` int(11) DEFAULT NULL,
  `mes` varchar(50) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `usuario_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `dezembro`
--

INSERT INTO `dezembro` (`id`, `dia`, `mes`, `ano`, `usuario_id`, `name`) VALUES
(4, 1, 'Dezembro', 2023, 1, 'marcio Henrique'),
(5, 31, 'Dezembro', 2023, 3, 'Rodrigo  Muniz'),
(6, 7, 'Dezembro', 2023, 1, 'marcio Henrique'),
(7, 12, 'Dezembro', 2023, 1, 'marcio Henrique'),
(8, 30, 'Dezembro', 2023, 1, 'marcio Henrique'),
(9, 22, 'Dezembro', 2023, 9, 'Victor Bueno'),
(10, 22, 'Dezembro', 2023, 16, 'Nathalia Pereira'),
(11, 14, 'Dezembro', 2023, 16, 'Nathalia Pereira'),
(13, 15, 'Dezembro', 2023, 9, 'Victor Bueno'),
(14, 7, 'Dezembro', 2023, 9, 'Victor Bueno'),
(15, 23, 'Dezembro', 2023, 9, 'Victor Bueno'),
(16, 24, 'Dezembro', 2023, 9, 'Victor Bueno'),
(17, 22, 'Dezembro', 2023, 19, 'Lucas Gonçaves'),
(18, 26, 'Dezembro', 2023, 16, 'Nathalia Pereira'),
(19, 6, 'Dezembro', 2023, 1, 'marcio Henrique'),
(20, 27, 'Dezembro', 2023, 1, 'marcio Henrique'),
(21, 24, 'Dezembro', 2023, 1, 'marcio Henrique'),
(22, 29, 'Dezembro', 2023, 1, 'marcio Henrique'),
(23, 23, 'Dezembro', 2023, 1, 'marcio Henrique'),
(24, 25, 'Dezembro', 2023, 1, 'marcio Henrique'),
(25, 6, 'Dezembro', 2023, 33, 'Pedro Sampaio');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fevereiro`
--

CREATE TABLE `fevereiro` (
  `id` int(11) UNSIGNED NOT NULL,
  `dia` int(11) DEFAULT NULL,
  `mes` varchar(50) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `usuario_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `fevereiro`
--

INSERT INTO `fevereiro` (`id`, `dia`, `mes`, `ano`, `usuario_id`, `name`) VALUES
(24, 1, 'Fevereiro', 2023, 1, 'marcio Henrique'),
(25, 9, 'Fevereiro', 2023, 3, 'Rodrigo  Muniz'),
(26, 7, 'Fevereiro', 2023, 1, 'marcio Henrique'),
(27, 13, 'Fevereiro', 2023, 1, 'marcio Henrique'),
(28, 3, 'Fevereiro', 2023, 26, 'marcio henrique'),
(29, 1, 'Fevereiro', 2023, 33, 'Pedro Sampaio'),
(30, 1, 'Fevereiro', 2023, 26, 'marcio henrique');

-- --------------------------------------------------------

--
-- Estrutura da tabela `janeiro`
--

CREATE TABLE `janeiro` (
  `id` int(11) UNSIGNED NOT NULL,
  `dia` int(11) DEFAULT NULL,
  `mes` varchar(50) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `usuario_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `janeiro`
--

INSERT INTO `janeiro` (`id`, `dia`, `mes`, `ano`, `usuario_id`, `name`) VALUES
(61, 2, 'Janeiro', 2023, 1, 'marcio Henrique'),
(62, 1, 'Janeiro', 2023, 1, 'marcio Henrique'),
(63, 4, 'Janeiro', 2023, 1, 'marcio Henrique'),
(64, 5, 'Janeiro', 2023, 1, 'marcio Henrique'),
(65, 1, 'Janeiro', 2023, 3, 'Rodrigo  Muniz'),
(66, 11, 'Janeiro', 2023, 17, 'Pedro Garcia'),
(67, 11, 'Janeiro', 2023, 18, 'Andrielli Costa'),
(68, 9, 'Janeiro', 2023, 19, 'Lucas Gonçaves'),
(69, 1, 'Janeiro', 2023, 19, 'Lucas Gonçaves'),
(70, 7, 'Janeiro', 2023, 1, 'marcio Henrique'),
(71, 10, 'Janeiro', 2023, 1, 'marcio Henrique'),
(72, 9, 'Janeiro', 2023, 1, 'marcio Henrique'),
(73, 16, 'Janeiro', 2023, 1, 'marcio Henrique'),
(74, 20, 'Janeiro', 2023, 1, 'marcio Henrique'),
(75, 31, 'Janeiro', 2023, 1, 'marcio Henrique'),
(76, 6, 'Janeiro', 2023, 1, 'marcio Henrique'),
(77, 29, 'Janeiro', 2023, 1, 'marcio Henrique'),
(78, 30, 'Janeiro', 2023, 1, 'marcio Henrique'),
(79, 23, 'Janeiro', 2023, 1, 'marcio Henrique'),
(80, 24, 'Janeiro', 2023, 1, 'marcio Henrique'),
(84, 1, 'Janeiro', 2023, 26, 'marcio henrique'),
(85, 1, 'Janeiro', 2023, 32, 'usuario  teste'),
(86, 1, 'Janeiro', 2023, 33, 'Pedro Sampaio'),
(87, 12, 'Janeiro', 2023, 33, 'Pedro Sampaio'),
(88, 10, 'Janeiro', 2023, 32, 'usuario  teste'),
(89, 10, 'Janeiro', 2023, 33, 'Pedro Sampaio'),
(90, 3, 'Janeiro', 2023, 26, 'marcio henrique');

-- --------------------------------------------------------

--
-- Estrutura da tabela `julho`
--

CREATE TABLE `julho` (
  `id` int(11) UNSIGNED NOT NULL,
  `dia` int(11) DEFAULT NULL,
  `mes` varchar(50) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `usuario_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `julho`
--

INSERT INTO `julho` (`id`, `dia`, `mes`, `ano`, `usuario_id`, `name`) VALUES
(2, 10, 'Julho', 2023, 3, 'Rodrigo  Muniz'),
(3, 1, 'Julho', 2023, 3, 'Rodrigo  Muniz'),
(4, 1, 'Julho', 2023, 1, 'marcio Henrique'),
(5, 5, 'Julho', 2023, 1, 'marcio Henrique'),
(6, 14, 'Julho', 2023, 1, 'marcio Henrique');

-- --------------------------------------------------------

--
-- Estrutura da tabela `junho`
--

CREATE TABLE `junho` (
  `id` int(11) UNSIGNED NOT NULL,
  `dia` int(11) DEFAULT NULL,
  `mes` varchar(50) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `usuario_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `junho`
--

INSERT INTO `junho` (`id`, `dia`, `mes`, `ano`, `usuario_id`, `name`) VALUES
(4, 1, 'Junho', 2023, 1, 'marcio Henrique'),
(5, 10, 'junho', 2023, 1, 'marcio henrique'),
(6, 10, 'junho', 2023, 1, 'marcio henrique'),
(7, 10, 'junho', 2023, 1, 'marcio henrique'),
(8, 10, 'junho', 2023, 1, 'marcio henrique'),
(9, 10, 'junho', 2023, 1, 'marcio henrique'),
(10, 10, 'junho', 2023, 1, 'marcio henrique'),
(11, 10, 'junho', 2023, 1, 'marcio henrique'),
(12, 10, 'junho', 2023, 1, 'marcio henrique'),
(13, 10, 'junho', 2023, 1, 'marcio henrique'),
(14, 10, 'junho', 2023, 1, 'marcio henrique'),
(15, 10, 'junho', 2023, 1, 'marcio henrique'),
(16, 10, 'junho', 2023, 1, 'marcio henrique'),
(17, 10, 'junho', 2023, 1, 'marcio henrique'),
(18, 10, 'junho', 2023, 1, 'marcio henrique'),
(19, 10, 'junho', 2023, 1, 'marcio henrique'),
(20, 10, 'junho', 2023, 1, 'marcio henrique'),
(21, 10, 'junho', 2023, 1, 'marcio henrique'),
(22, 10, 'Junho', 2023, 9, 'Victor Bueno'),
(23, 1, 'Junho', 2023, 9, 'Victor Bueno'),
(24, 23, 'Junho', 2023, 1, 'marcio Henrique'),
(25, 25, 'Junho', 2023, 1, 'marcio Henrique');

-- --------------------------------------------------------

--
-- Estrutura da tabela `maio`
--

CREATE TABLE `maio` (
  `id` int(11) UNSIGNED NOT NULL,
  `dia` int(11) DEFAULT NULL,
  `mes` varchar(50) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `usuario_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `maio`
--

INSERT INTO `maio` (`id`, `dia`, `mes`, `ano`, `usuario_id`, `name`) VALUES
(4, 1, 'Maio', 2023, 1, 'marcio Henrique'),
(5, 9, 'Maio', 2023, 9, 'Victor Bueno'),
(6, 4, 'Maio', 2023, 1, 'marcio Henrique'),
(7, 10, 'Maio', 2023, 1, 'marcio Henrique'),
(8, 1, 'Maio', 2023, 0, ''),
(9, 4, 'Maio', 2023, 26, 'marcio henrique'),
(10, 4, 'Maio', 2023, 33, 'Pedro Sampaio'),
(11, 5, 'Maio', 2023, 26, 'marcio henrique'),
(12, 10, 'Maio', 2023, 35, 'Vitor Cipriano');

-- --------------------------------------------------------

--
-- Estrutura da tabela `março`
--

CREATE TABLE `março` (
  `id` int(11) UNSIGNED NOT NULL,
  `dia` int(11) DEFAULT NULL,
  `mes` varchar(50) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `usuario_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `março`
--

INSERT INTO `março` (`id`, `dia`, `mes`, `ano`, `usuario_id`, `name`) VALUES
(5, 1, 'Março', 2023, 1, 'marcio Henrique'),
(6, 8, 'Março', 2023, 3, 'Rodrigo  Muniz'),
(7, 1, 'Março', 2023, 9, 'Victor Bueno'),
(8, 22, 'Março', 2023, 1, 'marcio Henrique'),
(9, 1, 'Março', 2023, 26, 'marcio henrique'),
(10, 3, 'Março', 2023, 33, 'Pedro Sampaio');

-- --------------------------------------------------------

--
-- Estrutura da tabela `novembro`
--

CREATE TABLE `novembro` (
  `id` int(11) UNSIGNED NOT NULL,
  `dia` int(11) DEFAULT NULL,
  `mes` varchar(50) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `usuario_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `novembro`
--

INSERT INTO `novembro` (`id`, `dia`, `mes`, `ano`, `usuario_id`, `name`) VALUES
(3, 1, 'Novembro', 2023, 1, 'marcio Henrique');

-- --------------------------------------------------------

--
-- Estrutura da tabela `outubro`
--

CREATE TABLE `outubro` (
  `id` int(11) UNSIGNED NOT NULL,
  `dia` int(11) DEFAULT NULL,
  `mes` varchar(50) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `usuario_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `outubro`
--

INSERT INTO `outubro` (`id`, `dia`, `mes`, `ano`, `usuario_id`, `name`) VALUES
(3, 1, 'Outubro', 2023, 1, 'marcio Henrique'),
(5, 13, 'Outubro', 2023, 1, 'marcio Henrique');

-- --------------------------------------------------------

--
-- Estrutura da tabela `setembro`
--

CREATE TABLE `setembro` (
  `id` int(11) UNSIGNED NOT NULL,
  `dia` int(11) DEFAULT NULL,
  `mes` varchar(50) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `usuario_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `setembro`
--

INSERT INTO `setembro` (`id`, `dia`, `mes`, `ano`, `usuario_id`, `name`) VALUES
(2, 13, 'Setembro', 2023, 1, 'marcio Henrique'),
(3, 1, 'Setembro', 2023, 1, 'marcio Henrique'),
(4, 22, 'Setembro', 2023, 1, 'marcio Henrique'),
(5, 22, 'Setembro', 2023, 9, 'Victor Bueno');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `token` varchar(100) DEFAULT NULL,
  `profile` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `name`, `lastname`, `password`, `email`, `token`, `profile`) VALUES
(26, 'marcio', 'henrique', '123', 'marcio.henrique@dlgconsult.com', '4552fa85baafd9334ee5b2c6f5e7553f31aa76202604a183409e12fc9f6b5e22829de6f070e6187593480755ffb095397fc2', '1'),
(32, 'usuario ', 'teste', '123', 'user.teste@dlgconsult.com', '67b8fc671b72e453e7e91ccdeabc2dde4a863e8053888246423dc16ba6075aef623a4d7fa5d4ca5cf5c1273ac6dc501c8644', '2'),
(33, 'Pedro', 'Sampaio', '123', 'pedro.sampaio@dlgconsult.com', '4ec6842993103b4aa8c7f4776d4e5fcbbaecf205704061bb959992a345d6644c9d12992fbf47a939a2ef450b31ac5d8624c0', '2'),
(34, 'teste', 'Henrique11', '123', 'victor.bueno@dlgconsult.com', '214fbc417c470d1d9893ea466a1fbd67968362d2a67e5ed754e357fbfe3e7b7a75d448fd3c7b05e83a10d0d3d90185b7f754', '2'),
(35, 'Vitor', 'Cipriano', '123', 'vitor.cipriano@gmail.com', '905d15d49a747f16b5fccb9674e7cc2a32afa75fca067ecb4921971527b354707c3165798853a551591e2451a4578be2640f', '2');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `abril`
--
ALTER TABLE `abril`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `agosto`
--
ALTER TABLE `agosto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `dezembro`
--
ALTER TABLE `dezembro`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `fevereiro`
--
ALTER TABLE `fevereiro`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `janeiro`
--
ALTER TABLE `janeiro`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `julho`
--
ALTER TABLE `julho`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `junho`
--
ALTER TABLE `junho`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `maio`
--
ALTER TABLE `maio`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `março`
--
ALTER TABLE `março`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `novembro`
--
ALTER TABLE `novembro`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `outubro`
--
ALTER TABLE `outubro`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `setembro`
--
ALTER TABLE `setembro`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `abril`
--
ALTER TABLE `abril`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `agosto`
--
ALTER TABLE `agosto`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `dezembro`
--
ALTER TABLE `dezembro`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `fevereiro`
--
ALTER TABLE `fevereiro`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `janeiro`
--
ALTER TABLE `janeiro`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT de tabela `julho`
--
ALTER TABLE `julho`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `junho`
--
ALTER TABLE `junho`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `maio`
--
ALTER TABLE `maio`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `março`
--
ALTER TABLE `março`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `novembro`
--
ALTER TABLE `novembro`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `outubro`
--
ALTER TABLE `outubro`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `setembro`
--
ALTER TABLE `setembro`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
