-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2019 at 08:20 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_panel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `username` varchar(40) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `round_no` int(255) NOT NULL,
  `next_round` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`username`, `status`, `round_no`, `next_round`) VALUES
('shamimice03', 1, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `coding_api`
--

CREATE TABLE `coding_api` (
  `id` int(255) NOT NULL,
  `question` longtext NOT NULL,
  `option_a` text NOT NULL,
  `option_b` text NOT NULL,
  `option_c` text NOT NULL,
  `option_d` text NOT NULL,
  `correct_option` text NOT NULL,
  `marks` text NOT NULL,
  `time` text NOT NULL,
  `round` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coding_api`
--

INSERT INTO `coding_api` (`id`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_option`, `marks`, `time`, `round`) VALUES
(33, '                 a                 ', 'a', 'a', 'a', 'a', 'A', '1', '30sec', '1');

-- --------------------------------------------------------

--
-- Table structure for table `coding_library`
--

CREATE TABLE `coding_library` (
  `id` int(255) NOT NULL,
  `question` longtext NOT NULL,
  `option_a` text NOT NULL,
  `option_b` text NOT NULL,
  `option_c` text NOT NULL,
  `option_d` text NOT NULL,
  `correct_option` text NOT NULL,
  `marks` text NOT NULL,
  `time` text NOT NULL,
  `round` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coding_library`
--

INSERT INTO `coding_library` (`id`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_option`, `marks`, `time`, `round`) VALUES
(31, 'dsadasd', 'adad', 'adad', 'adad', 'adad', 'B', '1', '30sec', '1'),
(33, '                 a                 ', 'a', 'a', 'a', 'a', 'A', '1', '30sec', '1');

-- --------------------------------------------------------

--
-- Table structure for table `coding_test_update`
--

CREATE TABLE `coding_test_update` (
  `id` int(255) NOT NULL,
  `question` longtext NOT NULL,
  `option_a` text NOT NULL,
  `option_b` text NOT NULL,
  `option_c` text NOT NULL,
  `option_d` text NOT NULL,
  `correct_option` text NOT NULL,
  `marks` text NOT NULL,
  `time` text NOT NULL,
  `round` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coding_test_update`
--

INSERT INTO `coding_test_update` (`id`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_option`, `marks`, `time`, `round`) VALUES
(30, '  6666  ', '6767', '6767', '6767', '6767', 'D', '4', '120sec', '2');

-- --------------------------------------------------------

--
-- Table structure for table `event_details`
--

CREATE TABLE `event_details` (
  `id` int(255) NOT NULL,
  `round` text NOT NULL,
  `deadline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_details`
--

INSERT INTO `event_details` (`id`, `round`, `deadline`) VALUES
(71, '1', '2019-06-10');

-- --------------------------------------------------------

--
-- Table structure for table `interview_api`
--

CREATE TABLE `interview_api` (
  `id` int(255) NOT NULL,
  `question` longtext NOT NULL,
  `option_a` text NOT NULL,
  `option_b` text NOT NULL,
  `option_c` text NOT NULL,
  `option_d` text NOT NULL,
  `correct_option` text NOT NULL,
  `marks` text NOT NULL,
  `time` text NOT NULL,
  `round` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interview_api`
--

INSERT INTO `interview_api` (`id`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_option`, `marks`, `time`, `round`) VALUES
(6, ' a ', 'a', 'a', 'a', 'a', 'A', '1', '30sec', '1');

-- --------------------------------------------------------

--
-- Table structure for table `interview_library`
--

CREATE TABLE `interview_library` (
  `id` int(255) NOT NULL,
  `question` longtext NOT NULL,
  `option_a` text NOT NULL,
  `option_b` text NOT NULL,
  `option_c` text NOT NULL,
  `option_d` text NOT NULL,
  `correct_option` text NOT NULL,
  `marks` text NOT NULL,
  `time` text NOT NULL,
  `round` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interview_library`
--

INSERT INTO `interview_library` (`id`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_option`, `marks`, `time`, `round`) VALUES
(5, 'dasd', 'asdad', 'adad', 'adad', 'adad', 'B', '1', '30sec', '1');

-- --------------------------------------------------------

--
-- Table structure for table `interview_test_update`
--

CREATE TABLE `interview_test_update` (
  `id` int(255) NOT NULL,
  `question` longtext NOT NULL,
  `option_a` text NOT NULL,
  `option_b` text NOT NULL,
  `option_c` text NOT NULL,
  `option_d` text NOT NULL,
  `correct_option` text NOT NULL,
  `marks` text NOT NULL,
  `time` text NOT NULL,
  `round` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interview_test_update`
--

INSERT INTO `interview_test_update` (`id`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_option`, `marks`, `time`, `round`) VALUES
(6, 'a', 'a', 'a', 'a', 'a', 'A', '1', '30sec', '2');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_api`
--

CREATE TABLE `quiz_api` (
  `id` int(255) NOT NULL,
  `question` longtext NOT NULL,
  `option_a` text NOT NULL,
  `option_b` text NOT NULL,
  `option_c` text NOT NULL,
  `option_d` text NOT NULL,
  `correct_option` text NOT NULL,
  `marks` text NOT NULL,
  `time` text NOT NULL,
  `round` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_api`
--

INSERT INTO `quiz_api` (`id`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_option`, `marks`, `time`, `round`) VALUES
(39, ' sdas ', 'asa', 'sa', 'asaas', 'asa', 'A', '1', '30sec', '1'),
(40, ' asda ', 'ada', 'ada', 'asd', 'ad', 'A', '1', '30sec', '1');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_library`
--

CREATE TABLE `quiz_library` (
  `id` int(255) NOT NULL,
  `question` longtext NOT NULL,
  `option_a` text NOT NULL,
  `option_b` text NOT NULL,
  `option_c` text NOT NULL,
  `option_d` text NOT NULL,
  `correct_option` text NOT NULL,
  `marks` text NOT NULL,
  `time` text NOT NULL,
  `round` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_library`
--

INSERT INTO `quiz_library` (`id`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_option`, `marks`, `time`, `round`) VALUES
(39, ' sdas ', 'asa', 'sa', 'asaas', 'asa', 'A', '1', '30sec', '1'),
(40, ' asda ', 'ada', 'ada', 'asd', 'ad', 'A', '1', '30sec', '1');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_test_update`
--

CREATE TABLE `quiz_test_update` (
  `id` int(255) NOT NULL,
  `question` longtext NOT NULL,
  `option_a` text NOT NULL,
  `option_b` text NOT NULL,
  `option_c` text NOT NULL,
  `option_d` text NOT NULL,
  `correct_option` text NOT NULL,
  `marks` text NOT NULL,
  `time` text NOT NULL,
  `round` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_test_update`
--

INSERT INTO `quiz_test_update` (`id`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_option`, `marks`, `time`, `round`) VALUES
(41, 'asda', 'ad', 'ad', 'ad', 'adad', 'A', '1', '30sec', '2'),
(42, 'This is the admin panel for my \"Programming Guide\" android application. In my Programming Guide, the android application contains features\r\nthat are online events. Online Events contains several tests, (Quiz test, Coding Test, Interview Question test, Random Test).\r\nFor maintaining those event data I have developed this admin panel. This will generate the REST API for each test. So that I can parse data in my android application easily. I tried to design a good interface to maintain this admin panel.\r\nAnyone interested in this project can try this. \r\npassword: shamimice03\r\n', 'A', 'A', 'A', 'A', 'A', '1', '30sec', '2');

-- --------------------------------------------------------

--
-- Table structure for table `random_api`
--

CREATE TABLE `random_api` (
  `id` int(255) NOT NULL,
  `question` longtext NOT NULL,
  `option_a` text NOT NULL,
  `option_b` text NOT NULL,
  `option_c` text NOT NULL,
  `option_d` text NOT NULL,
  `correct_option` text NOT NULL,
  `marks` text NOT NULL,
  `time` text NOT NULL,
  `round` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `random_api`
--

INSERT INTO `random_api` (`id`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_option`, `marks`, `time`, `round`) VALUES
(85, '                sas                ', 'as', 'as', 'sa', 's', 'D', '1', '30sec', '1');

-- --------------------------------------------------------

--
-- Table structure for table `random_library`
--

CREATE TABLE `random_library` (
  `id` int(255) NOT NULL,
  `question` longtext NOT NULL,
  `option_a` text NOT NULL,
  `option_b` text NOT NULL,
  `option_c` text NOT NULL,
  `option_d` text NOT NULL,
  `correct_option` text NOT NULL,
  `marks` text NOT NULL,
  `time` text NOT NULL,
  `round` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `random_library`
--

INSERT INTO `random_library` (`id`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_option`, `marks`, `time`, `round`) VALUES
(5, 'czcs', 'aaa', 'aa', 'aa', 'aa', 'A', '1', '30sec', '1'),
(9, 'a', 'a', 'a', 'a', 'a', 'A', '1', '30sec', '1');

-- --------------------------------------------------------

--
-- Table structure for table `random_test_update`
--

CREATE TABLE `random_test_update` (
  `id` int(255) NOT NULL,
  `question` longtext NOT NULL,
  `option_a` text NOT NULL,
  `option_b` text NOT NULL,
  `option_c` text NOT NULL,
  `option_d` text NOT NULL,
  `correct_option` text NOT NULL,
  `marks` text NOT NULL,
  `time` text NOT NULL,
  `round` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `random_test_update`
--

INSERT INTO `random_test_update` (`id`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_option`, `marks`, `time`, `round`) VALUES
(85, ' a    ', 'as', 'as', 'sa', 's', 'D', '1', '30sec', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `coding_api`
--
ALTER TABLE `coding_api`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coding_library`
--
ALTER TABLE `coding_library`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coding_test_update`
--
ALTER TABLE `coding_test_update`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_details`
--
ALTER TABLE `event_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interview_api`
--
ALTER TABLE `interview_api`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interview_library`
--
ALTER TABLE `interview_library`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interview_test_update`
--
ALTER TABLE `interview_test_update`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_api`
--
ALTER TABLE `quiz_api`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_library`
--
ALTER TABLE `quiz_library`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_test_update`
--
ALTER TABLE `quiz_test_update`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `random_api`
--
ALTER TABLE `random_api`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `random_library`
--
ALTER TABLE `random_library`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `random_test_update`
--
ALTER TABLE `random_test_update`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coding_test_update`
--
ALTER TABLE `coding_test_update`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `event_details`
--
ALTER TABLE `event_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `interview_test_update`
--
ALTER TABLE `interview_test_update`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `quiz_test_update`
--
ALTER TABLE `quiz_test_update`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `random_test_update`
--
ALTER TABLE `random_test_update`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
