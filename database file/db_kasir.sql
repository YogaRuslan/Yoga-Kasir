-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2024 at 04:07 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `idDetail` int(11) NOT NULL,
  `idPenjualan` int(11) NOT NULL,
  `idProduk` int(11) NOT NULL,
  `jumlahProduk` int(11) NOT NULL,
  `total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`idDetail`, `idPenjualan`, `idProduk`, `jumlahProduk`, `total`) VALUES
(1, 1, 1, 1, 12000),
(2, 2, 1, 1, 12000),
(3, 3, 2, 1, 9000),
(4, 4, 1, 1, 12000),
(5, 5, 1, 1, 12000),
(8, 8, 2, 1, 9000),
(10, 10, 1, 1, 12000),
(11, 11, 2, 5, 9000),
(11, 12, 1, 8, 12000),
(12, 13, 1, 1, 12000),
(13, 14, 1, 20, 12000),
(14, 15, 2, 8, 9000),
(14, 16, 1, 1, 12000),
(16, 19, 2, 50, 9000),
(17, 20, 2, 1, 9000),
(18, 21, 2, 1, 9000),
(19, 22, 1, 2, 12000),
(21, 24, 1, 1, 20000),
(23, 26, 6, 2, 5000),
(24, 27, 7, 3, 15000),
(26, 29, 8, 2, 10000),
(27, 30, 7, 1, 15000),
(28, 31, 5, 1, 35000),
(28, 32, 6, 1, 5000),
(29, 34, 6, 1, 5000),
(29, 35, 9, 1, 9000),
(29, 36, 7, 2, 15000),
(29, 37, 6, 3, 5000),
(30, 38, 5, 1, 35000),
(30, 39, 6, 1, 5000),
(31, 40, 5, 2, 35000),
(32, 41, 6, 1, 5000),
(32, 42, 5, 1, 35000),
(33, 43, 5, 1, 35000);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `idPelanggan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `noMeja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`idPelanggan`, `nama`, `noMeja`) VALUES
(0, 'ichsan', 1),
(2, 'anggah1', 19),
(3, 'angga2', 20),
(4, 'angga3', 19),
(5, 'iyan', 21),
(6, 'iyan1', 22),
(7, 'rahid', 1),
(8, 'hatchi', 2),
(9, 'mansyur', 12),
(10, 'paule', 1),
(11, 'saya', 13),
(12, 'zia', 1),
(13, 'zia', 1),
(14, 'satu', 20),
(15, 'gali', 1),
(16, 'ichsan', 4),
(17, 'anggah', 1),
(18, 'anggah', 1),
(19, 'ouhiijj0909', 1),
(20, 'Ucok', 111),
(21, 'wdmklqw', 21),
(22, 'Yoga Ruslan', 1),
(23, 'Yoga Ruslan', 1),
(24, 'Yoga Ruslan', 2),
(25, 'Yoga Ruslan', 1),
(26, 'arilaso', 1),
(27, 'Yoga Ruslan', 2),
(28, 'Yoga Ruslan', 2),
(29, 'Yoga Ruslan', 1),
(30, 'Yoga Ruslan', 2),
(31, 'yoga', 1),
(32, 'Yoga Ruslan', 2),
(33, 'Yoga Ruslan', 2);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `idPenjualan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `idPelanggan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`idPenjualan`, `nama`, `tanggal`, `total`, `idPelanggan`) VALUES
(2, '', '2024-02-12', 0.00, 0),
(3, '', '2024-02-12', 0.00, 0),
(4, '', '2024-02-12', 0.00, 0),
(5, '', '2024-02-12', 0.00, 0),
(6, '', '2024-02-12', 0.00, 0),
(7, '', '2024-02-12', 0.00, 0),
(8, '', '2024-02-12', 0.00, 0),
(9, '', '2024-02-12', 0.00, 0),
(10, '', '2024-02-12', 0.00, 0),
(11, '', '2024-02-12', 0.00, 0),
(12, '', '2024-02-12', 0.00, 0),
(13, '', '2024-02-12', 0.00, 0),
(14, '', '2024-02-12', 0.00, 0),
(15, '', '2024-02-12', 0.00, 0),
(16, '', '2024-02-13', 0.00, 0),
(17, '', '2024-02-13', 0.00, 0),
(18, '', '2024-02-13', 0.00, 0),
(19, '', '2024-02-13', 0.00, 0),
(20, '', '2024-02-13', 0.00, 0),
(21, '', '2024-02-21', 0.00, 0),
(22, '', '2024-02-27', 0.00, 0),
(23, '', '2024-02-27', 0.00, 0),
(24, '', '2024-02-27', 0.00, 0),
(25, '', '2024-02-27', 0.00, 0),
(26, '', '2024-02-27', 0.00, 0),
(27, '', '2024-02-27', 0.00, 0),
(28, '', '2024-02-27', 0.00, 0),
(29, '', '2024-02-27', 0.00, 0),
(30, '', '2024-02-27', 0.00, 0),
(31, '', '2024-02-27', 0.00, 0),
(32, '', '2024-02-27', 0.00, 0),
(33, '', '2024-02-27', 0.00, 0);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `idProduk` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `stok` int(11) NOT NULL,
  `sold` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idProduk`, `nama`, `harga`, `stok`, `sold`, `foto`) VALUES
(5, 'Iga Bakar', 35000.00, 990, '9', '27022024004049.jpg'),
(6, 'Lemon Tea', 5000.00, 990, '9', '27022024004238.jpg'),
(7, 'Mie Ayam', 15000.00, 993, '6', '27022024004309.jpg'),
(8, 'Makaroni Pedas', 10000.00, 997, '2', '27022024004333.jpg'),
(9, 'Jus Alpukat', 9000.00, 997, '2', '27022024004354.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('Admin','Petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'Yoga', '807659cd883fc0a63f6ce615893b3558', 'Admin'),
(11, 'Laora', '75b1bd1868c578b3de6017840594e060', 'Petugas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`idPenjualan`),
  ADD KEY `idpenjualan` (`idPenjualan`,`idProduk`),
  ADD KEY `idproduk` (`idProduk`),
  ADD KEY `iddetail` (`idDetail`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`idPelanggan`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`idPenjualan`),
  ADD KEY `idpelanggan` (`idPelanggan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idProduk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `idPenjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `idPenjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `idProduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`idPelanggan`) REFERENCES `pelanggan` (`idPelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
