-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 02, 2019 at 12:38 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `complain_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complains`
--

CREATE TABLE IF NOT EXISTS `tbl_complains` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `cust_id` int(10) NOT NULL,
  `cust_name` varchar(40) NOT NULL,
  `comp_type` varchar(40) NOT NULL,
  `comp_title` varchar(200) NOT NULL,
  `comp_desc` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `eng_id` int(10) NOT NULL,
  `eng_name` varchar(40) NOT NULL,
  `eng_comment` varchar(240) NOT NULL,
  `create_date` datetime NOT NULL,
  `close_date` datetime NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_complains`
--

INSERT INTO `tbl_complains` (`cid`, `cust_id`, `cust_name`, `comp_type`, `comp_title`, `comp_desc`, `status`, `eng_id`, `eng_name`, `eng_comment`, `create_date`, `close_date`) VALUES
(14, 9, 'Shreyas', 'Few Flowers', 'Hibiscuss Plant', 'Less flowers', 'working', 9, 'Uttam', 'Good', '2019-03-31 18:51:23', '0000-00-00 00:00:00'),
(13, 8, 'Shreyas', 'Brown Leaf Tips', 'Beetle Leaf', 'There is a problem in Beetle leaf', 'close', 9, 'Uttam', 'Working', '2019-03-31 17:53:28', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `cname` varchar(40) NOT NULL,
  `cpass` varchar(40) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(30) NOT NULL,
  `c_mobile` varchar(15) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`cid`, `cname`, `cpass`, `address`, `email`, `c_mobile`, `date_time`) VALUES
(9, 'Shreyas', 'shrey', 'Shimog', 'shreyas@gmail.com', '8762287790', '2019-03-31 18:04:54'),
(10, 'Rudra', 'rudra', 'Tarikere', 'rudra@gmail.com', '9974034568', '2019-03-31 19:09:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_engineer`
--

CREATE TABLE IF NOT EXISTS `tbl_engineer` (
  `eid` int(10) NOT NULL AUTO_INCREMENT,
  `ename` varchar(40) NOT NULL,
  `epass` varchar(40) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(40) NOT NULL,
  `e_mobile` varchar(20) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`eid`),
  UNIQUE KEY `ename` (`ename`),
  UNIQUE KEY `ename_2` (`ename`),
  UNIQUE KEY `ename_3` (`ename`),
  UNIQUE KEY `ename_4` (`ename`),
  UNIQUE KEY `ename_5` (`ename`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_engineer`
--

INSERT INTO `tbl_engineer` (`eid`, `ename`, `epass`, `address`, `email`, `e_mobile`, `date_time`) VALUES
(9, 'Uttam', 'Uttam123', 'Shimoga', 'uttam@gmail.com', '9740163807', '2019-03-31 12:23:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_plans`
--

CREATE TABLE IF NOT EXISTS `tbl_plans` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cid` int(10) NOT NULL,
  `plans` varchar(255) NOT NULL,
  `amt` double NOT NULL,
  `plan_date` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_plans`
--

INSERT INTO `tbl_plans` (`id`, `cid`, `plans`, `amt`, `plan_date`) VALUES
(3, 5, 'Basic Plan, Music Plan, ', 150, '13'),
(4, 6, 'Basic Plan, ', 120, '05'),
(5, 7, ', ', 0, '20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier`
--

CREATE TABLE IF NOT EXISTS `tbl_supplier` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(40) NOT NULL,
  `spass` varchar(40) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(40) NOT NULL,
  `s_mobile` varchar(15) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`sid`, `sname`, `spass`, `address`, `email`, `s_mobile`, `date_time`) VALUES
(1, 'maryam afifa', 'marry123', '290, shani peth, pune', 'maryam.afifa@gmail.com', '9987876765', '2010-11-27 17:29:05');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
