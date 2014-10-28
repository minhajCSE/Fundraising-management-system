-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 26, 2014 at 04:25 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_fundraising`
--
CREATE DATABASE IF NOT EXISTS `db_fundraising` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_fundraising`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(2) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'minhajul', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'ripon', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `category_id` int(2) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `publication_status`) VALUES
(1, 'Medical', 1),
(4, 'Poor People', 1),
(5, 'Religious', 1),
(6, 'Autstic', 1),
(7, 'Old Home', 1),
(8, 'Game', 1),
(10, 'Travel', 1),
(11, 'Entertainment', 1),
(13, 'Medical', 1),
(14, 'Environment', 1),
(17, 'Education', 1),
(18, 'Blood', 0),
(19, 'Rokun', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE IF NOT EXISTS `tbl_client` (
  `client_id` int(10) NOT NULL AUTO_INCREMENT,
  `client_username` varchar(100) NOT NULL,
  `client_password` varchar(100) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_client`
--

INSERT INTO `tbl_client` (`client_id`, `client_username`, `client_password`) VALUES
(1, 'minhajul', '123456'),
(2, 'ripon', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client_info`
--

CREATE TABLE IF NOT EXISTS `tbl_client_info` (
  `client_id` int(20) NOT NULL AUTO_INCREMENT,
  `client_username` varchar(100) NOT NULL,
  `client_password` varchar(100) NOT NULL,
  `client_confirm_password` varchar(100) NOT NULL,
  `client_firstname` varchar(50) NOT NULL,
  `client_lastname` varchar(50) NOT NULL,
  `client_address` varchar(100) NOT NULL,
  `client_country` varchar(50) NOT NULL,
  `client_city` varchar(20) NOT NULL,
  `client_mobile` varchar(50) NOT NULL,
  `client_email` varchar(30) NOT NULL,
  `client_alternative_email` varchar(30) NOT NULL,
  `client_donate_for` varchar(20) NOT NULL,
  `client_description` text NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_client_info`
--

INSERT INTO `tbl_client_info` (`client_id`, `client_username`, `client_password`, `client_confirm_password`, `client_firstname`, `client_lastname`, `client_address`, `client_country`, `client_city`, `client_mobile`, `client_email`, `client_alternative_email`, `client_donate_for`, `client_description`) VALUES
(4, 'minhajul', '123456', '123456', 'Md.Minhajul', 'Islam', 'Shukrabad,Dhanmondi', '0', 'Dhaka', '1722503052', 'minhaj15-1213@diu.edu.bd', 'minhaj15-1213@diu.edu.bd', 'Religious', ''),
(5, 'ripon', '123456', '123456', 'Anisur', 'Rahman', 'Dhanmondi,Dhaka', '0', 'Dhaka', '1722503052', 'ripon15-1281@diu.edu.bd', 'ripon15-1281@diu.edu.bd', 'Education', ''),
(6, 'rokun', '123456', '123456', 'Md.Rokunuzzaman', 'Rony', 'Dhanmondi', 'BD', 'Dhaka', '1722503052', 'rokun@gmail.com', 'rokun@gmail.com', 'Religious', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donor`
--

CREATE TABLE IF NOT EXISTS `tbl_donor` (
  `donor_id` int(10) NOT NULL AUTO_INCREMENT,
  `donor_username` varchar(100) NOT NULL,
  `donor_password` varchar(100) NOT NULL,
  PRIMARY KEY (`donor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donor_info`
--

CREATE TABLE IF NOT EXISTS `tbl_donor_info` (
  `donor_id` int(100) NOT NULL AUTO_INCREMENT,
  `donor_username` varchar(100) NOT NULL,
  `donor_password` varchar(100) NOT NULL,
  `donor_confirm_password` varchar(100) NOT NULL,
  `donor_firstname` varchar(50) NOT NULL,
  `donor_lastname` varchar(50) NOT NULL,
  `donor_address` varchar(100) NOT NULL,
  `donor_country` varchar(30) NOT NULL,
  `donor_city` varchar(20) NOT NULL,
  `donor_mobile` varchar(30) NOT NULL,
  `donor_mail` varchar(50) NOT NULL,
  `donor_alternative_mail` varchar(50) NOT NULL,
  `donor_donate_for` varchar(50) NOT NULL,
  `donor_description` text NOT NULL,
  PRIMARY KEY (`donor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_donor_info`
--

INSERT INTO `tbl_donor_info` (`donor_id`, `donor_username`, `donor_password`, `donor_confirm_password`, `donor_firstname`, `donor_lastname`, `donor_address`, `donor_country`, `donor_city`, `donor_mobile`, `donor_mail`, `donor_alternative_mail`, `donor_donate_for`, `donor_description`) VALUES
(1, 'minhajul', '123456', '123456', 'Md.Minhajul ', 'Islam', 'Dhanmondi', 'Bangladesh', 'Dhaka', '1722503052', 'minhaj15-1213@diu.edu.bd', 'minhaj15-1213@diu.edu.bd', 'Education', ''),
(2, 'minhajul', '123456', '123456', 'Md.Minhajul ', 'Islam', 'Dhanmondi,Dhaka', '0', 'Dhaka', '1722503052', '0', '0', 'Education', ''),
(3, 'ripon', '123456', '123456', 'Anisur Rahman', 'Ripon', 'Dhanmondi,Dhaka', 'BD', 'Dhaka', '1722503052', 'ripon15-1281@diu.edu.bd', 'ripon15-1281@diu.edu.bd', 'Agriculture', ''),
(4, 'minhajul', '123456', '123456', 'Md.Minhajul ', 'Islam', '', 'AU', 'Dhaka', '1722503052', 'ripon15-1281@diu.edu.bd', 'ripon15-1281@diu.edu.bd', 'Education', ''),
(5, 'minhajul', '123', '123', 'Md.Minhajul ', 'Ripon', '', 'GB', 'Dhaka', '1722503052', 'al@gmail.com', 'ripon15-1281@diu.edu.bd', 'Education', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE IF NOT EXISTS `tbl_event` (
  `event_id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`event_id`, `first_name`, `last_name`, `email_address`, `password`) VALUES
(1, 'Minhajul', 'Islam', 'kmsohelinfo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fund`
--

CREATE TABLE IF NOT EXISTS `tbl_fund` (
  `fund_id` int(2) NOT NULL AUTO_INCREMENT,
  `donor_id` int(11) NOT NULL,
  `fund_title` varchar(255) NOT NULL,
  `fund_category` varchar(10) NOT NULL,
  `fund_money` varchar(100) NOT NULL,
  `fund_img` text NOT NULL,
  `publication_status` tinyint(2) NOT NULL,
  PRIMARY KEY (`fund_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `tbl_fund`
--

INSERT INTO `tbl_fund` (`fund_id`, `donor_id`, `fund_title`, `fund_category`, `fund_money`, `fund_img`, `publication_status`) VALUES
(36, 1, 'For Medical.....', 'Medical', '$2000', 'images/fund/fund1.png', 1),
(37, 1, 'For Medical Purpose', 'Medical', '$900', 'images/fund/images.jpg', 0),
(38, 1, 'For poor people', 'Poor Peopl', '$2000', 'images/fund/2010-01-12__nt02.jpg', 0),
(39, 1, 'For autstic baby..', 'Autstic', '$1300', 'images/fund/autistic-girl.jpg', 1),
(40, 1, 'For travel ....', 'Travel', '$900', 'images/fund/MauritiusGuardianEscapes.jpg', 1),
(41, 3, 'For Medical Purpose', 'Medical', '$1300', 'images/fund/fund.png', 1),
(42, 3, 'For Education..', 'Education', '$2000', 'images/fund/download.jpg', 1),
(43, 3, 'For game', 'Game', '$1300', 'images/fund/images1.jpg', 1),
(44, 3, 'For entertainment', 'Environmen', '$500', 'images/fund/Shawn-says-hello-to-his-KPMG-fans1-844x400.jpg', 1),
(45, 3, 'For autstic baby..', 'Autstic', '$2000', 'images/fund/images_(1).jpg', 1),
(46, 3, 'For religious puspose', 'Religious', '$900', 'images/fund/7169ed71d94369e8089d8272294a8bee.jpg', 1),
(47, 1, 'Blood....', 'Medical', '$2000', 'images/fund/autistic-girl1.jpg', 1),
(48, 1, 'Blood....', 'Medical', '$2000', 'images/fund/images2.jpg', 1),
(49, 1, 'Blood....', 'Medical', '$10000', 'images/fund/autistic-girl2.jpg', 1),
(50, 1, 'Blood....', 'Poor Peopl', '$10000', 'images/fund/2010-01-12__nt021.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fund_request`
--

CREATE TABLE IF NOT EXISTS `tbl_fund_request` (
  `fund_request_id` int(10) NOT NULL AUTO_INCREMENT,
  `client_id` int(10) NOT NULL,
  `donor_id` int(10) NOT NULL,
  `client_username` varchar(100) NOT NULL,
  `fund_ammount` varchar(50) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `client_email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `fund_title` varchar(50) NOT NULL,
  `fund_id` int(11) NOT NULL,
  PRIMARY KEY (`fund_request_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `tbl_fund_request`
--

INSERT INTO `tbl_fund_request` (`fund_request_id`, `client_id`, `donor_id`, `client_username`, `fund_ammount`, `category_name`, `client_email`, `message`, `fund_title`, `fund_id`) VALUES
(21, 4, 1, 'minhajul', '$2000', 'Autstic', 'minhajul@gmail.com', 'This is fund id testing.........Let it works.', 'For autstic baby..', 45),
(22, 4, 1, 'minhajul', '$900', 'Religious', 'minhajul@gmail.com', 'this s', 'For religious puspose', 46),
(23, 4, 3, 'minhajul', '$1300', 'Game', 'minahajul@gmail.com', 'g', 'For game', 43),
(24, 4, 0, 'minhajul', '$2000', 'Medical', 'minhajul@gmail.com', 'aq', 'For Medical.....', 36),
(25, 4, 1, 'minhajul', '$900', 'Travel', 'minhajul@gmail.com', 'q', 'For travel ....', 40),
(26, 4, 0, 'minhajul', '$500', 'Environmen', 'minhaj15-1213@diu.edu.bd', 'a', 'For entertainment', 44),
(27, 4, 0, 'minhajul', '$2000', 'Medical', 'minhaj15-1213@diu.edu.bd', 'this is demo text', 'Blood....', 47),
(28, 4, 1, 'minhajul', '$2000', 'Medical', 'minhaj15-1213@diu.edu.bd', 'This is demo text', 'Blood....', 48),
(29, 4, 1, 'minhajul', '$10000', 'Medical', 'minhaj15-1213@diu.edu.bd', 'This is demo text', 'Blood....', 49),
(30, 4, 1, 'minhajul', '$10000', 'Poor Peopl', 'minhaj15-1213@diu.edu.bd', 'This is demo text.....', 'Blood....', 50),
(31, 6, 0, 'rokun', '$10000', 'Poor Peopl', 'rokun@gmail.com', 'This is demo........', 'Blood....', 50),
(32, 6, 1, 'rokun', '$10000', 'Medical', 'rokun@gmail.com', 'This is demo.....', 'Blood....', 49);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mail`
--

CREATE TABLE IF NOT EXISTS `tbl_mail` (
  `contact_id` int(10) NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(50) NOT NULL,
  `contact_mail` varchar(100) NOT NULL,
  `contact_subject` varchar(50) NOT NULL,
  `contact_message` text NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_mail`
--

INSERT INTO `tbl_mail` (`contact_id`, `contact_name`, `contact_mail`, `contact_subject`, `contact_message`) VALUES
(3, 'Md.Minhajul Islam', 'minhaj15-1213@diu.edu.bd', 'suggestions', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(4, 'Md.Minhajul Islam', 'minhaj15-1213@diu.edu.bd', 'suggestions', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(5, 'Md.Minhajul Islam', 'minhaj15-1213@diu.edu.bd', 'suggestions', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(6, 'Anisur Rahman', 'ripon15-1281@diu.edu.bd', 'service', '\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_navigation`
--

CREATE TABLE IF NOT EXISTS `tbl_navigation` (
  `navigation_id` int(10) NOT NULL AUTO_INCREMENT,
  `add_navigation` varchar(100) NOT NULL,
  `publication_status` tinyint(1) NOT NULL COMMENT 'publication_status=1 Publish and publication_status=0 Unpublish',
  PRIMARY KEY (`navigation_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_navigation`
--

INSERT INTO `tbl_navigation` (`navigation_id`, `add_navigation`, `publication_status`) VALUES
(1, 'Fundraising', 1),
(3, 'About Us', 1),
(4, 'Contact us', 1),
(5, 'Finds an Events', 1),
(7, 'Home', 1),
(8, 'Media', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE IF NOT EXISTS `tbl_news` (
  `news_id` int(10) NOT NULL AUTO_INCREMENT,
  `category_id` int(2) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `news_title` varchar(100) NOT NULL,
  `full_news` text NOT NULL,
  `author_name` varchar(100) NOT NULL,
  `publication_status` tinyint(2) NOT NULL,
  `featured_news` tinyint(2) NOT NULL,
  `news_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `category_id`, `category_name`, `news_title`, `full_news`, `author_name`, `publication_status`, `featured_news`, `news_date`) VALUES
(7, 0, '', 'What is Lorem Ipsum ?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><div><span ><br></span></div><div><strong >Lorem Ipsum</strong><span >&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '0', 1, 1, '2014-08-20 18:51:44'),
(8, 4, '', 'Why does we use it ?', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span><div><span ><br></span></div><div><span >It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '0', 1, 1, '2014-08-20 18:52:16'),
(9, 4, '', 'What is Lorem Ipsum ?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><div><span ><br></span></div><div><strong >Lorem Ipsum</strong><span >&nbsp is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></div><div><span ><br></span></div><div><strong >Lorem Ipsum</strong><span >&nbsp is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></div><div><span ><br></span></div><div><strong >Lorem Ipsum</strong><span >&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '0', 1, 1, '2014-08-20 19:00:14'),
(10, 10, '', 'Why does it come ?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p><p >The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p><p >Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p><p >The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '0', 1, 1, '2014-08-20 19:01:08'),
(11, 11, '', 'Where can i get some?', '<span >There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span><div><span ><br></span></div><div><span >There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span></div><div><span ><br></span></div><div><span >There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span></div>', '0', 1, 1, '2014-08-20 19:02:50'),
(12, 4, '', 'What is this ?', '<span >There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span><div><span ><br></span></div><div><span >There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span></div><div><span ><br></span></div><div><span >There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span></div>', '0', 1, 1, '2014-08-20 19:03:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_organization`
--

CREATE TABLE IF NOT EXISTS `tbl_organization` (
  `organization_id` int(10) NOT NULL AUTO_INCREMENT,
  `organization_name` varchar(100) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `organization_title` varchar(255) NOT NULL,
  `organization_img` text NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  PRIMARY KEY (`organization_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_organization`
--

INSERT INTO `tbl_organization` (`organization_id`, `organization_name`, `category_name`, `organization_title`, `organization_img`, `publication_status`) VALUES
(2, 'Serveno Technologies Ltd', 'Religious', '<span >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley.</span>', 'images/organization/31.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_success`
--

CREATE TABLE IF NOT EXISTS `tbl_success` (
  `success_id` int(10) NOT NULL AUTO_INCREMENT,
  `success_title` varchar(50) NOT NULL,
  `success_summary` varchar(100) NOT NULL,
  `success_details` text NOT NULL,
  `success_img` text NOT NULL,
  `publication_status` tinyint(2) NOT NULL,
  PRIMARY KEY (`success_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_success`
--

INSERT INTO `tbl_success` (`success_id`, `success_title`, `success_summary`, `success_details`, `success_img`, `publication_status`) VALUES
(4, 'Story One', 'Pellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.Pellentesq', 'Pellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.PellentesqPellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.Pellentesq.Pellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.Pellentesq.Pellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.Pellentesq.Pellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.Pellentesq.Pellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.Pellentesq.Pellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.Pellentesq', 'images/story_img/client1.png', 1),
(3, 'Story Two', 'Pellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.Pellentesq', 'Pellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.Pellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.Pellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.Pellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.Pellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.Pellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.Pellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.Pellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.', 'images/story_img/grab.png', 1),
(5, 'Story Three', 'Pellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.Pellentesq', 'Pellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.PellentesqPellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.PellentesqPellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.PellentesqPellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.PellentesqPellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.PellentesqPellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.PellentesqPellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.PellentesqPellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.PellentesqPellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.PellentesqPellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.PellentesqPellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.PellentesqPellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.PellentesqPellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.Pellentesq', 'images/story_img/client2.png', 1),
(6, 'Story Four', 'Pellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.Pellentesq', 'Pellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.Pellentesq.Pellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.PellentesqPellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.PellentesqPellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.PellentesqPellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.PellentesqPellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.PellentesqPellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.PellentesqPellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.PellentesqPellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.PellentesqPellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.PellentesqPellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.PellentesqPellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.PellentesqPellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.PellentesqPellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.PellentesqPellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.Pellentesq.Pellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.Pellentesq', 'images/story_img/client3.png', 1),
(7, 'Success Story One', '<strong >Lorem Ipsum</strong><span >&nbsp;is simply dummy text of the printing and typesetting indus', '<strong >Lorem Ipsum</strong><span >&nbsp is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><div><span ><br></span></div><div><strong >Lorem Ipsum</strong><span >&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></div>', 'images/story_img/humanity2.jpg', 1),
(8, 'Success Story Two', '<span >It is a long established fact that a reader will be distracted by the readable content of a p', '<span >It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span><div><span ><br></span></div><div><span >It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></div>', 'images/story_img/humanity-quotes.jpg', 1),
(9, 'Success Story Three', '<span >The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interest', '<p >Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p><p >The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p><p >Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32</p>', 'images/story_img/Symbol-of-Humanity-lr.jpg', 1),
(10, 'Success Story Four', '<span >There are many variations of passages of Lorem Ipsum available, but the majority have suffere', '<span >There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span><span >There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span><span >There are many variations of passages of</span><div><span ><br></span></div><div><span >&nbsp Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span><div><span ><br></span></div></div>', 'images/story_img/images.jpg', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
