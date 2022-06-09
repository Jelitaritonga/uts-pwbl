-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 14, 2022 at 06:03 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rentalmobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbadmin`
--

DROP TABLE IF EXISTS `tbadmin`;
CREATE TABLE IF NOT EXISTS `tbadmin` (
  `kd_admin` varchar(10) NOT NULL,
  `nama_admin` varchar(20) NOT NULL,
  `tlp_admin` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(300) NOT NULL,
  `level` enum('admin','pemilik') NOT NULL,
  PRIMARY KEY (`kd_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbadmin`
--

INSERT INTO `tbadmin` (`kd_admin`, `nama_admin`, `tlp_admin`, `username`, `password`, `level`) VALUES
('1', 'jelita ritonga', '082274891806', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
('2', 'riski siregar', '08223753257', 'pemilik', '58399557dae3c60e23c78606771dfa3d', 'pemilik');

-- --------------------------------------------------------

--
-- Table structure for table `tbcostumer`
--

DROP TABLE IF EXISTS `tbcostumer`;
CREATE TABLE IF NOT EXISTS `tbcostumer` (
  `kd_cs` int NOT NULL AUTO_INCREMENT,
  `nama_cs` varchar(50) NOT NULL,
  `kelamin_cs` varchar(20) NOT NULL,
  `alamat_cs` varchar(20) NOT NULL,
  `tlp_cs` varchar(20) NOT NULL,
  `username_cs` varchar(20) NOT NULL,
  `password_cs` varchar(300) NOT NULL,
  `level_cs` enum('user') NOT NULL,
  PRIMARY KEY (`kd_cs`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbcostumer`
--

INSERT INTO `tbcostumer` (`kd_cs`, `nama_cs`, `kelamin_cs`, `alamat_cs`, `tlp_cs`, `username_cs`, `password_cs`, `level_cs`) VALUES
(5, 'Ezra Yoanda Nicolas', 'Laki-Laki', 'Jl. Sederhana Dusun ', '082272456718', 'ezrayoandanicolas', '25d55ad283aa400af464c76d713c07ad', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbdetailsewa`
--

DROP TABLE IF EXISTS `tbdetailsewa`;
CREATE TABLE IF NOT EXISTS `tbdetailsewa` (
  `kd_detail` varchar(20) NOT NULL,
  `kd_cs` varchar(20) NOT NULL,
  `kd_sewa` varchar(20) NOT NULL,
  `kd_sopir` varchar(20) NOT NULL,
  `total_harga` varchar(20) NOT NULL,
  `ket` varchar(20) NOT NULL,
  PRIMARY KEY (`kd_detail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbdetailsewa`
--

INSERT INTO `tbdetailsewa` (`kd_detail`, `kd_cs`, `kd_sewa`, `kd_sopir`, `total_harga`, `ket`) VALUES
('D01', '5', 'W04', 'S01', '1900000', 'Belum di Konfirmasi');

-- --------------------------------------------------------

--
-- Table structure for table `tbmerk`
--

DROP TABLE IF EXISTS `tbmerk`;
CREATE TABLE IF NOT EXISTS `tbmerk` (
  `kd_merk` varchar(10) NOT NULL,
  `merk_mobil` varchar(20) NOT NULL,
  `jenis_mobil` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbmerk`
--

INSERT INTO `tbmerk` (`kd_merk`, `merk_mobil`, `jenis_mobil`) VALUES
('K01', 'Toyota', 'Avanza'),
('K02', 'Honda', 'CRV'),
('K03', 'Honda', 'HRV'),
('K04', 'Toyota', 'Alphard'),
('K05', 'Toyota', 'Fortuner'),
('K06', 'Toyota', 'Rush'),
('K07', 'honda', 'hrv'),
('K08', 'Daihatsu', 'Xenia');

-- --------------------------------------------------------

--
-- Table structure for table `tbmobil`
--

DROP TABLE IF EXISTS `tbmobil`;
CREATE TABLE IF NOT EXISTS `tbmobil` (
  `no_polisi` varchar(20) NOT NULL,
  `kd_merk` varchar(10) NOT NULL,
  `foto_mobil` varchar(300) NOT NULL,
  `tarif_mobil` varchar(20) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`no_polisi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbmobil`
--

INSERT INTO `tbmobil` (`no_polisi`, `kd_merk`, `foto_mobil`, `tarif_mobil`, `keterangan`, `status`) VALUES
('F 12345 OP', 'K01', '2021-02-17-toyota avanza.jpg', '300000', 'Bagus', 'Tidak Tersedia'),
('F 2300 MN', 'K06', '2021-02-17-toyota rush.jpg', '500000', 'Bagus', 'Tersedia'),
('F 7543 LA', 'K04', '2021-02-17-toyota alphard.jpg', '700000', 'Bagus', 'Tidak Tersedia'),
('F 7591 AB', 'K05', '2021-02-17-toyota fortuner.jpg', '550000', 'Bagus', 'Tidak Tersedia'),
('F 7629 KI', 'K02', '2021-02-17-honda crv.jpg', '450000', 'Bagus', 'Tidak Tersedia'),
('F 9021 BI', 'K03', '2021-02-17-honda hrv.jpg', '500000', 'Bagus', 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `tbsewa`
--

DROP TABLE IF EXISTS `tbsewa`;
CREATE TABLE IF NOT EXISTS `tbsewa` (
  `kd_sewa` varchar(10) NOT NULL,
  `no_polisi` varchar(10) NOT NULL,
  `tgl_sewa` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `total_sewa` varchar(20) NOT NULL,
  PRIMARY KEY (`kd_sewa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbsewa`
--

INSERT INTO `tbsewa` (`kd_sewa`, `no_polisi`, `tgl_sewa`, `tgl_kembali`, `total_sewa`) VALUES
('W01', 'F 7543 LA', '2022-01-15', '2022-01-17', '1400000');

-- --------------------------------------------------------

--
-- Table structure for table `tbsopir`
--

DROP TABLE IF EXISTS `tbsopir`;
CREATE TABLE IF NOT EXISTS `tbsopir` (
  `kd_sopir` varchar(20) NOT NULL,
  `nama_sopir` varchar(20) NOT NULL,
  `kelamin_sopir` varchar(20) NOT NULL,
  `umur_sopir` varchar(10) NOT NULL,
  `tlp_sopir` varchar(30) NOT NULL,
  `alamat_sopir` varchar(100) NOT NULL,
  `tarif_sopir` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbsopir`
--

INSERT INTO `tbsopir` (`kd_sopir`, `nama_sopir`, `kelamin_sopir`, `umur_sopir`, `tlp_sopir`, `alamat_sopir`, `tarif_sopir`) VALUES
('S01', 'budiman batubara', 'laki-laki', '24', '081234543221', 'sioirok', '500000'),
('S02', 'robet Harahap', 'Perempuan', '22', '085363863958', 'gunung tua', '1000000'),
('S03', 'niko', 'laki-laki', '30', '085363863928', 'sidimpuan', '800000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
