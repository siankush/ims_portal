-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 07, 2023 at 11:06 AM
-- Server version: 8.0.32-0ubuntu0.20.04.2
-- PHP Version: 7.4.3-4ubuntu2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_assets`
--

CREATE TABLE `company_assets` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `contact_listing_id` int NOT NULL,
  `insurance_company_id` int NOT NULL,
  `insurance_policy_id` int NOT NULL,
  `premium` float NOT NULL,
  `term_length` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '1',
  `deleted` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '1',
  `policy_status` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `company_assets`
--

INSERT INTO `company_assets` (`id`, `user_id`, `contact_listing_id`, `insurance_company_id`, `insurance_policy_id`, `premium`, `term_length`, `status`, `deleted`, `policy_status`) VALUES
(1, 2, 3, 2, 1, 2300, '2023-03-03 16:29:58', '1', '1', '1'),
(2, 1, 7, 1, 1, 1, '2023-03-06 05:44:01', '1', '1', '1'),
(3, 1, 7, 1, 1, 1, '2023-03-06 05:51:53', '1', '1', '1'),
(4, 1, 7, 1, 1, 1, '2023-03-06 06:15:35', '1', '1', '1'),
(5, 1, 7, 1, 1, 1, '2023-03-06 06:24:51', '1', '1', '1'),
(6, 1, 7, 1, 1, 1, '2023-03-06 06:27:02', '1', '1', '1'),
(7, 1, 15, 1, 1, 1, '2023-03-06 07:09:22', '1', '1', '1'),
(8, 1, 15, 1, 1, 1, '2023-03-06 07:10:16', '1', '1', '1'),
(9, 1, 15, 1, 1, 1, '2023-03-06 07:10:54', '1', '1', '1'),
(10, 1, 15, 1, 1, 1, '2023-03-06 07:10:54', '1', '1', '1'),
(11, 1, 15, 1, 1, 1, '2023-03-06 07:33:56', '1', '1', '1'),
(12, 1, 2, 1, 1, 1, '2023-03-06 07:34:37', '1', '1', '1'),
(13, 1, 1, 1, 1, 1, '2023-03-06 07:35:23', '1', '1', '1'),
(14, 1, 3, 1, 1, 1, '2023-03-06 07:36:33', '1', '1', '1'),
(15, 1, 15, 1, 1, 1, '2023-03-06 07:38:53', '1', '1', '0'),
(16, 1, 15, 1, 1, 1, '2023-03-06 07:45:06', '1', '1', '0'),
(17, 1, 15, 2, 2, 1, '2023-03-06 07:45:47', '1', '1', '0'),
(18, 1, 1, 1, 1, 1, '2023-03-06 07:47:16', '1', '1', '0'),
(19, 1, 16, 1, 1, 1, '2023-03-06 07:56:30', '1', '1', '0'),
(20, 1, 17, 1, 1, 1, '2023-03-06 08:51:27', '1', '1', '0'),
(21, 1, 18, 1, 1, 1, '2023-03-06 08:54:48', '1', '1', '0'),
(22, 1, 19, 1, 1, 1, '2023-03-06 09:02:31', '1', '1', '0'),
(23, 1, 20, 1, 1, 1, '2023-03-06 11:09:43', '1', '1', '0'),
(24, 1, 20, 2, 2, 1, '2023-03-06 11:09:43', '1', '1', '0'),
(25, 1, 20, 1, 1, 1, '2023-03-06 12:32:04', '1', '1', '0'),
(26, 1, 20, 1, 2, 1, '2023-03-06 12:41:31', '1', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `contact_listings`
--

CREATE TABLE `contact_listings` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deletestatus` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact_listings`
--

INSERT INTO `contact_listings` (`id`, `user_id`, `name`, `email`, `phone`, `address`, `status`, `created_at`, `deletestatus`) VALUES
(1, 1, 'Ajay', 'ajay@gmail.com', '1234567890', 'ldh', '1', '2023-03-01 07:16:26', '1'),
(2, 2, 'Ankush', 'ankush@gmail.com', '1234567890', 'asd', '1', '2023-03-31 17:02:31', '1'),
(3, 2, 'Harsh', 'harsh@gmail.com', '1234567890', 'Ldh', '1', '2023-03-01 11:36:13', '1'),
(4, 2, 'Deepu', 'deepu@gmail.com', '1234567890', 'Dhk', '1', '2023-03-01 11:41:03', '0'),
(5, 1, 'Manish', 'manish@gmail.com', '1234567890', 'Up', '1', '2023-03-01 11:41:51', '1'),
(6, 2, 'add', 'admin@gmail.com', '1234567890', 'test', '1', '2023-03-02 09:30:11', '1'),
(7, 2, 'test1', 'test1@gmail.com', '1234567890', 'test', '1', '2023-03-02 09:30:39', '1'),
(8, 1, 'test', 'test3@gmail.com', '1234567890', 'sdsd', '1', '2023-03-06 06:45:17', '1'),
(9, 1, 'test', 'test93@gmail.com', '1234567890', 'document.write(name);', '1', '2023-03-06 06:46:35', '1'),
(10, 1, 'test', 'kabishek@teqmavens.com', '1234567890', 'sdsd', '1', '2023-03-06 06:49:01', '1'),
(11, 1, 'test', 'test63@gmail.com', '1234567890', 'df', '1', '2023-03-06 06:50:10', '1'),
(12, 1, 'test', 'test37@gmail.com', '1234567890', 'document.write(name);', '1', '2023-03-06 06:51:52', '1'),
(13, 1, 'test', 'test39@gmail.com', '1234567890', 'te', '1', '2023-03-06 06:53:15', '1'),
(14, 1, 'test', 'test630@gmail.com', '1234567890', 'sdsd', '1', '2023-03-06 06:57:55', '1'),
(15, 1, 'test', 'test16@gmail.com', '1234567890', 'fgf', '1', '2023-03-06 07:07:35', '1'),
(16, 1, 'mohan', 'mohan@gmail.com', '1234567890', 'mohan', '1', '2023-03-06 07:51:03', '1'),
(17, 1, 'dashq', 'dash@gmail.com', '1234567890', 'ss', '1', '2023-03-06 08:36:28', '1'),
(18, 1, 'test', 'ka9bishek@teqmavens.com', '1234567890', 'k', '1', '2023-03-06 08:52:24', '1'),
(19, 1, 'deepu', 'deep@gmail.com', '1234567890', 'yuy', '1', '2023-03-06 08:55:22', '1'),
(20, 1, 'test', 'teste31@gmail.com', '1234567890', 'ete', '1', '2023-03-06 09:04:21', '1');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_companies`
--

