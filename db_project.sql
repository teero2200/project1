-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2024 at 05:21 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

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
  `MAJOR_COURSETYPE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `major`
--

INSERT INTO `major` (`MAJOR_ID`, `MAJOR_NAME`, `MAJOR_COURSETYPE`) VALUES
(4, '01 วิชาเอกการจัดการทั่วไป', '02วิชาชีพ'),
(5, '02 วิชาเอกการตลาด', ''),
(6, '03 วิชาเอกบริหารทรัพยากร', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `N_ID` int(11) NOT NULL,
  `N_NAME` varchar(35) DEFAULT NULL,
  `N_DETAILS` text DEFAULT NULL,
  `N_FD` blob DEFAULT NULL,
  `N_DATE` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`N_ID`, `N_NAME`, `N_DETAILS`, `N_FD`, `N_DATE`) VALUES
(69, 'ข่าวบอบู๋', 'ที่โรงอาหาร', NULL, '2024-08-06 02:53:16');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `ID_CN` varchar(13) DEFAULT NULL,
  `ID_IDEN` varchar(100) DEFAULT NULL COMMENT 'รหัสประจำตัว',
  `name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `id_major` int(11) DEFAULT NULL,
  `number` varchar(10) NOT NULL,
  `role` set('admin','teacher','student','') NOT NULL,
  `PN` varchar(10) DEFAULT NULL,
  `SG` varchar(9) DEFAULT NULL,
  `IMAGE` blob DEFAULT NULL,
  `NICKNAME` varchar(10) DEFAULT NULL,
  `DATE` date DEFAULT NULL,
  `AGE` int(11) DEFAULT NULL,
  `RELIGION` varchar(10) DEFAULT NULL,
  `CD` varchar(40) DEFAULT NULL,
  `ADDRESS` varchar(25) DEFAULT NULL,
  `SD` varchar(5) DEFAULT NULL,
  `PROVINCE` varchar(20) DEFAULT NULL,
  `ZC` varchar(5) DEFAULT NULL,
  `CP` varchar(30) DEFAULT NULL,
  `CNPN` varchar(10) DEFAULT NULL,
  `EDUCNAME` varchar(20) DEFAULT NULL,
  `EDUCEL` varchar(30) DEFAULT NULL,
  `EDUC_MAJOR` varchar(20) DEFAULT NULL,
  `EDUCSM` varchar(30) DEFAULT NULL,
  `EDUCGPA` varchar(4) DEFAULT NULL,
  `EDUCA` varchar(30) DEFAULT NULL,
  `EDUCPN` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ID_CN`, `ID_IDEN`, `name`, `email`, `password`, `id_major`, `number`, `role`, `PN`, `SG`, `IMAGE`, `NICKNAME`, `DATE`, `AGE`, `RELIGION`, `CD`, `ADDRESS`, `SD`, `PROVINCE`, `ZC`, `CP`, `CNPN`, `EDUCNAME`, `EDUCEL`, `EDUC_MAJOR`, `EDUCSM`, `EDUCGPA`, `EDUCA`, `EDUCPN`) VALUES
(1, '1631010541137', '1631010541137', 'tee', 'teebin2019@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, '', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '1631010531138', '1631010531138', 'arue', 'arue1@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, '', 'student', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '1', '1', 'Tawan', 'Tawan@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', NULL, '', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, '3', '3', 'student_Tawan', 'Tawan2@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', NULL, '', 'student', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, '12345678901', '12345678901', 'ew', 'qwe@sfdsfs.com', '416f8f6e105370e7b9d0fd983141f00b613477f8', 1, '92131313', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, '13456789', 'สวัสดีครับ ชาวโลก', 'Tawan1@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', 1, '0635965816', 'teacher', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
-- Indexes for table `fm01`
--
ALTER TABLE `fm01`
  ADD PRIMARY KEY (`FM01_ID`);

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
  ADD PRIMARY KEY (`N_ID`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ID_CN` (`ID_CN`),
  ADD UNIQUE KEY `ID_IDEN` (`ID_IDEN`);

--
-- Indexes for table `various_skills`
--
ALTER TABLE `various_skills`
  ADD PRIMARY KEY (`VS_ID`);

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
  MODIFY `MAJOR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `N_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
-- Constraints for table `various_skills`
--
ALTER TABLE `various_skills`
  ADD CONSTRAINT `various_skills_ibfk_1` FOREIGN KEY (`ST_ID`) REFERENCES `student` (`ST_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
