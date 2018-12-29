-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2018 at 09:02 AM
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
  `fair_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `type` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `image` varchar(200) NOT NULL,
  `fair_details` varchar(255) NOT NULL,
  `username` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adm_fair`
--

INSERT INTO `adm_fair` (`fair_id`, `name`, `type`, `start_date`, `end_date`, `image`, `fair_details`, `username`) VALUES
(1, 'Prime University ', 'Private University', '2018-10-15', '2018-10-31', '', '10% discount', '0'),
(570, 'tyuytu ggggggg', 'Public', '2018-10-17', '2018-10-31', '', 'tyruytu', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm_fair`
--
ALTER TABLE `adm_fair`
  ADD PRIMARY KEY (`fair_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adm_fair`
--
ALTER TABLE `adm_fair`
  MODIFY `fair_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=571;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
