-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2017 at 12:20 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reportbee`
--

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `ID` int(11) NOT NULL,
  `School_Name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`ID`, `School_Name`) VALUES
(1, 'xyz'),
(2, 'abc'),
(3, '345');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `ID` int(11) NOT NULL,
  `Section_Name` varchar(50) DEFAULT NULL,
  `Standard_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`ID`, `Section_Name`, `Standard_ID`) VALUES
(1, 'A', 1),
(2, 'B', 1),
(3, 'C', 3),
(4, 'A', 3),
(5, 'C', 7),
(6, 'B', 2),
(7, 'C', 2),
(8, 'A', 6),
(9, 'B', 6),
(10, 'C', 6),
(11, 'B', 7),
(12, 'A', 4),
(13, 'C', 4),
(14, 'E', 5),
(15, 'D', 6);

-- --------------------------------------------------------

--
-- Table structure for table `standard`
--

CREATE TABLE `standard` (
  `ID` int(11) NOT NULL,
  `Standard_Name` varchar(50) DEFAULT NULL,
  `School_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `standard`
--

INSERT INTO `standard` (`ID`, `Standard_Name`, `School_ID`) VALUES
(1, '6', 1),
(2, '7', 3),
(3, '8', 1),
(4, '8', 3),
(5, '9', 2),
(6, '10', 2),
(7, '5', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(50) DEFAULT '0',
  `section` varchar(50) DEFAULT '0',
  `standard_id` int(11) DEFAULT '0',
  `roll_no` varchar(50) DEFAULT '0',
  `school_id` int(11) DEFAULT '0',
  `DOB` date DEFAULT NULL,
  `gender` varchar(50) DEFAULT '0',
  `blood_group` varchar(50) DEFAULT '0',
  `blood_type` varchar(50) DEFAULT '0',
  `contact` tinytext,
  `email` varchar(50) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `section`, `standard_id`, `roll_no`, `school_id`, `DOB`, `gender`, `blood_group`, `blood_type`, `contact`, `email`) VALUES
('ram', '3', 5, 'C-009', 2, '2017-09-15', 'Male', 'O', '\'+\'', '1230546985', 'ctrcdm2980@yahoo.co.in'),
('shimla', '1', 1, 'A-888', 1, '2017-09-15', 'Female', 'B', '\'-\'', '7834569877', 'sriramramachidambaram@gmail.com'),
('internet of things', '5', 7, 'C-999', 1, '2017-09-08', 'Female', 'A', '\'-\'', '7734569800', 'ctrcdm@yahoo.co.in'),
('icitisee', '11', 7, 'B-987', 1, '2017-09-20', 'Female', 'A', '\'-\'', '7734569877', 'fdsfdsf@gmail.com'),
('eee', '11', 7, 'B-111', 1, '2017-09-15', 'Female', 'B', '\'-\'', '9874563210', 'sriramramachidambaram@gmail.com'),
('rek', '3', 3, 'C-098', 1, '2017-09-12', 'Male', 'B', '\'+\'', '7730069877', 'rmr.chidambaram@st.niituniversity.in'),
('dsasdsad', '13', 4, 'C-934', 3, '2017-09-04', 'Male', 'B', '\'+\'', '1596328740', 'ctrcdm29801@yahoo.co.in'),
('www', '7', 2, 'C-187', 3, '2017-09-25', 'Male', 'B', '\'+\'', '7734568877', 'ctrcdm298022@yahoo.co.in'),
('elk', '15', 6, 'D-0765', 2, '2017-09-16', 'Male', 'B', '\'+\'', '7734567877', 'sriramramachidambaram1@gmail.com'),
('wreck', '6', 2, 'B-076', 3, '2017-09-14', 'Others', 'AB', '\'+\'', '7734560077', 'thegodofwarrior22@yahoo.com'),
('kkkk', '14', 5, 'E-096', 2, '2017-09-13', 'Male', 'AB', '\'+\'', '8520369741', 'rmr.chidambaram1@st.niituniversity.in'),
('qwerty', '10', 6, 'C-0987', 2, '2017-09-29', 'Female', 'B', '\'+\'', '7896540213', 'rmr.chidambaram145@st.niituniversity.in'),
('trem', '11', 7, 'B-0987', 1, '2017-09-13', 'Female', 'B', '\'-\'', '9874563210', 'trem@gmail.com'),
('hht', '12', 4, 'A-096', 3, '2017-09-12', 'Male', 'B', '+', '7413698520', 'thegodofwarrio5555r@yahoo.com'),
('deb', '7', 2, 'C-0765', 3, '2017-09-12', 'Male', 'AB', '0', '9637410245', 'ctrcdm29801111@yahoo.co.in'),
('qsad', '4', 3, 'A-8878', 1, '2017-09-10', 'Male', 'AB', '0', '7893210456', '11111thegodofwarrior@yahoo.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK__standard` (`Standard_ID`);

--
-- Indexes for table `standard`
--
ALTER TABLE `standard`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK__school` (`School_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD KEY `FK_student_standard` (`standard_id`),
  ADD KEY `FK_student_school` (`school_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `standard`
--
ALTER TABLE `standard`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `FK__standard` FOREIGN KEY (`Standard_ID`) REFERENCES `standard` (`ID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `standard`
--
ALTER TABLE `standard`
  ADD CONSTRAINT `FK__school` FOREIGN KEY (`School_ID`) REFERENCES `school` (`ID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `FK_student_school` FOREIGN KEY (`school_id`) REFERENCES `school` (`ID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_student_standard` FOREIGN KEY (`standard_id`) REFERENCES `standard` (`ID`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
