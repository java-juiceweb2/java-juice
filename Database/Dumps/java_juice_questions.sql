-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 17, 2019 at 09:36 PM
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
-- Database: `ljk4798`
--

-- --------------------------------------------------------

--
-- Table structure for table `java_juice_questions`
--

CREATE TABLE `java_juice_questions` (
  `questionID` int(25) UNSIGNED NOT NULL,
  `question` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `java_juice_questions`
--

INSERT INTO `java_juice_questions` (`questionID`, `question`) VALUES
(1, 'What is the syntax for the main method?'),
(2, 'Which is not a way to print to the console?'),
(3, 'How do you compile a java program on the command line?'),
(4, 'How do you run a java program on the command line?'),
(5, 'How many primitve data types are their in java?'),
(6, 'What is an example of a floating point number?'),
(7, 'How do you declare a integer variable?'),
(8, 'What takes more memory?'),
(9, 'How do you declare a string variable?'),
(10, 'Which is not a valid cast?'),
(11, 'How do you get the Integer value of a double?'),
(12, 'What value can a boolean be?'),
(13, 'What would the following expression evaluate to: if (5 >= 5 && \"Hello\" == \"hello\")'),
(14, 'What is the OR operator?'),
(15, 'How do you say NOT EQUAL?'),
(16, 'What would the following evaluate to: while(true) { System.out.println(\"Hello\") }'),
(17, 'If you want to iterate over something but always run a block of code first you would use'),
(18, 'A for loop takes three conditions what are they?'),
(19, 'How do you get out of a loop?'),
(20, 'What is a method?'),
(21, 'How many times can a method be called?'),
(22, 'What does it mean if a method is void?'),
(23, 'What does the String[] args do in the main method?'),
(24, 'What does return do?'),
(25, 'What if you do not have a main method?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `java_juice_questions`
--
ALTER TABLE `java_juice_questions`
  ADD PRIMARY KEY (`questionID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `java_juice_questions`
--
ALTER TABLE `java_juice_questions`
  MODIFY `questionID` int(25) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
