-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 02/01/2019 às 20:29
-- Versão do servidor: 5.6.41-84.1
-- Versão do PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `boscogui_revenda`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `ataques`
--

CREATE TABLE `ataques` (
  `ip` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `dia` varchar(255) NOT NULL,
  `hora` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `ataques`
--

INSERT INTO `ataques` (`ip`, `url`, `dia`, `hora`) VALUES
('138.36.105.39', 'http://automotivo.boscoguinchos.com.br/_php/', '02-01-2019', '08:54:14');

-- --------------------------------------------------------

--
-- Estrutura para tabela `carro`
--

CREATE TABLE `carro` (
  `carro_id` int(255) NOT NULL,
  `carro_nome` varchar(255) NOT NULL,
  `carro_preco` varchar(255) NOT NULL,
  `carro_modelo` varchar(255) NOT NULL,
  `carro_data` varchar(255) NOT NULL,
  `carro_imagem_mini` varchar(255) NOT NULL,
  `carro_descricao` varchar(255) NOT NULL,
  `carro_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `carro`
--

INSERT INTO `carro` (`carro_id`, `carro_nome`, `carro_preco`, `carro_modelo`, `carro_data`, `carro_imagem_mini`, `carro_descricao`, `carro_url`) VALUES
(2, 'duster oroch ', '46.000', 'renault', '31.12.2018', 'oroshi oroch.png', 'DescriÃ§Ã£o Teste  alterado', 'dusteroroch'),
(3, 'captur', '46.000', 'renault', '31.12.2018', 'captur.png', 'DescriÃ§Ã£o Teste', 'captur'),
(4, 'duster', '60.000', 'renault', '31.12.2018', 'duster.png', 'DescriÃ§Ã£o Teste', 'duster'),
(7, 'kwid', '43.000', 'renault', '31.12.2018', 'kwid.png', 'DescriÃ§Ã£o Teste\r\n', 'kwid'),
(12, 'logan', '60.000', 'renault', '31.12.2018', 'LOGAN.png', 'DescriÃ§Ã£o Teste', 'logan');

-- --------------------------------------------------------

--
-- Estrutura para tabela `login`
--

CREATE TABLE `login` (
  `nome` varchar(233) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `foto_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `login`
--

INSERT INTO `login` (`nome`, `email`, `senha`, `data`, `id_user`, `foto_admin`) VALUES
('Eric', 'teste@teste.com', 'dGVzdGU=', '01.01.2019', 5, '02 (1).jpg'),
('Eric Rodrigues', 'admin@teste.com', 'dGVzdGU=', '02.01.2019', 6, 'Eric.jpg'),
('mj', 'mjean@reweb.com.br', 'a2tr', '02.01.2019', 7, '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `loja`
--

CREATE TABLE `loja` (
  `loja_id` int(255) NOT NULL,
  `loja_nome` varchar(255) NOT NULL,
  `loja_telefone` varchar(255) NOT NULL,
  `loja_endereco` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `loja`
--

INSERT INTO `loja` (`loja_id`, `loja_nome`, `loja_telefone`, `loja_endereco`, `data`) VALUES
(3, 'loja 1', '51996206763', 'R. Inglaterra 517', '01.01.2019'),
(4, 'loja 2', '51996206768', 'R. Inglaterra 517', '01.01.2019');

-- --------------------------------------------------------

--
-- Estrutura para tabela `whats`
--

CREATE TABLE `whats` (
  `whats_id` int(255) NOT NULL,
  `whats_nome` varchar(255) NOT NULL,
  `whats_numero` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `whats`
--

INSERT INTO `whats` (`whats_id`, `whats_nome`, `whats_numero`, `data`) VALUES
(2, 'Eric Rodrigues', '51996206763', '02.01.2019'),
(3, 'Eric Rodrigues', '51996206763', '02.01.2019');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `carro`
--
ALTER TABLE `carro`
  ADD PRIMARY KEY (`carro_id`);

--
-- Índices de tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- Índices de tabela `loja`
--
ALTER TABLE `loja`
  ADD PRIMARY KEY (`loja_id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `carro`
--
ALTER TABLE `carro`
  MODIFY `carro_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `loja`
--
ALTER TABLE `loja`
  MODIFY `loja_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
