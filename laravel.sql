-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2022 m. Bir 14 d. 18:50
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `failed_jobs`
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
-- Sukurta duomenų struktūra lentelei `istaigos`
--

CREATE TABLE `istaigos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pavadinimas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kodas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nuotrauka` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `istaigos`
--

INSERT INTO `istaigos` (`id`, `pavadinimas`, `kodas`, `adresas`, `nuotrauka`, `created_at`, `updated_at`) VALUES
(1, 'Gustuko picerija', '302570518', 'Gardino g. 2', '1654952940.jpg', '2022-06-11 10:09:00', '2022-06-11 10:09:00'),
(2, 'Charlie Pizza', '301675046', 'V. Krėvės pr. 97', '1654952977.jpg', '2022-06-11 10:09:37', '2022-06-11 10:09:37'),
(3, 'McDonald\'s', '111537013', 'Tilto g. 1', '1654953016.jpg', '2022-06-11 10:10:16', '2022-06-14 10:48:30');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `meniu`
--

CREATE TABLE `meniu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pavadinimas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maitinimo_istaigos_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `meniu`
--

INSERT INTO `meniu` (`id`, `pavadinimas`, `maitinimo_istaigos_id`, `created_at`, `updated_at`) VALUES
(1, 'Burgeriai', 3, '2022-06-11 10:11:32', '2022-06-11 10:11:32'),
(2, 'Kebabai', 2, '2022-06-11 10:11:51', '2022-06-11 10:11:51'),
(3, 'Picos', 1, '2022-06-11 10:12:03', '2022-06-11 10:12:03'),
(4, 'Kokteiliai', 1, '2022-06-11 10:13:25', '2022-06-11 10:13:25'),
(5, 'Arbatos', 1, '2022-06-11 12:35:51', '2022-06-11 12:35:51'),
(6, 'Pyrageliai', 3, '2022-06-11 12:36:29', '2022-06-11 12:36:29');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(20, '2014_10_12_000000_create_users_table', 1),
(21, '2014_10_12_100000_create_password_resets_table', 1),
(22, '2019_08_19_000000_create_failed_jobs_table', 1),
(23, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(30, '2022_06_08_131010_create_istaigos_table', 2),
(31, '2022_06_09_120114_create_meniu_table', 2),
(32, '2022_06_09_172037_create_patiekalai_table', 2),
(34, '2022_06_12_112427_create_uzsakymai_table', 3);

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `patiekalai`
--

CREATE TABLE `patiekalai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patiekalo_pavadinimas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patiekalo_kaina` double(8,2) NOT NULL,
  `patiekalo_aprasymas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meniu_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `patiekalai`
--

