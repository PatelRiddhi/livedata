-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 06, 2018 at 04:16 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `livedata`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(70) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=113 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `name`, `category`, `price`, `discount`) VALUES
(86, 'lakhine', 'FNBGHGHHvbnbgnfgc', 11, 11),
(87, 'fghfgf', 'nbffnbg gn', 1111, 11),
(88, 'nhfygh', 'hjgfrhvcb', 11, 11),
(89, 'fghfgf', 'nbffnbg', 1111, 11),
(90, 'nhfygh', 'hjgfrh', 11, 11),
(91, 'fghfgfdfgdfgdfgdfgd', 'nbffnbgcvbfc', 1111, 11),
(92, 'nhfygh', 'hjgfrh', 11, 11),
(93, 'fghfgf', 'nbffnbgbfdx', 1111, 11),
(94, 'nhfygh', 'hjgfrhdfgcnb', 11, 11),
(95, 'fghfgf', 'nbffnbbgfhg', 1111, 11),
(96, 'nhfygh', 'hjgfrhcb', 11, 11),
(97, 'fghfgf', 'nbffnbgbvc', 1111, 11),
(98, 'nhfygh', 'hjgfrhdfb', 11, 11),
(99, 'fghfgf', 'nbffnbg', 1111, 11),
(100, 'nhfygh', 'hjgfrh', 11, 11),
(101, 'fghfgf', 'NGFGHFGHFGHNHG', 1111, 11),
(102, 'nhfygh', 'hjgfrhxcb', 11, 11),
(103, 'fghfgf', 'nbffnbg', 1111, 11),
(104, 'nhfygh', 'hjgfrhHMJJG', 11, 11),
(105, 'fghfgf', 'nbf', 1111, 11),
(106, 'nhfygh', 'hjgfrhvcnbc', 11, 11),
(107, 'fghfgf', 'HD', 1111, 11),
(108, 'nhfygh', 'hjgfrhdfg', 11, 11),
(109, 'fghfgf', 'nbff', 1111, 11),
(110, 'nhfygh', 'hjgfrhgdf', 11, 11),
(111, 'fghfgf', 'nbff', 1111, 11);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
