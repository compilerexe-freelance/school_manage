-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 08, 2016 at 01:54 PM
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

INSERT INTO `tb_class` (`id`, `title_class`, `code_class`, `detail_class`, `name_teacher`, `open_class`, `close_class`, `hour_class`, `day_class`, `time_class`, `price_class`, `state_class`, `count_student`) VALUES
(1, 'ภาษาไทย', 'THAI001', '...', 'Mr.A', '2016-06-06', '2016-06-30', 10, 'abcdf', '10.00-24.00', 5000, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_history_class`
--

CREATE TABLE `tb_history_class` (
  `id` int(11) NOT NULL,
  `id_student` varchar(12) NOT NULL,
  `title_class` varchar(50) NOT NULL,
  `hour_used` int(11) NOT NULL,
  `last_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_history_class`
--

INSERT INTO `tb_history_class` (`id`, `id_student`, `title_class`, `hour_used`, `last_update`) VALUES
(1, 'ST2016000001', 'ภาษาไทย', 1, '2016-06-06 14:45:22'),
(2, 'ST2016000001', 'ภาษาไทย', 1, '2016-06-06 14:46:17'),
(3, 'ST2016000001', 'ภาษาไทย', 1, '2016-06-06 14:47:29');

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

--
-- Dumping data for table `tb_history_payment`
--

INSERT INTO `tb_history_payment` (`id`, `prefix`, `firstname`, `lastname`, `code_class`, `title_class`, `price_class`, `last_update`, `confirm_by`) VALUES
(1, 'นาย', 'Computer', 'mac', 'THAI001', 'ภาษาไทย', 5000, '2016-06-06 20:48:18', 'admin');

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
(15, 'admin', '::1', 'เข้าสู่ระบบ', '2016-06-08', '2016-06-08 18:48:28');

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
(1, 'นาย', 'ปวเรศ', 'บวรภัทรวดี', 'THAI001', 'ภาษาไทย', 5000, 10, 3, 1, '2016-06-06 14:47:29', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_regis_count`
--

CREATE TABLE `tb_regis_count` (
  `id` int(11) NOT NULL,
  `id_student` varchar(12) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_regis_count`
--

INSERT INTO `tb_regis_count` (`id`, `id_student`, `count`) VALUES
(1, 'ST2016000001', 1);

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
(1, 'ST2016000001', 'นาย', 'Computer', 'mac', '35', '...', '....', 'กทม', '', '-', '-', '1464548557_malecostume.png');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_history_class`
--
ALTER TABLE `tb_history_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_history_payment`
--
ALTER TABLE `tb_history_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_log`
--
ALTER TABLE `tb_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tb_regis_class`
--
ALTER TABLE `tb_regis_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_regis_count`
--
ALTER TABLE `tb_regis_count`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_student`
--
ALTER TABLE `tb_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
