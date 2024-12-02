-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2024 at 01:54 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ai`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcourse`
--

CREATE TABLE `addcourse` (
  `cid` int(11) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `course_fees` varchar(10) NOT NULL,
  `course_duration` varchar(20) NOT NULL,
  `course_syllabus` varchar(191) NOT NULL,
  `category` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addcourse`
--

INSERT INTO `addcourse` (`cid`, `course_name`, `course_fees`, `course_duration`, `course_syllabus`, `category`, `status`) VALUES
(2, 'React  js', '14000', '2 months', 'Basic React Functions,MERN Stack Development.', 'Certificate Course', 'Active'),
(3, 'Angular ', '16000', '3 months', 'Basic Angular Functions,MEAN Stack Development.', 'Certificate Course', 'Active'),
(4, 'IOT', '4500', '20 days', 'Basic IOT,Developing IOT projects.', 'Internship', 'Active'),
(5, 'React  Beginner', '10000', '2 months', 'React Beginner', 'Internship', 'Active'),
(6, 'java', '5000', '2 months', 'Java Basics,Oops Concept.', 'Certificate Course', 'Active'),
(9, 'Android ', '14000', '2 months', 'Basic Android to App Development', 'Internship', 'Active'),
(26, '.net', '45000', '2 month', 'sdfghjk', 'Internship', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `addstudent`
--

CREATE TABLE `addstudent` (
  `sid` int(11) NOT NULL,
  `studentname` varchar(50) NOT NULL,
  `studentcourse` varchar(50) NOT NULL,
  `joindate` date NOT NULL,
  `studentphone` int(10) NOT NULL,
  `studentemail` varchar(50) NOT NULL,
  `studentaddress` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addstudent`
--

INSERT INTO `addstudent` (`sid`, `studentname`, `studentcourse`, `joindate`, `studentphone`, `studentemail`, `studentaddress`) VALUES
(4, 'vignesh', 'java', '2024-12-03', 2147483647, 'sample@gmail.com', 'qwetyui'),
(5, 'Muthulakshmi', 'php', '2024-12-04', 2147483647, 'sample@gmail.com', 'asyuiiuytdcvbnm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcourse`
--
ALTER TABLE `addcourse`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `addstudent`
--
ALTER TABLE `addstudent`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcourse`
--
ALTER TABLE `addcourse`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `addstudent`
--
ALTER TABLE `addstudent`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
