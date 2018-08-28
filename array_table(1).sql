-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 11, 2018 at 11:15 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `userfile`
--

-- --------------------------------------------------------

--
-- Table structure for table `array_table`
--

CREATE TABLE IF NOT EXISTS `array_table` (
  `userid` varchar(40) NOT NULL,
  `department` varchar(30) NOT NULL,
  `displayname` varchar(30) NOT NULL,
  `costLocation` varchar(30) NOT NULL,
  `telephoneNumber` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `array_table`
--

INSERT INTO `array_table` (`userid`, `department`, `displayname`, `costLocation`, `telephoneNumber`) VALUES
('z001wu1b', 'GS IT PG SO GGN', 'ALBUQUERQUE, GREGORY', '65925133', '+91 (124) 6216403'),
('z001wu1b', 'GS IT PG SO GGN', 'ALBUQUERQUE, GREGORY', '65925133', '+91 (124) 6216403'),
('BHARTI1B', '', '', '', ''),
('z003p9ec', 'GS IT TRA IND PSD EA TC', 'ARORA, ASHISH', '65925129', '+91 (124) 6216050'),
('BHARTI1B', '', '', '', ''),
('JAVEDX1S', '', '', '', ''),
('Z003EJ1H', 'PG SO EN SPEL PEO', 'KUMAR, RAVI', '620039D5', '+91 (124) 6216598'),
('z001wu1b', 'GS IT PG SO GGN', 'ALBUQUERQUE, GREGORY', '65925133', '+91 (124) 6216403'),
('z003ex4s', 'GS IT TRA IND PSD EA', 'KAKKAR, SURTI', '65925129', '+91 (124) 2842144'),
('Z003EY4S', 'SHS AM LAM MEX FI SCM', 'RODRIGUEZ PARRA, SERGIO', '491122', '+52 (555) 328-2512'),
('bharti1b', '', '', '', ''),
('albuqx1a', '', '', '', '');
