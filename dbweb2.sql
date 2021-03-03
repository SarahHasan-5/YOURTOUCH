-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04 يوليو 2020 الساعة 20:19
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
-- بنية الجدول `dept`
--

CREATE TABLE `dept` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `catide` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `dept`
--

INSERT INTO `dept` (`id`, `name`, `catide`) VALUES
(1, 'Sweater', 1),
(2, 'Shirt', 1),
(3, 'Dress', 1),
(4, 'necklace', 2),
(5, 'Ring', 2),
(6, 'Bracelet', 2),
(7, 'Pajamas', 3),
(8, 'Baby sweater ', 3),
(9, 'Baby Dress ', 3),
(10, 'Big and Tall', 1),
(12, 'Foundation', 5),
(13, 'Concealer\r\n', 5),
(14, 'Contour\r\n', 5),
(15, 'Primer', 5),
(16, 'lip cream', 5),
(17, 'blush', 5),
(18, 'highlight', 5),
(19, 'women shoes', 6),
(20, 'men shoes', 6),
(21, 'Diaper bags', 7),
(22, 'Belt bags', 7),
(23, 'Bedding collection', 8),
(24, 'Pillows', 8),
(25, 'Sheets and pillowcases', 8),
(26, 'Men sweater', 4),
(27, 'Men shirt', 4),
(28, 'Others', 9);

-- --------------------------------------------------------

--
-- بنية الجدول `information`
--

