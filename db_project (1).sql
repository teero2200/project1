-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2024 at 10:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AM_ID` varchar(13) NOT NULL,
  `AM_NAME` varchar(30) NOT NULL,
  `AM_PASSWORD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AM_ID`, `AM_NAME`, `AM_PASSWORD`) VALUES
('1849901481431', 'Admin', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441');

-- --------------------------------------------------------

--
-- Table structure for table `fm01`
--

CREATE TABLE `fm01` (
  `FM01_ID` int(11) NOT NULL,
  `TC_ID` varchar(13) NOT NULL,
  `ST_ID` varchar(13) NOT NULL,
  `FMLN_ID` int(11) NOT NULL,
  `FM01_RD` date NOT NULL DEFAULT current_timestamp(),
  `FM01_TD` date NOT NULL DEFAULT current_timestamp(),
  `FM01_DP` varchar(50) NOT NULL,
  `FM01_STATUS` varchar(50) NOT NULL,
  `FM01_NOTE` text NOT NULL,
  `FM01_MAJOR` varchar(50) NOT NULL,
  `FM01_JD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fm_location`
--

CREATE TABLE `fm_location` (
  `FMLN_ID` int(11) NOT NULL,
  `FMLN_NAME` varchar(35) NOT NULL,
  `FMLN_ADDRESS` varchar(10) NOT NULL,
  `FMLN_MOO` varchar(3) NOT NULL,
  `FMLN_ROAD` varchar(25) NOT NULL,
  `FMLN_SD` varchar(25) NOT NULL,
  `FMLN_PROVINCE` varchar(35) NOT NULL,
  `FMLN_ZC` varchar(5) NOT NULL,
  `FMLN_NUMBER` varchar(10) NOT NULL,
  `FMLN_FAX` varchar(10) NOT NULL,
  `FMLN_PN` varchar(10) NOT NULL,
  `FMLN_EMAIL` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `major`
--

CREATE TABLE `major` (
  `MAJOR_ID` int(11) NOT NULL,
  `MAJOR_NAME` varchar(35) NOT NULL,
  `MAJOR_COURSETYPE` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `major`
--

INSERT INTO `major` (`MAJOR_ID`, `MAJOR_NAME`, `MAJOR_COURSETYPE`) VALUES
(1, 'A', ''),
(2, 'b', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `N_ID` int(11) NOT NULL,
  `AM_ID` varchar(13) NOT NULL,
  `N_NAME` varchar(35) NOT NULL,
  `N_DETAILS` text NOT NULL,
  `N_FD` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ST_ID` varchar(13) NOT NULL,
  `MAJOR_ID` varchar(2) NOT NULL,
  `ST_NAME` varchar(30) NOT NULL,
  `ST_PASSWORD` varchar(255) NOT NULL,
  `ST_ID_CN` varchar(13) NOT NULL,
  `ST_PN` varchar(10) NOT NULL,
  `ST_EMAIL` varchar(30) NOT NULL,
  `ST_SG` varchar(9) NOT NULL,
  `ST_IMAGE` blob NOT NULL,
  `ST _NICKNAME` varchar(10) NOT NULL,
  `ST _DATE` date NOT NULL DEFAULT current_timestamp(),
  `ST _AGE` int(11) NOT NULL,
  `ST _RELIGION` varchar(10) NOT NULL,
  `ST _CD` varchar(40) NOT NULL,
  `ST _ADDRESS` varchar(25) NOT NULL,
  `ST _SD` varchar(10) NOT NULL,
  `ST _PROVINCE` varchar(20) NOT NULL,
  `ST _ZC` varchar(5) NOT NULL,
  `ST _CP` varchar(30) NOT NULL,
  `ST _CNPN` varchar(10) NOT NULL,
  `ST_EDUCNAME` varchar(20) NOT NULL,
  `ST_EDUCEL` varchar(30) NOT NULL,
  `ST_EDUC_MAJOR` varchar(20) NOT NULL,
  `ST _EDUCSM` varchar(30) NOT NULL,
  `ST _EDUCGPA` varchar(4) NOT NULL,
  `ST _EDUCA` varchar(30) NOT NULL,
  `ST _EDUCPN` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ST_ID`, `MAJOR_ID`, `ST_NAME`, `ST_PASSWORD`, `ST_ID_CN`, `ST_PN`, `ST_EMAIL`, `ST_SG`, `ST_IMAGE`, `ST _NICKNAME`, `ST _DATE`, `ST _AGE`, `ST _RELIGION`, `ST _CD`, `ST _ADDRESS`, `ST _SD`, `ST _PROVINCE`, `ST _ZC`, `ST _CP`, `ST _CNPN`, `ST_EDUCNAME`, `ST_EDUCEL`, `ST_EDUC_MAJOR`, `ST _EDUCSM`, `ST _EDUCGPA`, `ST _EDUCA`, `ST _EDUCPN`) VALUES
('1631010541137', '', 'ธีรภัทร ศรีทองกุล', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '', '', 'teebin2019@gmail.com', '', '', '', '2024-07-03', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('1631010541138', '', 'ธีรภัทร ศรีทองกุล', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '', '', 'teebin2020@gmail.com', '', '', '', '2024-07-03', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('1631010541139', '', 'ธีรภัทร ศรีทองกุล', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '', '', 'teebin2021@gmail.com', '', '', '', '2024-07-03', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('1631010541140', '', 'ธีรภัทร ศรีทองกุล', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', '', 'teebin2022@gmail.com', '', '', '', '2024-07-04', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('1631010541141', '', 'ธีรภัทร ศรีทองกุล', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', '', 'teebin2023@gmail.com', '', '', '', '2024-07-04', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('1631010541180', '', 'Tree Srithongkul', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', '', '123@gmail.com', '', '', '', '2024-07-08', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('1631010541181', '', 'Tree Srithongkul', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', '', '1234@gmail.com', '', '', '', '2024-07-08', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `ID` int(10) NOT NULL,
  `FirstName` varchar(200) DEFAULT NULL,
  `LastName` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Address` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`ID`, `FirstName`, `LastName`, `MobileNumber`, `Email`, `Address`, `CreationDate`) VALUES
