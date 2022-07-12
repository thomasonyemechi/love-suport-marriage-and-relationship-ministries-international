-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2022 at 05:20 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `relationship`
--

-- --------------------------------------------------------

--
-- Table structure for table `billings`
--

CREATE TABLE `billings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `billings`
--

INSERT INTO `billings` (`id`, `user_id`, `name`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 1, 'Nimi Braid', '08067544387', '08067544387', '2022-06-23 16:59:11', '2022-06-23 16:59:11'),
(2, 1, 'John Doe', '08067544387', '122 32k en w65982593369215934', '2022-06-23 17:01:39', '2022-06-23 17:01:39'),
(3, 2, 'Nimi Braid', '08067544387', '1232323 bkfv fkvfvjb', '2022-06-23 17:17:42', '2022-06-23 17:17:42'),
(4, 2, 'Nimi Braid', '73473742', '2von wkrv  ekh  erkn', '2022-06-23 17:18:26', '2022-06-23 17:18:26'),
(5, 3, 'thomas onyemechi', '09038772366', 'akure ondod state', '2022-06-24 00:58:01', '2022-06-24 00:58:01'),
(6, 4, 'thomas onyemechi', '09038772366', 'akure efbhi v cwc', '2022-06-24 01:01:31', '2022-06-24 01:01:31'),
(7, 3, 'John Doe', '08067544387', 'whr rheht  wrhwrhet', '2022-07-08 19:21:22', '2022-07-08 19:21:22'),
(8, 3, 'thomasonyemechi', '08067544387', 'deh eh e rhe rh rh', '2022-07-08 21:22:02', '2022-07-08 21:22:02'),
(9, 3, 'thomasonyemechi', '73473742', 'sh qgq gwg wgw gqeg', '2022-07-08 21:24:41', '2022-07-08 21:24:41');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sum_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `sum_id`, `item_id`, `item`, `price`, `quantity`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 'How to aviod marital failure', 700, 2, 1400, '2022-06-24 00:58:01', '2022-06-24 00:58:01'),
(2, 1, 5, 'Living well and aging well', 870, 1, 870, '2022-06-24 00:58:01', '2022-06-24 00:58:01'),
(3, 2, 4, 'How to aviod marital failure', 700, 2, 1400, '2022-06-24 01:01:31', '2022-06-24 01:01:31'),
(4, 2, 5, 'Living well and aging well', 870, 1, 870, '2022-06-24 01:01:31', '2022-06-24 01:01:31'),
(5, 3, 4, 'How to aviod marital failure', 700, 2, 1400, '2022-07-08 19:23:30', '2022-07-08 19:23:30'),
(6, 4, 4, 'How to aviod marital failure', 700, 2, 1400, '2022-07-08 19:23:34', '2022-07-08 19:23:34'),
(7, 5, 4, 'How to aviod marital failure', 700, 2, 1400, '2022-07-08 19:23:36', '2022-07-08 19:23:36'),
(8, 6, 4, 'How to aviod marital failure', 700, 2, 1400, '2022-07-08 19:23:40', '2022-07-08 19:23:40'),
(9, 7, 4, 'How to aviod marital failure', 700, 2, 1400, '2022-07-08 19:25:45', '2022-07-08 19:25:45'),
(10, 8, 4, 'How to aviod marital failure', 700, 2, 1400, '2022-07-08 19:26:15', '2022-07-08 19:26:15'),
(11, 9, 4, 'How to aviod marital failure', 700, 2, 1400, '2022-07-08 20:31:05', '2022-07-08 20:31:05'),
(12, 10, 4, 'How to aviod marital failure', 700, 2, 1400, '2022-07-08 20:31:36', '2022-07-08 20:31:36'),
(13, 11, 4, 'How to aviod marital failure', 700, 2, 1400, '2022-07-08 20:32:21', '2022-07-08 20:32:21'),
(14, 12, 4, 'How to aviod marital failure', 700, 2, 1400, '2022-07-08 20:32:49', '2022-07-08 20:32:49'),
(15, 13, 4, 'How to aviod marital failure', 700, 2, 1400, '2022-07-08 20:33:31', '2022-07-08 20:33:31'),
(16, 14, 4, 'How to aviod marital failure', 700, 2, 1400, '2022-07-08 20:33:46', '2022-07-08 20:33:46'),
(17, 15, 4, 'How to aviod marital failure', 700, 2, 1400, '2022-07-08 21:22:02', '2022-07-08 21:22:02'),
(18, 16, 4, 'How to aviod marital failure', 700, 2, 1400, '2022-07-08 21:24:41', '2022-07-08 21:24:41');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `full_name`, `email`, `phone`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Nimi Braid', 'admin@agile.com', '08067544387', 'What uis your message \r\n?1247/Plot No. 39, Jagaban, Odogwu, Ondo State\r\n+91 874 8974 874\r\n+91 874 8974 874\r\nsupport@relationship.com\r\nsupport@relationship.com', 0, '2022-06-09 10:15:47', '2022-06-09 10:15:47'),
(2, 'Nimi Braid', 'admin@agile.com', '08067544387', 'What uis your message \r\n?1247/Plot No. 39, Jagaban, Odogwu, Ondo State\r\n+91 874 8974 874\r\n+91 874 8974 874\r\nsupport@relationship.com\r\nsupport@relationship.com', 0, '2022-06-09 10:16:44', '2022-06-09 10:16:44'),
(3, 'Nimi Braid', 'admin@agile.com', '08067544387', '1247/Plot No. 39, Jagaban, Odogwu, Ondo State\r\n+91 874 8974 874\r\n+91 874 8974 874\r\nsupport@relationship.com', 0, '2022-06-09 10:22:10', '2022-06-09 10:22:10');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `tag`, `description`, `photo`, `date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'All House Wives Summit 2022 & Family SapaNification', 'Family', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi veniam recusandae obcaecati? Quo eos dolore aut sit vero? Tempore itaque sed nemo eum blanditiis in nobis obcaecati natus hic cumque.', 'all-house-wives-summit-2022-family-sapanification1657347995.jpg', 1657584000, 1, '2022-07-09 05:26:35', '2022-07-09 05:26:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(5, '2022_05_31_013913_create_newsletters_table', 1),
(6, '2022_06_06_111813_create_contacts_table', 2),
(7, '2022_06_09_084107_create_testimonies_table', 3),
(8, '2022_06_09_141055_create_stores_table', 4),
(9, '2022_06_23_163334_create_billings_table', 5),
(10, '2022_06_23_164925_create_carts_table', 5),
(11, '2022_06_23_164946_create_scarts_table', 5),
(12, '2022_07_08_173706_create_events_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'thom@gmail.com', 1, '2022-05-31 01:19:30', '2022-05-31 01:19:30'),
(2, '3@gmail', 1, '2022-05-31 01:22:16', '2022-05-31 01:22:16'),
(3, '3@gmail.com', 1, '2022-05-31 01:23:23', '2022-05-31 01:23:23'),
(4, 'kie@ge.com', 1, '2022-05-31 01:25:57', '2022-05-31 01:25:57'),
(5, 'eej@gmail.com', 1, '2022-05-31 01:27:57', '2022-05-31 01:27:57'),
(6, 'love@bella.com', 1, '2022-06-11 02:42:53', '2022-06-11 02:42:53'),
(7, 'jejej@gmail.com', 1, '2022-06-13 10:48:50', '2022-06-13 10:48:50'),
(8, 'grg@s.com', 1, '2022-07-02 11:05:21', '2022-07-02 11:05:21');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `scarts`
--

CREATE TABLE `scarts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `billing_id` int(11) NOT NULL,
  `track_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trno` bigint(20) NOT NULL,
  `total` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scarts`
--

INSERT INTO `scarts` (`id`, `user_id`, `billing_id`, `track_id`, `trno`, `total`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 5, '32833539168698293557', 97841928959369213, 2270, 0, '2022-06-24 00:58:01', '2022-06-24 00:58:01'),
(2, 4, 6, '45161499481667415275', 31122122949573999, 2270, 0, '2022-06-24 01:01:31', '2022-06-24 01:01:31'),
(3, 3, 7, '41722324447834795962', 676768877878, 0, 0, '2022-07-08 19:23:30', '2022-07-08 19:23:30'),
(4, 3, 7, '38929324987422778854', 676768877878, 0, 0, '2022-07-08 19:23:34', '2022-07-08 19:23:34'),
(5, 3, 7, '74513439262211871663', 676768877878, 0, 0, '2022-07-08 19:23:36', '2022-07-08 19:23:36'),
(6, 3, 7, '31978532341516137597', 676768877878, 0, 0, '2022-07-08 19:23:40', '2022-07-08 19:23:40'),
(7, 3, 7, '27641551434869656941', 676768877878, 0, 0, '2022-07-08 19:25:45', '2022-07-08 19:25:45'),
(8, 3, 7, '28996513189326271935', 676768877878, 0, 0, '2022-07-08 19:26:14', '2022-07-08 19:26:14'),
(9, 3, 7, '29684399679576739714', 676768877878, 0, 0, '2022-07-08 20:31:05', '2022-07-08 20:31:05'),
(10, 3, 7, '14158865543576452319', 676768877878, 0, 0, '2022-07-08 20:31:36', '2022-07-08 20:31:36'),
(11, 3, 7, '46682446238744959122', 676768877878, 0, 0, '2022-07-08 20:32:20', '2022-07-08 20:32:20'),
(12, 3, 7, '13325812631179348921', 676768877878, 0, 0, '2022-07-08 20:32:49', '2022-07-08 20:32:49'),
(13, 3, 7, '53423313915588939299', 676768877878, 0, 0, '2022-07-08 20:33:31', '2022-07-08 20:33:31'),
(14, 3, 7, '25736515529347976776', 676768877878, 0, 0, '2022-07-08 20:33:46', '2022-07-08 20:33:46'),
(15, 3, 8, '72369834979322193666', 849629483, 1400, 0, '2022-07-08 21:22:02', '2022-07-08 21:22:02'),
(16, 3, 9, '48642665722713119853', 1772598569, 1400, 0, '2022-07-08 21:24:41', '2022-07-08 21:24:41');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `more` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `snippet` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `on_del` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `slug`, `item`, `price`, `description`, `more`, `type`, `photo`, `url`, `snippet`, `main_url`, `on_del`, `status`, `created_at`, `updated_at`) VALUES
(4, 'how-to-aviod-marital-failure', 'How to aviod marital failure', 700, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.', 3, 'How to aviod marital failure_img_16559742661116775070.jpg', 'How to aviod marital failure_img_16559742661116775070.jpg', 'no_image.png', 'How to aviod marital failure_file_1655974266648516047.jpg', 2, 1, '2022-06-23 07:51:06', '2022-06-23 07:51:06'),
(5, 'living-well-and-aging-well', 'Living well and aging well', 870, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.', 3, 'living-well-and-aging-well_img_16559778761252022870.jpg', 'living-well-and-aging-well_img_16559778761252022870.jpg', 'no_image.png', 'living-well-and-aging-well_file_1655977876607199072.pdf', 1, 1, '2022-06-23 08:51:16', '2022-06-23 08:51:16'),
(6, '10-rearest-wild-cats-in-the-world', '10 rearest wild cats in the world', 75, '10 rearest wild cats in the world 10 rearest wild cats in the world', '10 rearest wild cats in the world 10 rearest wild cats in the world 10 rearest wild cats in the world 10 rearest wild cats in the world 10 rearest wild cats in the world 10 rearest wild cats in the world 10 rearest wild cats in the world 10 rearest wild cats in the world', 2, '10-rearest-wild-cats-in-the-world_img_16570953711127214566.jpg', '10-rearest-wild-cats-in-the-world_img_16570953711127214566.jpg', '10-rearest-wild-cats-in-the-world_snippet_16570953711137721986.mp4', '10-rearest-wild-cats-in-the-world_file_16570953711167990374.mp4', 1, 1, '2022-07-06 07:16:11', '2022-07-06 07:16:11'),
(7, '6-ways-to-get-people-to-respect-you-avoid-being-taken-advantage-of', '6 Ways to Get People to Respect You (Avoid Being Taken Advantage Of)', 150, '6 Ways to Get People to Respect You (Avoid Being Taken Advantage Of) 6 Ways to Get People to Respect You (Avoid Being Taken Advantage Of)', '6 Ways to Get People to Respect You (Avoid Being Taken Advantage Of) 6 Ways to Get People to Respect You (Avoid Being Taken Advantage Of) 6 Ways to Get People to Respect You (Avoid Being Taken Advantage Of) 6 Ways to Get People to Respect You (Avoid Being Taken Advantage Of) 6 Ways to Get People to Respect You (Avoid Being Taken Advantage Of) 6 Ways to Get People to Respect You (Avoid Being Taken Advantage Of)', 2, '6-ways-to-get-people-to-respect-you-avoid-being-taken-advantage-of_img_16571870171450365228.jpg', '6-ways-to-get-people-to-respect-you-avoid-being-taken-advantage-of_img_16571870171450365228.jpg', '6-ways-to-get-people-to-respect-you-avoid-being-taken-advantage-of_snippet_16571870171427621120.mp4', '6-ways-to-get-people-to-respect-you-avoid-being-taken-advantage-of_file_16571870171579661529.mp4', 1, 1, '2022-07-07 08:43:37', '2022-07-07 08:43:37'),
(8, '10-strongest-eagles-on-earth', '10 Strongest Eagles on Earth', 30, '10 Strongest Eagles on Earth 10 Strongest Eagles on Earth 10 Strongest Eagles on Earth 10 Strongest Eagles on Earth', '10 Strongest Eagles on Earth 10 Strongest Eagles on Earth 10 Strongest Eagles on Earth 10 Strongest Eagles on Earth 10 Strongest Eagles on Earth 10 Strongest Eagles on Earth 10 Strongest Eagles on Earth 10 Strongest Eagles on Earth 10 Strongest Eagles on Earth 10 Strongest Eagles on Earth 10 Strongest Eagles on Earth 10 Strongest Eagles on Earth', 2, '10-strongest-eagles-on-earth_img_16571877541170395911.jpg', '10-strongest-eagles-on-earth_img_16571877541170395911.jpg', '10-strongest-eagles-on-earth_snippet_16571877541787003838.mp4', '10-strongest-eagles-on-earth_file_16571877541066821648.mp4', 1, 1, '2022-07-07 08:55:54', '2022-07-07 08:55:54'),
(9, 'celine-dion-a-new-day-has-come', 'Celine dion a new day has come', 30, 'Celine dion a new day has come Celine dion a new day has come Celine dion a new day has come Celine dion a new day has come', 'Celine dion a new day has come Celine dion a new day has come Celine dion a new day has come Celine dion a new day has come Celine dion a new day has come Celine dion a new day has come Celine dion a new day has come Celine dion a new day has come', 1, 'celine-dion-a-new-day-has-come_img_16571907752103121246.jpg', 'celine-dion-a-new-day-has-come_img_16571907752103121246.jpg', 'celine-dion-a-new-day-has-come_snippet_1657190775735097529.mp3', 'celine-dion-a-new-day-has-come_file_1657190775138299761.mp3', 1, 1, '2022-07-07 09:46:15', '2022-07-07 09:46:15');

-- --------------------------------------------------------

--
-- Table structure for table `testimonies`
--

CREATE TABLE `testimonies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no_image.png',
  `testimony` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonies`
--

INSERT INTO `testimonies` (`id`, `name`, `photo`, `testimony`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bigger Thomas', 'Bigger Thomas_16547710684648176.jpg', 'The moment a person in your relationship puts you in a position to choose them over God’s precepts, then something is definitely wrong. y current girlfriend at the time... texted me, telling me she didn’t want to see me or hear from me again. As a high school eleventh grader who was 16 at the time, it hurt! Like crazy!!!', 0, '2022-06-09 08:09:14', '2022-06-09 09:38:13'),
(5, 'Holly Spencer', 'Holly Spencer_16547713501621398991.jpg', 'Hunter looking into horizon with deer silhouetteDoes the Lord bless those who bless us?[Continue Reading...] Drawing From The Wrong Well Girl student studyingThe moment a person in your relationship puts you in a position to choose them over God’s precepts, then something is definitely wrong. [Continue Reading', 0, '2022-06-09 09:39:56', '2022-06-09 09:42:30'),
(6, 'Sheena Braid', 'Sheena Braid_1654771417175258546.jpg', 'Hey there, I’m Sheena and I’m an 18-year-old totally blind girl. Here is my testimony of how the Lord saved me and what he saved me from. Jesus set me free from being in the LGBT lifestyle. He also saved me from demonic things, eating too much, suicidal thoughts, and being transgender.\r\nAll glory to him!!!', 0, '2022-06-09 09:43:37', '2022-06-09 09:43:37'),
(7, 'Stephen Jagaban', 'Stephen Jagaban_1654771496808033008.jpg', 'One day I will confess to her what I did to her face to face and apologise… or over the phone. I’m ashamed of my behaviour. I’m a hypocrite, always mocking and judging others but yet I had major skeletons in my closet including homosexuality, drinking, alcohol, pornography, addiction, lust, fornication and smoking that ruined my teeth.', 0, '2022-06-09 09:44:57', '2022-06-09 09:44:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `address`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nimi Braid', 'ajidax01@gmail.com', '08067544387', NULL, '$2y$10$j9MgHHol/6kgynBib.MEPuefZYvHTg52pV/RMmQNGPSkfgqx4.mPq', NULL, '2022-06-23 16:59:11', '2022-06-23 16:59:11'),
(2, 'Nimi Braid', 'admin@agile.com', '1232323 bkfv fkvfvjb', NULL, '$2y$10$lS9Qtp6e6BQ42veP3EMvDeYx7wUEMxp5Lghh94HyC17M.nXMF3YOe', NULL, '2022-06-23 17:17:41', '2022-06-23 17:17:41'),
(3, 'thomas onyemechi', 'thomasonyemechi03@gmail.com', 'akure ondod state', NULL, '$2y$10$5PEUDM0M.XIdLQUeRX68Ku0.tz44JduApXx8Pbv8tk6WMpu0Qnm9.', NULL, '2022-06-24 00:58:01', '2022-06-24 00:58:01'),
(4, 'thomas onyemechi', 'thomasgideon63@gmail.com', 'akure efbhi v cwc', NULL, '$2y$10$QTYOA8.hdPnFx4o72.Z8IeObFvOZn82aEp3r2pmsa8kmJOgxmqDLC', NULL, '2022-06-24 01:01:31', '2022-06-24 01:01:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billings`
--
ALTER TABLE `billings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
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
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
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
-- Indexes for table `scarts`
--
ALTER TABLE `scarts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonies`
--
ALTER TABLE `testimonies`
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
-- AUTO_INCREMENT for table `billings`
--
ALTER TABLE `billings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `scarts`
--
ALTER TABLE `scarts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `testimonies`
--
ALTER TABLE `testimonies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
