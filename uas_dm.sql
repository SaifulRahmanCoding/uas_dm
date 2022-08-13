-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2022 at 10:39 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_dm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_testing`
--

CREATE TABLE `tb_testing` (
  `id` int(5) NOT NULL,
  `outlook` set('sunny','cloudy','rainy') NOT NULL,
  `temperature` set('cool','mild','hot') NOT NULL,
  `humidity` set('low','normal','high') NOT NULL,
  `windy` enum('FALSE','TRUE') DEFAULT NULL,
  `play` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_testing`
--

INSERT INTO `tb_testing` (`id`, `outlook`, `temperature`, `humidity`, `windy`, `play`) VALUES
(1, 'sunny', 'hot', 'high', 'FALSE', 'no'),
(2, 'rainy', 'mild', 'high', 'FALSE', 'yes'),
(3, 'cloudy', 'cool', 'normal', 'TRUE', 'yes'),
(4, 'sunny', 'mild', 'high', 'FALSE', 'no'),
(5, 'cloudy', 'mild', 'high', 'TRUE', 'yes'),
(6, 'rainy', 'mild', 'high', 'TRUE', 'no'),
(7, 'sunny', 'cool', 'normal', 'FALSE', 'yes'),
(8, 'rainy', 'cool', 'normal', 'TRUE', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `tb_training`
--

CREATE TABLE `tb_training` (
  `id` int(5) NOT NULL,
  `outlook` set('sunny','cloudy','rainy') NOT NULL,
  `temperature` set('cool','mild','hot') NOT NULL,
  `humidity` set('low','normal','high') NOT NULL,
  `windy` enum('FALSE','TRUE') NOT NULL,
  `play` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_training`
--

INSERT INTO `tb_training` (`id`, `outlook`, `temperature`, `humidity`, `windy`, `play`) VALUES
(1, 'sunny', 'hot', 'high', 'FALSE', 'no'),
(2, 'sunny', 'hot', 'high', 'TRUE', 'no'),
(3, 'cloudy', 'hot', 'high', 'FALSE', 'yes'),
(4, 'rainy', 'mild', 'high', 'FALSE', 'yes'),
(5, 'rainy', 'cool', 'normal', 'FALSE', 'yes'),
(6, 'rainy', 'cool', 'normal', 'TRUE', 'no'),
(7, 'cloudy', 'cool', 'normal', 'TRUE', 'yes'),
(8, 'sunny', 'mild', 'high', 'FALSE', 'no'),
(9, 'sunny', 'cool', 'normal', 'FALSE', 'yes'),
(10, 'rainy', 'mild', 'normal', 'FALSE', 'yes'),
(11, 'sunny', 'mild', 'normal', 'TRUE', 'yes'),
(12, 'cloudy', 'mild', 'high', 'TRUE', 'yes'),
(13, 'cloudy', 'hot', 'normal', 'FALSE', 'yes'),
(14, 'rainy', 'mild', 'high', 'TRUE', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_testing`
--
ALTER TABLE `tb_testing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_training`
--
ALTER TABLE `tb_training`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_testing`
--
ALTER TABLE `tb_testing`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_training`
--
ALTER TABLE `tb_training`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
