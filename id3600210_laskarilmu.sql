-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 21, 2017 at 01:40 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id3600210_laskarilmu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(3) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `alamat` varchar(200) NOT NULL,
  `notelp` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `password`, `alamat`, `notelp`) VALUES
(2, '123456', '123456', '123456', 123456),
(3, 'admin', 'admin', 'a', 129384);

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `id` int(3) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id`, `nama`, `password`, `alamat`, `email`) VALUES
(1, 'owner', 'owner', 'perkasa st', 'asdfasdf');

-- --------------------------------------------------------

--
-- Table structure for table `penjualanatk`
--

CREATE TABLE `penjualanatk` (
  `id` int(10) NOT NULL,
  `id_admin` int(3) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `admin` varchar(100) NOT NULL,
  `atas_nama` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `harga` int(10) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `satuan` varchar(100) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualanatk`
--

INSERT INTO `penjualanatk` (`id`, `id_admin`, `tanggal`, `admin`, `atas_nama`, `nama_barang`, `harga`, `jumlah`, `satuan`, `total`) VALUES
(6, 2, '2017-11-21', '123456', 'a', 'a', 1, 2, 'Lbr', 1),
(7, 3, '2017-11-01', 'admin', 'asdf', 'asdf', 232222, 2147483647, 'Lbr', 22224444);

-- --------------------------------------------------------

--
-- Table structure for table `percetakan`
--

CREATE TABLE `percetakan` (
  `id` int(10) NOT NULL,
  `id_admin` int(3) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `admin` varchar(100) NOT NULL,
  `atas_nama` varchar(100) NOT NULL,
  `jns_cetakan` varchar(30) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `ukuran` varchar(100) NOT NULL,
  `harga` int(10) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `satuan` varchar(100) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `percetakan`
--

INSERT INTO `percetakan` (`id`, `id_admin`, `tanggal`, `admin`, `atas_nama`, `jns_cetakan`, `keterangan`, `ukuran`, `harga`, `jumlah`, `satuan`, `total`) VALUES
(6, 3, '2017-11-07', 'admin', 'asdf', 'Digital Printing', 'asdf', '12341', 234, 1234, 'Lbr', 1234),
(7, 3, '2017-11-06', 'admin', 'a', 'Besti', 'a', '1', 1, 1, 'Lbr', 1),
(8, 3, '2017-11-09', 'admin', 'qwerty', 'Besti', 'qwer', 'qwer', 123, 123, 'Rim', 123);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `tanggal` varchar(10) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `website` varchar(100) NOT NULL,
  `comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `tanggal`, `nama`, `mail`, `website`, `comment`) VALUES
(1, '0000-00-00', 'jyre', 'jrye@gmail.com', 'jrye.com', 'asdjfhqwiefulkjdv'),
(3, '2017-10-31', 'aulia', 'aulianulfha@gmail.co.id', '', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualanatk`
--
ALTER TABLE `penjualanatk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `percetakan`
--
ALTER TABLE `percetakan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `penjualanatk`
--
ALTER TABLE `penjualanatk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `percetakan`
--
ALTER TABLE `percetakan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `penjualanatk`
--
ALTER TABLE `penjualanatk`
  ADD CONSTRAINT `penjualanatk_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `percetakan`
--
ALTER TABLE `percetakan`
  ADD CONSTRAINT `percetakan_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
