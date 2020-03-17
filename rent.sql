-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 03, 2020 at 03:03 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rent`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(65) NOT NULL,
  `username` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `password_` varchar(65) NOT NULL,
  `date_` varchar(65) NOT NULL,
  `admin_` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password_`, `date_`, `admin_`) VALUES
(1, 'antoo', 'antoo@gmail.com', '{a098f38426a9cde0cbc09381e432b90f}', '2020-02-03', '');

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE `houses` (
  `id` int(65) NOT NULL,
  `house_no` varchar(65) NOT NULL,
  `location_` varchar(65) NOT NULL,
  `house_type` varchar(65) NOT NULL,
  `bedrooms` int(65) NOT NULL,
  `parking` tinyint(65) NOT NULL,
  `vacant_rooms` int(65) NOT NULL,
  `rent` int(65) NOT NULL,
  `deposit` int(65) NOT NULL,
  `reg_date` varchar(65) NOT NULL,
  `added_by` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`id`, `house_no`, `location_`, `house_type`, `bedrooms`, `parking`, `vacant_rooms`, `rent`, `deposit`, `reg_date`, `added_by`) VALUES
(1, 'A10k', 'zimmerman', 'bedsitter', 0, 1, 0, 6500, 7500, '2020-02-03', 'antoo');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(65) NOT NULL,
  `amount` int(65) NOT NULL,
  `date` varchar(65) NOT NULL,
  `id_no` int(65) NOT NULL,
  `purpose` varchar(65) NOT NULL,
  `period` varchar(65) NOT NULL,
  `mode` varchar(65) NOT NULL,
  `code` varchar(65) NOT NULL,
  `added_by` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `amount`, `date`, `id_no`, `purpose`, `period`, `mode`, `code`, `added_by`) VALUES
(1, 6000, '2020-02-03', 676738, 'Rent', 'jan/2020', 'Mpesa', 'jknodjo303', 'antoo');

-- --------------------------------------------------------

--
-- Table structure for table `rents`
--

CREATE TABLE `rents` (
  `id` int(65) NOT NULL,
  `amount_due` int(65) NOT NULL,
  `tenant` varchar(65) NOT NULL,
  `cleared` tinyint(65) NOT NULL,
  `period` varchar(65) NOT NULL,
  `added_by` varchar(65) NOT NULL,
  `date` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rents`
--

INSERT INTO `rents` (`id`, `amount_due`, `tenant`, `cleared`, `period`, `added_by`, `date`) VALUES
(1, 3000, '33232', 0, 'jan/2020', 'antoo', '2020-02-03');

-- --------------------------------------------------------

--
-- Table structure for table `tenants`
--

CREATE TABLE `tenants` (
  `id` int(11) NOT NULL,
  `name_` varchar(65) NOT NULL,
  `email_` varchar(65) NOT NULL,
  `password` varchar(500) NOT NULL,
  `id_no` int(65) NOT NULL,
  `phone` int(65) NOT NULL,
  `admin_` varchar(65) NOT NULL,
  `join_date` varchar(65) NOT NULL,
  `leave_date` varchar(65) NOT NULL,
  `house_no` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tenants`
--

INSERT INTO `tenants` (`id`, `name_`, `email_`, `password`, `id_no`, `phone`, `admin_`, `join_date`, `leave_date`, `house_no`) VALUES
(1, 'tony', 'tony@gmail.com', '{cc20f43c8c24dbc0b2539489b113277a}', 676738, 9838439, 'antoo', '2020-02-03', '0', 'A6k'),
(2, 'john', 'john@gmail.com', '{6e0b7076126a29d5dfcbd54835387b7b}', 324242, 245353, 'antoo', '2020-02-03', '0', 'A17k');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rents`
--
ALTER TABLE `rents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenants`
--
ALTER TABLE `tenants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(65) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `houses`
--
ALTER TABLE `houses`
  MODIFY `id` int(65) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(65) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rents`
--
ALTER TABLE `rents`
  MODIFY `id` int(65) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tenants`
--
ALTER TABLE `tenants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
