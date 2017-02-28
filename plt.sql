-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2017 at 10:56 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `plt`
--

CREATE TABLE `plt` (
  `VIAOVCN` int(11) NOT NULL,
  `IMONO` varchar(20) DEFAULT NULL,
  `OPRTP` varchar(20) DEFAULT NULL,
  `SHPAGCD` varchar(20) DEFAULT NULL,
  `PLTRDDT` varchar(20) DEFAULT NULL,
  `DAFT` varchar(20) DEFAULT NULL,
  `DFWD` varchar(20) DEFAULT NULL,
  `VSLMFR` varchar(20) DEFAULT NULL,
  `BTHLOCFR` varchar(20) DEFAULT NULL,
  `VSLMTO` varchar(20) DEFAULT NULL,
  `DTRVTB` varchar(10) NOT NULL DEFAULT '00-0000',
  `BTHLOCTO` varchar(20) DEFAULT NULL,
  `DSTFRPTLT` varchar(20) DEFAULT NULL,
  `BEAR` varchar(20) DEFAULT NULL,
  `DTOSUB` varchar(20) DEFAULT NULL,
  `DTOCAN` varchar(20) DEFAULT NULL,
  `reason` varchar(150) NOT NULL,
  `reject_confirm` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plt`
--

INSERT INTO `plt` (`VIAOVCN`, `IMONO`, `OPRTP`, `SHPAGCD`, `PLTRDDT`, `DAFT`, `DFWD`, `VSLMFR`, `BTHLOCFR`, `VSLMTO`, `DTRVTB`, `BTHLOCTO`, `DSTFRPTLT`, `BEAR`, `DTOSUB`, `DTOCAN`, `reason`, `reject_confirm`) VALUES
(6, 'd06', 'f06', 'g06', 'h06', '453', '345345', 'k06', 'l06', 'm06', '00-0000345', '654', '43', '345', 'q06', 'r06', '', 1),
(1, '1111', 'f01', 'g01', 'h01', '23', '11', 'k01', 'l01', 'm01', '00-0000', '43', '54', '654', 'q01', 'r01', '', 1),
(2, 'd02', 'f02', 'g02', 'h02', '345', '435', 'k02', 'l02', 'm02', '00-0000', 'n02', '435', '4353', 'q02', 'r02', '', 1),
(7856, '736', '47856', '57', '7364', '64375', '8743', '384', '5786', '587346', '00-0000', '', '578463', '74365', '873465', '46387', '457', 1),
(8547, '878787456987', '845', '54645', '78954', '8', '5486', '57687', '45', '4876', '00-0000', '867', '856', '458', '6756', '6748', '6874867856754', 1),
(2147483647, '78', '897', '78', '8978', '78', '87', '7', '87', '878', '00-0000', '', '78', '87', '897', '789', '97', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
