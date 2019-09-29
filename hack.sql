-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2019 at 04:32 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hack`
--

-- --------------------------------------------------------

--
-- Table structure for table `citytable`
--

CREATE TABLE `citytable` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hometown` varchar(255) NOT NULL,
  `currentcity` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `citytable`
--

INSERT INTO `citytable` (`id`, `email`, `password`, `hometown`, `currentcity`, `gender`) VALUES
(1, '2512bhagatamit@gmail.com', 'amitkumar', 'Kochi', 'Kochi', 'male'),
(2, 'ravijyoti3@gmail.com', '1234', 'Patna', 'Kochi', 'male'),
(3, 'kumaramit@l', 'kumar', 'Delhi', 'Patna', ''),
(4, 'amit2@g', 'amit', 'Delhi', 'Patna', 'male'),
(5, 'kumar@2', 'kumar', 'Delhi', 'Patna', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE `feed` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `thumb` text NOT NULL,
  `currentcity` varchar(255) NOT NULL,
  `hometown` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`id`, `description`, `thumb`, `currentcity`, `hometown`, `email`) VALUES
(93, 'bhagat', 'uploadpractice.jpg', 'bilaspur', '', ''),
(94, 'amit', 'uploadp4.jpg', 'bilaspur', '', ''),
(95, 'amit', 'uploadp4.jpg', 'bilaspur', '', ''),
(96, 'amit', 'uploadp4.jpg', 'bilaspur', '', ''),
(97, 'amit', 'uploadp4.jpg', 'bilaspur', '', ''),
(98, 'amit', 'uploadp4.jpg', 'bilaspur', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `citytable`
--
ALTER TABLE `citytable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feed`
--
ALTER TABLE `feed`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `citytable`
--
ALTER TABLE `citytable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feed`
--
ALTER TABLE `feed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
