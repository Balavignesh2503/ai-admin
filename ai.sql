-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2024 at 02:44 AM
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
(1, 'PHP', '14000', '2 months', 'Basic PHP Functions,Advanced PHP,Web Designing.', 'Certificate Course', 'Active'),
(2, 'React  js', '14000', '2 months', 'Basic React Functions,MERN Stack Development.', 'Certificate Course', 'Active'),
(3, 'Angular ', '16000', '3 months', 'Basic Angular Functions,MEAN Stack Development.', 'Certificate Course', 'Active'),
(4, 'IOT', '4500', '20 days', 'Basic IOT,Developing IOT projects.', 'Internship', 'Active'),
(5, 'React  Beginner', '10000', '2 months', 'React Beginner', 'Internship', 'Active'),
(6, 'java', '5000', '2 months', 'Java Basics,Oops Concept.', 'Certificate Course', 'Active'),
(9, 'Android ', '14000', '2 months', 'Basic Android to App Development', 'Internship', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `adddegree`
--

CREATE TABLE `adddegree` (
  `id` int(11) NOT NULL,
  `degreename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adddegree`
--

INSERT INTO `adddegree` (`id`, `degreename`) VALUES
(1, 'Bachelor Degree'),
(2, 'Master Degree'),
(3, 'Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `addstudent`
--

CREATE TABLE `addstudent` (
  `sid` int(50) NOT NULL,
  `studentname` varchar(100) NOT NULL,
  `studentcourse` varchar(100) NOT NULL,
  `studentcollege` varchar(150) NOT NULL,
  `studentdegree` varchar(100) NOT NULL,
  `department` varchar(150) NOT NULL,
  `joindate` date NOT NULL,
  `studentphone` int(10) NOT NULL,
  `studentemail` varchar(150) NOT NULL,
  `studentaddress` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addstudent`
--

INSERT INTO `addstudent` (`sid`, `studentname`, `studentcourse`, `studentcollege`, `studentdegree`, `department`, `joindate`, `studentphone`, `studentemail`, `studentaddress`) VALUES
(1, 'vignesh', '2', '1', '2', '4', '2024-12-06', 986543210, 'bala@gmail.com', 'sdfgh'),
(2, 'bala', '2', '1', '2', '4', '2024-12-06', 2147483647, 'bala@gmail.com', 'qwertyuio'),
(3, 'balavignesh', '2', '1', '2', '4', '2024-12-06', 986543210, 'bala@gmail.com', ''),
(4, 'balavignesh', '2', '1', '2', '4', '2024-12-06', 986543210, 'bala@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `id` int(11) NOT NULL,
  `collegename` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`id`, `collegename`) VALUES
(1, 'Ayya Nadar Janaki Ammal College,Sivaksi.'),
(2, 'Standard Fireworks Rajaratnam College for Women,Sivakasi.'),
(3, 'ThiyagaRajar College,Madurai.'),
(4, 'Lady Doak College,Madurai.'),
(5, 'PSR Arts & Science College,Sivakasi.'),
(6, 'A.K.D. Dharma Raja Women\'s College ,Rajapalayam.'),
(7, 'Sri S. Ramasamy Naidu Memorial College,Sattur.'),
(8, 'Mepco Schlenk Engineering College,sivakasi.'),
(9, 'Sri Kaliswari College,Sivaksi.'),
(10, ' P.S.R. Rengasamy   Engineering College,Sivakasi.'),
(11, 'Virudhunagar Hindu Nadars\' Senthikumara Nadar College,Virudhunagar.'),
(12, 'Arumugham Palaniguru Arts and Science College for Women,Chatrapatti.'),
(13, 'Kalasalingam University,Krishnankovil.');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `degree_id` int(11) NOT NULL,
  `dptname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `degree_id`, `dptname`) VALUES
(2, 1, 'Computer Application'),
(3, 1, 'Physics'),
(4, 2, 'Computer Science'),
(5, 2, 'Computer Application'),
(6, 3, 'Electrical and Electronics Engineering(EEE)'),
(7, 2, 'Physics');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcourse`
--
ALTER TABLE `addcourse`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `adddegree`
--
ALTER TABLE `adddegree`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addstudent`
--
ALTER TABLE `addstudent`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcourse`
--
ALTER TABLE `addcourse`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `adddegree`
--
ALTER TABLE `adddegree`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `addstudent`
--
ALTER TABLE `addstudent`
  MODIFY `sid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
