-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Des 2019 pada 15.07
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jagajogja`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datamasuk`
--

CREATE TABLE `datamasuk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `datamasuk`
--

INSERT INTO `datamasuk` (`id`, `hero`, `email`, `deskripsi`, `lokasi`, `created_at`, `updated_at`) VALUES
(1, 'Raihan', '', 'afd', 'asfdf', '2019-12-08 02:08:57', '2019-12-08 02:08:57'),
(2, 'Raihan', 'ahmadraihan015@gmail.com', 'Keamanan', 'aghsbfnsdfs', '2019-12-08 08:52:57', '2019-12-08 08:52:57'),
(3, 'Raihan', '18523217@students.uii.ac.id', 'Kebersihan', 'lalalalalal yeyeyee', '2019-12-09 01:57:44', '2019-12-09 01:57:44'),
(4, 'Edo', 'edo@gmail.com', 'Keamanan', 'kekke', '2019-12-09 21:54:32', '2019-12-09 21:54:32'),
(5, 'Raihan', 'ahmadraihan015@gmail.com', 'Transportasi', 'lnananan', '2019-12-10 05:26:41', '2019-12-10 05:26:41'),
(6, 'Raihan', 'ahmadraihan015@gmail.com', 'mbuh', 'rftyguhijk', '2019-12-10 07:02:27', '2019-12-10 07:02:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `divisis`
--

CREATE TABLE `divisis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lingkup` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `divisis`
--

INSERT INTO `divisis` (`id`, `lingkup`, `deskripsi`, `created_at`, `updated_at`) VALUES
(3, 'Keamanan', 'mbuhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', '2019-12-09 12:08:58', '2019-12-09 22:43:35'),
(4, 'Kebersihan', 'laaaalalalallaaaaaaaaaaaaaaaaaaaaaaaaaak', '2019-12-09 22:46:56', '2019-12-09 23:00:48'),
(5, 'Transportasi', 'mbuhh lah', '2019-12-10 05:25:21', '2019-12-10 05:25:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kasus` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `umpanbalik` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `feedback`
--

