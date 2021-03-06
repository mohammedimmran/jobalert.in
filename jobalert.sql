-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2021 at 07:42 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobalert`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_db`
--

CREATE TABLE `admin_db` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_db`
--

INSERT INTO `admin_db` (`admin_id`, `admin_name`, `admin_password`, `datetime`) VALUES
(1, 'admin', 'admin123', '2020-11-28 11:07:26');

-- --------------------------------------------------------

--
-- Table structure for table `company_db`
--

CREATE TABLE `company_db` (
  `comp_id` int(11) NOT NULL,
  `comp_name` varchar(255) NOT NULL,
  `comp_about` varchar(1000) NOT NULL,
  `comp_address` varchar(255) NOT NULL,
  `comp_email` varchar(255) NOT NULL,
  `comp_password` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_db`
--

INSERT INTO `company_db` (`comp_id`, `comp_name`, `comp_about`, `comp_address`, `comp_email`, `comp_password`, `datetime`) VALUES
(5, 'amazon', 'Amazon.com, Inc., is an American multinational technology company based in Seattle, Washington, which focuses on e-commerce, cloud computing, digital streaming, and artificial intelligence', 'Bengaluru, Karnataka', 'amazon@gmail.com', '1234', '2020-12-17 13:07:20'),
(6, 'HP', 'HP is the world’s leading personal systems and printing company, we create technology that makes life better for everyone, everywhere. Our innovation springs from a team of individuals, each collaborating and contributing their own perspectives, knowledge', 'Embassy Prime, No. 66/2, Ward No. 83, Bagmane Tech Park-5th Floor, C V Raman Nagar, Bengaluru, Karnataka 560093', 'hp@gmail.com', '1234', '2020-12-18 12:03:26'),
(7, 'IBM', 'IBM has been present in India since 1951. Since inception, IBM India has expanded its operations with regional headquarters in Bangalore and offices across 20 cities. IBM India has established itself as one of the leaders in the Indian Information Technol', 'Manyata Tech Park - Back gate 5, Block D4, Outer Ring Road, Nagawara, Rachenahalli Main Rd, Manyata Residency, Manayata Tech Park, Thanisandra, Bengaluru, Karnataka 560045', 'ibm@gmail.com', '1234', '2020-12-18 20:51:49'),
(8, 'Treft Systems Inc ', 'Treft Systems Inc - Bengaluru, Karnataka', 'Bengaluru, Karnataka', 'treftsysteminc@gmail.com', '1234', '2020-12-18 20:59:36'),
(9, 'skilora', 'We are full service digital marketing agency that takes time to understand your business and create a strategy to accomplish your business objectives. By working in partnership we can help you accelerate growth online and increase your ROI. We have been in the digital industry for almost 15 years and understood the way how internet is transforming businesses. Our core team has 40 yrs of collective industry experience and worked with more than 1000 + businesses, helped them to adapt digital medium for their business needs.', 'Bengaluru, Karnataka', 'skilora@gmail.com', '1234', '2020-12-18 21:25:35');

-- --------------------------------------------------------

--
-- Table structure for table `contact_db`
--

CREATE TABLE `contact_db` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_mobile` varchar(255) NOT NULL,
  `contact_message` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_db`
--

INSERT INTO `contact_db` (`contact_id`, `contact_name`, `contact_email`, `contact_mobile`, `contact_message`, `datetime`) VALUES
(1, 'mohammed imran', 'mohammedimran.18is@saividya.ac.in', '7624747681', 'This is a test Message :)', '2020-12-17 13:37:10'),
(6, 'mohammed', 'mohammed@gmail.com', '7624947682', 'This is a random message', '2020-12-17 13:44:44'),
(7, 'imran', 'imran@gmail.com', '7624947680', 'This is another random message', '2020-12-18 21:18:37'),
(8, 'imran khan', 'imrankhan@gmail.com', '7624947684', 'yes ! this is also a random message ;)\r\n', '2020-12-18 21:20:14'),
(9, 'mohammed imran khan', 'mohammedimrankhan@gmail.com', '7624947687', 'no more random messages', '2020-12-18 21:21:38');

-- --------------------------------------------------------

--
-- Table structure for table `job_db`
--