CREATE TABLE `insurance_companies` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `insurance_companies`
--

INSERT INTO `insurance_companies` (`id`, `name`, `status`) VALUES
(1, 'LIC', '1'),
(2, 'KOTAK', '0'),
(3, 'HDFC', '0');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_policies`
--

CREATE TABLE `insurance_policies` (
  `id` int NOT NULL,
  `insurance_company_id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `premium` float NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `insurance_policies`
--

INSERT INTO `insurance_policies` (`id`, `insurance_company_id`, `name`, `premium`, `status`) VALUES
(1, 1, 'health care', 2999, '0'),
(2, 2, 'HEALTH CARE', 0, '0'),
(3, 1, 'LIFE ', 0, '1'),
(4, 2, 'e45twr', 0, '1'),
(5, 1, 'car_insurance', 3997, '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '1',
  `deleted` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '1',
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `contact_number`, `address`, `password`, `status`, `deleted`, `created_at`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '1234567890', 'admin', '$2y$10$QZ42RD0iq9XUwKIwdUwUHeHnfo5FBCHR6NyoBwhtcafvd9iuDIty2', '0', '1', '2023-02-28 06:25:13.239000'),
(2, 'admin', 'admin', 'admin1@gmail.com', '1234567890', 'admin', '$2y$10$a/.yszmjDLpcnM3u4F7UkeMc8WOPH79.6r/lM7ZAh6OgxbAMdReGm', '1', '1', '2023-03-02 09:21:15.904197'),
(3, 'test', 'test', 'test1@gmail.com', '1234567890', 'test', '$2y$10$X1QlzNyXXyxZU.J.MJSCNOxC9qbjBHxbHevl/HQ9ubqU5GO4nt4pC', '1', '1', '2023-03-07 04:39:59.755511');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_assets`
--
ALTER TABLE `company_assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_listings`
--
ALTER TABLE `contact_listings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurance_companies`
--
ALTER TABLE `insurance_companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurance_policies`
--
ALTER TABLE `insurance_policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_assets`
--
ALTER TABLE `company_assets`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `contact_listings`
--
ALTER TABLE `contact_listings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `insurance_companies`
--
ALTER TABLE `insurance_companies`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `insurance_policies`
--
ALTER TABLE `insurance_policies`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
