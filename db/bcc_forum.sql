-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 22, 2015 at 08:59 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bcc_forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_content` text NOT NULL,
  `post_id` int(11) NOT NULL,
  `date_commented` varchar(100) NOT NULL,
  `member_id` int(11) NOT NULL,
  `comment_image` varchar(150) NOT NULL,
  `access` text NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=144 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment_content`, `post_id`, `date_commented`, `member_id`, `comment_image`, `access`) VALUES
(143, 'wqewqdeadasdsadsadsadasd', 152, '02/21/2015 | 11:11:09pm', 65, '../comment_images/', 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `date_of_birth` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `access` varchar(50) NOT NULL,
  `status` text NOT NULL,
  `acct_status` varchar(100) NOT NULL,
  `topic_ctr` varchar(11) NOT NULL,
  `threads_ctr` varchar(11) NOT NULL,
  `replies_ctr` varchar(11) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `image`, `firstname`, `lastname`, `middlename`, `sex`, `address`, `contact_no`, `date_of_birth`, `username`, `email`, `password`, `access`, `status`, `acct_status`, `topic_ctr`, `threads_ctr`, `replies_ctr`) VALUES
(65, '../uploads/Koala.jpg', 'Ronelxxx', 'Jovitax', 'Jovitax', 'Male', 'Aguisan, Himamaylan', '09091234567', '1-1-1994', 'ronel', 'ronel@yahoo.com', 'ronel', 'Professional', 'active', 'Activated', '1', '1', '1'),
(71, '../images/m.jpg', 'prof', 'prof', 'prof', 'Male', 'prof', 'prof', '2015-02-19', 'prof', 'prof@yahoo.com', 'prof', 'Professional', 'inactive', 'Activated', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `message_content` text NOT NULL,
  `status` varchar(15) NOT NULL,
  `date_messaged` varchar(100) NOT NULL,
  `member_id` int(11) NOT NULL,
  `message_image` varchar(150) NOT NULL,
  `sender_id` varchar(15) NOT NULL,
  `subject` text NOT NULL,
  `access` text NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=106 ;

--
-- Dumping data for table `message`
--


-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `post_content` longtext NOT NULL,
  `date_posted` varchar(100) NOT NULL,
  `post_image` varchar(150) NOT NULL,
  `post_title` text NOT NULL,
  `topic` varchar(50) NOT NULL,
  `views` int(11) NOT NULL,
  `replies` int(11) NOT NULL,
  `threads` int(11) NOT NULL,
  `access` text NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=153 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `member_id`, `post_content`, `date_posted`, `post_image`, `post_title`, `topic`, `views`, `replies`, `threads`, `access`) VALUES
(152, 65, 'weewwewwe', '02/21/2015 | 11:10:35pm', '../post_images/', 'weeweww', 'WINDOWS', 9, 2, 1, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `repz`
--

CREATE TABLE IF NOT EXISTS `repz` (
  `reply_id` int(11) NOT NULL AUTO_INCREMENT,
  `reply_content` text NOT NULL,
  `comment_id` int(11) NOT NULL,
  `date_replied` varchar(100) NOT NULL,
  `member_id` int(11) NOT NULL,
  `reply_image` varchar(150) NOT NULL,
  `access` text NOT NULL,
  PRIMARY KEY (`reply_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=151 ;

--
-- Dumping data for table `repz`
--

INSERT INTO `repz` (`reply_id`, `reply_content`, `comment_id`, `date_replied`, `member_id`, `reply_image`, `access`) VALUES
(149, 'asdsadasdassadasdddsadasdasdasd', 143, '02/21/2015 | 11:11:17pm', 65, '../repz_images/', 'Member'),
(150, 'cgh fghfg hfghfghfhgfhfgjgjghjghjghj ghjghj ghjghjghjghjghjghjghjghjghjghjghjghjghjghjghjghjghjghjghjghjghjghjghjghjghjghjghjghjghjghjggjghjghjghjghjgh', 143, '02/21/2015 | 11:20:38pm', 1, '../repz_images/', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `lname` text NOT NULL,
  `mname` text NOT NULL,
  `fname` text NOT NULL,
  `password` text NOT NULL,
  `username` text NOT NULL,
  `user_id` int(15) NOT NULL AUTO_INCREMENT,
  `last_logtime` text NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`lname`, `mname`, `fname`, `password`, `username`, `user_id`, `last_logtime`, `status`) VALUES
('Alexx', 'Alexx', 'Alexx', 'alexander', 'alexander', 1, '02/22/2015 | 01:52:10pm', 'active');
