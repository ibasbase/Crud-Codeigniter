-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2017 at 07:40 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_paf_distro`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `id_jenis_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `harga_beli` double DEFAULT NULL,
  `harga_jual` double DEFAULT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `id_jenis_barang`, `nama_barang`, `stok`, `harga_beli`, `harga_jual`) VALUES
(3, 2, 'kemeja', 20, 150000, 160000),
(4, 23, 'polo', 12, 80000, 90000),
(5, 2, 'sempak', 12, 100000, 120000),
(6, 2, '', 0, 0, 0),
(7, 0, '', 0, 0, 0),
(8, 0, '', 0, 0, 0),
(9, 0, 'bfdsgfd', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_barang`
--

CREATE TABLE IF NOT EXISTS `jenis_barang` (
  `id_jenis_barang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jenis` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_jenis_barang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `jenis_barang`
--

INSERT INTO `jenis_barang` (`id_jenis_barang`, `nama_jenis`) VALUES
(2, 'kancut'),
(5, 'panjang'),
(6, 'joger'),
(7, 'sepatu');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `id_supplier` int(11) NOT NULL AUTO_INCREMENT,
  `nama_supplier` varchar(50) DEFAULT NULL,
  `nama_barang` varchar(30) DEFAULT NULL,
  `no_telp` varchar(13) DEFAULT NULL,
  `alamat` text,
  PRIMARY KEY (`id_supplier`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `nama_barang`, `no_telp`, `alamat`) VALUES
(1, 'PT. Hofz Indonesia', 'Front Axle Assy', '08971678142', 'Jl. Flores III Blok C3/B3'),
(2, 'PT. Sekawan Putra Makmur', 'Transfer Assy', '08976512312', 'Jababeka');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(50) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `email`, `level`) VALUES
(1, 'ibas', 'ibasbase', '4f0c6beb94590174d66943a5fdc4840c', 'ibasbase@gmail.com', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
