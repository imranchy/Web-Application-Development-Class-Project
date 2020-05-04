-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2018 at 06:08 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esheba`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE `order_info` (
  `o_id` int(11) NOT NULL,
  `client_name` varchar(100) NOT NULL,
  `client_address` varchar(200) NOT NULL,
  `phone` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `t_id` int(100) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_info`
--

INSERT INTO `order_info` (`o_id`, `client_name`, `client_address`, `phone`, `type`, `t_id`, `price`) VALUES
(1, 'Dipto', 'Unknown', 2147483647, '1224343', 0, 123),
(2, 'Paul', 'france', 2147483647, '', 2147483647, 123),
(3, 'Paul', '', 0, '', 0, 0),
(4, 'Dipto', '', 0, '', 0, 0),
(5, 'Paul', '', 2147483647, '', 0, 11),
(6, 'Dipto', 'Dhaka', 2147483647, 'payment', 0, 0),
(7, 'Paul', 'france', 2147483647, 'bkash', 122344, 111),
(8, 'Paul', 'france', 2147483647, 'bkash', 1112221, 2),
(9, 'Paul', 'france', 2147483647, 'Rocket', 12443234, 117);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_image` varchar(50) NOT NULL,
  `p_details` varchar(100) NOT NULL,
  `p_actPrice` int(50) DEFAULT NULL,
  `p_sellingPrice` int(50) DEFAULT NULL,
  `p_availability` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_image`, `p_details`, `p_actPrice`, `p_sellingPrice`, `p_availability`) VALUES
(1, 'Colour Pencils', 'colorpencil.jpg', 'FABER CASTELL Combo Pack of Two 75 mm Wax Crayons - 24Pcs - Multicolor\r\n', 118, 140, 1),
(2, 'Eraser', 'eraser.jpg', 'Proyojone Ayojon Fruit Shape Erasers - 4pcs\r\n', 15, 30, 1),
(3, 'Sharpner', 'sharpner.jpg', 'FABER CASTELL FC Econ Sharpener - 12Pcs - Multicolor\r\n', 112, 150, 1),
(4, 'Binding Clip', 'bindingclip.jpg', 'Binding Clip - 51mm - 12Pcs - Black\r\n', 120, 150, 0),
(5, 'Pencil', 'pencil.jpg', 'XY-399 Ben 10 Alien Force Children\'s Pencils. 6 pieces in a box.', 90, 117, 1),
(6, 'Calculator', 'calculator.jpg', 'Casio FX-100MS Black Scientific Calculator\r\n', 112, 150, 0),
(7, 'Geometry Box', 'gbox.jpg', 'Max Geometry Box - Silver single box', 50, 80, 0),
(8, 'Pencil Box', 'pencilbox.jpg', 'Bismillah Stationary Supply Captain America Pencil Box - Blue\r\n', 180, 250, 1),
(9, 'Pen', 'pen.jpg', 'Shahin Stationary Hello Kitty 6 in 1 Colour Pen - 4pcs\r\n', 70, 90, 1),
(10, 'Ruler', 'ruler.jpg', 'Zinix Soft Ruler No.RL381 - Transparent (4pcs)\r\n', 95, 120, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `f_name` varchar(10) NOT NULL,
  `l_name` varchar(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` varchar(200) NOT NULL,
  `e_mail` varchar(100) NOT NULL,
  `u_type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `f_name`, `l_name`, `username`, `password`, `phone`, `address`, `e_mail`, `u_type`) VALUES
(1, 'John', 'Smith', 'John', '1234', '1123442332', 'ddfdfsa', 'asdfasdf', 1),
(2, 'Imran Chow', 'Dipto', 'dipto99', 'Angryman@1', '22411111111', 'Dhaka, Bangladesh', 'dip@gmail.com', 0),
(3, 'Zlatan', 'Ibrahimovi', 'Zlat10', '', '22411111111', 'france', 'okiboi', 0),
(4, 'Zlatan', 'Ibrahimovi', 'Zlat10', '', '22411111111', 'france', 'qw', 0),
(5, 'Zlatan', 'Ibrahimovi', 'John', '', '22411111111', 'france', '12', 0),
(6, 'Zlatan', 'Ibrahimovi', 'John', '', '22411111111', 'france', '12@gmail.com', 0),
(7, 'Zlatan', 'Ibrahimovi', 'John', 'Angryman1', '22411111111', 'france', '12@gmail.com', 0),
(8, 'Zlatan', 'Ibrahimovi', 'John', '', '22411111111', 'france', '12@gmail.com', 0),
(9, 'Zlatan', 'Ibrahimovi', 'John', '', '22411111111', 'france', '12@gmail.com', 0),
(10, 'Zlatan', 'Ibrahimovi', 'John', '', '22411111111', 'france', '12@gmail.com', 0),
(11, 'Zlatan', 'Ibrahimovi', 'John', 'Angryman@1', '22411111111', 'france', '12@gmail.com', 0),
(12, 'Zlatan', 'Ibrahimovi', 'John', 'Angryman@1', '22411111111', 'france', '12@gmail.com', 0),
(13, 'Diogo', 'Dalot', 'digodalot', 'Zlatan@123', '43222222222', 'Portugal', 'ddalot@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `order_info`
--
ALTER TABLE `order_info`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_info`
--
ALTER TABLE `order_info`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
