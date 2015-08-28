-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 29, 2015 at 01:20 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoe_store_test`
--
CREATE DATABASE IF NOT EXISTS `shoe_store_test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `shoe_store_test`;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=214 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`) VALUES
(211, 'Gucci'),
(212, 'Gucci'),
(213, 'Prada');

-- --------------------------------------------------------

--
-- Table structure for table `brands_stores`
--

CREATE TABLE `brands_stores` (
  `id` bigint(20) unsigned NOT NULL,
  `store_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands_stores`
--

INSERT INTO `brands_stores` (`id`, `store_id`, `brand_id`) VALUES
(1, 175, 89),
(2, 186, 100),
(3, 187, 101),
(4, 187, 102),
(5, 188, 113),
(6, 189, 124),
(7, 190, 135),
(8, 201, 136),
(9, 202, 137),
(10, 202, 138),
(11, 203, 149),
(12, 204, 150),
(13, 205, 150),
(14, 216, 151),
(15, 217, 152),
(16, 217, 153),
(17, 218, 164),
(18, 219, 165),
(19, 220, 165),
(20, 231, 166),
(21, 232, 167),
(22, 232, 168),
(23, 233, 179),
(24, 234, 180),
(25, 235, 180),
(26, 246, 181),
(27, 247, 182),
(28, 247, 183),
(29, 248, 194),
(30, 249, 195),
(31, 250, 195),
(32, 261, 196),
(33, 262, 197),
(34, 262, 198),
(35, 263, 209),
(36, 264, 210),
(37, 265, 210),
(38, 276, 211),
(39, 277, 212),
(40, 277, 213);

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=278 DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `brands_stores`
--
ALTER TABLE `brands_stores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=214;
--
-- AUTO_INCREMENT for table `brands_stores`
--
ALTER TABLE `brands_stores`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=278;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
