-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 16, 2014 at 02:42 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thermospas`
--
CREATE DATABASE IF NOT EXISTS `thermospas` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `thermospas`;

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE IF NOT EXISTS `leads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `zipcode` varchar(16) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `address1` varchar(100) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(16) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `iref` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`id`, `date`, `email`, `zipcode`, `fname`, `lname`, `address1`, `city`, `state`, `phone`, `iref`) VALUES
(1, '2013-11-14', 'test@test.com', '33777', 'Cindy', 'Test', '123 Test Dr', 'Largo', 'FL', '(777) 777-7777', '0'),
(2, '2013-11-14', 'test@test.com', '33777', 'Cindy', 'Test', '123 Test Dr', 'Largo', 'FL', '(777) 777-7777', '0'),
(3, '2013-11-14', 'test@test.com', '33777', 'Cindy', 'Test', '123 Test Dr', 'Largo', 'FL', '(777) 777-7777', '0'),
(4, '2013-11-14', 'test@test.com', '55555', 'Cindy', 'Test2', 'Address', 'City', 'FL', '(555) 555-5555', 'abc'),
(5, '2013-11-21', 'test@test.com', '33777', 'Cindy', 'Test', '123 Test Dr', 'Largo', 'FL', '(777) 777-7777', '0'),
(6, '2013-11-22', 'test@test.com', '33778', 'Cindy', 'Test2', 'Address', 'City', 'FL', '(777) 777-7777', '0'),
(7, '2013-11-26', 'test@test.com', '33702', 'Cindy', 'Test', 'Address', 'St. Petersburg', 'FL', '(777) 777-7777', '0'),
(8, '2013-11-26', 'test@test.com', '33702', 'Cindy', 'Test', 'Address', 'St. Petersburg', 'FL', '(777) 777-7777', '0'),
(9, '2013-12-04', 'test@test.com', '55555', 'Cindy', 'Test', '123 Test Dr', 'Somewhere', 'SC', '(777) 777-7777', '0'),
(10, '2013-12-04', 'test2@test.com', '33777', 'Cindy', 'Test2', 'Address', 'St. Petersburg', 'FL', '(727) 555-5555', '0'),
(11, '2013-12-05', 'Email', '33777', 'Cindy', 'Test3', 'Address', 'City', 'State', '(777) 777-7777', '0'),
(12, '2013-12-05', 'Email', '33777', 'Cindy', 'Test4', 'Address', 'City', 'State', '(777) 777-7777', '0'),
(13, '2013-12-11', 'test@test.com', '55555', 'Cindy', 'Test2', '123 Test Lane', 'Somewhere', 'SD', '(727) 777-7777', 'iDRTV'),
(14, '2013-12-11', 'test2@test.com', '55555', 'Cindy', 'Test2', '123 Test Dr', 'Somewhere', 'SC', '(727) 777-7777', 'iDRTV'),
(15, '2013-12-11', 'test2@test.com', '55555', 'Cindy', 'Test2', '123 Test Dr', 'Somewhere', 'SC', '(727) 777-7777', 'iDRTV'),
(16, '2013-12-11', 'test2@test.com', '55555', 'Cindy', 'Test2', '123 Test Dr', 'Somewhere', 'SC', '(777) 777-7777', 'iDRTV'),
(17, '2013-12-11', 'test2@test.com', '55555', 'Cindy', 'Test2', '123 Test Dr', 'Somewhere', 'SC', '(777) 777-7777', 'iDRTV'),
(18, '2013-12-17', 'test@test.com', '33778', 'Cindy', 'Test', '123 Test Dr', 'Largo', 'State', '(727) 777-7777', 'iDRTV');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(255) NOT NULL DEFAULT 'client',
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
