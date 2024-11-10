-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 02, 2024 at 01:05 PM
-- Server version: 10.6.19-MariaDB
-- PHP Version: 8.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dhakadis_mainDb`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka Dispatch is a reliable and efficient courier service company', 'Dhaka Dispatch is a dedicated courier service specializing in fast and reliable delivery solutions . We prioritize customer satisfaction by offering a range of services including same-day and next-day deliveries, real-time tracking, and convenient pick-up options.', 'public/uploads/about/1727701621-about-us.webp', 1, '2024-09-30 13:07:01', '2024-10-08 06:42:08');

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'AB BANK LIMITED', 1, '2024-09-11 16:32:04', '2024-09-11 16:32:04'),
(2, 'AGRANI BANK LIMITED', 1, '2024-09-11 16:32:04', '2024-09-11 16:32:04'),
(3, 'AL-ARAFAH ISLAMI BANK LTD', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(4, 'Bangladesh Development Bank Ltd', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(5, 'BANGLADESH KRISHI BANK', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(6, 'BANK ALFALAH LIMITED', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(7, 'BANK ASIA LTD', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(8, 'BASIC BANK LIMITED', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(9, 'Brac Bank Ltd', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(10, 'City Bank Ltd', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(11, 'DBBL Agent Banking', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(12, 'DHAKA BANK LIMITED', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(13, 'Dutch-Bangla Bank Ltd', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(14, 'EASTERN BANK LTD', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(15, 'EXIM Bank', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(16, 'First Security Islami Bank Limited', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(17, 'Global Islami Bank ltd', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(18, 'IFIC BANK LTD', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(19, 'ISLAMI BANK BANGLADESH LTD', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(20, 'JAMUNA BANK LIMITED', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(21, 'Janata Bank Limited', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(22, 'MEGHNA BANK PLC', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(23, 'MERCANTILE BANK LIMITED', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(24, 'MIDLAND BANK LIMITED', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(25, 'Modhumoti Bank Limited', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(26, 'MUTUAL TRUST BANK LIMITED', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(27, 'NATIONAL BANK LIMITED', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(28, 'NCC Bank', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(29, 'NRB BANK LIMITED', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(30, 'NRB COMMERCIAL BANK LIMITED', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(31, 'Nrb Global Bank Limited', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(32, 'ONE BANK LIMITED', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(33, 'PADMA BANK LIMITED', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(34, 'PRIME BANK LIMITED', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(35, 'Pubali Bank Limited', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(36, 'RUPALI BANK LTD', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(37, 'SHAHJALAL ISLAMI BANK LIMITED', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(38, 'SOCIAL ISLAMI BANK LIMITED', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(39, 'Sonali Bank Limited', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(40, 'SOUTH BANGLA AGRICULTURE AND COMMERCE BANK LIMITED', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(41, 'SOUTHEAST BANK LIMITED', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(42, 'STANDARD BANK LIMITED', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(43, 'STANDARD CHARTERED BANK', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(44, 'THE PREMIER BANK LIMITED', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(45, 'TRUST BANK LTD', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(46, 'UNION BANK LIMITED', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(47, 'UNITED COMMERCIAL BANK LTD', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05'),
(48, 'UTTARA BANK LIMITED', 1, '2024-09-11 16:32:05', '2024-09-11 16:32:05');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(155) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `description`, `category_id`, `link`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Welcome to Dhakadispatch, Easy and Trusted Courier', '<p>Delivering Parcels Across 64 Districts in Just 3 Days with 24/7 Support and Next-Day Payment,<br></p>', 1, '#', 'public/uploads/banner/1728466086courier-banner-2.jpg', 1, '2024-07-30 06:27:23', '2024-10-27 10:00:25');

-- --------------------------------------------------------

--
-- Table structure for table `banner_categories`
--

CREATE TABLE `banner_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_categories`
--

INSERT INTO `banner_categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Main Slider', 1, '2024-07-30 05:55:50', '2024-07-30 05:55:50');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'public/uploads/client/1726034333-ajker-deal.webp', 1, '2024-09-11 05:58:53', '2024-09-11 05:58:53'),
(3, 'public/uploads/client/1728235760-boisodai-logo.webp', 1, '2024-09-11 05:59:01', '2024-10-06 17:29:20'),
(4, 'public/uploads/client/1728235840-whatsapp-image-2024-10-06-at-11.23.59-pm.webp', 1, '2024-09-11 05:59:07', '2024-10-06 17:30:40'),
(6, 'public/uploads/client/1726034360-robi-1.webp', 1, '2024-09-11 05:59:20', '2024-09-11 05:59:20'),
(10, 'public/uploads/client/1726034549-rokomari.webp', 1, '2024-09-11 06:02:29', '2024-09-11 06:02:29'),
(11, 'public/uploads/client/1728235671-whatsapp-image-2024-10-06-at-11.26.19-pm-(1).webp', 1, '2024-10-06 17:20:13', '2024-10-06 17:27:52'),
(12, 'public/uploads/client/1728236191-pickaboo-logo.webp', 1, '2024-10-06 17:20:39', '2024-10-06 17:36:31'),
(13, 'public/uploads/client/1728236267-priyo-shop-logo.webp', 1, '2024-10-06 17:37:47', '2024-10-06 17:37:47'),
(14, 'public/uploads/client/1728236496-shajgoj.webp', 1, '2024-10-06 17:41:36', '2024-10-06 17:41:36'),
(15, 'public/uploads/client/1728236590-bagdoom-logo.webp', 1, '2024-10-06 17:43:10', '2024-10-06 17:43:10');

-- --------------------------------------------------------

--
-- Table structure for table `client_feedback`
--

CREATE TABLE `client_feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `ratting` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_feedback`
--

INSERT INTO `client_feedback` (`id`, `name`, `image`, `company`, `designation`, `message`, `ratting`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Mahmud', 'public/uploads/feedback/1728370052-avator.webp', 'public/uploads/feedback/1728123571-gaibandha.webp', 'Owner', 'ব্যবসার শুরুতে সময়মত ডেলিভারি করতে না পারায় সমস্যায় ভুগতে হয়েছে। আলহামদুলিলাহ! জিইএস সাথে কাজ করার পর থেকে এখন আর এই সমস্যা হচ্ছে না।', '5', 1, '2024-10-05 10:19:31', '2024-10-08 06:47:32'),
(3, 'Zadu', 'public/uploads/feedback/1728370021-dhaka-dispatch.webp', 'public/uploads/feedback/1728238095-whatsapp-image-2024-10-07-at-12.07.20-am.webp', 'Co Founder', 'ঢাকা ডিসপ্যাচ থেকে সবসময়ই ভালো সার্ভিস পেয়েছি, তাই আপনাদের থেকে প্রত্যাশা একটু বেশিই থাকে। গাইবান্ধা এক্সপ্রেস সার্ভিসের জন্য শুভকামনা।', '4', 1, '2024-10-06 18:08:16', '2024-10-08 06:47:02'),
(4, 'Milon', 'public/uploads/feedback/1728369975-1698749246-hello-dinajpur.webp', 'public/uploads/feedback/1728238490-sodaipati-social-logo.webp', 'Co Founder', 'ঢাকা ডিসপ্যাচ  সার্ভিসের রাইডাররা সকলেই অনেক আন্তরিক ও সাহায্যকারী। আমি বিশ্বাস করি, শীঘ্রই তারা সেরা কুরিয়ার সার্ভিসে পরিণত হবে ইনশাআল্লাহ।', '5', 1, '2024-10-06 18:14:50', '2024-10-08 06:46:16');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `hotline` varchar(50) DEFAULT NULL,
  `hotmail` varchar(50) DEFAULT NULL,
  `phone` varchar(50) NOT NULL,
  `bkash` varchar(50) NOT NULL,
  `nagad` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `hotline`, `hotmail`, `phone`, `bkash`, `nagad`, `email`, `address`, `status`, `created_at`, `updated_at`) VALUES
(1, ' 01752358956', 'info@websolutionit.com', ' 01752358956', ' 01752358956', ' 01752358956', 'info@dhakadispatch.com', '111/6/1 North Mugda, Dhaka-1214', 1, '2024-07-09 15:54:56', '2024-10-08 06:50:10');

-- --------------------------------------------------------

--
-- Table structure for table `counters`
--

CREATE TABLE `counters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(99) NOT NULL,
  `counter` varchar(55) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `counters`
--

INSERT INTO `counters` (`id`, `title`, `counter`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Our Merchant', '200 +', 'public/uploads/service/1728114003-man.webp', 1, '2024-10-05 07:40:03', '2024-10-05 07:40:48'),
(2, 'Deliveryman', '1k +', 'public/uploads/service/1728114123-motorbike.webp', 1, '2024-10-05 07:42:03', '2024-10-05 07:42:03'),
(3, 'Delivery Point', '64 +', 'public/uploads/service/1728114359-map-pointer.webp', 1, '2024-10-05 07:45:59', '2024-10-05 07:45:59'),
(4, 'Parcel Delivered', '2500k +', 'public/uploads/service/1728114521-carton.webp', 1, '2024-10-05 07:48:41', '2024-10-05 07:48:41');

-- --------------------------------------------------------

--
-- Table structure for table `create_pages`
--

CREATE TABLE `create_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `section` tinyint(2) DEFAULT 1,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `create_pages`
--

INSERT INTO `create_pages` (`id`, `title`, `slug`, `description`, `section`, `status`, `created_at`, `updated_at`) VALUES
(6, 'Terms and Conditions', 'terms-and-conditions', '<p>Terms and Conditions..<br></p>', 1, 1, '2024-07-08 12:48:40', '2024-07-08 12:48:40'),
(7, 'Privacy Policy', 'privacy-policy', '<p>Privacy Policy<br></p>', 1, 1, '2024-07-08 12:49:00', '2024-07-08 12:49:00'),
(8, 'How to stay safe?', 'how-to-stay-safe?', '<p>How to stay safe..<br></p>', 1, 1, '2024-07-08 12:50:15', '2024-07-08 12:50:15'),
(9, 'Frequently Asked Questions', 'frequently-asked-questions', '<p>Frequently Asked Questions..<br></p>', 1, 1, '2024-07-08 12:50:36', '2024-07-08 12:50:36');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_charges`
--

CREATE TABLE `delivery_charges` (
  `id` int(10) UNSIGNED NOT NULL,
  `service_id` int(4) NOT NULL,
  `zone_id` int(4) NOT NULL,
  `amount` int(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delivery_charges`
--

INSERT INTO `delivery_charges` (`id`, `service_id`, `zone_id`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 50, 1, '2024-10-24 06:31:47', '2024-10-24 06:31:47'),
(2, 1, 2, 100, 1, '2024-10-24 06:32:02', '2024-10-24 06:37:15'),
(3, 1, 3, 130, 1, '2024-10-24 06:34:42', '2024-10-24 06:34:42'),
(4, 2, 1, 80, 1, '2024-10-24 06:37:40', '2024-10-24 06:37:40'),
(5, 3, 1, 80, 1, '2024-10-24 06:37:57', '2024-10-24 06:37:57'),
(6, 4, 1, 100, 1, '2024-10-24 06:38:15', '2024-10-24 06:38:15'),
(7, 5, 1, 100, 1, '2024-10-24 06:38:32', '2024-10-24 06:38:32');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_zones`
--

CREATE TABLE `delivery_zones` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(155) NOT NULL,
  `slug` varchar(155) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delivery_zones`
--

