-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2023 at 02:39 PM
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
-- Database: `db_univ`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `username` varchar(20) NOT NULL,
  `pw` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`username`, `pw`) VALUES
('jumhadi', '123'),
('Kelompok 1', '0703');

-- --------------------------------------------------------

--
-- Table structure for table `tb_biodata`
--

CREATE TABLE `tb_biodata` (
  `id_mhs` int(15) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama_mhs` varchar(30) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `tanggal_lahir` varchar(30) NOT NULL,
  `kode_fakultas` int(20) NOT NULL,
  `kode_prodi` int(20) NOT NULL,
  `gelombang` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_biodata`
--

INSERT INTO `tb_biodata` (`id_mhs`, `nim`, `nama_mhs`, `tempat_lahir`, `jk`, `alamat`, `tanggal_lahir`, `kode_fakultas`, `kode_prodi`, `gelombang`) VALUES
(59, '1001220252', 'St Hardianti', 'Salusana', 'Perempuan', 'Salusana', '2022-12-19', 6, 8, 'IV'),
(60, '1001220253', 'Arie Saputri', 'Palopo', 'Perempuan', 'Palopo', '2022-12-21', 4, 7, 'I');

-- --------------------------------------------------------

--
-- Table structure for table `tb_daftar`
--

CREATE TABLE `tb_daftar` (
  `id_mhs` int(15) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama_mhs` varchar(30) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `tanggal_lahir` varchar(30) NOT NULL,
  `kode_fakultas` int(20) NOT NULL,
  `kode_prodi` int(20) NOT NULL,
  `gelombang` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_daftar`
--

INSERT INTO `tb_daftar` (`id_mhs`, `nim`, `nama_mhs`, `tempat_lahir`, `jk`, `alamat`, `tanggal_lahir`, `kode_fakultas`, `kode_prodi`, `gelombang`) VALUES
(67, '3337210002', 'Ahmad Jumhadi', 'Pandeglang', 'Laki-laki', 'Pandeglang', '2022-12-30', 7, 9, 'V');

-- --------------------------------------------------------

--
-- Table structure for table `tb_fakultas`
--

CREATE TABLE `tb_fakultas` (
  `kode_fakultas` int(20) NOT NULL,
  `nama_fakultas` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_fakultas`
--

INSERT INTO `tb_fakultas` (`kode_fakultas`, `nama_fakultas`) VALUES
(4, 'Fakultas Teknik Komputer'),
(5, 'Fakultas Sains'),
(6, 'Fakultas Keguruan '),
(7, ' Fakultas Pertanian');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prodi`
--

CREATE TABLE `tb_prodi` (
  `kode_prodi` int(20) NOT NULL,
  `nama_prodi` varchar(50) NOT NULL,
  `ukt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_prodi`
--

INSERT INTO `tb_prodi` (`kode_prodi`, `nama_prodi`, `ukt`) VALUES
(6, 'Teknik industri', 'Rp 3.500.000'),
(7, 'informatika', 'Rp 2.500.000'),
(8, 'PGSD', 'Rp 5.500.000'),
(9, 'Bisnis', 'Rp 5.000.000');

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
-- Indexes for table `tb_daftar`
--
ALTER TABLE `tb_daftar`
  ADD PRIMARY KEY (`id_mhs`);

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
  MODIFY `id_mhs` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tb_daftar`
--
ALTER TABLE `tb_daftar`
  MODIFY `id_mhs` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_biodata`
--
ALTER TABLE `tb_biodata`
  ADD CONSTRAINT `tb_biodata_ibfk_1` FOREIGN KEY (`kode_fakultas`) REFERENCES `tb_fakultas` (`kode_fakultas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_biodata_ibfk_2` FOREIGN KEY (`kode_prodi`) REFERENCES `tb_prodi` (`kode_prodi`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
