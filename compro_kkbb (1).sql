-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2022 at 04:57 PM
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
(1, 1, 'Settings', 'Admin #1 mengosongkan actvity log -> SUCCESS!', '2022-02-28 15:25:45', '2022-02-28 15:25:45'),
(2, 1, 'Settings', 'Admin #1 melihat system logs', '2022-02-28 15:25:46', '2022-02-28 15:25:46'),
(3, 1, 'Settings', 'Admin #1 melihat system logs', '2022-02-28 15:26:17', '2022-02-28 15:26:17'),
(4, 1, 'Pages', 'Admin #1 masuk dashboard Pages', '2022-02-28 15:27:04', '2022-02-28 15:27:04'),
(5, 1, 'Kmj', 'Admin #1 masuk dashboard Kmj', '2022-02-28 15:27:06', '2022-02-28 15:27:06'),
(6, 1, 'Komisi', 'Admin #1 masuk dashboard Komisi', '2022-02-28 15:27:07', '2022-02-28 15:27:07'),
(7, 1, 'Pelkat', 'Admin #1 masuk dashboard Pelkat', '2022-02-28 15:27:08', '2022-02-28 15:27:08'),
(8, 1, 'Presbiter', 'Admin #1 masuk dashboard Presbiter', '2022-02-28 15:27:09', '2022-02-28 15:27:09'),
(9, 1, 'Settings', 'Admin #1 masuk dashboard settings', '2022-02-28 15:45:22', '2022-02-28 15:45:22'),
(10, 1, 'Settings', 'Admin #1 set settings \'Jumlah Kursi\' -> SUCCESS', '2022-02-28 15:45:31', '2022-02-28 15:45:31'),
(11, 1, 'Settings', 'Admin #1 masuk dashboard settings', '2022-02-28 15:45:32', '2022-02-28 15:45:32'),
(12, 1, 'Settings', 'Admin #1 masuk dashboard settings', '2022-02-28 15:49:13', '2022-02-28 15:49:13'),
(13, 1, 'Settings', 'Admin #1 masuk dashboard settings', '2022-02-28 15:49:21', '2022-02-28 15:49:21'),
(14, 1, 'Settings', 'Admin #1 masuk dashboard settings', '2022-02-28 15:49:24', '2022-02-28 15:49:24'),
(15, 1, 'Settings', 'Admin #1 masuk dashboard settings', '2022-02-28 15:49:26', '2022-02-28 15:49:26'),
(16, 1, 'Settings', 'Admin #1 melihat system logs', '2022-02-28 15:49:27', '2022-02-28 15:49:27'),
(17, 1, 'Settings', 'Admin #1 masuk dashboard settings', '2022-02-28 15:49:30', '2022-02-28 15:49:30'),
(18, 1, 'Settings', 'Admin #1 masuk dashboard settings', '2022-02-28 15:50:04', '2022-02-28 15:50:04'),
(19, 1, 'Settings', 'Admin #1 set settings \'Kuota Ibadah Sore\' -> SUCCESS', '2022-02-28 15:50:27', '2022-02-28 15:50:27'),
(20, 1, 'Settings', 'Admin #1 masuk dashboard settings', '2022-02-28 15:50:28', '2022-02-28 15:50:28');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `komisi`
--

