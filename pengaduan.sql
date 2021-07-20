-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2021 at 01:36 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengaduan`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `masyarakat`
--

CREATE TABLE `masyarakat` (
  `nik` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tlp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_22_025940_create_masyarakat_table', 1),
(5, '2021_03_22_033255_create_pengaduan_table', 1),
(6, '2021_03_22_033741_create_petugas_table', 1),
(7, '2021_03_22_033934_create_tanggapan_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `isi_laporan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Belum Diproses',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `isi_laporan`, `username`, `status`, `created_at`, `updated_at`) VALUES
(1, '2021-03-22', 'ada pernikahan', '', '', '2021-03-23 06:16:20', '2021-03-23 06:16:20'),
(2, '2021-03-24', 'apakah biisa?', '', '', '2021-03-24 05:49:42', '2021-03-24 05:49:42'),
(3, '2021-03-25', 'sip', '', '', '2021-03-24 22:09:52', '2021-03-24 22:09:52'),
(4, '2021-03-26', 'siap?', '', '', '2021-03-25 00:47:08', '2021-03-25 00:47:08'),
(5, '2021-03-26', 'apakah biisa?', 'jazak', 'Proses', '2021-03-25 20:14:35', '2021-03-25 20:56:05'),
(6, '2021-03-26', 'wes', 'user', 'Selesai Proses', '2021-03-26 00:26:09', '2021-03-26 00:28:19');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tlp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `tlp`, `created_at`, `updated_at`) VALUES
(1, 'nukman', 'jaza', 'nukman', '0341', '2021-03-23 19:26:34', '2021-03-23 19:29:34');

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `tanggal_tanggapan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggapan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_pengaduan`, `tanggal_tanggapan`, `tanggapan`, `username`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-03-26', 'siap', '', '2021-03-24 22:04:46', '2021-03-24 22:04:46'),
(2, 3, '2021-03-25', 'ok', '', '2021-03-24 22:10:12', '2021-03-24 22:10:12'),
(3, 4, '2021-03-26', 'siap', '', '2021-03-25 00:48:27', '2021-03-25 00:48:27'),
(4, 5, '2021-03-27', 'siap ndan', 'admin', '2021-03-25 20:20:50', '2021-03-25 20:20:50'),
(5, 5, '2021-03-27', 'okok', 'admin', '2021-03-25 20:24:50', '2021-03-25 20:24:50'),
(6, 6, '2021-03-26', 'okok', 'admin', '2021-03-26 00:27:17', '2021-03-26 00:27:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tlp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `username`, `tlp`, `nik`, `name`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'user', 'user', '', '1', 'user', NULL, '$2y$10$NkWYDGZjpMhqLdd2uBWvauVcU8/GikNxg/PXjFYnzbDYQ0ZQzkcRe', 'KZMkei7bq8ihRUKMLyGjd4rjz2p0mMozHrbP3oKDfvP4XMjqcHc02Wns54T9', '2021-03-23 04:27:55', '2021-03-23 04:27:55'),
(3, 'user', 'sdsda', '1223', '16646464', 'sdfsdf', NULL, 'sadasda', NULL, '2021-03-24 04:14:28', '2021-03-24 04:14:28'),
(5, 'user', 'jazak', '123', '123', 'jazak', NULL, '$2y$10$zToSjkVANs60iTFQsS4ELuCDBgrNuDRPVQrK7iI56v3JdUNUflV1K', NULL, '2021-03-24 04:35:01', '2021-03-24 04:35:01'),
(7, 'user', 'nukman jaza', '21', '92723823823', 'nukman jaza', NULL, '$2y$10$wqgkHVk9j9y30bEMBuvNpOLj35WIQB3/szNqGq/VrCTuZcyClMb/u', NULL, '2021-03-24 05:11:22', '2021-03-24 05:11:22'),
(9, 'admin', 'admin', '098', '098', 'admin', NULL, '$2y$10$EtaOMFB.cLy2SI6PGybT1e6fH4Z.eVwOI36IcVbEfbplFK2FrrvhG', '6UHhR6xygDF8QTbQmxQvkBhxt8Xuen973P47tuHsQhBatafDMinWbqompPLq', '2021-03-24 18:38:56', '2021-03-24 18:38:56'),
(11, 'user', 'pol', '01311383', '9827087', 'pol', NULL, 'pol', NULL, '2021-03-24 19:01:31', '2021-03-24 19:01:31'),
(12, 'user', 'gar', '00989781', '09823872307823078', 'gar', NULL, '$2y$10$ljzv1YnMyoU9HHxrEB5IBOEFHZmXYhsrXVN4SQ0vz9PGsPXXE2FTW', NULL, '2021-03-24 22:09:33', '2021-03-24 22:09:33'),
(13, 'user', 'okk', '98879', '8927389276786', 'okk', NULL, 'ok', NULL, '2021-03-24 22:10:35', '2021-03-24 22:10:49'),
(14, 'user', 'achmad nukman', '1234567890', '1234567890', 'acmad nukman', NULL, '$2y$10$SQawBpAEf0CNk7P.lR8yOuDS1iTNMYRVGdOfzvsKy48iIFHVt20lu', NULL, '2021-03-25 00:37:19', '2021-03-25 00:37:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indexes for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
