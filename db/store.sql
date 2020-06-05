 Server: localhost  -   Database: dbweb2  -   Table: store
 
-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Mar 30, 2019 at 11:57 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `dbweb2`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `store`
-- 

CREATE TABLE `store` (
  `id` int(11) NOT NULL auto_increment,
  `storename` text NOT NULL,
  `storedescription` text NOT NULL,
  `email` text NOT NULL,
  `name` text NOT NULL,
  `piclnk` text NOT NULL,
  `catid` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

-- 
-- Dumping data for table `store`
-- 

INSERT INTO `store` VALUES (1, 'Eman Store', 'A shop specializing in designing women''s clothing in a modern and attractive manner using the best materials of cloth.', 'Habash_eman97@yahoo.com', 'Eman', 'uploads/images.jpg', 1);
INSERT INTO `store` VALUES (2, 'Highlighter Store', 'Shop designs pieces of unique and distinctive accessories that you need to meet.', 'aseel_malkawi@gmail.com', 'Aseel', '', 2);
INSERT INTO `store` VALUES (3, 'Baby Store', 'A shop that meets the needs of the mother and provides children''s pieces designed with our hands to offer to your children.\r\ninclude  categories:month to six years.', 'sara_44@yahoo.com', 'Sara', '', 3);
INSERT INTO `store` VALUES (4, 'vogaloset store', 'A shop specialized in selling women''s clothing designed in a way that suits the taste of our ladies in the Arab society', 'aya_moh22@gmail.com', 'aya', '', 1);
INSERT INTO `store` VALUES (5, 'Design store', 'A men''s fashion shop that is trendy with a very modern story', 'aws_hab@yahoo.com', 'Aws', '', 4);
INSERT INTO `store` VALUES (6, 'Fashion shop', 'A specialized shop to provide all the original makeup you need from large stores not available in Jordan', 'joury_77@yahoo.com', 'Joury', '', 5);
INSERT INTO `store` VALUES (7, 'RETRAW STORE', 'Shop designs shoes in a unique way according to your request', 'enas_44@gmail.com', 'Enas', '', 6);
INSERT INTO `store` VALUES (8, 'PULLANDBEAR STORE', 'Shop makes you the pieces you need to decorate your home with my attractive touches', 'Shahed_habiba33@yahoo.com', 'Shahed', '', 8);
INSERT INTO `store` VALUES (9, 'STRADIVARIUS STORE', 'Specialized in designing women''s bags of all kinds with the finest fabrics and leather', 'Salma_mem@yahoo.com', 'Salma', '', 7);
INSERT INTO `store` VALUES (10, 'blingitonn store', 'designing unique custom made and trendy jewelry to all the beautiful confident women out there', 'nora_66@yahoo.com', 'Nora', '', 2);

