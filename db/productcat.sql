 Server: localhost  -   Database: dbweb2  -   Table: productcat
 
-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Mar 30, 2019 at 11:56 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `dbweb2`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `productcat`
-- 

CREATE TABLE `productcat` (
  `id` int(11) NOT NULL auto_increment,
  `catname` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

-- 
-- Dumping data for table `productcat`
-- 

INSERT INTO `productcat` VALUES (1, 'women clothing');
INSERT INTO `productcat` VALUES (2, 'accessories');
INSERT INTO `productcat` VALUES (3, 'baby');
INSERT INTO `productcat` VALUES (4, 'Men Clothes');
INSERT INTO `productcat` VALUES (5, 'Makeup');
INSERT INTO `productcat` VALUES (6, 'Shoes');
INSERT INTO `productcat` VALUES (7, 'HandBag');
INSERT INTO `productcat` VALUES (8, 'Home');
INSERT INTO `productcat` VALUES (9, 'Others');

