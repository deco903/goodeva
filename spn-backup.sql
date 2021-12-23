-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2021 at 04:09 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spn-backup`
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
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`id`, `nama_kapal`, `voy`, `bendera`, `gt`, `port_asal`, `tgl_kedatangan`, `muatan_bongkar`, `jenis_muatan`, `tgl_keberangkatan`, `tujuan`, `muatan`, `detail`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'kapal perang', 'voy1', 'indonesia', 'gtu ajah', 'Makassar', '2021-12-20', 'pasir', 'Batu', '2021-12-15', 'jakarta', 'pasir', 'pasir alami', 'berat', '2021-12-16 08:13:44', '2021-12-16 08:13:44'),
(2, 'kapal nelayan', 'voy2', 'vietnam', 'gtu juga', 'Batam', '2021-12-22', 'semen', 'Gergaji', '2021-12-20', 'sorong', 'semen', 'keras', 'retak', '2021-12-16 08:26:51', '2021-12-16 08:26:51'),
(3, 'kapal rusak', 'voy3', 'thailand', 'gtu sendiri', 'Makassar', '2021-12-18', 'besi', 'Besi', '2021-12-14', 'sorong', 'paku payung', 'paku', 'tajam', '2021-12-17 08:30:00', '2021-12-17 08:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `customergmb`
--

CREATE TABLE `customergmb` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kapal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pcs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customergmb`
--

