-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 20, 2019 at 03:35 AM
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
-- Table structure for table `java_juice_quiz_results`
--

CREATE TABLE `java_juice_quiz_results` (
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `question1` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `question2` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `question3` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `question4` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `question5` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `question6` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `question7` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `question8` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `question9` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `question10` varchar(1) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
