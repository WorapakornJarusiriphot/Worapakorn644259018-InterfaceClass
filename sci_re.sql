-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2023 at 07:01 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sci_course`
--

-- --------------------------------------------------------

--
-- Table structure for table `sci_re`
--

CREATE TABLE `sci_re` (
  `re_id` int(11) NOT NULL,
  `re_email` varchar(255) NOT NULL,
  `re_prefix` varchar(100) NOT NULL,
  `re_name` varchar(255) NOT NULL,
  `re_phonenumber` char(10) DEFAULT NULL,
  `re_IDnumber` char(13) DEFAULT NULL,
  `re_educational` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sci_re`
--

INSERT INTO `sci_re` (`re_id`, `re_email`, `re_prefix`, `re_name`, `re_phonenumber`, `re_IDnumber`, `re_educational`) VALUES
(1, '644259018@webmail.npru.ac.th', 'นาย', 'วรปกร จารุศิริพจน์', '0623844415', '1739902046896', 'มัธยมปลาย');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sci_re`
--
ALTER TABLE `sci_re`
  ADD PRIMARY KEY (`re_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sci_re`
--
ALTER TABLE `sci_re`
  MODIFY `re_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
