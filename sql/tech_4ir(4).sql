-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2023 at 04:41 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tech_4ir`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'admin=head of software,operator=computer operator',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `usertype`, `email_verified_at`, `password`, `remember_token`, `current_team_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', NULL, '$2y$10$N9EwGb9YDRnfIW1x.eDbpuyFogI/VYtWCXWOX7G7GdfjmqleTihYa', NULL, NULL, '20230302135556png', '2023-02-16 12:18:00', '2023-03-03 10:44:26'),
(2, 'operator', 'operator@gmail.com', 'operator', NULL, '$2y$10$JdKBoKfn/YsI/.KuWkOBuuBJo.LhH8bc/.tEPZW6ThLdUK09QjJLG', NULL, NULL, '20230304071638jpg', '2023-02-16 12:18:00', '2023-03-04 01:16:38');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_image`, `created_at`, `updated_at`) VALUES
(1, 'GOOGLE', '20230309055209png', '2023-03-08 22:46:12', '2023-03-08 23:52:09'),
(2, 'PHILIPS', '20230309052743png', '2023-03-08 23:27:43', '2023-03-08 23:27:43'),
(4, 'AMAZON', '20230309063035png', '2023-03-09 00:30:35', '2023-03-09 00:30:35'),
(5, 'LYTMI', '20230309063047png', '2023-03-09 00:30:47', '2023-03-09 00:30:47'),
(6, 'NANOLEAF', '20230309063107png', '2023-03-09 00:31:07', '2023-03-09 00:31:07'),
(7, 'OCLEAN', '20230309063128png', '2023-03-09 00:31:28', '2023-03-09 00:31:28'),
(8, 'SONOFF', '20230309063138png', '2023-03-09 00:31:38', '2023-03-09 00:31:45'),
(9, 'TUYA', '20230309063157webp', '2023-03-09 00:31:57', '2023-03-09 00:31:57'),
(10, 'XIAOMI', '20230309063210png', '2023-03-09 00:32:10', '2023-03-09 00:32:10'),
(11, 'ZIGBBEE', '20230309063223png', '2023-03-09 00:32:23', '2023-03-09 00:32:23'),
(12, 'YEELIGHT', '20230316093111jpeg', '2023-03-16 03:31:11', '2023-03-16 03:31:11'),
(13, 'WALTON', '20230316100054png', '2023-03-16 04:00:54', '2023-03-16 04:00:54'),
(14, 'BASEUS', '20230316121435jpeg', '2023-03-16 06:14:35', '2023-03-16 06:14:35'),
(15, 'BLITZWOLF', '20230316132802png', '2023-03-16 07:28:02', '2023-03-16 07:28:02');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'smart door locks', '2023-03-05 06:06:27', '2023-03-05 07:01:51'),
(2, 'smart health', '2023-03-05 06:08:58', '2023-03-05 07:05:58'),
(3, 'smart hubs', '2023-03-05 06:09:11', '2023-03-05 07:06:07'),
(4, 'smart lights', '2023-03-05 06:09:23', '2023-03-05 07:06:11'),
(5, 'smart plugs & switches', '2023-03-05 06:09:41', '2023-03-05 07:06:14'),
(6, 'smart security', '2023-03-05 06:09:59', '2023-03-05 07:06:21'),
(8, 'smart safety devices', '2023-03-07 04:33:06', '2023-03-07 04:33:06');

-- --------------------------------------------------------

--
-- Table structure for table `descriptions`
--

CREATE TABLE `descriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `specification_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specification_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `descriptions`
--

INSERT INTO `descriptions` (`id`, `product_id`, `specification_name`, `specification_value`, `created_at`, `updated_at`) VALUES
(1, 4, 'Dimension', '86*86*39MM', '2023-03-13 08:11:15', '2023-03-13 08:11:15'),
(2, 4, 'Operating voltage', '110V-240V/50-60HZ', '2023-03-13 08:11:31', '2023-03-13 08:11:31'),
(3, 4, 'Rated load', '625W/Gang', '2023-03-13 08:12:04', '2023-03-13 08:12:04'),
(4, 4, 'Frequency', 'Wifi 4.4G', '2023-03-13 08:12:19', '2023-03-14 01:47:02'),
(5, 4, 'Wireless Fidelity', '802.11b/g/n', '2023-03-13 08:12:33', '2023-03-13 08:12:33'),
(6, 3, 'Voltage', 'AC180-265V', '2023-03-13 08:14:03', '2023-03-13 08:14:03'),
(7, 3, 'Led chip', 'SMD2835', '2023-03-13 08:14:17', '2023-03-13 08:14:17'),
(8, 3, 'Material', 'PC+ ABS', '2023-03-13 08:14:35', '2023-03-14 03:27:02'),
(9, 3, 'Colortemperature', '6500K', '2023-03-13 08:18:35', '2023-03-13 08:18:35'),
(10, 3, 'Luminous efficiency', 'ge95', '2023-03-13 09:00:39', '2023-03-13 09:00:39'),
(11, 3, 'Warranty', '1 Year', '2023-03-13 09:01:11', '2023-03-13 09:01:11'),
(12, 3, 'color', 'red', '2023-03-13 09:02:29', '2023-03-13 09:02:29'),
(13, 3, 'Sensor range', '3-5M', '2023-03-13 09:07:31', '2023-03-13 09:07:31'),
(14, 3, 'Delay time', '30-60S', '2023-03-13 09:08:28', '2023-03-13 09:08:28'),
(16, 2, 'Dimension', '46*56*39MM', '2023-03-13 21:41:20', '2023-03-14 00:24:37'),
(18, 2, 'Rated load', '625W/Gang', '2023-03-13 22:49:56', '2023-03-13 23:10:28'),
(19, 2, 'Operating voltage', '430V-240V/50-60HZ', '2023-03-13 23:01:41', '2023-03-14 01:19:23'),
(20, 2, 'Voltage', 'AC180-265V', '2023-03-13 23:33:24', '2023-03-13 23:33:24'),
(26, 2, 'width', '34inch', '2023-03-14 00:31:08', '2023-03-14 00:31:08'),
(46, 3, 'frequency', '45 Hz', '2023-03-14 03:09:42', '2023-03-14 03:09:42'),
(47, 8, 'Input Voltage Range', '180V-240V', '2023-03-16 05:46:04', '2023-03-16 05:46:04'),
(48, 8, 'Rated Power', '10W', '2023-03-16 05:46:26', '2023-03-16 05:53:20'),
(49, 8, 'Frequency', '270°', '2023-03-16 05:46:50', '2023-03-16 05:46:50'),
(50, 8, 'Beam Angle', '270°', '2023-03-16 05:47:04', '2023-03-16 05:47:04'),
(51, 8, 'Color Temperature', '65000k', '2023-03-16 05:47:30', '2023-03-16 05:47:30'),
(52, 8, 'Mode', 'DAYLIGHT/WARM', '2023-03-16 05:47:51', '2023-03-16 05:47:51'),
(53, 8, 'Product Dimension', 'Diamteter: 60mm, Height: 120mm', '2023-03-16 05:48:12', '2023-03-16 05:48:12'),
(56, 8, 'DIMMING', 'yes', '2023-03-16 05:57:12', '2023-03-16 05:57:12'),
(57, 7, 'Length', '2 m', '2023-03-16 06:02:03', '2023-03-16 06:02:03'),
(58, 7, 'Width', '10 mm', '2023-03-16 06:02:16', '2023-03-16 06:02:16'),
(59, 7, 'Number of colors', '16 million', '2023-03-16 06:02:34', '2023-03-16 06:02:34'),
(60, 7, 'Connectivity', 'Wi-Fi IEEE 802.11 b / g / n 2.4 GHz', '2023-03-16 06:02:54', '2023-03-16 06:02:54'),
(61, 7, 'System requirements', 'Android 4.4 or higher, iOS 9.0 or higher', '2023-03-16 06:03:23', '2023-03-16 06:03:23'),
(62, 7, 'Rated input', 'AC100-240V ~ 50 / 60Hz 0.09A (2m) 0.3A (10m)', '2023-03-16 06:03:43', '2023-03-16 06:03:43'),
(63, 7, 'Power', '7.5 W (48 leds x 0.087W) (2m) 24W (240 leds x 0.087W) (10m)', '2023-03-16 06:04:04', '2023-03-16 06:04:04'),
(64, 7, 'Output voltage', '24V DC', '2023-03-16 06:04:30', '2023-03-16 06:04:30'),
(65, 9, 'Model', 'DGRGB-01', '2023-03-16 07:20:51', '2023-03-16 07:20:51'),
(66, 9, 'Type', 'RGB LED Strip', '2023-03-16 07:21:12', '2023-03-16 07:21:12'),
(67, 9, 'Rated Voltag', '5V/1A', '2023-03-16 07:21:30', '2023-03-16 07:21:30'),
(68, 9, 'Rated Power', '4.25W', '2023-03-16 07:21:49', '2023-03-16 07:21:49'),
(69, 9, 'Material', 'ABS', '2023-03-16 07:22:05', '2023-03-16 07:22:05'),
(70, 9, 'Length', '1.5 meters (max. extension upto 5 meters)', '2023-03-16 07:22:24', '2023-03-16 07:22:24'),
(71, 9, 'Splitter size', '68×32.7x13mm', '2023-03-16 07:22:43', '2023-03-16 07:22:43');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_02_16_175732_create_sessions_table', 1),
(7, '2023_02_16_180238_create_admins_table', 1),
(8, '2014_10_12_000000_create_users_table', 12),
(9, '2023_03_02_044715_create_users_table', 13),
(10, '2023_03_05_084200_create_categories_table', 14),
(11, '2023_03_05_084751_create_sub_categories_table', 14),
(12, '2023_03_05_085206_create_brands_table', 22),
(13, '2023_03_05_085414_create_products_table', 32),
(14, '2023_03_05_090353_create_specification_values_table', 14),
(15, '2023_03_05_090650_create_specifications_table', 14),
(16, '2023_03_09_034401_create_brands_table', 23),
(17, '2023_03_09_034820_create_products_table', 29),
(18, '2023_03_09_064503_create_products_table', 33),
(19, '2023_03_13_130452_create_descriptions_table', 34);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selling_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_slider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mid_slider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0=inactive,1=active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `category_id`, `subcategory_id`, `brand_id`, `product_name`, `product_code`, `selling_price`, `product_details`, `video_link`, `main_slider`, `mid_slider`, `image_one`, `image_two`, `image_three`, `status`, `created_at`, `updated_at`) VALUES
(2, 4, 3, 9, 1, 'Google Nest Hub (2nd gen)', '654670995-3-9', '৳ 11,999.00', '<p><span style=\"background-color:#ffffff; color:#777777; font-family:\"Open Sans\",sans-serif; font-size:14px\">Keeping track of all your home moments is easy with Google Home Hub. Your calendar, commute, reminders, and more are right at your fingertips with Voice Match. It allows you to make shopping lists, watch the news, and contact friends, family, and local businesses.</span></p>', NULL, NULL, NULL, 'public/media/product/1759902216882314.jpg', 'public/media/product/1759902217053217.jpg', NULL, '1', '2023-03-09 08:50:25', '2023-03-15 23:53:01'),
(3, 2, 4, 11, 10, 'Motion Sensor Light AC 18w', '654111995-20-9', '৳ 1,299.00', '<p style=\"margin-left:0px; margin-right:0px; text-align:left\">Usage guide of the motion sensor ceiling light&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:left\">1. The motion sensor lamp must be installed vertically, it can work well.</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:left\">2. When you start the motion sensor bulb, it will turn on 5 minutes, it is normal</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:left\">3. When you in the sensor range, it works for about 25-30 seconds.</p>\r\n\r\n<div class=\"magic-14\" style=\"-webkit-tap-highlight-color:transparent !important; -webkit-text-stroke-width:0px; box-sizing:border-box; color:#777777; font-family:&quot;Open Sans&quot;,sans-serif; font-size:14px; font-style:normal; font-variant-caps:normal; font-variant-ligatures:normal; font-weight:400; letter-spacing:normal; orphans:2; text-align:left; text-decoration-color:initial; text-decoration-style:initial; text-decoration-thickness:initial; text-indent:0px; text-transform:none; white-space:normal; widows:2; word-spacing:0px\">4. After 30 seconds, if you do not move, the lamp will be turned off automatically.</div>\r\n\r\n<div style=\"-webkit-tap-highlight-color:transparent !important; -webkit-text-stroke-width:0px; box-sizing:border-box; color:#777777; font-family:&quot;Open Sans&quot;,sans-serif; font-size:14px; font-style:normal; font-variant-caps:normal; font-variant-ligatures:normal; font-weight:400; letter-spacing:normal; orphans:2; text-align:left; text-decoration-color:initial; text-decoration-style:initial; text-decoration-thickness:initial; text-indent:0px; text-transform:none; white-space:normal; widows:2; word-spacing:0px\">&nbsp;</div>\r\n\r\n<div class=\"magic-14\" style=\"-webkit-tap-highlight-color:transparent !important; -webkit-text-stroke-width:0px; box-sizing:border-box; color:#777777; font-family:&quot;Open Sans&quot;,sans-serif; font-size:14px; font-style:normal; font-variant-caps:normal; font-variant-ligatures:normal; font-weight:400; letter-spacing:normal; orphans:2; text-align:left; text-decoration-color:initial; text-decoration-style:initial; text-decoration-thickness:initial; text-indent:0px; text-transform:none; white-space:normal; widows:2; word-spacing:0px\">5. Too bright or daytime, the lamp does not work.</div>\r\n\r\n<div style=\"-webkit-tap-highlight-color:transparent !important; -webkit-text-stroke-width:0px; box-sizing:border-box; color:#777777; font-family:&quot;Open Sans&quot;,sans-serif; font-size:14px; font-style:normal; font-variant-caps:normal; font-variant-ligatures:normal; font-weight:400; letter-spacing:normal; orphans:2; text-align:left; text-decoration-color:initial; text-decoration-style:initial; text-decoration-thickness:initial; text-indent:0px; text-transform:none; white-space:normal; widows:2; word-spacing:0px\">&nbsp;</div>\r\n\r\n<div class=\"magic-14\" style=\"-webkit-tap-highlight-color:transparent !important; -webkit-text-stroke-width:0px; box-sizing:border-box; color:#777777; font-family:&quot;Open Sans&quot;,sans-serif; font-size:14px; font-style:normal; font-variant-caps:normal; font-variant-ligatures:normal; font-weight:400; letter-spacing:normal; orphans:2; text-align:left; text-decoration-color:initial; text-decoration-style:initial; text-decoration-thickness:initial; text-indent:0px; text-transform:none; white-space:normal; widows:2; word-spacing:0px\">6. It only works in a dark environment or at night.</div>\r\n\r\n<div style=\"-webkit-tap-highlight-color:transparent !important; -webkit-text-stroke-width:0px; box-sizing:border-box; color:#777777; font-family:&quot;Open Sans&quot;,sans-serif; font-size:14px; font-style:normal; font-variant-caps:normal; font-variant-ligatures:normal; font-weight:400; letter-spacing:normal; orphans:2; text-align:left; text-decoration-color:initial; text-decoration-style:initial; text-decoration-thickness:initial; text-indent:0px; text-transform:none; white-space:normal; widows:2; word-spacing:0px\">&nbsp;</div>\r\n\r\n<div style=\"-webkit-tap-highlight-color:transparent !important; -webkit-text-stroke-width:0px; box-sizing:border-box; color:#777777; font-family:&quot;Open Sans&quot;,sans-serif; font-size:14px; font-style:normal; font-variant-caps:normal; font-variant-ligatures:normal; font-weight:400; letter-spacing:normal; margin-bottom:0px; orphans:2; text-align:left; text-decoration-color:initial; text-decoration-style:initial; text-decoration-thickness:initial; text-indent:0px; text-transform:none; white-space:normal; widows:2; word-spacing:0px\">\r\n<p style=\"margin-left:0px; margin-right:0px\"><strong>Specification</strong></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><strong>Surface Mounted LED Ceiling Lamps PIR Motion Sensor Night Lighting 12/18W Modern Ceiling Lights For Entrance Balcony Corridor</strong></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">Voltage: AC180-265V</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">Led chip: SMD2835</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">Material:PC+ ABS</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">Colortemperature:6500K,</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">CRI:ge80</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">Luminous efficiency:ge95</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">Warranty:1 Year</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">Sensor range:3-5M</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">Delay time:30-60S</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><strong>Feature</strong></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">1.Simpler design. Modern lamp for living room lighting</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">2.Thinner- 35mm in thickness, ultra-thin.Saving your space.</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">3.Easy to install.&nbsp;Only two steps to complete the installation</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">4.Energy saving only works when people in darkness and sensor range.</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">5.Very convenient.&nbsp;The base and the lamp body are separated and designed,&nbsp;the replacement is convenient</p>\r\n</div>', NULL, NULL, 'on', 'public/media/product/1759902685644332.jpg', 'public/media/product/1759902685677488.jpg', 'public/media/product/1759902685755873.jpg', '1', '2023-03-09 08:59:50', '2023-03-09 09:00:39'),
(4, 6, 5, NULL, 9, 'Tuya 1 Gang Smart WiFi Wall Switch', 'tu-2546576786', '৳ 2,249.00', '<p style=\"margin-left:0px; margin-right:0px; text-align:left\"><strong>Tuya 1 Gang Smart WiFi Wall Switch</strong></p>\r\n\r\n<table cellspacing=\"0\" class=\"all magic-4\" style=\"-webkit-text-stroke-width:0px; background-color:#ffffff; border-collapse:collapse; border:0px; box-sizing:border-box; color:#333333; font-family:Poppins,arial; font-size:14.4px; font-stretch:inherit; font-style:normal; font-variant-caps:normal; font-variant-east-asian:inherit; font-variant-ligatures:normal; font-variant-numeric:inherit; font-weight:400; letter-spacing:normal; line-height:inherit; margin:0px; orphans:2; padding:0px; text-align:start; text-decoration-color:initial; text-decoration-style:initial; text-decoration-thickness:initial; text-transform:none; vertical-align:baseline; white-space:normal; widows:2; width:403.188px; word-spacing:0px\">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"vertical-align:baseline\">\r\n			<div class=\"magic-5\" style=\"border:0px; box-sizing:border-box; font:inherit; margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; padding:0px; vertical-align:baseline\">Dimension</div>\r\n			</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"vertical-align:baseline\">\r\n			<div class=\"magic-6\" style=\"border:0px; box-sizing:border-box; font:inherit; margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; padding:0px; vertical-align:baseline\">86*86*39MM</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"vertical-align:baseline\">\r\n			<div class=\"magic-5\" style=\"border:0px; box-sizing:border-box; font:inherit; margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; padding:0px; vertical-align:baseline\">Operating voltage</div>\r\n			</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"vertical-align:baseline\">\r\n			<div class=\"magic-6\" style=\"border:0px; box-sizing:border-box; font:inherit; margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; padding:0px; vertical-align:baseline\">110V-240V/50-60HZ</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"vertical-align:baseline\">\r\n			<div class=\"magic-5\" style=\"border:0px; box-sizing:border-box; font:inherit; margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; padding:0px; vertical-align:baseline\">Rated load</div>\r\n			</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"vertical-align:baseline\">\r\n			<div class=\"magic-6\" style=\"border:0px; box-sizing:border-box; font:inherit; margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; padding:0px; vertical-align:baseline\">625W/Gang</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"vertical-align:baseline\">\r\n			<div class=\"magic-5\" style=\"border:0px; box-sizing:border-box; font:inherit; margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; padding:0px; vertical-align:baseline\">Frequency</div>\r\n			</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"vertical-align:baseline\">\r\n			<div class=\"magic-6\" style=\"border:0px; box-sizing:border-box; font:inherit; margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; padding:0px; vertical-align:baseline\">Wifi 2.4G</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"vertical-align:baseline\">\r\n			<div class=\"magic-5\" style=\"border:0px; box-sizing:border-box; font:inherit; margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; padding:0px; vertical-align:baseline\">Wireless Fidelity</div>\r\n			</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"vertical-align:baseline\">\r\n			<div class=\"magic-6\" style=\"border:0px; box-sizing:border-box; font:inherit; margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; padding:0px; vertical-align:baseline\">802.11b/g/n</div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', NULL, NULL, NULL, 'public/media/product/1760051955802279.jpg', 'public/media/product/1760051955893952.jpg', NULL, '0', '2023-03-11 00:17:46', '2023-03-11 00:32:25'),
(6, 7, 1, 6, 9, 'Tuya Smart Door Lock (With Camera)', 'SKU: 1420 Category: Smart Door Locks Tags: door lock, smart door lock', '৳ 21,999.00 – ৳ 23,999.00', 't is one of the most secure lock out there at this budget. This lock has multiple ways of unlocking:\r\n\r\nFingerprint\r\nIC cards\r\nPassword\r\nNot only can you use one of the three methods to unlock the door, but if you want to feel extra secure, you can use the 2 ways of verification method which basically means you have to use any 2 of the 3 methods available to open the door. If one matches and the other does not, then the door will not open.\r\n\r\nThe lock has in-built connectivity that can connect with your Wi-Fi to operate it’s own mobile app. You can download and connect it with the door. So, the next time someone comes, you already know someone is at your doorstep just from the notification that your phone will get when the bell is pressed.\r\n\r\nBattery is removeable and rechargeable. So, you do not have to worry about buying new batteries every couple of months.\r\n\r\nLastly, the lock can be unlocked using a manual key that is included is the box itself. So, if you have elderly people, or that your battery has ran out but you cannot charge the battery from outside because you do not have any power banks, you can use the key to unlock the door very easily.\r\n\r\nInterested in installation?\r\n\r\nClick here to see the installation included package of this door lock.', 'https://youtu.be/TmvqI70jGno', 'on', 'on', 'public/media/product/1760358882855035.jpg', 'public/media/product/1760358882979844.jpg', 'public/media/product/1760358883044593.jpg', '0', '2023-03-14 09:50:54', '2023-03-14 09:50:54'),
(7, 4, 4, 21, 12, 'Yeelight RGB Striplight 1S', 'SKU: 654100775-1-3-1-2', '৳ 3,875.00', 'Yeelight RGB Striplight 1S\r\nONE-KEY CONTROL: You can switch the lightstrip on or off by pushing the button, or change the color by long pressing. It’s very useful at night, because you are too sleepy to find your smart phone for control. If you have Amazon Alexa, Google Assistant, you can via the voice to control.(APP selects Singapore server)\r\nULTIMATE FLEXBILITY: This light strip with ONE-button controller design convenient use; 2 meters cable for most home décor lighting scenes; No messy cables any more, comes with storage organizer.\r\nCOLORS-CHANGING: It have 16 millions versatile colors optional, Combine your favorite music with family lighting, feel the rhythm of light, allow you dance with light and music.(Download YEELIGHT app);Brightness dimming, comfort dimming brightness from 0-100%.\r\nSWITCH LIGHTING FROM PRESET SCENES: From blue to orange, night light to high brightness, just use preseted scenes in YEELIGHT App. It provides you a fast way to get the color you like, and also you can put one into your favorites\r\nEXRENDIBLE: Extend your lightstrip 1S up to 33 feet long, The extension strap needs to be purchased separately. (Maximum extension of 10 meters).', NULL, NULL, NULL, 'public/media/product/1760516280722652.jpg', 'public/media/product/1760516280816945.jpg', 'public/media/product/1760516280888343.jpg', '0', '2023-03-15 23:50:02', '2023-03-16 03:37:57'),
(8, 4, 4, 11, 13, 'WLED-SMART-WIFI-9WB22', '654670995-3-9', 'Tk. 865', '- ENERGY EFFICIENT & ENERGY SAVES UP TO 90% IN RESPECT OF NOMINAL LIGHTINGS.\r\n- CHANGING WATT FROM 0.5W-9W, CCT CHANGING, MOOD CHANGING, BRIGHTNESS CHANGING.\r\n- WIFI. WORKS WITH WALTON SMART APPLIANCES APP. AVAILABLE IN IOS AND GOOGLE PLAY STORE.\r\n- VOICE CONTROL VIA VOICE ASSISTANT (AMAZON ALEXA AND GOOGLE ASSISTANT). GOOGLE HOME SUPPORT.\r\n- SCENE CHANGING, WEATHER WISE BRIGHTNESS CONTROL, GROUP CONTROL WITH 300 WALTON SMART PRODCUTS AT A TIME, COLLABORATION CONTROL WITH WALTON SMART PRODUCT. AUTOMATION.', NULL, NULL, NULL, 'public/media/product/1760518235926166.jpg', NULL, 'public/media/product/1760518236012118.jpg', '0', '2023-03-15 23:50:47', '2023-03-16 04:03:45'),
(9, 5, 4, 21, 14, 'Baseus RGB Colorful Electronic Sports Game LED Light Strip DGKU-01', 'DGKU-01', '৳ 1,400', '<p>Buy Baseus RGB Colorful Electronic Sports Game LED Light Strip DGKU-01 online st best price from Gadgetoo.com.bd in Bangladesh. Baseus RGB Colorful Electronic Sports Game LED Light Strip DGKU-01 has four different mainstream lights to illuminate your night, adding color to your room &amp; creating a romantic ambiance. Th RGB strip is 1.5 meter long &amp; can easily be glued to desktop pc, cabinet, bed, desk or anywhere you want to create a colorful vibe.</p>\r\n\r\n<ul>\r\n	<li>2+4 cool light effects to help you get in the zone</li>\r\n	<li>Enjoy your game in a cool and professional gaming atmosphere</li>\r\n	<li>With independent controller to change hues and switch on or off.</li>\r\n	<li>Glue dropping process, soft and transparent light</li>\r\n	<li>Four mainstream light colors-ice blue, pink, yellow green and purple</li>\r\n	<li>Easy installation, just peel and stick</li>\r\n	<li>RGB seven color gradient light effect, customize the cool atmosphere you want</li>\r\n	<li>Powered by any device with output 5V-1A USB port</li>\r\n</ul>', 'https://youtu.be/9k5rxs6GE84', NULL, NULL, 'public/media/product/1760530448424776.jpg', 'public/media/product/1760530448701101.jpg', 'public/media/product/1760530448753830.jpg', '0', '2023-03-16 07:17:52', '2023-03-16 07:17:52');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('3waDnZBhBAmNgiCOaEze9pBTGrlcuKtGYiwnE0eo', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.5481.178 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVzk1bXlpV2pVbk45cVJKNVJqV1ZDYnRIRG85MjQ1U2ZjbHFKSzlmVyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTU6Imh0dHA6Ly9sb2NhbGhvc3QvNGlyL3RlY2hfNGlyL3B1YmxpYy91c2VyL3ZpZXcvdXNlcmxpc3QiO31zOjUyOiJsb2dpbl9hZG1pbl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1678980978),
('FI1QzdcNly2nZvgacoMR433ejfgoXaJeS1av0XAB', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOGhRVkcxQ1hnc296UVRHRnZiWXVpWnNOQTlySkF2WEV0M2JZUGNXRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDg6Imh0dHA6Ly9sb2NhbGhvc3QvNGlyL3RlY2hfNGlyL3B1YmxpYy9hZG1pbi9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1678980306),
('gXu02ZyaSAQl4fOVtIVsjnrZgE8hwlxNshXVePxz', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/110.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiZzYwUFdrTnd4a01hQmJjc1AwR2lzZ1NDWFRWMWpHMUlzVldndDhyZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDY6Imh0dHA6Ly9sb2NhbGhvc3QvNGlyL3RlY2hfNGlyL3B1YmxpYy9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJFhsZHdvSXdGdkFyVlcyRXVTc29sUS5pb0x6UGRBLnZXT0RjTFN2L3ByVmFucWRMSDRvaGhlIjt9', 1678980981),
('p8v4OfbJDDBtA2GHhAvLOzVjIMVqGy6LhhwUq7uw', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiektzWVBuUlJ1U0cydnpKWWRmaUN0YmhsOWdVd3BqWnRTbkxidW5UaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDg6Imh0dHA6Ly9sb2NhbGhvc3QvNGlyL3RlY2hfNGlyL3B1YmxpYy9hZG1pbi9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1678971758),
('wrhBtwPBgZ8ge8hJ9zRQsE2PQSUfd7vqISKEc7aL', 6, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36 Edg/111.0.1661.41', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiWjdZUHNhVFYxYVRUcXFhOTN1bHpxSUtSSElHcEppdHFVMzlLc3hTVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly9sb2NhbGhvc3QvNGlyL3RlY2hfNGlyL3B1YmxpYyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjY7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkdWUzeVR6a2JLbC5BWFU0VTQ1M0cvZU1Ram50L05oRXRJN3phdXgzdjR0OEp3N1FsTFkyTk8iO30=', 1678981072);

-- --------------------------------------------------------

--
-- Table structure for table `specifications`
--

CREATE TABLE `specifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `specification_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specifications`
--

