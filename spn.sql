-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2021 at 10:46 AM
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
(1, 'ember', 7, '+', 7, 'pcs', 'All Size', 14, 'penuh', '2021-11-15 05:04:24', '2021-11-15 05:12:55'),
(2, 'gayung', 3, ' ', 0, 'Karung', 'All Size', 3, 'ringan', '2021-11-15 05:04:42', '2021-11-15 05:04:42'),
(3, 'sablon', 9, '-', 5, 'Karung', 'BMM', 4, 'polyflex', '2021-11-15 05:05:14', '2021-11-15 05:13:17'),
(4, 'topi', 6, '+', 6, 'pcs', '3/4', 12, 'kepala licin', '2021-11-15 05:06:04', '2021-11-15 05:07:59');

--
-- Triggers `inventorygmb`
--
DELIMITER $$
CREATE TRIGGER `delete_status_inventorygmb` AFTER DELETE ON `inventorygmb` FOR EACH ROW BEGIN
    INSERT INTO loginvgmb (keterangan,status,waktu,nama_barang,stock,choose,update_stock,unit,type,total_stock,text,created_at,updated_at)
    VALUES ('hapus data','VOID',now(),OLD.nama_barang,OLD.stock,OLD.choose,OLD.update_stock,OLD.unit,OLD.type,OLD.total_stock,OLD.text,OLD.created_at,now());
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `edit_status_inventorygmb` AFTER UPDATE ON `inventorygmb` FOR EACH ROW BEGIN
    INSERT INTO loginvgmb (keterangan,status,waktu,nama_barang,stock,choose,update_stock,unit,type,total_stock,text,created_at,updated_at)
    VALUES ('edit data','OK',now(),NEW.nama_barang,NEW.stock,NEW.choose,NEW.update_stock,NEW.unit,NEW.type,NEW.total_stock,NEW.text,NEW.created_at,now());
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert_status_inventorygmb` AFTER INSERT ON `inventorygmb` FOR EACH ROW BEGIN
    INSERT INTO loginvgmb (keterangan,status,waktu,nama_barang,stock,choose,update_stock,unit,type,total_stock,text,created_at,updated_at)
    VALUES ('tambah data','OK',now(),NEW.nama_barang,NEW.stock,NEW.choose,NEW.update_stock,NEW.unit,NEW.type,NEW.total_stock,NEW.text,NEW.created_at,now());
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
(1, 'batu', 4, '-', 2, 'Karung', 'All Size', 2, 'berat', '2021-11-13 06:38:31', '2021-11-15 03:14:51'),
(3, 'apel', 6, ' ', 0, 'Karung', 'All Size', 6, 'merah', '2021-11-15 03:10:39', '2021-11-15 03:10:39'),
(4, 'jeruk', 6, ' ', 0, 'Karung', 'All Size', 6, 'pontianak', '2021-11-15 03:10:59', '2021-11-15 03:11:13'),
(5, 'pepaya', 16, '+', 10, 'pcs', 'All Size', 26, 'manis', '2021-11-15 03:11:39', '2021-11-15 03:12:14');

--
-- Triggers `inventoryspn`
--
DELIMITER $$
CREATE TRIGGER `delete_status_inventoryspn` AFTER DELETE ON `inventoryspn` FOR EACH ROW BEGIN
    INSERT INTO loginvspn (keterangan,status,waktu,nama_barang,stock,choose,update_stock,unit,type,total_stock,text,created_at,updated_at)
    VALUES ('hapus data','VOID',now(),OLD.nama_barang,OLD.stock,OLD.choose,OLD.update_stock,OLD.unit,OLD.type,OLD.total_stock,OLD.text,OLD.created_at,now());
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `edit_status_inventoryspn` AFTER UPDATE ON `inventoryspn` FOR EACH ROW BEGIN
    INSERT INTO loginvspn (keterangan,status,waktu,nama_barang,stock,choose,update_stock,unit,type,total_stock,text,created_at,updated_at)
    VALUES ('edit data','OK',now(),NEW.nama_barang,NEW.stock,NEW.choose,NEW.update_stock,NEW.unit,NEW.type,NEW.total_stock,NEW.text,NEW.created_at,now());
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert_status_inventoryspn` AFTER INSERT ON `inventoryspn` FOR EACH ROW BEGIN
    INSERT INTO loginvspn (keterangan,status,waktu,nama_barang,stock,choose,update_stock,unit,type,total_stock,text,created_at,updated_at)
    VALUES ('tambah data','OK',now(),NEW.nama_barang,NEW.stock,NEW.choose,NEW.update_stock,NEW.unit,NEW.type,NEW.total_stock,NEW.text,NEW.created_at,now());
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
  `nama_kapal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keberangkatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_penyewa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mulai_sewa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sewa_selesai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kapal_pribadi`
--

