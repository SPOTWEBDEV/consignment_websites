-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2025 at 09:23 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shipping`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `email`, `password`, `id`) VALUES
('pablo', 'pablo2funny@gmail.com', 'pablo2funny', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `description` varchar(255) NOT NULL,
  `track` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`description`, `track`, `amount`, `id`) VALUES
('Cargos Pendientes: Costos de despacho de aeropuerto / entrega local ', 'FAC7871143352', '$1,451', 1),
('Total fee charged ', 'FAC0032539341', '$1,820', 2),
('Airport Dispatch Fee: $1850.00       •     Expedited Shipping Fee:  $1350.00 	•	Local Delivery Fee: $800.00 	•	Total Amount Due: $4000.00', 'FAC6867760522', '$4,000', 3),
('Pending Charges:   Airport dispatch costs / local delivery ', 'FAC04522541101', '€1,750 ', 4),
('Pending Charges:   Airport dispatch costs / local delivery', 'FAC5328504193', '$1,950', 5),
('Airport clearance and Local delivery ', 'FAC6393790572', '$4,169', 6),
('for security', 'FAC1588233610', '100', 7);

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `track` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `paid_fee` varchar(255) NOT NULL,
  `total_fee` varchar(255) NOT NULL,
  `status` enum('arrived','on transit','stop') NOT NULL,
  `destination` varchar(255) NOT NULL,
  `current_country` varchar(255) NOT NULL,
  `shippment_date` varchar(255) NOT NULL,
  `arrival_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`track`, `description`, `weight`, `paid_fee`, `total_fee`, `status`, `destination`, `current_country`, `shippment_date`, `arrival_date`) VALUES
