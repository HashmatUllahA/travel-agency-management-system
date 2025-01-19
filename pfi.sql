-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2023 at 06:09 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pfi`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminregisters`
--

CREATE TABLE `adminregisters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_super` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auths`
--

CREATE TABLE `auths` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `availablevasas`
--

CREATE TABLE `availablevasas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `requerd` varchar(255) NOT NULL,
  `lastdate` varchar(255) NOT NULL,
  `advimg` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `availablevasas`
--

INSERT INTO `availablevasas` (`id`, `country`, `title`, `requerd`, `lastdate`, `advimg`, `created_at`, `updated_at`) VALUES
(1, 'UAE', 'MASON', '100', '2023-03-28', NULL, '2023-02-26 14:56:51', '2023-02-26 14:56:51'),
(2, 'UAE', 'lauber', '100', '2023-04-01', NULL, '2023-03-10 07:08:37', '2023-03-10 07:08:37'),
(3, 'UAE', 'Electricion', '18', '2023-03-29', NULL, '2023-03-10 07:37:48', '2023-03-10 07:37:48');

-- --------------------------------------------------------

--
-- Table structure for table `cventries`
--

CREATE TABLE `cventries` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `trade` text DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `contect1` varchar(255) NOT NULL,
  `contect2` varchar(255) DEFAULT NULL,
  `passport` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cventries`
--

INSERT INTO `cventries` (`user_id`, `username`, `trade`, `city`, `contect1`, `contect2`, `passport`, `created_at`, `updated_at`) VALUES
(1, 'AMIR', 'MASON', 'MARDAN', '3340910607', NULL, 'No present', '2023-02-26 14:57:47', '2023-02-26 14:57:47'),
(3, 'AMIR', 'MASON', 'MARDAN', '5555555', '111111111111111', 'No present', '2023-03-10 05:17:18', '2023-03-10 05:17:18'),
(5, 'AMIR', 'MASON', 'PESHAWAR', '3555', NULL, 'Passport present', '2023-03-10 05:22:27', '2023-03-10 05:22:27');

-- --------------------------------------------------------

--
-- Table structure for table `enterypassports`
--

CREATE TABLE `enterypassports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `fathername` varchar(255) NOT NULL,
  `passportno` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(5, '2023_01_07_104744_create_cventries_table', 1),
(6, '2023_01_26_055403_create_availablevasas_table', 1),
(7, '2023_01_31_175107_create_userapplayvisas_table', 1),
(8, '2023_02_02_061746_create_admins_table', 1),
(9, '2023_02_02_062227_create_writers_table', 1),
(10, '2023_02_04_194549_create_registers_table', 1),
(11, '2023_02_28_183415_create_adminregisters_table', 2),
(12, '2023_03_02_190851_create_auths_table', 2),
(21, '2023_03_03_105114_create_payments_table', 3),
(22, '2023_03_06_164020_create_returnpayments_table', 3),
(23, '2023_03_07_192211_create_pficosts_table', 3),
(24, '2023_03_14_203219_create_enterypassports_table', 4),
(26, '2023_03_15_103008_create_returnpassports_table', 5);

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `fathername` text NOT NULL,
  `trade` varchar(255) NOT NULL,
  `contect` varchar(255) NOT NULL,
  `passportno` varchar(255) NOT NULL,
  `totalpayment` varchar(255) NOT NULL,
  `recivepayment` varchar(255) NOT NULL,
  `paymentstutas` varchar(255) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `msg` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `name`, `fathername`, `trade`, `contect`, `passportno`, `totalpayment`, `recivepayment`, `paymentstutas`, `companyname`, `city`, `country`, `date`, `file`, `msg`, `created_at`, `updated_at`) VALUES
(1, 'munir', 'muhammad khan', 'ASSIT CAMPAS', '0334 505525', 'kk3555656', '60000', '25000', 'Acount', 'belhasa', 'MARDAN', 'UAE', '2023-03-14', NULL, NULL, '2023-03-14 13:44:29', '2023-03-14 13:44:29'),
(2, 'ali khan', 'MUHAMMAD KHAN', 'ASSIT CAMPAS', '0334 505525', 'kk3555656', '500000', '25000', 'Acount', 'CGC', 'CHATRAL', 'Qatar', '2023-03-14', NULL, NULL, '2023-03-14 13:45:50', '2023-03-14 13:45:50');

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
-- Table structure for table `pficosts`
--

