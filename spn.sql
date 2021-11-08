-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2021 at 09:48 AM
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
-- Table structure for table `inventorygmb`
--

CREATE TABLE `inventorygmb` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `inventorygmb` (`id`, `nama_barang`, `stock`, `choose`, `update_stock`, `unit`, `type`, `total_stock`, `text`, `created_at`, `updated_at`) VALUES
(8, 'baju edit', 11, '-', 10, 'pcs', 'All Size', 1, 'bersih edit', '2021-11-08 00:00:09', '2021-11-08 00:35:16'),
(9, 'celana edit', 90, '-', 80, 'Karung', 'All Size', 10, 'kotor sekali', '2021-11-08 00:00:22', '2021-11-08 00:37:34'),
(10, 'topi', 5, ' ', 0, 'Roll', '3/4', 5, 'kepala', '2021-11-08 00:00:41', '2021-11-08 00:00:41'),
(11, 'sendal', 5, ' ', 0, 'pcs', 'All Size', 5, 'kaki', '2021-11-08 00:00:56', '2021-11-08 00:00:56'),
(12, 'batu', 8, ' ', 0, 'Karung', '3/4', 8, 'berat', '2021-11-08 00:36:46', '2021-11-08 00:36:46');

--
-- Triggers `inventorygmb`
--
DELIMITER $$
CREATE TRIGGER `delete_status_inventorygmb` AFTER DELETE ON `inventorygmb` FOR EACH ROW BEGIN
    INSERT INTO loginvgmb (keterangan,waktu,nama_barang,stock,choose,update_stock,unit,type,total_stock,text)
    VALUES ('hapus data',now(),OLD.nama_barang,OLD.stock,OLD.choose,OLD.update_stock,OLD.unit,OLD.type,OLD.total_stock,OLD.text);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `edit_status_inventorygmb` AFTER UPDATE ON `inventorygmb` FOR EACH ROW BEGIN
    INSERT INTO loginvgmb (keterangan,waktu,nama_barang,stock,choose,update_stock,unit,type,total_stock,text)
    VALUES ('edit data',now(),NEW.nama_barang,NEW.stock,NEW.choose,NEW.update_stock,NEW.unit,NEW.type,NEW.total_stock,NEW.text);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert_status_inventorygmb` AFTER INSERT ON `inventorygmb` FOR EACH ROW BEGIN
    INSERT INTO loginvgmb (keterangan,waktu,nama_barang,stock,choose,update_stock,unit,type,total_stock,text)
    VALUES ('tambah data',now(),NEW.nama_barang,NEW.stock,NEW.choose,NEW.update_stock,NEW.unit,NEW.type,NEW.total_stock,NEW.text);
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

INSERT INTO `inventoryspn` (`id`, `nama_barang`, `stock`, `choose`, `update_stock`, `unit`, `type`, `total_stock`, `text`, `created_at`, `updated_at`) VALUES
(1, 'cat', 5, ' ', 0, 'roll', '3/4', 5, 'putih', '2021-11-07 20:52:05', '2021-11-07 20:52:05'),
(2, 'paku', 8, ' ', 0, 'karung', 'all-size', 8, 'tajam', '2021-11-07 20:52:39', '2021-11-07 20:52:39');

--
-- Triggers `inventoryspn`
--
DELIMITER $$
CREATE TRIGGER `delete_status_inventoryspn` AFTER DELETE ON `inventoryspn` FOR EACH ROW BEGIN
    INSERT INTO loginvspn (keterangan,waktu,nama_barang,stock,choose,update_stock,unit,type,total_stock,text)
    VALUES ('hapus data',now(),OLD.nama_barang,OLD.stock,OLD.choose,OLD.update_stock,OLD.unit,OLD.type,OLD.total_stock,OLD.text);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `edit_status_inventoryspn` AFTER UPDATE ON `inventoryspn` FOR EACH ROW BEGIN
    INSERT INTO loginvspn (keterangan,waktu,nama_barang,stock,choose,update_stock,unit,type,total_stock,text)
    VALUES ('edit data',now(),NEW.nama_barang,NEW.stock,NEW.choose,NEW.update_stock,NEW.unit,NEW.type,NEW.total_stock,NEW.text);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert_status_inventoryspn` AFTER INSERT ON `inventoryspn` FOR EACH ROW BEGIN
    INSERT INTO loginvspn (keterangan,waktu,nama_barang,stock,choose,update_stock,unit,type,total_stock,text)
    VALUES ('tambah data',now(),NEW.nama_barang,NEW.stock,NEW.choose,NEW.update_stock,NEW.unit,NEW.type,NEW.total_stock,NEW.text);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `kapal_pribadi`
