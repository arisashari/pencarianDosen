-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2019 at 01:44 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpencaridosen`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbldosen`
--

CREATE TABLE `tbldosen` (
  `id` int(11) NOT NULL,
  `nama_dosen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldosen`
--

INSERT INTO `tbldosen` (`id`, `nama_dosen`) VALUES
(1, 'Aditya Prapanca, S.T., M.Kom.'),
(2, 'Naim Rochmawati, S.Kom., M.T.'),
(3, 'Salamun Rohman Nudin, S.Kom., M.Kom.'),
(4, 'Anita Qoiriah, S.Kom., M.Kom'),
(5, 'Agus Prihanto, S.T., M.Kom.'),
(6, 'I Made Suartana, S.Kom., M.Kom.');

-- --------------------------------------------------------

--
-- Table structure for table `tbljadwal`
--

CREATE TABLE `tbljadwal` (
  `id` int(11) NOT NULL,
  `dosen` text NOT NULL,
  `tempat` text NOT NULL,
  `waktu_mulai` decimal(4,2) NOT NULL,
  `waktu_selesai` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbljadwal`
--

INSERT INTO `tbljadwal` (`id`, `dosen`, `tempat`, `waktu_mulai`, `waktu_selesai`) VALUES
(1, 'I Made Suartana, S.Kom., M.Kom.', 'A10.01.01', '7.00', '9.30'),
(2, 'Aditya Prapanca, S.T., M.Kom.', 'A10.01.01', '8.15', '10.45'),
(3, 'Anita Qoiriah, S.Kom., M.Kom', 'A10.01.02', '12.00', '14.30'),
(4, 'Salamun Rohman Nudin, S.Kom., M.Kom.', 'A10.01.04', '7.00', '9.30'),
(5, 'Aditya Prapanca, S.T., M.Kom.', 'A10.01.03', '12.00', '14.30'),
(6, 'Agus Prihanto, S.T., M.Kom.', 'A10.01.03', '10.45', '13.15'),
(7, 'Naim Rochmawati, S.Kom., M.T.', 'A10.01.04', '10.45', '12.00'),
(8, 'Naim Rochmawati, S.Kom., M.T.', 'A10.01.04', '13.15', '13.15'),
(9, 'Anita Qoiriah, S.Kom., M.Kom', 'A10.01.02', '9.30', '12.00'),
(10, 'Salamun Rohman Nudin, S.Kom., M.Kom.', 'A10.01.02', '8.15', '9.30');

-- --------------------------------------------------------

--
-- Table structure for table `tbltempat`
--

CREATE TABLE `tbltempat` (
  `id` int(11) NOT NULL,
  `ruangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltempat`
--

INSERT INTO `tbltempat` (`id`, `ruangan`) VALUES
(1, 'A10.01.01'),
(2, 'A10.01.02'),
(3, 'A10.01.03'),
(4, 'A10.01.04'),
(5, 'A10.01.05');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tblwaktu`
--

CREATE TABLE `tblwaktu` (
  `id` int(11) NOT NULL,
  `jam` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblwaktu`
--

INSERT INTO `tblwaktu` (`id`, `jam`) VALUES
(1, '7.00'),
(2, '8.15'),
(3, '9.30'),
(4, '10.45'),
(5, '12.00'),
(6, '13.15'),
(7, '14.30'),
(8, '15.45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbldosen`
--
ALTER TABLE `tbldosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbljadwal`
--
ALTER TABLE `tbljadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltempat`
--
ALTER TABLE `tbltempat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblwaktu`
--
ALTER TABLE `tblwaktu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbldosen`
--
ALTER TABLE `tbldosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbljadwal`
--
ALTER TABLE `tbljadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbltempat`
--
ALTER TABLE `tbltempat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblwaktu`
--
ALTER TABLE `tblwaktu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
