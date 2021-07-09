-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2021 at 06:31 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `id_kategori_buku` int(11) NOT NULL,
  `id_rak_buku` int(11) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `kode_buku` int(11) NOT NULL,
  `penulis_buku` varchar(100) NOT NULL,
  `penerbit_buku` varchar(100) NOT NULL,
  `tahun_buku` int(11) NOT NULL,
  `cover_buku` text NOT NULL,
  `file_buku` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `id_kategori_buku`, `id_rak_buku`, `nama_buku`, `kode_buku`, `penulis_buku`, `penerbit_buku`, `tahun_buku`, `cover_buku`, `file_buku`) VALUES
(2222, 16789, 33445, 'The grammar of English Grammars', 234, 'Goold Brown', 'mantbooks net', 1851, 'cover.jpg', 'file.pdf'),
(3333, 16790, 33446, 'Sistem Informasi Manajemen', 235, 'Eko ganis Sukoharsono', 'Surya Pena Gemilang', 2008, 'cover.jpg', 'file.pdf'),
(4444, 19791, 33447, 'Pengantar Manajemen ', 236, 'Priyono', 'Zifatama Publisher', 2007, 'cover.jpg', 'file.pdf'),
(5555, 16792, 33448, 'Arsitektur Nusantara', 237, 'Komunitas Omah Aksara', 'Kementrian Pendidikan dan Kebudayaan', 2017, 'cover.jpg', 'file.pdf'),
(6666, 19793, 33449, 'Sistem Informasi Desa dan Akses Informasi', 238, 'Puji Rianto, S.Bayu Wahyono', 'PR2Media', 2017, 'cover.jpg', 'file.pdf'),
(7777, 16794, 33410, 'Pemograman Komputer Dasar Dasar Phyton', 239, 'Ismah,Msi', 'FIP UMJ', 2017, 'cover.jpg', 'file.pdf'),
(8888, 16795, 33451, 'Alice in Wonderland', 240, 'Lewis Carrol', 'Macmillan', 1865, 'cover.jpg', 'file.pdf'),
(9999, 16796, 33452, 'A Little Princess', 241, 'Frances Hodgson Burnett', 'PT Gramedia Pustaka', 1903, 'cover.jpg', 'file.pdf'),
(10000, 16797, 33453, 'The Story of My Life', 242, 'Helen Keller', 'Javanica', 2017, 'cover.jpg', 'file.pdf'),
(20000, 16798, 33454, '24 Jam Pintar Pemograman Android', 243, 'Arif Akbarul Huda', 'Andi Offset', 2020, 'cover.jpg', 'file.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20001;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