--

CREATE TABLE `kapal_pribadi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kapal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keberangkatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kru_kapal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_penyewa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_keberangkatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sertifikat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_tiba` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_berangkat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_datang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('perempuan','laki-laki') COLLATE utf8mb4_unicode_ci NOT NULL,
  `identitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_identitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rt` int(11) NOT NULL,
  `rw` int(11) NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_sertifikat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_sertifikat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_gabung` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kru`
--

INSERT INTO `kru` (`id`, `photo`, `nama`, `phone`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `identitas`, `no_identitas`, `provinsi`, `kota`, `rt`, `rw`, `kecamatan`, `kelurahan`, `alamat`, `email`, `nama_sertifikat`, `no_sertifikat`, `tgl_gabung`, `status`, `created_at`, `updated_at`) VALUES
(1, 'rico.jpg', 'rico', '856744527', 'bandung', '2021-11-13', 'laki-laki', 'ktp', '867767678766', 'jawa barat', 'depok', 9, 9, 'limo', 'gandul', 'jakarta', 'rico@gmail.com', 'sertifikat1', '765757', '2021-11-12', 'tetap', '2021-11-03 22:35:44', '2021-11-03 22:35:44'),
(4, 'rahma.jpg', 'rahma', '085674452711', 'jakarta', '2002-07-26', 'perempuan', 'ktp', '653655463', 'jawa tengah', 'dki jakarta', 65, 56, 'jagakarsa', 'gandul', 'bekasi', 'rahma@gmail.com', 'sertifikat2', '345256264', '2021-09-21', 'kontrak', '2021-11-04 00:46:49', '2021-11-04 00:46:49'),
(5, 'remond.jpg', 'remond', '085676252721', 'jakarta', '1989-06-14', 'laki-laki', 'ktp', '5435453', 'jawa barat', 'dki jakarta', 76, 77, 'jagakarsa', 'gandul', 'depok', 'remond@gmail.com', 'sertifikat3', '46364363', '2021-06-16', 'kontrak', '2021-11-04 00:55:35', '2021-11-04 00:55:35'),
(6, 'dewi.jpg', 'dewi', '081274452790', 'bandung', '1992-08-17', 'perempuan', 'ktp', '654634345', 'jawa barat', 'yogyakarta', 43, 55, 'limo', 'gandul', 'bogor', 'dewi@gmail.com', 'sertifikat4', '45643236', '2021-09-30', 'magang', '2021-11-04 01:03:06', '2021-11-04 01:03:06'),
(7, 'denis.png', 'denis', '085274454067', 'jakarta', '1987-09-18', 'perempuan', 'ktp', '2253522', 'jawa tengah', 'dki jakarta', 75, 8, 'limo', 'krukut', 'medan', 'dede22@gmail.com', 'sertifikat5', '78474433', '2021-10-15', 'kontrak', '2021-11-04 01:09:05', '2021-11-04 01:09:05');

-- --------------------------------------------------------

--
-- Table structure for table `loginvgmb`
--

