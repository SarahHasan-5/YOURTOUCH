 Server: localhost  -   Database: dbweb2  -   Table: dept
 
-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Mar 30, 2019 at 11:52 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `dbweb2`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `dept`
-- 

CREATE TABLE `dept` (
  `id` int(11) NOT NULL auto_increment,
  `name` text NOT NULL,
  `catide` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

-- 
-- Dumping data for table `dept`
-- 

INSERT INTO `dept` VALUES (1, 'Sweater', 1);
INSERT INTO `dept` VALUES (2, 'Shirt', 1);
INSERT INTO `dept` VALUES (3, 'Dress', 1);
INSERT INTO `dept` VALUES (4, 'necklace', 2);
INSERT INTO `dept` VALUES (5, 'Ring', 2);
INSERT INTO `dept` VALUES (6, 'Bracelet', 2);
INSERT INTO `dept` VALUES (7, 'Pajamas', 3);
INSERT INTO `dept` VALUES (8, 'Baby sweater ', 3);
INSERT INTO `dept` VALUES (9, 'Baby Dress ', 3);
INSERT INTO `dept` VALUES (10, 'Big and Tall', 1);
INSERT INTO `dept` VALUES (12, 'Foundation', 5);
INSERT INTO `dept` VALUES (13, 'Concealer\r\n', 5);
INSERT INTO `dept` VALUES (14, 'Contour\r\n', 5);
INSERT INTO `dept` VALUES (15, 'Primer', 5);
INSERT INTO `dept` VALUES (16, 'lip cream', 5);
INSERT INTO `dept` VALUES (17, 'blush', 5);
INSERT INTO `dept` VALUES (18, 'highlight', 5);
INSERT INTO `dept` VALUES (19, 'women shoes', 6);
INSERT INTO `dept` VALUES (20, 'men shoes', 6);
INSERT INTO `dept` VALUES (21, 'Diaper bags', 7);
INSERT INTO `dept` VALUES (22, 'Belt bags', 7);
INSERT INTO `dept` VALUES (23, 'Bedding collection', 8);
INSERT INTO `dept` VALUES (24, 'Pillows', 8);
INSERT INTO `dept` VALUES (25, 'Sheets and pillowcases', 8);
INSERT INTO `dept` VALUES (26, 'Men sweater', 4);
INSERT INTO `dept` VALUES (27, 'Men shirt', 4);
INSERT INTO `dept` VALUES (28, 'Others', 9);

