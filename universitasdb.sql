-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2023 at 02:53 PM
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
-- Database: `db_universitas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_biodata`
--

CREATE TABLE `tb_biodata` (
  `id_mhs` int(15) NOT NULL,
  `nim` int(20) NOT NULL,
  `nama_mhs` varchar(30) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `kode_fakultas` varchar(20) NOT NULL,
  `kode_prodi` varchar(20) NOT NULL,
  `gelombang` varchar(20) NOT NULL,
  `tanggal_lahir` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_biodata`
--

INSERT INTO `tb_biodata` (`id_mhs`, `nim`, `nama_mhs`, `tempat_lahir`, `jk`, `alamat`, `kode_fakultas`, `kode_prodi`, `gelombang`, `tanggal_lahir`) VALUES
(1, 2104411653, 'Tasya', 'Palopo, 07 April 200', 'Perempuan', 'Rampoang', '04', '41', '2', ''),
(2, 2104411669, 'Adam', 'Cilegon, 04 Juli 200', 'Laki-laki', 'Purwakarta', '05', '42', '3', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_fakultas`
--

CREATE TABLE `tb_fakultas` (
  `kode_fakultas` varchar(15) NOT NULL,
  `nama_fakultas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_fakultas`
--

INSERT INTO `tb_fakultas` (`kode_fakultas`, `nama_fakultas`) VALUES
('04', 'Fakultas Teknik Komputer'),
('05', 'Fakultas Sains'),
('06', 'Fakultas Keguruan da'),
('07', ' Fakultas Pertanian');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prodi`
--

CREATE TABLE `tb_prodi` (
  `kode_prodi` varchar(15) NOT NULL,
  `nama_prodi` varchar(20) NOT NULL,
  `gelombang` varchar(20) NOT NULL,
  `ukt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_prodi`
--

INSERT INTO `tb_prodi` (`kode_prodi`, `nama_prodi`, `gelombang`, `ukt`) VALUES
('41', 'Informatika', 'I', 'Rp 2.550.000'),
('42', 'Biologi', 'II', 'Rp 2.400.000'),
('43', 'Kimia', 'III', 'Rp 2.300.000'),
('44', 'Agroteknologi', 'IV', 'Rp 2.250.000'),
('45', 'PGSD', 'V', 'Rp 1.850.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_biodata`
--
ALTER TABLE `tb_biodata`
  ADD PRIMARY KEY (`id_mhs`),
  ADD KEY `kode_fakultas` (`kode_fakultas`),
  ADD KEY `kode_prodi` (`kode_prodi`);

--
-- Indexes for table `tb_fakultas`
--
ALTER TABLE `tb_fakultas`
  ADD PRIMARY KEY (`kode_fakultas`);

--
-- Indexes for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  ADD PRIMARY KEY (`kode_prodi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_biodata`
--
ALTER TABLE `tb_biodata`
  MODIFY `id_mhs` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_biodata`
--
ALTER TABLE `tb_biodata`
  ADD CONSTRAINT `tb_biodata_ibfk_1` FOREIGN KEY (`kode_fakultas`) REFERENCES `tb_fakultas` (`kode_fakultas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_biodata_ibfk_2` FOREIGN KEY (`kode_prodi`) REFERENCES `tb_prodi` (`kode_prodi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