CREATE TABLE `job_db` (
  `job_id` int(11) NOT NULL,
  `comp_id` int(11) NOT NULL,
  `job_name` varchar(255) NOT NULL,
  `job_about` varchar(1000) NOT NULL,
  `job_address` varchar(255) NOT NULL,
  `job_skills` varchar(1000) NOT NULL,
  `job_salary` varchar(255) NOT NULL,
  `job_qualification` varchar(1000) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_db`
--

INSERT INTO `job_db` (`job_id`, `comp_id`, `job_name`, `job_about`, `job_address`, `job_skills`, `job_salary`, `job_qualification`, `datetime`) VALUES
(10, 5, 'Amazon Web Services (AWS)', 'Analyze large complex data sets to resolve data quality transformation issues independently\r\nTroubleshoot failures and provide a permanent fix\r\nUnderstand Business Requirements Document Write Technical Design Documents\r\nCreate Entity Relationship diagrams', 'Bangalore', 'Primary Skills\r\nExperience in AWS\r\nExperience in BigData OR Redshift OR GLUE OR EMR OR Lambda\r\nSecondary Skills\r\nComplete POC on new AWS services\r\nWork on small size projects enhancements independently', '1200000', 'Amazon Web Services (AWS) | 6 to 9 years Experience\r\nBE ME BCA MCA ', '2020-12-17 13:09:37'),
(13, 5, 'System Development Engineer', 'Like to develop modern and scalable web applications? Like to interact with global internal customers to automate and optimize their processes? Familiar with backend programming languages and technologies such as Java, Spring, Hibernate, AWS RDS and Dynam', 'Bangalore', 'Ability to work to together with internal customers located in international Amazon sites\r\n· Understanding of complex processes\r\n· Flexibility and creativity when solving problems\r\n· Willingness for autonomous/discrete work and continuous self-development', '600000', '· Well-founded knowledge in another programming language (e.g., Ruby/Rails, Phyton, Perl)\r\n· API programming experience (e.g., XML, JSON, REST)\r\n· Experience with application servers (e.g., Tomcat)\r\n· Experience in frontend technologies (e.g., HTML5, Java', '2020-12-17 13:21:29'),
(14, 5, 'Manager, Software Development', 'We are looking for a passionate and innovative Software Development Manager to manage an existing team of 10 developers working on a large, multi-year project focused on product and trade compliance. To build a large scale system for accuracy which flags ', 'Bangalore', 'Passion for people management and mentorship.\r\n· Exceptional customer relationship skills including the ability to discover the true requirements underlying feature requests, recommend alternative technical and business approaches, and lead engineering ef', '1000000', '7+ years of relevant engineering experience\r\n· 3+ years of people management experience, managing engineers\r\n· Experience in partnering with product and program management teams\r\nExposure to large scale data and Machine Learning platforms for building and', '2020-12-17 13:24:09'),
(16, 6, 'front End Developer ( Angular )', 'To collaborate with multiple groups within the organization to investigate design approaches, prototype new solutions and evaluate technical feasibility.', 'Bangalore', 'Bachelor\'s or Master\'s degree in Computer Science, Information Systems, or equivalent.\r\nTypically 10-14 years of experience', '800000', 'Bachelor\'s or Master\'s degree in Computer Science, Information Systems, or equivalent.\r\nTypically 10-14 years of experience', '2020-12-18 12:19:16'),
(17, 6, 'front End Developer ( React JS )', 'To collaborate with multiple groups within the organization to investigate design approaches, prototype new solutions and evaluate technical feasibility.', 'Bangalore', 'Bachelor\'s or Master\'s degree in Computer Science, Information Systems, or equivalent.\r\nTypically 10-14 years of experience', '700000', 'Bachelor\'s or Master\'s degree in Computer Science, Information Systems, or equivalent.\r\nTypically 10-14 years of experience', '2020-12-18 12:25:08'),
(18, 7, 'Application Architect - Java', 'As CIO SDM Costing application Architect for the new GBS SDM, you are responsible for costing development and support squad we are starting to staff in Bangalore', 'Bangalore', 'Key skills: Java, J2EE, Javascript, Cloud Technologies, CI & CD, Micro services, Application Integration, Web services', '1120000', 'Minimum 10 + years of relevant experience primarily on Java/J2EE based Rich Thick Client based applications.\r\nStrong web/enterprise application development experience\r\nExperience in data modelling and design.', '2020-12-18 20:55:49'),
(19, 8, 'Web Developer', 'Benefits:\r\nPaid time off\r\nWork from home\r\n\r\nSchedule:\r\nMonday to Friday\r\nWeekends\r\n\r\nSupplemental Pay:\r\nPerformance bonus\r\nYearly bonus\r\n\r\nExperience:\r\nPHP: 2 years (Preferred)\r\nHTML: 2 years (Preferred)', 'Bengaluru, Karnataka', ' Bachelors Degree required in fields such as Computer Science, Engineering.\r\n\r\n- 2+ years of professional experience\r\n\r\n- Must be able to hand code in HTML, CSS, Javascript and frameworks such as jquery, react, vue, knockout etc\r\n\r\n- Must have experience programming in a server side language for the web including PHP, Python, Golang, Java etc.\r\n\r\n- Able to use a debugger to debug code problems. For PHP, any experience with xdebug is a huge plus.\r\n\r\n- Any experience with PHP frameworks such as Laravel or CMS frameworks like WordPress is a huge plus.', '750000', ' Bachelors Degree required in fields such as Computer Science, Engineering.\r\n\r\n- 2+ years of professional experience', '2020-12-18 21:01:38'),
(20, 9, 'PHP Developer - Web Applications', 'We are currently looking for a PHP Developer to join our team.\r\nSkills\r\n\r\nCodeIgniter\r\nJavaScript\r\nLaravel Framework\r\nMVC Framework\r\nMySQL\r\nWeb Application Development\r\nDatabase Implimentation\r\nGIT\r\nPHP\r\nFull Stack Development\r\nAWS\r\nTeam Management\r\nTeam Player\r\nUI Development\r\nFront-End Development\r\nDatabase Operstions\r\nModel-View-Controller (MVC)', 'Bangalore RT nagar', 'Skills\r\nSoftware Development, Front End Design Development, Web Technologies, MySQL, PHP, Team Leading, Laravel, Codeigniter', '900000', 'Experience: 3 - 6 years in PHP Developer - Web Applications( Required )\r\nGraduation: B.Tech( Required )\r\nProficient in English( Required )', '2020-12-18 21:28:29'),
(21, 9, 'Full Stack Software Developer', 'We are currently looking for a Full Stack Software Developer to join our team.\r\n\r\nRole: Software Developer\r\nIndustry Type: IT-Software, Software Services\r\nFunctional Area: IT Software - Application Programming\r\nEmployment Type: Full Time, Permanent\r\nRole Category: Programming& Design', 'Bangaore RT nagar', 'Skills\r\n\r\nBootstrap\r\nCSS3\r\nJava\r\nJavaScript\r\nJQuery\r\nMySQL\r\nMongoDB\r\nNode.Js\r\nSoftware Development\r\nWeb Application Development\r\nFirebase\r\nAWS Google Cloud\r\nExpressJs\r\nReact.Js\r\nNodeJS\r\nReact\r\nAWS\r\nCSS', '1300000', 'Required Experience and Qualifications\r\n\r\nExperience: 0 - 5 years in Full Stack Software Developer( Required )\r\nGraduation: Any Degree( Required )\r\nProficient in English( Required )', '2020-12-18 21:30:07'),
(22, 9, 'Angular Developer', 'Role: Software Developer </br>\r\nIndustry Type: IT-Software, Software Services\r\nFunctional Area: IT Software - Application Programming\r\nEmployment Type: Full Time, Permanent\r\nRole Category: Programming& Design', 'bangalore ', 'Skills\r\n\r\nAngularJS\r\nCSS3\r\nHTML\r\nHTML5\r\nJava\r\nJavaScript\r\nMVC Framework\r\nREST API\r\nUnit Testing\r\nSoftware Development\r\nWeb Application Development\r\nDatabase Implimentation\r\nComputer Programming\r\nProject Management\r\nReact.Js\r\nRESTful Web Services\r\nReact\r\nProblem Solving\r\nModel-View-Controller (MVC)\r\nMVVM\r\nComputer Basics\r\nCross Browser Testing', '750000', '\r\nProficient in CSS, HTML, and writing cross-browser compatible code.\r\nKnowledge of JavaScript MV-VM/MVC frameworks including AngluarJS.\r\nExcellent project management skills.\r\n\r\n\r\nUG : B.Tech/B.E in Any specialization, B.Sc in Any specialization, BCA in Computers\r\nPG : Any Postgraduate in Any Specialization', '2020-12-18 21:32:39');

-- --------------------------------------------------------

--
-- Table structure for table `users_applied_job_db`
--

CREATE TABLE `users_applied_job_db` (
  `user_applied_job_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comp_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `job_name` varchar(255) NOT NULL,
  `comp_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Applied',
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_applied_job_db`
--

INSERT INTO `users_applied_job_db` (`user_applied_job_id`, `user_id`, `comp_id`, `job_id`, `job_name`, `comp_name`, `status`, `datetime`) VALUES
(39, 26, 5, 14, 'Manager, Software Development', 'amazon', 'SELECTED', '2020-12-17 13:29:17'),
(40, 26, 5, 13, 'System Development Engineer', 'amazon', 'SELECTED', '2020-12-17 13:29:28'),
(42, 26, 5, 10, 'Amazon Web Services (AWS)', 'amazon', 'SELECTED', '2020-12-17 13:29:41'),
(43, 25, 5, 10, 'Amazon Web Services (AWS)', 'amazon', 'SELECTED', '2020-12-19 15:29:15'),
(44, 25, 9, 20, 'PHP Developer - Web Applications', 'skilora', 'SELECTED', '2020-12-19 15:50:33'),
(52, 38, 9, 22, 'Angular Developer', 'skilora', 'Applied', '2020-12-29 23:20:28'),
(53, 38, 9, 20, 'PHP Developer - Web Applications', 'skilora', 'Applied', '2020-12-29 23:21:35'),
(54, 38, 6, 17, 'front End Developer ( React JS )', 'HP', 'Applied', '2020-12-29 23:21:45'),
(55, 38, 5, 14, 'Manager, Software Development', 'amazon', 'Applied', '2020-12-29 23:21:54'),
(56, 38, 5, 10, 'Amazon Web Services (AWS)', 'amazon', 'SELECTED', '2020-12-29 23:22:04'),
(57, 28, 9, 22, 'Angular Developer', 'skilora', 'Applied', '2020-12-29 23:42:34'),
(58, 28, 9, 21, 'Full Stack Software Developer', 'skilora', 'Applied', '2020-12-29 23:42:40'),
(59, 28, 9, 20, 'PHP Developer - Web Applications', 'skilora', 'Applied', '2020-12-29 23:42:47'),
(60, 28, 8, 19, 'Web Developer', 'Treft Systems Inc', 'Applied', '2020-12-29 23:42:54'),
(61, 28, 7, 18, 'Application Architect - Java', 'IBM', 'Applied', '2020-12-29 23:43:08'),
(62, 28, 5, 13, 'System Development Engineer', 'amazon', 'Applied', '2020-12-29 23:43:19'),
(63, 28, 5, 10, 'Amazon Web Services (AWS)', 'amazon', 'Applied', '2020-12-29 23:43:27'),
(64, 28, 6, 16, 'front End Developer ( Angular )', 'HP', 'Applied', '2020-12-29 23:43:37'),
(65, 28, 5, 14, 'Manager, Software Development', 'amazon', 'Applied', '2020-12-29 23:43:44'),
(66, 25, 9, 22, 'Angular Developer', 'skilora', 'Applied', '2021-01-18 13:58:30'),
(67, 25, 9, 21, 'Full Stack Software Developer', 'skilora', 'SELECTED', '2021-01-20 10:44:59'),
(68, 25, 6, 17, 'front End Developer ( React JS )', 'HP', 'SELECTED', '2021-02-01 13:58:31');

-- --------------------------------------------------------

--
-- Table structure for table `user_db`
--

CREATE TABLE `user_db` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_gender` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_number` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_about` varchar(255) NOT NULL,
  `user_skills` varchar(255) NOT NULL,
  `user_resume` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_db`
--

INSERT INTO `user_db` (`user_id`, `user_name`, `user_gender`, `user_email`, `user_number`, `user_address`, `user_about`, `user_skills`, `user_resume`, `user_password`, `datetime`) VALUES
(25, 'Mohammed', 'MALE', 'mohammed@gmail.com', '963258744', 'bangalore', 'SSLC PUC BE ME', 'App development web development AI ML Cloud computing', 'uploads/transaction_img (1).jpg', '1234', '2020-12-17 13:15:04'),
(26, 'Imran', 'MALE', 'imran@gmail.com', '96325874123', 'Bangalore', 'SSLC PUC BE', 'Cloud Computing Networking', 'uploads/transaction_img.png', '12345', '2020-12-17 13:28:18'),
(27, 'Manoj bhat', 'MALE', 'manojbhat@gmail.com', '9123698547', 'Bangalore', 'BE  \r\nSSLC--91.5%\r\nPUC -- 89%\r\n', 'python , C++ , Web technologies , Android Development', 'uploads/transaction_img.png', '1234', '2020-12-18 20:24:03'),
(28, 'abdul', 'MALE', 'abdul@gmail.com', '9513574865', 'Bangalore', 'SSLC --80%\r\nPUC(PCM)--84%\r\nBE\r\n', 'python , Artificial Intelligence , Machine learning , web scraping , cloud computing', 'uploads/transaction_img.png', '1234', '2020-12-18 20:26:37'),
(29, 'Mariam George', 'FEMALE', 'mariamgeorge@gmail.com', '879456123', 'Bangalore', 'SSLC, PUC, BE\r\n4+ years of experience in the IT industry', 'Cloud Computing , GCP , AWS , Accenture ', 'uploads/transaction_img.png', '1234', '2020-12-18 20:34:03'),
(31, 'Latha', 'FEMALE', 'latha@gmail.com', '7896321457', 'Bangalore', 'SSLC, PUC, BE\r\n2+ years experience as Full Stack Web developer\r\n\r\n', 'HTML , CSS , JavaScript , React JS , Node JS , Mongo DB , Express JS, Redux   , Cloud Computing (GCP , AWS , Accenture)', 'uploads/transaction_img.png', '1234', '2020-12-18 20:44:10'),
(38, 'mohammed imran', 'MALE', 'mohammedimran@gmail.com', '7624947684', 'RT nagar Bangalore 560032', 'SSLC RT Nagar Public SchoolPUC   St josephs PU collegeBE SVIT', 'languages(C , C++ ,Java ,python , JavaScript) Web Development AI ML Cloud Computing  ', 'uploads/transaction_img.jpg', '1234', '2020-12-29 23:18:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_db`
--
ALTER TABLE `admin_db`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `company_db`
--
ALTER TABLE `company_db`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `contact_db`
--
ALTER TABLE `contact_db`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `job_db`
--
ALTER TABLE `job_db`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `comp_id` (`comp_id`);

--
-- Indexes for table `users_applied_job_db`
--
ALTER TABLE `users_applied_job_db`
  ADD PRIMARY KEY (`user_applied_job_id`),
  ADD KEY `comp_id` (`comp_id`),
  ADD KEY `job_id` (`job_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_db`
--
ALTER TABLE `user_db`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_db`
--
ALTER TABLE `admin_db`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company_db`
--
ALTER TABLE `company_db`
  MODIFY `comp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact_db`
--
ALTER TABLE `contact_db`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `job_db`
--
ALTER TABLE `job_db`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users_applied_job_db`
--
ALTER TABLE `users_applied_job_db`
  MODIFY `user_applied_job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `user_db`
--
ALTER TABLE `user_db`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `job_db`
--
ALTER TABLE `job_db`
  ADD CONSTRAINT `job_db_ibfk_1` FOREIGN KEY (`comp_id`) REFERENCES `company_db` (`comp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users_applied_job_db`
--
ALTER TABLE `users_applied_job_db`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user_db` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_applied_job_db_ibfk_1` FOREIGN KEY (`comp_id`) REFERENCES `company_db` (`comp_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_applied_job_db_ibfk_2` FOREIGN KEY (`job_id`) REFERENCES `job_db` (`job_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
