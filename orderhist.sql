-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2021 at 11:48 PM
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
-- Table structure for table `orderhist`
--

CREATE TABLE `orderhist` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderhist`
--

INSERT INTO `orderhist` (`id`, `name`, `contact`, `email`, `address`) VALUES
(1, 'Md. Omar Farukh', '+155562312', 'john.doe@foxmail.com', '2375 Pennsylvania Ave Nw, Estados Unidos'),
(2, '131416', '+155562312', 'thisisnotlucifer@gmail.com', '2375 Pennsylvania Ave Nw, Estados Unidos'),
(6, 'MealBuddy', '+155562312', 'jobota5089@o3live.com', '2375 Pennsylvania Ave Nw, Estados Unidos'),
(7, 'Anthony', '+432543223', 'john.doe@foxmail.com', '2375 Pennsylvania Ave Nw, Estados Unidos');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderhist`
--
ALTER TABLE `orderhist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orderhist`
--
ALTER TABLE `orderhist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
