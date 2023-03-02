-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 02, 2023 at 02:52 PM
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
(2, 2, 'Ankush', 'ankush@gmail.com', '1234567890', 'asd', '0', '2023-03-31 17:02:31', '1'),
(3, 2, 'Harsh', 'harsh@gmail.com', '1234567890', 'Ldh', '1', '2023-03-01 11:36:13', '1'),
(4, 2, 'Deepu', 'deepu@gmail.com', '1234567890', 'Dhk', '1', '2023-03-01 11:41:03', '1'),
(5, 1, 'Manish', 'manish@gmail.com', '1234567890', 'Up', '1', '2023-03-01 11:41:51', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts_listing`
--
ALTER TABLE `contacts_listing`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts_listing`
--
ALTER TABLE `contacts_listing`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
