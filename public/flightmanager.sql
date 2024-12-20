-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2024 at 04:40 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flightmanager`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Chemseddine.Bouzidy@gmail.com', '$2y$10$LuWFCbFoCYQmMFYBIe/KSOl9QblIMJqXZ7gaMEDlSmNIMX6YEFCXW', NULL, NULL);

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
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from_city` varchar(255) NOT NULL,
  `to_city` varchar(255) NOT NULL,
  `airline` varchar(255) NOT NULL,
  `imageAirline` varchar(255) NOT NULL,
  `departing_time` time NOT NULL,
  `arriving_time` time NOT NULL,
  `duration` varchar(255) NOT NULL,
  `has_wifi` tinyint(1) NOT NULL,
  `is_direct` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `imageCity` varchar(255) NOT NULL,
  `pilot_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`id`, `from_city`, `to_city`, `airline`, `imageAirline`, `departing_time`, `arriving_time`, `duration`, `has_wifi`, `is_direct`, `created_at`, `updated_at`, `imageCity`, `pilot_id`, `deleted_at`, `price`) VALUES
(1, 'Casablanca', 'United Kingdom', 'Royal Air Maroc', 'flights/iIfICRlsuixeuCmCg35SG7eOmrGkBaN3x3dmANcE.png', '00:00:00', '05:30:00', '5', 1, 0, '2024-12-18 23:08:05', '2024-12-18 23:08:05', 'flights/xUfZWi4HMV7Zx4vQTiZaP1gkBwac18QVRwojlEwX.jpg', 1, NULL, '750'),
(2, 'Casablanca', 'Chicago', 'Royal Air Maroc', 'flights/oDWbs6EAu0mzLti29Gcbz92MxSSGOCoFxj7FvaVw.png', '22:30:00', '13:30:00', '9', 1, 1, '2024-12-18 23:09:26', '2024-12-18 23:09:26', 'flights/Bs9cnRyBDa3I5nrxJnLJSjGtdzkXh8rulsBD4XVz.jpg', 1, NULL, '750'),
(3, 'Casablanca', 'switzerland', 'Royal Air Maroc', 'flights/vUj1kcdomLQLflmD1aLKukLT6IgCYKGSjODDizme.png', '10:00:00', '22:30:00', '12', 0, 0, '2024-12-18 23:10:22', '2024-12-18 23:10:22', 'flights/Q4mdWc5BufE9SHYpH3w8uMv3kEjkvvik4Z9s9MhP.webp', 2, NULL, '550'),
(4, 'Rabat', 'France', 'Royal Air Maroc', 'flights/GBTdw72DjeoGd4a3PKpXvbrvcj1wMZm85PYbbq3w.png', '13:02:00', '01:02:00', '12', 0, 0, '2024-12-19 00:16:14', '2024-12-19 00:16:14', 'flights/MdrNhUysWUQypkKNyxOf23wX1E7keJKyWrfoCYyf.jpg', 3, NULL, '150'),
(5, 'Rabat', 'sevilla', 'Royal Air Maroc', 'flights/yUr8RHwoNAPI9Ctr2pZnl0kZYIDTMGSXFOOCSfQS.png', '01:30:00', '03:00:00', '2', 1, 0, '2024-12-19 00:21:46', '2024-12-19 00:21:46', 'flights/xuuG9bu4otXsrtgOhwINoTl9HV8egd3Vwt8fRqES.jpg', 3, NULL, '50'),
(6, 'Rabat', 'sevilla', 'Royal Air Maroc', 'flights/PFq6sd0QxplKr0Ay0GjqauPSoWTzoIHQsHePpWab.png', '01:30:00', '03:00:00', '2', 1, 0, '2024-12-19 00:22:26', '2024-12-19 00:22:26', 'flights/D5JZ3GuHKS0gx1llnRHSDsIGJhV2YSf4W0HpSM9K.jpg', 3, NULL, '70'),
(7, 'Rabat', 'Holanda', 'Royal Air Maroc', 'flights/uVFlwIFFWwte811uQAWV3Hg9ZsJd7kMLa8QXTuGS.png', '11:30:00', '17:00:00', '6', 1, 1, '2024-12-19 11:16:40', '2024-12-19 11:16:40', 'flights/UaNqj3bNvtLE1sm0v16BQDlWxsk9jzVfyQDbAVqX.jpg', 2, NULL, '210');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_12_17_123401_create_flights_table', 1),
(6, '2024_12_17_130746_add_image_city_to_flights_table', 1),
(7, '2024_12_18_234529_create_pilots_table', 1),
(8, '2024_12_18_235139_add_pilot_id_to_flights_table', 1),
(9, '2024_12_19_014903_create_admin_table', 2),
(10, '2024_12_19_120706_add_price_to_flights_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
-- Table structure for table `pilots`
--

CREATE TABLE `pilots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `license_number` varchar(255) NOT NULL,
  `license_expiry` datetime NOT NULL,
  `experience_years` varchar(255) NOT NULL,
  `availability` tinyint(1) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pilots`
--

INSERT INTO `pilots` (`id`, `name`, `license_number`, `license_expiry`, `experience_years`, `availability`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'P123456789', '2025-07-15 00:52:14', '15', 0, NULL, '2024-12-18 23:52:14', '2024-12-18 23:52:14'),
(2, 'Chemseddine Bouzidy', 'P123456789', '2026-01-19 00:00:00', '12', 0, NULL, '2024-12-18 23:26:34', '2024-12-19 11:16:40'),
(3, 'Ziad Bouzidy', 'P1204556712', '2026-12-19 00:00:00', '21', 0, NULL, '2024-12-19 00:06:32', '2024-12-19 00:22:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'chemcaaa@chemsaaa', 'chemcaaa@chemsaaa', '2024-12-19 01:45:19', 'chemcaaa@chemsaaa', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`id`),
  ADD KEY `flights_pilot_id_foreign` (`pilot_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pilots`
--
ALTER TABLE `pilots`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pilots`
--
ALTER TABLE `pilots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `flights`
--
ALTER TABLE `flights`
  ADD CONSTRAINT `flights_pilot_id_foreign` FOREIGN KEY (`pilot_id`) REFERENCES `pilots` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
