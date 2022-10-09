-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 29, 2022 at 10:47 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hardsoft`
--

-- --------------------------------------------------------

--
-- Table structure for table `abaertura`
--

CREATE TABLE `abaertura` (
  `id_abertura` varchar(200) NOT NULL,
  `data` date NOT NULL,
  `nome` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `preco` double NOT NULL,
  `caixa` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `Titem` int(11) NOT NULL,
  `Responsavel` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abaertura`
--

INSERT INTO `abaertura` (`id_abertura`, `data`, `nome`, `categoria`, `preco`, `caixa`, `item`, `Titem`, `Responsavel`) VALUES
('15029', '2022-09-13', 'Booster', 'BEBIDA', 350, 3, 3, 6, 'Automatico'),
('15029', '2022-09-13', 'Eka G', 'BEBIDA', 100, 2, 2, 4, 'Automatico'),
('52835', '2022-09-14', 'Cuca', 'bebida', 200, 9, 24, 4418, 'Automatico'),
('15047', '2022-09-14', 'Cuca', 'bebida', 200, 9, 24, 4418, 'Automatico'),
('36134', '2022-09-14', 'Cuca', 'bebida', 200, 9, 24, 4394, 'Automatico'),
('19024', '2022-09-15', 'Nocal', 'bebida', 200, 2, 24, 46, 'Automatico'),
('19024', '2022-09-15', 'Cuca', 'bebida', 200, 9, 24, 3386, 'Automatico'),
('4200', '2022-09-15', 'Nocal', 'bebida', 200, 2, 24, 34, 'Automatico'),
('4200', '2022-09-15', 'Cuca', 'bebida', 200, 9, 24, 3384, 'Automatico'),
('22903', '2022-09-15', 'Nocal', 'bebida', 200, 2, 24, 34, 'Automatico'),
('22903', '2022-09-15', 'Cuca', 'bebida', 200, 9, 24, 3384, 'Automatico'),
('38027', '2022-09-15', 'Nocal', 'bebida', 200, 2, 24, 32, 'Automatico'),
('38027', '2022-09-15', 'Cuca', 'bebida', 200, 9, 24, 3384, 'Automatico'),
('58355', '2022-09-15', 'Nocal', 'bebida', 200, 2, 24, 764, 'Automatico'),
('58355', '2022-09-15', 'Cuca', 'bebida', 200, 9, 24, 3501, 'Automatico'),
('11190', '2022-09-15', 'Nocal', 'bebida', 200, 2, 24, 2036, 'Automatico'),
('11190', '2022-09-15', 'Cuca', 'bebida', 200, 9, 24, 3525, 'Automatico'),
('22693', '2022-09-15', 'Nocal', 'bebida', 200, 2, 24, 5972, 'Automatico'),
('22693', '2022-09-15', 'Cuca', 'bebida', 200, 9, 24, 3525, 'Automatico'),
('50794', '2022-09-15', 'Nocal', 'bebida', 200, 2, 24, 6524, 'Automatico'),
('50794', '2022-09-15', 'Cuca', 'bebida', 200, 9, 24, 4197, 'Automatico'),
('28234', '2022-09-15', 'Nocal', 'bebida', 200, 2, 24, 6570, 'Automatico'),
('28234', '2022-09-15', 'Cuca', 'bebida', 200, 9, 24, 4192, 'Automatico'),
('39581', '2022-09-15', 'Nocal', 'bebida', 200, 2, 24, 6568, 'Automatico'),
('39581', '2022-09-15', 'Cuca', 'bebida', 200, 9, 24, 4190, 'Automatico'),
('69418', '2022-09-15', 'Nocal', 'bebida', 200, 2, 24, 6560, 'Automatico'),
('69418', '2022-09-15', 'Cuca', 'bebida', 200, 9, 24, 4162, 'Automatico'),
('1575', '2022-09-15', 'Nocal', 'bebida', 200, 2, 24, 6560, 'Automatico'),
('1575', '2022-09-15', 'Cuca', 'bebida', 200, 9, 24, 4162, 'Automatico'),
('23411', '2022-09-15', 'Nocal', 'bebida', 200, 2, 24, 6560, 'Automatico'),
('23411', '2022-09-15', 'Cuca', 'bebida', 200, 9, 24, 4162, 'Automatico'),
('67111', '2022-09-16', 'Nocal', 'bebida', 200, 2, 24, 6560, 'Automatico'),
('67111', '2022-09-16', 'Cuca', 'bebida', 200, 9, 24, 4128, 'Automatico'),
('38421', '2022-09-16', 'Nocal', 'bebida', 200, 2, 24, 6560, 'Automatico'),
('38421', '2022-09-16', 'Cuca', 'bebida', 200, 9, 24, 4071, 'Automatico'),
('20975', '2022-09-17', 'Nocal', 'bebida', 200, 2, 24, 11, 'Automatico'),
('20975', '2022-09-17', 'Cuca', 'bebida', 200, 2, 24, 48, 'Automatico'),
('68344', '2022-09-17', 'Nocal', 'bebida', 200, 2, 24, 59, 'Automatico'),
('68344', '2022-09-17', 'Cuca', 'bebida', 200, 2, 24, 48, 'Automatico'),
('68344', '2022-09-17', 'Teste', 'teste', 20, 2, 14, 28, 'Automatico'),
('33493', '2022-09-17', 'Nocal', 'bebida', 200, 2, 24, 57, 'Automatico'),
('33493', '2022-09-17', 'Cuca', 'bebida', 200, 2, 24, 48, 'Automatico'),
('33493', '2022-09-17', 'Teste', 'teste', 20, 2, 14, 28, 'Automatico'),
('48081', '2022-09-17', 'Nocal', 'bebida', 200, 2, 24, 51, 'Automatico'),
('48081', '2022-09-17', 'Cuca', 'bebida', 200, 2, 24, 40, 'Automatico'),
('48081', '2022-09-17', 'Teste', 'teste', 20, 2, 14, 28, 'Automatico'),
('9592', '2022-09-17', 'Nocal', 'bebida', 200, 2, 24, 47, 'Automatico'),
('9592', '2022-09-17', 'Cuca', 'bebida', 200, 2, 24, 30, 'Automatico'),
('9592', '2022-09-17', 'Teste', 'teste', 20, 2, 14, 28, 'Automatico'),
('35248', '2022-09-17', 'Nocal', 'bebida', 200, 2, 24, 44, 'Automatico'),
('35248', '2022-09-17', 'Cuca', 'bebida', 200, 2, 24, 24, 'Automatico'),
('35248', '2022-09-17', 'Teste', 'teste', 20, 2, 14, 28, 'Automatico'),
('71841', '2022-09-17', 'Nocal', 'bebida', 200, 2, 24, 44, 'Automatico'),
('71841', '2022-09-17', 'Cuca', 'bebida', 200, 2, 24, 24, 'Automatico'),
('71841', '2022-09-17', 'Teste', 'teste', 20, 2, 14, 28, 'Automatico'),
('691722', '2022-01-27', 'Lápis', 'MATERIAL', 0, 12, 12, 144, 'Automatico'),
('691722', '2022-01-27', 'Manteiga perdix', 'CREME', 0, 1, 12, 12, 'Automatico'),
('691722', '2022-01-27', 'Classic mulher margarida', 'CREME', 0, 1, 40, 40, 'Automatico'),
('691722', '2022-01-27', 'Carne sem osso', 'CARNE', 2500, 1, 20, 20, 'Automatico'),
('691722', '2022-01-27', 'Carne com osso', 'CARNE', 2500, 1, 25, 25, 'Automatico'),
('691722', '2022-01-27', 'Papel Hig Linda', 'Papel', 0, 1, 24, 24, 'Automatico'),
('691722', '2022-01-27', 'Peito Alto', 'CARNE', 3000, 1, 6, 6, 'Automatico'),
('691722', '2022-01-27', 'Carne sem osso 1/2', 'CARNE', 1250, 1, 10, 10, 'Automatico'),
('691722', '2022-01-27', 'Carne com osso 1/2', 'CARNE', 1250, 1, 13, 13, 'Automatico'),
('691722', '2022-01-27', 'Smart collection rosa1', 'PERFUME', 0, 3, 1, 3, 'Automatico'),
('691722', '2022-01-27', 'Smart collection Petite', 'PERFUME', 0, 3, 1, 3, 'Automatico'),
('691722', '2022-01-27', 'Florina manteiga de cacal', 'CREME', 0, 1, 6, 6, 'Automatico'),
('691722', '2022-01-27', 'Escova pariz 51', 'ESCOVA', 0, 1, 12, 12, 'Automatico'),
('691722', '2022-01-27', 'Bonita hair care abacate', 'CREME', 0, 1, 6, 6, 'Automatico'),
('691722', '2022-01-27', 'Mú Nivea Dreep', 'DESODORIZANTE', 0, 1, 6, 6, 'Automatico'),
('691722', '2022-01-27', 'Mú Nivea  black & white', 'DESODORIZANTE', 0, 1, 6, 6, 'Automatico'),
('691722', '2022-01-27', 'Mú Nivea Cool Kick', 'DESODORIZANTE', 0, 1, 6, 6, 'Automatico'),
('691722', '2022-01-27', 'Son set', 'DESODORIZANTE', 0, 6, 1, 6, 'Automatico'),
('691722', '2022-01-27', 'Perdix Margarine', 'CREME', 0, 1, 24, 24, 'Automatico'),
('691722', '2022-01-27', 'Guardanapo Linda', 'GUARDANAPO', 0, 1, 24, 24, 'Automatico'),
('691722', '2022-01-27', 'Classica Vela', 'VELA', 0, 1, 2000, 2000, 'Automatico'),
('691722', '2022-01-27', 'Bonita óleo Corporal 50ml', 'DESODORIZANTE', 0, 1, 12, 12, 'Automatico'),
('691722', '2022-01-27', 'Bonita óleo Corporal 100ml', 'DESODORIZANTE', 0, 1, 12, 12, 'Automatico'),
('691722', '2022-01-27', 'Lápis de Cor', 'MATERIAL', 0, 1, 24, 24, 'Automatico'),
('691722', '2022-01-27', 'Bom dia milk', 'LEITE', 0, 1, 150, 150, 'Automatico'),
('691722', '2022-01-27', 'Smart collection rosa2', 'PERFUME', 0, 3, 1, 3, 'Automatico'),
('691722', '2022-01-27', 'Leite Mimosa', 'LEITE', 1000, 2, 6, 12, 'Automatico'),
('691722', '2022-01-27', 'Savory Orange Drinck pwd', 'SUMO', 100, 2, 12, 24, 'Automatico'),
('691722', '2022-01-27', 'Berrys Pastilhas olive', 'PASTILHAS', 10, 1, 150, 150, 'Automatico'),
('691722', '2022-01-27', 'Likon bolacha ÁGUA E SAL', 'BOLACHA', 0, 1, 24, 24, 'Automatico'),
('691722', '2022-01-27', 'Berryssambapito', 'SAMBAPITO', 50, 1, 48, 48, 'Automatico'),
('691722', '2022-01-27', 'Alvien Letasgo coco laranja', 'BOLACHA', 0, 1, 24, 24, 'Automatico'),
('691722', '2022-01-27', 'Calcident tri activo', 'PASTA DE DENTE', 0, 2, 6, 12, 'Automatico'),
('691722', '2022-01-27', 'sabao em liquido Sola lava limao', 'DETERGENTE', 1, 1, 3, 3, 'Automatico'),
('691722', '2022-01-27', 'Lykon bolacha Maria', 'BOLACHA', 0, 1, 20, 20, 'Automatico'),
('691722', '2022-01-27', 'Lykon bolacha Nutro Creme de coco', 'BOLACHA', 0, 1, 24, 24, 'Automatico'),
('691722', '2022-01-27', 'Shampoo Amalfi 3in', 'SHAMPOO', 0, 1, 3, 3, 'Automatico'),
('691722', '2022-01-27', 'Shampoo Amalfi Keratin', 'SHAMPOO', 0, 1, 3, 3, 'Automatico'),
('691722', '2022-01-27', 'Frooti Maçã', 'SUMO', 0, 1, 6, 6, 'Automatico'),
('691722', '2022-01-27', 'Frooti Laranga', 'SUMO', 0, 1, 6, 6, 'Automatico'),
('691722', '2022-01-27', 'Embare Milk', 'SUGO', 0, 1, 129, 129, 'Automatico'),
('691722', '2022-01-27', 'Rox Shampoo', 'GEL', 0, 1, 3, 3, 'Automatico'),
('691722', '2022-01-27', 'Frooti Manga', 'SUMO', 0, 1, 6, 6, 'Automatico'),
('691722', '2022-01-27', 'Bom Apetite Massa tomate', 'Latarias', 0, 1, 50, 50, 'Automatico'),
('691722', '2022-01-27', 'Lykon Petiscos Salgados', 'BOLACHA', 0, 2, 12, 24, 'Automatico'),
('691722', '2022-01-27', 'Lykon Candy Mix Fruit', 'REBUÇADO', 0, 4, 50, 200, 'Automatico'),
('691722', '2022-01-27', 'Capa de pocessso', 'PAPEL', 0, 2, 20, 40, 'Automatico'),
('691722', '2022-01-27', 'Coca-Cola Bidon', 'REFRIGERANTE', 0, 3, 12, 36, 'Automatico'),
('691722', '2022-01-27', 'Sprite Bidon', 'REFRIGERANTE', 0, 2, 12, 24, 'Automatico'),
('691722', '2022-01-27', 'Top Cola Bidon', 'REFRIGERANTE', 0, 3, 12, 36, 'Automatico'),
('691722', '2022-01-27', 'Zip Coco-Ananas Bidon', 'REFRIGERANTE', 0, 2, 12, 24, 'Automatico'),
('691722', '2022-01-27', 'Blue Geginbre-Limao Bidon', 'REFRIGERANTE', 1930, 2, 12, 24, 'Automatico'),
('691722', '2022-01-27', 'Sumo Tutti', 'SUMO', 500, 2, 24, 48, 'Automatico'),
('691722', '2022-01-27', 'Sumol Ananas Lata', 'SUMO', 0, 1, 24, 24, 'Automatico'),
('691722', '2022-01-27', 'Compal Lata', 'SUMO', 0, 1, 24, 24, 'Automatico'),
('691722', '2022-01-27', 'Coca-Cola Lata', 'REFRIGERANTE', 0, 1, 24, 24, 'Automatico'),
('691722', '2022-01-27', 'Eka Lata', 'BEBIDA', 0, 1, 24, 24, 'Automatico'),
('691722', '2022-01-27', 'Lango Incenso Anti-mosquito', 'Incenso', 0, 1, 600, 600, 'Automatico'),
('691722', '2022-01-27', 'Gel de banho bonita oceano', 'GRL', 0, 1, 6, 6, 'Automatico'),
('691722', '2022-01-27', 'Booster Cider Lata', 'BEBIDA', 0, 1, 24, 24, 'Automatico'),
('691722', '2022-01-27', 'Nocal Lata', 'BEBIDA', 0, 1, 24, 24, 'Automatico'),
('691722', '2022-01-27', 'Cuca Lata', 'BEBIDA', 0, 1, 24, 24, 'Automatico'),
('691722', '2022-01-27', 'Pespi Cola Lata', 'BEBIDA', 0, 1, 24, 24, 'Automatico'),
('691722', '2022-01-27', 'Nice Bolacha', 'Bolacha', 0, 1, 300, 300, 'Automatico'),
('691722', '2022-01-27', 'Bom Apetite Oleo', 'Oleo', 0, 1, 12, 12, 'Automatico'),
('691722', '2022-01-27', 'Massa Bom Apetite', 'MASSA', 250, 1, 20, 20, 'Automatico'),
('691722', '2022-01-27', 'Fula Oleo', 'Oleo', 0, 1, 12, 12, 'Automatico'),
('691722', '2022-01-27', 'Massa Espaguete Alimo', 'MASSA', 0, 1, 20, 20, 'Automatico'),
('691722', '2022-01-27', 'Bonita skin care coco', 'CREME', 0, 1, 6, 6, 'Automatico'),
('691722', '2022-01-27', 'Embare assort candy', 'SUGO', 0, 1, 99, 99, 'Automatico'),
('691722', '2022-01-27', 'Azeitona - Hutesa', 'Latarias', 0, 1, 12, 12, 'Automatico'),
('691722', '2022-01-27', 'sabao em liquido Sola lava Laranja', 'DETERGENTE', 0, 1, 4, 4, 'Automatico'),
('691722', '2022-01-27', 'Nescafe', 'CAFE', 0, 2, 150, 300, 'Automatico'),
('691722', '2022-01-27', 'Talco Rox', 'GEL', 0, 1, 6, 6, 'Automatico'),
('691722', '2022-01-27', 'Calcident', 'Pasta de dentes', 0, 2, 6, 12, 'Automatico'),
('691722', '2022-01-27', 'Folha A4', 'Papel', 0, 2, 500, 1000, 'Automatico'),
('691722', '2022-01-27', 'Leite corporal coco', 'CREME', 0, 1, 5, 5, 'Automatico'),
('691722', '2022-01-27', 'Rox Gilete', 'Gilete', 0, 1, 100, 100, 'Automatico'),
('691722', '2022-01-27', '7 Up', 'REFRIGERANTE', 0, 1, 21, 21, 'Automatico'),
('691722', '2022-01-27', 'Rola Cola Rebuçado', 'REBUÇADO', 0, 1, 30, 30, 'Automatico'),
('691722', '2022-01-27', 'Special TP Charcoal', 'DETERGENTE', 350, 2, 12, 24, 'Automatico'),
('691722', '2022-01-27', 'Parle Mintos ', 'REBUÇADO', 0, 1, 30, 30, 'Automatico'),
('691722', '2022-01-27', 'Parle Poppins', 'REBUÇADO', 0, 1, 30, 30, 'Automatico'),
('691722', '2022-01-27', 'Maionese Myomi', 'Maionese', 0, 1, 12, 12, 'Automatico'),
('691722', '2022-01-27', 'Detergente Po madar', 'DETERGENTE', 0, 1, 150, 150, 'Automatico'),
('691722', '2022-01-27', 'Lampada Polo', 'Lampadas', 0, 2, 10, 20, 'Automatico'),
('691722', '2022-01-27', 'Cerelac', 'Papas', 0, 3, 1, 3, 'Automatico'),
('691722', '2022-01-27', 'The Best Wiskey', 'Bebida', 0, 1, 20, 20, 'Automatico'),
('691722', '2022-01-27', 'Tangawisi', 'BEBIDA', 0, 1, 20, 20, 'Automatico'),
('691722', '2022-01-27', 'Dragao Palito', 'Incenso', 0, 2, 10, 20, 'Automatico'),
('691722', '2022-01-27', 'Fermento Bom Apetite', 'Fermento', 0, 1, 23, 23, 'Automatico'),
('691722', '2022-01-27', 'Savory Cocktail Drink PWD', 'BEBIDA', 130, 2, 12, 24, 'Automatico'),
('691722', '2022-01-27', 'Santox', 'Insecticida', 0, 1, 12, 12, 'Automatico'),
('691722', '2022-01-27', 'Bentol Sanitario limao', 'GEL', 0, 1, 12, 12, 'Automatico'),
('691722', '2022-01-27', 'Kill Tox', 'Insecticida', 0, 1, 12, 12, 'Automatico'),
('691722', '2022-01-27', 'Bonita skin care Rosa', 'CREME', 0, 1, 6, 6, 'Automatico'),
('691722', '2022-01-27', 'Peccin Maçã verde', 'REBUSADO', 0, 1, 120, 120, 'Automatico'),
('691722', '2022-01-27', 'H&H desodorizante', 'DESODORIZANTE', 0, 1, 6, 6, 'Automatico'),
('691722', '2022-01-27', 'Special TP tri Active', 'DETERGENTE', 300, 3, 12, 36, 'Automatico'),
('691722', '2022-01-27', 'Nivea Aleo & hydration', 'CREME', 0, 1, 2, 2, 'Automatico'),
('691722', '2022-01-27', 'sabao em liquido Sola lava morango', 'DETERGENTE', 0, 1, 1, 1, 'Automatico'),
('691722', '2022-01-27', 'Bonita Bobosa', 'CREME', 0, 1, 6, 6, 'Automatico'),
('691722', '2022-01-27', 'penso Lykis Rosa', 'PENSO', 0, 1, 10, 10, 'Automatico'),
('691722', '2022-01-27', 'Nivea man cool kick', 'DESODORIZANTE', 0, 1, 6, 6, 'Automatico'),
('691722', '2022-01-27', 'Special dupla accao', 'ESCOVA DE DENTE', 0, 1, 12, 12, 'Automatico'),
('691722', '2022-01-27', 'Sairo Gel de banho coco', 'GEL', 0, 1, 3, 3, 'Automatico'),
('691722', '2022-01-27', 'Savory Pine Coco Drink', 'SUMO', 150, 2, 12, 24, 'Automatico'),
('691722', '2022-01-27', 'Vela sun rise', 'VELA', 0, 1, 54, 54, 'Automatico'),
('691722', '2022-01-27', 'Savory Pineapple Drink', 'SUMO', 150, 2, 12, 24, 'Automatico'),
('691722', '2022-01-27', 'Nivea express hydration', 'CREME', 0, 1, 3, 3, 'Automatico'),
('691722', '2022-01-27', 'Bonita gel de banho Maca verde', 'GEL', 0, 1, 1, 1, 'Automatico'),
('691722', '2022-01-27', 'penso Lykis roso', 'PENSO', 0, 1, 3, 3, 'Automatico'),
('691722', '2022-01-27', 'Savory Mangol Drink PWD', 'SUMO', 150, 2, 12, 24, 'Automatico');

