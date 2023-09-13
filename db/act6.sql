-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2023 at 05:37 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `act6`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`cat_Id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `questions_added` varchar(255) NOT NULL DEFAULT '0',
  `no_of_items` int(11) NOT NULL,
  `time_limit` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_Id`, `cat_name`, `questions_added`, `no_of_items`, `time_limit`) VALUES
(6, 'English', '5', 5, '5 minutes'),
(7, 'Mathematics', '5', 5, '5 minutes'),
(10, 'Science', '5', 5, '5 minutes');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
`exam_Id` int(11) NOT NULL,
  `user_Id` int(11) NOT NULL,
  `q1` int(11) NOT NULL,
  `q1_remarks` int(11) NOT NULL,
  `q2` int(11) NOT NULL,
  `q2_remarks` int(11) NOT NULL,
  `q3` int(11) NOT NULL,
  `q3_remarks` int(11) NOT NULL,
  `q4` int(11) NOT NULL,
  `q4_remarks` int(11) NOT NULL,
  `q5` int(11) NOT NULL,
  `q5_remarks` int(11) NOT NULL,
  `q6` int(11) NOT NULL,
  `q6_remarks` int(11) NOT NULL,
  `q7` int(11) NOT NULL,
  `q7_remarks` int(11) NOT NULL,
  `q8` int(11) NOT NULL,
  `q8_remarks` int(11) NOT NULL,
  `q9` int(11) NOT NULL,
  `q9_remarks` int(11) NOT NULL,
  `q10` int(11) NOT NULL,
  `q10_remarks` int(11) NOT NULL,
  `q11` int(11) NOT NULL,
  `q11_remarks` int(11) NOT NULL,
  `q12` int(11) NOT NULL,
  `q12_remarks` int(11) NOT NULL,
  `q13` int(11) NOT NULL,
  `q13_remarks` int(11) NOT NULL,
  `q14` int(11) NOT NULL,
  `q14_remarks` int(11) NOT NULL,
  `q15` int(11) NOT NULL,
  `q15_remarks` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `english` int(11) NOT NULL,
  `math` int(11) NOT NULL,
  `science` int(11) NOT NULL,
  `date_of_exam` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_Id`, `user_Id`, `q1`, `q1_remarks`, `q2`, `q2_remarks`, `q3`, `q3_remarks`, `q4`, `q4_remarks`, `q5`, `q5_remarks`, `q6`, `q6_remarks`, `q7`, `q7_remarks`, `q8`, `q8_remarks`, `q9`, `q9_remarks`, `q10`, `q10_remarks`, `q11`, `q11_remarks`, `q12`, `q12_remarks`, `q13`, `q13_remarks`, `q14`, `q14_remarks`, `q15`, `q15_remarks`, `total`, `english`, `math`, `science`, `date_of_exam`) VALUES
(21, 75, 29, 1, 30, 0, 31, 1, 32, 1, 33, 0, 50, 1, 51, 0, 52, 0, 53, 0, 54, 1, 71, 0, 72, 0, 73, 0, 74, 0, 75, 0, 5, 3, 0, 2, '2023-04-04');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
`quest_Id` int(11) NOT NULL,
  `quest_category_Id` int(11) NOT NULL,
  `question` text NOT NULL,
  `choice_one` varchar(255) NOT NULL,
  `choice_two` varchar(255) NOT NULL,
  `choice_three` varchar(255) NOT NULL,
  `choice_four` varchar(255) NOT NULL,
  `correct_answer` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=213 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`quest_Id`, `quest_category_Id`, `question`, `choice_one`, `choice_two`, `choice_three`, `choice_four`, `correct_answer`) VALUES
(34, 6, '_____ to offend anyone, she said both cakes were equally good.', 'Not wanting', 'As not wanting', 'She didn''t want', 'Because not wanting', 'Not wanting'),
(35, 6, '_____ in trying to solve this problem. It''s clearly unsolvable.', 'There''s no point', 'There isn''t point', 'It''s no point', 'It''s no need', 'It''s no point'),
(36, 6, 'Last year, when I last met her, she told me she _____ a letter every day for the last two months.', 'had written', 'had been writing', 'has written', 'wrote', 'had been writing'),
(37, 6, 'He _____ robbed as he was walking out of the bank.', 'had', 'did', 'got', 'were', 'did'),
(38, 6, '_____ forced to do anything. He acted of his own free will.', 'In no way was he', 'No way he was', 'In any way he was', 'In any way was he', 'In any way he was'),
(162, 7, 'What is the slope of the line that passes through the points (2, 4) and (6, 10)?', '1', '2', '3', '4', '2'),
(163, 7, 'What is the sum of the angles in a triangle?', '90 degrees', '180 degrees', '270 degrees', '360 degrees', '90 degrees'),
(164, 7, 'What is the product of 6 and 7?', '12', '26', '36', '42', '42'),
(165, 7, 'What is the value of x in the equation 5x + 7 = 32?', '3', '5', '6', '8', '3'),
(166, 7, 'What is the circumference of a circle with radius 5?', '1', '5', '6', '63', '1'),
(180, 10, 'Which gas is the most abundant in the Earth''s atmosphere?', 'Oxygen', 'Nitrogen', 'Carbon Dioxide', 'Methane', 'Methane'),
(181, 10, 'Which planet in our solar system is the largest?', 'Jupiter', 'Saturn', 'Uranus', 'Neptune', 'Jupiter'),
(182, 10, 'Which of the following is NOT a type of rock?', 'Igneous', 'Sedimentary', 'Metamorphic', 'Magma', 'Igneous'),
(183, 10, 'What is the term for the process by which water changes from a liquid to a gas?', 'Melting', 'Condensation', 'Evaporation', 'Sublimation', 'Melting'),
(184, 10, 'What is the unit of measurement for force?', 'Newton', 'Joule', 'Watt', 'Meter', 'Watt');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_Id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `civilstatus` varchar(20) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `age` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'user.png',
  `user_type` varchar(20) NOT NULL DEFAULT 'Examinee',
  `verification_code` varchar(255) NOT NULL,
  `date_registered` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=82 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_Id`, `firstname`, `middlename`, `lastname`, `suffix`, `gender`, `civilstatus`, `religion`, `dob`, `age`, `address`, `email`, `contact`, `password`, `image`, `user_type`, `verification_code`, `date_registered`) VALUES
