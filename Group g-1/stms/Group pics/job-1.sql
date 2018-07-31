-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 28, 2018 at 08:32 PM
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
-- Table structure for table `job`
--

DROP TABLE IF EXISTS `job`;
CREATE TABLE IF NOT EXISTS `job` (
  `jobId` int(5) NOT NULL AUTO_INCREMENT,
  `userId` varchar(5) NOT NULL,
  `jobType` varchar(15) NOT NULL,
  `job` varchar(50) NOT NULL,
  `submissionTime` varchar(50) NOT NULL,
  `processingTime` decimal(10,6) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  PRIMARY KEY (`jobId`)
) ENGINE=MyISAM AUTO_INCREMENT=3332 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`jobId`, `userId`, `jobType`, `job`, `submissionTime`, `processingTime`, `status`, `priority`) VALUES
(3331, 'U001', 'Replace', 'Middle 1-p', '16 Jul 2018 12:24:26', '0.000006', 'ready', 5),
(3328, 'U001', 'Double', 'mmeeme', '16 Jul 2018 12:24:26', '0.000013', 'ready', 2),
(3329, 'U001', 'Reverse', 'Bruno', '16 Jul 2018 12:24:26', '0.000004', 'ready', 2),
(3330, 'U001', 'Delete', 'Angel 1,2', '16 Jul 2018 12:24:26', '0.000007', 'ready', 2),
(3319, 'U001', 'Double', 'mmeeme', '16 Jul 2018 12:24:26', NULL, 'waiting', 2),
(3320, 'U001', 'Reverse', 'Bruno', '16 Jul 2018 12:24:26', NULL, 'waiting', 2),
(3321, 'U001', 'Delete', 'Angel 1,2', '16 Jul 2018 12:24:26', NULL, 'waiting', 2),
(3322, 'U001', 'Encrypt', 'ABCD', '16 Jul 2018 12:24:26', NULL, 'waiting', 3),
(3323, 'U001', 'Replace', 'Middle 1-p', '16 Jul 2018 12:24:26', NULL, 'waiting', 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
