-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2019 at 08:34 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `komaldev`
--

-- --------------------------------------------------------

--
-- Table structure for table `requestpegawai`
--

CREATE TABLE `requestpegawai` (
  `idrequestpegawai` int(11) NOT NULL,
  `divisiterkait` varchar(50) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `jumlahdibutuhkan` int(11) NOT NULL,
  `alasan` varchar(300) NOT NULL,
  `syarat` varchar(300) NOT NULL,
  `keperluan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requestpegawai`
--

INSERT INTO `requestpegawai` (`idrequestpegawai`, `divisiterkait`, `tanggal`, `jumlahdibutuhkan`, `alasan`, `syarat`, `keperluan`) VALUES
(1, 'HRD', '2019-01-02 07:19:23', 10, '                    ahahaha', 'io', ''),
(2, 'HRD', '2019-01-02 07:19:29', 10, '                    ahahaha', 'io', ''),
(3, 'Produksi', '2019-01-02 07:19:51', 1, '                    as', 'as', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `requestpegawai`
--
ALTER TABLE `requestpegawai`
  ADD PRIMARY KEY (`idrequestpegawai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `requestpegawai`
--
ALTER TABLE `requestpegawai`
  MODIFY `idrequestpegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
