-- MariaDB dump 10.19  Distrib 10.4.21-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: perpustakaan
-- ------------------------------------------------------
-- Server version	10.4.21-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(100) NOT NULL,
  `username_admin` varchar(100) NOT NULL,
  `password_admin` varchar(100) NOT NULL,
  `email_admin` varchar(100) NOT NULL,
  `foto_admin` text NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=838 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (835,'alvaro siregar saputra','alvaro siregar','alvaro456','saputraalvaro98@gmail.com','alvaro siregar saputra.jpg'),(836,'akbar sahreza utama','akbar utama','sahreza234','utamasahreza45@gmail.com','akbar sahreza utama.jpg'),(837,'Admin','admin','admin','admin@admin.com','admin.jpg');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `buku`
--

DROP TABLE IF EXISTS `buku`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori_buku` int(11) NOT NULL,
  `id_rak_buku` int(11) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `kode_buku` int(11) NOT NULL,
  `penulis_buku` varchar(100) NOT NULL,
  `penerbit_buku` varchar(100) NOT NULL,
  `tahun_buku` int(11) NOT NULL,
  `cover_buku` text NOT NULL,
  `file_buku` text NOT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB AUTO_INCREMENT=20001 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buku`
--

LOCK TABLES `buku` WRITE;
/*!40000 ALTER TABLE `buku` DISABLE KEYS */;
INSERT INTO `buku` VALUES (2222,16789,0,'The grammar of English Grammars',234,'Goold Brown','mantbooks net',1851,'The grammar of English Grammars - Goold Brown.png','The grammar of English Grammars - Goold Brown.pdf'),(3333,16790,33446,'Sistem Informasi Manajemen',235,'Eko ganis Sukoharsono','Surya Pena Gemilang',2008,'Sistem Informasi Manajemen - Eko ganis Sukoharsono.png','Sistem Informasi Manajemen - Eko ganis Sukoharsono.pdf'),(4444,19791,33447,'Pengantar Manajemen ',236,'Priyono','Zifatama Publisher',2007,'Pengantar Manajemen - Priyono.png','Pengantar Manajemen - Priyono.pdf'),(5555,16792,33448,'Arsitektur Nusantara',237,'Komunitas Omah Aksara','Kementrian Pendidikan dan Kebudayaan',2017,'Arsitektur Nusantara - Komunitas Omah Aksara.png','Arsitektur Nusantara - Komunitas Omah Aksara.pdf'),(6666,19793,33449,'Sistem Informasi Desa dan Akses Informasi',238,'Puji Rianto, S.Bayu Wahyono','PR2Media',2017,'Sistem Informasi Desa dan Akses Informasi - Puji Rianto, S.Bayu Wahyono.png','Sistem Informasi Desa dan Akses Informasi - Puji Rianto, S.Bayu Wahyono.pdf'),(7777,16794,33410,'Pemograman Komputer Dasar Dasar Phyton',239,'Ismah,Msi','FIP UMJ',2017,'Pemograman Komputer Dasar Dasar Phyton - Ismah,Msi.png','Pemograman Komputer Dasar Dasar Phyton - Ismah,Msi.pdf'),(8888,16795,33451,'Alice in Wonderland',240,'Lewis Carrol','Macmillan',1865,'Alice in Wonderland - Lewis Carrol.png','Alice in Wonderland - Lewis Carrol.pdf'),(9999,16796,33452,'A Little Princess',241,'Frances Hodgson Burnett','PT Gramedia Pustaka',1903,'A Little Princess - Frances Hodgson Burnett.png','A Little Princess - Frances Hodgson Burnett.pdf'),(10000,16797,33453,'The Story of My Life',242,'Helen Keller','Javanica',2017,'The Story of My Life - Helen Keller.png','The Story of My Life - Helen Keller.pdf'),(20000,16798,33454,'24 Jam Pintar Pemograman Android',243,'Arif Akbarul Huda','Andi Offset',2020,'24 Jam Pintar Pemograman Android - Arif Akbarul Huda.png','24 Jam Pintar Pemograman Android - Arif Akbarul Huda.pdf');
/*!40000 ALTER TABLE `buku` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori_buku`
--

DROP TABLE IF EXISTS `kategori_buku`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori_buku` (
  `id_kategori_buku` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kategori_buku`)
) ENGINE=InnoDB AUTO_INCREMENT=16799 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori_buku`
--

LOCK TABLES `kategori_buku` WRITE;
/*!40000 ALTER TABLE `kategori_buku` DISABLE KEYS */;
INSERT INTO `kategori_buku` VALUES (16789,'Kategori Belajar Grammar'),(16790,'Kategori Belajar Sistem Informasi Manajemen'),(16791,'Kategori Belajar Pengantar Manajemen'),(16792,'Kategori Belajar Arsitektur'),(16793,'Kategori Belajar Informasi Desa Dan Akses Informasi'),(16794,'Kategori Hiburan '),(16795,'Kategori Hiburan 2'),(16796,'Kategori Cerita Hidup'),(16797,'Kategori Belajar Pemograman'),(16798,'Kategori Pemograman Komputer');
/*!40000 ALTER TABLE `kategori_buku` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rak_buku`
--

DROP TABLE IF EXISTS `rak_buku`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rak_buku` (
  `id_rak_buku` int(11) NOT NULL,
  `nama_rak_buku` varchar(100) NOT NULL,
  PRIMARY KEY (`id_rak_buku`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rak_buku`
--

LOCK TABLES `rak_buku` WRITE;
/*!40000 ALTER TABLE `rak_buku` DISABLE KEYS */;
INSERT INTO `rak_buku` VALUES (33445,'rak 1'),(33446,'rak 2'),(33447,'rak 3'),(33448,'rak 4'),(33449,'rak 5'),(33450,'rak 6'),(33451,'rak 7'),(33452,'rak 8 '),(33453,'rak 9'),(33454,'rak 10');
/*!40000 ALTER TABLE `rak_buku` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id_user` int(100) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `alamat_user` text NOT NULL,
  `pilihan` varchar(100) NOT NULL,
  `username_user` varchar(100) NOT NULL,
  `password_user` varchar(100) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `foto_user` text NOT NULL,
  `ktp_user` text DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (789,'rahma syakila putri','Surabaya,jl mangga 2 ','mahasiswa','rahma syakila','syakilala2','syakilarahma4@gmail.com','789-rahma syakila putri.jpg','789-rahma syakila putri.pdf'),(790,'Dian saputri','malang,jl.apel 6','dosen','dian saputri23','saputri890','saputrisian@gmail.com','790-Dian saputri.jpg','790-Dian saputri.pdf'),(791,'Putra Aditya Anggoro','surabaya,jl. semangka 7','mahasiswa','Putra Aditya','Aditya678','anggoroaditya5@gmail.com','791-Putra Aditya Anggoro.jpg','791-Putra Aditya Anggoro.pdf'),(792,'Natasya Virginta Sari','surabaya,jl.melon 4','umum','Natasya Virginta','Virginta67','virgintasari8@gmail.com','792-Natasya Virginta Sari.jpg','792-Natasya Virginta Sari.pdf'),(793,'Novan Agya Putra','surabaya,jl leci 9','dosen','Novan Agya','agya67','agyanovan3@gmail.com','793-Novan Agya Putra.jpg','793-Novan Agya Putra.pdf'),(794,'Bagas Syahputra Reza','malang, jl manggis','umum','Bagas Syahputra5','Syahputra56','syahputrabagas5@gmail.com','794-Bagas Syahputra Reza.jpg','794-Bagas Syahputra Reza.pdf'),(795,'Cinta Feny Kurnia','surabaya,jl. anggur','umum','Cinta Feny','Kurnia88','Kurniafeny77@gmail.com','795-Cinta Feny Kurnia.jpg','795-Cinta Feny Kurnia.pdf'),(796,'Novemberia Anggun Saputri','suarabaya,jl. salak 3','dosen','Novemberia Saputri','saputri889','saputrinovemberia99@gmail.com','796-Novemberia Anggun Saputri.jpg','796-Novemberia Anggun Saputri.pdf'),(797,'Riko Bagus Saputro','surabaya, jl. nanas 9','umum','Riko saputro','saputro009','saputrobagus887@gmail.com','797-Riko Bagus Saputro.jpg','797-Riko Bagus Saputro.pdf'),(798,'Reza Candra laksana','malang, jl. kelapa','mahasiswa','Reza Laksana','Laksana667','laksanacandra556@gmail.com','798-Reza Candra laksana.jpg','798-Reza Candra laksana.pdf');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-29 22:29:28
