-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2022 at 06:14 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'Yvette', '123456'),
(2, 'Fabrice', '123456'),
(3, 'Florence', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `classId` int(11) NOT NULL,
  `className` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `std_id` int(10) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `firstName`, `lastName`, `age`, `gender`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'IZANYIBUKA', 'Yvette', '22', 'female', 'Yvette1', 'izanyibukayvette@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2022-07-29 22:40:34'),
(3, 'BYUKUSENGE', 'Nadine Fiona', '18', 'female', 'Nadine', 'fiona@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2022-07-30 12:08:31'),
(5, 'NIYOMUKESHA ', 'Florence', '20', 'female', 'fofo', 'fofo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2022-07-30 12:13:43'),
(6, 'HABIMANA', 'Tresor', '23', 'male', 'tresor', 'tresor@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2022-07-30 15:37:16'),
(11, 'pivo', 'regis', '12', 'male', 'rexi', 'rexi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2022-08-02 18:11:02');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `courseName` varchar(50) NOT NULL,
  `subjId` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `userName` varchar(50) NOT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `firstName`, `lastName`, `phone`, `email`, `userName`, `password`) VALUES
(1, 'MUHOZA', 'bonquet', 2147483647, NULL, 'muhoza', 'e10adc3949ba59abbe56'),
(3, 'IZANYIBUKA', 'Yvette', 9999, NULL, 'Yvette2', 'e10adc3949ba59abbe56'),
(7, 'MWANAFUNZI', 'Fabrice', 786684390, 'fab@gmail.com', 'fab', 'e10adc3949ba59abbe56'),
(8, 'David', 'MUGARAGU', 0, 'dev@gmail.com', 'devs', 'e10adc3949ba59abbe56'),
(9, 'KAAREKEZI', 'SIbille', 789878, 'si@gmail.com', 'sib', 'e10adc3949ba59abbe56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`classId`),
  ADD UNIQUE KEY `className` (`className`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `firstName` (`firstName`),
  ADD UNIQUE KEY `lastName` (`lastName`),
  ADD UNIQUE KEY `telephone` (`telephone`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `firstName` (`firstName`),
  ADD UNIQUE KEY `lastName` (`lastName`),
  ADD UNIQUE KEY `age` (`age`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `courseName` (`courseName`),
  ADD UNIQUE KEY `subjId` (`subjId`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `firstName` (`firstName`),
  ADD UNIQUE KEY `lastName` (`lastName`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `classId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
