-- phpMyAdmin SQL Dump
-- version 4.0.9deb1.lucid~ppa.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 11, 2020 at 04:14 PM
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
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(100) DEFAULT NULL,
  `university` varchar(100) DEFAULT NULL,
  `specialty` varchar(100) DEFAULT NULL,
  `experience` int(11) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `rating` int(11) NOT NULL,
  PRIMARY KEY (`pid`),
  UNIQUE KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`pid`, `uid`, `url`, `image`, `name`, `location`, `university`, `specialty`, `experience`, `description`, `rating`) VALUES
(1, 12, 'Nurse1.php', 'Nurse1.jpg', 'Jamie Curtis', 'Wayne', 'Wayne State University', 'Specialty in elderly care', 6, 'Jamie Curtis has over 6 years of experience in the nursing field in areas such as pediatrics, med-surgical medicine, and family medicine. Jamie was a Pediatric Nurse at Beaumont Hospital before transferring to Home Health nursing then school nursing. She also is a family nurse practitioner. In addition, she has worked with individuals with catastrophic injuries such as spinal cord and severe head injuries.', 5),
(2, 13, 'Nurse2.php', 'Nurse2.jpg', 'Taylor Sanchez', 'Oakland', 'Oakland University', 'Specialty in special needs care', 6, 'Taylor Sanchez has over 6 years of experience in the nursing field in areas such as pediatrics, med-surgical medicine, and family medicine. Taylor was a Pediatric Nurse at Beaumont Hospital before transferring to Home Health nursing then school nursing. She also is a family nurse practitioner. In addition, she has worked with individuals with catastrophic injuries such as spinal cord and severe head injuries.', 5),
(3, 14, 'Nurse3.php', 'Nurse3.jpg', 'Alfred James', 'Oakland', 'Oakland University', 'Specialty in pediatrics care', 6, 'Alfred James has over 6 years of experience in the nursing field in areas such as pediatrics, med-surgical medicine, and family medicine. Alfred was a Pediatric Nurse at Beaumont Hospital before transferring to Home Health nursing then school nursing. He also is a family nurse practitioner. In addition, he has worked with individuals with catastrophic injuries such as spinal cord and severe head injuries.', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
