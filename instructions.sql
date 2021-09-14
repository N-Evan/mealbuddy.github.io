-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2021 at 06:01 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mbuddy`
--

-- --------------------------------------------------------

--
-- Table structure for table `instructions`
--

CREATE TABLE `instructions` (
  `instrct_id` int(11) NOT NULL,
  `instrct1` varchar(255) NOT NULL,
  `instrct2` varchar(255) NOT NULL,
  `instrct3` varchar(255) NOT NULL,
  `instrct4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instructions`
--

INSERT INTO `instructions` (`instrct_id`, `instrct1`, `instrct2`, `instrct3`, `instrct4`) VALUES
(1, 'images/instrct/f1_prep1.jpg', 'images/instrct/f1_prep2.jpg', 'images/instrct/f1_prep3.jpg', ''),
(2, 'images/instrct/f2_prep1.jpg', 'images/instrct/f2_prep2.jpg', '', ''),
(3, 'images/instrct/f3_prep1.jpg', 'images/instrct/f3_prep2.jpg', 'images/instrct/f3_prep3.jpg', ''),
(4, 'images/instrct/f4_prep1.jpg', '', '', ''),
(5, 'images/instrct/f5_prep1.jpg', 'images/instrct/f5_prep2.jpg', 'images/instrct/f5_prep3.jpg', ''),
(6, 'images/instrct/f6_prep1.jpg', 'images/instrct/f6_prep2.jpg', 'images/instrct/f6_prep3.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `instructions`
--
ALTER TABLE `instructions`
  ADD PRIMARY KEY (`instrct_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `instructions`
--
ALTER TABLE `instructions`
  MODIFY `instrct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
