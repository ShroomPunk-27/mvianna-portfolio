-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 01, 2025 at 07:50 PM
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
  `Name` text NOT NULL,
  `at_ig` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`ID_clients`, `Name`, `at_ig`, `email`) VALUES
(1, 'Ray', 'rayslayy', 'rachealslejska@gmail.com');

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

-- --------------------------------------------------------

--
-- Table structure for table `presupuesto`
--

CREATE TABLE `presupuesto` (
  `ID_presupuesto` int(10) NOT NULL,
  `ID_clients` int(6) NOT NULL,
  `ID_commst` int(2) NOT NULL,
  `created_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `presupuesto`
--

INSERT INTO `presupuesto` (`ID_presupuesto`, `ID_clients`, `ID_commst`, `created_date`, `delivery_date`, `description`) VALUES
(1, 1, 4, '2022-09-16', '2022-10-01', '2 full bodied characters with simple background and simple shading + props. Two final images with minimal changes (eye coloration).'),
(2, 1, 4, '2023-02-26', '2023-03-26', '1 full bodied character with simple background and simple shading + props. Complex design.');

-- --------------------------------------------------------

--
-- Table structure for table `presu_archive`
--

CREATE TABLE `presu_archive` (
  `ID_presupuesto` int(10) NOT NULL,
  `route` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`ID_clients`),
  ADD KEY `Name` (`Name`(768));

--
-- Indexes for table `comms_types`
--
ALTER TABLE `comms_types`
  ADD PRIMARY KEY (`ID_commst`),
  ADD KEY `Type` (`type`(768));

--
-- Indexes for table `presupuesto`
--
ALTER TABLE `presupuesto`
  ADD PRIMARY KEY (`ID_presupuesto`);

--
-- Indexes for table `presu_archive`
--
ALTER TABLE `presu_archive`
  ADD PRIMARY KEY (`ID_presupuesto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `ID_clients` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comms_types`
--
ALTER TABLE `comms_types`
  MODIFY `ID_commst` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `presupuesto`
--
ALTER TABLE `presupuesto`
  MODIFY `ID_presupuesto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `presu_archive`
--
ALTER TABLE `presu_archive`
  MODIFY `ID_presupuesto` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
