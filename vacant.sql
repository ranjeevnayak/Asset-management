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
-- Database: `vacant`
--

-- --------------------------------------------------------

--
-- Table structure for table `filled`
--

CREATE TABLE IF NOT EXISTS `filled` (
  `total1` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filled`
--

INSERT INTO `filled` (`total1`) VALUES
('D001'),
('D002'),
('D003'),
('D004'),
('D005'),
('D006'),
('D007'),
('D008'),
('D009'),
('D010'),
('D011'),
('D012'),
('D013'),
('D014'),
('D015'),
('D016'),
('D017'),
('D018'),
('D019'),
('D020'),
('D021'),
('D022'),
('D023'),
('D024'),
('D025'),
('D026'),
('D027'),
('D028'),
('D029'),
('D030'),
('D031'),
('D032'),
('D033'),
('D034'),
('D035'),
('D036'),
('D037'),
('D038'),
('D039'),
('D040'),
('D041'),
('D042'),
('D043'),
('M001'),
('M002'),
('M003'),
('M004'),
('E001'),
('E002'),
('E003'),
('E004'),
('E005'),
('E006'),
('C001');

-- --------------------------------------------------------

--
-- Table structure for table `filledseat`
--

CREATE TABLE IF NOT EXISTS `filledseat` (
  `Sapid` longtext NOT NULL,
  `Assettype` varchar(40) NOT NULL,
  `Serviceno` varchar(40) NOT NULL,
  `Age` varchar(40) NOT NULL,
  `Ram` varchar(40) NOT NULL,
  `Loginid` varchar(40) NOT NULL,
  `Employee` varchar(40) NOT NULL,
  `f_seat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filledseat`
--

INSERT INTO `filledseat` (`Sapid`, `Assettype`, `Serviceno`, `Age`, `Ram`, `Loginid`, `Employee`, `f_seat`) VALUES
('0', 'MACHINE', 'SGH631RFQW', '22', '16', 'BHARTI1B', 'BANDANA BHARTI', 'D003'),
('565510000000', 'MACHINE', 'YLFP016315', '55', '20', 'BHARTI1B', 'BANDANA BHARTI', 'D004'),
('0', 'LAPTOP', 'CND72053PS', '12', '24', 'MOHELA1S', 'SUMIT MOHELA', 'D005'),
('0', 'DOCKING STATION', 'CND7235FGB', '10', '0', 'MOHELA1S', 'SUMIT MOHELA', 'D005'),
('565510000000', 'MACHINE', 'YLXR006470', '32', '0', 'MOHELA1S', 'SUMIT MOHELA', 'D005'),
('565510000000', 'MONITOR', 'YV1B042604', '0', '0', 'MOHELA1S', 'SUMIT MOHELA', 'D005'),
('565510000000', 'MONITOR', 'YV1B042605', '0', '0', 'MOHELA1S', 'SUMIT MOHELA', 'D005'),
('565510000000', 'MONITOR', 'YV1B331220', '0', '0', 'MOHELA1S', 'SUMIT MOHELA', 'D005'),
('565510000000', 'MONITOR', 'YV1B332698', '0', '0', 'MOHELA1S', 'SUMIT MOHELA', 'D005'),
('565510000000', 'MACHINE', 'SGH626T9W6', '23', '16', 'CHAUHX1R', 'RAJPAL SINGH CHAUHAN', 'D006'),
('565510000000', 'MACHINE', 'YLFP016353', '55', '8', 'CHAUHX1R', 'RAJPAL SINGH CHAUHAN', 'D006'),
('565510000000', 'MONITOR', 'YV3T214473', '74', '0', 'CHAUHX1R', 'RAJPAL SINGH CHAUHAN', 'D006'),
('565510000000', 'MONITOR', 'YV3T214475', '74', '0', 'CHAUHX1R', 'RAJPAL SINGH CHAUHAN', 'D006'),
('565510000000', 'MACHINE', 'YLXR006472', '32', '0', 'PANDEY1R', 'RAKESH PANDEY', 'D007'),
('565510000000', 'MONITOR', 'YV3T024691', '84', '0', 'PANDEY1R', 'RAKESH PANDEY', 'D007'),
('565510000000', 'MONITOR', 'YV3T059555', '82', '0', 'PANDEY1R', 'RAKESH PANDEY', 'D007'),
('565510000000', 'LAPTOP', 'DSDS031748', '26', '16', 'GAIKWA1V', 'VIJAYKUMAR G GAIKWAD', 'D008'),
('565510000000', 'MONITOR', 'YE5X230281', '0', '0', 'GAIKWA1V', 'VIJAYKUMAR G GAIKWAD', 'D008'),
('565510000000', 'MACHINE', 'YLXR006471', '32', '0', 'GAIKWA1V', 'VIJAYKUMAR G GAIKWAD', 'D008'),
('565510000000', 'MONITOR', 'YV3T054456', '0', '0', 'GAIKWA1V', 'VIJAYKUMAR G GAIKWAD', 'D008'),
('0', 'LAPTOP', '5CG715313S', '12', '8', 'KAUSHA1M', 'MEENAKSHI KAUSHAL', 'D009'),
('0', 'DOCKING STATION', '5CG732XVL6', '10', '0', 'KAUSHA1M', 'MEENAKSHI KAUSHAL', 'D009'),
('0', 'HEADSET', 'HS2015072443', '25', '0', 'KAUSHA1M', 'MEENAKSHI KAUSHAL', 'D009'),
('565510000000', 'MONITOR', 'YV3T054671', '82', '0', 'KAUSHA1M', 'MEENAKSHI KAUSHAL', 'D009'),
('565510000000', 'MONITOR', 'YV3T279957', '71', '0', 'KAUSHA1M', 'MEENAKSHI KAUSHAL', 'D009'),
('565510000000', 'MACHINE', 'YLFP016329', '55', '8', 'BHARTI1B', 'BANDANA BHARTI', 'D010'),
('565510000000', 'MACHINE', 'YLQV067905', '36', '8', 'BHARTI1B', 'BANDANA BHARTI', 'D010'),
('565510000000', 'MONITOR', 'YV1B332979', '0', '0', 'BHARTI1B', 'BANDANA BHARTI', 'D010'),
('565510000000', 'MONITOR', 'YV1B333713', '0', '0', 'BHARTI1B', 'BANDANA BHARTI', 'D010'),
('565510000000', 'MACHINE', 'YLXR004420', '35', '8', 'BHARTI1B', 'BANDANA BHARTI', 'D011'),
('565510000000', 'MONITOR', 'YV6V092846', '33', '0', 'BHARTI1B', 'BANDANA BHARTI', 'D011'),
('565510000000', 'MONITOR', 'YV6V107467', '28', '0', 'BHARTI1B', 'BANDANA BHARTI', 'D011'),
('565510000000', 'MACHINE', 'YLQV067909', '36', '8', 'BHARTI1B', 'BANDANA BHARTI', 'D012'),
('565510000000', 'MACHINE', 'YLFP016271', '55', '8', 'BHARTI1B', 'BANDANA BHARTI', 'D013'),
('0', 'LAPTOP', 'DSDS028612', '29', '16', 'Z003DXVV', 'PRASHANT SRIVASTAVA', 'D014'),
('565510000000', 'MONITOR', 'YEJU413491', '0', '0', 'Z003DXVV', 'PRASHANT SRIVASTAVA', 'D014'),
('565510000000', 'MONITOR', 'YEJU414985', '0', '0', 'Z003DXVV', 'PRASHANT SRIVASTAVA', 'D014'),
('0', 'MACHINE', 'YLXR007671', '31', '16', 'GAIKWA1V', 'VIJAYKUMAR G GAIKWAD', 'D014'),
('565510000000', 'MONITOR', 'YV1B332574', '0', '0', 'GAIKWA1V', 'VIJAYKUMAR G GAIKWAD', 'D014'),
('565510000000', 'MONITOR', 'YV3T107321', '80', '0', 'GAIKWA1V', 'VIJAYKUMAR G GAIKWAD', 'D014'),
('565510000000', 'MONITOR', 'YE5X230497', '0', '0', 'Z003EJ1H', 'RAVI KUMAR', 'D015'),
('565510000000', 'MONITOR', 'YE5X231124', '0', '0', 'Z003EJ1H', 'RAVI KUMAR', 'D015'),
('0', 'MACHINE', 'YLXR007670', '31', '16', 'Z003EJ1H', 'RAVI KUMAR', 'D015'),
('565510000000', 'MACHINE', 'YLNK012949', '40', '16', 'MANDAL1R', 'RAJESH MANDAL', 'D016'),
('565510000000', 'MONITOR', 'YV1B332157', '0', '0', 'MANDAL1R', 'RAJESH MANDAL', 'D016'),
('565510000000', 'MONITOR', 'YV1B332736', '0', '0', 'MANDAL1R', 'RAJESH MANDAL', 'D016'),
('0', 'HEADSET', 'HS2015072360', '32', '0', 'SAHDEV1G', 'GEETA SAHDEV', 'D017'),
('565510000000', 'MACHINE', 'YLFP016272', '55', '8', 'SAHDEV1G', 'GEETA SAHDEV', 'D017'),
('565510000000', 'MONITOR', 'YV1B332750', '0', '0', 'SAHDEV1G', 'GEETA SAHDEV', 'D017'),
('565510000000', 'MONITOR', 'YV1B333698', '89', '0', 'SAHDEV1G', 'GEETA SAHDEV', 'D017'),
('565510000000', 'MACHINE', 'SGH626T9VR', '23', '16', 'JAVEDX1S', 'SALIM JAVED', 'D018'),
('565510000000', 'MONITOR', 'YV1B332760', '0', '0', 'JAVEDX1S', 'SALIM JAVED', 'D018'),
('565510000000', 'MONITOR', 'YV1B332774', '0', '0', 'JAVEDX1S', 'SALIM JAVED', 'D018');
