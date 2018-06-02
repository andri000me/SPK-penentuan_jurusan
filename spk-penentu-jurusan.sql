-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2018 at 11:51 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk-penentu-jurusan`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_diri`
--

CREATE TABLE `data_diri` (
  `id` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `smp` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(1) NOT NULL,
  `agama` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_diri`
--

INSERT INTO `data_diri` (`id`, `nama`, `alamat`, `smp`, `tgl_lahir`, `jk`, `agama`) VALUES
('12', 'joni', 'wert', 'sdf', '2018-06-01', 'L', 'islam'),
('14657', 'iqbal oktha', 'lamongan', 'smp 1 sekaran', '2016-06-03', 'L', 'islam'),
('167834', 'joko rt', 'lamongan', 'smpn waru wetan', '2018-05-30', 'L', 'islam'),
('28778781', 'eko', 'palembang', 'SMPN 1 palembang', '2018-05-31', 'L', 'islam');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `mtk` int(2) DEFAULT NULL,
  `biologi` int(2) DEFAULT NULL,
  `fisika` int(2) DEFAULT NULL,
  `sejarah` int(2) DEFAULT NULL,
  `geografi` int(2) DEFAULT NULL,
  `bi` int(2) DEFAULT NULL,
  `jurusan` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `nisn` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `mtk`, `biologi`, `fisika`, `sejarah`, `geografi`, `bi`, `jurusan`, `tanggal`, `nisn`) VALUES
(11, 39, 57, 12, 67, 22, 60, 'IPS', '2018-06-01', '12'),
(12, 45, 39, 10, 34, 34, 45, 'IPS', '2018-06-01', '12'),
(13, 55, 44, 33, 66, 77, 88, 'IPS', '2018-06-01', '12'),
(14, 40, 30, 20, 20, 10, 12, 'Ipa', '2018-06-01', '167834'),
(15, 10, 40, 70, 20, 70, 30, 'Keduannya', '2018-06-02', '14657'),
(16, 30, 20, 70, 80, 60, 80, 'IPS', '2018-06-02', '28778781');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_diri`
--
ALTER TABLE `data_diri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nisn` (`nisn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`nisn`) REFERENCES `data_diri` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
