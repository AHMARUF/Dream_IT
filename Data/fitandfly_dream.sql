-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 23, 2021 at 05:43 PM
-- Server version: 10.2.26-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitandfly_dream`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication_status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `publication_status`, `created_at`, `updated_at`) VALUES
(4, 'Study', '<p>Collage Website</p>', 1, '2021-04-29 18:09:26', '2021-05-05 07:29:47'),
(5, 'corporate', '<p>corporate</p>', 1, '2021-05-05 07:27:55', '2021-05-05 07:27:55'),
(6, 'eCommerce', '<p>e-commerce</p>', 1, '2021-05-05 07:28:46', '2021-05-05 07:28:46'),
(7, 'Graphics Design', '<p>Graphics Design</p>', 1, '2021-05-05 07:31:40', '2021-05-05 07:31:40'),
(8, 'Landing Page', '<p>Landing Page</p>', 1, '2021-05-05 07:32:07', '2021-05-05 08:04:23'),
(9, 'Raining work', '<p>Raining work</p>', 0, '2021-05-05 08:03:53', '2021-05-10 19:12:49');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication_status` int(2) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `description`, `cat_id`, `images`, `publication_status`, `created_at`, `updated_at`) VALUES
(7, 'CPI', 'http://cpifeni.edu.bd/', 4, 'asset/img/portfolio/1698908874906134.png', 1, '2021-04-29 18:14:58', '2021-05-09 19:55:18'),
(8, 'Samso', 'https://rdsamso.com/', 5, 'asset/img/portfolio/1698911408259714.png', 1, '2021-05-05 07:49:35', '2021-05-05 07:49:35'),
(9, 'Traxnyc', 'https://www.traxnyc.com/', 6, 'asset/img/portfolio/1698911663170023.png', 1, '2021-05-05 07:53:39', '2021-05-05 07:53:39'),
(10, 'Principalmed', 'https://www.principalmedvantage.com/', 5, 'asset/img/portfolio/1698911872324132.png', 1, '2021-05-05 07:56:58', '2021-05-05 07:56:58'),
(11, 'Thevow', 'https://thevow.co/', 8, 'asset/img/portfolio/1698912448166922.png', 1, '2021-05-05 08:06:07', '2021-05-05 08:06:07'),
(12, 'Online Audience', 'https://onlineaudience.co.uk/', 5, 'asset/img/portfolio/1698912684638351.png', 1, '2021-05-05 08:09:53', '2021-05-05 08:09:53'),
(13, 'Logo', '#', 7, 'asset/img/portfolio/1699405367024305.jpg', 1, '2021-05-10 18:40:51', '2021-05-10 18:40:51'),
(14, 'OPEN Health', 'https://www.succinctcomms.com', 5, 'asset/img/portfolio/1699406108833480.png', 1, '2021-05-10 18:52:39', '2021-05-10 18:52:39'),
(15, 'Truemercy', 'https://www.truemercy.org', 5, 'asset/img/portfolio/1699406296545987.png', 1, '2021-05-10 18:55:38', '2021-05-10 18:55:38'),
(16, 'Hosting', 'https://com.com', 5, 'asset/img/portfolio/1699406443769857.png', 1, '2021-05-10 18:57:58', '2021-05-10 18:57:58'),
(17, 'Office Button', 'http://officebutton.com/#twoinsoft', 5, 'asset/img/portfolio/1699406589108036.png', 1, '2021-05-10 19:00:17', '2021-05-10 19:00:17'),
(18, 'vacn', 'https://www.vacn.org', 8, 'asset/img/portfolio/1699406784916699.png', 1, '2021-05-10 19:03:23', '2021-05-10 19:03:23');

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
(4, '2021_01_02_183102_create_sliders_table', 2),
(5, '2021_01_10_075226_create_services_table', 3),
(6, '2021_01_21_044131_create_categories_table', 4),
(7, '2021_01_23_162533_create_galleries_table', 5),
(8, '2021_01_25_145436_create_teams_table', 6);

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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication_status` int(2) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `images`, `publication_status`, `created_at`, `updated_at`) VALUES
(2, 'Web  Development', '<p><span style=\"color: #666666; font-family: Arimo; font-size: 16px; text-align: center; background-color: #ffffff;\">Web developers often implement ideas from less tech-savvy colleagues who lack the know-how to turn their vision into an actual, functional website.</span></p>', 'asset/img/service/1699317299197472.png', 1, '2021-01-10 08:02:26', '2021-05-09 19:50:10'),
(3, 'WordPress customize', '<p><span style=\"color: #666666; font-family: Arimo; font-size: 16px; text-align: center; background-color: #ffffff;\">Design everything using our front end Nouvello editor. The only truly front end builder available for WordPress today.</span></p>', 'asset/img/service/1699317310826691.png', 1, '2021-01-10 09:46:05', '2021-05-09 19:21:14'),
(5, 'graphic design', '<p><span style=\"color: #666666; font-family: Arimo; font-size: 16px; text-align: center; background-color: #ffffff;\">Design everything using our front end Nouvello editor. The only truly front end builder available for WordPress today.</span></p>', 'asset/img/service/1699317321867204.png', 1, '2021-05-09 18:57:44', '2021-05-09 19:21:25');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication_status` int(2) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `images`, `publication_status`, `created_at`, `updated_at`) VALUES
(2, 'sss', 'asset/img/slider/1.6880675477642E+15.jpg', 0, '2021-01-05 11:11:04', '2021-04-26 11:25:45'),
(3, 'sss', 'asset/img/slider/1.6880675598706E+15.jpg', 0, '2021-01-05 11:11:16', '2021-04-26 11:25:47'),
(4, 'Maruf', 'asset/img/slider/1.6884766404999E+15.jpg', 0, '2021-01-09 23:30:17', '2021-04-11 08:30:50'),
(5, 'Fast Design', 'asset/img/slider/1.6894296790941E+15.jpg', 0, '2021-01-20 12:01:34', '2021-04-11 08:30:54'),
(6, '1S', 'asset/img/slider/1698132271999114.jpg', 1, '2021-04-26 11:25:33', '2021-04-30 16:44:39'),
(7, '2s', 'asset/img/slider/1698132430582094.jpg', 1, '2021-04-26 11:28:04', '2021-04-30 16:44:49'),
(8, '3s', 'asset/img/slider/1698492150474329.jpg', 1, '2021-04-30 16:45:40', '2021-04-30 16:45:40'),
(9, '4s', 'asset/img/slider/1698492180809350.png', 0, '2021-04-30 16:46:09', '2021-05-01 19:04:49'),
(10, 'pexli', 'asset/img/slider/1698591455172158.jpg', 1, '2021-05-01 19:04:04', '2021-05-01 19:04:04');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skill` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head` int(2) DEFAULT 0,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication_status` int(2) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `skill`, `head`, `facebook`, `instagram`, `twitter`, `mail`, `images`, `publication_status`, `created_at`, `updated_at`) VALUES
(6, 'Riaz Miyazi', 'Full Stack Web Developer', 1, 'https://www.facebook.com/riaz.miyazi.1', '#', '#', 'Riazmiyazi0@gmail.com', 'asset/img/Teams/1698033775036850.jpg', 1, '2021-01-25 12:33:04', '2021-05-05 06:46:17'),
(7, 'AH Maruf', 'Web Design & Developer', 1, 'https://www.facebook.com/amdadulhasan.maruf.1/', '#', '#', 'amdadulhasan133@gmail.com', 'asset/img/Teams/1698034012839541.jpg', 1, '2021-04-25 09:23:46', '2021-05-05 06:46:43'),
(8, 'Arif Shohan', 'Graphic Design', 1, 'https://www.facebook.com/arifshohan.info', '#', '#', NULL, 'asset/img/Teams/1699405228197928.jpg', 1, '2021-05-10 18:38:39', '2021-05-10 18:38:58');

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

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'DREAM-IT', 'dreamit2021bd@gmail.com', NULL, '$2y$10$H/tfJV9ODalPfSs48iRmeeHfad.phpvTg.oghF9JYivz0n1p5mALK', NULL, '2021-01-01 13:35:48', '2021-01-01 13:35:48');

-- --------------------------------------------------------

--
-- Table structure for table `visits`
--

CREATE TABLE `visits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timezone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visits`
--

INSERT INTO `visits` (`id`, `ip`, `city`, `postal`, `region`, `loc`, `name`, `timezone`, `created_at`, `updated_at`) VALUES
(29, '::1', NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-29 08:48:07', '2021-04-29 08:48:07'),
(30, '58.145.189.253', 'Comilla', '3520', 'Chittagong', '23.4619,91.1850', 'Bangladesh', 'Asia/Dhaka', '2021-04-29 17:34:02', '2021-04-29 17:34:02'),
(31, '173.252.127.119', 'Union City', '30291', 'Georgia', '33.5871,-84.5424', 'United States of America', 'America/New_York', '2021-04-29 18:39:18', '2021-04-29 18:39:18'),
(32, '173.252.127.23', 'Union City', '30291', 'Georgia', '33.5871,-84.5424', 'United States of America', 'America/New_York', '2021-04-29 19:07:07', '2021-04-29 19:07:07'),
(33, '173.252.127.118', 'Union City', '30291', 'Georgia', '33.5871,-84.5424', 'United States of America', 'America/New_York', '2021-04-29 19:07:09', '2021-04-29 19:07:09'),
(34, '103.135.91.252', 'Feni', '3920', 'Chittagong', '23.0144,91.3966', 'Bangladesh', 'Asia/Dhaka', '2021-04-29 19:11:08', '2021-04-29 19:11:08'),
(35, '35.80.8.79', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-04-29 20:34:14', '2021-04-29 20:34:14'),
(36, '34.213.46.226', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-04-29 20:34:35', '2021-04-29 20:34:35'),
(37, '18.133.184.150', 'London', 'EC1A', 'England', '51.5085,-0.1257', 'United States of America', 'Europe/London', '2021-04-30 00:00:51', '2021-04-30 00:00:51'),
(38, '58.145.188.254', 'Comilla', '3520', 'Chittagong', '23.4619,91.1850', 'Bangladesh', 'Asia/Dhaka', '2021-04-30 02:41:43', '2021-04-30 02:41:43'),
(39, '23.100.232.233', 'Chicago', '60603', 'Illinois', '41.8798,-87.6285', 'United States of America', 'America/Chicago', '2021-04-30 06:28:01', '2021-04-30 06:28:01'),
(40, '35.187.132.233', 'Marshfield', '65706', 'Missouri', '37.3387,-92.9071', 'United States of America', 'America/Chicago', '2021-04-30 09:53:51', '2021-04-30 09:53:51'),
(41, '2600:1900:2001:2::2b', 'Dublin', 'D04', 'Leinster', '53.3334,-6.2335', 'United States of America', 'Europe/Dublin', '2021-04-30 09:53:51', '2021-04-30 09:53:51'),
(42, '204.13.201.137', 'Chicago', '60666', 'Illinois', '41.8500,-87.6500', 'United States of America', 'America/Chicago', '2021-04-30 09:53:51', '2021-04-30 09:53:51'),
(43, '208.87.234.140', 'Ashburn', '20149', 'Virginia', '39.0437,-77.4875', 'United States of America', 'America/New_York', '2021-04-30 09:53:51', '2021-04-30 09:53:51'),
(44, '35.187.132.235', 'Marshfield', '65706', 'Missouri', '37.3387,-92.9071', 'United States of America', 'America/Chicago', '2021-04-30 09:54:01', '2021-04-30 09:54:01'),
(45, '82.112.184.223', 'Saint Petersburg', '190000', 'St.-Petersburg', '59.9386,30.3141', 'Russian Federation', 'Europe/Moscow', '2021-04-30 10:13:34', '2021-04-30 10:13:34'),
(46, '205.169.39.174', 'Dallas', '75270', 'Texas', '32.7831,-96.8067', 'United States of America', 'America/Chicago', '2021-04-30 10:54:49', '2021-04-30 10:54:49'),
(47, '205.169.39.211', 'Dallas', '75270', 'Texas', '32.7831,-96.8067', 'United States of America', 'America/Chicago', '2021-04-30 10:56:11', '2021-04-30 10:56:11'),
(48, '205.169.39.51', 'Parsons', '67357', 'Kansas', '37.3403,-95.2611', 'United States of America', 'America/Chicago', '2021-04-30 10:56:20', '2021-04-30 10:56:20'),
(49, '205.169.39.254', 'Dallas', '75270', 'Texas', '32.7831,-96.8067', 'United States of America', 'America/Chicago', '2021-04-30 10:58:12', '2021-04-30 10:58:12'),
(50, '138.68.84.122', 'Frankfurt am Main', '60311', 'Hesse', '50.1155,8.6842', 'Germany', 'Europe/Berlin', '2021-04-30 11:00:26', '2021-04-30 11:00:26'),
(51, '23.94.75.228', 'Dallas', '75270', 'Texas', '32.7831,-96.8067', 'United States of America', 'America/Chicago', '2021-04-30 11:20:03', '2021-04-30 11:20:03'),
(52, '207.102.138.19', 'Burnaby', 'V5A', 'British Columbia', '49.2664,-122.9526', 'Canada', 'America/Vancouver', '2021-04-30 11:25:28', '2021-04-30 11:25:28'),
(53, '69.25.58.56', 'Pleasanton', '94588', 'California', '37.6873,-121.8957', 'United States of America', 'America/Los_Angeles', '2021-04-30 12:49:46', '2021-04-30 12:49:46'),
(54, '58.145.188.247', 'Comilla', '3520', 'Chittagong', '23.4619,91.1850', 'Bangladesh', 'Asia/Dhaka', '2021-04-30 13:03:28', '2021-04-30 13:03:28'),
(55, '103.135.91.248', 'Feni', '3920', 'Chittagong', '23.0144,91.3966', 'Bangladesh', 'Asia/Dhaka', '2021-04-30 16:31:20', '2021-04-30 16:31:20'),
(56, '58.145.188.236', 'Comilla', '3520', 'Chittagong', '23.4619,91.1850', 'Bangladesh', 'Asia/Dhaka', '2021-04-30 16:50:45', '2021-04-30 16:50:45'),
(57, '180.210.185.225', 'Feni', '3920', 'Chittagong', '23.0144,91.3966', 'Bangladesh', 'Asia/Dhaka', '2021-04-30 18:06:58', '2021-04-30 18:06:58'),
(58, '54.236.1.13', 'Ashburn', '20149', 'Virginia', '39.0437,-77.4875', 'United States of America', 'America/New_York', '2021-04-30 19:33:15', '2021-04-30 19:33:15'),
(59, '173.252.127.21', 'Union City', '30291', 'Georgia', '33.5871,-84.5424', 'United States of America', 'America/New_York', '2021-04-30 20:20:29', '2021-04-30 20:20:29'),
(60, '58.145.184.243', 'Chattogram', '4000', 'Chittagong', '22.3384,91.8317', 'Bangladesh', 'Asia/Dhaka', '2021-04-30 20:20:55', '2021-04-30 20:20:55'),
(61, '34.77.162.23', 'Brussels', '1000', 'Brussels Capital', '50.8505,4.3488', 'United States of America', 'Europe/Brussels', '2021-04-30 21:00:37', '2021-04-30 21:00:37'),
(62, '66.249.79.205', 'Seattle', '98111', 'Washington', '47.6062,-122.3321', 'United States of America', 'America/Los_Angeles', '2021-04-30 23:34:20', '2021-04-30 23:34:20'),
(63, '66.249.79.141', 'Seattle', '98111', 'Washington', '47.6062,-122.3321', 'United States of America', 'America/Los_Angeles', '2021-05-01 00:31:39', '2021-05-01 00:31:39'),
(64, '132.145.210.197', 'Ashburn', '20147', 'Virginia', '39.0373,-77.4805', 'United States of America', 'America/New_York', '2021-05-01 00:37:05', '2021-05-01 00:37:05'),
(65, '69.63.184.120', 'Union City', '30291', 'Georgia', '33.5871,-84.5424', 'United States of America', 'America/New_York', '2021-05-01 00:43:07', '2021-05-01 00:43:07'),
(66, '58.145.190.230', 'Comilla', '3520', 'Chittagong', '23.4619,91.1850', 'Bangladesh', 'Asia/Dhaka', '2021-05-01 00:55:33', '2021-05-01 00:55:33'),
(67, '66.249.79.143', 'Seattle', '98111', 'Washington', '47.6062,-122.3321', 'United States of America', 'America/Los_Angeles', '2021-05-01 13:14:58', '2021-05-01 13:14:58'),
(68, '58.145.188.241', 'Comilla', '3520', 'Chittagong', '23.4619,91.1850', 'Bangladesh', 'Asia/Dhaka', '2021-05-01 19:04:14', '2021-05-01 19:04:14'),
(69, '199.244.88.132', 'Ashburn', '20149', 'Virginia', '39.0437,-77.4875', 'United States of America', 'America/New_York', '2021-05-01 20:32:23', '2021-05-01 20:32:23'),
(70, '74.208.253.48', 'Mena', '71953', 'Arkansas', '34.5862,-94.2397', 'United States of America', 'America/Chicago', '2021-05-01 23:49:09', '2021-05-01 23:49:09'),
(71, '104.43.224.231', 'Des Moines', '50392', 'Iowa', '41.5878,-93.6274', 'United States of America', 'America/Chicago', '2021-05-02 01:41:10', '2021-05-02 01:41:10'),
(72, '192.151.157.210', 'Kansas City', '64170', 'Missouri', '39.0997,-94.5786', 'United States of America', 'America/Chicago', '2021-05-02 01:45:02', '2021-05-02 01:45:02'),
(73, '66.249.79.201', 'Seattle', '98111', 'Washington', '47.6062,-122.3321', 'United States of America', 'America/Los_Angeles', '2021-05-02 01:57:21', '2021-05-02 01:57:21'),
(74, '82.165.117.55', 'Düsseldorf', '40212', 'North Rhine-Westphalia', '51.2217,6.7762', 'Germany', 'Europe/Berlin', '2021-05-02 07:15:24', '2021-05-02 07:15:24'),
(75, '188.166.188.124', 'Singapore', '627753', 'Singapore', '1.3215,103.6957', 'Singapore', 'Asia/Singapore', '2021-05-02 11:37:25', '2021-05-02 11:37:25'),
(76, '35.81.84.140', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-02 20:23:28', '2021-05-02 20:23:28'),
(77, '34.216.106.144', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-02 20:24:22', '2021-05-02 20:24:22'),
(78, '103.135.91.253', 'Feni', '3920', 'Chittagong', '23.0144,91.3966', 'Bangladesh', 'Asia/Dhaka', '2021-05-03 07:28:48', '2021-05-03 07:28:48'),
(79, '58.145.189.251', 'Comilla', '3520', 'Chittagong', '23.4619,91.1850', 'Bangladesh', 'Asia/Dhaka', '2021-05-03 07:31:41', '2021-05-03 07:31:41'),
(80, '58.145.187.252', 'Chattogram', '4000', 'Chittagong', '22.3384,91.8317', 'Bangladesh', 'Asia/Dhaka', '2021-05-03 07:38:15', '2021-05-03 07:38:15'),
(81, '34.86.35.12', 'Washington', '20045', 'Washington, D.C.', '38.8951,-77.0364', 'United States of America', 'America/New_York', '2021-05-03 19:42:03', '2021-05-03 19:42:03'),
(82, '34.213.117.15', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-03 20:14:46', '2021-05-03 20:14:46'),
(83, '54.202.165.80', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-03 20:16:27', '2021-05-03 20:16:27'),
(84, '54.213.157.165', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-03 20:27:04', '2021-05-03 20:27:04'),
(85, '34.220.153.87', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-03 20:27:05', '2021-05-03 20:27:05'),
(86, '34.219.239.199', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-03 20:27:34', '2021-05-03 20:27:34'),
(87, '54.203.73.198', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-03 21:12:45', '2021-05-03 21:12:45'),
(88, '35.196.225.6', 'North Charleston', '29415', 'South Carolina', '32.8546,-79.9748', 'United States of America', 'America/New_York', '2021-05-03 22:43:52', '2021-05-03 22:43:52'),
(89, '34.74.130.187', 'North Charleston', '29415', 'South Carolina', '32.8546,-79.9748', 'United States of America', 'America/New_York', '2021-05-03 22:44:02', '2021-05-03 22:44:02'),
(90, '51.89.227.251', 'London', 'EC1A', 'England', '51.5085,-0.1257', 'France', 'Europe/London', '2021-05-04 00:14:46', '2021-05-04 00:14:46'),
(91, '205.169.39.65', 'Dallas', '75270', 'Texas', '32.7831,-96.8067', 'United States of America', 'America/Chicago', '2021-05-04 01:03:26', '2021-05-04 01:03:26'),
(92, '54.36.148.70', 'Roubaix', '59051 CEDEX 1', 'Hauts-de-France', '50.6942,3.1746', 'France', 'Europe/Paris', '2021-05-04 07:30:21', '2021-05-04 07:30:21'),
(93, '3.8.21.213', 'London', 'EC1A', 'England', '51.5085,-0.1257', 'United Kingdom of Great Britain and Northern Ireland', 'Europe/London', '2021-05-04 14:46:35', '2021-05-04 14:46:35'),
(94, '34.86.35.3', 'Washington', '20045', 'Washington, D.C.', '38.8951,-77.0364', 'United States of America', 'America/New_York', '2021-05-04 15:49:20', '2021-05-04 15:49:20'),
(95, '199.187.126.46', 'Philadelphia', '19099', 'Pennsylvania', '39.9523,-75.1638', 'United States of America', 'America/New_York', '2021-05-04 22:36:05', '2021-05-04 22:36:05'),
(96, '167.99.54.130', 'Clifton', '07014', 'New Jersey', '40.8344,-74.1377', 'United States of America', 'America/New_York', '2021-05-05 03:17:03', '2021-05-05 03:17:03'),
(97, '103.109.57.118', 'Feni', '3920', 'Chittagong', '23.0144,91.3966', 'Bangladesh', 'Asia/Dhaka', '2021-05-05 05:22:12', '2021-05-05 05:22:12'),
(98, '58.145.190.246', 'Comilla', '3520', 'Chittagong', '23.4619,91.1850', 'Bangladesh', 'Asia/Dhaka', '2021-05-05 07:03:07', '2021-05-05 07:03:07'),
(99, '51.79.216.38', 'Singapore', '048508', 'Singapore', '1.2897,103.8501', 'Canada', 'Asia/Singapore', '2021-05-05 08:23:36', '2021-05-05 08:23:36'),
(100, '5.255.231.186', 'Peno', '172770', 'Tver’ Oblast', '56.9262,32.7426', 'Russian Federation', 'Europe/Moscow', '2021-05-05 14:57:03', '2021-05-05 14:57:03'),
(101, '52.90.244.202', 'Ashburn', '20149', 'Virginia', '39.0437,-77.4875', 'United States of America', 'America/New_York', '2021-05-05 17:31:06', '2021-05-05 17:31:06'),
(102, '52.10.222.237', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-05 20:30:22', '2021-05-05 20:30:22'),
(103, '34.209.69.225', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-05 20:33:12', '2021-05-05 20:33:12'),
(104, '138.246.253.24', 'Munich', '80331', 'Bavaria', '48.1374,11.5755', 'Germany', 'Europe/Berlin', '2021-05-06 07:06:28', '2021-05-06 07:06:28'),
(105, '185.72.54.199', 'Valdemoro', '28340', 'Madrid', '40.1908,-3.6789', 'Spain', 'Europe/Madrid', '2021-05-06 08:34:40', '2021-05-06 08:34:40'),
(106, '58.145.188.253', 'Comilla', '3520', 'Chittagong', '23.4619,91.1850', 'Bangladesh', 'Asia/Dhaka', '2021-05-06 14:26:06', '2021-05-06 14:26:06'),
(107, '206.189.36.246', 'Singapore', '627753', 'Singapore', '1.3215,103.6957', 'Singapore', 'Asia/Singapore', '2021-05-06 14:54:39', '2021-05-06 14:54:39'),
(108, '103.135.91.250', 'Feni', '3920', 'Chittagong', '23.0144,91.3966', 'Bangladesh', 'Asia/Dhaka', '2021-05-06 15:43:51', '2021-05-06 15:43:51'),
(109, '58.145.189.245', 'Comilla', '3520', 'Chittagong', '23.4619,91.1850', 'Bangladesh', 'Asia/Dhaka', '2021-05-06 15:52:49', '2021-05-06 15:52:49'),
(110, '185.220.100.251', 'Lindau', '88131', 'Bavaria', '47.5461,9.6843', 'Germany', 'Europe/Berlin', '2021-05-06 19:27:56', '2021-05-06 19:27:56'),
(111, '52.30.16.188', 'Dublin', 'D02', 'Leinster', '53.3331,-6.2489', 'Ireland', 'Europe/Dublin', '2021-05-07 04:02:43', '2021-05-07 04:02:43'),
(112, '64.246.165.210', 'Des Moines', '98198', 'Washington', '47.4018,-122.3243', 'United States of America', 'America/Los_Angeles', '2021-05-07 05:04:16', '2021-05-07 05:04:16'),
(113, '34.77.162.24', 'Brussels', '1000', 'Brussels Capital', '50.8505,4.3488', 'United States of America', 'Europe/Brussels', '2021-05-07 10:06:39', '2021-05-07 10:06:39'),
(114, '34.211.59.233', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-07 11:16:23', '2021-05-07 11:16:23'),
(115, '58.145.188.231', 'Comilla', '3520', 'Chittagong', '23.4619,91.1850', 'Bangladesh', 'Asia/Dhaka', '2021-05-07 12:47:30', '2021-05-07 12:47:30'),
(116, '132.145.167.95', 'Ashburn', '20147', 'Virginia', '39.0373,-77.4805', 'United States of America', 'America/New_York', '2021-05-07 12:48:24', '2021-05-07 12:48:24'),
(117, '52.64.20.252', 'Sydney', '1001', 'New South Wales', '-33.8678,151.2073', 'Australia', 'Australia/Sydney', '2021-05-07 14:04:25', '2021-05-07 14:04:25'),
(118, '103.135.91.243', 'Feni', '3920', 'Chittagong', '23.0144,91.3966', 'Bangladesh', 'Asia/Dhaka', '2021-05-07 14:38:23', '2021-05-07 14:38:23'),
(119, '173.252.127.1', 'Charlotte', '28202', 'North Carolina', '35.2271,-80.8431', 'United States of America', 'America/New_York', '2021-05-07 17:26:29', '2021-05-07 17:26:29'),
(120, '173.252.127.26', 'Union City', '30291', 'Georgia', '33.5871,-84.5424', 'United States of America', 'America/New_York', '2021-05-07 17:26:31', '2021-05-07 17:26:31'),
(121, '58.145.190.229', 'Comilla', '3520', 'Chittagong', '23.4619,91.1850', 'Bangladesh', 'Asia/Dhaka', '2021-05-07 20:07:01', '2021-05-07 20:07:01'),
(122, '192.185.4.40', 'Conroe', '77301', 'Texas', '30.3119,-95.4561', 'United States of America', 'America/Chicago', '2021-05-07 20:10:59', '2021-05-07 20:10:59'),
(123, '180.214.236.35', 'Ho Chi Minh City', '71606', 'Ho Chi Minh', '10.8230,106.6296', 'Viet Nam', 'Asia/Ho_Chi_Minh', '2021-05-08 03:34:21', '2021-05-08 03:34:21'),
(124, '84.17.46.159', 'Amsterdam', '1011', 'North Holland', '52.3710,4.9041', 'Italy', 'Europe/Amsterdam', '2021-05-08 03:58:28', '2021-05-08 03:58:28'),
(125, '58.145.188.250', 'Comilla', '3520', 'Chittagong', '23.4619,91.1850', 'Bangladesh', 'Asia/Dhaka', '2021-05-08 14:57:10', '2021-05-08 14:57:10'),
(126, '5.9.154.69', 'Stuttgart', '70173', 'Baden-Württemberg', '48.7823,9.1770', 'Germany', 'Europe/Berlin', '2021-05-09 00:52:24', '2021-05-09 00:52:24'),
(127, '54.36.148.240', 'Roubaix', '59051 CEDEX 1', 'Hauts-de-France', '50.6942,3.1746', 'France', 'Europe/Paris', '2021-05-09 06:40:16', '2021-05-09 06:40:16'),
(128, '173.252.127.6', 'Charlotte', '28202', 'North Carolina', '35.2271,-80.8431', 'United States of America', 'America/New_York', '2021-05-09 09:50:58', '2021-05-09 09:50:58'),
(129, '173.252.127.18', 'Charlotte', '28202', 'North Carolina', '35.2271,-80.8431', 'United States of America', 'America/New_York', '2021-05-09 09:51:00', '2021-05-09 09:51:00'),
(130, '37.111.218.165', 'Dhaka', '1000', 'Dhaka', '23.7104,90.4074', 'Bangladesh', 'Asia/Dhaka', '2021-05-09 09:51:09', '2021-05-09 09:51:09'),
(131, '5.61.60.251', 'London', 'W1H', 'England', '51.5176,-0.1612', 'Germany', 'Europe/London', '2021-05-09 16:35:39', '2021-05-09 16:35:39'),
(132, '58.145.188.252', 'Comilla', '3520', 'Chittagong', '23.4619,91.1850', 'Bangladesh', 'Asia/Dhaka', '2021-05-09 17:09:11', '2021-05-09 17:09:11'),
(133, '213.168.249.115', 'London', 'EC1A', 'England', '51.5085,-0.1257', 'United Kingdom of Great Britain and Northern Ireland', 'Europe/London', '2021-05-10 00:10:54', '2021-05-10 00:10:54'),
(134, '54.236.1.11', 'Ashburn', '20149', 'Virginia', '39.0437,-77.4875', 'United States of America', 'America/New_York', '2021-05-10 03:48:52', '2021-05-10 03:48:52'),
(135, '92.118.160.41', 'Dallas', '75270', 'Texas', '32.7831,-96.8067', 'Lithuania', 'America/Chicago', '2021-05-10 05:35:43', '2021-05-10 05:35:43'),
(136, '185.141.34.78', 'Istanbul', '34096', 'Istanbul', '41.0138,28.9497', 'Turkey', 'Europe/Istanbul', '2021-05-10 06:11:56', '2021-05-10 06:11:56'),
(137, '54.178.182.46', 'Tokyo', '151-0052', 'Tokyo', '35.6895,139.6917', 'Japan', 'Asia/Tokyo', '2021-05-10 08:29:48', '2021-05-10 08:29:48'),
(138, '58.145.190.236', 'Comilla', '3520', 'Chittagong', '23.4619,91.1850', 'Bangladesh', 'Asia/Dhaka', '2021-05-10 18:29:16', '2021-05-10 18:29:16'),
(139, '104.209.245.89', 'Boydton', '23917', 'Virginia', '36.6676,-78.3875', 'United States of America', 'America/New_York', '2021-05-10 21:06:29', '2021-05-10 21:06:29'),
(140, '34.86.35.15', 'Washington', '20045', 'Washington, D.C.', '38.8951,-77.0364', 'United States of America', 'America/New_York', '2021-05-10 22:00:57', '2021-05-10 22:00:57'),
(141, '34.77.162.33', 'Brussels', '1000', 'Brussels Capital', '50.8505,4.3488', 'United States of America', 'Europe/Brussels', '2021-05-11 03:22:43', '2021-05-11 03:22:43'),
(142, '62.109.13.37', 'Moscow', '101000', 'Moscow', '55.7522,37.6156', 'Russian Federation', 'Europe/Moscow', '2021-05-11 07:52:48', '2021-05-11 07:52:48'),
(143, '92.118.77.10', 'Kolomyya', '78203', 'Ivano-Frankivsk Oblast', '48.5250,25.0371', 'Ukraine', 'Europe/Kiev', '2021-05-12 03:40:17', '2021-05-12 03:40:17'),
(144, '5.255.253.123', 'Moscow', '101000', 'Moscow', '55.7522,37.6156', 'Russian Federation', 'Europe/Moscow', '2021-05-12 05:31:05', '2021-05-12 05:31:05'),
(145, '58.145.188.233', 'Comilla', '3520', 'Chittagong', '23.4619,91.1850', 'Bangladesh', 'Asia/Dhaka', '2021-05-12 13:34:30', '2021-05-12 13:34:30'),
(146, '155.94.208.71', 'Amsterdam', '1012', 'North Holland', '52.3740,4.8897', 'United States of America', 'Europe/Amsterdam', '2021-05-12 18:50:36', '2021-05-12 18:50:36'),
(147, '172.104.224.223', 'Frankfurt am Main', '60311', 'Hesse', '50.1155,8.6842', 'United States of America', 'Europe/Berlin', '2021-05-13 01:49:50', '2021-05-13 01:49:50'),
(148, '172.105.82.81', 'Frankfurt am Main', '60311', 'Hesse', '50.1155,8.6842', 'United States of America', 'Europe/Berlin', '2021-05-13 01:49:50', '2021-05-13 01:49:50'),
(149, '172.104.233.92', 'Frankfurt am Main', '60311', 'Hesse', '50.1155,8.6842', 'United States of America', 'Europe/Berlin', '2021-05-13 10:02:54', '2021-05-13 10:02:54'),
(150, '172.104.252.95', 'Frankfurt am Main', '60311', 'Hesse', '50.1155,8.6842', 'United States of America', 'Europe/Berlin', '2021-05-13 10:02:55', '2021-05-13 10:02:55'),
(151, '40.74.247.183', 'San Antonio', '78295', 'Texas', '29.4375,-98.4616', 'United States of America', 'America/Chicago', '2021-05-13 13:40:12', '2021-05-13 13:40:12'),
(152, '54.36.148.91', 'Roubaix', '59051 CEDEX 1', 'Hauts-de-France', '50.6942,3.1746', 'France', 'Europe/Paris', '2021-05-13 17:56:14', '2021-05-13 17:56:14'),
(153, '34.77.162.17', 'Brussels', '1000', 'Brussels Capital', '50.8505,4.3488', 'United States of America', 'Europe/Brussels', '2021-05-13 18:08:14', '2021-05-13 18:08:14'),
(154, '34.77.162.2', 'Brussels', '1000', 'Brussels Capital', '50.8505,4.3488', 'United States of America', 'Europe/Brussels', '2021-05-13 18:59:54', '2021-05-13 18:59:54'),
(155, '158.175.164.89', 'London', 'EC1A', 'England', '51.5085,-0.1257', 'United States of America', 'Europe/London', '2021-05-13 19:26:09', '2021-05-13 19:26:09'),
(156, '34.219.50.64', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-13 20:22:50', '2021-05-13 20:22:50'),
(157, '34.214.104.233', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-13 20:28:47', '2021-05-13 20:28:47'),
(158, '207.46.13.87', 'Quincy', '98848', 'Washington', '47.2343,-119.8525', 'United States of America', 'America/Los_Angeles', '2021-05-14 03:16:16', '2021-05-14 03:16:16'),
(159, '34.86.35.13', 'Washington', '20045', 'Washington, D.C.', '38.8951,-77.0364', 'United States of America', 'America/New_York', '2021-05-14 03:16:44', '2021-05-14 03:16:44'),
(160, '5.181.235.76', 'Tokyo', '140-0002', 'Tokyo', '35.6210,139.7463', 'Japan', 'Asia/Tokyo', '2021-05-14 08:17:11', '2021-05-14 08:17:11'),
(161, '34.86.35.26', 'Washington', '20045', 'Washington, D.C.', '38.8951,-77.0364', 'United States of America', 'America/New_York', '2021-05-14 14:15:27', '2021-05-14 14:15:27'),
(162, '52.37.99.143', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-14 20:11:30', '2021-05-14 20:11:30'),
(163, '54.186.36.148', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-14 20:12:17', '2021-05-14 20:12:17'),
(164, '66.70.204.253', 'Montréal', 'H2W', 'Quebec', '45.5088,-73.5878', 'Canada', 'America/Toronto', '2021-05-15 01:03:19', '2021-05-15 01:03:19'),
(165, '18.231.94.162', 'São Paulo', '01000-000', 'São Paulo', '-23.5475,-46.6361', 'Brazil', 'America/Sao_Paulo', '2021-05-15 03:33:43', '2021-05-15 03:33:43'),
(166, '66.249.64.84', 'Mount Pleasant', '29465', 'South Carolina', '32.7941,-79.8626', 'United States of America', 'America/New_York', '2021-05-15 07:14:27', '2021-05-15 07:14:27'),
(167, '66.249.64.83', 'Mount Pleasant', '29465', 'South Carolina', '32.7941,-79.8626', 'United States of America', 'America/New_York', '2021-05-15 07:38:41', '2021-05-15 07:38:41'),
(168, '107.172.229.182', 'Los Angeles', '90009', 'California', '34.0522,-118.2437', 'United States of America', 'America/Los_Angeles', '2021-05-15 12:12:50', '2021-05-15 12:12:50'),
(169, '69.12.72.188', 'Los Angeles', '90014', 'California', '34.0443,-118.2509', 'United States of America', 'America/Los_Angeles', '2021-05-15 19:45:55', '2021-05-15 19:45:55'),
(170, '35.81.168.164', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-15 20:15:36', '2021-05-15 20:15:36'),
(171, '54.202.199.40', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-15 20:16:51', '2021-05-15 20:16:51'),
(172, '34.222.195.96', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-15 20:20:45', '2021-05-15 20:20:45'),
(173, '92.220.10.100', 'Sandsli', '5253', 'Vestland', '60.3032,5.2855', 'Norway', 'Europe/Oslo', '2021-05-16 02:01:53', '2021-05-16 02:01:53'),
(174, '66.249.75.236', 'Marshfield', '65706', 'Missouri', '37.3387,-92.9071', 'United States of America', 'America/Chicago', '2021-05-16 09:09:44', '2021-05-16 09:09:44'),
(175, '34.219.173.173', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-16 20:06:05', '2021-05-16 20:06:05'),
(176, '44.234.49.177', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-16 20:07:03', '2021-05-16 20:07:03'),
(177, '34.217.123.203', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-16 20:19:26', '2021-05-16 20:19:26'),
(178, '54.244.31.123', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-16 20:19:43', '2021-05-16 20:19:43'),
(179, '171.25.193.25', 'Stockholm', '100 05', 'Stockholm', '59.3294,18.0687', 'Sweden', 'Europe/Stockholm', '2021-05-17 03:33:18', '2021-05-17 03:33:18'),
(180, '198.144.120.234', 'Amsterdam', '1012', 'North Holland', '52.3740,4.8897', 'Belize', 'Europe/Amsterdam', '2021-05-17 03:33:21', '2021-05-17 03:33:21'),
(181, '185.220.102.244', 'Berlin', '10178', 'Berlin', '52.5244,13.4105', 'Germany', 'Europe/Berlin', '2021-05-17 03:33:23', '2021-05-17 03:33:23'),
(182, '51.195.42.226', 'Frankfurt am Main', '60311', 'Hesse', '50.1155,8.6842', 'France', 'Europe/Berlin', '2021-05-17 03:33:31', '2021-05-17 03:33:31'),
(183, '156.146.56.104', 'Singapore', '574177', 'Singapore', '1.3558,103.8232', 'United States of America', 'Asia/Singapore', '2021-05-17 17:09:50', '2021-05-17 17:09:50'),
(184, '128.199.168.249', 'Singapore', '627753', 'Singapore', '1.3215,103.6957', 'Singapore', 'Asia/Singapore', '2021-05-17 19:48:41', '2021-05-17 19:48:41'),
(185, '100.21.218.158', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-17 19:58:38', '2021-05-17 19:58:38'),
(186, '54.149.102.98', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-17 20:16:29', '2021-05-17 20:16:29'),
(187, '52.34.122.236', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-17 20:17:04', '2021-05-17 20:17:04'),
(188, '54.185.166.242', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-17 20:27:35', '2021-05-17 20:27:35'),
(189, '2.57.122.34', 'Jászkisér', '5137', 'Jász-Nagykun-Szolnok', '47.4500,20.2167', 'Romania', 'Europe/Budapest', '2021-05-17 20:43:21', '2021-05-17 20:43:21'),
(190, '34.77.162.22', 'Brussels', '1000', 'Brussels Capital', '50.8505,4.3488', 'United States of America', 'Europe/Brussels', '2021-05-17 23:39:20', '2021-05-17 23:39:20'),
(191, '54.36.148.108', 'Roubaix', '59051 CEDEX 1', 'Hauts-de-France', '50.6942,3.1746', 'France', 'Europe/Paris', '2021-05-18 02:31:17', '2021-05-18 02:31:17'),
(192, '66.249.79.203', 'Seattle', '98111', 'Washington', '47.6062,-122.3321', 'United States of America', 'America/Los_Angeles', '2021-05-18 12:28:43', '2021-05-18 12:28:43'),
(193, '54.244.103.64', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-18 20:12:26', '2021-05-18 20:12:26'),
(194, '18.237.60.123', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-18 20:12:35', '2021-05-18 20:12:35'),
(195, '142.126.154.82', 'Toronto', 'M5N', 'Ontario', '43.7001,-79.4163', 'Canada', 'America/Toronto', '2021-05-18 20:13:01', '2021-05-18 20:13:01'),
(196, '34.208.154.136', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-18 20:19:20', '2021-05-18 20:19:20'),
(197, '34.213.130.205', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-18 20:19:31', '2021-05-18 20:19:31'),
(198, '52.42.250.214', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-18 20:20:24', '2021-05-18 20:20:24'),
(199, '54.189.61.113', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-18 20:23:45', '2021-05-18 20:23:45'),
(200, '44.224.32.96', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-18 20:33:57', '2021-05-18 20:33:57'),
(201, '205.169.39.43', 'Los Angeles', '90009', 'California', '34.0522,-118.2437', 'United States of America', 'America/Los_Angeles', '2021-05-19 00:33:16', '2021-05-19 00:33:16'),
(202, '3.98.96.28', 'Montréal', 'H2W', 'Quebec', '45.5088,-73.5878', 'United States of America', 'America/Toronto', '2021-05-19 01:49:50', '2021-05-19 01:49:50'),
(203, '34.77.162.9', 'Brussels', '1000', 'Brussels Capital', '50.8505,4.3488', 'United States of America', 'Europe/Brussels', '2021-05-19 03:36:30', '2021-05-19 03:36:30'),
(204, '212.83.146.233', 'Amsterdam', '1012', 'North Holland', '52.3740,4.8897', 'France', 'Europe/Amsterdam', '2021-05-19 04:13:11', '2021-05-19 04:13:11'),
(205, '51.15.191.81', 'Paris', '75000', 'Île-de-France', '48.8534,2.3488', 'France', 'Europe/Paris', '2021-05-19 04:13:46', '2021-05-19 04:13:46'),
(206, '62.4.14.198', 'Amsterdam', '1012', 'North Holland', '52.3740,4.8897', 'France', 'Europe/Amsterdam', '2021-05-19 04:22:42', '2021-05-19 04:22:42'),
(207, '34.238.136.109', 'Ashburn', '20149', 'Virginia', '39.0437,-77.4875', 'United States of America', 'America/New_York', '2021-05-19 14:34:04', '2021-05-19 14:34:04'),
(208, '54.244.37.17', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-19 20:07:31', '2021-05-19 20:07:31'),
(209, '34.217.112.98', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-19 20:11:12', '2021-05-19 20:11:12'),
(210, '54.190.129.146', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-19 20:11:50', '2021-05-19 20:11:50'),
(211, '54.149.110.209', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-19 22:57:33', '2021-05-19 22:57:33'),
(212, '193.200.151.103', 'Odessa', '65000', 'Odessa', '46.4857,30.7438', 'Ukraine', 'Europe/Kiev', '2021-05-20 03:22:48', '2021-05-20 03:22:48'),
(213, '51.15.195.246', 'Paris', '75000', 'Île-de-France', '48.8534,2.3488', 'France', 'Europe/Paris', '2021-05-20 03:35:32', '2021-05-20 03:35:32'),
(214, '89.179.119.216', 'Saint Petersburg', '190000', 'St.-Petersburg', '59.9386,30.3141', 'Russian Federation', 'Europe/Moscow', '2021-05-20 04:36:59', '2021-05-20 04:36:59'),
(215, '18.229.73.207', 'São Paulo', '01000-000', 'São Paulo', '-23.5475,-46.6361', 'Brazil', 'America/Sao_Paulo', '2021-05-20 05:17:22', '2021-05-20 05:17:22'),
(216, '93.158.90.142', 'Stockholm', '100 05', 'Stockholm', '59.3294,18.0687', 'Sweden', 'Europe/Stockholm', '2021-05-20 06:57:29', '2021-05-20 06:57:29'),
(217, '159.253.31.111', 'Stockholm', '100 05', 'Stockholm', '59.3294,18.0687', 'Sweden', 'Europe/Stockholm', '2021-05-20 09:03:04', '2021-05-20 09:03:04'),
(218, '51.158.66.83', 'Paris', '75000', 'Île-de-France', '48.8534,2.3488', 'France', 'Europe/Paris', '2021-05-20 12:38:52', '2021-05-20 12:38:52'),
(219, '217.12.221.2', 'Kharkiv', '61000', 'Kharkiv', '49.9808,36.2527', 'Ukraine', 'Europe/Kiev', '2021-05-20 19:32:32', '2021-05-20 19:32:32'),
(220, '54.149.41.244', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-20 21:23:05', '2021-05-20 21:23:05'),
(221, '34.218.247.109', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-20 21:23:06', '2021-05-20 21:23:06'),
(222, '54.218.44.70', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-20 21:23:40', '2021-05-20 21:23:40'),
(223, '52.12.3.153', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-20 21:23:45', '2021-05-20 21:23:45'),
(224, '51.195.234.11', 'Bexley', 'DA15', 'England', '51.4416,0.1487', 'France', 'Europe/London', '2021-05-21 04:57:57', '2021-05-21 04:57:57'),
(225, '20.55.52.186', 'Hampden Sydney', '23960', 'Virginia', '37.3058,-78.5462', 'United States of America', 'America/New_York', '2021-05-21 18:56:41', '2021-05-21 18:56:41'),
(226, '34.221.77.208', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-21 20:24:30', '2021-05-21 20:24:30'),
(227, '52.34.187.36', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-21 20:24:41', '2021-05-21 20:24:41'),
(228, '54.187.219.54', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-21 20:30:33', '2021-05-21 20:30:33'),
(229, '54.185.139.171', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-21 20:30:44', '2021-05-21 20:30:44'),
(230, '103.135.91.245', 'Feni', '3920', 'Chittagong', '23.0144,91.3966', 'Bangladesh', 'Asia/Dhaka', '2021-05-21 20:47:04', '2021-05-21 20:47:04'),
(231, '13.88.8.144', 'San Jose', '95112', 'California', '37.3476,-121.8870', 'United States of America', 'America/Los_Angeles', '2021-05-22 09:44:56', '2021-05-22 09:44:56'),
(232, '34.221.40.0', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-22 11:25:20', '2021-05-22 11:25:20'),
(233, '35.222.16.81', 'Council Bluffs', '51502', 'Iowa', '41.2619,-95.8608', 'United States of America', 'America/Chicago', '2021-05-22 13:14:39', '2021-05-22 13:14:39'),
(234, '128.199.138.46', 'Singapore', '627753', 'Singapore', '1.3215,103.6957', 'Singapore', 'Asia/Singapore', '2021-05-22 15:02:40', '2021-05-22 15:02:40'),
(235, '34.211.144.93', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-22 20:08:15', '2021-05-22 20:08:15'),
(236, '54.149.174.48', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-22 20:08:17', '2021-05-22 20:08:17'),
(237, '54.185.174.63', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-22 20:08:18', '2021-05-22 20:08:18'),
(238, '34.223.229.201', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-22 20:08:19', '2021-05-22 20:08:19'),
(239, '34.209.164.68', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-22 20:08:44', '2021-05-22 20:08:44'),
(240, '54.186.157.24', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-22 20:09:59', '2021-05-22 20:09:59'),
(241, '35.162.226.19', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-22 20:15:16', '2021-05-22 20:15:16'),
(242, '34.208.121.150', 'Boardman', '97818', 'Oregon', '45.8399,-119.7006', 'United States of America', 'America/Los_Angeles', '2021-05-22 20:28:49', '2021-05-22 20:28:49'),
(243, '54.36.148.221', 'Roubaix', '59051 CEDEX 1', 'Hauts-de-France', '50.6942,3.1746', 'France', 'Europe/Paris', '2021-05-22 21:55:37', '2021-05-22 21:55:37'),
(244, '54.153.122.134', 'San Jose', '95103', 'California', '37.3394,-121.8950', 'United States of America', 'America/Los_Angeles', '2021-05-22 22:34:12', '2021-05-22 22:34:12'),
(245, '40.76.41.245', 'Hampden Sydney', '23960', 'Virginia', '37.3058,-78.5462', 'United States of America', 'America/New_York', '2021-05-23 00:20:20', '2021-05-23 00:20:20'),
(246, '5.9.155.37', 'Stuttgart', '70173', 'Baden-Württemberg', '48.7823,9.1770', 'Germany', 'Europe/Berlin', '2021-05-23 01:35:30', '2021-05-23 01:35:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `deparment_details_department_id_unique` (`ip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visits`
--
ALTER TABLE `visits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
