-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD:spn.sql
-- Generation Time: Dec 27, 2021 at 10:51 AM
=======
-- Generation Time: Dec 23, 2021 at 07:32 AM
>>>>>>> 1ac33809e045509a6849668cfa7ff86a36dd3891:spn-gitpull.sql
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

-- --------------------------------------------------------

--
-- Table structure for table `customergmb`
--

CREATE TABLE `customergmb` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga_beli` varchar(255) NOT NULL,
  `harga_jual` varchar(255) NOT NULL,
  `stock_awal` varchar(255) NOT NULL DEFAULT '0',
  `stock` int(11) NOT NULL,
  `choose` varchar(255) NOT NULL DEFAULT '',
  `update_stock` int(11) NOT NULL DEFAULT 0,
  `unit` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `total_stock` int(11) NOT NULL,
  `text` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customergmb`
--

<<<<<<< HEAD:spn.sql
INSERT INTO `customergmb` (`id`, `nama_barang`, `harga_beli`, `harga_jual`, `stock_awal`, `stock`, `choose`, `update_stock`, `unit`, `type`, `total_stock`, `text`, `created_at`, `updated_at`) VALUES
(4, 'sarung', '15.000', '25.000', '0', 15, '+', 3, 'Karung', '3/4', 16, 'baru', '2021-12-27 08:32:45', '2021-12-27 09:10:25'),
(5, 'wafer cokelat', '10.000', '17.000', '0', 10, '-', 2, 'Roll', 'All Size', 10, 'renyah edit', '2021-12-27 09:11:46', '2021-12-27 09:13:44');
=======
INSERT INTO `customergmb` (`id`, `nama_kapal`, `nama_barang`, `pcs`, `created_at`, `updated_at`) VALUES
(1, 'ikan sapu', 'cat', '2 pcs', '2021-12-23 06:21:40', '2021-12-23 06:21:40');
>>>>>>> 1ac33809e045509a6849668cfa7ff86a36dd3891:spn-gitpull.sql

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
  `jenis_kapal` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_izin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_berkas` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_terbitfile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_berakhirfile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(58, 44, 'p', '1638248213avatar.png', 'Sertifikat1', 'izin0001', '', '2021-11-01', '2021-12-10', '2021-11-30 04:56:53', '2021-11-30 04:56:53'),
(59, 25, 's', '16382490671.pdf', 'adad', 'izin0001', '', '2021-11-08', '2021-11-26', '2021-11-30 05:11:07', '2021-11-30 05:11:07'),
(60, 46, 'p', '1638256095resi5.pdf', 'Kontrak 1', 'Kontrak 1', 'Kontrak', '2021-10-31', '2021-12-03', '2021-11-30 07:08:15', '2021-11-30 07:08:15'),
(71, 25, 's', '1638852070surat_pernyataan.pdf', 'Kontrak 1', 'Kon1', NULL, '2021-11-28', '2022-01-01', '2021-12-07 04:41:10', '2021-12-07 04:41:10'),
(90, 64, 'p', '1639628604folder.png', 'Sertifikat2', 'SRT-008', 'Sertifikat', '2021-11-29', '2022-01-08', '2021-12-16 04:23:24', '2021-12-16 04:23:24'),
(91, 63, 'p', '1639981276surat_pernyataan.pdf', 'Kontrak 2', 'Kon-10', 'Kontrak', '2021-11-28', '2022-01-08', '2021-12-20 06:21:16', '2021-12-20 06:21:16'),
(92, 46, 'p', '1639986661avatar.png', 'Sertifikat11', 'sert', 'Sertifikat', '2021-11-29', '2022-01-08', '2021-12-20 07:51:01', '2021-12-20 07:51:01'),
(93, 63, 'p', '1640068020folder.png', 'Sertifikat 12', 'SRT-0012', 'Sertifikat', '2021-11-28', '2021-12-24', '2021-12-21 06:27:00', '2021-12-21 06:27:00'),
(94, 63, 'p', '1640158524house.png', 'Sertifikat 13', 'SRT-0013', 'Sertifikat', '2021-11-29', '2022-01-08', '2021-12-22 07:35:24', '2021-12-22 07:35:24');

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
<<<<<<< HEAD:spn.sql
(8, 'handphone', '18.000', '0', 7, '-', 1, 'Karung', '3/4', 13, 'baru', '2021-12-23 06:27:25', '2021-12-23 06:27:48'),
(9, 'bakso urat', '15.000', '0', 3, ' ', 0, 'Karung', 'All Size', 3, 'berkuah', '2021-12-23 09:26:04', '2021-12-23 09:26:04');
=======
(7, 'hr', '5.000', '0', 7, '-', 6, 'pcs', 'BMM', 8, 'tyt', '2021-12-23 06:08:24', '2021-12-23 06:21:04'),
(8, 'handphone', '18.000', '0', 7, '-', 1, 'Karung', '3/4', 13, 'baru', '2021-12-23 06:27:25', '2021-12-23 06:27:48');
>>>>>>> 1ac33809e045509a6849668cfa7ff86a36dd3891:spn-gitpull.sql

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
<<<<<<< HEAD:spn.sql
(3, 'nasi kebuli', '20.000', '0', 9, '-', 1, 'pcs', '3/4', 9, 'lezat', '2021-12-23 05:22:01', '2021-12-23 09:18:06'),
(5, 'wafer cokelat', '9.000', '0', 7, ' ', 0, 'Karung', 'BMM', 7, 'renyah', '2021-12-23 09:14:54', '2021-12-23 09:17:19');
=======
(3, 'nasi kucing', '20.000', '0', 9, '-', 1, 'pcs', '3/4', 9, 'lezat', '2021-12-23 05:22:01', '2021-12-23 05:22:27');
>>>>>>> 1ac33809e045509a6849668cfa7ff86a36dd3891:spn-gitpull.sql

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
(44, 'Customer 11', 'Kapal SPN012', 'Pelabuhan Tanjung Mas', 'rendy irwan  (Nahkoda)', 'Pelabuhan Harbour Bay', 'Customer 4', '2020-10-31', 'Rp. 120.000.000', '2020-11-16', 'DONE', '2021-11-30 04:56:31', '2021-12-22 09:24:32'),
(46, 'PT MOI', 'Kapal SPN07', 'Pelabuhan Tanjung Perak', 'dendy santoso  (Direktur) - deco  (Staff) - abdul  (Lead IT) - Nugroho  (Staff) - Wahyu  (Direktur) - arif  (Lead IT) - Budi  (Nahkoda) - Yumuls  (direktur)', 'Pelabuhan Gorontalo', 'Customer 7', '2021-11-01', 'Rp. 15.000.000', '2021-12-11', 'NOTED', '2021-11-30 07:07:41', '2021-12-20 08:06:36'),
(63, 'PT THUNDERX3', 'Kapal SPN021', 'Pelabuhan Harbour Bay', 'dendy santoso  (Direktur) - abdul  (Lead IT) - arif  (Lead IT) - Yumuls  (direktur)', 'Pelabuhan Sunda Kelapa', 'Customer 2', '2021-11-29', 'Rp. 10.000.000', '2021-12-30', 'NOTED', '2021-12-08 04:17:26', '2021-12-22 07:35:38'),
(64, 'PT SAMPOERNA', 'Kapal SPN07', 'Pelabuhan Merak', 'Budi  (Nahkoda) - Yumuls  (direktur)', 'Pelabuhan Sorekarno-Hatta', 'Customer 8', '2021-12-06', 'Rp. 30.000.000', '2022-01-08', 'NOTED', '2021-12-08 04:45:23', '2021-12-16 09:27:30');

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
(18, '9999', 'SPN-001', 'Owner Lama', 'Penanggung Jawab 1', 'PT Sumber Jaya', NULL, 'Pelabuhan Ketapang', 'Pelabuhan Gilimanuk', '2021-12-26', '2021-11-28', 'Rp. 12.000.000', 'Rp. 20.000.000', 'Done', '2021-11-29 04:57:47', '2021-11-30 05:09:05'),
(19, '2', 'SPN-002', 'Owner Lama', 'Penanggung Jawab 2', 'PT Surya Kencana', NULL, 'Pelabuhan Ketapang', 'Pelabuhan Batam-Center', '2023-02-02', '2022-03-02', 'Rp. 9.000.000', 'Rp. 10.000.000', 'Oke', '2021-11-29 06:08:35', '2021-11-30 07:58:49'),
(20, 'SPN-001', 'Kapal SPN03', 'Owner Baru', 'Owner Lama', 'PT Sumber Jaya', NULL, 'Pelabuhan Harbour Bay', 'Pelabuhan Tanjung Perak', '2022-02-05', '2022-03-04', 'Rp. 200.000.000', 'Rp. 300.000.000', 'Noted', '2021-11-29 08:42:01', '2021-11-30 07:59:09'),
(25, '123', 'Kapal SPN02', 'Owner Lama', 'Penanggung Jawab 3', 'PT Surya Kencana', NULL, 'Pelabuhan Tanjung Perak', 'Pelabuhan Tanjung Perak', '2022-02-02', '2022-02-02', 'Rp. 90.000.000', 'Rp. 100.000.000', 'Lunas', '2021-11-29 09:51:42', '2021-12-07 04:41:56');

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
(1, 'dendy santoso.jpeg', 'dendy santoso', '085674452744', 'jakarta', '2002-06-11', 'laki-laki', 'ktp', '745754', 'jawa tengah', 'dki jakarta', 9, 8, 'jagakarsa', 'gandul', 'jakarta', 'dendy22@gmail.com', 'sertifikat1', '784644', '2021-10-21', 'tetap', NULL, '', '', 'Direktur', '2021-11-09 07:28:51', '2021-11-09 07:28:51'),
(2, 'deco.jpg', 'deco', '085674452723', 'jakarta', '2007-08-10', 'laki-laki', 'ktp', '745743', 'jawa barat', 'dki jakarta', 6, 7, 'jagakarsa', 'gandul', 'bogor', 'deco@gmail.com', 'sertifikat1', '6785654', '2021-11-04', 'tetap', NULL, '', '', 'Staff', '2021-11-09 07:37:00', '2021-11-09 07:37:00'),
(3, 'rendy irwan.jpg', 'rendy irwan', '085674454011', 'madura', '2002-06-05', 'laki-laki', 'ktp', '7474748', 'jawa barat', 'yogyakarta', 76, 88, 'limo', 'cilandak', 'depok', 'rendy@yahoo.com', 'sertifikat3', '5675478', '2021-11-05', 'magang', NULL, '', '', 'Nahkoda', '2021-11-09 07:41:33', '2021-11-09 07:41:33'),
(4, 'abdul.jpg', 'abdul', '085674452712', 'jakarta', '2001-08-21', 'laki-laki', 'ktp', '36377854', 'jawa tengah', 'depok', 87, 42, 'limo', 'cilandak', 'medan', 'abdu@gmail.com', 'sertifikat4', '4677432', '2021-11-12', 'kontrak', NULL, '', '', 'Lead IT', '2021-11-09 07:44:38', '2021-11-09 07:44:38'),
(5, 'Nugroho.png', 'Nugroho', '08982139134', 'bandung', '2021-12-31', 'laki-laki', 'sim', '8', 'jawa barat', 'depok', 5, 6, 'limo', 'krukut', 'Kranggan', 'spnmoi@gmail.com', 'ada', '51231231', '2020-10-29', 'magang', NULL, '', '', 'Staff', '2021-11-19 09:34:21', '2021-11-19 09:34:21'),
(6, 'Wahyu.png', 'Wahyu', '08982139134', 'jakarta', '2021-12-31', 'perempuan', 'ktp', '6', 'jawa tengah', 'dki jakarta', 4, 1, 'jagakarsa', 'gandul', 'GG. Jemari, Jl. Gempora I no.76', 'wahyu@gmail.com', 'ada', '-1', '2021-12-31', 'kontrak', NULL, '', '', 'Direktur', '2021-11-22 06:37:32', '2021-11-22 06:37:32'),
(7, 'arif.png', 'arif', '089821391', 'bandung', '2019-07-09', 'laki-laki', 'ktp', '655778', 'jawa tengah', 'dki jakarta', 56, 11, 'jagakarsa', 'krukut', 'depok', 'arif@gmail.com', 'sertifikat2\\3', '56677', '2021-07-14', 'tetap', NULL, '', '', 'Lead IT', '2021-12-01 09:38:02', '2021-12-01 09:38:02'),
(8, 'Budi (Nahkoda).png', 'Budi', '08982139134', 'madura', '2023-03-05', 'laki-laki', 'sim', '0123123', 'jawa barat', 'dki jakarta', 6, 3, 'jagakarsa', 'cilandak', 'kelapa gading', 'Budi@gmail.com', 'sertifikat2', '431231', '2019-02-03', 'kontrak', NULL, '', '', 'Nahkoda', '2021-12-06 04:40:17', '2021-12-06 04:40:17'),
(10, 'Yumuls.png', 'Yumuls', '08982139134', 'Jakarta', '2021-11-29', 'laki-laki', 'ktp', '2131', 'jawa tengah', 'yogyakarta', 22, 2, 'jagakarsa', 'krukut', 'kelapa gading', 'admin@gmail.com', 'ada', '0986182631637777', '2021-11-30', 'magang', '2021-12-31', 'single', '123123', 'direktur', '2021-12-16 05:03:53', '2021-12-16 05:03:53'),
(11, 'reki.jpg', 'reki', '085674452777', 'Bandung', '2017-06-06', 'laki-laki', 'ktp', '554334435', 'jawa barat', 'dki jakarta', 45, 33, 'limo', 'krukut', 'kuningan', 'reko@gmail.com', 'bebas', '58585', '2021-12-08', 'kontrak', '2021-12-29', 'single', '435643634634', 'direktur', '2021-12-23 06:29:16', '2021-12-23 06:29:16');

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
<<<<<<< HEAD:spn.sql
(8, 'edit data', 'OK', '2021-12-23 13:27:48', 'handphone', 0, 7, '-', 1, 'Karung', '3/4', 13, 'baru', '2021-12-23 06:27:25', '2021-12-23 06:27:48'),
(9, 'tambah data', 'OK', '2021-12-23 16:26:04', 'bakso urat', 0, 3, ' ', 0, 'Karung', 'All Size', 3, 'berkuah', '2021-12-23 09:26:04', '2021-12-23 09:26:04'),
(10, 'hapus data', 'VOID', '2021-12-27 16:40:03', 'hr', 0, 7, '-', 6, 'pcs', 'BMM', 8, 'tyt', '2021-12-23 06:08:24', '2021-12-27 09:40:03');
=======
(8, 'edit data', 'OK', '2021-12-23 13:27:48', 'handphone', 0, 7, '-', 1, 'Karung', '3/4', 13, 'baru', '2021-12-23 06:27:25', '2021-12-23 06:27:48');
>>>>>>> 1ac33809e045509a6849668cfa7ff86a36dd3891:spn-gitpull.sql

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
(1, 'tambah data', 'OK', '2021-12-23 12:12:32', 'grg', 0, 6, ' ', 0, 'pcs', 'All Size', 6, 'rere', '2021-12-23 05:12:32', '2021-12-23 05:12:32'),
(2, 'tambah data', 'OK', '2021-12-23 12:17:37', 'gger', 0, 6, ' ', 0, 'pcs', 'All Size', 6, 'kyukk', '2021-12-23 05:17:37', '2021-12-23 05:17:37'),
(3, 'tambah data', 'OK', '2021-12-23 12:22:01', 'nasi kucing', 0, 5, ' ', 0, 'pcs', '3/4', 5, 'lezat', '2021-12-23 05:22:01', '2021-12-23 05:22:01'),
(4, 'edit data', 'OK', '2021-12-23 12:22:10', 'nasi kucing', 0, 5, '+', 5, 'pcs', '3/4', 10, 'lezat', '2021-12-23 05:22:01', '2021-12-23 05:22:10'),
(5, 'edit data', 'OK', '2021-12-23 12:22:18', 'nasi kucing', 0, 5, '-', 1, 'pcs', '3/4', 9, 'lezat', '2021-12-23 05:22:01', '2021-12-23 05:22:18'),
(6, 'edit data', 'OK', '2021-12-23 12:22:27', 'nasi kucing', 0, 9, '-', 1, 'pcs', '3/4', 9, 'lezat', '2021-12-23 05:22:01', '2021-12-23 05:22:27'),
(7, 'hapus data', 'VOID', '2021-12-23 12:22:43', 'grg', 0, 6, ' ', 0, 'pcs', 'All Size', 6, 'rere', '2021-12-23 05:12:32', '2021-12-23 05:22:43'),
<<<<<<< HEAD:spn.sql
(8, 'hapus data', 'VOID', '2021-12-23 12:22:48', 'gger', 0, 6, ' ', 0, 'pcs', 'All Size', 6, 'kyukk', '2021-12-23 05:17:37', '2021-12-23 05:22:48'),
(10, 'tambah data', 'OK', '2021-12-23 16:14:54', 'wafer cikelat', 0, 7, ' ', 0, 'Karung', 'BMM', 7, 'renyah', '2021-12-23 09:14:54', '2021-12-23 09:14:54'),
(11, 'edit data', 'OK', '2021-12-23 16:17:19', 'wafer cokelat', 0, 7, ' ', 0, 'Karung', 'BMM', 7, 'renyah', '2021-12-23 09:14:54', '2021-12-23 09:17:19'),
(12, 'edit data', 'OK', '2021-12-23 16:18:06', 'nasi kebuli', 0, 9, '-', 1, 'pcs', '3/4', 9, 'lezat', '2021-12-23 05:22:01', '2021-12-23 09:18:06');
=======
(8, 'hapus data', 'VOID', '2021-12-23 12:22:48', 'gger', 0, 6, ' ', 0, 'pcs', 'All Size', 6, 'kyukk', '2021-12-23 05:17:37', '2021-12-23 05:22:48');

--
-- Triggers `loginvspn`
--
DELIMITER $$
CREATE TRIGGER `delete_status_loginvspn` AFTER DELETE ON `loginvspn` FOR EACH ROW BEGIN
    INSERT INTO spnexel (waktu,nama_barang,unit,total_stock,text,status)
    VALUES (now(),OLD.nama_barang,OLD.unit,OLD.total_stock,OLD.text,OLD.status);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `edit_status_loginvspn` AFTER UPDATE ON `loginvspn` FOR EACH ROW BEGIN
    INSERT INTO spnexel (waktu,nama_barang,unit,total_stock,text,status)
    VALUES (now(),NEW.nama_barang,NEW.unit,NEW.total_stock,NEW.text,'OK');
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert_status_loginvspn` AFTER INSERT ON `loginvspn` FOR EACH ROW BEGIN
    INSERT INTO spnexel (waktu,nama_barang,unit,total_stock,text,status)
    VALUES (now(),NEW.nama_barang,NEW.unit,NEW.total_stock,NEW.text,'OK');
