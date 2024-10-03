-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 12:40 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokotopup`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `username`, `password`, `email`) VALUES
(2, 'febrian', '100203', 'febrian@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `apex`
--

CREATE TABLE `apex` (
  `id` int(2) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `harga` int(10) NOT NULL,
  `icon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apex`
--

INSERT INTO `apex` (`id`, `nama`, `harga`, `icon`) VALUES
(1, '30 Gold', 5300, './assets/img/ag.png'),
(2, '60 Gold', 10700, './assets/img/ag.png'),
(3, '90 Gold', 16000, './assets/img/ag.png'),
(4, '280 Gold', 35000, './assets/img/ag.png'),
(5, '380 Gold', 57000, './assets/img/ag.png'),
(6, '500 Gold', 65000, './assets/img/ag.png'),
(7, '800 Gold', 99000, './assets/img/ag.png'),
(8, '1050 Gold', 129000, './assets/img/ag.png'),
(9, '1600 Gold', 199000, './assets/img/ag.png'),
(10, '2150 Gold', 259000, './assets/img/ag.png'),
(11, '2750 Gold', 309000, './assets/img/ag.png'),
(12, '4000 Gold', 469000, './assets/img/ag.png'),
(13, '5650 Gold', 629000, './assets/img/ag.png'),
(14, '11500 Gold', 1249000, './assets/img/ag.png'),
(15, '23500 Gold', 2499000, './assets/img/ag.png');

-- --------------------------------------------------------

--
-- Table structure for table `gi`
--

CREATE TABLE `gi` (
  `id` int(1) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `harga` int(10) NOT NULL,
  `icon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gi`
--

INSERT INTO `gi` (`id`, `nama`, `harga`, `icon`) VALUES
(1, '6480+1600 Genesis Crystals', 1599000, './assets/img/genesis.png'),
(2, '3280+600 Genesis Crystals', 799000, './assets/img/genesis.png'),
(3, '1980+260 Genesis Crystals', 479000, './assets/img/genesis.png'),
(4, '980+110 Genesis Crystals', 249000, './assets/img/genesis.png'),
(5, '300+30 Genesis Crystals', 79000, './assets/img/genesis.png'),
(6, '60 Genesis Crystals', 16000, './assets/img/genesis.png'),
(7, 'Blessing of the Welkin Moon', 79000, './assets/img/welkin.png');

-- --------------------------------------------------------

--
-- Table structure for table `mlbb`
--

CREATE TABLE `mlbb` (
  `id` int(2) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `harga` int(10) NOT NULL,
  `icon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mlbb`
--

INSERT INTO `mlbb` (`id`, `nama`, `harga`, `icon`) VALUES
(1, '3 Diamonds', 1099, './assets/img/dmml.png'),
(2, '5 Diamonds', 1579, './assets/img/dmml.png'),
(3, '11 Diamonds + 1 Bonus', 3688, './assets/img/dmml.png'),
(4, '17 Diamonds + 2 Bonus', 5797, './assets/img/dmml.png'),
(5, '25 Diamonds + 3 Bonus', 8436, './assets/img/dmml.png'),
(6, '40 Diamonds + 4 Bonus', 12654, './assets/img/dmml.png'),
(7, '53 Diamonds + 6 Bonus', 16872, './assets/img/dmml.png'),
(8, '77 Diamonds + 8 Bonus', 24254, './assets/img/dmml.png'),
(9, '154 Diamonds + 16 Bonus', 48507, './assets/img/dmml.png'),
(10, '217 Diamonds + 23 Bonus', 68543, './assets/img/dmml.png'),
(11, '256 Diamonds + 40 Bonus', 84360, './assets/img/dmml.png'),
(12, '367 Diamonds + 41 Bonus', 115995, './assets/img/dmml.png'),
(13, '503 Diamonds + 65 Bonus', 158175, './assets/img/dmml.png'),
(14, '774 Diamonds + 101 Bonus', 242535, './assets/img/dmml.png'),
(15, '1708 Diamonds + 302 Bonus', 527250, './assets/img/dmml.png'),
(16, '4003 Diamonds + 827 Bonus', 1265400, './assets/img/dmml.png'),
(17, 'Twilight Pass', 166500, './assets/img/bpml.png');

-- --------------------------------------------------------

--
-- Table structure for table `pubgm`
--

CREATE TABLE `pubgm` (
  `id` int(2) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `harga` int(10) NOT NULL,
  `icon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pubgm`
--

INSERT INTO `pubgm` (`id`, `nama`, `harga`, `icon`) VALUES
(1, '25+2 UC', 5000, './assets/img/uc.png'),
(2, '35+3 UC', 7000, './assets/img/uc.png'),
(3, '50+5 UC', 10000, './assets/img/uc.png'),
(4, '70+8 UC', 14000, './assets/img/uc.png'),
(5, '100+12 UC', 20000, './assets/img/uc.png'),
(6, '125+15 UC', 25000, './assets/img/uc.png'),
(7, '250+31 UC', 50000, './assets/img/uc.png'),
(8, '500+80 UC', 100000, './assets/img/uc.png'),
(9, '750+188 UC', 150000, './assets/img/uc.png'),
(10, '1000+250 UC', 200000, './assets/img/uc.png');

-- --------------------------------------------------------

--
-- Table structure for table `tof`
--

CREATE TABLE `tof` (
  `id` int(1) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `harga` int(10) NOT NULL,
  `icon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tof`
--

INSERT INTO `tof` (`id`, `nama`, `harga`, `icon`) VALUES
(1, '60 Dark Crystals', 16000, './assets/img/dctf.png'),
(2, '300 Dark Crystals', 79000, './assets/img/dctf.png'),
(3, '980 Dark Crystals', 249000, './assets/img/dctf.png'),
(4, '1980 Dark Crystals', 479000, './assets/img/dctf.png'),
(5, '3280 Dark Crystals', 799000, './assets/img/dctf.png'),
(6, '6480 Dark Crystals', 1599000, './assets/img/dctf.png');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `no_transaksi` int(11) NOT NULL,
  `produk` varchar(50) NOT NULL,
  `harga` int(10) NOT NULL,
  `bayar` varchar(50) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `game` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`no_transaksi`, `produk`, `harga`, `bayar`, `id_akun`, `game`) VALUES
(25, '154 Diamonds + 16 Bonus', 48507, 'DANA', 2, 'MLBB'),
(26, '6480+1600 Genesis Crystals', 1599000, 'ShopeePay', 2, 'Genshin_Impact'),
(27, '217 Diamonds + 23 Bonus', 68543, 'OVO', 2, 'MLBB'),
(28, 'Blessing of the Welkin Moon', 79000, 'GoPay', 2, 'Genshin_Impact'),
(29, '8150 Points', 800000, 'GoPay', 2, 'Genshin_Impact'),
(30, '30 Gold', 5300, 'GoPay', 2, 'MLBB'),
(31, '8150 Points', 800000, 'QRIS', 2, 'Valorant'),
(32, '500 Gold', 65000, 'ShopeePay', 2, 'Apex Leagends Mobile'),
(33, '6480 Dark Crystals', 1599000, 'QRIS', 2, 'Genshin_Impact'),
(34, '300 Dark Crystals', 79000, 'DANA', 2, 'Tower Of Fantasy'),
(35, '6480+1600 Genesis Crystals', 1599000, 'GoPay', 2, 'Genshin Impact'),
(36, '25+2 UC', 5000, 'DANA', 2, 'PUBGM'),
(37, '1000+250 UC', 200000, 'DANA', 2, 'PUBGM');

-- --------------------------------------------------------

--
-- Table structure for table `valorant`
--

CREATE TABLE `valorant` (
  `id` int(1) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `harga` int(10) NOT NULL,
  `icon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `valorant`
--

INSERT INTO `valorant` (`id`, `nama`, `harga`, `icon`) VALUES
(1, '125 Points', 15000, './assets/img/vpicon.png'),
(2, '420 Points', 50000, './assets/img/vpicon.png'),
(3, '700 Points', 80000, './assets/img/vpicon.png'),
(4, '1375 Points', 150000, './assets/img/vpicon.png'),
(5, '2400 Points', 250000, './assets/img/vpicon.png'),
(6, '4000 Points', 400000, './assets/img/vpicon.png'),
(7, '8150 Points', 800000, './assets/img/vpicon.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `apex`
--
ALTER TABLE `apex`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gi`
--
ALTER TABLE `gi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mlbb`
--
ALTER TABLE `mlbb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pubgm`
--
ALTER TABLE `pubgm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tof`
--
ALTER TABLE `tof`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no_transaksi`),
  ADD KEY `id_akun` (`id_akun`);

--
-- Indexes for table `valorant`
--
ALTER TABLE `valorant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `no_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `id_akun` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
