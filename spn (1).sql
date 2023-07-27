-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2023 at 11:40 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spn`
--

-- --------------------------------------------------------

--
-- Table structure for table `agency`
--

CREATE TABLE `agency` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kapal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voy` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bendera` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `port_asal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_kedatangan` date NOT NULL,
  `muatan_bongkar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_muatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_keberangkatan` date NOT NULL,
  `tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `muatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`id`, `nama_kapal`, `voy`, `bendera`, `gt`, `port_asal`, `tgl_kedatangan`, `muatan_bongkar`, `jenis_muatan`, `tgl_keberangkatan`, `tujuan`, `muatan`, `keterangan`, `detail`, `created_at`, `updated_at`) VALUES
(2, 'kapal nelayan edit', 'voyage', 'singapurra', 'gtu sendiri', 'jakarta', '2022-01-12', 'kayu', 'pohnon jati', '2022-01-09', 'bandung', 'padi', 'sawah', 'petani', '2022-01-11 04:43:37', '2022-01-12 06:40:54'),
(4, 'kapal US navy', 'pearl harbour', 'timor leste', 'GT man', 'sorong', '2022-01-12', 'peti', 'kayu jati', '2022-01-09', 'balikpapan', 'teh pucuk', 'segar', 'minuman', '2022-01-11 07:31:33', '2022-01-11 07:31:33');

-- --------------------------------------------------------

--
-- Table structure for table `customergmb`
--

CREATE TABLE `customergmb` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_beli` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_jual` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock_awal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `stock` int(11) NOT NULL,
  `choose` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ' ',
  `update_stock` int(11) NOT NULL DEFAULT 0,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_stock` int(11) NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customergmb`
--

INSERT INTO `customergmb` (`id`, `nama_barang`, `harga_beli`, `harga_jual`, `stock_awal`, `stock`, `choose`, `update_stock`, `unit`, `type`, `total_stock`, `text`, `created_at`, `updated_at`) VALUES
(1, 'keramik', '50.000', '60.000', '0', 10, '-', 5, 'pcs', 'All Size', 15, 'lantai rumah', '2022-01-07 07:59:03', '2022-01-07 07:59:50');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kapal` bigint(20) NOT NULL,
  `jenis_kapal` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_izin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_berkas` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_terbitfile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_berakhirfile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id`, `id_kapal`, `jenis_kapal`, `photo`, `nama_file`, `no_izin`, `jenis_berkas`, `tgl_terbitfile`, `tgl_berakhirfile`, `created_at`, `updated_at`) VALUES
(31, 15, 's', '1637898646avatar.png', 'aa', 'aa', '', '2021-11-07', '2021-12-02', '2021-11-26 03:50:46', '2021-11-26 03:50:46'),
(32, 15, 's', '1637898669allah.jpg', 'aa', 'aa', '', '2021-11-03', '2021-11-27', '2021-11-26 03:51:09', '2021-11-26 03:51:09'),
(54, 37, 'p', '1638246645ir__soekarno_by_baingao-d7vrbp7.jpg', 'ada', 'ada', '', '2021-11-01', '2021-11-26', '2021-11-30 04:30:45', '2021-11-30 04:30:45'),
(55, 42, 'p', '1638246937house.png', 'ww', 'izin0001', '', '2021-10-31', '2021-11-18', '2021-11-30 04:35:37', '2021-11-30 04:35:37'),
(56, 42, 'p', '1638246954avatar.png', 'Sertifikat1', 'SRT-0001', '', '2021-11-01', '2021-11-26', '2021-11-30 04:35:54', '2021-11-30 04:35:54'),
(59, 25, 's', '16382490671.pdf', 'adad', 'izin0001', '', '2021-11-08', '2021-11-26', '2021-11-30 05:11:07', '2021-11-30 05:11:07'),
(60, 46, 'p', '1638256095resi5.pdf', 'Kontrak 1', 'Kontrak 1', 'Kontrak', '2021-10-31', '2021-12-03', '2021-11-30 07:08:15', '2021-11-30 07:08:15'),
(71, 25, 's', '1638852070surat_pernyataan.pdf', 'Kontrak 1', 'Kon1', NULL, '2021-11-28', '2022-01-01', '2021-12-07 04:41:10', '2021-12-07 04:41:10'),
(90, 64, 'p', '1639628604folder.png', 'Sertifikat2', 'SRT-008', 'Sertifikat', '2021-11-29', '2022-01-08', '2021-12-16 04:23:24', '2021-12-16 04:23:24'),
(92, 46, 'p', '1639986661avatar.png', 'Sertifikat11', 'sert', 'Sertifikat', '2021-11-29', '2022-01-08', '2021-12-20 07:51:01', '2021-12-20 07:51:01'),
(95, 71, 'p', '1640244151avatar.png', 'Sertifikat22', 'SRT-0022', 'Sertifikat', '2021-11-28', '2022-01-07', '2021-12-23 07:22:31', '2021-12-23 07:22:31'),
(96, 30, 's', '1640244302surat_pernyataan.pdf', 'Kontrak 22', 'Kon-22', NULL, '2021-11-28', '2022-01-07', '2021-12-23 07:25:02', '2021-12-23 07:25:02'),
(98, 63, 'p', '1640672530envelope.png', 'ada', 'ada', 'Sertifikat', '2021-11-28', '2022-01-03', '2021-12-28 06:22:10', '2021-12-28 06:22:10'),
(100, 71, 'p', '1640673980surat_pernyataan.pdf', 'Kontrak Kapal 22', 'Kon-22', 'Kontrak', '2021-11-28', '2022-01-07', '2021-12-28 06:46:20', '2021-12-28 06:46:20'),
(102, 64, 'p', '1640676932envelope.png', 'Sertifikat1', '123', 'Sertifikat', '2022-01-03', '2022-01-28', '2021-12-28 07:35:32', '2021-12-28 07:35:32'),
(103, 63, 'p', '1640750489folder.png', 'ada', 'ada', 'Sertifikat', '2021-12-28', '2021-01-13', '2021-12-29 04:01:29', '2021-12-29 04:01:29'),
(104, 64, 'p', '1640750907garbage.png', 'ada', 'ada', 'Sertifikat', '2021-12-21', '2022-01-12', '2021-12-29 04:08:27', '2021-12-29 04:08:27'),
(107, 71, 'p', '1640838508folder.png', 'ada', 'ada', 'Kontrak', '2021-12-29', '2022-01-12', '2021-12-30 04:28:28', '2021-12-30 04:28:28'),
(112, 80, 'p', NULL, 'ada', 'ada', 'Sertifikat', '2021-12-27', '2022-01-27', '2022-01-04 14:02:08', '2022-01-04 14:02:08'),
(113, 81, 'p', NULL, 'ada', 'izin0001', 'Kontrak', '2021-12-28', '2022-01-21', '2022-01-04 14:08:58', '2022-01-04 14:08:58'),
(114, 82, 'p', NULL, 'ada', 'ada', 'Sertifikat', '2021-12-27', '2022-01-29', '2022-01-04 14:14:37', '2022-01-04 14:14:37'),
(116, 85, 'p', NULL, 'ada', 'ada', 'Kontrak', '2021-12-29', '2022-01-13', '2022-01-04 14:21:36', '2022-01-04 14:21:36'),
(132, 106, 'p', NULL, 'Sertifikat1', 'ww', 'Kontrak', '2018-10-28', '2019-09-29', '2022-01-05 04:11:39', '2022-01-05 04:11:39'),
(138, 37, 's', NULL, 'ada', 'ada', NULL, '2021-12-28', '2022-01-28', '2022-01-05 06:46:58', '2022-01-05 06:46:58'),
(143, 44, 'p', NULL, 'Sertifikat 13', 'SRT-008', 'Kontrak', '2021-12-30', '2022-01-29', '2022-01-05 10:04:38', '2022-01-05 10:04:38'),
(145, 116, 'p', NULL, 'ada', '21', 'Sertifikat', '2023-07-25', '2023-07-28', '2023-07-26 01:59:21', '2023-07-26 01:59:21'),
(146, 117, 'p', NULL, 'sertifikat1', '11', 'Sertifikat', '2023-07-18', '2023-07-21', '2023-07-27 08:49:38', '2023-07-27 08:49:38'),
(147, 118, 'p', NULL, 'ada2', '12', 'Kontrak', '2023-07-18', '2023-07-14', '2023-07-27 08:52:05', '2023-07-27 08:52:05'),
(148, 119, 'p', NULL, 'ada terus', '33', 'Kontrak', '2022-06-27', '2022-06-23', '2023-07-27 09:26:02', '2023-07-27 09:26:02');

