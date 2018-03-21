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
-- Table structure for table `userprofile`
--

CREATE TABLE IF NOT EXISTS `userprofile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `userprofile`
--

INSERT INTO `userprofile` (`id`, `username`, `qualification`, `city`) VALUES
(1, 'akshay', 'TYBtech', 'Kolhapur'),
(3, 'andy', 'bsc', 'bambavde'),
(4, 'ram', 'mtech', 'pune'),
(5, 'yadnesh45', 'BTech', 'Mumbai'),
(7, 'khush', 'btech', 'nasik'),
(9, 'shailesh', 'btech', 'kolhapur'),
(10, 'asd', 'sdf', 'asdf'),
(11, 'sampat', 'btecj', 'kolhapur'),
(12, 'akshay28', 'btech', 'kolhapur'),
(13, 'satish', 'T Y B TECH', 'solapur'),
(14, 'kartik', 'T Y B TECH', 'solapur'),
(15, 'yadnesh100', 'T Y B TECH', 'pune'),
(16, 'khomesh', '5th', 'nagpur'),
(17, 'khomesh45', 'T Y B TECH', 'ISLAMPUR'),
(18, 'patankar', 'T Y B TECH', 'kolhapur'),
(19, 'pratik', 'T Y B TECH', 'pune'),
(20, 'patu', 'qwerty', 'qwwert'),
(21, 'dee', 'PhD', 'NY'),
(22, 'test', 'TYBtech', 'Mumbai'),
(26, 'userlast', 'qwe', 'wef'),
(32, 'yadnesh', 'TyBtech', 'Mumbai'),
(33, 'yadnesh2', 'Btech', 'Mumbai');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