INSERT INTO `komisi` (`id`, `komisi`, `title`, `body`, `image`, `created_at`, `updated_at`) VALUES
(1, 'IAI', 'Daftar Komisi IAI Masa Bakti 2017 - 2022', '<ul>\r\n	<li><span style=\"font-size:22px\">Pnt. Petrus Heintje&nbsp;Yohan Talise |&nbsp;Ketua&nbsp;IAI</span></li>\r\n	<li><span style=\"font-size:22px\">Pnt. Ny. Chindu&nbsp;Soepardhy |&nbsp;Anggota&nbsp;IAI</span></li>\r\n	<li><span style=\"font-size:22px\">Dkn. Ny. Budiasih Malelak | Anggota&nbsp;IAI</span></li>\r\n</ul>\r\n', 'banner_ika.png', '2022-02-27 18:10:12', '2022-02-27 18:10:12');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `body`, `image`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'PHMJ GPIB Kasih Karunia Badung Bali Masa Bakti 2017 - 2022', '<p><strong><span style=\"font-size:20px\">PENGURUS HARIAN MAJELIS JEMAAT ( PHMJ )</span></strong></p>\r\n\r\n<ul>\r\n	<li><strong><span style=\"font-size:20px\">KETUA &nbsp; &nbsp;: Pdt. JOHANES WADU</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">KETUA 1 : Dkn. DODDY F. WIBOWO</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">KETUA 2 : Pnt. SAYANGI LAGASING SENGNGE</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">KETUA 3 : Pnt. ESTER RAHAYU LOESI</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">KETUA 4 : Pnt. JULIUS DAVID KIMBAL</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">KETUA 5 : Dkn. DANIEL WIMBERT TOMPODUNG</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Sekretaris &nbsp; &nbsp;: Pnt. U. ADVENTUS LAWALATA</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Sekretaris 1 : Dkn. DIANA MANOPO</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Sekretaris 2 : Pnt. AGUSTINA TANGKETASIK</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Bendahara &nbsp; &nbsp;: Pnt. I DEWA AYU ANOM KARTINI</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Bendfahar 1 &nbsp;: Dkn. MIRLAN BERLIANA SITUMEANG</span></strong></li>\r\n</ul>\r\n', 'Banner_Ika.png', 'phmj', '2022-02-28 13:44:15', '2022-02-28 14:03:59');

-- --------------------------------------------------------

--
-- Table structure for table `pelkat`
--

