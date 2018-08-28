-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 05, 2018 at 11:11 AM
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
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `u_idd` varchar(20) NOT NULL,
  `tower` varchar(30) NOT NULL,
  `wing` varchar(30) NOT NULL,
  `floorw` varchar(30) NOT NULL,
  `u_namee` varchar(20) NOT NULL,
  `tower1` varchar(30) NOT NULL,
  `wing1` varchar(30) NOT NULL,
  `floor1` varchar(30) NOT NULL,
  `u_seatt` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`u_idd`, `tower`, `wing`, `floorw`, `u_namee`, `tower1`, `wing1`, `floor1`, `u_seatt`) VALUES
('12313', 'Tower B', 'Wing B', 'First Floor', '13', 'Tower B', 'Wing B', 'First Floor', '1414'),
('355', 'Tower A', 'Wing A', 'First Floor', '363', 'Tower B', 'Wing B', 'First Floor', '3636'),
('355', 'Tower A', 'Wing A', 'First Floor', '363', 'Tower B', 'Wing B', 'First Floor', '3636'),
('1', 'Tower B', 'Wing A', 'First Floor', '8', 'Tower B', 'Wing C', 'First Floor', '1'),
('1', 'Tower B', 'Wing A', 'First Floor', '8', 'Tower B', 'Wing C', 'First Floor', '1'),
('.363', 'Tower A', 'Wing B', 'First Floor(A)', '39+', 'Tower A', 'Wing A', 'First Floor(A)', '39'),
('1313', 'Tower B', 'Wing B', 'First Floor', '14', 'Tower B', 'Wing A', 'First Floor(A)', '14');