-- --------------------------------------------------------

--
-- Table structure for table `gmbexel`
--

CREATE TABLE `gmbexel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `waktu` datetime NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_stock` int(11) NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gmbexel`
--

INSERT INTO `gmbexel` (`id`, `waktu`, `nama_barang`, `unit`, `total_stock`, `text`) VALUES
(1, '2021-11-16 16:28:16', 'tahu gejrot', 'Karung', 8, 'lezat'),
(2, '2021-11-16 16:28:30', 'tahu gejrot', 'Karung', 3, 'lezat'),
(3, '2021-11-17 10:29:26', 'pisang molen', 'Karung', 6, 'lezat');

-- --------------------------------------------------------

--
-- Table structure for table `inventorygmb`
--

CREATE TABLE `inventorygmb` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock_awal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `stock` int(11) NOT NULL,
  `choose` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ' ',
  `update_stock` int(11) NOT NULL DEFAULT 0,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_stock` int(11) NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventorygmb`
--

INSERT INTO `inventorygmb` (`id`, `nama_barang`, `harga`, `stock_awal`, `stock`, `choose`, `update_stock`, `unit`, `type`, `total_stock`, `text`, `created_at`, `updated_at`) VALUES
(7, 'hr', '5.000', '0', 7, '+', 2, 'pcs', 'BMM', 10, 'tyt', '2021-12-23 06:08:24', '2022-01-06 03:39:45'),
(8, 'handphone', '18.000', '0', 7, '-', 1, 'Karung', '3/4', 13, 'baru', '2021-12-23 06:27:25', '2021-12-23 06:27:48'),
(10, 'cakwe', '7.000', '0', 6, '-', 2, 'Roll', '3/4', 10, 'pedas', '2021-12-23 07:15:23', '2021-12-23 07:16:11'),
(11, 'lem kayu', '4.000', '0', 9, '-', 1, 'pcs', 'All Size', 11, 'merekat', '2022-01-07 08:05:22', '2022-01-07 08:05:48');

--
-- Triggers `inventorygmb`
--
DELIMITER $$
CREATE TRIGGER `delete_status_inventorygmb` AFTER DELETE ON `inventorygmb` FOR EACH ROW BEGIN
    INSERT INTO loginvgmb (keterangan,status,waktu,nama_barang,stock_awal,stock,choose,update_stock,unit,type,total_stock,text,created_at,updated_at)
    VALUES ('hapus data','VOID',now(),OLD.nama_barang,OLD.stock_awal,OLD.stock,OLD.choose,OLD.update_stock,OLD.unit,OLD.type,OLD.total_stock,OLD.text,OLD.created_at,now());
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `edit_status_inventorygmb` AFTER UPDATE ON `inventorygmb` FOR EACH ROW BEGIN
    INSERT INTO loginvgmb (keterangan,status,waktu,nama_barang,stock_awal,stock,choose,update_stock,unit,type,total_stock,text,created_at,updated_at)
    VALUES ('edit data','OK',now(),NEW.nama_barang,NEW.stock_awal,NEW.stock,NEW.choose,NEW.update_stock,NEW.unit,NEW.type,NEW.total_stock,NEW.text,NEW.created_at,now());
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert_status_inventorygmb` AFTER INSERT ON `inventorygmb` FOR EACH ROW BEGIN
    INSERT INTO loginvgmb (keterangan,status,waktu,nama_barang,stock_awal,stock,choose,update_stock,unit,type,total_stock,text,created_at,updated_at)
    VALUES ('tambah data','OK',now(),NEW.nama_barang,NEW.stock_awal,NEW.stock,NEW.choose,NEW.update_stock,NEW.unit,NEW.type,NEW.total_stock,NEW.text,NEW.created_at,now());
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `inventoryspn`
--

