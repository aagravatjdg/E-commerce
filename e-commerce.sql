-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 05, 2023 at 02:10 PM
-- Server version: 8.0.32
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_detail`
--

CREATE TABLE `company_detail` (
  `id` bigint UNSIGNED NOT NULL,
  `company_id` bigint UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_licence` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Not_verified',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_detail`
--

INSERT INTO `company_detail` (`id`, `company_id`, `company_name`, `company_logo`, `company_licence`, `address`, `state`, `city`, `zip`, `status`, `created_at`, `updated_at`) VALUES
(10, 51749, 'Amit', '651153553c604.png', '651153554d9ef.png', 'rajkot', 'guj', 'surat', '121212', 'Verified', '2023-09-25 04:01:01', '2023-09-25 04:37:18');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(3, 'Amit Agravat', 'Amit@gmail.com', 'for inquiry1', 'abcd i am contact for just moj1.', '2023-10-03 03:47:58', '2023-10-03 04:13:21');

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
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_09_15_095822_add_user_type_to_users', 2),
(7, '2023_09_15_120532_add_number_to_users', 3),
(8, '2023_09_15_120909_add_number_to_users', 4),
(9, '2023_09_20_045706_add_profile_pic_to_users', 5),
(10, '2023_09_21_050849_add_status_to_users', 6),
(11, '2023_09_21_051541_add_status_to_users', 7),
(12, '2023_09_21_060125_add_gender_to_users', 8),
(13, '2023_09_22_075614_create_company_detail_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `product_id` int NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zip` int NOT NULL,
  `size` int NOT NULL,
  `quantity` int NOT NULL,
  `price` int NOT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Order Placed',
  `count` int NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `user_id`, `product_id`, `user_name`, `address`, `state`, `city`, `zip`, `size`, `quantity`, `price`, `status`, `count`, `created_at`, `updated_at`) VALUES
(8, 13, 6, 'amit', 'amit', 'amit', 'amit', 33333333, 7, 110, 174680, 'Out For Delivery', 1, '2023-10-03 13:44:47', '2023-10-04 10:12:48'),
(9, 13, 18, 'xjnjsd', 'vjksjbdj', 'nsvjsdjb', 'sdjjj', 784512, 5, 1, 1588, 'Order Placed', 1, '2023-10-04 04:48:02', '2023-10-04 10:12:53'),
(10, 13, 3, 'asasd', 'rajkot', 'rajkotq', 'rajkot', 9999, 10, 1, 9999, 'Order Placed', 1, '2023-10-04 10:04:16', '2023-10-04 04:45:29'),
(11, 13, 21, 'sdklklsdfkn', 'aji dam', 'aji dam', 'aji dam', 986532, 7, 7, 6216, 'Order Placed', 1, '2023-10-04 13:45:40', '2023-10-04 08:19:30'),
(12, 13, 3, 'amit', 'bdfbj', 'sjbs', 'sjf', 12345, 8, 15, 149985, 'Order Placed', 1, '2023-10-04 13:46:09', '2023-10-04 08:20:08'),
(13, 13, 20, 'sddmnnsd', 'sdkjksdf', 'jksddvjksjk', 'sjdjsdfkjsa', 852741, 6, 57, 56943, 'Order Placed', 1, '2023-10-04 13:47:01', '2023-10-04 08:20:42');

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `product_id` int NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `product_price` int NOT NULL,
  `product_quantity` int NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `user_id`, `user_name`, `product_id`, `product_name`, `product_price`, `product_quantity`, `status`, `created_at`, `updated_at`) VALUES
