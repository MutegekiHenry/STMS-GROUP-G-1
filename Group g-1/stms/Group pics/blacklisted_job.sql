-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 28, 2018 at 08:29 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blacklisted_job`
--

DROP TABLE IF EXISTS `blacklisted_job`;
CREATE TABLE IF NOT EXISTS `blacklisted_job` (
  `jobId` int(5) NOT NULL AUTO_INCREMENT,
  `userId` varchar(5) NOT NULL,
  `jobType` varchar(10) NOT NULL,
  `job` varchar(100) NOT NULL,
  PRIMARY KEY (`jobId`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blacklisted_job`
--

INSERT INTO `blacklisted_job` (`jobId`, `userId`, `jobType`, `job`) VALUES
(15, 'U001', 'Reverse', 'smgllsngagaeoeanfafdioWFAFATAFAGSFHDSFGSGSD\r\n'),
(14, 'U001', 'Double', 'xybdasdafafsggfdkjsgaslgnalkfnalgnaogienlnzlaf\r\n');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