CREATE TABLE `loginvgmb` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` datetime NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `loginvgmb` (`id`, `keterangan`, `waktu`, `nama_barang`, `stock`, `choose`, `update_stock`, `unit`, `type`, `total_stock`, `text`, `created_at`, `updated_at`) VALUES
(3, 'tambah data', '2021-11-08 14:00:09', 'baju', 7, ' ', 0, 'pcs', 'All Size', 7, 'bersih', NULL, NULL),
(4, 'tambah data', '2021-11-08 14:00:22', 'celana', 9, ' ', 0, 'pcs', 'All Size', 9, 'kotor', NULL, NULL),
(5, 'tambah data', '2021-11-08 14:00:41', 'topi', 5, ' ', 0, 'Roll', '3/4', 5, 'kepala', NULL, NULL),
(6, 'tambah data', '2021-11-08 14:00:56', 'sendal', 5, ' ', 0, 'pcs', 'All Size', 5, 'kaki', NULL, NULL),
(7, 'edit data', '2021-11-08 14:01:42', 'celana edit', 90, ' ', 0, 'Karung', 'All Size', 90, 'kotor sekali', NULL, NULL),
(8, 'edit data', '2021-11-08 14:33:06', 'baju edit', 17, ' ', 0, 'pcs', 'All Size', 17, 'bersih edit', NULL, NULL),
(9, 'edit data', '2021-11-08 14:33:39', 'baju edit', 11, ' ', 0, 'pcs', 'All Size', 11, 'bersih edit', NULL, NULL),
(10, 'edit data', '2021-11-08 14:33:56', 'baju edit', 11, '+', 4, 'pcs', 'All Size', 15, 'bersih edit', NULL, NULL),
(11, 'edit data', '2021-11-08 14:35:16', 'baju edit', 11, '-', 10, 'pcs', 'All Size', 1, 'bersih edit', NULL, NULL),
(12, 'edit data', '2021-11-08 14:35:39', 'celana edit', 90, '-', 50, 'Karung', 'All Size', 40, 'kotor sekali', NULL, NULL),
(13, 'tambah data', '2021-11-08 14:36:46', 'batu', 8, ' ', 0, 'Karung', '3/4', 8, 'berat', NULL, NULL),
(14, 'edit data', '2021-11-08 14:37:34', 'celana edit', 90, '-', 80, 'Karung', 'All Size', 10, 'kotor sekali', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `loginvspn`
--

CREATE TABLE `loginvspn` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` datetime NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `loginvspn` (`id`, `keterangan`, `waktu`, `nama_barang`, `stock`, `choose`, `update_stock`, `unit`, `type`, `total_stock`, `text`, `created_at`, `updated_at`) VALUES
(1, 'tambah data', '2021-11-08 10:52:05', 'cat', 5, ' ', 0, 'roll', '3/4', 5, 'putih', NULL, NULL),
(2, 'tambah data', '2021-11-08 10:52:39', 'paku', 8, ' ', 0, 'karung', 'all-size', 8, 'tajam', NULL, NULL),
(3, 'tambah data', '2021-11-08 11:23:35', 'pasir', 7, ' ', 0, 'roll', 'all-size', 7, 'berat', NULL, NULL),
(4, 'tambah data', '2021-11-08 11:23:54', 'semen', 10, ' ', 0, 'karung', '3/4', 10, 'keras', NULL, NULL),
(5, 'edit data', '2021-11-08 11:24:19', 'pasir edit', 70, ' ', 0, 'roll', 'all-size', 70, 'berat', NULL, NULL),
(6, 'edit data', '2021-11-08 11:29:53', 'pasir edit', 70, '-', 10, 'roll', 'all-size', 60, 'berat', NULL, NULL),
(7, 'edit data', '2021-11-08 12:01:35', 'semen', 10, '+', 10, 'karung', '3/4', 20, 'keras', NULL, NULL),
(8, 'hapus data', '2021-11-08 12:01:35', 'semen', 10, ' ', 0, 'karung', '3/4', 10, 'keras', NULL, NULL),
(9, 'edit data', '2021-11-08 12:01:44', 'semen', 10, '-', 5, 'karung', '3/4', 5, 'keras', NULL, NULL),
(10, 'hapus data', '2021-11-08 12:01:44', 'semen', 10, '+', 10, 'karung', '3/4', 20, 'keras', NULL, NULL),
(11, 'edit data', '2021-11-08 12:01:57', 'semen', 10, '+', 10, 'karung', '3/4', 20, 'keras', NULL, NULL),
(12, 'hapus data', '2021-11-08 12:01:57', 'semen', 10, '-', 5, 'karung', '3/4', 5, 'keras', NULL, NULL),
(13, 'hapus data', '2021-11-08 12:28:11', 'pasir edit', 70, '-', 10, 'roll', 'all-size', 60, 'berat', NULL, NULL);

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
(20, '2021_10_26_084827_create_inventoryspn_table', 2),
(21, '2021_10_29_092358_create_inventorygmb_table', 2),
(22, '2021_11_03_045910_create_kru_table', 3),
(23, '2021_11_08_031311_create_loginvspn_table', 4),
(24, '2021_11_08_050445_create_loginvgmb_table', 5);

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

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for dumped tables
--

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
-- AUTO_INCREMENT for table `inventorygmb`
--
ALTER TABLE `inventorygmb`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `inventoryspn`
--
ALTER TABLE `inventoryspn`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kapal_pribadi`
--
ALTER TABLE `kapal_pribadi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kapal_sewa`
--
ALTER TABLE `kapal_sewa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kp`
--
ALTER TABLE `kp`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kru`
--
ALTER TABLE `kru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `loginvgmb`
--
ALTER TABLE `loginvgmb`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `loginvspn`
--
ALTER TABLE `loginvspn`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
