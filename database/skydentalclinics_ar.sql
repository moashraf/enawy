-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2018 at 09:52 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skydentalclinics_ar`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_10_02_115606_create_services_table', 1),
(2, '2018_10_02_121744_create_services_ars_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services_ars`
--

CREATE TABLE `services_ars` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_services` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp(4) NULL DEFAULT NULL,
  `last_updated_by` int(191) DEFAULT NULL,
  `created_by` int(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services_ars`
--

INSERT INTO `services_ars` (`id`, `status`, `title`, `id_services`, `description`, `slug`, `created_at`, `updated_at`, `deleted_at`, `last_updated_by`, `created_by`) VALUES
(4, NULL, 'هندسة معمارية', 8, 'fdhgg', 'هندسة', '2018-10-03 11:00:44', '2018-10-11 08:52:59', NULL, NULL, NULL),
(5, NULL, 'تصميم داخلي سكني', 9, 'fghfgh', 'th', '2018-10-04 08:23:17', '2018-10-11 10:18:39', NULL, NULL, NULL),
(6, NULL, 'تصميم داخلي تجاري\r\n', 10, 'hfgh', 'fhg', '2018-10-04 08:23:27', '2018-10-04 06:23:27', NULL, NULL, NULL),
(7, NULL, 'إدارة مشاريع', 11, 'gdfg', 'sdfg', '2018-10-04 08:24:37', '2018-10-11 09:48:48', NULL, NULL, NULL),
(8, NULL, 'skydentalclinics', 12, 'skydentalclinics', 'skydentalclinics', '2018-10-11 12:42:06', '2018-10-11 10:42:06', NULL, NULL, NULL),
(9, NULL, 'skydentalclinics', 13, 'skydentalclinics', 'skydentalclinics', '2018-10-11 12:42:10', '2018-10-11 10:42:10', NULL, NULL, NULL),
(10, NULL, 'skydentalclinics', 14, 'skydentalclinics', 'skydentalclinics', '2018-10-11 12:42:14', '2018-10-11 10:42:14', NULL, NULL, NULL),
(11, NULL, 'skydentalclinics', 15, 'skydentalclinics', 'skydentalclinics', '2018-10-11 12:42:17', '2018-10-11 10:42:17', NULL, NULL, NULL),
(12, NULL, 'skydentalclinics', 16, 'skydentalclinics', 'skydentalclinics', '2018-10-11 12:46:20', '2018-10-11 10:46:20', NULL, NULL, NULL),
(13, NULL, 'skydentalclinics', 17, 'skydentalclinics', 'skydentalclinics', '2018-10-11 12:46:24', '2018-10-11 10:46:24', NULL, NULL, NULL),
(14, NULL, 'skydentalclinics', 18, 'skydentalclinics', 'skydentalclinics', '2018-10-11 12:46:28', '2018-10-11 10:46:28', NULL, NULL, NULL),
(15, NULL, 'skydentalclinics', 19, 'skydentalclinics', 'skydentalclinics', '2018-10-11 12:46:31', '2018-10-11 10:46:31', NULL, NULL, NULL),
(16, NULL, 'skydentalclinics', 20, 'skydentalclinics', 'skydentalclinics', '2018-10-11 12:54:02', '2018-10-11 10:54:02', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_ars`
--
ALTER TABLE `services_ars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services_ars`
--
ALTER TABLE `services_ars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
