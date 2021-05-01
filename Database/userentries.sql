-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2021 at 09:30 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userentries`
--

-- --------------------------------------------------------

--
-- Table structure for table `userinfodtata`
--

CREATE TABLE `userinfodtata` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfodtata`
--

INSERT INTO `userinfodtata` (`id`, `user`, `email`, `mobile`, `comment`) VALUES
(6, 'Shubham', 'ssjoshiy2k@gmail.com', '09975871116', '                  s'),
(7, 'Shubham', 'ssjoshiy2k@gmail.com', '09975871116', '       BOOK YOUR SEAT NOW,,,,,,,,,           '),
(8, 'Shubham', 'ssjoshiy2k@gmail.com', '09975871116', 'gkljsdfhgkjhdkfg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userinfodtata`
--
ALTER TABLE `userinfodtata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userinfodtata`
--
ALTER TABLE `userinfodtata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
