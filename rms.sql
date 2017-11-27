-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 27, 2017 at 07:20 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.0.24

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

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `random` ()  MODIFIES SQL DATA
BEGIN
DECLARE C_QUANTITY INTEGER DEFAULT 0;
DECLARE C_PRICE DECIMAL DEFAULT 0;
DECLARE C_FOODID INTEGER;
DECLARE C_TOTALPRICE DECIMAL DEFAULT 0;
DECLARE DONE INT DEFAULT FALSE;

DECLARE GET_TOTAL_PRICE CURSOR FOR
SELECT food_id,price,quantity FROM food,orders
WHERE food.foodid = orders.food_id
and total_price is NULL for UPDATE;
DECLARE CONTINUE HANDLER for NOT FOUND SET DONE=TRUE;

OPEN GET_TOTAL_PRICE;
MYLOOP:
LOOP
  FETCH GET_TOTAL_PRICE INTO C_FOODID,C_PRICE,C_QUANTITY;
  SET C_TOTALPRICE = C_QUANTITY * C_PRICE;
  IF DONE THEN LEAVE MYLOOP;
  END IF;
  UPDATE ORDERS SET total_price = C_TOTALPRICE WHERE food_id = C_FOODID;
  
  END LOOP;
  CLOSE GET_TOTAL_PRICE;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin_audit`
--

CREATE TABLE `admin_audit` (
  `empid` varchar(10) NOT NULL,
  `timestamp_of_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `action` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_audit`
--

INSERT INTO `admin_audit` (`empid`, `timestamp_of_update`, `action`) VALUES
('1', '2017-11-21 15:36:02', 'update action performed'),
('1', '2017-11-21 15:36:49', 'update action performed'),
('1', '2017-11-24 10:08:58', 'update action performed'),
('100', '2017-11-21 15:36:56', 'update action performed'),
('100', '2017-11-24 03:38:37', 'assigned for delivery/FREE'),
('100', '2017-11-24 03:38:57', 'assigned for delivery/FREE'),
('100', '2017-11-24 03:55:48', 'assigned for delivery/FREE'),
('12', '2017-11-21 15:37:00', 'update action performed'),
('12', '2017-11-21 15:37:09', 'assigned for delivery'),
('12', '2017-11-21 15:37:31', 'update action performed'),
('12', '2017-11-21 15:39:26', 'update action performed'),
('12', '2017-11-22 07:22:12', 'update action performed'),
('12', '2017-11-22 07:22:22', 'update action performed'),
('120', '2017-11-21 15:14:14', 'inserted a new employee'),
('122', '2017-11-21 15:10:37', 'assigned for delivery'),
('122', '2017-11-24 07:42:10', 'update action performed'),
('122', '2017-11-24 08:23:44', 'update action performed'),
('2', '2017-11-21 15:39:15', 'assigned for delivery'),
('2', '2017-11-24 07:24:57', 'assigned for delivery/FREE'),
('2', '2017-11-24 07:25:23', 'update action performed'),
('2', '2017-11-24 07:32:04', 'update action performed'),
('2', '2017-11-24 07:33:31', 'assigned for delivery/FREE'),
('2', '2017-11-24 07:34:34', 'assigned for delivery/FREE'),
('2', '2017-11-24 07:34:48', 'update action performed'),
('2', '2017-11-24 08:23:42', 'update action performed'),
('20', '2017-11-21 14:52:17', 'update action performed'),
('20', '2017-11-22 06:55:26', 'update action performed'),
('20', '2017-11-22 07:21:34', 'update action performed'),
('20', '2017-11-24 04:01:11', 'assigned for delivery/FREE'),
('20', '2017-11-24 07:24:47', 'update action performed'),
('20', '2017-11-24 07:32:07', 'update action performed'),
('20', '2017-11-24 07:37:19', 'assigned for delivery/FREE'),
('20', '2017-11-24 07:37:32', 'update action performed'),
('20', '2017-11-24 08:23:39', 'update action performed'),
('211', '2017-11-24 03:59:23', 'assigned for delivery/FREE'),
('211', '2017-11-24 03:59:47', 'update action performed'),
('211', '2017-11-24 07:22:56', 'update action performed'),
('211', '2017-11-24 07:37:39', 'assigned for delivery/FREE'),
('211', '2017-11-24 08:25:04', 'update action performed'),
('23', '2017-11-24 03:39:21', 'assigned for delivery/FREE'),
('23', '2017-11-24 04:01:26', 'assigned for delivery/FREE'),
('23', '2017-11-24 04:01:43', 'update action performed'),
('23', '2017-11-24 07:32:09', 'update action performed'),
('33', '2017-11-24 03:29:23', 'inserted a new employee'),
('33', '2017-11-24 07:23:47', 'assigned for delivery/FREE'),
('33', '2017-11-24 07:24:25', 'update action performed'),
('33', '2017-11-24 07:32:11', 'update action performed');

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
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_phno`, `fname`, `lname`, `address`, `city`, `email`, `password`) VALUES
('67775', 'sharon', 'leo', 'l305', 'Bangalore Urban Dist', 'rheasanjan@gmail.com', 'sharon'),
('8888', 'rosy', 'singh', '223', 'blr', 'rheasanjan@gmail.com', 'rosy'),
('9036434718', 'rhea', 'sanjan', 'banglalore', 'Bangalore Urban Dist', 'drewrhea@gmail.com', 'rhea'),
('993344555', 'Raj', 'Kumar', 'k800', 'Bangalore Urban Dist', 'drewrraj@gmail.com', 'rajkumar'),
('9999', 'winny', 'mari', 'l305', 'Bangalore Urban Dist', 'winnyrhea@gmail.com', 'winny');

