-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2016 at 04:52 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perak`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `level` varchar(10) NOT NULL DEFAULT 'admin',
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `level`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'rektor', 'rektor', 'rektor'),
(3, 'dekan', 'dekan', 'dekan'),
(4, 'kaprodi', 'kaprodi', 'kaprodi');

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE `proposal` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `keterangan` varchar(255) NOT NULL,
  `dokumen` text NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'belum diverifikasi'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proposal`
--

INSERT INTO `proposal` (`id`, `nama`, `tanggal`, `keterangan`, `dokumen`, `status`) VALUES
(15, 'coba', '2016-11-19 19:46:53', 'cobalgi', 'Capture5.PNG', 'diverifikasi rektor'),
(16, 'Proposal 1', '2016-11-24 03:40:52', 'Proposal kegiatan', 'Pelatihan_Matlab_AI_2016_-_Modul_Dasar.pdf', 'ditolak'),
(17, 'acil', '2016-11-25 10:03:49', 'acil', 'Pelatihan_Matlab_AI_2016_-_Modul_Dasar1.pdf', 'ditolak'),
(18, 'dummy', '2016-12-08 14:05:21', 'dummy', '235689_15149_Kalender_Pendidikan_Universitas_Telkom_2017.pdf', 'diverifikasi dekan'),
(19, 'nama proposal', '2016-12-09 07:43:38', 'type proposal', '1301140424_Registrasi___Telkom_University.pdf', 'belum diverifikasi'),
(20, 'nama proposal', '2016-12-09 07:44:01', 'type proposal', '1301140424_Registrasi___Telkom_University1.pdf', 'belum diverifikasi'),
(21, 'nama proposal', '2016-12-09 07:44:15', 'type proposal', '1301140424_Registrasi___Telkom_University2.pdf', 'belum diverifikasi'),
(22, 'nama proposal', '2016-12-09 07:45:06', 'type proposal', '1301140424_Registrasi___Telkom_University3.pdf', 'belum diverifikasi'),
(23, 'abu', '2016-12-09 08:27:10', 'abubuau', '235689_15149_Kalender_Pendidikan_Universitas_Telkom_20171.pdf', 'belum diverifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_pembelian`
--

CREATE TABLE `transaksi_pembelian` (
  `id` int(3) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nama_barang` varchar(255) NOT NULL,
  `banyak` int(100) NOT NULL,
  `harga` int(255) NOT NULL,
  `total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_pembelian`
--

INSERT INTO `transaksi_pembelian` (`id`, `nama`, `tanggal`, `nama_barang`, `banyak`, `harga`, `total`) VALUES
(7, 'dummy1', '2016-12-10 09:00:22', 'dummy1', 12, 100000, 1200000),
(8, 'dummy 2', '2016-12-10 09:00:34', 'dummy 2', 100, 10000000, 1000000000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_penerimaan`
--

CREATE TABLE `transaksi_penerimaan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nominal` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_penerimaan`
--

INSERT INTO `transaksi_penerimaan` (`id`, `nama`, `nominal`, `detail`, `tanggal`) VALUES
(1, '0', 'coba nominal', 'halo detail', '2016-12-07 12:18:38'),
(2, '0', 'nominal', 'detail', '2016-12-07 12:19:13'),
(3, 'nama', 'nominal', 'detail', '2016-12-07 12:19:46'),
(4, 'penerimaan', '1212', '1212asd', '2016-12-08 13:36:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi_pembelian`
--
ALTER TABLE `transaksi_pembelian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi_penerimaan`
--
ALTER TABLE `transaksi_penerimaan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `transaksi_pembelian`
--
ALTER TABLE `transaksi_pembelian`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `transaksi_penerimaan`
--
ALTER TABLE `transaksi_penerimaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
