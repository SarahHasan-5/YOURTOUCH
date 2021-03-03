-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21 أغسطس 2020 الساعة 15:15
-- إصدار الخادم: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbweb2`
--

-- --------------------------------------------------------

--
-- بنية الجدول `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `ProductCode` text NOT NULL,
  `price` text NOT NULL,
  `color` text NOT NULL,
  `size` text NOT NULL,
  `image` text NOT NULL,
  `productdescription` text NOT NULL,
  `catid` int(11) NOT NULL,
  `selid` int(11) NOT NULL,
  `storeid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `product`
--

INSERT INTO `product` (`id`, `ProductCode`, `price`, `color`, `size`, `image`, `productdescription`, `catid`, `selid`, `storeid`) VALUES
(1, '1508854', '35', 'Red', 'Small', 'uploads/ppp.jpg', 'High Quality Evening Dress with distinctive detail of our store design', 1, 1, 34),
(3, '1508850', '70', 'Gray', 'medium', 'uploads/nnnn.jpg', 'Evening dress with high quality characteristic detail of our store design', 1, 1, 34),
(4, '1508851', '80', 'blue', 'big', 'uploads/ggg.jpg', 'High quality winter dress from our store design', 1, 1, 4),
(5, '0', '40', 'Purple', 'Medium', 'uploads/qqq.jpg', 'A spring shirt decorated with flowers in a modern fashion from the design of our store', 1, 1, 34),
(6, '1508852', '55', 'white', 'small', 'uploads/wh.jpg', 'Winter evening dress from our store design', 1, 1, 4),
(7, '0', '30', 'Blue', 'Small', 'uploads/mmm.jpg', 'The new wool sweater is from our store design', 1, 1, 34),
(8, '0', '40', 'Yellow', 'Small', 'uploads/ye.jpg', 'Silk sweater by our store design', 1, 1, 1),
(9, '0', '25', 'Black', 'Medium', 'uploads/bl.jpg', 'Wool sweater with modern story of our store design', 1, 1, 34),
(10, '0', '30', 'Gray', 'Medium', 'uploads/ffff.jpg', 'Silk shirt of our store design', 1, 1, 4),
(11, '0', '35', 'Orange', 'Big', 'uploads/shi.png', 'Shirt with spring cloth from our store design', 1, 1, 1),
(13, '0', '15', 'Gold', '', 'uploads/kk.jpg', 'Necklace is distinguished by our store design', 2, 2, 39),
(14, '0', '15', 'Silver', '', 'uploads/jj.jpg', 'Necklace is distinguished by our store design', 2, 2, 39),
(15, '0', '10', 'Gold', '', 'uploads/uu.jpg', 'barcelet is distinguished by our store design', 2, 2, 39),
(16, '0', '10', 'Silver', '', 'uploads/dddd.jpg', 'barcelet is distinguished by our store design', 2, 2, 39),
(17, '0', '8', 'Gold', '', 'uploads/aa.jpg', 'Wonderful designer ring from our store design', 2, 2, 39),
(18, '0', '8', 'Silver', '', 'uploads/zz.jpg', 'Wonderful designer ring from our store design', 2, 2, 39),
(19, '0', '15', 'Gold', '', 'uploads/mm.jpg', 'Necklace is distinguished by our store design', 2, 2, 41),
(20, '0', '13', 'Gold', '', 'uploads/aaa.jpg', 'necklace is designed in a unique way by our store design', 2, 2, 41),
(21, '0', '15', 'Silver', '', 'uploads/qq.jpg', 'The designer ring is superbly designed by our store\r\n', 2, 2, 41),
(22, '0', '8', 'Gold', '', 'uploads/ff.jpg', 'The designer ring is superbly designed by our store\r\n', 2, 2, 41),
(62, '0', '30', 'Cream', '-', 'uploads/bag1.jpg', 'Parker Baby Diaper Backpack - Large Diaper Bag with Insulated Pockets, Stroller Straps and Changing Pad.', 7, 21, 44),
(25, '0', '20', 'red', '', 'uploads/rr.jpg', 'The ring is uniquely designed by our store design', 2, 2, 40),
(26, '0', '10', 'Gold', '', 'uploads/fff.jpg', 'The ring is uniquely designed by our store design', 2, 2, 40),
(27, '0', '22', 'Silver', '', 'uploads/ccc.jpg', 'Unique design bracelet designed by our store\r\n', 2, 2, 40),
(28, '0', '22', 'Gold', '', 'uploads/zzz.jpg', 'Unique design bracelet designed by our store\r\n', 2, 2, 40),
(29, '0', '18', 'Gold', '', 'uploads/vvv.jpg', 'Unique bracelet of our store design\r\n', 2, 2, 41),
(30, '0', '18', 'Silver', '', 'uploads/nn.jpg', 'Unique bracelet of our store design\r\n', 2, 2, 41),
(31, '0', '20', 'Pink', 'from 3month to 1year', 'uploads/eee.jpg', 'Pajama girls\' wool of our store design\r\n', 3, 3, 47),
(32, '0', '20', 'Blue', 'from 3month to 1year', 'uploads/vvvv.jpg', 'Pajama boy\'s wool of our store design\r\n', 3, 3, 47),
(33, '0', '15', 'Red', 'from 3month to 8month', 'uploads/rrr.jpg', 'Pajama and summer girl of our store design\r\n', 3, 3, 47),
(34, '0', '15', 'green', 'From 3month to 8month', 'uploads/gg.jpg', 'Pajama and summer boy of our store design\r\n', 3, 3, 47),
(35, '1508853', '25', 'Red', 'From 3year to 5year', 'uploads/ttt.jpg', 'Wonderful spring dress by our store design\r\n', 3, 3, 48),
(36, '1508855', '25', 'Purple', 'From 3year to 5year', 'uploads/bb.jpg', 'Wonderful spring dress by our store design\r\n', 3, 3, 48),
(37, '0', '10', 'Gray', 'From 4year to 6year', 'uploads/uuu.jpg', 'Blouse 100% Cotton girl by our store design', 3, 3, 48),
(38, '0', '10', 'Gray', 'From 4year to 6year', 'uploads/xxx.jpg', 'Blouse 100% Cotton boy by our store design', 3, 3, 48),
(43, '0', '50', 'node color', '', 'uploads/fo.jpg', 'Foundation for white skin light on skin', 6, 5, 6),
(44, '0', '40', 'green', '38', 'uploads/yyyy.jpg', 'Unique designer leather shoes', 7, 8, 7),
(45, '0', '20', 'white', 'middle', 'uploads/bag.jpg', 'A unique piece of  hand-designed to beautiful your home', 8, 6, 8),
(61, '0', '10', '12GR', '-', 'uploads/blush-couture-artdeco-33106_image_person.jpg', 'Tricolor blusher in an exclusive, limited-edition design.', 5, 17, 63),
(63, '0', '25', 'Black', '-', 'uploads/bag2.jpg', 'Geestock Women Waist Bags Waterproof PU Leather Belt Bag Fanny Pack Crossbody Bumbag for Party, Travel, Hiking.', 7, 22, 44),
(64, '0', '20', 'White', '36 - 37 - 38 - 39 - 40', 'uploads/shoes1.jpg', 'Fashion Women Shoes Women Flats Canvas Shoes Platform Sneakers Women Lace Up Cartoon Cat Ladies Board.', 6, 19, 64),
(65, '0', '17', 'pink', '36 - 37 - 38 - 39 - 40', 'uploads/shoes2.jpg', 'Fashion Women Shoes Women Flats Canvas Shoes Platform Sneakers Women Lace Up Cartoon Cat Ladies Board.', 6, 19, 43),
(66, '0', '20', 'White', 'lg - sm ', 'uploads/1.jpg', 'All Over Print A-line Midi Dress with Tie Ups', 4, 2, 38),
(68, '0', '15', 'Blue', 'lg - sm -md', 'uploads/2.jpg', 'Textured Shirt with Chest Pocket and Short Sleeves', 4, 2, 38),
(69, '1408760', '25', 'Pink', '-', 'uploads/57635115-1-zoom.jpeg', 'Diaper Bag Nappy Bag,Waterproof Multi-Function Mommy Bag-Pink', 7, 21, 44);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
