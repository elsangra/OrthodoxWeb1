-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2023 at 07:57 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orthodox_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `email`, `Password`) VALUES
('admin', 'admin@admin.com', 'admin123'),
('ken', 'ken@ken.com', '12');

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id` int(11) NOT NULL,
  `Firstname` varchar(30) NOT NULL,
  `Sirname` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `Firstname`, `Sirname`, `Username`, `Password`, `Email`) VALUES
(1, 'ken', 'ken', 'kathee', '12', 'ken@ken.com');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_code` varchar(10) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `semester_or_year` varchar(10) NOT NULL,
  `no_of_year` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_code`, `course_name`, `semester_or_year`, `no_of_year`) VALUES
('011', 'VB', '8', 4),
('08', 'DBMS', '8', 4),
('09', 'SP', '5', 2),
('10', 'VB', '8', 3),
('AHL', 'Allied Health Science', 'Semester', 4),
('B.Arch', 'Bachular in Architecture', 'Semester', 5),
('B.Fashion', 'Bachular in Fashion and Design', 'Semester', 4),
('BBA', 'Bachular in Business Administration', 'Semester', 2),
('BSAI', 'Bachular in Artificial Inteligence', 'Semester', 2),
('BSEE', 'Bachular in Electrical Engineering', 'Semester', 4),
('M.Arch', 'Masters in Architecture', 'Semester', 2),
('M.Com', 'Master in Commerce', 'Semester', 2),
('MCS', 'Master in Computer Science', 'Semester', 2),
('MIT', 'Master in Information Technology', 'Semester', 2);

-- --------------------------------------------------------

--
-- Table structure for table `course_subjects`
--

CREATE TABLE `course_subjects` (
  `subject_code` varchar(10) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `semester` int(10) NOT NULL,
  `credit_hours` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_subjects`
--

