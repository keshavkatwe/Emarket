-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 17, 2015 at 06:24 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_04_19_142637_create_tblrecipecategories_table', 1),
('2015_04_20_174134_create_recipe_cooking_methods', 1),
('2015_04_20_174427_create_cuisines', 1),
('2015_04_20_174601_create_tags', 1),
('2015_04_21_161918_create_recipes_table', 1),
('2015_04_21_171422_add_recipe_primary_keys', 1),
('2015_04_21_174539_create_recipe_ingredient', 2),
('2015_04_21_180052_create_recipe_cooking_sections', 2),
('2015_04_21_180219_create_recipe_cooking_steps', 2),
('2015_04_21_180442_create_measure_units', 2),
('2015_04_21_180837_add_primary_key_for_incredient', 3),
('2015_04_21_181152_add_sections_primary_keys', 4),
('2015_04_21_181352_add_primary_key_for_recipe_steps', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Electronics', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Break Fast Cereals', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Home Appliances', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Home Care', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Home Decor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'OTC', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Food & Beverages', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Nutrition & Supplements', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Brace & Health Aids', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Fitness', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Health Monitor & Equipments', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Senior Care & Aids', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country`
--

CREATE TABLE `tbl_country` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_country`
--

INSERT INTO `tbl_country` (`id`, `name`) VALUES
(1, 'India'),
(2, 'United Kingdom');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `unit` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `about` varchar(1000) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `brand`, `category`, `unit`, `price`, `about`, `created_at`, `updated_at`) VALUES
(1, 'TRESEMME SPLIT REMEDY CONDITIONER 85ML', NULL, 'we', '1', 0, 0, NULL, '2015-11-15 15:15:16', '2015-11-15 08:21:54'),
(2, 'PAMPERS ACTIVE BABY (M) 90''S', NULL, 'new product', '1', 123, 222, NULL, '2015-11-15 15:15:42', '2015-11-15 08:22:29'),
(3, 'DOVE GO FRESH GREEN TEA SCENT DEODORAN...', NULL, 'new product', '1', 123, 222, NULL, '2015-11-15 15:15:46', '2015-11-15 08:23:20'),
(4, 'OLAY AGE PROTECT 40G', NULL, 'new product', '1', 123, 222, NULL, '2015-11-15 15:16:02', '2015-11-15 08:24:10'),
(5, 'PANTENE PRO-V ANTI DANDRUFF (SHAMPOO) ...', NULL, 'new product', '1', 123, 222, NULL, '2015-11-15 15:16:05', '2015-11-15 08:25:07'),
(6, 'COLGATE STRONG TEETH WITH CAVITY PROTE...', NULL, 'we', '2', 0, 0, NULL, '2015-11-15 15:16:13', '2015-11-15 08:27:01'),
(7, 'PAMPERS ACTIVE BABY (M) 90''S', NULL, 'we', '2', 0, 0, NULL, '2015-11-15 15:16:23', '2015-11-15 08:28:35'),
(8, 'WHISPER ULTRA CLEAN (XL WINGS) 7''S', NULL, 'we', '2', 0, 0, NULL, '2015-11-15 15:16:39', '2015-11-15 08:29:56'),
(9, 'HORLICKS (CLASSIC MALT) 500G PET JAR', 'c266a6cec47b520f4911a56a765d3294.png', 'we', '2', 0, 0, NULL, '2015-11-15 15:16:49', '2015-11-15 08:30:31'),
(10, 'POND''S WHITE BEAUTY DAILY SPOT-LESS LI...', NULL, 'new', '3', 223, 23, NULL, '2015-11-15 15:16:56', '2015-11-15 08:31:07'),
(11, 'AMBI PUR (CAR PREMIUM CLIP) LAVENDER S...', 'c139e0631d01b3c0318b6ceb0c7f2271.png', 'new', '3', 223, 23, NULL, '2015-11-15 15:17:04', '2015-11-15 08:31:54'),
(12, 'LIRIL 2000 WITH TEA TREE OIL SOAP 125G', '9ee0442145a181fe2c34073e8da96cfe.jpg', 'demo product', '1', 0, 123, 'wewwe', '2015-11-15 15:17:09', '2015-11-15 08:35:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`id`, `name`) VALUES
(1, 'Karnataka'),
(2, 'Maharastra');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.png',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `gender` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `about` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `image`, `name`, `email`, `password`, `remember_token`, `country_id`, `state_id`, `city`, `created_at`, `updated_at`, `gender`, `contact`, `about`) VALUES
(1, 'bf8bfd98f53a63c23aae509937d8bf6e.png', 'Admin', 'admin@gmail.com', '$2y$10$JO0OFNQwTAIwmg29/y7x0OLfM9xGPFGuP1IW.D82QcSmuFx5OGEjq', 'QB89iZn9EuknxNBdcAzWosZfMI7QTTbZTNBa945EfzYN1Dq7ihb2qPxuhQP9', 1, 1, 'Hublis', '2015-07-04 04:16:03', '2015-11-17 11:50:43', 'male', '123456789', 'Hello this is demo text in desc'),
(2, 'default.png', 'vinayak', 'vinyak@gmail.com', '$2y$10$XCz1K9ES2RmQ019xqc/FdOZy9GIIkfeQ42q8YaLO.SV06m.HWV48O', '231jYeA22AAnnf4vxucjSLVSaE0Np7uToNBkXfrRiPU3N01JgkGBSOrnIksk', NULL, NULL, NULL, '2015-07-04 04:16:50', '2015-11-14 10:26:07', NULL, NULL, NULL),
(3, 'default.png', 'Jayachandra', 'Jayachandra@gmail.com', '$2y$10$AUKvmtygdZJEpdow/5heo.xCqfwhjNpHer.CFeD9BqJb0LRrj2g.O', 'crLYwiPUGb0Jjf9dMqDqJgsuKFzerRV3U3u7qzu2JWXf9uxjcWNOs6l15ul2', NULL, NULL, NULL, '2015-07-12 05:15:32', '2015-07-12 05:15:47', NULL, NULL, NULL),
(4, 'default.png', 'Deviprasad', 'Deviprasad@gmail.com', '$2y$10$S/OREtod7EQjPLdGddKqo.dWy2UnJCj7vFQUcgAHei/IwSk6xoLsK', 'dBKgUOi2FB5LDUkmhoYRjLTXtrx4VMolKHsKSshfB4JZrLhGPYxPxhC2P4Z3', NULL, NULL, NULL, '2015-07-12 05:16:01', '2015-07-12 05:20:29', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_country`
--
ALTER TABLE `tbl_country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
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
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_country`
--
ALTER TABLE `tbl_country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
