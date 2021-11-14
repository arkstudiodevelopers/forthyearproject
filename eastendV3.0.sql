-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2021 at 11:09 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eastend`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `product_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_name`, `product_price`, `product_image`, `qty`, `total_price`, `product_code`) VALUES
(78, 'Custom Black Shirt', '300', 'image/3.jpg', 3, '900', 'p1002'),
(79, 'Stock White Shirt', '420', 'image/4.jpg', 8, '3360', 'p1003'),
(80, 'Bulls shirt', '130', 'image/2.jpg', 4, '520', 'p1001'),
(81, 'Navy blue Shirt', '389', 'image/6.jpg', 2, '778', 'p1005'),
(82, 'Puma shirt', '450', 'image/7.jpg', 4, '1800', 'p1006'),
(83, 'Jeans', '500', 'image\\10.jpg', 3, '1500', 'p010'),
(84, 'Mens\' official trouser', '1000', 'image\\16\n.jpg', 5, '5000', 'p016');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(50) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `pmode`, `products`, `amount_paid`) VALUES
(12, 'NIXON OCHICH OJIEM', 'nicksonogm@gmail.com', '+254797599985', '1907', 'cod', 'Apple iPhone X(1), Huawei 10 Pro(1), LG v30(1), MI Note 5 Pro(1)', '245000'),
(13, 'NIXON OCHICH OJIEM', 'nicksonogm@gmail.com', '+10797599985', '1907-40100 Kisumu', 'cod', 'Life line shirt(4), Black Squad shirt(5), Bulls shirt(4), Custom Black Shirt(3), Stock White Shirt(8)', '7620'),
(14, 'NIXON OCHICH OJIEM', 'nicksonogm@gmail.com', '+10797599985', '1907-40100 Kisumu', 'cod', 'Custom Black Shirt(3), Stock White Shirt(8), Bulls shirt(4), Black Squad shirt(5)', '5780'),
(15, 'NIXON OCHICH OJIEM', 'nicksonogm@gmail.com', '+10797599985', '1907-40100 Kisumu', 'cod', 'Black Squad shirt(5), Bulls shirt(4), Custom Black Shirt(3), Stock White Shirt(8)', '5780'),
(16, 'NIXON OCHICH OJIEM', 'nicksonogm@gmail.com', '+10797599985', '1907-40100 Kisumu', 'cod', 'Black Squad shirt(5), Bulls shirt(4), Custom Black Shirt(3), Stock White Shirt(8), Jeans(3)', '7280');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_qty` int(11) NOT NULL DEFAULT 1,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_qty`, `product_image`, `product_code`) VALUES
(1, 'Black Squad shirt', '200', 5, 'image/1.jpg', 'p1000'),
(2, 'Bulls shirt', '130', 4, 'image/2.jpg', 'p1001'),
(3, 'Custom Black Shirt', '300', 3, 'image/3.jpg', 'p1002'),
(4, 'Stock White Shirt', '420', 8, 'image/4.jpg', 'p1003'),
(5, 'Cream/white Shirt', '370', 5, 'image/5.jpg', 'p1004'),
(6, 'Navy blue Shirt', '389', 2, 'image/6.jpg', 'p1005'),
(7, 'Puma shirt', '450', 4, 'image/7.jpg', 'p1006'),
(9, 'Hope shirt', '190', 9, 'image/8.jpeg', 'p1007'),
(10, 'Life line shirt', '460\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 4, 'image\\9.jpg', 'p009'),
(11, 'Jeans', '500', 3, 'image\\10.jpg', 'p010'),
(12, 'Womens\' Orande Official trouser', '700', 4, 'image\\11.jpg', 'p011'),
(13, 'Womens\' official Trouser Light orange', '800', 7, 'image\\12.jpg', 'p012'),
(14, 'Mens\' Official Black trouser', '1000', 3, 'image\\13.jpeg', 'p013'),
(15, 'Sweat pants', '300', 2, 'image\\14.jpeg', 'p014'),
(16, 'Womens\' leather Pants', '1200', 4, 'image\\15.jpg', 'p015'),
(17, 'Mens\' official trouser', '1000', 5, 'image\\16\r\n.jpg', 'p016');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Email` varchar(164) NOT NULL,
  `Username` varchar(164) NOT NULL,
  `Password` varchar(164) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Email`, `Username`, `Password`) VALUES
('johndoe@gmail.com', 'john', 'password'),
('nick@gmail.com', 'nick', '7DHAEdtKR9npAHT'),
('nicksonogm@gmail.com', 'nixonogm', 'XZAPyEMhN3fHPTa');

-- --------------------------------------------------------

--
-- Table structure for table `user_request`
--

CREATE TABLE `user_request` (
  `Email` varchar(164) CHARACTER SET ascii NOT NULL,
  `Comment` varchar(164) CHARACTER SET ascii DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_request`
--

INSERT INTO `user_request` (`Email`, `Comment`) VALUES
('nicksonogm@gmail.com', 'Good UI'),
('nixonojiem@gmail.com', 'Good UI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code_2` (`product_code`),
  ADD KEY `product_code` (`product_code`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `user_request`
--
ALTER TABLE `user_request`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