INSERT INTO `customergmb` (`id`, `nama_kapal`, `nama_barang`, `pcs`, `created_at`, `updated_at`) VALUES
(1, 'ikan moly', 'batu karang', '3 pcs', '2021-11-30 04:32:28', '2021-11-30 04:32:28'),
(2, 'ikan nemo', 'terumbu karang', '6 pcs', '2021-11-30 04:48:22', '2021-11-30 04:48:22'),
(3, 'ikan lele', 'minyak tawon', '3 pcs', '2021-11-30 04:51:10', '2021-11-30 04:51:10'),
(4, 'ikan lohan', 'pelet', '1 pcs', '2021-11-30 04:58:08', '2021-11-30 04:58:08');

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
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_izin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_terbitfile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_berakhirfile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2021-11-17 10:29:26', 'pisang molen', 'Karung', 6, 'lezat'),
(4, '2021-11-18 10:55:21', 'kwetiau', 'pcs', 7, 'goreng'),
(5, '2021-11-18 13:50:43', 'kertas HVS', 'Roll', 6, 'mulus'),
(6, '2021-11-18 13:50:56', 'kertas HVS', 'Roll', 12, 'mulus'),
(7, '2021-11-18 13:51:15', 'kertas HVS', 'Roll', 16, 'mulus'),
(8, '2021-11-18 15:52:37', 'gunting', 'Karung', 4, 'tajam'),
(9, '2021-11-18 15:53:04', 'hard cover', 'Karung', 1, 'keras'),
(10, '2021-11-18 15:53:16', 'hard cover', 'Karung', 10, 'keras'),
(11, '2021-11-18 15:53:26', 'hard cover edit', 'Karung', 34, 'keras'),
(12, '2021-11-18 15:53:36', 'hard cover edit', 'Karung', 30, 'keras'),
(13, '2021-11-19 14:47:04', 'ikan gurame', 'pcs', 3, 'bakar'),
(14, '2021-11-19 14:47:20', 'ikan gurame', 'pcs', 3, 'bakar'),
(15, '2021-11-19 14:47:55', 'ikan gurame', 'pcs', 2, 'bakar'),
(16, '2021-11-19 14:48:22', 'ikan gurame', 'pcs', 2, 'bakar'),
(17, '2021-11-19 14:48:43', 'ikan gurame', 'pcs', 2, 'bakar'),
(18, '2021-11-19 14:49:30', 'ikan gurame', 'pcs', 4, 'bakar'),
(19, '2021-11-19 14:49:56', 'ikan gurame', 'pcs', 2, 'bakar'),
(20, '2021-11-19 14:50:58', 'ikan gurame', 'pcs', 2, 'bakar'),
(21, '2021-11-19 14:52:54', 'ikan gurame', 'pcs', 2, 'bakar'),
(22, '2021-11-19 14:56:03', 'ikan gurame', 'pcs', 2, 'bakar'),
(23, '2021-11-19 14:56:33', 'ikan gurame', 'pcs', 2, 'bakar'),
(24, '2021-11-19 14:57:33', 'kwetiau', 'pcs', 6, 'goreng'),
(25, '2021-11-19 15:00:32', 'kwetiau', 'pcs', 5, 'goreng'),
(26, '2021-11-19 15:16:07', 'mie rebus', 'Roll', 7, 'telor dadar'),
(27, '2021-11-19 15:17:55', 'telor asin', 'pcs', 2, 'gurih'),
(28, '2021-11-19 15:31:26', 'telor asin', 'pcs', 7, 'gurih'),
(29, '2021-11-19 15:31:43', 'telor asin', 'pcs', 10, 'gurih'),
(30, '2021-11-19 15:32:28', 'telor asin', 'pcs', 9, 'gurih'),
(31, '2021-11-19 15:42:02', 'telor asin', 'pcs', 9, 'gurih'),
(32, '2021-11-19 15:46:50', 'telor asin', 'pcs', 9, 'gurih'),
(33, '2021-11-22 11:06:38', 'telor asin', 'pcs', 90, 'gurih'),
(34, '2021-11-22 11:06:50', 'telor asin', 'pcs', 80, 'gurih'),
(35, '2021-11-22 11:09:57', 'ikan gurame', 'pcs', 5, 'bakar'),
(36, '2021-11-22 11:13:45', 'ikan gurame', 'pcs', 13, 'bakar'),
(37, '2021-11-22 11:14:16', 'ikan gurame', 'pcs', 8, 'bakar'),
(38, '2021-11-22 11:30:46', 'pisau ginsu', 'Roll', 3, 'tajam sekali'),
(39, '2021-11-22 11:31:01', 'pisau ginsu edit', 'Roll', 30, 'tajam sekali');

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
(1, 'kopi kenangan', '3.000', '0', 7, '-', 4, 'Karung', 'BMM', 10, 'manis', '2021-12-16 03:04:18', '2021-12-16 03:10:34'),
(2, 'permen yupi', '6.000', '0', 7, '-', 3, 'Karung', 'All Size', 14, 'manis', '2021-12-16 03:12:26', '2021-12-16 03:14:20'),
(3, 'donat', '10.000', '0', 7, '-', 4, 'pcs', 'All Size', 15, 'bulat', '2021-12-17 04:19:58', '2021-12-17 04:24:29'),
(4, 'combro', '10.000', '0', 6, '-', 2, 'Roll', 'BMM', 8, 'pedas', '2021-12-20 03:14:30', '2021-12-20 03:14:46'),
(5, 'misro', '12.000', '0', 9, '-', 3, 'pcs', 'BMM', 15, 'manis', '2021-12-20 03:15:10', '2021-12-20 03:15:25');

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
(4, 'mie goreng', '1.000', '0', 7, ' ', 0, 'Karung', 'All Size', 7, 'enak', '2021-12-15 09:38:13', '2021-12-16 10:18:13'),
(5, 'bakwan goreng', '3.000', '0', 12, '-', 5, 'Karung', 'All Size', 10, 'gurih', '2021-12-15 09:56:24', '2021-12-15 09:56:41'),
(6, 'jagung bakar', '9.000', '0', 9, '-', 4, 'Roll', 'BMM', 5, 'pedas', '2021-12-15 09:57:13', '2021-12-15 09:58:23'),
(7, 'mie rebus', '8.000', '0', 7, '-', 4, 'pcs', 'BMM', 10, 'panas', '2021-12-16 02:46:45', '2021-12-16 02:47:05'),
(8, 'cakwe', '2.000', '0', 6, '-', 5, 'pcs', 'All Size', 7, 'pedas', '2021-12-16 10:18:33', '2021-12-16 10:18:56'),
(9, 'roti goreng', '6.000', '0', 8, '-', 5, 'Karung', 'BMM', 6, 'rasa cokelat', '2021-12-17 02:48:36', '2021-12-17 02:48:54'),
(10, 'hamburger', '25.000', '0', 6, '-', 8, 'Karung', 'All Size', 10, 'pedas', '2021-12-20 02:46:22', '2021-12-20 02:46:43');

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
  `no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keberangkatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kapal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mulai_sewa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_penyewa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sewa_selesai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `myfile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_perizinan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `terbit_file` datetime NOT NULL,
  `akhir_file` datetime NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kapal_pribadi`
--

INSERT INTO `kapal_pribadi` (`id`, `no`, `keberangkatan`, `nama_kapal`, `tujuan`, `nama_kru`, `mulai_sewa`, `nama_penyewa`, `sewa_selesai`, `image`, `myfile`, `nama_file`, `nama_perizinan`, `terbit_file`, `akhir_file`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, '', '', '', '', '', '', '', '', '', 'document1.jpg', 'document1', 'no : 45-24/45911', '2021-10-13 00:00:00', '2021-12-14 00:00:00', '', '2021-11-25 07:33:29', '2021-11-25 07:33:29'),
(2, '', '', '', '', '', '', '', '', '', 'document2.jpg', 'document2', 'no : 45-24/4512', '2021-11-12 00:00:00', '2021-11-14 00:00:00', '', '2021-11-25 07:37:00', '2021-11-25 07:37:00');

-- --------------------------------------------------------

--
-- Table structure for table `kapal_sewa`
--

CREATE TABLE `kapal_sewa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kapal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penanggung_jawab` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kru_karyawan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_sertifikat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keberangkatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_berangkat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_datang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kapal_sewa`
--

