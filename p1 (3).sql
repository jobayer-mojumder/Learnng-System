-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2017 at 08:04 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p1`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `attendence_id` int(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `latest_earning` varchar(32) NOT NULL,
  `earning_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`attendence_id`, `phone`, `latest_earning`, `earning_date`) VALUES
(19, '01714271738', '12', '2017-04-09'),
(20, '01699238299', '$120', '2017-04-09'),
(21, '01714271738', '23', '2017-04-12'),
(22, '01714271738', '43', '2017-04-13');

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `primary_id1` int(11) NOT NULL,
  `batch_id1` varchar(32) NOT NULL,
  `user_id` int(11) NOT NULL,
  `subject_name` varchar(32) NOT NULL,
  `company_name` varchar(64) NOT NULL,
  `venue_name` varchar(64) NOT NULL,
  `district` varchar(32) NOT NULL,
  `batch_status` varchar(32) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`primary_id1`, `batch_id1`, `user_id`, `subject_name`, `company_name`, `venue_name`, `district`, `batch_status`, `start`, `end`) VALUES
(1, '422nd', 1, 'Graphic Design', 'Radisson - RDF - Hosting Help	', 'Khagrachori Govt. College', 'Dhaka', 'Online', '0000-00-00', '0000-00-00'),
(3, '422nd', 1, 'Web Design', 'BBC', 'ABC Venue', 'Munshiganj', 'Online', '2017-03-01', '2017-05-03'),
(12, 'sdas', 6, 'sadsa', 'sdas', 'sadsad', 'Rajshahi', 'Offline', '2017-04-27', '2017-04-15'),
(13, '431st', 1, 'Graphic Design', 'BBC', 'ABC', 'Dhaka', 'Online', '2017-04-01', '2017-06-01'),
(16, 'asdsa', 1, 'asdsa', 'asdaa', 'asdsa', 'asdsa', '', '2017-04-13', '2017-04-28'),
(17, '112', 18, 'sdsa', 'sadsad', 'sdasd', 'asdsa', '', '2017-04-05', '2017-04-21'),
(18, '113', 18, 'sdsad', 'asdsa', 'asdsa', 'sadsa', '', '2017-04-13', '2017-04-14');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `notice` text NOT NULL,
  `notice_for_trainer` varchar(32) NOT NULL,
  `notice_for_student` varchar(32) NOT NULL,
  `notice_date` date NOT NULL,
  `notice_by` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `title`, `notice`, `notice_for_trainer`, `notice_for_student`, `notice_date`, `notice_by`) VALUES
(14, 'Notice11', 'qwewqewqewqe', 'Yes', 'Yes', '2017-04-11', '1'),
(15, 'Notice12', 'sdsadsa', 'No', 'Yes', '2017-04-11', '1'),
(16, 'Notice13', 'dsadsads', 'Yes', 'No', '2017-04-11', '1'),
(17, 'Notice14', 'dwsdsfsdf', 'Yes', 'Yes', '2017-04-11', '2');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `stitle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `stitle`) VALUES
(1, 'ABC Site');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(32) CHARACTER SET latin1 NOT NULL,
  `email` varchar(32) NOT NULL,
  `batch_id` varchar(32) NOT NULL,
  `skype` varchar(32) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(32) CHARACTER SET latin1 NOT NULL,
  `type` varchar(32) NOT NULL,
  `img` text NOT NULL,
  `nid` varchar(32) NOT NULL,
  `total_project` int(11) NOT NULL,
  `profile1_title` varchar(32) NOT NULL,
  `profile1_link` varchar(255) NOT NULL,
  `profile2_title` varchar(32) NOT NULL,
  `profile2_link` varchar(255) NOT NULL,
  `profile3_title` varchar(32) NOT NULL,
  `profile3_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `email`, `batch_id`, `skype`, `phone`, `password`, `type`, `img`, `nid`, `total_project`, `profile1_title`, `profile1_link`, `profile2_title`, `profile2_link`, `profile3_title`, `profile3_link`) VALUES
(1, 'Sm Shaon', 'shaon.saleh@gmail.com', '', 'shaon.saleh', '01754079565', '367e01083c91b3ea79496d612503025c', 'Trainer', 'PSX_20150202_114046.jpg', '', 0, '', '', '', '', '', ''),
(2, 'Shaon Saleh', '', '', '', '01933350782', '367e01083c91b3ea79496d612503025c', 'Admin', 'PSX_20150202_114411.jpg', '', 0, '', '', '', '', '', ''),
(3, 'Hasan Mahmud', 'hasan2018@gmail.com', '1', 'hasan.mahmud', '01714271738', '367e01083c91b3ea79496d612503025c', 'Student', 'PSX_20150202_114046.jpg', '595745721095568', 7, 'Upwork', 'upwork.com', 'Something', 'something.com', 'Fiverr', 'fiverr.com'),
(6, 'Fahim Ranaa', 'fahim.ranaa', '', 'fahim.rannnnna', '01933340781', '367e01083c91b3ea79496d612503025c', 'Trainer', 'PSX_20150202_114046.jpg', '', 0, '', '', '', '', '', ''),
(13, 'Sankar Mondol', 'sankar.email@gmail.comm', '13', 'sankar.2763277', '01714271731', '367e01083c91b3ea79496d612503025c', 'Student', '11-04-2017-1491930480.jpg', '8213289329013288', 22, 'p11', 'http://p11.com', 'P22', 'p22.com', 'P33', 'p33.com'),
(14, 'Badhon Molla', 'badhon.18238189', '1', 'badhon33283', '01933350787', '367e01083c91b3ea79496d612503025c', 'Student', '12-04-2017-1491972995.png', '', 0, '', '', '', '', '', ''),
(16, 'dasds', 'sdsdd', '13', 'fdsasds', 'sdfsaa', '59b466fd93164953e56bdd1358dc0044', 'Student', '12-04-2017-1492014173.png', '43232', 323, 'ewe', 'wee', 'efw', 'we', 'wew', 'weew'),
(17, 'wqewqe', 'qweqw', '1', 'wqeq', 'qwewqe', '3cba1eb7a5bcd42097c3c3b6ff74c3a0', 'Student', '12-04-2017-1492014265.png', '123213', 0, 'wqewq', 'wqeq', 'qweq', 'qweqw', 'qweqw', 'qweqqw'),
(18, 'Kawsar Ahmed', 'kasdkaj723', '', 'sdhsa.sadsa', '01933350777', '367e01083c91b3ea79496d612503025c', 'Trainer', '12-04-2017-1492016917.png', '', 0, '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`attendence_id`);

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`primary_id1`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`),
  ADD UNIQUE KEY `notice_id` (`notice_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `attendence_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `primary_id1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
