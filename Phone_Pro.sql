-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 04, 2020 at 06:57 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Phone_Pro`
--
CREATE DATABASE IF NOT EXISTS `Phone_Pro` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `Phone_Pro`;

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

DROP TABLE IF EXISTS `Product`;
CREATE TABLE `Product` (
  `id_phone` int(100) NOT NULL,
  `Model` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Color` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Capacity` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Price` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Number` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Img` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`id_phone`, `Model`, `Color`, `Capacity`, `Price`, `Number`, `Img`) VALUES
(15, 'Iphone11 Pro Max', 'เขียว / Midnight Green', '256', '35000', '1', '8099.png'),
(16, 'Iphone11', 'ขาว / White', '128', '18000', '1', '8734.png'),
(17, 'Iphone X', 'ดำ / Black', '256', '18900', '1', '339.png'),
(18, 'Iphone11', 'แดง / Red', '128', '24000', '1', '1057.png'),
(19, 'Iphone11 Pro Max', 'ทอง / Gold', '256', '39000', '1', '206.png'),
(20, 'Iphone X', 'ขาว / White', '256', '29900', '2', '9528.png'),
(21, 'Iphone X', 'ขาว / White', '64', '28000', '1', '8336.png'),
(22, 'Iphone11 Pro Max', 'เขียว / Midnight Green', '128', '39900', '1', '17531.png'),
(23, 'Iphone11', 'ม่วง / purple', '128', '19900', '1', '7240.png'),
(24, 'Iphone11', 'ม่วง / purple', '128', '18000', '1', '28397.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`id_phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Product`
--
ALTER TABLE `Product`
  MODIFY `id_phone` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
