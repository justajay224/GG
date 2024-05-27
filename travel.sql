-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2024 at 03:33 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinasi`
--

CREATE TABLE `destinasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rute` varchar(255) NOT NULL,
  `biaya` double NOT NULL,
  `jarak` varchar(255) NOT NULL,
  `estimasi_waktu` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destinasi`
--

INSERT INTO `destinasi` (`id`, `rute`, `biaya`, `jarak`, `estimasi_waktu`, `created_at`, `updated_at`) VALUES
(1, 'Yogyakarta - Semarang', 165000, '134 KM', '3 Jam', '2024-05-26 01:23:49', '2024-05-26 06:39:46'),
(3, 'Semarang - Yogyakarta', 165000, '134 KM', '3 Jam', '2024-05-26 01:33:55', '2024-05-26 06:39:53'),
(4, 'Semarang - Ngawi', 190000, '176 KM', '2 Jam', '2024-05-26 06:35:56', '2024-05-26 06:40:06'),
(5, 'Ngawi - Semarang', 190000, '176 KM', '2 Jam', '2024-05-26 06:36:33', '2024-05-26 06:40:56'),
(6, 'Yogyakarta - Ngawi', 175000, '150 KM', '3 Jam', '2024-05-26 06:38:37', '2024-05-26 06:41:18'),
(7, 'Ngawi - Yogyakarta', 175000, '150 KM', '3 Jam', '2024-05-26 06:41:58', '2024-05-26 06:41:58'),
(8, 'Yogyakarta - Solo', 135000, '66 KM', '2 Jam', '2024-05-26 06:43:26', '2024-05-26 06:43:26'),
(9, 'Solo - Yogyakarta', 135000, '66 KM', '2 Jam', '2024-05-26 06:43:49', '2024-05-26 06:43:49'),
(10, 'Yogyakarta - Surabaya', 280000, '325 KM', '4 Jam', '2024-05-26 06:45:51', '2024-05-26 06:45:51'),
(11, 'Surabaya - Yogyakarta', 290000, '325 KM', '4 Jam', '2024-05-26 06:46:13', '2024-05-26 06:46:13'),
(12, 'Yogyakarta - Kabumen', 145000, '99 KM', '2 Jam 30 Menit', '2024-05-26 06:49:20', '2024-05-26 06:49:20'),
(13, 'Kabumen - Yogyakarta', 145000, '99 KM', '2 Jam 30 Menit', '2024-05-26 06:49:42', '2024-05-26 06:49:42');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kendaraans`
--

CREATE TABLE `kendaraans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `supir` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` enum('tersedia','sedang beroperasi','rusak') NOT NULL DEFAULT 'tersedia',
  `biaya` double(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kendaraans`
--

