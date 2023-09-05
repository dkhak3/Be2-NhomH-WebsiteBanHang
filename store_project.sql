-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 05, 2023 at 01:35 PM
-- Server version: 5.7.36
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store_project`
--
CREATE DATABASE IF NOT EXISTS `store_project` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `store_project`;

-- --------------------------------------------------------

--
-- Table structure for table `account_admin`
--

DROP TABLE IF EXISTS `account_admin`;
CREATE TABLE IF NOT EXISTS `account_admin` (
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_admin`
--

INSERT INTO `account_admin` (`username`, `password`) VALUES
('duykhadev', '$2y$10$Iop0zJ0ic9BRUFWQ8zF9XeCn6ptCKHWdOQUimPC.Mb9Xr7s6LDyhi'),
('kha', '$2y$10$juIUHsxmuCfz2r4OVMv5r.NORcz9cC2cyc5UYq2omS7fPmULtVoTW');

-- --------------------------------------------------------

--
-- Table structure for table `account_user`
--

DROP TABLE IF EXISTS `account_user`;
CREATE TABLE IF NOT EXISTS `account_user` (
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_user`
--

INSERT INTO `account_user` (`username`, `password`) VALUES
('kha', '$2y$10$tQAUQzYbyG5u.4UcengaW.tGSPKDnuzsy3VIGFbGc2Tdk.ItPNfO6'),
('DM377585', '$2y$10$hgGDQO9d2eCICkTj8UbW5.qaH9O8A2zzulJtkWivjdri2vjH9mr2O'),
('test', '$2y$10$1t7I/AwsXJNn6wq.HsIjS./9k/bNKBHr6ar5/kyKq.299LmX.J31S'),
('1', '$2y$10$kGee/KQzuNhMF4TQ.m2eV.b04ZnQgAgdzh0u41TMa3FPzJyH6eWTq'),
('khapro2003', '$2y$10$Wji7xNrfYfvVwaVECxt7auX30O6qVlCMFbpn0ksqWQeZMq.BIdp8W'),
('duykhadev', '$2y$10$XXZb8jCrdKECRPFU3lYDwOIgu/d9v5IQFIQvgaREX/vws5i4ignA.');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `fullname`, `email`) VALUES
('duykhadev', 'Nguyễn Hữu Duy Kha', 'duykhadev@gmail.com'),
('kha', 'Nguyễn Kha', 'gmail@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`),
  UNIQUE KEY `admins_username_unique` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `fullname`, `email`, `email_verified_at`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Hữu Duy Kha', 'duykhadev@gmail.com', NULL, 'duykhadev', '$2y$10$l8rp.qsPqgzdr52ZzqKGUODImq/tb9oTZRrYgJPR6IbW8AoS.B712', NULL, '2023-05-27 20:19:55', '2023-05-27 20:19:55');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(1, 'Electronic Device'),
(2, 'Household Electrical Appliances'),
(3, 'Household Appliances');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2023_05_27_165850_create_admins_table', 1),
(4, '2023_05_27_121828_product', 2);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` float NOT NULL,
  `product_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_description` text COLLATE utf8mb4_unicode_ci,
  `product_star` int(11) DEFAULT NULL,
  `product_like` int(11) DEFAULT '0',
  `product_view` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_price`, `product_photo`, `product_description`, `product_star`, `product_like`, `product_view`, `created_at`, `updated_at`) VALUES
