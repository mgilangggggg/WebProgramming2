-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2024 at 04:24 PM
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
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `KODE` varchar(5) NOT NULL,
  `NAMABARANG` varchar(20) NOT NULL,
  `HARGA` int(10) NOT NULL,
  `STOK` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`KODE`, `NAMABARANG`, `HARGA`, `STOK`) VALUES
('B001', 'KOMPUTER', 3000000, 20),
('B002', 'LAPTOP', 5000000, 5),
('B003', 'PRINTER', 1500000, 20),
('B004', 'FLASHDISK', 50000, 50),
('B005', 'MODEM 4G', 200000, 10),
('B006', 'HARDDISK', 500000, 3),
('B007', 'PHILODENDRON', 25000, 10),
('B008', 'KAKTUS', 4000, 5),
('B009', 'ALGONEMA LEGACY', 250000, 20);

-- --------------------------------------------------------

--
-- Table structure for table `perwalian`
--

CREATE TABLE `perwalian` (
  `ID` int(2) NOT NULL,
  `NIM` int(10) NOT NULL,
  `KODEMK` varchar(10) NOT NULL,
  `TAHUNAKADEMIK` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `perwalian`
--

INSERT INTO `perwalian` (`ID`, `NIM`, `KODEMK`, `TAHUNAKADEMIK`) VALUES
(1, 10109001, 'IF1001', 20181),
(2, 10109001, 'IF1002', 20181),
(3, 10109002, 'IF1002', 20181),
(4, 10109003, 'IF1001', 20181),
(5, 10109004, 'IF1004', 20181),
(6, 10109004, 'IF1001', 20181);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`KODE`);

--
-- Indexes for table `perwalian`
--
ALTER TABLE `perwalian`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perwalian`
--
ALTER TABLE `perwalian`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