INSERT INTO `kendaraans` (`id`, `nama`, `supir`, `foto`, `created_at`, `updated_at`, `status`, `biaya`) VALUES
(15, 'Luxio - Daihatsu', 'Upan', 'public/fotos/Q9AzWOvhy2ZHZkx9k1DirEy5SFymygqN55ZlreZo.png', '2024-05-26 03:49:34', '2024-05-26 07:34:59', 'tersedia', 30000.00),
(16, 'ELF - Isuzu', 'Bayu', 'public/fotos/5TAFeoXu5jx4yexawPNi8WGbaw2UukzIMwW89cSX.png', '2024-05-26 03:50:22', '2024-05-26 07:21:50', 'sedang beroperasi', 0.00),
(17, 'APV - Suzuki', 'Mike', 'public/fotos/Pg6hgw0OYhpnr1gu8rj2j5Epsi2r6Op71v6mpNpq.png', '2024-05-26 03:50:57', '2024-05-26 07:22:22', 'tersedia', 0.00),
(18, 'Alphard - Toyota', 'Setyawan', 'public/fotos/IYYtNnxbBaonPgOWbnXGb8r0O5hHTnBSUMqpuv2a.png', '2024-05-26 03:54:40', '2024-05-26 07:22:52', 'tersedia', 0.00),
(19, 'Avanza - Toyota', 'Iwan', 'public/fotos/v0krKUSoGplCI5oayK5B15HnNTvwTr0aw2SI7SMM.png', '2024-05-26 03:55:21', '2024-05-26 07:22:08', 'tersedia', 0.00),
(20, 'HiAce - Toyota', 'Jadu', 'public/fotos/KZjVwl3zMwUAJdbDaMvB0WyasA7rM6Q4iLAVGWPG.png', '2024-05-26 03:55:56', '2024-05-26 07:23:13', 'tersedia', 0.00),
(21, 'Innova - Toyota', 'Bayu', 'public/fotos/sjSKPiaMrBPkGDb98lBvFVf13ljL8vUQbmV7MYoY.png', '2024-05-26 03:57:06', '2024-05-26 07:23:48', 'rusak', 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_05_25_144154_create_kendaraans_table', 2),
(6, '2024_05_25_151024_add_status_to_kendaraans_table', 3),
(7, '2024_05_26_053851_create_destinasi_table', 4),
(8, '2024_05_26_074338_add_biaya_to_destinasi_table', 5),
(9, '2024_05_26_075802_create_destinasis_table', 6),
(10, '2024_05_26_081555_create_destinasi_table', 7),
(14, '2024_05_26_141500_create_transaksis_table', 8),
(16, '2024_05_26_141748_add_biaya_to_kendaraans_table', 9),
(17, '2024_05_26_143709_create_transaksi_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `kendaraan_id` bigint(20) UNSIGNED NOT NULL,
  `destinasi_id` bigint(20) UNSIGNED NOT NULL,
  `nomor_telepon` varchar(255) NOT NULL,
  `tanggal_keberangkatan` date NOT NULL,
  `jumlah_penumpang` int(11) NOT NULL,
  `total_pembayaran` double NOT NULL,
  `metode_pembayaran` enum('QRIS','DANA','GOPAY','Transfer Bank') NOT NULL,
  `status` enum('pending','dibayar','selesai') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `user_id`, `kendaraan_id`, `destinasi_id`, `nomor_telepon`, `tanggal_keberangkatan`, `jumlah_penumpang`, `total_pembayaran`, `metode_pembayaran`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 17, 8, '08123213123', '2024-07-15', 2, 270000, 'QRIS', 'selesai', '2024-05-26 08:45:43', '2024-05-26 09:07:05'),
(2, 2, 17, 9, '08123213123', '2024-07-15', 3, 405000, 'QRIS', 'selesai', '2024-05-26 09:12:29', '2024-05-26 09:26:43'),
(3, 1, 15, 1, '08123213123', '2024-08-07', 2, 360000, 'QRIS', 'selesai', '2024-05-26 09:38:26', '2024-05-26 10:01:40'),
(4, 4, 15, 8, '08123213123', '2024-09-07', 2, 300000, 'QRIS', 'selesai', '2024-05-26 10:05:41', '2024-05-26 10:06:18'),
(5, 4, 15, 11, '08123213123', '2024-12-25', 2, 610000, 'QRIS', 'selesai', '2024-05-26 10:08:59', '2024-05-26 10:09:15'),
(6, 4, 15, 7, '08123213123', '2024-08-05', 2, 380000, 'Transfer Bank', 'selesai', '2024-05-26 10:11:43', '2024-05-26 10:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ajay', 'ajay@gmail.com', NULL, 'user', '$2y$12$mCF5Y.IaCE4LQZgcsZAkG.NeSCWGCFMoJ4GLIpie/OPxPIgkfob/q', NULL, '2024-05-25 06:32:26', '2024-05-25 06:32:26'),
(2, 'admin', 'admin@gmail.com', NULL, 'admin', '$2y$10$Vrb/7.rf2O/G0kUEPk6w.uYVnHggXq6Q.2Pn1jd/NbAIEk/M1uwQe', NULL, NULL, NULL),
(4, 'Agung', 'agung@gmail.com', NULL, 'user', '$2y$12$FnYkwWMGsG7oYqim3CXdcu46TDVvmYob234vsHtR7MZ9cMh8LbUEG', NULL, '2024-05-26 10:05:06', '2024-05-26 10:05:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinasi`
--
ALTER TABLE `destinasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kendaraans`
--
ALTER TABLE `kendaraans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksi_user_id_foreign` (`user_id`),
  ADD KEY `transaksi_kendaraan_id_foreign` (`kendaraan_id`),
  ADD KEY `transaksi_destinasi_id_foreign` (`destinasi_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destinasi`
--
ALTER TABLE `destinasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kendaraans`
--
ALTER TABLE `kendaraans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_destinasi_id_foreign` FOREIGN KEY (`destinasi_id`) REFERENCES `destinasi` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transaksi_kendaraan_id_foreign` FOREIGN KEY (`kendaraan_id`) REFERENCES `kendaraans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transaksi_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
