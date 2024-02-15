-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2024 at 05:38 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ping`
--

-- --------------------------------------------------------

--
-- Table structure for table `ips`
--

CREATE TABLE `ips` (
  `id` int(11) NOT NULL,
  `ipname` text NOT NULL,
  `desc` text NOT NULL,
  `type` text NOT NULL,
  `dp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ips`
--

INSERT INTO `ips` (`id`, `ipname`, `desc`, `type`, `dp`) VALUES
(28, '192.168.0.41', 'Toshiba e-STUDIO2510AC (BDD Area)', 'Printer', '0000-00-00 00:00:00'),
(29, '192.168.0.35', 'Toshiba e-STUDIO3015AC (Production Area)', 'Printer', '0000-00-00 00:00:00'),
(30, '192.168.0.4', 'IT/ADM/BDD Server', 'Server', '0000-00-00 00:00:00'),
(31, '192.168.0.35', 'Printer (Admin Area)', 'Printer', '0000-00-00 00:00:00'),
(38, 'philkoei.com.ph', 'PKII', 'Website', '0000-00-00 00:00:00'),
(39, '192.168.0.1', 'FortinetFirewall', 'Router', '0000-00-00 00:00:00'),
(40, '192.168.0.10', 'Intranet server', 'Server', '0000-00-00 00:00:00'),
(41, '192.168.0.11', 'Zentyal server', 'Server', '0000-00-00 00:00:00'),
(42, '192.168.0.220', 'ICG-NAS Server', 'Server', '0000-00-00 00:00:00'),
(43, '192.168.0.221', 'backup server of nipponkoeigroup.com HR database', 'Server', '0000-00-00 00:00:00'),
(44, '192.168.0.3', 'Philkoei-003 Engineering server (New)', 'Server', '0000-00-00 00:00:00'),
(45, '192.168.0.4', 'Philkoei-004 NAS Server for ADM, HRD, ITD, MGMT', 'Server', '0000-00-00 00:00:00'),
(46, '192.168.0.5', 'MRT7 NAS', 'Server', '0000-00-00 00:00:00'),
(47, '192.168.0.7', 'Philkoei-007 ACTFIN, NCC proj server - Synology NAS', 'Server', '0000-00-00 00:00:00'),
(48, '192.168.0.9', 'Philkoei-009 Design Center server', 'Server', '0000-00-00 00:00:00'),
(49, '192.168.1.127', 'e-Door access (Main door e-lock)', 'E-Door', '0000-00-00 00:00:00'),
(50, '192.168.1.222', 'UniFi AP ICG area', 'Mesh', '0000-00-00 00:00:00'),
(51, '192.168.1.223	', 'UniFi AP ITD (main)', 'Mesh', '0000-00-00 00:00:00'),
(52, 'google.com', 'Google', 'Website', '0000-00-00 00:00:00'),
(53, 'youtube.com', 'Youtube', 'Website', '2024-02-15 04:36:44');

-- --------------------------------------------------------

--
-- Table structure for table `iptype`
--

CREATE TABLE `iptype` (
  `id` int(11) NOT NULL,
  `iptypes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `iptype`
--

INSERT INTO `iptype` (`id`, `iptypes`) VALUES
(1, 'Router'),
(2, 'Server'),
(3, 'PC'),
(4, 'Printer'),
(9, 'Website'),
(11, 'Mesh'),
(12, 'Laptop'),
(13, 'CCTV'),
(14, 'E-Door');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ips`
--
ALTER TABLE `ips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iptype`
--
ALTER TABLE `iptype`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ips`
--
ALTER TABLE `ips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `iptype`
--
ALTER TABLE `iptype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