INSERT INTO `specifications` (`id`, `product_id`, `specification_name`, `created_at`, `updated_at`) VALUES
(49, 4, 'Dimension', NULL, NULL),
(50, 4, 'Operating voltage', NULL, NULL),
(51, 4, 'Rated load', NULL, NULL),
(70, 4, 'red', NULL, NULL),
(71, 4, 'height', NULL, NULL),
(72, 4, 'color', NULL, NULL),
(73, 4, 'asdf', NULL, NULL),
(74, 4, 'design', NULL, NULL),
(75, 4, 'width', NULL, NULL),
(76, 4, 'Wireless Fidelity', NULL, NULL),
(77, 2, 'width', NULL, NULL),
(78, 2, 'height', NULL, NULL),
(79, 2, 'weight', NULL, NULL),
(80, 2, 'Dimension', NULL, NULL),
(81, 2, 'lenght', NULL, NULL),
(82, 2, 'Rated load', NULL, NULL),
(83, 3, 'Sensor range', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `specification_values`
--

CREATE TABLE `specification_values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `specification_id` int(11) NOT NULL,
  `specification_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specification_values`
--

INSERT INTO `specification_values` (`id`, `product_id`, `specification_id`, `specification_value`, `created_at`, `updated_at`) VALUES
(25, 4, 49, '99', NULL, NULL),
(26, 4, 50, '110V-240V/50-60HZ', NULL, NULL),
(35, 4, 51, '425W/Gang', NULL, NULL),
(41, 4, 73, '3434', NULL, NULL),
(42, 4, 71, '3434', NULL, NULL),
(43, 4, 74, 'rectangle', NULL, NULL),
(44, 4, 75, '33 inch', NULL, NULL),
(45, 4, 76, '802.11b/g/n', NULL, NULL),
(46, 2, 77, '45 inch', NULL, NULL),
(47, 2, 79, '45 kg', NULL, NULL),
(48, 2, 80, '34gg', NULL, NULL),
(49, 2, 81, '12 inch', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `subcategory_name`, `created_at`, `updated_at`) VALUES
(1, 8, 'gas leak detector', '2023-03-07 04:36:08', '2023-03-07 06:01:28'),
(2, 8, 'fire alarm (wireless)', '2023-03-07 06:03:31', '2023-03-07 06:03:31'),
(3, 1, 'glass door lock', '2023-03-07 06:05:07', '2023-03-07 06:05:07'),
(4, 1, 'fingerprint door lock', '2023-03-07 06:05:35', '2023-03-07 06:05:35'),
(5, 1, 'knob door lock', '2023-03-07 06:06:57', '2023-03-07 06:06:57'),
(6, 1, 'door lock (with camera)', '2023-03-07 06:07:52', '2023-03-07 06:07:52'),
(7, 3, 'smart gateway', '2023-03-07 06:22:23', '2023-03-07 06:22:23'),
(8, 3, 'echo dot', '2023-03-07 06:23:03', '2023-03-07 06:23:55'),
(9, 3, 'nest hub', '2023-03-07 06:23:21', '2023-03-07 06:23:21'),
(10, 3, 'echo dot with clock', '2023-03-07 06:24:44', '2023-03-07 06:24:44'),
(11, 4, 'motion sensor light', '2023-03-07 06:26:46', '2023-03-07 06:26:46'),
(12, 4, 'smart bulb', '2023-03-07 06:27:27', '2023-03-07 06:27:27'),
(13, 4, 'sync box & tv backlight kit', '2023-03-07 06:28:36', '2023-03-07 06:31:27'),
(14, 4, 'canvas expansion pack', '2023-03-07 06:29:49', '2023-03-07 06:29:49'),
(15, 4, 'hexagon shape Light', '2023-03-07 06:30:38', '2023-03-07 06:31:09'),
(16, 4, 'triangle shape light', '2023-03-07 06:31:00', '2023-03-07 06:31:00'),
(17, 4, 'multicolor striplight', '2023-03-07 06:33:22', '2023-03-07 06:33:30'),
(19, 4, 'hue led bulb', '2023-03-07 06:39:59', '2023-03-07 06:41:25'),
(20, 4, 'smart led bulb', '2023-03-07 06:41:12', '2023-03-07 06:41:12'),
(21, 4, 'rgb striplight', '2023-03-15 23:55:21', '2023-03-15 23:55:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0=inactive,1=active',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `date_of_birth`, `about`, `company`, `address`, `website`, `phone`, `image`, `twitter_profile`, `facebook_profile`, `youtube_profile`, `linkedin_profile`, `status`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'pinju', 'pinjubp@gmail.com', '2023-03-01 22:55:47', '$2y$10$pbeK25QtNcq.G/NjvmMo6e1k199MyPZuf6RDrpmNDlxanfxlsz5z2', '1979-12-23', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'navasoftbd', 'd.c.c - 724', 'navasoftbd.com', '01738422751', '20230302054113jpg', 'https://www.twitter.com/pinju', 'https://www.facebook.com/pinju', 'https://www.youtube.com/pinju', 'https://www.linkedin.com/pinju', '1', 'xTe1KTRuo97mhgkj8A8fAiQVV7U06ulTve6hRs1dRUQ1xkfmbFt1z10FxQYr', NULL, NULL, '2023-03-01 22:55:17', '2023-03-14 05:29:12'),
(2, 'jibon hassan', 'jibon@gmail.com', '2023-03-02 22:37:51', '$2y$10$XldwoIwFvArVW2EuSsolQ.ioLzPdA.vWODcLSv/prVanqdLH4ohhe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2023-03-02 22:37:16', '2023-03-16 09:36:18'),
(4, 'nazanin mowla', 'nava@gmail.com', '2023-03-03 09:38:26', '$2y$10$7NtBXORQlrcbKsEv0hsX.uyjQa8BAiGuD1/jnNuyVNgOPIXvVtR5m', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'navasoftbd', '724-north kafrul', 'https://www.navasoftbd.com', '01738422751', '20230316035208jpg', 'https://twitter.com/nazaninmowla', 'https://facebook.com/nazaninmowla', 'https://www.youtube.com/nazaninmowla', 'https://linkedin.com/nazaninmowla', '1', NULL, NULL, NULL, '2023-03-03 09:37:53', '2023-03-15 21:52:08'),
(5, 'minhaz mustofa', 'alvi@gmail.com', '2023-03-03 09:41:54', '$2y$10$kOS5OJN1RKyiXZJoBEVkzuO6U6LyYpO1WM7y3xFXeJRuZpoIS8cf2', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'golden chain', 'G-12 sharja', 'http:\\\\www.goldenchain.com', '+974566664564', '20230314103614jpg', 'https://twitter.com/alvi', 'https://facebook.com/alvi', 'https://www.youtube.com/alvi', 'https://linkedin.com/alvi', '1', NULL, NULL, NULL, '2023-03-03 09:41:10', '2023-03-16 07:29:20'),
(6, 'mashfi mustofa', 'mashfi@gmail.com', '2023-03-03 10:41:25', '$2y$10$ue3yTzkbKl.AXU4U453G/eMQjnt/NhEtI7zaux3v4t8Jw7QlLY2NO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2023-03-03 10:40:51', '2023-03-14 05:29:06'),
(7, 'akram hossain', 'akram@gmail.com', '2023-03-14 04:40:28', '$2y$10$Aex4M3LEJ1veMN5znDKeR.2d3mN8ASup1fLE808FRLfSRr/fY6LM.', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'ak group', '788 north kafrul', 'https://www.ak.com', '029043353535', '20230314104913jpg', 'https://twitter.com/akram', 'https://facebook.com/akram', 'https://www.youtube.com/akram', 'https://linkedin.com/akram', '1', NULL, NULL, NULL, '2023-03-14 04:39:26', '2023-03-15 05:51:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_brand_name_unique` (`brand_name`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_category_name_unique` (`category_name`);

--
-- Indexes for table `descriptions`
--
ALTER TABLE `descriptions`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `specifications`
--
ALTER TABLE `specifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specification_values`
--
ALTER TABLE `specification_values`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sub_categories_subcategory_name_unique` (`subcategory_name`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `descriptions`
--
ALTER TABLE `descriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `specifications`
--
ALTER TABLE `specifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `specification_values`
--
ALTER TABLE `specification_values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
