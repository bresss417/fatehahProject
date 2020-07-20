-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2020 at 11:18 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `names` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(10) NOT NULL,
  `b_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `names`, `lastname`, `address`, `email`, `phone`, `b_id`) VALUES
(2, 'bree', 'mama', 'pattani', 'bree@gmail.com', 630878045, 14),
(3, 'ff', 'ffff', 'fff', 'bos2@gmail.com', 0, 0),
(4, 'bree', 'mama', 'fghfjfyjyurth', 'bree@gmail.com', 630878045, 44),
(5, 'bree', 'mama', '4/2s,^3', 'bos2@gmail.com', 630878045, 40),
(6, 'bree', 'mama', 'ffff', 'bos2@gmail.com', 11223344, 0),
(7, 'ksgsg', 'kaka', '1/1111', 'bos2@gmail.com', 11223344, 0);

-- --------------------------------------------------------

--
-- Table structure for table `producttb`
--

CREATE TABLE `producttb` (
  `id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producttb`
--

INSERT INTO `producttb` (`id`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Apple MacBook Pro', 399, './upload/1.jpg'),
(2, 'Sony E7 Headphones', 147, './upload/2.jpg'),
(3, 'Sony Xperia Z4', 459, './upload/3.jpg'),
(4, 'Samsung Galaxy A50', 278, './upload/4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` int(20) NOT NULL,
  `b_name` varchar(50) NOT NULL,
  `b_photo` varchar(50) NOT NULL,
  `b_price` int(15) NOT NULL,
  `category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `b_name`, `b_photo`, `b_price`, `category`) VALUES
(36, 'LEVIS 501 BIG E 110 MADE IN USA   SIZE W33 L36', 'img_5e72760e5e25b.jpg', 10900, 'pants'),
(37, 'LEVIS 201 BIG E REPRO 1955 MADE IN USA   SIZE W33 ', 'img_5e727668dda1c.jpg', 9900, 'pants'),
(38, 'LEVIS 201 BIG E DESKTOP MADE IN USA   SIZE W31 L36', 'img_5e7276b56dccb.jpg', 15000, 'pants'),
(40, 'เสื้อวง METALLIC ยุค90’s SIZE อก 20 ยาว 27', 'img_5e727c203c3b8.jpg', 3000, 'shirts'),
(41, 'เสื้อวง GUNS N’ ROSES ยุค90’s SIZE อก 20 ยาว 27', 'img_5e727c3fd0fe3.jpg', 5900, 'shirts'),
(42, 'เสื้อวง ACDC ยุค90’s SIZE อก 20 ยาว 27', 'img_5e727c625ac2c.jpg', 5900, 'shirts'),
(43, 'เสื้อวง NIRVANA ยุค90’s SIZE อก 20 ยาว 27', 'img_5e727cf1d4c17.jpg', 5900, 'shirts'),
(44, 'JACK PUCELL แดง เบอร์ 7', 'img_5e727d5a5cddd.jpg', 6999, 'blow'),
(45, 'JACK PUCELL ดำ เบอร์ 8', 'img_5e727d87ef886.jpg', 4500, 'blow'),
(46, 'JACK PUCELL กรม เบอร์ 9', 'img_5e727dd5ed97c.jpg', 3000, 'blow'),
(47, 'JACK PUCELL กรม เบอร์ 10', 'img_5e727dec221b0.jpg', 9900, 'blow'),
(48, 'FREITAG HAWAII น้ำเงิน', 'img_5e727e6620e93.jpg', 5900, 'shoes'),
(49, 'FREITAG LEZEE เหลือง', 'img_5e727e9677db0.jpg', 3000, 'shoes'),
(50, 'FREITAG HAWAII ขาวแถบแดง', 'img_5e727eacba52a.jpg', 10900, 'shoes'),
(51, 'FREITAG HAWAII แดง', 'img_5e727ed997aa3.jpg', 99, 'shoes'),
(52, 'levis', '', 4200, 'pants'),
(53, 'levis 501 xx', 'img_5e72fa0ed8f2d.jpg', 4200, 'pants');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passwd` int(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `name`, `lastname`, `email`, `passwd`, `status`) VALUES
(3, 'ilham', 'nasea', 'admin@test.com', 123456, 'admin'),
(5, 'บอส', 'ฮาฮา', 'bos2@gmail.com', 123456, 'user'),
(6, 'liver', 'pool', 'liver@gmail.com', 123456, 'user'),
(7, 'liver', 'pool', 'lever@gmail.com', 123456, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producttb`
--
ALTER TABLE `producttb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `producttb`
--
ALTER TABLE `producttb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
