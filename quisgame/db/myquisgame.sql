-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2023 at 08:54 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myquisgame`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `ans_id` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `quis_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`ans_id`, `answer`, `quis_id`) VALUES
(1, 'Narendra Damodar Das Modi', 1),
(2, 'Droupadi Murmu', 2),
(3, 'Rohit Sharma', 3),
(4, 'Sachin Tendulkar', 4),
(5, 'Shah Rukh Khan\r\n', 5),
(6, 'Sundar Pichai', 6),
(7, 'Elon Musk', 7),
(8, 'Satya Nadella', 8),
(9, 'Tim Cook', 9),
(10, 'Joe Biden', 10),
(11, 'Vasco da Gama', 11),
(12, 'Himachal Pradesh', 12),
(13, 'Arunachal Pradesh', 13),
(14, ' Milkha Singh', 14),
(15, '22 languages', 15);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `level_id` int(11) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`level_id`, `level`) VALUES
(1, 'Easy Level'),
(2, 'Medium Level'),
(3, 'Hard Level');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `quis_id` int(11) NOT NULL,
  `questions` varchar(255) NOT NULL,
  `level_id` int(11) NOT NULL,
  `option1` varchar(255) DEFAULT NULL,
  `option2` varchar(255) DEFAULT NULL,
  `option3` varchar(255) DEFAULT NULL,
  `option4` varchar(255) DEFAULT NULL,
  `user_ans` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`quis_id`, `questions`, `level_id`, `option1`, `option2`, `option3`, `option4`, `user_ans`) VALUES
(1, 'Who is the Prime Minister Of India?', 1, 'Atal Bihari Bajpayi', 'Dr.Manmohan Singh', 'Amit Shah', 'Narendra Damodar Das Modi', 'Narendra Damodar Das Modi'),
(2, 'Who is the President of India?', 1, 'Ram Nath Kovind', 'Droupadi Murmu', 'Pranab Mukherjee', 'Pratibha Patil', 'Droupadi Murmu'),
(3, 'Who is the Current Captain of  Indian Cricket Team?', 1, 'Mahendra Singh Dhoni', 'Virat Kohli', 'Rohit Sharma', 'Hardik Pandya', 'Rohit Sharma'),
(4, 'Who is the god of Cricket?', 1, 'Virat Kohli', 'Sunil Gawashkar', 'Mahendra Singh Dhoni', 'Sachin Tendulkar', 'Sachin Tendulkar'),
(5, 'Who is the king of Bollywood?', 1, 'Salman Khan', 'Shah Rukh Khan', 'Amitabh Bachhan', 'Amir Khan', 'Shah Rukh Khan'),
(6, 'Who is the current CEO of GOOGLE Company?', 2, 'Larray Page', 'Mark Zuckerberg', 'Sundar Pichai', 'Satya Nadela', 'Sundar Pichai'),
(7, 'Who Is the current CEO of Tweeter Company ?', 2, 'Jack Dorcey', 'Ewan Williams', 'Elon Musk', 'Paras Agarwal', 'Elon Musk'),
(8, 'Who is the current CEO of Micro Soft Company?', 2, 'Bill Gates', 'Satya Nadella', 'Sunder Pichai', 'Steve Jobs', 'Satya Nadella'),
(9, 'Who is the current CEO Of Apple Company?', 2, 'Tim Cook', 'Steve Jobs', 'Bill Gates', 'Elon Musk', 'Elon Musk'),
(10, 'Who is  the Current President Of America?', 2, 'Barak Obama', 'Donald Trump', 'Joe Biden', 'Will Clinton', 'Joe Biden'),
(11, 'Who was the first to discover India?', 3, 'Vasco Da Gama', 'Columbus', 'Hitler', 'George Washington 	', 'Vasco Da Gama'),
(12, 'Which state is also known as the “fruit bowl” of India?', 3, 'Jammu & Kashmir', 'Himachal Pradesh', 'Uttarakhand', 'Uttar Pradesh', 'Himachal Pradesh'),
(13, 'Which state is also known as the “land of rising sun”?', 3, 'Meghalay', 'Arunachal Pradesh', 'Manipur', 'Assam', 'Arunachal Pradesh'),
(14, 'Who was famously called the Flying Sikh of India?', 3, 'Major Dhyan Chand', 'Milkha Singh', 'Captain Amrinder Singh', 'Dr. Manmohan Singh', 'Milkha Singh'),
(15, 'How many languages does the Indian constitution recognise?', 3, '15 Languages', '18 Languages', '26 Languages', '22 Languages', '22 Languages');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `userfullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `userfullname`, `email`, `password`) VALUES
(1, 'vinod', 'vinodverma150791@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'amit', 'amit@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'ravi', 'ravi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'anita', 'anita@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'akash', 'akash1990@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(6, 'anil', 'anil@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`ans_id`),
  ADD KEY `quis_id` (`quis_id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`quis_id`),
  ADD KEY `level_id` (`level_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `ans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `quis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`quis_id`) REFERENCES `questions` (`quis_id`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`level_id`) REFERENCES `level` (`level_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
