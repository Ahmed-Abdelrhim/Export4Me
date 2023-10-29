-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 29, 2023 at 01:44 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salam`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `profile_img` varchar(255) DEFAULT NULL,
  `manager_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `name`, `email`, `email_verified_at`, `password`, `profile_img`, `manager_id`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(11, 'Mustafa Jamali', 'Mustafa@JD.sa', NULL, '$2y$10$jtakbyJsAZ9NudCGPvAjleFqTx9b15gJCOHUzFYTrLxkCWyu5xl1i', NULL, 8, 1, NULL, '2023-05-02 00:09:36', '2023-05-07 17:31:52'),
(12, 'Ali Asseri', 'Ali@JD.sa', NULL, '$2y$10$ppCOgJmxLpGJ1xq2ylufWOseIn19dGfOI2MYCdVgA.0wF5fZp80A.', NULL, 8, 1, NULL, '2023-05-02 00:11:24', '2023-05-02 00:11:24'),
(13, 'Zeyad Al Juhani', 'Zeyad@JD.sa', NULL, '$2y$10$mJxDtqCJS5Mfl3RBUgbEeOP4gte30LBLJwCuG5Me1Jbq52qpx7dPu', NULL, 8, 1, NULL, '2023-05-02 00:11:55', '2023-05-02 00:11:55'),
(14, 'Salem Dulaim', 'salem@MK.sa', NULL, '$2y$10$KSUQO18f33r0Zit0eKkB0OsW7GQteIoS7KyU67IoG5kEsH5ELCbRK', NULL, 9, 1, NULL, '2023-05-02 08:45:26', '2023-05-31 17:00:02'),
(18, 'Mohammed Al Dulaym', 'Mohammed@as.sa', NULL, '$2y$10$tg0yMlM4OJGCbVdC5DWvJemDynb9xBDNsrscjsRVujUMA8U238TFG', NULL, 10, 1, NULL, '2023-05-02 08:48:03', '2023-06-08 19:01:26'),
(19, 'Ali Al Muhamidh', 'Ali@as.sa', NULL, '$2y$10$GXPDfu2rbbnB38OVZHcDGepk/FgZxHZMi443trjCcobDTF8uj6fnq', NULL, 10, 1, NULL, '2023-05-02 08:48:29', '2023-05-02 08:48:29'),
(20, 'Syani Al Hakami', 'Syani@jz.sa', NULL, '$2y$10$QkTEC9nG5H2KavWwHUSgEuWu0TG7alvxqzpJ8G5.Qr/kctzWYyrha', NULL, 11, 1, NULL, '2023-05-02 08:48:59', '2023-05-02 08:48:59'),
(22, 'Jaber Al Shehri', 'Jaber@as.sa', NULL, '$2y$10$EkwV9Ig5Nu.z/aLS/6DP7uCBhGdUr59/YbAq57uCtmpZqFIwYSIvG', NULL, 10, 1, NULL, '2023-05-02 19:06:20', '2023-05-02 19:06:20'),
(23, 'Anas Jehailan', 'Anas@mk.sa', NULL, '$2y$10$shDddTmy4UxB3Fk4FwpsveRLBppKWm1r0Ap8gmDOpB/1Irx0ZiZ5S', NULL, 9, 1, NULL, '2023-05-02 19:17:46', '2023-05-02 19:17:46'),
(24, 'Mishari Al Thiyabi', 'Mishari@mk.sa', NULL, '$2y$10$D7RLOfak.CIjYkLO1BBQXeBDFichnezfvuHrR3Gj7WmUfQgtPd2ji', NULL, 9, 1, NULL, '2023-05-04 20:25:58', '2023-05-04 20:25:58'),
(26, 'Raed Al Shaher', 'Raed@MD.sa', NULL, '$2y$10$UW9lOUIjs5JQB//uDYKwqevFBr6k9u.M350rnrvQqquOj/EF4zKA6', NULL, 12, 1, NULL, '2023-07-02 13:54:47', '2023-07-02 13:54:47'),
(27, 'Mohmmed Arkeek', 'Mohmmed@MD.sa', NULL, '$2y$10$/dU/3WIJ37EZyI3jeUiZgeaGGRODcUYV9LCD8HkjeNlPmh.ZzgEzG', NULL, 12, 1, NULL, '2023-07-02 13:55:34', '2023-07-02 13:55:34'),
(28, 'Abdul Aziz Al Kowakbi', 'Kowakbi@jz.sa', NULL, '$2y$10$n05uqavHX/.9e6TVDC/NCu5vp/GLW1svx.1..yBkdgv4DSleqw/ZC', NULL, 11, 1, NULL, '2023-09-10 13:09:02', '2023-09-10 13:09:02');

-- --------------------------------------------------------

--
-- Table structure for table `exporters`
--

CREATE TABLE `exporters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `owner_name` varchar(255) NOT NULL,
  `manager_name` varchar(255) NOT NULL,
  `factory_address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `media` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `landline` varchar(255) DEFAULT NULL,
  `mobile_phone` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_description` varchar(255) DEFAULT NULL,
  `production_quantity` varchar(255) DEFAULT NULL,
  `local_selling` varchar(255) DEFAULT NULL,
  `country_export_to_before` varchar(255) DEFAULT NULL,
  `country_export_to_before_value` varchar(255) DEFAULT NULL,
  `exporter_place` varchar(255) DEFAULT NULL,
  `shipping_worked_before` varchar(255) DEFAULT NULL,
  `sector` varchar(255) DEFAULT NULL,
  `exporter_record` tinyint(4) DEFAULT NULL,
  `export_paper` tinyint(4) DEFAULT NULL,
  `photo_team` tinyint(4) DEFAULT NULL,
  `commercial_record` varchar(255) DEFAULT NULL,
  `product_brochure` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exporters`
