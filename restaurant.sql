-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 13, 2017 at 03:24 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_phno` varchar(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `delivers`
--

CREATE TABLE `delivers` (
  `cust_phno` varchar(10) NOT NULL,
  `food_id` varchar(10) NOT NULL,
  `empid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empid` varchar(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `salary` decimal(10,0) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `foodid` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `cust_phno` varchar(10) NOT NULL,
  `food_id` varchar(10) NOT NULL,
  `quantity` int(50) NOT NULL,
  `total_price` decimal(50,10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `tableid` varchar(5) NOT NULL,
  `strength` int(11) NOT NULL,
  `timeslot` varchar(20) NOT NULL,
  `cust_phno` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`tableid`, `strength`, `timeslot`, `cust_phno`) VALUES
('1', 2, 'lunch1', NULL),
('10', 4, 'dinner1', NULL),
('11', 4, 'dinner2', NULL),
('12', 4, 'dinner3', NULL),
('13', 6, 'lunch1', NULL),
('14', 6, 'lunch2', NULL),
('15', 6, 'lunch3', NULL),
('16', 6, 'dinner1', NULL),
('17', 6, 'dinner2', NULL),
('18', 6, 'dinner3', NULL),
('19', 8, 'lunch1', NULL),
('2', 2, 'lunch2', NULL),
('20', 8, 'lunch2', NULL),
('21', 8, 'lunch3', NULL),
('22', 8, 'dinner1', NULL),
('23', 8, 'dinner2', NULL),
('24', 8, 'dinner3', NULL),
('25', 10, 'lunch1', NULL),
('26', 10, 'lunch2', NULL),
('27', 10, 'lunch3', NULL),
('28', 10, 'dinner1', NULL),
('29', 10, 'dinner2', NULL),
('3', 2, 'lunch3', NULL),
('30', 10, 'dinner3', NULL),
('4', 2, 'dinner1', NULL),
('5', 2, 'dinner2', NULL),
('6', 2, 'dinner3', NULL),
('7', 4, 'lunch1', NULL),
('8', 4, 'lunch2', NULL),
('9', 4, 'lunch3', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_phno`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `delivers`
--
ALTER TABLE `delivers`
  ADD PRIMARY KEY (`cust_phno`,`food_id`,`empid`),
  ADD KEY `cust_phno` (`cust_phno`),
  ADD KEY `food_id` (`food_id`),
  ADD KEY `empid` (`empid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`foodid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`cust_phno`,`food_id`),
  ADD KEY `food_id` (`food_id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`tableid`),
  ADD KEY `cust_phno` (`cust_phno`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `delivers`
--
ALTER TABLE `delivers`
  ADD CONSTRAINT `delivers_ibfk_1` FOREIGN KEY (`cust_phno`) REFERENCES `customer` (`cust_phno`) ON UPDATE CASCADE,
  ADD CONSTRAINT `delivers_ibfk_2` FOREIGN KEY (`food_id`) REFERENCES `food` (`foodid`) ON UPDATE CASCADE,
  ADD CONSTRAINT `delivers_ibfk_3` FOREIGN KEY (`empid`) REFERENCES `employee` (`empid`) ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`cust_phno`) REFERENCES `customer` (`cust_phno`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`food_id`) REFERENCES `food` (`foodid`) ON UPDATE CASCADE;

--
-- Constraints for table `tables`
--
ALTER TABLE `tables`
  ADD CONSTRAINT `tables_ibfk_1` FOREIGN KEY (`cust_phno`) REFERENCES `customer` (`cust_phno`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
