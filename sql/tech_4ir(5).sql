-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2023 at 05:25 PM
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
(15, 'BLITZWOLF', '20230316132802png', '2023-03-16 07:28:02', '2023-03-16 07:28:02'),
(16, 'SYSTECH', '20230317120518png', '2023-03-17 06:05:18', '2023-03-17 06:05:18'),
(17, 'JBL', '20230318144926png', '2023-03-18 08:48:34', '2023-03-18 08:49:26'),
(18, 'OTHER', NULL, '2023-03-18 10:03:44', '2023-03-18 10:03:44'),
(19, 'LISTEN', '20230319044430png', '2023-03-18 22:44:30', '2023-03-18 22:44:30'),
(20, 'FDFDFDG', '20230319055317png', '2023-03-18 23:53:17', '2023-03-18 23:53:17');

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
(8, 'smart safety devices', '2023-03-07 04:33:06', '2023-03-07 04:33:06'),
(9, 'wireless smart camera', '2023-03-18 01:34:27', '2023-03-18 03:05:39'),
(10, 'other', '2023-03-18 06:13:34', '2023-03-18 06:13:34'),
(12, 'smart phone', '2023-03-18 08:27:06', '2023-03-18 08:27:06'),
(13, 'smart watch', '2023-03-18 08:32:24', '2023-03-18 08:32:24'),
(15, 'smart music system', '2023-03-18 09:39:36', '2023-03-18 09:39:36'),
(17, 'Temperature Sensor', '2023-03-18 09:45:35', '2023-03-18 09:45:35'),
(18, 'Smart Speaker', '2023-03-18 22:44:30', '2023-03-18 22:44:30');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'akram', 'akram@gmail.com', '0173214567', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, vel ut aperiam atque voluptatibus nobis officiis dicta quisquam architecto numquam sunt rerum voluptate repellat alias maiores iusto asperiores corporis corrupti!', '2023-03-27 01:16:38', '2023-03-27 01:16:38');

-- --------------------------------------------------------

--
-- Table structure for table `contact_addresses`
--

CREATE TABLE `contact_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `addresstype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addressdetails` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_addresses`
--

INSERT INTO `contact_addresses` (`id`, `addresstype`, `addressdetails`, `created_at`, `updated_at`) VALUES
(1, 'Local Address', '<p>724 north kafrul</p>', '2023-03-27 00:33:14', '2023-03-27 00:33:14');

-- --------------------------------------------------------

--
-- Table structure for table `contact_intros`
--

