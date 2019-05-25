-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2019 at 01:40 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sims`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(6) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `time`) VALUES
(1, 'arbn', '21232f297a57a5a743894a0e4a801fc3', '2019-05-25 11:40:14');

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id` int(6) NOT NULL,
  `stdimage` varchar(250) DEFAULT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `grade` varchar(250) DEFAULT NULL,
  `section` varchar(250) DEFAULT NULL,
  `rollno` int(6) DEFAULT NULL,
  `peradd` varchar(250) DEFAULT NULL,
  `tempadd` varchar(250) DEFAULT NULL,
  `fathername` varchar(250) DEFAULT NULL,
  `fatherphone` varchar(250) DEFAULT NULL,
  `fatheroccupation` varchar(250) DEFAULT NULL,
  `mothername` varchar(250) DEFAULT NULL,
  `motherphone` varchar(250) DEFAULT NULL,
  `motheroccupation` varchar(250) DEFAULT NULL,
  `academicremarks` text,
  `sports` text,
  `competitions` text,
  `rewards` text,
  `punishments` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`time`, `id`, `stdimage`, `firstname`, `lastname`, `dob`, `gender`, `grade`, `section`, `rollno`, `peradd`, `tempadd`, `fathername`, `fatherphone`, `fatheroccupation`, `mothername`, `motherphone`, `motheroccupation`, `academicremarks`, `sports`, `competitions`, `rewards`, `punishments`) VALUES
('2018-09-08 02:12:33', 1, '2018_08_14_12_48_11_a.jpg', 'Nirmal', 'Thapa', '2018-09-08', 'Male', '10', NULL, NULL, '', '', '', '', '', '', '', '', '1st in first term', '', '', '', ''),
('2018-08-14 07:03:34', 2, '2018_08_14_12_48_34_b.jpg', 'Xuppu', 'Poudel', '0000-00-00', 'Female', '8', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', ''),
('2018-09-08 02:04:02', 3, '2018_08_14_12_49_12_c.png', 'Sanju', 'Chhetri', '0000-00-00', 'Male', '10', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', ''),
('2018-09-08 03:21:39', 4, '2018_08_16_10_44_24_b.jpg', 'Bishal', 'Maharjan', '2018-09-01', 'Male', '9', NULL, NULL, '', '', '', '', '', '', '', '', '', 'football, table-tennis(tt), basketball, swimming', '', '', ''),
('2018-09-08 03:22:04', 5, '2018_08_14_12_52_46_e.jpg', 'Samir', 'Subedi', '0000-00-00', 'Male', '9', NULL, NULL, 'Balaju', '', '', '', '', '', '', '', '', 'basketball, swimming', '', '', ''),
('2018-09-08 02:09:19', 7, '2018_09_08_07_54_19_mark.jpg', 'Mark', 'Zuckerberg', '1984-05-12', 'Male', '9', NULL, NULL, 'New York', '', 'Edward Zuckerberg', '', '', 'Karen Kempner', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `studentinfo`
--
ALTER TABLE `studentinfo`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
