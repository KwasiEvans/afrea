-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2022 at 03:03 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `afrea`
--

-- --------------------------------------------------------

--
-- Table structure for table `member_register`
--

CREATE TABLE `member_register` (
  `title` varchar(150) NOT NULL,
  `fName` varchar(150) NOT NULL,
  `mName` varchar(150) NOT NULL,
  `lName` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `cEmail` varchar(150) NOT NULL,
  `phNumber` varchar(150) NOT NULL,
  `country` varchar(150) NOT NULL,
  `cZip` varchar(150) NOT NULL,
  `mDura` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member_register`
--

INSERT INTO `member_register` (`title`, `fName`, `mName`, `lName`, `email`, `cEmail`, `phNumber`, `country`, `cZip`, `mDura`) VALUES
('Mr', 'Evans', 'Abbey', 'Owusu', 'evansow@gmail.com', 'evansow@gmail.com', '0540369588', 'Ghana', '12345', '23'),
('Mr', 'Evans', 'Abbey', 'Owusu', 'evansow1@gmail.com', 'evansow@gmail.com', '0540369588', 'Ghana', '12345', '23');

-- --------------------------------------------------------

--
-- Table structure for table `national_register`
--

CREATE TABLE `national_register` (
  `title` varchar(150) NOT NULL,
  `fName` varchar(150) NOT NULL,
  `mName` varchar(150) NOT NULL,
  `lName` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `cEmail` varchar(150) NOT NULL,
  `phNumber` int(11) NOT NULL,
  `country` varchar(150) NOT NULL,
  `cZip` int(11) NOT NULL,
  `mDura` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `national_register`
--

INSERT INTO `national_register` (`title`, `fName`, `mName`, `lName`, `email`, `cEmail`, `phNumber`, `country`, `cZip`, `mDura`) VALUES
('Miss', 'Evans', 'Abbey', 'Owusu', 'evansow@gmail.com', 'evansow@gmail.com', 540369588, 'Ghana', 12345, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `other_register`
--

CREATE TABLE `other_register` (
  `title` varchar(150) NOT NULL,
  `fName` varchar(150) NOT NULL,
  `mName` varchar(150) NOT NULL,
  `lName` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `cEmail` varchar(150) NOT NULL,
  `phNumber` int(11) NOT NULL,
  `country` varchar(150) NOT NULL,
  `cZip` varchar(150) NOT NULL,
  `mDura` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `other_register`
--

INSERT INTO `other_register` (`title`, `fName`, `mName`, `lName`, `email`, `cEmail`, `phNumber`, `country`, `cZip`, `mDura`) VALUES
('Miss', 'Evans', 'Aba', 'Owusu', 'evansow@gmail.com', 'evansow@gmail.com', 540369588, 'Ghana', '12345', '0000-00-00'),
('Miss', 'Evans', 'Aba', 'Owusu', 'evansow2002@gmail.com', 'evansow@gmail.com', 540369588, 'Ghana', '12345', '0000-00-00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
