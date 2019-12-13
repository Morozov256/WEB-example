-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2019 at 08:06 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `f1site`
--
CREATE DATABASE IF NOT EXISTS `f1site` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `f1site`;

-- --------------------------------------------------------

--
-- Table structure for table `racers`
--

CREATE TABLE IF NOT EXISTS `racers` (
  `racerId` int(11) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `points` int(11) DEFAULT NULL,
  `teamId` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `racers`
--

INSERT INTO `racers` (`racerId`, `firstName`, `lastName`, `points`, `teamId`) VALUES
(1, 'Lewis', 'Hamilton', 322, 1),
(2, 'Valtteri', 'Bottas', 249, 1),
(3, 'Charles', 'Leclerc', 215, 2),
(4, 'Max', 'Verstappen', 212, 3),
(5, 'Sebastian', 'Vettel', 194, 2),
(6, 'Pierre', 'Gasly', 69, 6),
(7, 'Carlos', 'Sainz', 66, 4),
(8, 'Alexander', 'Albon', 52, 3),
(9, 'Lando', 'Norris', 35, 4),
(10, 'Daniel', 'Ricciardo', 34, 5),
(11, 'Nico', 'Hulkenberg', 34, 5),
(12, 'Daniil', 'Kvyat', 33, 6),
(13, 'Sergio', 'Perez', 33, 7),
(14, 'Kimi', 'Räikkönen', 31, 8),
(15, 'Kevin', 'Magnussen', 20, 9),
(16, 'Lance', 'Stroll', 19, 7),
(17, 'Romain', 'Grosjean', 8, 9),
(18, 'Antonio', 'Giovinazzi', 4, 8),
(19, 'Robert', 'Kubica', 1, 10),
(20, 'George', 'Russell', 0, 10);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
  `teamId` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `points` int(11) DEFAULT NULL,
  `picture` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`teamId`, `name`, `fullName`, `points`, `picture`) VALUES
(1, 'Mercedes', 'Mercedes AMG Petronas Motorsport', 571, 'mb1.jpg'),
(2, 'Ferrari', 'Scuderia Ferrari Mission Winnow', 409, 'f1.jpg'),
(3, 'Red Bull', 'Aston Martin Red Bull Racing', 311, 'rb1.jpg'),
(4, 'McLaren', 'McLaren F1 Team', 101, 'mcl1.jpg'),
(5, 'Renault', 'Renault F1 Team', 68, 'ren1.jpg'),
(6, 'Toro Rosso', 'Red Bull Toro Rosso Honda', 55, 'tr2.jpg'),
(7, 'Racing Point', 'SportPesa Racing Point F1 Team', 52, 'rp1.jpg'),
(8, 'Alfa Romeo', 'Alfa Romeo Racing', 35, 'ar1.jpg'),
(9, 'Haas', 'Haas F1 Team', 28, 'h1.jpg'),
(10, 'Williams', 'ROKiT Williams Racing', 1, 'w1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `hashPassword` varchar(255) DEFAULT NULL,
  `numbersOfSessions` int(11) DEFAULT NULL,
  `lastSession` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `name`, `email`, `password`, `hashPassword`, `numbersOfSessions`, `lastSession`) VALUES
(20, 'admin', 'admin@admin.adm', 'qwerty', '$2y$12$RAg11d6hrwDoHTvf5nVRKuv1avnTmNvr5qoDO2YmjYlmHBZiDeLmO', NULL, NULL),
(21, 'test', 'test@test.ts', '123', '$2y$12$QACQzyaykW8Z.wdY19tRDeOiCefaSHBQdLpV1.2A1rweYitzOJh4W', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `racers`
--
ALTER TABLE `racers`
  ADD PRIMARY KEY (`racerId`), ADD KEY `teamId` (`teamId`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`teamId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`), ADD UNIQUE KEY `email` (`email`), ADD UNIQUE KEY `email_2` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `racers`
--
ALTER TABLE `racers`
  MODIFY `racerId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `teamId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `racers`
--
ALTER TABLE `racers`
ADD CONSTRAINT `racers_ibfk_1` FOREIGN KEY (`teamId`) REFERENCES `teams` (`teamId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
