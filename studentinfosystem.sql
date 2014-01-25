-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2014 at 04:43 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `studentinfosystem`
--
CREATE DATABASE IF NOT EXISTS `studentinfosystem` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `studentinfosystem`;

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `name`) VALUES
(1, 'PHP Foundation'),
(2, 'PHP Advanced');

-- --------------------------------------------------------

--
-- Table structure for table `interests`
--

CREATE TABLE IF NOT EXISTS `interests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `interests`
--

INSERT INTO `interests` (`id`, `type`, `name`) VALUES
(1, 'script', 'PHP'),
(2, 'script', 'HTML'),
(3, 'script', 'CSS'),
(4, 'script', 'ROR'),
(5, 'script', 'Note.JS'),
(6, 'language', 'C++'),
(7, 'language', 'C#'),
(8, 'language', 'VB.NET'),
(9, 'language', 'C'),
(10, 'language', 'Objective-C');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `class_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `address`, `class_id`) VALUES
(1, 'Aung Aung', 'Bldg. (1), Room (8), Botataung Pagoda Road, Pazuntaung, Yangon', 1),
(2, 'Baung Baung', 'Room (124), Bayint Naung', 2),
(3, 'Hla Hla', 'Aung Thamardi Road, Hlaing', 1),
(4, 'Goo Goo', 'Room (1), Daw Hla Pann Road', 2),
(5, 'Tin Maung Aye', 'Room (78), Myae Ni Gone', 1);

-- --------------------------------------------------------

--
-- Table structure for table `students_interests`
--

CREATE TABLE IF NOT EXISTS `students_interests` (
  `student_id` int(11) NOT NULL,
  `interest_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `students_interests`
--

INSERT INTO `students_interests` (`student_id`, `interest_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(2, 2),
(1, 6),
(1, 7),
(1, 8),
(2, 6),
(2, 7),
(2, 8),
(3, 1),
(3, 2),
(3, 3),
(4, 1),
(5, 1),
(5, 2),
(5, 4),
(5, 5),
(3, 8),
(4, 6),
(4, 7),
(4, 8),
(5, 9),
(5, 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