CREATE TABLE `contact_intros` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_intro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_intros`
--

INSERT INTO `contact_intros` (`id`, `contact_intro`, `contact_details`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente', '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, vel ut aperiam atque voluptatibus nobis officiis dicta quisquam architecto numquam sunt rerum voluptate repellat alias maiores iusto asperiores corporis corrupti!</p>\r\n\r\n<h3>What will be the next step?</h3>\r\n\r\n<ul>\r\n	<li>We&#39;ll prepare the proposal.</li>\r\n	<li>we&#39;ll discuss it together.</li>\r\n	<li>let&#39;s start the discussion.</li>\r\n</ul>', '2023-03-27 00:31:52', '2023-03-27 00:31:52');

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
(71, 9, 'Splitter size', '68×32.7x13mm', '2023-03-16 07:22:43', '2023-03-16 07:22:43'),
(72, 10, 'Model', 'YLDD05YL', '2023-03-16 22:54:40', '2023-03-16 22:54:40'),
(73, 10, 'Length', '2 m', '2023-03-16 22:54:57', '2023-03-16 22:54:57'),
(74, 10, 'Width', '10 mm', '2023-03-16 22:55:11', '2023-03-16 22:55:11'),
(75, 10, 'Number of colors', '> 16 million', '2023-03-16 22:55:37', '2023-03-16 22:55:37'),
(76, 10, 'Connectivity', 'Wi-Fi IEEE 802.11 b / g / n 2.4 GHz', '2023-03-16 22:55:59', '2023-03-16 22:55:59'),
(77, 10, 'System requirements', 'Android 4.4 or higher, iOS 9.0 or higher', '2023-03-16 22:56:17', '2023-03-16 22:56:17'),
(78, 10, 'Rated input', 'AC100-240V ~ 50 / 60Hz 0.09A (2m) 0.3A (10m)', '2023-03-16 22:56:39', '2023-03-16 22:56:39'),
(79, 10, 'Power', '7.5 W (48 leds x 0.087W) (2m) 24W (240 leds x 0.087W) (10m)', '2023-03-16 22:57:35', '2023-03-16 22:57:35'),
(82, 11, 'Item', '86type Wifi Fan Smart Switch', '2023-03-17 06:32:10', '2023-03-17 06:32:10'),
(83, 11, 'Voltage', 'AC110-240V, 50hz/60hz', '2023-03-17 06:32:26', '2023-03-17 06:32:26'),
(84, 11, 'Power Supply', 'Neutral and Live line', '2023-03-17 06:32:40', '2023-03-17 06:32:40'),
(85, 11, 'Support System', 'Android/iOS', '2023-03-17 06:32:59', '2023-03-17 06:32:59'),
(86, 11, 'WiFi Model', 'Wi-Fi 2.4GHz', '2023-03-17 06:33:18', '2023-03-17 06:33:18'),
(87, 11, 'WiFi Standard', 'IEEE802.11b/g/n', '2023-03-17 06:33:42', '2023-03-17 06:33:42'),
(88, 11, 'Application', 'Tuya APP , Work with AMAZON ALEXA, GOOGLE ASSISTANT. GOOGLE, IFTTT', '2023-03-17 06:33:59', '2023-03-17 06:33:59'),
(89, 11, 'Panel Material', 'Crystal glass panel, high quality flame retardant PC bottom', '2023-03-17 06:34:27', '2023-03-17 06:34:27'),
(90, 11, 'Size', '86*86*33mm', '2023-03-17 06:34:49', '2023-03-17 06:34:49'),
(91, 12, 'Size', '86mm×86×32mm', '2023-03-17 06:40:49', '2023-03-17 06:40:49'),
(92, 12, 'Weight', '0.3kg', '2023-03-17 06:41:06', '2023-03-17 06:41:06'),
(93, 12, 'Packing box size', '141mm×103×47mm', '2023-03-17 06:41:25', '2023-03-17 06:41:25'),
(94, 12, 'Panel', 'Tempered Crystal Glass', '2023-03-17 06:41:40', '2023-03-17 06:41:40'),
(95, 12, 'Bottom Materials', 'Retardant PC', '2023-03-17 06:41:56', '2023-03-17 06:41:56'),
(96, 12, 'Rated voltage', 'AC 100-250V 50/60Hz', '2023-03-17 06:42:12', '2023-03-17 06:42:12'),
(97, 12, 'Rated current', '10A', '2023-03-17 06:42:29', '2023-03-17 06:42:29'),
(98, 12, 'Rated Load resistive', '1500W', '2023-03-17 06:42:47', '2023-03-17 06:42:47'),
(99, 12, 'Wireless Wi-Fi standard', '802.11b/g/n', '2023-03-17 06:43:41', '2023-03-17 06:43:41'),
(100, 12, 'Rated Load Inductive', '2000W', '2023-03-17 06:43:43', '2023-03-17 06:43:43'),
(101, 12, 'Wireless Wi-Fi Security', 'WEP/WPA/WPA2(AES-TKIP-Personal)', '2023-03-17 06:44:14', '2023-03-17 06:44:14'),
(102, 12, 'Wi-Fi performance Transmission power', '+ 20dBm，11Mbps（CCK）', '2023-03-17 06:44:38', '2023-03-17 06:44:38'),
(103, 12, 'Wi-Fi performance Receiver sensitivity', '-89dBm,11Mbps(CCK)W', '2023-03-17 06:44:57', '2023-03-17 06:44:57'),
(104, 12, 'Standby Current', '0.001A', '2023-03-17 06:45:14', '2023-03-17 06:45:14'),
(105, 12, 'Standby Power', '0.25W', '2023-03-17 06:45:33', '2023-03-17 06:45:33'),
(106, 12, 'Relative humidity', '<95%', '2023-03-17 06:45:46', '2023-03-17 06:45:46'),
(107, 13, 'Item', '86type Wifi Dimmer Smart Switch', '2023-03-17 08:05:28', '2023-03-17 08:05:28'),
(108, 13, 'Voltage', 'AC110-240V, 50hz/60hz', '2023-03-17 08:05:41', '2023-03-17 08:05:41'),
(109, 13, 'Power Supply', 'Neutral and Live line', '2023-03-17 08:05:56', '2023-03-17 08:05:56'),
(110, 13, 'Support System', 'Android/iOS', '2023-03-17 08:06:09', '2023-03-17 08:06:09'),
(111, 13, 'WiFi Model', 'Wi-Fi 2.4GHz', '2023-03-17 08:06:23', '2023-03-17 08:06:23'),
(112, 13, 'WiFi Standard', 'IEEE802.11b/g/n', '2023-03-17 08:06:36', '2023-03-17 08:06:36'),
(113, 13, 'Application', 'Tuya APP , Work with AMAZON ALEXA, GOOGLE ASSISTANT. GOOGLE, IFTTT', '2023-03-17 08:06:58', '2023-03-17 08:06:58'),
(114, 13, 'Panel Material', 'Crystal glass panel, high quality flame retardant PC bottom', '2023-03-17 08:07:58', '2023-03-17 08:07:58'),
(115, 13, 'Size', '86*86*33mm', '2023-03-17 08:08:11', '2023-03-17 08:08:11'),
(116, 14, 'Dimension', '147*86*38MM', '2023-03-17 08:15:05', '2023-03-17 08:15:05'),
(117, 14, 'Operating voltage', '110V-240V/50-60HZ', '2023-03-17 08:15:21', '2023-03-17 08:15:21'),
(118, 14, 'APP download', 'Systech Smart /Smart Life/ Tuya Smart', '2023-03-17 08:15:36', '2023-03-17 08:15:36'),
(119, 14, 'Wall Socket Output', '13A', '2023-03-17 08:15:50', '2023-03-17 08:15:50'),
(120, 14, 'USB Output', 'USB 2.0;5V,4A', '2023-03-17 08:16:08', '2023-03-17 08:16:08'),
(121, 14, 'Wireless Fidelity', '802.11b/g/n', '2023-03-17 08:16:23', '2023-03-17 08:16:23'),
(122, 14, 'Voice Control', 'Can work with Alexa & Echo dot/Google home/Alexa/IFTTT', '2023-03-17 08:16:39', '2023-03-17 08:16:39'),
(123, 14, 'Plastic material', 'ABS+PC', '2023-03-17 08:16:56', '2023-03-17 08:16:56'),
(124, 15, 'Protocol', 'Wi-Fi', '2023-03-17 08:22:30', '2023-03-17 08:22:30'),
(125, 15, 'Product Color', 'White', '2023-03-17 08:22:46', '2023-03-17 08:22:46'),
(126, 15, 'Market Specifications', 'IN Standard', '2023-03-17 08:23:00', '2023-03-17 08:23:00'),
(127, 15, 'Battery Type', 'NO', '2023-03-17 08:23:10', '2023-03-17 08:23:10'),
(128, 15, 'Function Description', 'Remote or local on/off, app timing, countdown,USB charging', '2023-03-17 08:23:25', '2023-03-17 08:23:25'),
(129, 15, 'Material', 'V0 flame retardant grade material', '2023-03-17 08:23:44', '2023-03-17 08:23:44'),
(130, 15, 'Package Size', '340*76*40 mm', '2023-03-17 08:24:00', '2023-03-17 08:24:00'),
(131, 15, 'Product Size', '272*52*28 mm', '2023-03-17 08:24:13', '2023-03-17 08:24:13'),
(132, 15, 'Net Weight', '475 g', '2023-03-17 08:24:26', '2023-03-17 08:24:26'),
(133, 15, 'Power Supply Type', '250V', '2023-03-17 08:24:40', '2023-03-17 08:24:40'),
(134, 15, 'Rated Power（W）', '2500W', '2023-03-17 08:24:58', '2023-03-17 08:24:58'),
(135, 15, 'Rated Voltage(V)', '250V', '2023-03-17 08:25:14', '2023-03-17 08:25:14'),
(136, 15, 'Load Type', '2500W', '2023-03-17 08:25:29', '2023-03-17 08:25:29'),
(137, 15, 'Operation environment', 'Indoor', '2023-03-17 08:25:41', '2023-03-17 08:25:41'),
(138, 16, 'Rated Voltage', '90-250VAC Rated', '2023-03-17 08:30:57', '2023-03-17 08:30:57'),
(139, 16, 'Voltage', '10A Wifi', '2023-03-17 08:31:19', '2023-03-17 08:31:19'),
(140, 16, 'Standard', 'IEEE802.11.b/g/n.2.4GHz', '2023-03-17 08:31:38', '2023-03-17 08:31:38'),
(141, 16, 'Size', 'L92*W38*H24MM', '2023-03-17 08:31:52', '2023-03-17 08:31:52'),
(142, 16, 'Voice control', 'once you have this switch,you can connect it with Amazon  Alexa(Amazon echo/dot/tap) or Google Assistant for voice control.', '2023-03-17 08:32:11', '2023-03-17 08:32:11'),
(143, 16, 'Timing Function', 'Take full control of your home or office lights thanks to schedule timer that will allow you to plan the exact time to turn lights and appliances on/off automatically', '2023-03-17 08:32:51', '2023-03-17 08:32:51'),
(144, 16, 'Share Device', 'This samrt switch can have several control sites shared by different family members.one mobile phone can control many switches also.', '2023-03-17 08:37:02', '2023-03-17 08:37:02'),
(145, 17, 'Dimension', '86*86*39MM', '2023-03-17 08:43:24', '2023-03-17 08:43:24'),
(146, 17, 'Voltage', '110-240V~ AC/50~60Hz', '2023-03-17 08:43:36', '2023-03-17 08:43:36'),
(147, 17, 'Resistive Max. load', '625W', '2023-03-17 08:44:01', '2023-03-17 08:44:01'),
(148, 17, 'Inductive Max. load', '150W', '2023-03-17 08:44:15', '2023-03-17 08:44:15'),
(149, 19, 'Dimension', '147*86*38MM', '2023-03-17 08:49:01', '2023-03-17 08:49:01'),
(150, 19, 'Voltage', '110-240V AC/50~60Hz', '2023-03-17 08:49:19', '2023-03-17 08:49:19'),
(151, 19, 'Lamp Load', '600W/Gang', '2023-03-17 08:49:41', '2023-03-17 08:49:41'),
(152, 19, 'Fan Load', '<600W Wifi', '2023-03-17 08:49:58', '2023-03-17 08:49:58'),
(153, 19, 'Standard', 'EEE802.11b/g/n', '2023-03-17 08:50:13', '2023-03-17 08:50:13'),
(154, 21, 'Product size', '86mm*86mm', '2023-03-17 09:43:40', '2023-03-17 09:43:40'),
(155, 21, 'Shell Material', 'PC retardant material', '2023-03-17 09:43:56', '2023-03-17 09:43:56'),
(156, 21, 'Panel Material', 'Toughen glass', '2023-03-17 09:44:09', '2023-03-17 09:44:09'),
(157, 21, 'Operating Voltage', 'AC 110V~250V', '2023-03-17 09:44:25', '2023-03-17 09:44:25'),
(158, 21, 'Max Current', '6A', '2023-03-17 09:44:42', '2023-03-17 09:44:42'),
(159, 21, 'Rated Power', '600W/Gang', '2023-03-17 09:44:55', '2023-03-17 09:44:55'),
(160, 21, 'Energy Consumption', '<0.1mA', '2023-03-17 09:45:09', '2023-03-17 09:45:09'),
(161, 21, 'Operating Environment', '30~70 Centigrade, less than 95%RH', '2023-03-17 09:45:25', '2023-03-17 09:45:25'),
(162, 21, 'Certification', 'CE, ROSH,FCC', '2023-03-17 09:45:36', '2023-03-17 09:45:36'),
(163, 21, 'Longevity', '100,000 times operation/ Two years warranty', '2023-03-17 09:45:50', '2023-03-17 09:45:50'),
(164, 22, 'Function', 'Disinfection, no touch', '2023-03-17 09:52:09', '2023-03-17 09:52:09'),
(165, 22, 'Color', 'White', '2023-03-17 09:52:19', '2023-03-17 09:52:19'),
(166, 22, 'Product size', '8.4*6*7.6 cm', '2023-03-17 09:52:40', '2023-03-17 09:52:40'),
(167, 22, 'Weight', '138 g', '2023-03-17 09:52:53', '2023-03-17 09:52:53'),
(168, 22, 'Power supply', '2000mA Battery', '2023-03-17 09:53:05', '2023-03-17 09:53:05'),
(169, 23, 'Function', 'Humidifier, Projection，Ambient light，Can rotate freely', '2023-03-17 09:56:15', '2023-03-17 09:56:15'),
(170, 23, 'Color', 'Light Blue, White, Navy, Pink', '2023-03-17 09:56:31', '2023-03-17 09:56:31'),
(171, 23, 'Product size', '21.3*7*6.6 cm', '2023-03-17 09:56:45', '2023-03-17 09:56:45'),
(172, 23, 'Weight', '170g', '2023-03-17 09:56:55', '2023-03-17 09:56:55'),
(173, 23, 'Power supply', 'USB Line', '2023-03-17 09:57:10', '2023-03-17 09:57:10'),
(174, 23, 'Capacity', '200 ml', '2023-03-17 09:57:21', '2023-03-17 09:57:21'),
(175, 25, 'Maximum Hold', 'Hold 6 inch mobile phone', '2023-03-17 22:22:08', '2023-03-17 22:22:08'),
(176, 25, 'Rated Voltage', 'DC5V', '2023-03-17 22:22:24', '2023-03-17 22:22:24'),
(177, 25, 'Input Current', '1-2A', '2023-03-17 22:22:39', '2023-03-17 22:22:39'),
(178, 25, 'Disinfection Power', '2W', '2023-03-17 22:22:55', '2023-03-17 22:22:55'),
(179, 25, 'Net Weight', '0.45kg', '2023-03-17 22:23:10', '2023-03-17 22:23:10'),
(180, 25, 'Gross Weight', '0.6kg', '2023-03-17 22:23:25', '2023-03-17 22:23:25'),
(181, 25, 'Maximum Power', '9W', '2023-03-17 22:23:38', '2023-03-17 22:23:38'),
(182, 25, 'UV Wavelength', '253.7nm', '2023-03-17 22:23:52', '2023-03-17 22:23:52'),
(183, 25, 'Product Size', '220*125*55mm', '2023-03-17 22:24:11', '2023-03-17 22:24:11'),
(184, 25, 'Package Size', '246*134*55mm', '2023-03-17 22:24:24', '2023-03-17 22:24:24'),
(185, 26, 'Function', 'Diluted disinfectant Spraying, Facial hydrating, Hair Moisturizing & Caring', '2023-03-18 00:21:11', '2023-03-18 00:22:21'),
(186, 26, 'Model number', 'SSS Nano Steam', '2023-03-18 00:23:12', '2023-03-18 00:23:12'),
(187, 26, 'Color', 'White, Brown (Optional)', '2023-03-18 00:23:29', '2023-03-18 00:23:29'),
(188, 26, 'Technology', 'High pressure spraying & Blue light sterilizing', '2023-03-18 00:23:41', '2023-03-18 00:23:41'),
(189, 26, 'Power', '1300W', '2023-03-18 00:23:54', '2023-03-18 00:23:54'),
(190, 26, 'Voltage', '220V', '2023-03-18 00:24:06', '2023-03-18 00:24:06'),
(191, 26, 'Volume', '280ml', '2023-03-18 00:24:18', '2023-03-18 00:24:18'),
(192, 26, 'Material', 'PC', '2023-03-18 00:24:38', '2023-03-18 00:24:38'),
(193, 26, 'Package size', '24*12*24cm', '2023-03-18 00:24:54', '2023-03-18 00:24:54'),
(194, 28, 'resolution', '2MP(1920X1080) high resolution', '2023-03-18 01:37:41', '2023-03-18 01:37:41'),
(195, 28, 'Support', 'Pan 355° /Tilt 85°', '2023-03-18 01:38:03', '2023-03-18 01:38:03'),
(196, 28, 'lens', 'Build in 3.6mm lens', '2023-03-18 01:38:20', '2023-03-18 01:38:20'),
(197, 28, 'View angle', 'View angle up to 110°', '2023-03-18 01:38:41', '2023-03-18 01:38:41'),
(198, 28, 'vision', 'Day/Night vision, IR distance:10m', '2023-03-18 01:39:15', '2023-03-18 01:39:15'),
(199, 28, 'Motion Detection', 'yes', '2023-03-18 01:39:32', '2023-03-18 01:39:32'),
(200, 28, 'audio communication', '2-way audio communication', '2023-03-18 01:39:49', '2023-03-18 01:39:49'),
(201, 28, 'Storage', 'Support TF-card Storage, up to 128GB', '2023-03-18 01:40:07', '2023-03-18 01:40:07'),
(202, 28, 'Auto tracking', 'yes', '2023-03-18 01:40:22', '2023-03-18 01:40:22'),
(203, 28, 'Support Cloud Storage', 'yes', '2023-03-18 01:40:35', '2023-03-18 01:40:35'),
(204, 28, 'Support Mobile Remote View & Control', 'yes', '2023-03-18 01:40:51', '2023-03-18 01:40:51'),
(205, 28, 'Power', '10V-240V', '2023-03-18 01:41:07', '2023-03-18 01:41:07'),
(206, 29, 'Special Features', 'Human Motion Tracking, Vandal-proof', '2023-03-18 01:43:37', '2023-03-18 01:43:37'),
(207, 29, 'Data Storage Options', 'Cloud, Memory Card', '2023-03-18 01:44:09', '2023-03-18 01:44:09'),
(208, 29, 'Video Compression Format:', 'H.265', '2023-03-18 01:44:35', '2023-03-18 01:44:35'),
(209, 29, 'Unique Point', 'TUYA APP/Auto tracking', '2023-03-18 01:45:04', '2023-03-18 01:45:04'),
(210, 29, 'Resolution', '2M/1M', '2023-03-18 01:45:20', '2023-03-18 01:45:20'),
(211, 29, 'IR leds', '6 pcs IR leds', '2023-03-18 01:45:37', '2023-03-18 01:45:37'),
(212, 29, 'Lens', '3.6mm', '2023-03-18 01:45:56', '2023-03-18 01:45:56'),
(213, 29, 'Storage', 'TF Card (MAX 128GB )& Amazon cloud', '2023-03-18 01:46:11', '2023-03-18 01:46:11'),
(214, 29, 'Box\'s size', '10.5*6.5*8CM 0.3KG/pcs', '2023-03-18 01:46:32', '2023-03-18 01:46:32'),
(215, 29, 'Weight', '0.3kg', '2023-03-18 01:46:47', '2023-03-18 01:46:47'),
(216, 29, 'Color', 'White', '2023-03-18 01:47:07', '2023-03-18 01:47:07'),
(217, 30, 'Image sensor', 'HD720PH/960PH/1080PH', '2023-03-18 01:49:54', '2023-03-18 01:49:54'),
(218, 30, 'View angle', '360° / 180°', '2023-03-18 01:50:10', '2023-03-18 01:50:10'),
(219, 30, 'Minimum illumination', '0.01Lux@F2.0,black/white 0.001Lux@F2.0', '2023-03-18 01:50:25', '2023-03-18 01:50:25'),
(220, 30, 'Wireless', 'IEEE802.11b/g/n', '2023-03-18 01:50:42', '2023-03-18 01:50:42'),
(221, 30, 'Network settings', 'AP mode/Station mode', '2023-03-18 01:50:58', '2023-03-18 01:50:58'),
(222, 30, 'Mobile WIFI Video', 'HD 720P/960P/1080P/VGA', '2023-03-18 01:51:14', '2023-03-18 01:51:14'),
(223, 30, 'Storage Media', 'Micro SD(UP to 34G)', '2023-03-18 01:51:28', '2023-03-18 01:51:28'),
(224, 30, 'Audio coding', 'ADPCM two way voice intercom', '2023-03-18 01:51:56', '2023-03-18 01:51:56'),
(225, 31, 'Model No.(Wireless)', 'NVR-6124NM-W-2MU', '2023-03-18 02:02:00', '2023-03-18 02:02:00'),
(226, 31, 'Video input', '4CH 8CH', '2023-03-18 02:02:23', '2023-03-18 02:02:23'),
(227, 31, 'Chipset', 'Hi3516D V100', '2023-03-18 02:02:38', '2023-03-18 02:02:38'),
(228, 31, 'Operation System', 'Embedded LINUX operating system', '2023-03-18 02:02:57', '2023-03-18 02:02:57'),
(229, 31, 'Video Compression', 'H.264,H.265', '2023-03-18 02:03:10', '2023-03-18 02:03:10'),
(230, 31, 'Living review', '720P/960P/1080P', '2023-03-18 02:03:27', '2023-03-18 02:03:27'),
(231, 31, 'Encode/Decode/Playback', '720P/960P/1080P', '2023-03-18 02:03:46', '2023-03-18 02:03:46'),
(232, 31, 'Display Input', 'VGA', '2023-03-18 02:04:06', '2023-03-18 02:04:06'),
(233, 31, 'Video output(HDMI)', '1CH,Resolution:1024x768, 1280x1024,1366x768, 1440x900,1920x1080p', '2023-03-18 02:04:26', '2023-03-18 02:04:26'),
(234, 31, 'Audio output', '1pcs,3.5inch Audio connector(optional)', '2023-03-18 02:04:44', '2023-03-18 02:04:44'),
(235, 31, 'IP protocol', 'IEEE 802.1Wi-fi, UPnP(plug-play),SMTP,PPPoE,DHCP', '2023-03-18 02:05:00', '2023-03-18 02:05:00'),
(236, 31, 'USB port', '1*USB 2.0(double USB port optional )', '2023-03-18 02:05:15', '2023-03-18 02:05:15'),
(237, 31, 'HDD port', '1*SATA (Max support 6T)', '2023-03-18 02:05:31', '2023-03-18 02:05:31'),
(238, 31, 'Wirelss port', 'Wifi (Through USB extender)', '2023-03-18 02:05:44', '2023-03-18 02:05:44'),
(239, 31, 'Power', '1pcs 12V/3A power adaptor', '2023-03-18 02:05:57', '2023-03-18 02:05:57'),
(240, 31, 'Consumption', '<18W(Without HDD)', '2023-03-18 02:06:10', '2023-03-18 02:06:10'),
(241, 31, 'Lcd Sreen', '12.5inch IPS Full review HD Screen, Screen Resolution:1920 x1080', '2023-03-18 02:06:26', '2023-03-18 02:06:26'),
(242, 31, 'Recording', 'manual video,timing record,motion detection record,alarm record', '2023-03-18 02:06:39', '2023-03-18 02:06:39'),
(243, 31, 'P2P: Playback mode', 'real time,normal,event', '2023-03-18 02:06:58', '2023-03-18 02:06:58'),
(244, 31, 'Product Size / Weight:', 'Support CMS, APP(android, ios)', '2023-03-18 02:07:17', '2023-03-18 02:07:17'),
(245, 31, 'Product size:', '305*228*53mm', '2023-03-18 02:07:40', '2023-03-18 02:07:40'),
(246, 31, 'Weight', '1.27kg(Without HDD)', '2023-03-18 02:07:51', '2023-03-18 02:07:51'),
(247, 31, 'NVR color box', '347*311*100mm mm', '2023-03-18 02:08:08', '2023-03-18 02:08:08'),
(248, 31, '4 Cameras Kit', '325*198*280mm', '2023-03-18 02:08:22', '2023-03-18 02:08:22'),
(249, 31, 'Carton Size', '8 Cameras Kits:328*378*203mm', '2023-03-18 02:08:35', '2023-03-18 02:08:35'),
(250, 32, 'Image sensor', 'HD720PH/960PH/1080PH', '2023-03-18 03:08:55', '2023-03-18 03:08:55'),
(251, 32, 'View angle', '360° / 180°', '2023-03-18 03:09:09', '2023-03-18 03:09:09'),
(252, 32, 'Minimum illumination', '0.01Lux@F2.0,black/white 0.001Lux@F2.0', '2023-03-18 03:09:22', '2023-03-18 03:09:22'),
(253, 32, 'Wireless', 'IEEE802.11b/g/n', '2023-03-18 03:09:33', '2023-03-18 03:09:33'),
(254, 32, 'Network settings', 'AP mode/Station mode', '2023-03-18 03:09:48', '2023-03-18 03:09:48'),
(255, 32, 'Mobile WIFI Video', 'HD 720P/960P/1080P/VGA', '2023-03-18 03:10:01', '2023-03-18 03:10:01'),
(256, 32, 'Storage Media', 'Micro SD(UP to 34G)', '2023-03-18 03:10:16', '2023-03-18 03:10:16'),
(257, 32, 'Audio coding', 'ADPCM two way voice intercom', '2023-03-18 03:10:30', '2023-03-18 03:10:30'),
(258, 34, 'Lamp Holder', 'E26 / E27', '2023-03-18 03:25:10', '2023-03-18 03:25:10'),
(259, 34, 'Luminous Flux', '800lm', '2023-03-18 03:25:24', '2023-03-18 03:25:24'),
(260, 34, 'Connectivity', 'Wi-Fi IEEE 802.11 b/g/n 2.4GHz', '2023-03-18 03:25:44', '2023-03-18 03:26:31'),
(261, 34, 'Rated Input', '100V-240V~50/60Hz', '2023-03-18 03:27:20', '2023-03-18 03:27:20'),
(262, 34, 'Rated Power', '8.5W', '2023-03-18 03:27:33', '2023-03-18 03:27:33'),
(263, 34, 'Life Expectancy', '25,000 hours', '2023-03-18 03:27:57', '2023-03-18 03:27:57'),
(264, 35, 'Cable Length', '2.5m', '2023-03-18 03:30:26', '2023-03-18 03:30:26'),
(265, 35, 'Weight', '208 kg', '2023-03-18 03:30:40', '2023-03-18 03:30:40'),
(266, 35, 'Dimensions', '114 × 230 × 200 cm', '2023-03-18 03:30:51', '2023-03-18 03:30:51'),
(267, 36, 'Cable Length', '2.5m', '2023-03-18 03:33:32', '2023-03-18 03:33:32'),
(268, 36, 'Weight', '141 kg', '2023-03-18 03:33:46', '2023-03-18 03:33:46'),
(269, 36, 'Dimensions', '230 × 200 cm', '2023-03-18 03:33:57', '2023-03-18 03:33:57'),
(270, 38, 'Suitable Door Thickness', '8~12mm', '2023-03-18 04:24:56', '2023-03-18 04:24:56'),
(271, 38, 'Material', 'Zinc alloy', '2023-03-18 04:25:07', '2023-03-18 04:25:07'),
(272, 38, 'Doorbell', 'Built-in', '2023-03-18 04:25:19', '2023-03-18 04:25:19'),
(273, 38, 'App', 'TTLock', '2023-03-18 04:25:33', '2023-03-18 04:25:33'),
(274, 38, 'Fingerprint unlock', 'Semiconductor biometrics reader', '2023-03-18 04:25:47', '2023-03-18 04:25:47'),
(275, 38, 'Fingerpring Capacity', '150 pcs', '2023-03-18 04:26:00', '2023-03-18 04:26:00'),
(276, 38, 'Password unlock', '150 pcs', '2023-03-18 04:26:15', '2023-03-18 04:26:15'),
(277, 38, 'IC card', '150 pcs', '2023-03-18 04:26:31', '2023-03-18 04:26:31'),
(278, 38, 'Keypad', 'Touch keypad', '2023-03-18 04:26:44', '2023-03-18 04:26:44'),
(279, 39, 'Material', 'Aluminum lock panel', '2023-03-18 04:29:17', '2023-03-18 04:29:17'),
(280, 39, 'Available color', 'Black, silver', '2023-03-18 04:29:30', '2023-03-18 04:29:30'),
(281, 39, 'Accept door thickness', '35-65mm', '2023-03-18 04:29:41', '2023-03-18 04:29:41'),
(282, 39, 'Communication mode', 'Tuya app', '2023-03-18 04:29:57', '2023-03-18 04:29:57'),
(283, 39, 'Support system', 'IOS 7.0 or above,  Android 4.4 or above', '2023-03-18 04:30:10', '2023-03-18 04:30:10'),
(284, 39, 'Battery life', '10000 times normal open (12 months)', '2023-03-18 04:30:23', '2023-03-18 04:30:23'),
(285, 39, 'Power supply', '4pcs AAA Alkaline batteries', '2023-03-18 04:30:36', '2023-03-18 04:30:36'),
(286, 39, 'unlock way', 'app, fingerprint, code, M1 Card, key', '2023-03-18 05:02:54', '2023-03-18 05:02:54'),
(287, 39, 'working temperature', '-20~50 degree', '2023-03-18 05:03:07', '2023-03-18 05:03:07'),
(288, 39, 'working humidity', '10%-95%', '2023-03-18 05:03:21', '2023-03-18 05:03:21'),
(289, 39, 'Available mortise', 'US STANDARD DEADBOLT', '2023-03-18 05:03:38', '2023-03-18 05:03:38'),
(290, 40, 'Unlock way', 'Fingerprint, Password, Card, Key, App unlock.', '2023-03-18 05:05:59', '2023-03-18 05:05:59'),
(291, 40, 'Accept door thickness', '35-65mm smart lock', '2023-03-18 05:06:12', '2023-03-18 05:06:12'),
(292, 40, 'Power supply', '4 AA batteries', '2023-03-18 05:06:23', '2023-03-18 05:06:23'),
(293, 40, 'Fingerprint', '≤50', '2023-03-18 05:06:36', '2023-03-18 05:06:36'),
(294, 40, 'Password', '≤100', '2023-03-18 05:06:48', '2023-03-18 05:06:48'),
(295, 40, 'Card', '≤100', '2023-03-18 05:07:01', '2023-03-18 05:07:01'),
(296, 40, 'key', '≤2', '2023-03-18 05:08:28', '2023-03-18 05:08:28'),
(297, 42, 'Power adapter', '15W', '2023-03-18 06:01:23', '2023-03-18 06:01:23'),
(298, 42, 'Supported OS', 'iOS and android', '2023-03-18 06:01:38', '2023-03-18 06:01:38'),
(299, 42, 'Power cable', '1.5m', '2023-03-18 06:01:50', '2023-03-18 06:01:50');

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
-- Table structure for table `intros`
--

CREATE TABLE `intros` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `introduction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0=inactive,1=active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `intros`
--

