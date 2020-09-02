-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2018 at 07:07 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `cust_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `city` varchar(100) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `room_no` varchar(4) NOT NULL,
  PRIMARY KEY (`cust_id`),
  UNIQUE KEY `phone` (`phone`),
  UNIQUE KEY `phone_2` (`phone`),
  UNIQUE KEY `phone_3` (`phone`),
  KEY `room_no` (`room_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `name`, `phone`, `city`, `check_in`, `check_out`, `room_no`) VALUES
(1, 'sakshi', '9304205303', 'patna', '2018-11-25', '2018-11-27', 'SU1'),
(17121, 'kite', '000001', 'Patna', '2018-01-31', '2018-01-31', 'V3'),
(17122, 'sansa', '9490922510', 'hyderabad', '2018-11-25', '2018-11-27', 'SU2'),
(17123, 'Sanskriti', '9440940246', 'Hyderabad', '2018-11-27', '2018-11-30', 'T1'),
(51367, 'kite', '9490922511', 'Patna', '2018-11-26', '2018-11-30', 'S1'),
(102734, 'candy', '94094056789', 'Chennai', '2018-11-29', '2018-11-14', 'SU1'),
(205468, 'Devel', '1234567', 'Himachal', '2018-02-20', '2018-03-03', 'S10'),
(410936, 'Palak', '9490926703', 'Gwalior', '2018-11-27', '2018-03-30', 'V1'),
(821872, 'sake', '67543322546', 'Patna', '2018-11-27', '2018-11-30', 'V1');

--
-- Triggers `customer`
--
DROP TRIGGER IF EXISTS `change_status`;
DELIMITER //
CREATE TRIGGER `change_status` BEFORE INSERT ON `customer`
 FOR EACH ROW update room_status 
set status="Booked" 
where room_no=new.room_no
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `food_item` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`food_item`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_item`, `price`) VALUES
('Black Currant', 175),
('Chilly Garlic Rice', 300),
('Chocalate Icecream', 175),
('Club Sandwich', 175),
('Dahi Bhalla', 100),
('Dosa', 400),
('Fruit Punch', 300),
('Fruit Salad Sundae', 200),
('Ginger Fizz', 300),
('Gravy Noddles', 300),
('Grilled Sandwich', 175),
('Hot and Sour Soup', 200),
('Hot Chocolate Fudge', 200),
('Idli', 100),
('Kesar Pistas', 150),
('Kiwi Smoothie', 0),
('Kiwi Smothie', 300),
('Maccroni Hotpot', 300),
('Onion Pizza', 550),
('Pan Fried Noddles', 300),
('Pav Bhaji', 400),
('Pineapple IceCream', 145),
('Plain Cheese Pizza', 500),
('Plain Sandwich', 175),
('Red Sea', 300),
('Super Vegie Pizza', 600),
('Sweet Corn Soup', 200),
('Vada Sambhar', 100),
('Vanilla', 100),
('Veg Augratin', 300),
('Veg Burger', 200),
('Veg Choupsey', 300),
('Veg Fried Rice', 200),
('Veg Hakka Noddles', 200),
('Veg Noddles Soup', 200);

-- --------------------------------------------------------

--
-- Table structure for table `forder`
--

CREATE TABLE IF NOT EXISTS `forder` (
  `cust_id` int(11) NOT NULL,
  `food_item` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`cust_id`,`food_item`),
  KEY `food_item` (`food_item`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forder`
--

INSERT INTO `forder` (`cust_id`, `food_item`, `quantity`) VALUES
(1, 'Dosa', 3),
(1, 'Idli', 2),
(17121, 'Dosa', 3),
(17121, 'Idli', 3),
(17121, 'Pav Bhaji', 2),
(17122, 'Chocalate Icecream', 2),
(17122, 'Pav Bhaji', 3),
(17123, 'Black Currant', 3),
(17123, 'Chocalate Icecream', 5),
(17123, 'Vanilla', 3),
(51367, 'Black Currant', 3),
(51367, 'Ginger Fizz', 3),
(102734, 'Black Currant', 1),
(102734, 'Onion Pizza', 2),
(205468, 'Dosa', 2),
(205468, 'Onion Pizza', 2),
(410936, 'Dosa', 2),
(410936, 'Pav Bhaji', 4);

