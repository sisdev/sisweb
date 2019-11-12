-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 03, 2016 at 01:21 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `coilwind_sisoft`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(21) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `content` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50191 ;

-- --------------------------------------------------------

--
-- Table structure for table `coursesold`
--

CREATE TABLE IF NOT EXISTS `coursesold` (
  `id` int(21) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `content` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50001 ;

-- --------------------------------------------------------

--
-- Table structure for table `coursesold2`
--

CREATE TABLE IF NOT EXISTS `coursesold2` (
  `id` int(21) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `content` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50191 ;

-- --------------------------------------------------------

--
-- Table structure for table `courses_2`
--

CREATE TABLE IF NOT EXISTS `courses_2` (
  `id` int(21) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `content` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50001 ;

-- --------------------------------------------------------

--
-- Table structure for table `email_follow_up`
--

CREATE TABLE IF NOT EXISTS `email_follow_up` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `enq_id` int(11) NOT NULL,
  `email_id` varchar(256) NOT NULL,
  `email_dt` date NOT NULL,
  `email_type_name` varchar(256) NOT NULL,
  `email_from` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

-- --------------------------------------------------------

--
-- Table structure for table `email_type_master`
--

CREATE TABLE IF NOT EXISTS `email_type_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email_type_name` varchar(256) NOT NULL,
  `email_subject` varchar(256) NOT NULL,
  `email_text` text NOT NULL,
  `dt_created` date NOT NULL,
  `dt_updated` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `job_details`
--

CREATE TABLE IF NOT EXISTS `job_details` (
  `jobId` int(4) NOT NULL AUTO_INCREMENT,
  `positionName` varchar(40) NOT NULL,
  `noposition` int(10) NOT NULL,
  `technology` varchar(40) NOT NULL,
  `experience` int(6) NOT NULL,
  `jobDetails` varchar(256) NOT NULL,
  `recruiterName` varchar(20) NOT NULL,
  `companyName` varchar(64) NOT NULL,
  `companyweb` varchar(128) NOT NULL,
  `address` varchar(64) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(128) NOT NULL,
  `dateSubmited` datetime NOT NULL,
  `requestIp` varchar(30) NOT NULL,
  `emailConfirmationStatus` char(1) NOT NULL,
  `emailConfirmationDate` timestamp NULL DEFAULT NULL,
  `jobStatus` char(4) NOT NULL,
  PRIMARY KEY (`jobId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=140 ;

-- --------------------------------------------------------

--
-- Table structure for table `online_training`
--

CREATE TABLE IF NOT EXISTS `online_training` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course` varchar(164) NOT NULL,
  `name` varchar(64) NOT NULL,
  `fname` varchar(64) NOT NULL,
  `birth` varchar(32) NOT NULL,
  `country` varchar(64) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `marriage` varchar(2) NOT NULL,
  `caddress` varchar(128) NOT NULL,
  `paddress` varchar(128) NOT NULL,
  `mobile` int(16) NOT NULL,
  `hphone` int(16) NOT NULL,
  `email` varchar(128) NOT NULL,
  `qualification` varchar(128) NOT NULL,
  `experience` varchar(128) NOT NULL,
  `status` varchar(2) NOT NULL,
  `date` date NOT NULL,
  `ip_address` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE IF NOT EXISTS `trainer` (
  `trainerid` int(8) NOT NULL AUTO_INCREMENT,
  `tcenter` varchar(96) NOT NULL,
  `tname` varchar(64) NOT NULL,
  `address` varchar(256) NOT NULL,
  `phone1` varchar(16) NOT NULL,
  `phone2` varchar(16) DEFAULT NULL,
  `emailid` varchar(128) NOT NULL,
  `courses` varchar(64) NOT NULL,
  `profile` varchar(512) NOT NULL,
  `update_dtm` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `del_flag` char(2) NOT NULL DEFAULT 'N',
  PRIMARY KEY (`trainerid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=93 ;

-- --------------------------------------------------------

--
-- Table structure for table `training_corp`
--

CREATE TABLE IF NOT EXISTS `training_corp` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `mobile` varchar(64) NOT NULL,
  `course` varchar(64) NOT NULL,
  `organisation` varchar(64) NOT NULL,
  `req_dtm` varchar(64) NOT NULL,
  `ip_add` varchar(64) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `trng_batches`
--

CREATE TABLE IF NOT EXISTS `trng_batches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `batch_id` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `course_name` varchar(64) NOT NULL,
  `duration` varchar(32) NOT NULL,
  `faculty_profile` varchar(64) NOT NULL,
  `day_and_time` varchar(64) NOT NULL,
  `no_of _seats` int(3) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `batch_id` (`batch_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=817 ;

-- --------------------------------------------------------

--
-- Table structure for table `trng_free_service`
--

CREATE TABLE IF NOT EXISTS `trng_free_service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serv_type` varchar(64) NOT NULL DEFAULT '',
  `serv_desc` varchar(256) NOT NULL,
  `name` varchar(64) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `phone` varchar(16) DEFAULT NULL,
  `email` varchar(256) NOT NULL,
  `register_dtm` datetime NOT NULL,
  `ip_add` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=80 ;

-- --------------------------------------------------------

--
-- Table structure for table `trng_query_log`
--

CREATE TABLE IF NOT EXISTS `trng_query_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `qry_type` varchar(64) NOT NULL,
  `center` varchar(96) NOT NULL,
  `name` varchar(64) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `emailID` varchar(256) DEFAULT NULL,
  `phone_no` varchar(16) DEFAULT NULL,
  `qry_details` varchar(512) NOT NULL,
  `req_dtm` datetime NOT NULL,
  `ip_add` varchar(16) NOT NULL,
  `del_flag` char(2) NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=982 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `userpass` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
