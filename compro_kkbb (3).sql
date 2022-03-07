-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2022 at 04:36 AM
-- Server version: 8.0.25
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `compro_kkbb`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` int NOT NULL,
  `id_admin` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `log` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `id_admin`, `title`, `log`, `created_at`, `updated_at`) VALUES
(1, 1, 'Settings', 'Admin #1 mengosongkan actvity log -> SUCCESS!', '2022-03-07 02:47:34', '2022-03-07 02:47:34'),
(2, 1, 'Settings', 'Admin #1 melihat system logs', '2022-03-07 02:47:35', '2022-03-07 02:47:35'),
(3, 1, 'Settings', 'Admin #1 masuk dashboard settings', '2022-03-07 02:47:36', '2022-03-07 02:47:36'),
(4, 1, 'Settings', 'Admin #1 masuk dashboard settings', '2022-03-07 03:00:35', '2022-03-07 03:00:35'),
(5, 1, 'UsersRole', 'Admin #1 masuk dashboard role', '2022-03-07 03:05:08', '2022-03-07 03:05:08'),
(6, 1, 'UsersRole', 'Admin #1 masuk dashboard role', '2022-03-07 03:06:25', '2022-03-07 03:06:25'),
(7, 1, 'UsersRole', 'Admin #1 masuk dashboard role', '2022-03-07 03:06:28', '2022-03-07 03:06:28'),
(8, 1, 'UsersRole', 'Admin #1 masuk dashboard role', '2022-03-07 03:06:36', '2022-03-07 03:06:36'),
(9, 1, 'UsersRole', 'Admin #1 masuk dashboard role', '2022-03-07 03:07:44', '2022-03-07 03:07:44'),
(10, 1, 'UsersRole', 'Admin #1 masuk dashboard role', '2022-03-07 03:07:46', '2022-03-07 03:07:46'),
(11, 1, 'UsersRole', 'Admin #1 masuk dashboard role', '2022-03-07 03:08:34', '2022-03-07 03:08:34'),
(12, 1, 'UsersRole', 'Admin #1 masuk dashboard role', '2022-03-07 03:09:15', '2022-03-07 03:09:15'),
(13, 1, 'UsersRole', 'Admin #1 masuk dashboard role', '2022-03-07 03:09:20', '2022-03-07 03:09:20'),
(15, 1, 'UsersRole', 'Admin #1 masuk dashboard role', '2022-03-07 03:09:25', '2022-03-07 03:09:25'),
(17, 1, 'UsersRole', 'Admin #1 masuk dashboard role', '2022-03-07 03:09:29', '2022-03-07 03:09:29'),
(18, 1, 'Admin', 'Admin #1 masuk dashboard admin ', '2022-03-07 03:09:32', '2022-03-07 03:09:32'),
(19, 1, 'Admin', 'Admin #1 masuk dashboard admin ', '2022-03-07 03:11:12', '2022-03-07 03:11:12'),
(20, 1, 'Admin', 'Admin #1 masuk dashboard admin ', '2022-03-07 03:15:39', '2022-03-07 03:15:39'),
(21, 1, 'Admin', 'Admin #1 masuk dashboard admin ', '2022-03-07 03:15:55', '2022-03-07 03:15:55'),
(22, 1, 'Admin', 'Admin #1 masuk dashboard admin ', '2022-03-07 03:16:44', '2022-03-07 03:16:44'),
(23, 1, 'Admin', 'Admin #1 masuk dashboard admin ', '2022-03-07 03:17:00', '2022-03-07 03:17:00'),
(24, 1, 'Admin', 'Admin #1 masuk dashboard admin ', '2022-03-07 03:17:18', '2022-03-07 03:17:18'),
(25, 1, 'Admin', 'Admin #1 masuk dashboard admin ', '2022-03-07 03:17:35', '2022-03-07 03:17:35'),
(26, 1, 'Admin', 'Admin #1 masuk dashboard admin ', '2022-03-07 03:18:48', '2022-03-07 03:18:48'),
(27, 1, 'Admin', 'Admin #1 membuat admin baru dengan username admin -> SUCCESS', '2022-03-07 03:19:12', '2022-03-07 03:19:12'),
(28, 1, 'Admin', 'Admin #1 masuk dashboard admin ', '2022-03-07 03:19:14', '2022-03-07 03:19:14'),
(29, 1, 'Admin', 'Admin #1 update data admin dengan username rizka_kk -> SUCCESS', '2022-03-07 03:19:32', '2022-03-07 03:19:32'),
(30, 1, 'Admin', 'Admin #1 update data admin dengan username rizka_kk -> SUCCESS', '2022-03-07 03:19:40', '2022-03-07 03:19:40'),
(31, 1, 'Admin', 'Admin #1 masuk dashboard admin ', '2022-03-07 03:19:59', '2022-03-07 03:19:59'),
(32, 1, 'Admin', 'Admin #1 update data admin dengan username rizka_kk -> SUCCESS', '2022-03-07 03:20:02', '2022-03-07 03:20:02'),
(33, 1, 'Admin', 'Admin #1 masuk dashboard admin ', '2022-03-07 03:20:03', '2022-03-07 03:20:03'),
(34, 1, 'Admin', 'Admin #1 membuat admin baru dengan username uhuy -> SUCCESS', '2022-03-07 03:20:15', '2022-03-07 03:20:15'),
(35, 1, 'Admin', 'Admin #1 masuk dashboard admin ', '2022-03-07 03:20:15', '2022-03-07 03:20:15'),
(36, 1, 'Admin', 'Admin #1 change password admin dengan ID 3 -> SUCCESS', '2022-03-07 03:20:23', '2022-03-07 03:20:23'),
(37, 1, 'Admin', 'Admin #1 masuk dashboard admin ', '2022-03-07 03:20:24', '2022-03-07 03:20:24'),
(38, 1, 'Admin', 'Admin #1 delete data admin dengan ID 3 -> SUCCESS', '2022-03-07 03:20:29', '2022-03-07 03:20:29'),
(39, 1, 'Admin', 'Admin #1 masuk dashboard admin ', '2022-03-07 03:20:30', '2022-03-07 03:20:30'),
(40, 1, 'Admin', 'Admin #1 change password admin dengan ID 2 -> SUCCESS', '2022-03-07 03:21:01', '2022-03-07 03:21:01'),
(41, 1, 'Admin', 'Admin #1 masuk dashboard admin ', '2022-03-07 03:21:02', '2022-03-07 03:21:02'),
(42, 1, 'Admin', 'Admin #1 update data admin dengan username rizka -> SUCCESS', '2022-03-07 03:21:14', '2022-03-07 03:21:14'),
(43, 1, 'Admin', 'Admin #1 masuk dashboard admin ', '2022-03-07 03:21:15', '2022-03-07 03:21:15'),
(44, 1, 'Admin', 'Admin #1 membuat admin baru dengan username dimas -> SUCCESS', '2022-03-07 03:21:38', '2022-03-07 03:21:38'),
(45, 1, 'Admin', 'Admin #1 masuk dashboard admin ', '2022-03-07 03:21:39', '2022-03-07 03:21:39'),
(46, 1, 'Admin', 'Admin #1 masuk dashboard admin ', '2022-03-07 03:24:36', '2022-03-07 03:24:36'),
(47, 1, 'Access', 'Admin #1 masuk dashboard utama', '2022-03-07 03:24:39', '2022-03-07 03:24:39'),
(48, 1, 'Access', 'Admin #1 masuk dashboard utama', '2022-03-07 03:29:00', '2022-03-07 03:29:00'),
(49, 1, 'Access', 'Admin #1 masuk dashboard utama', '2022-03-07 03:29:22', '2022-03-07 03:29:22'),
(50, 1, 'Access', 'Admin #1 masuk dashboard utama', '2022-03-07 03:29:28', '2022-03-07 03:29:28'),
(51, 1, 'Access', 'Admin #1 masuk dashboard utama', '2022-03-07 03:30:00', '2022-03-07 03:30:00'),
(52, 1, 'Access', 'Admin #1 masuk dashboard utama', '2022-03-07 03:32:13', '2022-03-07 03:32:13'),
(53, 1, 'Access', 'Admin #1 masuk dashboard utama', '2022-03-07 03:32:20', '2022-03-07 03:32:20'),
(54, 1, 'Access', 'Admin #1 masuk dashboard utama', '2022-03-07 03:32:22', '2022-03-07 03:32:22'),
(55, 1, 'Access', 'Admin #1 masuk dashboard utama', '2022-03-07 03:32:50', '2022-03-07 03:32:50'),
(56, 1, 'Access', 'Admin #1 masuk dashboard utama', '2022-03-07 03:32:53', '2022-03-07 03:32:53');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `position` int NOT NULL,
  `visibility` enum('0','1') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `title`, `image`, `position`, `visibility`, `created_at`, `updated_at`) VALUES
(1, 'PHMJ', 'banner1.png', 1, '1', '2022-03-06 05:48:47', '2022-03-06 05:48:47'),
(2, 'GP Menang', 'banner2.png', 2, '1', '2022-03-06 05:49:56', '2022-03-06 05:49:56'),
(3, 'PA', 'banner3.png', 3, '1', '2022-03-06 05:52:10', '2022-03-06 05:52:10'),
(4, 'PKP', 'banner4.png', 4, '1', '2022-03-06 05:52:36', '2022-03-06 05:52:36'),
(5, 'paskah', 'banner5.png', 5, '1', '2022-03-06 05:53:31', '2022-03-06 05:53:31'),
(6, 'PT', 'banner6.png', 6, '1', '2022-03-06 05:54:58', '2022-03-06 05:54:58');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_ibadah`
--

