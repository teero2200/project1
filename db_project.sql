-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2024 at 04:21 AM
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
-- Table structure for table `fm1`
--

CREATE TABLE `fm1` (
  `FM01_ID` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `FMLN_ID` int(11) DEFAULT NULL,
  `FM01_RD` date DEFAULT NULL,
  `FM01_TD` date DEFAULT NULL,
  `FM01_DP` varchar(255) DEFAULT NULL,
  `FM01_STATUS` varchar(255) DEFAULT NULL,
  `FM01_NOTE` varchar(255) DEFAULT NULL,
  `FM01_MAJOR` varchar(255) DEFAULT NULL,
  `FM01_JD` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fm1`
--

INSERT INTO `fm1` (`FM01_ID`, `id_user`, `role`, `FMLN_ID`, `FM01_RD`, `FM01_TD`, `FM01_DP`, `FM01_STATUS`, `FM01_NOTE`, `FM01_MAJOR`, `FM01_JD`) VALUES
(6, 7, 'student', 0, '2020-03-22', '2020-03-23', 'อาจารย์ที่ปรึกษา', 'รอดำเนินการ', 'ไม่รู้', 'วิทย์-คอม', 'ขายบริการ'),
(7, 7, 'student', NULL, '2020-03-23', '2020-03-24', 'อาจารย์ที่ปรึกษา', 'รอดำเนินการ', 'ไม่รู้', 'วิทย์-คอม', 'ขายบริการ'),
(8, 7, 'student', NULL, '2020-03-24', '2020-03-25', 'อาจารย์ที่ปรึกษา', 'รอดำเนินการ', 'ไม่รู้', 'วิทย์-คอม', 'ขายบริการ'),
(9, 7, 'student', 48, '2020-03-25', '2020-03-26', 'อาจารย์ที่ปรึกษา', 'รอดำเนินการ', 'ไม่รู้', 'วิทย์-คอม', 'ขายบริการ'),
(10, 7, 'student', 49, '2020-03-26', '2020-03-27', 'อาจารย์ที่ปรึกษา', 'รอดำเนินการ', 'ไม่รู้', 'วิทย์-คอม', 'ขายบริการ'),
(11, 7, 'student', 50, '2021-03-26', '2020-03-28', 'อาจารย์ที่ปรึกษา', 'รอดำเนินการ', 'ไม่รู้', 'วิทย์-คอม', 'ขายบริการ'),
(12, 7, 'student', 51, '2022-03-26', '2022-03-27', 'อาจารย์ที่ปรึกษา', 'รอดำเนินการ', 'ไม่รู้', 'วิทย์-คอม', 'ขายบริการ'),
(13, 7, 'student', 52, '2022-03-27', '2022-03-28', 'อาจารย์ที่ปรึกษา', 'รอดำเนินการ', 'ไม่รู้', 'วิทย์-คอม', 'ขายบริการ'),
(14, 7, 'student', 53, '2022-03-28', '2022-03-29', 'อาจารย์ที่ปรึกษา', 'รอดำเนินการ', 'ไม่รู้', 'วิทย์-คอม', 'ขายบริการ'),
(15, 7, 'student', 54, '2022-03-29', '2022-03-30', 'อาจารย์ที่ปรึกษา', 'รอดำเนินการ', 'ไม่รู้', 'วิทย์-คอม', 'ขายบริการ'),
(16, 7, 'student', 55, '2022-03-30', '2022-04-02', 'อาจารย์ที่ปรึกษา', 'รอดำเนินการ', 'ไม่รู้', 'วิทย์-คอม', 'ขายบริการ'),
(17, 7, 'student', 56, '2022-03-31', '2022-04-03', 'อาจารย์ที่ปรึกษา', 'รอดำเนินการ', 'ไม่รู้', 'วิทย์-คอม', 'ขายบริการ'),
(18, 7, 'student', 57, '2023-03-31', '2023-04-04', 'อาจารย์ที่ปรึกษา', 'รอดำเนินการ', 'ไม่รู้', 'วิทย์-คอม', 'ขายบริการ'),
(19, 7, 'student', 58, '2024-03-31', '2024-04-04', 'อาจารย์ที่ปรึกษา', 'รอดำเนินการ', 'ไม่รู้', 'วิทย์-คอม', 'ขายบริการ'),
(20, 7, 'student', 59, '2022-04-03', '2025-04-04', 'อาจารย์ที่ปรึกษา', 'รอดำเนินการ', 'ไม่รู้', 'วิทย์-คอม', 'ขายบริการ'),
(21, 7, 'student', 60, '2022-04-04', '2026-04-04', 'อาจารย์ที่ปรึกษา', 'รอดำเนินการ', 'ไม่รู้', 'วิทย์-คอม', 'ขายบริการ'),
(22, 7, 'student', 61, '2022-04-05', '2027-04-04', 'อาจารย์ที่ปรึกษา', 'รอดำเนินการ', 'ไม่รู้', 'วิทย์-คอม', 'ขายบริการ'),
(23, 7, 'student', 62, '2022-04-06', '2028-04-04', 'อาจารย์ที่ปรึกษา', 'รอดำเนินการ', 'ไม่รู้', 'วิทย์-คอม', 'ขายบริการ'),
(24, 7, 'student', 63, '2022-04-07', '2029-04-04', 'อาจารย์ที่ปรึกษา', 'รอดำเนินการ', 'ไม่รู้', 'วิทย์-คอม', 'ขายบริการ'),
(25, 7, 'student', 64, '2023-04-07', '2030-04-04', 'อาจารย์ที่ปรึกษา', 'รอดำเนินการ', 'ไม่รู้', 'วิทย์-คอม', 'ขายบริการ'),
(26, 7, 'student', 65, '2024-04-07', '2031-04-04', 'อาจารย์ที่ปรึกษา', 'รอดำเนินการ', 'ไม่รู้', 'วิทย์-คอม', 'ขายบริการ'),
(27, 7, 'student', 66, '2025-04-07', '2032-04-04', 'อาจารย์ที่ปรึกษา', 'รอดำเนินการ', 'ไม่รู้', 'วิทย์-คอม', 'ขายบริการ'),
(28, 7, 'student', 67, '2022-04-11', '2033-04-04', 'อาจารย์ที่ปรึกษา', 'รอดำเนินการ', 'ไม่รู้', 'วิทย์-คอม', 'ขายบริการ');

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
-- Table structure for table `fm_location_log`
--

CREATE TABLE `fm_location_log` (
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
  `FMLN_EMAIL` varchar(35) NOT NULL,
  `update` timestamp NOT NULL DEFAULT current_timestamp()
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
  `N_NAME` varchar(100) DEFAULT NULL,
  `N_DATE` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`N_ID`, `N_NAME`, `N_DATE`) VALUES
(1, 'aaaaaaaadsadsadasdadsadsadsa', '2024-08-22 13:06:06'),
(2, 'aaaaaaaadsadsadasdadsadsadsa', '2024-08-22 13:06:10');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `ST_ID` varchar(13) NOT NULL,
  `MAJOR_ID` int(11) DEFAULT NULL,
  `ST_NAME` varchar(30) DEFAULT NULL,
  `ST_PASSWORD` text DEFAULT NULL,
  `ST_ID_CN` varchar(13) DEFAULT NULL,
  `ST_PN` varchar(10) DEFAULT NULL,
  `ST_EMAIL` varchar(30) DEFAULT NULL,
  `ST_SG` varchar(9) DEFAULT NULL,
  `ST_IMAGE` blob DEFAULT NULL,
  `ST_NICKNAME` varchar(10) DEFAULT NULL,
  `ST_DATE` date DEFAULT NULL,
  `ST_AGE` int(2) DEFAULT NULL,
  `ST_RELIGION` varchar(10) DEFAULT NULL,
  `ST_CD` varchar(40) DEFAULT NULL,
  `ST_ADDRESS` varchar(25) DEFAULT NULL,
  `ST_SD` varchar(10) DEFAULT NULL,
  `ST_PROVINCE` varchar(20) DEFAULT NULL,
  `ST_ZC` varchar(5) DEFAULT NULL,
  `ST_CP` varchar(30) DEFAULT NULL,
  `ST_CNPN` varchar(10) DEFAULT NULL,
  `ST_EDUCNAME` varchar(20) DEFAULT NULL,
  `ST_EDUCEL` varchar(30) DEFAULT NULL,
  `ST_EF` varchar(30) DEFAULT NULL,
  `ST_EDUC_MAJOR` varchar(20) DEFAULT NULL,
  `ST_EDUCSM` varchar(30) DEFAULT NULL,
  `ST_EDUCGPA` varchar(4) DEFAULT NULL,
  `ST_EDUCA` varchar(30) DEFAULT NULL,
  `ST_EDUCPN` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `ST_ID`, `MAJOR_ID`, `ST_NAME`, `ST_PASSWORD`, `ST_ID_CN`, `ST_PN`, `ST_EMAIL`, `ST_SG`, `ST_IMAGE`, `ST_NICKNAME`, `ST_DATE`, `ST_AGE`, `ST_RELIGION`, `ST_CD`, `ST_ADDRESS`, `ST_SD`, `ST_PROVINCE`, `ST_ZC`, `ST_CP`, `ST_CNPN`, `ST_EDUCNAME`, `ST_EDUCEL`, `ST_EF`, `ST_EDUC_MAJOR`, `ST_EDUCSM`, `ST_EDUCGPA`, `ST_EDUCA`, `ST_EDUCPN`) VALUES
(1, '1', 0, '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]', 0x5b76616c75652d395d, '[value-10]', '0000-00-00', 0, '[value-13]', '[value-14]', '[value-15]', '[value-16]', '[value-17]', '[valu', '[value-19]', '[value-20]', '[value-21]', '[value-22]', '[value-23]', '[value-24]', '[value-25]', '[val', '[value-27]', '[value-28]'),
(2, '2', 0, '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]', 0x5b76616c75652d395d, '[value-10]', '0000-00-00', 0, '[value-13]', '[value-14]', '[value-15]', '[value-16]', '[value-17]', '[valu', '[value-19]', '[value-20]', '[value-21]', '[value-22]', '[value-23]', '[value-24]', '[value-25]', '[val', '[value-27]', '[value-28]'),
(3, '3', 0, '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]', 0x5b76616c75652d395d, '[value-10]', '0000-00-00', 0, '[value-13]', '[value-14]', '[value-15]', '[value-16]', '[value-17]', '[valu', '[value-19]', '[value-20]', '[value-21]', '[value-22]', '[value-23]', '[value-24]', '[value-25]', '[val', '[value-27]', '[value-28]'),
(4, '4', 0, '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]', 0x5b76616c75652d395d, '[value-10]', '0000-00-00', 0, '[value-13]', '[value-14]', '[value-15]', '[value-16]', '[value-17]', '[valu', '[value-19]', '[value-20]', '[value-21]', '[value-22]', '[value-23]', '[value-24]', '[value-25]', '[val', '[value-27]', '[value-28]'),
(5, '5', 0, '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]', 0x5b76616c75652d395d, '[value-10]', '0000-00-00', 0, '[value-13]', '[value-14]', '[value-15]', '[value-16]', '[value-17]', '[valu', '[value-19]', '[value-20]', '[value-21]', '[value-22]', '[value-23]', '[value-24]', '[value-25]', '[val', '[value-27]', '[value-28]'),
(6, '3', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, '3', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, '3', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, '3', 0, 'student_Tawan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
  `ID_IDEN` varchar(100) DEFAULT NULL COMMENT 'รหัสประจำตัว',
  `name` varchar(30) NOT NULL COMMENT 'ชื่อ-สกุล',
  `ID_CN` varchar(13) DEFAULT NULL,
  `SG` varchar(9) DEFAULT NULL COMMENT 'กลุ่มเรียน',
  `EDUC_MAJOR` varchar(20) DEFAULT NULL COMMENT 'สาขาวิชา',
  `PN` varchar(10) DEFAULT NULL COMMENT 'เบอร์โทร',
  `email` varchar(100) NOT NULL COMMENT 'อีเมลล์',
  `NICKNAME` varchar(10) DEFAULT NULL COMMENT 'ชื่อเล่น',
  `DATE` date DEFAULT NULL COMMENT 'วันเกิด',
  `AGE` int(3) DEFAULT NULL COMMENT 'อายุ',
  `RELIGION` varchar(10) DEFAULT NULL COMMENT 'ศาสนา',
  `CD` varchar(40) DEFAULT NULL COMMENT 'รหัสบัตรประชาชน',
  `ADDRESS` varchar(100) DEFAULT NULL COMMENT 'ที่อยู่',
  `SD` varchar(5) DEFAULT NULL COMMENT 'อำเภอ',
  `PROVINCE` varchar(20) DEFAULT NULL COMMENT 'จังหวัด',
  `ZC` varchar(5) DEFAULT NULL COMMENT 'รหัสไปรสณีย์',
  `CP` varchar(30) DEFAULT NULL COMMENT 'ผู้เกี่ยวข้อง',
  `CNPN` varchar(10) DEFAULT NULL COMMENT 'เบอร์โทรศัพท์ผู้เกี่ยวข้อง',
  `EDUCNAME` varchar(20) DEFAULT NULL COMMENT 'สถานศึกษา',
  `EDUCEL` varchar(30) DEFAULT NULL COMMENT 'ระดับการศึกษา',
  `EDUCSM` varchar(30) DEFAULT NULL COMMENT 'วิชาเอก',
  `EDUCGPA` varchar(4) DEFAULT NULL COMMENT 'เกรดเฉลี่ยสะสม',
  `EDUCA` varchar(30) DEFAULT NULL COMMENT 'อาจารย์ที่ปรึกษา',
  `EDUCPN` varchar(10) DEFAULT NULL COMMENT 'เบอร์ติดต่อ',
  `password` text NOT NULL,
  `id_major` int(11) DEFAULT NULL COMMENT 'รหัสสาขา',
  `number` varchar(10) NOT NULL COMMENT 'เบอร์โทร',
  `role` set('admin','teacher','student','') NOT NULL COMMENT 'ตำแหน่ง',
  `IMAGE` text DEFAULT NULL COMMENT 'รูป'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ID_IDEN`, `name`, `ID_CN`, `SG`, `EDUC_MAJOR`, `PN`, `email`, `NICKNAME`, `DATE`, `AGE`, `RELIGION`, `CD`, `ADDRESS`, `SD`, `PROVINCE`, `ZC`, `CP`, `CNPN`, `EDUCNAME`, `EDUCEL`, `EDUCSM`, `EDUCGPA`, `EDUCA`, `EDUCPN`, `password`, `id_major`, `number`, `role`, `IMAGE`) VALUES
