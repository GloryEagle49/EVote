-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2021 at 06:34 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evote`
--
CREATE DATABASE IF NOT EXISTS `evote` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `evote`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `reg` varchar(20) NOT NULL,
  `dept` varchar(99) NOT NULL,
  `level` varchar(10) NOT NULL,
  `profileImg` varchar(99) NOT NULL DEFAULT '3.jpeg',
  `usertype` int(2) NOT NULL DEFAULT 0,
  `email` varchar(99) NOT NULL,
  `phone` varchar(99) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `reg`, `dept`, `level`, `profileImg`, `usertype`, `email`, `phone`, `pwd`, `time`) VALUES
(1, 'w', 'w', '', 'w', 'w', '', 0, 'w@w.w', 'w', 'f1290186a5d0b1ceab27f4e77c0c5d68', '2021-11-05 13:22:55'),
(2, 'f', 'f', '', 'f', 'f', '', 1, 'f@f.f', 'f', '8fa14cdd754f91cc6554c9e71929cce7', '2021-11-05 13:25:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
