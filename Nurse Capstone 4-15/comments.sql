-- phpMyAdmin SQL Dump
-- version 4.0.9deb1.lucid~ppa.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 05, 2020 at 12:20 AM
-- Server version: 5.5.52-0ubuntu0.12.04.1-log
-- PHP Version: 5.3.10-1ubuntu3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rhandley`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(128) NOT NULL,
  `DATE` datetime NOT NULL,
  `message` text NOT NULL,
  `pageID` varchar(100) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`cid`, `uid`, `DATE`, `message`, `pageID`) VALUES
(11, 'Alfred', '2020-04-04 23:59:35', 'Alfred James is a very good friend of mine and I would recommend him for anything you might need.', 'Nurse3.php'),
(12, 'Alfred', '2020-04-05 00:00:17', 'Cathy Smith is a wonderful nurse.', 'n1.php');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