INSERT INTO `kapal_sewa` (`id`, `unit`, `nama_kapal`, `owner`, `penanggung_jawab`, `kru_karyawan`, `no_sertifikat`, `keberangkatan`, `image`, `tujuan`, `tgl_berangkat`, `tgl_datang`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, '123', 'ada', 'Owner Lama', 'ada', 'ada', '0986182631637777', 'Jakarta', '1636354784folder.png', 'Jakarta', '2021-12-31', '2021-12-31', 'ada', '2021-11-08 06:59:44', '2021-11-08 06:59:44'),
(2, '911', 'Kapal TNI', 'Owner Baru', 'Owner Lama', 'Kru Baru', '0986182631637777', 'Bandung', '1636519945folder.png', 'Jakarta', '2022-02-22', '2022-03-03', 'Sudah Berangkat', '2021-11-10 04:52:25', '2021-11-10 04:52:25'),
(3, '2', 'Kapal baru', 'Owner Lama', 'ada', 'ada', '123', 'Jakarta', '1636525763folder.png', 'Jakarta', '2021-11-30', '2021-12-31', 'ada', '2021-11-10 06:29:23', '2021-11-10 06:29:23'),
(4, '111', 'ada', 'ada', 'PASTIIIII', 'ada', '123', 'Bandung', '1636528408avatar.png', 'Bandung', '2021-10-31', '2021-12-30', 'adada', '2021-11-10 07:13:28', '2021-11-10 07:13:28');

-- --------------------------------------------------------

--
-- Table structure for table `kp`
--

CREATE TABLE `kp` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kapal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keberangkatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kru_kapal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_penyewa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_keberangkatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_tiba` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_izin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_terbitfile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_berakhirfile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kru`
--

