-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 18, 2017 at 02:50 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hngtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `hngtb`
--

CREATE TABLE IF NOT EXISTS `hngtb` (
  `Post_Id` int(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `age` int(20) NOT NULL,
  PRIMARY KEY (`Post_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `hngtb`
--

INSERT INTO `hngtb` (`Post_Id`, `firstname`, `lastname`, `age`) VALUES
(9, 'Akinlolu', 'Gbeminiyi', 30),
(10, 'Anjorin', 'Kamaldeen', 33),
(11, 'Bolajoko', 'Rukayat', 27),
(12, 'Aranmude', 'Damilola', 31),
(13, 'Taiwo', 'Akindimeji', 33);
