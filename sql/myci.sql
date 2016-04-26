-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 26, 2016 at 04:33 PM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myci`
--
CREATE DATABASE IF NOT EXISTS `myci` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `myci`;

-- --------------------------------------------------------

--
-- Table structure for table `appconfig`
--

DROP TABLE IF EXISTS `appconfig`;
CREATE TABLE IF NOT EXISTS `appconfig` (
  `appid` int(4) NOT NULL AUTO_INCREMENT,
  `key` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`key`),
  UNIQUE KEY `appid` (`appid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `appconfig`
--

INSERT INTO `appconfig` (`appid`, `key`, `value`) VALUES
(18, 'cv_upload_allowed_type', 'pdf|xls|xlsx|doc|docx'),
(17, 'cv_upload_path', './uploads/cv'),
(20, 'folder_size_decimal_places', '2'),
(19, 'folder_size_unit_of_measurement', 'MB'),
(1, 'org_name', 'Asia Pacific Institute for Broadcasting Development'),
(2, 'org_short_name', 'AIBD'),
(14, 'photo_upload_allowed_type', 'jpg|jpeg|png|gif'),
(13, 'photo_upload_path', './uploads/photo'),
(7, 'site_author', 'Sashidharan P.M. Sreedharan'),
(8, 'site_author_email', 'sashi@aibd.org.my'),
(10, 'site_copyright', 'Copyright &copy;'),
(5, 'site_description', 'Resource Person Database'),
(6, 'site_keywords', 'Asia Pacific Institute for Broadcasting Development, AIBD, aibd, Reseouce Person Database, RP Database'),
(11, 'site_lastupdate', '21/04/2016 @ 1753PM'),
(21, 'site_logo_path', 'assets/img/custom/aibd_logo.jpg'),
(12, 'site_maintenance', 'site_maintenance'),
(4, 'site_title', 'RP Database'),
(3, 'site_url', 'http://localhost/myci'),
(9, 'site_version', '1.10.1');

-- --------------------------------------------------------

--
-- Table structure for table `changelog`
--

DROP TABLE IF EXISTS `changelog`;
CREATE TABLE IF NOT EXISTS `changelog` (
  `logid` int(4) NOT NULL AUTO_INCREMENT,
  `date` varchar(255) NOT NULL,
  `maintainer` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`date`),
  UNIQUE KEY `logid` (`logid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `changelog`
--

INSERT INTO `changelog` (`logid`, `date`, `maintainer`, `description`, `type`) VALUES
(1, '21/04/2016', 'Sashi', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'major'),
(2, '22/04/2016', 'Sashi', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n', 'minor'),
(3, '23/04/2016', 'Sashi', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'minor'),
(4, '24/04/2016', 'Sashi', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'minor');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

DROP TABLE IF EXISTS `config`;
CREATE TABLE IF NOT EXISTS `config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_title` varchar(255) NOT NULL,
  `site_url` varchar(255) NOT NULL,
  `site_description` varchar(255) NOT NULL,
  `site_keywords` varchar(255) NOT NULL,
  `site_author` varchar(255) NOT NULL,
  `site_author_email` varchar(255) NOT NULL,
  `site_version` varchar(255) NOT NULL,
  `site_copyright` varchar(255) NOT NULL,
  `site_last_update` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `site_title`, `site_url`, `site_description`, `site_keywords`, `site_author`, `site_author_email`, `site_version`, `site_copyright`, `site_last_update`) VALUES
(1, 'site_title', 'http://localhost/newci', 'site_description ', 'site_keywords', 'site_author', 'site_author_email 	', 'Ver 1.09', 'copyright', '2013-11-16 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

DROP TABLE IF EXISTS `upload`;
CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Inactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `name`, `email`, `picture`, `created`, `modified`, `status`) VALUES
(1, 'test', 'test', 'FailArmy5.jpg', '2016-04-25 07:04:24', '2016-04-25 07:04:24', 1),
(2, 'test', 'test', 'emmanuel_lewis.jpg', '2016-04-25 07:05:52', '2016-04-25 07:05:52', 1),
(3, 'test', 'test', 'emmanuel_lewis.jpg', '2016-04-25 07:09:21', '2016-04-25 07:09:21', 1),
(4, 'fsdf', 'sdfsdf', 'CZ786321GX.pdf', '2016-04-25 07:09:50', '2016-04-25 07:09:50', 1),
(5, 'hvjghjghj', 'ghjghj', 'amar-motherboard.doc', '2016-04-25 07:10:09', '2016-04-25 07:10:09', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;