CREATE TABLE `kru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
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
  `sign_off` date NOT NULL,
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
(3, '67@gmail.com.jpg', 'rahmi', 8567445235, 'Madura', '2020-07-13', 'perempuan', 'ktp', '43463464', 'jawa tengah', 'depok', 76, 66, 'limo', 'gandul', 'medan', '67@gmail.com', 'sertifikat2', '3463436346', '2020-04-15', 'kontrak', '2022-06-16', 'sudah_menikah', '74747457', 'lead_IT', '2021-12-15 04:17:50', '2021-12-15 04:17:50'),
(4, '55@gmail.com.jpg', 'nina', 8567445272, 'Bandung', '2018-02-09', 'perempuan', 'ktp', '3463634643', 'jawa tengah', 'dki jakarta', 9, 87, 'jagakarsa', 'gandul', 'jakarta', '55@gmail.com', 'sertifikat3', '34636346346', '2020-06-15', 'tetap', '2021-10-12', 'single', '654656', 'staff', '2021-12-15 04:19:36', '2021-12-15 04:19:36'),
(5, 'rh@yahoo.com.png', 'rahmi', 85674452100, 'Bandung', '2019-07-12', 'perempuan', 'sim', '52525252', 'jawa tengah', 'dki jakarta', 65, 12, 'jagakarsa', 'cilandak', 'bekasi', 'rh@yahoo.com', 'sertifikat1', '3423232432', '2020-07-10', 'tetap', '2021-12-13', 'single', '34324323', 'staff', '2021-12-15 06:15:46', '2021-12-15 06:15:46'),
(6, 'rh5@gmail.com.jpg', 'rahmi', 8567445211, 'Bandung', '2017-02-10', 'perempuan', 'sim', '212121231', 'jawa tengah', 'dki jakarta', 98, 34, 'limo', 'gandul', 'jogjakarta', 'rh5@gmail.com', 'sertifikat4', '342433245', '2020-07-10', 'magang', '2021-12-13', 'sudah_menikah', '453434', 'lead_IT', '2021-12-15 06:17:10', '2021-12-15 06:17:10');

-- --------------------------------------------------------

--
-- Table structure for table `loginvgmb`
--

CREATE TABLE `loginvgmb` (
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
-- Dumping data for table `loginvgmb`
--

INSERT INTO `loginvgmb` (`id`, `keterangan`, `status`, `waktu`, `nama_barang`, `stock_awal`, `stock`, `choose`, `update_stock`, `unit`, `type`, `total_stock`, `text`, `created_at`, `updated_at`) VALUES
(1, 'tambah data', 'OK', '2021-12-16 10:04:18', 'kopi kenangan', 0, 7, ' ', 0, 'Karung', 'BMM', 7, 'manis', '2021-12-16 03:04:18', '2021-12-16 03:04:18'),
(2, 'edit data', 'OK', '2021-12-16 10:10:25', 'kopi kenangan', 0, 7, '+', 7, 'Karung', 'BMM', 14, 'manis', '2021-12-16 03:04:18', '2021-12-16 03:10:25'),
(3, 'edit data', 'OK', '2021-12-16 10:10:34', 'kopi kenangan', 0, 7, '-', 4, 'Karung', 'BMM', 10, 'manis', '2021-12-16 03:04:18', '2021-12-16 03:10:34'),
(4, 'tambah data', 'OK', '2021-12-16 10:12:26', 'permen yupi', 0, 7, ' ', 0, 'Karung', 'All Size', 7, 'manis', '2021-12-16 03:12:26', '2021-12-16 03:12:26'),
(5, 'edit data', 'OK', '2021-12-16 10:13:23', 'permen yupi', 0, 7, '+', 5, 'Karung', 'All Size', 12, 'manis', '2021-12-16 03:12:26', '2021-12-16 03:13:23'),
(6, 'edit data', 'OK', '2021-12-16 10:13:34', 'permen yupi', 0, 7, '+', 5, 'Karung', 'All Size', 17, 'manis', '2021-12-16 03:12:26', '2021-12-16 03:13:34'),
(7, 'edit data', 'OK', '2021-12-16 10:14:20', 'permen yupi', 0, 7, '-', 3, 'Karung', 'All Size', 14, 'manis', '2021-12-16 03:12:26', '2021-12-16 03:14:20'),
(8, 'tambah data', 'OK', '2021-12-17 11:19:58', 'donat', 0, 7, ' ', 0, 'pcs', 'All Size', 7, 'bulat', '2021-12-17 04:19:58', '2021-12-17 04:19:58'),
(9, 'edit data', 'OK', '2021-12-17 11:24:08', 'donat', 0, 7, '+', 7, 'pcs', 'All Size', 14, 'bulat', '2021-12-17 04:19:58', '2021-12-17 04:24:08'),
(10, 'edit data', 'OK', '2021-12-17 11:24:18', 'donat', 0, 7, '+', 5, 'pcs', 'All Size', 19, 'bulat', '2021-12-17 04:19:58', '2021-12-17 04:24:18'),
(11, 'edit data', 'OK', '2021-12-17 11:24:29', 'donat', 0, 7, '-', 4, 'pcs', 'All Size', 15, 'bulat', '2021-12-17 04:19:58', '2021-12-17 04:24:29'),
(12, 'tambah data', 'OK', '2021-12-20 10:14:30', 'combro', 0, 6, ' ', 0, 'Roll', 'BMM', 6, 'pedas', '2021-12-20 03:14:30', '2021-12-20 03:14:30'),
(13, 'edit data', 'OK', '2021-12-20 10:14:39', 'combro', 0, 6, '+', 4, 'Roll', 'BMM', 10, 'pedas', '2021-12-20 03:14:30', '2021-12-20 03:14:39'),
(14, 'edit data', 'OK', '2021-12-20 10:14:46', 'combro', 0, 6, '-', 2, 'Roll', 'BMM', 8, 'pedas', '2021-12-20 03:14:30', '2021-12-20 03:14:46'),
(15, 'tambah data', 'OK', '2021-12-20 10:15:10', 'misro', 0, 9, ' ', 0, 'pcs', 'BMM', 9, 'manis', '2021-12-20 03:15:10', '2021-12-20 03:15:10'),
(16, 'edit data', 'OK', '2021-12-20 10:15:18', 'misro', 0, 9, '+', 9, 'pcs', 'BMM', 18, 'manis', '2021-12-20 03:15:10', '2021-12-20 03:15:18'),
(17, 'edit data', 'OK', '2021-12-20 10:15:25', 'misro', 0, 9, '-', 3, 'pcs', 'BMM', 15, 'manis', '2021-12-20 03:15:10', '2021-12-20 03:15:25');

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
(1, 'tambah data', 'OK', '2021-12-15 16:27:30', 'cat tembok', 0, 8, ' ', 0, 'pcs', 'All Size', 8, 'putih', '2021-12-15 09:27:30', '2021-12-15 09:27:30'),
(2, 'edit data', 'OK', '2021-12-15 16:27:54', 'cat tembok edit', 0, 8, ' ', 0, 'pcs', 'All Size', 8, 'putih', '2021-12-15 09:27:30', '2021-12-15 09:27:54'),
(3, 'edit data', 'OK', '2021-12-15 16:28:02', 'cat tembok edit', 0, 8, '+', 8, 'pcs', 'All Size', 16, 'putih', '2021-12-15 09:27:30', '2021-12-15 09:28:02'),
(4, 'edit data', 'OK', '2021-12-15 16:28:11', 'cat tembok edit', 0, 8, '-', 1, 'pcs', 'All Size', 15, 'putih', '2021-12-15 09:27:30', '2021-12-15 09:28:11'),
(5, 'tambah data', 'OK', '2021-12-15 16:38:13', 'nasi kuning', 0, 7, ' ', 0, 'Karung', 'All Size', 7, 'enak', '2021-12-15 09:38:13', '2021-12-15 09:38:13'),
(6, 'edit data', 'OK', '2021-12-15 16:38:24', 'mie goreng', 0, 7, ' ', 0, 'Karung', 'All Size', 7, 'enak', '2021-12-15 09:38:13', '2021-12-15 09:38:24'),
(7, 'hapus data', 'VOID', '2021-12-15 16:55:15', 'cat tembok edit', 0, 8, '-', 1, 'pcs', 'All Size', 15, 'putih', '2021-12-15 09:27:30', '2021-12-15 09:55:15'),
(8, 'tambah data', 'OK', '2021-12-15 16:56:24', 'bakwan goreng', 0, 12, ' ', 0, 'Karung', 'All Size', 12, 'gurih', '2021-12-15 09:56:24', '2021-12-15 09:56:24'),
(9, 'edit data', 'OK', '2021-12-15 16:56:33', 'bakwan goreng', 0, 12, '+', 3, 'Karung', 'All Size', 15, 'gurih', '2021-12-15 09:56:24', '2021-12-15 09:56:33'),
(10, 'edit data', 'OK', '2021-12-15 16:56:41', 'bakwan goreng', 0, 12, '-', 5, 'Karung', 'All Size', 10, 'gurih', '2021-12-15 09:56:24', '2021-12-15 09:56:41'),
(11, 'tambah data', 'OK', '2021-12-15 16:57:13', 'jagung bakar', 0, 9, ' ', 0, 'Roll', 'BMM', 9, 'pedas', '2021-12-15 09:57:13', '2021-12-15 09:57:13'),
(12, 'edit data', 'OK', '2021-12-15 16:57:22', 'jagung bakar', 0, 9, '+', 9, 'Roll', 'BMM', 18, 'pedas', '2021-12-15 09:57:13', '2021-12-15 09:57:22'),
(13, 'edit data', 'OK', '2021-12-15 16:57:30', 'jagung bakar', 0, 9, '-', 10, 'Roll', 'BMM', 8, 'pedas', '2021-12-15 09:57:13', '2021-12-15 09:57:30'),
(14, 'edit data', 'OK', '2021-12-15 16:58:15', 'jagung bakar', 0, 9, '+', 1, 'Roll', 'BMM', 9, 'pedas', '2021-12-15 09:57:13', '2021-12-15 09:58:15'),
(15, 'edit data', 'OK', '2021-12-15 16:58:23', 'jagung bakar', 0, 9, '-', 4, 'Roll', 'BMM', 5, 'pedas', '2021-12-15 09:57:13', '2021-12-15 09:58:23'),
(16, 'tambah data', 'OK', '2021-12-16 09:46:45', 'mie rebus', 0, 7, ' ', 0, 'pcs', 'BMM', 7, 'panas', '2021-12-16 02:46:45', '2021-12-16 02:46:45'),
(17, 'edit data', 'OK', '2021-12-16 09:46:57', 'mie rebus', 0, 7, '+', 7, 'pcs', 'BMM', 14, 'panas', '2021-12-16 02:46:45', '2021-12-16 02:46:57'),
(18, 'edit data', 'OK', '2021-12-16 09:47:05', 'mie rebus', 0, 7, '-', 4, 'pcs', 'BMM', 10, 'panas', '2021-12-16 02:46:45', '2021-12-16 02:47:05'),
(19, 'edit data', 'OK', '2021-12-16 17:18:13', 'mie goreng', 0, 7, ' ', 0, 'Karung', 'All Size', 7, 'enak', '2021-12-15 09:38:13', '2021-12-16 10:18:13'),
(20, 'tambah data', 'OK', '2021-12-16 17:18:33', 'cakwe', 0, 6, ' ', 0, 'pcs', 'All Size', 6, 'pedas', '2021-12-16 10:18:33', '2021-12-16 10:18:33'),
(21, 'edit data', 'OK', '2021-12-16 17:18:41', 'cakwe', 0, 6, ' ', 0, 'pcs', 'All Size', 6, 'pedas', '2021-12-16 10:18:33', '2021-12-16 10:18:41'),
(22, 'edit data', 'OK', '2021-12-16 17:18:48', 'cakwe', 0, 6, '+', 6, 'pcs', 'All Size', 12, 'pedas', '2021-12-16 10:18:33', '2021-12-16 10:18:48'),
(23, 'edit data', 'OK', '2021-12-16 17:18:56', 'cakwe', 0, 6, '-', 5, 'pcs', 'All Size', 7, 'pedas', '2021-12-16 10:18:33', '2021-12-16 10:18:56'),
(24, 'tambah data', 'OK', '2021-12-17 09:48:36', 'roti goreng', 0, 8, ' ', 0, 'Karung', 'BMM', 8, 'rasa cokelat', '2021-12-17 02:48:36', '2021-12-17 02:48:36'),
(25, 'edit data', 'OK', '2021-12-17 09:48:45', 'roti goreng', 0, 8, '+', 3, 'Karung', 'BMM', 11, 'rasa cokelat', '2021-12-17 02:48:36', '2021-12-17 02:48:45'),
(26, 'edit data', 'OK', '2021-12-17 09:48:54', 'roti goreng', 0, 8, '-', 5, 'Karung', 'BMM', 6, 'rasa cokelat', '2021-12-17 02:48:36', '2021-12-17 02:48:54'),
(27, 'tambah data', 'OK', '2021-12-20 09:46:22', 'hamburger', 0, 6, ' ', 0, 'Karung', 'All Size', 6, 'pedas', '2021-12-20 02:46:22', '2021-12-20 02:46:22'),
(28, 'edit data', 'OK', '2021-12-20 09:46:34', 'hamburger', 0, 6, '+', 12, 'Karung', 'All Size', 18, 'pedas', '2021-12-20 02:46:22', '2021-12-20 02:46:34'),
(29, 'edit data', 'OK', '2021-12-20 09:46:43', 'hamburger', 0, 6, '-', 8, 'Karung', 'All Size', 10, 'pedas', '2021-12-20 02:46:22', '2021-12-20 02:46:43');

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
(6, '2021_10_08_024312_create_kapal_sewa_table', 1),
(7, '2021_10_21_051705_create__gambar_table', 1),
(8, '2021_10_25_062717_create_kp_table', 1),
(12, '2021_11_05_070712_create_vendor_table', 1),
(26, '2021_11_16_100132_create_spnexel_table', 4),
(30, '2021_11_16_152320_create_gmbexel_table', 6),
(36, '2021_10_06_040813_create_kapal_pribadi_table', 10),
(39, '2021_11_29_141535_add_sign_off_to_kru_table', 12),
(41, '2021_11_30_105648_create_customergmb_table', 14),
(42, '2021_11_30_163249_create_agency_table', 15),
(43, '2021_11_03_045910_create_kru_table', 16),
(44, '2021_10_26_084827_create_inventoryspn_table', 17),
(45, '2021_11_09_124732_create_loginvspn_table', 17),
(46, '2021_10_29_092358_create_inventorygmb_table', 18),
(47, '2021_11_09_125426_create_loginvgmb_table', 18);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(11, '2021-11-18 11:53:47', 'ayam geprek', 'Karung', 8, 'pedas'),
(12, '2021-11-18 11:56:15', 'ikan rebus', 'Roll', 2, 'enak'),
(13, '2021-11-18 13:23:24', 'nasi kebuli', 'Karung', 3, 'acar bawang'),
(14, '2021-11-18 13:25:10', 'nasi timbel', 'Roll', 5, 'manis'),
(15, '2021-11-18 13:28:24', 'nasi kebuli', 'Karung', 7, 'acar bawang'),
(16, '2021-11-18 15:56:59', 'baju koko', 'Karung', 7, 'bagus'),
(17, '2021-11-19 16:18:18', 'gorengan', 'pcs', 10, 'minyak'),
(18, '2021-11-19 16:18:30', 'pelastik', 'Roll', 5, 'botol'),
(19, '2021-11-19 16:18:48', 'risol', 'Karung', 5, 'pedas'),
(20, '2021-11-19 16:18:59', 'risol', 'Karung', 51, 'pedas'),
(21, '2021-11-19 16:19:08', 'risol', 'Karung', 41, 'pedas'),
(22, '2021-11-22 10:44:38', 'mie yamin', 'Karung', 3, 'rebus'),
(23, '2021-11-22 10:44:50', 'mie yamin', 'Karung', 8, 'rebus'),
(24, '2021-11-22 10:45:00', 'mie yamin', 'Karung', 16, 'rebus'),
(25, '2021-11-22 10:45:11', 'mie yamin', 'Karung', 2, 'rebus'),
(26, '2021-11-22 10:45:23', 'risol', 'Karung', 23, 'pedas'),
(27, '2021-11-22 10:45:34', 'risol', 'Karung', 8, 'pedas'),
(28, '2021-11-22 10:45:44', 'risol', 'Karung', 8, 'pedas'),
(29, '2021-11-22 10:46:59', 'risol', 'Karung', 8, 'pedas'),
(30, '2021-11-22 11:03:14', 'risol edit', 'Karung', 8, 'pedas');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
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
(1, 'angga', '0', 'mranggadiaksa@gmail.com', NULL, '$2y$10$tiYE9D4Dd7d0Eq/d3npTHuA4BI0Rn/jiPBI50pEySGfec.gPJcoOS', 'cPN7SIPsTvShfqeL1bJNPNAImmPW22m18EGuXMWePHCikVDHc4PSKLWJKFdX', '2021-11-08 06:56:57', '2021-11-10 04:20:25'),
(2, 'Admin', '1', 'admin@gmail.com', NULL, '$2y$10$z2C3im.o3DK10n6aZAbblOXkQ2GAa/ORM0/Z.Kvjug3.jRp054Ru2', NULL, '2021-11-10 03:44:44', '2021-11-10 03:44:44'),
(3, 'rico', '1', 'rico@gmail.com', NULL, '$2y$10$l5IYke/J3cqzdDlgpX5MyO0Sle4MZGT62XtiBmQoqFk.tJvcWd0pO', NULL, '2021-11-12 07:40:24', '2021-11-12 07:40:24');

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kapal_sewa`
--
ALTER TABLE `kapal_sewa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kp`
--
ALTER TABLE `kp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kru`
--
ALTER TABLE `kru`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kru_email_unique` (`email`);

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agency`
--
ALTER TABLE `agency`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customergmb`
--
ALTER TABLE `customergmb`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gmbexel`
--
ALTER TABLE `gmbexel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `inventorygmb`
--
ALTER TABLE `inventorygmb`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `inventoryspn`
--
ALTER TABLE `inventoryspn`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kapal_pribadi`
--
ALTER TABLE `kapal_pribadi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kapal_sewa`
--
ALTER TABLE `kapal_sewa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kp`
--
ALTER TABLE `kp`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kru`
--
ALTER TABLE `kru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `loginvgmb`
--
ALTER TABLE `loginvgmb`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `loginvspn`
--
ALTER TABLE `loginvspn`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spnexel`
--
ALTER TABLE `spnexel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