(1, '1631010541137', 'tee', '1631010541137', NULL, '', NULL, 'teebin2019@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, '', 'admin', NULL),
(3, '1631010541120', 'ธีรภัทร ศรีทองกุล', '1631010531138', NULL, '', NULL, 'arue1@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, '', 'student', NULL),
(5, '1', 'Tawan', '1', NULL, NULL, NULL, 'Tawan@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7b52009b64fd0a2a49e6d8a939753077792b0554', NULL, '', 'admin', NULL),
(7, '3', '1725082511.', '1849901481431', '1', 'วิศวกรรมคอมพิวเตอร์', 'ddd', 'teebin2019@gmail.com', 'ธีร์', '2001-03-06', 23, 'พุทธ', 'd', 'Addressdd', 'dd', 'สุราษฎร์ธานี', '84220', '0862717092', '', 'ราชฎัฐสุราษฎร์ธานี', 'ปี 1', 'คอม', '4.00', 'อาจารย์ณัฐ', '04577555', '7c222fb2927d828af22f592134e8932480637c0d', NULL, '', 'student', 'upload/1725082511.'),
(8, '12345678901', 'ew', '12345678901', NULL, NULL, NULL, 'qwe@sfdsfs.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '416f8f6e105370e7b9d0fd983141f00b613477f8', 1, '92131313', 'admin', NULL);

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
-- Indexes for table `fm1`
--
ALTER TABLE `fm1`
  ADD PRIMARY KEY (`FM01_ID`);

--
-- Indexes for table `fm_location`
--
ALTER TABLE `fm_location`
  ADD PRIMARY KEY (`FMLN_ID`);

--
-- Indexes for table `fm_location_log`
--
ALTER TABLE `fm_location_log`
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
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `fm1`
--
ALTER TABLE `fm1`
  MODIFY `FM01_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `fm_location`
--
ALTER TABLE `fm_location`
  MODIFY `FMLN_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `fm_location_log`
--
ALTER TABLE `fm_location_log`
  MODIFY `FMLN_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `major`
--
ALTER TABLE `major`
  MODIFY `MAJOR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `N_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
-- Constraints for table `various_skills`
--
ALTER TABLE `various_skills`
  ADD CONSTRAINT `various_skills_ibfk_1` FOREIGN KEY (`ST_ID`) REFERENCES `student` (`ST_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
