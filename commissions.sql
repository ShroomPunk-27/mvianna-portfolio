-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 07, 2026 at 02:32 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `commissions`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `ID_clients` int(6) NOT NULL,
  `c_name` text NOT NULL,
  `at_ig` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`ID_clients`, `c_name`, `at_ig`, `email`) VALUES
(1, 'Ray', 'rayslayy', 'rachealslejska@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `commish`
--

CREATE TABLE `commish` (
  `ID_commish` int(10) NOT NULL,
  `client` text NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp(),
  `delivery_date` date NOT NULL,
  `client_refs` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `commish`
--

INSERT INTO `commish` (`ID_commish`, `client`, `created_date`, `delivery_date`, `client_refs`, `description`) VALUES
(1, '1', '2022-09-16', '2022-10-01', '', '2 full bodied characters with simple background and simple shading + props. Two final images with minimal changes (eye coloration).'),
(2, '1', '2023-02-26', '2023-03-26', '', '1 full bodied character with simple background and simple shading + props. Complex design.');

-- --------------------------------------------------------

--
-- Table structure for table `comms_types`
--

CREATE TABLE `comms_types` (
  `ID_commst` int(2) NOT NULL,
  `type` text NOT NULL,
  `Base_price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comms_types`
--

INSERT INTO `comms_types` (`ID_commst`, `type`, `Base_price`) VALUES
(1, 'Character Portrait', 5000),
(2, 'Character Design (concept art)', 5000),
(3, 'Character Sheet', 5000),
(4, 'Full Illustration', 5000),
(5, 'Animated Loop (2D)', 5000),
(6, 'Other', 4000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`ID_clients`),
  ADD KEY `Name` (`c_name`(768));

--
-- Indexes for table `commish`
--
ALTER TABLE `commish`
  ADD PRIMARY KEY (`ID_commish`);

--
-- Indexes for table `comms_types`
--
ALTER TABLE `comms_types`
  ADD PRIMARY KEY (`ID_commst`),
  ADD KEY `Type` (`type`(768));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `ID_clients` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `commish`
--
ALTER TABLE `commish`
  MODIFY `ID_commish` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comms_types`
--
ALTER TABLE `comms_types`
  MODIFY `ID_commst` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