INSERT INTO `feedback` (`id`, `hero`, `kasus`, `umpanbalik`, `rate`, `created_at`, `updated_at`) VALUES
(1, 'Raihan', 'afd', 'ladhsainds', 5, '2019-12-09 09:45:21', '2019-12-09 09:45:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lingkup` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `point` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id`, `hero`, `lingkup`, `deskripsi`, `lokasi`, `gambar`, `point`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Raihan', 'Keamanan', 'afd', 'asfdf', '1575796041.jpg', 75, '', '2019-12-08 02:07:21', '2019-12-08 02:07:21'),
(2, 'Edo', 'Kebersihan', 'csacac', 'ascasc', '1575805490.jpg', 75, '', '2019-12-08 04:44:50', '2019-12-08 04:44:50'),
(3, 'Edo', 'Keamanan', 'fsddv', 'asfas', '1575811577.jpg', 75, '', '2019-12-08 06:26:17', '2019-12-08 06:26:17'),
(4, 'Raihan', 'Keamanan', 'sadbs sadsaibdjsad sad', '9ijndsad sadhsjdn', '1575815996.jpg', 75, '', '2019-12-08 07:39:56', '2019-12-08 07:39:56'),
(5, 'Raihan', 'Keamanan', 'aghsbfnsdfs', 'sdfdvd', '1575818922.jpg', 75, 'ahmadraihan015@gmail.com', '2019-12-08 08:28:42', '2019-12-08 08:28:42'),
(6, 'Raihan', 'Kebersihan', 'lalalalalal yeyeyee', 'ora urusan', '1575881836.jpg', 75, '18523217@students.uii.ac.id', '2019-12-09 01:57:16', '2019-12-09 01:57:16'),
(7, 'Edo', 'Keamanan', 'kekke', 'kikikuku', '1575895014.jpg', 75, 'edo@gmail.com', '2019-12-09 05:36:54', '2019-12-09 05:36:54'),
(8, 'Raihan', 'Kebersihan', 'dsfdfbn', 'szfdbfn', '1575965313.jpg', 75, 'ahmadraihan015@gmail.com', '2019-12-10 01:08:33', '2019-12-10 01:08:33'),
(9, 'Raihan', 'Transportasi', 'lnananan', 'nanananna', '1575980750.jpg', 75, 'ahmadraihan015@gmail.com', '2019-12-10 05:25:50', '2019-12-10 05:25:50'),
(10, 'Raihan', 'mbuh', 'rftyguhijk', 'ftghujm', '1575986302.jpg', 75, 'ahmadraihan015@gmail.com', '2019-12-10 06:58:22', '2019-12-10 06:58:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lingkup`
--

CREATE TABLE `lingkup` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cakupan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2019_11_07_120621_create_laporan_table', 1),
(17, '2019_11_12_130356_create_pekerja_table', 1),
(18, '2019_11_23_094422_create_datamasuk_table', 1),
(19, '2019_12_08_091907_create_ratings_table', 2),
(20, '2019_12_08_092921_create_posts_table', 3),
(21, '2019_12_09_164236_create_feedback_table', 4),
(22, '2019_12_09_174753_create_lingkup_table', 5),
(23, '2019_12_09_182142_create_divisis_table', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerja`
--

CREATE TABLE `pekerja` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `divisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pekerja`
--

INSERT INTO `pekerja` (`id`, `nama`, `divisi`, `created_at`, `updated_at`) VALUES
(1, 'fsgfhhgjasb', 'safsdg', '2019-12-04 17:00:00', '2019-12-24 17:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `name`, `created_at`, `updated_at`) VALUES
(11, 'raihan', NULL, NULL),
(12, 'Edo\r\n', NULL, NULL),
(13, 'Abim', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ratings`
--

CREATE TABLE `ratings` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rating` int(11) NOT NULL,
  `rateable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rateable_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ratings`
--

INSERT INTO `ratings` (`id`, `created_at`, `updated_at`, `rating`, `rateable_type`, `rateable_id`, `user_id`) VALUES
(11, NULL, NULL, 5, '11', 11, 1),
(12, '2019-12-08 04:32:35', '2019-12-08 04:32:35', 5, 'App\\Post', 11, 1),
(13, '2019-12-08 04:36:32', '2019-12-08 04:36:32', 4, 'App\\Post', 12, 4),
(14, '2019-12-08 04:36:48', '2019-12-08 04:36:48', 3, 'App\\Post', 13, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hero', 'Raihan', 'ahmadraihan015@gmail.com', NULL, '$2y$10$kWcqimy8yrh/6uxkCoMHxeh7nVvUKQWrlj0BAbqEJfN/kp7xBdtgS', NULL, '2019-12-08 02:04:41', '2019-12-08 02:04:41'),
(2, 'admin', 'Raihan', 'ahmadraihan013@gmail.com', NULL, '$2y$10$z69M0vxeXmE4Z5y9QKf7NeeflXlE9r7EKorY.oMAi7qDwL98cwVpm', NULL, '2019-12-08 02:07:51', '2019-12-08 02:07:51'),
(4, 'hero', 'Edo', 'edo@gmail.com', NULL, '$2y$10$FuVfs6wmP4.NInGR/X6Gs.hFXi3pMq7s4b4EGJ3v85OEbC8fGlQw6', NULL, '2019-12-08 04:34:33', '2019-12-08 04:34:33'),
(5, 'pekerja', 'AdiWahyu', 'adiwahyuu@gmail.com', NULL, '$2y$10$K8VV9y6RSRyQ4cErqlMXluXxljEK1vM3pvdHx7/KyIfVD4uEyrnz2', NULL, '2019-12-08 07:04:59', '2019-12-08 07:04:59');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datamasuk`
--
ALTER TABLE `datamasuk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `divisis`
--
ALTER TABLE `divisis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lingkup`
--
ALTER TABLE `lingkup`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pekerja`
--
ALTER TABLE `pekerja`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_rateable_type_rateable_id_index` (`rateable_type`,`rateable_id`),
  ADD KEY `ratings_rateable_id_index` (`rateable_id`),
  ADD KEY `ratings_rateable_type_index` (`rateable_type`),
  ADD KEY `ratings_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datamasuk`
--
ALTER TABLE `datamasuk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `divisis`
--
ALTER TABLE `divisis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `lingkup`
--
ALTER TABLE `lingkup`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `pekerja`
--
ALTER TABLE `pekerja`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