-- --------------------------------------------------------

--
-- Table structure for table `room_cost`
--

CREATE TABLE IF NOT EXISTS `room_cost` (
  `type` varchar(10) NOT NULL,
  `cost` int(11) NOT NULL,
  PRIMARY KEY (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_cost`
--

INSERT INTO `room_cost` (`type`, `cost`) VALUES
('Single', 20000),
('Suite', 60000),
('Twin', 25000),
('Villa', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `room_status`
--

CREATE TABLE IF NOT EXISTS `room_status` (
  `room_no` varchar(5) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`room_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_status`
--

INSERT INTO `room_status` (`room_no`, `status`) VALUES
('S1', 'Booked'),
('S10', 'Booked'),
('S2', 'Available'),
('S3', 'Available'),
('S4', 'Available'),
('S5', 'Available'),
('S6', 'Available'),
('S7', 'Available'),
('S8', 'Available'),
('S9', 'Available'),
('SU1', 'Available'),
('SU2', 'Available'),
('SU3', 'Available'),
('SU4', 'Available'),
('SU5', 'Available'),
('T1', 'Booked'),
('T2', 'Available'),
('T3', 'Available'),
('T4', 'Available'),
('T5', 'Available'),
('T6', 'Available'),
('T7', 'Available'),
('V1', 'Available'),
('V2', 'Available'),
('V3', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE IF NOT EXISTS `room_type` (
  `room_no` varchar(5) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`room_no`),
  KEY `type` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_type`
--

INSERT INTO `room_type` (`room_no`, `type`) VALUES
('S1', 'Single'),
('S10', 'Single'),
('S2', 'Single'),
('S3', 'Single'),
('S4', 'Single'),
('S5', 'Single'),
('S6', 'Single'),
('S7', 'Single'),
('S8', 'Single'),
('S9', 'Single'),
('SU1', 'Suite'),
('SU2', 'Suite'),
('SU3', 'Suite'),
('SU4', 'Suite'),
('SU5', 'Suite'),
('T1', 'Twin'),
('T2', 'Twin'),
('T3', 'Twin'),
('T4', 'Twin'),
('T5', 'Twin'),
('T6', 'Twin'),
('T7', 'Twin'),
('V1', 'Villa'),
('V2', 'Villa'),
('V3', 'Villa');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `city` varchar(10) NOT NULL,
  `salary` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `name`, `phone`, `city`, `salary`, `start_date`, `end_date`) VALUES
(1200, 'Kevin', '94909445621', 'Hyderabad ', 1500, '2017-11-27', '2018-11-27'),
(1201, 'Gyen', '9490956734', 'Chennai', 1200, '2017-11-27', '2018-11-27'),
(1202, 'Ben', '9491256704', 'Bombay ', 1200, '2017-12-27', '2018-12-27'),
(1203, 'Lalita', '9491782345', 'Chennai ', 1400, '2017-12-27', '2018-12-27'),
(1204, 'Akansha', '9491736547', 'Delhi ', 1400, '2018-01-27', '2018-12-27'),
(1209, 'Divya', '9490900006', 'Bihar ', 1450, '2017-11-28', '2024-01-29'),
(1213, 'Sai', '9220136547', 'Haryana ', 1600, '2018-01-31', '2025-12-31'),
(1215, 'Manish', '9000136547', 'Delhi ', 1400, '2018-01-31', '2018-12-27'),
(1219, 'Honey', '9220130000', 'Himachal ', 1600, '2018-04-01', '2025-12-31');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`room_no`) REFERENCES `room_type` (`room_no`);

--
-- Constraints for table `forder`
--
ALTER TABLE `forder`
  ADD CONSTRAINT `forder_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`),
  ADD CONSTRAINT `forder_ibfk_2` FOREIGN KEY (`food_item`) REFERENCES `food` (`food_item`);

--
-- Constraints for table `room_status`
--
ALTER TABLE `room_status`
  ADD CONSTRAINT `room_status_ibfk_1` FOREIGN KEY (`room_no`) REFERENCES `room_type` (`room_no`);

--
-- Constraints for table `room_type`
--
ALTER TABLE `room_type`
  ADD CONSTRAINT `room_type_ibfk_1` FOREIGN KEY (`type`) REFERENCES `room_cost` (`type`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
