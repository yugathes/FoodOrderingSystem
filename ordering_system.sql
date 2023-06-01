-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2022 at 08:31 PM
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
(11, 'Bolognese Spaghetti', 12.00, 'Bolognese Spaghetti_.jpg', 4),
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
(34, '2022-04-19 15:32:23', 'Yuga', '3|12|15', '1|4|5', 21.50, '34_Yuga.png', 1);

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
(34, 34, 3, 1),
(35, 34, 12, 4),
(36, 34, 15, 5);

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
('Yuga', '1234', 'Yuga', 'yuga@gmail.com', '601272993', 'User', NULL),
('Owner', '1234', 'Owner', 'owner@gmail.com', '60163498231', 'Owner', 1),
('Indian', '1234', 'Thinesh', 'thinesh@gmail.com', '0177927739', 'Owner', 2),
('Chinese', '1234', 'Amirul', 'amirul@gmail.com', '016727893', 'Owner', 3),
('Piravin', '123', 'Piravin', 'piravin@gmail.com', '018823929', 'Owner', 4),
('Goauthaam', '1234', 'Goauthaam', 'goauthaamarul@gmail.com', '01112170069', 'User', NULL),
('Mugi', '1234', 'Mugilan', 'mugilan@gmail.com', '013563565', 'User', NULL),
('Kirthiaini', '12345678', 'Kirthiaini', 'kirthiaini@gmail.com', '0149165192', 'User', NULL);

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
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `ordersub`
--
ALTER TABLE `ordersub`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

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
