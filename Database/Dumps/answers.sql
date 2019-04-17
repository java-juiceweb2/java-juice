-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 17, 2019 at 05:09 PM
-- Server version: 5.5.60-MariaDB
-- PHP Version: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ace7270`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `questionID` int(25) NOT NULL,
  `A` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `B` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `C` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `D` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`questionID`, `A`, `B`, `C`, `D`) VALUES
(1, 'choice a', 'choice b', 'choice c', 'choice d'),
(2, 'choice a', 'choice b', 'choice c', 'choice d'),
(3, 'choice a', 'choice b', 'choice c', 'choice d'),
(4, 'choice a', 'choice b', 'choice c', 'choice d'),
(5, 'choice a', 'choice b', 'choice c', 'choice d'),
(6, 'choice a', 'choice b', 'choice c', 'choice d'),
(7, 'choice a', 'choice b', 'choice c', 'choice d'),
(8, 'choice a', 'choice b', 'choice c', 'choice d'),
(9, 'choice a', 'choice b', 'choice c', 'choice d'),
(10, 'choice a', 'choice b', 'choice c', 'choice d'),
(11, 'choice a', 'choice b', 'choice c', 'choice d'),
(12, 'choice a', 'choice b', 'choice c', 'choice d'),
(13, 'choice a', 'choice b', 'choice c', 'choice d'),
(14, 'choice a', 'choice b', 'choice c', 'choice d'),
(15, 'choice a', 'choice b', 'choice c', 'choice d'),
(16, 'choice a', 'choice b', 'choice c', 'choice d'),
(17, 'choice a', 'choice b', 'choice c', 'choice d'),
(18, 'choice a', 'choice b', 'choice c', 'choice d'),
(19, 'choice a', 'choice b', 'choice c', 'choice d'),
(20, 'choice a', 'choice b', 'choice c', 'choice d'),
(21, 'choice a', 'choice b', 'choice c', 'choice d'),
(22, 'choice a', 'choice b', 'choice c', 'choice d'),
(23, 'choice a', 'choice b', 'choice c', 'choice d'),
(24, 'choice a', 'choice b', 'choice c', 'choice d'),
(25, 'choice a', 'choice b', 'choice c', 'choice d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`questionID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `questionID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