-- --------------------------------------------------------

--
-- Table structure for table `arquivo`
--

CREATE TABLE `arquivo` (
  `id_arquivo` varchar(200) NOT NULL,
  `id_venda` varchar(200) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `categoria` varchar(200) NOT NULL,
  `preco` varchar(200) NOT NULL,
  `qtd` int(11) NOT NULL,
  `total` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `carrinho`
--

CREATE TABLE `carrinho` (
  `id` varchar(200) NOT NULL,
  `data` varchar(200) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `total` double NOT NULL,
  `pagamento` double NOT NULL,
  `troco` double NOT NULL,
  `TDP` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `compras`
--

CREATE TABLE `compras` (
  `id_relatorio` varchar(200) DEFAULT NULL,
  `Data` varchar(200) NOT NULL,
  `Produto` varchar(200) NOT NULL,
  `Preco` double NOT NULL,
  `Quantidade` varchar(200) NOT NULL,
  `Total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dados_da_abertura`
--

CREATE TABLE `dados_da_abertura` (
  `id` varchar(200) NOT NULL,
  `data` varchar(11) NOT NULL,
  `Responsavel` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dados_da_abertura`
--

INSERT INTO `dados_da_abertura` (`id`, `data`, `Responsavel`) VALUES
('691722', '2022/01/27', 'Automatico');

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

CREATE TABLE `produtos` (
  `Codigo` varchar(200) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `categoria` varchar(200) NOT NULL,
  `preco` varchar(200) NOT NULL,
  `caixas` varchar(200) NOT NULL,
  `item` int(11) NOT NULL,
  `itotal` varchar(200) NOT NULL,
  `stock` varchar(200) NOT NULL,
  `compra` double NOT NULL,
  `exp` varchar(200) NOT NULL,
  `alertI` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`Codigo`, `nome`, `categoria`, `preco`, `caixas`, `item`, `itotal`, `stock`, `compra`, `exp`, `alertI`) VALUES
('001', 'Carne sem osso', 'CARNE', '2500.00', '1', 20, '20', '50000', 50000, '0/0/0', 10),
('002', 'Carne com osso', 'CARNE', '2500.00', '1', 25, '25', '62500', 62500, '0/0/0', 10),
('0021', 'Papel Hig Linda', 'Papel', '0', '1', 24, '24', '0', 5700, '0/0/0', 12),
('003', 'Peito Alto', 'CARNE', '3000.00', '1', 6, '6', '18000', 18000, '0/0/0', 3),
('004', 'Carne sem osso 1/2', 'CARNE', '1250.00', '1', 10, '10', '12500', 12500, '0/0/0', 6),
('005', 'Carne com osso 1/2', 'CARNE', '1250.00', '1', 13, '13', '16250', 16250, '0/0/0', 7),
('05', 'Son set', 'DESODORIZANTE', '0', '6', 1, '6', '0', 880, '0/0/0', 4),
('050', 'Perdix Margarine', 'CREME', '0.00', '1', 24, '24', '0', 5900, '0/0/0', 12),
('052', 'Classica Vela', 'VELA', '0', '1', 2000, '2000', '0', 9200, '0/0/0', 100),
('10', 'Savory Orange Drinck pwd', 'SUMO', '100', '2', 12, '24', '2400', 660, '0/0/0', 6),
('11', 'Berrys Pastilhas olive', 'PASTILHAS', '10', '1', 150, '150', '1500', 1055, '0/0/0', 15),
('12', 'Berryssambapito', 'SAMBAPITO', '50.00', '1', 48, '48', '2400', 965, '0/0/0', 10),
('1212313323', 'Alvien Letasgo coco laranja', 'BOLACHA', '0.00', '1', 24, '24', '0', 1835, '0/0/0', 12),
('1221', 'sabao em liquido Sola lava limao', 'DETERGENTE', '1', '1', 3, '3', '3', 335, '1/1/1', 1),
('1234567', 'Embare Milk', 'SUGO', '0.00', '1', 129, '129', '0', 1375, '0/0/0', 60),
('1234567322', 'Rox Shampoo', 'GEL', '0', '1', 3, '3', '0', 365, '0/0/0', 1),
('13143', 'Lykon Petiscos Salgados', 'BOLACHA', '0', '2', 12, '24', '0', 1100, '0/0/0', 6),
('14', 'Lykon Candy Mix Fruit', 'REBUÇADO', '0', '4', 50, '200', '0', 260, '2024/05/30', 20),
('14567', 'Capa de pocessso', 'PAPEL', '0', '2', 20, '40', '0', 557, '0/0/0', 7),
('16', 'Sprite Bidon', 'REFRIGERANTE', '0', '2', 12, '24', '0', 2500, '0/0/0', 12),
('17', 'Top Cola Bidon', 'REFRIGERANTE', '0', '3', 12, '36', '0', 1100, '0/0/0', 12),
('18', 'Zip Coco-Ananas Bidon', 'REFRIGERANTE', '0', '2', 12, '24', '0', 1320, '0/0/0', 12),
('2', 'Sumo Tutti', 'SUMO', '500.00', '2', 24, '48', '24000', 1850, '0/0/0', 12),
('20', 'Sumol Ananas Lata', 'SUMO', '0', '1', 24, '24', '0', 5670, '0/0/0', 12),
('22', 'Coca-Cola Lata', 'REFRIGERANTE', '0', '1', 24, '24', '0', 5900, '0/0/0', 12),
('23455643', 'Lango Incenso Anti-mosquito', 'Incenso', '0', '1', 600, '600', '0', 7700, '0/0/0', 100),
('25', 'Nocal Lata', 'BEBIDA', '0.00', '1', 24, '24', '0', 5300, '0/0/0', 12),
('26', 'Cuca Lata', 'BEBIDA', '0', '1', 24, '24', '0', 5300, '0/0/0', 12),
('27', 'Pespi Cola Lata', 'BEBIDA', '0', '1', 24, '24', '0', 4700, '0/0/0', 12),
('3245676', 'Embare assort candy', 'SUGO', '0', '1', 99, '99', '0', 1375, '0/0/0', 20),
('33434', 'sabao em liquido Sola lava Laranja', 'DETERGENTE', '0.00', '1', 4, '4', '0', 335, '0/0/0', 1),
('36', 'Folha A4', 'Papel', '0', '2', 500, '1000', '0', 2805, '0/0/0', 250),
('37', 'Rox Gilete', 'Gilete', '0', '1', 100, '100', '0', 3300, '0/0/0', 20),
('39', 'Rola Cola Rebuçado', 'REBUÇADO', '0', '1', 30, '30', '0', 780, '0/0/0', 10),
('40', 'Parle Mintos ', 'REBUÇADO', '0', '1', 30, '30', '0', 684, '0/0/0', 10),
('4005900087973', 'Mú Nivea Cool Kick', 'DESODORIZANTE', '1200', '1', 6, '6', '7200', 5510, '0/0/0', 2),
('4005900088000', 'Nivea man cool kick', 'DESODORIZANTE', '1500', '1', 6, '6', '9000', 3535, '0/0/0', 2),
('4005900088246', 'Mú Nivea  black ', 'DESODORIZANTE', '1200', '1', 6, '6', '7200', 5510, '0/0/0', 2),
('4005900579614', 'Nivea express hydration', 'CREME', '1500', '1', 3, '3', '4500', 2035, '0/0/0', 1),
('4005900637796', 'Nivea Aleo ', 'CREME', '1500', '1', 2, '2', '3000', 1980, '0/0/0', 1),
('4005900700827', 'Mú Nivea Dreep', 'DESODORIZANTE', '1200', '1', 6, '6', '7200', 5510, '0/0/0', 2),
('41', 'Parle Poppins', 'REBUÇADO', '0', '1', 30, '30', '0', 684, '0/0/0', 10),
('45', 'Cerelac', 'Papas', '0', '3', 1, '3', '0', 1790, '0/0/0', 1),
('46', 'The Best Wiskey', 'Bebida', '0', '1', 20, '20', '0', 1145, '0/0/0', 5),
('47', 'Tangawisi', 'BEBIDA', '0', '1', 20, '20', '0', 835, '0/0/0', 5),
('4719867213626', 'Power Glue', 'COLA', '75', '1', 12, '12', '900', 0, '0/0/0', 4),
('48', 'Dragao Palito', 'Incenso', '0', '2', 10, '20', '0', 220, '0/0/0', 5),
('49', 'Fermento Bom Apetite', 'Fermento', '0', '1', 23, '23', '0', 1790, '0/0/0', 5),
('5', 'Savory Cocktail Drink PWD', 'BEBIDA', '130.00', '2', 12, '24', '3120', 770, '0/0/0', 6),
('5055810025267', 'Sun set', 'DESOTORIZANTE', '1200', '1', 6, '6', '7200', 0, '0/0/0', 2),
('5287001256079', 'Detergente em po ULTRA', 'DETERGNETE', '100', '1', 50, '50', '5000', 0, '0/0/0', 12),
('5287001256093', 'Detergente em po AMA', 'DETERGENTE', '100', '1', 50, '50', '5000', 0, '0/0/0', 12),
('54491472', 'Coca-Cola Bidon', 'REFRIGERANTE', '350', '3', 12, '36', '12600', 2270, '0/0/0', 12),
('55', 'Peccin Maçã verde', 'REBUSADO', '0', '1', 120, '120', '0', 825, '0/0/0', 30),
('5601001005633', 'Nestle Ceralac', 'PAPA', '1200', '1', 6, '6', '7200', 0, '0/0/0', 2),
('5601024335847', 'Fula Oleo', 'Oleo', '1200', '1', 12, '12', '14400', 13000, '0/0/0', 6),
('5601049131998', 'Leite Mimosa', 'LEITE', '950', '2', 6, '12', '11400', 4200, '0/0/0', 2),
('5601151975602', 'Compal Lata', 'SUMO', '400', '1', 24, '24', '9600', 6200, '0/0/0', 12),
('5601494002089', 'Salshichas Frankfurt', 'SALSICHA', '800', '1', 12, '12', '9600', 0, '0/0/0', 6),
('56074109', 'Blue Geginbre-Limao Bidon', 'REFRIGERANTE', '100', '2', 12, '24', '2400', 1930, '0/0/0', 12),
('6008155009125', 'Cowbell', 'LIETE', '0', '1', 50, '50', '0', 100, '0/0/0', 20),
('6008155013092', 'MixWell', 'LEITE', '50', '1', 120, '120', '6000', 0, '0/0/0', 50),
('6009639653056', 'Fosforo 1', 'FOSFOROS', '25', '1', 100, '100', '2500', 0, '0/0/0', 50),
('6009879710540', 'Guardanapo Linda', 'GUARDANAPO', '300', '1', 24, '24', '7200', 5300, '0/0/0', 12),
('6009880372799', 'Massa Espaguete Alimo', 'MASSA', '250', '1', 20, '20', '5000', 3600, '0/0/0', 6),
('6009881013387', 'Maionese Mebon', 'MAIONESE', '60', '1', 50, '50', '3000', 0, '0/0/0', 15),
('6064000004059', 'Eka Lata', 'BEBIDA', '350', '1', 24, '24', '8400', 5300, '0/0/0', 12),
('6111004010088', 'Sardinha Marocaines', 'SARDINHAS', '500', '1', 25, '25', '12500', 0, '0/0/0', 12),
('6181002002002', 'Nescafe', 'CAFE', '100', '2', 150, '300', '30000', 6480, '0/0/0', 25),
('6210290111445', 'Detergente Po madar', 'DETERGENTE', '30', '1', 150, '150', '4500', 3420, '0/0/0', 50),
('6291007901900', 'Lykon bolacha Nutro Creme de coco', 'BOLACHA', '100', '1', 24, '24', '2400', 2000, '0/0/0', 12),
('6297000234175', 'Vinagre Bella', 'VINAGRE', '200', '1', 12, '12', '2400', 0, '0/0/0', 6),
('6297000415024', 'Maionese Myomi', 'Maionese', '1000', '1', 12, '12', '12000', 7250, '0/0/0', 5),
('6297000691589', 'Smart collection Women', 'PERFUME', '2000', '3', 1, '3', '6000', 1025, '0/0/0', 1),
('6297000697413', 'Smart collection no 10', 'PERFUME', '2000', '3', 1, '3', '6000', 1025, '0/0/0', 1),
('6297000699067', 'Smart collection no 392', 'PERFUME', '2000', '3', 1, '3', '6000', 1025, '0/0/0', 1),
('634240121050', '7 Up', 'REFRIGERANTE', '350', '1', 21, '21', '7350', 4900, '0/0/0', 12),
('636', 'sabao em liquido Sola lava morango', 'DETERGENTE', '0', '1', 1, '1', '0', 450, '0/0/0', 1),
('65283', 'Bonita Bobosa', 'CREME', '0', '1', 6, '6', '0', 1960, '0/0/0', 2),
('6533419002098', 'Lixivia ULTRA', 'LIXIVIA', '450', '1', 13, '13', '5850', 0, '0/0/0', 4),
('6912431124573', 'Lampada Polo', 'Lampadas', '200', '2', 10, '20', '4000', 1013, '0/0/0', 5),
('6920354817847', 'Colgate', 'Pasta de dente', '350', '1', 12, '12', '4200', 0, '0/0/0', 3),
('7', 'Savory Pine Coco Drink', 'SUMO', '150.00', '2', 12, '24', '3600', 550, '0/0/0', 6),
('734', 'Vela sun rise', 'VELA', '0', '1', 54, '54', '0', 9000, '0/0/0', 12),
('745110875017', 'Macarrao Adria', 'MACARRAO', '450', '1', 9, '9', '4050', 0, '0/0/0', 2),
('745125685120', 'Gel de banho bonita oceano', 'GRL', '950', '1', 6, '6', '5700', 2615, '0/0/0', 3),
('745760295500', 'Bom dia milk', 'LEITE', '70', '1', 150, '150', '10500', 7000, '0/0/0', 75),
('745760295562', 'Maria Crisp', 'BOLACHA', '150', '1', 24, '24', '3600', 0, '0/0/0', 12),
('745760805648', 'Frooti Maçã', 'SUMO', '400', '1', 6, '6', '2400', 1600, '0/0/0', 3),
('745760805655', 'Frooti Laranga', 'SUMO', '400', '1', 6, '6', '2400', 1600, '0/0/0', 3),
('745760805679', 'Frooti Manga', 'SUMO', '400', '1', 6, '6', '2400', 1600, '0/0/0', 3),
('764460105995', 'Bonita óleo Corporal 50ml', 'DESODORIZANTE', '250', '1', 12, '12', '3000', 1800, '0/0/0', 6),
('764460570427', 'Florina manteiga de cacal', 'CREME', '500', '1', 6, '6', '3000', 1030, '0/0/0', 2),
('7891515550776', 'Manteiga perdix', 'CREME', '0.00', '1', 12, '12', '0', 5900, '0/0/0', 6),
('7896286618397', 'Hipopo', 'BOLASHA', '200', '1', 24, '24', '4800', 0, '0/0/0', 12),
('8', 'Savory Pineapple Drink', 'SUMO', '150.00', '2', 12, '24', '3600', 550, '0/0/0', 6),
('8414227033093', 'Leite corporal coco', 'CREME', '700', '1', 5, '5', '3500', 715, '0/0/0', 2),
('8414227050175', 'Shampoo Amalfi Keratin', 'SHAMPOO', '1250', '1', 3, '3', '3750', 780, '0/0/0', 1),
('8414227691743', 'Shampoo Amalfi 3in', 'SHAMPOO', '1250', '1', 3, '3', '3750', 735, '0/0/0', 2),
('8426622204107', 'Azeitona - Hutesa', 'Latarias', '1000', '1', 12, '12', '12000', 6000, '0/0/0', 6),
('8433295051334', 'Sairo Gel de banho coco', 'GEL', '1250', '1', 3, '3', '3750', 790, '0/0/0', 2),
('8681270416054', 'LetsGo', 'BOLACHA', '200', '1', 24, '24', '4800', 0, '0/0/0', 12),
('8682718439918', 'LestGo blue', 'BOLACHA', '100', '1', 50, '50', '5000', 0, '0/0/0', 12),
('8692641001014', 'Kill Tox', 'Insecticida', '950', '1', 12, '12', '11400', 6960, '0/0/0', 5),
('8697442101147', 'Fresh Mango', 'SUMO RM PO', '50', '1', 30, '30', '1500', 0, '0/0/0', 23),
('8697442105800', 'Fresh Goyave', 'SUMO EM PO', '50', '1', 30, '30', '1500', 0, '0/0/0', 10),
('8901035061122', 'Cha Al Fina', 'Cha', '25', '1', 50, '50', '1250', 0, '0/0/0', 12),
('8901719210129', 'Poppins', 'SUGO', '50', '1', 25, '25', '1250', 0, '0/0/0', 12),
('8901719210228', 'Rol.a.Cola', 'SUGO', '50', '1', 50, '50', '2500', 0, '0/0/0', 25),
('8901719210525', 'Mintol', 'SUGO', '50', '1', 25, '25', '1250', 0, '0/0/0', 10),
('8901719909924', 'Nice Bolacha', 'Bolacha', '10', '1', 300, '300', '3000', 2499, '0/0/0', 50),
('8901719909962', 'Parle-G', 'BOLACHA', '50', '1', 24, '24', '1200', 0, '0/0/0', 12),
('8904206206889', 'Bonita óleo Corporal 100ml', 'DESODORIZANTE', '500', '1', 12, '12', '6000', 3190, '0/0/0', 6),
('8904206207213', 'Bonita skin care Rosa', 'CREME', '500', '1', 6, '6', '3000', 1960, '0/0/0', 3),
('8904206207244', 'Bonita skin care coco', 'CREME', '500', '1', 6, '6', '3000', 1960, '0/0/0', 3),
('8904206207596', 'Bonita gel de banho Maca verde', 'GEL', '1250.00', '1', 1, '1', '1250', 665, '0/0/0', 1),
('8904206208081', 'Bonita hair care abacate', 'CREME', '1250.00', '1', 6, '6', '7500', 2335, '0/0/0', 2),
('8904206211678', 'Lava loica So lava', 'DETERGENTE', '540', '1', 12, '12', '6480', 0, '0/0/0', 6),
('8904206213221', 'Bentol Sanitario limao', 'GEL', '250', '1', 12, '12', '3000', 1825, '0/0/0', 6),
('8904206233021', 'Talco Rox', 'po', '0.00', '1', 6, '6', '0', 1170, '0/0/0', 3),
('8904206277421', 'Escova pariz 51', 'ESCOVA', '150.00', '1', 12, '12', '1800', 1300, '0/0/0', 6),
('8904206278916', 'Bom Apetite Massa tomate', 'Latarias', '0.00', '1', 50, '50', '0', 4300, '0/0/0', 20),
('8904206280698', 'Modas', 'MOLAS', '0', '1', 1, '1', '0', 300, '0/0/0', 0),
('8904232709613', 'Lápis de Cor', 'MATERIAL', '50', '1', 24, '24', '1200', 425, '0/0/0', 10),
('8904232779999', 'Ervilhas Bom spetite', 'ERVILHA', '500', '1', 24, '24', '12000', 0, '0/0/0', 12),
('8904232786300', 'penso Lykis Rosa', 'PENSO', '300', '1', 10, '10', '3000', 200, '0/0/0', 4),
('8904232786324', 'penso Lykis roso', 'PENSO', '300', '1', 3, '3', '900', 200, '0/0/0', 1),
('8904271319446', 'Special TP Charcoal', 'DETERGENTE', '300', '2', 12, '24', '7200', 2090, '0/0/0', 6),
('8904271320299', 'Rox form Men', 'DESOTORIZANTE', '800', '1', 6, '6', '4800', 0, '0/0/0', 3),
('8904271321357', 'H', 'DESODORIZANTE', '1200.00', '1', 6, '6', '7200', 4820, '0/0/0', 3),
('8906041179847', 'Snacks', 'BOLACHA', '150', '1', 24, '24', '3600', 0, '0/0/0', 12),
('8907821007145', 'Massa Bom Apetite', 'MASSA', '250.00', '1', 20, '20', '5000', 3300, '0/0/0', 10),
('8907821018134', 'Likon bolacha ÁGUA E SAL', 'BOLACHA', '200', '1', 24, '24', '4800', 3700, '0/0/0', 12),
('8907821018714', 'Lykon bolacha Maria', 'BOLACHA', '200', '1', 20, '20', '4000', 2900, '0/0/0', 10),
('8907821047509', 'Special dupla accao', 'ESCOVA DE DENTE', '200', '1', 12, '12', '2400', 2100, '0/0/0', 6),
('8907821053180', 'Cremio', 'BOLACHA', '200', '1', 24, '24', '4800', 0, '0/0/0', 12),
('8907821056914', 'Special TP tri Active', 'DETERGENTE', '300.00', '3', 12, '36', '10800', 1835, '0/0/0', 6),
('8907821106480', 'Calcident', 'Pasta de dentes', '300.00', '2', 6, '12', '3600', 1320, '0/0/0', 3),
('8907821t056914', 'Calcident tri activo', 'PASTA DE DENTE', '300.00', '2', 6, '12', '3600', 1320, '0/0/0', 3),
('8939400470538', 'Lápis', 'MATERIAL', '25', '12', 12, '144', '3600', 208, '0/0/0', 12),
('8992946519758', 'Classic mulher margarida', 'CREME', '400', '1', 40, '40', '16000', 12500, '0/0/0', 20),
('9', 'Savory Mangol Drink PWD', 'SUMO', '150.00', '2', 12, '24', '3600', 850, '0/0/0', 6),
('9426286075128', 'Santox', 'Insecticida', '850', '1', 12, '12', '10200', 6900, '0/0/0', 5),
('9501100005717', 'Booster Cider Lata', 'BEBIDA', '350', '1', 24, '24', '8400', 5300, '0/0/0', 12),
('9555246325697', 'Sabonete Soft Silk', 'SABONETE', '200', '1', 2, '2', '400', 0, '0/0/0', 1),
('9555246325710', 'SABONETE SOLFT ', 'SABONETE', '200', '1', 4, '4', '800', 0, '0/0/0', 2),
('9555538101190', 'Bom Apetite Oleo', 'Oleo', '1000', '1', 12, '12', '12000', 10900, '0/0/0', 6),
('9555764906033', 'Oleo de palma', 'Oleo', '1200', '1', 1, '1', '1200', 0, '0/0/0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `relatorios`
--

CREATE TABLE `relatorios` (
  `id` varchar(50) NOT NULL,
  `data` varchar(200) NOT NULL,
  `funcionario` varchar(200) NOT NULL,
  `Saida` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Tcarrinho`
--

CREATE TABLE `Tcarrinho` (
  `id_relatorio` varchar(200) NOT NULL,
  `id_clinete` varchar(200) NOT NULL,
  `data` varchar(200) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `total` int(11) NOT NULL,
  `pagamento` int(11) NOT NULL,
  `troco` int(11) NOT NULL,
  `TDP` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Tcarrinho`
--

INSERT INTO `Tcarrinho` (`id_relatorio`, `id_clinete`, `data`, `descricao`, `total`, `pagamento`, `troco`, `TDP`) VALUES
('2550101895', '39581', '15/09/2022', 'Sistema', 1200, 1200, 0, 'multicaixa'),
('4530180536', '39581', '15/09/2022', 'Sistema', 600, 700, 100, 'dinheiro'),
('3062555350', '39581', '15/09/2022', 'Sistema', 1200, 1300, 100, 'multicaixa'),
('6902588731', '23411', '15/09/2022', 'Sistema', 2200, 3000, 800, 'multicaixa'),
('6259473618', '23411', '15/09/2022', 'Sistema', 400, 400, 0, 'dinheiro'),
('5850369660', '67111', '16/09/2022', 'Paulo Santana', 800, 1000, 200, 'multicaixa'),
('3557681391', '67111', '16/09/2022', 'Sistema', 400, 400, 0, 'dinheiro'),
('2027002477', '38421', '17/09/2022', 'Sistema', 2600, 3000, 400, 'multicaixa'),
('2698976', '68344', '17/09/2022', 'Sistema', 600, 1000, 400, 'multicaixa'),
('2698976', '68344', '17/09/2022', 'Sistema', 400, 100, -300, 'multicaixa'),
('1341275', '33493', '17/09/2022', 'Sistema', 1000, 1000, 0, 'multicaixa'),
('3997493', '33493', '17/09/2022', 'Sistema', 800, 1000, 200, 'multicaixa'),
('7882191', '33493', '17/09/2022', 'Sistema', 200, 500, 300, 'dinheiro'),
('6504740', '33493', '17/09/2022', 'Sistema', 200, 300, 100, 'multicaixa'),
('2478223', '33493', '17/09/2022', 'Sistema', 0, 0, 0, 'multicaixa'),
('6834056', '33493', '17/09/2022', 'Sistema', 200, 300, 100, 'multicaixa'),
('2357676', '33493', '17/09/2022', 'Sistema', 600, 600, 0, 'dinheiro'),
('6750085', '48081', '17/09/2022', 'Sistema', 1400, 1500, 100, 'dinheiro'),
('5454684', '9592', '17/09/2022 8:59:58 AM', 'Sistema', 800, 1000, 200, 'multicaixa'),
('6007603', '9592', '17/09/2022 9:00:21 AM', 'Sistema', 1000, 1500, 500, 'multicaixa');

-- --------------------------------------------------------

--
-- Table structure for table `venda`
--

CREATE TABLE `venda` (
  `id_cliente` varchar(200) NOT NULL,
  `codigo` varchar(200) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `categoria` varchar(200) NOT NULL,
  `preco` varchar(200) NOT NULL,
  `qtd` int(200) NOT NULL,
  `total` varchar(200) NOT NULL,
  `id_carrinho` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vendidos`
--

CREATE TABLE `vendidos` (
  `id_cliente` varchar(50) NOT NULL,
  `codigo` varchar(200) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `preco` double NOT NULL,
  `qtd` int(11) NOT NULL,
  `total` double NOT NULL,
  `id_relatorio` varchar(200) NOT NULL,
  `id_carrinho` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dados_da_abertura`
--
ALTER TABLE `dados_da_abertura`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`Codigo`);

--
-- Indexes for table `relatorios`
--
ALTER TABLE `relatorios`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
