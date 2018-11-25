-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2018 at 06:01 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nyervisga`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_elektronik`
--

CREATE TABLE `data_elektronik` (
  `id_elektronik` varchar(6) NOT NULL,
  `jenis_elektronik` varchar(30) NOT NULL,
  `nama_elektronik` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_elektronik`
--

INSERT INTO `data_elektronik` (`id_elektronik`, `jenis_elektronik`, `nama_elektronik`) VALUES
('1', 'HP', 'Smartphone'),
('2', 'Komputer', 'PC'),
('3', 'Komputer', 'Laptop');

-- --------------------------------------------------------

--
-- Table structure for table `kurir`
--

CREATE TABLE `kurir` (
  `id_kurir` int(6) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` text,
  `kode_pos` varchar(10) DEFAULT NULL,
  `no_hp` varchar(13) DEFAULT NULL,
  `latitude` text,
  `longtitude` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kurir`
--

INSERT INTO `kurir` (`id_kurir`, `nama`, `alamat`, `kode_pos`, `no_hp`, `latitude`, `longtitude`, `created_at`, `updated_at`) VALUES
(123, 'Ari', NULL, '75124', NULL, NULL, NULL, '2018-11-24 17:37:01', '0000-00-00 00:00:00'),
(12313, 'Hendra', NULL, '75243', NULL, NULL, NULL, '2018-11-24 18:30:25', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kurir_akun`
--

CREATE TABLE `kurir_akun` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_kurir` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_cancel`
--

CREATE TABLE `order_cancel` (
  `id_order_calcel` int(11) NOT NULL,
  `id_detail_order` int(11) NOT NULL DEFAULT '0',
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_deliver`
--

CREATE TABLE `order_deliver` (
  `id_delivery` int(11) NOT NULL,
  `id_order_proses` int(11) NOT NULL,
  `id_kurir` int(6) NOT NULL,
  `tanggal_diantar` datetime DEFAULT NULL,
  `tanggal_sampai` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_deliver_alamat`
--

CREATE TABLE `order_deliver_alamat` (
  `id_order_deliver_alamat` int(11) NOT NULL,
  `id_deliver` int(11) NOT NULL DEFAULT '0',
  `latitude` text NOT NULL,
  `longtitude` text NOT NULL,
  `alamat_lengkap` text NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `catatan` text NOT NULL,
  `no_hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_finis`
--

CREATE TABLE `order_finis` (
  `id_order_finis` int(11) NOT NULL,
  `id_deliver` int(6) NOT NULL,
  `tanggal_selesai` datetime DEFAULT NULL,
  `nama_penerima` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_finis_rumah`
--

CREATE TABLE `order_finis_rumah` (
  `id_finis_rumah` int(11) NOT NULL,
  `id_proses_rumah` int(11) NOT NULL,
  `tanggal_selesai` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_pickup`
--

CREATE TABLE `order_pickup` (
  `id_pickup` int(11) NOT NULL,
  `id_detail_elektronik` int(11) DEFAULT NULL,
  `nama_pemberi` varchar(50) DEFAULT NULL,
  `kelengkapan` text,
  `tanggal_terima` datetime DEFAULT NULL,
  `tanggal_sampai` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_proses`
--

CREATE TABLE `order_proses` (
  `id_order_proses` int(11) NOT NULL,
  `id_pickup` int(11) DEFAULT NULL,
  `biaya` varchar(50) DEFAULT NULL,
  `kelengkapan` text,
  `tanggal_terima` datetime DEFAULT NULL,
  `tanggal_selesai` datetime DEFAULT NULL,
  `keterangan` enum('Selesai','Belum') DEFAULT 'Belum',
  `konfirmasi_deliver` enum('Jemput','Tidak Ada') DEFAULT 'Tidak Ada'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_proses_rumah`
--

CREATE TABLE `order_proses_rumah` (
  `id_proses_rumah` int(11) NOT NULL,
  `id_detail_elektronik` int(11) NOT NULL,
  `biaya` varchar(50) DEFAULT NULL,
  `tanggal_terima` datetime DEFAULT NULL,
  `tanggal_selesai` datetime DEFAULT NULL,
  `keterangan` enum('Selesai','Belum') DEFAULT 'Belum'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_servis`
--

CREATE TABLE `order_servis` (
  `id_order` int(11) NOT NULL,
  `id_user` int(5) NOT NULL,
  `date` date NOT NULL,
  `id_kurir` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_servis`
--

INSERT INTO `order_servis` (`id_order`, `id_user`, `date`, `id_kurir`) VALUES
(84, 12, '2018-11-25', 12313),
(85, 12, '2018-11-25', 12313),
(86, 12, '2018-11-25', 12313),
(87, 12, '2018-11-25', 12313),
(88, 12, '2018-11-25', 12313),
(89, 12, '2018-11-25', 12313),
(90, 12, '2018-11-25', 12313),
(91, 12, '2018-11-25', 12313),
(92, 12, '2018-11-25', 12313),
(93, 12, '2018-11-25', 12313),
(94, 12, '2018-11-25', 12313),
(95, 12, '2018-11-25', 12313),
(96, 12, '2018-11-25', 12313),
(97, 12, '2018-11-25', 123),
(98, 12, '2018-11-25', 12313),
(99, 12, '2018-11-25', 12313),
(100, 12, '2018-11-25', 12313),
(101, 12, '2018-11-25', 123);

--
-- Triggers `order_servis`
--
DELIMITER $$
CREATE TRIGGER `order_servis_after_insert` AFTER INSERT ON `order_servis` FOR EACH ROW BEGIN
INSERT INTO order_servis_address
SET id_order = NEW.id_order;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `order_servis_address`
--

CREATE TABLE `order_servis_address` (
  `id_address` int(6) NOT NULL,
  `id_order` int(11) DEFAULT NULL,
  `latitude` text,
  `longtitude` text,
  `alamat_lengkap` text,
  `kode_pos` varchar(10) DEFAULT NULL,
  `catatan` text,
  `no_hp` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_servis_address`
--

INSERT INTO `order_servis_address` (`id_address`, `id_order`, `latitude`, `longtitude`, `alamat_lengkap`, `kode_pos`, `catatan`, `no_hp`) VALUES
(70, 84, '-0.4853129657836679', '117.12695583345135', 'Jl. P Antasari No.50A, Air Putih, Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75126, Indonesia', '75126', 'awd', '08123'),
(71, 85, '-0.486085414224893', '117.12666414322098', 'Jl. P Antasari No.68b, Air Putih, Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75243, Indonesia', '75243', 'awd', '08123'),
(72, 86, '-0.486085414224893', '117.12666414322098', 'Jl. P Antasari No.68b, Air Putih, Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75243, Indonesia', '75243', 'awd', '08123'),
(73, 87, '-0.48544170719666024', '117.12692163528641', 'Jl. P Antasari No.80, Air Putih, Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75243, Indonesia', '75243', 'awd', '08123'),
(74, 88, NULL, NULL, NULL, NULL, NULL, NULL),
(75, 89, NULL, NULL, NULL, NULL, NULL, NULL),
(76, 90, '-0.4828668784718033', '117.1265783125325', 'Jl. Pangeran Suryanata No.96, Air Putih, Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75243, Indonesia', '75243', 'awd', '08123'),
(77, 91, NULL, NULL, NULL, NULL, NULL, NULL),
(78, 92, '-0.4828668784718033', '117.1265783125325', 'Jl. Pangeran Suryanata No.96, Air Putih, Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75243, Indonesia', '75243', 'awd', '08123'),
(79, 93, NULL, NULL, NULL, NULL, NULL, NULL),
(80, 94, '-0.4828668784718033', '117.1265783125325', 'Jl. Pangeran Suryanata No.96, Air Putih, Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75243, Indonesia', '75243', 'awd', '08123'),
(81, 95, '-0.4847550862990141', '117.12700746597488', 'Jl. Ir. H. Juanda No.89, Air Putih, Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75124, Indonesia', '75124', 'awd', '08123'),
(82, 96, '-0.4853558795882743', '117.12636373581131', 'Jl. P Antasari No.57B, Air Putih, Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75243, Indonesia', '75243', 'awd', '08123'),
(83, 97, '-0.48501256914378954', '117.12670705856522', 'Jl. P Antasari No.50, Air Putih, Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75124, Indonesia', '75124', 'awd', '08123'),
(84, 98, '-0.48599958662467474', '117.12696455063065', 'Jl. Pangeran Antasari Gg. H Kurdi No.66, Air Putih, Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75243, Indonesia', '75243', 'awd', '08123'),
(85, 99, '-0.48599958662467474', '117.12696455063065', 'Jl. Pangeran Antasari Gg. H Kurdi No.66, Air Putih, Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75243, Indonesia', '75243', 'awd', '08123'),
(86, 100, '-0.48599958662467474', '117.12696455063065', 'Jl. Pangeran Antasari Gg. H Kurdi No.66, Air Putih, Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75243, Indonesia', '75243', 'awd', '08123'),
(87, 101, '-0.48550397344505625', '117.12712097154497', 'JL. P.Antasari, Rt. 03, Teluk Lerong Ulu Sungai Kunjang, Air Putih, Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75243, Indonesia', '75124', 'awd', '08123');

-- --------------------------------------------------------

--
-- Table structure for table `order_servis_detail_elektronik`
--

CREATE TABLE `order_servis_detail_elektronik` (
  `id_detail_order` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_elektronik` varchar(6) NOT NULL,
  `merk` varchar(50) DEFAULT NULL,
  `no_seri` varchar(50) DEFAULT NULL,
  `kerusakan` text,
  `penyebab` text,
  `perkiraan biaya` varchar(50) DEFAULT NULL,
  `pengerjaan` enum('Di Rumah','Di Bawa') DEFAULT 'Di Bawa',
  `status` enum('Belum','Selesai') DEFAULT 'Belum',
  `cancel_servis` enum('Tidak','Ya') DEFAULT 'Tidak',
  `id_teknisi` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teknisi`
--

CREATE TABLE `teknisi` (
  `id_teknisi` int(11) NOT NULL,
  `nama_teknisi` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `latitude` text NOT NULL,
  `longtitude` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teknisi_akun`
--

CREATE TABLE `teknisi_akun` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_teknisi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teknisi_detail_servis`
--

CREATE TABLE `teknisi_detail_servis` (
  `id` int(11) NOT NULL,
  `id_teknisi` int(11) NOT NULL,
  `id_elektronik` varchar(6) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nama_depan` varchar(50) DEFAULT NULL,
  `nama_belakang` varchar(50) DEFAULT NULL,
  `no_hp` varchar(13) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `alamat` text,
  `kode_pos` varchar(7) DEFAULT NULL,
  `photo_profile` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_depan`, `nama_belakang`, `no_hp`, `email`, `alamat`, `kode_pos`, `photo_profile`, `created_at`, `updated_at`) VALUES
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-24 15:57:27', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_akun`
--

CREATE TABLE `user_akun` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_akun`
--

INSERT INTO `user_akun` (`username`, `password`, `id_user`) VALUES
('eko', 'eko', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `data_elektronik`
--
ALTER TABLE `data_elektronik`
  ADD PRIMARY KEY (`id_elektronik`);

--
-- Indexes for table `kurir`
--
ALTER TABLE `kurir`
  ADD PRIMARY KEY (`id_kurir`);

--
-- Indexes for table `kurir_akun`
--
ALTER TABLE `kurir_akun`
  ADD PRIMARY KEY (`username`),
  ADD KEY `FK_kurir_akun_kurir` (`id_kurir`);

--
-- Indexes for table `order_cancel`
--
ALTER TABLE `order_cancel`
  ADD PRIMARY KEY (`id_order_calcel`),
  ADD KEY `FK_order_cancel_order_servis_detail_elektronik` (`id_detail_order`);

--
-- Indexes for table `order_deliver`
--
ALTER TABLE `order_deliver`
  ADD PRIMARY KEY (`id_delivery`),
  ADD KEY `FK_order_deliver_order_proses` (`id_order_proses`),
  ADD KEY `FK_order_deliver_kurir` (`id_kurir`);

--
-- Indexes for table `order_deliver_alamat`
--
ALTER TABLE `order_deliver_alamat`
  ADD PRIMARY KEY (`id_order_deliver_alamat`),
  ADD KEY `FK_order_deliver_alamat_order_deliver` (`id_deliver`);

--
-- Indexes for table `order_finis`
--
ALTER TABLE `order_finis`
  ADD PRIMARY KEY (`id_order_finis`),
  ADD KEY `FK_order_finis_order_deliver` (`id_deliver`);

--
-- Indexes for table `order_finis_rumah`
--
ALTER TABLE `order_finis_rumah`
  ADD PRIMARY KEY (`id_finis_rumah`),
  ADD KEY `FK_order_finis_rumah_order_proses_rumah` (`id_proses_rumah`);

--
-- Indexes for table `order_pickup`
--
ALTER TABLE `order_pickup`
  ADD PRIMARY KEY (`id_pickup`),
  ADD KEY `FK_order_pickup_order_servis_detail_elektronik` (`id_detail_elektronik`);

--
-- Indexes for table `order_proses`
--
ALTER TABLE `order_proses`
  ADD PRIMARY KEY (`id_order_proses`),
  ADD KEY `FK_order_proses_order_pickup` (`id_pickup`);

--
-- Indexes for table `order_proses_rumah`
--
ALTER TABLE `order_proses_rumah`
  ADD PRIMARY KEY (`id_proses_rumah`),
  ADD KEY `FK_order_proses_rumah_order_servis_detail_elektronik` (`id_detail_elektronik`);

--
-- Indexes for table `order_servis`
--
ALTER TABLE `order_servis`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `FK_order_servis_user` (`id_user`),
  ADD KEY `FK_order_servis_kurir` (`id_kurir`);

--
-- Indexes for table `order_servis_address`
--
ALTER TABLE `order_servis_address`
  ADD PRIMARY KEY (`id_address`),
  ADD KEY `FK_order_servis_address_order_servis` (`id_order`);

--
-- Indexes for table `order_servis_detail_elektronik`
--
ALTER TABLE `order_servis_detail_elektronik`
  ADD PRIMARY KEY (`id_detail_order`),
  ADD KEY `FK_order_servis_detail_elektronik_order_servis` (`id_order`),
  ADD KEY `FK_order_servis_detail_elektronik_data_elektronik` (`id_elektronik`),
  ADD KEY `FK_order_servis_detail_elektronik_teknisi` (`id_teknisi`);

--
-- Indexes for table `teknisi`
--
ALTER TABLE `teknisi`
  ADD PRIMARY KEY (`id_teknisi`);

--
-- Indexes for table `teknisi_akun`
--
ALTER TABLE `teknisi_akun`
  ADD PRIMARY KEY (`username`),
  ADD KEY `FK_teknisi_akun_teknisi` (`id_teknisi`);

--
-- Indexes for table `teknisi_detail_servis`
--
ALTER TABLE `teknisi_detail_servis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_teknisi_detail_servis_teknisi` (`id_teknisi`),
  ADD KEY `FK_teknisi_detail_servis_data_elektronik` (`id_elektronik`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_akun`
--
ALTER TABLE `user_akun`
  ADD PRIMARY KEY (`username`),
  ADD KEY `FK_user_akun_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kurir`
--
ALTER TABLE `kurir`
  MODIFY `id_kurir` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12314;

--
-- AUTO_INCREMENT for table `order_cancel`
--
ALTER TABLE `order_cancel`
  MODIFY `id_order_calcel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_deliver`
--
ALTER TABLE `order_deliver`
  MODIFY `id_delivery` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_deliver_alamat`
--
ALTER TABLE `order_deliver_alamat`
  MODIFY `id_order_deliver_alamat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_finis`
--
ALTER TABLE `order_finis`
  MODIFY `id_order_finis` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_finis_rumah`
--
ALTER TABLE `order_finis_rumah`
  MODIFY `id_finis_rumah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_pickup`
--
ALTER TABLE `order_pickup`
  MODIFY `id_pickup` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_proses`
--
ALTER TABLE `order_proses`
  MODIFY `id_order_proses` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_proses_rumah`
--
ALTER TABLE `order_proses_rumah`
  MODIFY `id_proses_rumah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_servis`
--
ALTER TABLE `order_servis`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `order_servis_address`
--
ALTER TABLE `order_servis_address`
  MODIFY `id_address` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `order_servis_detail_elektronik`
--
ALTER TABLE `order_servis_detail_elektronik`
  MODIFY `id_detail_order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teknisi`
--
ALTER TABLE `teknisi`
  MODIFY `id_teknisi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teknisi_detail_servis`
--
ALTER TABLE `teknisi_detail_servis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kurir_akun`
--
ALTER TABLE `kurir_akun`
  ADD CONSTRAINT `FK_kurir_akun_kurir` FOREIGN KEY (`id_kurir`) REFERENCES `kurir` (`id_kurir`);

--
-- Constraints for table `order_cancel`
--
ALTER TABLE `order_cancel`
  ADD CONSTRAINT `FK_order_cancel_order_servis_detail_elektronik` FOREIGN KEY (`id_detail_order`) REFERENCES `order_servis_detail_elektronik` (`id_detail_order`);

--
-- Constraints for table `order_deliver`
--
ALTER TABLE `order_deliver`
  ADD CONSTRAINT `FK_order_deliver_kurir` FOREIGN KEY (`id_kurir`) REFERENCES `kurir` (`id_kurir`),
  ADD CONSTRAINT `FK_order_deliver_order_proses` FOREIGN KEY (`id_order_proses`) REFERENCES `order_proses` (`id_order_proses`);

--
-- Constraints for table `order_deliver_alamat`
--
ALTER TABLE `order_deliver_alamat`
  ADD CONSTRAINT `FK_order_deliver_alamat_order_deliver` FOREIGN KEY (`id_deliver`) REFERENCES `order_deliver` (`id_delivery`);

--
-- Constraints for table `order_finis`
--
ALTER TABLE `order_finis`
  ADD CONSTRAINT `FK_order_finis_order_deliver` FOREIGN KEY (`id_deliver`) REFERENCES `order_deliver` (`id_delivery`);

--
-- Constraints for table `order_finis_rumah`
--
ALTER TABLE `order_finis_rumah`
  ADD CONSTRAINT `FK_order_finis_rumah_order_proses_rumah` FOREIGN KEY (`id_proses_rumah`) REFERENCES `order_proses_rumah` (`id_proses_rumah`);

--
-- Constraints for table `order_pickup`
--
ALTER TABLE `order_pickup`
  ADD CONSTRAINT `FK_order_pickup_order_servis_detail_elektronik` FOREIGN KEY (`id_detail_elektronik`) REFERENCES `order_servis_detail_elektronik` (`id_detail_order`);

--
-- Constraints for table `order_proses`
--
ALTER TABLE `order_proses`
  ADD CONSTRAINT `FK_order_proses_order_pickup` FOREIGN KEY (`id_pickup`) REFERENCES `order_pickup` (`id_pickup`);

--
-- Constraints for table `order_proses_rumah`
--
ALTER TABLE `order_proses_rumah`
  ADD CONSTRAINT `FK_order_proses_rumah_order_servis_detail_elektronik` FOREIGN KEY (`id_detail_elektronik`) REFERENCES `order_servis_detail_elektronik` (`id_detail_order`);

--
-- Constraints for table `order_servis`
--
ALTER TABLE `order_servis`
  ADD CONSTRAINT `FK_order_servis_kurir` FOREIGN KEY (`id_kurir`) REFERENCES `kurir` (`id_kurir`),
  ADD CONSTRAINT `FK_order_servis_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `order_servis_address`
--
ALTER TABLE `order_servis_address`
  ADD CONSTRAINT `FK_order_servis_address_order_servis` FOREIGN KEY (`id_order`) REFERENCES `order_servis` (`id_order`);

--
-- Constraints for table `order_servis_detail_elektronik`
--
ALTER TABLE `order_servis_detail_elektronik`
  ADD CONSTRAINT `FK_order_servis_detail_elektronik_data_elektronik` FOREIGN KEY (`id_elektronik`) REFERENCES `data_elektronik` (`id_elektronik`),
  ADD CONSTRAINT `FK_order_servis_detail_elektronik_order_servis` FOREIGN KEY (`id_order`) REFERENCES `order_servis` (`id_order`),
  ADD CONSTRAINT `FK_order_servis_detail_elektronik_teknisi` FOREIGN KEY (`id_teknisi`) REFERENCES `teknisi` (`id_teknisi`);

--
-- Constraints for table `teknisi_akun`
--
ALTER TABLE `teknisi_akun`
  ADD CONSTRAINT `FK_teknisi_akun_teknisi` FOREIGN KEY (`id_teknisi`) REFERENCES `teknisi` (`id_teknisi`);

--
-- Constraints for table `teknisi_detail_servis`
--
ALTER TABLE `teknisi_detail_servis`
  ADD CONSTRAINT `FK_teknisi_detail_servis_data_elektronik` FOREIGN KEY (`id_elektronik`) REFERENCES `data_elektronik` (`id_elektronik`),
  ADD CONSTRAINT `FK_teknisi_detail_servis_teknisi` FOREIGN KEY (`id_teknisi`) REFERENCES `teknisi` (`id_teknisi`);

--
-- Constraints for table `user_akun`
--
ALTER TABLE `user_akun`
  ADD CONSTRAINT `FK_user_akun_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
