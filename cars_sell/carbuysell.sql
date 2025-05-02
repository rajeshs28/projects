-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2025 at 05:37 PM
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
-- Database: `carbuysell`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'available',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `title`, `description`, `price`, `image`, `status`, `created_at`) VALUES
(1, 'sara', 'gdfsaklkhd', 65656.00, 'uploads/1744137552_Screenshot 2025-04-07 113909.png', 'sold', '2025-04-08 18:39:12'),
(2, 'mustang', 'gdfsghdfs', 65000.00, 'uploads/1744137970_Screenshot 2025-04-07 113909.png', 'sold', '2025-04-08 18:46:10'),
(3, 'mustang', 'gdfsghdfs', 65000.00, 'uploads/1744138053_Screenshot 2025-04-07 113909.png', 'sold', '2025-04-08 18:47:33'),
(4, 'sara', 'dsafkjkjdfs', 564654.00, 'uploads/1744138118_Screenshot 2025-04-07 113909.png', 'sold', '2025-04-08 18:48:38'),
(5, 'sara', 'hdfshdfs', 654655.00, 'uploads/1744138353_Screenshot 2025-04-07 113909.png', 'sold', '2025-04-08 18:52:33'),
(6, 'car detail', 'khkhdfkhldfsa', 99999999.99, 'uploads/1744138788_Screenshot 2025-04-07 113909.png', 'sold', '2025-04-08 18:59:48'),
(7, 'fhjhjdfs', 'fkhdfs', 656565.00, 'uploads/1744138979_Screenshot 2025-04-07 113909.png', 'sold', '2025-04-08 19:02:59'),
(8, 'dskjdskj', 'dfkhsdfkh', 254535.00, 'uploads/1744139059_Screenshot 2025-04-07 113909.png', 'sold', '2025-04-08 19:04:19'),
(9, 'benz', 'hds jhsdf', 65000.00, 'uploads/1744169907_ODL.jpeg', 'available', '2025-04-09 03:38:27'),
(10, 'honda creta', '2025 model', 800000.00, 'uploads/1744171460_OIP (2).jpeg', 'available', '2025-04-09 04:04:20'),
(11, 'G wagon', '2024', 12000000.00, 'uploads/1744171573_th.jpeg', 'sold', '2025-04-09 04:06:13'),
(12, 'G wagon', '2024', 1200000.00, 'uploads/1744171620_th.jpeg', 'sold', '2025-04-09 04:07:00'),
(13, 'audi', '2023', 1200000.00, 'uploads/1744179068_OIP (3).jpeg', 'available', '2025-04-09 06:11:08'),
(14, 'G Wagon', '2024', 1200000.00, 'uploads/1744179402_th.jpeg', 'available', '2025-04-09 06:16:42'),
(15, 'G Wagon', '2023', 1200000.00, 'uploads/1744179560_th.jpeg', 'sold', '2025-04-09 06:19:20'),
(16, 'G Wagon', '2023', 1200000.00, 'uploads/1744179560_th.jpeg', 'available', '2025-04-09 06:19:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