(3, 'ธีรภัทร', 'ศรีทองกุล', 635965816, 'teebin2019@gmail.com', '39/1 ม.5 ต.ดอนสัก อ.ดอนสัก จ.สุราษฎร์ธานี', '2024-07-05 01:38:34');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `TC_ID` varchar(13) NOT NULL,
  `MAJOR_ID` int(11) NOT NULL,
  `TC_NAME` varchar(30) NOT NULL,
  `TC_PASSWORD` varchar(255) NOT NULL,
  `TC_NUMBER` varchar(10) NOT NULL,
  `TC_EMAIL` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`TC_ID`, `MAJOR_ID`, `TC_NAME`, `TC_PASSWORD`, `TC_NUMBER`, `TC_EMAIL`) VALUES
('1631010541137', 1, 't', '13d3cbfbc80930dbd217ff41e4f0cdda306b0602', '0635965816', '1631010541137@rmutr.ac.th');

-- --------------------------------------------------------

--
-- Table structure for table `various_skills`
--

CREATE TABLE `various_skills` (
  `VS_ID` int(11) NOT NULL,
  `ST_ID` varchar(13) NOT NULL,
  `VS_ESPEAK` varchar(8) NOT NULL,
  `VS_EWRITE` varchar(8) NOT NULL,
  `VS_EREAD` varchar(8) NOT NULL,
  `VS_OLSPEAK1` varchar(8) NOT NULL,
  `VS_OLWRITE1` varchar(8) NOT NULL,
  `VS_OLREAD1` varchar(8) NOT NULL,
  `VS_OLSPEAK2` varchar(8) NOT NULL,
  `VS_OLWRITE2` varchar(8) NOT NULL,
  `VS_OLREAD2` varchar(8) NOT NULL,
  `VS_TYPE` varchar(2) NOT NULL,
  `VS_TTPM` varchar(3) NOT NULL,
  `VS_ETPM` varchar(3) NOT NULL,
  `VS_PROGRAM` varchar(100) NOT NULL,
  `VS_VEHICLE` varchar(11) NOT NULL,
  `VS_LICENSE` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AM_ID`);

--
-- Indexes for table `fm01`
--
ALTER TABLE `fm01`
  ADD PRIMARY KEY (`FM01_ID`),
  ADD KEY `TC_ID` (`TC_ID`,`ST_ID`,`FMLN_ID`),
  ADD KEY `ST_ID` (`ST_ID`),
  ADD KEY `FMLN_ID` (`FMLN_ID`);

--
-- Indexes for table `fm_location`
--
ALTER TABLE `fm_location`
  ADD PRIMARY KEY (`FMLN_ID`);

--
-- Indexes for table `major`
--
ALTER TABLE `major`
  ADD PRIMARY KEY (`MAJOR_ID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`N_ID`),
  ADD KEY `AM_ID` (`AM_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ST_ID`),
  ADD KEY `MAJOR_ID` (`MAJOR_ID`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`TC_ID`),
  ADD KEY `MAJOR_ID` (`MAJOR_ID`);

--
-- Indexes for table `various_skills`
--
ALTER TABLE `various_skills`
  ADD PRIMARY KEY (`VS_ID`),
  ADD KEY `ST_ID` (`ST_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fm01`
--
ALTER TABLE `fm01`
  MODIFY `FM01_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fm_location`
--
ALTER TABLE `fm_location`
  MODIFY `FMLN_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `major`
--
ALTER TABLE `major`
  MODIFY `MAJOR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `N_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `various_skills`
--
ALTER TABLE `various_skills`
  MODIFY `VS_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fm01`
--
ALTER TABLE `fm01`
  ADD CONSTRAINT `fm01_ibfk_1` FOREIGN KEY (`TC_ID`) REFERENCES `teacher` (`TC_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fm01_ibfk_2` FOREIGN KEY (`ST_ID`) REFERENCES `student` (`ST_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fm01_ibfk_3` FOREIGN KEY (`FMLN_ID`) REFERENCES `fm_location` (`FMLN_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`AM_ID`) REFERENCES `admin` (`AM_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`MAJOR_ID`) REFERENCES `major` (`MAJOR_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `various_skills`
--
ALTER TABLE `various_skills`
  ADD CONSTRAINT `various_skills_ibfk_1` FOREIGN KEY (`ST_ID`) REFERENCES `student` (`ST_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
