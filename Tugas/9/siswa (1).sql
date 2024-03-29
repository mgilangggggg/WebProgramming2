-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2024 at 03:04 PM
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
-- Database: `belajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `NIM` varchar(10) NOT NULL,
  `NAMA` varchar(30) NOT NULL,
  `ALAMAT` varchar(30) NOT NULL,
  `KOTA` varchar(20) NOT NULL,
  `HP` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`NIM`, `NAMA`, `ALAMAT`, `KOTA`, `HP`) VALUES
('10120001', 'GUNADI', 'JLN.MERDEKA 12', 'BANDUNG', '081111111111'),
('10120002', 'SARI KARTIKA', 'JLN.SETIABUDI 89', 'BANDUNG', '081222222222'),
('10120003', 'DEWI PURNAMA', 'JLN.SARIJADI 76', 'BANDUNG', '081333333333'),
('10120004', 'SONYA ERMINA', 'JLN.HEGARMANAH 23', 'BANDUNG', '081444444444'),
('10120005', 'DAVIN KAREL', 'JLN.CIWARUGA 76', 'CIMAHI', '081555555555'),
('10121177', 'MUHAMAD GILANG ABDUL GANI', 'JLN.MEKARBUANA, DUSUN CIMANEM', 'CIAMIS', '083861293196'),
('10121178', 'JOHN DOE', 'JLN. SETIA BUDI 89', 'BANDUNG', '083812222222'),
('10121179', 'CHARLI', 'JLN.KUBANGSARI 2', 'BANDUNG', '083811111111'),
('10121180', 'PURNAMA', 'JLN.CIHEULANG 24', 'BANDUNG', '08155555555');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`NIM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