INSERT INTO `delivery_zones` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Inside Dhaka', 'inside-dhaka', 1, '2024-10-22 12:36:08', '2024-10-22 12:36:08'),
(2, 'Dhaka Suburb', 'dhaka-suburb', 1, '2024-10-22 12:36:36', '2024-10-22 12:36:36'),
(3, 'Outside Dhaka', 'outside-dhaka', 1, '2024-10-23 06:44:37', '2024-10-23 06:44:37');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(2, 'Chittagong', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(3, 'Sylhet', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(4, 'Gazipur', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(5, 'Narayanganj', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(6, 'Comilla', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(7, 'Khulna', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(8, 'Mymensingh', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(9, 'Barisal', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(10, 'Jamalpur', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(11, 'Patuakhali', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(12, 'Madaripur', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(13, 'Munshiganj', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(14, 'Sherpur', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(15, 'Perojpur', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(16, 'Chandpur', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(17, 'Faridpur', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(18, 'Tangail', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(19, 'Jhalokathi', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(20, 'Moulvibazar', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(21, 'Habiganj', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(22, 'Rangpur', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(23, 'Jessore', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(24, 'Panchagarh', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(25, 'Nilphamari', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(26, 'Cox\'s Bazar', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(27, 'Bandarban', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(28, 'Bhola', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(29, 'Barguna', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(30, 'Sirajganj', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(31, 'Pabna', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(32, 'Natore', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(33, 'Naogaon', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(34, 'Joypurhat', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(35, 'Satkhira', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(36, 'Meherpur', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(37, 'Shariatpur', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(38, 'Rajbari', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(39, 'Manikganj', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(40, 'Gopalganj', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(41, 'Thakurgaon', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(42, 'Netrokona', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(43, 'Sunamganj', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(44, 'Norshingdi', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(45, 'Feni', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(46, 'Dinajpur', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(47, 'Gaibandha', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(48, 'Chuadanga', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(49, 'Rajshahi', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(50, 'Magura', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(51, 'Narail', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(52, 'Rangamati', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(53, 'Kushtia', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(54, 'Chapai Nawabganj', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(55, 'Jhenaidah', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(56, 'Noakhali', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(57, 'Laksmipur', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(58, 'Kurigram', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(59, 'Kishoreganj', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(60, 'Bogra', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(61, 'Khagrachari', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(62, 'Brahmanbaria', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(63, 'Bagerhat', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40'),
(64, 'Lalmonirhat', 1, '2024-07-07 22:16:40', '2024-07-07 22:16:40');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(10) UNSIGNED NOT NULL,
  `expense_cat_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `expense_cat_id`, `name`, `amount`, `date`, `note`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Paper Cost', '1000', '2024-09-05', '', 1, '2024-09-24 13:44:18', '2024-09-24 13:44:18');

-- --------------------------------------------------------

--
-- Table structure for table `expense_categories`
--

CREATE TABLE `expense_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expense_categories`
--

INSERT INTO `expense_categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Salary', 1, '2024-09-24 13:43:31', '2024-09-24 13:43:31'),
(2, 'Stationary', 1, '2024-09-24 13:43:39', '2024-09-24 13:43:39');

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'What areas do you cover for delivery?', 'We provide both local and international delivery services, ensuring your packages reach destinations across a wide range of regions.', 1, '2024-09-11 05:52:18', '2024-09-11 05:52:18'),
(2, 'How can I track my package?', 'You can easily track your package in real-time using the tracking number provided. Simply enter the number on our tracking page for updates on your shipment.', 1, '2024-09-11 05:52:18', '2024-09-11 05:52:18'),
(3, 'What are your delivery timeframes?', 'Delivery timeframes vary based on the destination and service selected. We offer same-day, next-day, and standard delivery options to meet your needs.', 1, '2024-09-11 05:52:18', '2024-09-11 05:52:18'),
(4, 'Do you offer home delivery services?', 'Yes, we offer convenient home delivery, ensuring your packages are delivered directly to your customer\'s doorstep.', 1, '2024-09-11 05:52:18', '2024-09-11 05:52:18'),
(5, 'Can I schedule a pick-up for my package?', 'Absolutely! Our pick-and-drop service allows you to schedule a convenient time for us to collect your package and deliver it to the destination.', 1, '2024-09-11 05:52:18', '2024-09-11 05:52:18'),
(6, 'What should I do if my package is delayed or lost?', 'If your package is delayed or lost, please contact our customer service team with your tracking number, and we\'ll assist you in resolving the issue as quickly as possible.', 1, '2024-09-11 05:52:18', '2024-09-11 05:52:18');

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(55) NOT NULL,
  `white_logo` varchar(255) NOT NULL,
  `dark_logo` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `copyright` varchar(155) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `name`, `white_logo`, `dark_logo`, `favicon`, `copyright`, `about`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka Dispatch', 'public/uploads/settings/1728369111-dhaka-dispatch.webp', 'public/uploads/settings/1728369151-dhaka-dispatch.webp', 'public/uploads/settings/1728369167-dhaka-dispatch.webp', 'Development', 'Dhaka Dispatch is a dedicated courier service specializing in fast and reliable delivery solutions . We prioritize customer satisfaction by offering a range of services including same-day and next-day deliveries, real-time tracking, and convenient pick-up options.', 1, NULL, '2024-10-08 06:32:47');

-- --------------------------------------------------------

--
-- Table structure for table `google_tag_managers`
--

CREATE TABLE `google_tag_managers` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ip_blocks`
--

CREATE TABLE `ip_blocks` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip_no` varchar(255) NOT NULL,
  `reason` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `merchants`
--

CREATE TABLE `merchants` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'public/uploads/default/user.png',
  `district_id` int(4) DEFAULT NULL,
  `area_id` int(4) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `default_method` varchar(25) DEFAULT NULL,
  `payment_type` varchar(55) DEFAULT NULL,
  `verify` int(11) NOT NULL,
  `forgot` int(11) DEFAULT NULL,
  `agree` tinyint(4) NOT NULL,
  `read_notices` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`read_notices`)),
  `twofa` tinyint(2) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `merchants`
--

INSERT INTO `merchants` (`id`, `name`, `shop_name`, `shop_id`, `phone`, `email`, `password`, `image`, `district_id`, `area_id`, `address`, `default_method`, `payment_type`, `verify`, `forgot`, `agree`, `read_notices`, `twofa`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Md Zadu Mia2', 'Websolution IT', 100001, '01742892725', 'zadumia441@gmail.com', '$2y$10$/pEM0oU5CDVqTMA.cl6CLeuy5eL8Gvjdam6FSFfV6jq27pDRbkLb2', 'public/uploads/default/user.png', 2, 1126, 'Bandarban Sadar Road', 'bkash', 'daily', 1, NULL, 1, '[2,1]', NULL, 1, '2024-09-11 06:18:24', '2024-11-02 04:49:33'),
(2, 'Merchant 1', 'Shop 1', 100002, '01700000001', 'merchant1@gmail.com', '$2y$10$z88bWahvhrt26THU/s3xfOEZPFYF5FCK1ebRFp.qMHyXQPXMNELNi', 'public/uploads/default/user.png', NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, '[2,1]', NULL, 1, '2024-10-01 03:17:40', '2024-10-01 03:18:09'),
(3, 'Rasel Islam', 'Magic Shop', 100003, '01742892727', 'rasel@gmail.com', '$2y$10$wbnSK1XFJH0Af5/kuby6iuNJEUWJJ.NUGgvc1Qrem44zEDN7gYmui', 'public/uploads/merchant/1728909083-user.webp', 1, 1, 'Dinajpur City College, Balubari, Dinajpur', NULL, NULL, 1, NULL, 1, NULL, NULL, 1, '2024-10-14 12:22:32', '2024-10-14 12:31:23'),
(4, 'Akib Jabed', 'Aj Varities', 100004, '01897526856', 'abb6700@yahoo.com', '$2y$10$cvBnDflJQbBIAp2F3/Ez6.MCy2OxkeWrqX8u7g13d6fmzX6oCTzVu', 'public/uploads/default/user.png', NULL, NULL, NULL, NULL, NULL, 6015, NULL, 1, NULL, NULL, 0, '2024-10-16 09:59:29', '2024-10-16 09:59:29'),
(5, 'Akib Jabed', 'Aj ', 100005, '01734944111', 'ajr8365@gmail.com', '$2y$10$nClimt7m9e/q2./TXpeyTOTxlPA4Fe3TNpYrk/SWmKvjUO8RY9Ymi', 'public/uploads/default/user.png', 1, 183, 'Floor 7, Rupnagar,Road 9,Dhaka', NULL, NULL, 1, NULL, 1, NULL, NULL, 1, '2024-10-19 05:15:24', '2024-10-27 16:46:15'),
(6, 'MZsExaWnI', 'KVXLYbkmqUCZeVP', 100006, '4593040437', 'turnhodij@gmail.com', '$2y$10$I2YCwWlY2B5Ca6eFUo7RM.aLrpAkFD0nfqJAygfNHm69qLcKlFZe6', 'public/uploads/default/user.png', NULL, NULL, NULL, NULL, NULL, 7615, NULL, 1, NULL, NULL, 0, '2024-10-27 02:16:56', '2024-10-27 02:16:56'),
(7, 'Test', 'Test', 100007, '01316251605', 'test@gmail.com', '$2y$10$B5GQkUtMlyzsggecz4dZhO2YkT1yeyUa8meexLajPBf7NLVZrU.KC', 'public/uploads/default/user.png', 60, 994, 'Bogra sadar', NULL, NULL, 1, NULL, 1, NULL, NULL, 1, '2024-10-27 12:04:05', '2024-11-02 06:14:34'),
(8, 'Akib Jabed', 'aj', 100008, '01793303683', 'akibrayhan24@gmail.com', '$2y$10$EVt/YpfFRZid0BVPZWxtceettSjoXMKmVzgL84Yn8xLXquNMTywVW', 'public/uploads/merchant/1730127782-WhatsApp Image 2024-10-19 at 11.36.14.jpeg', 1, 307, '111/n-4, North Mugdapara dhaka', NULL, NULL, 1, NULL, 1, '[2,1]', NULL, 1, '2024-10-28 12:25:07', '2024-10-28 15:03:02'),
(9, 'Samiul Alom', 'SamWorld', 100009, '01750063101', 'samiulthedeveloper98@gmail.com', '$2y$10$u1eT7TCzsJUJIMf3Rv0wNuLIV3qMhA3PIbV4bPB15Pdh7mTstUur.', 'public/uploads/default/user.png', NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, 1, '2024-10-30 05:41:51', '2024-10-30 05:42:15'),
(10, 'Nahian', 'Scentiq', 1000010, '01752358956', 'nahianeshan.99@gmail.com', '$2y$10$wDwrPIV8D4hCscFs9B0.7e2GQn6i16T0ivficLuYC3Pc3AFWswLoe', 'public/uploads/default/user.png', 1, 307, '111/6/1', NULL, NULL, 1, NULL, 1, NULL, NULL, 1, '2024-10-30 06:05:19', '2024-10-31 04:29:20');

-- --------------------------------------------------------

--
-- Table structure for table `merchant_methods`
--

CREATE TABLE `merchant_methods` (
  `id` int(10) UNSIGNED NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `bkash` varchar(11) DEFAULT NULL,
  `nagad` varchar(11) DEFAULT NULL,
  `rocket` varchar(12) DEFAULT NULL,
  `bank_id` int(11) DEFAULT NULL,
  `branch` varchar(155) DEFAULT NULL,
  `routing` varchar(20) DEFAULT NULL,
  `account_name` varchar(155) DEFAULT NULL,
  `account_number` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `merchant_methods`
--

INSERT INTO `merchant_methods` (`id`, `merchant_id`, `bkash`, `nagad`, `rocket`, `bank_id`, `branch`, `routing`, `account_name`, `account_number`, `created_at`, `updated_at`) VALUES
(1, 1, '1766950986', NULL, '017428927256', 48, 'Dinajpur', '123456789', 'Websolution IT', 27250986, '2024-09-11 16:53:43', '2024-09-11 17:07:10'),
(2, 5, '01793303683', '01793303683', '01793303683', NULL, NULL, NULL, NULL, NULL, '2024-10-27 16:46:51', '2024-10-27 16:46:51'),
(3, 8, '01793303683', '01793303683', '01793303683', NULL, NULL, NULL, NULL, NULL, '2024-10-28 12:26:23', '2024-10-28 12:26:23'),
(4, 10, '01752358956', '', '', NULL, NULL, NULL, NULL, NULL, '2024-10-31 04:29:38', '2024-10-31 04:29:38');

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
(10, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(16, '2023_01_11_113936_create_permission_tables', 1),
(17, '2023_01_21_150317_create_general_settings_table', 1),
(18, '2023_01_22_140830_create_social_media_table', 1),
(19, '2023_01_22_153053_create_contacts_table', 1),
(20, '2023_02_21_083509_create_banners_table', 1),
(21, '2023_02_21_083647_create_banner_categories_table', 1),
(27, '2019_08_01_101825_create_members_table', 2),
(28, '2023_02_25_022224_create_create_pages_table', 2),
(55, '2024_02_11_111947_create_google_tag_managers_table', 4),
(56, '2024_03_18_150801_create_expense_categories_table', 4),
(57, '2024_03_18_163940_create_expenses_table', 4),
(59, '2024_07_30_183618_create_services_table', 4),
(60, '2024_09_07_172506_create_pricings_table', 4),
(61, '2024_09_07_191552_create_clients_table', 4),
(62, '2024_09_08_112312_create_faqs_table', 4),
(63, '2024_07_24_172758_create_merchants_table', 5),
(64, '2024_09_11_123613_create_merchant_methods_table', 6),
(67, '2019_08_01_062011_create_districts_table', 7),
(68, '2024_07_08_101336_create_thanas_table', 7),
(69, '2024_09_11_214937_create_banks_table', 8),
(70, '2024_09_12_104602_create_parcels_table', 9),
(71, '2024_09_15_151415_create_parcel_statuses_table', 10),
(72, '2024_09_15_185447_create_parcel_notes_table', 11),
(75, '2024_09_17_134102_create_payments_table', 12),
(76, '2024_09_17_135322_create_payment_details_table', 12),
(77, '2024_09_18_193343_create_notices_table', 13),
(78, '2024_09_18_204423_create_notifications_table', 14),
(80, '2024_09_25_100544_create_riders_table', 15),
(81, '2024_09_26_163343_create_rider_methods_table', 16),
(82, '2023_03_30_050646_create_abouts_table', 17),
(83, '2024_04_01_084424_create_mission_vissions_table', 17),
(84, '2024_09_29_102424_create_rider_commissions_table', 17),
(86, '2024_10_05_132705_create_counters_table', 18),
(87, '2024_10_05_140543_create_client_feedback_table', 19),
(91, '2024_10_13_160713_create_pickup_types_table', 20),
(93, '2024_10_13_153903_create_pickups_table', 21),
(95, '2024_10_22_122806_create_service_types_table', 22),
(96, '2024_10_22_131431_create_delivery_zones_table', 23),
(97, '2024_10_23_154753_create_delivery_charges_table', 24);

-- --------------------------------------------------------

--
-- Table structure for table `mission_vissions`
--

CREATE TABLE `mission_vissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mission_vissions`
--

INSERT INTO `mission_vissions` (`id`, `category`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'Our Mission', 'At Dhaka Dispatch, our mission is to provide fast, reliable, and secure delivery solutions that exceed customer expectations. We aim to simplify logistics by offering efficient and affordable courier services while maintaining the highest standards of professionalism and care. We are dedicated to fostering trust through timely deliveries, exceptional customer service, and innovative tracking systems that ensure complete transparency. Our goal is to be the leading courier service provider in the region, connecting communities and businesses with seamless, dependable logistics.', 'public/uploads/mission/1727701848-181112_blog_feature_mission.webp', 1, '2024-09-30 13:10:49', '2024-10-08 06:43:47'),
(2, '2', 'Our Vision', 'Our vision at Dhaka Dispatch is to become a leading courier and logistics service provider, recognized for our commitment to excellence, innovation, and customer satisfaction. We aim to expand our reach, delivering efficient, secure, and sustainable logistics solutions across Bangladesh. By leveraging advanced technology and fostering a customer-centric culture, we envision a future where Dhaka Dispatch is the preferred choice for individuals and businesses seeking reliable and seamless delivery services. We strive to contribute to the growth of the local economy while setting new standards in the courier industry.', 'public/uploads/mission/1727701886-vission.webp', 1, '2024-09-30 13:11:27', '2024-10-08 06:43:17');

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(2, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'API Base URL আপডেট করে নিতে API Documentation ফলো করুন', '<p data-pm-slice=\"1 1 []\">API Base URL আপডেট করে নিতে API Documentation ফলো করুন</p>', 1, '2024-09-18 13:48:12', '2024-09-18 14:32:33'),
(2, 'পিকআপ ও ডেলিভারি কার্যক্রম ব্যাহত', '<p><span style=\"font-family: Lato, sans-serif, NotoSansBengali; font-size: 16px; word-spacing: 3px; background-color: rgb(255, 242, 242);\">কক্সবাজার, বরিশাল, ভোলাসহ সারা দেশে প্রবল বৃষ্টির কারণে আমাদের পিকআপ ও ডেলিভারি কার্যক্রম ব্যাহত হচ্ছে। সাময়িক অসুবিধার জন্য আমরা আন্তরিকভাবে দুঃখিত।</span><br></p>', 1, '2024-09-18 14:38:50', '2024-09-18 14:38:50');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type` varchar(55) NOT NULL,
  `link` varchar(155) NOT NULL,
  `parcel_id` int(11) DEFAULT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `title`, `user_id`, `user_type`, `link`, `parcel_id`, `payment_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Your parcel #GC150924Q1QO2V has been delivered.', 1, 'merchant', '/parcel/view/GC150924Q1QO2V', 1, NULL, 1, '2024-09-19 03:13:43', '2024-09-19 05:13:27'),
(2, 'Your parcel #GC160924LZBM8H has been delivered.', 1, 'merchant', '/parcel/view/GC160924LZBM8H', 2, NULL, 1, '2024-09-19 03:13:43', '2024-09-19 05:13:19'),
(3, 'Your parcel #GC230924NYMBEA has been delivered.', 1, 'merchant', '/parcel/view/GC230924NYMBEA', 1, NULL, 1, '2024-09-29 07:51:01', '2024-10-26 07:14:56'),
(4, 'Your parcel #GC230924O6BDVT has been delivered.', 1, 'merchant', '/parcel/view/GC230924O6BDVT', 1, NULL, 1, '2024-09-29 11:52:08', '2024-10-26 07:14:56'),
(5, 'Your parcel #GC230924NYMBEA has been delivered.', 1, 'merchant', '/parcel/view/GC230924NYMBEA', 1, NULL, 1, '2024-09-29 11:52:08', '2024-10-26 07:14:56'),
(6, 'Your parcel #GC160924LZBM8H has been delivered.', 1, 'merchant', '/parcel/view/GC160924LZBM8H', 1, NULL, 1, '2024-09-29 11:52:08', '2024-10-26 07:14:56'),
(7, 'Your parcel #GC150924Q1QO2V has been delivered.', 1, 'merchant', '/parcel/view/GC150924Q1QO2V', 1, NULL, 1, '2024-09-29 11:52:08', '2024-10-26 07:14:56'),
(8, 'Your parcel #DD161024CC7ODA has been delivered.', 1, 'merchant', '/parcel/view/DD161024CC7ODA', 1, NULL, 1, '2024-10-16 05:58:42', '2024-10-26 07:14:56'),
(9, 'Your parcel #GC101024PMBDTJ has been delivered.', 1, 'merchant', '/parcel/view/GC101024PMBDTJ', 1, NULL, 1, '2024-10-16 05:58:42', '2024-10-26 07:14:56');

-- --------------------------------------------------------

--
-- Table structure for table `parcels`
--

CREATE TABLE `parcels` (
  `id` int(10) UNSIGNED NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `rider_id` int(11) DEFAULT NULL,
  `parcel_id` varchar(16) NOT NULL,
  `service_id` int(11) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `district_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `cod` int(11) NOT NULL,
  `payable_amount` int(11) NOT NULL,
  `delivery_charge` int(11) NOT NULL,
  `cod_charge` int(11) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `weight` varchar(6) NOT NULL,
  `merchant_invoice` varchar(8) DEFAULT NULL,
  `rider_commission` int(11) DEFAULT NULL,
  `rider_payment_status` varchar(11) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `payment_status` varchar(25) NOT NULL DEFAULT 'unpaid',
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parcels`
--

INSERT INTO `parcels` (`id`, `merchant_id`, `rider_id`, `parcel_id`, `service_id`, `zone_id`, `name`, `phone`, `address`, `district_id`, `area_id`, `cod`, `payable_amount`, `delivery_charge`, `cod_charge`, `discount`, `weight`, `merchant_invoice`, `rider_commission`, `rider_payment_status`, `note`, `payment_status`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'DD261024PFMSKC', 1, 1, 'Md Zadu Mia', '01742892725', 'Dhaka', 1, 1, 500, 450, 50, 0, NULL, '1', '', NULL, NULL, '', 'unpaid', 1, '2024-10-26 07:14:50', '2024-10-26 07:14:50'),
(2, 1, NULL, 'DD261024EHU5BH', 1, 2, 'Milon Mahmud', '01781013627', 'Dhaka', 1, 562, 500, 400, 100, 0, NULL, '1', '', NULL, NULL, '', 'unpaid', 1, '2024-10-26 07:40:09', '2024-10-26 10:03:25'),
(3, 5, NULL, 'DD2710249LTWLW', 1, 1, 'Akib Jabed', '01793303683', '63, Sector 63 Road\r\nC-A', 1, 101, 310, 260, 50, 0, NULL, '1', '', NULL, NULL, '', 'unpaid', 1, '2024-10-27 16:48:08', '2024-10-27 16:48:08'),
(4, 8, NULL, 'DD281024JD2A5T', 1, 1, 'Eshan', '01793303683', '63, Sector 63 Road\r\nC-A', 1, 83, 3000, 2950, 50, 0, NULL, '1', '', NULL, NULL, '', 'unpaid', 2, '2024-10-28 12:27:44', '2024-11-02 06:53:32'),
(5, 8, NULL, 'DD301024QBYZ48', 5, 1, 'Eshan', '01793303683', '63, Sector 63 Road\r\nC-A', 1, 188, 300, 200, 100, 0, NULL, '1', '', NULL, NULL, '', 'unpaid', 2, '2024-10-30 06:26:02', '2024-11-02 06:53:32');

-- --------------------------------------------------------

--
-- Table structure for table `parcel_notes`
--

CREATE TABLE `parcel_notes` (
  `id` int(10) UNSIGNED NOT NULL,
  `parcel_id` int(11) NOT NULL,
  `note` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parcel_notes`
--

INSERT INTO `parcel_notes` (`id`, `parcel_id`, `note`, `created_at`, `updated_at`) VALUES
(1, 1, 'Parcel added by Merchant(Website)', '2024-10-26 07:14:50', '2024-10-26 07:14:50'),
(2, 2, 'Parcel added by Merchant(Website)', '2024-10-26 07:40:09', '2024-10-26 07:40:09'),
(3, 2, 'Parcel edited by Merchant(Website)', '2024-10-26 10:02:51', '2024-10-26 10:02:51'),
(4, 2, 'Parcel edited by Merchant(Website)', '2024-10-26 10:03:25', '2024-10-26 10:03:25'),
(5, 3, 'Parcel added by Merchant(Website)', '2024-10-27 16:48:08', '2024-10-27 16:48:08'),
(6, 4, 'Parcel added by Merchant(Website)', '2024-10-28 12:27:44', '2024-10-28 12:27:44'),
(7, 5, 'Parcel added by Merchant(Website)', '2024-10-30 06:26:03', '2024-10-30 06:26:03'),
(8, 5, 'Parcel accepted', '2024-11-02 06:53:32', '2024-11-02 06:53:32'),
(9, 4, 'Parcel accepted', '2024-11-02 06:53:32', '2024-11-02 06:53:32');

-- --------------------------------------------------------

--
-- Table structure for table `parcel_statuses`
--

CREATE TABLE `parcel_statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(55) NOT NULL,
  `slug` varchar(55) NOT NULL,
  `icon` varchar(55) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parcel_statuses`
--

INSERT INTO `parcel_statuses` (`id`, `name`, `slug`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Pending', 'pending', 'fa-regular fa-clock', 1, '2024-09-15 09:22:39', '2024-09-15 09:22:39'),
(2, 'Accpeted', 'accpeted', 'fa-regular fa-thumbs-up', 1, '2024-09-15 10:28:26', '2024-09-15 10:28:26'),
(3, 'Pickup', 'pickup', 'fa-solid fa-truck', 1, '2024-09-15 10:29:35', '2024-09-15 10:29:35'),
(4, 'In Transit', 'in-transi', 'fa-solid fa-door-open', 1, '2024-09-15 10:29:50', '2024-09-15 10:29:55'),
(5, 'On The Way', 'on-the-way', 'fa-solid fa-route', 1, '2024-09-15 10:30:11', '2024-09-15 10:30:11'),
(6, 'On Hold', 'on-hold', 'fa-solid fa-circle-pause', 1, '2024-09-15 10:30:17', '2024-09-15 10:30:17'),
(7, 'Delivered', 'delivered', 'fa-regular fa-circle-check', 1, '2024-09-15 10:30:37', '2024-09-15 10:30:37'),
(8, 'Cancelled', 'cancelled', 'fa-regular fa-circle-xmark', 1, '2024-09-15 10:30:46', '2024-09-15 10:30:46'),
(9, 'Returned', 'returned', 'fa-solid fa-rotate-left', 1, '2024-09-15 10:30:55', '2024-09-15 10:30:55'),
(10, 'Return To Merchant', 'return-to-merchant', 'fa-solid fa-person-walking-arrow-loop-left', 1, '2024-09-15 10:31:02', '2024-09-15 10:31:02');

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
  `id` int(10) UNSIGNED NOT NULL,
  `invoice_id` varchar(22) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type` varchar(55) NOT NULL,
  `cod` int(11) NOT NULL,
  `payable_amount` int(11) NOT NULL,
  `delivery_charge` int(11) NOT NULL,
  `cod_charge` int(11) NOT NULL,
  `payment_method` varchar(22) NOT NULL,
  `user_note` varchar(255) DEFAULT NULL,
  `admin_note` varchar(255) DEFAULT NULL,
  `trx_id` varchar(55) DEFAULT NULL,
  `status` varchar(55) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `invoice_id`, `user_id`, `user_type`, `cod`, `payable_amount`, `delivery_charge`, `cod_charge`, `payment_method`, `user_note`, `admin_note`, `trx_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'INV-161024UFWIOS', 1, 'merchant', 4000, 3360, 640, 0, 'bkash', 'Receive Number: 1766950986', NULL, NULL, 'paid', '2024-10-16 07:07:31', '2024-10-16 07:07:31'),
(2, 'INV-161024GCBNCH', 1, 'rider', 3000, 600, 510, 0, 'nagad', 'Receive Number: 01752358956', NULL, NULL, 'paid', '2024-10-16 08:18:19', '2024-10-16 08:18:19');

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `payment_id` int(11) NOT NULL,
  `parcel_id` int(11) NOT NULL,
  `cod` int(11) NOT NULL,
  `payable_amount` int(11) NOT NULL,
  `delivery_charge` int(11) NOT NULL,
  `cod_charge` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`id`, `payment_id`, `parcel_id`, `cod`, `payable_amount`, `delivery_charge`, `cod_charge`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 500, 370, 130, 0, '2024-10-16 07:07:31', '2024-10-16 07:07:31'),
(2, 1, 2, 1000, 850, 150, 0, '2024-10-16 07:07:31', '2024-10-16 07:07:31'),
(3, 1, 3, 1000, 870, 130, 0, '2024-10-16 07:07:31', '2024-10-16 07:07:31'),
(4, 1, 4, 500, 400, 100, 0, '2024-10-16 07:07:31', '2024-10-16 07:07:31'),
(5, 1, 5, 1000, 870, 130, 0, '2024-10-16 07:07:31', '2024-10-16 07:07:31');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2024-07-02 05:05:20', '2024-07-02 05:08:16'),
(2, 'role-create', 'web', '2024-07-02 05:05:26', '2024-07-02 05:08:22'),
(3, 'role-edit', 'web', '2024-07-02 05:05:33', '2024-07-02 05:08:36'),
(4, 'role-delete', 'web', '2024-07-02 05:05:40', '2024-07-02 05:08:29'),
(5, 'permission-list', 'web', '2024-07-02 05:06:37', '2024-07-02 05:06:37'),
(6, 'permission-create', 'web', '2024-07-02 05:06:44', '2024-07-02 05:06:44'),
(7, 'permission-edit', 'web', '2024-07-02 05:06:50', '2024-07-02 05:06:50'),
(8, 'permission-delete', 'web', '2024-07-02 05:06:57', '2024-07-02 05:06:57'),
(9, 'user-list', 'web', '2024-07-02 05:07:10', '2024-07-02 05:07:10'),
(10, 'user-create', 'web', '2024-07-02 05:07:16', '2024-07-02 05:07:16'),
(11, 'user-edit', 'web', '2024-07-02 05:07:22', '2024-07-02 05:07:22'),
(12, 'user-delete', 'web', '2024-07-02 05:07:28', '2024-07-02 05:07:28'),
(13, 'setting-list', 'web', '2024-07-02 05:13:35', '2024-07-02 05:13:35'),
(14, 'setting-create', 'web', '2024-07-02 05:13:44', '2024-07-02 05:13:44'),
(15, 'setting-edit', 'web', '2024-07-02 05:13:50', '2024-07-02 05:13:50'),
(16, 'setting-delete', 'web', '2024-07-02 05:13:56', '2024-07-02 05:13:56'),
(17, 'category-list', 'web', '2024-07-04 10:21:58', '2024-07-04 10:24:33'),
(18, 'category-create', 'web', '2024-07-04 10:22:20', '2024-07-04 10:24:31'),
(19, 'category-edit', 'web', '2024-07-04 10:22:35', '2024-07-04 10:24:35'),
(20, 'category-delete', 'web', '2024-07-04 10:22:46', '2024-07-04 10:24:38'),
(21, 'subcategory-list', 'web', '2024-07-04 11:11:11', '2024-07-04 11:11:22'),
(22, 'subcategory-create', 'web', '2024-07-04 11:11:28', '2024-07-04 11:11:28'),
(23, 'subcategory-edit', 'web', '2024-07-04 11:11:35', '2024-07-04 11:11:35'),
(24, 'subcategory-delete', 'web', '2024-07-04 11:11:42', '2024-07-04 11:11:42'),
(25, 'page-list', 'web', '2024-07-05 08:40:54', '2024-07-05 08:45:06'),
(26, 'page-create', 'web', '2024-07-05 08:41:01', '2024-07-05 08:44:59'),
(27, 'page-edit', 'web', '2024-07-05 08:41:07', '2024-07-05 08:44:51'),
(28, 'page-delete', 'web', '2024-07-05 08:41:14', '2024-07-05 08:44:41'),
(29, 'district-list', 'web', '2024-07-08 04:34:57', '2024-07-08 04:34:57'),
(30, 'district-create', 'web', '2024-07-08 04:35:03', '2024-07-08 04:35:03'),
(31, 'district-edit', 'web', '2024-07-08 04:35:08', '2024-07-08 04:35:08'),
(32, 'district-delete', 'web', '2024-07-08 04:35:14', '2024-07-08 04:35:14'),
(33, 'city-list', 'web', '2024-07-08 04:35:23', '2024-07-08 04:35:23'),
(34, 'city-create', 'web', '2024-07-08 04:35:29', '2024-07-08 04:35:29'),
(35, 'city-edit', 'web', '2024-07-08 04:35:37', '2024-07-08 04:35:42'),
(36, 'city-delete', 'web', '2024-07-08 04:35:49', '2024-07-08 04:35:49'),
(37, 'charge-list', 'web', '2024-07-09 15:19:17', '2024-07-09 15:19:17'),
(38, 'charge-create', 'web', '2024-07-09 15:19:24', '2024-07-09 15:19:24'),
(39, 'charge-edit', 'web', '2024-07-09 15:19:35', '2024-07-09 15:19:35'),
(40, 'charge-delete', 'web', '2024-07-09 15:19:43', '2024-07-09 15:19:43'),
(41, 'contact-list', 'web', '2024-07-09 15:45:46', '2024-07-09 15:45:46'),
(42, 'contact-create', 'web', '2024-07-09 15:45:53', '2024-07-09 15:45:53'),
(43, 'contact-edit', 'web', '2024-07-09 15:46:00', '2024-07-09 15:46:00'),
(44, 'contact-delete', 'web', '2024-07-09 15:46:10', '2024-07-09 15:46:10'),
(45, 'social-list', 'web', '2024-07-10 06:31:43', '2024-07-10 06:31:43'),
(46, 'social-create', 'web', '2024-07-10 06:31:48', '2024-07-10 06:31:48'),
(47, 'social-edit', 'web', '2024-07-10 06:31:54', '2024-07-10 06:31:54'),
(48, 'social-delete', 'web', '2024-07-10 06:32:00', '2024-07-10 06:32:00'),
(49, 'banner-category-list', 'web', '2024-07-10 06:56:38', '2024-07-10 06:56:38'),
(50, 'banner-category-create', 'web', '2024-07-10 06:56:44', '2024-07-10 06:56:51'),
(51, 'banner-category-edit', 'web', '2024-07-10 06:56:57', '2024-07-10 06:56:57'),
(52, 'banner-category-delete', 'web', '2024-07-10 06:57:05', '2024-07-10 06:57:05'),
(53, 'banner-list', 'web', '2024-07-10 06:57:15', '2024-07-10 06:57:15'),
(54, 'banner-create', 'web', '2024-07-10 06:57:22', '2024-07-10 06:57:22'),
(55, 'banner-edit', 'web', '2024-07-10 06:57:32', '2024-07-10 06:57:32'),
(56, 'banner-delete', 'web', '2024-07-10 06:57:39', '2024-07-10 06:57:39');

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
-- Table structure for table `pickups`
--

CREATE TABLE `pickups` (
  `id` int(10) UNSIGNED NOT NULL,
  `pickup_id` varchar(12) NOT NULL,
  `type` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `district_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `estimedparcel` varchar(255) NOT NULL,
  `rider_id` int(11) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pickups`
--

INSERT INTO `pickups` (`id`, `pickup_id`, `type`, `address`, `district_id`, `area_id`, `merchant_id`, `estimedparcel`, `rider_id`, `note`, `status`, `created_at`, `updated_at`) VALUES
(1, 'DD141024KJUL', 1, 'Bandarban Sadar Road', 2, 11, 1, '5', 1, '', 'assigned', '2024-10-14 08:03:54', '2024-10-14 10:20:13'),
(2, 'DD271024LZLL', 1, 'Bandarban Sadar Road', 2, 11, 1, '5', NULL, '', 'approved', '2024-10-27 10:11:20', '2024-11-02 06:39:38'),
(3, 'DD301024DCUN', 1, '111/n-4, North Mugdapara dhaka', 1, 307, 8, '2', 2, '', 'assigned', '2024-10-30 05:46:25', '2024-11-02 06:37:21');

-- --------------------------------------------------------

--
-- Table structure for table `pickup_types`
--

CREATE TABLE `pickup_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pickup_types`
--

INSERT INTO `pickup_types` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Standard Delivery', 1, '2024-10-13 13:21:01', '2024-10-27 10:59:25'),
(2, 'Express Delivery', 1, '2024-10-13 13:22:07', '2024-10-13 13:22:07');

-- --------------------------------------------------------

--
-- Table structure for table `pricings`
--

CREATE TABLE `pricings` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `charge` int(11) NOT NULL,
  `extra_charge` int(11) NOT NULL DEFAULT 0,
  `cod_charge` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pricings`
--

INSERT INTO `pricings` (`id`, `title`, `charge`, `extra_charge`, `cod_charge`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Same City Delivery Charge', 70, 20, 0, 1, '2024-09-11 05:47:37', '2024-09-11 05:47:37'),
(2, 'Suburb Area Delivery Charge', 100, 20, 0, 1, '2024-09-11 05:48:00', '2024-09-11 05:48:00'),
(3, 'Rest of Bangladesh Delivery Charge', 130, 20, 0, 1, '2024-09-11 05:48:22', '2024-09-11 05:48:22');

-- --------------------------------------------------------

--
-- Table structure for table `riders`
--

CREATE TABLE `riders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `rider_id` int(11) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'public/uploads/default/user.png',
  `district_id` int(11) DEFAULT NULL,
  `area_id` varchar(4) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `default_method` varchar(25) DEFAULT NULL,
  `payment_type` varchar(25) DEFAULT NULL,
  `verify` int(11) NOT NULL,
  `forgot` int(11) DEFAULT NULL,
  `agree` tinyint(4) NOT NULL,
  `read_notices` longtext DEFAULT NULL,
  `commission` varchar(6) DEFAULT NULL,
  `commission_type` tinyint(2) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `riders`
--

INSERT INTO `riders` (`id`, `name`, `rider_id`, `phone`, `email`, `password`, `image`, `district_id`, `area_id`, `address`, `default_method`, `payment_type`, `verify`, `forgot`, `agree`, `read_notices`, `commission`, `commission_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Md Zadu Mia', 100001, '01742892725', 'zadumia441@gmail.com', '$2y$10$0QguifPrYOc480zfHlCFf.UWi8UTWvpb6mSQgOte9RzV.sOlQtptu', 'public/uploads/default/user.png', 1, '1', 'Bagerhat sadar update', 'bank', 'per', 1, NULL, 1, '[2,1]', '20', 2, 1, '2024-09-25 07:02:51', '2024-09-29 12:29:05'),
(2, 'Refat', 100002, '01750063101', 'refatalasad@gmail.com', '$2y$10$ipnb0sRwXn6DvgO.IggMPewulzcDcZgQmOfpZd6TpRAhFwOCeezuK', 'public/uploads/default/user.png', 1, '3', 'Dinajpur City College, Balubari, Dinajpur', NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, 1, '2024-10-14 12:53:30', '2024-10-14 12:53:30'),
(3, 'Akib Jabed', 100003, '01793303683', 'akibrayhan24@gmail.com', '$2y$10$.W9X.Waa/O1HsxzvyvPypOqavte/XKF6/Lv/TwtPHW3NfPrEoXadW', 'public/uploads/default/user.png', NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, 1, '2024-10-19 05:16:41', '2024-10-28 12:51:39'),
(4, 'zseSHbyg', 100004, '7230092621', 'turnhodij@gmail.com', '$2y$10$OmJqOtsMrJN.qWgEuTkFY.qjyaXfi8/an9srY9aDVru/azMn7S0zK', 'public/uploads/default/user.png', NULL, NULL, NULL, NULL, NULL, 1678, NULL, 1, NULL, NULL, NULL, 0, '2024-10-27 02:17:15', '2024-10-27 02:17:15'),
(5, 'Md Milon Mahmud', 100005, '01781013627', 'nm.milon97@gmail.com', '$2y$10$1O2SZSEd.2BEuSb/DnClFu2ekVYRp7vNtRUJxX9FJuTpJqB3QRPM6', 'public/uploads/default/user.png', NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, 1, '2024-10-27 10:02:16', '2024-10-27 10:04:58');

-- --------------------------------------------------------

--
-- Table structure for table `rider_commissions`
--

CREATE TABLE `rider_commissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rider_methods`
--

CREATE TABLE `rider_methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rider_id` int(11) NOT NULL,
  `bkash` varchar(11) DEFAULT NULL,
  `nagad` varchar(11) DEFAULT NULL,
  `rocket` varchar(12) DEFAULT NULL,
  `bank_id` int(11) DEFAULT NULL,
  `branch` varchar(155) DEFAULT NULL,
  `routing` varchar(11) DEFAULT NULL,
  `account_name` varchar(155) DEFAULT NULL,
  `default_method` varchar(25) DEFAULT NULL,
  `payment_type` varchar(55) DEFAULT NULL,
  `account_number` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rider_methods`
--

INSERT INTO `rider_methods` (`id`, `rider_id`, `bkash`, `nagad`, `rocket`, `bank_id`, `branch`, `routing`, `account_name`, `default_method`, `payment_type`, `account_number`, `created_at`, `updated_at`) VALUES
(1, 1, '01752358956', '01752358956', '017523589565', 2, 'Dinajpur', '01742892725', 'Websolution IT', NULL, NULL, 1766950986, '2024-09-26 12:03:36', '2024-09-29 13:05:32');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Superadmin', 'web', '2024-07-02 05:09:34', '2024-07-02 05:09:34'),
(2, 'Admin', 'web', '2024-07-02 05:09:54', '2024-07-02 05:09:54');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(5, 2),
(6, 1),
(6, 2),
(7, 1),
(7, 2),
(8, 1),
(8, 2),
(9, 1),
(9, 2),
(10, 1),
(10, 2),
(11, 1),
(11, 2),
(12, 1),
(12, 2),
(13, 1),
(13, 2),
(14, 1),
(14, 2),
(15, 1),
(15, 2),
(16, 1),
(16, 2),
(17, 1),
(17, 2),
(18, 1),
(18, 2),
(19, 1),
(19, 2),
(20, 1),
(20, 2),
(21, 1),
(21, 2),
(22, 1),
(22, 2),
(23, 1),
(23, 2),
(24, 1),
(24, 2),
(25, 1),
(25, 2),
(26, 1),
(26, 2),
(27, 1),
(27, 2),
(28, 1),
(28, 2),
(29, 1),
(29, 2),
(30, 1),
(30, 2),
(31, 1),
(31, 2),
(32, 1),
(32, 2),
(33, 1),
(33, 2),
(34, 1),
(34, 2),
(35, 1),
(35, 2),
(36, 1),
(36, 2),
(37, 1),
(37, 2),
(38, 1),
(38, 2),
(39, 1),
(39, 2),
(40, 1),
(40, 2),
(41, 1),
(41, 2),
(42, 1),
(42, 2),
(43, 1),
(43, 2),
(44, 1),
(44, 2),
(45, 1),
(45, 2),
(46, 1),
(46, 2),
(47, 1),
(47, 2),
(48, 1),
(48, 2),
(49, 1),
(49, 2),
(50, 1),
(50, 2),
(51, 1),
(51, 2),
(52, 1),
(52, 2),
(53, 1),
(53, 2),
(54, 1),
(54, 2),
(55, 1),
(55, 2),
(56, 1),
(56, 2);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Standard Delivery (24-48 Hours)', '<p>Perfect for non-urgent shipments, our Standard Delivery service ensures your package reaches its destination within 24-48 hours anywhere in Dhaka. Starting at just 50 Tk, it\'s an affordable option for everyday deliveries.<br></p>', 'public/uploads/service/1726033153-delivery-man.webp', 1, '2024-09-11 05:39:14', '2024-10-27 11:27:00'),
(2, 'Express Delivery (2-6 Hours)', 'For urgent deliveries, our Express Delivery service ensures your package arrives within 2-6 hours, giving you peace of mind for time-sensitive shipments. This service starts at 80 Tk. After the first 10 km, an extra 10 Tk per kilometer will be charged.', 'public/uploads/service/1726033332-real-time-tracking.webp', 1, '2024-09-11 05:42:12', '2024-10-27 11:27:49'),
(3, 'Try Before You Buy ', '<p>Customers can order just to see or inspect the Product and then decide whether they want to keep it or not. If the item doesn\'t meet their expectations, they can return it instantly—providing a risk-free shopping experience.<br></p>', 'public/uploads/service/1726033408-delivery.webp', 1, '2024-09-11 05:43:28', '2024-10-27 11:29:33'),
(4, 'Shop At Doorstep', '<p>We bring multiple product options directly to the customer’s door. They can browse, compare, and select their preferred item on the spot, just like shopping in-store, but with the convenience of home delivery.<br></p>', 'public/uploads/service/1726033451-shopping-cart.webp', 1, '2024-09-11 05:44:11', '2024-10-27 11:29:51'),
(5, 'Choose Your Color ', '<p>Customers can order multiple color options of the same product and choose their preferred one upon delivery, ensuring they get exactly what they want.This feature adds flexibility and reduces the chances of returns or dissatisfaction.</p>', 'public/uploads/service/1730029042-courier.webp', 1, '2024-10-27 11:37:22', '2024-10-27 11:37:22');

-- --------------------------------------------------------

--
-- Table structure for table `service_types`
--

CREATE TABLE `service_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(155) NOT NULL,
  `slug` varchar(155) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_types`
--

INSERT INTO `service_types` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Regular', 'regular', 1, '2024-10-22 07:09:18', '2024-10-22 07:09:18'),
(2, 'Express', 'express', 1, '2024-10-22 07:09:58', '2024-10-22 07:09:58'),
(3, 'Try Before Sell', 'try-before-sell', 1, '2024-10-22 07:10:29', '2024-10-22 07:10:29'),
(4, 'Choose Your Color', 'choose-your-color', 1, '2024-10-22 07:10:42', '2024-10-22 07:10:42'),
(5, 'Shop at Doorstep', 'shop-at-doorstep', 1, '2024-10-22 07:11:03', '2024-10-22 07:11:03');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `color` varchar(8) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `title`, `icon`, `link`, `color`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Facebook', 'fa-brands fa-facebook', '#', '#2f8cee', 1, '2024-09-08 10:42:58', '2024-09-08 10:42:58'),
(2, 'Instagram', 'fa-brands fa-instagram', '#', '#ff14a9', 1, '2024-09-08 10:43:18', '2024-10-27 11:00:48'),
(3, 'WhatsApp', 'fa-brands fa-whatsapp', '#', '#23e16c', 1, '2024-09-08 10:43:38', '2024-10-06 16:46:03');

-- --------------------------------------------------------

--
-- Table structure for table `thanas`
--

CREATE TABLE `thanas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `district_id` varchar(255) NOT NULL,
  `zone_id` int(11) NOT NULL DEFAULT 3,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thanas`
--

INSERT INTO `thanas` (`id`, `name`, `district_id`, `zone_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Pilkhana', '1', 1, 1, '2021-10-23 13:02:41', '2024-10-24 06:56:44'),
(2, 'Katasur', '1', 1, 1, '2021-10-24 13:02:41', '2024-10-24 06:56:44'),
(3, 'Shyamoli', '1', 1, 1, '2021-10-25 13:02:40', '2024-10-24 06:56:44'),
(4, 'Dhanmondi Staff Quarter', '1', 1, 1, '2021-10-26 13:02:40', '2024-10-24 06:56:44'),
(5, 'Dhaka Uddyan', '1', 1, 1, '2021-10-27 13:02:40', '2024-10-24 06:56:44'),
(6, 'Adabor', '1', 1, 1, '2021-10-28 13:02:40', '2024-10-24 06:56:44'),
(7, 'New Market', '1', 1, 1, '2021-10-29 13:02:40', '2024-10-24 06:56:44'),
(8, 'Shekhertek', '1', 1, 1, '2021-10-30 13:02:40', '2024-10-24 06:56:44'),
(9, 'Old Elephant Road', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(10, 'Dhanmondi - Rd 1', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(11, 'Science Lab', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(12, 'Dhanmondi - Rd 2', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(13, 'Lalmatia', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(14, 'Sobhanbag', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(15, 'Arshinagar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(16, 'Dhaka University', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(17, 'Washpur', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(18, 'Garden City', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(19, 'Boddhovumi', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(20, 'Kazi Nazrul Islam Avenue', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(21, 'Kaderabad Housing', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(22, 'Kawran Bazar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(23, 'Dhanmondi - Rd 4', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(24, 'Azimpur', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(25, 'Shahbag', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(26, 'Monipuripara', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(27, 'Bosila', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(28, 'Dhanmondi - Rd 4A', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(29, 'Sher-E-Bangla Nagar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(30, 'Nilkhet', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(31, 'Katabon', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(32, 'Dhanmondi - Rd 6', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(33, 'Hatirpool', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(34, 'Eastern Housing (Adabor)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(35, 'Dhanmondi - Rd 6', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(36, 'Teskunipara', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(37, 'DHAKA TENARI MORE', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(38, 'Dhanmondi - Rd 3A', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(39, 'Shahidnagar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(40, 'Bijoy Shoroni', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(41, 'Dhanmondi - Rd 6A', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(42, 'Jhigatola', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(43, 'Elephant Road', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(44, 'Farmgate', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(45, 'Dhanmondi - Rd 8', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(46, 'Polashi', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(47, 'Kathalbagan', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(48, 'Indira Road', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(49, 'Dhanmondi - Rd 8A', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(50, 'Satmoshjid Road', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(51, 'Dhanmondi - Rd 9', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(52, 'Shukrabad', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(53, 'Central Road', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(54, 'Tejkunipara', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(55, 'Dhanmondi - Rd 9A', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(56, 'BNP Bazar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(57, 'Razabazar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(58, 'Dhanmondi - Rd 10', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(59, 'Dhanmondi - Rd 12', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(60, 'Dhaka uddan', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(61, 'Sukrabad', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(62, 'Dhanmondi - Rd 12A', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(63, 'Nobodoy', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(64, 'Panthopath', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(65, 'Kalabagan', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(66, 'Dhanmondi - Rd 15', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(67, 'Chad Uddan', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(68, 'Green Road', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(69, 'Dhanmondi - Rd 15 A', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(70, 'Mohammadia Housing', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(71, 'Manik Mia Avenue', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(72, 'Dhanmondi - Rd 27', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(73, 'Ring Road', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(74, 'Asad Avenue', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(75, 'Dhanmondi - Rd 28', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(76, 'Tajmahal Road', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(77, 'West Dhanmondi', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(78, 'Dhanmondi - Rd 29', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(79, 'Nurjahan Road', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(80, 'Dhakeshwari', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(81, 'Shankar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(82, 'Rajia Sultana Road', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(83, 'Mohammadpur(Dhaka)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(84, 'Zigatola', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(85, 'Rayer Bazar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(86, 'Zafrabad', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(87, 'Paribag', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(88, 'Dhanmondi - Rd 3', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(89, 'Tallabag', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(90, 'Sadek Khan Road', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(91, 'Hazaribag', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(92, 'Sher e Bangla Road', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(93, 'Nikunja', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(94, 'Mahanogor', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(95, 'Nimtola', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(96, 'Nurerchala', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(97, 'Jahangir Gate', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(98, 'South Badda', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(99, 'Joar Shahara', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(100, 'Nijhum gate', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(101, 'Merul Badda', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(102, 'BAF Bashar (Dhaka cantonment)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(103, 'Apollo', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(104, 'Niketon', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(105, 'Bashundhara R/A', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(106, 'Zia Colony', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(107, 'Nurer Chala', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(108, 'Banani', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(109, 'Banani DOHS', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(110, 'Vatara', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(111, 'MES colony', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(112, 'Bawaila Para', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(113, 'Mohakhali', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(114, 'Nadda', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(115, 'Satarkul', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(116, 'Kunipara', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(117, 'Mohakhali DOHS', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(118, 'Pastola Bazar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(119, 'Gudaraghat (Badda)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(120, 'Baridhara', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(121, 'Khilbar Tek', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(122, 'Babli Masjid', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(123, 'Poschim Badda', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(124, 'Baridhara DOHS', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(125, 'Purbo Badda', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(126, 'Notun Bazar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(127, 'Aziz Palli', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(128, 'Sat-tola Bazar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(129, 'Adarsha Nagar (Badda)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(130, 'Namapara-Khilkhet', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(131, 'Bashtola', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(132, 'Shaheenbagh', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(133, 'Shahjadpur', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(134, 'South Baridhara DIT Project', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(135, 'Subastu', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(136, 'Cantonment Post Office', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(137, 'Uttor Badda', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(138, 'Aftabnagar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(139, 'ICDDRB', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(140, 'Middle Badda', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(141, 'Namapara', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(142, 'Satrasta', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(143, 'Niketon Bazar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(144, 'Nakhalpara', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(145, 'Rosulbagh(Mohakhali)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(146, 'Tekpara Adorsonagor', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(147, 'Uttar Badda', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(148, 'Aftab Nagar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(149, 'Tejgaon', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(150, 'Wireless', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(151, 'Solmaid', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(152, 'M.E.S', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(153, 'Kurmitola', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(154, '300 Feet', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(155, 'Shewra', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(156, 'Kalachandpur', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(157, 'Khilbari Tek (Badda)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(158, 'Jogonnathpur', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(159, 'Kuratuli', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(160, 'TV gate', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(161, 'Alatunnessa School Road', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(162, 'Bou Bazar - Mohakhali, Dhaka', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(163, 'Nikunja 2', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(164, 'Kuril', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(165, 'Chairman Goli', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(166, 'Confidence Tower, Jhilpar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(167, 'Fuji Trade Center', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(168, 'Gulshan', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(169, 'Khil Barirtek', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(170, 'Korail', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(171, 'Khilkhet', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(172, 'Mirpur Taltola', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(173, 'Gudaraghat-Mirpur', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(174, 'Kalshi', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(175, 'Namapara-Mirpur', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(176, 'Oxygen', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(177, 'Mirpur 60 feet', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(178, 'Darussalam', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(179, 'Gabtoli', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(180, 'Technical', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(181, 'Eastern Housing (Pallabi)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(182, 'Pallabi', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(183, 'Mirpur 13 /14 / 15', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(184, 'Benaroshi Polli', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(185, 'Mirpur DOHS', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(186, 'ECB Chattar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(187, 'Beribadh-Mirpur', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(188, 'Kochukhet', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(189, 'Buddhijibi Road', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(190, 'Purobi Cinema Hall', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(191, 'South Monipur', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(192, 'Agargaon', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(193, 'Mondir-Mirpur', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(194, 'Mirpur - 6', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(195, 'Shah Ali Bag', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(196, 'Monipur', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(197, 'Palasnagor', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(198, 'Purobi', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(199, 'Ibrahimpur', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(200, 'Rupnagor', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(201, 'Senpara', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(202, 'Mirpur 2', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(203, 'Birulia', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(204, 'BRTA', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(205, 'Mirpur Cantonment', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(206, 'Dewanpara', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(207, 'Zoo', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(208, 'Kafrul', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(209, 'Mastertek', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(210, 'Mirpur - 7', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(211, 'Vashantek', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(212, 'Balughat', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(213, 'Mirpur - 11', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(214, 'Manikdi', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(215, 'Barontek', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(216, 'Mirpur - 11.5', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(217, 'Matikata', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(218, 'Goltek', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(219, 'Mirpur - 12', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(220, 'Rupnagar Residential Area', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(221, 'Mirpur - 13', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(222, 'Kallanpur', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(223, 'Duaripara', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(224, 'Mirpur - 15', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(225, 'Amin Bazar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(226, 'Rainkhola', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(227, 'Mirpur - 14', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(228, 'Lalkuthi', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(229, 'Mirpur Diabari', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(230, 'Mirpur 1', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(231, 'Mazar Road', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(232, 'Tolarbag', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(233, 'Shagufta', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(234, 'Arambag (Mirpur)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(235, 'Ahmed Nagar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(236, 'Mirpur 10', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(237, 'Paikpara', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(238, 'Pirerbag', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(239, 'Baigertek', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(240, 'Taltola (Mirpur)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(241, 'Madina nagar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(242, 'MES Colony', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(243, 'Zia Colony', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(244, 'Kazipara', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(245, 'Ajiz Market', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(246, 'Shewrapara', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(247, 'Kallyanpur', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(248, 'Fakirapul', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(249, 'Shantibag', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(250, 'Kakrail', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(251, 'Baily Road', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(252, 'Minto Road', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(253, 'Hajipara (Rampura)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(254, 'Naya Paltan', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(255, 'Bijoynagar (Paltan)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(256, 'Eskaton Garden Road', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(257, 'Press Club', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(258, 'High Court', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(259, 'Eskaton', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(260, 'Moghbazar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(261, 'Purana Paltan', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(262, 'Mouchak', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(263, 'Arambag (Motijheel)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(264, 'Malibag', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(265, 'Rampura', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(266, 'Buddho Mondir', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(267, 'Sipahibag', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(268, 'Banasree Block - A', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(269, 'TT Para', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(270, 'Banasree Block - B', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(271, 'Bashabo', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(272, 'Banasree Block - C', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(273, 'Shahjahanpur (Dhaka)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(274, 'Khilgaon', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(275, 'Banasree Block - D', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(276, 'Banasree Block - E', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(277, 'Siddweswari', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(278, 'Middle Bashabo', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(279, 'Banasree Block - F', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(280, 'Goran', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(281, 'Banasree Block - G', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(282, 'Madartek', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(283, 'Nandipara', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(284, 'Banasree Block - H', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(285, 'Malibagh Taltola', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(286, 'Manik Nagar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(287, 'Shahjahanpur', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(288, 'Banasree Block - I', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(289, 'Gulbagh', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(290, 'Haterrjheel', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(291, 'Tikatuly', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(292, 'Motijheel', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(293, 'Banasree (Rampura)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(294, 'Gopibag', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(295, 'Banasree Block - J', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(296, 'Sabujbag', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(297, 'Meradiya Bazar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(298, 'Meradia', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(299, 'Banasree Block - K', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(300, 'Shiddheswari', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(301, 'Mirbagh', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(302, 'Banasree Block - L', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(303, 'Modhubagh', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(304, 'Rampura TV center', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(305, 'Banasree Block - M', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(306, 'Shegunbagicha', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(307, 'Mughdapara', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(308, 'Banasree Block - N', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(309, 'Rajarbag', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(310, 'Ulan road', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(311, 'Purbo Rampura', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(312, 'Chamelibag', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(313, 'Hatirjheel', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(314, 'Kamalapur', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(315, 'Banglamotor', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(316, 'Manda(Dhaka)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(317, 'Nazimuddin Road (Malibag)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(318, 'Ramna', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(319, 'Dainik Bangla Mor', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(320, 'Shantinagar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(321, 'Uttara Sector - 15', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(322, 'Dokshingaon', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(323, 'Uttara Sector - 16', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:44'),
(324, 'Uttara Sector 5', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(325, 'Uttara Sector - 17', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(326, 'Uttara Sector 14', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(327, 'Uttara Sector - 18', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(328, 'Uttara Sector 3', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(329, 'Uttara Sector 7', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(330, 'Uttara Sector 9', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(331, 'Uttara Sector 11', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(332, 'Nalbhog', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(333, 'Phulbaria', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(334, 'Kamarpara', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(335, 'Dhour', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(336, 'Ranavola', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(337, 'Bhatuliya', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(338, 'Ahalia-Uttara', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(339, 'Diabari', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(340, 'Habib Market-Uttara', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(341, 'Pakuria-Uttara', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(342, 'Bamnartek', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(343, 'Turag', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(344, 'Uttara Sector - 1', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(345, 'Bawnia', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(346, 'Uttara Sector - 10', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(347, 'Uttara Sector - 12', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(348, 'Uttara Sector - 13', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(349, 'Kotwali (Puran Dhaka)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(350, 'Nawabgonj Puran Dhaka', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(351, 'Railway Colony', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(352, 'Rajar Dewri', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(353, 'Sutrapur', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(354, 'Sat rowja', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(355, 'Kamrangichar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(356, 'Tantibazar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(357, 'Dhaka Medical', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(358, 'Bongo Bondhu Avenue', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(359, 'Armanitola', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(360, 'Islambag', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(361, 'Mitford', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(362, 'Lalbagh', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(363, 'Shakhari Bazar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(364, 'Chawkbazar (Dhaka)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(365, 'Katherpol', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(366, 'Bongshal', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(367, 'Naya Bazar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(368, 'Bangla Bazar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(369, 'Tatibazar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(370, 'Patuatuly', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(371, 'Luxmi Bazar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(372, 'Puran Dhaka', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(373, 'Siddique Bazar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(374, 'Nazira Bazar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(375, 'Nawabpur', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(376, 'Kaptan Bazar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(377, 'Dolaikhal', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(378, 'Mahut Tuli', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(379, 'Gulistan', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(380, 'Sadarghat (Dhaka)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(381, 'Alubazar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(382, 'Bongo Bazar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(383, 'Kaltabazar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(384, 'Badam Toli', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(385, 'Chankarpul', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(386, 'Babubazar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(387, 'Islampur(Dhaka)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(388, 'Palashi', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(389, 'Gandaria', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(390, 'Nazimuddin Road (Puran Dhaka)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(391, 'Imamgonj', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(392, 'Dholaikhal', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(393, 'Nayabazar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(394, 'Doyagonj', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(395, 'Farashgong', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(396, 'Wari', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(397, 'Narinda', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(398, 'Bakshibazar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(399, 'Firozshah', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(400, 'GEC', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(401, 'Halishahar', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(402, 'Halishshar', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(403, 'Sadarghat', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(404, 'Cadet College', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(405, 'Chandgaon', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(406, 'Chattogram Airport', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(407, 'Chattogram Bandar', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(408, 'Chattogram Cantonment', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(409, 'Chattogram Chawkbazar', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(410, 'Mohard', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(411, 'Chattogram Customs Acca', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(412, 'Sitakundu', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(413, 'Chattogram GPO', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(414, 'Nasirabad', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(415, 'Jalalabad', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(416, 'Chattogram New Market', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(417, 'North Halishahar', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(418, 'Chattogram Oxygen', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(419, 'North Kattali', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(420, 'Kotwali Chattogram', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(421, 'Bondor (Chittagong)', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(422, 'Chattogram Politechnic Institute', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(423, 'North Katuli', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(424, 'Noyabazar', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(425, 'Agrabad', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(426, 'Sitakunda Barabkunda', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(427, 'Barahatia', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(428, 'Chattogram Sailors Colony', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(429, 'Pahartoli', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(430, 'AK Khan', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(431, 'Sitakunda Baroidhala', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(432, 'Colonel Hat', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(433, 'Combined Military Hospital (CMH)', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(434, 'Panchlaish', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(435, 'Al- Amin Baria Madra', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(436, 'Sitakunda Bawashbaria', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(437, 'Court Buliding', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(438, 'Patenga', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(439, 'Al- Amin Baria Madrasa', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(440, 'Sitakunda Bhatiari', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(441, 'Amin Jute Mills', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(442, 'Sitakunda Fouzdarhat', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(443, 'Chittagong Sadar', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(444, 'Dakkshin Pahartoli', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(445, 'Anandabazar', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(446, 'Sitakunda Jafrabad', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(447, 'Double Mooring', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(448, 'Rampur', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(449, 'Sitakunda Kumira', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(450, 'South Halishahar', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(451, 'Rampura TSO', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(452, 'Bayezid Bostami', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(453, 'Wazedia', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(454, 'Kattuli', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(455, 'Khulshi', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(456, 'Export Processing', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(457, 'Middle Patenga', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(458, 'No area', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(459, 'CWH', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(460, 'Shyampur', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(461, 'Dholaipar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(462, 'Shonir Akhra', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(463, 'Mirhazirbagh', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(464, 'Shwamibag', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(465, 'Sayedabad', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(466, 'Golapbag (Dhaka)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(467, 'Jurain', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(468, 'Jatrabari', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(469, 'RayerBag', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(470, 'Faridabad (Jatrabari)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(471, 'Dholpur', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(472, 'Donia', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(473, 'Kodomtoli (Jatrabari)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(474, 'Postogola', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(475, 'Fenchuganj', '3', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(476, 'Gowainghat', '3', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(477, 'Golapganj (Sylhet)', '3', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(478, 'Jaintapur', '3', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(479, 'Kanaighat', '3', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(480, 'Amberkhana (Sylhet)', '3', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(481, 'South Surma', '3', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(482, 'Akhalia', '3', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(483, 'Tilaghor', '3', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(484, 'Shibganj(sylhet)', '3', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(485, 'Zindabazar', '3', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(486, 'Uposhohor(Sylhet)', '3', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(487, 'Pathantula', '3', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(488, 'Kodomtoli', '3', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(489, 'Subidbazar', '3', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(490, 'Sheikhghat.', '3', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(491, 'Majortila', '3', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(492, 'Subhanighat', '3', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(493, 'Balaganj', '3', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(494, 'Biswanath', '3', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(495, 'Companyganj (Sylhet)', '3', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(496, 'Khartail', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(497, 'Jinumarket', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(498, 'Majukhan', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(499, 'T & T(Gazipur)', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(500, 'Ershadnagar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(501, 'Milgate', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(502, 'Shilmun', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(503, 'Sataish', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(504, 'National University', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(505, 'Mudafa', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(506, 'Surtaranga', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(507, 'Khapara', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(508, 'Targach', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(509, 'Malakerbari', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(510, 'Khairtail', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(511, 'Rail Station', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(512, 'Bypass Road (Gazipur)', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(513, 'Kodda', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(514, 'Bonomala', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(515, 'Boro Dewra', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(516, 'Duet Road', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(517, 'Morkun', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(518, 'Shibbari', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(519, 'Shimultoli', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(520, 'Chowrasta (Gazipur)', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(521, 'Kunia', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(522, 'Jorpukur', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(523, 'Gacha', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(524, 'Boro Bari', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(525, 'Salna', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(526, 'Kaliganj(Gazipur)', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(527, 'Board Bazar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(528, 'Kamarjuri', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(529, 'Bhadam', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(530, 'Dattapara', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(531, 'Boro Dewra Dakkhin Para', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(532, 'Auchpara', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(533, 'Cherag Ali', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(534, 'Gopalpur', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(535, 'Tongi Bazar (Dhaka)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(536, 'College Gate (Tongi)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(537, 'Boardbazar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(538, 'Gazipura', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(539, 'Hossain Market (Tongi)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(540, 'Signboard (Gazipur)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(541, 'Joydebpur', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(542, 'Dhirasrom', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(543, 'Dattapara Road', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(544, 'Pubail', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(545, 'Badekomelosshor', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(546, 'Borobari', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(547, 'Mirerbazar', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(548, 'Choidana', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(549, 'Ulokhola', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(550, 'Deger Chala', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(551, 'Modhumita', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(552, 'Gazcha', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(553, 'Miraspara', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(554, 'Tongi', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(555, 'Hariken', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(556, 'Pagar', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:30'),
(557, 'Ashulia', '1', 2, 1, '2021-10-31 13:02:40', '2024-10-24 07:12:12'),
(558, 'Amin Bazar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(559, 'Dhamrai', '1', 2, 1, '2021-10-31 13:02:40', '2024-10-24 07:12:35'),
(560, 'Baipayl', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(561, 'Savar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 07:02:50'),
(562, 'Savar Cantonment', '1', 2, 1, '2021-10-31 13:02:40', '2024-10-24 07:08:04'),
(563, 'Aga Nagar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(564, 'Kathuria', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(565, 'Goljarbag', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(566, 'Nazirabag', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(567, 'Hasnabad', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(568, 'Kaliganj - Keraniganj', '1', 2, 1, '2021-10-31 13:02:40', '2024-10-24 07:18:21'),
(569, 'Nazarganj', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(570, 'Zinzira', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(571, 'Keranigonj', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(572, 'Kalatia', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(573, 'Kodomtoli(Keraniganj)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(574, 'Bandar (Narayanganj)', '5', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(575, 'Chashara (Narayanganj)', '5', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(576, 'Signboard (Narayanganj)', '5', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(577, 'Jalkuri (Narayanganj)', '5', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(578, 'Sonargaon', '5', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(579, 'Chittagong Road (Narayanganj)', '5', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(580, 'Shanarpar (Narayanganj)', '5', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(581, 'Bhuigarh-Narayangonj', '5', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(582, 'Siddhirganj', '5', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(583, 'Fatullah', '5', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(584, 'Shibu Market (Narayanganj)', '5', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(585, 'Barura', '6', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(586, 'Brahmanpara', '6', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(587, 'Burichang', '6', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(588, 'Chandina', '6', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(589, 'Comilla Sadar', '6', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(590, 'Debiduar', '6', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(591, 'Comilla Sadar South', '6', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(592, 'Batiaghata', '7', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(593, 'Dacope', '7', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(594, 'Dighalia', '7', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(595, 'Dumuria', '7', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(596, 'Phultala', '7', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(597, 'Rupsa', '7', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(598, 'Khalispur', '7', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(599, 'Sonadanga', '7', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(600, 'Khan jahan ali', '7', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(601, 'Doulatpur', '7', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(602, 'Khulna Sadar', '7', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(603, 'Terokhada', '7', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(604, 'Chorpara (Mymensingh)', '8', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(605, 'Kachijhuli', '8', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(606, 'Dhubaura', '8', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(607, 'College Road (Mymensigh)', '8', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(608, 'Fulbaria (Mymensingh)', '8', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(609, 'Akua', '8', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(610, 'Fulpur', '8', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(611, 'Agriculture University (Mymensingh)', '8', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(612, 'Zilla School Mor (Mymensingh)', '8', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(613, 'Koltapara (Gouripur Mymensingh)', '8', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(614, 'Rohomotpur Bypass', '8', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(615, 'Haluaghat', '8', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(616, 'Mashkanda', '8', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(617, 'Iswarganj', '8', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(618, 'Kacharighat (Mymensingh)', '8', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(619, 'Muktagacha', '8', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(620, 'Nandail', '8', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(621, 'Barisal Sadar', '9', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(622, 'Mehendiganj', '9', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(623, 'Babuganj', '9', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(624, 'Bakerganj', '9', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(625, 'Banaripara', '9', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(626, 'Dewanganj', '10', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(627, 'Islampur(Jamalpur)', '10', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(628, 'Jamalpur Sadar', '10', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(629, 'Madarganj', '10', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(630, 'Melandah', '10', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(631, 'Sharishabari', '10', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(632, 'Subidkhali', '11', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(633, 'Bagabandar', '11', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(634, 'Kalaia', '11', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(635, 'Birpasha', '11', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(636, 'Bauphal', '11', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(637, 'Dasmina', '11', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(638, 'Dumki', '11', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(639, 'Galachipa', '11', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(640, 'Mirjaganj', '11', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(641, 'Patuakhali Sadar', '11', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29');
INSERT INTO `thanas` (`id`, `name`, `district_id`, `zone_id`, `status`, `created_at`, `updated_at`) VALUES
(642, 'Kalkini', '12', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(643, 'Madaripur Sadar', '12', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(644, 'Rajoir', '12', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(645, 'Shibchar', '12', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(646, 'Kacari (Munshiganj)', '13', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(647, 'Super Market Mor (Munshiganj)', '13', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(648, 'Munshir Hat (Munshiganj)', '13', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(649, 'Mirkadim (Munshiganj)', '13', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(650, 'Rikabibazar (Munshiganj)', '13', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(651, 'Sipahipara (Munshiganj)', '13', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(652, 'Muktarpur (Munshiganj)', '13', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(653, 'Gazaria', '13', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(654, 'Katakhali (Munshiganj)', '13', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(655, 'Serajdikhan', '13', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(656, 'Tangibari', '13', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(657, 'Bakshiganj', '10', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(658, 'Jhenaigati', '14', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(659, 'Nakla', '14', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(660, 'Nalitabari', '14', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(661, 'Sherpur Sadar', '14', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(662, 'Sribordi', '14', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(663, 'Zia Nagar (Indurkani)', '15', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(664, 'Bhandaria', '15', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(665, 'Kaukhali (Perojpur)', '15', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(666, 'Mothbaria', '15', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(667, 'Nesarabad (Shawrupkathi)', '15', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(668, 'Nazirpur', '15', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(669, 'Pirojpur Sadar', '15', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(670, 'Chandpur Sadar', '16', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(671, 'Faridganj', '16', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(672, 'Haimchar', '16', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(673, 'Matlab (South)', '16', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(674, 'Matlab (North)(Chengarchar)', '16', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(675, 'Alfadanga', '17', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(676, 'Bhanga', '17', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(677, 'Boalmari', '17', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(678, 'Char Bhadrasan', '17', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(679, 'Faridpur Sadar', '17', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(680, 'Madhukhali', '17', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(681, 'Nagarkanda', '17', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(682, 'Sadarpur', '17', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(683, 'Saltha', '17', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(684, 'Kalihati', '18', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(685, 'Mirzapur', '18', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(686, 'Nagarpur', '18', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(687, 'Shakhipur', '18', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(688, 'Tangail Sadar', '18', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(689, 'Bashail', '18', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(690, 'Bhuapur', '18', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(691, 'Delduar', '18', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(692, 'Jhalokathi Sadar', '19', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(693, 'Kathalia', '19', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(694, 'Nalchiti', '19', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(695, 'Rajapur (Jhalokathi)', '19', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(696, 'Konokpur (Moulvibazar)', '20', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(697, 'Adompur Bazar - Kamalganj', '20', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(698, 'Kazir Bazar (Moulvibazar)', '20', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(699, 'Kamalganj', '20', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(700, 'Moulvibazar Sadar', '20', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(701, 'Rajnagar', '20', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(702, 'Sreemongal', '20', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(703, 'Sarkar Bazar (Moulvibazar)', '20', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(704, 'Notun Bridge (Moulvibazar)', '20', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(705, 'Shamshernagar (Moulvibazar)', '20', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(706, 'Sherpur (Moulvibazar)', '20', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(707, 'Tarapasha Bazar - Rajnagar', '20', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(708, 'Munshibazar - Kamalganj', '20', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(709, 'Munshibazar - Rajnagar', '20', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(710, 'Tengra Bazar - Rajnagar', '20', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(711, 'Mukam Bazar - Radar Unit (Moulvibazar)', '20', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(712, 'Patanushar - Shamshernagar', '20', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(713, 'Chowdhury Bazar (Habiganj)', '21', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(714, 'Sultanmahmudpur', '21', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(715, 'Habiganj Sadar', '21', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(716, 'Gatiabazar', '21', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(717, 'Lakhai', '21', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(718, 'Mahmudabad', '21', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(719, 'Duliakal', '21', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(720, 'Nabiganj', '21', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(721, 'Mohonpur (Habiganj)', '21', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(722, 'Ajmeriganj', '21', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(723, 'Baniachang', '21', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(724, 'Rajnogor', '21', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(725, 'Badarganj', '22', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(726, 'Gangachara', '22', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(727, 'Kaunia (Rangpur)', '22', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(728, 'Mithapukur', '22', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(729, 'Pirgacha', '22', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(730, 'Pirganj(Rangpur)', '22', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(731, 'Rangpur Sadar', '22', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(732, 'Taraganj', '22', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(733, 'Keshabpur', '23', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(734, 'Manirampur', '23', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(735, 'Sharsha', '23', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(736, 'Bagherpara', '23', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(737, 'Chowgacha', '23', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(738, 'Benapole', '23', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(739, 'Jessore Sadar', '23', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(740, 'Jhikargacha', '23', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(741, 'Atwari (Panchagarh)', '24', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(742, 'Boda', '24', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(743, 'Debiganj', '24', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(744, 'Panchagarh Sadar', '24', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(745, 'Tetulia', '24', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(746, 'Kishoreganj ( Nilphamari)', '25', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(747, 'Nilphamari Sadar', '25', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(748, 'Dimla', '25', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(749, 'Domar', '25', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(750, 'Jaldhaka', '25', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(751, 'Ramu', '26', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(752, 'Ukhia', '26', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(753, 'Kalur Dokan', '26', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(754, 'Alir Jahal Road', '26', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(755, 'Nakhoyngchari', '27', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(756, 'Barmis Market', '26', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(757, 'Bazar Ghata', '26', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(758, 'Laldighir Par (Cox\'s Bazar)', '26', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(759, 'Holiday Mor(Cox\'s Bazar)', '26', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(760, 'Laboni Point', '26', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(761, 'Sughandha Point', '26', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(762, 'Marin Drive Road', '26', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(763, 'Sonar Tara', '26', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(764, 'Jilonjha', '26', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(765, 'Tarabaniyer chora', '26', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(766, 'Romaliyer chora', '26', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(767, 'Khurushkul', '26', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(768, 'P M Khali', '26', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(769, 'Somity Para', '26', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(770, 'Kolatoli (Cox\'s Bazar)', '26', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(771, 'Bhola Sadar', '28', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(772, 'Borhanuddin', '28', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(773, 'Daulatkhan', '28', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(774, 'Tajumuddin', '28', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(775, 'Bamna', '29', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(776, 'Barguna Sadar', '29', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(777, 'Betagi', '29', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(778, 'Patharghata (Barguna)', '29', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(779, 'Belkuchi', '30', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(780, 'Chowhali', '30', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(781, 'Kamarkhanda', '30', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(782, 'Kazipur', '30', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(783, 'Raiganj', '30', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(784, 'Shahajadpur (Sirajganj)', '30', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(785, 'Sirajganj Sadar', '30', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(786, 'Tarash', '30', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(787, 'Ullapara', '30', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(788, 'Atgharia', '31', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(789, 'Bera', '31', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(790, 'Bhangura', '31', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(791, 'Chatmohar', '31', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(792, 'Faridpur ( Pabna )', '31', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(793, 'Pabna Sadar', '31', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(794, 'Santhia', '31', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(795, 'Sujanagar', '31', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(796, 'Banwarinagar (Pabna)', '31', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(797, 'Debottar (Pabna)', '31', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(798, 'Kashinathpur (Pabna)', '31', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(799, 'Nakalia (Pabna)', '31', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(800, 'Sagarkandi (Pabna)', '31', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(801, 'Natore Sadar', '32', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(802, 'Singra', '32', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(803, 'Baghatipara', '32', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(804, 'Baraigram', '32', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(805, 'Gurudaspur', '32', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(806, 'Lalpur', '32', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(807, 'Atrai', '33', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(808, 'Badalgachi', '33', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(809, 'Naogaon Sadar', '33', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(810, 'Raninagar', '33', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(811, 'Akkelpur', '34', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(812, 'Joypurhat Sadar', '34', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(813, 'Kalai', '34', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(814, 'Khetlal', '34', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(815, 'Panchbibi', '34', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(816, 'Assasuni', '35', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(817, 'Debhata', '35', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(818, 'Kaliganj(Satkhira)', '35', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(819, 'Kolaroa', '35', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(820, 'Satkhira Sadar', '35', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(821, 'Shyamnagar', '35', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(822, 'Tala', '35', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(823, 'Gangni', '36', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(824, 'Meherpur Sadar', '36', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(825, 'Mujibnagar', '36', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(826, 'Gosairhat', '37', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(827, 'Zajira', '37', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(828, 'Naria', '37', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(829, 'Shariatpur Sadar', '37', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(830, 'Bhedarganj', '37', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(831, 'Damudiya', '37', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(832, 'Baliakandi', '38', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(833, 'Goalunda', '38', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(834, 'Pangsha', '38', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(835, 'Rajbari Sadar', '38', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(836, 'Kalukhali', '38', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(837, 'Daulatpur(Manikganj)', '39', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(838, 'Ghior', '39', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(839, 'Harirampur (Manikganj)', '39', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(840, 'Manikganj Sadar', '39', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(841, 'Saturia', '39', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(842, 'Shibalaya', '39', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(843, 'Singair', '39', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(844, 'Gopalganj Sadar', '40', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(845, 'Kasiani', '40', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(846, 'Kotalipara', '40', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(847, 'Maksudpur', '40', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(848, 'Tungipara', '40', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(849, 'Baliadangi', '41', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(850, 'Shibganj (Thakurgaon Sadar)', '41', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(851, 'Haripur', '41', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(852, 'Pirganj(Thakurgaon)', '41', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(853, 'Ranishankail', '41', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(854, 'Thakurgaon Sadar', '41', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(855, 'Atpara', '42', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(856, 'Barhatta', '42', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(857, 'Durgapur(Netrokona)', '42', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(858, 'Kalmakanda', '42', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(859, 'Kendua', '42', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(860, 'Khaliajuri', '42', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(861, 'Madan', '42', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(862, 'Mohanganj', '42', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(863, 'Netrokona Sadar', '42', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(864, 'Purbadhala (Netrokona)', '42', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(865, 'Dharmapasha', '43', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(866, 'Monohardi', '44', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(867, 'Velanogor (Narsingdi)', '44', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(868, 'Palash', '44', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(869, 'Shibpur', '44', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(870, 'Madhabdi (Narsingdi)', '44', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(871, 'Babur Haat (Narsingdi)', '44', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(872, 'Pachdona More (Narsingdi)', '44', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(873, 'Shaheprotab More (Narsingdi)', '44', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(874, 'West Brammondi (Narsingdi)', '44', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(875, 'East Brammondi (Narsingdi)', '44', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(876, 'Songita Bazar (Narsingdi)', '44', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(877, 'Shatirpara', '44', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(878, 'Hasnabad Bazar (Narsingdi)', '44', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(879, 'Chagalnayya', '45', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(880, 'Daganbhuiyan', '45', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(881, 'Feni Sadar', '45', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(882, 'Parshuram', '45', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(883, 'Fulgazi', '45', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(884, 'Sonagazi', '45', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(885, 'Khanshama', '46', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(886, 'Parbatipur', '46', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(887, 'College mor (Dinajpur)', '46', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(888, 'Boromath (Dinajpur)', '46', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(889, 'Pulhat', '46', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(890, 'Newtown (Dinajpur)', '46', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(891, 'Lilir mor', '46', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(892, 'Modern mor (Dinajpur)', '46', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(893, 'Birganj', '46', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(894, 'Birol', '46', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(895, 'Bochaganj', '46', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(896, 'Chirirbandar', '46', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(897, 'Baluadanga (Dinajpur)', '46', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(898, 'Kaharole', '46', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(899, 'Fulchari', '47', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(900, 'Gaibandha Sadar', '47', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(901, 'Gobindaganj ( Gaibandha )', '47', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:29'),
(902, 'Palashbari', '47', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(903, 'Sadullapur', '47', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(904, 'Shaghatta', '47', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(905, 'Sundarganj', '47', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(906, 'Alamdanga', '48', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(907, 'Chuadanga Sadar', '48', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(908, 'Damurhuda', '48', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(909, 'Jibannagar', '48', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(910, 'Bagha', '49', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(911, 'Bagmara (Rajshahi)', '49', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(912, 'Charghat', '49', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(913, 'Durgapur(Rajshahi)', '49', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(914, 'Godagari', '49', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(915, 'Mohanpur (Rajshahi)', '49', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(916, 'Paba', '49', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(917, 'Putia', '49', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(918, 'Tanore', '49', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(919, 'Sadar', '49', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(920, 'Rajshahi Shadar', '49', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(921, 'Magura Sadar', '50', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(922, 'Mohammadpur (Magura)', '50', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(923, 'Shalikha', '50', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(924, 'Sreepur (Magura)', '50', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(925, 'Kalia', '51', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(926, 'Lohagara(Narail)', '51', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(927, 'Narail Sadar', '51', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(928, 'Barkal', '52', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(929, 'Belaichari', '52', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(930, 'Jurachari', '52', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(931, 'Kaptai', '52', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(932, 'Kawkhali (Rangamati)', '52', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(933, 'Langadu', '52', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(934, 'Naniarchar', '52', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(935, 'Rajasthali', '52', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(936, 'Rangamati Sadar', '52', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(937, 'Kaptai Kaptai Project', '52', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(938, 'Kaptai Nuton Bazar', '52', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(939, 'Kaptai Sadar', '52', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(940, 'Mirpur (Kushtia)', '53', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(941, 'Bheramara', '53', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(942, 'Daulatpur (Kushtia)', '53', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(943, 'Khoksha', '53', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(944, 'Kumarkhali', '53', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(945, 'Kushtia Sadar', '53', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(946, 'Bholahat', '54', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(947, 'Gomastapur', '54', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(948, 'Nachole', '54', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(949, 'Nawabganj Sadar', '54', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(950, 'Shipganj ( Chapai )', '54', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(951, 'Chapai Nawabganj Sadar', '54', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(952, 'Kotchandpur', '55', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(953, 'Harinakunda', '55', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(954, 'Jhenaidah Sadar', '55', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(955, 'Kaliganj(Jhenaidah)', '55', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(956, 'Moheshpur', '55', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(957, 'Shailkupa', '55', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(958, 'Companiganj (Noakhali)', '56', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(959, 'Hatiya', '56', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(960, 'Maijdee (Noakhali)', '56', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(961, 'Senbag', '56', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(962, 'Sonaimuri', '56', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(963, 'Subarnachar', '56', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(964, 'Kabir Hat', '56', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(965, 'Begumganj', '56', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(966, 'Chatkhil', '56', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(967, 'Alexandar', '57', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(968, 'Laksmipur Sadar', '57', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(969, 'Ramgati', '57', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(970, 'Ramganj', '57', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(971, 'Raipur (Lakshmipur)', '57', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(972, 'Kamalnagar', '57', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(973, 'Bhurungamari', '58', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(974, 'Chilmary', '58', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(975, 'Fulbari (Kurigram)', '58', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(976, 'Kurigram Sadar', '58', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(977, 'Nageswari', '58', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(978, 'Rajarhat', '58', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(979, 'Rajibpur', '58', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(980, 'Rowmari', '58', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(981, 'Ulipur', '58', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(982, 'Tarail', '59', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(983, 'Itna', '59', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(984, 'Karimganj', '59', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(985, 'Katiadi', '59', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(986, 'Kishoreganj Sadar', '59', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(987, 'Austogram', '59', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(988, 'Bajitpur', '59', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(989, 'Mithamain', '59', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(990, 'Hosainpur', '59', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(991, 'Nikli', '59', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(992, 'Pakundia', '59', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(993, 'Sonatola', '60', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(994, 'Shajahanpur (Bogura)', '60', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(995, 'Adamdighi (Bogra)', '60', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(996, 'Bogra Sadar', '60', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(997, 'Dhunot', '60', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(998, 'Dhubchanchia', '60', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(999, 'Gabtali (Bogra)', '60', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1000, 'Kahaloo', '60', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1001, 'Nandigram', '60', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1002, 'Sariakandi', '60', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1003, 'Sherpur (Bogra)', '60', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1004, 'Shibganj ( Bogra )', '60', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1005, 'Noapara (Jessore)', '23', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1006, 'Baghaichari', '52', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1007, 'Dighinala', '61', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1008, 'Khagrachari Sadar', '61', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1009, 'Laksmichari', '61', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1010, 'Mohalchari', '61', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1011, 'Manikchari', '61', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1012, 'Matiranga', '61', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1013, 'Panchari', '61', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1014, 'Ramgor', '61', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1015, 'Lauhajang', '13', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1016, 'Sreenagar', '13', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1017, 'Dohar', '1', 2, 1, '2021-10-31 13:02:40', '2024-10-24 07:12:58'),
(1018, 'Nawabgonj (Dhaka)', '1', 2, 1, '2021-10-31 13:02:40', '2024-10-24 07:18:48'),
(1019, 'Chandura (Brahmanbaria)', '62', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1020, 'Singarbil (Brahmanbaria)', '62', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1021, 'Kawtoly (Brahmanbaria)', '62', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1022, 'Awliya Bazar (Brahmanbaria)', '62', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1023, 'T.A Road (Brahmanbaria)', '62', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1024, 'Poirtola (Brahmanbaria)', '62', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1025, 'Sarak bazar (Brahmanbaria)', '62', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1026, 'Ulchapara (Brahmanbaria)', '62', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1027, 'Moddopara (Brahmanbaria)', '62', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1028, 'Bhadugor (Brahmanbaria)', '62', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1029, 'Birashar (Brahmanbaria)', '62', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1030, 'Kumarshil more (Brahmanbaria)', '62', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1031, 'Medda (Brahmanbaria)', '62', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1032, 'Gatura- Pirbari (Brahmanbaria)', '62', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1033, 'Akhaura', '62', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1034, 'Paikpara (Brahmanbaria Sadar)', '62', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1035, 'Bijoynagor (Brahmanbaria)', '62', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1036, 'Shahbajpur (Brahmanbaria)', '62', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1037, 'Sohilpur (Brahmanbaria)', '62', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1038, 'Saidpur', '25', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1039, 'Bagerhat Sadar', '63', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1040, 'Chitalmari', '63', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1041, 'Fakirhat (Bagerhat)', '63', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1042, 'Kachua(Bagerhat)', '63', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1043, 'Mollarhat', '63', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1044, 'Mongla', '63', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1045, 'Morelganj', '63', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1046, 'Rampal', '63', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1047, 'Sarankhola', '63', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1048, 'Aditmari', '64', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1049, 'Hatibandha (Lalmonirhat)', '64', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1050, 'Kaliganj(Lalmonirhat)', '64', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1051, 'Lalmonirhat Sadar', '64', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1052, 'Patgram', '64', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1053, 'Old bustand (Sunamganj)', '43', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1054, 'Kazirpoint (Sunamganj)', '43', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1055, 'Hason Nagar', '43', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1056, 'Moddho bazar (Sunamganj)', '43', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1057, 'wazkhali', '43', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1058, 'Biswambharpur', '43', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1059, 'Derai', '43', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1060, 'Jagannathpur', '43', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1061, 'Jamalganj', '43', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1062, 'Sulla', '43', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1063, 'Traffic Point (Sunamganj Sadar)', '43', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1064, 'Taherpur', '43', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1065, 'South Sunamganj', '43', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1066, 'Bandarban Sadar', '27', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1067, 'Rawanchari', '27', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1068, 'Ruma', '27', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1069, 'soho area', '27', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1070, 'Thanchi', '27', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1071, 'SDA', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1072, 'Fatikchhari Harualchhari', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1073, 'Raozan Fatepur', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1074, 'Fatikchhari Najirhat', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1075, 'Fatikchari', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1076, 'Raozan Guzra Noapara', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1077, 'Fatikchhari Nanupur', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1078, 'Hathazari', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1079, 'Raozan jagannath Hat', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1080, 'Raozan Kundeshwari', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1081, 'Fatikchhari Narayanhat', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1082, 'Raozan Mohamuni', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1083, 'Raozan Pouroshobha', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1084, 'Rangunia', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1085, 'Rauzan Gahira', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1086, 'Raojan', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1087, 'Chattogram University', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1088, 'Hathazari Fatahabad', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1089, 'Hathazari Gorduara', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1090, 'Hathazari Katirhat', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1091, 'Hathazari Madrasa', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1092, 'Hathazari Mirzapur', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1093, 'Sayad Bari', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1094, 'Hathazari Nuralibari', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1095, 'Muradnagar - Hathazari', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1096, 'Hathazari Yunus Nagar', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1097, 'Dakkhin Ghatchak', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1098, 'Kadeer Nagar', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1099, 'Kaptai Chandraghona', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1100, 'Uttar Gatchak', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1101, 'Rangunia Dhamair', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1102, 'Rangunia Sadar', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1103, 'Ranir Hat', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1104, 'Raozan B.I.T Post Office', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1105, 'Fakirkill', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1106, 'Raozan Beenajuri', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1107, 'Fatikchhari Bhandar Sharif', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1108, 'Raozan Dewanpur', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1109, 'Mirsharai Abutorab', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1110, 'Mirsharai Azampur', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1111, 'Mirsharai Bharawazhat', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1112, 'Mirsharai Darrogahat', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1113, 'Mirsarai', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1114, 'Mirsharai Joarganj', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1115, 'Mirsharai Korerhat', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1116, 'Mirsharai Mohazanhat', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1117, 'Boalkhali Sakpura', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1118, 'Patiya', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1119, 'Boalkhali Saroatoli', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1120, 'Karnaphuli', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1121, 'Jaldia Marine Academy', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1122, 'Jaldia Merine Accade', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1123, 'Patiya Budhpara', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1124, 'Patiya Sadar', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1125, 'Anawara Battali', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1126, 'Anawara Paroikora', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1127, 'Boalkhali Charandwip', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1128, 'Boalkhali Iqbal Park', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1129, 'Anwara', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1130, 'Boalkhali Kadurkhal', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1131, 'Boalkhali Kanungopara', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1132, 'Boalkhali Sadar', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1133, 'Boalkhali', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1134, 'Kutubdia', '26', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1135, 'Ali Kadam', '27', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1136, 'Moheshkhali', '26', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1137, 'Pekua', '26', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1138, 'Lama', '27', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1139, 'Chakoria', '26', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1140, 'Zakiganj', '3', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1141, 'Barlekha', '20', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1142, 'Juri', '20', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1143, 'Beanibazar', '3', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1144, 'Bancharampur (Nabinagar)', '62', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1145, 'Kashba (Nabinagar)', '62', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1146, 'Nabinagar (Nabinagar Hub)', '62', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1147, 'Gournadi (Barisal)', '9', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1148, 'Hijla', '9', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1149, 'Muladi', '9', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1150, 'Wazirpur', '9', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1151, 'Agailjhara', '9', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1152, 'Nawabganj (Dinajpur)', '46', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1153, 'Birampur', '46', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1154, 'Phulbari (Dinajpur)', '46', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1155, 'Ghoraghat', '46', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1156, 'Hakimpur', '46', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1157, 'Belabo', '44', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1158, 'Raipura (Bhairab)', '44', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1159, 'Ashuganj (Bhairab)', '62', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1160, 'Nasirnagar (Bhairab Hub)', '62', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1161, 'Sarail (Bhairab Hub)', '62', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1162, 'Kuliarchar', '59', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1163, 'Bhairab', '59', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1164, 'Gouripur (Comilla)', '6', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1165, 'Daudkandi', '6', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1166, 'Homna', '6', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1167, 'Meghna', '6', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1168, 'Titas', '6', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1169, 'Chattak', '43', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1170, 'Dowarabazar', '43', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1171, 'Rupganj', '5', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1172, 'Bawaliapara (Narayangaj)', '5', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1173, 'Araihazar', '5', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1174, 'Vobanipur Gazipur', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1175, 'Rajabari Sreepur', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1176, 'Barmi Sreepur (Gazipur)', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1177, 'Fulbaria Gazipur', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1178, 'Kapasia', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1179, 'Porabari Bazar', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1180, 'Sreepur(Gazipur)', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1181, 'Dhaladia Gazipur', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1182, 'Hotapara', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1183, 'Bager bazar', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1184, 'Member Bari Gazipur', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1185, 'Gorgoria masterbari', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1186, 'Mc Bazar', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1187, 'Nayanpur Sreepur', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1188, 'Mawna', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1189, 'Joyna Bazar', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1190, 'Rajendrapur', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1191, 'Bhawal Gazipur', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1192, 'Chowddagram', '6', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1193, 'Laksam', '6', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1194, 'Nangolkot', '6', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1195, 'Monoharganj', '6', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:28'),
(1196, 'Koira', '7', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1197, 'Paikgacha', '7', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1198, 'Amadee Bazar', '7', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1199, 'kopilmuni Bazar', '7', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1200, 'Chunarughat (Shayestaganj Hub)', '21', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1201, 'Shayestaganj (Shayestaganj Hub)', '21', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1202, 'Madhabpur (Shayestaganj Hub)', '21', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1203, 'Ranigaon (Shayestaganj Hub)', '21', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1204, 'Putijuri (Shayestaganj Hub)', '21', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1205, 'Bahubal (Shayestaganj Hub)', '21', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1206, 'Ghatail', '18', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1207, 'Gopalpur (Tangail)', '18', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1208, 'Modhupur', '18', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1209, 'Dhanbari', '18', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1210, 'Valuka', '8', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1211, 'Goffargaon', '8', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1212, 'Trishal', '8', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1213, 'Teknaf', '26', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1214, 'Sandwip (Guptachara)', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1215, 'Sandwip Shiberhat', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1216, 'Sandwip Urirchar', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1217, 'Sandwip (Enam Nagar)', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1218, 'Sandwip (Complex)', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1219, 'Sandwip (Kalapaniya)', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1220, 'Sandwip (Gasua)', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1221, 'Dhamoirhat', '33', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1222, 'Manda(Naogaon)', '33', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1223, 'Mahadebpur', '33', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1224, 'Niamatpur', '33', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1225, 'Patnitala', '33', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1226, 'Porsha', '33', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1227, 'Shapahar', '33', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1228, 'Hajiganj (Chandpur)', '16', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1229, 'Kachua(Chandpur)', '16', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1230, 'Shahrasti', '16', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1231, 'Iswardi', '31', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1232, 'Pakshi (Pabna)', '31', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1233, 'Konapara', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1234, 'Demra', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1235, 'Basher pull (Demra)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1236, 'Bamuail (Demra)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1237, 'Sharuliya (Demra)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1238, 'Rani mohol (Demra)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1239, 'Staffquater (Demra)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1240, 'Demra bazar (Demra)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1241, 'Hajinogar (Demra)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1242, 'Boxnagar (Demra)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1243, 'Badsha mia road (Demra)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1244, 'Muslimnagar (Demra)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1245, 'Matuail', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1246, 'Mollartek', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1247, 'Mollapara', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1248, 'Sonali Bank Staff Quarter', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1249, 'Gawair', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1250, 'Azampur (East)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1251, 'Kosaibari', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1252, 'Kawla', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1253, 'Prembagan', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1254, 'Naddapara', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1255, 'Kachkura', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1256, 'Helal Market', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1257, 'Chamur Khan', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1258, 'Society', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1259, 'Ismailkholla', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1260, 'Uttarkhan Mazar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1261, 'Masterpara', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1262, 'Azampur (West) (Uttara)', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43');
INSERT INTO `thanas` (`id`, `name`, `district_id`, `zone_id`, `status`, `created_at`, `updated_at`) VALUES
(1263, 'Dakshinkhan Bazar', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1264, 'Munda', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1265, 'Hajipara-Dakshinkhan', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1266, 'Barua', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1267, 'Joynal Market', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1268, 'Johura Market', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1269, 'Habib Market', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1270, 'Ainusbag-Dakshinkhan', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1271, 'Ainusbag', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1272, 'Uttarkhan', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1273, 'Dakshinkhan', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1274, 'Fayedabad', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1275, 'BDR Market-House Building', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1276, 'Ashkona', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1277, 'Uttara Sector - 2', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1278, 'BDR Market-Sector 6', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1279, 'Uttara Sector - 6', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1280, 'Moinartek', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1281, 'Uttara Sector - 8', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1282, 'Atipara', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1283, 'Uttara Sector-4', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1284, 'Kot Bari', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1285, 'Goaltek', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1286, 'Dewan City', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1287, 'Chalabon', '1', 1, 1, '2021-10-31 13:02:40', '2024-10-24 06:56:43'),
(1288, 'Charfession', '28', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1289, 'Lalmohan', '28', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1290, 'Manpura', '28', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1291, 'Chondra Gazipur', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1292, 'Goailbari bazar (Gazipur)', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1293, 'Hatimara (Gazipur)', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1294, 'Sardagonj (Gazipur)', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1295, 'Ambagh (Gazipur)', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1296, 'Fulbaria bazar (Gazipur)', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1297, 'Madhobpur (Gazipur)', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1298, 'Kabirpur (Gazipur)', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1299, 'Walton high-tech (Gazipur)', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1300, 'Walton micro-tech (Gazipur)', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1301, 'Mollapara (Gazipur)', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1302, 'Jalsukha (Gazipur)', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1303, 'Gosatra (Gazipur)', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1304, 'Kaliakoir', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1305, 'Konabari', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1306, 'Mouchak Gazipur', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1307, 'Vannara (Gazipur)', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1308, 'Kashempur', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1309, 'Shafipur', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1310, 'Sardarganj (Gazipur)', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1311, 'Sultan Market (Gazipur)', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1312, 'Pollibiddut Gazipur', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1313, 'Baroipara (Gazipur)', '4', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1314, 'Kuakata', '11', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1315, 'Khepupara', '11', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1316, 'Payra port', '11', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1317, 'Amtali', '29', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1318, 'Mahipur', '11', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1319, 'Kalapara', '11', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1320, 'Companyganj (Comilla)', '6', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1321, 'Muradnagar - Cumilla', '6', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1322, 'Tilagao - Kulaura', '20', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1323, 'Bhatera - Kulaura', '20', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1324, 'Kulaura', '20', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1325, 'Baramchal (Kulaura)', '20', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1326, 'Robir Bazar (Kulaura)', '20', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1327, 'Brahman Bazar - Kulaura', '20', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1328, 'Chandanaish', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1329, 'Lohagara', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1330, 'Satkania Baitul Ijjat', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1331, 'Satkania Bazalia', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1332, 'Satkania', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1333, 'Jaldi Banigram', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1334, 'Jaldi Gunagari', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1335, 'Jaldi Khan Bahadur', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1336, 'Jaldi Sadar', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1337, 'East Joara Barma', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1338, 'East Joara Dohazari', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1339, 'East Joara East Joara', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1340, 'East Joara Gachbaria', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1341, 'Lohagara Chunti', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1342, 'Lohagara Padua', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1343, 'Banshkhali', '2', 3, 1, '2021-10-31 13:02:40', '2024-07-07 22:49:27'),
(1344, 'Hemayetpur', '1', 2, 1, '2024-10-24 07:14:08', '2024-10-24 07:14:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `image`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$c4NZbee1.FJ5om62f6fdceuPoQjF08nfGCRjFqMuwregfZ3UHC/yu', 'public/uploads/users/1719897087-maroon-02.webp', 1, 'jZXHeFB0h3s6DVYSdcl8F9HOp91NZbuxQqSDvZ0aAN2HvVZqmAxSJGwRTj7c', '2024-07-02 05:01:05', '2024-07-02 05:11:27'),
(2, 'Dhaka Dispatch', 'info@dhakadispatch.com', NULL, '$2y$10$V5allXLSB.omZEqP2uiERuCG2rsdPDZVHFHgIQFpVTlLdXqN47ZGy', 'public/uploads/users/1720594737-maroon-02.webp', 1, 'Ma42uapOKdFfnPeDR8ijszBBvichtKL1bhnQR7eTsdjcVghMYvBSIqaU5yXb', '2024-07-10 06:58:58', '2024-10-31 05:38:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_categories`
--
ALTER TABLE `banner_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_feedback`
--
ALTER TABLE `client_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counters`
--
ALTER TABLE `counters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `create_pages`
--
ALTER TABLE `create_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_charges`
--
ALTER TABLE `delivery_charges`
  ADD PRIMARY KEY (`id`),
  ADD KEY `delivery_charges_service_id_index` (`service_id`),
  ADD KEY `delivery_charges_zone_id_index` (`zone_id`);

--
-- Indexes for table `delivery_zones`
--
ALTER TABLE `delivery_zones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense_categories`
--
ALTER TABLE `expense_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `google_tag_managers`
--
ALTER TABLE `google_tag_managers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ip_blocks`
--
ALTER TABLE `ip_blocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merchants`
--
ALTER TABLE `merchants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `merchants_phone_unique` (`phone`) USING BTREE,
  ADD UNIQUE KEY `merchants_email_unique` (`email`) USING BTREE,
  ADD KEY `merchants_district_index` (`district_id`) USING BTREE,
  ADD KEY `merchants_area_index` (`area_id`) USING BTREE,
  ADD KEY `merchants_status_index` (`status`) USING BTREE;

--
-- Indexes for table `merchant_methods`
--
ALTER TABLE `merchant_methods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `merchant_methods_merchant_id_index` (`merchant_id`) USING BTREE;

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mission_vissions`
--
ALTER TABLE `mission_vissions`
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
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `notifications_payment_id_index` (`id`),
  ADD KEY `notifications_user_id_index` (`user_id`),
  ADD KEY `notifications_user_type_index` (`user_type`),
  ADD KEY `notifications_status_index` (`status`),
  ADD KEY `notifications_parcel_id_index` (`link`) USING BTREE;

--
-- Indexes for table `parcels`
--
ALTER TABLE `parcels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parcels_merchant_id_index` (`merchant_id`),
  ADD KEY `parcels_consignment_id_index` (`parcel_id`),
  ADD KEY `parcels_phone_index` (`phone`),
  ADD KEY `parcels_district_id_index` (`district_id`),
  ADD KEY `parcels_area_id_index` (`area_id`),
  ADD KEY `rider_id` (`rider_id`);

--
-- Indexes for table `parcel_notes`
--
ALTER TABLE `parcel_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parcel_statuses`
--
ALTER TABLE `parcel_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_user_id_index` (`user_id`),
  ADD KEY `payments_user_type_index` (`user_type`),
  ADD KEY `payments_invoice_id_index` (`invoice_id`) USING BTREE;

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payment_details_payment_id_index` (`payment_id`),
  ADD KEY `payment_details_parcel_id_index` (`parcel_id`);

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
-- Indexes for table `pickups`
--
ALTER TABLE `pickups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pickups_pickup_id_index` (`pickup_id`),
  ADD KEY `pickups_district_id_index` (`district_id`),
  ADD KEY `pickups_area_id_index` (`area_id`);

--
-- Indexes for table `pickup_types`
--
ALTER TABLE `pickup_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricings`
--
ALTER TABLE `pricings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riders`
--
ALTER TABLE `riders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `riders_phone_unique` (`phone`),
  ADD UNIQUE KEY `riders_email_unique` (`email`),
  ADD KEY `riders_district_id_index` (`district_id`),
  ADD KEY `riders_area_id_index` (`area_id`),
  ADD KEY `riders_status_index` (`status`);

--
-- Indexes for table `rider_commissions`
--
ALTER TABLE `rider_commissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rider_methods`
--
ALTER TABLE `rider_methods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rider_methods_rider_id_index` (`rider_id`);

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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_types`
--
ALTER TABLE `service_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thanas`
--
ALTER TABLE `thanas`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banner_categories`
--
ALTER TABLE `banner_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `client_feedback`
--
ALTER TABLE `client_feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `counters`
--
ALTER TABLE `counters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `create_pages`
--
ALTER TABLE `create_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `delivery_charges`
--
ALTER TABLE `delivery_charges`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `delivery_zones`
--
ALTER TABLE `delivery_zones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `expense_categories`
--
ALTER TABLE `expense_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `google_tag_managers`
--
ALTER TABLE `google_tag_managers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ip_blocks`
--
ALTER TABLE `ip_blocks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `merchants`
--
ALTER TABLE `merchants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `merchant_methods`
--
ALTER TABLE `merchant_methods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `mission_vissions`
--
ALTER TABLE `mission_vissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `parcels`
--
ALTER TABLE `parcels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `parcel_notes`
--
ALTER TABLE `parcel_notes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `parcel_statuses`
--
ALTER TABLE `parcel_statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pickups`
--
ALTER TABLE `pickups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pickup_types`
--
ALTER TABLE `pickup_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pricings`
--
ALTER TABLE `pricings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `riders`
--
ALTER TABLE `riders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rider_commissions`
--
ALTER TABLE `rider_commissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rider_methods`
--
ALTER TABLE `rider_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service_types`
--
ALTER TABLE `service_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `thanas`
--
ALTER TABLE `thanas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1345;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

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
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
