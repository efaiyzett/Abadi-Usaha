-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Des 2024 pada 13.59
-- Versi server: 10.4.32-MariaDB-log
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desainweb_abadiusaha`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('45eed62fb44fcdb30d8a9fd2402e2bd1', 'i:1;', 1734929448),
('45eed62fb44fcdb30d8a9fd2402e2bd1:timer', 'i:1734929448;', 1734929448),
('476de1fee9040bcfd8845036e594959d', 'i:1;', 1734934429),
('476de1fee9040bcfd8845036e594959d:timer', 'i:1734934429;', 1734934429),
('9758b2e123fc457198e93893aaedb1e4', 'i:1;', 1734934443),
('9758b2e123fc457198e93893aaedb1e4:timer', 'i:1734934443;', 1734934443),
('bbaed3e7ab773c28dbc0ce933111bb38', 'i:1;', 1734933139),
('bbaed3e7ab773c28dbc0ce933111bb38:timer', 'i:1734933139;', 1734933139),
('cb199ec3e1ab0e1e0cff9420d8e4e373', 'i:1;', 1734180272),
('cb199ec3e1ab0e1e0cff9420d8e4e373:timer', 'i:1734180272;', 1734180272),
('ef7c07ceebb17369c4e32c46bf7df777', 'i:1;', 1734926786),
('ef7c07ceebb17369c4e32c46bf7df777:timer', 'i:1734926786;', 1734926786),
('febriyati@gmail.com|127.0.0.1', 'i:1;', 1734934429),
('febriyati@gmail.com|127.0.0.1:timer', 'i:1734934429;', 1734934429),
('ramdhanqolbi@gmail.com|127.0.0.1', 'i:1;', 1734180273),
('ramdhanqolbi@gmail.com|127.0.0.1:timer', 'i:1734180273;', 1734180273);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `jenis_layanan`
--

CREATE TABLE `jenis_layanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jenis_layanan`
--

INSERT INTO `jenis_layanan` (`id`, `jenis`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'Sedot WC', 650000, NULL, NULL),
(2, 'Pelancaran\r\n', 350000, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_11_25_090518_add_two_factor_columns_to_users_table', 2),
(5, '2024_12_01_035714_buat_tabel_produk', 3),
(6, '2024_12_01_045811_buat_tabel_produk_2', 4),
(7, '2024_12_01_172829_buat_tabel_layanan', 5),
(8, '2024_12_22_022338_create_notifications_table', 6),
(9, '2024_12_22_023857_create_notifications_table', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `nama`, `alamat`, `no_hp`, `jenis`, `harga`, `created_at`, `updated_at`) VALUES
(2, 'ramdhan', 'nganjuk', '01203182', '2', 350000, '2024-11-30 21:59:25', '2024-12-22 22:20:22'),
(9, 'gelas', 'nganjuk', '123123123', '1', 650000, '2024-12-02 18:47:22', '2024-12-22 22:20:27'),
(10, 'tuperware', 'asdasd', '56567567', '1', 650000, '2024-11-01 18:47:43', '2024-12-22 22:20:30'),
(11, 'zxczxc', 'zxczxc', '12312343', '1', 450000, '2024-11-01 18:59:53', '2024-12-16 00:00:21'),
(12, 'asd', '213', '123', '1', 450000, '2024-12-14 06:20:10', '2024-12-14 06:20:10'),
(13, 'qwe', 'zxczxc', '123234', '2', 330000, '2024-12-14 06:20:24', '2024-12-14 06:20:24'),
(14, 'qweqwe', 'werwer', '44343', '1', 450000, '2024-12-14 06:20:37', '2024-12-14 06:20:37'),
(15, 'qweqweqwe', 'qweqwe', '1231231', '1', 450000, '2024-11-14 06:23:31', '2024-11-14 06:23:31'),
(16, 'asd', 'asd', '123', '1', 450000, '2024-12-21 19:29:59', '2024-12-21 19:29:59'),
(17, 'zzz', 'zzz', '222', '1', 450000, '2024-12-21 19:57:26', '2024-12-21 19:57:26'),
(18, 'dfg', 'dfg', '345', '2', 330000, '2024-12-21 21:19:19', '2024-12-21 21:19:19'),
(19, 'zxczxc', 'zxczxc', '123123123', '2', 330000, '2024-12-21 21:28:07', '2024-12-21 21:28:07'),
(20, 'dfgdfg', 'dfgdfgdfg', '645', '1', 450000, '2024-12-21 21:28:22', '2024-12-21 21:28:22'),
(21, 'liyon', 'nganjuk', '0986453145', '1', 450000, '2024-12-22 20:54:25', '2024-12-22 20:54:25'),
(22, 'Sugeng', 'Nganjuk', '0813987520198', '2', 350000, '2024-12-22 22:07:25', '2024-12-22 22:07:25'),
(23, 'udin', 'jl raya mojo', '1234567', '1', 650000, '2024-12-22 22:41:59', '2024-12-22 22:41:59'),
(24, 'udin2', 'jl', '085607573187', '1', 650000, '2024-12-22 22:43:13', '2024-12-22 22:43:13');

--
-- Trigger `pesanan`
--
DELIMITER $$
CREATE TRIGGER `tambah_produk` AFTER INSERT ON `pesanan` FOR EACH ROW BEGIN
	INSERT INTO pesanan_log (order_id,nama,keterangan,jenis) VALUES (new.id, new.nama, 'PESAN',new.jenis);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan_log`
