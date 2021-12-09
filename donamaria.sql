-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Dez-2021 às 23:29
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `donamaria`
--
CREATE DATABASE IF NOT EXISTS `donamaria2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `donamaria2`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `IDALUNO` int(11) NOT NULL,
  `NOME` varchar(255) NOT NULL,
  `MATRICULA` varchar(255) NOT NULL,
  `TURMA` varchar(255) NOT NULL,
  `TURNO` enum('MATUTINO','VESPERTINO','INTEGRAL') NOT NULL,
  `TELEFONE` varchar(12) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `SALDO` double(5,2) NOT NULL,
  `ID_RESPONSAVEL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`IDALUNO`, `NOME`, `MATRICULA`, `TURMA`, `TURNO`, `TELEFONE`, `EMAIL`, `SALDO`, `ID_RESPONSAVEL`) VALUES
(1, 'Cirilo Rivera', '144155986', '3º ano A', 'INTEGRAL', '', 'cirilo@gado.com', 2.00, 1),
(7, 'Maria Joaquina Madsen', '154987652', '3º ano A', 'INTEGRAL', '11996352874', 'mjoaquina@mail.com', 10.00, 10),
(12, 'Draco Malfoy', '123458791', '1º ano Hogwarts', 'INTEGRAL', NULL, 'draco@mail.com', 0.00, 13);

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

