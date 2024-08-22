-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2024 at 03:07 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sixwebsoft`
--

-- --------------------------------------------------------

--
-- Table structure for table `ccnl`
--

CREATE TABLE `ccnl` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ccnl`
--

INSERT INTO `ccnl` (`id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'KAla', '0', '2024-08-19 04:24:28', '2024-08-20 23:01:12'),
(2, 'Kalalalaaaaa', '0', '2024-08-19 04:24:50', '2024-08-19 04:31:43'),
(3, 'Karur', '1', '2024-08-19 04:37:27', '2024-08-21 04:33:16'),
(4, 'dfg', '0', '2024-08-19 04:39:43', '2024-08-19 04:39:43'),
(5, 'KAlalallalallalallalallalaalalalalalal', '1', '2024-08-19 04:42:00', '2024-08-21 03:51:12'),
(6, 'tyutyityityityiti', '1', '2024-08-19 05:29:41', '2024-08-21 05:09:19'),
(7, 'Test', '1', '2024-08-20 23:01:21', '2024-08-21 03:51:44');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vat` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `indirizzo_fatturazione` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consorzio_id` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contract_id` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zone_id` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `indirizzo_negozio` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referente` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci,
  `is_active` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `vat`, `indirizzo_fatturazione`, `consorzio_id`, `contract_id`, `zone_id`, `indirizzo_negozio`, `referente`, `tel`, `email`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Kaliaks', '5', 'IF', '3', 'USA', '6', 'IN', 'Ref', '1234567890', 'mmm@sample.com', '1', '2024-08-20 03:20:42', '2024-08-20 03:28:52'),
(2, 'Test', 'Test', 'Test', '2', 'USA', '4', 'Test', 'Test', 'Test', 'Test@gmail.com', '1', '2024-08-20 23:02:42', '2024-08-21 03:51:55'),
(3, 'Test', '15', 'Sample', '1', 'Select Contract with', NULL, NULL, NULL, NULL, NULL, '0', '2024-08-21 05:36:18', '2024-08-21 05:36:18');

-- --------------------------------------------------------

--
-- Table structure for table `client_work`
--

CREATE TABLE `client_work` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_date` date NOT NULL,
  `check_in1` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_in_type1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_in_id1` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_out1` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_out_type1` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_out_id1` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `consorzio`
--

CREATE TABLE `consorzio` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `consorzio`
--

INSERT INTO `consorzio` (`id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'KAlal', '0', '2024-08-19 04:24:28', '2024-08-21 00:02:12'),
(2, 'Kalalalaaaaa', '0', '2024-08-19 04:24:50', '2024-08-19 04:31:43'),
(3, 'Karur', '0', '2024-08-19 04:37:27', '2024-08-19 04:37:27'),
(4, 'dfg', '0', '2024-08-19 04:39:43', '2024-08-19 04:39:43'),
(5, 'KAlalallalallalallalallalaalalalalalal', '1', '2024-08-19 04:42:00', '2024-08-21 01:39:22'),
(6, 'tyutyityityityiti', '0', '2024-08-19 05:29:41', '2024-08-19 05:30:04'),
(7, 'klkl002', '0', '2024-08-19 05:54:10', '2024-08-19 05:54:23'),
(8, 'fghfghfgh', '0', '2024-08-19 06:07:20', '2024-08-19 06:07:20'),
(9, 'ghjghjgh', '0', '2024-08-19 06:39:35', '2024-08-19 06:39:35'),
(10, 'uywetouywte83645874635', '0', '2024-08-19 06:39:49', '2024-08-19 06:39:49'),
(11, 'Test', '0', '2024-08-20 23:01:35', '2024-08-20 23:01:35');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sur_name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `codice_fiscale` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `negozio_principale_id` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci,
  `mansione` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contract_id` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipe_of_contract` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ccnl_id` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `livello` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ore_contratto` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orario_notturno` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_assunzione` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_scadenza` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `sur_name`, `codice_fiscale`, `negozio_principale_id`, `email`, `mansione`, `tel`, `contract_id`, `tipe_of_contract`, `ccnl_id`, `livello`, `ore_contratto`, `orario_notturno`, `data_assunzione`, `data_scadenza`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Kaliaks', '5', 'IF', '3', 'USA', '6', 'IN', 'Ref', '1234567890', 'mmm@sample.com', NULL, NULL, NULL, NULL, NULL, '0', '2024-08-20 03:20:42', '2024-08-20 03:28:52'),
(2, 'sdfsdf', 'dsff', 'dsfdsf', 'Caneda', 'dsfdsf@sasasa.com', 'gdfgdfg', 'dfgdfgdfg', 'Caneda', 'dfgdfg', '4', 'dfgdfg', 'dfgdfg', 'fdgdfg', 'fdgfdg', 'dfgdfg', '0', '2024-08-20 06:55:31', '2024-08-20 06:55:31'),
(3, 'Test', 'Test', 'Test', 'Noida', 'Test@gmail.com', 'Test', 'Test', 'Noida', 'Test', 'Africa', 'Test', 'Test', 'Test', 'Test', 'Test', '0', '2024-08-20 23:03:52', '2024-08-21 03:52:04');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_08_09_091818_create_clients_table', 2),
(6, '2024_08_13_053720_create_zones_table', 2);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `society`
--

CREATE TABLE `society` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `society`
--

INSERT INTO `society` (`id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'KAla', '1', '2024-08-19 04:24:28', '2024-08-21 05:34:24'),
(2, 'Kalalalaaaaa', '1', '2024-08-19 04:24:50', '2024-08-21 05:34:12'),
(3, 'Karur', '0', '2024-08-19 04:37:27', '2024-08-19 04:37:27'),
(4, 'dfg', '1', '2024-08-19 04:39:43', '2024-08-21 05:34:29'),
(5, 'KAlalallalallalallalallalaalalalalalal', '1', '2024-08-19 04:42:00', '2024-08-21 03:51:02'),
(6, 'tyutyityityityiti', '1', '2024-08-19 05:29:41', '2024-08-21 05:34:05'),
(7, 'klkl002', '1', '2024-08-19 05:54:10', '2024-08-21 05:34:18'),
(8, 'Hi', '0', '2024-08-19 07:32:51', '2024-08-19 07:32:51'),
(9, 'Test', '0', '2024-08-20 23:00:43', '2024-08-20 23:00:43'),
(10, 'Testing', '0', '2024-08-21 05:33:40', '2024-08-21 05:33:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zones`
--

CREATE TABLE `zones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `zones`
--

INSERT INTO `zones` (`id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Test', '0', '2024-08-19 04:24:28', '2024-08-20 23:00:26'),
(2, 'Kalalalaaaaa', '0', '2024-08-19 04:24:50', '2024-08-19 04:31:43'),
(3, 'Karur', '0', '2024-08-19 04:37:27', '2024-08-19 04:37:27'),
(4, 'dfg', '0', '2024-08-19 04:39:43', '2024-08-19 04:39:43'),
(5, 'KAlalallalallalallalallalaalalalalalal', '1', '2024-08-19 04:42:00', '2024-08-21 03:48:45'),
(6, 'karur', '0', '2024-08-19 07:32:18', '2024-08-19 07:32:18'),
(7, 'Test', '0', '2024-08-20 08:29:06', '2024-08-20 08:29:06'),
(8, 'Karur', '0', '2024-08-21 05:32:42', '2024-08-21 05:33:05'),
(9, 'gggg', '0', '2024-08-21 06:38:28', '2024-08-21 06:38:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ccnl`
--
ALTER TABLE `ccnl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_work`
--
ALTER TABLE `client_work`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consorzio`
--
ALTER TABLE `consorzio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `society`
--
ALTER TABLE `society`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `zones`
--
ALTER TABLE `zones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ccnl`
--
ALTER TABLE `ccnl`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `client_work`
--
ALTER TABLE `client_work`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `consorzio`
--
ALTER TABLE `consorzio`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `society`
--
ALTER TABLE `society`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `zones`
--
ALTER TABLE `zones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
