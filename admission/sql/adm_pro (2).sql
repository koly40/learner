-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2018 at 01:03 PM
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
-- Table structure for table `admission_notice`
--

CREATE TABLE `admission_notice` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `university_type` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `form_cost` varchar(200) NOT NULL,
  `admission_type` varchar(200) NOT NULL,
  `notice_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission_notice`
--

INSERT INTO `admission_notice` (`id`, `title`, `university_type`, `start_date`, `end_date`, `form_cost`, `admission_type`, `notice_link`) VALUES
(2, 'Human resource ', 'Rajshahi university', '2018-10-10', '2018-10-12', '400', 'masters', 'www.admissionnotice.com'),
(4, 'English', 'jessore University', '2018-08-16', '2018-02-01', '500', 'Masters', 'www.dhakauniadm_notice.com'),
(7, 'history', 'Comilla University', '2018-10-10', '2018-10-27', '200', 'Post Graduate', 'www.dhakauniadm_notice.com'),
(8, 'islamia history', 'Rajshahi University', '2018-10-01', '2018-10-31', '200', 'Masters', 'www.dhakauniadm_notice.com'),
(9, 'admission form', 'dhaka university', '2018-10-02', '2018-10-10', '600', 'masters', 'www.noticeboard.com');

-- --------------------------------------------------------

--
-- Table structure for table `adm_fair`
--

CREATE TABLE `adm_fair` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `title` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `title` varchar(100) NOT NULL,
  `star_date` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`id`, `name`, `title`, `star_date`, `end_date`, `image`) VALUES
(3, 'momotaj', 'admission fair', '2018-10-18', '2018-10-19', 0x62616e6e6572322e676966);

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
-- Table structure for table `college_feature`
--

CREATE TABLE `college_feature` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_feature`
--

INSERT INTO `college_feature` (`id`, `title`, `description`, `image`) VALUES
(12, 'Bangla College', 'When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document. To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that ', 'bangla.jpg'),
(13, 'Dhaka College', 'When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document. To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that ', 'dhaka.jpg'),
(14, 'Titumir College', 'When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document. To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that ', 'Titumir.jpg'),
(15, 'Eden College', 'When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document. To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that ', 'eden.jpg'),
(17, 'Dhaka commerce college', 'When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document. To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that ', 'commerce.jpg');

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
-- Table structure for table `private_adm_notice`
--

CREATE TABLE `private_adm_notice` (
  `Id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `admission_type` varchar(100) NOT NULL,
  `university_name` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `form_cost` varchar(200) NOT NULL,
  `notice_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `private_adm_notice`
--

INSERT INTO `private_adm_notice` (`Id`, `title`, `admission_type`, `university_name`, `start_date`, `end_date`, `form_cost`, `notice_link`) VALUES
(1, 'admission notice', 'M.B.A', 'BUBT', '2018-10-01', '2018-10-26', '200', 'www.dhakauniadm_notice.com'),
(2, 'admission fair', 'Post Graduate', 'BRACK', '2018-10-02', '2018-10-26', '200', 'www.dhakauniadm_notice.com');

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
-- Table structure for table `scholarship`
--

CREATE TABLE `scholarship` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `type` varchar(10) NOT NULL,
  `eligibility` text NOT NULL,
  `facility` text NOT NULL,
  `apply_procedure` varchar(250) NOT NULL,
  `scholarship_for` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `last_date` date NOT NULL,
  `link` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scholarship`
--

INSERT INTO `scholarship` (`id`, `name`, `type`, `eligibility`, `facility`, `apply_procedure`, `scholarship_for`, `start_date`, `last_date`, `link`) VALUES
(1, 'Bangabandhu PHD Student Scholarship 2018', 'Local', 'To get this scholarship the scope and content of the research work must be based on liberation war. \r\n\r\nResearchers must study PhD in any part of the Faculty of Arts and Social Sciences of Dhaka University. However, admission to the PhD program that allowed all candidates who are in the process of application for registration will be able to apply for this scholarships. ', 'Under this scholarship, every researcher will be paid Tk. 20 thousand per month and maximum assistance of Tk. 35 thousand for other research work. The research scholarship will continue for 03 years. \r\n\r\nApplicants for PhD research scholarship recipient (employed candidates) will be given preference in the full-time vacation candidates.', 'To apply for this application, you will be required to submit the prescribed form from the office of the Registrar of the University and submit it within 30 November.', 'PhD Level', '2018-10-10', '2018-11-30', 'http://jobs.du.ac.bd/wp-content/uploads/2018/09/Notice-Reg-office.pdf'),
(2, 'Vanier Canada Graduate Scholarships 2018', 'Foriegn', 'The applicants must fulfill the following requirements:\r\n•	be nominated by the institution at which they want to study\r\n•	must be pursuing first his/her doctoral degree\r\n•	have completed not more than 20 months of doctoral studies as of May 1, 2019\r\n•	have achieved a first-class average, as determined by his/her institution\r\n•	must not hold, or have held, a doctoral-level scholarship or fellowship from CIHR, NSERC or SSHRC to undertake or complete a doctoral degree\r\n•	not hold a faculty appointment concurrently with a Vanier Scholarship', 'The participants shall get a chance to complete their doctoral study at their preferred university in Canada with full or partial scholarships.', 'The applicants have to be complete the application process via ResearchNet.com in the following way: \r\n•	complete the listed tasks mentioned in the application kin ResearchNet\r\n•	preview the full application using the “Preview Application Materials” ', 'PhD Level', '2018-10-15', '2018-12-20', 'http://www.vanier.gc.ca/en/nomination_process-processus_de_mise_en_candidature.html'),
(3, 'ghj', 'Local', 'ghj', 'ghj', 'ghj', 'ghjg', '2018-10-30', '2018-11-09', 'dfghghg');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `id` int(11) NOT NULL,
  `university_name` varchar(200) NOT NULL,
  `division` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `website_link` varchar(200) NOT NULL,
  `feaculty` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`id`, `university_name`, `division`, `location`, `website_link`, `feaculty`) VALUES
