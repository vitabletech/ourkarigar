-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2019 at 06:49 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_account`
--

-- --------------------------------------------------------

--
-- Table structure for table `costumers`
--

CREATE TABLE `costumers` (
  `cos_id` int(10) NOT NULL,
  `cos_name` text NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `worker_type` text NOT NULL,
  `p_status` text NOT NULL,
  `cos_address` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `costumers`
--

INSERT INTO `costumers` (`cos_id`, `cos_name`, `mobile`, `worker_type`, `p_status`, `cos_address`, `date`) VALUES
(20, 'Sanjay bajpuriya', '9111001883', 'r.o services', 'due', 'NEar city center', '2019-07-13 04:00:35'),
(21, 'Himanshu sharma', '9425772853', 'electican', 'due', 'smadiya colony', '2019-07-13 04:03:42'),
(22, 'Aditya Birla', '7506099913', 'electican', 'due', 'Orion tower at city center gwalior', '2019-07-13 04:09:16'),
(23, 'Soniya', '9340897831', 'water gyser reapring', 'due', 'gwalior', '2019-07-13 04:14:32'),
(74, 'Jeetu', '887558822', 'electican', 'due', 'near pholbag', '2019-07-13 03:37:13');

-- --------------------------------------------------------

--
-- Table structure for table `entery`
--

CREATE TABLE `entery` (
  `entery_id` int(50) NOT NULL,
  `cos_id` int(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `work` text NOT NULL,
  `wr_desc` text NOT NULL,
  `price` int(20) NOT NULL,
  `paid_amount` varchar(10) NOT NULL,
  `assign_to` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entery`
--

INSERT INTO `entery` (`entery_id`, `cos_id`, `date`, `work`, `wr_desc`, `price`, `paid_amount`, `assign_to`) VALUES
(45, 22, '2019-07-13 04:28:10', 'electican', 'selling light fitting', 2460, '2460', 'Balles'),
(46, 74, '2019-07-13 04:29:40', 'Electican', 'Require a electrican for reparing Seling fan and light Fiting', 1000, '1000', 'Balles'),
(47, 23, '2019-07-13 04:32:11', 'Water Gyser', 'Water Gyser', 1800, '1800', 'Satendra parihar'),
(48, 21, '2019-07-13 04:33:40', 'Electican', 'For MC fitting', 150, '150', 'Balles'),
(49, 21, '2019-07-13 04:34:03', 'Electican', 'Water Gyser fitting', 800, '800', 'Satendra parihar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `costumers`
--
ALTER TABLE `costumers`
  ADD PRIMARY KEY (`cos_id`);

--
-- Indexes for table `entery`
--
ALTER TABLE `entery`
  ADD PRIMARY KEY (`entery_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `costumers`
--
ALTER TABLE `costumers`
  MODIFY `cos_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `entery`
--
ALTER TABLE `entery`
  MODIFY `entery_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