--

INSERT INTO `exporters` (`id`, `company_name`, `owner_name`, `manager_name`, `factory_address`, `country`, `website`, `media`, `email`, `landline`, `mobile_phone`, `product_name`, `product_description`, `production_quantity`, `local_selling`, `country_export_to_before`, `country_export_to_before_value`, `exporter_place`, `shipping_worked_before`, `sector`, `exporter_record`, `export_paper`, `photo_team`, `commercial_record`, `product_brochure`, `created_at`, `updated_at`) VALUES
(1, 'Barron and Sharpe Inc', 'Jocelyn Warren', 'Charity Rice', 'Ex cum dolorum ea ad', 'Culpa rerum magni cu', 'https://www.geruduqonag.me.uk', 'Sed dolorum esse quo', 'xida@mailinator.com', '0223769380', '01152067271', 'Astra Wilcox', 'Tempora libero atque', '651', 'Voluptatem temporibu', 'Tempora unde ducimus', 'Ipsam adipisci cumqu', 'Facere vitae quis au', 'Proident veniam vo', '3', 1, 1, 1, '9774fec66d7a3b33a0b808c67daff6ab.png', '9774fec66d7a3b33a0b808c67daff6ab.png', '2023-10-28 21:15:25', '2023-10-28 21:15:25'),
(2, 'Ahmed Abdelrhim', 'Ahmed Abdelrhim', 'Ahmed Abdelrhim', 'Helwan Cairo', 'Egypt', 'https://www.xycitepirydesi.com', NULL, 'aabdelrhim974@gmail.com', '0223769380', '01152067271', 'Pepsi Can', 'Pepsi Can Details Is Here', '1000', 'Yes', 'USA', '800', 'United Kingdom', 'Quia illum consequu', '3', 1, 2, 1, 'bccc321a71bc35c86f525b12410d67f3.png', 'bccc321a71bc35c86f525b12410d67f3.png', '2023-10-28 21:20:09', '2023-10-28 21:20:09');

-- --------------------------------------------------------

--
-- Table structure for table `extractors`
--

CREATE TABLE `extractors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `owner_name` varchar(255) NOT NULL,
  `manager_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `media` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `landline` varchar(255) DEFAULT NULL,
  `mobile_phone` varchar(255) DEFAULT NULL,
  `shipping_types` text NOT NULL,
  `harbor_type` varchar(255) NOT NULL,
  `clearance_type` varchar(255) NOT NULL,
  `commercial_record` varchar(255) DEFAULT NULL,
  `license` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `extractors`
--

