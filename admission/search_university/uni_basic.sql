-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2018 at 07:42 AM
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
-- Table structure for table `uni_basic`
--

CREATE TABLE `uni_basic` (
  `Id` int(11) NOT NULL,
  `uni_name` varchar(100) NOT NULL,
  `establistment_date` date NOT NULL,
  `total_depart` varchar(200) NOT NULL,
  `type` enum('Public','Private') NOT NULL DEFAULT 'Public',
  `location` varchar(200) NOT NULL,
  `division` enum('Dhaka','Khulna','Barishal','Rajshahi','Sylhet','Rangpur','Mymensingh','Chattagram') NOT NULL,
  `vc_name` varchar(100) NOT NULL,
  `total_seat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uni_basic`
--

INSERT INTO `uni_basic` (`Id`, `uni_name`, `establistment_date`, `total_depart`, `type`, `location`, `division`, `vc_name`, `total_seat`) VALUES
(3, 'Dhaka University', '0000-00-00', '80', 'Public', 'Dhaka', 'Dhaka', 'Aktaruzzan', '2500'),
(4, 'Khulna university', '0000-00-00', '45', 'Public', 'khulna', 'Khulna', 'Shakhoyat hossain', '1500'),
(5, 'Dhaka university', '0000-00-00', '80', 'Public', 'Dkhaka', 'Dhaka', 'Mr jon', '25000'),
(6, 'Khulna University', '0000-00-00', '45', 'Public', 'Khulna', 'Khulna', 'Mr Max', '1500'),
(7, 'Dhaka University', '2017-06-20', '80', 'Public', 'Dhaka', '', 'Md jon', '25000'),
(8, 'Khulna', '2015-09-17', '', 'Public', 'Khulna', 'Khulna', 'Md Max', '1500'),
(9, 'klsdjalk', '2018-07-11', '80', 'Public', 'kjaksdjlka', 'Dhaka', 'aslkdjfalkj', '250000'),
(10, 'Dhaka University', '2017-08-23', '80', 'Public', 'Dhaka', 'Dhaka', 'Md jon', '25000'),
(11, 'Khulna University', '2017-03-13', '45', 'Public', 'Khulna', 'Khulna', 'Mr joe', '15000'),
(12, 'Khulna', '2018-10-10', '850', 'Public', 'Khulna', 'Khulna', 'siam', '1500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uni_basic`
--
ALTER TABLE `uni_basic`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uni_basic`
--
ALTER TABLE `uni_basic`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
