 Server: localhost  -   Database: dbweb2  -   Table: infouser
 
-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Mar 30, 2019 at 11:53 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `dbweb2`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `infouser`
-- 

CREATE TABLE `infouser` (
  `id` int(11) NOT NULL auto_increment,
  `username` text NOT NULL,
  `phone` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

-- 
-- Dumping data for table `infouser`
-- 

INSERT INTO `infouser` VALUES (1, 'sara', 785463455, 'sara_hab@yahoo.com', '546783297');
INSERT INTO `infouser` VALUES (2, 'eman', 776572847, 'eman_has@yahoo.com', '76849034');
INSERT INTO `infouser` VALUES (3, 'aseel', 2147483647, 'aseel_mal@gmail.com', '4598398');
INSERT INTO `infouser` VALUES (4, 'joury', 785463436, 'joury_ibr@gmail.com', '53438690');
INSERT INTO `infouser` VALUES (5, 'aws', 782438576, 'aws_ha@yahoo.com', '64593290');
INSERT INTO `infouser` VALUES (6, 'jenan', 785463455, 'jenan_nano@yahoo.com', '7539296');
INSERT INTO `infouser` VALUES (7, 'mohammed', 8324999, 'moh_ah@gmail.com', '1458900');
INSERT INTO `infouser` VALUES (8, 'salma', 784536781, 'salma_hab@gmail.com', '4365768');
INSERT INTO `infouser` VALUES (9, 'esraa', 794526729, 'esraa_hab@gmail.com', '65487349');
INSERT INTO `infouser` VALUES (10, 'karam', 785463911, 'karam_hab@yahoo.com', '7584349');
INSERT INTO `infouser` VALUES (11, 'enas', 794525629, 'enas_mm@yahoo.com', '6983509');
INSERT INTO `infouser` VALUES (26, '', 0, '', '');
INSERT INTO `infouser` VALUES (21, '', 0, '', '');
INSERT INTO `infouser` VALUES (22, '', 0, '', '');
INSERT INTO `infouser` VALUES (23, 'eman', 788888888, 'eman@yahoo.com', '888');
INSERT INTO `infouser` VALUES (24, 'eman', 788888888, 'eman@yahoo.com', '888');
INSERT INTO `infouser` VALUES (25, '', 0, '', '');

