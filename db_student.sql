-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 05, 2016 at 08:15 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_student`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_class`
--

CREATE TABLE `tb_class` (
  `id` int(11) NOT NULL,
  `title_class` varchar(50) NOT NULL,
  `code_class` varchar(10) NOT NULL,
  `detail_class` text NOT NULL,
  `title_1` varchar(255) NOT NULL,
  `title_2` varchar(255) NOT NULL,
  `title_3` varchar(255) NOT NULL,
  `title_4` varchar(255) NOT NULL,
  `title_5` varchar(255) NOT NULL,
  `title_6` varchar(255) NOT NULL,
  `title_7` varchar(255) NOT NULL,
  `title_8` varchar(255) NOT NULL,
  `title_9` varchar(255) NOT NULL,
  `title_10` varchar(255) NOT NULL,
  `title_11` varchar(255) NOT NULL,
  `title_12` varchar(255) NOT NULL,
  `title_13` varchar(255) NOT NULL,
  `title_14` varchar(255) NOT NULL,
  `title_15` varchar(255) NOT NULL,
  `title_16` varchar(255) NOT NULL,
  `title_17` varchar(255) NOT NULL,
  `title_18` varchar(255) NOT NULL,
  `title_19` varchar(255) NOT NULL,
  `title_20` varchar(255) NOT NULL,
  `name_teacher` varchar(50) NOT NULL,
  `open_class` date NOT NULL,
  `close_class` date NOT NULL,
  `hour_class` int(3) NOT NULL,
  `day_class` varchar(25) NOT NULL,
  `time_class` varchar(15) NOT NULL,
  `price_class` int(11) NOT NULL,
  `state_class` int(1) NOT NULL,
  `count_student` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_class`
--

INSERT INTO `tb_class` (`id`, `title_class`, `code_class`, `detail_class`, `title_1`, `title_2`, `title_3`, `title_4`, `title_5`, `title_6`, `title_7`, `title_8`, `title_9`, `title_10`, `title_11`, `title_12`, `title_13`, `title_14`, `title_15`, `title_16`, `title_17`, `title_18`, `title_19`, `title_20`, `name_teacher`, `open_class`, `close_class`, `hour_class`, `day_class`, `time_class`, `price_class`, `state_class`, `count_student`) VALUES
(1, 'ภาษาไทย', 'THAI001', '...', 'ทดสอบ 1', 'ทดสอบ 2', 'ทดสอบ 3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Mr.A', '2016-06-15', '2016-06-30', 10, 'abcdf', '10.00-24.00', 1500, 1, 0),
(2, 'อังกฤษ', 'ENG001', '....', 'Test A', 'Test B', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Mr.B', '2016-06-16', '2016-06-30', 10, 'abcde', '10.00-24.00', 4000, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_graph_regis`
--

CREATE TABLE `tb_graph_regis` (
  `id` int(11) NOT NULL,
  `prefix` varchar(10) NOT NULL,
  `id_student` varchar(12) NOT NULL,
  `year` int(4) NOT NULL,
  `month` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_graph_regis`
--

INSERT INTO `tb_graph_regis` (`id`, `prefix`, `id_student`, `year`, `month`) VALUES
(2, 'นาย', 'ST2016000001', 2016, 7),
(3, 'เด็กชาย', 'ST2016000002', 2016, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tb_history_class`
--

CREATE TABLE `tb_history_class` (
  `id` int(11) NOT NULL,
  `id_student` varchar(12) NOT NULL,
  `title_class` varchar(50) NOT NULL,
  `subject_title` varchar(255) NOT NULL,
  `score` int(3) NOT NULL,
  `hour_used` int(11) NOT NULL,
  `last_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_history_payment`
--

CREATE TABLE `tb_history_payment` (
  `id` int(11) NOT NULL,
  `prefix` varchar(10) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `code_class` varchar(12) NOT NULL,
  `title_class` varchar(50) NOT NULL,
  `price_class` int(11) NOT NULL,
  `last_update` datetime NOT NULL,
  `confirm_by` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_log`
--

CREATE TABLE `tb_log` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `ip_address` varchar(20) NOT NULL,
  `detail` varchar(25) NOT NULL,
  `last_update` date NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_log`
--

INSERT INTO `tb_log` (`id`, `username`, `ip_address`, `detail`, `last_update`, `last_login`) VALUES
(1, 'admin', '::1', 'เข้าสู่ระบบ', '2016-06-07', '2016-06-07 16:51:06'),
(2, 'admin', '::1', 'เข้าสู่ระบบ', '2016-06-08', '2016-06-08 08:48:46'),
(3, 'admin', '::1', 'เข้าสู่ระบบ', '2016-06-08', '2016-06-08 18:05:02'),
(4, 'admin', '::1', 'ออกจากระบบ', '2016-06-08', '2016-06-08 18:13:50'),
(5, 'admin', '::1', 'เข้าสู่ระบบ', '2016-06-08', '2016-06-08 18:13:53'),
(6, 'admin', '::1', 'ออกจากระบบ', '2016-06-08', '2016-06-08 18:15:35'),
(7, 'user', '::1', 'เข้าสู่ระบบ', '2016-06-08', '2016-06-08 18:16:27'),
(8, 'admin', '::1', 'ออกจากระบบ', '2016-06-08', '2016-06-08 18:16:31'),
(9, 'test', '::1', 'เข้าสู่ระบบ', '2016-06-08', '2016-06-08 18:16:36'),
(10, 'admin', '::1', 'ออกจากระบบ', '2016-06-08', '2016-06-08 18:16:47'),
(11, 'admin', '::1', 'เข้าสู่ระบบ', '2016-06-08', '2016-06-08 18:16:50'),
(12, 'admin', '::1', 'ออกจากระบบ', '2016-06-08', '2016-06-08 18:17:53'),
(13, 'admin', '::1', 'เข้าสู่ระบบ', '2016-06-08', '2016-06-08 18:18:00'),
(14, 'admin', '::1', 'ออกจากระบบ', '2016-06-08', '2016-06-08 18:48:22'),
(15, 'admin', '::1', 'เข้าสู่ระบบ', '2016-06-08', '2016-06-08 18:48:28'),
(16, 'admin', '::1', 'เข้าสู่ระบบ', '2016-06-08', '2016-06-08 23:13:06'),
(17, 'admin', '::1', 'เข้าสู่ระบบ', '2016-06-08', '2016-06-08 23:13:33'),
(18, 'admin', '::1', 'เข้าสู่ระบบ', '2016-06-08', '2016-06-08 23:18:02'),
(19, 'admin', '::1', 'เข้าสู่ระบบ', '2016-06-08', '2016-06-08 23:19:02'),
(20, 'admin', '::1', 'เข้าสู่ระบบ', '2016-06-08', '2016-06-08 23:21:51'),
(21, 'admin', '::1', 'เข้าสู่ระบบ', '2016-06-08', '2016-06-08 23:22:17'),
(22, 'admin', '::1', 'เข้าสู่ระบบ', '2016-06-08', '2016-06-08 23:22:47'),
(23, 'admin', '::1', 'ออกจากระบบ', '2016-06-08', '2016-06-08 23:24:29'),
(24, 'admin', '::1', 'เข้าสู่ระบบ', '2016-06-08', '2016-06-08 23:24:32'),
(25, 'admin', '::1', 'เข้าสู่ระบบ', '2016-06-09', '2016-06-09 19:28:47'),
(26, 'admin', '::1', 'ออกจากระบบ', '2016-06-09', '2016-06-09 20:09:10'),
(27, 'test', '::1', 'เข้าสู่ระบบ', '2016-06-09', '2016-06-09 20:09:14'),
(28, 'admin', '::1', 'ออกจากระบบ', '2016-06-09', '2016-06-09 20:10:24'),
(29, 'test', '::1', 'เข้าสู่ระบบ', '2016-06-09', '2016-06-09 20:10:27'),
(30, 'admin', '::1', 'ออกจากระบบ', '2016-06-09', '2016-06-09 20:15:02'),
(31, 'test', '::1', 'เข้าสู่ระบบ', '2016-06-09', '2016-06-09 20:15:05'),
(32, 'test', '::1', 'เข้าสู่ระบบ', '2016-06-09', '2016-06-09 20:15:11'),
(33, 'admin', '::1', 'เข้าสู่ระบบ', '2016-06-09', '2016-06-09 20:16:06'),
(34, 'admin', '::1', 'ออกจากระบบ', '2016-06-09', '2016-06-09 20:16:10'),
(35, 'test', '::1', 'เข้าสู่ระบบ', '2016-06-09', '2016-06-09 20:16:13'),
(36, 'test', '::1', 'เข้าสู่ระบบ', '2016-06-09', '2016-06-09 20:17:07'),
(37, 'admin', '::1', 'เข้าสู่ระบบ', '2016-06-09', '2016-06-09 20:17:33'),
(38, 'test', '::1', 'เข้าสู่ระบบ', '2016-06-09', '2016-06-09 20:18:02'),
(39, 'test', '::1', 'เข้าสู่ระบบ', '2016-06-09', '2016-06-09 20:18:11'),
(40, 'user', '::1', 'ออกจากระบบ', '2016-06-09', '2016-06-09 20:36:12'),
(41, 'admin', '::1', 'เข้าสู่ระบบ', '2016-06-15', '2016-06-15 21:08:26'),
(42, 'admin', '::1', 'เข้าสู่ระบบ', '2016-06-16', '2016-06-16 01:11:00'),
(43, 'admin', '::1', 'เข้าสู่ระบบ', '2016-06-17', '2016-06-17 20:44:31'),
(44, 'admin', '::1', 'เข้าสู่ระบบ', '2016-06-20', '2016-06-20 18:29:47'),
(45, 'admin', '::1', 'เข้าสู่ระบบ', '2016-06-21', '2016-06-21 19:06:50'),
(46, 'admin', '::1', 'เข้าสู่ระบบ', '2016-07-04', '2016-07-04 14:46:34'),
(47, 'admin', '::1', 'ออกจากระบบ', '2016-07-04', '2016-07-04 15:25:22'),
(48, 'admin', '::1', 'เข้าสู่ระบบ', '2016-07-04', '2016-07-04 15:25:26'),
(49, 'admin', '::1', 'เข้าสู่ระบบ', '2016-07-04', '2016-07-04 22:10:39'),
(50, 'admin', '::1', 'เข้าสู่ระบบ', '2016-07-05', '2016-07-05 11:32:31'),
(51, 'admin', '::1', 'เข้าสู่ระบบ', '2016-07-05', '2016-07-05 17:51:36'),
(52, 'admin', '::1', 'เข้าสู่ระบบ', '2016-07-05', '2016-07-05 21:24:26');

-- --------------------------------------------------------

--
-- Table structure for table `tb_regis_class`
--

CREATE TABLE `tb_regis_class` (
  `id` int(11) NOT NULL,
  `prefix` varchar(10) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `code_class` varchar(10) NOT NULL,
  `title_class` varchar(50) NOT NULL,
  `price_class` int(11) NOT NULL,
  `hour_class` int(11) NOT NULL,
  `hour_total` int(11) NOT NULL,
  `payment` int(1) NOT NULL,
  `last_update` datetime NOT NULL,
  `save_by` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_regis_class`
--

INSERT INTO `tb_regis_class` (`id`, `prefix`, `firstname`, `lastname`, `code_class`, `title_class`, `price_class`, `hour_class`, `hour_total`, `payment`, `last_update`, `save_by`) VALUES
(7, 'นาย', 'Computer', 'mac', 'THAI001', 'ภาษาไทย', 1500, 10, 0, 0, '2016-07-05 12:24:25', 'admin'),
(8, 'นาย', 'Computer', 'mac', 'ENG001', 'อังกฤษ', 4000, 10, 0, 0, '2016-07-05 12:24:49', 'admin'),
(9, 'เด็กชาย', 'system', 'os', 'THAI001', 'ภาษาไทย', 1500, 10, 0, 0, '2016-07-05 12:25:05', 'admin'),
(10, 'เด็กชาย', 'system', 'os', 'ENG001', 'อังกฤษ', 4000, 10, 0, 0, '2016-07-05 12:25:16', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_regis_count`
--

CREATE TABLE `tb_regis_count` (
  `id` int(11) NOT NULL,
  `id_student` varchar(12) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_student`
--

CREATE TABLE `tb_student` (
  `id` int(11) NOT NULL,
  `id_student` varchar(12) NOT NULL,
  `prefix` varchar(10) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `address` text NOT NULL,
  `sub_district` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `province` varchar(20) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `name_parent` varchar(50) NOT NULL,
  `tel_parent` varchar(10) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_student`
--

INSERT INTO `tb_student` (`id`, `id_student`, `prefix`, `firstname`, `lastname`, `address`, `sub_district`, `district`, `province`, `tel`, `name_parent`, `tel_parent`, `image`) VALUES
(1, 'ST2016000001', 'นาย', 'Computer', 'mac', '35', '...', '....', 'กทม', '0901111111', '-', '-', '1464548557_malecostume.png'),
(5, 'ST2016000002', 'เด็กชาย', 'system', 'os', '..', '..', '..', '..', '..', '..', '..', 'guest.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `member_group` varchar(25) NOT NULL,
  `state` int(1) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `tel`, `member_group`, `state`, `image`) VALUES
(1, 'compiler', 'exe', 'admin', '1234', 'admin@admin.com', '0901111111', 'ผู้ดูแลระบบ', 1, 'admin.png'),
(2, 'system', 'os', 'user', '1234', 'test@test.com', '0000000000', 'ผู้ใช้งานระบบ', 1, 'guest.png'),
(3, 'tester', '.', 'test', '1234', 'test@test.com', '0000000000', 'ผู้ใช้งานระบบ', 1, '1464548474_weather-few-clouds.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_class`
--
ALTER TABLE `tb_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_graph_regis`
--
ALTER TABLE `tb_graph_regis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_history_class`
--
ALTER TABLE `tb_history_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_history_payment`
--
ALTER TABLE `tb_history_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_log`
--
ALTER TABLE `tb_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_regis_class`
--
ALTER TABLE `tb_regis_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_regis_count`
--
ALTER TABLE `tb_regis_count`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_student`
--
ALTER TABLE `tb_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_class`
--
ALTER TABLE `tb_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_graph_regis`
--
ALTER TABLE `tb_graph_regis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_history_class`
--
ALTER TABLE `tb_history_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_history_payment`
--
ALTER TABLE `tb_history_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_log`
--
ALTER TABLE `tb_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `tb_regis_class`
--
ALTER TABLE `tb_regis_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_regis_count`
--
ALTER TABLE `tb_regis_count`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_student`
--
ALTER TABLE `tb_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
