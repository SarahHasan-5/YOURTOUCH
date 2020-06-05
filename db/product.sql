 Server: localhost  -   Database: dbweb2  -   Table: product
 
-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Mar 30, 2019 at 11:55 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `dbweb2`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `product`
-- 

CREATE TABLE `product` (
  `id` int(11) NOT NULL auto_increment,
  `price` text NOT NULL,
  `color` text NOT NULL,
  `size` text NOT NULL,
  `image` text NOT NULL,
  `productdescription` text NOT NULL,
  `catid` int(11) NOT NULL,
  `selid` int(11) NOT NULL,
  `storeid` int(11) NOT NULL,
  `name` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=46 ;

-- 
-- Dumping data for table `product`
-- 

INSERT INTO `product` VALUES (1, '35', 'Red', 'Small', 'uploads/ppp.jpg', 'High Quality Evening Dress with distinctive detail of our store design', 1, 1, 1, 'Dress');
INSERT INTO `product` VALUES (2, '50', 'Black', 'Big', 'uploads/dre.jpg', 'A winter dress designed in a classic, high quality fashion with distinctive detail of our store design', 1, 1, 1, 'Dress');
INSERT INTO `product` VALUES (3, '70', 'Gray', 'medium', 'uploads/nnnn.jpg', 'Evening dress with high quality characteristic detail of our store design', 1, 1, 1, 'Dress');
INSERT INTO `product` VALUES (4, '80', 'blue', 'small', 'uploads/ggg.jpg', 'High quality winter dress from our store design', 1, 1, 4, 'Dress');
INSERT INTO `product` VALUES (5, '40', 'Purple', 'Medium', 'uploads/qqq.jpg', 'A spring shirt decorated with flowers in a modern fashion from the design of our store', 1, 1, 4, 'Shirt');
INSERT INTO `product` VALUES (6, '40', 'White', 'Small', 'uploads/wh.jpg', 'Winter evening dress from our store design', 1, 1, 4, 'Dress');
INSERT INTO `product` VALUES (7, '30', 'Blue', 'Small', 'uploads/mmm.jpg', 'The new wool sweater is from our store design', 1, 1, 1, 'Sweater');
INSERT INTO `product` VALUES (8, '40', 'Yellow', 'Small', 'uploads/ye.jpg', 'Silk sweater by our store design', 1, 1, 1, 'Sweater');
INSERT INTO `product` VALUES (9, '25', 'Black', 'Medium', 'uploads/bl.jpg', 'Wool sweater with modern story of our store design', 1, 1, 4, 'Sweater');
INSERT INTO `product` VALUES (10, '30', 'Gray', 'Medium', 'uploads/ffff.jpg', 'Silk shirt of our store design', 1, 1, 4, 'Shirt');
INSERT INTO `product` VALUES (11, '35', 'Orange', 'Big', 'uploads/shi.png', 'Shirt with spring cloth from our store design', 1, 1, 1, 'Shirt');
INSERT INTO `product` VALUES (12, '45', 'White', 'Small', 'uploads/sh.jpg', 'Blouse with summer cloths from our store design', 1, 1, 4, 'Shirt');
INSERT INTO `product` VALUES (13, '15', 'Gold', '', 'uploads/kk.jpg', 'Necklace is distinguished by our store design', 2, 2, 2, 'Necklace');
INSERT INTO `product` VALUES (14, '15', 'Silver', '', 'uploads/jj.jpg', 'Necklace is distinguished by our store design', 2, 2, 2, 'Necklace');
INSERT INTO `product` VALUES (15, '10', 'Gold', '', 'uploads/uu.jpg', 'barcelet is distinguished by our store design', 2, 2, 2, 'Barcelet ');
INSERT INTO `product` VALUES (16, '10', 'Silver', '', 'uploads/dddd.jpg', 'barcelet is distinguished by our store design', 2, 2, 2, 'Barcelet ');
INSERT INTO `product` VALUES (17, '8', 'Gold', '', 'uploads/aa.jpg', 'Wonderful designer ring from our store design', 2, 2, 2, 'Ring ');
INSERT INTO `product` VALUES (18, '8', 'Silver', '', 'uploads/zz.jpg', 'Wonderful designer ring from our store design', 2, 2, 10, 'Ring ');
INSERT INTO `product` VALUES (19, '15', 'Gold', '', 'uploads/mm.jpg', 'Necklace is distinguished by our store design', 2, 2, 10, 'Necklace ');
INSERT INTO `product` VALUES (20, '13', 'Gold', '', 'uploads/aaa.jpg', 'necklace is designed in a unique way by our store design', 2, 2, 10, 'Ring');
INSERT INTO `product` VALUES (21, '15', 'Silver', '', 'uploads/qq.jpg', 'The designer ring is superbly designed by our store\r\n', 2, 2, 10, 'Ring');
INSERT INTO `product` VALUES (22, '8', 'Gold', '', 'uploads/ff.jpg', 'The designer ring is superbly designed by our store\r\n', 2, 2, 10, 'Ring');
INSERT INTO `product` VALUES (23, '15', 'Gold', '', 'uploads/cccc.jpg', 'Necklace is distinguished by our store design', 2, 2, 2, 'Necklace ');
INSERT INTO `product` VALUES (24, '18', 'silver', '', 'uploads/hhhh.jpg', 'Necklace is distinguished by our store design', 2, 2, 2, 'Necklace ');
INSERT INTO `product` VALUES (25, '8', 'Silver', '', 'uploads/rr.jpg', 'The ring is uniquely designed by our store design', 2, 2, 2, 'Ring');
INSERT INTO `product` VALUES (26, '10', 'Gold', '', 'uploads/fff.jpg', 'The ring is uniquely designed by our store design', 2, 2, 10, 'Ring');
INSERT INTO `product` VALUES (27, '22', 'Silver', '', 'uploads/ccc.jpg', 'Unique design bracelet designed by our store\r\n', 2, 2, 10, 'Barcelet');
INSERT INTO `product` VALUES (28, '22', 'Gold', '', 'uploads/zzz.jpg', 'Unique design bracelet designed by our store\r\n', 2, 2, 2, 'Barcelet');
INSERT INTO `product` VALUES (29, '18', 'Gold', '', 'uploads/vvv.jpg', 'Unique bracelet of our store design\r\n', 2, 2, 2, 'Barcelet');
INSERT INTO `product` VALUES (30, '18', 'Silver', '', 'uploads/nn.jpg', 'Unique bracelet of our store design\r\n', 2, 2, 2, 'Barcelet');
INSERT INTO `product` VALUES (31, '20', 'Pink', 'from 3month to 1year', 'uploads/eee.jpg', 'Pajama girls'' wool of our store design\r\n', 3, 3, 3, 'Pajama ');
INSERT INTO `product` VALUES (32, '20', 'Blue', 'from 3month to 1year', 'uploads/vvvv.jpg', 'Pajama boy''s wool of our store design\r\n', 3, 3, 3, 'Pajama ');
INSERT INTO `product` VALUES (33, '15', 'Red', 'from 3month to 8month', 'uploads/rrr.jpg', 'Pajama and summer girl of our store design\r\n', 3, 3, 3, 'Pajama ');
INSERT INTO `product` VALUES (34, '15', 'green', 'From 3month to 8month', 'uploads/gg.jpg', 'Pajama and summer boy of our store design\r\n', 3, 3, 3, 'Pajama ');
INSERT INTO `product` VALUES (35, '25', 'Red', 'From 3year to 5year', 'uploads/ttt.jpg', 'Wonderful spring dress by our store design\r\n', 3, 3, 3, 'Dress ');
INSERT INTO `product` VALUES (36, '25', 'Purple', 'From 3year to 5year', 'uploads/bb.jpg', 'Wonderful spring dress by our store design\r\n', 3, 3, 3, 'Dress ');
INSERT INTO `product` VALUES (37, '10', 'Gray', 'From 4year to 6year', 'uploads/uuu.jpg', 'Blouse 100% Cotton girl by our store design', 3, 3, 3, 'Blouse ');
INSERT INTO `product` VALUES (38, '10', 'Gray', 'From 4year to 6year', 'uploads/xxx.jpg', 'Blouse 100% Cotton boy by our store design', 3, 3, 3, 'Blouse ');
INSERT INTO `product` VALUES (43, '50', 'node color', '', 'uploads/fo.jpg', 'Foundation for white skin light on skin', 6, 5, 6, 'Foundation ');
INSERT INTO `product` VALUES (44, '40', 'green', '38', 'uploads/yyyy.jpg', 'Unique designer leather shoes', 7, 8, 7, 'Shoes');
INSERT INTO `product` VALUES (45, '20', 'white', 'middle', 'uploads/bag.jpg', 'A unique piece of  hand-designed to beautiful your home', 8, 6, 8, 'Bags');

