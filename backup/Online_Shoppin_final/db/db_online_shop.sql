-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2017 at 06:13 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_online_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(100) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(2, 'aziz', '', '123'),
(3, 'usama', 'usama@gmail.com', '111'),
(4, 'hafiz', '', '123'),
(5, 'saqibjaveed', '', '123456'),
(6, 'nabeel', '', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE IF NOT EXISTS `tbl_cart` (
  `cart_id` int(100) NOT NULL,
  `cart_session_id` varchar(255) NOT NULL,
  `cart_pro_id` int(100) NOT NULL,
  `cart_pro_qty` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `cart_session_id`, `cart_pro_id`, `cart_pro_qty`) VALUES
(8, '08j1igqjmi6t470khuhgsp1n06', 50, 1),
(9, 'mm1a4miuqgevliravf74f4j5f3', 47, 1),
(10, '', 52, 1),
(11, '', 55, 5),
(12, '', 56, 1),
(13, '', 57, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE IF NOT EXISTS `tbl_categories` (
  `cat_id` int(100) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `cat_img` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`cat_id`, `cat_name`, `cat_img`) VALUES
(1, 'BAGS', '21-02-2017574logo.jpg'),
(2, 'COSMATICS', '21-02-2017787logo.jpg'),
(3, 'JEWELRY', '21-02-20178061.jpg'),
(4, 'GARMENTS', '21-02-20174862.jpg'),
(5, 'SHOES', '21-02-2017746.jpg'),
(6, ' WATCHES', '13311.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cus_registeration`
--

CREATE TABLE IF NOT EXISTS `tbl_cus_registeration` (
  `cus_id` int(100) NOT NULL,
  `cus_name` varchar(100) NOT NULL,
  `cus_email` varchar(100) NOT NULL,
  `cus_contact` varchar(50) NOT NULL,
  `cus_password` varchar(100) NOT NULL,
  `cus_img` varchar(255) NOT NULL,
  `cus_city` varchar(100) NOT NULL,
  `cus_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_deal`
--

CREATE TABLE IF NOT EXISTS `tbl_deal` (
  `deal_id` int(100) NOT NULL,
  `deal_cus_id` int(100) NOT NULL,
  `deal_start_date` date NOT NULL,
  `deal_end_date` date NOT NULL,
  `deal_start_time` varchar(100) NOT NULL,
  `deal_end_time` varchar(100) NOT NULL,
  `deal_total_people` int(100) NOT NULL,
  `deal_people_emails` varchar(255) NOT NULL,
  `deal_status` enum('done','not done') NOT NULL,
  `deal_location` varchar(200) NOT NULL,
  `deal_comment` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_deal`
--

INSERT INTO `tbl_deal` (`deal_id`, `deal_cus_id`, `deal_start_date`, `deal_end_date`, `deal_start_time`, `deal_end_time`, `deal_total_people`, `deal_people_emails`, `deal_status`, `deal_location`, `deal_comment`) VALUES
(1, 1, '2016-05-03', '2016-05-04', '16:15', '01:00', 7, 'aziz,khan,free', 'done', 'ape', 'zaa'),
(2, 1, '2016-05-03', '2016-05-04', '16:15', '01:00', 7, 'aziz,khan,free', 'done', 'ape', 'zaa'),
(3, 1, '0000-00-00', '0000-00-00', '', '', 0, '', 'done', '', ''),
(4, 1, '0000-00-00', '0000-00-00', '', '', 0, '', 'done', '', ''),
(5, 1, '0000-00-00', '0000-00-00', '', '', 0, '', 'done', '', ''),
(6, 1, '0000-00-00', '0000-00-00', '', '', 0, '', 'done', '', ''),
(7, 1, '0000-00-00', '0000-00-00', '', '', 0, '', 'done', '', ''),
(8, 1, '0000-00-00', '0000-00-00', '', '', 0, '', 'done', '', ''),
(9, 1, '0000-00-00', '0000-00-00', '', '', 0, '', 'done', '', ''),
(10, 1, '0000-00-00', '0000-00-00', '', '', 0, '', 'done', '', ''),
(11, 1, '0000-00-00', '0000-00-00', '', '', 0, '', 'done', '', ''),
(12, 1, '0000-00-00', '0000-00-00', '', '', 0, '', 'done', '', ''),
(13, 1, '0000-00-00', '0000-00-00', '', '', 0, '', 'done', '', ''),
(14, 1, '0000-00-00', '0000-00-00', '', '', 0, '', 'done', '', ''),
(15, 1, '0000-00-00', '0000-00-00', '', '', 0, '', 'done', '', ''),
(16, 1, '0000-00-00', '0000-00-00', '', '', 0, '', 'done', '', ''),
(17, 1, '2016-05-03', '2016-05-04', '01:58', '23:01', 7, 'aziz', 'done', 'azaz', 'azaza'),
(18, 1, '0000-00-00', '0000-00-00', '', '', 0, '', 'done', '', ''),
(19, 1, '0000-00-00', '0000-00-00', '', '', 0, '', 'done', '', ''),
(20, 1, '0000-00-00', '0000-00-00', '', '', 0, '', 'done', '', ''),
(21, 1, '0000-00-00', '0000-00-00', '', '', 0, '', 'done', '', ''),
(22, 1, '0000-00-00', '0000-00-00', '', '', 0, '', 'done', '', ''),
(23, 1, '0000-00-00', '0000-00-00', '', '', 0, '', 'done', '', ''),
(24, 1, '0000-00-00', '0000-00-00', '', '', 0, '', 'done', '', ''),
(25, 1, '0000-00-00', '0000-00-00', '', '', 0, '', 'done', '', ''),
(26, 1, '0000-00-00', '0000-00-00', '', '', 0, '', 'done', '', ''),
(27, 1, '0000-00-00', '0000-00-00', '', '', 0, '', 'done', '', ''),
(28, 1, '0000-00-00', '0000-00-00', '', '', 0, '', 'done', '', ''),
(29, 1, '0000-00-00', '0000-00-00', '', '', 0, '', 'done', '', ''),
(30, 1, '0000-00-00', '0000-00-00', '', '', 0, '', 'done', '', ''),
(31, 1, '0000-00-00', '0000-00-00', '', '', 0, '', 'done', '', ''),
(32, 1, '0000-00-00', '0000-00-00', '', '', 0, '', 'done', '', ''),
(33, 1, '0000-00-00', '0000-00-00', '', '', 0, '', 'done', '', ''),
(34, 1, '0000-00-00', '0000-00-00', '', '', 0, '', 'done', '', ''),
(35, 1, '2016-05-04', '2016-05-05', '23:56', '01:01', 45, '', 'done', 'Chowk foara', ''),
(36, 1, '0000-00-00', '0000-00-00', '', '', 0, '', 'done', '', ''),
(37, 1, '0000-00-00', '0000-00-00', '', '', 0, '', 'done', '', ''),
(38, 1, '0000-00-00', '0000-00-00', '', '', 0, '', 'done', '', ''),
(39, 1, '0000-00-00', '0000-00-00', '', '', 0, '', 'done', '', ''),
(40, 1, '0000-00-00', '0000-00-00', '', '', 0, '', 'done', '', ''),
(41, 1, '0000-00-00', '0000-00-00', '', '', 0, '', 'done', '', ''),
(42, 1, '2016-05-04', '2016-05-04', '12:57', '11:00', 5, 'sf', 'done', ' bwp', 'wdsd'),
(43, 1, '2016-05-03', '2016-05-03', '13:00', '10:57', 4, 'aziz', 'done', 'chowk fowra', 'ape'),
(44, 1, '0000-00-00', '0000-00-00', '', '', 0, '', 'done', '', ''),
(45, 1, '0000-00-00', '0000-00-00', '', '', 0, '', 'done', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE IF NOT EXISTS `tbl_order` (
  `ord_id` int(100) NOT NULL,
  `pro_name` varchar(100) NOT NULL,
  `ord_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pro_qty` varchar(100) NOT NULL,
  `pro_price` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`ord_id`, `pro_name`, `ord_date`, `pro_qty`, `pro_price`) VALUES
(21, 'MAKEUP KIT', '2017-02-21 18:43:24', '1', 200),
(22, 'BLACK T=SHIRT WITH JEANS', '2017-02-21 18:43:24', '1', 100),
(23, 'ROOSO LIPSTICK', '2017-02-21 18:43:24', '1', 80),
(24, 'MAKEUP KIT', '2017-02-22 13:46:47', '1', 200),
(25, 'MAKEUP BURCHES', '2017-02-22 13:46:47', '1', 30),
(26, 'LADIES BAG', '2017-02-22 14:00:28', '1', 500),
(27, 'NYN LIPSTIC', '2017-02-23 05:12:46', '1', 50),
(28, 'ROOSO LIPSTICK', '2017-02-23 05:12:46', '1', 80),
(29, 'MAKEUP KIT', '2017-02-23 05:12:46', '1', 200);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_detail`
--

CREATE TABLE IF NOT EXISTS `tbl_order_detail` (
  `ord_detail_id` int(100) NOT NULL,
  `ord_pro_id` int(100) NOT NULL,
  `ord_id` int(100) NOT NULL,
  `ord_pro_qty` int(100) NOT NULL,
  `ord_pro_price` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order_detail`
--

INSERT INTO `tbl_order_detail` (`ord_detail_id`, `ord_pro_id`, `ord_id`, `ord_pro_qty`, `ord_pro_price`) VALUES
(1, 47, 1, 1, 30),
(2, 44, 1, 1, 60),
(3, 45, 2, 4, 50),
(4, 44, 2, 1, 60),
(5, 48, 3, 1, 70),
(6, 44, 3, 1, 60),
(7, 44, 4, 1, 60),
(8, 45, 4, 1, 50),
(9, 44, 6, 1, 60),
(10, 43, 6, 1, 50),
(11, 45, 7, 1, 50),
(12, 48, 7, 1, 70),
(13, 48, 8, 5, 70),
(14, 49, 8, 1, 80),
(15, 48, 9, 1, 70),
(16, 49, 9, 4, 80),
(17, 49, 10, 1, 80),
(18, 48, 11, 3, 70),
(19, 47, 12, 3, 30),
(20, 46, 12, 1, 100),
(21, 44, 13, 1, 60),
(22, 46, 13, 1, 100),
(23, 47, 14, 3, 30),
(24, 46, 14, 1, 100),
(25, 47, 15, 1, 30),
(26, 47, 16, 1, 30),
(27, 46, 16, 1, 100),
(28, 47, 17, 1, 30),
(29, 46, 18, 1, 100),
(30, 44, 19, 3, 60),
(31, 47, 20, 1, 30),
(32, 46, 20, 1, 100);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE IF NOT EXISTS `tbl_products` (
  `pro_id` int(100) NOT NULL,
  `pro_name` varchar(100) NOT NULL,
  `pro_catagore` varchar(100) NOT NULL,
  `pro_img` varchar(255) NOT NULL,
  `pro_price` int(100) NOT NULL,
  `pro_keyword` varchar(100) NOT NULL,
  `pro_status` enum('unavailable','available') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`pro_id`, `pro_name`, `pro_catagore`, `pro_img`, `pro_price`, `pro_keyword`, `pro_status`) VALUES
(60, 'NYN LIPSTIC', '2', '21-02-20177751.jpg', 50, '', 'available'),
(61, 'ROOSO LIPSTICK', '2', '21-02-20177622.jpeg', 80, '', 'available'),
(62, 'MAKEUP KIT', '2', '21-02-20178415.jpg', 200, '', 'available'),
(63, 'MAKEUP BURCHES', '2', '21-02-201781216.jpg', 30, '', 'available'),
(64, 'BLACK T=SHIRT WITH JEANS', '4', '21-02-20171351.jpg', 100, '', 'available'),
(65, 'LONG BLUE', '4', '21-02-201776416.jpg', 120, '', 'available'),
(66, 'LIPATICK3', '2', '22-02-20173436.jpg', 400, '', 'available'),
(67, 'LADIES BAG', '1', '22-02-20175441.jpg', 500, '', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_superviser`
--

CREATE TABLE IF NOT EXISTS `tbl_superviser` (
  `super_id` int(50) NOT NULL,
  `super_name` varchar(50) NOT NULL,
  `super_email` varchar(50) NOT NULL,
  `super_password` varchar(50) NOT NULL,
  `super_address` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_superviser`
--

INSERT INTO `tbl_superviser` (`super_id`, `super_name`, `super_email`, `super_password`, `super_address`) VALUES
(1, 'aziz', 'aziz@gmail.com', '333', 'ape'),
(2, 'usman', 'usman#gmail.com', '444', 'bwp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_cus_registeration`
--
ALTER TABLE `tbl_cus_registeration`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `tbl_deal`
--
ALTER TABLE `tbl_deal`
  ADD PRIMARY KEY (`deal_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`ord_id`);

--
-- Indexes for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD PRIMARY KEY (`ord_detail_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `tbl_superviser`
--
ALTER TABLE `tbl_superviser`
  ADD PRIMARY KEY (`super_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_cus_registeration`
--
ALTER TABLE `tbl_cus_registeration`
  MODIFY `cus_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_deal`
--
ALTER TABLE `tbl_deal`
  MODIFY `deal_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `ord_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  MODIFY `ord_detail_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `pro_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `tbl_superviser`
--
ALTER TABLE `tbl_superviser`
  MODIFY `super_id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
