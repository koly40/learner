-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2018 at 08:28 AM
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
(570, 'BRAC University', 'Private', '2018-10-17', '2018-10-31', '', 'tyruytu', 'admin'),
(571, 'PrimAsia University', 'Private University', '2018-10-16', '2018-10-31', '', '10% discount', 'admin'),
(572, 'North South UNiversity', 'public', '2018-10-19', '2018-10-31', '', 'fair open ', 'admin'),
(573, 'Asia University', 'Private', '2018-10-11', '2018-10-27', '', 'fair is on going', 'admin');

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
(16, 'Eden College', 'When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document. To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that ', 'eden.jpg'),
(17, 'Dhaka commerce college', 'When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document. To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that ', 'commerce.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `col_basic`
--

CREATE TABLE `col_basic` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `col_type` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `division` varchar(50) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `introduction` varchar(250) NOT NULL,
  `history` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `col_basic`
--

INSERT INTO `col_basic` (`id`, `name`, `col_type`, `location`, `division`, `contact_no`, `email`, `website`, `introduction`, `history`) VALUES
(5, 'dhaka college', 'public', 'new market', 'dhaka', '01737-424150', 'dhakacollege@gmail.com', 'www.dhakacollege.bd', 'introduction of dhaka college introduction of dhaka college introduction of dhaka college introduction of dhaka college introduction of dhaka college introduction of dhaka college introduction of dhaka college introduction of dhaka college introducti', 'history of dhaka college history of dhaka college history of dhaka college history of dhaka college history of dhaka college history of dhaka college history of dhaka college history of dhaka college history of dhaka college history of dhaka college '),
(6, 'Eden Mohila College', 'public', 'New Market,Dhaka', 'dhaka', '01737-000000', 'EdenMohilaCollege@gmail.com', 'www.EdenMohilaCollege.bd', 'introduction of Eden Mohila College introduction of Eden Mohila College introduction of Eden Mohila College introduction of Eden Mohila College introduction of Eden Mohila College introduction of Eden Mohila College introduction of Eden Mohila Colleg', 'historyof Eden Mohila College historyof Eden Mohila College historyof Eden Mohila College historyof Eden Mohila College historyof Eden Mohila College historyof Eden Mohila College historyof Eden Mohila College historyof Eden Mohila College historyof '),
(7, 'Bangla College', 'public', 'mirpur-1', 'dhaka', '01700-000000', 'BanglaCollege@gmail.com', 'www.BanglaCollege.bd', 'introduction of Bangla College introduction of Bangla College introduction of Bangla College introduction of Bangla College introduction of Bangla College introduction of Bangla College introduction of Bangla College introduction of Bangla College in', 'history of Bangla College history of Bangla College history of Bangla College history of Bangla College history of Bangla College history of Bangla College history of Bangla College history of Bangla College history of Bangla College history of Bangl');

-- --------------------------------------------------------

--
-- Table structure for table `col_details`
--

CREATE TABLE `col_details` (
  `id` int(11) NOT NULL,
  `program` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `shift` varchar(20) NOT NULL,
  `eligibility` varchar(200) NOT NULL,
  `seat` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `admission_cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `col_details`
--

INSERT INTO `col_details` (`id`, `program`, `section`, `subject`, `shift`, `eligibility`, `seat`, `duration`, `admission_cost`) VALUES
(27, 'H.S.C', 'science', 'history', 'morning', 'gbvdfavsdfvsd', 20, 4, 12),
(29, 'H.S.C', 'science', 'history', 'morning', 'aaaaaaaaaaaaaaaaaaa', 100, 3, 500),
(32, 'DEGREE', 'arts', 'geography', 'evening', 'iukfuyjdtyhrstgsffgr', 0, 0, 1);

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
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `admission_type` enum('Undergraduate','Post Graduate','Masters','M.Phil','PhD') NOT NULL,
  `university_id` int(11) NOT NULL,
  `start_application` date NOT NULL,
  `end_application` date NOT NULL,
  `form_cost` int(11) DEFAULT NULL,
  `notice_link` varchar(100) NOT NULL,
  `expire` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `title`, `admission_type`, `university_id`, `start_application`, `end_application`, `form_cost`, `notice_link`, `expire`) VALUES
(1, 'Dhaka University', 'Undergraduate', 0, '2018-10-01', '2018-10-31', 1500, 'http://admission.eis.du.ac.bd/', '2018-10-31'),
(2, 'Rajshahi University', 'Post Graduate', 0, '2018-10-02', '2018-10-30', 2000, 'http://admission.eis.du.ac.bd/', '2018-10-30'),
(3, 'ttyt', 'Undergraduate', 2, '0000-00-00', '0000-00-00', 0, 'ghg', '0000-00-00'),
(4, 'Chitagang University', 'Undergraduate', 0, '2018-10-02', '2018-10-19', 1000, 'hghh', '2018-10-02'),
(8, 'fgfg', 'Undergraduate', 0, '2018-10-02', '2018-10-03', 0, 'fgfgdg', '0000-00-00');

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
(1, 'momo', '123456789', 'momotajkoly44@gmail.com', '01795818340'),
(2, 'kamal hasan', '12345', 'kamal@gmail.com', '01556312056');

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
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `admission_type` enum('Undergraduate','Post Graduate','Masters','M.Phil','PhD') NOT NULL,
  `university_id` int(11) NOT NULL,
  `result_publish_date` date NOT NULL,
  `notice_link` varchar(100) NOT NULL,
  `expire` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `title`, `admission_type`, `university_id`, `result_publish_date`, `notice_link`, `expire`) VALUES
(1, 'dhaka university', 'Undergraduate', 1, '2018-10-31', 'https://du.edu.bd', '2018-10-31'),
(2, 'jsgannath university', 'Undergraduate', 2, '2018-10-17', 'www.ju.edu.bd', '2018-10-31');

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
(3, 'aaaaaaaaaaaa', 'Local', 'ghj', 'facility', 'apply_procedure', 'ghjg', '2018-10-30', '2018-11-09', 'dfghghg'),
(6, 'sdfsd', 'Local', 'sdfsdf', 'dsfd', 'dfs', 'sff', '2018-10-15', '2018-10-30', 'sdf'),
(7, 'dddddddddddd', 'Local', 'fgf', 'facility', 'apply_procedure', 'fgf', '2018-10-22', '2018-10-29', ''),
(8, 'gffg', 'Local', 'grtg', 'rtrt', 'rtrt', 'rtr', '2018-10-02', '2018-10-29', 'rtrt');

-- --------------------------------------------------------

--
-- Table structure for table `science_faculty`
--

CREATE TABLE `science_faculty` (
  `id` int(11) NOT NULL,
  `department` varchar(200) NOT NULL,
  `seat` varchar(100) NOT NULL,
  `total_cost` int(11) NOT NULL,
  `duration` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `science_faculty`
--

INSERT INTO `science_faculty` (`id`, `department`, `seat`, `total_cost`, `duration`) VALUES
(1, 'Applied Physics ', '30', 20000, '4 years'),
(2, 'Biochemistry', '50', 100000, '4 years'),
(3, 'Mathematics', '50', 15000, '4 years'),
(4, 'Biology', '100', 20000, '4 years'),
(5, 'Chemistry', '80', 60000, '4 years');

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
(4, 'Mass communication & Jurnalism', '200', '20,40,000', '5 years');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `fName` varchar(100) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `mobile_number` varchar(14) NOT NULL,
  `gender` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`fName`, `lname`, `email`, `password`, `mobile_number`, `gender`) VALUES
('momotaj', 'koly', 'momotajkoly44@gmail.com', '123456789', '01795818340', 1),
('lata', 'nahar', 'lutfurnnaher44@gmail.com', '234567890', '01795818345', 2),
('lata', 'nahar', 'lutfurnnaher44@gmail.com', '234567890', '01795818345', 3);

-- --------------------------------------------------------

--
-- Table structure for table `student_form`
--

CREATE TABLE `student_form` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` enum('Male','Female','Others') NOT NULL,
  `preferred_email` varchar(50) NOT NULL,
  `confirm_email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone_number` int(50) NOT NULL,
  `update` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_form`
--

INSERT INTO `student_form` (`id`, `first_name`, `last_name`, `date_of_birth`, `gender`, `preferred_email`, `confirm_email`, `password`, `phone_number`, `update`) VALUES
(1, 'kamal', 'hossain', '2018-09-04', 'Male', 'janak@gmail.com', 'janak@gmail.com', '1234', 1556489542, 'dfdf');

-- --------------------------------------------------------

--
-- Table structure for table `uni_basic`
--

CREATE TABLE `uni_basic` (
  `id` int(11) NOT NULL,
  `uni_name` varchar(100) NOT NULL,
  `edate` date NOT NULL,
  `total_depart` int(200) NOT NULL,
  `type` enum('Public','Private') NOT NULL DEFAULT 'Public',
  `location` varchar(200) NOT NULL,
  `division` enum('Dhaka','Khulna','Barishal','Rajshahi','Sylhet','Rangpur','Mymensingh','Chattagram') NOT NULL,
  `vc_name` varchar(100) NOT NULL,
  `total_seat` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uni_basic`
--

INSERT INTO `uni_basic` (`id`, `uni_name`, `edate`, `total_depart`, `type`, `location`, `division`, `vc_name`, `total_seat`) VALUES
(2, 'fghgfh', '2018-10-17', 78, 'Private', 'fghgh', 'Dhaka', 'gfgd', 23);

-- --------------------------------------------------------

--
-- Table structure for table `uni_details`
--

CREATE TABLE `uni_details` (
  `id` int(11) NOT NULL,
  `uni_id` int(11) DEFAULT NULL,
  `department` varchar(200) NOT NULL,
  `total_semister` varchar(20) NOT NULL,
  `duration` varchar(200) NOT NULL,
  `university_name` varchar(200) NOT NULL,
  `division` varchar(200) NOT NULL,
  `academic_cost` varchar(200) NOT NULL,
  `eligibily` text NOT NULL,
  `website_link` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uni_details`
--

INSERT INTO `uni_details` (`id`, `uni_id`, `department`, `total_semister`, `duration`, `university_name`, `division`, `academic_cost`, `eligibily`, `website_link`, `location`) VALUES
(1, 23, 'Bangla', '10 semester', 'Five years', 'Dhaka University', 'Dhaka', '40,000', 'dfgftghgjghj ftugfgyujy hftcyufyu gvhfyu ntfu fytf', 'www.dhakaUniversity.com', 'Dhaka'),
(2, 11, 'English', '10 semester', 'fourth years', 'Jagonnasth university', 'Dhaka ', '30,000', 'xfghftgyh hyg ghy ftyyu  ftht', 'www.jahanginagorUniversity.com', 'Dhaka jatrabari\r\n'),
(3, 101, 'Management', '10 semester', 'five years', 'jahanginugar', 'Dhaka', '50,000', 'fyhghj rdtyuty nfyg myiu', 'www.jahanginagarUniversity.com', 'Dhaka old tawn'),
(4, 103, 'Social work ', '10 semester', 'seven years', 'Sylhet shahjalal university', 'sylhet', '60,000', 'dghgh bfgy bdrtytu brtfy', 'www.jfgxcvghjg.com', ''),
(5, 104, 'Finance ', '6 semester', 'five years', 'Jahanginagor', 'Dhaka', '60,000', 'dfghfghg gjhjfhgj', 'www.jahanginagerUniversity.com', 'sabar');

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
-- Indexes for table `adm_fair`
--
ALTER TABLE `adm_fair`
  ADD PRIMARY KEY (`fair_id`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `col_details`
--
ALTER TABLE `col_details`
  ADD PRIMARY KEY (`id`,`program`,`section`,`shift`);

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
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scholarship`
--
ALTER TABLE `scholarship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `science_faculty`
--
ALTER TABLE `science_faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_science_faculty`
--
ALTER TABLE `social_science_faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`gender`);

--
-- Indexes for table `student_form`
--
ALTER TABLE `student_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uni_basic`
--
ALTER TABLE `uni_basic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uni_details`
--
ALTER TABLE `uni_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adm_fair`
--
ALTER TABLE `adm_fair`
  MODIFY `fair_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=574;

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
-- AUTO_INCREMENT for table `col_basic`
--
ALTER TABLE `col_basic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `col_details`
--
ALTER TABLE `col_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

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
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `owner_registraion`
--
ALTER TABLE `owner_registraion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `owner_table`
--
ALTER TABLE `owner_table`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `scholarship`
--
ALTER TABLE `scholarship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `science_faculty`
--
ALTER TABLE `science_faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `social_science_faculty`
--
ALTER TABLE `social_science_faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `gender` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_form`
--
ALTER TABLE `student_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `uni_basic`
--
ALTER TABLE `uni_basic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uni_details`
--
ALTER TABLE `uni_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
-- Constraints for table `ins_admin`
--
ALTER TABLE `ins_admin`
  ADD CONSTRAINT `ins_admin_ibfk_1` FOREIGN KEY (`username`) REFERENCES `ad_info` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