CREATE TABLE `pelkat` (
  `id` int NOT NULL,
  `pelkat` varchar(255) NOT NULL,
  `title` varchar(500) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `pelkat`
--

INSERT INTO `pelkat` (`id`, `pelkat`, `title`, `body`, `image`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'PA', 'Daftar Pengurus Pelayanan Kategorial Pelayanan Anak Masa Bakti 2020 - 2022', '<ol>\r\n	<li><span style=\"font-size:18px\">Ambar Trisnawati Parinussa | Ketua - Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Chrismendo Haniel Caesario Paath |&nbsp;Wkl. Ketua - Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Yuniar Calorina Theophilia Johansz | Sekretaris- Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Ida Ayu Eka Surya Kumala Dewi Tompodung |&nbsp;Wkl. Sekretaris- Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Alit Ayudiari Pangaribuan |&nbsp;Bendahara- Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Ayu Tabitha Elisabet Karundeng |&nbsp;Wkl. Bendahara- Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Froukie Miliwati Laning |&nbsp;Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Christanty Tamasoleng |&nbsp;Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Yulia Anggraeni Widya Setia A. Rantung |&nbsp;Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Agnesdani Artati Laudata |&nbsp;Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Inry Wasti Nelcy Ismau |&nbsp;Pelayan&nbsp;</span></li>\r\n	<li><span style=\"font-size:18px\">Winda Krisnasari Limbu |&nbsp;Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Endys Meidy Liesnanta Talise-Tangketasik | Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Donna Eunika Berliana Lusi |&nbsp;Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Lurdiani Tikara Pagappong |&nbsp;Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Gloria Esmeralda Loesi |&nbsp;Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Elisya Julianty Lintin |&nbsp;Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Alfintje Beatrix Lestriani Karundeng - Madea |&nbsp;Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Yohana Petronela Maria Aji - Papilaya |&nbsp;Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Rambu Yaku Katibi |&nbsp;Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Anugrahi Pasriyani Salukh |&nbsp;Pelayan</span></li>\r\n</ol>\r\n', 'Banner_Ika.png', 'PA.png', '2022-02-27 17:04:49', '2022-02-27 17:04:49'),
(2, 'PT', 'Daftar Pengurus Pelayanan Kategorial Persekutuan Teruna Masa Bakti 2020 - 2022', '<ol>\r\n	<li><span style=\"font-size:18px\">Denok Suci Wahyuningrum | Ketua - Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Devi Angelina Kakomore |&nbsp;Wkl. Ketua - Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Mariana Ekha Koyoh - Bogia |&nbsp;Sekretaris- Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Ketut Helka Lestari Fibriyanti |&nbsp;Wkl. Sekretaris- Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Sri Mulyati Nenobesi |&nbsp;Bendahara- Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Tri Vidianto Tarigan |&nbsp;Wkl. Bendahara- Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Suryani Bambang Setyono |&nbsp;Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Yusuf Staellen Tangke |&nbsp;Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Yenni Anneke Roring - Karundeng |&nbsp;Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Jennet Senawati |&nbsp;Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Yoyakim Pratama Oly | Pelayan</span></li>\r\n	<li><span style=\"font-size:18px\">Rumiana Ida Siahaan |&nbsp;Pelayan</span></li>\r\n</ol>\r\n', 'banner_ika1.png', 'PT.png', '2022-02-27 17:10:05', '2022-02-27 17:10:05'),
(3, 'GP', 'Daftar Pengurus Pelayanan Kategorial Gerakan Pemuda Masa Bakti 2020 - 2022', '<ol>\r\n	<li>Richard Antony Suatan | Ketua</li>\r\n	<li>Elisya Julianty Lintin | Wkl. Ketua</li>\r\n	<li>Zefanya Agatha Koyoh |&nbsp;Sekretaris</li>\r\n	<li>Magdalena Timisela |&nbsp;Wkl. Sekretaris</li>\r\n	<li>Rieska Anisa Dwiantari |&nbsp;Bendahara</li>\r\n	<li>Musa Gempur Laudata |&nbsp;Anggota</li>\r\n	<li>Maya Fandia Karuniawati |&nbsp;Anggota</li>\r\n	<li>Yesika Cindhe Puspa |&nbsp;Anggota</li>\r\n	<li>Albert Agung F. Pangaribuan |&nbsp;Anggota</li>\r\n	<li>Rivaldo Bagus Soepardhy |&nbsp;Anggota</li>\r\n	<li>Yoyakim Pratama Oly |&nbsp;Anggota</li>\r\n	<li>Regent H. C. Tompodung |&nbsp;Anggota</li>\r\n	<li>Harven Prima Kosala Tompodung |&nbsp;Anggota</li>\r\n	<li>Juaniver Timothy Kindangen Karundeng | Anggota</li>\r\n	<li>Kevin Imanuel Messah |&nbsp;Anggota</li>\r\n	<li>Geraldy Mogo Kadena |&nbsp;Anggota</li>\r\n	<li>Christina Natalisa Djaha |&nbsp;Anggota</li>\r\n	<li>Harmen Herling Sorongan |&nbsp;Anggota</li>\r\n	<li>Andrian Eka P. Djalimoen |&nbsp;Anggota</li>\r\n</ol>\r\n', 'banner_ika2.png', 'GP.png', '2022-02-27 17:15:55', '2022-02-27 17:15:55'),
(4, 'PKP', 'Daftar Pengurus Pelayanan Kategorial Persekutuan Kaum Perempuan Masa Bakti 2020 - 2022', '<ol>\r\n	<li><span style=\"font-size:20px\">Ibu Anneke Anggreini Antara-Rantung | Ketua</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Dewi Susilawati Wardana |&nbsp;Wkl. Ketua</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Airin Rutsianti Wibowo-Abidano |&nbsp;Sekretaris</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Yosephine M. Imelda Parinusa-Massie |&nbsp;Wkl. Sekretaris</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Anak Agung Ayu Widiyani Jakaria |&nbsp;Bendahara</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Ketut Suryani Messah |&nbsp;Wkl. Bendahara</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Hertina Siswati Pongoh |&nbsp;Anggota</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Herni Dwiastuti Purba |&nbsp;Anggota</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Lientje Karta Sopacua |&nbsp;Anggota</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Rambu Tegi Samapati |&nbsp;Anggota</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Nengah Inggrit Arsini | Anggota</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu R.A. Maria John Widodari Wardhana |&nbsp;Anggota</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Asri Mardiastuti Tamasoleng |&nbsp;Anggota</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Rossye R. Maria Talisse-Tucunan |&nbsp;Anggota</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Warniti Handianto |&nbsp;Anggota</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Sulastri Sir |&nbsp;Anggota</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Troosye Adriana Mait |&nbsp;Anggota</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Ulupi Fitri Windari |&nbsp;Anggota</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Ester Tobing |&nbsp;Anggota</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Narita Fedrik Roko |&nbsp;Anggota</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Kristina Nyoman Suini Sabono |&nbsp;Anggota</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Yasmin Widjaja-De Fretes |&nbsp;Anggota</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Ni Luh Made Supiani Welkis | Anggota</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Ketut Sudariyani Ka | Anggota</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Theresya Suzanna S. Saliha |&nbsp;Anggota</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Ketut Supartini |&nbsp;Anggota</span></li>\r\n	<li><span style=\"font-size:20px\">Ibu Sri Suprihartini |&nbsp;Anggota</span></li>\r\n</ol>\r\n', 'banner_ika3.png', 'PKP.png', '2022-02-27 17:20:15', '2022-02-27 17:20:15'),
(5, 'PKB', 'Daftar Pengurus Pelayanan Kategorial Persekutuan Kaum Bapak Masa Bakti 2020 - 2022', '<ol>\r\n	<li>Bp. Frederik Antonius Doloksaribu | Ketua</li>\r\n	<li>Bp. Melky Bernard Leonard Ndaumanu |&nbsp;Wkl. Ketua</li>\r\n	<li>Bp. Rudy Kusnanto |&nbsp;Sekretaris</li>\r\n	<li>Bp. Dewa Made Sunadi |&nbsp;Wkl. Sekretaris</li>\r\n	<li>Bp. Josia Heru Nugroho |&nbsp;Bendahara</li>\r\n	<li>Bp. Ronald Nelson Lowongan |&nbsp;Wkl. Bendahara</li>\r\n	<li>Bp. Rocky Moningka |&nbsp;Anggota</li>\r\n	<li>Bp. Tander Risard Lowongan |&nbsp;Anggota</li>\r\n	<li>Bp. Solihin Trisno |&nbsp;Anggota</li>\r\n	<li>Bp. Jhon Christian Prihandoko |&nbsp;Anggota</li>\r\n	<li>Bp. Hendy Paidjan |&nbsp;Anggota</li>\r\n	<li>Bp. Joni Seo |&nbsp;Anggota</li>\r\n	<li>Bp. Slamet Supono |&nbsp;Anggota</li>\r\n	<li>Bp. Adhy Aryanto Potokatoe |&nbsp;Anggota</li>\r\n	<li>Bp. Oktavianus Soeyatniko Raharto |&nbsp;Anggota</li>\r\n	<li>Bp. I Putu Robby Nova |&nbsp;Anggota</li>\r\n	<li>Bp. Yosua Agustinus Alexander |&nbsp;Anggota</li>\r\n	<li>Bp. Heri Rosdianto |&nbsp;Anggota</li>\r\n	<li>Bp. Paulus Agabus Boesday |&nbsp;Anggota</li>\r\n	<li>Bp. Jemmy Antonius Sorongan |&nbsp;Anggota</li>\r\n	<li>Bp. Philips Robinson |&nbsp;Anggota</li>\r\n</ol>\r\n', 'banner_ika4.png', 'PKB.png', '2022-02-27 17:31:50', '2022-02-27 17:31:50'),
(6, 'PKLU', 'Daftar Pengurus Pelayanan Kategorial Persekutuan Kaum Lanjut Usia Masa Bakti 2020 - 2022', '<ol>\r\n	<li>Bp. Jorhans Alex Gabriel | Ketua</li>\r\n	<li>Ibu Alda Irene Nenga |&nbsp;Wkl. Ketua</li>\r\n	<li>Ibu Ester Kristiana Sunaryo &ndash; Ngili |&nbsp;Sekretaris</li>\r\n	<li>Ibu Louise Biuw Salean |&nbsp;Wkl. Sekretaris</li>\r\n	<li>Ibu Gusti Ayu Nym. Mudiasih Wenno |&nbsp;Bendahara</li>\r\n	<li>Ibu Ni Pt. Markusi Ngunjuamahu |&nbsp;Wkl. Bendahara</li>\r\n	<li>Ibu Meitty Marietje Simanjuntak &ndash; S |&nbsp;Anggota</li>\r\n	<li>Ibu Georgien Marcelina Ndaumanu |&nbsp;Anggota</li>\r\n	<li>Ibu Srihartini Wargino |&nbsp;Anggota</li>\r\n	<li>Ibu Dwi Arie Kuwilah |&nbsp;Anggota</li>\r\n	<li>Bp. Yustinus Recky Acub |&nbsp;Anggota</li>\r\n</ol>\r\n', 'banner_ika5.png', 'PKLU.png', '2022-02-27 17:33:57', '2022-02-27 17:33:57');

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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `presbiter`
--

INSERT INTO `presbiter` (`id`, `presbiter`, `title`, `body`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Anthiokia', 'Daftar Presbiter GPIB Jemaat Kasih Karunia Badung Bali Sektor Pelayanan Anthiokia Masa Bakti 2017 - 2022 ', '<ol>\r\n	<li><strong><span style=\"font-size:20px\">Dkn. GENDRA BUANA NGUDI SAPUTRA</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Dkn. GEORGE ROCKLES LOWONGAN</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Dkn. YUSAK NENOBESI</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Pnt. JUAN KAWAL</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Pnt. SRI HANNA YULIATI ABINENO &ndash; SUSANTO</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Pnt. SRI WIDODO SULAKSONO</span></strong></li>\r\n</ol>\r\n', 'Banner_Ika.png', '2022-02-27 08:27:51', '2022-02-27 15:07:44'),
(2, 'Betlehem', 'Daftar Presbiter GPIB Jemaat Kasih Karunia Badung Bali Sektor Pelayanan Betlehem Masa Bakti 2017 - 2022', '<ol>\r\n	<li><strong><span style=\"font-size:20px\">Dkn. AGUS PURJANTO</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Dkn. ELIAZER EDUARD FEOH</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Dkn. RONNY PUJO UTOMO&nbsp;</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Pnt. DOMINGGUS AGUSTINUS</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Pnt. I DEWA AYU ANOM KARTINI</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Pnt. YULIUS RADAK PANDAN</span></strong></li>\r\n</ol>\r\n', 'Banner_Ika.png', '2022-02-27 08:47:45', '2022-02-27 15:07:33'),
(3, 'Corinthians', 'Daftar Presbiter GPIB Jemaat Kasih Karunia Badung Bali Sektor Pelayanan Corinthians Masa Bakti 2017 - 2022', '<ol>\r\n	<li><strong><span style=\"font-size:20px\">Dkn. MIRLAN BERLIANA SITUMEANG</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Dkn. IMANUEL AYUB SURAH</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Dkn. I GUSTI AYU KOMANG WIDARIANI</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Dkn. ROYKE SUATAN</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Dkn. SUBANDI</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Dkn. ESTER KRISTIANINGSIH JARAMAMO</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Pnt. ADENKRIS TAKUBESSI</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Pnt. AGUSTINA TANGKETASIK</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Pnt. DORTHYA BILI CHOLID</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Pnt. FRANSISKUS KATU</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Pnt. PETRUS HEINCE YOHAN TALISE</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Pnt. SITI NURAHMAWATI</span></strong></li>\r\n</ol>\r\n', 'Banner_Ika1.png', '2022-02-27 15:09:05', '2022-02-27 15:09:05'),
(4, 'Damsyik', 'Daftar Presbiter GPIB Jemaat Kasih Karunia Badung Bali Sektor Pelayanan Damsyik Masa Bakti 2017 - 2022', '<ol>\r\n	<li><span style=\"font-size:20px\">Dkn. SINSIGUS WABANG</span></li>\r\n	<li><span style=\"font-size:20px\">Dkn. NI NYOMAN SUKARNI</span></li>\r\n	<li><span style=\"font-size:20px\">Pnt. ENDANG KRISNAWATI</span></li>\r\n</ol>\r\n', 'Banner_Ika2.png', '2022-02-27 15:10:18', '2022-02-27 15:10:18'),
(5, 'Efrata', 'Daftar Presbiter GPIB Jemaat Kasih Karunia Badung Bali Sektor Pelayanan Efrata Masa Bakti 2017 - 2022', '<ol>\r\n	<li><strong><span style=\"font-size:20px\">Dkn. DODDY F. WIBOWO</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Dkn. JERMIAS PATTOLA BALLO</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Dkn. PETRUS TANGKABIRINGAN</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Dkn. PIETER GERARD WATTIMENA</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Pnt. ESTER RAHAYU LOESI</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Pnt. DANIEL LILI KUMALA KONDA, SE</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Pnt. HENDRIK ELISA WENNO</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Pnt. JIBRAEL MUNDE</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Pnt. OCTAVIANUS TAY NGUNJUAMAHU</span></strong></li>\r\n</ol>\r\n', 'Banner_Ika3.png', '2022-02-27 15:11:34', '2022-02-27 15:11:34'),
(6, 'Filipi', 'Daftar Presbiter GPIB Jemaat Kasih Karunia Badung Bali Sektor Pelayanan Filipi Masa Bakti 2017 - 2022', '<ol>\r\n	<li><strong><span style=\"font-size:20px\">Dkn. DANIEL WIMBERT TOMPODUNG</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Dkn. RENNY S. SOEGIANTO</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Dkn. HEINTJE JANUARDO RORING</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Dkn. BETTY FONY SOELISTYANTO</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Dkn. TOTO BUDI CAHYONO</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Pnt. JULIUS DAVID KIMBAL</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Pnt. IDA AYU PUTU CHINDU</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Pnt. SAYANGI LAGASING SENGNGE</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Pnt. U. ADVENTUS LAWALATA</span></strong></li>\r\n</ol>\r\n', 'Banner_Ika4.png', '2022-02-27 15:12:13', '2022-02-27 15:12:13'),
(7, 'Galilea', 'Daftar Presbiter GPIB Jemaat Kasih Karunia Badung Bali Sektor Pelayanan Galilea Masa Bakti 2017 - 2022', '<ol>\r\n	<li><strong><span style=\"font-size:20px\">Dkn. DIANA MANOPO</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Dkn. NI KETUT BUDIASIH</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Dkn. PERBRUHENGKI ALFONSUS MESSAH</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Pnt. DENNY ALEX MANTIRI</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Pnt. PAINO JAKARIA</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Pnt. PERINGATAN WARUWU</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Pnt. SAPTO YUWONO</span></strong></li>\r\n</ol>\r\n', 'Banner_Ika5.png', '2022-02-27 15:13:00', '2022-02-27 15:13:00'),
(8, 'Hermon', 'Daftar Presbiter GPIB Jemaat Kasih Karunia Badung Bali Sektor Pelayanan Hermon Masa Bakti 2017 - 2022', '<ol>\r\n	<li><strong><span style=\"font-size:20px\">Pnt. ANDREAS HENDY WIBOWO</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Pnt. DANIEL DANGGA</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Pnt. DINA ADRIANA WIDJAJADI</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Pnt. FLORENCE PAATH &ndash; RUMPUIN</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Dkn. AGUNG PRIBADI</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Dkn. FRANKLIN YONATHAN HUKUBUN</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Dkn. NI NYOMAN SUANI</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Dkn. JOHAND SUY</span></strong></li>\r\n	<li><strong><span style=\"font-size:20px\">Dkn. MOZEZ AYUB LANING</span></strong></li>\r\n</ol>\r\n', 'Banner_Ika6.png', '2022-02-27 15:13:35', '2022-02-27 15:13:35');

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
(1, 'Superadmin', 'superadmin', 'aldobagus@hotmail.co.id', '$2y$10$3CM2YTjWfkXap5ACRcNemuZ1ypfLK6Sxhn9kRY6PaCYtJr76yoRxa', 1, '28-02-2022 21:46:43', '2022-02-20 03:15:23', '2022-02-28 13:46:43');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `kmj`
--
ALTER TABLE `kmj`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `komisi`
--
ALTER TABLE `komisi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_role`
--
ALTER TABLE `users_role`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
