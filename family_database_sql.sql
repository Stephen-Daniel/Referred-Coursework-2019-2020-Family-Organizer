-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: proj-mysql.uopnet.plymouth.ac.uk
-- Generation Time: Aug 12, 2020 at 01:46 PM
-- Server version: 8.0.16
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isad251_sdaniel`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appointment_id` int(10) NOT NULL,
  `family_id` int(10) NOT NULL,
  `appointment` varchar(256) NOT NULL,
  `start` varchar(100) NOT NULL,
  `comment` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `note` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appointment_id`, `family_id`, `appointment`, `start`, `comment`, `note`) VALUES
(1, 12, 'dentist', '2020-08-08T10:00', 'bad tooth', 'gums are bad'),
(2, 12, 'shops', '2020-08-13T10:30', 'take a bag', ''),
(3, 13, 'dentist', '2020-08-13T11:45', 'clean teeth before you go please', ''),
(6, 12, 'cinema', '2020-08-28T12:45', 'avengers thor', ''),
(7, 12, 'shops', '2020-08-13T08:45', 'take a bag', ''),
(8, 13, 'dentist', '2020-08-19T09:00', 'spit', ''),
(14, 13, 'party', '2020-08-11T20:56', 'buy a cake', ''),
(15, 13, 'dentist', '2020-08-30T16:32', '200 questions', '');

-- --------------------------------------------------------

--
-- Table structure for table `deadlines`
--

CREATE TABLE `deadlines` (
  `deadline_id` int(10) NOT NULL,
  `family_id` int(10) NOT NULL,
  `deadline` varchar(256) NOT NULL,
  `start` varchar(100) NOT NULL,
  `comment` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `note` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `deadlines`
--

INSERT INTO `deadlines` (`deadline_id`, `family_id`, `deadline`, `start`, `comment`, `note`) VALUES
(1, 13, 'chemistry', '2020-08-09T09:50', '20 questions', 'deadline completed on time'),
(3, 13, 'english japan', '2020-08-20T04:59', 'help', ''),
(4, 13, 'french exam', '2020-08-12T18:52', 'exam', ''),
(5, 13, 'computer exam', '2020-08-27T12:45', 'research all about the keyboard', ''),
(6, 13, 'maths', '2020-08-21T08:50', 'buy a calculator', '');

-- --------------------------------------------------------

--
-- Table structure for table `family`
--

CREATE TABLE `family` (
  `family_id` int(10) NOT NULL,
  `family_first` varchar(256) NOT NULL,
  `family_last` varchar(256) NOT NULL,
  `family_email` varchar(256) NOT NULL,
  `family_fid` varchar(256) NOT NULL,
  `family_pwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `family`
--

INSERT INTO `family` (`family_id`, `family_first`, `family_last`, `family_email`, `family_fid`, `family_pwd`) VALUES
(12, 'Stephen', 'Daniel', 'stephen.n.daniel@gmail.com', 'parent', 'parent'),
(13, 'Jack', 'Daniel', 'stephen.n.daniel@gmail.com', 'child', 'child'),
(15, 'Rosie', 'Daniel', 'rosie@gmail.com', 'rosie', 'password'),
(16, 'Louise', 'Daniel', 'louise@gmail.com', 'louise', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `deadlines`
--
ALTER TABLE `deadlines`
  ADD PRIMARY KEY (`deadline_id`);

--
-- Indexes for table `family`
--
ALTER TABLE `family`
  ADD PRIMARY KEY (`family_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appointment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `deadlines`
--
ALTER TABLE `deadlines`
  MODIFY `deadline_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `family`
--
ALTER TABLE `family`
  MODIFY `family_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
