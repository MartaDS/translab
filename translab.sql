-- phpMyAdmin SQL Dump
-- version 4.0.10.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 06, 2018 at 12:02 PM
-- Server version: 5.5.52
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `translab`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_overall_performance`
--

CREATE TABLE IF NOT EXISTS `tbl_overall_performance` (
  `overall_performance_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `value` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`overall_performance_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_overall_performance`
--

INSERT INTO `tbl_overall_performance` (`overall_performance_id`, `title`, `value`, `date`, `status`) VALUES
(1, 'Deadhead Miles', '18233', '2018-08-21', 1),
(2, 'Stopped', '450212', '2018-08-01', 1),
(3, 'Pick Up/Drop Off', '5024', '2018-07-04', 1),
(4, 'Transit', '19011', '2018-07-25', 1),
(5, 'Test', '140', '2018-08-21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_performance`
--

CREATE TABLE IF NOT EXISTS `tbl_performance` (
  `performance_id` int(11) NOT NULL AUTO_INCREMENT,
  `count` int(11) NOT NULL,
  `interval` decimal(10,0) NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`performance_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_performance`
--

INSERT INTO `tbl_performance` (`performance_id`, `count`, `interval`, `date`, `status`) VALUES
(1, 50, '-90', '2018-08-21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_timeline`
--

CREATE TABLE IF NOT EXISTS `tbl_timeline` (
  `timeline_id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` varchar(50) NOT NULL,
  `deadStopped` float NOT NULL,
  `deadResiting` float NOT NULL,
  `loading` float NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`timeline_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_timeline`
--

INSERT INTO `tbl_timeline` (`timeline_id`, `timestamp`, `deadStopped`, `deadResiting`, `loading`, `status`) VALUES
(1, '2018-08-13T00:00:00', 592, 172, 263, 1),
(2, '2018-08-14T00:00:00', 645, 136, 86, 1),
(3, '2018-08-15T00:00:00', 432, 739, 488, 1),
(4, '2018-08-16T00:00:00', 34, 117, 369, 1),
(5, '2018-08-17T00:00:00', 144, 0, 718, 1),
(6, '2018-08-18T00:00:00', 40, 491, 97, 1),
(7, '2018-08-19T00:00:00', 0, 0, 0, 1),
(8, '2018-08-20T00:00:00', 44, 34, 22, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
