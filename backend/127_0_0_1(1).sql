-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2021 at 08:51 PM
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
-- Table structure for table `contestants`
--

CREATE TABLE `contestants` (
  `sn` int(225) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `position` varchar(99) NOT NULL,
  `level` varchar(10) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `yr` year(4) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `posirtion`
--

CREATE TABLE `posirtion` (
  `sn` int(225) NOT NULL,
  `spotname` varchar(111) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `receiptlog`
--

CREATE TABLE `receiptlog` (
  `sn` int(255) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `receiptdate` int(11) NOT NULL,
  `receiptNumber` int(11) NOT NULL,
  `times` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `receiptlog2`
--

CREATE TABLE `receiptlog2` (
  `sn` int(225) NOT NULL,
  `userid` int(225) NOT NULL,
  `receiptnumber` varchar(111) NOT NULL,
  `yr` year(4) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `votep`
--

CREATE TABLE `votep` (
  `sn` int(11) NOT NULL,
  `timeerh` int(4) NOT NULL,
  `timeerm` int(4) NOT NULL DEFAULT 0,
  `timeers` int(4) NOT NULL DEFAULT 0,
  `timeState` int(2) NOT NULL DEFAULT 0,
  `yr` year(4) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `votep`
--

INSERT INTO `votep` (`sn`, `timeerh`, `timeerm`, `timeers`, `timeState`, `yr`) VALUES
(1, 3, 0, 0, 4, 2021);

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `sn` int(255) NOT NULL,
  `votefor` int(11) NOT NULL,
  `voter` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `yr` year(4) NOT NULL DEFAULT current_timestamp(),
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contestants`
--
ALTER TABLE `contestants`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `posirtion`
--
ALTER TABLE `posirtion`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `receiptlog`
--
ALTER TABLE `receiptlog`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `receiptlog2`
--
ALTER TABLE `receiptlog2`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votep`
--
ALTER TABLE `votep`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`sn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contestants`
--
ALTER TABLE `contestants`
  MODIFY `sn` int(225) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posirtion`
--
ALTER TABLE `posirtion`
  MODIFY `sn` int(225) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `receiptlog`
--
ALTER TABLE `receiptlog`
  MODIFY `sn` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `receiptlog2`
--
ALTER TABLE `receiptlog2`
  MODIFY `sn` int(225) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `votep`
--
ALTER TABLE `votep`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `sn` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
