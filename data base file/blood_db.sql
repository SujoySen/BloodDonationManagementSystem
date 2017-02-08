-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2016 at 06:45 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` text NOT NULL,
  `comment_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment_replay`
--

CREATE TABLE IF NOT EXISTS `comment_replay` (
  `comment_id` int(11) NOT NULL,
  `replay_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `community_user`
--

CREATE TABLE IF NOT EXISTS `community_user` (
  `com_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comunity_role` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comunity`
--

CREATE TABLE IF NOT EXISTS `comunity` (
  `comunity_id` int(11) NOT NULL,
  `comunity_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(11) NOT NULL,
  `post` text NOT NULL,
  `post_date` text NOT NULL,
  `post_time` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post`, `post_date`, `post_time`) VALUES
(1, 'fgdfgdfg', '', ''),
(5, 'dffgsfgd', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `post_comment`
--

CREATE TABLE IF NOT EXISTS `post_comment` (
  `post_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `replay`
--

CREATE TABLE IF NOT EXISTS `replay` (
  `replay_id` int(11) NOT NULL,
  `replay` int(11) NOT NULL,
  `replay_date` text NOT NULL,
  `replay_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `blood_group` text NOT NULL,
  `password` text NOT NULL,
  `birth_day` text NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'user',
  `photo` varchar(10) NOT NULL DEFAULT 'defult.jpg',
  `location` text NOT NULL,
  `last_given` text,
  `num_given` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `blood_group`, `password`, `birth_day`, `role`, `photo`, `location`, `last_given`, `num_given`) VALUES
(1, '', '', '', '', '', 'user', 'defult.jpg', '', NULL, NULL),
(2, 'abir', 'mhas.abir@gmail.com', 'A+', '123', '2016-05-04', 'user', 'defult.jpg', 'Barisal', NULL, NULL),
(3, 'test', 'test@test.com', 'A+', 'test', '2016-05-05', 'user', 'defult.jpg', 'banani', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_comment`
--

CREATE TABLE IF NOT EXISTS `user_comment` (
  `user_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_post`
--

CREATE TABLE IF NOT EXISTS `user_post` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_post`
--

INSERT INTO `user_post` (`post_id`, `user_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_replay`
--

CREATE TABLE IF NOT EXISTS `user_replay` (
  `user_id` int(11) NOT NULL,
  `replay_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `community_user`
--
ALTER TABLE `community_user`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `comunity`
--
ALTER TABLE `comunity`
  ADD PRIMARY KEY (`comunity_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `replay`
--
ALTER TABLE `replay`
  ADD PRIMARY KEY (`replay_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comunity`
--
ALTER TABLE `comunity`
  MODIFY `comunity_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `replay`
--
ALTER TABLE `replay`
  MODIFY `replay_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