(1, 'Beoplay Silver', 888, 'beoplay-white.jpg,beoplay-white-2.jpg,beoplay-white-3.jpg', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3, 0, 15, NULL, NULL),
(2, '@extends(\'layout\')  @section(\'content\') <h1 class=\"mb-4\">Quản lí sản phẩm</h1> <a class=\"btn btn-primary\" href=\"{{ route(\'add\') }}\">Add</a> <table class=\"table\">     <thead>       <tr>         <th scope=\"col\">ID</th>         <th scope=\"col\">Photo</th>', 888, 'avatar2.png', 'The Beoplay HX from Bang & Olufsen are elegant ANC headphones with precise sound and maximum wearer comfort. They\'re equipped with the latest generation of adaptive Active Noise Cancellation and efficiently eliminate any background noise, while customised 40 mm drivers with neodymium magnets ensure impressive sound. Thanks to high-quality materials and their close-fitting design, these headphones block out sound effectively - perfect for when you\'re working from home or don\'t want to be disturbed. And four special microphones ensure maximum clarity of speech and sound while you\'re speaking on the phone. Simply perfect.', 4, 0, 11, NULL, NULL),
(3, 'Holo', 12, 'holo-orange.jpg', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3, 0, 5, NULL, NULL),
(4, 'Corda', 10, 'corda-black.jpg', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2, 0, 6, NULL, NULL),
(5, 'Maracas', 10, 'maracas.jpg,maracas-2.jpg', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3, 0, 0, NULL, NULL),
(6, 'Loop Bottle Opener', 15, 'loop-bottle-opener.jpg,loop-bottle-opener-2.jpg', 'Diaz approached this bottle opener as an industrial tool, simplified in a manner to provoke curiosity. Cast in Milwaukee, WI, the design is equally informed by its end use, the rugged material and the manufacturing process. The Loop is finished in a satin electropolish, and will open bottles for as long as you\'re drinking them. The Loop is manufactured in Milwaukee, WI and electro-polished in Chicago, IL.', 4, 0, 0, NULL, NULL),
(7, 'Kettle Teapot', 115, 'kettle-teapot.jpg,kettle-teapot-2.jpg,kettle-teapot-3.jpg', 'Menu\'s Glass Kettle Teapot by Norm Architects uniquely embraces the meeting of two traditions - Asian zen philosophy and modern Scandinavian design. A special feature is the teapot’s transparency that grants a visual experience of the tea, and stimulates the senses of sight, touch, and smell alike. As a fine design detail, the tea egg is placed in the center of the pot and is easily raised by pulling the attached silicon string when the tea is ready for serving.', 5, 0, 1, NULL, NULL),
(8, 'Lift Coaster', 6, 'lift-coaster.jpg,lift-coaster-2.jpg,lift-coaster-3.jpg', 'Reduced to elegant simplicity, the Lift Coasters are designed to elevate and present your glassware, celebrating the relationship between hand, glass, and table. This set of industrial solid brass coasters adds a sculptural practicality to any tabletop. Comes in a set of 4.', 5, 0, 2, NULL, NULL),
(9, 'Lift Trivet', 3, 'lift-trivet.jpg,lift-trivet-2.jpg,lift-trivet-3.jpg', 'Lift Trivet is a minimal object with a simple purpose—use from oven to table, with hot pots and warm dishes. Graceful protection for your counter and table tops. Uncoated brass will age over time-getting darker and richer. To restore brass to its original finish, use a polishing compound and/or cloth.', 4, 0, 0, NULL, NULL),
(10, 'Meet Bench', 160, 'meet-bench.jpg,meet-bench-2.jpg', 'The Meet Bench takes inspiration from the traditional piano bench. A versatile, multi-use piece, its name refers to the two stabilizing tubes that elegantly join under the seat. The bench is also just big enough for two people to sit together – and \'meet\'. Use Meet Bench in the hallway, as a chair in front of your writing desk or in the bedroom. It also works as an occasional table on which to display books or a lamp. Timeless in character, the design is based on contrast, the opposition between its masculine, industrial legs and the expressive embracing curves of the seat. Removable non-slip felt topper included.', 2, 0, 1, NULL, NULL),
(11, 'Mega Daybed', 990, 'mega-daybed.jpg,mega-daybed-2.jpg,mega-daybed-3.jpg', 'Designer Chris Martin saw a rack of freshly baked loaves in a bakery and found something instantly appealing about the risen bread against the metal wires. The idea became a sofa with thin steel tube side panels that enclose and lift the plump cushions. Mega offers superb comfort and sculptural expression to offices, hotels and homes.', 3, 0, 0, NULL, NULL),
(12, 'Dome Lamp', 120, 'dome-lamp-black.jpg', 'The Mater Dome Lamp is an award-winning piece of luminaire designed by Todd Bracher. Timeless and iconic with a spherical shade, which creates a gentle glow. Available in two sizes and in various finishes, Dome is a minimalist and streamlined table lamp designed to complement both residential and commercial decor.', 2, 0, 0, NULL, NULL),
(13, 'Jwda Concrete', 36.99, 'jwda-concrete.jpg,jwda-concrete-2.jpg,jwda-concrete-3.jpg', 'The JWDA Concrete Table Lamp from Menu exhibits a softer side to the roughness of industrial materials, smoothing pure concrete into a cylindrical base that supports a rounded glass diffuser. The white glass is delicately cradled within the base and glows warmly once lit. A stylish brass rotary switch buttons the collar of the grey base, acting as a dimmer that can control the amount of ambient light from the fixture.', 2, 0, 0, NULL, NULL),
(14, 'Lamp w082', 75, 'lamp-w082.jpg,lamp-w082-2.jpg,lamp-w082-3.jpg', 'The theme of the task lamp is one of those design projects that always has to measure itself with great masterpieces from the past. Hundreds have been invented over the years. Some of them so brilliant they are hard to beat. They are full of springs and knobs and complicated hinges. Sure, you can design another one of these, but perhaps there is space for a simpli ed mechanism. An object that is calm. It does move, but does not do everything. For some people that is enough. What about you?', 3, 0, 0, NULL, NULL),
(15, 'Lodge Flush', 99, 'lodge-flush.jpg', 'The Lodge Flush Mount is composed of a singular wooden column suspended from a metal canopy. The fixture swivels from side to side, directing light from a softly glowing bulb.', 3, 0, 0, NULL, NULL),
(16, 'Lodge Sconce', 29, 'lodge-sconce.jpg', 'The Lodge Sconce is composed of a singular wooden column mounted on a metal back plate. The fixture swivels 360 degrees, directing light from a softly glowing bulb. Dimmer switch located at top of fixture. ADA Compliant. Made in the USA, UL Listed.', 2, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products_categories`
--

DROP TABLE IF EXISTS `products_categories`;
CREATE TABLE IF NOT EXISTS `products_categories` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`product_id`,`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_categories`
--

INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES
(1, 1),
(2, 1),
(3, 2),
(4, 2),
(5, 1),
(6, 3),
(7, 2),
(8, 3),
(9, 3),
(10, 3),
(11, 3),
(12, 2),
(13, 2),
(14, 2),
(15, 2),
(16, 2),
(17, 1),
(18, 1);

-- --------------------------------------------------------

--
-- Table structure for table `purchased_product`
--

DROP TABLE IF EXISTS `purchased_product`;
CREATE TABLE IF NOT EXISTS `purchased_product` (
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`username`,`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchased_product`
--

INSERT INTO `purchased_product` (`username`, `product_id`) VALUES
('duykhadev', 1),
('kha', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `fullname`, `email`, `phone`, `avatar`) VALUES
('kha', 'Nguyễn Hữu Duy Kha', '21211tt0590@mail.tdc.edu.vn', NULL, NULL),
('DM377585', 'Nguyễn Hữu Duy Kha', 'diemrenluyenk3@gmail.com', NULL, NULL),
('test', 'Nguyễn Hữu Duy Kha', '21211tt0590@mail.tdc.edu.vn', NULL, NULL),
('1', 'Nguyễn Hữu Duy Kha ✅', 'diemrenluyenk3@gmail.com', NULL, NULL),
('duykhadev', 'Nguyễn Hữu Duy Kha', 'duykhadev@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `email_verified_at`, `username`, `password`, `phone`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Hữu Duy Kha', 'duykhadev@gmail.com', NULL, 'duykhadev', '$2y$10$KxtWxlf85TDk/5oUGia8gukVyiMRJgNf5d/.7NXn3JP7Kc1Xv4eU6', NULL, NULL, NULL, '2023-05-27 20:05:08', '2023-05-27 20:05:08'),
(2, 'Nguyễn Hữu Duy Kha', 'nhokkha345@gmail.com', NULL, 'khapro2003', '$2y$10$oHmiqUpSLK9VCjlbik974OAHRiMQmRoNcJ0YbGVtAusE6wXwCNnTK', NULL, NULL, NULL, '2023-05-27 22:26:56', '2023-05-27 22:26:56');

-- --------------------------------------------------------

--
-- Table structure for table `user_product_like`
--

DROP TABLE IF EXISTS `user_product_like`;
CREATE TABLE IF NOT EXISTS `user_product_like` (
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`username`,`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
