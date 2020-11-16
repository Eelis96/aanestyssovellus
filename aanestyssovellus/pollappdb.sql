-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16.11.2020 klo 09:30
-- Palvelimen versio: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pollappdb`
--

-- --------------------------------------------------------

--
-- Rakenne taululle `polls`
--

CREATE TABLE `polls` (
  `no` int(11) NOT NULL,
  `poll_topic` varchar(50) NOT NULL,
  `poll_time` int(11) NOT NULL,
  `poll_option1` varchar(50) NOT NULL,
  `poll_option2` varchar(50) NOT NULL,
  `poll_option3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vedos taulusta `polls`
--

INSERT INTO `polls` (`no`, `poll_topic`, `poll_time`, `poll_option1`, `poll_option2`, `poll_option3`) VALUES
(1, 'ok', 10, 'ok', 'ok', 'ok'),
(2, 'ok2', 20, 'ok2', 'ok2', 'ok2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `polls`
--
ALTER TABLE `polls`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `polls`
--
ALTER TABLE `polls`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
