-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2016 at 04:47 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinejudge`
--

-- --------------------------------------------------------

--
-- Table structure for table `contests`
--

CREATE TABLE `contests` (
  `ContestID` int(11) NOT NULL,
  `ContestTitle` varchar(100) NOT NULL,
  `ContestStartTime` datetime NOT NULL,
  `ContestEndTime` datetime NOT NULL,
  `ContestLength` int(11) NOT NULL,
  `ContestAuthor` varchar(100) NOT NULL,
  `ContestCreatedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contests`
--

INSERT INTO `contests` (`ContestID`, `ContestTitle`, `ContestStartTime`, `ContestEndTime`, `ContestLength`, `ContestAuthor`, `ContestCreatedOn`) VALUES
(111, 'AIUB beginners Contest', '2016-12-28 12:00:00', '2016-12-30 11:59:00', 48, 'Ashik', '2016-12-27 09:12:00'),
(112, 'AIUB Advance Contest', '2016-12-29 12:00:00', '2016-12-30 12:00:00', 24, 'Ashik', '2016-12-28 11:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EmployeeName` varchar(50) NOT NULL,
  `EmployeeId` int(50) NOT NULL,
  `OfficeId` int(50) NOT NULL,
  `Salary` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmployeeName`, `EmployeeId`, `OfficeId`, `Salary`) VALUES
('Rafiq', 12345, 23456, 7000),
('Karim', 12346, 23457, 9000),
('Saimum', 12348, 23458, 30000),
('Saiful', 12349, 23459, 40000);

-- --------------------------------------------------------

--
-- Table structure for table `problems`
--

CREATE TABLE `problems` (
  `ProblemID` int(11) NOT NULL,
  `ProblemName` varchar(100) NOT NULL,
  `ProblemDesc` varchar(10000) NOT NULL,
  `SampleInput` varchar(1000) NOT NULL,
  `SampleOutput` varchar(1000) NOT NULL,
  `InputPath` varchar(100) NOT NULL,
  `OutputPath` varchar(100) NOT NULL,
  `ProblemCreatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ProblemCreatedBy` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problems`
--

INSERT INTO `problems` (`ProblemID`, `ProblemName`, `ProblemDesc`, `SampleInput`, `SampleOutput`, `InputPath`, `OutputPath`, `ProblemCreatedOn`, `ProblemCreatedBy`) VALUES
(1007, 'Employee Name sort', 'In a database named ''onlinejudge'' has some Employee. sort that EmployeeName from employee table according to alphabetical order', '', '', 'SELECT EmployeeName FROM onlinejudge.employee ORDER By EmployeeName', '', '2016-12-31 06:34:34', ''),
(1008, 'Employee name Sort by salary', 'In a database named ''onlinejudge'' has some Employee. sort that employee Salary highest to lowest from employee table ', '', '', 'SELECT EmployeeName FROM onlinejudge.employee ORDER By Salary', '', '2016-12-31 10:14:30', ''),
(1009, 'Student Name Sort', 'In a database named ''onlinejudge'' has some Student. sort that StudentName from student table according to alphabetical order', '', '', 'SELECT StudentName FROM onlinejudge.student ORDER BY StudentName', '', '2016-12-31 11:23:43', ''),
(1010, 'Student got Highest CGPA', 'In a database named ''onlinejudge'' has some Student. Show that StudentName from student table who got the highest CGPA\r\n(Hints: Max function)', '', '', 'Select StudentName from onlinejudge.student where CGPA= (select max(CGPA) from student)', '', '2016-12-31 12:24:39', ''),
(1011, 'Employee Name sort Descending order ', 'In a database named ''onlinejudge'' has some Employee. sort that EmployeeName from employee table according to alphabetical descending order', '', '', 'SELECT EmployeeName FROM onlinejudge.employee ORDER By EmployeeName DESC', '', '2016-12-31 12:35:12', ''),
(1012, 'Got Highest Salary', 'In a database named ''onlinejudge'' has some Employee. Show that EmployeeName from employee table who got the highest Salary\r\n(Hints: Max function)', '', '', 'Select EmployeeName from onlinejudge.employee where Salary = (select max(Salary) from employee)', '', '2016-12-31 12:39:12', ''),
(1013, 'Student Complete most Credits', 'In a database named ''onlinejudge'' has some Student. Show that StudentName from student table who completed most Credits\r\n(Hints: Max function)', '', '', 'Select StudentName from onlinejudge.student where Credits = (select max(Credits) from student)', '', '2016-12-31 15:45:57', '');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `SchoolID` int(11) NOT NULL,
  `SchoolName` varchar(100) NOT NULL,
  `SchoolURL` varchar(100) NOT NULL,
  `SchoolImage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `StudentName` varchar(50) NOT NULL,
  `StudentId` int(50) NOT NULL,
  `CGPA` float NOT NULL,
  `Credits` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`StudentName`, `StudentId`, `CGPA`, `Credits`) VALUES
('Ashik', 1001, 3.28, 113),
('Saiful', 1002, 3.46, 110),
('Gomez', 1003, 3.94, 128);

-- --------------------------------------------------------

--
-- Table structure for table `submissions`
--

CREATE TABLE `submissions` (
  `SubmissionID` int(11) NOT NULL,
  `SubmissionTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ProblemID` int(11) NOT NULL,
  `ContestID` int(11) NOT NULL,
  `Verdict` varchar(10) NOT NULL,
  `FilePath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(80) NOT NULL,
  `SchoolID` int(50) DEFAULT NULL,
  `Solved` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserName`, `Password`, `FirstName`, `LastName`, `Email`, `SchoolID`, `Solved`) VALUES
('abc', '1234', 'abc', 'efg', 'a.abc71@gmail.com', 1234, 0),
('ashik', '123', 'Ashik', 'Ashrafe', 'a.ashrafe71@gmail.com', 14261891, 0);

-- --------------------------------------------------------

--
-- Table structure for table `verdict`
--

CREATE TABLE `verdict` (
  `VerdictID` int(11) NOT NULL,
  `VerdictName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contests`
--
ALTER TABLE `contests`
  ADD PRIMARY KEY (`ContestID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EmployeeId`);

--
-- Indexes for table `problems`
--
ALTER TABLE `problems`
  ADD PRIMARY KEY (`ProblemID`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`SchoolID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`StudentId`);

--
-- Indexes for table `submissions`
--
ALTER TABLE `submissions`
  ADD PRIMARY KEY (`SubmissionID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserName`),
  ADD UNIQUE KEY `UserName` (`UserName`);

--
-- Indexes for table `verdict`
--
ALTER TABLE `verdict`
  ADD PRIMARY KEY (`VerdictID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contests`
--
ALTER TABLE `contests`
  MODIFY `ContestID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EmployeeId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12350;
--
-- AUTO_INCREMENT for table `problems`
--
ALTER TABLE `problems`
  MODIFY `ProblemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1014;
--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `SchoolID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `StudentId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004;
--
-- AUTO_INCREMENT for table `submissions`
--
ALTER TABLE `submissions`
  MODIFY `SubmissionID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `verdict`
--
ALTER TABLE `verdict`
  MODIFY `VerdictID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
