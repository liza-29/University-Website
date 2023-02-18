-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 12:29 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(3, 'asfdgfgh', 'gdfhjkk@edfghjk', 'hfjhjkl'),
(4, 'Liza', 'liza@gmail.com', '12341234'),
(5, 'Super Admin', 'super@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `department_name` varchar(150) NOT NULL,
  `faculty_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department_name`, `faculty_id`) VALUES
(9, 'Computer Science And Technology', 4),
(10, 'Bachelor of Arts', 5);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `faculty_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `faculty_name`) VALUES
(4, 'Science And Technology'),
(5, 'Bachelor of Arts');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` int(11) NOT NULL,
  `program_name` varchar(150) NOT NULL,
  `program_code` varchar(10) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `program_name`, `program_code`, `department_id`) VALUES
(3, 'sdasd', '123', 456),
(4, 'B.Sc in CSE (Regular)', '011', 9),
(5, 'bba', '12', 10),
(6, 'B.Sc in CSE (Evening)', '013', 9);

-- --------------------------------------------------------

--
-- Table structure for table `semister`
--

CREATE TABLE `semister` (
  `id` int(11) NOT NULL,
  `semister_name` varchar(150) NOT NULL,
  `semister_code` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semister`
--

INSERT INTO `semister` (`id`, `semister_name`, `semister_code`, `status`) VALUES
(1, 'Summer 2022', '222', 'Active'),
(5, 'Spring-2023', '231', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `student_information`
--

CREATE TABLE `student_information` (
  `ID` int(150) NOT NULL,
  `Program` varchar(150) NOT NULL,
  `Semester` varchar(150) NOT NULL,
  `Full_name` varchar(150) NOT NULL,
  `Father_name` varchar(150) NOT NULL,
  `Mother_name` varchar(150) NOT NULL,
  `Contact` varchar(150) NOT NULL,
  `Date_Of_Birth` varchar(150) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Blood` varchar(150) NOT NULL,
  `SSC_name` varchar(150) NOT NULL,
  `SSC_dept` varchar(150) NOT NULL,
  `SSC_passing_year` varchar(150) NOT NULL,
  `SSC_result` varchar(150) NOT NULL,
  `HSC_name` varchar(150) NOT NULL,
  `roll` varchar(30) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `photo` varchar(200) DEFAULT NULL,
  `ssc_board` varchar(100) NOT NULL,
  `hsc_board` varchar(100) NOT NULL,
  `hsc_year` varchar(100) NOT NULL,
  `hsc_dept` varchar(100) NOT NULL,
  `hsc_result` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_information`
--

INSERT INTO `student_information` (`ID`, `Program`, `Semester`, `Full_name`, `Father_name`, `Mother_name`, `Contact`, `Date_Of_Birth`, `Email`, `Blood`, `SSC_name`, `SSC_dept`, `SSC_passing_year`, `SSC_result`, `HSC_name`, `roll`, `status`, `photo`, `ssc_board`, `hsc_board`, `hsc_year`, `hsc_dept`, `hsc_result`, `gender`) VALUES
(25, '4', '1', 'asdfdsa', 'sdfds', 'sdfsd', 'asdfas', '2022-12-14', 'asdasd@assfd.asdf', 'AB+', 'SSC', 'asfdsdaf', 'sdfsd', 'sdfds', 'Alim', NULL, 0, 'photo/1671535469.jpg', 'Rajshahi', 'BTEB', 'sdfsd', 'sdaf', 'sdfsd', 'Male'),
(26, '4', '1', 'Akhi', 'Test', 'Test', '0154545454', '2022-12-01', 'liza@gmail.com', 'A+', 'Dakhil', 'General', '2007', '5.00', 'HSC', NULL, 0, 'photo/1671535691.jpg', 'Madrasah', 'Jessore', '2009', 'Science', '5.00', 'Female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semister`
--
ALTER TABLE `semister`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_information`
--
ALTER TABLE `student_information`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `semister`
--
ALTER TABLE `semister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_information`
--
ALTER TABLE `student_information`
  MODIFY `ID` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