--

CREATE TABLE `pesanan_log` (
  `id` int(11) NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1oECRlLuYt19GOCHLRteV0fS7DUFMRZR0fOYUECt', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiOE9oMGlIWlVYdHZQZ3ZhWWQwcnFLREI2QUFIRUpNRnFIMU1aOGV0ZSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sYXlhbmFuIjt9czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozNjoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3RhbWJhaC1wZXNhbmFuIjt9fQ==', 1734937631),
('GTbtGN1b7xj0JSdgaYbK27HfQ9SZj0LvhayMPBz3', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Edg/131.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOENtNEpaSFQ0S0xBU0Q5NkRwcXV6bUxUTVJSNmJYdldNMGx4eDI1MSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1734933339),
('vQaGyyrCHDblug8tnd5xHM1eoUIdmsQ9a2VYdOWa', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR0lOQmdWelJyYmdoT05hU044bzlxWm9lYng2YTlmVG5KNTA5aG1CTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1734958775);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'pengunjung',
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `usertype`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Ramdhan Maulana Qolbi', 'admin', 'ramdhan@gmail.com', NULL, '$2y$12$ovgreXUS.PIF0c8cMs6iuuPZnWywQyy44mCyyejEKW4VnQ9dVdpKe', NULL, NULL, NULL, NULL, '2024-11-30 20:51:24', '2024-11-30 20:51:24'),
(3, 'Maulana Pengunjung', 'pengunjung', 'maulana@gmail.com', NULL, '$2y$12$QTG9hvy.3fQdfobV0nE3d.iE95CYwyJKYmvl8SATmPJSnKR6DaCsK', NULL, NULL, NULL, NULL, '2024-12-01 17:22:33', '2024-12-01 17:22:33'),
(4, 'Abellya febriyanti', 'pengunjung', 'febriyanti@gmail.com', NULL, '$2y$12$IVuK78IvDAwQ9uRoXpul4.mMhQYFMMLQspnMVjxc0cU1AAZEheT5C', NULL, NULL, NULL, NULL, '2024-12-22 19:44:26', '2024-12-22 19:44:26'),
(5, 'abel', 'admin', 'abel@gmail.com', NULL, '$2y$12$.IElaOqfQF0cgQJ42b5GSe6AYSsJd.ulJvbXhRPlAZvHywIPwsCpC', NULL, NULL, NULL, NULL, '2024-12-22 19:45:50', '2024-12-22 19:45:50');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jenis_layanan`
--
ALTER TABLE `jenis_layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan_log`
--
ALTER TABLE `pesanan_log`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jenis_layanan`
--
ALTER TABLE `jenis_layanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `pesanan_log`
--
ALTER TABLE `pesanan_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