INSERT INTO `intros` (`id`, `introduction`, `intro_details`, `link`, `banner`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Example headline.', '<p>&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>', '39', '20230327113333png', '1', '2023-03-27 05:33:33', '2023-03-27 05:51:13'),
(2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>', '40', '20230327113439png', '1', '2023-03-27 05:34:39', '2023-03-27 06:02:45'),
(3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>', '41', '20230327113542webp', '0', '2023-03-27 05:35:42', '2023-03-27 06:02:56');

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
(19, '2023_03_13_130452_create_descriptions_table', 34),
(20, '2023_03_27_054636_create_services_table', 35),
(21, '2023_03_27_054721_create_service_intros_table', 35),
(22, '2023_03_27_061229_create_contacts_table', 36),
(23, '2023_03_27_061714_create_contact_addresses_table', 36),
(24, '2023_03_27_061824_create_contact_intros_table', 36),
(25, '2023_03_27_111513_create_intros_table', 37);

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
(2, 4, 3, 9, 1, 'Google Nest Hub (2nd gen)', '654670995-3-9', '11,999.00', '<p><span style=\"background-color:#ffffff; color:#777777\">Keeping track of all your home moments is easy with Google Home Hub. Your calendar, commute, reminders, and more are right at your fingertips with Voice Match. It allows you to make shopping lists, watch the news, and contact friends, family, and local businesses.</span></p>', NULL, NULL, NULL, 'public/media/product/1759902216882314.jpg', 'public/media/product/1759902217053217.jpg', NULL, '0', '2023-03-09 08:50:25', '2023-03-25 22:58:53'),
(3, 2, 4, 11, 10, 'Motion Sensor Light AC 18w', '654111995-20-9', '1,299.00', '<p style=\"margin-left:0px; margin-right:0px; text-align:left\">Usage guide of the motion sensor ceiling light&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:left\">1. The motion sensor lamp must be installed vertically, it can work well.</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:left\">2. When you start the motion sensor bulb, it will turn on 5 minutes, it is normal</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:left\">3. When you in the sensor range, it works for about 25-30 seconds.</p>\r\n\r\n<div class=\"magic-14\" style=\"-webkit-tap-highlight-color:transparent !important; -webkit-text-stroke-width:0px; box-sizing:border-box; color:#777777; font-family:&quot;Open Sans&quot;,sans-serif; font-size:14px; font-style:normal; font-variant-caps:normal; font-variant-ligatures:normal; font-weight:400; letter-spacing:normal; orphans:2; text-align:left; text-decoration-color:initial; text-decoration-style:initial; text-decoration-thickness:initial; text-indent:0px; text-transform:none; white-space:normal; widows:2; word-spacing:0px\">4. After 30 seconds, if you do not move, the lamp will be turned off automatically.</div>\r\n\r\n<div style=\"-webkit-tap-highlight-color:transparent !important; -webkit-text-stroke-width:0px; box-sizing:border-box; color:#777777; font-family:&quot;Open Sans&quot;,sans-serif; font-size:14px; font-style:normal; font-variant-caps:normal; font-variant-ligatures:normal; font-weight:400; letter-spacing:normal; orphans:2; text-align:left; text-decoration-color:initial; text-decoration-style:initial; text-decoration-thickness:initial; text-indent:0px; text-transform:none; white-space:normal; widows:2; word-spacing:0px\">&nbsp;</div>\r\n\r\n<div class=\"magic-14\" style=\"-webkit-tap-highlight-color:transparent !important; -webkit-text-stroke-width:0px; box-sizing:border-box; color:#777777; font-family:&quot;Open Sans&quot;,sans-serif; font-size:14px; font-style:normal; font-variant-caps:normal; font-variant-ligatures:normal; font-weight:400; letter-spacing:normal; orphans:2; text-align:left; text-decoration-color:initial; text-decoration-style:initial; text-decoration-thickness:initial; text-indent:0px; text-transform:none; white-space:normal; widows:2; word-spacing:0px\">5. Too bright or daytime, the lamp does not work.</div>\r\n\r\n<div style=\"-webkit-tap-highlight-color:transparent !important; -webkit-text-stroke-width:0px; box-sizing:border-box; color:#777777; font-family:&quot;Open Sans&quot;,sans-serif; font-size:14px; font-style:normal; font-variant-caps:normal; font-variant-ligatures:normal; font-weight:400; letter-spacing:normal; orphans:2; text-align:left; text-decoration-color:initial; text-decoration-style:initial; text-decoration-thickness:initial; text-indent:0px; text-transform:none; white-space:normal; widows:2; word-spacing:0px\">&nbsp;</div>\r\n\r\n<div class=\"magic-14\" style=\"-webkit-tap-highlight-color:transparent !important; -webkit-text-stroke-width:0px; box-sizing:border-box; color:#777777; font-family:&quot;Open Sans&quot;,sans-serif; font-size:14px; font-style:normal; font-variant-caps:normal; font-variant-ligatures:normal; font-weight:400; letter-spacing:normal; orphans:2; text-align:left; text-decoration-color:initial; text-decoration-style:initial; text-decoration-thickness:initial; text-indent:0px; text-transform:none; white-space:normal; widows:2; word-spacing:0px\">6. It only works in a dark environment or at night.</div>\r\n\r\n<div style=\"-webkit-tap-highlight-color:transparent !important; -webkit-text-stroke-width:0px; box-sizing:border-box; color:#777777; font-family:&quot;Open Sans&quot;,sans-serif; font-size:14px; font-style:normal; font-variant-caps:normal; font-variant-ligatures:normal; font-weight:400; letter-spacing:normal; orphans:2; text-align:left; text-decoration-color:initial; text-decoration-style:initial; text-decoration-thickness:initial; text-indent:0px; text-transform:none; white-space:normal; widows:2; word-spacing:0px\">&nbsp;</div>\r\n\r\n<div style=\"-webkit-tap-highlight-color:transparent !important; -webkit-text-stroke-width:0px; box-sizing:border-box; color:#777777; font-family:&quot;Open Sans&quot;,sans-serif; font-size:14px; font-style:normal; font-variant-caps:normal; font-variant-ligatures:normal; font-weight:400; letter-spacing:normal; margin-bottom:0px; orphans:2; text-align:left; text-decoration-color:initial; text-decoration-style:initial; text-decoration-thickness:initial; text-indent:0px; text-transform:none; white-space:normal; widows:2; word-spacing:0px\">\r\n<p style=\"margin-left:0px; margin-right:0px\"><strong>Specification</strong></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><strong>Surface Mounted LED Ceiling Lamps PIR Motion Sensor Night Lighting 12/18W Modern Ceiling Lights For Entrance Balcony Corridor</strong></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">Voltage: AC180-265V</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">Led chip: SMD2835</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">Material:PC+ ABS</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">Colortemperature:6500K,</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">CRI:ge80</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">Luminous efficiency:ge95</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">Warranty:1 Year</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">Sensor range:3-5M</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">Delay time:30-60S</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><strong>Feature</strong></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">1.Simpler design. Modern lamp for living room lighting</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">2.Thinner- 35mm in thickness, ultra-thin.Saving your space.</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">3.Easy to install.&nbsp;Only two steps to complete the installation</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">4.Energy saving only works when people in darkness and sensor range.</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">5.Very convenient.&nbsp;The base and the lamp body are separated and designed,&nbsp;the replacement is convenient</p>\r\n</div>', NULL, NULL, 'on', 'public/media/product/1759902685644332.jpg', 'public/media/product/1759902685677488.jpg', 'public/media/product/1759902685755873.jpg', '0', '2023-03-09 08:59:50', '2023-03-25 22:58:55'),
(4, 6, 5, 22, 9, 'Tuya 1 Gang Smart WiFi Wall Switch', 'tu-2546576786', '2,249.00', '<p style=\"margin-left:0px; margin-right:0px; text-align:left\"><strong>Tuya 1 Gang Smart WiFi Wall Switch</strong></p>\r\n\r\n<table cellspacing=\"0\" class=\"all magic-4\" style=\"-webkit-text-stroke-width:0px; background-color:#ffffff; border-collapse:collapse; border:0px; box-sizing:border-box; color:#333333; font-family:Poppins,arial; font-size:14.4px; font-stretch:inherit; font-style:normal; font-variant-caps:normal; font-variant-east-asian:inherit; font-variant-ligatures:normal; font-variant-numeric:inherit; font-weight:400; letter-spacing:normal; line-height:inherit; margin:0px; orphans:2; padding:0px; text-align:start; text-decoration-color:initial; text-decoration-style:initial; text-decoration-thickness:initial; text-transform:none; vertical-align:baseline; white-space:normal; widows:2; width:403.188px; word-spacing:0px\">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"vertical-align:baseline\">\r\n			<div class=\"magic-5\" style=\"border:0px; box-sizing:border-box; font:inherit; margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; padding:0px; vertical-align:baseline\">Dimension</div>\r\n			</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"vertical-align:baseline\">\r\n			<div class=\"magic-6\" style=\"border:0px; box-sizing:border-box; font:inherit; margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; padding:0px; vertical-align:baseline\">86*86*39MM</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"vertical-align:baseline\">\r\n			<div class=\"magic-5\" style=\"border:0px; box-sizing:border-box; font:inherit; margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; padding:0px; vertical-align:baseline\">Operating voltage</div>\r\n			</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"vertical-align:baseline\">\r\n			<div class=\"magic-6\" style=\"border:0px; box-sizing:border-box; font:inherit; margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; padding:0px; vertical-align:baseline\">110V-240V/50-60HZ</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"vertical-align:baseline\">\r\n			<div class=\"magic-5\" style=\"border:0px; box-sizing:border-box; font:inherit; margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; padding:0px; vertical-align:baseline\">Rated load</div>\r\n			</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"vertical-align:baseline\">\r\n			<div class=\"magic-6\" style=\"border:0px; box-sizing:border-box; font:inherit; margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; padding:0px; vertical-align:baseline\">625W/Gang</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"vertical-align:baseline\">\r\n			<div class=\"magic-5\" style=\"border:0px; box-sizing:border-box; font:inherit; margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; padding:0px; vertical-align:baseline\">Frequency</div>\r\n			</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"vertical-align:baseline\">\r\n			<div class=\"magic-6\" style=\"border:0px; box-sizing:border-box; font:inherit; margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; padding:0px; vertical-align:baseline\">Wifi 2.4G</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"vertical-align:baseline\">\r\n			<div class=\"magic-5\" style=\"border:0px; box-sizing:border-box; font:inherit; margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; padding:0px; vertical-align:baseline\">Wireless Fidelity</div>\r\n			</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"vertical-align:baseline\">\r\n			<div class=\"magic-6\" style=\"border:0px; box-sizing:border-box; font:inherit; margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; padding:0px; vertical-align:baseline\">802.11b/g/n</div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', NULL, NULL, NULL, 'public/media/product/1760051955802279.jpg', 'public/media/product/1760051955893952.jpg', NULL, '0', '2023-03-11 00:17:46', '2023-03-25 22:58:57'),
(6, 7, 1, 6, 9, 'Tuya Smart Door Lock (With Camera)', 'SKU: 1420 Category: Smart Door Locks Tags: door lock, smart door lock', '21,999.00 –23,999.00', '<p>t is one of the most secure lock out there at this budget. This lock has multiple ways of unlocking: Fingerprint IC cards Password Not only can you use one of the three methods to unlock the door, but if you want to feel extra secure, you can use the 2 ways of verification method which basically means you have to use any 2 of the 3 methods available to open the door. If one matches and the other does not, then the door will not open. The lock has in-built connectivity that can connect with your Wi-Fi to operate it&rsquo;s own mobile app. You can download and connect it with the door. So, the next time someone comes, you already know someone is at your doorstep just from the notification that your phone will get when the bell is pressed. Battery is removeable and rechargeable. So, you do not have to worry about buying new batteries every couple of months. Lastly, the lock can be unlocked using a manual key that is included is the box itself. So, if you have elderly people, or that your battery has ran out but you cannot charge the battery from outside because you do not have any power banks, you can use the key to unlock the door very easily. Interested in installation? Click here to see the installation included package of this door lock.</p>', 'https://youtu.be/TmvqI70jGno', 'on', 'on', 'public/media/product/1760358882855035.jpg', 'public/media/product/1760358882979844.jpg', 'public/media/product/1760358883044593.jpg', '0', '2023-03-14 09:50:54', '2023-03-25 22:58:58'),
(7, 4, 4, 21, 12, 'Yeelight RGB Striplight 1S', 'SKU: 654100775-1-3-1-2', '3,875.00', '<p>Yeelight RGB Striplight 1S ONE-KEY CONTROL: You can switch the lightstrip on or off by pushing the button, or change the color by long pressing. It&rsquo;s very useful at night, because you are too sleepy to find your smart phone for control. If you have Amazon Alexa, Google Assistant, you can via the voice to control.(APP selects Singapore server) ULTIMATE FLEXBILITY: This light strip with ONE-button controller design convenient use; 2 meters cable for most home d&eacute;cor lighting scenes; No messy cables any more, comes with storage organizer. COLORS-CHANGING: It have 16 millions versatile colors optional, Combine your favorite music with family lighting, feel the rhythm of light, allow you dance with light and music.(Download YEELIGHT app);Brightness dimming, comfort dimming brightness from 0-100%. SWITCH LIGHTING FROM PRESET SCENES: From blue to orange, night light to high brightness, just use preseted scenes in YEELIGHT App. It provides you a fast way to get the color you like, and also you can put one into your favorites EXRENDIBLE: Extend your lightstrip 1S up to 33 feet long, The extension strap needs to be purchased separately. (Maximum extension of 10 meters).</p>', NULL, NULL, NULL, 'public/media/product/1760516280722652.jpg', 'public/media/product/1760516280816945.jpg', 'public/media/product/1760516280888343.jpg', '0', '2023-03-15 23:50:02', '2023-03-25 22:58:59'),
(8, 4, 4, 11, 13, 'WLED-SMART-WIFI-9WB22', '654670995-3-9', '865', '<p>- ENERGY EFFICIENT &amp; ENERGY SAVES UP TO 90% IN RESPECT OF NOMINAL LIGHTINGS. - CHANGING WATT FROM 0.5W-9W, CCT CHANGING, MOOD CHANGING, BRIGHTNESS CHANGING. - WIFI. WORKS WITH WALTON SMART APPLIANCES APP. AVAILABLE IN IOS AND GOOGLE PLAY STORE. - VOICE CONTROL VIA VOICE ASSISTANT (AMAZON ALEXA AND GOOGLE ASSISTANT). GOOGLE HOME SUPPORT. - SCENE CHANGING, WEATHER WISE BRIGHTNESS CONTROL, GROUP CONTROL WITH 300 WALTON SMART PRODCUTS AT A TIME, COLLABORATION CONTROL WITH WALTON SMART PRODUCT. AUTOMATION.</p>', NULL, NULL, NULL, 'public/media/product/1760518235926166.jpg', NULL, 'public/media/product/1760518236012118.jpg', '0', '2023-03-15 23:50:47', '2023-03-25 22:59:00'),
(9, 5, 4, 21, 14, 'Baseus RGB Colorful Electronic Sports Game LED Light Strip DGKU-01', 'DGKU-01', '1,400', '<p>Buy Baseus RGB Colorful Electronic Sports Game LED Light Strip DGKU-01 online st best price from Gadgetoo.com.bd in Bangladesh. Baseus RGB Colorful Electronic Sports Game LED Light Strip DGKU-01 has four different mainstream lights to illuminate your night, adding color to your room &amp; creating a romantic ambiance. Th RGB strip is 1.5 meter long &amp; can easily be glued to desktop pc, cabinet, bed, desk or anywhere you want to create a colorful vibe.</p>\r\n\r\n<ul>\r\n	<li>2+4 cool light effects to help you get in the zone</li>\r\n	<li>Enjoy your game in a cool and professional gaming atmosphere</li>\r\n	<li>With independent controller to change hues and switch on or off.</li>\r\n	<li>Glue dropping process, soft and transparent light</li>\r\n	<li>Four mainstream light colors-ice blue, pink, yellow green and purple</li>\r\n	<li>Easy installation, just peel and stick</li>\r\n	<li>RGB seven color gradient light effect, customize the cool atmosphere you want</li>\r\n	<li>Powered by any device with output 5V-1A USB port</li>\r\n</ul>', 'https://youtu.be/9k5rxs6GE84', NULL, NULL, 'public/media/product/1760530448424776.jpg', 'public/media/product/1760530448701101.jpg', 'public/media/product/1760530448753830.jpg', '1', '2023-03-16 07:17:52', '2023-03-17 09:46:41'),
(10, 6, 4, 21, 10, 'Xiaomi Yeelight LED Color Light Strip 1S (2M)', 'SKU: Yeelight LED', '3,290', '<p style=\"margin-left:0px; margin-right:0px; text-align:start\">Buy Xiaomi Yeelight LED Color Light Strip 1S (2M) from Gadgetoo.com.bd</p>\r\n\r\n<ul style=\"margin-left:0px; margin-right:0px\">\r\n	<li>6 million colors<br />\r\n	Choose from over 16 million colors to set the mood of a room, highlight furniture or fixtures or create architectural features in your living spaces.</li>\r\n	<li>Melody with music<br />\r\n	Brightness and color of the RGB LED strip light changed with the melody of any type of music. Let&rsquo;s brings out the passion and dance with Yeelight Aurora!</li>\r\n	<li>Pick the color from items<br />\r\n	By simply adjusting the color upon the color panel or pick a specific reality color by phone lens, you can easily create the ambient lighting for the party, accent lighting to highlight some special features, task lighting for up-close work, or a flattering glow for a romantic meal.</li>\r\n	<li>Alarm to wake you up<br />\r\n	By setting the sunrise option, the strip will begin a gradual sunrise where the light gets brighter and colder as it gets closer to your actual wake up time. Let&rsquo;s illuminate the whole day life by waking up around with this colored sunrise simulations.</li>\r\n	<li>One touch to change scenario<br />\r\n	Aurora provides multiple recommended formulas for universal scenarios, sunrise, sunset, dating night, movie, birthday party, romance, home, flash notice, candle flicker, and continuous upcoming ones. Just one simple touch, Aurora would make the scene come to life that&rsquo;s best suited to the mood.</li>\r\n	<li>Brightness<br />\r\n	As a LED light strip, Aurora can be used to highlight the painting, bookshelf, works of art, or any other certain element. In addition, it can also provide sufficient brightness for reading and working scenarios.</li>\r\n</ul>', 'https://youtu.be/BF1EklzmFlQ', NULL, NULL, 'public/media/product/1760589349397215.webp', 'public/media/product/1760589349556681.jpg', 'public/media/product/1760589349652500.jpg', '1', '2023-03-16 22:54:04', '2023-03-17 09:46:39'),
(11, 7, 5, 22, 16, 'Smart WIFI Fan switch', '000208', '2,250', '<ul>\r\n	<li><span style=\"background-color:#ffffff; color:#000000; font-family:docs-Calibri; font-size:12px\">Item: 86type Wifi Fan Smart Switch </span></li>\r\n	<li><span style=\"background-color:#ffffff; color:#000000; font-family:docs-Calibri; font-size:12px\">Voltage:AC110-240V, 50hz/60hz </span></li>\r\n	<li><span style=\"background-color:#ffffff; color:#000000; font-family:docs-Calibri; font-size:12px\">Power Supply: Neutral and Live line </span></li>\r\n	<li><span style=\"background-color:#ffffff; color:#000000; font-family:docs-Calibri; font-size:12px\">Support System: Android/iOS </span></li>\r\n	<li><span style=\"background-color:#ffffff; color:#000000; font-family:docs-Calibri; font-size:12px\">WiFi Model: Wi-Fi 2.4GHz </span></li>\r\n	<li><span style=\"background-color:#ffffff; color:#000000; font-family:docs-Calibri; font-size:12px\">WiFi Standard: IEEE802.11b/g/n </span></li>\r\n	<li><span style=\"background-color:#ffffff; color:#000000; font-family:docs-Calibri; font-size:12px\">Application: Tuya APP , Work with AMAZON ALEXA, GOOGLE ASSISTANT. GOOGLE, IFTTT </span></li>\r\n	<li><span style=\"background-color:#ffffff; color:#000000; font-family:docs-Calibri; font-size:12px\">Panel Material: Crystal glass panel, high quality flame retardant PC bottom </span></li>\r\n	<li><span style=\"background-color:#ffffff; color:#000000; font-family:docs-Calibri; font-size:12px\">Size:86*86*33mm </span></li>\r\n</ul>', 'https://youtu.be/_I2Dxd66hqY', NULL, NULL, 'public/media/product/1760617247259681.jpg', 'public/media/product/1760617247363300.jpg', NULL, '1', '2023-03-17 06:17:08', '2023-03-17 09:46:38'),
(12, 7, 5, 22, 16, 'SB WiFi Universal Power Outlet Socket', '000235', '3,250', '<ul>\r\n	<li><span style=\"font-family:Verdana,Arial,Helvetica,sans-serif\">Size: 86mm&times;86&times;32mm</span></li>\r\n	<li>Weight: 0.3kg</li>\r\n	<li>Packing box size: 141mm&times;103&times;47mm</li>\r\n	<li>Panel: Tempered Crystal Glass</li>\r\n	<li>Bottom Materials: Retardant PC</li>\r\n	<li>Rated voltage: AC 100-250V 50/60Hz</li>\r\n	<li>Rated current: 10A</li>\r\n	<li>Rated Load resistive: 1500W</li>\r\n	<li>Rated Load Inductive: 2000W</li>\r\n	<li>Wireless Wi-Fi standard: 802.11b/g/n</li>\r\n	<li>Wireless Wi-Fi Security:&nbsp;WEP/WPA/WPA2(AES-TKIP-Personal)</li>\r\n	<li>Wi-Fi performance&nbsp;Transmission&nbsp;power:&nbsp;+ 20dBm，11Mbps（CCK）</li>\r\n	<li>Wi-Fi performance Receiver sensitivity:&nbsp;-89dBm,11Mbps(CCK)W</li>\r\n	<li>Standby Current: 0.001A</li>\r\n	<li>Standby Power: 0.25W</li>\r\n	<li>Relative humidity:&lt;95%</li>\r\n</ul>', 'https://youtu.be/TYiwnEHd8AM', NULL, NULL, 'public/media/product/1760618687809478.jpg', 'public/media/product/1760618687883260.jpg', 'public/media/product/1760618687956991.jpg', '1', '2023-03-17 06:40:23', '2023-03-17 09:46:37'),
(13, 7, 5, 23, 16, 'Smart Wifi Dimmer Switch', '000210', '2,250', '<ul>\r\n	<li><span style=\"background-color:#ffffff; color:#000000; font-family:docs-Calibri; font-size:16px\">Item: 86type Wifi Dimmer Smart Switch </span></li>\r\n	<li><span style=\"background-color:#ffffff; color:#000000; font-family:docs-Calibri; font-size:16px\">Voltage:AC110-240V, 50hz/60hz </span></li>\r\n	<li><span style=\"background-color:#ffffff; color:#000000; font-family:docs-Calibri; font-size:16px\">Power Supply: Neutral and Live line </span></li>\r\n	<li><span style=\"background-color:#ffffff; color:#000000; font-family:docs-Calibri; font-size:16px\">Support System: Android/iOS </span></li>\r\n	<li><span style=\"background-color:#ffffff; color:#000000; font-family:docs-Calibri; font-size:16px\">WiFi Model: Wi-Fi 2.4GHz </span></li>\r\n	<li><span style=\"background-color:#ffffff; color:#000000; font-family:docs-Calibri; font-size:16px\">WiFi Standard: IEEE802.11b/g/n </span></li>\r\n	<li><span style=\"background-color:#ffffff; color:#000000; font-family:docs-Calibri; font-size:16px\">Application: Tuya APP , Work with AMAZON ALEXA, GOOGLE ASSISTANT. GOOGLE, IFTTT Panel Material: Crystal glass panel, high quality flame retardant PC bottom </span></li>\r\n	<li><span style=\"background-color:#ffffff; color:#000000; font-family:docs-Calibri; font-size:16px\">Size:86*86*33mm </span></li>\r\n</ul>', NULL, NULL, NULL, 'public/media/product/1760624000009906.jpg', 'public/media/product/1760624000110090.jpg', 'public/media/product/1760624000174548.jpg', '1', '2023-03-17 08:04:49', '2023-03-17 09:46:34'),
(14, 7, 5, 22, 16, 'Smart Wifi Wall Socket Combo Double Socket with USB', '000216', '4,900', '<ul>\r\n	<li>Brand: Systech Smart Solutions</li>\r\n	<li>Dimension: 147*86*38MM</li>\r\n	<li>Operating voltage: 110V-240V/50-60HZ</li>\r\n	<li>APP download: Systech Smart /Smart Life/ Tuya Smart</li>\r\n	<li>Wall Socket Output: 13A</li>\r\n	<li>USB Output: USB 2.0;5V,4A</li>\r\n	<li>Wireless Fidelity: 802.11b/g/n</li>\r\n	<li>Voice Control: Can work with Alexa &amp; Echo dot/Google home/Alexa/IFTTT</li>\r\n	<li>Plastic material: ABS+PC</li>\r\n</ul>', NULL, NULL, NULL, 'public/media/product/1760624611252577.jpg', 'public/media/product/1760624611332198.jpg', 'public/media/product/1760624611410146.jpg', '1', '2023-03-17 08:14:32', '2023-03-17 09:46:33'),
(15, 7, 5, 25, 16, '3 Way Wist USB Multi function 10A WiFi Smart Power Strip', '000228', '5,250', '<p><span style=\"background-color:#ffffff; color:#000000; font-family:Calibri,Arial; font-size:14.6667px\">Product Category: Power Strips</span><br />\r\n<span style=\"background-color:#ffffff; color:#000000; font-family:Calibri,Arial; font-size:14.6667px\">Protocol: Wi-Fi</span><br />\r\n<span style=\"background-color:#ffffff; color:#000000; font-family:Calibri,Arial; font-size:14.6667px\">Product Color: White</span><br />\r\n<span style=\"background-color:#ffffff; color:#000000; font-family:Calibri,Arial; font-size:14.6667px\">Market Specifications: IN Standard</span><br />\r\n<span style=\"background-color:#ffffff; color:#000000; font-family:Calibri,Arial; font-size:14.6667px\">Battery Type: NO</span><br />\r\n<span style=\"background-color:#ffffff; color:#000000; font-family:Calibri,Arial; font-size:14.6667px\">Function Description: Remote or local on/off, app timing, countdown,USB charging</span><br />\r\n<span style=\"background-color:#ffffff; color:#000000; font-family:Calibri,Arial; font-size:14.6667px\">Material: V0 flame retardant grade material</span><br />\r\n<span style=\"background-color:#ffffff; color:#000000; font-family:Calibri,Arial; font-size:14.6667px\">Package Size: 340*76*40 mm</span><br />\r\n<span style=\"background-color:#ffffff; color:#000000; font-family:Calibri,Arial; font-size:14.6667px\">Product Size: 272*52*28 mm</span><br />\r\n<span style=\"background-color:#ffffff; color:#000000; font-family:Calibri,Arial; font-size:14.6667px\">Net Weight: 475 g</span><br />\r\n<span style=\"background-color:#ffffff; color:#000000; font-family:Calibri,Arial; font-size:14.6667px\">Power Supply Type: 250V</span><br />\r\n<span style=\"background-color:#ffffff; color:#000000; font-family:Calibri,Arial; font-size:14.6667px\">Rated Power（W）: 2500W</span><br />\r\n<span style=\"background-color:#ffffff; color:#000000; font-family:Calibri,Arial; font-size:14.6667px\">Rated Voltage(V): 250V</span><br />\r\n<span style=\"background-color:#ffffff; color:#000000; font-family:Calibri,Arial; font-size:14.6667px\">Load Type: 2500W</span><br />\r\n<span style=\"background-color:#ffffff; color:#000000; font-family:Calibri,Arial; font-size:14.6667px\">Operation environment: Indoor</span></p>', NULL, NULL, NULL, 'public/media/product/1760625078019805.jpg', 'public/media/product/1760625078096943.jpg', 'public/media/product/1760625078178978.jpg', '1', '2023-03-17 08:21:57', '2023-03-17 09:46:32'),
(16, 7, 5, 23, 16, 'Wifi Smart Switch Module', '000233', '1,100', '<p style=\"text-align:left\">Rated Voltage:90-250VAC Rated</p>\r\n\r\n<p style=\"text-align:left\">Voltage:10A Wifi</p>\r\n\r\n<p style=\"text-align:left\">Standard:IEEE802.11.b/g/n.2.4GHz</p>\r\n\r\n<p style=\"text-align:left\">Size:L92*W38*H24MM</p>\r\n\r\n<p style=\"text-align:left\">&nbsp;</p>\r\n\r\n<p style=\"text-align:left\">1.Voice control:once you have this switch,you can connect it with Amazon&nbsp; Alexa(Amazon echo/dot/tap) or Google Assistant for voice control.</p>\r\n\r\n<p style=\"text-align:left\">2.You can use &quot;Systech Smart&quot; APP or &quot;Tuya&quot; APP in your smart phone to&nbsp;control the switch wirelessly with Wi-Fi or 4G network.no hub required.</p>\r\n\r\n<p style=\"text-align:left\">3.Timing Function:Take full control of your home or office lights thanks to schedule timer that will allow you to plan the exact time to turn lights and appliances on/off automatically&nbsp;</p>\r\n\r\n<p style=\"text-align:left\">4.Share Device:This samrt switch can have several control sites shared by different family members.one mobile phone can control many switches also.</p>\r\n\r\n<p style=\"text-align:left\">5.Add More Features with IFTTT:&#39;If this,then that&#39; is a free web-based service the lets you do amazing thins with your light switch,turn lamps,fans or other electronics on before you get home or off when you leave,with IFTTT.</p>', NULL, NULL, NULL, 'public/media/product/1760625494873260.jpg', NULL, NULL, '1', '2023-03-17 08:28:16', '2023-03-17 09:46:31'),
(17, 7, 5, 23, 16, 'Smart Wifi 4Gang Light Switch', '000181', '3,660', '<p><span style=\"color:#263238; font-family:Roboto,sans-serif; font-size:13px\"><strong>Smart Wifi 4Gang Light Switch</strong></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-family:inherit; font-size:14px\">1. Hight quality crystal tempered glass panel design,never fade.</span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-family:inherit; font-size:14px\">2. With blue LED indicator,very distinguished.</span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-family:inherit; font-size:14px\">3. Directly control the switch ,no need gateway .</span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-family:inherit; font-size:14px\">4. Check lamp status.</span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-family:inherit; font-size:14px\">5. Power statistics function.</span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-family:inherit; font-size:14px\">6. Applicable to incandescent lights, fluorescent lamps, led.&nbsp;&nbsp;</span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-family:inherit; font-size:14px\">&nbsp;&nbsp;&nbsp; lamps ,water heater,ventilator and motor etc.</span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-family:inherit; font-size:14px\">7.Support Amazon Alexa and Google Assistant etc.</span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-family:inherit; font-size:14px\">8.Support 2 way and 3 way.</span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-family:inherit; font-size:14px\">&nbsp;</span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-family:inherit; font-size:14px\">&nbsp;</span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><strong><span style=\"font-family:inherit; font-size:14px\">Specification</span></strong></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-family:inherit; font-size:14px\">Dimension: 86*86*39MM</span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-family:inherit; font-size:14px\">Voltage: 110-240V~ AC/50~60Hz</span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-family:inherit; font-size:14px\">Resistive Max. load 625W</span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-family:inherit; font-size:14px\">Inductive Max. load 150W</span></p>', NULL, NULL, NULL, 'public/media/product/1760626392717182.jpg', 'public/media/product/1760626392793868.jpg', 'public/media/product/1760626392865013.jpg', '1', '2023-03-17 08:42:51', '2023-03-17 09:46:30'),
(18, 7, 5, 23, 16, 'Smart Wifi 8 Gang Light switch', '000180', '4,510', '<p style=\"text-align:left\"><span style=\"color:#263238; font-family:Roboto,sans-serif; font-size:13px\"><strong>Smart Wifi 8 Gang Light switch</strong></span></p>\r\n\r\n<p style=\"text-align:left\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-family:inherit; font-size:16px\">1. High quality crystal tempered glass panel design,never fade.</span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-family:inherit; font-size:16px\">2. With blue LED indicator,very distinguished.</span><br />\r\n<span style=\"font-family:inherit; font-size:16px\">3. Directly link switch control ,no need HUB.</span><br />\r\n<span style=\"font-family:inherit; font-size:16px\">4. Check lamp status.</span><br />\r\n<span style=\"font-family:inherit; font-size:16px\">5. Power statistics function.</span><br />\r\n<span style=\"font-family:inherit; font-size:16px\">6.Support Amazon Alexa and Google Assistant etc.</span><br />\r\n<span style=\"font-family:inherit; font-size:16px\">7.Support RF control.</span><br />\r\n<span style=\"font-family:inherit; font-size:16px\">8. Applicable to incandescent lights, fluorescent lamps, led.</span><br />\r\n<span style=\"font-family:inherit; font-size:16px\">lamps ,water heater,ventilator and motor etc.</span>&nbsp;</p>', NULL, NULL, NULL, 'public/media/product/1760626617330419.jpg', 'public/media/product/1760626617406196.jpg', 'public/media/product/1760626617476747.jpg', '1', '2023-03-17 08:46:25', '2023-03-17 09:46:29'),
(19, 7, 5, 22, 16, 'Smart Combo WIFI 4 gang light switch with wifi Ceiling Fan switch', '000177', '5,410', '<p style=\"text-align:left\"><span style=\"color:#263238; font-family:Roboto,sans-serif; font-size:13px\"><strong>Smart Combo WIFI 4 gang light switch with wifi Ceiling Fan switch</strong></span></p>\r\n\r\n<p style=\"text-align:left\">1. High quality tempered glass panel design,never fade.</p>\r\n\r\n<p style=\"text-align:left\">2. With blue LED indicator,very distinguished.</p>\r\n\r\n<p style=\"text-align:left\">3. Eeasy to install,replace the old switch directly.</p>\r\n\r\n<p style=\"text-align:left\">4. Only support the fan can infinitely variable</p>\r\n\r\n<p style=\"text-align:left\">5. Check lamp status.</p>\r\n\r\n<p style=\"text-align:left\">6. Power statistics function.</p>\r\n\r\n<p style=\"text-align:left\">7. Support Amazon Alexa and Google Assistant etc.</p>\r\n\r\n<p style=\"text-align:left\">8. Applicable to incandescent lights, fluorescent lamps, led. lamps ,water heater,ventilator and motor etc.</p>\r\n\r\n<p style=\"text-align:left\">Specification Dimension: 147*86*38MM Voltage: 110-240V AC/50~60Hz Lamp Load:600W/Gang Fan Load:&lt;600W Wifi Standard:IEEE802.11b/g/n</p>', NULL, NULL, NULL, 'public/media/product/1760628098530503.jpg', 'public/media/product/1760628098606851.jpg', NULL, '1', '2023-03-17 08:48:40', '2023-03-17 09:46:28'),
(20, 7, 5, 26, 16, 'Smart Combo Wifi 4 Gang light switch with wifi Wall Socket', '000178', '4,960', '<p style=\"text-align:left\"><strong>Smart Combo Wifi 4 Gang light switch with wifi Wall Socket</strong><br />\r\n1. High quality tempered glass panel design,never fade.</p>\r\n\r\n<p style=\"text-align:left\">2. With blue LED indicator,very distinguished.</p>\r\n\r\n<p style=\"text-align:left\">3. Eeasy to install,replace the old switch directly.</p>\r\n\r\n<p style=\"text-align:left\">4. Check socket&amp;light status.</p>\r\n\r\n<p style=\"text-align:left\">5. Power statistics function.</p>\r\n\r\n<p style=\"text-align:left\">6. Support Amazon Alexa and Google Assistant etc.</p>\r\n\r\n<p style=\"text-align:left\">7. Applicable to incandescent lights, fluorescent lamps, led. lamps ,water heater,ventilator and motor etc.</p>\r\n\r\n<p style=\"text-align:left\">Specification Dimension: 147*86*38MM Voltage: 110-240V AC/50~60Hz Operating Current:13A Switch Load:600W/gang Wifi Standard:IEEE802.11b/g/n</p>', NULL, NULL, NULL, 'public/media/product/1760628061750601.jpg', 'public/media/product/1760628061826617.jpg', NULL, '1', '2023-03-17 08:53:15', '2023-03-17 09:46:27'),
(21, 7, 5, 23, 16, 'Smart Wifi Curtain Switch Work With Phone APP RemoteTimer Control Compatible Alexa Google Assistant', '000184', '2,967', '<p><span style=\"color:#263238; font-family:Roboto,sans-serif; font-size:13px\"><strong>Smart Wifi Curtain Switch Work With Phone APP Remote/Timer Control</strong></span><br />\r\n<span style=\"color:#263238; font-family:Roboto,sans-serif; font-size:13px\"><strong>Compatible Alexa &amp; Google Assistant</strong></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table style=\"-webkit-text-stroke-width:0px; background-color:#ffffff; border-collapse:separate; box-sizing:content-box; color:#333333; font-family:Arial,Helvetica,sans-senif; font-size:12px; font-stretch:inherit; font-style:normal; font-variant-caps:normal; font-variant-east-asian:inherit; font-variant-ligatures:normal; font-variant-numeric:inherit; font-weight:400; height:264px; letter-spacing:normal; line-height:inherit; margin:0px; max-width:100%; orphans:2; padding:0px; text-align:start; text-decoration-color:initial; text-decoration-style:initial; text-decoration-thickness:initial; text-transform:none; white-space:normal; widows:2; width:548px; word-spacing:0px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"border-color:#cccccc; height:7px; vertical-align:top; width:173px\">\r\n			<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-family:Calibri,\">Product size:</span></p>\r\n			</td>\r\n			<td style=\"border-color:#cccccc; height:7px; vertical-align:top; width:365px\">\r\n			<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-family:Calibri,\">86mm*86mm</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#cccccc; height:7px; vertical-align:top; width:173px\">\r\n			<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-family:Calibri,\">Shell Material</span></p>\r\n			</td>\r\n			<td style=\"border-color:#cccccc; height:7px; vertical-align:top; width:365px\">\r\n			<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-family:Calibri,\">PC retardant material</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#cccccc; height:7px; vertical-align:top; width:173px\">\r\n			<p style=\"margin-left:-17.95pt; margin-right:0px; text-align:left\"><span style=\"font-family:Calibri,\">&middot;&nbsp; &nbsp; &nbsp; Panel Material&nbsp;</span></p>\r\n			</td>\r\n			<td style=\"border-color:#cccccc; height:7px; vertical-align:top; width:365px\">\r\n			<p style=\"margin-left:-17.95pt; margin-right:0px; text-align:left\"><span style=\"font-family:Calibri,\">&nbsp; &nbsp; &nbsp; Toughen glass</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#cccccc; height:3px; vertical-align:top; width:173px\">\r\n			<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-family:Calibri,\">Operating Voltage</span></p>\r\n			</td>\r\n			<td style=\"border-color:#cccccc; height:3px; vertical-align:top; width:365px\">\r\n			<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-family:Calibri,\">AC 110V~250V</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#cccccc; height:3px; vertical-align:top; width:173px\">\r\n			<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-family:Calibri,\">Max Current</span></p>\r\n			</td>\r\n			<td style=\"border-color:#cccccc; height:3px; vertical-align:top; width:365px\">\r\n			<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-family:Calibri,\">6A&nbsp;</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#cccccc; height:3px; vertical-align:top; width:173px\">\r\n			<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-family:Calibri,\">Rated Power</span></p>\r\n			</td>\r\n			<td style=\"border-color:#cccccc; height:3px; vertical-align:top; width:365px\">\r\n			<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-family:Calibri,\">600W/Gang</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#cccccc; height:3px; vertical-align:top; width:173px\">\r\n			<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-family:Calibri,\">Energy Consumption</span></p>\r\n			</td>\r\n			<td style=\"border-color:#cccccc; height:3px; vertical-align:top; width:365px\">\r\n			<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-family:Calibri,\">&lt;0.1mA</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#cccccc; height:3px; vertical-align:top; width:173px\">\r\n			<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-family:Calibri,\">Operating Environment</span></p>\r\n			</td>\r\n			<td style=\"border-color:#cccccc; height:3px; vertical-align:top; width:365px\">\r\n			<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-family:Calibri,\">30~70 Centigrade, less than 95%RH</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#cccccc; height:3px; vertical-align:top; width:173px\">\r\n			<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-family:Calibri,\">Certification</span></p>\r\n			</td>\r\n			<td style=\"border-color:#cccccc; height:3px; vertical-align:top; width:365px\">\r\n			<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-family:Calibri,\">CE, ROSH,FCC</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#cccccc; height:7px; vertical-align:top; width:173px\">\r\n			<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-family:Calibri,\">Longevity</span></p>\r\n			</td>\r\n			<td style=\"border-color:#cccccc; height:7px; vertical-align:top; width:365px\">\r\n			<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-family:Calibri,\">100,000 times operation/ Two years warranty</span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', NULL, NULL, NULL, 'public/media/product/1760628473431748.jpg', 'public/media/product/1760628473505030.jpg', 'public/media/product/1760628527277106.jpg', '1', '2023-03-17 09:15:56', '2023-03-17 21:44:43'),
(22, 7, 2, NULL, 16, 'Automatic Hand Sterilizer Machine Induction Alcohol', '000165', '1,323', '<table border=\"1\" cellspacing=\"0\" class=\"all has-title magic-9\" style=\"-webkit-text-stroke-width:0px; background-color:#ffffff; border-collapse:collapse; border:1px solid #cccccc; box-sizing:content-box; color:#333333; font-family:Roboto; font-size:14px; font-stretch:inherit; font-style:normal; font-variant-caps:normal; font-variant-east-asian:inherit; font-variant-ligatures:normal; font-variant-numeric:inherit; font-weight:400; letter-spacing:normal; line-height:inherit; margin:0px; max-width:100%; orphans:2; overflow-wrap:break-word; padding:0px; text-align:start; text-decoration-color:initial; text-decoration-style:initial; text-decoration-thickness:initial; text-transform:none; white-space:normal; widows:2; width:auto; word-spacing:0px\">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; border-color:#cccccc; height:20px; vertical-align:top\">\r\n			<div class=\"magic-10\" style=\"border:0px; margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; padding:5px 10px; width:135px\"><span style=\"font-size:14px\"><span style=\"font-family:inherit\"><span style=\"font-family:Tahoma\"><strong>Function</strong></span></span></span></div>\r\n			</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; border-color:#cccccc; height:20px; vertical-align:top\">\r\n			<div class=\"magic-12\" style=\"border:0px; margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; padding:5px 10px; width:188px\"><span style=\"font-size:14px\"><span style=\"font-family:inherit\"><span style=\"font-family:Tahoma\">Disinfection, no touch</span></span></span></div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; border-color:#cccccc; height:20px; vertical-align:top\">\r\n			<div class=\"magic-10\" style=\"border:0px; margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; padding:5px 10px; width:135px\"><span style=\"font-size:14px\"><span style=\"font-family:inherit\"><span style=\"font-family:Tahoma\"><strong>Color</strong></span></span></span></div>\r\n			</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; border-color:#cccccc; height:20px; vertical-align:top\">\r\n			<div class=\"magic-12\" style=\"border:0px; margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; padding:5px 10px; width:188px\"><span style=\"font-size:14px\"><span style=\"font-family:inherit\"><span style=\"font-family:Tahoma\">White</span></span></span></div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; border-color:#cccccc; height:20px; vertical-align:top\">\r\n			<div class=\"magic-10\" style=\"border:0px; margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; padding:5px 10px; width:135px\"><span style=\"font-size:14px\"><span style=\"font-family:inherit\"><span style=\"font-family:Tahoma\"><strong>Product size</strong></span></span></span></div>\r\n			</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; border-color:#cccccc; height:20px; vertical-align:top\">\r\n			<div class=\"magic-12\" style=\"border:0px; margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; padding:5px 10px; width:188px\"><span style=\"font-size:14px\"><span style=\"font-family:inherit\"><span style=\"font-family:Tahoma\">8.4*6*7.6 cm</span></span></span></div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; border-color:#cccccc; height:20px; vertical-align:top\">\r\n			<div class=\"magic-10\" style=\"border:0px; margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; padding:5px 10px; width:135px\"><span style=\"font-size:14px\"><span style=\"font-family:inherit\"><span style=\"font-family:Arial\"><strong>Weight</strong></span></span></span></div>\r\n			</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; border-color:#cccccc; height:20px; vertical-align:top\">\r\n			<div class=\"magic-12\" style=\"border:0px; margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; padding:5px 10px; width:188px\"><span style=\"font-size:14px\"><span style=\"font-family:inherit\"><span style=\"font-family:Tahoma\">138 g</span></span></span></div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; border-color:#cccccc; height:20px; vertical-align:top\">\r\n			<div class=\"magic-10\" style=\"border:0px; margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; padding:5px 10px; width:135px\"><span style=\"font-size:14px\"><span style=\"font-family:inherit\"><span style=\"font-family:Arial\"><strong>Power supply</strong></span></span></span></div>\r\n			</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; border-color:#cccccc; height:20px; vertical-align:top\">\r\n			<div class=\"magic-12\" style=\"border:0px; margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; padding:5px 10px; width:188px\"><span style=\"font-size:14px\"><span style=\"font-family:inherit\">2000mA Battery</span></span></div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', NULL, NULL, NULL, 'public/media/product/1760630734108133.jpg', 'public/media/product/1760630734181467.jpg', 'public/media/product/1760630734256923.jpg', '1', '2023-03-17 09:51:52', '2023-03-17 21:44:40'),
(23, 7, 2, NULL, 16, 'Air Humidifier Spray Aroma Diffuser With Colorful light', '000075', '1,106', '<p style=\"text-align:left\"><span style=\"font-family:Calibri,Arial; font-size:11pt\"><strong>Air Humidifier Spray Aroma Diffuser With Colorful light</strong></span></p>\r\n\r\n<ul>\r\n	<li>Product name:&nbsp;Magic Shadow Humidifier</li>\r\n	<li>Function:&nbsp;Humidifier, Projection，Ambient light，Can rotate freely</li>\r\n	<li>Color:&nbsp;Light Blue, White, Navy, Pink</li>\r\n	<li>Product size:&nbsp;21.3*7*6.6 cm</li>\r\n	<li>Weight:&nbsp;170g</li>\r\n	<li>Power supply:&nbsp;USB Line&nbsp;</li>\r\n	<li>Capacity:&nbsp;200 ml</li>\r\n</ul>', NULL, NULL, NULL, 'public/media/product/1760630988318652.jpg', 'public/media/product/1760630988393720.jpg', 'public/media/product/1760630988471239.jpg', '1', '2023-03-17 09:55:54', '2023-03-17 21:44:38'),
(24, 7, 2, NULL, 16, 'Rechargeable Pocket Mist Sprayer for Sanitisation', '000074', '217', '<p style=\"text-align:left\">Rechargeable Pocket Mist Sprayer for Sanitisation</p>\r\n\r\n<ul>\r\n	<li>Product name :&nbsp;Mist Sprayer</li>\r\n	<li>Function :&nbsp;Plus 75% alcohol spray disinfection / facial replenishment</li>\r\n	<li>Color :&nbsp;White</li>\r\n	<li>Spray amount of :&nbsp;1.25-1.4/minutes</li>\r\n	<li>Weight :&nbsp;62 g</li>\r\n	<li>Power supply :&nbsp;450mA battery</li>\r\n	<li>Packaging :&nbsp;English packaging</li>\r\n</ul>', NULL, NULL, NULL, 'public/media/product/1760631214762352.jpg', 'public/media/product/1760631214839005.jpg', 'public/media/product/1760631214910311.jpg', '1', '2023-03-17 09:59:30', '2023-03-17 21:44:37');
INSERT INTO `products` (`id`, `user_id`, `category_id`, `subcategory_id`, `brand_id`, `product_name`, `product_code`, `selling_price`, `product_details`, `video_link`, `main_slider`, `mid_slider`, `image_one`, `image_two`, `image_three`, `status`, `created_at`, `updated_at`) VALUES
(25, 7, 2, NULL, 16, 'UVC Lght Box Disinfectant Multi purpose Box', '000065', '1,399', '<p style=\"text-align:left\"><span style=\"background-color:#ffffff; color:#000000; font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif; font-size:13px\">UVC Lght Box Disinfectant Multi purpose Box </span></p>\r\n\r\n<ul>\r\n	<li>Maximum Hold :Hold 6 inch mobile phone</li>\r\n	<li>Rated Voltage :&nbsp;DC5V</li>\r\n	<li>Input Current :&nbsp;1-2A</li>\r\n	<li>Disinfection Power :&nbsp;2W</li>\r\n	<li>Net Weight :&nbsp;0.45kg</li>\r\n	<li>Gross Weight :&nbsp;0.6kg</li>\r\n	<li>Maximum Power :&nbsp;9W</li>\r\n	<li>UV Wavelength :&nbsp;253.7nm</li>\r\n	<li>Product Size :&nbsp;220*125*55mm</li>\r\n	<li>Package Size :&nbsp;246*134*55mm</li>\r\n	<li>Colors :&nbsp;Black, White</li>\r\n</ul>', NULL, NULL, NULL, 'public/media/product/1760677904853443.jpeg', 'public/media/product/1760677904964884.jpg', 'public/media/product/1760677905048678.jpg', '1', '2023-03-17 22:21:37', '2023-03-18 01:26:28'),
(26, 7, 2, NULL, 16, 'Disinfectant Nano Steam Gun', '000060', '3,800', '<p style=\"margin-left:0in; margin-right:0in; text-align:left\"><span style=\"font-size:11pt\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri,sans-serif\">Blue Ray Disinfectant Nano Steam Gun&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:left\"><span style=\"font-size:11pt\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri,sans-serif\">Product Parameters&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:left\"><span style=\"font-size:11pt\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri,sans-serif\">Product Name&nbsp;&nbsp;&nbsp;Blue Ray Handheld Nano Spay Gun&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:left\"><span style=\"font-size:11pt\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri,sans-serif\">Function&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Diluted disinfectant Spraying, Facial hydrating, Hair Moisturizing &amp; Caring&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:left\"><span style=\"font-size:11pt\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri,sans-serif\">Model numberSSS Nano Steam&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:left\"><span style=\"font-size:11pt\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri,sans-serif\">Color&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;White, Brown (Optional)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:left\"><span style=\"font-size:11pt\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri,sans-serif\">Technology&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;High pressure spraying &amp; Blue light sterilizing&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:left\"><span style=\"font-size:11pt\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri,sans-serif\">Power&nbsp;&nbsp;&nbsp;1300W&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:left\"><span style=\"font-size:11pt\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri,sans-serif\">Voltage&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;220V&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:left\"><span style=\"font-size:11pt\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri,sans-serif\">Volume&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;280ml&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:left\"><span style=\"font-size:11pt\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri,sans-serif\">Material&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:left\"><span style=\"font-size:11pt\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri,sans-serif\">Package size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;24*12*24cm</span></span></span></span></p>\r\n\r\n<p>&nbsp;</p>', NULL, NULL, NULL, 'public/media/product/1760685391428018.jpg', 'public/media/product/1760685391503429.jpg', 'public/media/product/1760685391576568.jpg', '1', '2023-03-18 00:20:37', '2023-03-18 01:26:27'),
(27, 7, 2, NULL, 16, 'Disinfection Atomization Fog Machine', '000047', '5,500', '<ul>\r\n	<li>Brand: Systech Smart Solutions</li>\r\n	<li>Voltage: 220V</li>\r\n	<li>Power: 900W</li>\r\n	<li>Re-Heating Time: 3min</li>\r\n	<li>Out Time: 20s</li>\r\n	<li>Control Way: Wire/Remote/Automatic/Timer(Chooseable)</li>\r\n	<li>Machine Size: 310*320*185mm</li>\r\n	<li>NW: 3kg</li>\r\n	<li>GW: 4kg</li>\r\n	<li>Liquid Capacity: 100ml</li>\r\n	<li>Cover Area: 200m<span style=\"color:#333333; font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Roboto,Oxygen-Sans,Ubuntu,Cantarell,&quot;Helvetica Neue&quot;,sans-serif; font-size:15px\">&sup2;</span></li>\r\n</ul>', NULL, NULL, NULL, 'public/media/product/1760685814690274.jpeg', 'public/media/product/1760685814763596.jpg', 'public/media/product/1760685814835317.jpg', '1', '2023-03-18 00:27:20', '2023-03-18 01:26:26'),
(28, 7, 9, NULL, 16, 'Indoor 2MP Wireless Smart WIFI Camera', '000242', '3,800', '<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"color:#333333\"><span style=\"font-family:SimSun\"><strong><span style=\"font-family:Arial,sans-serif\">Product Features:</span></strong></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:left\"><span style=\"font-size:12pt\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-family:SimSun\"><span style=\"font-size:10.5pt\"><span style=\"font-family:Arial,sans-serif\">● 2MP(1920X1080) high resolution</span></span></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:left\"><span style=\"font-size:12pt\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-family:SimSun\"><span style=\"font-size:10.5pt\"><span style=\"font-family:Arial,sans-serif\">● Support Pan 355&deg; /Tilt 85&deg;</span></span></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:left\"><span style=\"font-size:12pt\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-family:SimSun\"><span style=\"font-size:10.5pt\"><span style=\"font-family:Arial,sans-serif\">● Build in 3.6mm lens</span></span></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:left\"><span style=\"font-size:12pt\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-family:SimSun\"><span style=\"font-size:10.5pt\"><span style=\"font-family:Arial,sans-serif\">● View angle up to 110&deg;</span></span></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:left\"><span style=\"font-size:12pt\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-family:SimSun\"><span style=\"font-size:10.5pt\"><span style=\"font-family:Arial,sans-serif\">● Day/Night vision, IR distance:10m</span></span></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:left\"><span style=\"font-size:12pt\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-family:SimSun\"><span style=\"font-size:10.5pt\"><span style=\"font-family:Arial,sans-serif\">● Motion Detection</span></span></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:left\"><span style=\"font-size:12pt\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-family:SimSun\"><span style=\"font-size:10.5pt\"><span style=\"font-family:Arial,sans-serif\">● 2-way audio communication</span></span></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:left\"><span style=\"font-size:12pt\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-family:SimSun\"><span style=\"font-size:10.5pt\"><span style=\"font-family:Arial,sans-serif\">● Support TF-card Storage, up to 128GB</span></span></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:left\"><span style=\"font-size:12pt\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-family:SimSun\"><span style=\"font-size:10.5pt\"><span style=\"font-family:Arial,sans-serif\">● Auto tracking</span></span></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:left\"><span style=\"font-size:12pt\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-family:SimSun\"><span style=\"font-size:10.5pt\"><span style=\"font-family:Arial,sans-serif\">● Support Cloud Storage</span></span></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:left\"><span style=\"font-size:12pt\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-family:SimSun\"><span style=\"font-size:10.5pt\"><span style=\"font-family:Arial,sans-serif\">●&nbsp;Support Mobile Remote View &amp; Control</span></span></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:left\"><span style=\"font-size:12pt\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-family:SimSun\"><span style=\"font-size:10.5pt\"><span style=\"font-family:Arial,sans-serif\">● Power: 110V-240V</span></span></span></span></span></span></p>', NULL, NULL, NULL, 'public/media/product/1760690210853518.jpg', 'public/media/product/1760690210931752.jpg', 'public/media/product/1760690211002700.jpg', '1', '2023-03-18 01:37:13', '2023-03-19 00:09:51'),
(29, 7, 9, NULL, 16, 'Wireless CCTV Camera TUYA APP auto recognition intelligent security alarm system', '000163', '4,998', '<p><strong>Wireless CCTV Camera TUYA APP auto recognition intelligent security alarm system </strong></p>\r\n\r\n<p>Special Features:</p>\r\n\r\n<p>Human Motion Tracking, Vandal-proof</p>\r\n\r\n<p>Data Storage Options:</p>\r\n\r\n<p>Cloud, Memory Card</p>\r\n\r\n<p>Video Compression Format:</p>\r\n\r\n<p>H.265</p>\r\n\r\n<p>Unique Point:</p>\r\n\r\n<p>TUYA APP/Auto tracking</p>\r\n\r\n<p>Resolution:</p>\r\n\r\n<p>2M/1M</p>\r\n\r\n<p>IR leds:</p>\r\n\r\n<p>6 pcs IR leds</p>\r\n\r\n<p>Lens:</p>\r\n\r\n<p>3.6mm</p>\r\n\r\n<p>Storage:</p>\r\n\r\n<p>TF Card (MAX 128GB )&amp; Amazon cloud</p>\r\n\r\n<p>Box&#39;s size:</p>\r\n\r\n<p>10.5*6.5*8CM 0.3KG/pcs</p>\r\n\r\n<p>Weight:</p>\r\n\r\n<p>0.3kg</p>\r\n\r\n<p>Color:</p>\r\n\r\n<p>White</p>\r\n\r\n<p>Name:</p>\r\n\r\n<p>Tuya App control siren alarm systems wifi bluetooth speaker</p>', NULL, NULL, NULL, 'public/media/product/1760690569352381.jpg', 'public/media/product/1760690569424444.jpg', NULL, '1', '2023-03-18 01:42:55', '2023-03-19 00:09:52'),
(30, 7, 9, NULL, 16, 'Smart 360 Degree IP Camera', '000017', '5,640', '<h2><strong>Smart 360 Degree IP Camera</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Image sensor:&nbsp;HD720PH/960PH/1080PH</li>\r\n	<li>View angle:&nbsp;360&deg; / 180&deg;</li>\r\n	<li>Minimum illumination:&nbsp;0.01Lux@F2.0,black/white&nbsp;0.001Lux@F2.0</li>\r\n	<li>Wireless:&nbsp;IEEE802.11b/g/n</li>\r\n	<li>Network settings:&nbsp;AP mode/Station mode</li>\r\n	<li>Mobile WIFI Video:&nbsp;HD 720P/960P/1080P/VGA</li>\r\n	<li>Storage Media:&nbsp;Micro SD(UP to 34G)</li>\r\n	<li>Audio coding:&nbsp;ADPCM two way voice intercom</li>\r\n</ul>', NULL, NULL, NULL, 'public/media/product/1760690972378904.jpeg', 'public/media/product/1760690972455689.jpeg', 'public/media/product/1760690972546845.jpeg', '1', '2023-03-18 01:49:19', '2023-03-19 00:09:53'),
(31, 6, 9, NULL, 16, '12 inch wireless high definition NVR Wifi Camera System', '000059', '36,500', '<ul>\r\n	<li>Model No.(Wireless):&nbsp;NVR-6124NM-W-2MU</li>\r\n	<li>Video input:&nbsp;&nbsp;&nbsp;4CH 8CH</li>\r\n	<li>Chipset:&nbsp;Hi3516D V100</li>\r\n	<li>Operation System:&nbsp;Embedded LINUX operating system</li>\r\n	<li>Video Compression:&nbsp;H.264,H.265</li>\r\n	<li>Living review:&nbsp;720P/960P/1080P</li>\r\n	<li>Encode/Decode/Playback:&nbsp;720P/960P/1080P</li>\r\n	<li>Display Input:&nbsp;VGA</li>\r\n	<li>Video output(HDMI):&nbsp;1CH,Resolution:1024x768, 1280x1024,1366x768, 1440x900,1920x1080p</li>\r\n	<li>Audio output:&nbsp;1pcs,3.5inch Audio connector(optional)</li>\r\n	<li>IP protocol:&nbsp;IEEE 802.1Wi-fi, UPnP(plug-play),SMTP,PPPoE,DHCP</li>\r\n	<li>USB port:&nbsp;1*USB 2.0(double USB port optional )</li>\r\n	<li>HDD port:&nbsp;1*SATA (Max support 6T)</li>\r\n	<li>Wirelss port:&nbsp;Wifi (Through USB extender)</li>\r\n	<li>Power:&nbsp;1pcs 12V/3A power adaptor&nbsp;</li>\r\n	<li>Consumption:&nbsp;&lt;18W(Without HDD)</li>\r\n	<li>Lcd Sreen:&nbsp;12.5inch&nbsp;IPS&nbsp;Full review HD Screen,&nbsp;Screen Resolution:1920 x1080</li>\r\n	<li>Recording:&nbsp;manual video,timing record,motion detection record,alarm record</li>\r\n	<li>P2P:&nbsp;Playback mode:&nbsp;&nbsp;real time,normal,event</li>\r\n	<li>Product Size / Weight:&nbsp;Support CMS, APP(android, ios)</li>\r\n	<li>Product size:305*228*53mm&nbsp;&nbsp;Weight:&nbsp;1.27kg(Without HDD)</li>\r\n	<li>NVR color box:347*311*100mm&nbsp;mm</li>\r\n	<li>4 Cameras Kit:325*198*280mm</li>\r\n	<li>Carton Size:8&nbsp;Cameras Kits:328*378*203mm</li>\r\n</ul>', NULL, NULL, NULL, 'public/media/product/1760691737389096.jpg', 'public/media/product/1760691737465985.jpg', 'public/media/product/1760691737537790.jpg', '1', '2023-03-18 02:01:29', '2023-03-19 00:09:54'),
(32, 6, 9, NULL, 16, 'Smart 3D Panoramic Outdoor Camera', '000018', '7,040', '<h2><strong>Smart 3D Panoramic Outdoor Camera</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Image sensor:&nbsp;HD720PH/960PH/1080PH</li>\r\n	<li>View angle:&nbsp;360&deg; / 180&deg;</li>\r\n	<li>Minimum illumination:&nbsp;0.01Lux@F2.0,black/white&nbsp;0.001Lux@F2.0</li>\r\n	<li>Wireless:&nbsp;IEEE802.11b/g/n</li>\r\n	<li>Network settings:&nbsp;AP mode/Station mode</li>\r\n	<li>Mobile WIFI Video:&nbsp;HD 720P/960P/1080P/VGA</li>\r\n	<li>Storage Media:&nbsp;Micro SD(UP to 34G)</li>\r\n	<li>Audio coding:&nbsp;ADPCM two way voice intercom</li>\r\n</ul>', NULL, NULL, NULL, 'public/media/product/1760695950982705.jpeg', 'public/media/product/1760695951206193.jpg', 'public/media/product/1760695951299905.jpeg', '1', '2023-03-18 03:08:27', '2023-03-19 00:09:55'),
(33, 5, 4, 12, 9, 'Tuya GU-10 Smart Bulb', '2021 Category: Smart Lights', '1,299', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<th>Brand</th>\r\n						<td>\r\n						<p>Tuya</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<th>Color</th>\r\n						<td>\r\n						<p>RGB 16 Million</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<th>Lumens</th>\r\n						<td>\r\n						<p>400 lm</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<th>Watt</th>\r\n						<td>\r\n						<p>Approximately 5.5w (Watt)</p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th colspan=\"2\">Dimensions</th>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<th>Weight</th>\r\n						<td>80 kg</td>\r\n					</tr>\r\n					<tr>\r\n						<th>Dimensions</th>\r\n						<td>56 &times; 50 &times; 50 cm</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', NULL, NULL, NULL, 'public/media/product/1760696564769118.png', 'public/media/product/1760696564977466.png', 'public/media/product/1760696565155249.png', '1', '2023-03-18 03:18:13', '2023-03-19 00:09:57'),
(34, 5, 4, 12, 10, 'Xiaomi Yeelight 1S – Smart Light Bulb', '654111995-17-4 Categories: Smart Lights, Xiaomi', '2,199', '<ul>\r\n	<li>\r\n	<p>16 Million Flowing Colors to Meet Multiple Lighting Scenes</p>\r\n	</li>\r\n	<li>\r\n	<p>Super Bright with Luminous Flux of 800lm</p>\r\n	</li>\r\n	<li>\r\n	<p>Dimmable and Adjustable Color Temperature</p>\r\n	</li>\r\n	<li>\r\n	<p>Compatible with Apple HomeKit, Amazon Alexa, Google Assistant, Samsung SmartThings</p>\r\n	</li>\r\n	<li>\r\n	<p>Game Sync with Razer Chroma RGB</p>\r\n	</li>\r\n	<li>\r\n	<p>Save Your Energy &amp; Money with Only 8.5w Rated Power</p>\r\n	</li>\r\n	<li>\r\n	<p>Shine with Rhyme with Music Sync</p>\r\n	</li>\r\n	<li>\r\n	<p>Group Control and Turn On/Off the Strip at Scheduled Time Available</p>\r\n	</li>\r\n	<li>\r\n	<p>Smart App Control Anytime Anywhere</p>\r\n	</li>\r\n	<li>\r\n	<p>Simple Setup with Built-in Wifi and No Hub Required</p>\r\n	</li>\r\n</ul>', NULL, NULL, NULL, 'public/media/product/1760696982193647.jpg', 'public/media/product/1760696982221468.jpg', 'public/media/product/1760696982343402.jpg', '1', '2023-03-18 03:24:51', '2023-03-19 00:09:58'),
(35, 5, 4, 15, 6, 'Nanoleaf Hexagon Shape', '654190085-19-6 Categories: Nanoleaf, Smart Lights', '29,999', '<p>With modular panels, you can create completely unique layouts. No matter what size, shape, or abstract you want, you can do it! Combine Hexagons, Triangles, and Mini Triangles on their own, or mix and match them with Connect technology for endless design possibilities</p>', NULL, NULL, NULL, 'public/media/product/1760697303413170.jpg', 'public/media/product/1760697303490108.jpg', NULL, '1', '2023-03-18 03:29:57', '2023-03-19 00:09:59'),
(36, 5, 4, 16, 6, 'Nanoleaf Triangle Shape Light Panels – Smarter Kit (9 PCs)', '654190085-19-6-1 Categories: Nanoleaf, Smart Lights', '29,999', '<p>With modular panels, you can create completely unique layouts. No matter what size, shape, or abstract you want, you can do it! Combine Hexagons, Triangles, and Mini Triangles on their own, or mix and match them with Connect technology for endless design possibilities</p>', NULL, NULL, NULL, 'public/media/product/1760697468510827.jpg', 'public/media/product/1760697468586697.jpg', NULL, '1', '2023-03-18 03:32:34', '2023-03-19 00:09:44'),
(37, 5, 4, 12, 9, 'Tuya Smart RGB LED Bulb (E27)', '99227329292 Category: Smart Lights', '999.00', '<p>uya Smart RGB LED Bulb (E27)</p>\r\n\r\n<p>&ndash; E27 Universal Base</p>\r\n\r\n<p>&ndash; 16 million RGB colors</p>\r\n\r\n<p>&ndash; Works with Alexa and Google Assistant</p>\r\n\r\n<p>&ndash; Dimmable through TUYA app</p>', NULL, NULL, NULL, 'public/media/product/1760697646980233.jpeg', 'public/media/product/1760697647124560.jpeg', NULL, '1', '2023-03-18 03:35:25', '2023-03-19 00:09:43'),
(38, 4, 1, 3, 8, 'Smart Glass Door Lock (Yoheen)', '1401 Category: Smart Door Locks', '16,999', '<p>Smart Door Locks are among the most feature-rich door locks on the market today. Six different methods are available to unlock it. As well as being highly secure, it is also easy to use.</p>', NULL, NULL, NULL, 'public/media/product/1760700632969842.jpg', 'public/media/product/1760700633047152.jpg', 'public/media/product/1760700633115136.jpg', '1', '2023-03-18 04:22:52', '2023-03-19 00:09:42'),
(39, 4, 1, 5, 9, 'Tuya Round Knob Smart Door Lock', '1414 Category: Smart Door Locks', '13,999.00', '<table border=\"1\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Material</td>\r\n			<td>Aluminum lock panel</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Available color</td>\r\n			<td>Black, silver</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Accept door thickness</td>\r\n			<td>35-65mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Communication mode</td>\r\n			<td>Tuya&nbsp;app</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Support system</td>\r\n			<td>IOS 7.0 or above,&nbsp; Android 4.4 or above</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Battery life</td>\r\n			<td>10000 times normal open (12 months)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Power supply</td>\r\n			<td>4pcs AAA Alkaline batteries</td>\r\n		</tr>\r\n		<tr>\r\n			<td>unlock way</td>\r\n			<td>app, fingerprint, code, M1 Card, key</td>\r\n		</tr>\r\n		<tr>\r\n			<td>working temperature</td>\r\n			<td>-20~50 degree</td>\r\n		</tr>\r\n		<tr>\r\n			<td>working humidity</td>\r\n			<td>10%-95%</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Available mortise</td>\r\n			<td>US STANDARD DEADBOLT</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', NULL, NULL, NULL, 'public/media/product/1760701016536414.jpg', 'public/media/product/1760701016611260.jpg', 'public/media/product/1760701016891402.jpg', '1', '2023-03-18 04:28:59', '2023-03-19 00:09:40'),
(40, 4, 1, 4, 9, 'Tuya Ashome Smart Fingerprint Door Lock', '1410 Category: Smart Door Locks', '13,499.00', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>Product name</p>\r\n			</td>\r\n			<td>\r\n			<p>Tuya Smart Door Lock</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Unlock way</p>\r\n			</td>\r\n			<td>\r\n			<p>Fingerprint, Password, Card, Key, App unlock.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Accept door thickness</p>\r\n			</td>\r\n			<td>\r\n			<p>35-65mm&nbsp;smart lock</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Power supply</p>\r\n			</td>\r\n			<td>\r\n			<p>4 AA batteries</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Fingerprint</p>\r\n			</td>\r\n			<td>\r\n			<p>&le;50</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Password</p>\r\n			</td>\r\n			<td>\r\n			<p>&le;100</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Card</p>\r\n			</td>\r\n			<td>\r\n			<p>&le;100</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>key</p>\r\n			</td>\r\n			<td>\r\n			<p>&le;2</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', NULL, NULL, NULL, 'public/media/product/1760703323531657.jpeg', 'public/media/product/1760703323783012.jpg', 'public/media/product/1760703323870502.jpg', '1', '2023-03-18 05:05:38', '2023-03-19 00:09:38'),
(41, 4, 1, 4, 10, 'Xiaomi Automatic Smart Door Lock Pro', '1429 Category: Smart Door Locks', '51,999.00', '<p>7 ways to unlock:</p>\r\n\r\n<ul>\r\n	<li>Fingerprint</li>\r\n	<li>Password</li>\r\n	<li>NFC</li>\r\n	<li>Homekit</li>\r\n	<li>Temporary Password</li>\r\n	<li>Emergency Key</li>\r\n	<li>Bluetooth Unlocking</li>\r\n</ul>\r\n\r\n<p>1080P high definition camera</p>\r\n\r\n<p>Anti-Tamper Protection</p>\r\n\r\n<p>In-built doorbell</p>\r\n\r\n<p>Camera and Wi-Fi are powered by a 5000mAh lithium battery</p>', NULL, NULL, NULL, 'public/media/product/1760703661449557.jpeg', 'public/media/product/1760703661547219.jpeg', 'public/media/product/1760703661621128.jpg', '1', '2023-03-18 05:11:01', '2023-03-19 00:09:37'),
(42, 4, 3, 9, 1, 'Google Nest Mini (2nd Gen) – Smart Speaker With Google Assistant', '754111995-0-2 Categories: Google Nest, Smart Hub', '3,999.00', '<p>There are no reviews yet.</p>\r\n\r\n<p>Only logged in customers who have purchased this product may leave a review.</p>', NULL, NULL, NULL, 'public/media/product/1760706806583695.jpg', 'public/media/product/1760706806668728.jpg', 'public/media/product/1760706806747079.png', '1', '2023-03-18 06:01:00', '2023-03-19 00:09:36'),
(43, 4, 3, 8, 4, 'Amazon Alexa Echo Dot (4th Gen)', '654111995-10-7 Category: Smart Hub', '6,999.00', '<p>Meet the all-new Echo Dot&ndash; Our most popular smart speaker with Alexa. The sleek, compact design delivers crisp vocals and balanced bass for a full sound.</p>', NULL, NULL, NULL, 'public/media/product/1760706978936110.jpg', 'public/media/product/1760706979010899.jpg', 'public/media/product/1760706979092805.jpg', '1', '2023-03-18 06:03:44', '2023-03-19 00:09:35'),
(44, 4, 17, NULL, 1, 'Google Nest Temperature Sensor - Nest Thermostat Sensor - Nest Sensor That Works with Nest Learning Thermostat and Nest Thermostat E - Smart Home', '000059', '3,800', '<h1>About this item</h1>\r\n\r\n<ul>\r\n	<li>Works with compatible Nest thermostats [1]; the sensor tells the thermostat what the temperature is in the room where it&rsquo;s placed and the thermostat uses that reading to control when the system turns on or off to keep that room the temperature you like.Compatible with select Nest thermostats. Including Nest Learning Thermostat, 3rd Gen and Nest Thermostat E.Wireless. Bluetooth Low Energy connection.Long battery life - Works on CR2 3V lithium battery (included) with up to 2-year lifetime.Up to 50 feet range. Allows easy placement..Product note: You can also check your system&rsquo;s compatibility before purchasing a Nest thermostat with our online Nest Compatibility Checker</li>\r\n	<li>Put different temperature sensors in different rooms, like the baby&rsquo;s room or living room</li>\r\n	<li>Control your Nest sensor in the Nest app; set a schedule and choose which room to prioritize when [2]</li>\r\n	<li>Compatible with select Nest thermostats. Including Nest Learning Thermostat, 3rd Gen and Nest Thermostat E.</li>\r\n	<li>The Nest Temperature Sensor is easy to set up; just hang it on the wall or place it on a shelf</li>\r\n	<li>The Nest sensor runs on batteries so it works in most homes; batteries can last up to 2 years</li>\r\n	<li>Add up to 6 sensors for each compatible Nest thermostat in your home</li>\r\n</ul>', NULL, NULL, NULL, 'public/media/product/1760720936355710.jpg', 'public/media/product/1760720936416837.jpg', 'public/media/product/1760720936463315.jpg', '1', '2023-03-18 09:45:35', '2023-03-19 00:09:34'),
(45, 7, 18, NULL, 20, 'Voice Controlled Audio Devices', '654670995-3-9', '1,399', '<p style=\"margin-left:0px; margin-right:0px; text-align:start\">SoundCheck offers simple, fast and accurate &lsquo;open loop&rsquo; testing of any smart device &ndash; no matter what the form factor, functionality, connector, or additional features. It measures a full range of characteristics such as driver performance, microphone array performance, speech recognition and voice quality metrics via wired, wireless/Bluetooth, cloud, USB, or debug port connections.</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\">SoundCheck&rsquo;s long history as a multipurpose electroacoustic test system means that Listen, Inc. has unrivalled expertise in the various tests used in voice activated audio devices &ndash; e.g. microphone array testing and beamforming, driver testing, speakerphone testing to TIA standards, active noise cancellation, voice quality measurements and speech recognition metrics.</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\">Furthermore, Listen, Inc. has been making &lsquo;open loop&rsquo; measurements &ndash; measurements on devices with no direct access to the microphone or speaker for longer than any other test equipment supplier. This has resulted in extremely sophisticated<br />\r\nalgorithms for optimizing the speed and accuracy of open loop tests, as well as the expertise to guide you through the process.</p>', NULL, NULL, NULL, 'public/media/product/1760771617024521.jpg', 'public/media/product/1760771617295615.png', NULL, '1', '2023-03-18 23:11:08', '2023-03-19 08:18:25');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `service_icon`, `service_details`, `service_image`, `created_at`, `updated_at`) VALUES
(1, 'App service', 'fa fa-mobile-alt', '<p>Loren ipsun dolor sit anet, consectetur adipisci elit, sed eiusnod tenpor incidunt ut labore et dolore nagna aliqua. Ut enin ad ninin venian, quis nostrun exercitationen ullan corporis suscipit laboriosan, nisi ut aliquid ex ea connodi consequatur. Quis aute iure reprehenderit in voluptate velit esse cillun dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt nollit anin id est laborun</p>', '20230327060026png', '2023-03-27 00:00:26', '2023-03-27 00:00:26');

-- --------------------------------------------------------

--
-- Table structure for table `service_intros`
--

CREATE TABLE `service_intros` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_intros`
--

INSERT INTO `service_intros` (`id`, `heading`, `detail`, `created_at`, `updated_at`) VALUES
(1, 'Loren ipsun dolor sit anet, consectetur adipisci elit, sed eiusnod tenpor incidunt', '<p>Loren ipsun dolor sit anet, consectetur adipisci elit, sed eiusnod tenpor incidunt ut labore et dolore nagna aliqua. Ut enin ad ninin venian, quis nostrun exercitationen ullan corporis suscipit laboriosan, nisi ut aliquid ex ea connodi consequatur. Quis aute iure reprehenderit in voluptate velit esse cillun dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt nollit anin id est laborun</p>', '2023-03-27 00:00:50', '2023-03-27 00:00:50');

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
('dTU5VqY0vHw2ixV5fXJYbANg9Nyk1sUkK2RFNFUq', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/111.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiS0o3ZEt3RUlGRmxhblBrMDBZcmU0eFU0dmlxcWFweG5nNHM2OHlENyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly9sb2NhbGhvc3QvNGlyL3RlY2hfNGlyL3B1YmxpYyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTI6ImxvZ2luX2FkbWluXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjM6InVybCI7YToxOntzOjg6ImludGVuZGVkIjtzOjUyOiJodHRwOi8vbG9jYWxob3N0LzRpci90ZWNoXzRpci9wdWJsaWMvZnJvbnRlZC9jb250YWN0Ijt9czo3OiJjYXB0Y2hhIjthOjM6e3M6OToic2Vuc2l0aXZlIjtiOjA7czozOiJrZXkiO3M6NjA6IiQyeSQxMCQzQlV1RnVpN3V0OVIzdkNRMkhldTd1dHNOeEpFMTJOTkZhYlFETVV6LlEyWU1icHB6TTBCYSI7czo3OiJlbmNyeXB0IjtiOjA7fX0=', 1679930719),
('KnrPkmNNyIkW3qtl5Eh9JZaboAR9XdaUNVTcIFnh', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36 Edg/111.0.1661.54', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTEtvUVVDWGtsWnZHbmJvR01zTDhvRVFkbENyYTFCTGdUYjlyZmpsWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly9sb2NhbGhvc3QvNGlyL3RlY2hfNGlyL3B1YmxpYyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1679930520),
('rEjSwsyole37xTGaJMwpvtyA7J05t1uFs5Jt5bKI', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.5481.178 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWFpqS2tkZHVpMWRKZVZGSzRXNGpRZkM0UGduVzhiWTB4TmhFZGJ3RSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly9sb2NhbGhvc3QvNGlyL3RlY2hfNGlyL3B1YmxpYyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1679928138);

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
(21, 4, 'rgb striplight', '2023-03-15 23:55:21', '2023-03-15 23:55:21'),
(22, 5, 'socket', '2023-03-17 06:07:43', '2023-03-17 06:07:43'),
(23, 5, 'switch', '2023-03-17 06:08:51', '2023-03-17 06:08:51'),
(24, 5, 'smart module', '2023-03-17 06:10:33', '2023-03-17 06:10:33'),
(25, 5, 'usb multi function power strip', '2023-03-17 06:11:38', '2023-03-17 06:11:38'),
(26, 5, 'switch and socket', '2023-03-17 08:51:58', '2023-03-17 08:51:58');

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
(6, 'mashfi mustofa', 'mashfi@gmail.com', '2023-03-03 10:41:25', '$2y$10$ue3yTzkbKl.AXU4U453G/eMQjnt/NhEtI7zaux3v4t8Jw7QlLY2NO', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'mustofa international', 'G-12 sharja', 'https://mustofa.com', '+977534543534543', NULL, 'https://www.twitter.com/mashfi', 'https://www.facebook.com/mashfi', 'https://www.youtube.com/mashfi', 'https://www.linkedin.com/mashfi', '1', NULL, NULL, NULL, '2023-03-03 10:40:51', '2023-03-16 22:47:58'),
(7, 'akram hossain', 'akram@gmail.com', '2023-03-14 04:40:28', '$2y$10$Aex4M3LEJ1veMN5znDKeR.2d3mN8ASup1fLE808FRLfSRr/fY6LM.', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'ak group', '788 north kafrul', 'https://www.ak.com', '029043353535', '20230317120338png', 'https://twitter.com/akram', 'https://facebook.com/akram', 'https://www.youtube.com/akram', 'https://linkedin.com/akram', '1', NULL, NULL, NULL, '2023-03-14 04:39:26', '2023-03-17 06:03:38'),
(8, 'sumon', 'sumon@gmail.com', '2023-03-26 00:47:11', '$2y$10$EIa6P5.M7UuBwSQ0IBecLOyYOoLb4MBeww9.oynUC3rjJVip5hXQi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2023-03-26 00:45:01', '2023-03-26 00:47:11'),
(9, 'mitu', 'mitu@gmail.com', NULL, '$2y$10$ssMB65hs3gGflUS.PPIAw.zpyzAoHlns2xR9nrI.JEj12NxrpyywG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2023-03-26 01:03:44', '2023-03-26 01:03:44');

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
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_addresses`
--
ALTER TABLE `contact_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_intros`
--
ALTER TABLE `contact_intros`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `intros`
--
ALTER TABLE `intros`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_intros`
--
ALTER TABLE `service_intros`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_addresses`
--
ALTER TABLE `contact_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_intros`
--
ALTER TABLE `contact_intros`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `descriptions`
--
ALTER TABLE `descriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `intros`
--
ALTER TABLE `intros`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service_intros`
--
ALTER TABLE `service_intros`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
