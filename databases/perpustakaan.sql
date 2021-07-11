-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 03:10 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `username_admin` varchar(100) NOT NULL,
  `password_admin` varchar(100) NOT NULL,
  `email_admin` varchar(100) NOT NULL,
  `foto_admin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username_admin`, `password_admin`, `email_admin`, `foto_admin`) VALUES
(835, 'alvaro siregar saputra', 'alvaro siregar', 'alvaro456', 'saputraalvaro98@gmail.com', 'alvaro siregar saputra.jpg'),
(836, 'akbar sahreza utama', 'akbar utama', 'sahreza234', 'utamasahreza45@gmail.com', 'akbar sahreza utama.jpg'),
(837, 'Admin', 'admin', 'admin', 'admin@admin.com', 'admin.jpg');

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
(2222, 16789, 33445, 'The grammar of English Grammars', 234, 'Goold Brown', 'mantbooks net', 1851, 'The grammar of English Grammars - Goold Brown.jpg', 'The grammar of English Grammars - Goold Brown.pdf'),
(3333, 16790, 33446, 'Sistem Informasi Manajemen', 235, 'Eko ganis Sukoharsono', 'Surya Pena Gemilang', 2008, 'Sistem Informasi Manajemen - Eko ganis Sukoharsono.jpg', 'Sistem Informasi Manajemen - Eko ganis Sukoharsono.pdf'),
(4444, 19791, 33447, 'Pengantar Manajemen ', 236, 'Priyono', 'Zifatama Publisher', 2007, 'Pengantar Manajemen - Priyono.jpg', 'Pengantar Manajemen - Priyono.pdf'),
(5555, 16792, 33448, 'Arsitektur Nusantara', 237, 'Komunitas Omah Aksara', 'Kementrian Pendidikan dan Kebudayaan', 2017, 'Arsitektur Nusantara - Komunitas Omah Aksara.jpg', 'Arsitektur Nusantara - Komunitas Omah Aksara.pdf'),
(6666, 19793, 33449, 'Sistem Informasi Desa dan Akses Informasi', 238, 'Puji Rianto, S.Bayu Wahyono', 'PR2Media', 2017, 'Sistem Informasi Desa dan Akses Informasi - Puji Rianto, S.Bayu Wahyono.jpg', 'Sistem Informasi Desa dan Akses Informasi - Puji Rianto, S.Bayu Wahyono.pdf'),
(7777, 16794, 33410, 'Pemograman Komputer Dasar Dasar Phyton', 239, 'Ismah,Msi', 'FIP UMJ', 2017, 'Pemograman Komputer Dasar Dasar Phyton - Ismah,Msi.jpg', 'Pemograman Komputer Dasar Dasar Phyton - Ismah,Msi.pdf'),
(8888, 16795, 33451, 'Alice in Wonderland', 240, 'Lewis Carrol', 'Macmillan', 1865, 'Alice in Wonderland - Lewis Carrol.jpg', 'Alice in Wonderland - Lewis Carrol.pdf'),
(9999, 16796, 33452, 'A Little Princess', 241, 'Frances Hodgson Burnett', 'PT Gramedia Pustaka', 1903, 'A Little Princess - Frances Hodgson Burnett.jpg', 'A Little Princess - Frances Hodgson Burnett.pdf'),
(10000, 16797, 33453, 'The Story of My Life', 242, 'Helen Keller', 'Javanica', 2017, 'The Story of My Life - Helen Keller.jpg', 'The Story of My Life - Helen Keller.pdf'),
(20000, 16798, 33454, '24 Jam Pintar Pemograman Android', 243, 'Arif Akbarul Huda', 'Andi Offset', 2020, '24 Jam Pintar Pemograman Android - Arif Akbarul Huda.jpg', '24 Jam Pintar Pemograman Android - Arif Akbarul Huda.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_buku`
--

CREATE TABLE `kategori_buku` (
  `id_kategori_buku` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_buku`
--

INSERT INTO `kategori_buku` (`id_kategori_buku`, `nama_kategori`) VALUES
(16789, 'Kategori Belajar Grammar'),
(16790, 'Kategori Belajar Sistem Informasi Manajemen'),
(16791, 'Kategori Belajar Pengantar Manajemen'),
(16792, 'Kategori Belajar Arsitektur'),
(16793, 'Kategori Belajar Informasi Desa Dan Akses Informasi'),
(16794, 'Kategori Hiburan '),
(16795, 'Kategori Hiburan 2'),
(16796, 'Kategori Cerita Hidup'),
(16797, 'Kategori Belajar Pemograman'),
(16798, 'Kategori Pemograman Komputer');

-- --------------------------------------------------------

--
-- Table structure for table `rak_buku`
--

CREATE TABLE `rak_buku` (
  `id_rak_buku` int(11) NOT NULL,
  `nama_rak_buku` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rak_buku`
--

INSERT INTO `rak_buku` (`id_rak_buku`, `nama_rak_buku`) VALUES
(33445, 'rak 1'),
(33446, 'rak 2'),
(33447, 'rak 3'),
(33448, 'rak 4'),
(33449, 'rak 5'),
(33450, 'rak 6'),
(33451, 'rak 7'),
(33452, 'rak 8 '),
(33453, 'rak 9'),
(33454, 'rak 10');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(100) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `alamat_user` text NOT NULL,
  `pilihan` varchar(100) NOT NULL,
  `username_user` varchar(100) NOT NULL,
  `password_user` varchar(100) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `foto_user` text NOT NULL,
  `ktp_user` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `alamat_user`, `pilihan`, `username_user`, `password_user`, `email_user`, `foto_user`, `ktp_user`) VALUES
(789, 'rahma syakila putri', 'Surabaya,jl mangga 2 ', 'mahasiswa', 'rahma syakila', 'syakilala2', 'syakilarahma4@gmail.com', '789-rahma syakila putri.jpg', '789-rahma syakila putri.pdf'),
(790, 'Dian saputri', 'malang,jl.apel 6', 'dosen', 'dian saputri23', 'saputri890', 'saputrisian@gmail.com', '790-Dian saputri.jpg', '790-Dian saputri.pdf'),
(791, 'Putra Aditya Anggoro', 'surabaya,jl. semangka 7', 'mahasiswa', 'Putra Aditya', 'Aditya678', 'anggoroaditya5@gmail.com', '791-Putra Aditya Anggoro.jpg', '791-Putra Aditya Anggoro.pdf'),
(792, 'Natasya Virginta Sari', 'surabaya,jl.melon 4', 'umum', 'Natasya Virginta', 'Virginta67', 'virgintasari8@gmail.com', '792-Natasya Virginta Sari.jpg', '792-Natasya Virginta Sari.pdf'),
(793, 'Novan Agya Putra', 'surabaya,jl leci 9', 'dosen', 'Novan Agya', 'agya67', 'agyanovan3@gmail.com', '793-Novan Agya Putra.jpg', '793-Novan Agya Putra.pdf'),
(794, 'Bagas Syahputra Reza', 'malang, jl manggis', 'umum', 'Bagas Syahputra5', 'Syahputra56', 'syahputrabagas5@gmail.com', '794-Bagas Syahputra Reza.jpg', '794-Bagas Syahputra Reza.pdf'),
(795, 'Cinta Feny Kurnia', 'surabaya,jl. anggur', 'umum', 'Cinta Feny', 'Kurnia88', 'Kurniafeny77@gmail.com', '795-Cinta Feny Kurnia.jpg', '795-Cinta Feny Kurnia.pdf'),
(796, 'Novemberia Anggun Saputri', 'suarabaya,jl. salak 3', 'dosen', 'Novemberia Saputri', 'saputri889', 'saputrinovemberia99@gmail.com', '796-Novemberia Anggun Saputri.jpg', '796-Novemberia Anggun Saputri.pdf'),
(797, 'Riko Bagus Saputro', 'surabaya, jl. nanas 9', 'umum', 'Riko saputro', 'saputro009', 'saputrobagus887@gmail.com', '797-Riko Bagus Saputro.jpg', '797-Riko Bagus Saputro.pdf'),
(798, 'Reza Candra laksana', 'malang, jl. kelapa', 'mahasiswa', 'Reza Laksana', 'Laksana667', 'laksanacandra556@gmail.com', '798-Reza Candra laksana.jpg', '798-Reza Candra laksana.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `kategori_buku`
--
ALTER TABLE `kategori_buku`
  ADD PRIMARY KEY (`id_kategori_buku`);

--
-- Indexes for table `rak_buku`
--
ALTER TABLE `rak_buku`
  ADD PRIMARY KEY (`id_rak_buku`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=838;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20001;

--
-- AUTO_INCREMENT for table `kategori_buku`
--
ALTER TABLE `kategori_buku`
  MODIFY `id_kategori_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16799;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