(1, 'Dhaka university', 'Dhaka', 'Dhaka', 'http://www.du.ac.bd/main_menu/academic/facsci', 'Arts'),
(2, 'khulna university', 'khulna', 'khulna', '<a>http://ku.ac.bd/</a>', 'journalism'),
(3, '', 'Rajshahi', '', '', 'Business '),
(4, '', 'Comilla', '', '', 'science ');

-- --------------------------------------------------------

--
-- Table structure for table `social_science_faculty`
--

CREATE TABLE `social_science_faculty` (
  `id` int(11) NOT NULL,
  `department` varchar(100) NOT NULL,
  `seat` varchar(100) NOT NULL,
  `total_cost` varchar(100) NOT NULL,
  `duration` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_science_faculty`
--

INSERT INTO `social_science_faculty` (`id`, `department`, `seat`, `total_cost`, `duration`) VALUES
(1, 'Archaeology', '544', '5,70,000', '4 years'),
(2, 'Economics', '544', '3,50,000', '4 years'),
(3, 'Physics', '400', '10,30,000', '4 years'),
(4, 'Mass communication & Jurnalism', '200', '20,40,000', '5 years'),
(6, 'social work', '55', '55,000', '4 years'),
(7, 'social work', '55', '55,000', '4 years'),
(9, 'social work', 'fdfgd', '55,000', '4 years'),
(11, 'Bangla', '33', '55,000', '4 years'),
(12, '', '', '', ''),
(13, '', '', '', ''),
(14, '', '', '', ''),
(15, '', '', '', ''),
(16, '', '', '', ''),
(17, '', '', '', ''),
(18, '', '', '', ''),
(19, '', '', '', ''),
(20, '', '', '', ''),
(21, '', '', '', ''),
(22, '', '', '', ''),
(23, '', '', '', ''),
(24, '', '', '', ''),
(25, '', '', '', ''),
(26, '', '', '', ''),
(27, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `fName` varchar(100) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`fName`, `lname`, `email`, `password`) VALUES
('momotaj', 'koly', 'momotajkoly44@gmail.com', '123456789'),
('lata', 'nahar', 'lutfurnnaher44@gmail.com', '234567890'),
('lata', 'nahar', 'lutfurnnaher44@gmail.com', '234567890');

-- --------------------------------------------------------

--
-- Table structure for table `uni_details`
--

CREATE TABLE `uni_details` (
  `id` int(11) NOT NULL,
  `uni_id` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `seat` varchar(200) NOT NULL,
  `total_semister` varchar(200) NOT NULL,
  `duration` varchar(200) NOT NULL,
  `eligibility` varchar(200) NOT NULL,
  `admission_cost` varchar(200) NOT NULL,
  `feaculty` varchar(255) NOT NULL,
  `division` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uni_details`
--

INSERT INTO `uni_details` (`id`, `uni_id`, `department`, `seat`, `total_semister`, `duration`, `eligibility`, `admission_cost`, `feaculty`, `division`) VALUES
(1, '2', '8 department', '300', '10 semester', '4 years', 'this college is good\r\n\r\nhgk', '10,000', 'arts', 'sylhet'),
(2, '1', 'english department', '200', '10 semester', '4 years', 'is good', '10,000', 'Arts', 'Dhaka'),
(3, '5', 'management', '300', '10 semester', '4 years', 'not bad', '30,000', 'business', 'khulna');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'momotaj', 'momotajkoly44@gmail.com', '01795818340'),
(2, 'admin', 'admin@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission_notice`
--
ALTER TABLE `admission_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adm_fair`
--
ALTER TABLE `adm_fair`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `college_feature`
--
ALTER TABLE `college_feature`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `private_adm_notice`
--
ALTER TABLE `private_adm_notice`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `res_notice`
--
ALTER TABLE `res_notice`
  ADD PRIMARY KEY (`Notice_id`,`Uni_id`),
  ADD KEY `Uni_id` (`Uni_id`);

--
-- Indexes for table `scholarship`
--
ALTER TABLE `scholarship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_science_faculty`
--
ALTER TABLE `social_science_faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uni_details`
--
ALTER TABLE `uni_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission_notice`
--
ALTER TABLE `admission_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `adm_fair`
--
ALTER TABLE `adm_fair`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `college_feature`
--
ALTER TABLE `college_feature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
-- AUTO_INCREMENT for table `private_adm_notice`
--
ALTER TABLE `private_adm_notice`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `scholarship`
--
ALTER TABLE `scholarship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `social_science_faculty`
--
ALTER TABLE `social_science_faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `uni_details`
--
ALTER TABLE `uni_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
