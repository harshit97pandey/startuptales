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
-- Table structure for table `skillmap`
--

CREATE TABLE IF NOT EXISTS `skillmap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `skill_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `skillmap` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

--
-- Dumping data for table `skillmap`
--

INSERT INTO `skillmap` (`id`, `username`, `skill_name`) VALUES
(1, 'akshay', ''),
(2, 'andy', 'Adjusting'),
(3, 'ram', 'Android'),
(4, 'ram', 'java'),
(5, 'yadnesh45', 'Analysis'),
(6, 'yadnesh', 'Android'),
(7, 'yadnesh45', 'Balancing'),
(8, 'yadnesh45', 'Big Data'),
(9, 'yadnesh45', 'Algorithms'),
(10, 'khush', 'Android'),
(11, 'shahaji', 'Android'),
(12, 'shahaji', 'java'),
(13, 'shahaji', 'Big Data'),
(14, 'shailesh', 'Android'),
(15, 'asd', 'Android'),
(16, 'sampat', 'Algorithms'),
(17, 'akshay28', 'Algorithms'),
(18, 'satish', 'java'),
(19, 'kartik', 'Android'),
(20, 'yadnesh100', 'Balancing'),
(21, 'yadnesh100', 'Big Data'),
(22, 'khomesh', 'Adjusting'),
(23, 'khomesh45', 'Algorithms'),
(24, 'patankar', 'java'),
(25, 'pratik', 'Analysis'),
(26, 'durgesh', 'Big Data'),
(27, 'durgesh', 'Analysis'),
(28, 'john', 'Android'),
(29, 'patu', 'Adjusting'),
(30, 'patu', 'Assembling'),
(31, 'patu', 'Big Data'),
(32, 'dee', 'Android'),
(33, 'dee', 'java'),
(34, 'test', 'Algorithms'),
(35, 'test', 'Applications'),
(36, 'test', 'Big Data'),
(37, 'userlast', 'Adjusting'),
(38, 'userlast', 'Big Data'),
(39, 'userlast', 'Algorithms'),
(40, 'userlast', 'Adjusting'),
(41, 'userlast', 'Big Data'),
(42, 'userlast', 'Algorithms'),
(43, 'userlast', 'Adjusting'),
(44, 'userlast', 'Big Data'),
(45, 'userlast', 'Algorithms'),
(46, 'userlast', 'Adjusting'),
(47, 'userlast', 'Big Data'),
(48, 'userlast', 'Algorithms'),
(49, 'userlast', 'Adjusting'),
(50, 'userlast', 'Big Data'),
(51, 'userlast', 'Algorithms'),
(52, 'userlast', 'Algorithms'),
(53, 'userlast', 'Balancing'),
(54, 'userlast', 'Applications'),
(55, 'userlast', 'Algorithms'),
(56, 'userlast', 'Balancing'),
(57, 'userlast', 'Applications'),
(58, 'userlast', 'Algorithms'),
(59, 'userlast', 'Balancing'),
(60, 'userlast', 'Applications'),
(61, 'userlast', 'Algorithms'),
(62, 'userlast', 'Balancing'),
(63, 'userlast', 'Applications'),
(64, 'shahaji123', 'Android'),
(65, 'shahaji123', 'Big Data'),
(66, 'shahaji123', 'Balancing'),
(69, 'yadnesh', 'python'),
(70, 'yadnesh', 'cyber security'),
(71, 'yadnesh', 'cloud computing'),
(72, 'yadnesh', 'big data'),
(73, 'yadnesh', 'python'),
(74, 'yadnesh', 'python'),
(75, 'yadnesh', 'python'),
(76, 'yadnesh2', 'red hat'),
(77, 'yadnesh2', 'ruby');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
