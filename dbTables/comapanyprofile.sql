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
-- Table structure for table `comapanyprofile`
--

CREATE TABLE IF NOT EXISTS `comapanyprofile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `estab` date NOT NULL,
  `sector` varchar(100) NOT NULL,
  `objectives` longtext NOT NULL,
  `milestones` longtext NOT NULL,
  `investors` longtext NOT NULL,
  `story` longtext NOT NULL,
  `location` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `username_2` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `comapanyprofile`
--

INSERT INTO `comapanyprofile` (`id`, `username`, `estab`, `sector`, `objectives`, `milestones`, `investors`, `story`, `location`) VALUES
(1, 'qwe', '2017-03-15', 'HealthTech', 'pefvnwnv', 'esvngwsvn', 'wsdbdfn', 'ekrgvnsrgvn', 'Mumbai'),
(2, 'newstart', '2017-03-09', 'Ecommerce', 'ertyu', 'wertyu', 'dfghj', 'rty', 'Mumbai');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