(40, 'Erwin', 'Cabag', 'Son', '', 'Male', 'Single', 'Bible Baptist', '2022-12-07', '5 days old', 'Sitio Upper Landing, Daanlungsod, Medellin, Cebus', 'admin@gmail.com', '9359428963', '0192023a7bbd73250516f069df18b500', 'b.jpg', 'Admin', '374025', '2022-09-10'),
(75, 'SampleFD', 'Sample', 'Sample', '', 'Male', 'Married', 'Sample', '2022-12-07', '6 days old', 'Sample', 'sonerwin12@gmail.com', '9359428963', '0192023a7bbd73250516f069df18b500', '13.jpg', 'Examinee', '370398', '2022-12-13'),
(76, 'Erwin Kofdfgd', 'Erwin Ko', 'Erwin Ko', '', 'Male', 'Single', 'Erwin Ko', '2022-11-29', '4 months old', 'Erwin Kogdfg\r\n', 'ErwinKo@gmail.com', '9359428963', '67af224ffee74247f0303003ea25deb4', 'user.jpg', 'Examinee', '536592', '2022-12-14'),
(78, 'Vivy', 'Vivy', 'Vivy', '', 'Female', 'Married', 'Vivy', '2022-12-09', '5 days old', 'Vivy', 'Vivy@gmail.com', '9359428963', 'cfbcad95f98118447be7d77d410015b1', 'user.jpg', 'Examinee', '', '2022-12-14'),
(79, 'Norlyn', 'Son', 'Gelig', '', 'Male', 'Married', 'fdsfs', '2022-12-02', '1 week old', 'Sitio Upper Landing, Daanlungsod, Medellin, Cebu', 'Norlyngelfdsfsig16@gmail.com', '9359428963', 'a9e49c7aefe022f0a8540361cce7575c', 'user.jpg', 'Examinee', '', '2022-12-14'),
(81, 'fdsfdsf', 'dsfs', 'dfdsf', 'dsfsd', 'Male', 'Married', 'Iglesia Ni Cristo', '2023-03-26', '1 week old', 'fdsfsdfsdf', 'clubOffifdsf432cer@gmail.com', '9359428963', '033c91317f9b6795106a825cf8ef773d', '2.jpg', 'Examinee', '', '2023-04-04');

-- --------------------------------------------------------

--
-- Table structure for table `user_answers`
--

CREATE TABLE IF NOT EXISTS `user_answers` (
`ans_Id` int(11) NOT NULL,
  `user_Id` int(11) NOT NULL,
  `q1_answer` text NOT NULL,
  `q2_answer` text NOT NULL,
  `q3_answer` text NOT NULL,
  `q4_answer` text NOT NULL,
  `q5_answer` text NOT NULL,
  `q6_answer` text NOT NULL,
  `q7_answer` text NOT NULL,
  `q8_answer` text NOT NULL,
  `q9_answer` text NOT NULL,
  `q10_answer` text NOT NULL,
  `q11_answer` text NOT NULL,
  `q12_answer` text NOT NULL,
  `q13_answer` text NOT NULL,
  `q14_answer` text NOT NULL,
  `q15_answer` text NOT NULL,
  `date_of_exam` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `user_answers`
--

INSERT INTO `user_answers` (`ans_Id`, `user_Id`, `q1_answer`, `q2_answer`, `q3_answer`, `q4_answer`, `q5_answer`, `q6_answer`, `q7_answer`, `q8_answer`, `q9_answer`, `q10_answer`, `q11_answer`, `q12_answer`, `q13_answer`, `q14_answer`, `q15_answer`, `date_of_exam`) VALUES
(20, 75, 'never said', 'to have been abducting', 'because', 'to live', 'herself', '5', '-1/2', '-28a + 30b', '-1', '26', 'Sheep', 'Sheep', 'Fruits', 'Crocodile', 'Sun', '2023-04-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`cat_Id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
 ADD PRIMARY KEY (`exam_Id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
 ADD PRIMARY KEY (`quest_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_Id`);

--
-- Indexes for table `user_answers`
--
ALTER TABLE `user_answers`
 ADD PRIMARY KEY (`ans_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `cat_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
MODIFY `exam_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
MODIFY `quest_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=213;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `user_answers`
--
ALTER TABLE `user_answers`
MODIFY `ans_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
