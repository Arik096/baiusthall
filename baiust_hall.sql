-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2019 at 06:33 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baiust_hall`
--

-- --------------------------------------------------------

--
-- Table structure for table `notice_board`
--

CREATE TABLE `notice_board` (
  `id` int(11) NOT NULL,
  `title` mediumtext NOT NULL,
  `author` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_17_c`
--

CREATE TABLE `tbl_17_c` (
  `building_no` varchar(255) NOT NULL,
  `room_no` varchar(255) NOT NULL,
  `bed_no` varchar(255) NOT NULL,
  `std_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_17_c`
--

INSERT INTO `tbl_17_c` (`building_no`, `room_no`, `bed_no`, `std_id`) VALUES
('1', '101', 'C', NULL),
('1', '102', 'A', NULL),
('1', '102', 'B', NULL),
('1', '102', 'C', NULL),
('1', '103', 'A', NULL),
('1', '103', 'B', NULL),
('1', '103', 'C', NULL),
('1', '103', 'D', NULL),
('1', '104', 'A', NULL),
('1', '104', 'B', NULL),
('1', '105', 'A', NULL),
('1', '105', 'B', NULL),
('2', '202', 'A', NULL),
('2', '202', 'B', NULL),
('2', '202', 'C', NULL),
('2', '202', 'D', NULL),
('2', '203', 'A', NULL),
('2', '203', 'B', NULL),
('2', '203', 'C', NULL),
('2', '203', 'D', NULL),
('2', '204', 'A', NULL),
('2', '204', 'B', NULL),
('2', '204', 'C', NULL),
('2', '204', 'D', NULL),
('2', '205', 'A', NULL),
('2', '205', 'B', NULL),
('2', '205', 'C', NULL),
('2', '205', 'D', NULL),
('2', '206', 'A', NULL),
('2', '206', 'B', NULL),
('3', '301', 'A', NULL),
('3', '301', 'B', NULL),
('3', '301', 'C', NULL),
('3', '302', 'A', NULL),
('3', '302', 'B', NULL),
('3', '303', 'A', NULL),
('3', '303', 'B', NULL),
('3', '304', 'A', NULL),
('3', '304', 'B', NULL),
('3', '305', 'A', NULL),
('3', '305', 'B', NULL),
('3', '301', 'D', NULL),
('3', '304', 'C', NULL),
('3', '304', 'D', NULL),
('3', '305', 'C', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_login`
--

CREATE TABLE `tbl_admin_login` (
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin_login`
--

INSERT INTO `tbl_admin_login` (`user_name`, `password`) VALUES
('admin', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_assistant_provost`
--

CREATE TABLE `tbl_assistant_provost` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `phn_num` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hr`
--

CREATE TABLE `tbl_hr` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `phn_num` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_male_hall_1`
--

CREATE TABLE `tbl_male_hall_1` (
  `floor_no` varchar(255) NOT NULL,
  `flat_no` varchar(255) NOT NULL,
  `room_no` varchar(255) NOT NULL,
  `bed_no` varchar(255) NOT NULL,
  `std_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_male_hall_1`
--

INSERT INTO `tbl_male_hall_1` (`floor_no`, `flat_no`, `room_no`, `bed_no`, `std_id`) VALUES
('9', '8(A)', '3', 'A', NULL),
('9', '8(A)', '3', 'B', NULL),
('9', '8(A)', '3', 'C', NULL),
('9', '8(B)', '1', 'B', NULL),
('9', '8(B)', '2', 'A', NULL),
('9', '8(B)', '2', 'B', NULL),
('9', '8(B)', '3', 'A', NULL),
('9', '8(B)', '3', 'B', NULL),
('9', '8(B)', '3', 'C', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_new_std_ca`
--

CREATE TABLE `tbl_new_std_ca` (
  `std_id` int(11) NOT NULL,
  `ca_division` varchar(255) NOT NULL,
  `ca_district` varchar(255) NOT NULL,
  `ca_upazilla` varchar(255) NOT NULL,
  `ca_po` varchar(255) NOT NULL,
  `ca_village` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_new_std_guardian_info`
--

CREATE TABLE `tbl_new_std_guardian_info` (
  `std_id` int(11) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `guardian_name` varchar(255) NOT NULL,
  `relation` varchar(255) NOT NULL,
  `guardian_phone` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_new_std_info`
--

CREATE TABLE `tbl_new_std_info` (
  `id` int(11) NOT NULL,
  `std_name` varchar(255) NOT NULL,
  `std_id` int(11) NOT NULL,
  `std_session` varchar(255) NOT NULL,
  `std_dept` varchar(255) NOT NULL,
  `std_level` int(11) NOT NULL,
  `std_term` int(11) NOT NULL,
  `std_gender` varchar(255) NOT NULL,
  `std_phone` varchar(255) NOT NULL,
  `std_email` varchar(255) NOT NULL,
  `std_religion` varchar(255) NOT NULL,
  `std_nationality` varchar(255) NOT NULL,
  `std_dob` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_new_std_pa`
--

CREATE TABLE `tbl_new_std_pa` (
  `std_id` int(11) NOT NULL,
  `pa_division` varchar(255) NOT NULL,
  `pa_district` varchar(255) NOT NULL,
  `pa_upazilla` varchar(255) NOT NULL,
  `pa_po` varchar(255) NOT NULL,
  `pa_village` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_provost`
--

CREATE TABLE `tbl_provost` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `phn_num` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slide_show`
--

CREATE TABLE `tbl_slide_show` (
  `id` int(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `title` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_slide_show`
--

INSERT INTO `tbl_slide_show` (`id`, `pic`, `title`) VALUES
(8, 'slide_show_picture/5d1fa4484f66e.jpg', '1'),
(9, 'slide_show_picture/5d1fa44f30d50.jpg', '2'),
(10, 'slide_show_picture/5d1fa455c787c.jpg', '3'),
(11, 'slide_show_picture/5d1fa45b5b83f.jpg', '4'),
(12, 'slide_show_picture/5d1fa46a8d28f.jpg', '5'),
(13, 'slide_show_picture/5d1fa470a4867.jpg', '6'),
(14, 'slide_show_picture/5d1fa4766aad4.jpg', '7'),
(18, 'slide_show_picture/5d1fb3ffcb503.jpg', '8'),
(19, 'slide_show_picture/5d1fb4160ff7b.jpg', '9');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE `tbl_staff` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `phn_num` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_std_ca`
--

CREATE TABLE `tbl_std_ca` (
  `std_id` int(11) NOT NULL,
  `ca_division` varchar(255) NOT NULL,
  `ca_district` varchar(255) NOT NULL,
  `ca_upazilla` varchar(255) NOT NULL,
  `ca_po` varchar(255) NOT NULL,
  `ca_village` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_std_guardian_info`
--

CREATE TABLE `tbl_std_guardian_info` (
  `std_id` int(11) DEFAULT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `guardian_name` varchar(255) NOT NULL,
  `relation` varchar(255) NOT NULL,
  `guardian_phone` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_std_info`
--

CREATE TABLE `tbl_std_info` (
  `id` int(11) NOT NULL,
  `std_name` varchar(255) NOT NULL,
  `std_id` int(11) NOT NULL,
  `std_session` varchar(255) NOT NULL,
  `std_dept` varchar(255) NOT NULL,
  `std_level` int(11) NOT NULL,
  `std_term` int(11) NOT NULL,
  `std_gender` varchar(255) NOT NULL,
  `std_phone` varchar(255) NOT NULL,
  `std_email` varchar(255) NOT NULL,
  `std_religion` varchar(255) NOT NULL,
  `std_nationality` varchar(255) NOT NULL,
  `std_dob` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_std_login`
--

CREATE TABLE `tbl_std_login` (
  `std_id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_std_pa`
--

CREATE TABLE `tbl_std_pa` (
  `std_id` int(11) NOT NULL,
  `pa_division` varchar(255) NOT NULL,
  `pa_district` varchar(255) NOT NULL,
  `pa_upazilla` varchar(255) NOT NULL,
  `pa_po` varchar(255) NOT NULL,
  `pa_village` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notice_board`
--
ALTER TABLE `notice_board`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_17_c`
--
ALTER TABLE `tbl_17_c`
  ADD KEY `std_id` (`std_id`);

--
-- Indexes for table `tbl_admin_login`
--
ALTER TABLE `tbl_admin_login`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `tbl_assistant_provost`
--
ALTER TABLE `tbl_assistant_provost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_hr`
--
ALTER TABLE `tbl_hr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_male_hall_1`
--
ALTER TABLE `tbl_male_hall_1`
  ADD KEY `std_id` (`std_id`);

--
-- Indexes for table `tbl_new_std_ca`
--
ALTER TABLE `tbl_new_std_ca`
  ADD KEY `std_id` (`std_id`) USING BTREE;

--
-- Indexes for table `tbl_new_std_guardian_info`
--
ALTER TABLE `tbl_new_std_guardian_info`
  ADD KEY `std_id` (`std_id`) USING BTREE;

--
-- Indexes for table `tbl_new_std_info`
--
ALTER TABLE `tbl_new_std_info`
  ADD PRIMARY KEY (`std_id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tbl_new_std_pa`
--
ALTER TABLE `tbl_new_std_pa`
  ADD KEY `std_id` (`std_id`);

--
-- Indexes for table `tbl_provost`
--
ALTER TABLE `tbl_provost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slide_show`
--
ALTER TABLE `tbl_slide_show`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_std_ca`
--
ALTER TABLE `tbl_std_ca`
  ADD KEY `std_id` (`std_id`);

--
-- Indexes for table `tbl_std_guardian_info`
--
ALTER TABLE `tbl_std_guardian_info`
  ADD KEY `std_id` (`std_id`);

--
-- Indexes for table `tbl_std_info`
--
ALTER TABLE `tbl_std_info`
  ADD PRIMARY KEY (`std_id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tbl_std_login`
--
ALTER TABLE `tbl_std_login`
  ADD PRIMARY KEY (`std_id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `tbl_std_pa`
--
ALTER TABLE `tbl_std_pa`
  ADD KEY `std_id` (`std_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notice_board`
--
ALTER TABLE `notice_board`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_assistant_provost`
--
ALTER TABLE `tbl_assistant_provost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_hr`
--
ALTER TABLE `tbl_hr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_new_std_info`
--
ALTER TABLE `tbl_new_std_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_provost`
--
ALTER TABLE `tbl_provost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_slide_show`
--
ALTER TABLE `tbl_slide_show`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_std_info`
--
ALTER TABLE `tbl_std_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_17_c`
--
ALTER TABLE `tbl_17_c`
  ADD CONSTRAINT `tbl_17_c_ibfk_1` FOREIGN KEY (`std_id`) REFERENCES `tbl_std_info` (`std_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_male_hall_1`
--
ALTER TABLE `tbl_male_hall_1`
  ADD CONSTRAINT `tbl_male_hall_1_ibfk_1` FOREIGN KEY (`std_id`) REFERENCES `tbl_std_info` (`std_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_new_std_ca`
--
ALTER TABLE `tbl_new_std_ca`
  ADD CONSTRAINT `tbl_new_std_ca_ibfk_1` FOREIGN KEY (`std_id`) REFERENCES `tbl_new_std_info` (`std_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_new_std_guardian_info`
--
ALTER TABLE `tbl_new_std_guardian_info`
  ADD CONSTRAINT `tbl_new_std_guardian_info_ibfk_1` FOREIGN KEY (`std_id`) REFERENCES `tbl_new_std_info` (`std_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_new_std_pa`
--
ALTER TABLE `tbl_new_std_pa`
  ADD CONSTRAINT `tbl_new_std_pa_ibfk_1` FOREIGN KEY (`std_id`) REFERENCES `tbl_new_std_info` (`std_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_std_ca`
--
ALTER TABLE `tbl_std_ca`
  ADD CONSTRAINT `tbl_std_ca_ibfk_1` FOREIGN KEY (`std_id`) REFERENCES `tbl_std_info` (`std_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_std_guardian_info`
--
ALTER TABLE `tbl_std_guardian_info`
  ADD CONSTRAINT `tbl_std_guardian_info_ibfk_1` FOREIGN KEY (`std_id`) REFERENCES `tbl_std_info` (`std_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_std_pa`
--
ALTER TABLE `tbl_std_pa`
  ADD CONSTRAINT `tbl_std_pa_ibfk_1` FOREIGN KEY (`std_id`) REFERENCES `tbl_std_info` (`std_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