('FAC1588233610', ' phone and laptop goods', '100', '500', '2000', 'on transit', 'Afghanistan', 'Afghanistan', '2025-05-15', '2025-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `ip` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`ip`, `country`, `username`, `date`, `id`) VALUES
('98.97.79.246', 'NG', 'pablo', '2024-10-08 15:46:47', 1),
('84.239.6.7', 'US', 'pablo', '2024-10-08 19:33:42', 2),
('98.97.79.155', 'NG', 'pablo', '2024-10-08 20:51:38', 3),
('98.97.79.30', 'NG', 'pablo', '2024-10-28 09:54:20', 4),
('98.97.79.30', 'NG', 'pablo', '2024-10-28 15:38:23', 5),
('105.113.58.153', 'NG', 'pablo', '2024-10-29 15:27:50', 6),
('181.215.182.173', 'US', 'pablo', '2024-12-04 22:05:18', 7),
('181.215.182.13', 'US', 'pablo', '2025-01-21 14:43:46', 8),
('181.215.182.13', 'US', 'pablo', '2025-01-25 14:08:23', 9),
('129.222.206.193', 'NG', 'pablo', '2025-01-25 14:57:16', 10),
('89.187.165.168', 'CH', 'pablo', '2025-01-25 15:06:36', 11),
('198.98.183.51', 'US', 'pablo', '2025-02-04 18:31:07', 12),
('198.98.183.50', 'US', 'pablo', '2025-02-05 08:42:32', 13),
('198.98.183.148', 'US', 'pablo', '2025-02-05 08:48:15', 14),
('198.98.183.151', 'US', 'pablo', '2025-02-05 09:28:31', 15),
('198.98.183.58', 'US', 'pablo', '2025-02-05 09:50:15', 16),
('102.91.35.180', 'NG', 'pablo', '2025-03-28 21:42:35', 17),
('102.91.35.180', 'NG', 'pablo', '2025-04-08 04:42:46', 18),
('105.113.55.4', 'NG', 'pablo', '2025-04-08 18:55:44', 19),
('102.91.35.180', 'NG', 'pablo', '2025-04-09 00:07:57', 20),
('102.91.35.180', 'NG', 'pablo', '2025-04-09 00:25:09', 21),
('5.62.56.54', 'US', 'pablo', '2025-04-09 00:36:14', 22),
('102.91.35.180', 'NG', 'pablo', '2025-04-09 09:47:20', 23),
('102.91.35.180', 'NG', 'pablo', '2025-04-09 11:03:13', 24),
('105.113.55.4', 'NG', 'pablo', '2025-04-10 02:40:40', 25),
('198.98.183.43', 'US', 'pablo', '2025-04-10 18:11:00', 26),
('102.91.35.180', 'NG', 'pablo', '2025-04-10 18:57:25', 27),
('102.91.35.180', 'NG', 'pablo', '2025-04-12 12:06:24', 28),
('102.91.35.180', 'Country not found', 'pablo', '2025-04-21 16:38:10', 29),
('::1', 'Country not found', 'pablo', '2025-05-15 08:44:26', 30);

-- --------------------------------------------------------

--
-- Table structure for table `stages`
--

CREATE TABLE `stages` (
  `track` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `status` enum('current','previouse') NOT NULL,
  `date` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stages`
--

INSERT INTO `stages` (`track`, `country`, `status`, `date`, `id`) VALUES
('FAC1744640820', 'Nigeria', 'current', '2024-10-08', 1),
('FAC1744640820', 'Antigua and Barbuda', 'previouse', '2024-10-23', 3),
('FAC0222201101', 'Poland', 'current', '2024-10-08', 4),
('FAC0222201101', 'Geneva', 'previouse', '2024-10-08', 5),
('FAC0222201101', 'France', 'previouse', '2024-10-08', 6),
('FAC0222201101', 'Netherland', 'previouse', '2024-10-08', 7),
('FAC0222201101', 'France', 'previouse', '2024-10-08', 8),
('FAC0222201101', 'Spain', 'previouse', '2024-10-08', 9),
('FAC0222201101', 'Uk', 'previouse', '2024-10-08', 10),
('FAC0222201101', 'Maine', 'previouse', '2024-10-08', 11),
('FAC0222201101', 'California', 'previouse', '2024-10-08', 12),
('FAC7871143352', 'Syria ', 'previouse', '2024-10-28', 13),
('FAC7871143352', 'Peru', 'previouse', '2024-10-29', 14),
('FAC7871143352', 'Colombia ', 'current', '2024-10-30', 15),
('FAC0032539341', 'Canada ', 'previouse', '2024-12-04', 16),
('FAC0032539341', 'United States ', 'current', '2024-12-06', 17),
('FAC6867760522', 'Texas', 'previouse', '2025-01-25', 18),
('FAC6867760522', 'Colorado USA ', 'current', '2025-01-27', 19),
('FAC2176665443', 'Texas, United States ', 'previouse', '2025-02-04', 20),
('FAC2176665443', 'India', 'current', '2025-02-05', 21),
('FAC6027307884', 'Switzerland ', 'previouse', '2025-03-28', 22),
('FAC6027307884', 'France', 'current', '2025-03-29', 23),
('FAC04522541101', 'Canada ', 'previouse', '2025-04-09', 24),
('FAC04522541101', 'France ', 'previouse', '2025-04-10', 25),
('FAC5328504193', 'Canada ', 'previouse', '2025-04-10', 26),
('FAC04522541101', 'Spain', 'previouse', '2025-04-11', 27),
('FAC04522541101', 'Portugal', 'current', '2025-04-11', 29),
('FAC5328504193', 'Zimbabwe ', 'previouse', '2025-04-12', 30),
('FAC5328504193', 'Madagascar ', 'current', '2025-04-12', 31),
('FAC6393790572', 'USA', 'previouse', '2025-04-21', 32),
('FAC6393790572', 'Mexico ', 'previouse', '2025-04-23', 33),
('FAC6393790572', 'Mexico City ', 'current', '2025-04-24', 34),
('FAC6393790572', 'Nigeria', 'current', '2025-05-16', 35);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sender_name` varchar(255) NOT NULL,
  `sender_email` varchar(255) NOT NULL,
  `sender_phone` varchar(255) NOT NULL,
  `sender_country` varchar(255) NOT NULL,
  `sender_address` varchar(255) NOT NULL,
  `receiver_name` varchar(255) NOT NULL,
  `receiver_email` varchar(255) NOT NULL,
  `receiver_phone` varchar(255) NOT NULL,
  `receiver_country` varchar(255) NOT NULL,
  `receiver_address` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `track` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sender_name`, `sender_email`, `sender_phone`, `sender_country`, `sender_address`, `receiver_name`, `receiver_email`, `receiver_phone`, `receiver_country`, `receiver_address`, `id`, `track`) VALUES
('Ezea Ugochukwu', 'spotwebdev.com@gmail.com', '08108833188', 'Nigeria', 'mtd gariki', ' repented', ' repented@gmail.com', ' 678903984', 'United States', ' new york', 17, 'FAC1588233610');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`track`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stages`
--
ALTER TABLE `stages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `stages`
--
ALTER TABLE `stages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
