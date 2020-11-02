-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 02, 2020 at 01:16 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `as-2`
--
CREATE DATABASE IF NOT EXISTS `as-2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `as-2`;

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE IF NOT EXISTS `crud` (
  `r_id` int(2) NOT NULL AUTO_INCREMENT,
  `r_name` varchar(20) NOT NULL,
  `r_email` varchar(50) NOT NULL,
  `r_contact` varchar(10) NOT NULL,
  `r_date` date NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`r_id`, `r_name`, `r_email`, `r_contact`, `r_date`) VALUES
(1, 'kalyani', 'kalyanithakar25@gmail.com', '9313081039', '2020-08-31'),
(2, 'janki', 'janki37@gmail.com', '454654664', '2020-10-15'),
(3, 'princy', 'princy@gmail.com', '9313908109', '2020-10-09'),
(4, 'khyati', 'KHYATI@GMAIL.COM', '3443535353', '2020-11-19'),
(5, 'yesa', 'yesa@gmail.com', '9382343398', '2020-11-15'),
(6, 'puja', 'pooja@gmail.com', '3213932823', '2020-11-17');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
