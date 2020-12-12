-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Jan 2019 pada 05.51
-- Versi Server: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cateringbrian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `idlog` int(11) NOT NULL,
  `action` varchar(400) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user` varchar(400) NOT NULL,
  `keterangan` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`idlog`, `action`, `tanggal`, `user`, `keterangan`) VALUES
(1, 'Login', '0000-00-00 00:00:00', 'admin', ''),
(2, 'Login', '2019-01-07 05:06:54', 'admin ', ''),
(3, 'Login', '2019-01-07 05:08:28', 'admin', ''),
(4, 'Logout', '2019-01-07 05:31:28', 'admin', ''),
(5, 'Login', '2019-01-07 18:55:43', 'admin', ''),
(7, 'Login', '2019-01-07 19:20:51', 'admin', ''),
(8, 'Logout', '2019-01-07 19:21:09', 'admin', ''),
(9, 'Login', '2019-01-07 19:21:23', 'admin', ''),
(10, 'Delete Data', '2019-01-07 19:21:35', 'admin', ''),
(11, 'Delete Data', '2019-01-07 20:42:47', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar12'),
(12, 'Delete Data', '2019-01-07 20:45:52', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar12 '),
(13, 'Delete Data', '2019-01-07 20:46:16', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar11'),
(14, 'Delete Data', '2019-01-07 20:48:08', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar19'),
(15, 'Delete Data', '2019-01-07 20:49:55', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar 7dan nama'),
(16, 'Delete Data', '2019-01-07 20:51:22', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar 15dan nama'),
(17, 'Delete Data', '2019-01-07 20:52:27', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar 6 dan nama'),
(18, 'Delete Data', '2019-01-07 20:53:22', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar 1 dan nama'),
(27, 'Delete Data', '2019-01-09 03:55:59', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar 2dan data sebagai berikut : \r\n		 nama : ddsfsdfsd\r\n		 email : asvdjhasvd\r\n		 alamat : asfvajsfvahsf\r\n		 Nomor Telpon : 099673786'),
(28, 'Delete Data', '2019-01-09 03:57:47', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar 3dan data sebagai berikut : \r\n		 nama : ajsbdjasbdad\r\n		 email : ahsvdjhavsdvads\r\n		 alamat : ahsbdabsd\r\n		 Nomor Telpon : 937490739047'),
(29, 'Delete Data', '2019-01-09 03:59:57', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar 2dan data sebagai berikut : \r\n		 nama : ddsfsdfsd\r\n		 email : asvdjhasvd\r\n		 alamat : asfvajsfvahsf\r\n		 Nomor Telpon : 099673786'),
(30, 'Delete Data', '2019-01-09 04:01:45', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar 3dan data sebagai berikut : \r\n		 nama : ajsbdjasbdad\r\n		 email : ahsvdjhavsdvads\r\n		 alamat : ahsbdabsd\r\n		 Nomor Telpon : 937490739047'),
(31, 'Delete Data', '2019-01-09 04:04:31', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar 2dan data sebagai berikut :nama : ddsfsdfsdemail : asvdjhasvdalamat : asfvajsfvahsfNomor Telpon : 099673786'),
(32, 'Delete Data', '2019-01-09 04:06:07', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar 3dan data sebagai berikut :nama : ajsbdjasbdademail : ahsvdjhavsdvadsalamat : ahsbdabsdNomor Telpon : 937490739047'),
(33, 'Delete Data', '2019-01-09 04:08:43', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar 2dan data sebagai berikut :nama : ddsfsdfsd'),
(34, 'Delete Data', '2019-01-09 04:10:33', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar 3 dan dengan nama ajsbdjasbdad'),
(35, 'Delete Data', '2019-01-09 04:11:57', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar 2 dan dengan nama ddsfsdfsd'),
(36, 'Delete Data', '2019-01-09 04:13:54', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar 5 dan dengan nama ajsbdjasbdad'),
(37, 'Delete Data', '2019-01-09 04:17:38', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar 1dan data sebagai berikut : \n		 nama : ddsfsdfsd\n		 email : asvdjhasvd\n		 alamat : asfvajsfvahsf\n		 Nomor Telpon : 099673786'),
(38, 'Delete Data', '2019-01-09 04:19:20', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar 3dan data sebagai berikut : \nnama : ajsbdjasbdad\nemail : ahsvdjhavsdvads\nalamat : ahsbdabsd\nNomor Telpon : 937490739047'),
(39, 'Delete Data', '2019-01-09 04:20:04', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar 2 dan Berikut detailnya : \nnama : ddsfsdfsd\nemail : asvdjhasvd\nalamat : asfvajsfvahsf\nNomor Telpon : 099673786');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`idlog`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `idlog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