INSERT INTO `patiekalai` (`id`, `patiekalo_pavadinimas`, `patiekalo_kaina`, `patiekalo_aprasymas`, `meniu_id`, `created_at`, `updated_at`) VALUES
(1, 'Pica su suriu', 4.99, 'Pica su suriu ir šonine', 3, '2022-06-12 06:21:02', '2022-06-12 06:21:02'),
(2, 'Pica su grybais', 2.99, 'Pica su grybais ir svogunais', 3, '2022-06-12 06:21:35', '2022-06-12 06:21:35'),
(3, 'Burgeris su suriu', 5.99, 'Burgeris su suriu, pomidorais, agurkais ir padažu', 1, '2022-06-12 06:22:19', '2022-06-12 06:22:19'),
(4, 'Kebabas didelis', 7.99, 'Didelis kebabas', 2, '2022-06-12 06:22:55', '2022-06-12 06:22:55'),
(5, 'Kebabas mažas', 4.99, 'Mažas kebabas', 2, '2022-06-12 06:23:18', '2022-06-12 06:23:18'),
(6, 'Pyragelis su bananais', 2.99, 'Pyragelis su bananais', 6, '2022-06-12 06:46:53', '2022-06-12 06:46:53'),
(7, 'Pyragelis su šokoladu', 1.99, 'Pyragelis su šokoladu', 6, '2022-06-12 06:47:15', '2022-06-12 06:47:15'),
(8, 'Juodoji arbata', 0.99, 'Juodoji arbata su bergamotemis', 5, '2022-06-12 06:47:47', '2022-06-12 06:47:47'),
(9, 'Vaisine arbata', 0.99, 'Vaisine arbata', 5, '2022-06-12 06:48:05', '2022-06-12 06:48:05'),
(10, 'Braškių kokteilis', 1.99, 'Kokteilis su braškemis', 4, '2022-06-12 06:48:30', '2022-06-12 06:48:30'),
(11, 'Burgeris su zuvimi', 3.99, 'Burgeris su zuvimi ir cesnakiniu padazu', 1, '2022-06-14 10:46:10', '2022-06-14 10:46:10');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `personal_access_tokens`
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
-- Sukurta duomenų struktūra lentelei `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'vartotojas'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'jonas', 'jonas@gmail.com', NULL, '$2y$10$Yw.cgXX6Tzlk.C0SM4JVE.wGpjozifUtPgopruiBUKfCLgJ69..2S', NULL, '2022-06-11 10:07:32', '2022-06-11 10:07:32', 'administratorius'),
(4, 'petras', 'petras@gmail.com', NULL, '$2y$10$bM3f51L4zhVLQiatNHRvWekplZIBUWwn7LftLQkHYmSSbTdBFmIbm', NULL, '2022-06-11 11:50:26', '2022-06-11 11:50:26', 'vartotojas'),
(26, 'Jolanta', 'jolanta@gmail.com', NULL, '$2y$10$pvcprqjAwR3tqhflmMVY6e74Srf47ssUFeMMeAUtdESYWNtX6CBc.', NULL, '2022-06-13 07:21:02', '2022-06-13 07:21:02', 'vartotojas');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `uzsakymai`
--

CREATE TABLE `uzsakymai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patiekalo_id` bigint(20) UNSIGNED NOT NULL,
  `kiekis` int(11) NOT NULL,
  `vartotojo_id` bigint(20) UNSIGNED NOT NULL,
  `busena` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'vykdoma',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `uzsakymai`
--

INSERT INTO `uzsakymai` (`id`, `patiekalo_id`, `kiekis`, `vartotojo_id`, `busena`, `created_at`, `updated_at`) VALUES
(1, 6, 8, 4, 'priimta', '2022-06-13 06:26:34', '2022-06-14 11:56:27'),
(2, 7, 4, 4, 'atšaukta', '2022-06-13 06:27:43', '2022-06-14 10:39:50'),
(3, 1, 2, 4, 'atšaukta', '2022-06-13 06:29:59', '2022-06-14 10:18:09'),
(4, 8, 2, 26, 'priimta', '2022-06-13 07:22:17', '2022-06-14 10:18:41'),
(5, 4, 1, 4, 'priimta', '2022-06-13 07:50:30', '2022-06-14 10:17:47'),
(6, 10, 1, 4, 'atšaukta', '2022-06-13 12:23:55', '2022-06-14 10:39:54'),
(7, 5, 2, 26, 'vykdoma', '2022-06-14 10:50:32', '2022-06-14 10:50:32');

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
-- Indexes for table `istaigos`
--
ALTER TABLE `istaigos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meniu`
--
ALTER TABLE `meniu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `meniu_maitinimo_istaigos_id_foreign` (`maitinimo_istaigos_id`);

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
-- Indexes for table `patiekalai`
--
ALTER TABLE `patiekalai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patiekalai_meniu_id_foreign` (`meniu_id`);

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
-- Indexes for table `uzsakymai`
--
ALTER TABLE `uzsakymai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uzsakymai_patiekalo_id_foreign` (`patiekalo_id`),
  ADD KEY `uzsakymai_vartotojo_id_foreign` (`vartotojo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `istaigos`
--
ALTER TABLE `istaigos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `meniu`
--
ALTER TABLE `meniu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `patiekalai`
--
ALTER TABLE `patiekalai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `uzsakymai`
--
ALTER TABLE `uzsakymai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Apribojimai eksportuotom lentelėm
--

--
-- Apribojimai lentelei `meniu`
--
ALTER TABLE `meniu`
  ADD CONSTRAINT `meniu_maitinimo_istaigos_id_foreign` FOREIGN KEY (`maitinimo_istaigos_id`) REFERENCES `istaigos` (`id`) ON DELETE CASCADE;

--
-- Apribojimai lentelei `patiekalai`
--
ALTER TABLE `patiekalai`
  ADD CONSTRAINT `patiekalai_meniu_id_foreign` FOREIGN KEY (`meniu_id`) REFERENCES `meniu` (`id`) ON DELETE CASCADE;

--
-- Apribojimai lentelei `uzsakymai`
--
ALTER TABLE `uzsakymai`
  ADD CONSTRAINT `uzsakymai_patiekalo_id_foreign` FOREIGN KEY (`patiekalo_id`) REFERENCES `patiekalai` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `uzsakymai_vartotojo_id_foreign` FOREIGN KEY (`vartotojo_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
