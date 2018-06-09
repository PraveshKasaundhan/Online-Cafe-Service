-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 09, 2018 at 12:09 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pandadb`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `allcart`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `allcart` ()  MODIFIES SQL DATA
SELECT * FROM cart$$

DROP PROCEDURE IF EXISTS `dropcart`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `dropcart` ()  MODIFIES SQL DATA
TRUNCATE cart$$

DROP PROCEDURE IF EXISTS `salesreset`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `salesreset` ()  NO SQL
UPDATE `sales` SET `unit`=0$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `pid` int(5) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `rate` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `amt` int(10) NOT NULL,
  KEY `fkpid` (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `userid` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `pid` int(5) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `rate` int(10) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `rate`) VALUES
(10, 'fries', 50),
(11, 'taco', 50),
(12, 'sushi', 100),
(13, 'pizza', 100),
(14, 'pasta', 70),
(15, 'burger', 80),
(16, 'hotdog', 80),
(17, 'nachos', 100),
(18, 'sandwich', 50),
(19, 'noodles', 60),
(20, 'water', 10),
(21, 'lime', 20),
(22, 'juice', 30),
(23, 'milkshake', 50),
(24, 'tea', 20),
(25, 'coffee', 50),
(26, 'milk', 20),
(27, 'mocktail', 50),
(28, 'softdrink', 20),
(29, 'cola', 20),
(30, 'oreo', 50),
(31, 'pastry', 50),
(32, 'icecream', 50),
(33, 'brownie', 50),
(34, 'donut', 50),
(35, 'cookie', 50),
(36, 'cupcake', 50),
(37, 'muffin', 50),
(38, 'chocolate', 50),
(39, 'pie', 50);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
CREATE TABLE IF NOT EXISTS `sales` (
  `pid` int(5) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `unit` int(10) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`pid`, `pname`, `unit`) VALUES
(10, 'fries', 0),
(11, 'taco', 0),
(12, 'sushi', 0),
(13, 'pizza', 0),
(14, 'pasta', 0),
(15, 'burger', 0),
(16, 'hotdog', 0),
(17, 'nachos', 0),
(18, 'sandwich', 0),
(19, 'noodles', 0),
(20, 'water', 0),
(21, 'lime', 0),
(22, 'juice', 0),
(23, 'milkshake', 0),
(24, 'tea', 0),
(25, 'coffee', 0),
(26, 'milk', 0),
(27, 'mocktail', 0),
(28, 'softdrink', 0),
(29, 'cola', 0),
(30, 'oreo', 0),
(31, 'pastry', 0),
(32, 'icecream', 0),
(33, 'brownie', 0),
(34, 'donut', 0),
(35, 'cookie', 0),
(36, 'cupcake', 0),
(37, 'muffin', 0),
(38, 'chocolate', 0),
(39, 'pie', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