CREATE TABLE `information` (
  `id` int(11) DEFAULT NULL,
  `Family` text NOT NULL,
  `Phone` text NOT NULL,
  `Email` text NOT NULL,
  `Address` text NOT NULL,
  `City` text NOT NULL,
  `Country` text NOT NULL,
  `Postal Code` text NOT NULL,
  `Payment Method` text NOT NULL,
  `Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `infouser`
--

CREATE TABLE `infouser` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `phone` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `infouser`
--

INSERT INTO `infouser` (`id`, `username`, `phone`, `email`, `password`) VALUES
(1, 'sara', 785463455, 'sara_hab@yahoo.com', '546783297'),
(2, 'eman', 776572847, 'eman_has@yahoo.com', '76849034'),
(3, 'aseel', 2147483647, 'aseel_mal@gmail.com', '4598398'),
(4, 'joury', 785463436, 'joury_ibr@gmail.com', '53438690'),
(5, 'aws', 782438576, 'aws_ha@yahoo.com', '64593290'),
(6, 'jenan', 785463455, 'jenan_nano@yahoo.com', '7539296'),
(7, 'mohammed', 8324999, 'moh_ah@gmail.com', '1458900'),
(8, 'salma', 784536781, 'salma_hab@gmail.com', '4365768'),
(9, 'esraa', 794526729, 'esraa_hab@gmail.com', '65487349'),
(10, 'karam', 785463911, 'karam_hab@yahoo.com', '7584349'),
(11, 'enas', 794525629, 'enas_mm@yahoo.com', '6983509'),
(177, '', 0, '', ''),
(178, '', 0, '', ''),
(179, '', 0, '', '');

-- --------------------------------------------------------

--
-- بنية الجدول `myproduct2`
--

CREATE TABLE `myproduct2` (
  `id` int(11) DEFAULT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `color` text NOT NULL,
  `size` text NOT NULL,
  `price` text NOT NULL,
  `pid` text NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `myproduct2`
--

INSERT INTO `myproduct2` (`id`, `image`, `description`, `color`, `size`, `price`, `pid`, `userid`) VALUES
(NULL, 'uploads/dre.jpg', 'A winter dress designed in a classic, high quality fashion with distinctive detail of our store design', 'Black', 'Big', '50', '2', 45),
(NULL, 'uploads/vvvv.jpg', 'Pajama boy', 'Blue', 'from 3month to 1year', '20', '32', 47),
(NULL, 'uploads/dre.jpg', 'A winter dress designed in a classic, high quality fashion with distinctive detail of our store design', 'Black', 'Big', '50', '2', 55),
(NULL, 'uploads/ffff.jpg', 'Silk shirt of our store design', 'Gray', 'Medium', '30', '10', 0),
(NULL, 'uploads/ggg.jpg', 'High quality winter dress from our store design', 'blue', 'big', '80', '4', 0),
(NULL, 'uploads/ppp.jpg', 'High Quality Evening Dress with distinctive detail of our store design', 'Red', 'Small', '35', '1', 0),
(NULL, 'uploads/bb.jpg', 'Wonderful spring dress by our store design', 'Purple', 'From 3year to 5year', '25', '36', 0);

-- --------------------------------------------------------

--
-- بنية الجدول `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `price` text NOT NULL,
  `color` text NOT NULL,
  `size` text NOT NULL,
  `image` text NOT NULL,
  `productdescription` text NOT NULL,
  `catid` int(11) NOT NULL,
  `selid` int(11) NOT NULL,
  `storeid` int(11) NOT NULL,
  `Name` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `product`
--

INSERT INTO `product` (`id`, `price`, `color`, `size`, `image`, `productdescription`, `catid`, `selid`, `storeid`, `Name`) VALUES
(1, '35', 'Red', 'Small', 'uploads/ppp.jpg', 'High Quality Evening Dress with distinctive detail of our store design', 1, 1, 34, 'Dress'),
(3, '70', 'Gray', 'medium', 'uploads/nnnn.jpg', 'Evening dress with high quality characteristic detail of our store design', 1, 1, 34, 'Dress'),
(4, '80', 'blue', 'big', 'uploads/ggg.jpg', 'High quality winter dress from our store design', 1, 1, 4, 'Dress'),
(5, '40', 'Purple', 'Medium', 'uploads/qqq.jpg', 'A spring shirt decorated with flowers in a modern fashion from the design of our store', 1, 1, 34, 'Shirt'),
(6, '55', 'white', 'small', 'uploads/wh.jpg', 'Winter evening dress from our store design', 1, 1, 4, 'Dress'),
(7, '30', 'Blue', 'Small', 'uploads/mmm.jpg', 'The new wool sweater is from our store design', 1, 1, 34, 'Sweater'),
(8, '40', 'Yellow', 'Small', 'uploads/ye.jpg', 'Silk sweater by our store design', 1, 1, 1, 'Sweater'),
(9, '25', 'Black', 'Medium', 'uploads/bl.jpg', 'Wool sweater with modern story of our store design', 1, 1, 34, 'Sweater'),
(10, '30', 'Gray', 'Medium', 'uploads/ffff.jpg', 'Silk shirt of our store design', 1, 1, 4, 'Shirt'),
(11, '35', 'Orange', 'Big', 'uploads/shi.png', 'Shirt with spring cloth from our store design', 1, 1, 1, 'Shirt'),
(13, '15', 'Gold', '', 'uploads/kk.jpg', 'Necklace is distinguished by our store design', 2, 2, 39, 'Necklace'),
(14, '15', 'Silver', '', 'uploads/jj.jpg', 'Necklace is distinguished by our store design', 2, 2, 39, 'Necklace'),
(15, '10', 'Gold', '', 'uploads/uu.jpg', 'barcelet is distinguished by our store design', 2, 2, 39, 'Barcelet'),
(16, '10', 'Silver', '', 'uploads/dddd.jpg', 'barcelet is distinguished by our store design', 2, 2, 39, 'Barcelet'),
(17, '8', 'Gold', '', 'uploads/aa.jpg', 'Wonderful designer ring from our store design', 2, 2, 39, 'Ring'),
(18, '8', 'Silver', '', 'uploads/zz.jpg', 'Wonderful designer ring from our store design', 2, 2, 39, 'Ring'),
(19, '15', 'Gold', '', 'uploads/mm.jpg', 'Necklace is distinguished by our store design', 2, 2, 41, 'Necklace'),
(20, '13', 'Gold', '', 'uploads/aaa.jpg', 'necklace is designed in a unique way by our store design', 2, 2, 41, 'Necklace'),
(21, '15', 'Silver', '', 'uploads/qq.jpg', 'The designer ring is superbly designed by our store\r\n', 2, 2, 41, 'Ring'),
(22, '8', 'Gold', '', 'uploads/ff.jpg', 'The designer ring is superbly designed by our store\r\n', 2, 2, 41, 'Ring'),
(24, '', '', '', 'uploads/hhhh.jpg', 'Necklace is distinguished by our store design', 2, 2, 40, 'Necklace'),
(25, '8', 'Silver', '', 'uploads/rr.jpg', 'The ring is uniquely designed by our store design', 2, 2, 40, 'Ring'),
(26, '10', 'Gold', '', 'uploads/fff.jpg', 'The ring is uniquely designed by our store design', 2, 2, 40, 'Ring'),
(27, '22', 'Silver', '', 'uploads/ccc.jpg', 'Unique design bracelet designed by our store\r\n', 2, 2, 40, 'Bracelet'),
(28, '22', 'Gold', '', 'uploads/zzz.jpg', 'Unique design bracelet designed by our store\r\n', 2, 2, 40, 'Bracelet'),
(29, '18', 'Gold', '', 'uploads/vvv.jpg', 'Unique bracelet of our store design\r\n', 2, 2, 41, 'Bracelet'),
(30, '18', 'Silver', '', 'uploads/nn.jpg', 'Unique bracelet of our store design\r\n', 2, 2, 41, 'Bracelet'),
(31, '20', 'Pink', 'from 3month to 1year', 'uploads/eee.jpg', 'Pajama girls\' wool of our store design\r\n', 3, 3, 47, 'Pajama'),
(32, '20', 'Blue', 'from 3month to 1year', 'uploads/vvvv.jpg', 'Pajama boy\'s wool of our store design\r\n', 3, 3, 47, 'Pajama'),
(33, '15', 'Red', 'from 3month to 8month', 'uploads/rrr.jpg', 'Pajama and summer girl of our store design\r\n', 3, 3, 47, 'Pajama'),
(34, '15', 'green', 'From 3month to 8month', 'uploads/gg.jpg', 'Pajama and summer boy of our store design\r\n', 3, 3, 47, 'Pajama'),
(35, '25', 'Red', 'From 3year to 5year', 'uploads/ttt.jpg', 'Wonderful spring dress by our store design\r\n', 3, 3, 48, 'Dress'),
(36, '25', 'Purple', 'From 3year to 5year', 'uploads/bb.jpg', 'Wonderful spring dress by our store design\r\n', 3, 3, 48, 'Dress'),
(37, '10', 'Gray', 'From 4year to 6year', 'uploads/uuu.jpg', 'Blouse 100% Cotton girl by our store design', 3, 3, 48, 'Blouse'),
(38, '10', 'Gray', 'From 4year to 6year', 'uploads/xxx.jpg', 'Blouse 100% Cotton boy by our store design', 3, 3, 48, 'Blouse'),
(43, '50', 'node color', '', 'uploads/fo.jpg', 'Foundation for white skin light on skin', 6, 5, 6, 'Foundation'),
(44, '40', 'green', '38', 'uploads/yyyy.jpg', 'Unique designer leather shoes', 7, 8, 7, 'Shoes'),
(45, '20', 'white', 'middle', 'uploads/bag.jpg', 'A unique piece of  hand-designed to beautiful your home', 8, 6, 8, 'Hand Bags');

-- --------------------------------------------------------

--
-- بنية الجدول `productcat`
--

CREATE TABLE `productcat` (
  `id` int(11) NOT NULL,
  `catname` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `productcat`
--

INSERT INTO `productcat` (`id`, `catname`) VALUES
(1, 'women clothing'),
(2, 'accessories'),
(3, 'baby'),
(4, 'Men Clothes'),
(5, 'Makeup'),
(6, 'Shoes'),
(7, 'HandBag'),
(8, 'Home'),
(9, 'Others');

-- --------------------------------------------------------

--
-- بنية الجدول `store`
--

CREATE TABLE `store` (
  `id` int(11) NOT NULL,
  `storename` text NOT NULL,
  `storedescription` text NOT NULL,
  `Email` text NOT NULL,
  `username` text NOT NULL,
  `piclnk` text NOT NULL,
  `catid` int(10) NOT NULL,
  `password` int(33) NOT NULL,
  `address` text NOT NULL,
  `phone` int(33) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `store`
--

INSERT INTO `store` (`id`, `storename`, `storedescription`, `Email`, `username`, `piclnk`, `catid`, `password`, `address`, `phone`) VALUES
(40, 'Blingitonn Store', 'designing unique custom made and trendy jewelry to all the beautiful confident women out there', 'eman_hab97@yahoo.com', 'Eman Habash', 'upload/ded.jpg', 2, 777, '', 0),
(44, 'Bag Ladies Store', 'Bags are carefully crafted to suit your wonderfull look', 'lina_as@gmail.com', 'Lina Hseen', 'upload/vdv.jpg', 7, 0, '', 0),
(4, 'vogaloset store', 'A shop specialized in selling women\'s clothing designed in a way that suits the taste of our ladies in the Arab society', 'aya_has22@yahoo.com', 'Aya Ismail', 'upload/womwn.jpg', 1, 333, '', 0),
(38, 'Ilias Store', 'Shop suitable for young people The clothing is designed in an attractive and modern way', 'ilias_moh91@yahoo.com', 'Ilias Mohammed', 'upload/tgt.jpg', 4, 0, '', 0),
(6, 'Fashion Store', 'A specialized shop to provide all the original makeup you need from large stores not available in Jordan', 'joury_hasan@yahoo.com', 'Joury Habash', 'upload/omn.jpg', 5, 0, '', 0),
(54, '', '', '', '', '', 0, 0, '', 0),
(43, 'Shoes Store', 'Shop designs shoes in a unique way according to your request', 'abeer_as@gmail.com', 'Abeer Ameen', 'upload/vrdvf.jpg', 6, 0, '', 0),
(42, 'Home Sweet Store', 'Shop makes you the pieces you need to decorate your home with my attractive touches', 'jenen_hab55@yahoo.com', 'Jenen', 'upload/uu.jpg', 8, 0, '', 0),
(41, 'Aseel Store', 'Our store helps you design your best accessories to be distinctive', 'aseel_malkawi@gmail.com', 'Aseel Malkawi', 'upload/frhfr.jpg', 2, 0, '', 0),
(39, 'Highlighter Store', 'A shop specialized in selling women\'s clothing designed in a way that suits the taste of our ladies in the Arab society', 'aya_salem67@yahoo.com', 'Aya Emad', 'upload/ass.jpg', 2, 0, '', 0),
(36, 'Adel Store', 'A specialized shop that meets the needs of young people', 'adel_ad44@yahoo.com', 'Adel Adnan', 'upload/cccc.jpg', 4, 0, '', 0),
(37, 'Mahdi Store', 'The shop is designed in a modern way for young people', 'mahdi_sh77@gmail.com', 'Mahdi Shoman', 'upload/cd.jpg', 4, 0, '', 0),
(57, 'mohmd store', 'store is very wonerfull', 'moh_hab@yahoo.com', 'moh', 'upload/bnb.jpg', 4, 111, 'mafraq', 5788),
(47, 'DesignBaby Store', 'A shop designed for children The clothes are designed in a modern ', 'laila_mo33@gmail.com', 'Laila Morad', 'upload/werwd.jpg', 3, 0, '', 0),
(34, 'Design Store', 'Shop specially designed to suit your needs as a female', 'alma_salem99@yahoo.com', 'Alma Salem', 'upload/group.jpg', 1, 0, '', 0),
(48, 'Kids Store', 'A shop interested in designing clothes for your children suitable for most age groups.', 'nareen_mal@yahoo.com', 'Nareen Malek', 'upload/fnv.jpg', 3, 0, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infouser`
--
ALTER TABLE `infouser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productcat`
--
ALTER TABLE `productcat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `infouser`
--
ALTER TABLE `infouser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
