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
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` text COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `dob` date NOT NULL,
  `url` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `type`, `fname`, `lname`, `email`, `username`, `password`, `phone`, `created`, `modified`, `status`, `dob`, `url`) VALUES
(1, 'Startup', 'Yadnesh 1', 'Kulkarni', 'yadnesh45@gmail.com', 'yadnesh', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '9503651438', '2017-03-22 10:23:39', '2017-03-22 10:23:39', '1', '0000-00-00', 'http://www.youtube.co.in'),
(2, 'User', 'Akshay', 'Potdar', 'akshay@gmail.com', 'akshay', '12dea96fec20593566ab75692c9949596833adc9', '123', '2017-03-22 10:24:21', '2017-03-22 10:24:21', '1', '2017-03-29', ''),
(3, 'Investor', 'Yadnesh 2', 'Kulkarni', 'yadsh45@gmail.com', 'yadnesh100', 'a938dfdfbaa1f25ccbc39e16060f73c44e5ef0dd', '9503651438', '2017-03-22 10:25:25', '2017-03-22 10:25:25', '1', '2017-03-23', 'http://www.google.co.in'),
(4, 'User', 'Yadnesh 3', 'Kulkarni', 'yadnesh@gmail.com', 'yadnesh2', 'ddc53fa4cfe077fd8bca79626af5cfbeec5c7471', '9503651438', '2017-03-24 06:02:58', '2017-03-24 06:02:58', '1', '2017-03-22', ''),
(5, 'Investor', 'qwert', 'asdfg', 'abc@gmail.com', 'abc', 'a9993e364706816aba3e25717850c26c9cd0d89d', '452', '2017-03-24 10:42:27', '2017-03-24 10:42:27', '1', '2017-03-29', 'http://www.youtube.co.in'),
(6, 'Startup', 'we', 'we', 'start@gmail.com', 'qwe', '2b020927d3c6eb407223a1baa3d6ce3597a3f88d', '123', '2017-03-24 10:46:27', '2017-03-24 10:46:27', '1', '0000-00-00', 'http://www.gg'),
(7, 'Investor', 'test', 'test', 'tes@gmail.com', 'investor', 'c0b65b9080d2adaba2d333bb26982183e4375b9f', '123', '2017-03-25 10:08:07', '2017-03-25 10:08:07', '1', '2017-03-22', 'http://www.youtube.co.in'),
(8, 'User', 'myuser', 'mylast', 'userlast@gmail.com', 'userlast', 'e7c40a582d08c68d1a184e2829213fc8328c78ce', '8466', '2017-03-25 11:21:51', '2017-03-25 11:21:51', '1', '2017-03-16', ''),
(9, 'User', 'new', 'user', 'newuser@gmail.com', 'newuser', 'cd1bfe55cbb2b0b989cac86391e5100c933ffe7e', '7896', '2017-03-25 12:01:37', '2017-03-25 12:01:37', '1', '2017-03-22', ''),
(10, 'Startup', 'new ', 'start', 'newstart@gmail.com', 'newstart', '3fd4ff6ba0354662bb8739b76b2502ed76377886', '986514364', '2017-03-25 12:29:02', '2017-03-25 12:29:02', '1', '0000-00-00', 'http://www.youtube.co.in'),
(11, 'User', 'Shahaji', 'Shinde', 'shinde@gmail.com', 'shahaji123', 'e2d4da0331f138cea54134e9b8187587eb23c898', '7896', '2017-03-27 10:33:17', '2017-03-27 10:33:17', '1', '2017-03-17', ''),
(12, 'Investor', 'inv', 'inv', 'inv@gmail.com', 'inv', 'a22c81f9e58d3e183314100cda7df50c66582b16', '78456132', '2017-03-27 10:40:52', '2017-03-27 10:40:52', '1', '2017-03-31', 'http://www.youtube.co.in');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
