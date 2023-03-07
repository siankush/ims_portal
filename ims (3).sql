-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 03, 2023 at 06:40 PM
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
  `term_length` datetime(6) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `deleted` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `company_assets`
--

INSERT INTO `company_assets` (`id`, `user_id`, `contact_listing_id`, `insurance_company_id`, `insurance_policy_id`, `premium`, `term_length`, `status`, `deleted`) VALUES
(1, 2, 3, 2, 1, 2300, '2023-03-03 16:29:57.849000', '1', '1');

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
(7, 2, 'test1', 'test1@gmail.com', '1234567890', 'test', '1', '2023-03-02 09:30:39', '1');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_companies`
--

CREATE TABLE `insurance_companies` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `insurance_companies`
--

INSERT INTO `insurance_companies` (`id`, `name`) VALUES
(1, 'LIC'),
(2, 'KOTAK'),
(3, 'HDFC');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_policies`
--

CREATE TABLE `insurance_policies` (
  `id` int NOT NULL,
  `insurance_company_id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `premium` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `insurance_policies`
--

INSERT INTO `insurance_policies` (`id`, `insurance_company_id`, `name`, `premium`) VALUES
(1, 1, 'health care', 2999),
(2, 2, 'HEALTH CARE', 0),
(3, 1, 'LIFE ', 0),
(4, 2, 'e45twr', 0),
(5, 1, 'car_insurance', 3997);

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
(1, 'admin', 'admin', 'admin@gmail.com', '1234567890', 'admin', '$2y$10$QZ42RD0iq9XUwKIwdUwUHeHnfo5FBCHR6NyoBwhtcafvd9iuDIty2', '1', '1', '2023-02-28 06:25:13.239000'),
(2, 'admin', 'admin', 'admin1@gmail.com', '1234567890', 'admin', '$2y$10$a/.yszmjDLpcnM3u4F7UkeMc8WOPH79.6r/lM7ZAh6OgxbAMdReGm', '1', '1', '2023-03-02 09:21:15.904197');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_listings`
--
ALTER TABLE `contact_listings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