(1, 13, 'xjnjsd', 18, 'amit', 1588, 1, 'Done', '2022-10-04 04:16:17', '2023-10-04 04:16:17'),
(2, 13, 'amit', 6, 'New Adidas Shoes', 17468, 110, 'Done', '2022-03-04 04:24:09', '2023-10-04 04:24:09'),
(3, 13, 'asasd', 3, 'bapa', 99999, 1, 'Done', '2021-10-04 04:45:27', '2023-10-04 04:45:27'),
(5, 13, 'sdklklsdfkn', 21, 'apple', 6216, 7, 'Done', '2024-10-04 08:19:30', '2023-10-04 08:19:30'),
(6, 13, 'amit', 3, 'bapa', 149985, 15, 'Done', '2023-09-04 08:20:08', '2023-10-04 08:20:08'),
(7, 13, 'sddmnnsd', 20, 'NIke Shoes', 56943, 57, 'Done', '2023-10-04 08:20:42', '2023-10-04 08:20:42'),
(8, 13, 'amit', 20, 'sdfsdf', 93265, 10, 'Done', '2024-11-05 07:32:16', '2023-10-05 07:32:16');

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
-- Table structure for table `seller_product`
--

CREATE TABLE `seller_product` (
  `company_id` bigint UNSIGNED NOT NULL,
  `id` int NOT NULL,
  `product_title` varchar(50) NOT NULL,
  `brand_name` varchar(50) NOT NULL,
  `p_front_image` text NOT NULL,
  `product_images` text NOT NULL,
  `shoes_for` varchar(50) NOT NULL,
  `shoes_type` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `shoes_price` varchar(10) NOT NULL,
  `specification` text NOT NULL,
  `shoes_size` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(50) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `seller_product`
--

INSERT INTO `seller_product` (`company_id`, `id`, `product_title`, `brand_name`, `p_front_image`, `product_images`, `shoes_for`, `shoes_type`, `description`, `shoes_price`, `specification`, `shoes_size`, `created_at`, `updated_at`, `status`) VALUES
(51749, 3, 'bapa', 'bapa', '65126fe6ddbb2.png', '[\"65126fe6df6ec.png\"]', 'Women', 'Fashion', 'bapa', '9999', 'bapa', '[\"5\",\"6\",\"8\",\"10\"]', '2023-09-26 00:15:10', '2023-10-03 22:59:10', 'Active'),
(51749, 6, 'New Adidas Shoes', 'Adidas', '6512ab88accce.jpg', '[\"6512ab88add67.jpg\",\"6512ab88af1e7.jfif\",\"6512ab88affeb.jfif\",\"6512ab88b0bc7.jpeg\",\"6512ab88b16d1.jpg\",\"6512ab88b2234.jpg\"]', 'Men', 'Fashion', 'hi hello this shoes are too much beautiful and more than 1000 happy customers are there.', '1588', 'hi hello this shoes are too much beautiful and more than 1000 happy customers are there.hi hello this shoes are too much beautiful and more than 1000 happy customers are there.', '[\"6\",\"7\",\"8\",\"9\"]', '2023-09-26 04:29:36', '2023-09-26 04:29:36', 'Active'),
(51749, 7, 'New Adidas Shoes', 'Adidas', '6512ab8a54af9.jpg', '[\"6512ab8a557fc.jpg\",\"6512ab8a56e37.jfif\",\"6512ab8a579d6.jfif\",\"6512ab8a5848f.jpeg\",\"6512ab8a58e1b.jpg\",\"6512ab8a59903.jpg\"]', 'Men', 'Fashion', 'hi hello this shoes are too much beautiful and more than 1000 happy customers are there.', '1588', 'hi hello this shoes are too much beautiful and more than 1000 happy customers are there.hi hello this shoes are too much beautiful and more than 1000 happy customers are there.', '[\"6\",\"7\",\"8\",\"9\"]', '2023-09-26 04:29:38', '2023-09-26 04:29:38', 'Active'),
(51749, 8, 'New Adidas Shoes', 'Adidas', '6512ab88accce.jpg', '[\"6512ab88add67.jpg\",\"6512ab88af1e7.jfif\",\"6512ab88affeb.jfif\",\"6512ab88b0bc7.jpeg\",\"6512ab88b16d1.jpg\",\"6512ab88b2234.jpg\"]', 'Male', 'Fashion', 'hi hello this shoes are too much beautiful and more than 1000 happy customers are there.', '1588', 'hi hello this shoes are too much beautiful and more than 1000 happy customers are there.hi hello this shoes are too much beautiful and more than 1000 happy customers are there.', '[\"6\",\"7\",\"8\",\"9\"]', '2023-09-27 07:33:30', '2023-09-27 07:33:30', 'Active'),
(51749, 9, 'New Adidas Shoes', 'Adidas', '6512ab88accce.jpg', '[\"6512ab88add67.jpg\",\"6512ab88af1e7.jfif\",\"6512ab88affeb.jfif\",\"6512ab88b0bc7.jpeg\",\"6512ab88b16d1.jpg\",\"6512ab88b2234.jpg\"]', 'Women', 'Loafer', 'hi hello this shoes are too much beautiful and more than 1000 happy customers are there.', '1588', 'hi hello this shoes are too much beautiful and more than 1000 happy customers are there.hi hello this shoes are too much beautiful and more than 1000 happy customers are there.', '[\"5\",\"6\",\"7\",\"8\",\"9\",\"10\"]', '2023-09-27 07:33:47', '2023-09-27 07:33:47', 'Active'),
(51749, 10, 'as', 'Adidas', '6512ab88accce.jpg', '[\"6512ab88add67.jpg\",\"6512ab88af1e7.jfif\",\"6512ab88affeb.jfif\",\"6512ab88b0bc7.jpeg\",\"6512ab88b16d1.jpg\",\"6512ab88b2234.jpg\"]', 'Male', 'Fashion', 'hi hello this shoes are too much beautiful and more than 1000 happy customers are there.', '1588', 'hi hello this shoes are too much beautiful and more than 1000 happy customers are there.hi hello this shoes are too much beautiful and more than 1000 happy customers are there.', '[\"6\",\"7\",\"8\",\"9\"]', '2023-09-27 07:34:32', '2023-09-27 07:34:32', 'Active'),
(51749, 11, 'as', 'Adidas', '6512ab88accce.jpg', '[\"6512ab88add67.jpg\",\"6512ab88af1e7.jfif\",\"6512ab88affeb.jfif\",\"6512ab88b0bc7.jpeg\",\"6512ab88b16d1.jpg\",\"6512ab88b2234.jpg\"]', 'Women', 'Fashion', 'hi hello this shoes are too much beautiful and more than 1000 happy customers are there.', '1588', 'hi hello this shoes are too much beautiful and more than 1000 happy customers are there.hi hello this shoes are too much beautiful and more than 1000 happy customers are there.', '[\"5\",\"6\",\"7\",\"8\",\"9\",\"10\"]', '2023-09-27 07:35:47', '2023-09-27 07:35:47', 'Active'),
(51749, 12, 'as', 'Adidas', '6512ab88accce.jpg', '[\"6512ab88add67.jpg\",\"6512ab88af1e7.jfif\",\"6512ab88affeb.jfif\",\"6512ab88b0bc7.jpeg\",\"6512ab88b16d1.jpg\",\"6512ab88b2234.jpg\"]', 'Women', 'Fashion', 'hi hello this shoes are too much beautiful and more than 1000 happy customers are there.', '1588', 'hi hello this shoes are too much beautiful and more than 1000 happy customers are there.hi hello this shoes are too much beautiful and more than 1000 happy customers are there.', '[\"5\",\"6\",\"7\",\"8\",\"9\",\"10\"]', '2023-09-27 07:36:49', '2023-09-27 07:36:49', 'Active'),
(51749, 13, 'amit1', 'amit1', '6512ab88accce.jpg', '[\"6512ab88add67.jpg\",\"6512ab88af1e7.jfif\",\"6512ab88affeb.jfif\",\"6512ab88b0bc7.jpeg\",\"6512ab88b16d1.jpg\",\"6512ab88b2234.jpg\"]', 'Male', 'College', 'hi hello this shoes are too much beautiful and 1more than 1000 happy customers are there.11', '15881', 'hi hello this shoes are too much beautiful and more than 1000 happy customers are there.hi hello this shoes are too much beautiful and more than 1000 happy customers are there.11', '[\"5\",\"6\",\"7\",\"8\",\"9\",\"10\"]', '2023-09-27 07:38:29', '2023-10-03 22:56:38', 'Active'),
(51749, 15, 'amit', 'amit', '6512ab88accce.jpg', '[\"6512ab88add67.jpg\",\"6512ab88af1e7.jfif\",\"6512ab88affeb.jfif\",\"6512ab88b0bc7.jpeg\",\"6512ab88b16d1.jpg\",\"6512ab88b2234.jpg\"]', 'Women', 'Fashion', 'hi hello this shoes are too much beautiful and more than 1000 happy customers are there.', '1588', 'hi hello this shoes are too much beautiful and more than 1000 happy customers are there.hi hello this shoes are too much beautiful and more than 1000 happy customers are there.', '[\"5\",\"6\",\"7\",\"8\",\"9\",\"10\"]', '2023-09-27 07:41:59', '2023-09-27 07:41:59', 'Active'),
(51749, 16, 'AMIT AGRAVAT', 'amit', '6512ab88accce.jpg', '[\"6512ab88add67.jpg\",\"6512ab88af1e7.jfif\",\"6512ab88affeb.jfif\",\"6512ab88b0bc7.jpeg\",\"6512ab88b16d1.jpg\",\"6512ab88b2234.jpg\"]', 'Women', 'Fashion', 'hi hello this shoes are too much beautiful and more than 1000 happy customers are there.', '1588', 'hi hello this shoes are too much beautiful and more than 1000 happy customers are there.hi hello this shoes are too much beautiful and more than 1000 happy customers are there.', '[\"5\",\"6\",\"7\",\"8\",\"9\",\"10\"]', '2023-09-27 07:42:04', '2023-09-27 07:42:04', 'Active'),
(51749, 17, 'amit', 'amit', '6512ab88accce.jpg', '[\"6512ab88add67.jpg\",\"6512ab88af1e7.jfif\",\"6512ab88affeb.jfif\",\"6512ab88b0bc7.jpeg\",\"6512ab88b16d1.jpg\",\"6512ab88b2234.jpg\"]', 'Women', 'Fashion', 'hi hello this shoes are too much beautiful and more than 1000 happy customers are there.', '1588', 'hi hello this shoes are too much beautiful and more than 1000 happy customers are there.hi hello this shoes are too much beautiful and more than 1000 happy customers are there.', '[\"5\",\"6\",\"7\",\"8\",\"9\",\"10\"]', '2023-09-27 07:42:05', '2023-09-27 07:42:05', 'Active'),
(51749, 18, 'amit', 'amit', '6512ab88accce.jpg', '[\"6512ab88add67.jpg\",\"6512ab88af1e7.jfif\",\"6512ab88affeb.jfif\",\"6512ab88b0bc7.jpeg\",\"6512ab88b16d1.jpg\",\"6512ab88b2234.jpg\"]', 'Women', 'Fashion', 'hi hello this shoes are too much beautiful and more than 1000 happy customers are there.', '1588', 'hi hello this shoes are too much beautiful and more than 1000 happy customers are there.hi hello this shoes are too much beautiful and more than 1000 happy customers are there.', '[\"5\",\"6\",\"7\",\"8\",\"9\",\"10\"]', '2023-09-27 07:42:06', '2023-09-27 07:42:06', 'Active'),
(51749, 19, 'amit', 'amit', '6512ab88accce.jpg', '[\"6512ab88add67.jpg\",\"6512ab88af1e7.jfif\",\"6512ab88affeb.jfif\",\"6512ab88b0bc7.jpeg\",\"6512ab88b16d1.jpg\",\"6512ab88b2234.jpg\"]', 'Women', 'Fashion', 'hi hello this shoes are too much beautiful and more than 1000 happy customers are there.', '1588', 'hi hello this shoes are too much beautiful and more than 1000 happy customers are there.hi hello this shoes are too much beautiful and more than 1000 happy customers are there.', '[\"5\",\"6\",\"7\",\"8\",\"9\",\"10\"]', '2023-09-27 07:42:07', '2023-09-27 07:42:07', 'Active'),
(51749, 20, 'NIke Shoes', 'Nike', '6512ab88accce.jpg', '[\"6512ab88add67.jpg\",\"6512ab88af1e7.jfif\",\"6512ab88affeb.jfif\",\"6512ab88b0bc7.jpeg\",\"6512ab88b16d1.jpg\",\"6512ab88b2234.jpg\"]', 'Male', 'Loafer', 'hi hello this shoes are too much beautiful and more than 1000 happy customers are there.1', '999', 'hi hello this shoes are too much beautiful and more than 1000 happy customers are there.hi hello this shoes are too much beautiful and more than 1000 happy customers are there.1', '[\"5\",\"6\",\"7\",\"8\",\"9\",\"10\"]', '2023-09-27 07:42:08', '2023-10-02 22:28:46', 'Active'),
(51749, 21, 'apple', 'apple', '651bb3e808547.jpg', '[\"651bb3e809e44.jpg\"]', 'Men', 'Fashion', 'sdfhsdjfjdsjbfjdsjkfdsbfjbdsjkfbkdsfbkdjfsd8\r\nef587834874\r\n34785345783', '888', 'sdfhsdjfjdsjbfjdsjkfdsbfjbdsjkfbkdsfbkdjfsd8\r\nef587834874\r\n34785345783', '[\"5\",\"6\",\"7\",\"10\"]', '2023-10-03 00:55:44', '2023-10-03 00:55:44', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `site_header_footer`
--

CREATE TABLE `site_header_footer` (
  `id` bigint UNSIGNED NOT NULL,
  `gmail` text NOT NULL,
  `number` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `location_link` text NOT NULL,
  `facebook` text NOT NULL,
  `instagram` text NOT NULL,
  `twitter` text NOT NULL,
  `linkedin` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `site_header_footer`
--

INSERT INTO `site_header_footer` (`id`, `gmail`, `number`, `address`, `location_link`, `facebook`, `instagram`, `twitter`, `linkedin`, `updated_at`) VALUES
(1, 'amitagravat.jdg@gmail.com', '9081250270', 'Near shital park, 150 feet ring road, Rajkot - 36000', 'https://maps.app.goo.gl/MRXuNRXvNbFwajCy8', 'https://www.facebook.com', 'https://www.instagram.com', 'https://www.twitter.com', 'https://www.linkedin.com', '2023-10-03 22:21:16');

-- --------------------------------------------------------

--
-- Table structure for table `site_index`
--

CREATE TABLE `site_index` (
  `id` bigint UNSIGNED NOT NULL,
  `site_name` text NOT NULL,
  `one_1st_title` text NOT NULL,
  `one_2nd_title` text NOT NULL,
  `one_3rd_description` text NOT NULL,
  `one_1st_image` text NOT NULL,
  `two_1st_title` text NOT NULL,
  `two_2nd_title` text NOT NULL,
  `two_3rd_description` text NOT NULL,
  `two_1st_image` text NOT NULL,
  `third_1st_title` text NOT NULL,
  `third_2nd_title` text NOT NULL,
  `third_3rd_description` text NOT NULL,
  `third_1st_image` text NOT NULL,
  `second_main_title` text NOT NULL,
  `second_description` text NOT NULL,
  `first_title` text NOT NULL,
  `first_image` text NOT NULL,
  `second_title` text NOT NULL,
  `second_image` text NOT NULL,
  `third_title` text NOT NULL,
  `third_image` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `site_index`
--

INSERT INTO `site_index` (`id`, `site_name`, `one_1st_title`, `one_2nd_title`, `one_3rd_description`, `one_1st_image`, `two_1st_title`, `two_2nd_title`, `two_3rd_description`, `two_1st_image`, `third_1st_title`, `third_2nd_title`, `third_3rd_description`, `third_1st_image`, `second_main_title`, `second_description`, `first_title`, `first_image`, `second_title`, `second_image`, `third_title`, `third_image`, `updated_at`) VALUES
(1, 'Zay', 'eCommerce1', 'Tiny and Perfect eCommerce Template', 'Zay Shop is an eCommerce HTML5 CSS template with latest version of Bootstrap 5 (beta 1). This template is 100% free provided by TemplateMo website. Image credits go to Freepik Stories, Unsplash and Icons 8.', '65167969a3b83.jpg', 'Proident occaecat', 'Aliquip ex ea commodo consequat', 'You are permitted to use this Zay CSS template for your commercial websites. You are not permitted to re-distribute the template ZIP file in any kind of template collection websites.', '65167969a69d9.jpg', 'Repr in voluptate', 'Ullamco laboris nisi ut', 'We bring you 100% free CSS templates for your websites. If you wish to support TemplateMo, please make a small contribution via PayPal or tell your friends about our website. Thank you.', '65167a89e8c6f.jpg', 'Categories of The Month', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Watches', '65167969a842b.jpg', 'Shoes', '65167a89ea1e4.jpg', 'Accessories', '65167969ac214.jpg', '2023-10-03 22:21:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `user_type`, `number`, `profile_pic`, `status`, `gender`) VALUES
(1, 'Amit', 'aagravat805@rku.ac.in', NULL, '$2y$10$sM3O.UI67d2.oj7s6oPN.uzRg3BvR3GvNy7FQ3.gQhilkzbmtDEP.', NULL, '2023-09-15 02:29:01', '2023-09-15 02:29:01', 'User', '8745218799', '650a928a4fce0.jpg', 'Active', 'Male'),
(2, 'Amit Agravat', 'amitagravat.jdg@gmail.com', '2023-09-15 03:52:07', '$2y$10$btwjad2zyiG0OGhaoV7lCOPF24uim8o.FqEqB/IJ4yOe0xoQ9Y092', NULL, '2023-09-15 03:51:41', '2023-09-20 23:13:33', 'Admin', '9081250270', '650a928a4fce0.jpg', 'Active', 'Male'),
(3, 'amit', 'raja1@gmail.com', NULL, '$2y$10$xVM7GHujBWuQ3U8eZP1H6erLYAx2obWQmeuZ4D5iWewaEwwKCmY/y', NULL, '2023-09-15 04:42:32', '2023-09-15 04:42:32', 'User', '8745218799', '650a928a4fce0.jpg', 'Active', 'Male'),
(5, 'Amit Agravat', 'a12mt122@GMAIL.COM', NULL, '$2y$10$S156WU4WZ2XPM7JO9GQ8H.zoEEkAmkUqOi41vL/d8Kq4qvQcEqH4K', NULL, '2023-09-15 07:25:16', '2023-09-15 07:25:16', 'User', '8754215421', '650a928a4fce0.jpg', 'Active', 'Male'),
(6, 'amit', 'aa2@gmail.com', NULL, '$2y$10$JI4rj0aFxB1dWzm51iUs6uVj7F27G31QqYhyt/l5h3c5lsu62r9NK', NULL, '2023-09-15 07:26:24', '2023-09-15 07:26:24', 'User', '8745218799', '650a928a4fce0.jpg', 'Active', 'Male'),
(7, 'amit', 'aa12@gmail.com', NULL, '$2y$10$h1cdrlkqnid1ZnQldU6/Z.lanC08eLPBMtRW150Kj9gLg0znYfwQS', NULL, '2023-09-15 07:53:31', '2023-09-21 07:56:42', 'Seller', '1212121212', '650a928a4fce0.jpg', 'Active', 'Male'),
(8, 'ma', 'amath@gmail.com', NULL, '$2y$10$xDpS8b.2xT3iK5l.lkXNB.6efIYCYLoIsZF21uugmW2xfhLKMLfT.', NULL, '2023-09-18 01:14:04', '2023-09-18 01:14:04', 'User', '8745218915', '650a928a4fce0.jpg', 'Active', 'Male'),
(9, 'am', 'amama@gmail.com', NULL, '$2y$10$quvjbKH8uQX9OIY3Gnxh5OXOvLRiytknuAhXy7aT8qOYAUcfgyP3i', NULL, '2023-09-19 23:40:51', '2023-09-19 23:40:51', 'User', '7854215487', '650a928a4fce0.jpg', 'Active', 'Male'),
(10, 'asa', 'mohit@gmail.com', NULL, '$2y$10$iyGFaV3iXQ1cvQbflcw6j.74YqHlNIlITSaA/Pnlo6cTjuUVeFxwy', NULL, '2023-09-20 00:10:36', '2023-09-22 01:38:57', 'Seller', '2020202020', '650a85d3c420e.png', 'Active', 'Male'),
(11, 'bapa', 'bapiuji@gmail.com', NULL, '$2y$10$yJhpQjSmp37y3gMo1QlXtO.W2.akj/e.jbxC4znggutq4aavdb822', NULL, '2023-09-20 01:04:50', '2023-09-22 00:08:37', 'Seller', '9865785466', '650a928a4fce0.jpg', 'Delete', 'Male'),
(12, 'amit', 'are1@gmail.com', NULL, '$2y$10$hvOGDGcTRDx1U6Xgu1Dtoeen6HupTZJoWaccArfeMzgtts1TCZVBe', NULL, '2023-09-20 23:47:02', '2023-09-21 07:29:17', 'User', '9081250270', '650bd1ce1e23a.png', 'Active', 'Male'),
(13, 'girl', 'gen.jdg@gmail.com', NULL, '$2y$10$hurefzv7ozZZCJhBqk.YoerK/wDi0d3tqnAEVghUhaT9EuGxhL8SW', NULL, '2023-09-21 00:35:24', '2023-09-22 00:33:47', 'User', '9081250270', '650bdd24aad29.png', 'Active', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_detail`
--
ALTER TABLE `company_detail`
  ADD PRIMARY KEY (`company_id`),
  ADD KEY `id_company_id` (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
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
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id_product` (`product_id`),
  ADD KEY `user_id_from_user` (`user_id`);

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
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_from_order` (`user_id`),
  ADD KEY `product_f_order` (`product_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `seller_product`
--
ALTER TABLE `seller_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_id_from_com` (`company_id`);

--
-- Indexes for table `site_header_footer`
--
ALTER TABLE `site_header_footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_index`
--
ALTER TABLE `site_index`
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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seller_product`
--
ALTER TABLE `seller_product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `site_header_footer`
--
ALTER TABLE `site_header_footer`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `site_index`
--
ALTER TABLE `site_index`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `company_detail`
--
ALTER TABLE `company_detail`
  ADD CONSTRAINT `id_company_id` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `product_id_product` FOREIGN KEY (`product_id`) REFERENCES `seller_product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_id_from_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `product_f_order` FOREIGN KEY (`product_id`) REFERENCES `order_detail` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_from_order` FOREIGN KEY (`user_id`) REFERENCES `order_detail` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `seller_product`
--
ALTER TABLE `seller_product`
  ADD CONSTRAINT `company_id_from_com` FOREIGN KEY (`company_id`) REFERENCES `company_detail` (`company_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
