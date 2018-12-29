-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2018 at 08:58 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.1.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adm_pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `adm_fair`
--

CREATE TABLE `adm_fair` (
  `id` int(11) NOT NULL,
  `ins_id` int(11) NOT NULL,
  `fair_details` text NOT NULL,
  `deadline` date NOT NULL,
  `img_link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `adm_notice`
--

CREATE TABLE `adm_notice` (
  `Notice_id` int(11) NOT NULL,
  `Title` varchar(250) NOT NULL,
  `Admission_type` enum('Undergraduate','Post Graduate','Masters','M.Phil','PhD') NOT NULL,
  `Uni_id` int(11) NOT NULL,
  `Start_app` date NOT NULL,
  `End_app` date NOT NULL,
  `Form_cost` int(11) DEFAULT NULL,
  `Notice_link` varchar(100) NOT NULL,
  `Expire` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ad_details`
--

CREATE TABLE `ad_details` (
  `ad_id` int(11) NOT NULL,
  `ad_img_link` varchar(100) NOT NULL,
  `ad_expire_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ad_info`
--

CREATE TABLE `ad_info` (
  `username` varchar(50) NOT NULL,
  `ad_id` int(11) NOT NULL,
  `ad_type` varchar(50) NOT NULL,
  `transaction_id` int(11) NOT NULL DEFAULT '0',
  `entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `col_basic`
--

CREATE TABLE `col_basic` (
  `username` varchar(20) NOT NULL,
  `col_id` int(11) NOT NULL,
  `col_name` varchar(20) NOT NULL,
  `col_type` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `division` varchar(50) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `img_link` varchar(100) NOT NULL,
  `view_counter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `col_details`
--

CREATE TABLE `col_details` (
  `col_id` int(11) NOT NULL,
  `program` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `shift` varchar(20) NOT NULL,
  `eligibility` varchar(200) NOT NULL,
  `seat` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `admission_cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `col_notice`
--

CREATE TABLE `col_notice` (
  `id` int(11) NOT NULL,
  `col_id` int(11) NOT NULL,
  `not_date` int(11) NOT NULL,
  `not_type` int(11) NOT NULL,
  `details` int(11) NOT NULL,
  `deadline` datetime NOT NULL,
  `Not_link` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `comment` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `name`, `password`, `email`, `comment`) VALUES
(1, 'momo', '4565645+64+', 'momotajkoly44@gmail.com', 'she is innosent girl');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Review` text NOT NULL,
  `Experience` enum('1','2','3','4') NOT NULL,
  `Response` enum('1','2','3','4') NOT NULL,
  `Support` enum('1','2','3','4') NOT NULL,
  `Satisfaction` enum('1','2','3','4') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Id`, `Name`, `Email`, `Review`, `Experience`, `Response`, `Support`, `Satisfaction`) VALUES
(1, 'momo', 'momotaj44@gmail.com', 'programming is very intaresting', '1', '1', '1', '1'),
(2, 'momo', 'momotaj44@gmail.com', 'programming is very intaresting', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ins_admin`
--

CREATE TABLE `ins_admin` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Contact_no` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `admin_type` enum('College','University') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `owner_registraion`
--

CREATE TABLE `owner_registraion` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile_num` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner_registraion`
--

INSERT INTO `owner_registraion` (`id`, `username`, `password`, `email`, `mobile_num`) VALUES
(1, 'momo', '123456789', 'momotajkoly44@gmail.com', '01795818340');

-- --------------------------------------------------------

--
-- Table structure for table `owner_table`
--

CREATE TABLE `owner_table` (
  `o_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contact` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `res_notice`
--

CREATE TABLE `res_notice` (
  `Notice_id` int(11) NOT NULL DEFAULT '0',
  `Title` varchar(250) NOT NULL,
  `Admission_type` enum('Undergraduate','Post Graduate','Masters','M.Phil','PhD') NOT NULL,
  `Uni_id` int(11) NOT NULL,
  `Result_publish_date` date NOT NULL,
  `Notice_link` varchar(100) NOT NULL,
  `Expire` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `fName` varchar(100) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `ag_pass` varchar(15) NOT NULL,
  `mobile_number` varchar(14) NOT NULL,
  `gender` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uni_basic`
--

CREATE TABLE `uni_basic` (
  `Id` int(11) NOT NULL,
  `Uni_name` varchar(100) NOT NULL,
  `Establistment_date` date NOT NULL,
  `total_depart` varchar(200) NOT NULL,
  `Type` enum('Public','Private') NOT NULL DEFAULT 'Public',
  `Location` varchar(200) NOT NULL,
  `Division` enum('Dhaka','Khulna','Barishal','Rajshahi','Sylhet','Rangpur','Mymensingh','Chattagram') NOT NULL,
  `VC_Name` varchar(100) NOT NULL,
  `total_seat` varchar(15) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uni_details`
--

CREATE TABLE `uni_details` (
  `Id` int(11) NOT NULL,
  `Unit` varchar(10) NOT NULL,
  `Department` varchar(11) NOT NULL,
  `Seats` int(50) NOT NULL,
  `total_semester` int(11) NOT NULL,
  `Duration` int(11) NOT NULL,
  `Eligibility` text,
  `Academic _cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm_fair`
--
ALTER TABLE `adm_fair`
  ADD PRIMARY KEY (`id`,`ins_id`);

--
-- Indexes for table `adm_notice`
--
ALTER TABLE `adm_notice`
  ADD PRIMARY KEY (`Notice_id`,`Uni_id`),
  ADD KEY `Uni_id` (`Uni_id`);

--
-- Indexes for table `ad_details`
--
ALTER TABLE `ad_details`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `ad_info`
--
ALTER TABLE `ad_info`
  ADD PRIMARY KEY (`username`,`ad_id`),
  ADD KEY `ad_id` (`ad_id`);

--
-- Indexes for table `col_basic`
--
ALTER TABLE `col_basic`
  ADD PRIMARY KEY (`col_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `col_details`
--
ALTER TABLE `col_details`
  ADD PRIMARY KEY (`col_id`,`program`,`section`,`shift`);

--
-- Indexes for table `col_notice`
--
ALTER TABLE `col_notice`
  ADD PRIMARY KEY (`id`,`col_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `ins_admin`
--
ALTER TABLE `ins_admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `owner_registraion`
--
ALTER TABLE `owner_registraion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner_table`
--
ALTER TABLE `owner_table`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `res_notice`
--
ALTER TABLE `res_notice`
  ADD PRIMARY KEY (`Notice_id`,`Uni_id`),
  ADD KEY `Uni_id` (`Uni_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`gender`);

--
-- Indexes for table `uni_basic`
--
ALTER TABLE `uni_basic`
  ADD PRIMARY KEY (`Id`,`total_seat`),
  ADD KEY `Username` (`total_seat`);

--
-- Indexes for table `uni_details`
--
ALTER TABLE `uni_details`
  ADD PRIMARY KEY (`Id`,`Unit`,`Department`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adm_fair`
--
ALTER TABLE `adm_fair`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `adm_notice`
--
ALTER TABLE `adm_notice`
  MODIFY `Notice_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `col_notice`
--
ALTER TABLE `col_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `owner_registraion`
--
ALTER TABLE `owner_registraion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `owner_table`
--
ALTER TABLE `owner_table`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `gender` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_basic`
--
ALTER TABLE `uni_basic`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_details`
--
ALTER TABLE `uni_details`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adm_notice`
--
ALTER TABLE `adm_notice`
  ADD CONSTRAINT `adm_notice_ibfk_1` FOREIGN KEY (`Uni_id`) REFERENCES `uni_basic` (`Id`);

--
-- Constraints for table `ad_info`
--
ALTER TABLE `ad_info`
  ADD CONSTRAINT `ad_info_ibfk_1` FOREIGN KEY (`ad_id`) REFERENCES `ad_details` (`ad_id`);

--
-- Constraints for table `col_basic`
--
ALTER TABLE `col_basic`
  ADD CONSTRAINT `col_basic_ibfk_1` FOREIGN KEY (`username`) REFERENCES `ins_admin` (`username`);

--
-- Constraints for table `col_details`
--
ALTER TABLE `col_details`
  ADD CONSTRAINT `col_details_ibfk_1` FOREIGN KEY (`col_id`) REFERENCES `col_basic` (`col_id`);

--
-- Constraints for table `ins_admin`
--
ALTER TABLE `ins_admin`
  ADD CONSTRAINT `ins_admin_ibfk_1` FOREIGN KEY (`username`) REFERENCES `ad_info` (`username`);

--
-- Constraints for table `res_notice`
--
ALTER TABLE `res_notice`
  ADD CONSTRAINT `res_notice_ibfk_1` FOREIGN KEY (`Uni_id`) REFERENCES `uni_basic` (`Id`);

--
-- Constraints for table `uni_basic`
--
ALTER TABLE `uni_basic`
  ADD CONSTRAINT `uni_basic_ibfk_1` FOREIGN KEY (`total_seat`) REFERENCES `ins_admin` (`username`);

--
-- Constraints for table `uni_details`
--
ALTER TABLE `uni_details`
  ADD CONSTRAINT `uni_details_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `uni_basic` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