CREATE TABLE `compra` (
  `IDCOMPRA` int(11) NOT NULL,
  `ID_ALUNO` int(11) NOT NULL,
  `ID_PRODUTO` int(11) NOT NULL,
  `QUANTIDADE` int(11) NOT NULL,
  `DATAHORA` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `compra`
--

INSERT INTO `compra` (`IDCOMPRA`, `ID_ALUNO`, `ID_PRODUTO`, `QUANTIDADE`, `DATAHORA`) VALUES
(12, 1, 1, 1, '2021-12-09 10:44:44'),
(13, 9, 1, 1, '2021-12-09 11:18:06'),
(14, 7, 19, 1, '2021-12-09 11:43:06'),
(15, 1, 1, 1, '2021-12-09 19:05:10'),
(16, 1, 4, 1, '2021-12-09 19:05:24'),
(17, 1, 1, 1, '2021-12-09 19:24:54');

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecoescola`
--

CREATE TABLE `enderecoescola` (
  `IDENDESCOLA` int(11) NOT NULL,
  `ESTADO` char(2) NOT NULL,
  `NUMERO` varchar(5) NOT NULL,
  `CEP` char(8) NOT NULL,
  `BAIRRO` varchar(255) NOT NULL,
  `LOGRADOURO` varchar(255) NOT NULL,
  `ID_ESCOLA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `enderecoescola`
--

INSERT INTO `enderecoescola` (`IDENDESCOLA`, `ESTADO`, `NUMERO`, `CEP`, `BAIRRO`, `LOGRADOURO`, `ID_ESCOLA`) VALUES
(1, 'SP', '231', '04849529', 'Cantinho do céu', 'Rua 13 de Maio', 1),
(2, 'EN', '123', '12345678', 'Lugar Nenhum', 'Rua Não Pode Trouxa', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `escola`
--

CREATE TABLE `escola` (
  `IDESCOLA` int(11) NOT NULL,
  `NOME` varchar(255) NOT NULL,
  `TELEFONE` varchar(12) NOT NULL,
  `EMAIL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `escola`
--

INSERT INTO `escola` (`IDESCOLA`, `NOME`, `TELEFONE`, `EMAIL`) VALUES
(1, 'Escola Mundial', '11993064521', 'escola.mundial@mail.com'),
(2, 'Hogwarts', '13666666666', 'hogwarst@mail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ingrediente`
--

CREATE TABLE `ingrediente` (
  `INGREDIENTE` varchar(255) NOT NULL,
  `ID_PRODUTO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ingrediente`
--

INSERT INTO `ingrediente` (`INGREDIENTE`, `ID_PRODUTO`) VALUES
('Abóbora', 19),
('Pão Branco', 1),
('Queijo', 1),
('Torta', 19);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `IDPRODUTO` int(11) NOT NULL,
  `CODIGO` varchar(255) NOT NULL,
  `TIPO` enum('Comida','Bebida') NOT NULL,
  `NOME` varchar(255) NOT NULL,
  `CAMINHOIMAGEM` varchar(255) DEFAULT NULL,
  `FORNECEDOR` varchar(255) DEFAULT NULL,
  `PRECO` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`IDPRODUTO`, `CODIGO`, `TIPO`, `NOME`, `CAMINHOIMAGEM`, `FORNECEDOR`, `PRECO`) VALUES
(1, '159', 'Comida', 'Enroladinho Misto', 'View/images/produtos/1.jpg', NULL, 5.00),
(19, '168', 'Comida', 'Torta de Abóbora', 'View/images/produtos/19.jpg', NULL, 3.00),
(22, '512', 'Bebida', 'Água Mineral 500ml', 'View/images/produtos/22.jpg', 'São Roque Distribuidora', 5.00),
(26, '152', 'Bebida', 'Coca Cola 300ml', 'View/images/produtos/26.jpg', 'São Roque Distribuidora', 3.00);

-- --------------------------------------------------------

--
-- Estrutura da tabela `responsavel`
--

CREATE TABLE `responsavel` (
  `IDRESPONSAVEL` int(11) NOT NULL,
  `NOME` varchar(255) NOT NULL,
  `CPF` char(11) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `TELEFONE` varchar(12) NOT NULL,
  `ID_ESCOLA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `responsavel`
--

INSERT INTO `responsavel` (`IDRESPONSAVEL`, `NOME`, `CPF`, `EMAIL`, `TELEFONE`, `ID_ESCOLA`) VALUES
(1, 'José Rivera', '81524159875', 'jose_rivera@mail.com', '11992568197', 1),
(6, 'Paula Rivera ', '18592265587', 'paula_rivera@mail.com', '71992587412', 1),
(10, 'Miguel Madsen', '15585265489', 'miguelmadsen@mail.com', '85996352147', 1),
(13, 'Lucius Malfoy', '15897453265', 'lucius@mail.com', '71998526547', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `IDUSUARIO` int(11) NOT NULL,
  `ID_ESCOLA` int(11) DEFAULT NULL,
  `ID_RESPONSAVEL` int(11) DEFAULT NULL,
  `ID_ALUNO` int(11) DEFAULT NULL,
  `NIVELACESSO` enum('A','B','C') NOT NULL,
  `USERLOGIN` varchar(30) NOT NULL,
  `SENHA` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`IDUSUARIO`, `ID_ESCOLA`, `ID_RESPONSAVEL`, `ID_ALUNO`, `NIVELACESSO`, `USERLOGIN`, `SENHA`) VALUES
(1, 1, NULL, NULL, 'A', 'admin', '$2y$10$NH4KNRpwzpBI0ejWbzpz0uychCgFE8ZxradcLfZFnNdLvWpLmPAWy'),
(2, NULL, 1, NULL, 'B', 'responsavel', '$2y$10$GeQJ/3qROO1X1WSXnwb2H.wv97CPvqKYccsaZ6.g9fArU7zIu19a.'),
(3, NULL, NULL, 1, 'C', 'aluno', '$2y$10$w.lBYe1Z3NKmCgcp.KGSLeAdRSyKIQ4K6YhWguOtzY6.hNKtRboCi'),
(6, NULL, 6, NULL, 'B', 'paularivera86', '$2y$10$eJ1NdSvVoSSmce7tDOQANegyNJZyhtinVg2G4LeBTkBKQ0IbZMSjm'),
(7, NULL, 10, NULL, 'B', 'mmadsen85', '$2y$10$6XzpnB3sQwyaUQIA5xhWHepYKcgzxc6VaGvJ2aH9203UuHy1Yj9jq'),
(13, NULL, NULL, 7, 'C', 'mjoaquina', '$2y$10$PWuIUqFUHOn1orOmQJ02WOhwRTOIXNr/j2cqqCdeZpdzdoEWN7msu'),
(15, 2, NULL, NULL, 'A', 'hogwarts', '$2y$10$NH4KNRpwzpBI0ejWbzpz0uychCgFE8ZxradcLfZFnNdLvWpLmPAWy'),
(16, NULL, 13, NULL, 'B', 'lmalfoy', '$2y$10$qNJtFZPwluQTHiCoy8NSIudUjzsxSoQR45WwpdcO9HMJR/5XI0L8m'),
(19, NULL, NULL, 12, 'C', 'draco', '$2y$10$dnfwgPM8YP2/OtQmlEhvSObRw/9RJP72ptDR/WfNhD2XKVHTuIm36');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`IDALUNO`),
  ADD UNIQUE KEY `MATRICULA` (`MATRICULA`),
  ADD KEY `FK_RESPONSAVEL_ALUNO` (`ID_RESPONSAVEL`);

--
-- Índices para tabela `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`IDCOMPRA`);

--
-- Índices para tabela `enderecoescola`
--
ALTER TABLE `enderecoescola`
  ADD PRIMARY KEY (`IDENDESCOLA`),
  ADD KEY `FK_ESCOLA_ENDERECOESCOLA` (`ID_ESCOLA`);

--
-- Índices para tabela `escola`
--
ALTER TABLE `escola`
  ADD PRIMARY KEY (`IDESCOLA`);

--
-- Índices para tabela `ingrediente`
--
ALTER TABLE `ingrediente`
  ADD PRIMARY KEY (`INGREDIENTE`,`ID_PRODUTO`),
  ADD KEY `FK_PRODUTO_INGREDIENTE` (`ID_PRODUTO`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`IDPRODUTO`),
  ADD UNIQUE KEY `CODIGO` (`CODIGO`);

--
-- Índices para tabela `responsavel`
--
ALTER TABLE `responsavel`
  ADD PRIMARY KEY (`IDRESPONSAVEL`),
  ADD UNIQUE KEY `unique_cpf` (`CPF`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IDUSUARIO`),
  ADD KEY `FK_ALUNO_USUARIO` (`ID_ALUNO`),
  ADD KEY `FK_ESCOLA_USUARIO` (`ID_ESCOLA`),
  ADD KEY `FK_RESPONSAVEL_USUARIO` (`ID_RESPONSAVEL`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `IDALUNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `compra`
--
ALTER TABLE `compra`
  MODIFY `IDCOMPRA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `enderecoescola`
--
ALTER TABLE `enderecoescola`
  MODIFY `IDENDESCOLA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `escola`
--
ALTER TABLE `escola`
  MODIFY `IDESCOLA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `IDPRODUTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `responsavel`
--
ALTER TABLE `responsavel`
  MODIFY `IDRESPONSAVEL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IDUSUARIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `FK_RESPONSAVEL_ALUNO` FOREIGN KEY (`ID_RESPONSAVEL`) REFERENCES `responsavel` (`IDRESPONSAVEL`);

--
-- Limitadores para a tabela `enderecoescola`
--
ALTER TABLE `enderecoescola`
  ADD CONSTRAINT `FK_ESCOLA_ENDERECOESCOLA` FOREIGN KEY (`ID_ESCOLA`) REFERENCES `escola` (`IDESCOLA`);

--
-- Limitadores para a tabela `ingrediente`
--
ALTER TABLE `ingrediente`
  ADD CONSTRAINT `FK_PRODUTO_INGREDIENTE` FOREIGN KEY (`ID_PRODUTO`) REFERENCES `produto` (`IDPRODUTO`);

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_ALUNO_USUARIO` FOREIGN KEY (`ID_ALUNO`) REFERENCES `aluno` (`IDALUNO`),
  ADD CONSTRAINT `FK_ESCOLA_USUARIO` FOREIGN KEY (`ID_ESCOLA`) REFERENCES `escola` (`IDESCOLA`),
  ADD CONSTRAINT `FK_RESPONSAVEL_USUARIO` FOREIGN KEY (`ID_RESPONSAVEL`) REFERENCES `responsavel` (`IDRESPONSAVEL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
