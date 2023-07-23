-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 23, 2023 at 03:52 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `all_in_one`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `slug`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Lynch-Farrell', 'lynch-farrell', '1911 Kylee Springs Suite 074\nWest Winnifredfurt, CO 00133', '2023-07-17 09:13:03', '2023-07-17 09:13:03'),
(2, 'Gorczany LLC', 'gorczany-llc', '63836 Dan Summit\nDillanfort, DE 10726-2945', '2023-07-17 09:13:03', '2023-07-17 09:13:03'),
(3, 'Walker, Welch and Roob', 'walker-welch-and-roob', '64174 Philip Passage\nBrekkechester, WY 01868', '2023-07-17 09:13:03', '2023-07-17 09:13:03'),
(4, 'Cruickshank Group', 'cruickshank-group', '8040 Kuhn Meadows\nBeattyside, GA 46515-5015', '2023-07-17 09:13:03', '2023-07-17 09:13:03'),
(5, 'Torp, Feil and Kuhic', 'torp-feil-and-kuhic', '5015 Herman Ville Suite 373\nPort Gregoriaport, WA 38998', '2023-07-17 09:13:03', '2023-07-17 09:13:03'),
(6, 'Pfannerstill LLC', 'pfannerstill-llc', '91760 Anderson Port Apt. 673\nPort Alicia, WV 95830', '2023-07-17 09:13:03', '2023-07-17 09:13:03'),
(7, 'Rath, Batz and Jast', 'rath-batz-and-jast', '80119 Zemlak Roads\nRobinton, NE 03131-5248', '2023-07-17 09:13:03', '2023-07-17 09:13:03'),
(8, 'Lebsack-Nader', 'lebsack-nader', '6597 Christiansen Spring\nOberbrunnerhaven, SC 80450', '2023-07-17 09:13:03', '2023-07-17 09:13:03'),
(9, 'Streich, Sawayn and Heller', 'streich-sawayn-and-heller', '91645 Schroeder Forest Suite 875\nPort Susanaview, FL 15476', '2023-07-17 09:13:04', '2023-07-17 09:13:04'),
(10, 'Walter-Borer', 'walter-borer', '45842 O\'Reilly Spurs\nWest Edenmouth, WI 58635', '2023-07-17 09:13:04', '2023-07-17 09:13:04');

-- --------------------------------------------------------

--
-- Table structure for table `client_contacts`
--

