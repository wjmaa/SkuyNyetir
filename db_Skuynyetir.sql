-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2022 at 01:10 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skuynyetir`
--

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `kode_paket` varchar(4) NOT NULL,
  `jenis_transmisi` varchar(10) NOT NULL,
  `banyak_pertemuan` int(2) NOT NULL,
  `harga` int(11) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`kode_paket`, `jenis_transmisi`, `banyak_pertemuan`, `harga`, `tgl_mulai`, `tgl_selesai`) VALUES
('P01', 'Manual', 6, 700000, '2022-02-01', '2022-03-14'),
('P02', 'Manual', 8, 900000, '2022-02-01', '2022-03-30'),
('P03', 'Manual', 10, 1200000, '2022-02-01', '2022-04-14'),
('P04', 'Matic', 6, 800000, '2022-02-01', '2022-03-14'),
('P05', 'Matic', 8, 1000000, '2022-02-01', '2022-03-30'),
('P06', 'Matic', 10, 1300000, '2022-02-01', '2022-04-14');

-- --------------------------------------------------------

--
-- Table structure for table `pelatih`
--

CREATE TABLE `pelatih` (
  `nama_pelatih` varchar(20) NOT NULL,
  `alamat_pelatih` varchar(25) NOT NULL,
  `no_tlp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelatih`
--

INSERT INTO `pelatih` (`nama_pelatih`, `alamat_pelatih`, `no_tlp`) VALUES
('Ahmad', 'Jl. Apel no. 13', '085347298532'),
('Aksa', 'Jl. Rambutan no. 07', '081268903411'),
('Arya', 'Jl. Mangga no. 02', '087349260090');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_lengkap` varchar(35) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `tempat_lahir` varchar(35) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `email` varchar(35) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `pelatih` varchar(50) NOT NULL,
  `transmisi` varchar(10) NOT NULL,
  `banyak_pertemuan` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_lengkap`, `alamat`, `no_telp`, `tempat_lahir`, `tgl_lahir`, `email`, `jenis_kelamin`, `pelatih`, `transmisi`, `banyak_pertemuan`, `harga`) VALUES
(1, 'Naufal Rizqi A', 'Jl.Akasia 3 no.48', '08564621544', 'Purwokerto', '2002-01-26', 'opang2002@gmail.com', 'Laki-Laki', 'Ahmad', 'Manual', 6, 700000),
(2, 'Faiq Bayu R', 'sdsds', '08456321457', 'LA', '2002-01-26', 'hjdsdsfvik@gmail.com', 'Laki-Laki', 'Ahmad', 'Manual', 6, 700000),
(3, 'Novalita Mursia N', 'sdsdsadasd', '084521235534', 'Purwokerto', '2002-03-05', 'kalsdsaw@gmail.com', 'Laki-Laki', 'Ahmad', 'Manual', 6, 700000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`kode_paket`);

--
-- Indexes for table `pelatih`
--
ALTER TABLE `pelatih`
  ADD PRIMARY KEY (`nama_pelatih`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