CREATE TABLE `inventoryspn` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock_awal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `stock` int(11) NOT NULL,
  `choose` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ' ',
  `update_stock` int(11) NOT NULL DEFAULT 0,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_stock` int(11) NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventoryspn`
--

INSERT INTO `inventoryspn` (`id`, `nama_barang`, `harga`, `stock_awal`, `stock`, `choose`, `update_stock`, `unit`, `type`, `total_stock`, `text`, `created_at`, `updated_at`) VALUES
(6, 'pulpen', '20.000', '0', 7, '-', 1, 'Karung', '3/4', 11, 'merah', '2021-12-23 08:22:50', '2022-01-06 03:46:04'),
(7, 'pensil', '2.000', '0', 7, '+', 3, 'pcs', 'All Size', 10, '2B', '2022-01-07 08:06:31', '2022-01-07 08:18:46');

--
-- Triggers `inventoryspn`
--
DELIMITER $$
CREATE TRIGGER `delete_status_inventoryspn` AFTER DELETE ON `inventoryspn` FOR EACH ROW BEGIN
    INSERT INTO loginvspn (keterangan,status,waktu,nama_barang,stock_awal,stock,choose,update_stock,unit,type,total_stock,text,created_at,updated_at)
    VALUES ('hapus data','VOID',now(),OLD.nama_barang,OLD.stock_awal,OLD.stock,OLD.choose,OLD.update_stock,OLD.unit,OLD.type,OLD.total_stock,OLD.text,OLD.created_at,now());
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `edit_status_inventoryspn` AFTER UPDATE ON `inventoryspn` FOR EACH ROW BEGIN
    INSERT INTO loginvspn (keterangan,status,waktu,nama_barang,stock_awal,stock,choose,update_stock,unit,type,total_stock,text,created_at,updated_at)
    VALUES ('edit data','OK',now(),NEW.nama_barang,NEW.stock_awal,NEW.stock,NEW.choose,NEW.update_stock,NEW.unit,NEW.type,NEW.total_stock,NEW.text,NEW.created_at,now());
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert_status_inventoryspn` AFTER INSERT ON `inventoryspn` FOR EACH ROW BEGIN
    INSERT INTO loginvspn (keterangan,status,waktu,nama_barang,stock_awal,stock,choose,update_stock,unit,type,total_stock,text,created_at,updated_at)
    VALUES ('tambah data','OK',now(),NEW.nama_barang,NEW.stock_awal,NEW.stock,NEW.choose,NEW.update_stock,NEW.unit,NEW.type,NEW.total_stock,NEW.text,NEW.created_at,now());
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `kapal_pribadi`
--

CREATE TABLE `kapal_pribadi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_kapal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keberangkatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_kru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tujuan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_penyewa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mulai_sewa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_sewa_customer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sewa_selesai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kapal_pribadi`
--

INSERT INTO `kapal_pribadi` (`id`, `customer`, `nama_kapal`, `keberangkatan`, `nama_kru`, `tujuan`, `nama_penyewa`, `mulai_sewa`, `harga_sewa_customer`, `sewa_selesai`, `keterangan`, `created_at`, `updated_at`) VALUES
(117, 'pt nano', 'roro', 'makasar', 'monic  (admin) - edii  (staff)', 'balikpapan', 'rudianto', '2023-07-25', 'Rp. 20.000.000', '2023-07-29', 'baik', '2023-07-27 08:49:38', '2023-07-27 08:50:29'),
(118, 'PT inbuh', 'kintani', 'makasar', 'tono  (staff) - monic  (admin) - roma  (staff)', 'bali', 'rendi', '2023-07-12', 'Rp. 30.000.000', '2023-07-17', 'baik', '2023-07-27 08:52:05', '2023-07-27 08:53:00'),
(119, 'PT itu', 'kri manggala', 'makasar', 'tono  (staff) - edii  (staff)', 'jayapura', 'bagus', '2022-06-23', 'Rp. 30.000.000', '2022-06-28', 'baik ajah', '2023-07-27 09:26:02', '2023-07-27 09:27:06');

-- --------------------------------------------------------

--
-- Table structure for table `kapal_sewa`
--

CREATE TABLE `kapal_sewa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_kapal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penanggung_jawab` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_sertifikat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keberangkatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tujuan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_berangkat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_datang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_sewa_owner` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_sewa_customer` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kapal_sewa`
--