INSERT INTO `kapal_pribadi` (`id`, `no`, `nama_kapal`, `keberangkatan`, `nama_kru`, `tujuan`, `nama_penyewa`, `mulai_sewa`, `image`, `sewa_selesai`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, '17', 'Kapal TNI', 'Bandung', 'Giant', 'Jakarta', 'Customer 1', '2019-11-30', '1636357923folder.png', '2020-08-28', 'ada', '2021-11-08 07:52:03', '2021-11-08 07:52:03');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kru`
--

INSERT INTO `kru` (`id`, `photo`, `nama`, `phone`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `identitas`, `no_identitas`, `provinsi`, `kota`, `RT`, `RW`, `kecamatan`, `kelurahan`, `alamat`, `email`, `nama_sertifikat`, `no_sertifikat`, `tgl_gabung`, `status`, `created_at`, `updated_at`) VALUES
(1, 'dendy santoso.jpeg', 'dendy santoso', '085674452744', 'jakarta', '2002-06-11', 'laki-laki', 'ktp', '745754', 'jawa tengah', 'dki jakarta', 9, 8, 'jagakarsa', 'gandul', 'jakarta', 'dendy22@gmail.com', 'sertifikat1', '784644', '2021-10-21', 'tetap', '2021-11-09 07:28:51', '2021-11-09 07:28:51'),
(2, 'deco.jpg', 'deco', '085674452723', 'jakarta', '2007-08-10', 'laki-laki', 'ktp', '745743', 'jawa barat', 'dki jakarta', 6, 7, 'jagakarsa', 'gandul', 'bogor', 'deco@gmail.com', 'sertifikat1', '6785654', '2021-11-04', 'tetap', '2021-11-09 07:37:00', '2021-11-09 07:37:00'),
(3, 'rendy irwan.jpg', 'rendy irwan', '085674454011', 'madura', '2002-06-05', 'laki-laki', 'ktp', '7474748', 'jawa barat', 'yogyakarta', 76, 88, 'limo', 'cilandak', 'depok', 'rendy@yahoo.com', 'sertifikat3', '5675478', '2021-11-05', 'magang', '2021-11-09 07:41:33', '2021-11-09 07:41:33'),
(4, 'abdul.jpg', 'abdul', '085674452712', 'jakarta', '2001-08-21', 'laki-laki', 'ktp', '36377854', 'jawa tengah', 'depok', 87, 42, 'limo', 'cilandak', 'medan', 'abdu@gmail.com', 'sertifikat4', '4677432', '2021-11-12', 'kontrak', '2021-11-09 07:44:38', '2021-11-09 07:44:38');

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

INSERT INTO `loginvgmb` (`id`, `keterangan`, `status`, `waktu`, `nama_barang`, `stock`, `choose`, `update_stock`, `unit`, `type`, `total_stock`, `text`, `created_at`, `updated_at`) VALUES
(1, 'tambah data', 'OK', '2021-11-15 12:04:24', 'ember', 7, ' ', 0, 'pcs', 'All Size', 7, 'penuh', '2021-11-15 05:04:24', '2021-11-15 05:04:24'),
(2, 'tambah data', 'OK', '2021-11-15 12:04:42', 'gayung', 3, ' ', 0, 'Karung', 'All Size', 3, 'ringan', '2021-11-15 05:04:42', '2021-11-15 05:04:42'),
(3, 'tambah data', 'OK', '2021-11-15 12:05:14', 'sablon', 9, ' ', 0, 'Karung', 'BMM', 9, 'polyflex', '2021-11-15 05:05:14', '2021-11-15 05:05:14'),
(4, 'tambah data', 'OK', '2021-11-15 12:06:04', 'topi', 4, ' ', 0, 'pcs', '3/4', 4, 'kepala', '2021-11-15 05:06:04', '2021-11-15 05:06:04'),
(5, 'edit data', 'OK', '2021-11-15 12:06:17', 'topi', 8, ' ', 0, 'pcs', '3/4', 8, 'kepala licin', '2021-11-15 05:06:04', '2021-11-15 05:06:17'),
(6, 'edit data', 'OK', '2021-11-15 12:07:37', 'topi', 8, '-', 2, 'pcs', '3/4', 6, 'kepala licin', '2021-11-15 05:06:04', '2021-11-15 05:07:37'),
(7, 'edit data', 'OK', '2021-11-15 12:07:46', 'topi', 6, '-', 2, 'pcs', '3/4', 6, 'kepala licin', '2021-11-15 05:06:04', '2021-11-15 05:07:46'),
(8, 'edit data', 'OK', '2021-11-15 12:07:59', 'topi', 6, '+', 6, 'pcs', '3/4', 12, 'kepala licin', '2021-11-15 05:06:04', '2021-11-15 05:07:59'),
(9, 'edit data', 'OK', '2021-11-15 12:08:14', 'sablon', 1, ' ', 0, 'Karung', 'BMM', 1, 'polyflex', '2021-11-15 05:05:14', '2021-11-15 05:08:14'),
(10, 'edit data', 'OK', '2021-11-15 12:08:20', 'sablon', 3, ' ', 0, 'Karung', 'BMM', 3, 'polyflex', '2021-11-15 05:05:14', '2021-11-15 05:08:20'),
(11, 'edit data', 'OK', '2021-11-15 12:08:28', 'sablon', 3, '+', 6, 'Karung', 'BMM', 9, 'polyflex', '2021-11-15 05:05:14', '2021-11-15 05:08:28'),
(12, 'edit data', 'OK', '2021-11-15 12:12:55', 'ember', 7, '+', 7, 'pcs', 'All Size', 14, 'penuh', '2021-11-15 05:04:24', '2021-11-15 05:12:55'),
(13, 'edit data', 'OK', '2021-11-15 12:13:09', 'sablon', 9, '+', 6, 'Karung', 'BMM', 9, 'polyflex', '2021-11-15 05:05:14', '2021-11-15 05:13:09'),
(14, 'edit data', 'OK', '2021-11-15 12:13:17', 'sablon', 9, '-', 5, 'Karung', 'BMM', 4, 'polyflex', '2021-11-15 05:05:14', '2021-11-15 05:13:17');

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

INSERT INTO `loginvspn` (`id`, `keterangan`, `status`, `waktu`, `nama_barang`, `stock`, `choose`, `update_stock`, `unit`, `type`, `total_stock`, `text`, `created_at`, `updated_at`) VALUES
(1, 'tambah data', 'OK', '2021-11-13 13:38:31', 'batu', 5, ' ', 0, 'Karung', 'All Size', 5, 'berat', '2021-11-13 06:38:31', '2021-11-13 06:38:31'),
(2, 'tambah data', 'OK', '2021-11-13 13:38:48', 'pasir', 6, ' ', 0, 'Karung', 'All Size', 6, 'banyak', '2021-11-13 06:38:48', '2021-11-13 06:38:48'),
(3, 'hapus data', 'VOID', '2021-11-13 13:39:37', 'pasir', 6, ' ', 0, 'Karung', 'All Size', 6, 'banyak', '2021-11-13 06:38:48', '2021-11-13 06:39:37'),
(4, 'tambah data', 'OK', '2021-11-15 10:10:39', 'apel', 6, ' ', 0, 'Karung', 'All Size', 6, 'merah', '2021-11-15 03:10:39', '2021-11-15 03:10:39'),
(5, 'tambah data', 'OK', '2021-11-15 10:10:59', 'jeruk', 6, ' ', 0, 'Karung', 'All Size', 6, 'p[ontianak', '2021-11-15 03:10:59', '2021-11-15 03:10:59'),
(6, 'edit data', 'OK', '2021-11-15 10:11:13', 'jeruk', 6, ' ', 0, 'Karung', 'All Size', 6, 'pontianak', '2021-11-15 03:10:59', '2021-11-15 03:11:13'),
(7, 'tambah data', 'OK', '2021-11-15 10:11:39', 'pepaya', 8, ' ', 0, 'pcs', 'All Size', 8, 'manis', '2021-11-15 03:11:39', '2021-11-15 03:11:39'),
(8, 'edit data', 'OK', '2021-11-15 10:11:51', 'pepaya', 8, '+', 8, 'pcs', 'All Size', 16, 'manis', '2021-11-15 03:11:39', '2021-11-15 03:11:51'),
(9, 'edit data', 'OK', '2021-11-15 10:12:03', 'pepaya', 16, '+', 8, 'pcs', 'All Size', 16, 'manis', '2021-11-15 03:11:39', '2021-11-15 03:12:03'),
(10, 'edit data', 'OK', '2021-11-15 10:12:14', 'pepaya', 16, '+', 10, 'pcs', 'All Size', 26, 'manis', '2021-11-15 03:11:39', '2021-11-15 03:12:14'),
(11, 'edit data', 'OK', '2021-11-15 10:14:23', 'batu', 5, '-', 1, 'Karung', 'All Size', 4, 'berat', '2021-11-13 06:38:31', '2021-11-15 03:14:23'),
(12, 'edit data', 'OK', '2021-11-15 10:14:33', 'batu', 5, '-', 1, 'Karung', 'All Size', 4, 'berat', '2021-11-13 06:38:31', '2021-11-15 03:14:33'),
(13, 'edit data', 'OK', '2021-11-15 10:14:40', 'batu', 4, '-', 1, 'Karung', 'All Size', 4, 'berat', '2021-11-13 06:38:31', '2021-11-15 03:14:40'),
(14, 'edit data', 'OK', '2021-11-15 10:14:51', 'batu', 4, '-', 2, 'Karung', 'All Size', 2, 'berat', '2021-11-13 06:38:31', '2021-11-15 03:14:51');

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
(15, '2021_10_26_084827_create_inventoryspn_table', 2),
(16, '2021_10_29_092358_create_inventorygmb_table', 2),
(17, '2021_11_09_124732_create_loginvspn_table', 2),
(18, '2021_11_09_125426_create_loginvgmb_table', 2);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inventoryspn`
--
ALTER TABLE `inventoryspn`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kapal_pribadi`
--
ALTER TABLE `kapal_pribadi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `loginvgmb`
--
ALTER TABLE `loginvgmb`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `loginvspn`
--
ALTER TABLE `loginvspn`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
