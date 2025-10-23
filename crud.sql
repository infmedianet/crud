-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2025 at 06:54 AM
-- Server version: 8.0.36
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int NOT NULL,
  `nama` char(150) NOT NULL,
  `alamat` char(200) NOT NULL,
  `tanggal lahir` date DEFAULT NULL,
  `tempat lahir` varchar(25) DEFAULT NULL,
  `Pekerjaan` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama`, `alamat`, `tanggal lahir`, `tempat lahir`, `Pekerjaan`) VALUES
(1, 'DEDY SETIAWAN', 'YOGYAKARTA', NULL, NULL, NULL),
(2, 'nama 1', 'alamat 1', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `surat_sehat`
--

CREATE TABLE `surat_sehat` (
  `id_surat` timestamp(6) NULL DEFAULT CURRENT_TIMESTAMP(6),
  `berat_badan` int DEFAULT NULL,
  `tinggi_badan` int DEFAULT NULL,
  `bmi` varchar(255) DEFAULT NULL,
  `tekanan_darah` int DEFAULT NULL,
  `golongan_darah` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
