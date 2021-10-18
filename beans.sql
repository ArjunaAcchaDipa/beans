-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2021 at 08:47 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beans`
--

-- --------------------------------------------------------

--
-- Table structure for table `coffee`
--

CREATE TABLE `coffee` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shop_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` double(8,2) NOT NULL DEFAULT 0.00,
  `shop_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_maps` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_pict` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'images/profile.png',
  `shop_pict1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'images/profile.png',
  `shop_pict2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'images/profile.png',
  `shop_pict3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'images/profile.png',
  `shop_pict4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'images/profile.png',
  `menu_pict` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'images/profile.png',
  `menu_pict1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'images/profile.png',
  `location_pict` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'images/profile.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coffee`
--

INSERT INTO `coffee` (`id`, `shop_name`, `rating`, `shop_address`, `shop_website`, `shop_maps`, `phone`, `shop_pict`, `shop_pict1`, `shop_pict2`, `shop_pict3`, `shop_pict4`, `menu_pict`, `menu_pict1`, `location_pict`, `created_at`, `updated_at`) VALUES
(1, 'First Crack Coffee', 4.68, 'Pluit Indah No.31, RT.1/RW.7, Pluit, Kec. Penjaringan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14450', 'https://firstcrackcoffee.id/', 'https://www.google.com/maps/place/First+Crack+Coffee+Pluit/@-6.117954,106.785658,15z/data=!4m2!3m1!1s0x0:0x76e8a98bd3283eae?sa=X&ved=2ahUKEwjcv__piIXxAhVGyjgGHb9DDXYQ_BIwCnoECEMQBQ', '(021) 21882368', 'images/FCC.jpg', 'images/FCC_1.jpg', 'images/FCC_2.jpg', 'images/FCC_3.jpg', 'images/FCC_4.jpg', 'images/FCC_menu.jpg', 'images/FCC_drink.jpg', 'images/first_crack_map.png', NULL, NULL),
(2, 'Monks', 4.50, 'Komp. Graha Boulevard Timur Summarecon Kelapa Gading Blok ND1/51, RT.8/RW.12, Pegangsaan Dua, Kec. Klp. Gading, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14550', NULL, 'https://www.google.com/maps/place/Monks/@-6.1638517,106.9112396,15z/data=!4m5!3m4!1s0x0:0xb9f5722c6f309c13!8m2!3d-6.1638341!4d106.9112511', NULL, 'images/monks_KG.jpg', 'images/Monks_1.jpg', 'images/Monks_2.jpg', 'images/Monks_3.jpg', 'images/Monks_4.jpg', 'images/Monks_food.jpg', 'images/Monks_drink.jpg', 'images/monks_map.png', NULL, NULL),
(3, 'Cafe Batavia', 4.80, 'Jl. Pintu Besar Utara No.14, Pinangsia, Kec. Taman Sari, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11230', 'https://www.cafebatavia.com/', 'https://www.google.com/maps/place/Cafe+Batavia/@-6.1344685,106.8127746,15z/data=!4m5!3m4!1s0x0:0xa38223eb6637cf44!8m2!3d-6.1344685!4d106.8127746', NULL, 'images/cafe_batavia.jpg', 'images/batavia_1.jpg', 'images/batavia_2.jpg', 'images/batavia_3.jpg', 'images/batavia_4.jpg', 'images/batavia_food.jpg', 'images/batavia_drink.jpg', 'batavia_map.png', NULL, NULL);

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
(4, '2021_06_12_063329_coffee', 2),
(5, '2021_06_13_124002_review', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('arjuna.dipa@binus.ac.id', '$2y$10$oh8aZUhiX65EA6oeNCUXKOsOmWij5YSUIirj7rv8hft/JeqnSYlqm', '2021-06-11 22:39:55');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `review_body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `review_body`, `user_id`, `shop_id`, `created_at`, `updated_at`) VALUES
(8, 'mantep gan', 8, 1, '2021-06-14 10:05:44', '2021-06-14 10:05:44'),
(9, 'mantul banget gilss', 7, 1, '2021-07-01 12:06:51', '2021-07-01 12:06:51'),
(10, 'monkssss', 7, 2, '2021-07-01 12:26:51', '2021-07-01 12:26:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_pict` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'images/profile.png',
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` int(10) NOT NULL DEFAULT 0,
  `followers` int(10) NOT NULL DEFAULT 0,
  `following` int(10) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `profile_pict`, `description`, `review`, `followers`, `following`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'Elon Andrew Musk', 'wkwk@wkwk.com', 'images/profile.png', 'Ivan mantap', 2, 0, 0, NULL, '$2y$10$tCr1cYJpkVNBmUByj1MUguh60adUDhqoZJMbS0xOTSjf2PW3T.2G.', NULL, '2021-06-13 07:48:16', '2021-07-01 12:48:59'),
(10, 'Tony', 'tony@gmail.com', 'images/profile.png', NULL, 0, 0, 0, NULL, '$2y$10$OnIwOmkrq5OsFKQRvhbCku/7ykEUNNqamSY3OPPldk.PnzhnZcbvq', NULL, '2021-10-18 11:22:20', '2021-10-18 11:22:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coffee`
--
ALTER TABLE `coffee`
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
-- Indexes for table `review`
--
ALTER TABLE `review`
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
-- AUTO_INCREMENT for table `coffee`
--
ALTER TABLE `coffee`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