CREATE TABLE `pficosts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `work` varchar(255) NOT NULL,
  `expence` text NOT NULL,
  `details` varchar(255) NOT NULL,
  `paymentstutas` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `msg` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `returnpassports`
--

CREATE TABLE `returnpassports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `fathername` varchar(255) NOT NULL,
  `passportno` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `returnto` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `returnpassports`
--

INSERT INTO `returnpassports` (`id`, `name`, `fathername`, `passportno`, `city`, `returnto`, `date`, `created_at`, `updated_at`) VALUES
(1, 'hashmat', 'muhammad khan', 'kk3555656', 'MARDAN', 'aslam', '2023-03-16', '2023-03-16 13:44:29', '2023-03-16 13:44:29'),
(2, 'hashmat', 'muhammad khan', 'ss5565987', 'MARDAN', 'aslam', '2023-03-16', '2023-03-16 13:51:12', '2023-03-16 13:51:12');

-- --------------------------------------------------------

--
-- Table structure for table `returnpayments`
--

CREATE TABLE `returnpayments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `fathername` text NOT NULL,
  `trade` varchar(255) NOT NULL,
  `contect` varchar(255) NOT NULL,
  `passportno` varchar(255) NOT NULL,
  `retunpayment` varchar(255) NOT NULL,
  `paymentstutas` varchar(255) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `msg` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userapplayvisas`
--

CREATE TABLE `userapplayvisas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `fname` text NOT NULL,
  `gender` varchar(255) NOT NULL,
  `cnicno` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `placebarth` varchar(255) NOT NULL,
  `passportno` varchar(255) NOT NULL,
  `expriypassport` varchar(255) NOT NULL,
  `visatitle` varchar(255) NOT NULL,
  `Experience` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'hashmat', 'hashmat@gmail.com', NULL, '$2y$10$flKifU8w2CgKi6nI5P8dtOySDvvmgEE2JtJArJvPh.CfrV2.M3Hqi', NULL, '2023-03-02 14:38:22', '2023-03-02 14:38:22'),
(2, 'taimor', 'taimore@gmail.com', NULL, '$2y$10$dqyq9gF5lS4q42ELXSkLbuadH/vCjcwOTnpdw.6X1K16512t17Hwq', NULL, '2023-03-02 14:59:10', '2023-03-02 14:59:10'),
(3, 'asmin', 'asim@gmail.com', NULL, '$2y$10$KnJwXKxHMEgiEo.6/CAjKOmvayEWmkjrNcU9OSzF0hLoclXCetrA2', NULL, '2023-03-02 15:07:10', '2023-03-02 15:07:10'),
(4, 'sami', 'sami@gmail.com', NULL, '$2y$10$jKUbVQy/6d3rJ314OGPzIO5.DSD7zoNQ4P3xklz28ZiUsWxdfrIEu', NULL, '2023-03-02 15:08:11', '2023-03-02 15:08:11');

-- --------------------------------------------------------

--
-- Table structure for table `writers`
--

CREATE TABLE `writers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_editor` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminregisters`
--
ALTER TABLE `adminregisters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `auths`
--
ALTER TABLE `auths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `availablevasas`
--
ALTER TABLE `availablevasas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cventries`
--
ALTER TABLE `cventries`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `cventries_contect1_unique` (`contect1`);

--
-- Indexes for table `enterypassports`
--
ALTER TABLE `enterypassports`
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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pficosts`
--
ALTER TABLE `pficosts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `registers_email_unique` (`email`);

--
-- Indexes for table `returnpassports`
--
ALTER TABLE `returnpassports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `returnpayments`
--
ALTER TABLE `returnpayments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userapplayvisas`
--
ALTER TABLE `userapplayvisas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `writers`
--
ALTER TABLE `writers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `writers_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminregisters`
--
ALTER TABLE `adminregisters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auths`
--
ALTER TABLE `auths`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `availablevasas`
--
ALTER TABLE `availablevasas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cventries`
--
ALTER TABLE `cventries`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `enterypassports`
--
ALTER TABLE `enterypassports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pficosts`
--
ALTER TABLE `pficosts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `returnpassports`
--
ALTER TABLE `returnpassports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `returnpayments`
--
ALTER TABLE `returnpayments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userapplayvisas`
--
ALTER TABLE `userapplayvisas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `writers`
--
ALTER TABLE `writers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
