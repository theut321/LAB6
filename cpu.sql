-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Feb 28, 2026 at 04:47 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easypc`
--

-- --------------------------------------------------------

--
-- Table structure for table `cpu`
--

CREATE TABLE `cpu` (
  `id` int(11) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `generation` int(11) NOT NULL,
  `model` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `stock_quantity` int(11) NOT NULL,
  `date_added` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cpu`
--

INSERT INTO `cpu` (`id`, `brand`, `generation`, `model`, `price`, `stock_quantity`, `date_added`) VALUES
(1, 'ryzen', 5, '2600', 2500, 12, '2026-02-28'),
(2, 'intel', 7, '12700K', 12500, 8, '2026-02-28'),
(3, 'ryzen', 5, '5600x', 12500, 6, '2026-02-28'),
(4, 'ryzen', 7, '5700x', 9295, 14, '2026-02-28'),
(5, 'ryzen', 7, '5700x', 9295, 14, '2026-02-28'),
(6, 'ryzen', 5, '3600x', 4200, 6, '2026-02-28'),
(7, 'ryzen', 5, '3600x', 4200, 6, '2026-02-28'),
(9, 'Ryzen', 7, '2700x', 3200, 9, '2026-02-28'),
(10, 'Ryzen', 9, '5900x', 15000, 1, '2026-02-28'),
(11, 'Ryzen', 9, '7900x', 35000, 1, '2026-02-28'),
(12, 'intel', 7, '13700K', 29999, 2, '2026-02-28'),
(16, 'intel', 5, '14600K', 25000, 4, '2026-02-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cpu`
--
ALTER TABLE `cpu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cpu`
--
ALTER TABLE `cpu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
