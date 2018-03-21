-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2017 at 08:15 AM
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
-- Table structure for table `certificationmap`
--

CREATE TABLE IF NOT EXISTS `certificationmap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cert_name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `certificationmap`
--

INSERT INTO `certificationmap` (`id`, `cert_name`) VALUES
(1, 'python'),
(2, 'red hat'),
(3, 'machine learning'),
(4, 'neural networks'),
(5, 'game desgining'),
(6, 'big data'),
(7, 'java'),
(8, 'data structures and algorithms'),
(9, 'ruby'),
(10, 'digital marketing'),
(11, 'software testing'),
(12, 'cyber security'),
(13, 'cloud computing'),
(14, 'data analytics');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