CREATE TABLE `client_contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` bigint UNSIGNED NOT NULL,
  `contact_person` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_contacts`
--

INSERT INTO `client_contacts` (`id`, `client_id`, `contact_person`, `email`, `phone_1`, `phone_2`, `created_at`, `updated_at`) VALUES
(1, 1, 'Weldon Mueller', 'ckutch@gmail.com', '9819991147', '9855219698', '2023-07-17 09:13:04', '2023-07-17 09:13:04'),
(2, 1, 'Everardo Price', 'dorothea62@hotmail.com', '9814583389', '9881552583', '2023-07-17 09:13:04', '2023-07-17 09:13:04'),
(3, 2, 'Dr. Joan Krajcik IV', 'skiles.sister@hotmail.com', '9851033442', '9825177885', '2023-07-17 09:13:04', '2023-07-17 09:13:04'),
(4, 2, 'Jade Osinski', 'marilou.cole@yahoo.com', '9816947560', '9885489208', '2023-07-17 09:13:04', '2023-07-17 09:13:04'),
(5, 3, 'Kara Fadel I', 'jaiden.hammes@gmail.com', '9814224108', '9878288620', '2023-07-17 09:13:04', '2023-07-17 09:13:04'),
(6, 3, 'Isabel Durgan', 'cruz47@gleichner.com', '9841278188', '9847613898', '2023-07-17 09:13:04', '2023-07-17 09:13:04'),
(7, 4, 'Florence Schmeler', 'rodger.shields@hirthe.com', '9847555070', '9897511543', '2023-07-17 09:13:04', '2023-07-17 09:13:04'),
(8, 4, 'Ms. Lexi Denesik', 'zieme.amaya@hills.org', '9858447498', '9819073325', '2023-07-17 09:13:04', '2023-07-17 09:13:04'),
(9, 5, 'Waldo Jacobs', 'rickie.haag@yahoo.com', '9854417403', '9844189922', '2023-07-17 09:13:04', '2023-07-17 09:13:04'),
(10, 5, 'Nyasia Grant', 'patience31@yahoo.com', '9858885100', '9821294779', '2023-07-17 09:13:04', '2023-07-17 09:13:04'),
(11, 6, 'Devonte Brakus', 'turcotte.devin@senger.net', '9861503875', '9866630865', '2023-07-17 09:13:04', '2023-07-17 09:13:04'),
(12, 6, 'Darrel Hilpert', 'leta02@bins.info', '9861002239', '9844591033', '2023-07-17 09:13:04', '2023-07-17 09:13:04'),
(13, 7, 'Melisa Feest', 'qhintz@hotmail.com', '9844382087', '9873519075', '2023-07-17 09:13:04', '2023-07-17 09:13:04'),
(14, 7, 'Sadie Gibson', 'dandre23@harvey.com', '9845502160', '9823009360', '2023-07-17 09:13:04', '2023-07-17 09:13:04'),
(15, 8, 'Maximillian McDermott', 'cornell68@hotmail.com', '9870683928', '9895416165', '2023-07-17 09:13:04', '2023-07-17 09:13:04'),
(16, 8, 'Meggie Borer', 'prudence.strosin@mitchell.net', '9867927649', '9834226285', '2023-07-17 09:13:04', '2023-07-17 09:13:04'),
(17, 9, 'Sigrid Hansen PhD', 'elbert.nolan@collins.biz', '9856781431', '9890797166', '2023-07-17 09:13:04', '2023-07-17 09:13:04'),
(18, 9, 'Miss Emma Morar Jr.', 'reba.flatley@murazik.biz', '9871659186', '9855132248', '2023-07-17 09:13:04', '2023-07-17 09:13:04'),
(19, 10, 'Deonte Balistreri', 'tevin.jerde@klein.info', '9855405309', '9898334703', '2023-07-17 09:13:04', '2023-07-17 09:13:04'),
(20, 10, 'Jeffry Lind', 'cschumm@hotmail.com', '9833740448', '9884007839', '2023-07-17 09:13:04', '2023-07-17 09:13:04');

-- --------------------------------------------------------

--
-- Table structure for table `employee_reportings`
--

CREATE TABLE `employee_reportings` (
  `id` bigint UNSIGNED NOT NULL,
  `manager_id` bigint UNSIGNED NOT NULL,
  `employee_id` bigint UNSIGNED NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint UNSIGNED NOT NULL,
  `manipulations` json NOT NULL,
  `custom_properties` json NOT NULL,
  `generated_conversions` json NOT NULL,
  `responsive_images` json NOT NULL,
  `order_column` int UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(2, 'App\\Models\\User', 3, 'd02a2244-33b0-4565-8d6d-424adbdb82cf', 'avatar', 'INrVtI3vr9ugYLmOpACsMJtHiZ82qK-metaMS5wbmc=-', 'INrVtI3vr9ugYLmOpACsMJtHiZ82qK-metaMS5wbmc=-.png', 'image/png', 'public', 'public', 81609, '[]', '[]', '{\"card\": true, \"thumb\": true}', '[]', 1, '2023-07-14 19:39:27', '2023-07-14 19:39:27'),
(3, 'App\\Models\\User', 4, 'c855f995-20b6-4f69-b7fd-2257302be361', 'avatar', 'iSy0KANJby76wSHsGyzuMz9VI0Nslw-metacHJvZmlsZS5qcGc=-', 'iSy0KANJby76wSHsGyzuMz9VI0Nslw-metacHJvZmlsZS5qcGc=-.jpg', 'image/jpeg', 'public', 'public', 18609, '[]', '[]', '{\"card\": true, \"thumb\": true}', '[]', 1, '2023-07-15 16:16:02', '2023-07-15 16:16:03'),
(10, 'App\\Models\\User', 2, 'e04fce0d-f690-47be-bb47-ebae19123ed7', 'avatar', '2', '2.jpg', 'image/jpeg', 'public', 'public', 153992, '[]', '[]', '{\"card\": true, \"thumb\": true}', '[]', 1, '2023-07-17 01:29:55', '2023-07-17 01:29:56');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_12_171142_create_media_table', 2),
(6, '2023_07_12_175429_add_phone_to_users', 3),
(7, '2023_07_12_180444_create_user_types_table', 4),
(8, '2023_07_12_181313_create_user_details_table', 4),
(9, '2023_07_14_214602_create_permission_tables', 5),
(10, '2023_07_14_215138_add_fields_to_user_details', 6),
(11, '2023_07_17_141506_create_clients_table', 7),
(12, '2023_07_17_141619_create_client_contacts_table', 7),
(13, '2023_07_17_142024_add_slug_to_clients', 8),
(14, '2023_07_17_145407_create_employee_reportings_table', 9),
(15, '2023_07_22_150943_create_projects_table', 10),
(16, '2023_07_22_155734_create_user_project_maps_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3),
(3, 'App\\Models\\User', 4),
(3, 'App\\Models\\User', 5),
(2, 'App\\Models\\User', 46),
(1, 'App\\Models\\User', 47),
(1, 'App\\Models\\User', 48),
(3, 'App\\Models\\User', 49),
(1, 'App\\Models\\User', 50),
(2, 'App\\Models\\User', 51),
(2, 'App\\Models\\User', 52),
(2, 'App\\Models\\User', 53),
(3, 'App\\Models\\User', 54),
(2, 'App\\Models\\User', 55),
(1, 'App\\Models\\User', 56),
(2, 'App\\Models\\User', 57),
(1, 'App\\Models\\User', 58),
(2, 'App\\Models\\User', 59),
(1, 'App\\Models\\User', 60),
(3, 'App\\Models\\User', 61),
(1, 'App\\Models\\User', 62),
(2, 'App\\Models\\User', 63),
(2, 'App\\Models\\User', 64),
(1, 'App\\Models\\User', 65),
(2, 'App\\Models\\User', 66),
(3, 'App\\Models\\User', 67),
(3, 'App\\Models\\User', 68),
(2, 'App\\Models\\User', 69),
(2, 'App\\Models\\User', 70),
(1, 'App\\Models\\User', 71),
(3, 'App\\Models\\User', 72),
(3, 'App\\Models\\User', 73),
(3, 'App\\Models\\User', 74),
(3, 'App\\Models\\User', 75),
(1, 'App\\Models\\User', 76),
(1, 'App\\Models\\User', 77),
(1, 'App\\Models\\User', 78),
(2, 'App\\Models\\User', 79),
(2, 'App\\Models\\User', 80),
(3, 'App\\Models\\User', 81),
(1, 'App\\Models\\User', 82),
(3, 'App\\Models\\User', 83),
(2, 'App\\Models\\User', 84),
(2, 'App\\Models\\User', 85);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` bigint UNSIGNED NOT NULL,
  `project_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `client_id`, `project_name`, `slug`, `start_date`, `created_at`, `updated_at`) VALUES
(1, 2, 'Prosacco, Lang and Abernathy App', 'prosacco-lang-and-abernathy-app', '2009-12-14', '2023-07-22 09:54:24', '2023-07-22 09:54:24'),
(2, 2, 'Green, Schroeder and Murray App', 'green-schroeder-and-murray-app', '1999-07-27', '2023-07-22 09:54:24', '2023-07-22 09:54:24'),
(3, 8, 'Schamberger LLC App', 'schamberger-llc-app', '1988-05-17', '2023-07-22 09:54:24', '2023-07-22 09:54:24'),
(4, 1, 'DuBuque-Dietrich App', 'dubuque-dietrich-app', '1970-12-13', '2023-07-22 09:54:24', '2023-07-22 09:54:24'),
(5, 10, 'Leuschke-Carter App', 'leuschke-carter-app', '2002-10-30', '2023-07-22 09:54:24', '2023-07-22 09:54:24'),
(6, 4, 'Rolfson Group App', 'rolfson-group-app', '1989-04-15', '2023-07-22 09:54:24', '2023-07-22 09:54:24'),
(7, 8, 'Hodkiewicz Inc App', 'hodkiewicz-inc-app', '2006-03-14', '2023-07-22 09:54:24', '2023-07-22 09:54:24'),
(8, 2, 'Von Group App', 'von-group-app', '2012-01-18', '2023-07-22 09:54:24', '2023-07-22 09:54:24'),
(9, 9, 'Rutherford PLC App', 'rutherford-plc-app', '2015-01-16', '2023-07-22 09:54:24', '2023-07-22 09:54:24'),
(10, 7, 'Murray Ltd App', 'murray-ltd-app', '1991-09-17', '2023-07-22 09:54:24', '2023-07-22 09:54:24'),
(11, 5, 'Mraz-Marquardt App', 'mraz-marquardt-app', '2011-04-24', '2023-07-22 09:54:24', '2023-07-22 09:54:24'),
(12, 1, 'Eichmann, Halvorson and Franecki App', 'eichmann-halvorson-and-franecki-app', '1984-02-06', '2023-07-22 09:54:24', '2023-07-22 09:54:24'),
(13, 6, 'O\'Hara, Marks and Bartoletti App', 'ohara-marks-and-bartoletti-app', '2014-02-07', '2023-07-22 09:54:24', '2023-07-22 09:54:24'),
(14, 9, 'Little, Will and Little App', 'little-will-and-little-app', '2001-06-07', '2023-07-22 09:54:24', '2023-07-22 09:54:24'),
(15, 10, 'Waelchi, Connelly and Schumm App', 'waelchi-connelly-and-schumm-app', '1997-02-04', '2023-07-22 09:54:24', '2023-07-22 09:54:24'),
(16, 10, 'Hane, Kuhic and McKenzie App', 'hane-kuhic-and-mckenzie-app', '1970-10-18', '2023-07-22 09:54:24', '2023-07-22 09:54:24'),
(17, 6, 'Bayer, Dooley and Bayer App', 'bayer-dooley-and-bayer-app', '1990-01-29', '2023-07-22 09:54:24', '2023-07-22 09:54:24'),
(18, 1, 'Huels, Will and Hayes App', 'huels-will-and-hayes-app', '1977-05-01', '2023-07-22 09:54:24', '2023-07-22 09:54:24'),
(19, 9, 'Sipes LLC App', 'sipes-llc-app', '1984-02-13', '2023-07-22 09:54:24', '2023-07-22 09:54:24'),
(20, 5, 'Torphy-Schroeder App', 'torphy-schroeder-app', '1992-12-24', '2023-07-22 09:54:24', '2023-07-22 09:54:24'),
(21, 10, 'Greenfelder and Sons App', 'greenfelder-and-sons-app', '1984-09-21', '2023-07-22 09:54:24', '2023-07-22 09:54:24'),
(22, 2, 'Sporer, Stracke and Huel App', 'sporer-stracke-and-huel-app', '2000-02-10', '2023-07-22 09:54:24', '2023-07-22 09:54:24'),
(23, 4, 'Morissette, Stracke and Schulist App', 'morissette-stracke-and-schulist-app', '1995-10-20', '2023-07-22 09:54:25', '2023-07-22 09:54:25'),
(24, 4, 'Homenick, Bruen and Dickinson App', 'homenick-bruen-and-dickinson-app', '2003-11-12', '2023-07-22 09:54:25', '2023-07-22 09:54:25'),
(25, 10, 'Baumbach-Larkin App', 'baumbach-larkin-app', '1994-04-28', '2023-07-22 09:54:25', '2023-07-22 09:54:25'),
(26, 1, 'Steuber Ltd App', 'steuber-ltd-app', '2000-12-03', '2023-07-22 09:54:25', '2023-07-22 09:54:25'),
(27, 7, 'Sporer, Gutmann and Crist App', 'sporer-gutmann-and-crist-app', '1979-08-04', '2023-07-22 09:54:25', '2023-07-22 09:54:25'),
(28, 1, 'Predovic-Ferry App', 'predovic-ferry-app', '1986-09-04', '2023-07-22 09:54:25', '2023-07-22 09:54:25'),
(29, 4, 'Hegmann and Sons App', 'hegmann-and-sons-app', '1999-05-06', '2023-07-22 09:54:25', '2023-07-22 09:54:25'),
(30, 2, 'Schaefer LLC App', 'schaefer-llc-app', '1998-06-01', '2023-07-22 09:54:25', '2023-07-22 09:54:25'),
(31, 5, 'Morar, Tromp and Jast App', 'morar-tromp-and-jast-app', '1998-01-31', '2023-07-22 09:54:25', '2023-07-22 09:54:25'),
(32, 5, 'Larson-Tremblay App', 'larson-tremblay-app', '1990-02-16', '2023-07-22 09:54:25', '2023-07-22 09:54:25'),
(33, 1, 'Legros, Sipes and Kerluke App', 'legros-sipes-and-kerluke-app', '2008-10-18', '2023-07-22 09:54:25', '2023-07-22 09:54:25'),
(34, 3, 'Boehm-Leffler App', 'boehm-leffler-app', '1986-03-22', '2023-07-22 09:54:25', '2023-07-22 09:54:25'),
(35, 3, 'Kris-Leffler App', 'kris-leffler-app', '2020-12-04', '2023-07-22 09:54:25', '2023-07-22 09:54:25'),
(36, 7, 'McKenzie-Prohaska App', 'mckenzie-prohaska-app', '2014-11-03', '2023-07-22 09:54:25', '2023-07-22 09:54:25'),
(37, 2, 'Huels LLC App', 'huels-llc-app', '1989-01-28', '2023-07-22 09:54:25', '2023-07-22 09:54:25'),
(38, 8, 'Hyatt-Wyman App', 'hyatt-wyman-app', '1993-05-31', '2023-07-22 09:54:25', '2023-07-22 09:54:25'),
(39, 1, 'Lemke-Von App', 'lemke-von-app', '2016-06-29', '2023-07-22 09:54:25', '2023-07-22 09:54:25'),
(40, 7, 'Mohr LLC App', 'mohr-llc-app', '1978-04-26', '2023-07-22 09:54:25', '2023-07-22 09:54:25'),
(41, 1, 'Jakubowski, Lueilwitz and Gislason App', 'jakubowski-lueilwitz-and-gislason-app', '1986-12-30', '2023-07-22 09:54:25', '2023-07-22 09:54:25'),
(42, 3, 'Carroll LLC App', 'carroll-llc-app', '1971-06-16', '2023-07-22 09:54:25', '2023-07-22 09:54:25'),
(43, 1, 'Kling-Abernathy App', 'kling-abernathy-app', '2000-04-06', '2023-07-22 09:54:25', '2023-07-22 09:54:25'),
(44, 10, 'Yost-Davis App', 'yost-davis-app', '1988-09-04', '2023-07-22 09:54:25', '2023-07-22 09:54:25'),
(45, 1, 'Bruen-Waters App', 'bruen-waters-app', '2013-06-22', '2023-07-22 09:54:25', '2023-07-22 09:54:25'),
(46, 2, 'Borer Ltd App', 'borer-ltd-app', '1988-09-02', '2023-07-22 09:54:25', '2023-07-22 09:54:25'),
(47, 5, 'Treutel-Witting App', 'treutel-witting-app', '1990-01-05', '2023-07-22 09:54:25', '2023-07-22 09:54:25'),
(48, 9, 'Carter, Torp and Mayert App', 'carter-torp-and-mayert-app', '1991-09-25', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(49, 2, 'Lind, Bosco and Schuster App', 'lind-bosco-and-schuster-app', '2015-10-03', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(50, 5, 'Watsica-Leffler App', 'watsica-leffler-app', '2021-08-23', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(51, 10, 'Lind Ltd App', 'lind-ltd-app', '2009-01-06', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(52, 9, 'Jacobson-Gibson App', 'jacobson-gibson-app', '2002-04-09', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(53, 3, 'Mosciski, Bednar and Padberg App', 'mosciski-bednar-and-padberg-app', '1998-09-11', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(54, 1, 'Robel, Little and Hyatt App', 'robel-little-and-hyatt-app', '1976-12-22', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(55, 9, 'Parisian-Gleason App', 'parisian-gleason-app', '1996-04-29', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(56, 9, 'Kuphal PLC App', 'kuphal-plc-app', '2001-10-30', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(57, 9, 'Franecki PLC App', 'franecki-plc-app', '1973-06-14', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(58, 7, 'Wilderman, Jaskolski and Grady App', 'wilderman-jaskolski-and-grady-app', '2019-06-27', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(59, 3, 'Thompson-Daugherty App', 'thompson-daugherty-app', '1972-03-01', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(60, 8, 'Metz-Rowe App', 'metz-rowe-app', '1975-10-29', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(61, 8, 'Littel-Casper App', 'littel-casper-app', '1976-01-04', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(62, 3, 'Gislason, Keebler and Schumm App', 'gislason-keebler-and-schumm-app', '2004-01-02', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(63, 3, 'Boyle-Bernier App', 'boyle-bernier-app', '1981-08-25', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(64, 4, 'Trantow-Gulgowski App', 'trantow-gulgowski-app', '1989-08-21', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(65, 1, 'Herzog and Sons App', 'herzog-and-sons-app', '1992-12-14', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(66, 8, 'Bradtke LLC App', 'bradtke-llc-app', '1984-11-07', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(67, 6, 'Huel Group App', 'huel-group-app', '2002-05-09', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(68, 3, 'Upton, Deckow and Adams App', 'upton-deckow-and-adams-app', '1982-02-18', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(69, 5, 'Harvey-Breitenberg App', 'harvey-breitenberg-app', '2022-03-31', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(70, 5, 'Toy-Bernier App', 'toy-bernier-app', '1977-06-06', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(71, 1, 'Cole LLC App', 'cole-llc-app', '1979-02-06', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(72, 2, 'Kuhlman, Sawayn and Fahey App', 'kuhlman-sawayn-and-fahey-app', '1988-10-29', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(73, 8, 'Lind PLC App', 'lind-plc-app', '1989-09-17', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(74, 8, 'Schuster Inc App', 'schuster-inc-app', '1977-05-20', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(75, 2, 'Kihn Group App', 'kihn-group-app', '1976-07-04', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(76, 3, 'Nicolas and Sons App', 'nicolas-and-sons-app', '2006-10-17', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(77, 3, 'Senger Inc App', 'senger-inc-app', '1988-12-21', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(78, 10, 'Brekke Inc App', 'brekke-inc-app', '1972-08-13', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(79, 8, 'Swaniawski and Sons App', 'swaniawski-and-sons-app', '2007-06-25', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(80, 8, 'Rath, Hamill and West App', 'rath-hamill-and-west-app', '1975-05-15', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(81, 8, 'Baumbach-Gorczany App', 'baumbach-gorczany-app', '2011-08-22', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(82, 3, 'Jenkins-Konopelski App', 'jenkins-konopelski-app', '2015-03-15', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(83, 3, 'Hettinger, Hirthe and Franecki App', 'hettinger-hirthe-and-franecki-app', '1985-12-20', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(84, 6, 'Towne Ltd App', 'towne-ltd-app', '2016-10-03', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(85, 3, 'Ebert-Wolf App', 'ebert-wolf-app', '2001-11-27', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(86, 2, 'Feest-Gottlieb App', 'feest-gottlieb-app', '1994-05-15', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(87, 6, 'Friesen, Kulas and Bogan App', 'friesen-kulas-and-bogan-app', '2010-08-15', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(88, 4, 'Cruickshank, Goyette and O\'Conner App', 'cruickshank-goyette-and-oconner-app', '2021-12-21', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(89, 9, 'Kassulke-Conn App', 'kassulke-conn-app', '1997-10-14', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(90, 10, 'Williamson-Littel App', 'williamson-littel-app', '2020-02-28', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(91, 1, 'Murphy and Sons App', 'murphy-and-sons-app', '1997-09-15', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(92, 8, 'Fritsch Inc App', 'fritsch-inc-app', '2016-08-20', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(93, 2, 'Luettgen Group App', 'luettgen-group-app', '1995-04-04', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(94, 7, 'Heller-Carroll App', 'heller-carroll-app', '1985-01-07', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(95, 1, 'Terry-Yundt App', 'terry-yundt-app', '1990-08-14', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(96, 6, 'Klein-Heathcote App', 'klein-heathcote-app', '1983-07-23', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(97, 9, 'Sanford Group App', 'sanford-group-app', '1987-10-01', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(98, 3, 'Bruen Ltd App', 'bruen-ltd-app', '1993-08-14', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(99, 8, 'Grant-Sanford App', 'grant-sanford-app', '2001-10-19', '2023-07-22 09:54:26', '2023-07-22 09:54:26'),
(100, 1, 'Schultz-Fadel App', 'schultz-fadel-app', '2021-03-08', '2023-07-22 09:54:26', '2023-07-22 09:54:26');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2023-07-14 16:20:42', '2023-07-14 16:20:42'),
(2, 'Manager', 'web', '2023-07-14 16:20:42', '2023-07-14 16:20:42'),
(3, 'Employee', 'web', '2023-07-14 16:20:42', '2023-07-14 16:20:42');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `phone`, `phone_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Souvik Nag', 'souvik@test.com', NULL, '9830098300', NULL, '$2y$10$/5rLOkH6HmVo9vh0EN2HjOCwCHMlkO2qkADAeuLW1yNNqN2SdGoWW', 'ZU4dDxzmqmyzFzjMZf7OmWF4VC85pWavmpZLZ8Bv8cHqhG6UpwaOBibrNDDl', '2023-07-14 17:42:11', '2023-07-19 16:55:10'),
(3, 'Rakesh Bairagi', 'rakesh@test.com', NULL, '9830098301', NULL, '$2y$10$KrR1GvjipAJ8HHyLFdeR3.dkCL7LiMoUXwlGTBRcTCVFNLZoK1BRG', 'NbCEgL5MdTF0RfmQDCd8G4mtm4tQvmfwb3w8l1T9OQYAFuFasaaFHTYW9tsP', '2023-07-14 19:39:27', '2023-07-14 19:39:27'),
(4, 'Anik Banerjee', 'anik@test.com', NULL, '9830098302', NULL, '$2y$10$S6uQ91zd.7gKoUHHp0.02uaBbdaviSUiv3eLQ1MvBidyujDV20LH.', NULL, '2023-07-15 16:16:02', '2023-07-15 16:16:02'),
(46, 'Nelson Nikolaus', 'dewayne30@example.org', '2023-07-17 08:11:50', NULL, NULL, '$2y$10$RkMQtldOlh2PX7jMcc.Y.OyOCTSQdVFCfOkyXAPw7t4YlPkfFx0hm', 'nXA1e2n0lX', '2023-07-17 08:11:50', '2023-07-17 08:11:50'),
(47, 'Friedrich Rempel IV', 'moises04@example.net', '2023-07-17 08:11:50', NULL, NULL, '$2y$10$qZG07pcpZY7X/ZY8f10TiO.CBReLChW0kAGisq7EsoLSDtPUp56Ie', 'wBiau08fHf', '2023-07-17 08:11:50', '2023-07-17 08:11:50'),
(49, 'Jany Rogahn III', 'beaulah38@example.org', '2023-07-17 08:11:50', NULL, NULL, '$2y$10$G5KOeDMZaeHymui1OzRpduEfhbD3UYK84UuNDJt0/JUljw2.2L3gC', 'lox5ueUnlG', '2023-07-17 08:11:50', '2023-07-17 08:11:50'),
(50, 'Mr. Jaden Olson', 'domingo.murphy@example.net', '2023-07-17 08:11:50', NULL, NULL, '$2y$10$wWGAquoAFOH8EafvjPES9OsX/Sh4dAvRo1XMUxliSGZyRCkTEwspG', 'LWM8Q3jsh8', '2023-07-17 08:11:50', '2023-07-17 08:11:50'),
(51, 'Lori Sawayn IV', 'carmela90@example.org', '2023-07-17 08:11:50', NULL, NULL, '$2y$10$h1dR7xlFoIqYntYfqUa9/e7J7HqjCttXqplEzByGAIHma2HvJeeAS', 'Tej4BkzUXU', '2023-07-17 08:11:51', '2023-07-17 08:11:51'),
(52, 'Ms. Alvera Powlowski', 'bins.arne@example.com', '2023-07-17 08:11:50', NULL, NULL, '$2y$10$2.Kl4UW9omrskhDJImAb5O698pIyhG3BJzRAmHBT8e1Y7K1jOl3fi', 'neLxa78HGL', '2023-07-17 08:11:51', '2023-07-17 08:11:51'),
(53, 'Bernita Lesch', 'glegros@example.org', '2023-07-17 08:11:50', NULL, NULL, '$2y$10$vNdPRJ.GKplmojFYJ/XcXeq9UuUfmn2Og.YAdScbLlvi6h3YrT5OO', '0TxTWPqM5o', '2023-07-17 08:11:51', '2023-07-17 08:11:51'),
(54, 'Myrtle Littel', 'brenden37@example.com', '2023-07-17 08:11:50', NULL, NULL, '$2y$10$8e1RFUCh5XoUE5CXsmExz.Y.ksNpFzYKH459CJhDZXnNMEZtvif9e', 'BmBp8SKtu5', '2023-07-17 08:11:51', '2023-07-17 08:11:51'),
(55, 'Rudy Swaniawski', 'hermann.lottie@example.org', '2023-07-17 08:11:50', NULL, NULL, '$2y$10$hovJoLo1n45DtReX5zBeHOp8FAz4BnV4.OM8l/waufQqJrAcr8ja2', 'sy3uDuPd91', '2023-07-17 08:11:51', '2023-07-17 08:11:51'),
(56, 'Aric Kihn DVM', 'berge.bridgette@example.org', '2023-07-17 08:13:03', NULL, NULL, '$2y$10$jTbj.cb.TuZjuhSBHs6uQOdKVxeomwQCvfzj3KruIB3RRBMn40fb.', 'CPcaT7FFWh', '2023-07-17 08:13:04', '2023-07-17 08:13:04'),
(57, 'Dr. Tiana Schiller', 'idell.jenkins@example.org', '2023-07-17 08:13:03', NULL, NULL, '$2y$10$h55XS8f1pRi5BmJj21WhUuJ5iGpK5OXOytGx0RMkI/ttSDVcQKi6.', 'KktUaLp9dP', '2023-07-17 08:13:04', '2023-07-17 08:13:04'),
(58, 'Mrs. Kailey VonRueden V', 'arianna69@example.com', '2023-07-17 08:13:03', NULL, NULL, '$2y$10$uKCRuS/2GLrtk8XY6ynpg.2IYVCnd.P3Z2FbCKtT3H3b5T8JTVIN.', 't6d4osXp5g', '2023-07-17 08:13:04', '2023-07-17 08:13:04'),
(59, 'Kayla Kautzer', 'cicero63@example.com', '2023-07-17 08:13:03', NULL, NULL, '$2y$10$imP1N8Xc8NQwCtMQRvv38OlWsIuXEPUTMgql37cghNa88xL1Ud8q6', '1mRW8laxdl', '2023-07-17 08:13:04', '2023-07-17 08:13:04'),
(60, 'Albin Jakubowski', 'smcdermott@example.org', '2023-07-17 08:13:03', NULL, NULL, '$2y$10$k8maq/PH0DZwcxaQPs9iy.rZJB2FIVKiEK3rflYoXpT5Jh4nouDr.', 'MVtBOVlKrq', '2023-07-17 08:13:04', '2023-07-17 08:13:04'),
(61, 'Alvera Hahn', 'eugene55@example.org', '2023-07-17 08:13:03', NULL, NULL, '$2y$10$FYmMsr5pPYRayqr7Wi94zeOKcw5btuIJUfT/llsrEvHQZOPQ.Fu0i', 'ND4tJRFrFP', '2023-07-17 08:13:04', '2023-07-17 08:13:04'),
(62, 'Dr. Alexis Rosenbaum', 'eulah.parisian@example.net', '2023-07-17 08:13:03', NULL, NULL, '$2y$10$TSQZlaSMSC8OwlMemIrxyOiAfjHdLjQJ1E2KE4wwyfEnAbQXE7E26', 'j9ghYeLZZB', '2023-07-17 08:13:04', '2023-07-17 08:13:04'),
(63, 'Ivory Hoppe', 'francesco.ondricka@example.org', '2023-07-17 08:13:03', NULL, NULL, '$2y$10$RrHLdT6kuly3P.5YxH7obeKABTifcJGcTPhjL0U3izQRVKDc5hEaO', 'JatGskaCsp', '2023-07-17 08:13:04', '2023-07-17 08:13:04'),
(64, 'Pascale Fay III', 'kassulke.miles@example.net', '2023-07-17 08:13:03', NULL, NULL, '$2y$10$/S4l.fKWjCmOlO1wnQpuPOswYtlBK/6Hg.LdT55PzZ/kftAfrX8Pa', 'wSSnUSAspI', '2023-07-17 08:13:05', '2023-07-17 08:13:05'),
(65, 'Gerry Schaefer', 'hessel.georgianna@example.org', '2023-07-17 08:13:03', NULL, NULL, '$2y$10$WURXcI9..sy/L6G4VIfRIuToOclpLPkNdBSHQ8ZjeiWOJHNXstocq', 'hdkOLz8nWI', '2023-07-17 08:13:05', '2023-07-17 08:13:05'),
(66, 'Verona Lind', 'bechtelar.nelda@example.com', '2023-07-17 08:13:03', NULL, NULL, '$2y$10$QYh7qlpJhDFWaY9KroCFb.TkKT2MFQ74jOMu7Dw4MaDAc6jpQI5WS', '1Gouu6Cjcm', '2023-07-17 08:13:05', '2023-07-17 08:13:05'),
(67, 'Mark Yost', 'homenick.alvena@example.com', '2023-07-17 08:13:03', NULL, NULL, '$2y$10$olCHbuCgOGq4N0PtzgIu..O3C6tZM5pAUvQy4.BYvXFNZBvhl/UTS', 'RTuMKD9MZ8', '2023-07-17 08:13:05', '2023-07-17 08:13:05'),
(68, 'Bethany Wisoky DVM', 'clair.langworth@example.com', '2023-07-17 08:13:03', NULL, NULL, '$2y$10$v/LTsYPaIJGCqjnhG9aMcO9vZGTuckW./sBoV89D4l75L.02ZENzK', 'AsSYtxJcqZ', '2023-07-17 08:13:05', '2023-07-17 08:13:05'),
(69, 'Jenifer Mertz', 'parisian.dwight@example.com', '2023-07-17 08:13:03', NULL, NULL, '$2y$10$OsQ/x/aWvFjTbO3l1UbXceMqG2K6OMEpmwbBK41dburWAwsP/56EW', 'yZnOQ4zqsP', '2023-07-17 08:13:05', '2023-07-17 08:13:05'),
(70, 'Dana Pagac Sr.', 'tyrel74@example.org', '2023-07-17 08:13:03', NULL, NULL, '$2y$10$n0haAfDNliJensFMgP7EveMrP.Bu4Af3Irm9YfteolZ2TGKYAc3Wm', '1jDMrZnKf0', '2023-07-17 08:13:05', '2023-07-17 08:13:05'),
(71, 'Mr. Jaleel Rutherford DVM', 'willa.padberg@example.com', '2023-07-17 08:13:03', NULL, NULL, '$2y$10$HXWhi/O.3tMwZXXDCbVG7eUzxxuqYCO30PUEaCYtf5En3KaINRcI2', 'kdndsOIizU', '2023-07-17 08:13:05', '2023-07-17 08:13:05'),
(72, 'Prof. Joshua Spencer II', 'heaney.eryn@example.org', '2023-07-17 08:13:03', NULL, NULL, '$2y$10$X84CC44g8fjZPWJHELHqu.kJjRAd1LZz6f00d0d6Ytwxl5r/YYF.S', 'GEPoLPvWZd', '2023-07-17 08:13:05', '2023-07-17 08:13:05'),
(73, 'Miller Connelly', 'maxie65@example.net', '2023-07-17 08:13:04', NULL, NULL, '$2y$10$ua41zVvY1ONDclOvafqptOC0yvumd8jafElEfWtKBgpstZ0AaaH3a', 'KQQ8aYQyvP', '2023-07-17 08:13:05', '2023-07-17 08:13:05'),
(74, 'Patience Doyle', 'madison.kassulke@example.net', '2023-07-17 08:13:04', NULL, NULL, '$2y$10$igOcFpc7HeUs1w8vBiu41OER9wB5gAJhBIi2VJppSqNc1S0aLx1yO', 'pAb8GsDi5j', '2023-07-17 08:13:05', '2023-07-17 08:13:05'),
(75, 'Maya Mayert Jr.', 'celine.ebert@example.com', '2023-07-17 08:13:04', NULL, NULL, '$2y$10$w1ED3p/btrtMFHPTP3gH1.2PyVi7mCXni1P5WccRvhzQL8NWLIB3W', 'TMrWFq9f5s', '2023-07-17 08:13:05', '2023-07-17 08:13:05'),
(76, 'Emma Ernser Jr.', 'considine.pete@example.net', '2023-07-17 08:13:04', NULL, NULL, '$2y$10$h1W0koY5BKVSaf0VtnWO8usQMU9v3VPLY2vU/IuzFWH2LKGUkGM3K', '55KUPmANwj', '2023-07-17 08:13:05', '2023-07-17 08:13:05'),
(78, 'Dr. Florine Buckridge II', 'reynolds.jalyn@example.net', '2023-07-17 08:13:04', NULL, NULL, '$2y$10$rfHCXKEfHFUTWijd8AO6auLqdJxTXILyQRoW/hYwQpd1UldYbxXGq', 'Ue5l7bok17', '2023-07-17 08:13:05', '2023-07-17 08:13:05'),
(79, 'Clemens Walsh', 'katrine.bogisich@example.org', '2023-07-17 08:13:04', NULL, NULL, '$2y$10$JNaRGS./QZHdDk7uuRFSBuhlywCIP98p1m341euw.iAEJg7kt7M52', 'vzfSteAMH2', '2023-07-17 08:13:05', '2023-07-17 08:13:05'),
(80, 'Zoie Gibson', 'lazaro.flatley@example.net', '2023-07-17 08:13:04', NULL, NULL, '$2y$10$IomFbGIBW4dmiZhmM.0ZUOSVYKbZzuGI6W33Uyh4jeEl624Ebh6/y', 'F6gRv1B6Bz', '2023-07-17 08:13:05', '2023-07-17 08:13:05'),
(81, 'Mrs. Pasquale Wolf III', 'qturner@example.com', '2023-07-17 08:13:04', NULL, NULL, '$2y$10$d6MrIA/Ufgh3UdjlLOJsi.SKfDNS1WzEwVrN6hAfSIolvK4qUnMDa', 'B2LC0LMAHL', '2023-07-17 08:13:05', '2023-07-17 08:13:05'),
(82, 'Lucy Nader', 'jan41@example.org', '2023-07-17 08:13:04', NULL, NULL, '$2y$10$Xj770c1yGZq3A5XAkZHWfe8JlPLhV4baj7R8f8hUMTe1JjuLRwuWa', 'xyDYw8H3xl', '2023-07-17 08:13:05', '2023-07-17 08:13:05'),
(83, 'Nakia Hilpert V', 'cedrick47@example.com', '2023-07-17 08:13:04', NULL, NULL, '$2y$10$uU5htN5I2JF8fpH6CdXV5uHUhoHZQea6uQCdyk2UwFVIX66C5Xpc2', 'lz30TKAndE', '2023-07-17 08:13:05', '2023-07-17 08:13:05'),
(84, 'Ayana Mante IV', 'johanna85@example.org', '2023-07-17 08:13:04', NULL, NULL, '$2y$10$4mzQb8G0Eq7.SAxMMncLe.5aHCfM1b9aiP.38D5t/.iBJ3lsnu35u', '9gIP2KrnsB', '2023-07-17 08:13:05', '2023-07-17 08:13:05'),
(85, 'Prof. Patrick Upton', 'afton.konopelski@example.org', '2023-07-17 08:13:04', NULL, NULL, '$2y$10$ogNM/2TIFwwq5pf9wHvzAe2pef7XTtnLx5nDTNvtwZzjvLZOjqUOW', 'PJe1m0MuJT', '2023-07-17 08:13:05', '2023-07-17 08:13:05');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `user_type_id` bigint UNSIGNED DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `dor` date DEFAULT NULL,
  `salary` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `user_type_id`, `first_name`, `middle_name`, `last_name`, `address_line_1`, `address_line_2`, `dob`, `dor`, `salary`, `created_at`, `updated_at`) VALUES
