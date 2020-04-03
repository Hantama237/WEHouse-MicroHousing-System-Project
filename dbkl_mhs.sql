-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2020 at 08:05 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkl_mhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `secret_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`, `secret_code`) VALUES
(1, 'admin', '$2y$12$IyT/.9RLHaoLKpUke8M3YObRXiYp3rCMx.9R75eYlU5ajqQr5SwIu', 'admin', '$2y$12$Qm05Z5JeJCU29SQFU8tiNOB8Qrs50xvhZotU4d/sNDeH6GQnNkb7a');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` bigint(20) NOT NULL,
  `application_date` date NOT NULL,
  `required_month` int(11) NOT NULL,
  `required_year` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `applicant_id` bigint(20) NOT NULL,
  `allocation_id` bigint(20) DEFAULT NULL,
  `residence_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `application_date`, `required_month`, `required_year`, `status`, `applicant_id`, `allocation_id`, `residence_id`) VALUES
(1, '2020-04-02', 1, 0, 0, 1, NULL, 1),
(2, '2020-04-30', 2, 0, 0, 1, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `residences`
--

CREATE TABLE `residences` (
  `id` bigint(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `num_of_unit` int(11) NOT NULL,
  `unit_available` int(11) NOT NULL,
  `size_per_unit` decimal(11,0) NOT NULL,
  `monthly_rental` int(11) NOT NULL,
  `officer_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `residences`
--

INSERT INTO `residences` (`id`, `name`, `address`, `num_of_unit`, `unit_available`, `size_per_unit`, `monthly_rental`, `officer_id`) VALUES
(1, 'Alpukat Residence', 'asdasdasd asdasda sda sdasd a', 10, 10, '9', 20, 2),
(2, 'Han Residence', 'Kedungu tabanan bali', 20, 20, '16', 40, 2);

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id` bigint(20) NOT NULL,
  `unit_no` int(11) NOT NULL,
  `avaibility` tinyint(1) NOT NULL,
  `residence_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `monthly_income` int(11) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(11) NOT NULL,
  `staff_id` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `monthly_income`, `username`, `password`, `role`, `staff_id`) VALUES
(1, 'asdasdasdasd asd', 'asd@asd.asd', 123332, 'anjayeae', '$2y$10$VMoCwDrV.xbDQ51I2YsoVuYNWv2bfGtYjlUc2fmiqm/YYxVjBZhce', 0, NULL),
(2, 'Housing Officer', 'ho@asd.asd', NULL, 'housingofficer', '$2y$12$zxtPx.hrVBPzd2OMbJBBBeSeLaBaq3RShq8tQ24UoUXnuSaj297yG', 1, 'HO0001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `residences`
--
ALTER TABLE `residences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `residences`
--
ALTER TABLE `residences`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
