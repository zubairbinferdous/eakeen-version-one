-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 23, 2024 at 02:13 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eakeenbackend`
--

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `openingBalance` int NOT NULL,
  `currentBalance` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `created_at`, `updated_at`) VALUES
(1, 'GAME', '2024-12-10 16:24:49', '2024-12-10 16:24:49'),
(2, 'POLO', '2024-12-10 16:24:53', '2024-12-10 16:24:53');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_image`, `created_at`, `updated_at`) VALUES
(1, 'VALORENT', 'upload/category/1733869513_kostokenCapture.PNG', '2024-12-10 16:25:13', '2024-12-10 16:25:13'),
(2, 'COMPUTER', 'upload/category/1733869524_466796055_464158286685654_8254334944019219036_n.jpg', '2024-12-10 16:25:24', '2024-12-10 16:25:24'),
(3, 'DEVELOPER', 'upload/category/1733869540_Screenshot.png', '2024-12-10 16:25:40', '2024-12-10 16:25:40');

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
(5, '2024_11_19_154141_create_categories_table', 1),
(6, '2024_11_19_161743_create_products_table', 1),
(7, '2024_11_19_162432_create_owners_table', 1),
(8, '2024_11_23_110937_create_brands_table', 1),
(9, '2024_11_23_154900_create_sub_categories_table', 1),
(10, '2024_12_02_164856_create_banks_table', 1),
(11, '2024_12_14_152912_create_orders_table', 2),
(12, '2024_12_14_152931_create_order_items_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_total` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `user_id`, `phone`, `email`, `payment_method`, `payment_type`, `order_number`, `city`, `post_code`, `address`, `status`, `sub_total`, `created_at`, `updated_at`) VALUES
(1, 'zubair', '0', '01924495997', 'zubairbinf@gmail.com', 'Cash On Delivery', 'online', 'ORN56588956', 'Dhaka', '2333', 'uttor badda hazipara\r\nhttps://maps.app.goo.gl/aEAoDy2BDEzyTiEBA', 'pending', '3600.00', '2024-12-14 10:01:50', NULL),
(2, 'zubair', '1', '01924495997', 'zubairbinf@gmail.com', 'Cash On Delivery', 'online', 'ORN13793940', 'Dhaka', '2333', 'uttor badda hazipara\r\nhttps://maps.app.goo.gl/aEAoDy2BDEzyTiEBA', 'pending', '2400.00', '2024-12-14 10:04:15', NULL),
(3, 'zubair', '3', '01924495997', NULL, 'Cash On Delivery', 'online', 'ORN91247922', 'Dhaka', '00000', 'uttor badda hazipara\r\nhttps://maps.app.goo.gl/aEAoDy2BDEzyTiEBA', 'pending', '800.00', '2024-12-14 11:09:42', NULL),
(4, 'zubair khan', '3', '01924495997', 'zubairbinf@gmail.com', 'Cash On Delivery', 'online', 'ORN94416873', 'Dhaka', '2333', 'uttor badda hazipara', 'pending', '800.00', '2024-12-14 11:16:11', NULL),
(5, 'zubair khan', '3', '01924495997', 'zubairbinf@gmail.com', 'Cash On Delivery', 'online', 'ORN74486540', 'Dhaka', '2333', 'uttor badda hazipara', 'pending', '800.00', '2024-12-14 11:17:15', NULL),
(6, 'zubair', '0', '01924495997', 'zubairbinf@gmail.com', 'Cash On Delivery', 'online', 'ORN26051194', 'Dhaka', '2333', 'uttor badda hazipara\r\nhttps://maps.app.goo.gl/aEAoDy2BDEzyTiEBA', 'pending', '400.00', '2024-12-14 11:17:52', NULL),
(7, 'zubair', '0', '01924495997', 'zubairbinf@gmail.com', 'Cash On Delivery', 'online', 'ORN95791247', 'Dhaka', '2333', 'uttor badda hazipara\r\nhttps://maps.app.goo.gl/aEAoDy2BDEzyTiEBA', 'pending', '400.00', '2024-12-14 11:19:56', NULL),
(8, 'zubair', '1', '01924495997', 'zubairbinf@gmail.com', 'Cash On Delivery', 'online', 'ORN68679928', 'Dhaka', '2333', 'uttor badda hazipara\r\nhttps://maps.app.goo.gl/aEAoDy2BDEzyTiEBA', 'pending', '800.00', '2024-12-14 11:20:41', NULL),
(9, 'zubair', '3', '01924495997', NULL, 'Cash On Delivery', 'online', 'ORN54582306', 'Dhaka', '00000', 'uttor badda hazipara\r\nhttps://maps.app.goo.gl/aEAoDy2BDEzyTiEBA', 'pending', '3200.00', '2024-12-14 14:32:52', NULL),
(10, 'zubair', '3', '01924495997', NULL, 'Cash On Delivery', 'online', 'ORN77622674', 'Dhaka', '00000', 'uttor badda hazipara\r\nhttps://maps.app.goo.gl/aEAoDy2BDEzyTiEBA', 'pending', '800.00', '2024-12-14 16:18:24', NULL),
(11, 'zubair', '0', '01924495997', 'zubairbinf@gmail.com', 'Cash On Delivery', 'online', 'ORN60261813', 'Dhaka', '2333', 'uttor badda hazipara\r\nhttps://maps.app.goo.gl/aEAoDy2BDEzyTiEBA', 'pending', '8000.00', '2024-12-14 16:20:47', NULL),
(12, 'zubair', '3', '01924495997', NULL, 'Cash On Delivery', 'online', 'ORN81629041', 'Dhaka', '00000', 'uttor badda hazipara\r\nhttps://maps.app.goo.gl/aEAoDy2BDEzyTiEBA', 'pending', '15200.00', '2024-12-15 08:23:38', NULL),
(13, 'zubair', '3', '01924495997', NULL, 'Cash On Delivery', 'online', 'ORN61033297', 'Dhaka', '00000', 'uttor badda hazipara\r\nhttps://maps.app.goo.gl/aEAoDy2BDEzyTiEBA', 'pending', '6800.00', '2024-12-15 10:30:16', NULL),
(14, 'zubair', '3', '01924495997', NULL, 'Cash On Delivery', 'pos', 'ORN59493032', 'Dhaka', '00000', 'uttor badda hazipara\r\nhttps://maps.app.goo.gl/aEAoDy2BDEzyTiEBA', 'pending', '12000.00', '2024-12-15 10:35:55', NULL),
(15, 'zubair', '0', '01924495997', 'zubairbinf@gmail.com', 'Cash On Delivery', 'online', 'ORN60340903', 'Dhaka', '2333', 'uttor badda hazipara\r\nhttps://maps.app.goo.gl/aEAoDy2BDEzyTiEBA', 'pending', '4000.00', '2024-12-15 11:26:19', NULL),
(16, 'zubair', '1', '01924495997', 'zubairbinf@gmail.com', 'Cash On Delivery', 'online', 'ORN73869318', 'Dhaka', '2333', 'uttor badda hazipara\r\nhttps://maps.app.goo.gl/aEAoDy2BDEzyTiEBA', 'pending', '400.00', '2024-12-15 11:27:37', NULL),
(17, 'zubair', '3', '01924495997', NULL, 'Cash On Delivery', 'pos', 'ORN64541814', 'Dhaka', '00000', 'uttor badda hazipara\r\nhttps://maps.app.goo.gl/aEAoDy2BDEzyTiEBA', 'pending', '0.00', '2024-12-15 11:28:48', NULL),
(18, 'zubair khan', '3', '01747909022', 'admin@gmail.com', 'Cash On Delivery', 'pos', 'ORN20153428', 'Dhaka', '00000', 'uttor badda hazipara', 'pending', '17600.00', '2024-12-21 22:52:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `vendor_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `vendor_id`, `color`, `size`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL, NULL, '1', 400.00, '2024-12-14 10:01:50', NULL),
(2, 1, 3, NULL, NULL, NULL, '8', 400.00, '2024-12-14 10:01:50', NULL),
(3, 2, 1, NULL, NULL, NULL, '6', 400.00, '2024-12-14 10:04:15', NULL),
(4, 3, 1, NULL, NULL, NULL, '1', 400.00, '2024-12-14 11:09:42', NULL),
(5, 3, 3, NULL, NULL, NULL, '1', 400.00, '2024-12-14 11:09:42', NULL),
(6, 4, 3, NULL, NULL, NULL, '1', 400.00, '2024-12-14 11:16:11', NULL),
(7, 4, 1, NULL, NULL, NULL, '1', 400.00, '2024-12-14 11:16:11', NULL),
(8, 6, 1, NULL, NULL, NULL, '1', 400.00, '2024-12-14 11:17:52', NULL),
(9, 8, 1, NULL, NULL, NULL, '1', 400.00, '2024-12-14 11:20:41', NULL),
(10, 8, 3, NULL, NULL, NULL, '1', 400.00, '2024-12-14 11:20:41', NULL),
(11, 9, 3, NULL, NULL, NULL, '8', 400.00, '2024-12-14 14:32:53', NULL),
(12, 10, 1, NULL, NULL, NULL, '1', 400.00, '2024-12-14 16:18:24', NULL),
(13, 10, 3, NULL, NULL, NULL, '1', 400.00, '2024-12-14 16:18:24', NULL),
(14, 11, 3, NULL, NULL, NULL, '11', 400.00, '2024-12-14 16:20:47', NULL),
(15, 11, 1, NULL, NULL, NULL, '9', 400.00, '2024-12-14 16:20:47', NULL),
(16, 12, 1, NULL, NULL, NULL, '10', 400.00, '2024-12-15 08:23:39', NULL),
(17, 12, 3, NULL, NULL, NULL, '5', 400.00, '2024-12-15 08:23:39', NULL),
(18, 13, 3, NULL, NULL, NULL, '16', 400.00, '2024-12-15 10:30:16', NULL),
(19, 13, 1, NULL, NULL, NULL, '40', 400.00, '2024-12-15 10:30:17', NULL),
(20, 14, 1, NULL, NULL, NULL, '7', 400.00, '2024-12-15 10:35:55', NULL),
(21, 14, 3, NULL, NULL, NULL, '4', 400.00, '2024-12-15 10:35:55', NULL),
(22, 15, 1, NULL, NULL, NULL, '6', 400.00, '2024-12-15 11:26:19', NULL),
(23, 15, 3, NULL, NULL, NULL, '4', 400.00, '2024-12-15 11:26:19', NULL),
(24, 16, 3, NULL, NULL, NULL, '1', 400.00, '2024-12-15 11:27:37', NULL),
(25, 17, 1, NULL, NULL, NULL, '3', 400.00, '2024-12-15 11:28:48', NULL),
(26, 17, 3, NULL, NULL, NULL, '5', 400.00, '2024-12-15 11:28:48', NULL),
(27, 18, 1, NULL, NULL, NULL, '32', 400.00, '2024-12-21 22:52:41', NULL),
(28, 18, 3, NULL, NULL, NULL, '30', 400.00, '2024-12-21 22:52:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invest` int NOT NULL,
  `withdraw` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `product_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visibility` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `subcategory_id` bigint UNSIGNED DEFAULT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `actual_price` decimal(10,2) NOT NULL,
  `discount_price` decimal(10,2) DEFAULT NULL,
  `dealer_price` decimal(10,2) DEFAULT NULL,
  `stock` int NOT NULL,
  `coin` int DEFAULT NULL,
  `availability` tinyint(1) NOT NULL,
  `ProductImages` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` json DEFAULT NULL,
  `hot_deals` tinyint(1) NOT NULL DEFAULT '0',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `today_deal` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_title`, `product_id`, `description`, `product_seo`, `seo_description`, `status`, `visibility`, `category_id`, `subcategory_id`, `brand`, `actual_price`, `discount_price`, `dealer_price`, `stock`, `coin`, `availability`, `ProductImages`, `tags`, `hot_deals`, `featured`, `today_deal`, `created_at`, `updated_at`) VALUES
(1, 'test one', '121212', 'test onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest one', 'test one', 'test onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest onetest one', 'Publish', 'Private', 2, 1, '1', '500.00', '400.00', '200.00', 100, 10, 1, 'upload/Product/1733869672_kostokenCapture.PNG', '[\"hello,me,ok,this,fine\"]', 1, 1, 1, '2024-12-10 16:27:52', '2024-12-10 16:27:52'),
(3, 'test two', '1212124', 'test twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest two', 'test two', 'test twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest twotest two', 'Publish', 'Public', 2, 3, '2', '500.00', '400.00', '200.00', 100, 32, 1, 'upload/Product/1733870112_466796055_464158286685654_8254334944019219036_n.jpg', '[\"k,sdsf\"]', 1, 1, 1, '2024-12-10 16:35:12', '2024-12-10 16:35:12');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `subcategory_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `subcategory_name`, `created_at`, `updated_at`) VALUES
(1, 2, 'MONITOR', '2024-12-10 16:25:58', '2024-12-10 16:25:58'),
(2, 3, 'REACT', '2024-12-10 16:26:06', '2024-12-10 16:26:06'),
(3, 1, 'POINT', '2024-12-10 16:26:24', '2024-12-10 16:26:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Referral` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','vendor','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `Username`, `phone`, `Referral`, `email`, `role`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'zubairbinf@gmail.com', 'zubairkhan', '01924495997', 'erterter', 'zubairbinf@gmail.com', 'user', 'active', NULL, '$2y$12$ilBlRSH7dtZWJ2QR3xbKTuCpQ9WTzffuLaGvIDC.PN8H9G8ixuFNS', NULL, '2024-12-08 08:07:41', '2024-12-08 08:07:41'),
(3, 'admin', 'admin', '01747909022', 'erterter', 'admin@gmail.com', 'admin', 'active', NULL, '$2y$12$MkvCPEPCRha1fBJzhTILi.6Cu.MpOf1BjFarJl8fYIeNAcg/CXZby', NULL, '2024-12-10 05:31:37', '2024-12-10 05:31:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`);

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_product_id_unique` (`product_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`Username`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
