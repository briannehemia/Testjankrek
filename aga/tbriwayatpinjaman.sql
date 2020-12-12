-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2020 at 07:21 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cateringaga`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbriwayatpinjaman`
--

CREATE TABLE `tbriwayatpinjaman` (
  `id_riwayat` int(11) NOT NULL,
  `id_alat` int(11) NOT NULL,
  `nama_alat` varchar(255) NOT NULL,
  `penanggung_jawab` varchar(255) NOT NULL,
  `tanggal_perbaikan` datetime NOT NULL DEFAULT current_timestamp(),
  `tanggal_kembali` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbriwayatpinjaman`
--

INSERT INTO `tbriwayatpinjaman` (`id_riwayat`, `id_alat`, `nama_alat`, `penanggung_jawab`, `tanggal_perbaikan`, `tanggal_kembali`, `jumlah`) VALUES
(8, 3, 'panci', 'sukiman', '2020-06-24 00:09:08', '2020-06-23 17:09:18', 50),
(9, 3, 'panci', 'sukiman', '2020-06-24 00:09:18', '2020-06-23 17:11:30', 50),
(10, 3, 'panci', 'sukiman', '0000-00-00 00:00:00', '2020-06-23 17:18:42', 100),
(11, 3, 'panci', 'sukiman', '2020-06-24 00:19:01', '2020-06-23 17:19:22', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbriwayatpinjaman`
--
ALTER TABLE `tbriwayatpinjaman`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbriwayatpinjaman`
--
ALTER TABLE `tbriwayatpinjaman`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
