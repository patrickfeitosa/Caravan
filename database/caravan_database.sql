-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Abr-2018 às 21:52
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caravan_database`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `IDEvento` int(11) NOT NULL,
  `IDLocal` int(11) NOT NULL,
  `Evento` varchar(255) NOT NULL,
  `Local_Evento` varchar(255) NOT NULL,
  `Preco_Evento` varchar(20) NOT NULL,
  `Data_Evento` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`IDEvento`, `IDLocal`, `Evento`, `Local_Evento`, `Preco_Evento`, `Data_Evento`) VALUES
(1, 4, 'Show do Ozzy Osbourne', 'Lá em cima', '350,00', '24/04/2018');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem`
--

CREATE TABLE `imagem` (
  `IDImagem` int(11) NOT NULL,
  `linkImagem` varchar(255) DEFAULT NULL,
  `IDLocal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `locais`
--

CREATE TABLE `locais` (
  `IDLocal` int(11) NOT NULL,
  `nomePais` varchar(255) DEFAULT NULL,
  `nomeCity` varchar(255) DEFAULT NULL,
  `precoLocal` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `locais`
--

INSERT INTO `locais` (`IDLocal`, `nomePais`, `nomeCity`, `precoLocal`) VALUES
(3, 'Cansei', 'Cuiabá', '300,00'),
(4, 'Japão', 'Tokyo', '15.000,00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `IDPedido` int(11) NOT NULL,
  `IDUsuario` int(11) DEFAULT NULL,
  `IDLocal` int(11) DEFAULT NULL,
  `precoViagem` int(11) DEFAULT NULL,
  `datCompra` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `IDUsuario` int(11) NOT NULL,
  `Nome` varchar(255) DEFAULT NULL,
  `CPF` varchar(14) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Senha` varchar(20) DEFAULT NULL,
  `Endereco` varchar(255) DEFAULT NULL,
  `Cidade` varchar(255) DEFAULT NULL,
  `Estado` varchar(2) DEFAULT NULL,
  `CEP` varchar(9) DEFAULT NULL,
  `flg_admin` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`IDUsuario`, `Nome`, `CPF`, `Email`, `Senha`, `Endereco`, `Cidade`, `Estado`, `CEP`, `flg_admin`) VALUES
(1, 'Administrador', '430.859.258-56', 'admin@caravan.com.br', '123456', 'Rua de Teste', 'São Paulo', 'SP', '02813-654', 'true');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`IDEvento`);

--
-- Indexes for table `imagem`
--
ALTER TABLE `imagem`
  ADD PRIMARY KEY (`IDImagem`);

--
-- Indexes for table `locais`
--
ALTER TABLE `locais`
  ADD PRIMARY KEY (`IDLocal`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`IDPedido`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IDUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `IDEvento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `imagem`
--
ALTER TABLE `imagem`
  MODIFY `IDImagem` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `locais`
--
ALTER TABLE `locais`
  MODIFY `IDLocal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `IDPedido` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IDUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
