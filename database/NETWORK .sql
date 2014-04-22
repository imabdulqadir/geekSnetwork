-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 06, 2013 at 08:19 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `NETWORK`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `msgid` int(11) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `userid` int(11) NOT NULL,
  `msgposterid` int(255) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=265 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`c_id`, `msgid`, `comment`, `userid`, `msgposterid`) VALUES
(264, 484, 'hw r u?', 42, 41);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `User_Id` int(11) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `content` varchar(1000) DEFAULT NULL,
  `Image` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=485 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `Name`, `User_Id`, `timestamp`, `content`, `Image`) VALUES
(484, 'Abdul Qadir', 41, '2013-07-06 06:17:04', 'hiiii every one..', '1373091424130425_009.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `SOCIAL`
--

CREATE TABLE IF NOT EXISTS `SOCIAL` (
  `User_Id` int(2) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Repassword` varchar(32) NOT NULL,
  `Mobile` varchar(15) NOT NULL,
  `Email_Id` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `College` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  PRIMARY KEY (`User_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `SOCIAL`
--

INSERT INTO `SOCIAL` (`User_Id`, `Fname`, `Lname`, `Password`, `Repassword`, `Mobile`, `Email_Id`, `DOB`, `Gender`, `Image`, `College`, `question`, `answer`) VALUES
(41, 'Abdul', 'Qadir', '25d55ad283aa400af464c76d713c07ad', '25d55ad283aa400af464c76d713c07ad', '9832768074', 'aq@gmail.com', '1992-03-10', 'Male', '1373091424130425_009.jpg', '', 'your favourte subject', 'maths'),
(42, 'Kumar', 'Shivam', '25d55ad283aa400af464c76d713c07ad', '25d55ad283aa400af464c76d713c07ad', '9898989898', 'ks@gmail.com', '1993-01-01', 'Male', '137309150570666118_(2)-002.jpg', '', 'your first class teacher name', 'RAJ'),
(43, 'Durgaesh', 'Kumar', '25d55ad283aa400af464c76d713c07ad', '25d55ad283aa400af464c76d713c07ad', '9898989898', 'dk@gmail.com', '1991-01-10', 'Male', 'default.gif', '', 'your mobile no', '9898989890');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE IF NOT EXISTS `votes` (
  `vid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(255) NOT NULL,
  `msgid` int(255) NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`vid`, `userid`, `msgid`) VALUES
(55, 41, 484),
(56, 42, 484);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
