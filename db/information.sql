-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18 أغسطس 2020 الساعة 12:41
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
-- بنية الجدول `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `Address` text NOT NULL,
  `Country` text NOT NULL,
  `Payment Method` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `information`
--

INSERT INTO `information` (`id`, `userid`, `Address`, `Country`, `Payment Method`) VALUES
(1, 1, 'jordan-amman', 'amman', 'Visa'),
(2, 1, 'jordan-amman', 'amman', 'Visa'),
(3, 1, 'jordan-amman', 'amman', 'Visa'),
(4, 1, 'jordan-amman', 'amman', 'Visa'),
(5, 1, 'jordan-amman', 'amman', 'Visa'),
(6, 1, 'jordan-amman', 'amman', 'Visa'),
(7, 1, 'jordan-amman', 'amman', 'Visa'),
(8, 1, 'jordan-amman', 'amman', 'Visa'),
(9, 1, 'jordan-amman', 'amman', 'Visa'),
(10, 1, 'jordan-amman', 'amman', 'Visa'),
(11, 1, 'jordan-amman', 'amman', 'Visa'),
(12, 1, 'jordan-amman', 'amman', 'Visa'),
(13, 1, 'jordan-amman', 'amman', 'Visa'),
(14, 1, 'jordan-amman', 'amman', 'Visa'),
(15, 1, 'jordan-amman', 'amman', 'Visa'),
(16, 1, 'jordan-amman', 'amman', 'Visa'),
(17, 1, 'jordan-amman', 'amman', 'Visa'),
(18, 1, 'jordan-amman', 'amman', 'Visa'),
(19, 1, 'jordan-amman', 'amman', 'Visa'),
(20, 1, 'jordan-amman', 'amman', 'Visa'),
(21, 1, 'jordan-amman', 'amman', 'Visa'),
(22, 1, 'jordan-amman', 'amman', 'Visa'),
(23, 1, 'jordan-amman', 'amman', 'Visa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
