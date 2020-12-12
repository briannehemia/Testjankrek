-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Mar 2019 pada 03.12
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
(39, 'Delete Data', '2019-01-09 04:20:04', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar 2 dan Berikut detailnya : \nnama : ddsfsdfsd\nemail : asvdjhasvd\nalamat : asfvajsfvahsf\nNomor Telpon : 099673786'),
(40, 'Login', '2019-01-13 17:50:17', 'suplayer', ''),
(41, 'Login', '2019-01-13 17:51:20', 'suplayer', ''),
(42, 'Login', '2019-01-13 17:54:32', 'suplayer', ''),
(43, 'Login', '2019-01-14 05:17:07', 'admin', ''),
(44, 'Login', '2019-01-14 05:17:41', 'gudang', ''),
(45, 'Login', '2019-01-14 06:14:31', 'suplayer', ''),
(46, 'Add Data', '2019-01-14 06:15:36', 'suplayer', 'Data yang telah di hapus adalah data dengan id_barang  dan Berikut detailnya : <br/>\r\nnama_barang : bir<br/>\r\njumlah : 200<br/>\r\nharga : 5000'),
(47, 'Add Data', '2019-01-14 06:19:50', 'suplayer', 'Data yang telah di hapus adalah data dengan id_barang  dan Berikut detailnya : <br/>\r\nnama_barang : bir<br/>\r\njumlah : 20<br/>\r\nharga : 5000'),
(48, 'Delete Data', '2019-01-14 06:20:20', 'suplayer', 'Data yang telah di hapus adalah data dengan id_barang 4 dan Berikut detailnya : <br/>\r\nnama_barang : <br/>\r\njumlah : <br/>\r\nharga : '),
(49, 'Login', '2019-02-11 06:07:52', 'gudang', ''),
(50, 'Login', '2019-02-11 06:08:16', 'suplayer', ''),
(51, 'Login', '2019-02-12 17:09:20', 'suplayer', ''),
(52, 'Login', '2019-02-12 17:11:09', 'gudang', ''),
(53, 'Login', '2019-02-12 17:20:00', 'suplayer', ''),
(54, 'Login', '2019-02-12 22:22:47', 'gudang', ''),
(55, 'Login', '2019-02-12 22:24:47', 'suplayer', ''),
(56, 'Login', '2019-02-13 06:07:25', 'suplayer', ''),
(57, 'Login', '2019-02-13 06:24:15', 'suplayer', ''),
(58, 'Login', '2019-02-13 06:42:22', 'suplayer', ''),
(59, 'Login', '2019-02-13 06:54:02', 'suplayer', ''),
(60, 'Login', '2019-02-13 07:53:24', 'suplayer', ''),
(61, 'Login', '2019-02-13 07:55:27', 'suplayer', ''),
(62, 'Login', '2019-02-13 10:30:21', 'suplayer', ''),
(63, 'Login', '2019-02-14 11:18:13', 'suplayer', ''),
(64, 'Login', '2019-02-14 11:18:53', 'gudang', ''),
(65, 'Add Data', '2019-02-14 12:54:49', 'gudang', 'Data yang telah di hapus adalah data dengan id_barangsup  dan Berikut detailnya : <br/>\r\nnama_barang : Ayam<br/>\r\njumlah : 20<br/>\r\nharga : 5000'),
(66, 'Delete Data', '2019-02-14 12:54:58', 'gudang', 'Data yang telah di hapus adalah data dengan id_barangsup  dan Berikut detailnya : <br/>\r\nnama_barang : <br/>\r\njumlah : <br/>\r\nharga : '),
(67, 'Login', '2019-02-15 02:31:49', 'gudang', ''),
(68, 'Login', '2019-02-15 03:24:54', 'manajer', ''),
(69, 'Login', '2019-02-15 03:37:41', 'suplayer', ''),
(70, 'Login', '2019-02-15 11:02:58', 'suplayer', ''),
(71, 'Login', '2019-02-15 11:03:29', 'gudang', ''),
(72, 'Login', '2019-02-15 11:03:44', 'gudang', ''),
(73, 'Login', '2019-02-15 11:04:12', 'gudang', ''),
(74, 'Login', '2019-02-15 11:04:49', 'manajer', ''),
(75, 'Add Data', '2019-02-15 12:10:35', 'manajer', 'Data yang telah di hapus adalah data dengan id_suplayer  dan Berikut detailnya : <br/>\r\nid_suplayer : 4<br/>\r\nnama_pemilik : aga<br/>\r\nnama_toko : mnhjj'),
(76, 'Add Data', '2019-02-15 12:11:45', 'manajer', 'Data yang telah di hapus adalah data dengan id_suplayer  dan Berikut detailnya : <br/>\r\nid_suplayer : 4<br/>\r\nnama_pemilik : aga<br/>\r\nnama_toko : mnhjj'),
(77, 'Add Data', '2019-02-15 12:17:53', 'manajer', 'Data yang telah di hapus adalah data dengan id_suplayer  dan Berikut detailnya : <br/>\r\nid_suplayer : 4<br/>\r\nnama_pemilik : aga<br/>\r\nnama_toko : mnhjj'),
(78, 'Login', '2019-02-26 13:12:22', 'manajer', ''),
(79, 'Login', '2019-02-27 08:35:32', 'gudang', ''),
(80, 'Login', '2019-02-27 16:35:35', 'gudang', ''),
(81, 'Login', '2019-02-27 17:56:32', 'suplayer', ''),
(82, 'Login', '2019-02-28 20:38:03', 'suplayer', ''),
(83, 'Login', '2019-02-28 20:44:15', 'gudang', ''),
(84, 'Add Data', '2019-02-28 20:47:31', 'gudang', 'Data yang telah di hapus adalah data dengan id_requestalat  dan Berikut detailnya : <br/>\r\nnama_alat : Pisau<br/>\r\njumlah : 20<br/>\r\ntgl_max : 2019-03-19<br/>\r\njam_max : 12:00'),
(85, 'Delete Data', '2019-02-28 20:48:07', 'gudang', 'Data yang telah di hapus adalah data dengan id_requestalat  dan Berikut detailnya : <br/>\r\nnama_alat : <br/>\r\njumlah : <br/>\r\ntgl_max : <br/>\r\njam_max : '),
(86, 'Add Data', '2019-02-28 20:48:36', 'gudang', 'Data yang telah di hapus adalah data dengan id_requestbarang  dan Berikut detailnya : <br/>\r\nnama_barang : Ayam<br/>\r\njumlah : 20<br/>\r\ntgl_max : 2019-03-19<br/>\r\njam_max : 12:12'),
(87, 'Add Data', '2019-02-28 20:49:10', 'gudang', 'Data yang telah di hapus adalah data dengan id_requestbarang  dan Berikut detailnya : <br/>\r\nnama_barang : Ayam<br/>\r\njumlah : 5<br/>\r\ntgl_max : 2019-03-19<br/>\r\njam_max : 13:24'),
(88, 'Delete Data', '2019-02-28 20:49:26', 'gudang', 'Data yang telah di hapus adalah data dengan id_requestbarang  dan Berikut detailnya : <br/>\r\nnama_barang : <br/>\r\njumlah : <br/>\r\ntgl_max : <br/>\r\njam_max : '),
(89, 'Add Data', '2019-02-28 20:49:57', 'gudang', 'Data yang telah di hapus adalah data dengan id_requestbarang  dan Berikut detailnya : <br/>\r\nnama_barang : Ayam<br/>\r\njumlah : 5<br/>\r\ntgl_max : 2019-03-19<br/>\r\njam_max : 13:15'),
(90, 'Add Data', '2019-03-01 04:03:38', 'gudang', 'Data yang telah di hapus adalah data dengan id_alatsup  dan Berikut detailnya : <br/>\r\nnama_alat : AL08<br/>\r\njumlah : 20<br/>\r\nharga : 5000'),
(91, 'Delete Data', '2019-03-01 04:07:05', 'gudang', 'Data yang telah di hapus adalah data dengan id_alatsup  dan Berikut detailnya : <br/>\r\nnama_alat : <br/>\r\njumlah : <br/>\r\nharga : '),
(92, 'Add Data', '2019-03-01 04:07:25', 'gudang', 'Data yang telah di hapus adalah data dengan id_alatsup  dan Berikut detailnya : <br/>\r\nnama_alat : AL08<br/>\r\njumlah : 200<br/>\r\nharga : 14000'),
(93, 'Delete Data', '2019-03-01 04:10:07', 'gudang', 'Data yang telah di hapus adalah data dengan id_alatsup  dan Berikut detailnya : <br/>\r\nnama_alat : <br/>\r\njumlah : <br/>\r\nharga : '),
(94, 'Add Data', '2019-03-01 04:14:10', 'gudang', 'Data yang telah di hapus adalah data dengan id_alatsup  dan Berikut detailnya : <br/>\r\nnama_alat : AL08<br/>\r\njumlah : 200<br/>\r\nharga : 4000'),
(95, 'Add Data', '2019-03-01 04:14:23', 'gudang', 'Data yang telah di hapus adalah data dengan id_alatsup  dan Berikut detailnya : <br/>\r\nnama_alat : AL08<br/>\r\njumlah : 200<br/>\r\nharga : 4000'),
(96, 'Add Data', '2019-03-01 04:15:07', 'gudang', 'Data yang telah di hapus adalah data dengan id_alatsup  dan Berikut detailnya : <br/>\r\nnama_alat : AL08<br/>\r\njumlah : 200<br/>\r\nharga : 4000'),
(97, 'Add Data', '2019-03-01 04:23:17', 'gudang', 'Data yang telah di hapus adalah data dengan id_alatsup  dan Berikut detailnya : <br/>\r\nnama_alat : AL08<br/>\r\njumlah : 200<br/>\r\nharga : 4000'),
(98, 'Add Data', '2019-03-01 04:28:58', 'gudang', 'Data yang telah di hapus adalah data dengan id_requestbarang  dan Berikut detailnya : <br/>\r\nnama_barang : BH01<br/>\r\njumlah : 5<br/>\r\ntgl_max : 2019-03-13<br/>\r\njam_max : 23:12'),
(99, 'Add Data', '2019-03-01 04:29:25', 'gudang', 'Data yang telah di hapus adalah data dengan id_requestbarang  dan Berikut detailnya : <br/>\r\nnama_barang : BH01<br/>\r\njumlah : 5<br/>\r\ntgl_max : 2019-03-13<br/>\r\njam_max : 05:23'),
(100, 'Add Data', '2019-03-01 04:50:51', 'gudang', 'Data yang telah di hapus adalah data dengan id_alatsup  dan Berikut detailnya : <br/>\r\nnama_alat : AL08<br/>\r\njumlah : 200<br/>\r\nharga : 4000'),
(101, 'Add Data', '2019-03-01 04:52:37', 'gudang', 'Data yang telah di hapus adalah data dengan id_alatsup  dan Berikut detailnya : <br/>\r\nnama_alat : AL08<br/>\r\njumlah : 200<br/>\r\nharga : 4000'),
(102, 'Login', '2019-03-01 05:01:16', 'gudang', ''),
(103, 'Add Data', '2019-03-01 05:03:30', 'gudang', 'Data yang telah di hapus adalah data dengan id_alat  dan Berikut detailnya : <br/>\r\nnama_alat : Pisau<br/>\r\njumlah : 20<br/>\r\nharga : 5000'),
(104, 'Delete Data', '2019-03-01 05:03:46', 'gudang', 'Data yang telah di hapus adalah data dengan id_alat  dan Berikut detailnya : <br/>\r\nnama_alat : <br/>\r\njumlah : <br/>\r\nharga : '),
(105, 'Add Data', '2019-03-01 08:00:38', 'gudang', 'Data yang telah di hapus adalah data dengan id_alatsup  dan Berikut detailnya : <br/>\r\nnama_alat : AL08<br/>\r\njumlah : 20<br/>\r\nharga : 5000'),
(106, 'Add Data', '2019-03-01 08:00:59', 'gudang', 'Data yang telah di hapus adalah data dengan id_alatsup  dan Berikut detailnya : <br/>\r\nnama_alat : AL08<br/>\r\njumlah : 20<br/>\r\nharga : 5000'),
(107, 'Add Data', '2019-03-01 08:01:15', 'gudang', 'Data yang telah di hapus adalah data dengan id_alatsup  dan Berikut detailnya : <br/>\r\nnama_alat : AL08<br/>\r\njumlah : 20<br/>\r\nharga : 5000'),
(108, 'Add Data', '2019-03-01 08:01:45', 'gudang', 'Data yang telah di hapus adalah data dengan id_alatsup  dan Berikut detailnya : <br/>\r\nnama_alat : AL08<br/>\r\njumlah : 20<br/>\r\nharga : 5000'),
(109, 'Add Data', '2019-03-01 08:04:31', 'gudang', 'Data yang telah di hapus adalah data dengan id_alatsup  dan Berikut detailnya : <br/>\r\nnama_alat : AL08<br/>\r\njumlah : 20<br/>\r\nharga : 5000'),
(110, 'Add Data', '2019-03-01 08:06:24', 'gudang', 'Data yang telah di hapus adalah data dengan id_alatsup  dan Berikut detailnya : <br/>\r\nnama_alat : AL08<br/>\r\njumlah : 20<br/>\r\nharga : 5000'),
(111, 'Add Data', '2019-03-01 08:09:15', 'gudang', 'Data yang telah di hapus adalah data dengan id_alatsup  dan Berikut detailnya : <br/>\r\nnama_alat : AL08<br/>\r\njumlah : 20<br/>\r\nharga : 5000'),
(112, 'Add Data', '2019-03-01 08:29:03', 'gudang', 'Data yang telah di hapus adalah data dengan id_requestbarang  dan Berikut detailnya : <br/>\r\nnama_barang : BH01<br/>\r\njumlah : 20<br/>\r\ntgl_max : 2019-03-14<br/>\r\njam_max : 12:33'),
(113, 'Login', '2019-03-01 08:33:12', 'manajer', ''),
(114, 'Login', '2019-03-03 04:08:16', 'suplayer', ''),
(115, 'Login', '2019-03-03 04:08:58', 'gudang', ''),
(116, 'Login', '2019-03-03 04:09:36', 'manajer', ''),
(117, 'Delete Data', '2019-03-03 04:19:09', 'manajer', 'Data yang telah di hapus adalah data dengan id_suplayer 4 dan Berikut detailnya : <br/>\r\nid_suplayer : <br/>\r\nnama_pemilik : <br/>\r\nnama_toko : '),
(118, 'Login', '2019-03-11 03:32:26', 'suplayer', ''),
(119, 'Login', '2019-03-11 03:33:41', 'gudang', ''),
(120, 'Login', '2019-03-11 03:35:10', 'manajer', ''),
(121, 'Login', '2019-03-11 22:52:51', 'suplayer', ''),
(122, 'Login', '2019-03-11 23:37:56', 'gu', ''),
(123, 'Login', '2019-03-11 23:45:29', 'gudang', ''),
(124, 'Login', '2019-03-11 23:46:36', 'gudang', ''),
(125, 'Login', '2019-03-11 23:46:52', 'gycdjt', ''),
(126, 'Login', '2019-03-11 23:47:04', 'gudang', ''),
(127, 'Login', '2019-03-11 23:47:18', 'gudang', ''),
(128, 'Login', '2019-03-13 01:35:04', 'suplayer', ''),
(129, 'Login', '2019-03-13 01:35:20', 'suplayer', ''),
(130, 'Login', '2019-03-13 02:07:55', 'gudang', ''),
(131, 'Login', '2019-03-13 02:08:37', 'manajer', ''),
(132, 'Login', '2019-03-13 02:08:55', 'manajer', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `requestpegawai`
--

CREATE TABLE `requestpegawai` (
  `idrequestpegawai` varchar(11) NOT NULL,
  `divisiterkait` varchar(50) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `jumlahdibutuhkan` int(11) NOT NULL,
  `alasan` varchar(300) NOT NULL,
  `syarat` varchar(300) NOT NULL,
  `keperluan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `requestpegawai`
--

INSERT INTO `requestpegawai` (`idrequestpegawai`, `divisiterkait`, `tanggal`, `jumlahdibutuhkan`, `alasan`, `syarat`, `keperluan`) VALUES
('1', 'HRD', '2019-01-02 07:19:23', 10, '                    ahahaha', 'io', ''),
('2', 'HRD', '2019-01-02 07:19:29', 10, '                    ahahaha', 'io', ''),
('3', 'Produksi', '2019-01-02 07:19:51', 1, '                    as', 'as', ''),
('4', 'Pergudangan', '2019-01-08 20:59:15', 20, '                    ugiwaugsdqugwdjk', 'uyewhsgfikysgwf', ''),
('5', 'Pergudangan', '2019-01-08 20:59:32', 20, '                    ugiwaugsdqugwdjk', 'uyewhsgfikysgwf', ''),
('6', 'Pergudangan', '2019-01-08 21:00:43', 20, '                    ugiwaugsdqugwdjk', 'uyewhsgfikysgwf', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbalatgudang`
--

CREATE TABLE `tbalatgudang` (
  `id_alat` varchar(11) NOT NULL,
  `id_listalat` varchar(11) NOT NULL,
  `nama_alat` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbalatgudang`
--

INSERT INTO `tbalatgudang` (`id_alat`, `id_listalat`, `nama_alat`, `jumlah`, `harga`) VALUES
('1', 'AL01', 'Wajan', 40, 35000),
('2', 'AL05', 'Pisau', 100, 12000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbalatkeproduksi`
--

CREATE TABLE `tbalatkeproduksi` (
  `id_alatkeproduksi` varchar(11) NOT NULL,
  `id_requestalat` varchar(11) NOT NULL,
  `nama_alat` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `tgl_max` date NOT NULL,
  `jam_max` time NOT NULL,
  `waktu_kirim` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbalatsuplayer`
--

CREATE TABLE `tbalatsuplayer` (
  `id_alatsup` varchar(11) NOT NULL,
  `id_suplayer` varchar(11) NOT NULL,
  `id_listalat` varchar(11) NOT NULL,
  `nama_alat` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbalatsuplayer`
--

INSERT INTO `tbalatsuplayer` (`id_alatsup`, `id_suplayer`, `id_listalat`, `nama_alat`, `jumlah`, `harga`) VALUES
('', '', 'Garpu', 'AL08', 20, 5000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbbaranggudang`
--

CREATE TABLE `tbbaranggudang` (
  `id_barang` varchar(11) NOT NULL,
  `id_listbarang` varchar(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbbaranggudang`
--

INSERT INTO `tbbaranggudang` (`id_barang`, `id_listbarang`, `nama_barang`, `jumlah`, `harga`) VALUES
('1', 'BH01', 'Ayam', 130, 56000),
('2', 'BH05', 'Beras', 120, 12000);

--
-- Trigger `tbbaranggudang`
--
DELIMITER $$
CREATE TRIGGER `belibarang` AFTER UPDATE ON `tbbaranggudang` FOR EACH ROW BEGIN
	UPDATE tbbelibarang set jumlah= jumlah+50
    WHERE id_listbarang =jumlah <= 10;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbbarangkeproduksi`
--

CREATE TABLE `tbbarangkeproduksi` (
  `id_barangkeproduksi` varchar(11) NOT NULL,
  `id_requestbarang` varchar(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `tgl_max` date NOT NULL,
  `jam_max` time NOT NULL,
  `waktu_kirim` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbbarangsuplayer`
--

CREATE TABLE `tbbarangsuplayer` (
  `id_barangsup` varchar(11) NOT NULL,
  `id_suplayer` varchar(11) NOT NULL,
  `id_listbarang` varchar(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbbarangsuplayer`
--

INSERT INTO `tbbarangsuplayer` (`id_barangsup`, `id_suplayer`, `id_listbarang`, `nama_barang`, `jumlah`, `harga`) VALUES
('2', '2', 'BH01', 'Ayam', 12, 10000),
('3', '2', 'BH05', 'Beras', 10, 11000);

--
-- Trigger `tbbarangsuplayer`
--
DELIMITER $$
CREATE TRIGGER `hargabaranggudang` AFTER UPDATE ON `tbbarangsuplayer` FOR EACH ROW BEGIN
	UPDATE tbbaranggudang set harga=NEW.harga
    WHERE id_listbarang =New.harga +2000 ;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbbelialat`
--

CREATE TABLE `tbbelialat` (
  `id_belialat` varchar(11) NOT NULL,
  `id_listalat` varchar(11) NOT NULL,
  `nama_alat` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbbelibarang`
--

CREATE TABLE `tbbelibarang` (
  `id_belibarang` varchar(11) NOT NULL,
  `id_listbarang` varchar(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbbelibarang`
--

INSERT INTO `tbbelibarang` (`id_belibarang`, `id_listbarang`, `nama_barang`, `jumlah`, `alamat`) VALUES
('1', 'BH01', 'Ayam', 400, 'Malang'),
('2', 'BH05', 'Beras', 400, 'Malang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbchatpegawai`
--

CREATE TABLE `tbchatpegawai` (
  `id_chatpegawai` varchar(11) NOT NULL,
  `divisi_terkait` varchar(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `subjek` varchar(100) NOT NULL,
  `Pesan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbchatpegawai`
--

INSERT INTO `tbchatpegawai` (`id_chatpegawai`, `divisi_terkait`, `tanggal`, `subjek`, `Pesan`) VALUES
('', 'Produksi', '2019-02-27 17:30:03', 'mboh', 'ta ku gak mari2, ewangono rek');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbdatasuplayer`
--

CREATE TABLE `tbdatasuplayer` (
  `id_suplayer` varchar(11) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_toko` varchar(100) NOT NULL,
  `no_rekening` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `level` enum('suplayer','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbdatasuplayer`
--

INSERT INTO `tbdatasuplayer` (`id_suplayer`, `nama_pemilik`, `password`, `nama_toko`, `no_rekening`, `alamat`, `email`, `phone`, `foto`, `level`) VALUES
('1', 'aga', 'AAWvhuju67HYU', 'moh rugi', '161827281928', 'Malang', 'ndr@gmail.com', '0823333424242', '', 'suplayer'),
('2', 'Ndr', '2BC56ud5awsd', 'pengen sugeh', '198716141661887', 'Jl.veteran Dalam 427D', 'aga@gmail.com', '082333356693', '', 'suplayer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblistalat`
--

CREATE TABLE `tblistalat` (
  `id_listalat` varchar(11) NOT NULL,
  `nama_alat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblistalat`
--

INSERT INTO `tblistalat` (`id_listalat`, `nama_alat`) VALUES
('AL08', 'Garpu'),
('AL04', 'Gas LPG'),
('AL03', 'Kompor'),
('AL09', 'Kulkas'),
('AL010', 'Oven'),
('AL06', 'Piring'),
('AL05', 'Pisau'),
('AL07', 'Sendok'),
('AL02', 'Sotel'),
('AL01', 'Wajan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblistbarang`
--

CREATE TABLE `tblistbarang` (
  `id_listbarang` varchar(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblistbarang`
--

INSERT INTO `tblistbarang` (`id_listbarang`, `nama_barang`) VALUES
('BH01', 'Ayam'),
('BH09', 'Bawang Bombai'),
('BH05', 'Beras'),
('BH010', 'Cabai'),
('BH03', 'Garam'),
('BH02', 'Gula'),
('BH08', 'Keju'),
('BH04', 'Minyak Goreng'),
('BH07', 'Santan'),
('BH06', 'Tomat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbrequestalat`
--

CREATE TABLE `tbrequestalat` (
  `id_requestalat` varchar(11) NOT NULL,
  `id_listalat` varchar(11) NOT NULL,
  `nama_alat` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `tgl_max` date NOT NULL,
  `jam_max` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbrequestalat`
--

INSERT INTO `tbrequestalat` (`id_requestalat`, `id_listalat`, `nama_alat`, `jumlah`, `tgl_max`, `jam_max`) VALUES
('REA01', 'AL01', 'Wajan', 10, '2019-02-28', '00:00:00'),
('REA02', 'AL05', 'Pisau', 20, '2019-02-28', '00:00:00');

--
-- Trigger `tbrequestalat`
--
DELIMITER $$
CREATE TRIGGER `editrequestalat` BEFORE UPDATE ON `tbrequestalat` FOR EACH ROW BEGIN
	UPDATE tbalatgudang set jumlah=jumlah-NEW.jumlah
    WHERE nama_alat = NEW.nama_alat;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertrequestalat` AFTER INSERT ON `tbrequestalat` FOR EACH ROW BEGIN
	UPDATE tbalatgudang set jumlah=jumlah-NEW.jumlah
    WHERE nama_alat = NEW.nama_alat;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbrequestbarang`
--

CREATE TABLE `tbrequestbarang` (
  `id_requestbarang` varchar(11) NOT NULL,
  `id_listbarang` varchar(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `tgl_max` date NOT NULL,
  `jam_max` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbrequestbarang`
--

INSERT INTO `tbrequestbarang` (`id_requestbarang`, `id_listbarang`, `nama_barang`, `jumlah`, `tgl_max`, `jam_max`) VALUES
('REB01', 'BH01', 'Ayam', 50, '2019-02-15', '00:00:00'),
('REB02', 'BH05', 'Beras', 45, '2019-02-15', '00:00:00');

--
-- Trigger `tbrequestbarang`
--
DELIMITER $$
CREATE TRIGGER `editrequestbarang` AFTER UPDATE ON `tbrequestbarang` FOR EACH ROW BEGIN
	UPDATE tbbaranggudang set jumlah=jumlah-NEW.jumlah
    WHERE nama_barang = NEW.nama_barang;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `inputrequestbarang` BEFORE INSERT ON `tbrequestbarang` FOR EACH ROW BEGIN
	UPDATE tbbaranggudang set jumlah=jumlah-NEW.jumlah
    WHERE nama_barang = NEW.nama_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `iduser` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `level` enum('admin','gudang','suplayer','manajer','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`iduser`, `username`, `password`, `email`, `foto`, `level`) VALUES
(1, 'admin', 'admin', 'komaldevadmin@gmail.com', NULL, 'admin'),
(2, 'gudang', 'gudang', 'gudang@gmail.com', NULL, 'gudang'),
(3, 'suplayer', 'suplayer', 'suplayer@gmail.com', NULL, 'suplayer'),
(4, 'manajer', 'manajer', 'manajer@gmail.com', NULL, 'manajer');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`idlog`);

--
-- Indeks untuk tabel `requestpegawai`
--
ALTER TABLE `requestpegawai`
  ADD PRIMARY KEY (`idrequestpegawai`);

--
-- Indeks untuk tabel `tbalatgudang`
--
ALTER TABLE `tbalatgudang`
  ADD PRIMARY KEY (`id_alat`),
  ADD KEY `nama_alat` (`nama_alat`);

--
-- Indeks untuk tabel `tbalatkeproduksi`
--
ALTER TABLE `tbalatkeproduksi`
  ADD PRIMARY KEY (`id_alatkeproduksi`);

--
-- Indeks untuk tabel `tbalatsuplayer`
--
ALTER TABLE `tbalatsuplayer`
  ADD PRIMARY KEY (`id_alatsup`);

--
-- Indeks untuk tabel `tbbaranggudang`
--
ALTER TABLE `tbbaranggudang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `nama_barang` (`nama_barang`);

--
-- Indeks untuk tabel `tbbarangkeproduksi`
--
ALTER TABLE `tbbarangkeproduksi`
  ADD PRIMARY KEY (`id_barangkeproduksi`),
  ADD KEY `nama_barang` (`nama_barang`,`jumlah`,`tgl_max`);

--
-- Indeks untuk tabel `tbbarangsuplayer`
--
ALTER TABLE `tbbarangsuplayer`
  ADD PRIMARY KEY (`id_barangsup`),
  ADD KEY `nama_barang` (`nama_barang`);

--
-- Indeks untuk tabel `tbbelialat`
--
ALTER TABLE `tbbelialat`
  ADD PRIMARY KEY (`id_belialat`),
  ADD KEY `nama_alat` (`nama_alat`);

--
-- Indeks untuk tabel `tbbelibarang`
--
ALTER TABLE `tbbelibarang`
  ADD PRIMARY KEY (`id_belibarang`),
  ADD KEY `nama_barang` (`nama_barang`);

--
-- Indeks untuk tabel `tbchatpegawai`
--
ALTER TABLE `tbchatpegawai`
  ADD PRIMARY KEY (`id_chatpegawai`);

--
-- Indeks untuk tabel `tbdatasuplayer`
--
ALTER TABLE `tbdatasuplayer`
  ADD PRIMARY KEY (`id_suplayer`);

--
-- Indeks untuk tabel `tblistalat`
--
ALTER TABLE `tblistalat`
  ADD PRIMARY KEY (`id_listalat`),
  ADD KEY `nama_alat` (`nama_alat`);

--
-- Indeks untuk tabel `tblistbarang`
--
ALTER TABLE `tblistbarang`
  ADD PRIMARY KEY (`id_listbarang`),
  ADD KEY `nama_barang` (`nama_barang`),
  ADD KEY `nama_barang_2` (`nama_barang`);

--
-- Indeks untuk tabel `tbrequestalat`
--
ALTER TABLE `tbrequestalat`
  ADD PRIMARY KEY (`id_requestalat`),
  ADD KEY `id_listalat` (`id_listalat`,`nama_alat`),
  ADD KEY `nama_alat` (`nama_alat`);

--
-- Indeks untuk tabel `tbrequestbarang`
--
ALTER TABLE `tbrequestbarang`
  ADD PRIMARY KEY (`id_requestbarang`),
  ADD KEY `nama_barang` (`nama_barang`),
  ADD KEY `id_requestbarang` (`id_requestbarang`,`nama_barang`,`jumlah`,`tgl_max`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `log`
--
ALTER TABLE `log`
  MODIFY `idlog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbalatgudang`
--
ALTER TABLE `tbalatgudang`
  ADD CONSTRAINT `tbalatgudang_ibfk_1` FOREIGN KEY (`nama_alat`) REFERENCES `tblistalat` (`nama_alat`);

--
-- Ketidakleluasaan untuk tabel `tbbaranggudang`
--
ALTER TABLE `tbbaranggudang`
  ADD CONSTRAINT `tbbaranggudang_ibfk_1` FOREIGN KEY (`nama_barang`) REFERENCES `tblistbarang` (`nama_barang`);

--
-- Ketidakleluasaan untuk tabel `tbbarangkeproduksi`
--
ALTER TABLE `tbbarangkeproduksi`
  ADD CONSTRAINT `tbbarangkeproduksi_ibfk_1` FOREIGN KEY (`nama_barang`) REFERENCES `tbrequestbarang` (`nama_barang`);

--
-- Ketidakleluasaan untuk tabel `tbbarangsuplayer`
--
ALTER TABLE `tbbarangsuplayer`
  ADD CONSTRAINT `tbbarangsuplayer_ibfk_1` FOREIGN KEY (`nama_barang`) REFERENCES `tblistbarang` (`nama_barang`);

--
-- Ketidakleluasaan untuk tabel `tbbelibarang`
--
ALTER TABLE `tbbelibarang`
  ADD CONSTRAINT `tbbelibarang_ibfk_1` FOREIGN KEY (`nama_barang`) REFERENCES `tblistbarang` (`nama_barang`);

--
-- Ketidakleluasaan untuk tabel `tbrequestalat`
--
ALTER TABLE `tbrequestalat`
  ADD CONSTRAINT `tbrequestalat_ibfk_1` FOREIGN KEY (`nama_alat`) REFERENCES `tblistalat` (`nama_alat`);

--
-- Ketidakleluasaan untuk tabel `tbrequestbarang`
--
ALTER TABLE `tbrequestbarang`
  ADD CONSTRAINT `tbrequestbarang_ibfk_1` FOREIGN KEY (`nama_barang`) REFERENCES `tblistbarang` (`nama_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
