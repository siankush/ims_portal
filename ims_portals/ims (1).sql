-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 02, 2023 at 05:36 PM
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
-- Table structure for table `contacts_listing`
--

CREATE TABLE `contacts_listing` (
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
-- Dumping data for table `contacts_listing`
--

INSERT INTO `contacts_listing` (`id`, `user_id`, `name`, `email`, `phone`, `address`, `status`, `created_at`, `deletestatus`) VALUES
(1, 1, 'Ajay', 'ajay@gmail.com', '1234567890', 'ldh', '1', '2023-03-01 07:16:26', '1'),
(2, 2, 'Ankush', 'ankush@gmail.com', '1234567890', 'asd', '1', '2023-03-31 17:02:31', '1'),
(3, 2, 'Harsh', 'harsh@gmail.com', '1234567890', 'Ldh', '1', '2023-03-01 11:36:13', '1'),
(4, 2, 'Deepu', 'deepu@gmail.com', '1234567890', 'Dhk', '1', '2023-03-01 11:41:03', '1'),
(5, 1, 'Manish', 'manish@gmail.com', '1234567890', 'Up', '1', '2023-03-01 11:41:51', '1'),
(6, 2, 'add', 'admin@gmail.com', '1234567890', 'test', '1', '2023-03-02 09:30:11', '1'),
(7, 2, 'test1', 'test1@gmail.com', '1234567890', 'test', '1', '2023-03-02 09:30:39', '0');

-- --------------------------------------------------------

--
-- Table structure for table `insurances_company`
--

CREATE TABLE `insurances_company` (
  `id` int NOT NULL,
  `insurance_company_name` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `deleted` enum('0','1') NOT NULL DEFAULT '1',
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `insurances_company`
--

INSERT INTO `insurances_company` (`id`, `insurance_company_name`, `status`, `deleted`, `created_at`) VALUES
(2, 'HDFC Standard Life Insurance Co. Ltd.	', '1', '1', '2023-03-01 06:11:32.193000'),
(3, 'Max Life Insurance Co. Ltd.	', '1', '1', '2023-03-01 06:11:41.098000'),
(4, 'ICICI Prudential Life Insurance Co. Ltd.	', '1', '1', '2023-03-01 06:11:49.591000'),
(5, 'Kotak Mahindra Life Insurance Co. Ltd.	', '1', '1', '2023-03-01 06:12:11.174000'),
(6, 'SBI Life Insurance Co. Ltd.	', '1', '1', '2023-03-01 06:12:27.194000');

-- --------------------------------------------------------

--
-- Table structure for table `insurances_policy`
--

CREATE TABLE `insurances_policy` (
  `id` int NOT NULL,
  `insurance_company_id` int NOT NULL,
  `insurance_type_name` varchar(150) NOT NULL,
  `insurance_type_code` int NOT NULL,
  `premium` double NOT NULL,
  `effective_date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `term_length` varchar(50) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `deleted` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `insurances_policy`
--

INSERT INTO `insurances_policy` (`id`, `insurance_company_id`, `insurance_type_name`, `insurance_type_code`, `premium`, `effective_date`, `term_length`, `status`, `deleted`) VALUES
(1, 2, 'health', 110, 2000, '2023-03-02 11:00:12.000000', '6months', '1', '1');

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
-- Indexes for table `contacts_listing`
--
ALTER TABLE `contacts_listing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurances_company`
--
ALTER TABLE `insurances_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurances_policy`
--
ALTER TABLE `insurances_policy`
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
-- AUTO_INCREMENT for table `contacts_listing`
--
ALTER TABLE `contacts_listing`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `insurances_company`
--
ALTER TABLE `insurances_company`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `insurances_policy`
--
ALTER TABLE `insurances_policy`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
