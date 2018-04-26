-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Abr-2018 às 04:03
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.9

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
  `Data_Evento` varchar(10) NOT NULL,
  `Preco_Evento` varchar(20) NOT NULL,
  `Local_Evento` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`IDEvento`, `IDLocal`, `Evento`, `Data_Evento`, `Preco_Evento`, `Local_Evento`) VALUES
(1, 10, 'Show do Ozzy Osbourne', '22/05/2018', '150,00', 'Planalto');

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
(9, 'Brasil', 'Cuiabá', '1.200,00'),
(10, 'Brasil', 'Brasilia', '22,22'),
(11, 'Russia', 'Moscow', '5.600,00');

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
(1, 'Administrador Editado', '430.859.258-56', 'admin@caravan.com.br', '123456', 'Rua Teste', 'São Paulo', 'RS', '02813-000', 'true'),
(5, 'Felipe Editado', '111.111.111-11', 'felipe@caravan.com.br', '123', 'Rua FMU', 'São Paulo', 'SP', '02813-000', 'true');

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
  MODIFY `IDLocal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `IDPedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IDUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
