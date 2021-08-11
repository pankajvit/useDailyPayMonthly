-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2021 at 12:01 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usedailypaymonthly`
--

-- --------------------------------------------------------

--
-- Table structure for table `custdueamt`
--

CREATE TABLE `custdueamt` (
  `custid` int(255) NOT NULL,
  `dueAmt` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `custdueamt`
--

INSERT INTO `custdueamt` (`custid`, `dueAmt`) VALUES
(17, '0');

-- --------------------------------------------------------

--
-- Table structure for table `customerdb`
--

CREATE TABLE `customerdb` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobileno` varchar(20) NOT NULL,
  `customerGroup` varchar(255) NOT NULL,
  `customerProduct` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerdb`
--

INSERT INTO `customerdb` (`id`, `name`, `address`, `mobileno`, `customerGroup`, `customerProduct`) VALUES
(10, 'Rajkumar', 'Muncipal Chowk', '99999999', '50', '13,14,16'),
(11, 'Sudhir', 'Nayan Sukh Gali', '9999999', '50', '15'),
(12, 'Kumar Abhi', 'Bara Telpa', '950000000', '46', '10'),
(13, 'Sonu Singh', 'Salempur', '9898982222', '46', '13,15'),
(14, 'S.K Singh', 'Naya Tola', '999999999', '51', '13,14'),
(15, 'Ram Babu Singh', 'Newaji Tola', '99999999', '50', '14'),
(16, 'Raj Kumar Roy', 'Gandhi Chowk', '999999999', '46', '13,15,16,17'),
(17, 'Sagir Akhtar', 'Kathari bagh', '99999999', '50', '13,15');

-- --------------------------------------------------------

--
-- Table structure for table `dailytaskdb`
--

CREATE TABLE `dailytaskdb` (
  `id` int(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `customerid` varchar(255) DEFAULT NULL,
  `totalAmt` varchar(255) DEFAULT NULL,
  `paidAmt` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dailytaskdb`
--

INSERT INTO `dailytaskdb` (`id`, `date`, `customerid`, `totalAmt`, `paidAmt`) VALUES
(1, '2009-08-21 00:00:00', '12', '$120.00', ''),
(2, '2009-08-21 00:00:00', '12', '$120.00', ''),
(3, '2009-08-21 00:00:00', '12', '$120.00', '120'),
(4, '2009-08-21 00:00:00', '13', '$25.00', ''),
(5, '2009-08-21 00:00:00', '10', '$120.00', '60'),
(6, '2009-08-21 00:00:00', '10', '$120.00', '60'),
(7, '2010-08-21 00:00:00', '12', '$190.00', '190'),
(8, '2010-08-21 00:00:00', '16', '$25.00', '25'),
(9, '2010-08-21 00:00:00', '16', '$25.00', '25'),
(10, '2010-08-21 00:00:00', '16', '$25.00', '25'),
(11, '2010-08-21 00:00:00', '16', '$25.00', '25'),
(12, '2010-08-21 00:00:00', '14', '$100.00', '100'),
(13, '2010-08-21 00:00:00', '14', '$100.00', '100'),
(33, '2010-08-21 00:00:00', '17', '100.00', ''),
(34, '2010-08-21 00:00:00', '17', '100.00', '50'),
(35, '2010-08-21 00:00:00', '17', '100.00', '150'),
(36, '2010-08-21 00:00:00', '17', '100.00', '100'),
(37, '2010-08-21 00:00:00', '17', '100.00', '150'),
(38, '2010-08-21 00:00:00', '17', '100.00', '150'),
(39, '2010-08-21 00:00:00', '17', '100.00', ''),
(40, '2010-08-21 00:00:00', '17', '100.00', ''),
(41, '2010-08-21 00:00:00', '17', '100.00', ''),
(42, '2011-08-21 00:00:00', '17', '100.00', ''),
(43, '2011-08-21 00:00:00', '17', '', '100'),
(44, '2011-08-21 00:00:00', '17', '100.00', '150'),
(45, '2011-08-21 00:00:00', '17', '100.00', '50'),
(46, '2011-08-21 00:00:00', '17', '100.00', '80'),
(47, '2011-08-21 00:00:00', '17', '100.00', ''),
(48, '2011-08-21 00:00:00', '17', '100.00', ''),
(49, '2011-08-21 00:00:00', '17', '', '220');

-- --------------------------------------------------------

--
-- Table structure for table `groupdb`
--

CREATE TABLE `groupdb` (
  `id` int(255) NOT NULL,
  `groupName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groupdb`
--

INSERT INTO `groupdb` (`id`, `groupName`) VALUES
(46, 'Naya Tola Grp'),
(50, 'Newaji Tola Grp'),
(51, 'Prabhu Nath Nagar Grp'),
(52, 'Gandhi Chowk');

-- --------------------------------------------------------

--
-- Table structure for table `productdb`
--

CREATE TABLE `productdb` (
  `id` int(10) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productdb`
--

INSERT INTO `productdb` (`id`, `productName`, `price`) VALUES
(13, 'Milk', 20),
(14, 'curd', 100),
(15, 'Paper', 5),
(16, 'Onion', 50),
(17, 'Chilli', 20);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bname` varchar(255) NOT NULL,
  `mobileNo` varchar(10) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `cpassword` varchar(100) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `bname`, `mobileNo`, `email`, `password`, `cpassword`, `token`, `status`) VALUES
(13, 'Pankaj Kumar', 'Rai Enterprises', '6200753817', 'pankajvitmca@gmail.com', '$2y$10$IavZsbmm7x.NHYvMVO53MODwidj8JiG9zw8LzMqMcpJyyeEKAYdz2', '$2y$10$pWSN4D3/dkuDYHqxxvIZjOwUTZ1Hkc2.GUR6XPNPTRT0zKxlUOfRq', '3b22f85756b774fa07bf932ba45b9b', 'active'),
(14, 'pankaj kumar', 'rai enterprises', '9999999999', 'pankajrai1041995@gmail.com', '$2y$10$.IjnxS4fEWQHFoIhN70w/.FPuOdZQzForbyiq1W9P27Jw1sBFEEA6', '$2y$10$nWXpqC/sOkzgODBFVluDs.WsCha8yoLEGSxG/9W5csF7LQPM9cBLC', 'af29790f9fbfea8c8e3cef25f95524', 'inactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `custdueamt`
--
ALTER TABLE `custdueamt`
  ADD PRIMARY KEY (`custid`);

--
-- Indexes for table `customerdb`
--
ALTER TABLE `customerdb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dailytaskdb`
--
ALTER TABLE `dailytaskdb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groupdb`
--
ALTER TABLE `groupdb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productdb`
--
ALTER TABLE `productdb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `custdueamt`
--
ALTER TABLE `custdueamt`
  MODIFY `custid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `customerdb`
--
ALTER TABLE `customerdb`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `dailytaskdb`
--
ALTER TABLE `dailytaskdb`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `groupdb`
--
ALTER TABLE `groupdb`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `productdb`
--
ALTER TABLE `productdb`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
