-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 03, 2023 at 06:44 PM
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
-- Table structure for table `insurances_company`
--

CREATE TABLE `insurances_company` (
  `id` int NOT NULL,
  `insurance_company_name` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `deleted` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '1',
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `insurances_company`
--

INSERT INTO `insurances_company` (`id`, `insurance_company_name`, `status`, `deleted`, `created_at`) VALUES
(2, 'HDFC Standard Life Insurance Co. Ltd.	', '1', '1', '2023-03-01 00:41:32.193000'),
(3, 'Max Life Insurance Co. Ltd.	', '1', '1', '2023-03-01 00:41:41.098000'),
(4, 'ICICI Prudential Life Insurance Co. Ltd.	', '1', '1', '2023-03-01 00:41:49.591000'),
(5, 'Kotak Mahindra Life Insurance Co. Ltd.	', '1', '1', '2023-03-01 00:42:11.174000'),
(6, 'SBI Life Insurance Co. Ltd.	', '1', '1', '2023-03-01 00:42:27.194000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `insurances_company`
--
ALTER TABLE `insurances_company`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