INSERT INTO `extractors` (`id`, `company_name`, `owner_name`, `manager_name`, `address`, `website`, `media`, `email`, `landline`, `mobile_phone`, `shipping_types`, `harbor_type`, `clearance_type`, `commercial_record`, `license`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed Abdelrhim', 'Ahmed Abdelrhim', 'Ahmed Abdelrhim', 'Cairo , Helwan', 'https://www.nurubowekaruxoj.in', 'Veritatis exercitati', 'aabdelrhim974@gmail.com', '0223769380', NULL, 'Shipping Types Is Here', '1', '1', '80918fa3d5751555460648b43ac11bb0.png', NULL, '2023-10-29 10:40:11', '2023-10-29 10:40:11');

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
-- Table structure for table `importers`
--

CREATE TABLE `importers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `owner_name` varchar(255) NOT NULL,
  `manager_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `media` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `landline` varchar(255) DEFAULT NULL,
  `mobile_phone` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `harbor_name` varchar(255) DEFAULT NULL,
  `origin` varchar(255) DEFAULT NULL,
  `product_description` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `imported_before_value` varchar(255) DEFAULT NULL,
  `sector` varchar(255) DEFAULT NULL,
  `is_agreed_to_import` tinyint(4) DEFAULT NULL,
  `commercial_record` varchar(255) DEFAULT NULL,
  `product_catalog` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `importers`
--

INSERT INTO `importers` (`id`, `company_name`, `owner_name`, `manager_name`, `address`, `country`, `website`, `media`, `email`, `landline`, `mobile_phone`, `product_name`, `harbor_name`, `origin`, `product_description`, `size`, `imported_before_value`, `sector`, `is_agreed_to_import`, `commercial_record`, `product_catalog`, `created_at`, `updated_at`) VALUES
(1, 'Buchanan Kennedy Traders', 'Alexis Kirkland', 'Amir Houston', 'Explicabo Fugiat om', 'Consequatur dolorem', 'https://www.lab.biz', 'Aliquip sunt expedit', 'fubunava@mailinator.com', '0223769380', '01152067271', NULL, 'Lareina Berry', 'Quis blanditiis nisi', 'Corporis suscipit et', 'Totam hic exercitati', 'Rerum consequuntur s', '2', 2, '821279c672574b6219ff1abe02feef8d.png', '4a916cb1f2d8a8f484e5309e609dbf59.png', '2023-10-28 22:17:19', '2023-10-28 22:17:19'),
(2, 'Buchanan Kennedy Traders', 'Alexis Kirkland', 'Amir Houston', 'Explicabo Fugiat om', 'Consequatur dolorem', 'https://www.lab.biz', 'Aliquip sunt expedit', 'fubunava@mailinator.com', '0223769380', '01152067271', NULL, 'Lareina Berry', 'Quis blanditiis nisi', 'Corporis suscipit et', 'Totam hic exercitati', 'Rerum consequuntur s', '2', 2, '59bd1a871a12d13dbb13646163e8e21f.png', 'a0614dbc9c718eaf63ea5f866412b447.png', '2023-10-28 22:17:39', '2023-10-28 22:17:39');

-- --------------------------------------------------------

--
-- Table structure for table `insurances`
--

CREATE TABLE `insurances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `owner_name` varchar(255) NOT NULL,
  `manager_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `media` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `landline` varchar(255) DEFAULT NULL,
  `mobile_phone` varchar(255) DEFAULT NULL,
  `commercial_record` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `insurances`
--

INSERT INTO `insurances` (`id`, `company_name`, `owner_name`, `manager_name`, `address`, `website`, `media`, `email`, `landline`, `mobile_phone`, `commercial_record`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed Abdelrhim', 'Ahmed Abdelrhim', 'Ahmed Abdelrhim', 'Cairo, Helwan', 'https://www.youtube.com', 'https://www.youtube.com', 'aabdelrhim974@gmail.com', '0223769380', '01152067271', '89b1e62984a6796644f20bcad52461c8.webp', '2023-10-29 11:09:15', '2023-10-29 11:09:15');

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `Added_by` int(11) NOT NULL DEFAULT 0,
  `profile_img` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `name`, `email`, `email_verified_at`, `password`, `Added_by`, `profile_img`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 'Khalil Al Sharif', 'Khalil@JD.SA', NULL, '$2y$10$ynr5sYWdfTwOMac2zaQvO.RkC/pSkYthMTPR2GWrLnniOfcSgV5NO', 1, NULL, 1, NULL, '2023-05-02 00:01:37', '2023-05-02 00:01:37'),
(9, 'Abdullah Al Amri', 'Abdullah@MK.SA', NULL, '$2y$10$2fMe/utyZ0IcjnopZFxBHOYpdJm3Ukycd6d5Sg9SEHuzHU7mYJaKe', 1, NULL, 1, NULL, '2023-05-02 00:02:05', '2023-05-02 00:02:05'),
(10, 'Rafat Al Bader', 'Rafat@AS.SA', NULL, '$2y$10$xPwF7yQU6zEe9nmcTGqV5OtorF.EJ.qbJhyKma8MyjRzzNI8M60pG', 1, NULL, 1, NULL, '2023-05-02 00:02:41', '2023-05-02 00:02:41'),
(11, 'Shaheed Al Bedawi', 'Shaheed@JZ.SA', NULL, '$2y$10$XwixyflCrv6eZUZuXvBtteXa/v5zJAQOGZdorupTrxEOigY0jpI5u', 1, NULL, 1, NULL, '2023-05-02 00:03:30', '2023-05-02 00:03:30'),
(12, 'Rami Majeeda', 'rami@md.sa', NULL, '$2y$10$zR9XU31CzebkLbiGOSeSR.Q95a04747Hzq89LfXR2Eo02LCgn88ra', 1, NULL, 1, NULL, '2023-07-02 13:51:14', '2023-07-02 13:51:14');

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
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(10, '2023_04_16_003359_create_managers_table', 2),
(11, '2023_04_17_231041_create_agents_table', 3),
(15, '2023_04_16_132949_create_vistors_table', 4),
(16, '2023_07_21_163443_create_my_vistors_managers_table', 5),
(17, '2023_10_28_203811_create_exporters_table', 6),
(18, '2023_10_28_232137_create_importers_table', 7),
(19, '2023_10_29_113204_create_extractors_table', 8),
(20, '2023_10_29_124830_create_insurances_table', 9),
(21, '2023_10_29_131050_create_shippings_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `my_vistors_managers`
--

CREATE TABLE `my_vistors_managers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vistor_code` varchar(255) NOT NULL,
  `vistor_date` text NOT NULL,
  `vistor_time` varchar(255) NOT NULL,
  `lat` decimal(10,8) NOT NULL,
  `long` decimal(10,8) NOT NULL,
  `notes` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `manager_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `my_vistors_managers`
--

INSERT INTO `my_vistors_managers` (`id`, `vistor_code`, `vistor_date`, `vistor_time`, `lat`, `long`, `notes`, `status`, `manager_id`, `created_at`, `updated_at`) VALUES
(993, 'Pos_003227', '2023-10-22', '6:01 PM', 24.47863406, 39.62983998, 'لايوجد', 1, 12, '2023-10-22 18:01:28', '2023-10-22 18:01:28'),
(994, 'Pos_001562', '2023-10-22', '6:09 PM', 21.27674155, 40.41277649, 'No', 1, 9, '2023-10-22 18:09:59', '2023-10-22 18:09:59'),
(995, 'Pos_001687', '2023-10-22', '6:10 PM', 21.27706157, 40.41308927, 'No', 1, 9, '2023-10-22 18:10:27', '2023-10-22 18:10:27'),
(996, 'Pos_003416', '2023-10-22', '6:27 PM', 24.47871311, 39.62969489, 'لايوجد', 1, 12, '2023-10-22 18:27:58', '2023-10-22 18:27:58'),
(997, 'Pos_009508', '2023-10-22', '6:40 PM', 21.27689785, 40.41290307, 'No', 1, 9, '2023-10-22 18:40:03', '2023-10-22 18:40:03'),
(998, 'Pos_001803', '2023-10-22', '6:40 PM', 21.27689785, 40.41290307, 'No', 1, 9, '2023-10-22 18:40:16', '2023-10-22 18:40:16'),
(999, 'Pos_001133', '2023-10-22', '7:12 PM', 17.15131581, 42.64422727, 'تم اعادة شرح الباقات وتنشيط اليوزر', 1, 11, '2023-10-22 19:12:07', '2023-10-22 19:12:07'),
(1000, 'Pos_001238', '2023-10-22', '7:26 PM', 17.15060211, 42.64385026, 'تم اعادة شرح الباقات', 1, 11, '2023-10-22 19:26:42', '2023-10-22 19:26:42'),
(1001, 'Pos_007439', '2023-10-22', '8:16 PM', 24.47856208, 39.62969390, 'لايوجد', 1, 12, '2023-10-22 20:16:26', '2023-10-22 20:16:26'),
(1002, 'Pos_001563', '2023-10-22', '8:28 PM', 16.90238990, 42.55402540, 'تم اعادة شرح الباقات', 1, 11, '2023-10-22 20:28:54', '2023-10-22 20:28:54'),
(1003, 'Pos_003382', '2023-10-22', '8:32 PM', 16.90168870, 42.55128200, 'تم اعادة شرح الباقات', 1, 11, '2023-10-22 20:32:37', '2023-10-22 20:32:37'),
(1004, 'Pos_003822', '2023-10-22', '8:37 PM', 24.47922086, 39.62947473, 'لايوجد', 1, 12, '2023-10-22 20:37:05', '2023-10-22 20:37:05');

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
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `owner_name` varchar(255) NOT NULL,
  `manager_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `media` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `landline` varchar(255) DEFAULT NULL,
  `mobile_phone` varchar(255) DEFAULT NULL,
  `shipping_types` text DEFAULT NULL,
  `commercial_record` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `company_name`, `owner_name`, `manager_name`, `address`, `website`, `media`, `email`, `landline`, `mobile_phone`, `shipping_types`, `commercial_record`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed Abdelrhim', 'Ahmed Abdelrhim', 'Ahmed Abdelrhim', 'Cairo , Helwan', 'https://www.youtube.com', 'https://www.youtube.com', 'aabdelrhim974@gmail.com', '0223769380', '01152067271', 'Shipping Types Is Here', NULL, '2023-10-29 12:10:12', '2023-10-29 12:10:12');

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
  `role` int(11) NOT NULL DEFAULT 1,
  `profile_img` varchar(255) DEFAULT NULL,
  `Added_by` int(11) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `profile_img`, `Added_by`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rafat Al Badr', 'rafat@admin.com', NULL, '$2y$10$YpAiS8FEwnWz0i8VFtmvtOzFqUqoCJh79f9XBP8ZwYkZgblaaZg5e', 1, '16829507161682627666logo.svg', NULL, NULL, '2023-04-12 21:14:37', '2023-05-02 08:50:33'),
(2, 'Ahmed Abdelrhim', 'aabdelrhim974@gmail.com', NULL, '$2y$10$qOpXbHhlAoE4ZWjKtyZAz.tLO4I5UbnMM.vU0vT0NuKbHgJEZhhfS', 1, '1698508316zexport4me-logo.png', NULL, NULL, '2023-10-22 18:32:34', '2023-10-28 16:51:56');

-- --------------------------------------------------------

--
-- Table structure for table `vistors`
--

CREATE TABLE `vistors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vistor_code` varchar(255) DEFAULT NULL,
  `vistor_phone` varchar(255) NOT NULL,
  `vistor_balance` varchar(255) NOT NULL,
  `vistor_count_slides` varchar(255) NOT NULL,
  `vistor_count_activity` varchar(255) DEFAULT NULL,
  `lat` decimal(10,8) NOT NULL,
  `long` decimal(10,8) NOT NULL,
  `place_code` bigint(20) DEFAULT NULL COMMENT 'رقم المنشأة',
  `place_trade_number` bigint(20) DEFAULT NULL COMMENT 'رقم السجل التجارى	',
  `place_expire_date` varchar(255) DEFAULT NULL COMMENT 'تاريخ انتهاء السجل	',
  `Owner_identify_number` varchar(255) DEFAULT NULL COMMENT 'رقم هوية المالك	',
  `Owner_ID_expiry_date` varchar(255) DEFAULT NULL COMMENT 'تاريخ انتهاء هوية المالك	',
  `seller_identify_number` bigint(20) DEFAULT NULL COMMENT 'رقم هوية الموظف / البائع	',
  `seller_ID_expiry_date` varchar(255) DEFAULT NULL COMMENT 'تاريخ انتهاء هوية الموظف / البائع	',
  `date` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `Agent_id` bigint(20) UNSIGNED NOT NULL,
  `manager_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vistors`
--

INSERT INTO `vistors` (`id`, `vistor_code`, `vistor_phone`, `vistor_balance`, `vistor_count_slides`, `vistor_count_activity`, `lat`, `long`, `place_code`, `place_trade_number`, `place_expire_date`, `Owner_identify_number`, `Owner_ID_expiry_date`, `seller_identify_number`, `seller_ID_expiry_date`, `date`, `time`, `notes`, `Agent_id`, `manager_id`, `status`, `created_at`, `updated_at`) VALUES
(13876, 'Pos_001133', '05', '400', '0', '2', 17.15134108, 42.64414190, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-22', '4:34 PM', 'تم تنشيط اليوزر', 28, 11, 1, '2023-10-22 16:34:59', '2023-10-22 16:34:59'),
(13877, 'Pos_010415', '0553018801', '0', '0', '0', 24.54963864, 39.75427949, 0, 0, '00', '0000000000', '00', 0, '00', '2023-10-22', '4:54 PM', 'اليوزر لدى الموظف', 26, 12, 1, '2023-10-22 16:54:08', '2023-10-22 16:54:08'),
(13878, 'Pos_003796', '05', '200', '0', '0', 17.15115561, 42.64433505, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-22', '4:56 PM', 'تم حث العميل على التفعيل', 28, 11, 1, '2023-10-22 16:56:22', '2023-10-22 16:56:22'),
(13879, 'Pos_009185', '0571127624', '228', '51', '0', 24.08390910, 38.05816020, 0, 0, '0000000000', '0000000000', '00000000000', 0, '00000000000', '2023-10-22', '5:05 PM', 'اليوزر يحتاج ربط منافذ وربط السجل', 27, 12, 1, '2023-10-22 17:05:34', '2023-10-22 17:05:34'),
(13880, 'Pos_001129', '0536991112', '340', '10', '2', 17.54216869, 44.22265569, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-22', '5:10 PM', 'لايوجد', 19, 10, 1, '2023-10-22 17:10:35', '2023-10-22 17:10:35'),
(13881, 'Pos_001254', '05', '300', '0', '0', 17.15174733, 42.64338127, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-22', '5:22 PM', 'تم حث العميل على التفعيل وضرورة تنشيط اليوزر', 28, 11, 1, '2023-10-22 17:22:11', '2023-10-22 17:22:11'),
(13882, 'Pos_002219', '05', '1500', '65', '1', 21.45922730, 39.20885960, 0, 0, '000000000', '0000000000', '00000000000', 0, '00000000', '2023-10-22', '5:36 PM', 'تم زياره عميل ويوزر فعال', 11, 8, 1, '2023-10-22 17:36:45', '2023-10-22 17:36:45'),
(13883, 'Pos_008185', '0553016308', '338', '40', '0', 24.08338650, 38.05817280, 0, 0, '0000000000', '0000000000', '00000000000', 0, '00000000000', '2023-10-22', '5:37 PM', 'اليوزر لايعمل يحتاج ربط للسجل التجاري وتحديث بيانات في منافذ وصاحب اليوزر غير متواجد', 27, 12, 1, '2023-10-22 17:37:11', '2023-10-22 17:37:11'),
(13884, 'Pos_007444', '0555392255', '300', '15', '1', 17.54286517, 44.22427464, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-22', '5:39 PM', 'لايوجد', 19, 10, 1, '2023-10-22 17:39:04', '2023-10-22 17:39:04'),
(13885, 'Pos_001740', '0558798553', '187', '55', '0', 24.08334440, 38.05586150, 0, 0, '0000000000', '0000000000', '00000000000', 0, '00000000000', '2023-10-22', '5:44 PM', 'لايوجد ملاحظات', 27, 12, 1, '2023-10-22 17:44:04', '2023-10-22 17:44:04'),
(13886, 'Pos_001482', '0000000000', '725', '90', '0', 21.75623230, 39.18521170, 0, 0, '0000000000', '0000000000', '0000000000', 0, '0000000000', '2023-10-22', '5:49 PM', 'تم زيارة العميل و اليوزر فعال ولا يوجد ملاحظات', 12, 8, 1, '2023-10-22 17:49:17', '2023-10-22 17:49:17'),
(13887, 'Pos_007262', '0532062919', '118', '40', '0', 24.08310710, 38.05557840, 0, 0, '0000000000', '0000000000', '00000000000', 0, '00000000000', '2023-10-22', '6:07 PM', 'المحل مغلق اليوم', 27, 12, 1, '2023-10-22 18:07:32', '2023-10-22 18:07:32'),
(13888, 'Pos_010413', '0562908042', '229', '45', '0', 24.55091511, 39.75333500, 0, 0, '00', '0000000000', '00', 0, '00', '2023-10-22', '6:12 PM', 'لا يوجد', 26, 12, 1, '2023-10-22 18:12:13', '2023-10-22 18:12:13'),
(13889, 'Pos_008244', '0532263442', '277', '21', '0', 24.08436790, 38.05616990, 0, 0, '0000000000', '0000000000', '00000000000', 0, '00000000000', '2023-10-22', '6:17 PM', 'صاحب اليوزر غير متواجد وغير مهتم لي شرائح سلام', 27, 12, 1, '2023-10-22 18:17:47', '2023-10-22 18:17:47'),
(13890, 'Pos_003581', '0540051936', '0', '0', '0', 24.55102675, 39.75320094, 0, 0, '00', '0000000000', '00', 0, '00', '2023-10-22', '6:32 PM', 'اليوزر لدى المالك', 26, 12, 1, '2023-10-22 18:32:01', '2023-10-22 18:32:01'),
(13891, 'Pos_008188', '0509934505', '254', '45', '0', 24.08480340, 38.05587870, 0, 0, '0000000000', '0000000000', '00000000000', 0, '00000000000', '2023-10-22', '6:33 PM', 'لم يتم فتح اليوزر بسبب بصمة الوجهه وصاحبة اليوزر امرأة كبيرة بالسن لم تعرف لي نفاذ', 27, 12, 1, '2023-10-22 18:33:15', '2023-10-22 18:33:15'),
(13892, 'Pos_006259', '0000000000', '666', '50', '0', 21.75280510, 39.18653860, 0, 0, '0000000000', '0000000000', '0000000000', 0, '0000000000', '2023-10-22', '6:36 PM', 'تم زيارة العميل و اليوزر فعال ولا يوجد ملاحظات', 12, 8, 1, '2023-10-22 18:36:13', '2023-10-22 18:36:13'),
(13893, 'Pos_001429', '0548141552', '200', '15', '0', 24.53941759, 39.68522185, 0, 0, '00', '0000000000', '00', 0, '00', '2023-10-22', '6:49 PM', 'لا يوجد', 26, 12, 1, '2023-10-22 18:49:02', '2023-10-22 18:49:02'),
(13894, 'POS_010262', '0000000000', '0', '0', '0', 21.72930500, 39.20578340, 0, 0, '0000000000', '0000000000', '0000000000', 0, '0000000000', '2023-10-22', '6:54 PM', 'تم زيارة العميل و اليوزر مقفل بسبب المفوض لم يفتح اليوزر للبائع', 12, 8, 1, '2023-10-22 18:54:46', '2023-10-22 18:54:46'),
(13895, 'POS_009457', '0000000000', '0', '0', '0', 21.72930540, 39.20578380, 0, 0, '0000000000', '0000000000', '0000000000', 0, '0000000000', '2023-10-22', '6:59 PM', 'تم زيارة العميل و اليوزر مقفل بسبب المفوض لم يفتح اليوزر بالنفاذ ببصمه الوجه', 12, 8, 1, '2023-10-22 18:59:00', '2023-10-22 18:59:00'),
(13896, 'Pos_009510', '05', '88', '10', '0', 18.21676695, 42.50021060, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-22', '7:02 PM', 'لايوجد', 22, 10, 1, '2023-10-22 19:02:49', '2023-10-22 19:02:49'),
(13897, 'Pos_006720', '05', '228', '15', '0', 18.21686348, 42.50051152, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-22', '7:03 PM', 'لايوجد', 22, 10, 1, '2023-10-22 19:03:11', '2023-10-22 19:03:11'),
(13898, 'Pos_003003', '05', '210', '17', '0', 18.21700281, 42.50061908, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-22', '7:03 PM', 'لايوجد', 22, 10, 1, '2023-10-22 19:03:32', '2023-10-22 19:03:32'),
(13899, 'Pos_006716', '05', '215', '13', '0', 18.21696364, 42.50082768, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-22', '7:03 PM', 'لايوجد', 22, 10, 1, '2023-10-22 19:03:55', '2023-10-22 19:03:55'),
(13900, 'Pos_006680', '05', '155', '10', '0', 18.21669879, 42.50098698, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-22', '7:04 PM', 'لايوجد', 22, 10, 1, '2023-10-22 19:04:13', '2023-10-22 19:04:13'),
(13901, 'Pos_009420', '05', '327', '15', '0', 18.21653983, 42.50125028, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-22', '7:04 PM', 'لايوجد', 22, 10, 1, '2023-10-22 19:04:43', '2023-10-22 19:04:43'),
(13902, 'Pos_010680', '0000000000', '0', '0', '0', 21.72912770, 39.20486220, 0, 0, '0000000000', '0000000000', '0000000000', 0, '0000000000', '2023-10-22', '7:06 PM', 'تم زيارة العميل و اليوزر مقفل بسبب المفوض لم يفتح اليوزر', 12, 8, 1, '2023-10-22 19:06:46', '2023-10-22 19:06:46'),
(13903, 'Pos_003484', '0531447242', '280', '10', '0', 17.53524413, 44.21251112, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-22', '7:27 PM', 'لايوجد', 19, 10, 1, '2023-10-22 19:27:05', '2023-10-22 19:27:05'),
(13904, 'Pos_009284', '05', '1800', '60', '0', 21.48147280, 39.18377210, 0, 0, '000000000', '0000000000', '00000000000', 0, '00000000', '2023-10-22', '7:32 PM', 'تم زياره عميل ويوزر لا يعمل. سبب مفوض لا يرغب بصمه وجه.', 11, 8, 1, '2023-10-22 19:32:35', '2023-10-22 19:32:35'),
(13905, 'Pos_001592', '05', '1000', '55', '0', 21.48090730, 39.18419810, 0, 0, '000000000', '0000000000', '00000000000', 0, '00000000', '2023-10-22', '7:37 PM', 'تم زياره عميل ويوزر لا يعمل سبب خروج مفاجاه', 11, 8, 1, '2023-10-22 19:37:33', '2023-10-22 19:37:33'),
(13906, 'Pos_008187', '0596825421', '286', '55', '0', 24.08494220, 38.05687100, 0, 0, '0000000000', '0000000000', '00000000000', 0, '00000000000', '2023-10-22', '7:40 PM', 'لايوجد ملاحظات', 27, 12, 1, '2023-10-22 19:40:27', '2023-10-22 19:40:27'),
(13907, 'Pos_002270', '0552988778', '136', '58', '2', 24.08487470, 38.05663520, 0, 0, '0000000000', '0000000000', '00000000000', 0, '00000000000', '2023-10-22', '7:45 PM', 'لايوجد ملاحظات', 27, 12, 1, '2023-10-22 19:45:46', '2023-10-22 19:45:46'),
(13908, 'Pos_001575', '0575440771', '318', '56', '0', 24.53932438, 39.68593379, 0, 0, '00', '0000000000', '00', 0, '00', '2023-10-22', '7:49 PM', 'لا يوجد', 26, 12, 1, '2023-10-22 19:49:20', '2023-10-22 19:49:20'),
(13909, 'Pos_006397', '0000000000', '379', '50', '0', 21.75287770, 39.18638400, 0, 0, '0000000000', '0000000000', '0000000000', 0, '0000000000', '2023-10-22', '7:53 PM', 'تم زيارة العميل و اليوزر فعال ولا يوجد ملاحظات', 12, 8, 1, '2023-10-22 19:53:30', '2023-10-22 19:53:30'),
(13910, 'Pos_002273', '0508124467', '355', '55', '2', 24.08503080, 38.05633110, 0, 0, '0000000000', '0000000000', '00000000000', 0, '00000000000', '2023-10-22', '7:54 PM', 'لايوجد ملاحظات وتم تزويد العميل بشرائح', 27, 12, 1, '2023-10-22 19:54:23', '2023-10-22 19:54:23'),
(13911, 'Pos_010497', '05', '3000', '85', '2', 21.48126210, 39.18400430, 0, 0, '000000000', '0000000000', '00000000000', 0, '00000000', '2023-10-22', '7:54 PM', 'تم زياره عميل ويوزر فعال', 11, 8, 1, '2023-10-22 19:54:53', '2023-10-22 19:54:53'),
(13912, 'Pos_006375', '05', '200', '0', '0', 17.15100540, 42.64433078, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-22', '7:55 PM', 'تم الجلوس مع التاجر وحثة على تنشيط اليوزر والتفعيل المستمر', 28, 11, 1, '2023-10-22 19:55:53', '2023-10-22 19:55:53'),
(13913, 'Pos_002775', '05', '685', '35', '0', 21.48120510, 39.18381810, 0, 0, '000000000', '0000000000', '00000000000', 0, '00000000', '2023-10-22', '7:58 PM', 'تم زياره عميل ويوزر فعال', 11, 8, 1, '2023-10-22 19:58:19', '2023-10-22 19:58:19'),
(13914, 'Pos_003085', '05', '550', '33', '0', 21.48133850, 39.18393400, 0, 0, '000000000', '0000000000', '00000000000', 0, '00000000', '2023-10-22', '8:03 PM', 'تم زياره عميل ويوزر يعمل. وعميل يشتكي من خروج مفاجاه من يوزر. ما اشتغل حتي نصف. ساعه. و عميل يرغب. فيه حل. خروج. هام جدا.', 11, 8, 1, '2023-10-22 20:03:35', '2023-10-22 20:03:35'),
(13915, 'Pos_007005', '0502573273', '420', '55', '0', 24.08503080, 38.05633110, 0, 0, '0000000000', '0000000000', '00000000000', 0, '00000000000', '2023-10-22', '8:06 PM', 'لايوجد ملاحظات', 27, 12, 1, '2023-10-22 20:06:42', '2023-10-22 20:06:42'),
(13916, 'Pos_003750', '05', '630', '30', '0', 21.48132400, 39.18402490, 0, 0, '000000000', '0000000000', '00000000000', 0, '00000000', '2023-10-22', '8:12 PM', 'تم زياره عميل ويوزر فعال', 11, 8, 1, '2023-10-22 20:12:35', '2023-10-22 20:12:35'),
(13917, 'Pos_006213', '05', '176', '11', '0', 18.30644943, 42.71497146, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-22', '8:20 PM', 'لا يوجد', 18, 10, 1, '2023-10-22 20:20:14', '2023-10-22 20:20:14'),
(13918, 'Pos_007442', '05', '140', '18', '0', 18.30602545, 42.71555330, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-22', '8:20 PM', 'لا يوجد', 18, 10, 1, '2023-10-22 20:20:56', '2023-10-22 20:20:56'),
(13919, 'Pos_001278', '05', '1870', '28', '3', 18.30164546, 42.71722992, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-22', '8:21 PM', 'لا يوجد', 18, 10, 1, '2023-10-22 20:21:28', '2023-10-22 20:21:28'),
(13920, 'Pos_008253', '0566808687', '191', '15', '1', 24.46882176, 39.59638596, 0, 0, '00', '0000000000', '00', 0, '00', '2023-10-22', '8:22 PM', 'لا يوجد', 26, 12, 1, '2023-10-22 20:22:33', '2023-10-22 20:22:33'),
(13921, 'Pos_001202', '0536400088', '201', '16', '0', 24.08495160, 38.05656640, 0, 0, '0000000000', '0000000000', '00000000000', 0, '00000000000', '2023-10-22', '8:24 PM', 'لايوجد ملاحظات', 27, 12, 1, '2023-10-22 20:24:02', '2023-10-22 20:24:02'),
(13922, 'Pos_003230', '0565651660', '70', '45', '2', 24.46920113, 39.59603180, 0, 0, '00', '0000000000', '00', 0, '00', '2023-10-22', '8:37 PM', 'لا يوجد', 26, 12, 1, '2023-10-22 20:37:00', '2023-10-22 20:37:00'),
(13923, 'Pos_003323', '05', '176', '22', '0', 18.30025434, 42.72286728, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-22', '8:37 PM', 'لا يوجد', 18, 10, 1, '2023-10-22 20:37:35', '2023-10-22 20:37:35'),
(13924, 'Pos_008240', '05', '170', '11', '0', 18.30022415, 42.72273962, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-22', '8:38 PM', 'لا يوجد', 18, 10, 1, '2023-10-22 20:38:10', '2023-10-22 20:38:10'),
(13925, 'Pos_009206', '05', '932', '69', '0', 21.48264790, 39.18339430, 0, 0, '000000000', '0000000000', '00000000000', 0, '00000000', '2023-10-22', '8:39 PM', 'تم زياره عميل ويوزر فعال', 11, 8, 1, '2023-10-22 20:39:03', '2023-10-22 20:39:03'),
(13926, 'Pos_009206', '05', '932', '69', '0', 21.48264790, 39.18339430, 0, 0, '000000000', '0000000000', '00000000000', 0, '00000000', '2023-10-22', '8:39 PM', 'تم زياره عميل ويوزر فعال', 11, 8, 1, '2023-10-22 20:39:17', '2023-10-22 20:39:17'),
(13927, 'Pos_009206', '05', '932', '69', '0', 21.48264790, 39.18339430, 0, 0, '000000000', '0000000000', '00000000000', 0, '00000000', '2023-10-22', '8:39 PM', 'تم زياره عميل ويوزر فعال', 11, 8, 1, '2023-10-22 20:39:18', '2023-10-22 20:39:18'),
(13928, 'Pos_009206', '05', '932', '69', '0', 21.48264790, 39.18339430, 0, 0, '000000000', '0000000000', '00000000000', 0, '00000000', '2023-10-22', '8:40 PM', 'تم زياره عميل ويوزر فعال', 11, 8, 1, '2023-10-22 20:40:33', '2023-10-22 20:40:33'),
(13929, 'Pos_001596', '05', '438', '33', '0', 21.48566690, 39.18214150, 0, 0, '000000000', '0000000000', '00000000000', 0, '00000000', '2023-10-22', '8:50 PM', 'تم زياره عميل ويوزر فعال', 11, 8, 1, '2023-10-22 20:50:39', '2023-10-22 20:50:39'),
(13930, 'POS_006595', '0000000000', '0', '0', '0', 21.76314000, 39.22307690, 0, 0, '0000000000', '0000000000', '0000000000', 0, '0000000000', '2023-10-22', '8:53 PM', 'تم زيارة العميل و اليوزر مقفل بسبب المفوض لم يفتح اليوزر', 12, 8, 1, '2023-10-22 20:53:56', '2023-10-22 20:53:56'),
(13931, 'Pos_007324', '0501809801', '863', '54', '0', 24.08492830, 38.05699880, 0, 0, '0000000000', '0000000000', '00000000000', 0, '00000000000', '2023-10-22', '8:56 PM', 'لايوجد ملاحظات', 27, 12, 1, '2023-10-22 20:56:22', '2023-10-22 20:56:22'),
(13932, 'Pos_009295', '05', '880', '40', '0', 21.48595950, 39.18282980, 0, 0, '000000000', '0000000000', '00000000000', 0, '00000000', '2023-10-22', '8:56 PM', 'تم زياره عميل ويوزر فعال عميل يشتكي من تحويل خروج مفاجاه ويرغب بي حل.', 11, 8, 1, '2023-10-22 20:56:56', '2023-10-22 20:56:56'),
(13933, 'Pos_123456', '0115206727', '123', '20', NULL, 29.90850090, 31.29323790, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-22', '10:25 PM', NULL, 20, 11, 1, '2023-10-23 05:25:50', '2023-10-23 05:25:50'),
(13934, 'Pos_123450', '0115206727', '12345', '20', NULL, 30.04441960, 31.23571160, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-22', '10:26 PM', NULL, 20, 11, 1, '2023-10-23 05:26:54', '2023-10-23 05:26:54'),
(13935, 'Pos_123456', '0115206727', '12321', '20', NULL, 30.04441960, 31.23571160, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-23', '12:30 AM', NULL, 20, 11, 1, '2023-10-23 07:30:43', '2023-10-23 07:30:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `agents_email_unique` (`email`),
  ADD KEY `agents_manager_id_foreign` (`manager_id`);

--
-- Indexes for table `exporters`
--
ALTER TABLE `exporters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extractors`
--
ALTER TABLE `extractors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `importers`
--
ALTER TABLE `importers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurances`
--
ALTER TABLE `insurances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `managers_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_vistors_managers`
--
ALTER TABLE `my_vistors_managers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `my_vistors_managers_manager_id_foreign` (`manager_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vistors`
--
ALTER TABLE `vistors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vistors_agent_id_foreign` (`Agent_id`),
  ADD KEY `vistors_manager_id_foreign` (`manager_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `exporters`
--
ALTER TABLE `exporters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `extractors`
--
ALTER TABLE `extractors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `importers`
--
ALTER TABLE `importers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `insurances`
--
ALTER TABLE `insurances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `my_vistors_managers`
--
ALTER TABLE `my_vistors_managers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1005;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vistors`
--
ALTER TABLE `vistors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13936;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agents`
--
ALTER TABLE `agents`
  ADD CONSTRAINT `agents_manager_id_foreign` FOREIGN KEY (`manager_id`) REFERENCES `managers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `my_vistors_managers`
--
ALTER TABLE `my_vistors_managers`
  ADD CONSTRAINT `my_vistors_managers_manager_id_foreign` FOREIGN KEY (`manager_id`) REFERENCES `managers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vistors`
--
ALTER TABLE `vistors`
  ADD CONSTRAINT `vistors_agent_id_foreign` FOREIGN KEY (`Agent_id`) REFERENCES `agents` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vistors_manager_id_foreign` FOREIGN KEY (`manager_id`) REFERENCES `managers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
