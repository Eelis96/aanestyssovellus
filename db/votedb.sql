-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15.12.2020 klo 08:44
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
-- Database: `votedb`
--

-- --------------------------------------------------------

--
-- Rakenne taululle `option`
--

CREATE TABLE `option` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `votes` int(11) NOT NULL DEFAULT 0,
  `poll_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vedos taulusta `option`
--

INSERT INTO `option` (`id`, `name`, `votes`, `poll_id`) VALUES
(3, 'feizer sinkku', 0, 5),
(4, 'suufles pätyk', 0, 5),
(5, 'tupla', 0, 5),
(6, 'marssi', 0, 5),
(7, 'royal', 0, 5),
(8, 'volvo', 0, 6),
(9, 'mitsubishi', 0, 6),
(10, 'toyota', 0, 6),
(11, 'volkswagen', 0, 6),
(12, 'bmw', 0, 6),
(13, 'subaru', 0, 6),
(14, 'merssu', 0, 6),
(15, 'lada', 0, 6),
(16, 'trabant', 0, 6),
(17, 'wartburg', 0, 6),
(18, 'pepperoni', 0, 7),
(19, 'salami', 0, 7),
(20, 'kinkku', 0, 7),
(21, 'kebab', 0, 7),
(22, 'kana', 0, 7),
(23, 'tonnikala', 0, 7),
(24, 'pizza', 0, 8),
(25, 'kebab', 0, 8),
(26, 'piraattopuolue', 0, 9),
(27, 'persut', 0, 9),
(28, 'demarit', 0, 9),
(29, 'vasemmistoliitto', 0, 9),
(30, 'keskusta', 0, 9),
(31, 'kokoomus', 0, 9),
(32, 'vihreät', 0, 9),
(33, 'RKP', 0, 9),
(34, 'KD', 0, 9);

-- --------------------------------------------------------

--
-- Rakenne taululle `poll`
--

CREATE TABLE `poll` (
  `id` int(10) UNSIGNED NOT NULL,
  `topic` mediumtext NOT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vedos taulusta `poll`
--

INSERT INTO `poll` (`id`, `topic`, `start`, `end`, `user_id`) VALUES
(5, 'paras pätykkä', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(6, 'Paras automerkki', '2020-12-25 09:48:00', '2021-01-09 09:48:00', 1),
(7, 'Paras pizza täyte', '2021-01-01 08:22:00', '2021-01-10 14:22:00', 1),
(8, 'paras ruoka', '2020-12-14 08:09:00', '2020-12-15 09:09:00', 1),
(9, 'Paras puolue', '1990-10-10 09:00:00', '1990-11-10 09:00:00', 1);

-- --------------------------------------------------------

--
-- Rakenne taululle `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vedos taulusta `user`
--

INSERT INTO `user` (`id`, `username`, `pwd`) VALUES
(1, 'eelis', '$2y$10$5SM6DYzK.rb3Pccd1uaZM.Q2YAhPFYRcYPMcUcq4ws5Imy/h2XE8u');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `option`
--
ALTER TABLE `option`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_option_poll1_idx` (`poll_id`);

--
-- Indexes for table `poll`
--
ALTER TABLE `poll`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_poll_user_idx` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `option`
--
ALTER TABLE `option`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `poll`
--
ALTER TABLE `poll`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Rajoitteet vedostauluille
--

--
-- Rajoitteet taululle `option`
--
ALTER TABLE `option`
  ADD CONSTRAINT `fk_option_poll1` FOREIGN KEY (`poll_id`) REFERENCES `poll` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Rajoitteet taululle `poll`
--
ALTER TABLE `poll`
  ADD CONSTRAINT `fk_poll_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
