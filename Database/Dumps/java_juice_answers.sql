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
-- Table structure for table `java_juice_answers`
--

CREATE TABLE `java_juice_answers` (
  `questionID` int(25) NOT NULL,
  `A` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `B` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `C` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `D` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `correctAnswer` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `java_juice_answers`
--

INSERT INTO `java_juice_answers` (`questionID`, `A`, `B`, `C`, `D`, `correctAnswer`) VALUES
(1, 'public static void main(String[] args) {}', 'public void static main(String[] args) []', 'private static void main(String[] args) {}', 'public static void main(String args[]) []', 'A'),
(2, 'System.out.println()', 'System.out.printf()', 'System.err.println()', 'print()', 'D'),
(3, 'javac FILE', 'java compile FILE', 'java FILE', 'compile FILE', 'A'),
(4, 'java run FILE', 'java FILE', 'run FILE', 'run java FILE', 'B'),
(5, '4', '6', '8', 'They are all Objects', 'C'),
(6, '0', '-4', '4.65', '10', 'C'),
(7, 'int num = 8', 'num = 8', '8', '8 = int', 'A'),
(8, 'float', 'byte', 'char', 'long', 'D'),
(9, 'String str = Hello', 'String str = \"Hello\"', 'string str = \"Hello\"', 'string str = hello', 'B'),
(10, 'Integer to Double', 'Integer to Long', 'Double to Integer', 'Integer to Float', 'C'),
(11, 'double.intValue()', 'double.IntegerValue()', 'double.int()', 'double.value()', 'A'),
(12, 'false', 'True', 'Hello', '4', 'A'),
(13, 'true', 'false', 'Hello', 'error', 'B'),
(14, '&', 'OR', '|', '||', 'D'),
(15, 'not equal', '!=', 'not =', '===', 'B'),
(16, 'Hello', 'error: infinte loop', 'nothing', 'true', 'B'),
(17, 'while loop', 'if statment', 'for loop', 'do while loop', 'D'),
(18, 'incrementor, expression, increment', 'incrementor, expression', 'incrementor, expression, code', 'incrementor, value, increment', 'A'),
(19, 'exit', 'break', 'leave', 'done', 'B'),
(20, 'A data type', 'An Object', 'Something that can be called to execute code', 'A variable', 'C'),
(21, 'once', 'As much as you want', '3 times', 'never', 'B'),
(22, 'It is not a method', 'It does not return anything', 'It is unusable', 'It holds no values', 'B'),
(23, 'Gets command line input', 'Just looks cool', 'It is the standard', 'Intializes java', 'A'),
(24, 'Exits the method', 'Sets a variable', 'Exits out of the method with the variable declared after it', 'nothing', 'C'),
(25, 'Nothing will happen', 'Your code will still execute', 'Compiler error', 'Computer Crash', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `java_juice_answers`
--
ALTER TABLE `java_juice_answers`
  ADD PRIMARY KEY (`questionID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `java_juice_answers`
--
ALTER TABLE `java_juice_answers`
  MODIFY `questionID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
