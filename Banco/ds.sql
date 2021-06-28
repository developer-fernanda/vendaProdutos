-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Jun-2021 às 19:30
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ds`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `data_nascimento` datetime NOT NULL,
  `sexo` varchar(30) NOT NULL,
  `estado_civil` varchar(30) NOT NULL,
  `profissao` varchar(50) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `rg` varchar(12) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `cep` varchar(50) NOT NULL,
  `complemento` varchar(100) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `obs` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `data_nascimento`, `sexo`, `estado_civil`, `profissao`, `telefone`, `email`, `cpf`, `rg`, `rua`, `numero`, `bairro`, `uf`, `cep`, `complemento`, `data_cadastro`, `obs`) VALUES
(7, 'Joaquim Adryan da Silva', '2017-04-24 00:00:00', 'Masculino', 'Solteiro', 'Engenheiro', '(11) 99505-6742', 'joaquimadryan@hotmail.com', '418.232.790-99', '48.423.748-9', 'Estrada da Lagoa ', '1.012', 'Lagoa', 'Sã', '06730-000', 'Próximo a Escola', '2021-04-13 00:04:23', 'Primeiro Registro '),
(9, 'Cintia Regiane', '1992-06-27 00:00:00', 'Feminino', 'Casada', 'Dona de Casa', '(11) 99677-6756', 'cinta@gmail.com', '435.678.679-77', '49.567.734.9', 'Estrada da Lagoa ', '1.012', 'Lagoa', 'Sã', '06730-000', 'Próximo a Escola', '2021-04-13 00:02:30', 'Test'),
(10, 'Hercules Jhony', '1992-02-09 00:00:00', 'Masculino', 'Solteiro', 'Desenvolvedor', '(11) 99505-8940', 'hercules@gmail.com', '418.345.432-73', '49.456.734.9', 'Benedito Coelho ', '1.0235', 'Jardim Bela', 'Sã', '06730-000', 'Próximo a Emergência', '2021-04-13 00:07:16', ''),
(11, 'Maria Joaquina', '1994-11-03 00:00:00', 'Feminino', 'Solteira', 'Psicóloga', '(11) 98488-3672', 'mariajoaquina@gmail.com', '418.232.778-99', '49.324.234.9', 'Benedito Coelho ', '21', 'Jardim Bela Vista', 'Sã', '06730-000', 'Próximo a Emergência', '2021-04-13 00:05:58', ''),
(12, 'Severino Correia', '1989-11-13 00:00:00', 'Masculino', 'casado', 'Comerciante', '(11) 99505-1220', 'severino@gmail.com', '435.744.712-55', '49.498.734-7', 'Benedito Coelho ', '1.011', 'Jardim Bela Vista', 'Sã', '06730-000', 'Próximo a Emergência', '2021-04-13 00:06:21', ''),
(18, 'Rodrigo Alves', '1989-07-07 00:00:00', 'Masculino', 'Solteiro', 'Mecânico', '(11) 98488-5678', 'rodrigo@gmail.com', '418.232.879-55', '48.898.798.5', 'Valêncio Soares Rodriguês', '21', 'Soares', 'Sã', '06730-000', 'Próximo a guarda municipal', '2021-04-13 00:06:52', ''),
(19, 'Kenia Geovana Estevam', '1992-09-15 00:00:00', 'Feminino', 'Solteiro', 'estudante', '(11) 98478-7254', 'kenia@gmail.com', '418.232.778-85', '48.538.765-8', 'Estrada da Lagoa ', '1.012', 'Lagoa', 'SP', '06730-000', 'Próximo à escola', '2021-03-30 23:09:43', ''),
(20, 'Kedson Estevam', '1997-03-23 00:00:00', 'Maculino', 'Solteiro', 'Operador ', '(11) 98767-4524', 'kedson@hotmail.com', '418.345.754-88', '48.538.254-8', 'Valêncio Soares Rodriguês', '1.247', 'Soares', 'SP', '06730-000', 'Próximo a guarda municipal', '2021-03-30 23:10:54', ''),
(23, 'Alexandre Costa', '1997-09-04 00:00:00', 'Maculino', 'Casado', 'Operador ', '(11) 98459-4521', 'alexandre@hotmail.com', '412.345.754-88', '48.538.254-8', 'Pilão agua', '415', 'Pilão', 'SP', '06730-000', 'Próximo ao hospital', '2021-03-30 23:11:30', ''),
(25, 'Mariana Rodrigues', '1993-04-04 00:00:00', 'Feminino', 'Solteiro', 'Psicóloga', '(11) 97455-4500', 'mariana@hotmail.com', '777.345.754-76', '48.444.412-7', 'Mário Albuquerque', '715', 'São Judas', 'CE', '08540-777', 'Próximo ao litoral', '2021-03-30 23:11:39', ''),
(26, 'Mayara Dayara Dias', '1994-11-11 00:00:00', 'Feminino', 'Divorciado', 'Psicopedagoga', '(11) 98767-4444', 'mayara@gmail.com', '435.678.789-77', '48.538.777-7', 'Rua maria ', '21', 'paiva', 'SP', '06730-748', 'casa', '2021-03-30 23:11:50', ''),
(36, 'Eduardo Henrique da Silva Bartelz', '2004-01-08 00:00:00', 'Maculino', 'Solteiro', 'Auxilar administrativo', '(11) 95612-90997', 'eduardo@gmail.com', '418.345.456-85', '48.456.748.5', 'Estrada da Lagoa ', '1.011', 'Lagoa', 'AC', '05678-4567', 'Próximo a Eletropaula ', '2021-05-29 15:33:48', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `entrada`
--

CREATE TABLE `entrada` (
  `id` int(11) NOT NULL,
  `id_fornecedor` int(11) NOT NULL,
  `data_entrada` datetime NOT NULL,
  `observacao` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `entrada`
--

INSERT INTO `entrada` (`id`, `id_fornecedor`, `data_entrada`, `observacao`) VALUES
(1, 0, '2021-05-24 20:01:00', ''),
(2, 0, '2021-05-24 20:01:53', ''),
(3, 0, '2021-05-24 20:04:16', ''),
(4, 0, '2021-05-24 20:15:18', ''),
(5, 0, '2021-05-24 20:17:14', ''),
(6, 0, '2021-05-24 20:20:26', ''),
(7, 1, '2021-05-28 22:00:09', ''),
(8, 3, '2021-05-28 22:03:11', ''),
(9, 3, '2021-05-28 22:05:59', ''),
(10, 3, '2021-05-28 22:06:27', ''),
(11, 3, '2021-05-28 22:17:00', ''),
(12, 3, '2021-05-28 23:27:11', ''),
(13, 3, '2021-05-28 23:27:33', ''),
(14, 8, '2021-05-29 12:35:38', ''),
(15, 3, '2021-06-11 16:27:55', ''),
(16, 4, '2021-06-28 13:53:00', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `id` int(11) NOT NULL,
  `razao_social` varchar(100) NOT NULL,
  `cnpj` varchar(18) NOT NULL,
  `data_abertura` datetime NOT NULL,
  `regime` varchar(100) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `inscricao_estadual` varchar(100) DEFAULT NULL,
  `inscricao_municipal` varchar(100) NOT NULL,
  `representante` varchar(50) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `celular` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `UF` varchar(2) NOT NULL,
  `CEP` varchar(20) NOT NULL,
  `complemento` varchar(50) NOT NULL,
  `site` varchar(100) NOT NULL,
  `email_cobranca` varchar(100) NOT NULL,
  `observacoes` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`id`, `razao_social`, `cnpj`, `data_abertura`, `regime`, `tipo`, `inscricao_estadual`, `inscricao_municipal`, `representante`, `telefone`, `celular`, `email`, `rua`, `numero`, `bairro`, `UF`, `CEP`, `complemento`, `site`, `email_cobranca`, `observacoes`) VALUES
(1, 'Supermercado São Roque', '11. 456. 743/0001-', '1992-11-22 00:00:00', 'SimplesNac', 'Eireli', '345674567', '34567845345', 'Maria Almeida', '(11) 4159-5894', '(11) 99505-5689', 'Adryan@gmail.com', 'Valêncio Soares Rodriguês', '1.011', 'Soares', 'Sã', '06730-000', 'Próximo a guarda municipal', 'www.mercadosaoroque.com.br', 'mercadosaoroque@gmail.com', 'Primeiro cadastro'),
(2, 'Supermercado Vargem Grande', '11. 876. 789/0001-', '1989-07-21 00:00:00', 'LucroReal', 'EPP', '123456789', '425968452365', 'Rodrigo Martins', '(11) 4159-5784', '(11) 99505-4589', '', 'Rua quatro', '1015', 'Caucaia', 'Sã', '06730-5894', 'Próximo a Pizzaria Caucaia', 'www.mercadovargemgrande.com.br', 'mercadovargemgrande@gmail.com', 'Segundo registro - Test'),
(3, 'Atacadão Jardins ', '11. 858. 458/0001-', '2019-03-22 00:00:00', 'LucroPres', 'EPP', '455545564645', '444464646464646', 'Diego Barteliz', '(11) 4159-5484', '(11) 99505-7548', 'leci@gmail.com', 'Estrada da Lagoa ', '1.011', 'Lagoa', 'Sã', '06730-000', 'Próximo a Escola', 'www.atacadao.com.br', 'atacadaojardins@hotmail.com', ''),
(4, 'Supermercado Dia', '452632145587544646', '2019-09-18 19:48:12', 'SimplesNac', 'Microempre', '454545445454354', '4545646464554545', 'Alexandre Campos', '(11) 4159-5478', '(11) 914545-54545', 'alexandre@hotmail.com', 'Rua aclamação', '1056', 'Bela', 'Ac', '06523-0000', 'Rua comercial Principal', 'supermercadodia@gmail.com', 'supermercadodia@gmail.com', 'Rede Dia'),
(6, 'Supermercado São João', '11. 456. 743/0001-', '1992-11-22 00:00:00', 'SimplesNac', 'Eireli', '345674567', '34567845345', 'Maria Almeida', '(11) 4159-5894', '(11) 99505-5689', 'Adryan@gmail.com', 'Valêncio Soares Rodriguês', '1.011', 'Soares', 'Sã', '06730-000', 'Próximo a guarda municipal', 'www.mercadosaoroque.com.br', 'mercadosaoroque@gmail.com', 'Primeiro cadastro'),
(7, 'Supermercado Barbosa', '11. 876. 789/0001-', '1995-04-12 00:00:00', 'LucroPres', 'Eireli', '455545564645', '34567845345', 'Adryan Novaes', '(11) 995056742', '(11) 99505-5689', 'hercules@gmail.com', 'Benedito', '1.247', 'Caucaia', 'Ro', '08540-777', 'Próximo a guarda municipal', 'www.mercagfggfge.com.br', 'mercadgfggque@gmail.com', 'gfdgfdgfgf'),
(8, 'Supermercado Extra', '11. 876. 789/0001-', '1995-04-12 00:00:00', 'LucroPres', 'Eireli', '455545564645', '34567845345', 'Adryan Novaes', '(11) 995056742', '(11) 99505-5689', 'hercules@gmail.com', 'Benedito', '1.247', 'Caucaia', 'Ro', '08540-777', 'Próximo a guarda municipal', 'www.mercagfggfge.com.br', 'mercadgfggque@gmail.com', 'gfdgfdgfgf'),
(9, 'Supermercado Carrefuor', '11. 456. 743/0001-', '1992-11-22 00:00:00', 'SimplesNac', 'Eireli', '345674567', '34567845345', 'Maria Almeida', '(11) 4159-5894', '(11) 99505-5689', 'Adryan@gmail.com', 'Valêncio Soares Rodriguês', '1.011', 'Soares', 'Sã', '06730-000', 'Próximo a guarda municipal', 'www.mercadosaoroque.com.br', 'mercadosaoroque@gmail.com', 'Primeiro cadastro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens_entrada`
--

