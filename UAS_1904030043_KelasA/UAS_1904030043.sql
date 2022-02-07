-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 07, 2022 at 01:13 PM
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
-- Database: `UAS_1904030043`
--

-- --------------------------------------------------------

--
-- Table structure for table `baju`
--

CREATE TABLE `baju` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `harga` varchar(15) NOT NULL,
  `size` varchar(10) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `keterangan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baju`
--

INSERT INTO `baju` (`id`, `judul`, `harga`, `size`, `stok`, `gambar`, `keterangan`) VALUES
(1, 'BAJU DISTRO', '2000', 'L', 37, 'celana3.jpeg', 'Ukur L setara M+  : Lebar 46 cm Panjang 65cmmuat bb sampe 55kg'),
(2, 'Baju Custom', '3000', 'M', 2, 'baju2.jpg', 'bahan Pe.soft20s, nyaman dipakai sehari hari');

-- --------------------------------------------------------

--
-- Table structure for table `celana`
--

CREATE TABLE `celana` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `harga` int(15) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `size` varchar(4) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `celana`
--

INSERT INTO `celana` (`id`, `judul`, `harga`, `keterangan`, `size`, `stok`, `gambar`) VALUES
(1, 'Celana Chinos', 40000, 'dengan kualitas yang bagus', '45', 23, 'celana3.jpeg'),
(2, 'CELANA Bahan', 100000, 'di jamin original tidak mudah melar', '32', 42, 'celana1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gmail` varchar(30) NOT NULL,
  `keterangan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baju`
--
ALTER TABLE `baju`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `celana`
--
ALTER TABLE `celana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baju`
--
ALTER TABLE `baju`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `celana`
--
ALTER TABLE `celana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