CREATE TABLE `daftar_ibadah` (
  `id` int NOT NULL,
  `nama_pendaftar` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(14) NOT NULL,
  `sektor` varchar(255) NOT NULL,
  `jam_ibadah` varchar(255) NOT NULL,
  `usia` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_ibadah_child`
--

CREATE TABLE `daftar_ibadah_child` (
  `id` int NOT NULL,
  `id_master_pendaftar` int NOT NULL,
  `nama_pendaftar` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `alamat` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `no_telp` varchar(14) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sektor` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `jam_ibadah` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `usia` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_ibadah_child_history`
--

CREATE TABLE `daftar_ibadah_child_history` (
  `id` int NOT NULL,
  `nama_pendaftar` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `alamat` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `no_telp` varchar(14) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sektor` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `jam_ibadah` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `usia` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_master_pendaftar` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_ibadah_history`
--

CREATE TABLE `daftar_ibadah_history` (
  `id` int NOT NULL,
  `nama_pendaftar` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `alamat` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `no_telp` varchar(14) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sektor` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `jam_ibadah` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `usia` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `heroes`
--

CREATE TABLE `heroes` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `heroes`
--

INSERT INTO `heroes` (`id`, `title`, `image`, `created_at`, `updated_at`, `is_active`) VALUES
(1, 'Heroes Pertama', 'banner_top2.png', '2022-03-06 13:53:33', '2022-03-06 16:11:26', '1');

-- --------------------------------------------------------

--
-- Table structure for table `kmj`
--

CREATE TABLE `kmj` (
  `id` int NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `periode` varchar(255) NOT NULL,
  `image` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `kmj`
--

INSERT INTO `kmj` (`id`, `nama_lengkap`, `periode`, `image`, `created_at`, `updated_at`) VALUES
(1, '(Alm) Pdt. Salmon Raes Randalabi, M.Th.', '2016 - 2019', '(alm)_pdt__salmon4.png', '2022-02-28 06:51:08', '2022-02-28 06:51:08'),
(2, 'Pdt. Johanes Wadu, S.Th', '2019 - 2022', 'pdt_john_wadu.png', '2022-02-28 07:47:28', '2022-02-28 07:47:28');

-- --------------------------------------------------------

--
-- Table structure for table `komisi`
--

CREATE TABLE `komisi` (
  `id` int NOT NULL,
  `komisi` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `title` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `body` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `komisi`
--

INSERT INTO `komisi` (`id`, `komisi`, `title`, `body`, `image`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'IAI', 'Daftar Komisi IAI Masa Bakti 2017 - 2022', '<ul>\r\n	<li><span style=\"font-size:22px\">Pnt. Petrus Heintje&nbsp;Yohan Talise |&nbsp;<strong>Ketua&nbsp;IAI</strong></span></li>\r\n	<li><span style=\"font-size:22px\">Pnt. Ny. Chindu&nbsp;Soepardhy |&nbsp;Anggota&nbsp;IAI</span></li>\r\n	<li><span style=\"font-size:22px\">Dkn. Ny. Budiasih Malelak | Anggota&nbsp;IAI</span></li>\r\n</ul>\r\n', 'banner_ika.png', 'iai', '2022-02-27 18:10:12', '2022-03-06 02:25:04'),
(2, 'Musik Gereja', 'Daftar Komisi Muger Masa Bakti 2017 - 2022', '<p><span style=\"font-size:22px\">Angga Kusuma P. Willem | <strong>Ketua Komisi Muger</strong><br />\r\nAurel Latumaelissa | Anggota Komisi Muger<br />\r\nYuro Tangketasik | Anggota Komisi Muger<br />\r\nAyrton Maurits Willem | Anggota Komisi Muger</span></p>\r\n', 'banner_ika1.png', 'muger', '2022-03-02 08:35:05', '2022-03-06 02:25:09'),
(3, 'Pelkes', 'Daftar Komisi Pelkes Masa Bakti 2017 - 2022', '<ul>\r\n	<li><span style=\"font-size:22px\">Toto Budi Cahyono Sunaryo | <strong>Ketua Komisi Pelkes</strong></span></li>\r\n	<li><span style=\"font-size:22px\">Cadra Yuswanti Tuwo | Anggota Komisi Pelkes</span></li>\r\n	<li><span style=\"font-size:22px\">Piter Polin | Anggota Komisi Pelkes</span></li>\r\n</ul>\r\n', 'banner_ika2.png', 'pelkes', '2022-03-02 08:39:16', '2022-03-06 02:25:15'),
(4, 'Kedukaan', 'Daftar Komisi Kedukaan Masa Bakti 2017 - 2022', '<ul>\r\n	<li><span style=\"font-size:22px\">Ahlan Jarmamo | <strong>Ketua Komisi Kedukaan</strong></span></li>\r\n	<li><span style=\"font-size:22px\">Gabriel Welkis | Anggota Komisi Kedukaan</span></li>\r\n	<li><span style=\"font-size:22px\">Welly Herry Sulistyanto | Anggota Komisi Kedukaan</span></li>\r\n	<li><span style=\"font-size:22px\">Adrianus Sebastian Anggota Komisi Kedukaan​​​​​​</span></li>\r\n	<li><span style=\"font-size:22px\">Welly Herry Sulistyanto | Anggota Komisi Kedukaan</span></li>\r\n	<li><span style=\"font-size:22px\">Adrianus Sebastian Anggota Komisi Kedukaan​​​​​​</span></li>\r\n</ul>\r\n', 'banner_ika3.png', 'kedukaan', '2022-03-02 08:58:14', '2022-03-06 02:25:19'),
(5, 'Crisis Center', 'Daftar Komisi Crisis Center Masa Bakti 2017 - 2022', '<ul>\r\n	<li><span style=\"font-size:22px\">Ferry James Kumolontang | <strong>Ketua Komisi Crisis Center</strong></span></li>\r\n	<li><span style=\"font-size:22px\">Hendy Paidjan | Anggota Komisi Crisis Center</span></li>\r\n	<li><span style=\"font-size:22px\">Mikdal Ismau&nbsp;| Anggota Komisi Crisis Center</span></li>\r\n	<li><span style=\"font-size:22px\">Deddy Helianak&nbsp;| Anggota Komisi Crisis Center</span></li>\r\n	<li><span style=\"font-size:22px\">Gustaf Alexander&nbsp;| Anggota Komisi Crisis Center</span></li>\r\n	<li><span style=\"font-size:22px\">Eddy Susanto&nbsp;| Anggota Komisi Crisis Center</span></li>\r\n	<li><span style=\"font-size:22px\">Yustinus Recky Acub&nbsp;| Anggota Komisi Crisis Center</span></li>\r\n	<li><span style=\"font-size:22px\">Seprianus Etding&nbsp;| Anggota Komisi Crisis Center</span></li>\r\n	<li><span style=\"font-size:22px\">Jhon Cristian Prihandoko&nbsp;| Anggota Komisi Crisis Center</span></li>\r\n	<li><span style=\"font-size:22px\">Fredrik Alexander Sir&nbsp;| Anggota Komisi Crisis Center</span></li>\r\n	<li><span style=\"font-size:22px\">Djerchon Esau Sabono&nbsp;| Anggota Komisi Crisis Center</span></li>\r\n	<li><span style=\"font-size:22px\">Evert Karundeng&nbsp;| Anggota Komisi Crisis Center</span></li>\r\n	<li><span style=\"font-size:22px\">Agustinus Kastanya&nbsp;| Anggota Komisi Crisis Center</span></li>\r\n	<li><span style=\"font-size:22px\">Apianus Takoy&nbsp;| Anggota Komisi Crisis Center</span></li>\r\n</ul>\r\n', 'banner_ika4.png', 'krisis_center', '2022-03-02 09:00:43', '2022-03-06 02:25:28'),
(6, 'Germasa', 'Daftar Komisi Germasa Masa Bakti 2017 - 2022', '<ul>\r\n	<li><span style=\"font-size:22px\">Juni Antara | <strong>Ketua Germasa</strong></span></li>\r\n	<li><span style=\"font-size:22px\">Urias Mogo Kadena | Anggota Komisi Germasa</span></li>\r\n</ul>\r\n', 'banner_ika5.png', 'germasa', '2022-03-02 09:01:32', '2022-03-06 02:25:33'),
(7, 'Kesehatan', 'Daftar Komisi Kesehatan Masa Bakti 2017 - 2022', '<ul>\r\n	<li><span style=\"font-size:22px\">Stefen Shelmi Salukh | <strong>Ketua Komisi Kesehatan</strong></span></li>\r\n	<li><span style=\"font-size:22px\">Ni Putu Markusi Ngunjuamahu | Anggota Komisi Kesehatn</span></li>\r\n</ul>\r\n', 'banner_ika6.png', 'kesehatan', '2022-03-02 09:02:43', '2022-03-06 02:25:38'),
(8, 'Hukum Dan Lingkungan Hidup', 'Daftar Komisi Hukum Dan Lingkungan Hidup Masa Bakti 2017 - 2022', '<ul>\r\n	<li><span style=\"font-size:22px\">Enam Fredison Medah |&nbsp;&nbsp;<strong>Ketua Komisi Hukum Dan Lingkungan Hidup</strong></span></li>\r\n	<li><span style=\"font-size:22px\">Lodewjik Yulius Lusi | Anggota Komisi Hukum Dan Lingkungan Hidup</span></li>\r\n</ul>\r\n', 'banner_ika7.png', 'hukum_lingdup', '2022-03-02 09:03:44', '2022-03-06 02:25:47'),
(9, 'PPSDI', 'Daftar Komisi PPSDI Masa Bakti 2017 - 2022', '<ul>\r\n	<li><span style=\"font-size:22px\">Oktovianus Soeyatniko Raharjo | <strong>Ketua&nbsp;&nbsp;Komisi PPSDI</strong></span></li>\r\n	<li><span style=\"font-size:22px\">Maria Messakh | Anggota Komisi PPSDI</span></li>\r\n	<li><span style=\"font-size:22px\">Maria Tri Pujo - Mauassa | Anggota Komisi&nbsp;&nbsp;PPSDI</span></li>\r\n</ul>\r\n', 'banner_ika8.png', 'ppsdi', '2022-03-02 09:04:56', '2022-03-06 02:25:51'),
(10, 'Pendidikan', 'Daftar Komisi Pendidikan Masa Bakti 2017 - 2022', '<ul>\r\n	<li><span style=\"font-size:22px\">Yenny Anneke Roring | <strong>Ketua Komisi Pendidikan</strong></span></li>\r\n	<li><span style=\"font-size:22px\">Mariana Ekha Koyoh - Bogia | Anggota Komisi Pendidikan</span></li>\r\n</ul>\r\n', 'banner_ika9.png', 'pendidikan', '2022-03-02 09:06:28', '2022-03-06 02:25:55'),
(12, 'PEG', 'Daftar Komisi PEG Masa Bakti 2017 - 2022', '<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:22px\">Herlina Yuanita Subandi | <strong>Ketua Komisi PEG</strong></span></li>\r\n	<li><span style=\"font-size:22px\">Ratna Maridja Santoso | Anggota Komisi PEG</span></li>\r\n</ul>\r\n', 'banner_ika11.png', 'peg', '2022-03-02 09:09:27', '2022-03-06 02:26:08'),
(13, 'Rumah Tangga', 'Daftar Komisi Rumah Tangga Masa Bakti 2017 - 2022', '<ul>\r\n	<li><span style=\"font-size:22px\">Jonathan Djami | <strong>Ketua Komisi Rumah Tangga</strong></span></li>\r\n	<li><span style=\"font-size:22px\">Eliazar Tanu | Anggota Komisi Rumah Tangga</span></li>\r\n	<li><span style=\"font-size:22px\">Adhy Aryanto Potokatoe | Anggota Komisi Rumah Tangga</span></li>\r\n</ul>\r\n', 'banner_ika12.png', 'rumah_tangga', '2022-03-02 09:12:12', '2022-03-06 02:26:12'),
(14, 'Inforkom-Litbang', 'Daftar Komisi Inforkom-Litbang Masa Bakti 2017 - 2022', '<p>Roland Oktavianus Soepardhy | Ketua Komisi Inforkom-Litbang</p>\r\n\r\n<p>Buce Oly | Anggota Komisi Inforkom-Litbang</p>\r\n', 'banner_ika13.png', 'inforkom_litbang', '2022-03-02 09:13:50', '2022-03-06 02:26:18');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `body` text NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `body`, `image`, `slug`, `type`, `created_at`, `updated_at`) VALUES
(1, 'PHMJ GPIB Kasih Karunia Badung Bali Masa Bakti 2017 - 2022', '<p><span style=\"font-size:16px\">Berikut daftar Pengurus Harian Majelis Jemaat GPIB Kasih Karunia Badung Bali Masa Bakti 2017 - 2022</span></p>\r\n\r\n<table align=\"center\" border=\"1\" cellpadding=\"1\" cellspacing=\"2\" class=\"table table-condensed table-hover table-striped\" dir=\"ltr\" style=\"width:500px\">\r\n	<thead>\r\n		<tr>\r\n			<th scope=\"col\"><span style=\"font-size:16px\">JABATAN</span></th>\r\n			<th scope=\"col\"><span style=\"font-size:16px\">NAMA</span></th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<div class=\"table-phmj\" style=\"align-items:center; text-align:center\"><span style=\"font-size:16px\">KETUA</span></div>\r\n			</td>\r\n			<td>\r\n			<div class=\"table-phmj\" style=\"align-items:center\"><span style=\"font-size:16px\">Pdt. JOHANES WADU</span></div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div class=\"table-phmj\" style=\"align-items:center; text-align:center\"><span style=\"font-size:16px\">KETUA 1</span></div>\r\n			</td>\r\n			<td>\r\n			<div class=\"table-phmj\" style=\"align-items:center\"><span style=\"font-size:16px\">Dkn. DODDY F. WIBOWO</span></div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div class=\"table-phmj\" style=\"align-items:center; text-align:center\"><span style=\"font-size:16px\">KETUA 2</span></div>\r\n			</td>\r\n			<td>\r\n			<div class=\"table-phmj\" style=\"align-items:center\"><span style=\"font-size:16px\">Pnt. SAYANGI LAGASING SENGNGE</span></div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div class=\"table-phmj\" style=\"align-items:center; text-align:center\"><span style=\"font-size:16px\">KETUA 3</span></div>\r\n			</td>\r\n			<td>\r\n			<div class=\"table-phmj\" style=\"align-items:center\"><span style=\"font-size:16px\">Pnt. ESTER RAHAYU LOESI</span></div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div class=\"table-phmj\" style=\"align-items:center; text-align:center\"><span style=\"font-size:16px\">KETUA 4</span></div>\r\n			</td>\r\n			<td>\r\n			<div class=\"table-phmj\" style=\"align-items:center\"><span style=\"font-size:16px\">Pnt. JULIUS DAVID KIMBAL</span></div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div class=\"table-phmj\" style=\"align-items:center; text-align:center\"><span style=\"font-size:16px\">KETUA 5</span></div>\r\n			</td>\r\n			<td>\r\n			<div class=\"table-phmj\" style=\"align-items:center\"><span style=\"font-size:16px\">Dkn. DANIEL WIMBERT TOMPODUNG</span></div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div class=\"table-phmj\" style=\"align-items:center; text-align:center\"><span style=\"font-size:16px\">Sekretaris</span></div>\r\n			</td>\r\n			<td>\r\n			<div class=\"table-phmj\" style=\"align-items:center\"><span style=\"font-size:16px\">Pnt. U. ADVENTUS LAWALATA</span></div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div class=\"table-phmj\" style=\"align-items:center; text-align:center\"><span style=\"font-size:16px\">Sekretaris 1</span></div>\r\n			</td>\r\n			<td>\r\n			<div class=\"table-phmj\" style=\"align-items:center\"><span style=\"font-size:16px\">Dkn. DIANA MANOPO</span></div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div class=\"table-phmj\" style=\"align-items:center; text-align:center\"><span style=\"font-size:16px\">Sekretaris 2</span></div>\r\n			</td>\r\n			<td>\r\n			<div class=\"table-phmj\" style=\"align-items:center\"><span style=\"font-size:16px\">Pnt. AGUSTINA TANGKETASIK</span></div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div class=\"table-phmj\" style=\"align-items:center; text-align:center\"><span style=\"font-size:16px\">Bendahara</span></div>\r\n			</td>\r\n			<td>\r\n			<div class=\"table-phmj\" style=\"align-items:center\"><span style=\"font-size:16px\">Pnt. I DEWA AYU ANOM KARTINI</span></div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div class=\"table-phmj\" style=\"align-items:center; text-align:center\"><span style=\"font-size:16px\">Bendahara&nbsp;</span></div>\r\n			</td>\r\n			<td>\r\n			<div class=\"table-phmj\" style=\"align-items:center\"><span style=\"font-size:16px\">Dkn. MIRLAN BERLIANA SITUMEANG</span></div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'banner1.png', 'phmj', 'profile', '2022-02-28 13:44:15', '2022-03-05 12:19:23'),
(2, 'RIP Ibu Sri Soedjono', '<p>Telah Dimuliakan Bapa di Sorga, Ibu Sri Soedjono, Ibu dari Bapak Tripujo Wiyono &amp; Mertua dari Ibu Maria Mauassa.</p>\r\n', 'test.png', 'rip_ibu_sri_soedjono', 'berita_duka', '2022-03-05 03:17:49', '2022-03-05 03:27:54'),
(3, 'Sejarah GPIB Kasih Karunia Badung', '<p>Sejarah GPIB Kasih Karunia Badung</p>\r\n', 'Welcome_Home!.png', 'sejarah', 'profile', '2022-03-06 16:12:22', '2022-03-06 16:13:09');

-- --------------------------------------------------------

--
-- Table structure for table `pelkat`
--

CREATE TABLE `pelkat` (
  `id` int NOT NULL,
  `pelkat` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `title` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `body` text NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `pelkat`
--

INSERT INTO `pelkat` (`id`, `pelkat`, `title`, `body`, `image`, `logo`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'PA', 'Daftar Pengurus Pelayanan Kategorial Pelayanan Anak Masa Bakti 2020 - 2022', '<table align=\"center\" border=\"1\" cellpadding=\"1\" cellspacing=\"1\" class=\"table table-condensed table-hover table-striped\" style=\"width:500px\">\r\n	<thead>\r\n		<tr>\r\n			<th scope=\"col\">NAMA</th>\r\n			<th scope=\"col\">JABATAN</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td><span style=\"font-size:18px\">Ambar Trisnawati Parinussa</span></td>\r\n			<td><span style=\"font-size:18px\">Ketua - Pelayan</span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-size:18px\">Chrismendo Haniel Caesario Paath</span></td>\r\n			<td><span style=\"font-size:18px\">Wkl. Ketua - Pelayan</span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-size:18px\">Yuniar Calorina Theophilia Johansz&nbsp;</span></td>\r\n			<td><span style=\"font-size:18px\">Sekretaris - Pelayan</span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-size:18px\">Ida Ayu Eka Surya Kumala Dewi Tompodung</span></td>\r\n			<td><span style=\"font-size:18px\">Wkl. Sekretaris- Pelayan</span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-size:18px\">Alit Ayudiari Pangaribuan</span></td>\r\n			<td><span style=\"font-size:18px\">Bendahara- Pelayan</span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-size:18px\">Ayu Tabitha Elisabet Karundeng</span></td>\r\n			<td><span style=\"font-size:18px\">Wkl. Bendahara- Pelayan</span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-size:18px\">Froukie Miliwati Laning</span></td>\r\n			<td><span style=\"font-size:18px\">Pelayan</span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-size:18px\">Christanty Tamasoleng</span></td>\r\n			<td><span style=\"font-size:18px\">Pelayan</span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-size:18px\">Yulia Anggraeni Widya Setia A. Rantung</span></td>\r\n			<td><span style=\"font-size:18px\">Pelayan</span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-size:18px\">Agnesdani Artati Laudata</span></td>\r\n			<td><span style=\"font-size:18px\">Pelayan</span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-size:18px\">Inry Wasti Nelcy Ismau</span></td>\r\n			<td><span style=\"font-size:18px\">Pelayan&nbsp;</span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-size:18px\">Winda Krisnasari Limbu</span></td>\r\n			<td><span style=\"font-size:18px\">Pelayan</span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-size:18px\">Endys Meidy Liesnanta Talise-Tangketasik</span></td>\r\n			<td><span style=\"font-size:18px\">Pelayan</span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-size:18px\">Donna Eunika Berliana Lusi</span></td>\r\n			<td><span style=\"font-size:18px\">Pelayan</span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-size:18px\">Lurdiani Tikara Pagappong</span></td>\r\n			<td><span style=\"font-size:18px\">Pelayan</span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-size:18px\">Gloria Esmeralda Loesi</span></td>\r\n			<td><span style=\"font-size:18px\">Pelayan</span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-size:18px\">Elisya Julianty Lintin</span></td>\r\n			<td><span style=\"font-size:18px\">Pelayan</span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-size:18px\">Alfintje Beatrix Lestriani Karundeng - Madea</span></td>\r\n			<td><span style=\"font-size:18px\">Pelayan</span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-size:18px\">Yohana Petronela Maria Aji - Papilaya</span></td>\r\n			<td><span style=\"font-size:18px\">Pelayan</span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-size:18px\">Rambu Yaku Katibi</span></td>\r\n			<td><span style=\"font-size:18px\">Pelayan</span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-size:18px\">Anugrahi Pasriyani Salukh</span></td>\r\n			<td><span style=\"font-size:18px\">Pelayan</span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'Banner_Ika.png', 'PA.png', 'pa', '2022-02-27 17:04:49', '2022-03-06 01:53:11'),
(2, 'PT', 'Daftar Pengurus Pelayanan Kategorial Persekutuan Teruna Masa Bakti 2020 - 2022', '<ol>\r\n	<li><span style=\"font-size:18px\">Denok Suci Wahyuningrum | Ketua - Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Devi Angelina Kakomore |&nbsp;Wkl. Ketua - Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Mariana Ekha Koyoh - Bogia |&nbsp;Sekretaris- Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Ketut Helka Lestari Fibriyanti |&nbsp;Wkl. Sekretaris- Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Sri Mulyati Nenobesi |&nbsp;Bendahara- Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Tri Vidianto Tarigan |&nbsp;Wkl. Bendahara- Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Suryani Bambang Setyono |&nbsp;Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Yusuf Staellen Tangke |&nbsp;Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Yenni Anneke Roring - Karundeng |&nbsp;Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Jennet Senawati |&nbsp;Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Yoyakim Pratama Oly | Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Rumiana Ida Siahaan |&nbsp;Pelayan</span></li>\r\n</ol>\r\n', 'banner_ika1.png', 'PT.png', 'pt', '2022-02-27 17:10:05', '2022-03-06 01:53:14'),
(3, 'GP', 'Daftar Pengurus Pelayanan Kategorial Gerakan Pemuda Masa Bakti 2020 - 2022', '<ol>\r\n	<li>Richard Antony Suatan | Ketua</li>\r\n	<li>Elisya Julianty Lintin | Wkl. Ketua</li>\r\n	<li>Zefanya Agatha Koyoh |&nbsp;Sekretaris</li>\r\n	<li>Magdalena Timisela |&nbsp;Wkl. Sekretaris</li>\r\n	<li>Rieska Anisa Dwiantari |&nbsp;Bendahara</li>\r\n	<li>Musa Gempur Laudata |&nbsp;Anggota</li>\r\n	<li>Maya Fandia Karuniawati |&nbsp;Anggota</li>\r\n	<li>Yesika Cindhe Puspa |&nbsp;Anggota</li>\r\n	<li>Albert Agung F. Pangaribuan |&nbsp;Anggota</li>\r\n	<li>Rivaldo Bagus Soepardhy |&nbsp;Anggota</li>\r\n	<li>Yoyakim Pratama Oly |&nbsp;Anggota</li>\r\n	<li>Regent H. C. Tompodung |&nbsp;Anggota</li>\r\n	<li>Harven Prima Kosala Tompodung |&nbsp;Anggota</li>\r\n	<li>Juaniver Timothy Kindangen Karundeng | Anggota</li>\r\n	<li>Kevin Imanuel Messah |&nbsp;Anggota</li>\r\n	<li>Geraldy Mogo Kadena |&nbsp;Anggota</li>\r\n	<li>Christina Natalisa Djaha |&nbsp;Anggota</li>\r\n	<li>Harmen Herling Sorongan |&nbsp;Anggota</li>\r\n	<li>Andrian Eka P. Djalimoen |&nbsp;Anggota</li>\r\n</ol>\r\n', 'banner_ika2.png', 'GP.png', 'gp', '2022-02-27 17:15:55', '2022-03-06 01:53:19'),
(4, 'PKP', 'Daftar Pengurus Pelayanan Kategorial Persekutuan Kaum Perempuan Masa Bakti 2020 - 2022', '<ol>\r\n	<li><span style=\"font-size:20px\">Ibu Anneke Anggreini Antara-Rantung | Ketua</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Dewi Susilawati Wardana |&nbsp;Wkl. Ketua</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Airin Rutsianti Wibowo-Abidano |&nbsp;Sekretaris</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Yosephine M. Imelda Parinusa-Massie |&nbsp;Wkl. Sekretaris</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Anak Agung Ayu Widiyani Jakaria |&nbsp;Bendahara</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Ketut Suryani Messah |&nbsp;Wkl. Bendahara</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Hertina Siswati Pongoh |&nbsp;Anggota</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Herni Dwiastuti Purba |&nbsp;Anggota</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Lientje Karta Sopacua |&nbsp;Anggota</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Rambu Tegi Samapati |&nbsp;Anggota</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Nengah Inggrit Arsini | Anggota</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu R.A. Maria John Widodari Wardhana |&nbsp;Anggota</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Asri Mardiastuti Tamasoleng |&nbsp;Anggota</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Rossye R. Maria Talisse-Tucunan |&nbsp;Anggota</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Warniti Handianto |&nbsp;Anggota</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Sulastri Sir |&nbsp;Anggota</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Troosye Adriana Mait |&nbsp;Anggota</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Ulupi Fitri Windari |&nbsp;Anggota</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Ester Tobing |&nbsp;Anggota</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Narita Fedrik Roko |&nbsp;Anggota</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Kristina Nyoman Suini Sabono |&nbsp;Anggota</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Yasmin Widjaja-De Fretes |&nbsp;Anggota</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Ni Luh Made Supiani Welkis | Anggota</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Ketut Sudariyani Ka | Anggota</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Theresya Suzanna S. Saliha |&nbsp;Anggota</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Ketut Supartini |&nbsp;Anggota</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Sri Suprihartini |&nbsp;Anggota</span></li>\r\n</ol>\r\n', 'banner_ika3.png', 'PKP.png', 'pkp', '2022-02-27 17:20:15', '2022-03-06 01:53:22'),
(5, 'PKB', 'Daftar Pengurus Pelayanan Kategorial Persekutuan Kaum Bapak Masa Bakti 2020 - 2022', '<ol>\r\n	<li>Bp. Frederik Antonius Doloksaribu | Ketua</li>\r\n	<li>Bp. Melky Bernard Leonard Ndaumanu |&nbsp;Wkl. Ketua</li>\r\n	<li>Bp. Rudy Kusnanto |&nbsp;Sekretaris</li>\r\n	<li>Bp. Dewa Made Sunadi |&nbsp;Wkl. Sekretaris</li>\r\n	<li>Bp. Josia Heru Nugroho |&nbsp;Bendahara</li>\r\n	<li>Bp. Ronald Nelson Lowongan |&nbsp;Wkl. Bendahara</li>\r\n	<li>Bp. Rocky Moningka |&nbsp;Anggota</li>\r\n	<li>Bp. Tander Risard Lowongan |&nbsp;Anggota</li>\r\n	<li>Bp. Solihin Trisno |&nbsp;Anggota</li>\r\n	<li>Bp. Jhon Christian Prihandoko |&nbsp;Anggota</li>\r\n	<li>Bp. Hendy Paidjan |&nbsp;Anggota</li>\r\n	<li>Bp. Joni Seo |&nbsp;Anggota</li>\r\n	<li>Bp. Slamet Supono |&nbsp;Anggota</li>\r\n	<li>Bp. Adhy Aryanto Potokatoe |&nbsp;Anggota</li>\r\n	<li>Bp. Oktavianus Soeyatniko Raharto |&nbsp;Anggota</li>\r\n	<li>Bp. I Putu Robby Nova |&nbsp;Anggota</li>\r\n	<li>Bp. Yosua Agustinus Alexander |&nbsp;Anggota</li>\r\n	<li>Bp. Heri Rosdianto |&nbsp;Anggota</li>\r\n	<li>Bp. Paulus Agabus Boesday |&nbsp;Anggota</li>\r\n	<li>Bp. Jemmy Antonius Sorongan |&nbsp;Anggota</li>\r\n	<li>Bp. Philips Robinson |&nbsp;Anggota</li>\r\n</ol>\r\n', 'banner_ika4.png', 'PKB.png', 'pkb', '2022-02-27 17:31:50', '2022-03-06 01:53:33'),
(6, 'PKLU', 'Daftar Pengurus Pelayanan Kategorial Persekutuan Kaum Lanjut Usia Masa Bakti 2020 - 2022', '<ol>\r\n	<li>Bp. Jorhans Alex Gabriel | Ketua</li>\r\n	<li>Ibu Alda Irene Nenga |&nbsp;Wkl. Ketua</li>\r\n	<li>Ibu Ester Kristiana Sunaryo &ndash; Ngili |&nbsp;Sekretaris</li>\r\n	<li>Ibu Louise Biuw Salean |&nbsp;Wkl. Sekretaris</li>\r\n	<li>Ibu Gusti Ayu Nym. Mudiasih Wenno |&nbsp;Bendahara</li>\r\n	<li>Ibu Ni Pt. Markusi Ngunjuamahu |&nbsp;Wkl. Bendahara</li>\r\n	<li>Ibu Meitty Marietje Simanjuntak &ndash; S |&nbsp;Anggota</li>\r\n	<li>Ibu Georgien Marcelina Ndaumanu |&nbsp;Anggota</li>\r\n	<li>Ibu Srihartini Wargino |&nbsp;Anggota</li>\r\n	<li>Ibu Dwi Arie Kuwilah |&nbsp;Anggota</li>\r\n	<li>Bp. Yustinus Recky Acub |&nbsp;Anggota</li>\r\n</ol>\r\n', 'banner_ika5.png', 'PKLU.png', 'pklu', '2022-02-27 17:33:57', '2022-03-06 01:53:57');

-- --------------------------------------------------------

--
-- Table structure for table `presbiter`
--

CREATE TABLE `presbiter` (
  `id` int NOT NULL,
  `presbiter` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `title` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `body` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `presbiter`
--

INSERT INTO `presbiter` (`id`, `presbiter`, `title`, `body`, `image`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Anthiokia', 'Daftar Presbiter GPIB Jemaat Kasih Karunia Badung Bali Sektor Pelayanan Anthiokia Masa Bakti 2017 - 2022 ', '<ol>\r\n	<li><span style=\"font-size:16px\">Dkn. GENDRA BUANA NGUDI SAPUTRA</span></li>\r\n	<li><span style=\"font-size:16px\">Dkn. GEORGE ROCKLES LOWONGAN</span></li>\r\n	<li><span style=\"font-size:16px\">Dkn. YUSAK NENOBESI</span></li>\r\n	<li><span style=\"font-size:16px\">Pnt. JUAN KAWAL</span></li>\r\n	<li><span style=\"font-size:16px\">Pnt. SRI HANNA YULIATI ABINENO &ndash; SUSANTO</span></li>\r\n	<li><span style=\"font-size:16px\">Pnt. SRI WIDODO SULAKSONO</span></li>\r\n</ol>\r\n', 'Banner_Ika.png', 'anthiokia', '2022-02-27 08:27:51', '2022-03-05 15:05:34'),
(2, 'Betlehem', 'Daftar Presbiter GPIB Jemaat Kasih Karunia Badung Bali Sektor Pelayanan Betlehem Masa Bakti 2017 - 2022', '<ol>\r\n	<li><span style=\"font-size:16px\">Dkn. AGUS PURJANTO</span></li>\r\n	<li><span style=\"font-size:16px\">Dkn. ELIAZER EDUARD FEOH</span></li>\r\n	<li><span style=\"font-size:16px\">Dkn. RONNY PUJO UTOMO&nbsp;</span></li>\r\n	<li><span style=\"font-size:16px\">Pnt. DOMINGGUS AGUSTINUS</span></li>\r\n	<li><span style=\"font-size:16px\">Pnt. I DEWA AYU ANOM KARTINI</span></li>\r\n	<li><span style=\"font-size:16px\">(Alm.) Pnt. YULIUS RADAK PANDAN</span></li>\r\n</ol>\r\n', 'Banner_Ika.png', 'betlehem', '2022-02-27 08:47:45', '2022-03-05 15:05:39'),
(3, 'Corinthians', 'Daftar Presbiter GPIB Jemaat Kasih Karunia Badung Bali Sektor Pelayanan Corinthians Masa Bakti 2017 - 2022', '<ol>\r\n	<li><span style=\"font-size:16px\">Dkn. MIRLAN BERLIANA SITUMEANG</span></li>\r\n	<li><span style=\"font-size:16px\">Dkn. IMANUEL AYUB SURAH</span></li>\r\n	<li><span style=\"font-size:16px\">Dkn. I GUSTI AYU KOMANG WIDARIANI</span></li>\r\n	<li><span style=\"font-size:16px\">Dkn. ROYKE SUATAN</span></li>\r\n	<li><span style=\"font-size:16px\">Dkn. SUBANDI</span></li>\r\n	<li><span style=\"font-size:16px\">(Almh.) Dkn. ESTER KRISTIANINGSIH JARAMAMO</span></li>\r\n	<li><span style=\"font-size:16px\">Pnt. ADENKRIS TAKUBESSI</span></li>\r\n	<li><span style=\"font-size:16px\">Pnt. AGUSTINA TANGKETASIK</span></li>\r\n	<li><span style=\"font-size:16px\">Pnt. DORTHYA BILI CHOLID</span></li>\r\n	<li><span style=\"font-size:16px\">Pnt. FRANSISKUS KATU</span></li>\r\n	<li><span style=\"font-size:16px\">Pnt. PETRUS HEINCE YOHAN TALISE</span></li>\r\n	<li><span style=\"font-size:16px\">Pnt. SITI NURAHMAWATI</span></li>\r\n</ol>\r\n', 'Banner_Ika1.png', 'corinthians', '2022-02-27 15:09:05', '2022-03-05 15:05:44'),
(4, 'Damsyik', 'Daftar Presbiter GPIB Jemaat Kasih Karunia Badung Bali Sektor Pelayanan Damsyik Masa Bakti 2017 - 2022', '<ol>\r\n	<li><span style=\"font-size:16px\">Dkn. SINSIGUS WABANG</span></li>\r\n	<li><span style=\"font-size:16px\">Dkn. NI NYOMAN SUKARNI</span></li>\r\n	<li><span style=\"font-size:16px\">Pnt. ENDANG KRISNAWATI</span></li>\r\n</ol>\r\n', 'Banner_Ika2.png', 'damsyik', '2022-02-27 15:10:18', '2022-03-05 15:05:49'),
(5, 'Efrata', 'Daftar Presbiter GPIB Jemaat Kasih Karunia Badung Bali Sektor Pelayanan Efrata Masa Bakti 2017 - 2022', '<ol>\r\n	<li><span style=\"font-size:16px\">Dkn. DODDY F. WIBOWO</span></li>\r\n	<li><span style=\"font-size:16px\">Dkn. JERMIAS PATTOLA BALLO</span></li>\r\n	<li><span style=\"font-size:16px\">Dkn. PETRUS TANGKABIRINGAN</span></li>\r\n	<li><span style=\"font-size:16px\">Dkn. PIETER GERARD WATTIMENA</span></li>\r\n	<li><span style=\"font-size:16px\">Pnt. ESTER RAHAYU LOESI</span></li>\r\n	<li><span style=\"font-size:16px\">Pnt. DANIEL LILI KUMALA KONDA, SE</span></li>\r\n	<li><span style=\"font-size:16px\">Pnt. HENDRIK ELISA WENNO</span></li>\r\n	<li><span style=\"font-size:16px\">Pnt. JIBRAEL MUNDE</span></li>\r\n	<li><span style=\"font-size:16px\">Pnt. OCTAVIANUS TAY NGUNJUAMAHU</span></li>\r\n</ol>\r\n', 'Banner_Ika3.png', 'efrata', '2022-02-27 15:11:34', '2022-03-05 15:05:55'),
(6, 'Filipi', 'Daftar Presbiter GPIB Jemaat Kasih Karunia Badung Bali Sektor Pelayanan Filipi Masa Bakti 2017 - 2022', '<ol>\r\n	<li><span style=\"font-size:16px\">Dkn. DANIEL WIMBERT TOMPODUNG</span></li>\r\n	<li><span style=\"font-size:16px\">Dkn. RENNY S. SOEGIANTO</span></li>\r\n	<li><span style=\"font-size:16px\">Dkn. HEINTJE JANUARDO RORING</span></li>\r\n	<li><span style=\"font-size:16px\">Dkn. BETTY FONY SOELISTYANTO</span></li>\r\n	<li><span style=\"font-size:16px\">Dkn. TOTO BUDI CAHYONO</span></li>\r\n	<li><span style=\"font-size:16px\">Pnt. JULIUS DAVID KIMBAL</span></li>\r\n	<li><span style=\"font-size:16px\">Pnt. IDA AYU PUTU CHINDU</span></li>\r\n	<li><span style=\"font-size:16px\">Pnt. SAYANGI LAGASING SENGNGE</span></li>\r\n	<li><span style=\"font-size:16px\">Pnt. U. ADVENTUS LAWALATA</span></li>\r\n</ol>\r\n', 'Banner_Ika4.png', 'filipi', '2022-02-27 15:12:13', '2022-03-05 15:06:06'),
(7, 'Galilea', 'Daftar Presbiter GPIB Jemaat Kasih Karunia Badung Bali Sektor Pelayanan Galilea Masa Bakti 2017 - 2022', '<ol>\r\n	<li><span style=\"font-size:16px\">Dkn. DIANA MANOPO</span></li>\r\n	<li><span style=\"font-size:16px\">Dkn. NI KETUT BUDIASIH</span></li>\r\n	<li><span style=\"font-size:16px\">Dkn. PERBRUHENGKI ALFONSUS MESSAH</span></li>\r\n	<li><span style=\"font-size:16px\">Pnt. DENNY ALEX MANTIRI</span></li>\r\n	<li><span style=\"font-size:16px\">Pnt. PAINO JAKARIA</span></li>\r\n	<li><span style=\"font-size:16px\">Pnt. PERINGATAN WARUWU</span></li>\r\n	<li><span style=\"font-size:16px\">Pnt. SAPTO YUWONO</span></li>\r\n</ol>\r\n', 'Banner_Ika5.png', 'galilea', '2022-02-27 15:13:00', '2022-03-05 15:06:15'),
(8, 'Hermon', 'Daftar Presbiter GPIB Jemaat Kasih Karunia Badung Bali Sektor Pelayanan Hermon Masa Bakti 2017 - 2022', '<ol>\r\n	<li><span style=\"font-size:16px\">Pnt. ANDREAS HENDY WIBOWO</span></li>\r\n	<li><span style=\"font-size:16px\">Pnt. DANIEL DANGGA</span></li>\r\n	<li><span style=\"font-size:16px\">Pnt. DINA ADRIANA WIDJAJADI</span></li>\r\n	<li><span style=\"font-size:16px\">Pnt. FLORENCE PAATH &ndash; RUMPUIN</span></li>\r\n	<li><span style=\"font-size:16px\">Dkn. AGUNG PRIBADI</span></li>\r\n	<li><span style=\"font-size:16px\">Dkn. FRANKLIN YONATHAN HUKUBUN</span></li>\r\n	<li><span style=\"font-size:16px\">Dkn. NI NYOMAN SUANI</span></li>\r\n	<li><span style=\"font-size:16px\">Dkn. JOHAND SUY</span></li>\r\n	<li><span style=\"font-size:16px\">Dkn. MOZEZ AYUB LANING</span></li>\r\n</ol>\r\n', 'Banner_Ika6.png', 'hermon', '2022-02-27 15:13:35', '2022-03-05 15:06:20');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Kuota Ibadah Pagi', 'kuota_ibadah_pagi', '120', '2022-02-28 15:19:32', '2022-02-28 15:23:48'),
(2, 'Kuota Ibadah Siang', 'kuota_ibadah_siang', '120', '2022-02-28 15:23:59', '2022-02-28 15:23:59'),
(3, 'Kuota Ibadah Sore', 'kuota_ibadah_sore', '100', '2022-02-28 15:24:11', '2022-02-28 15:50:27'),
(4, 'Jumlah Kursi', 'jumlah_kursi', '4', '2022-02-28 15:45:31', '2022-02-28 15:45:31');

-- --------------------------------------------------------

--
-- Table structure for table `users_admins`
--

CREATE TABLE `users_admins` (
  `id` int NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_role` int NOT NULL,
  `last_login_at` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users_admins`
--

INSERT INTO `users_admins` (`id`, `fullname`, `username`, `email`, `password`, `id_role`, `last_login_at`, `created_at`, `updated_at`) VALUES
(1, 'Superadmin', 'superadmin', 'aldobagus@hotmail.co.id', '$2y$10$3CM2YTjWfkXap5ACRcNemuZ1ypfLK6Sxhn9kRY6PaCYtJr76yoRxa', 1, '07-03-2022 10:47:25', '2022-02-20 03:15:23', '2022-03-07 02:47:25'),
(2, 'Rizka Kepala Kantor', 'rizka', 'rizka@gmail.com', '$2y$10$9YBLxUXm15SRsyTIBrgyGOy8kFGO2JARW20WdcDyxWUi0jD.gr6MS', 2, '', '2022-03-07 03:19:12', '2022-03-07 03:21:14'),
(4, 'Dimas', 'dimas', 'dimas@gmail.com', '$2y$10$BChHIA3ZMXqyXpDg8mKphOvq6XQtnD2GWzWmV.0fhfm48Z9G93BJK', 2, '', '2022-03-07 03:21:38', '2022-03-07 03:21:38');

-- --------------------------------------------------------

--
-- Table structure for table `users_role`
--

CREATE TABLE `users_role` (
  `id` int NOT NULL,
  `role` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users_role`
--

INSERT INTO `users_role` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', '2022-02-20 03:14:40', '2022-02-20 03:14:40'),
(2, 'admin', '2022-02-20 03:14:40', '2022-02-20 03:14:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_log_admin` (`id_admin`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_ibadah`
--
ALTER TABLE `daftar_ibadah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_ibadah_child`
--
ALTER TABLE `daftar_ibadah_child`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_master_pendaftar` (`id_master_pendaftar`);

--
-- Indexes for table `daftar_ibadah_child_history`
--
ALTER TABLE `daftar_ibadah_child_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_master_pendaftar_history` (`id_master_pendaftar`);

--
-- Indexes for table `daftar_ibadah_history`
--
ALTER TABLE `daftar_ibadah_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `heroes`
--
ALTER TABLE `heroes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kmj`
--
ALTER TABLE `kmj`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komisi`
--
ALTER TABLE `komisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelkat`
--
ALTER TABLE `pelkat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `presbiter`
--
ALTER TABLE `presbiter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_admins`
--
ALTER TABLE `users_admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_admins_role` (`id_role`);

--
-- Indexes for table `users_role`
--
ALTER TABLE `users_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `daftar_ibadah`
--
ALTER TABLE `daftar_ibadah`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `daftar_ibadah_child`
--
ALTER TABLE `daftar_ibadah_child`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `daftar_ibadah_child_history`
--
ALTER TABLE `daftar_ibadah_child_history`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `daftar_ibadah_history`
--
ALTER TABLE `daftar_ibadah_history`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `heroes`
--
ALTER TABLE `heroes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kmj`
--
ALTER TABLE `kmj`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `komisi`
--
ALTER TABLE `komisi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pelkat`
--
ALTER TABLE `pelkat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `presbiter`
--
ALTER TABLE `presbiter`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users_admins`
--
ALTER TABLE `users_admins`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users_role`
--
ALTER TABLE `users_role`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD CONSTRAINT `fk_log_admin` FOREIGN KEY (`id_admin`) REFERENCES `users_admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `daftar_ibadah_child`
--
ALTER TABLE `daftar_ibadah_child`
  ADD CONSTRAINT `fk_master_pendaftar` FOREIGN KEY (`id_master_pendaftar`) REFERENCES `daftar_ibadah` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `daftar_ibadah_child_history`
--
ALTER TABLE `daftar_ibadah_child_history`
  ADD CONSTRAINT `fk_master_pendaftar_history` FOREIGN KEY (`id_master_pendaftar`) REFERENCES `daftar_ibadah_history` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users_admins`
--
ALTER TABLE `users_admins`
  ADD CONSTRAINT `fk_admins_role` FOREIGN KEY (`id_role`) REFERENCES `users_role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
