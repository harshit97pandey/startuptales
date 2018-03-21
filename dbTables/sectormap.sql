-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2017 at 08:16 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `sectormap`
--

CREATE TABLE IF NOT EXISTS `sectormap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sector_name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `sectormap`
--

INSERT INTO `sectormap` (`id`, `sector_name`) VALUES
(1, 'Health Tech'),
(2, 'Ecommerce'),
(3, 'EdTech'),
(4, 'FoodTech'),
(5, 'Big Data'),
(6, 'Analytics'),
(7, 'Hyperlocal'),
(8, 'Enterprise'),
(9, 'Travel'),
(10, 'Curated Web'),
(11, 'Media'),
(12, 'Agriculture'),
(13, 'AgriTech'),
(14, 'Web Marketing'),
(15, 'Website Optimization'),
(16, 'Web Products'),
(17, 'Web Analytics'),
(18, 'Stock Exchange'),
(19, 'Stock Market Trading'),
(20, 'Retail Intelligence');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
