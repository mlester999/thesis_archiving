-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2022 at 09:09 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `archiving_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('markyworky003@gmail.com', '$2y$10$b03TqAYuy72xtiaIZmrJ8.lG97CTVvFXd8mNsU/XY3ZeqN87yPT3G', '2022-10-11 00:44:38');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `username`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mark Lester Acak', 'markyworky003@gmail.com', NULL, '$2y$10$YIetN3qwwU3n5VaOhn1CHOfUeSKx0WtdhO4afe9ph9XBYApQdzph.', 'mlester999', '16B1COe1XDeuhqOeAdDi4JXV3Yo5YmCcnowvlmm5REFdPEGOM57wyfhMhT4r', '2022-10-10 17:28:25', '2022-10-10 17:28:25'),
(2, 'Mitch Tapang', 'mitch_maganda@gmail.com', '2022-10-11 19:49:48', '$2y$10$CQeofw.UDark4k4eTyvkCu15n6I6WnNCLc7EPmPWYmL2dvApwykte', 'mitch_maganda', '08II7Mteq81eUNTR9qwvtIo8V5iOuHAkk9jPvJ7QXRBHh8YkdBqaai2qjgGA', '2022-10-10 18:35:36', '2022-10-11 20:52:32'),
(3, 'Mitch Tapang', 'mitchelay123@gmail.com', NULL, '$2y$10$aJNv.5XZh3tLs5ZRzslojObjgY.MdcJSvzkeUTKqntNmfNgr9KvlK', 'mitchelski', 'S8NILc9TqlS6qSsuHr8ZqAXy2s59kcVxWJE5H9U13JrA3oDgYfYagQBqCYcp', '2022-10-10 19:57:38', '2022-10-11 00:56:25'),
(4, 'Rogie Aldueza', 'rogiealdueza123@gmail.com', NULL, '$2y$10$RHZZV6NP0E5Z2Hf0rfMYheWrqRY1cbywzdfgTHOC8D/cAFaZbe//G', 'rogieboy', NULL, '2022-10-11 01:31:07', '2022-10-11 01:31:07'),
(5, 'Metchel Tapang', 'metcheltapang@gmail.com', '2022-10-11 02:30:10', '$2y$10$zGCgrWehzjGRDFg5/9yAFuZFDxdBkHjqdPGtOw4JOA1URmjYmEJCq', 'metchelay', 'jVmxuhCOaVJcJ5Vh10IH2NAvC2taxUoaNC2LNBj5LNwBWqApH7vgkyIvUBWe', '2022-10-11 02:29:35', '2022-10-11 02:31:38'),
(6, 'Jonas Campomanes', 'jonas_campomanes@gmail.com', '2022-10-11 04:50:44', '$2y$10$WU8.xOcWPWmFD2Ijr6YFHO3j3xC6ks3G3depC34xhGhqrzy/9BuMm', 'jonas_campomanes', 'Y7rpTqFTWcYUXGM2YxgAIcWXtZulDO0mdhQGZvYk0Ix1PIE5O10J8vCh6N6F', '2022-10-11 04:50:23', '2022-10-11 22:58:51');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