INSERT INTO `kapal_sewa` (`id`, `unit`, `nama_kapal`, `owner`, `penanggung_jawab`, `customer`, `no_sertifikat`, `keberangkatan`, `tujuan`, `tgl_berangkat`, `tgl_datang`, `harga_sewa_owner`, `harga_sewa_customer`, `keterangan`, `created_at`, `updated_at`) VALUES
(19, '2', 'SPN-002', 'Owner Lama', 'Penanggung Jawab 2', 'PT Surya Kencana', NULL, 'Pelabuhan Ketapang', 'Pelabuhan Batam-Center', '2023-02-02', '2022-03-02', 'Rp. 9.000.000', 'Rp. 10.000.000', 'Oke', '2021-11-29 06:08:35', '2021-11-30 07:58:49'),
(20, 'SPN-001', 'Kapal SPN03', 'Owner Baru', 'Owner Lama', 'PT Sumber Jaya', NULL, 'Pelabuhan Harbour Bay', 'Pelabuhan Tanjung Perak', '2022-02-05', '2022-03-04', 'Rp. 200.000.000', 'Rp. 300.000.000', 'Noted', '2021-11-29 08:42:01', '2021-11-30 07:59:09'),
(25, '123', 'Kapal SPN02', 'Owner Lama', 'Penanggung Jawab 3', 'PT Surya Kencana', NULL, 'Pelabuhan Tanjung Perak', 'Pelabuhan Tanjung Perak', '2022-02-02', '2022-02-02', 'Rp. 90.000.000', 'Rp. 100.000.000', 'Lunas', '2021-11-29 09:51:42', '2021-12-07 04:41:56'),
(30, '123', 'Kapal SPN022', 'Owner Baru', 'Owner Lama', 'PT Surya Kencana', NULL, 'Pelabuhan Harbour Bay', 'Pelabuhan Tanjung Mas', '2023-04-02', '2023-04-03', 'Rp. 22.222.222', 'Rp. 33.333.333', 'NOTED', '2021-12-23 07:24:21', '2021-12-23 07:25:17'),
(37, '12311111', 'Kapal baru', 'Owner Lama', 'Owner Lama', 'ada', NULL, 'Pelabuhan Ketapang', 'Pelabuhan Harbour Bay', '2020-10-30', '2018-10-29', 'Rp. 50.000.000', 'Rp. 100.000.000', 'ada', '2022-01-05 06:46:49', '2022-01-05 06:47:31'),
(38, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-26 02:03:14', '2023-07-26 02:04:11'),
(39, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-27 03:18:26', '2023-07-27 03:18:26');

-- --------------------------------------------------------

--
-- Table structure for table `kru`
--

CREATE TABLE `kru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('perempuan','laki-laki') COLLATE utf8mb4_unicode_ci NOT NULL,
  `identitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_identitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RT` int(11) NOT NULL,
  `RW` int(11) NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_sertifikat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_sertifikat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_gabung` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sign_off` date DEFAULT NULL,
  `status_perkawinan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npwp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kru`
--

INSERT INTO `kru` (`id`, `photo`, `nama`, `phone`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `identitas`, `no_identitas`, `provinsi`, `kota`, `RT`, `RW`, `kecamatan`, `kelurahan`, `alamat`, `email`, `nama_sertifikat`, `no_sertifikat`, `tgl_gabung`, `status`, `sign_off`, `status_perkawinan`, `npwp`, `jabatan`, `created_at`, `updated_at`) VALUES
(16, 'andre kempot.jpg', 'bangsat', '085674452767', 'bandung', '2003-11-13', 'laki-laki', 'ktp', '10', 'sumut', 'medan', 9, 3, 'deli serang', 'merangin', 'jl a yani medan timur', 'maul@gmail.com', 'sertifikat edit', '222222', '2020-06-11', 'tetap', '2022-01-14', 'single', '436347377', 'staff', '2022-01-12 06:23:08', '2022-01-16 15:48:17'),
(18, 'tono.jpg', 'tono', '085274152759', 'jakarta', '2020-05-15', 'laki-laki', 'ktp', '54757754744', 'DKI', 'jakarta', 6, 1, 'ps baru', 'dingin', 'jl. ry ps rebo', 'tono@gmail.com', 'sertifikat4', '66543333', '2021-07-08', 'kontrak', NULL, 'sudah_menikah', '635673373', 'staff', '2022-01-12 07:11:16', '2022-01-12 07:11:16'),
(19, 'monic.jpg', 'monic', '081212382459', 'jakarta', '2020-01-07', 'perempuan', 'ktp', '4526244666', 'DKI', 'jakarta', 7, 2, 'ps baru', 'dermawan', 'jl ps rebo km 33', 'mon@gmail.com', 'sertifikat5', '57774', '2021-03-18', 'tetap', NULL, 'sudah_menikah', '66675467575', 'admin', '2022-01-12 07:14:13', '2022-01-12 07:14:13'),
(20, 'ani.jpg', 'roma', '085637752727', 'surabaya', '2018-06-12', 'perempuan', 'ktp', '4537757754', 'DKI', 'jakarta', 5, 9, 'kebayoeran', 'parungan', 'jl balap liar', 'ani@gmail.com', 'sertifikat6', '122234353566', '2021-07-12', 'tetap', '2022-01-26', 'single', '633373', 'staff', '2022-01-12 07:23:43', '2022-01-16 04:58:10'),
(21, 'bagas.jpg', 'bagas', '081212382994', 'jakarta', '1988-07-19', 'laki-laki', 'ktp', '532532626', 'DKI', 'jakarta', 5, 7, 'penjaringan', 'murik', 'jl. kedondong kebayoran baru', 'bagas@gmail.com', 'sertifikat sakti', '644735773', '2021-08-15', 'kontrak', NULL, 'single', '2527474774', 'Staff IT', '2022-01-15 05:43:39', '2022-01-15 05:43:39'),
(22, 'edii.jpg', 'edii', '083787113', 'bandung', '2023-07-12', 'laki-laki', 'ktp', '2', 'jawa barat', 'bandung', 1, -1, 'bandung selatan', 'bb', 'bandung cibeni', 'edii@gmail.com', 'sertifikat1', '2', '2023-07-04', 'kontrak', '2023-07-10', 'single', '2323232', 'staff', '2023-07-27 03:17:28', '2023-07-27 03:17:28');

-- --------------------------------------------------------

--
-- Table structure for table `loginvgmb`
--

CREATE TABLE `loginvgmb` (
  `id` int(20) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `waktu` datetime NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `stock_awal` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `choose` varchar(255) NOT NULL,
  `update_stock` int(11) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `total_stock` int(11) NOT NULL,
  `text` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginvgmb`
--

INSERT INTO `loginvgmb` (`id`, `keterangan`, `status`, `waktu`, `nama_barang`, `stock_awal`, `stock`, `choose`, `update_stock`, `unit`, `type`, `total_stock`, `text`, `created_at`, `updated_at`) VALUES
(1, 'tambah data', 'OK', '2021-12-23 13:08:24', 'hr', 0, 7, ' ', 0, 'pcs', 'BMM', 7, 'tyt', '2021-12-23 06:08:24', '2021-12-23 06:08:24'),
(2, 'edit data', 'OK', '2021-12-23 13:14:37', 'hr', 0, 7, ' ', 0, 'pcs', 'BMM', 7, 'tyt', '2021-12-23 06:08:24', '2021-12-23 06:14:37'),
(3, 'edit data', 'OK', '2021-12-23 13:20:53', 'hr', 0, 7, '+', 7, 'pcs', 'BMM', 14, 'tyt', '2021-12-23 06:08:24', '2021-12-23 06:20:53'),
(4, 'edit data', 'OK', '2021-12-23 13:21:04', 'hr', 0, 7, '-', 6, 'pcs', 'BMM', 8, 'tyt', '2021-12-23 06:08:24', '2021-12-23 06:21:04'),
(5, 'tambah data', 'OK', '2021-12-23 13:27:25', 'handphone', 0, 7, ' ', 0, 'Karung', '3/4', 7, 'baru', '2021-12-23 06:27:25', '2021-12-23 06:27:25'),
(6, 'edit data', 'OK', '2021-12-23 13:27:34', 'handphone', 0, 7, ' ', 0, 'Karung', '3/4', 7, 'baru', '2021-12-23 06:27:25', '2021-12-23 06:27:34'),
(7, 'edit data', 'OK', '2021-12-23 13:27:40', 'handphone', 0, 7, '+', 7, 'Karung', '3/4', 14, 'baru', '2021-12-23 06:27:25', '2021-12-23 06:27:40'),
(8, 'edit data', 'OK', '2021-12-23 13:27:48', 'handphone', 0, 7, '-', 1, 'Karung', '3/4', 13, 'baru', '2021-12-23 06:27:25', '2021-12-23 06:27:48'),
(10, 'tambah data', 'OK', '2021-12-23 14:15:23', 'cakwe', 0, 6, ' ', 0, 'Roll', '3/4', 6, 'pedas', '2021-12-23 07:15:23', '2021-12-23 07:15:23'),
(11, 'edit data', 'OK', '2021-12-23 14:16:00', 'cakwe', 0, 6, '+', 6, 'Roll', '3/4', 12, 'pedas', '2021-12-23 07:15:23', '2021-12-23 07:16:00'),
(12, 'edit data', 'OK', '2021-12-23 14:16:11', 'cakwe', 0, 6, '-', 2, 'Roll', '3/4', 10, 'pedas', '2021-12-23 07:15:23', '2021-12-23 07:16:11'),
(13, 'edit data', 'OK', '2022-01-06 10:39:45', 'hr', 0, 7, '+', 2, 'pcs', 'BMM', 10, 'tyt', '2021-12-23 06:08:24', '2022-01-06 03:39:45'),
(14, 'tambah data', 'OK', '2022-01-07 15:05:22', 'lem kayu', 0, 6, ' ', 0, 'pcs', 'All Size', 6, 'merekat', '2022-01-07 08:05:22', '2022-01-07 08:05:22'),
(15, 'edit data', 'OK', '2022-01-07 15:05:32', 'lem kayu', 0, 9, ' ', 0, 'pcs', 'All Size', 9, 'merekat', '2022-01-07 08:05:22', '2022-01-07 08:05:32'),
(16, 'edit data', 'OK', '2022-01-07 15:05:40', 'lem kayu', 0, 9, '+', 3, 'pcs', 'All Size', 12, 'merekat', '2022-01-07 08:05:22', '2022-01-07 08:05:40'),
(17, 'edit data', 'OK', '2022-01-07 15:05:48', 'lem kayu', 0, 9, '-', 1, 'pcs', 'All Size', 11, 'merekat', '2022-01-07 08:05:22', '2022-01-07 08:05:48');

-- --------------------------------------------------------

--
-- Table structure for table `loginvspn`
--

CREATE TABLE `loginvspn` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` datetime NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock_awal` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `choose` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ' ',
  `update_stock` int(11) NOT NULL DEFAULT 0,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_stock` int(11) NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loginvspn`
--

INSERT INTO `loginvspn` (`id`, `keterangan`, `status`, `waktu`, `nama_barang`, `stock_awal`, `stock`, `choose`, `update_stock`, `unit`, `type`, `total_stock`, `text`, `created_at`, `updated_at`) VALUES
(1, 'tambah data', 'OK', '2021-12-23 14:07:57', 'kentang goreng', 0, 6, ' ', 0, 'pcs', 'All Size', 6, '466', '2021-12-23 07:07:57', '2021-12-23 07:07:57'),
(2, 'hapus data', 'VOID', '2021-12-23 14:08:15', 'ayam goreng', 0, 4, ' ', 0, 'pcs', 'All Size', 4, 'renyah', '2021-12-23 07:06:23', '2021-12-23 07:08:15'),
(3, 'edit data', 'OK', '2021-12-23 14:08:35', 'kentang goreng', 0, 6, ' ', 0, 'pcs', 'All Size', 6, '466', '2021-12-23 07:07:57', '2021-12-23 07:08:35'),
(4, 'edit data', 'OK', '2021-12-23 14:08:45', 'kentang goreng', 0, 6, '+', 6, 'pcs', 'All Size', 12, '466', '2021-12-23 07:07:57', '2021-12-23 07:08:45'),
(5, 'edit data', 'OK', '2021-12-23 14:08:55', 'kentang goreng', 0, 6, '-', 2, 'pcs', 'All Size', 10, '466', '2021-12-23 07:07:57', '2021-12-23 07:08:55'),
(6, 'tambah data', 'OK', '2021-12-23 14:09:20', 'somay', 0, 6, ' ', 0, 'pcs', 'All Size', 6, 'lezat', '2021-12-23 07:09:20', '2021-12-23 07:09:20'),
(8, 'tambah data', 'OK', '2021-12-23 14:12:17', 'bakwan goreng', 0, 7, ' ', 0, 'pcs', '3/4', 7, 'renyah', '2021-12-23 07:12:17', '2021-12-23 07:12:17'),
(9, 'edit data', 'OK', '2021-12-23 14:12:34', 'bakwan goreng', 0, 7, '+', 3, 'pcs', '3/4', 10, 'renyah', '2021-12-23 07:12:17', '2021-12-23 07:12:34'),
(10, 'tambah data', 'OK', '2021-12-23 15:22:50', 'pulpen', 0, 7, ' ', 0, 'Karung', '3/4', 7, 'merah', '2021-12-23 08:22:50', '2021-12-23 08:22:50'),
(11, 'edit data', 'OK', '2021-12-23 15:23:10', 'pulpen', 0, 7, ' ', 0, 'Karung', '3/4', 7, 'merah', '2021-12-23 08:22:50', '2021-12-23 08:23:10'),
(12, 'edit data', 'OK', '2021-12-23 15:23:29', 'pulpen', 0, 7, '+', 5, 'Karung', '3/4', 12, 'merah', '2021-12-23 08:22:50', '2021-12-23 08:23:29'),
(13, 'edit data', 'OK', '2021-12-23 15:23:44', 'pulpen', 0, 7, '-', 1, 'Karung', '3/4', 11, 'merah', '2021-12-23 08:22:50', '2021-12-23 08:23:44'),
(14, 'hapus data', 'VOID', '2021-12-23 15:23:54', 'bakwan goreng', 0, 7, '+', 3, 'pcs', '3/4', 10, 'renyah', '2021-12-23 07:12:17', '2021-12-23 08:23:54'),
(15, 'edit data', 'OK', '2022-01-06 10:45:52', 'pulpen', 0, 7, '-', 1, 'Karung', '3/4', 11, 'merah', '2021-12-23 08:22:50', '2022-01-06 03:45:52'),
(16, 'edit data', 'OK', '2022-01-06 10:46:04', 'pulpen', 0, 7, '-', 1, 'Karung', '3/4', 11, 'merah', '2021-12-23 08:22:50', '2022-01-06 03:46:04'),
(17, 'edit data', 'OK', '2022-01-06 14:00:50', 'somay', 0, 6, '+', 2, 'pcs', 'All Size', 8, 'lezat', '2021-12-23 07:09:20', '2022-01-06 07:00:50'),
(18, 'tambah data', 'OK', '2022-01-07 15:06:31', 'pensil', 0, 7, ' ', 0, 'pcs', 'All Size', 7, '2B', '2022-01-07 08:06:31', '2022-01-07 08:06:31'),
(19, 'edit data', 'OK', '2022-01-07 15:18:46', 'pensil', 0, 7, '+', 3, 'pcs', 'All Size', 10, '2B', '2022-01-07 08:06:31', '2022-01-07 08:18:46'),
(20, 'hapus data', 'VOID', '2022-01-11 14:03:21', 'somay', 0, 6, '+', 2, 'pcs', 'All Size', 8, 'lezat', '2021-12-23 07:09:20', '2022-01-11 07:03:21'),
(21, 'hapus data', 'VOID', '2022-01-11 14:13:38', 'kentang goreng', 0, 6, '-', 2, 'pcs', 'All Size', 10, '466', '2021-12-23 07:07:57', '2022-01-11 07:13:38');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `log_date` datetime NOT NULL,
  `table_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `log_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `user_id`, `log_date`, `table_name`, `log_type`, `data`) VALUES
(1, 2, '2022-01-04 15:00:03', '', 'login', '{\"ip\":\"127.0.0.1\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; WOW64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/96.0.4664.110 Safari\\/537.36\"}'),
(2, 2, '2022-01-04 20:10:36', '', 'login', '{\"ip\":\"127.0.0.1\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; WOW64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/96.0.4664.110 Safari\\/537.36\"}');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_06_040813_create_kapal_pribadi_table', 1),
(6, '2021_10_08_024312_create_kapal_sewa_table', 1),
(7, '2021_10_21_051705_create__gambar_table', 1),
(8, '2021_10_25_062717_create_kp_table', 1),
(11, '2021_11_03_045910_create_kru_table', 1),
(12, '2021_11_05_070712_create_vendor_table', 1),
(26, '2021_11_16_100132_create_spnexel_table', 4),
(30, '2021_11_16_152320_create_gmbexel_table', 6),
(31, '2021_11_26_052303_create__uploadgambarkm_table', 7),
(34, '2021_11_29_141535_add_sign_off_to_kru_table', 8),
(36, '2021_11_30_163249_create_agency_table', 8),
(37, '2021_10_29_092358_create_inventorygmb_table', 9),
(39, '2021_10_26_084827_create_inventoryspn_table', 10),
(40, '2021_11_09_124732_create_loginvspn_table', 10),
(41, '2020_11_20_100001_create_log_table', 11),
(42, '2022_01_04_201815_notif', 12),
(43, '2022_01_04_204450_create_notifikasis_table', 13),
(44, '2022_01_05_104139_create_notifikasis_table', 14),
(45, '2021_11_30_105648_create_customergmb_table', 15),
(46, '2022_01_18_141626_create_text_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `notifikasis`
--

CREATE TABLE `notifikasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `log_id` int(11) NOT NULL,
  `task` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifikasis`
--

INSERT INTO `notifikasis` (`id`, `user_id`, `log_id`, `task`, `created_at`, `updated_at`) VALUES
(9, 2, 1, 'Add Data Kapal Pribadi', '2022-01-05 06:52:37', '2022-01-05 06:52:37'),
(10, 2, 3, 'Delete Data Kapal Pribadi', '2022-01-05 06:53:31', '2022-01-05 06:53:31'),
(11, 2, 2, 'Update Data Kapal Pribadi', '2022-01-05 08:16:26', '2022-01-05 08:16:26'),
(12, 5, 1, 'Add Data Kapal Pribadi', '2022-01-05 08:20:18', '2022-01-05 08:20:18'),
(13, 5, 3, 'Delete Data Kapal Pribadi', '2022-01-05 08:20:36', '2022-01-05 08:20:36'),
(25, 2, 1, 'Add Data Kru', '2022-01-06 03:48:04', '2022-01-06 03:48:04'),
(26, 2, 3, 'Delete Data Kapal Pribadi', '2022-01-06 06:18:54', '2022-01-06 06:18:54'),
(27, 2, 2, 'Update Data Inventori SPN', '2022-01-06 07:00:50', '2022-01-06 07:00:50'),
(28, 2, 3, 'Delete Data Kru', '2022-01-06 07:31:41', '2022-01-06 07:31:41'),
(29, 3, 3, 'Delete Data Inventori Customer GBM', '2022-01-07 07:51:37', '2022-01-07 07:51:37'),
(30, 3, 1, 'Add Data Inventori Customer GBM', '2022-01-07 07:52:22', '2022-01-07 07:52:22'),
(31, 3, 1, 'Add Data Inventori Customer GBM', '2022-01-07 07:59:03', '2022-01-07 07:59:03'),
(32, 3, 2, 'Update Data Inventori Customer GBM', '2022-01-07 07:59:38', '2022-01-07 07:59:38'),
(33, 3, 2, 'Update Data Inventori Customer GBM', '2022-01-07 07:59:50', '2022-01-07 07:59:50'),
(34, 3, 1, 'Add Data Inventori GBM', '2022-01-07 08:05:22', '2022-01-07 08:05:22'),
(35, 3, 2, 'Update Data Inventori GBM', '2022-01-07 08:05:32', '2022-01-07 08:05:32'),
(36, 3, 2, 'Update Data Inventori GBM', '2022-01-07 08:05:40', '2022-01-07 08:05:40'),
(37, 3, 2, 'Update Data Inventori GBM', '2022-01-07 08:05:48', '2022-01-07 08:05:48'),
(38, 3, 1, 'Add Data Inventori SPN', '2022-01-07 08:06:31', '2022-01-07 08:06:31'),
(39, 3, 2, 'Update Data Inventori SPN', '2022-01-07 08:18:46', '2022-01-07 08:18:46'),
(40, 3, 1, 'Add Data Agency', '2022-01-10 09:31:54', '2022-01-10 09:31:54'),
(41, 3, 1, 'Add Data Agency', '2022-01-11 04:43:37', '2022-01-11 04:43:37'),
(42, 3, 1, 'Add Data Agency', '2022-01-11 04:53:40', '2022-01-11 04:53:40'),
(43, 3, 3, 'Delete Data Inventori SPN', '2022-01-11 07:03:21', '2022-01-11 07:03:21'),
(44, 3, 3, 'Delete Data Inventori SPN', '2022-01-11 07:04:05', '2022-01-11 07:04:05'),
(45, 3, 3, 'Delete Data Inventori SPN', '2022-01-11 07:09:00', '2022-01-11 07:09:00'),
(46, 3, 3, 'Delete Data Inventori SPN', '2022-01-11 07:11:24', '2022-01-11 07:11:24'),
(47, 3, 3, 'Delete Data Inventori SPN', '2022-01-11 07:12:23', '2022-01-11 07:12:23'),
(48, 3, 3, 'Delete Data Inventori SPN', '2022-01-11 07:12:28', '2022-01-11 07:12:28'),
(49, 3, 3, 'Delete Data Inventori SPN', '2022-01-11 07:12:51', '2022-01-11 07:12:51'),
(50, 3, 3, 'Delete Data Inventori SPN', '2022-01-11 07:13:38', '2022-01-11 07:13:38'),
(51, 3, 3, 'Delete Data Inventori SPN', '2022-01-11 07:14:09', '2022-01-11 07:14:09'),
(52, 3, 3, 'Delete Data Inventori SPN', '2022-01-11 07:23:18', '2022-01-11 07:23:18'),
(53, 3, 1, 'Add Data Agency', '2022-01-11 07:31:33', '2022-01-11 07:31:33'),
(54, 3, 3, 'Delete Data Kru', '2022-01-11 08:13:12', '2022-01-11 08:13:12'),
(55, 3, 3, 'Delete Data Kru', '2022-01-11 08:13:15', '2022-01-11 08:13:15'),
(56, 3, 3, 'Delete Data Kru', '2022-01-11 08:15:42', '2022-01-11 08:15:42'),
(57, 3, 3, 'Delete Data Kru', '2022-01-11 08:18:05', '2022-01-11 08:18:05'),
(58, 3, 3, 'Delete Data Kru', '2022-01-11 08:26:40', '2022-01-11 08:26:40'),
(59, 3, 3, 'Delete Data Kru', '2022-01-11 08:26:43', '2022-01-11 08:26:43'),
(60, 3, 3, 'Delete Data Kru', '2022-01-11 08:28:32', '2022-01-11 08:28:32'),
(61, 3, 3, 'Delete Data Kru', '2022-01-11 08:29:57', '2022-01-11 08:29:57'),
(62, 3, 3, 'Delete Data Kru', '2022-01-11 08:30:04', '2022-01-11 08:30:04'),
(63, 3, 3, 'Delete Data Kru', '2022-01-11 08:30:13', '2022-01-11 08:30:13'),
(64, 3, 3, 'Delete Data Kru', '2022-01-11 08:30:17', '2022-01-11 08:30:17'),
(65, 3, 3, 'Delete Data Kru', '2022-01-12 06:21:06', '2022-01-12 06:21:06'),
(66, 3, 3, 'Delete Data Kru', '2022-01-12 07:02:59', '2022-01-12 07:02:59'),
(67, 13, 1, 'Add Data Kapal Pribadi', '2023-07-26 02:00:42', '2023-07-26 02:00:42'),
(68, 13, 1, 'Add Data Kapal Pribadi', '2023-07-27 08:50:29', '2023-07-27 08:50:29'),
(69, 13, 1, 'Add Data Kapal Pribadi', '2023-07-27 08:53:00', '2023-07-27 08:53:00'),
(70, 13, 1, 'Add Data Kapal Pribadi', '2023-07-27 09:27:07', '2023-07-27 09:27:07');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$.XL1WLroklq0r0nRzgtpL.uOVI8cv9U.s6D4stN.9/6GCe1aCKviC', '2021-12-22 05:00:27'),
('mranggadiaksa@gmail.com', '$2y$10$YSUBo5DmeFhWPocKFAq2k.QUd4dlq1Bt4F.PFEyoCeiNUgnZie7Ai', '2021-12-28 04:40:35');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spnexel`
--

CREATE TABLE `spnexel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `waktu` datetime NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_stock` int(11) NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spnexel`
--

INSERT INTO `spnexel` (`id`, `waktu`, `nama_barang`, `unit`, `total_stock`, `text`) VALUES
(1, '2021-11-16 13:46:31', 'kerupuk', 'pcs', 6, 'gurih'),
(2, '2021-11-16 13:46:53', 'gorengan', 'pcs', 7, 'minyak'),
(3, '2021-11-16 13:47:01', 'kerupuk', 'pcs', 16, 'gurih'),
(4, '2021-11-16 13:47:10', 'gorengan', 'pcs', 14, 'minyak'),
(5, '2021-11-16 13:47:28', 'pelastik', 'Roll', 7, 'botol'),
(6, '2021-11-16 13:48:10', 'kerupuk', 'pcs', 10, 'gurih'),
(7, '2021-11-16 13:48:23', 'gorengan', 'pcs', 6, 'minyak'),
(8, '2021-11-16 14:25:55', 'kerupuk', 'pcs', 10, 'gurih'),
(9, '2021-11-17 15:46:22', 'kaos kaki', 'pcs', 6, 'bersih'),
(10, '2021-11-17 15:46:47', 'kaos kaki', 'pcs', 4, 'bersih'),
(11, '2021-12-21 15:23:40', 'pelastik', 'Roll', 7, 'botol'),
(12, '2021-12-21 15:24:05', 'gorengan', 'pcs', 10, 'minyak'),
(13, '2021-12-21 15:24:36', 'gorengan', 'pcs', 6, 'minyak'),
(14, '2021-12-21 15:24:51', 'gorengan', 'pcs', 8, 'minyak');

-- --------------------------------------------------------

--
-- Table structure for table `text`
--

CREATE TABLE `text` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `text`
--

INSERT INTO `text` (`id`, `note`, `created_at`, `updated_at`) VALUES
(1, 'test 1', '2022-01-18 08:02:46', '2022-01-18 08:02:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `level`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Admin', '1', 'admin@gmail.com', NULL, '$2y$10$z2C3im.o3DK10n6aZAbblOXkQ2GAa/ORM0/Z.Kvjug3.jRp054Ru2', NULL, '2021-11-10 03:44:44', '2021-11-10 03:44:44'),
(3, 'rico', '1', 'rico@gmail.com', NULL, '$2y$10$l5IYke/J3cqzdDlgpX5MyO0Sle4MZGT62XtiBmQoqFk.tJvcWd0pO', NULL, '2021-11-12 07:40:24', '2021-11-12 07:40:24'),
(4, 'user', '0', 'user@gmail.com', NULL, '$2y$10$dRmNK9pmfbDFN3UOrG4ZIuGqpML9ptarHba7xnx8Gn8nOaHtOAb.i', NULL, '2021-11-29 09:03:05', '2021-11-29 09:03:05'),
(5, 'admin site', '2', 'adminsite@gmail.com', NULL, '$2y$10$pYn4rrami3Jn0OV6yV9dMOMbmX5V0KdEKcqYQaJlwEl662dAjQa/a', NULL, '2021-12-02 04:04:24', '2021-12-02 04:04:24'),
(11, 'angga', '1', 'mranggadiaksa@gmail.com', NULL, '$2y$10$MiBEzdugWj/sirH4ZojgWuWkLkBiuzkYnSTypHJ9AKVhy0hgjMn9a', NULL, '2021-12-27 08:40:06', '2021-12-27 08:40:06'),
(12, 'USER SITE', '3', 'usersite@gmail.com', NULL, '$2y$10$h4J7vViwU44VtpaUrMY5nOjpoyZ4g2xyDEqowrNp1wvLUG2SRWhYy', NULL, '2022-01-04 04:29:45', '2022-01-04 04:29:45'),
(13, 'deco', '1', 'deco@gmail.com', NULL, '$2y$10$NM3TqL8THFg5EcC2tieI3OjWVkAzXsNL6bO/L9rU2YI3dzsfUh/U2', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id`, `image`, `phone`, `mobile`, `nama_perusahaan`, `email`, `nama_pic`, `website`, `jabatan`, `provinsi`, `kota`, `kecamatan`, `kelurahan`, `rt`, `rw`, `alamat_lengkap`, `created_at`, `updated_at`) VALUES
(1, '1636357034avatar.png', '-', '08982139134', 'spn moi', 'spnmoi@gmail.com', 'admin', 'www.spnmoi.com', 'Manager', 'Jawa Timur', 'Yogyakarta', 'Limo', 'Krukut', '4', '4', 'Kelapa Gading Square', '2021-11-08 07:37:14', '2021-11-08 08:16:35'),
(2, '1636516112avatar.png', '-', '081387608467', 'spn moi Baru', 'spnmoibaru@gmail.com', 'admin', 'www.spnmoibaru.com', 'Direktur', 'Jawa Timur', 'DKI Jakarta', 'Pasar Minggu', 'Cilandak', '2', '13', 'MOI Kelapa Gading Square', '2021-11-08 08:21:15', '2021-11-10 03:48:32'),
(3, '1636516165avatar.png', '-', '081387608467', 'spn Update', 'spnmoiupdate@gmail.com', 'Admin Update', 'www.spnmoiupdate.com', 'Manager', 'Jawa Timur', 'Yogyakarta', 'Pasar Minggu', 'Cilandak', '3', '5', 'Kelapa Gading Square MOI', '2021-11-10 03:49:25', '2021-11-10 03:49:25');

-- --------------------------------------------------------

--
-- Table structure for table `_uploadgambarkm`
--

CREATE TABLE `_uploadgambarkm` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kapal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kapal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_izin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_terbitfile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_berakhirfile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agency`
--
ALTER TABLE `agency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customergmb`
--
ALTER TABLE `customergmb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gmbexel`
--
ALTER TABLE `gmbexel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventorygmb`
--
ALTER TABLE `inventorygmb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventoryspn`
--
ALTER TABLE `inventoryspn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kapal_pribadi`
--
ALTER TABLE `kapal_pribadi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_kru` (`nama_kru`) USING BTREE;

--
-- Indexes for table `kapal_sewa`
--
ALTER TABLE `kapal_sewa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kru`
--
ALTER TABLE `kru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loginvgmb`
--
ALTER TABLE `loginvgmb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loginvspn`
--
ALTER TABLE `loginvspn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifikasis`
--
ALTER TABLE `notifikasis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `spnexel`
--
ALTER TABLE `spnexel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `text`
--
ALTER TABLE `text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_uploadgambarkm`
--
ALTER TABLE `_uploadgambarkm`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agency`
--
ALTER TABLE `agency`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customergmb`
--
ALTER TABLE `customergmb`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `gmbexel`
--
ALTER TABLE `gmbexel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inventorygmb`
--
ALTER TABLE `inventorygmb`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `inventoryspn`
--
ALTER TABLE `inventoryspn`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kapal_pribadi`
--
ALTER TABLE `kapal_pribadi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `kapal_sewa`
--
ALTER TABLE `kapal_sewa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `kru`
--
ALTER TABLE `kru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `loginvgmb`
--
ALTER TABLE `loginvgmb`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `loginvspn`
--
ALTER TABLE `loginvspn`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `notifikasis`
--
ALTER TABLE `notifikasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spnexel`
--
ALTER TABLE `spnexel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `text`
--
ALTER TABLE `text`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `_uploadgambarkm`
--
ALTER TABLE `_uploadgambarkm`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `notifikasis`
--
ALTER TABLE `notifikasis`
  ADD CONSTRAINT `notifikasis_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
