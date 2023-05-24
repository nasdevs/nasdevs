-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2023 at 01:56 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smuneljc`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id` int(11) NOT NULL,
  `nisn` char(10) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `kelas` varchar(15) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `nomor_whatsapp` char(15) NOT NULL,
  `username_instagram` varchar(30) NOT NULL,
  `pin` char(6) NOT NULL,
  `kode_pendaftaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `nisn`, `nama_lengkap`, `kelas`, `jenis_kelamin`, `nomor_whatsapp`, `username_instagram`, `pin`, `kode_pendaftaran`) VALUES
(1, '', '', '', '', '', '', '1234', ''),
(2, '', '', '', '', '', '', '1234', ''),
(3, '', '', '', '', '', '', '1234', ''),
(4, '', '', '', '', '', '', '1234', ''),
(5, '', '', '', '', '', '', '1234', ''),
(6, '', '', '', '', '', '', '1234', ''),
(7, '', '', '', '', '', '', '1234', ''),
(8, '', '', '', '', '', '', '1234', ''),
(9, '', '', '', '', '', '', '1234', ''),
(10, '', '', '', '', '', '', '1234', ''),
(11, '', '', '', '', '', '', '1234', ''),
(12, '', '', '', '', '', '', '1234', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