CREATE TABLE `itens_entrada` (
  `id` int(11) NOT NULL,
  `id_entrada` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `quantidade` decimal(6,2) NOT NULL,
  `preco` decimal(6,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `itens_entrada`
--

INSERT INTO `itens_entrada` (`id`, `id_entrada`, `id_produto`, `quantidade`, `preco`) VALUES
(1, 11, 1, '1.00', '8'),
(2, 11, 2, '1.00', '27'),
(3, 13, 1, '1.00', '8'),
(4, 14, 1, '1.00', '8'),
(5, 14, 5, '1.00', '3'),
(6, 16, 4, '1.00', '4'),
(7, 16, 4, '1.00', '4'),
(8, 16, 5, '1.00', '3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens_venda`
--

CREATE TABLE `itens_venda` (
  `id` int(11) NOT NULL,
  `id_venda` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `qnt` int(11) NOT NULL,
  `preco` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `itens_venda`
--

INSERT INTO `itens_venda` (`id`, `id_venda`, `id_produto`, `qnt`, `preco`) VALUES
(4, 23, 5, 3, '1.00'),
(5, 23, 14, 7, '1.00'),
(6, 23, 1, 8, '1.00'),
(7, 25, 7, 9, '1.00'),
(8, 25, 24, 23, '1.00'),
(9, 25, 1, 8, '1.00'),
(10, 25, 7, 9, '1.00'),
(11, 25, 7, 9, '1.00'),
(12, 26, 1, 8, '0.00'),
(13, 26, 5, 3, '0.00'),
(14, 26, 1, 8, '1.00'),
(15, 26, 5, 3, '1.00'),
(16, 27, 1, 8, '1.00'),
(17, 27, 2, 27, '1.00'),
(18, 27, 9, 8, '1.00'),
(19, 27, 18, 9, '1.00'),
(20, 28, 1, 8, '1.00'),
(21, 29, 1, 8, '1.00'),
(22, 29, 3, 25, '1.00'),
(23, 29, 7, 9, '1.00'),
(24, 29, 7, 9, '1.00'),
(25, 29, 4, 4, '1.00'),
(26, 29, 6, 15, '1.00'),
(27, 30, 9, 8, '1.00'),
(28, 30, 1, 8, '1.00'),
(29, 30, 1, 8, '1.00'),
(30, 30, 1, 8, '1.00'),
(31, 30, 5, 3, '1.00'),
(32, 31, 1, 8, '1.00'),
(33, 31, 2, 27, '1.00'),
(34, 31, 7, 9, '1.00'),
(35, 31, 10, 3, '1.00'),
(36, 31, 5, 3, '1.00'),
(37, 33, 2, 1, '27.00'),
(38, 33, 5, 1, '2.50'),
(39, 33, 2, 1, '27.00'),
(40, 34, 9, 1, '7.99'),
(41, 34, 6, 1, '15.00'),
(42, 34, 24, 1, '23.00'),
(43, 36, 2, 1, '27.00'),
(44, 36, 3, 1, '25.00'),
(45, 36, 10, 1, '3.00'),
(46, 36, 2, 1, '27.00'),
(47, 36, 13, 1, '6.00'),
(48, 38, 1, 1, '7.90'),
(49, 38, 4, 1, '4.00'),
(50, 38, 7, 1, '8.90'),
(51, 38, 18, 1, '9.00'),
(52, 38, 24, 1, '23.00'),
(53, 38, 24, 1, '23.00'),
(54, 40, 1, 1, '7.90'),
(55, 40, 3, 1, '25.00'),
(56, 41, 1, 1, '7.90'),
(57, 41, 2, 1, '27.00'),
(58, 9, 1, 1, '7.90'),
(59, 47, 4, 1, '4.00'),
(60, 48, 14, 1, '7.00'),
(61, 48, 1, 1, '7.90'),
(62, 48, 10, 1, '3.00'),
(63, 49, 1, 1, '7.90'),
(64, 49, 3, 1, '25.00'),
(65, 49, 7, 1, '8.90'),
(66, 49, 24, 1, '23.00'),
(67, 50, 1, 1, '7.90'),
(68, 52, 6, 1, '15.00'),
(69, 52, 24, 1, '23.00'),
(70, 52, 4, 1, '4.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `descricao_produto` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `quantidade` varchar(20) NOT NULL,
  `valor` varchar(50) NOT NULL,
  `lote` varchar(10) NOT NULL,
  `data_validade` datetime NOT NULL,
  `codigo_barras` varchar(50) NOT NULL,
  `fornecedor` varchar(50) NOT NULL,
  `imagem` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `descricao_produto`, `marca`, `quantidade`, `valor`, `lote`, `data_validade`, `codigo_barras`, `fornecedor`, `imagem`) VALUES
(1, 'Feijão', 'Camil', '10', '7.90', '1', '2024-11-22 00:00:00', '2345678967545645434343434433', '2', 'feijao.camil.png'),
(2, 'Arroz integral', 'Prato Fino', '10', '27', '1', '2024-11-22 00:00:00', '2345678967545676334464646454575', '2', 'arrozintegral.pratofino.png'),
(3, 'Queijo Minas', 'Firmesa', '4', '25', '2', '2021-11-23 00:00:00', '4552556476546456566544445554455555', '3', 'queijominas.frimesa.png'),
(4, 'Macarrão', 'Dona Benta', '3', '4', '1', '2022-05-04 00:00:00', '42533654155669852563666436346634634', '3', 'macarrao.donabenta.png'),
(5, 'Sal', 'Cisne', '4', '2.50', '1', '2025-09-09 00:00:00', '454454645646446464646464646464', '3', 'sal.cisne.png'),
(6, 'Pão de Queijo com Catupiry', 'Catupiry', '5', '15', '3', '2021-06-16 00:00:00', '6664647979655665655665565565565656556', '2', 'paoqueijo.catupiry.png'),
(7, 'Chocolate Amargo', 'Garoto', '5', '8.90', '1', '2022-06-16 00:00:00', '666464797965566525545454545454', '2', 'chocolateamargo.garoto.png'),
(8, 'Margarina', 'Doriana', '2', '6', '1', '2024-04-21 00:00:00', '555576767654425656567567575675757', '1', 'margarina.doriana.jpg'),
(9, 'Refrigerante', 'Coca-Cola', '9', '7.99', '1', '2021-08-19 00:00:00', '6664647979655645846952315454445444', '2', 'refrigerante.cocacolalitro.png'),
(10, 'Suco de laranja', 'MID', '18', '3', '3', '2021-05-23 00:00:00', '48646546464444456456545654564', '2', 'sucolaranja.mid.jpg'),
(11, 'Arroz', 'Camil', '10', '25', '2', '2021-06-23 00:00:00', '5446464644465655656556434535346347347', '2', 'arroz.camil.jpg'),
(12, 'Molho de Tomate', 'Fugini', '20', '5', '2', '2021-11-23 00:00:00', '564646464564646611646464646453454354', '1', 'molhotomate.fugini.jpg'),
(13, 'Farinha de Trigo', 'Dona Benta', '18', '6', '3', '2021-11-22 00:00:00', '5445645646464566646464564565646565643333', '2', 'farinhatrigo.donabenta.jpg'),
(14, 'Presunto', 'Perdigão', '18', '7', '1', '0007-04-03 00:00:00', '46547564757567572533378368383474674756', '4', 'presunto.perdigao.png'),
(18, 'Leite ninho', 'Nestlé', '10', '9', '1', '0000-00-00 00:00:00', '6664647979655645846955765677647', '3', 'leiteninho.nestle.png'),
(24, 'Salame ', 'Perdigão', '10', '23', '1', '2021-11-23 00:00:00', '453636565656590659045645656456', '3', 'salame.perdigao.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `perfil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `perfil`) VALUES
(2, 'Lucas Moares Rocha', 'lucasmoraes@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Usuario'),
(3, 'Joaquim Adryan da Silva', 'joaquimadryan@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Usuario'),
(4, 'Maria Nunes de Almeida', 'marianunes@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Usuario'),
(5, 'Maria de Fátima da Silva', 'mariafatima@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Usuario'),
(7, 'Francisco Estevam Nunes da Silva', 'francisco@gmail.com', '30ed55b89373c25492993b3d004440ff', 'Usuario'),
(23, 'Henrique Pietro Costa', 'henrique@gmail.com', 'b0e700ab7e1c9a72b2594f9e305ae067', 'Administrador'),
(27, 'Moniely Bertoldo', 'monybertoldo@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Administrador'),
(36, 'Jeferson Silva Melo', 'jeferson@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Usuario'),
(44, 'Joana maria', 'joana@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Administrador'),
(46, 'Jesus Moraes', 'jesus@gmail.com', 'ec6a6536ca304edf844d1d248a4f08dc', 'Administrador');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `obs` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`id`, `id_cliente`, `data`, `obs`) VALUES
(1, 23, '2021-05-11 00:17:50', ''),
(2, 20, '2021-05-11 00:29:59', ''),
(3, 23, '2021-05-11 00:36:12', ''),
(4, 10, '2021-05-11 00:48:42', ''),
(5, 23, '2021-05-11 00:55:11', ''),
(6, 23, '2021-05-11 01:01:41', ''),
(7, 25, '2021-05-11 01:01:50', ''),
(8, 10, '2021-05-11 01:20:57', ''),
(9, 20, '2021-05-11 01:29:08', ''),
(10, 11, '2021-05-11 01:33:05', ''),
(11, 19, '2021-05-11 01:33:21', ''),
(12, 26, '2021-05-11 02:06:28', ''),
(13, 23, '2021-05-11 02:21:33', ''),
(14, 23, '2021-05-11 03:10:43', ''),
(15, 23, '2021-05-11 03:31:46', ''),
(16, 11, '2021-05-11 03:42:15', ''),
(17, 10, '2021-05-11 14:06:18', ''),
(18, 10, '2021-05-11 14:06:43', ''),
(19, 23, '2021-05-11 14:22:36', ''),
(20, 7, '2021-05-11 14:44:48', ''),
(21, 9, '2021-05-11 14:50:03', 'Observação'),
(22, 7, '2021-05-11 14:50:58', 'Observação'),
(23, 11, '2021-05-11 15:36:07', ''),
(24, 23, '2021-05-11 15:37:58', ''),
(25, 11, '2021-05-11 16:01:06', ''),
(26, 18, '2021-05-11 16:04:41', ''),
(27, 18, '2021-05-11 16:12:25', ''),
(28, 11, '2021-05-11 16:17:29', ''),
(29, 20, '2021-05-11 16:20:14', ''),
(30, 23, '2021-05-11 16:38:30', ''),
(31, 10, '2021-05-11 16:44:20', ''),
(32, 23, '2021-05-11 23:58:27', ''),
(33, 12, '2021-05-12 15:37:53', 'Test'),
(34, 25, '2021-05-12 15:39:14', 'Test'),
(35, 23, '2021-05-12 15:45:38', ''),
(36, 18, '2021-05-12 15:49:31', 'Test '),
(37, 23, '2021-05-12 16:49:53', ''),
(38, 9, '2021-05-15 23:04:59', ''),
(39, 23, '2021-05-15 23:29:16', ''),
(40, 20, '2021-05-17 20:28:38', ''),
(41, 23, '2021-05-17 21:17:46', ''),
(42, 23, '2021-05-24 22:46:11', ''),
(43, 23, '2021-05-24 23:22:15', ''),
(44, 23, '2021-05-25 00:01:25', ''),
(45, 23, '2021-05-29 00:59:43', ''),
(46, 23, '2021-05-29 00:59:43', ''),
(47, 23, '2021-05-29 01:02:21', ''),
(48, 36, '2021-05-29 15:34:42', 'Venda para domicilio '),
(49, 20, '2021-05-30 02:18:51', 'Venda'),
(50, 23, '2021-05-30 02:22:47', 'wsx'),
(51, 36, '2021-06-08 23:24:42', ''),
(52, 19, '2021-06-28 16:51:28', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `e-mail` (`email`);

--
-- Índices para tabela `entrada`
--
ALTER TABLE `entrada`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `itens_entrada`
--
ALTER TABLE `itens_entrada`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `itens_venda`
--
ALTER TABLE `itens_venda`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de tabela `entrada`
--
ALTER TABLE `entrada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `itens_entrada`
--
ALTER TABLE `itens_entrada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `itens_venda`
--
ALTER TABLE `itens_venda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