-- --------------------------------------------------------

--
-- Table structure for table `delivers`
--

CREATE TABLE `delivers` (
  `cust_phno` varchar(10) NOT NULL,
  `empid` varchar(10) NOT NULL,
  `no_of_items` int(11) NOT NULL,
  `bill` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivers`
--

INSERT INTO `delivers` (`cust_phno`, `empid`, `no_of_items`, `bill`) VALUES
('9036434718', '2', 1, '400'),
('9036434718', '20', 1, '400'),
('9036434718', '211', 1, '400');

--
-- Triggers `delivers`
--
DELIMITER $$
CREATE TRIGGER `deliverTrigger` BEFORE INSERT ON `delivers` FOR EACH ROW Insert into admin_audit
set action= "assigned for delivery/FREE",
empid = new.empid
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `emp_status` AFTER INSERT ON `delivers` FOR EACH ROW update employee
set status = 'busy'
where empid = new.empid
$$
DELIMITER ;

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
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empid`, `fname`, `lname`, `phno`, `dob`, `address`, `email`, `salary`, `status`) VALUES
('1', 'rhea', 'sanjan', '903643718', '2017-11-01', 'Bangalore', 'drewrhea@gmail.com', '50000', 'available'),
('100', 'sharon', 'leo', '900000', '2017-11-02', 'l305', 'drewrhea@gmail.com', '5000', 'available'),
('12', 'rosy', 'balaji', '9036434718', '2017-11-01', 'Bangalore', 'drewrhea@gmail.com', '33344', 'available'),
('120', 'prajwal', 'reddy', '77775555', '2017-11-01', 'rrrr', 'drewrhea@gmail.com', '45000', 'available'),
('122', '444', 'ttg', 'df', '2017-11-03', 'dfds', 'drewrhea@gmail.com', '88', 'available'),
('2', 'sharon', 'leo', '9036434718', '2017-11-01', 'Bangalore', 'rheasanjan@gmail.com', '5666', 'available'),
('20', 'balaji', 'singh', '90', '2017-11-07', 'l305', 'drewrhea@gmail.com', '80000', 'available'),
('211', 'winny', 'mari', '9000', '2017-11-01', 'lrb', 'winnyrhea@gmail.com', '333', 'busy'),
('23', 'varsha', 'reddy', '7777', '2017-11-08', 'ttt', 'rheasanjan@gmail.com', '5555', 'available'),
('33', 'Raj ', 'Kumar', '66677', '2016-11-09', 'Bangalore', 'rajkumar@gmail.com', '6000', 'available');

--
-- Triggers `employee`
--
DELIMITER $$
CREATE TRIGGER `insertTrigger` AFTER INSERT ON `employee` FOR EACH ROW Insert into admin_audit
set action="inserted a new employee",
empid= new.empid
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_action` AFTER UPDATE ON `employee` FOR EACH ROW INSERT INTO admin_audit
set action="update action performed",
empid = old.empid
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `foodid` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`foodid`, `name`, `price`) VALUES
('1', 'Gobi Manchurian', '50'),
('10', 'Butter Chicken Masala', '120'),
('11', 'Chicken Biriyani', '110'),
('12', 'Mutton Biriyani', '150'),
('13', 'Gulab Jamun', '30'),
('14', 'Fruit Salad with icecream', '70'),
('15', 'Icecream (1 scoop)', '40'),
('2', 'Paneer Manchurian', '70'),
('3', 'Paneer Butter Masala', '100'),
('4', 'Palak Paneer', '100'),
('5', 'Dal Fry', '60'),
('6', 'Dal Tadka', '70'),
('7', 'Chicken Manchurian', '100'),
('8', 'Honey Chicken', '120'),
('9', 'Chicken Kebab', '50');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `cust_phno` varchar(10) NOT NULL,
  `food_id` varchar(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` decimal(20,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`cust_phno`, `food_id`, `quantity`, `total_price`) VALUES
('9036434718', '4', 4, '400');

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `tableid` varchar(5) NOT NULL,
  `strength` int(11) NOT NULL,
  `timeslot` varchar(10) NOT NULL,
  `cust_phno` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`tableid`, `strength`, `timeslot`, `cust_phno`) VALUES
('10', 4, 'dinner1', '9036434718'),
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
('22', 8, 'dinner1', '9999'),
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
('8', 4, 'lunch2', '9036434718'),
('9', 4, 'lunch3', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_audit`
--
ALTER TABLE `admin_audit`
  ADD PRIMARY KEY (`empid`,`timestamp_of_update`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_phno`);

--
-- Indexes for table `delivers`
--
ALTER TABLE `delivers`
  ADD PRIMARY KEY (`cust_phno`,`empid`),
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
  ADD CONSTRAINT `delivers_ibfk_1` FOREIGN KEY (`empid`) REFERENCES `employee` (`empid`),
  ADD CONSTRAINT `delivers_ibfk_2` FOREIGN KEY (`cust_phno`) REFERENCES `customer` (`cust_phno`);

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
