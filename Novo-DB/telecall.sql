-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 09/10/2023 às 22:33
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `telecall`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `autenticacao`
--

CREATE TABLE `autenticacao` (
  `id_autenticacao` int(11) NOT NULL,
  `autenticacao` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `autenticacao`
--

INSERT INTO `autenticacao` (`id_autenticacao`, `autenticacao`) VALUES
(1, 'Nome da mãe'),
(2, 'Cep'),
(3, 'Data de nascimento');

-- --------------------------------------------------------

--
-- Estrutura para tabela `log`
--

CREATE TABLE `log` (
  `id_log` int(11) NOT NULL,
  `ip` int(10) UNSIGNED DEFAULT NULL,
  `data_hora` datetime NOT NULL,
  `login_status` varchar(7) DEFAULT NULL,
  `fk_id_usuario` int(11) NOT NULL,
  `fk_id_autenticacao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipo_perfil`
--

CREATE TABLE `tipo_perfil` (
  `id_perfil` int(11) NOT NULL,
  `perfil` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `tipo_perfil`
--

INSERT INTO `tipo_perfil` (`id_perfil`, `perfil`) VALUES
(1, 'Master'),
(2, 'Comum');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `nome_materno` varchar(60) NOT NULL,
  `data_nascimento` date NOT NULL,
  `sexo` varchar(9) NOT NULL,
  `cpf` char(11) NOT NULL,
  `tel_celular` varchar(13) NOT NULL,
  `tel_fixo` varchar(12) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `login` char(6) NOT NULL,
  `senha` char(8) NOT NULL,
  `cep` char(8) NOT NULL,
  `fk_id_perfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `nome_materno`, `data_nascimento`, `sexo`, `cpf`, `tel_celular`, `tel_fixo`, `endereco`, `login`, `senha`, `cep`, `fk_id_perfil`) VALUES
(1, 'Davi Anderson de Oliveira', 'Neiva jane', '2002-05-01', 'Masculino', '12345678910', '21998166957', '2199816695', 'Galeão', 'brasil', 'alemanha', '12345678', 2),
(2, 'O chefe de tudo master', 'Mãe do Master', '2023-12-31', 'Feminino', '12345678911', '5521998166957', '552199816695', 'TODO LUGAR', 'brasil', 'alemanha', '12345678', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `autenticacao`
--
ALTER TABLE `autenticacao`
  ADD PRIMARY KEY (`id_autenticacao`);

--
-- Índices de tabela `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `fk_log_usuario1_idx` (`fk_id_usuario`),
  ADD KEY `fk_log_autenticacao1_idx` (`fk_id_autenticacao`);

--
-- Índices de tabela `tipo_perfil`
--
ALTER TABLE `tipo_perfil`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `cpf_UNIQUE` (`cpf`),
  ADD KEY `fk_id_perfil` (`fk_id_perfil`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `autenticacao`
--
ALTER TABLE `autenticacao`
  MODIFY `id_autenticacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `log`
--
ALTER TABLE `log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tipo_perfil`
--
ALTER TABLE `tipo_perfil`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `fk_id_autenticacao` FOREIGN KEY (`fk_id_autenticacao`) REFERENCES `autenticacao` (`id_autenticacao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_id_usuario` FOREIGN KEY (`fk_id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_id_perfil` FOREIGN KEY (`fk_id_perfil`) REFERENCES `tipo_perfil` (`id_perfil`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
