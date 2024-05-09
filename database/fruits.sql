-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2024 at 08:14 PM
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
-- Database: `fruits`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `userId` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `userId`, `Email`, `Password`, `status`) VALUES
(2, 'Ritesh kumar', 'rksrk0', 'abc@gmail.com', '12345678', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `customer_id` varchar(15) NOT NULL,
  `product_id` int(10) NOT NULL,
  `qty` int(5) NOT NULL,
  `total_price` int(10) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending',
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `product_id`, `qty`, `total_price`, `status`, `time`) VALUES
(4, 'rk0011', 5, 3, 1200, 'pending', '2024-04-12 13:02:18'),
(5, 'rk0011', 8, 4, 160, 'pending', '2024-04-12 13:44:48'),
(6, 'ak0011', 7, 2, 120, 'pending', '2024-04-12 13:46:45'),
(7, 'rk0011', 9, 2, 160, 'pending', '2024-04-12 14:37:13'),
(8, 'ak0011', 4, 3, 150, 'pending', '2024-04-13 19:22:04');

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE `orders_detail` (
  `id` int(5) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `town` varchar(15) NOT NULL,
  `country` varchar(10) NOT NULL,
  `pin` int(10) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders_detail`
--

INSERT INTO `orders_detail` (`id`, `userid`, `fname`, `lname`, `address`, `town`, `country`, `pin`, `mobile`, `email`) VALUES
(11, 'rk0011', 'Aman', 'Kumar', 'vill-tramba rajkot gujarat', 'rajkot', 'India', 320020, 1212121212, 'abc@gmail.com'),
(12, 'rk0011', 'Ritesh', 'Kumar', 'vill-tramba rajkot gujarat', 'rajkot', 'India', 320020, 1212121212, 'abc@gmail.com'),
(13, 'ak0011', 'sandeep', 'y', 'vill-tramba rajkot gujarat', 'rajkot', 'India', 320020, 1212121212, 'abc@rku.ac.in'),
(14, 'rk0011', 'bhanu', 'Kumar', 'vill-tramba rajkot gujarat', 'rajkot', 'India', 320020, 1212121212, 'abc@gmail.com'),
(15, 'ak0011', 'bhanu', 'Kumar', 'vill-tramba rajkot gujarat', 'rajkot', 'India', 320020, 1212121212, 'abc@gmail.com'),
(16, 'ritesh1', 'x', 'y', 'vill-tramba rajkot gujarat', 'rajkot', 'India', 320020, 1212121212, 'rgupta717@rku.ac.in');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(5) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `p_prize` int(3) NOT NULL,
  `p_desc` varchar(100) NOT NULL,
  `p_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `p_name`, `p_prize`, `p_desc`, `p_img`) VALUES
(4, 'Banana', 50, 'healthy fruits', '660f532a7e30ebanana.jpg'),
(5, 'Kiwi', 400, 'Good vitamin source', '660f537e4032dkiwi.jfif'),
(6, 'Orange', 70, 'healthy fruits', '660f53a22a15fOrange.jpg'),
(7, 'Papaya', 60, 'Good vitamin source', '660f53c5bb896papaya.jpg'),
(8, 'Gauva', 40, 'fresh fruits', '660f540a10197gauva.jpg'),
(9, 'Watermelons', 80, 'fresh fruits', '660f54326a07bwatermelons.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `userId` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `userId`, `email`, `Password`, `status`) VALUES
(1, 'asfasf', 'ak0011', 'abc@gmail.com', '12345678', 'active'),
(2, 'Ritesh kumar', 'rk0011', 'abc@gmail.com', '12344321', 'active'),
(3, 'Ritesh kumar', 'ritesh1', 'abc@gmail.com', '12344321', 'active'),
(4, '', '', '', '', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
