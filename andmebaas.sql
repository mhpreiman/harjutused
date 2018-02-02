-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2018 at 06:08 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `andmebaas`
--
CREATE DATABASE IF NOT EXISTS `andmebaas` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `andmebaas`;

-- --------------------------------------------------------

--
-- Table structure for table `kasutajad`
--

CREATE TABLE IF NOT EXISTS `kasutajad` (
  `kasutaja_ID` int(11) NOT NULL AUTO_INCREMENT,
  `eesnimi` varchar(15) NOT NULL,
  `perenimi` varchar(20) NOT NULL,
  `synnikuupaev` date NOT NULL,
  PRIMARY KEY (`kasutaja_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kasutajad`
--

INSERT INTO `kasutajad` (`kasutaja_ID`, `eesnimi`, `perenimi`, `synnikuupaev`) VALUES
(2, 'tere', 'tereeeeeeee', '1970-01-01'),
(3, 'tere', 'tereeeeeeee', '1970-01-01'),
(4, 'terre', 'tere', '2003-02-01'),
(5, '12', '23', '2001-01-01'),
(6, '', '', '2001-01-01'),
(7, '12', '23', '2001-01-01'),
(8, '12', '23', '2001-01-01'),
(9, '12', '23', '2001-01-01');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