(2, 2, 1, 'Souvik', 'Kumar', 'Nag', 'Test address line 1', NULL, '1982-08-26', '2030-12-12', 400000, '2023-07-14 17:42:11', '2023-07-19 16:55:10'),
(3, 3, 1, 'Rakesh', NULL, 'Bairagi', 'Bongaon', NULL, '1998-10-10', '2050-10-10', 4000000, '2023-07-14 19:39:27', '2023-07-14 19:39:27'),
(4, 4, 1, 'Anik', NULL, 'Banerjee', 'Test address line 1', NULL, '1991-08-12', '2050-10-10', 400000, '2023-07-15 16:16:02', '2023-07-15 16:16:02'),
(306, 46, 3, 'Nelson Nikolaus', NULL, 'Test', '127', '786 Predovic Fort Suite 436', '2003-04-16', '2040-10-26', 55267, '2023-07-17 08:11:51', '2023-07-17 08:11:51'),
(307, 47, 1, 'Friedrich Rempel IV', NULL, 'Test', '258', '92740 Reymundo Court Suite 907', '1979-08-01', '2037-02-08', 96489, '2023-07-17 08:11:51', '2023-07-17 08:11:51'),
(309, 49, 2, 'Jany Rogahn III', NULL, 'Test', '167', '10459 Satterfield Bridge Suite 772', '1999-07-23', '2033-12-29', 99619, '2023-07-17 08:11:51', '2023-07-17 08:11:51'),
(310, 50, 1, 'Mr. Jaden Olson', NULL, 'Test', '277', '702 Kaycee Isle', '1979-08-04', '2037-08-19', 17122, '2023-07-17 08:11:51', '2023-07-17 08:11:51'),
(311, 51, 3, 'Lori Sawayn IV', NULL, 'Test', '148', '4376 Hilpert Causeway Suite 852', '2001-04-04', '2042-09-25', 65360, '2023-07-17 08:11:51', '2023-07-17 08:11:51'),
(312, 52, 1, 'Ms. Alvera Powlowski', NULL, 'Test', '109', '518 Jake Place', '1986-09-19', '2034-01-16', 83456, '2023-07-17 08:11:51', '2023-07-17 08:11:51'),
(313, 53, 2, 'Bernita Lesch', NULL, 'Test', '154', '64269 Demario Ville', '2005-04-02', '2036-07-14', 55851, '2023-07-17 08:11:51', '2023-07-17 08:11:51'),
(314, 54, 2, 'Myrtle Littel', NULL, 'Test', '162', '367 Elyse Center', '1989-03-06', '2035-10-26', 69824, '2023-07-17 08:11:51', '2023-07-17 08:11:51'),
(315, 55, 1, 'Rudy Swaniawski', NULL, 'Test', '242', '20268 Jolie Square', '1996-02-11', '2043-01-13', 36731, '2023-07-17 08:11:52', '2023-07-17 08:11:52'),
(316, 56, 1, 'Aric Kihn DVM', NULL, 'Test', '270', '496 Crist Land', '1983-07-31', '2038-08-19', 96061, '2023-07-17 08:13:05', '2023-07-17 08:13:05'),
(317, 57, 1, 'Dr. Tiana Schiller', NULL, 'Test', '146', '1316 Murphy Bypass Suite 867', '2003-03-29', '2036-03-06', 52076, '2023-07-17 08:13:05', '2023-07-17 08:13:05'),
(318, 58, 1, 'Mrs. Kailey VonRueden V', NULL, 'Test', '291', '40305 Johnston Trace', '2003-11-14', '2041-05-08', 89467, '2023-07-17 08:13:05', '2023-07-17 08:13:05'),
(319, 59, 2, 'Kayla Kautzer', NULL, 'Test', '244', '68136 Jakubowski Spurs', '2000-11-11', '2037-07-03', 28718, '2023-07-17 08:13:05', '2023-07-17 08:13:05'),
(320, 60, 3, 'Albin Jakubowski', NULL, 'Test', '242', '5163 Kaia Neck', '1989-11-09', '2034-05-18', 34712, '2023-07-17 08:13:05', '2023-07-17 08:13:05'),
(321, 61, 3, 'Alvera Hahn', NULL, 'Test', '295', '63545 Mertz Manor Suite 209', '1990-10-05', '2039-10-08', 52653, '2023-07-17 08:13:05', '2023-07-17 08:13:05'),
(322, 62, 2, 'Dr. Alexis Rosenbaum', NULL, 'Test', '228', '5564 Pierre Parks Apt. 582', '1993-10-19', '2040-01-17', 86247, '2023-07-17 08:13:05', '2023-07-17 08:13:05'),
(323, 63, 1, 'Ivory Hoppe', NULL, 'Test', '148', '592 Aurelie Haven', '2001-01-26', '2039-03-11', 86672, '2023-07-17 08:13:06', '2023-07-17 08:13:06'),
(324, 64, 2, 'Pascale Fay III', NULL, 'Test', '188', '832 Nat Ports Suite 141', '1976-08-10', '2042-01-01', 51384, '2023-07-17 08:13:06', '2023-07-17 08:13:06'),
(325, 65, 3, 'Gerry Schaefer', NULL, 'Test', '135', '29926 Greta Valley', '1994-08-08', '2035-11-19', 21777, '2023-07-17 08:13:06', '2023-07-17 08:13:06'),
(326, 66, 3, 'Verona Lind', NULL, 'Test', '283', '502 Rosina Fort', '2005-06-20', '2040-02-02', 19412, '2023-07-17 08:13:06', '2023-07-17 08:13:06'),
(327, 67, 1, 'Mark Yost', NULL, 'Test', '253', '484 Sipes Mill', '2004-02-26', '2036-09-05', 51493, '2023-07-17 08:13:06', '2023-07-17 08:13:06'),
(328, 68, 1, 'Bethany Wisoky DVM', NULL, 'Test', '202', '74901 Morissette Rue Apt. 884', '2001-01-04', '2037-10-11', 49647, '2023-07-17 08:13:06', '2023-07-17 08:13:06'),
(329, 69, 3, 'Jenifer Mertz', NULL, 'Test', '272', '75143 Liza Overpass Apt. 258', '1976-05-29', '2034-03-27', 23849, '2023-07-17 08:13:06', '2023-07-17 08:13:06'),
(330, 70, 1, 'Dana Pagac Sr.', NULL, 'Test', '209', '599 Mills Trail Apt. 716', '1999-08-02', '2038-10-19', 76482, '2023-07-17 08:13:06', '2023-07-17 08:13:06'),
(331, 71, 2, 'Mr. Jaleel Rutherford DVM', NULL, 'Test', '121', '3905 Beverly Centers Apt. 583', '1990-08-18', '2035-09-03', 47718, '2023-07-17 08:13:06', '2023-07-17 08:13:06'),
(332, 72, 2, 'Prof. Joshua Spencer II', NULL, 'Test', '139', '26043 Gavin Shoals', '1995-04-04', '2037-12-21', 11207, '2023-07-17 08:13:07', '2023-07-17 08:13:07'),
(333, 73, 1, 'Miller Connelly', NULL, 'Test', '111', '57980 O\'Kon Branch', '1996-04-05', '2040-01-16', 21143, '2023-07-17 08:13:07', '2023-07-17 08:13:07'),
(334, 74, 2, 'Patience Doyle', NULL, 'Test', '118', '4197 Jackeline Spur Apt. 615', '1982-05-14', '2035-04-24', 79683, '2023-07-17 08:13:07', '2023-07-17 08:13:07'),
(335, 75, 3, 'Maya Mayert Jr.', NULL, 'Test', '241', '16435 Grady Knoll Suite 880', '2001-01-29', '2042-01-07', 28323, '2023-07-17 08:13:07', '2023-07-17 08:13:07'),
(336, 76, 3, 'Emma Ernser Jr.', NULL, 'Test', '186', '581 Koelpin Inlet', '1998-01-23', '2041-10-25', 37379, '2023-07-17 08:13:07', '2023-07-17 08:13:07'),
(338, 78, 3, 'Dr. Florine Buckridge II', NULL, 'Test', '118', '31520 Kub Fork Apt. 635', '1984-09-19', '2033-12-16', 89291, '2023-07-17 08:13:07', '2023-07-17 08:13:07'),
(339, 79, 2, 'Clemens Walsh', NULL, 'Test', '138', '4010 Zulauf Corner', '2002-07-31', '2034-06-30', 32222, '2023-07-17 08:13:07', '2023-07-17 08:13:07'),
(340, 80, 2, 'Zoie Gibson', NULL, 'Test', '148', '8626 Goldner Loop Suite 439', '1995-10-18', '2037-08-01', 64792, '2023-07-17 08:13:07', '2023-07-17 08:13:07'),
(341, 81, 3, 'Mrs. Pasquale Wolf III', NULL, 'Test', '160', '89098 Walker Spur', '2003-09-18', '2042-03-04', 69952, '2023-07-17 08:13:07', '2023-07-17 08:13:07'),
(342, 82, 2, 'Lucy Nader', NULL, 'Test', '260', '250 Kemmer Field Suite 035', '1978-03-28', '2033-11-25', 15096, '2023-07-17 08:13:07', '2023-07-17 08:13:07'),
(343, 83, 1, 'Nakia Hilpert V', NULL, 'Test', '171', '163 Hartmann Ports Suite 603', '1986-01-13', '2036-10-14', 39140, '2023-07-17 08:13:07', '2023-07-17 08:13:07'),
(344, 84, 2, 'Ayana Mante IV', NULL, 'Test', '218', '1584 Cade Motorway Apt. 015', '2001-06-24', '2042-03-02', 39029, '2023-07-17 08:13:07', '2023-07-17 08:13:07'),
(345, 85, 1, 'Prof. Patrick Upton', NULL, 'Test', '161', '91170 Becker Harbors Suite 826', '1997-04-01', '2043-01-11', 31261, '2023-07-17 08:13:07', '2023-07-17 08:13:07');