END
$$
DELIMITER ;
>>>>>>> 1ac33809e045509a6849668cfa7ff86a36dd3891:spn-gitpull.sql

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
(32, '2021_10_26_084827_create_inventoryspn_table', 8),
(33, '2021_11_09_124732_create_loginvspn_table', 8),
(34, '2021_11_29_141535_add_sign_off_to_kru_table', 8),
<<<<<<< HEAD:spn.sql
=======
(35, '2021_11_30_105648_create_customergmb_table', 8),
>>>>>>> 1ac33809e045509a6849668cfa7ff86a36dd3891:spn-gitpull.sql
(36, '2021_11_30_163249_create_agency_table', 8),
(37, '2021_10_29_092358_create_inventorygmb_table', 9);

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
('admin@gmail.com', '$2y$10$.XL1WLroklq0r0nRzgtpL.uOVI8cv9U.s6D4stN.9/6GCe1aCKviC', '2021-12-22 05:00:27');

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
(5, 'admin site', '2', 'adminsite@gmail.com', NULL, '$2y$10$pYn4rrami3Jn0OV6yV9dMOMbmX5V0KdEKcqYQaJlwEl662dAjQa/a', NULL, '2021-12-02 04:04:24', '2021-12-02 04:04:24');

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
<<<<<<< HEAD:spn.sql
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
=======
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
>>>>>>> 1ac33809e045509a6849668cfa7ff86a36dd3891:spn-gitpull.sql

