-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2019 at 12:48 AM
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

--
-- Dumping data for table `notice_board`
--

INSERT INTO `notice_board` (`id`, `title`, `author`, `description`, `date`, `pic`) VALUES
(21, 'Meal', 'Provost', 'Get your meal', '2019-05-01 14:40:03', NULL),
(22, 'Meal 2', 'Assistant Provost', 'Here is your meal', '2019-05-01 14:40:26', NULL),
(23, 'Menu', 'Manager', 'menu changed hhhhhhhhh', '2019-05-02 15:27:38', NULL),
(24, 'room', 'Manager', 'room changed', '2019-05-01 14:41:00', NULL),
(25, 'Important ', 'Provost', 'there is a new rolettttttttttttttt', '2019-05-10 17:12:23', NULL),
(29, 'Notice lorem444', 'Assistant Provost', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla lorem5Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla lorem5Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla lorem5Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla lorem5Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla lorem5Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla lorem5Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla lorem5Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla lorem5Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla lorem5', '2019-05-10 17:12:14', NULL),
(30, 'jhvbjgvb', 'Provost', 'vj', '2019-05-17 19:25:02', NULL),
(31, 'ldkdkkkkkkkkkkkkkkkkkk', 'Provost', '', '2019-05-17 19:26:34', NULL),
(32, 'gggggggggg', 'Assistant Provost', '', '2019-05-17 19:27:16', NULL),
(33, 'ldkdkkkkkkkkkkkkkkkkkk', 'Provost', '', '2019-05-17 19:30:48', NULL),
(34, 'Meal 2', 'Provost', '', '2019-05-17 19:33:12', NULL),
(35, 'Menu', 'Provost', '', '2019-05-17 19:36:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_17_c`
--

CREATE TABLE `tbl_17_c` (
  `id` int(11) NOT NULL,
  `building_no` varchar(255) NOT NULL,
  `room_no` varchar(255) NOT NULL,
  `bed_no` varchar(255) NOT NULL,
  `std_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_17_c`
--

INSERT INTO `tbl_17_c` (`id`, `building_no`, `room_no`, `bed_no`, `std_id`) VALUES
(1, '1', '101', 'A', NULL),
(2, '1', '101', 'B', NULL),
(3, '1', '101', 'C', NULL),
(4, '1', '102', 'A', NULL),
(5, '1', '102', 'B', NULL),
(6, '1', '102', 'C', NULL),
(7, '1', '103', 'A', NULL),
(8, '1', '103', 'B', NULL),
(9, '1', '103', 'C', NULL),
(10, '1', '103', 'D', NULL),
(11, '1', '104', 'A', NULL),
(12, '1', '104', 'B', NULL),
(14, '1', '105', 'A', NULL),
(15, '1', '105', 'B', NULL),
(21, '2', '202', 'A', NULL),
(22, '2', '202', 'B', NULL),
(23, '2', '202', 'C', NULL),
(24, '2', '202', 'D', NULL),
(25, '2', '203', 'A', NULL),
(26, '2', '203', 'B', NULL),
(27, '2', '203', 'C', NULL),
(28, '2', '203', 'D', NULL),
(29, '2', '204', 'A', NULL),
(30, '2', '204', 'B', NULL),
(31, '2', '204', 'C', NULL),
(32, '2', '204', 'D', NULL),
(33, '2', '205', 'A', NULL),
(34, '2', '205', 'B', NULL),
(35, '2', '205', 'C', NULL),
(36, '2', '205', 'D', NULL),
(37, '2', '206', 'A', NULL),
(38, '2', '206', 'B', NULL),
(39, '3', '301', 'A', NULL),
(40, '3', '301', 'B', NULL),
(41, '3', '301', 'C', NULL),
(42, '3', '302', 'A', NULL),
(43, '3', '302', 'B', NULL),
(46, '3', '303', 'A', NULL),
(47, '3', '303', 'B', NULL),
(50, '3', '304', 'A', NULL),
(51, '3', '304', 'B', NULL),
(52, '3', '305', 'A', NULL),
(53, '3', '305', 'B', NULL),
(54, '3', '301', 'D', NULL),
(55, '3', '304', 'C', NULL),
(56, '3', '304', 'D', NULL),
(57, '3', '305', 'C', NULL);

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

--
-- Dumping data for table `tbl_assistant_provost`
--

INSERT INTO `tbl_assistant_provost` (`id`, `name`, `position`, `description`, `phn_num`, `pic`) VALUES
(4, 'Arik123456666', 'st', 'gggggggggggggggg', 'ggggggggg', '467_442239462478403_791003153_n.jpg'),
(5, 'Arik', 'gggggggg', 'hhhh', 'hhhhhhhh', '1045_442907989078217_1676122707_n.jpg'),
(6, 'nnnnnnnn', 'vc', 'hhhhhhhhhh', '010101001020202020', '996_453724981329851_408667175_n.png.jpg'),
(8, 'nnnnnnnn', 'gggggggg', 'gd', 'gbd', '20141224213304.jpg');

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

--
-- Dumping data for table `tbl_hr`
--

INSERT INTO `tbl_hr` (`id`, `name`, `position`, `description`, `phn_num`, `pic`) VALUES
(1, 'Arik', 'st', 'sssssssss', 'sssssssssssss', '28050_458438124191870_188069301_n.jpg'),
(3, 'ddddddddd', 'dddddddddd', 'dddddddddddd', 'dddddddddd', '3704_440849252617424_1865509628_n.jpg'),
(4, 'nnn', 'ssss', 'ddddddddd', 'dddddddddddddd', '11621_495481827154166_1673043361_n.jpg'),
(5, 'nnn', 'dddddddddd', 'ddddddd', 'nnnnnnnn', '3682_442580809110935_742986792_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_male_hall_1`
--

CREATE TABLE `tbl_male_hall_1` (
  `id` int(11) NOT NULL,
  `floor_no` varchar(255) NOT NULL,
  `flat_no` varchar(255) NOT NULL,
  `room_no` varchar(255) NOT NULL,
  `bed_no` varchar(255) NOT NULL,
  `std_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_male_hall_1`
--

INSERT INTO `tbl_male_hall_1` (`id`, `floor_no`, `flat_no`, `room_no`, `bed_no`, `std_id`) VALUES
(1, '9', '8(A)', '1', 'A', NULL),
(2, '9', '8(A)', '1', 'B', NULL),
(3, '9', '8(A)', '2', 'A', NULL),
(4, '9', '8(A)', '2', 'B', NULL),
(5, '9', '8(A)', '3', 'A', NULL),
(6, '9', '8(A)', '3', 'B', NULL),
(7, '9', '8(A)', '3', 'C', NULL),
(8, '9', '8(B)', '1', 'A', NULL),
(9, '9', '8(B)', '1', 'B', NULL),
(10, '9', '8(B)', '2', 'A', NULL),
(11, '9', '8(B)', '2', 'B', NULL),
(12, '9', '8(B)', '3', 'A', NULL),
(13, '9', '8(B)', '3', 'B', NULL),
(14, '9', '8(B)', '3', 'C', NULL);

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

--
-- Dumping data for table `tbl_new_std_ca`
--

INSERT INTO `tbl_new_std_ca` (`std_id`, `ca_division`, `ca_district`, `ca_upazilla`, `ca_po`, `ca_village`) VALUES
(3333333, 'ggggg', 'ggggggg', 'gggggggg', 'gggggggg', 'ggggggggg'),
(33333, 'ggggg', 'ggggggg', 'gggggggg', 'gggggggg', 'ggggggggg');

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

--
-- Dumping data for table `tbl_new_std_guardian_info`
--

INSERT INTO `tbl_new_std_guardian_info` (`std_id`, `father_name`, `mother_name`, `contact_no`, `guardian_name`, `relation`, `guardian_phone`, `picture`) VALUES
(3333333, 'gggggggg', 'ggggggggggg', '7777777777', 'hhhhhhhh', 'gggggggg', '66666666666', 'application_picture/3333333.jpg'),
(33333, 'gggggggg', 'ggggggggggg', '7777777777', 'hhhhhhhh', 'gggggggg', '66666666666', 'application_picture/33333.jpg');

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

--
-- Dumping data for table `tbl_new_std_info`
--

INSERT INTO `tbl_new_std_info` (`id`, `std_name`, `std_id`, `std_session`, `std_dept`, `std_level`, `std_term`, `std_gender`, `std_phone`, `std_email`, `std_religion`, `std_nationality`, `std_dob`) VALUES
(2, 'md', 33333, 'fffff', 'EEE', 1, 1, 'Male', '5555555555555', 'mdashikurrahman18@gmail.com', 'islam', 'bd', '2019-05-01'),
(1, 'md', 3333333, 'fffff', 'CSE', 1, 1, 'Male', '5555555555555', 'mdashikurrahman18@gmail.com', 'islam', 'bd', '2019-05-07');

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

--
-- Dumping data for table `tbl_new_std_pa`
--

INSERT INTO `tbl_new_std_pa` (`std_id`, `pa_division`, `pa_district`, `pa_upazilla`, `pa_po`, `pa_village`) VALUES
(3333333, 'gggg', 'gggggggg', 'gggggggg', 'ggggggg', 'ggggggggg'),
(33333, 'gggg', 'gggggggg', 'gggggggg', 'ggggggg', 'ggggggggg');

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

--
-- Dumping data for table `tbl_provost`
--

INSERT INTO `tbl_provost` (`id`, `name`, `position`, `description`, `phn_num`, `pic`) VALUES
(6, 'Arik', 'vc', 'fffffffffffffff', 'fffffffffffff', '54194688_750695481983484_668069277990912000_n.jpg');

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

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`id`, `name`, `position`, `description`, `phn_num`, `pic`) VALUES
(2, 'nnnnnnnn', 'ssss', 'sssssssssssss', 'sssssssssssss', '21746_447878905247792_95417329_n.jpg'),
(3, 'nnnnnnnn', 'gggggggg', 'sssss', 'sssssssssssss', '23402_473436319358717_316461663_n.png.jpg'),
(4, 'nnnnnnnn', 'ssss', 'sssssss', 'sssssssssssss', '12339_510441322324883_1746390291_n.jpg'),
(5, 'ssss', 'ssssss', 'ssssssss', 'sssssssssssss', '15078_451243808244635_1725897773_n.jpg');

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
  ADD PRIMARY KEY (`id`),
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
  ADD PRIMARY KEY (`id`),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_17_c`
--
ALTER TABLE `tbl_17_c`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tbl_assistant_provost`
--
ALTER TABLE `tbl_assistant_provost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_hr`
--
ALTER TABLE `tbl_hr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_male_hall_1`
--
ALTER TABLE `tbl_male_hall_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_new_std_info`
--
ALTER TABLE `tbl_new_std_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_provost`
--
ALTER TABLE `tbl_provost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