INSERT INTO `course_subjects` (`subject_code`, `subject_name`, `course_code`, `semester`, `credit_hours`) VALUES
('CSPD', 'Communication Skills and Personality Development', 'MCS', 1, 3),
('DBMS', 'Database Management System', 'MCS', 2, 4),
('DLD', 'Data Logic and Design', 'MCS', 2, 3),
('Ds', 'Discrete Structure', 'MCS', 1, 3),
('I2C', 'Introduction to Computer Science', 'MCS', 1, 4),
('ITP', 'IT Project Management System', 'MIT', 2, 3),
('MBAD', 'Mobile Application Development', 'MIT', 2, 4),
('OOP', 'Object Oriented Programming', 'MCS', 2, 4),
('PF', 'Programming Fundamental', 'BSAI', 1, 4),
('SE', 'Software Engineering', 'MCS', 2, 3),
('WEB', 'Web Development', 'MCS', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `elearning`
--

CREATE TABLE `elearning` (
  `course_name` varchar(255) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `pdf` varchar(255) NOT NULL,
  `videos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `elearning`
--

INSERT INTO `elearning` (`course_name`, `subject_name`, `pdf`, `videos`) VALUES
('', '', '', ''),
('Bachular', 'Discrete', 'hhdhd', 'gdrggdr'),
('Allied', 'Software', 'later', 'now'),
('Allied', 'Software', 'later', 'now'),
('Allied', 'Software', 'later', 'now');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `title` varchar(255) NOT NULL,
  `ncontent` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`title`, `ncontent`) VALUES
('school closing', 'The school closing date'),
('school closing', 'The school closing date'),
('note', 'The center is based in Kenya - Africa, on the grounds of the headquarters of the Orthodox Archbishopric of Kenya. The Orthodox Teachers College of Africa opened its doors to its first class of students in January 2003. The College is the first of its kind');

-- --------------------------------------------------------

--
-- Table structure for table `registra`
--

CREATE TABLE `registra` (
  `id` int(11) NOT NULL,
  `Firstname` varchar(30) NOT NULL,
  `Sirname` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registra`
--

INSERT INTO `registra` (`id`, `Firstname`, `Sirname`, `Username`, `Password`, `Email`) VALUES
(1, 'ken', 'ken', 'kathee', '12', 'ken@ken.com');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `reg` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `marks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`reg`, `fname`, `subject`, `semester`, `marks`) VALUES
('', '', '', '', ''),
('11', 'ken', 'hgy', '2', '45'),
('45', 'jane', 'op', '2', '56'),
('123', 'ken', 'BSEE', '1', '56'),
('5', 'ken', 'BBA', '2', '45'),
('5', 'ken', 'BBA', '2', '45'),
('5', 'ken', 'BBA', '2', '45'),
('78', 'ken', 'M.Arch', '1', '78');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `fname` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `citizen` varchar(255) NOT NULL,
  `cob` varchar(255) NOT NULL,
  `cor` varchar(255) NOT NULL,
  `idn` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `marital` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `cell` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `studies` varchar(255) NOT NULL,
  `d_studies` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_relation` varchar(255) NOT NULL,
  `p_address` varchar(255) NOT NULL,
  `p_tel` varchar(255) NOT NULL,
  `p_email` varchar(255) NOT NULL,
  `employer` varchar(255) NOT NULL,
  `doe` varchar(255) NOT NULL,
  `duties` varchar(255) NOT NULL,
  `intake` varchar(255) NOT NULL,
  `courses` varchar(255) NOT NULL,
  `finance` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_fee`
--

CREATE TABLE `student_fee` (
  `fee_voucher` int(11) NOT NULL,
  `roll_no` varchar(30) NOT NULL,
  `amount` int(11) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_fee`
--

INSERT INTO `student_fee` (`fee_voucher`, `roll_no`, `amount`, `posting_date`, `status`) VALUES
(1, 'MCS-S19-1', 23455, '2020-03-29 05:24:36', 'Paid'),
(2, 'MCS-S19-1', 20093, '2020-03-30 06:35:39', 'Paid'),
(34, '010', 10000, '0000-00-00 00:00:00', 'paid'),
(34, '010', 10000, '0000-00-00 00:00:00', 'paid'),
(34, '010', 10000, '0000-00-00 00:00:00', 'paid'),
(56, '45', 234455, '2023-02-25 18:00:00', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `Teacher_Title` varchar(30) NOT NULL,
  `Firstname` varchar(300) NOT NULL,
  `Sirname` varchar(300) NOT NULL,
  `Email` varchar(300) NOT NULL,
  `Phone` varchar(30) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `Teacher_Title`, `Firstname`, `Sirname`, `Email`, `Phone`, `Password`) VALUES
(1, 'mr', 'ken', 'kathee', 'ken@ken.com', '3444', '12'),
(2, 'mr', 'ken', 'kathee', 'ken@ken.com', '3444', '12');

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE `time_table` (
  `id` int(11) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `semester` int(11) NOT NULL,
  `timing_from` varchar(10) NOT NULL,
  `timing_to` varchar(10) NOT NULL,
  `day` varchar(20) NOT NULL,
  `subject_code` varchar(20) NOT NULL,
  `room_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`id`, `course_code`, `semester`, `timing_from`, `timing_to`, `day`, `subject_code`, `room_no`) VALUES
(0, 'B.Fashion', 2, '18:35', '21:33', '4', 'DBMS', 63),
(0, 'B.Fashion', 2, '18:35', '21:33', '4', 'DBMS', 63),
(0, 'BSEE', 1, '20:34', '23:34', '5', 'OOP', 35),
(0, '', 0, '', '', '', '', 0),
(0, '', 0, '', '', '', '', 0),
(0, '', 0, '', '', '', '', 0),
(0, 'MIT', 2, '21:05', '19:06', '4', 'I2C', 60),
(0, 'AHL', 1, '22:11', '00:08', '7', 'Ds', 21),
(0, 'AHL', 1, '22:11', '00:08', '7', 'Ds', 21),
(0, 'AHL', 1, '22:11', '00:08', '7', 'Ds', 21),
(0, 'Select Cou', 0, '', '', 'Select Week Day', 'Select Subject', 0),
(0, 'Select Cou', 0, '', '', 'Select Week Day', 'Select Subject', 0),
(0, '08', 1, '22:12', '21:12', '3', 'PF', 311);

-- --------------------------------------------------------

--
-- Table structure for table `weekdays`
--

CREATE TABLE `weekdays` (
  `day_id` int(11) NOT NULL,
  `day_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weekdays`
--

INSERT INTO `weekdays` (`day_id`, `day_name`) VALUES
(1, 'Monday'),
(2, 'Tuesday'),
(3, 'Wednesday'),
(4, 'Thursday'),
(5, 'Friday'),
(6, 'Saturday'),
(7, 'Sunday');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registra`
--
ALTER TABLE `registra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registra`
--
ALTER TABLE `registra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