--
-- AUTO_INCREMENT for table `customergmb`
--
ALTER TABLE `customergmb`
<<<<<<< HEAD:spn.sql
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
=======
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
>>>>>>> 1ac33809e045509a6849668cfa7ff86a36dd3891:spn-gitpull.sql

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `gmbexel`
--
ALTER TABLE `gmbexel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inventorygmb`
--
ALTER TABLE `inventorygmb`
<<<<<<< HEAD:spn.sql
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
=======
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
>>>>>>> 1ac33809e045509a6849668cfa7ff86a36dd3891:spn-gitpull.sql

--
-- AUTO_INCREMENT for table `inventoryspn`
--
ALTER TABLE `inventoryspn`
<<<<<<< HEAD:spn.sql
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
=======
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
>>>>>>> 1ac33809e045509a6849668cfa7ff86a36dd3891:spn-gitpull.sql

--
-- AUTO_INCREMENT for table `kapal_pribadi`
--
ALTER TABLE `kapal_pribadi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `kapal_sewa`
--
ALTER TABLE `kapal_sewa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `kru`
--
ALTER TABLE `kru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `loginvgmb`
--
ALTER TABLE `loginvgmb`
<<<<<<< HEAD:spn.sql
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
=======
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
>>>>>>> 1ac33809e045509a6849668cfa7ff86a36dd3891:spn-gitpull.sql

--
-- AUTO_INCREMENT for table `loginvspn`
--
ALTER TABLE `loginvspn`
<<<<<<< HEAD:spn.sql
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
=======
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
>>>>>>> 1ac33809e045509a6849668cfa7ff86a36dd3891:spn-gitpull.sql

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `_uploadgambarkm`
--
ALTER TABLE `_uploadgambarkm`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