-- --------------------------------------------------------

--
-- Table structure for table `user_project_maps`
--

CREATE TABLE `user_project_maps` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `project_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Web Developer', 'web-developer', '2023-07-12 12:51:01', '2023-07-12 12:51:01'),
(2, 'Frontend Developer', 'frontend-developer', '2023-07-12 12:51:01', '2023-07-12 12:51:01'),
(3, 'Graphic Designer', 'graphic-designer', '2023-07-12 12:51:01', '2023-07-12 12:51:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_contacts`
--
ALTER TABLE `client_contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_contacts_client_id_foreign` (`client_id`);

--
-- Indexes for table `employee_reportings`
--
ALTER TABLE `employee_reportings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_reportings_manager_id_foreign` (`manager_id`),
  ADD KEY `employee_reportings_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  ADD KEY `media_order_column_index` (`order_column`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_client_id_foreign` (`client_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_details_user_id_foreign` (`user_id`),
  ADD KEY `user_details_user_type_id_foreign` (`user_type_id`);

--
-- Indexes for table `user_project_maps`
--
ALTER TABLE `user_project_maps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_project_maps_user_id_foreign` (`user_id`),
  ADD KEY `user_project_maps_project_id_foreign` (`project_id`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `client_contacts`
--
ALTER TABLE `client_contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `employee_reportings`
--
ALTER TABLE `employee_reportings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=346;

--
-- AUTO_INCREMENT for table `user_project_maps`
--
ALTER TABLE `user_project_maps`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `client_contacts`
--
ALTER TABLE `client_contacts`
  ADD CONSTRAINT `client_contacts_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);

--
-- Constraints for table `employee_reportings`
--
ALTER TABLE `employee_reportings`
  ADD CONSTRAINT `employee_reportings_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `employee_reportings_manager_id_foreign` FOREIGN KEY (`manager_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_details_user_type_id_foreign` FOREIGN KEY (`user_type_id`) REFERENCES `user_types` (`id`);

--
-- Constraints for table `user_project_maps`
--
ALTER TABLE `user_project_maps`
  ADD CONSTRAINT `user_project_maps_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`),
  ADD CONSTRAINT `user_project_maps_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
