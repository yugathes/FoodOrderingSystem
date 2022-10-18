-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2022 at 11:49 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ordering_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(9) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float(8,2) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `price`, `image`, `category`) VALUES
(1, 'Nasi Lemak Ayam', 2.50, 'Nasi Lemak Ayam_1.jpg', 1),
(2, 'Nasi Goreng Ayam', 7.50, 'Nasi Goreng Ayam_1.png', 1),
(3, 'Nasi Bujang', 2.50, 'Nasi Bujang_1.jpg', 1),
(4, 'Mee Goreng', 5.50, 'Mee Goreng_2.jpg', 2),
(5, 'Nasi Biriyani Ayam', 7.50, 'Nasi Biriyani Ayam_2.jpg', 2),
(6, 'Thosai', 1.15, 'Thosai_2.jpg', 2),
(7, 'Nasi Goreng ', 6.50, 'Nasi Goreng _3.jpg', 3),
(8, 'Chili Kering Ayam', 7.50, 'Chili Kering Ayam_3.jpg', 3),
(9, 'Wan Tan Mee', 5.50, 'Wan Tan Mee_3.jpg', 3),
(10, 'Sambar Chicken', 2.50, 'sambar chicken_2.jpg', 2),
(11, 'Spaghetti', 8.50, 'Spaghetti_4.jpg', 4),
(12, 'Chicken Pepperoni Pizza', 15.50, 'Chicken Pepperoni Pizza_4.jpg', 4),
(13, 'Milo Ais', 2.50, 'Milo Ais_4.jpg', 5),
(14, 'Mango Juice', 4.50, 'Mango Juice_4.jpg', 5),
(15, 'Extrajos Anggur', 3.50, 'Extrajos Anggur_4.jpg', 5),
(18, 'Nasi Ayam', 8.50, 'Nasi Ayam.jpg', 1),
(19, 'Idli', 1.10, 'Idli.jpg', 2),
(20, 'Nasi Goreng Kampung', 6.50, 'Nasi Goreng Kampung.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(9) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `username` varchar(255) NOT NULL,
  `menuID` varchar(99) NOT NULL,
  `category` varchar(255) NOT NULL,
  `total` float(9,2) NOT NULL,
  `receipt` varchar(255) DEFAULT NULL,
  `status` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `datetime`, `username`, `menuID`, `category`, `total`, `receipt`, `status`) VALUES
(13, '2022-03-17 05:54:31', 'Yuga', '14|3', '5|1', 7.00, '13_Yuga.jpg', 2),
(19, '2022-03-19 04:12:47', 'Yuga', '3|6|2', '1|2|1', 11.15, '19_Yuga.png', 2),
(20, '2022-03-19 08:14:56', 'Yuga', '2|4|10', '1|2|4', 22.50, '20_Yuga.png', 2),
(23, '2022-04-09 00:28:10', 'Yuga', '2|13', '1|5', 10.00, '23_Yuga.png', 2),
(24, '2022-04-12 00:38:35', 'Yuga', '3|5|9', '1|2|3', 15.50, '24_Yuga.png', 3),
(25, '2022-04-11 10:10:10', 'Yuga', '18', '1', 8.50, '25_Yuga.png', 2),
(26, '2022-04-11 10:11:55', 'Yuga', '4', '2', 5.50, '26_Yuga.jpg', 2),
(27, '2022-04-11 10:13:25', 'Yuga', '18|18', '1|1', 17.00, '27_Yuga.jpg', 2),
(28, '2022-04-12 19:54:19', 'Yuga', '3', '1', 2.50, '28_Yuga.png', 2),
(31, '2022-04-12 21:42:06', 'Goauthaam', '1|10|14', '1|2|5', 9.50, '31_Goauthaam.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ordersub`
--

CREATE TABLE `ordersub` (
  `id` int(9) NOT NULL,
  `orderID` int(9) NOT NULL,
  `menu` int(9) NOT NULL,
  `category` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordersub`
--

INSERT INTO `ordersub` (`id`, `orderID`, `menu`, `category`) VALUES
(1, 20, 2, 1),
(2, 20, 4, 2),
(3, 20, 10, 4),
(11, 24, 3, 1),
(12, 24, 5, 2),
(13, 24, 9, 3),
(14, 25, 18, 1),
(15, 26, 4, 2),
(16, 27, 18, 1),
(17, 27, 18, 1),
(18, 28, 3, 1),
(26, 31, 1, 1),
(27, 31, 10, 2),
(28, 31, 14, 5);

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` int(9) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `name`, `category`, `picture`) VALUES
(1, 'Melayu & Thailand', 'Melayu', 'test'),
(2, 'Indian Cuisine', 'Indian', 'Test'),
(3, 'Hong Cheng Food', 'Chinese', 'Test'),
(4, 'Albert Western Cafe', 'Western', 'Test'),
(5, 'Ali Drinks', 'Drinks', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Hp` varchar(99) NOT NULL,
  `type_user` varchar(255) NOT NULL,
  `ownerCategory` int(9) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `name`, `email`, `Hp`, `type_user`, `ownerCategory`) VALUES
('Admin', '1234', 'Admin2', 'admin2@gmail.com', '60149165192', 'Admin', NULL),
('Yuga', '1234', 'Yugathes Subramaniam', 'yugathesyuga@gmail.com', '60149165192', 'User', NULL),
('Owner', '1234', 'Owner', 'owner@gmail.com', '60163498231', 'Owner', 1),
('Indian', '1234', 'Thinesh', 'thinesh@gmail.com', '0177927739', 'Owner', 2),
('Chinese', '1234', 'Amirul', 'amirul@gmail.com', '016727893', 'Owner', 3),
('Piravin', '123', 'Piravin', 'piravin@gmail.com', '018823929', 'Owner', 4),
('Goauthaam', '1234', 'Goauthaam', 'goauthaamarul@gmail.com', '01112170069', 'User', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordersub`
--
ALTER TABLE `ordersub`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orderID` (`orderID`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `ordersub`
--
ALTER TABLE `ordersub`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ordersub`
--
ALTER TABLE `ordersub`
  ADD CONSTRAINT `ordersub_ibfk_1` FOREIGN KEY (`orderID`) REFERENCES `orders` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
