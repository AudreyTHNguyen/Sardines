-- phpMyAdmin SQL Dump
-- version 4.0.9deb1.lucid~ppa.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 11, 2020 at 04:49 PM
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
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL DEFAULT 'patient',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `type`) VALUES
(12, 'Nurse1', 'whitehouse@whitehouse.gov', '6bc3e8c5b82644bca88bbb2d539ce5ac', 'nurse'),
(13, 'Nurse2', 'nurse2@oakland.edu', '9fea4a2de516629433b3c5661859c28f', 'nurse'),
(14, 'Nurse3', 'nurse3@oakland.edu', '9fea4a2de516629433b3c5661859c28f', 'nurse'),
(15, 'n1', 'n1@oakland.edu', '3f364582323b6be6dc2e07e6b75cbbf0', 'nurse'),
(16, 'n2', 'n2@oakland.edu', '6f8811a5f618cb66acdf17b0d6f9b8d3', 'nurse'),
(18, 'n4', 'n4@oakland.edu', '2154626ee634fa4e7d07b6527133b809', 'nurse'),
(19, 'n5', 'n5@oakland.edu', 'dffacaa55a3d93951ee86e5edb225c9a', 'nurse'),
(20, 'n6', 'n6@oakland.edu', '679ae108c7dfdf20060d1d783b1e6ca4', 'nurse'),
(21, 'n7', 'n7@oakland.edu', '6a5e5a25c6a412c39e4c0e01dfe0f07a', 'nurse'),
(22, 'n8', 'n8@oakland.edu', '51603c1353d7eddc367740e0a2ff7d2a', 'nurse'),
(23, 'n9', 'n9@oakland.edu', 'ddba3c959530ae09c9f182a6722cdbdb', 'nurse'),
(24, 'n10', 'n10@oakland.edu', 'b7ce41896d52aefa2b54f17774444ab5', 'nurse');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
