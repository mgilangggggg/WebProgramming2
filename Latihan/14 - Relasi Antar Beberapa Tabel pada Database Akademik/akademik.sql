-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2024 at 02:55 PM
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
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NIM` int(10) NOT NULL,
  `NAMA` varchar(30) NOT NULL,
  `ALAMAT` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`NIM`, `NAMA`, `ALAMAT`) VALUES
(10109001, 'RINA DEWI', 'JL. PAJAJARAN'),
(10109002, 'BUDIMAN', 'JL.PAJAJARAN'),
(10109003, 'DEWI', 'JL.NANJUNG'),
(10109004, 'RIDWAN', 'JL.CIBEBER');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `KODEMK` varchar(10) NOT NULL,
  `NAMAMK` varchar(20) NOT NULL,
  `SKS` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`KODEMK`, `NAMAMK`, `SKS`) VALUES
('IF1001', 'ALGORITMA', 3),
('IF1002', 'PANCASILA', 2),
('IF1003', 'KOMPUTER IT-1', 2),
('IF1004', 'MATEMATIKA', 3);

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
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`KODEMK`);

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
