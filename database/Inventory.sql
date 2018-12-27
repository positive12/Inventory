-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 27, 2018 at 02:26 AM
-- Server version: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(12) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `server_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rack`
--

CREATE TABLE `rack` (
  `r_id` int(12) NOT NULL,
  `r_number` int(12) NOT NULL,
  `date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `server`
--

CREATE TABLE `server` (
  `id` int(12) NOT NULL,
  `s_number` varchar(25) DEFAULT NULL,
  `s_name` varchar(233) NOT NULL,
  `s_ipadd` varchar(252) NOT NULL,
  `s_username` varchar(211) NOT NULL,
  `s_password` varchar(213) NOT NULL,
  `s_category` varchar(121) NOT NULL,
  `s_status` varchar(122) NOT NULL,
  `s_ipadd1` varchar(234) DEFAULT NULL,
  `s_ipadd2` varchar(224) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pinnumber` varchar(213) DEFAULT NULL,
  `s_rack` varchar(23) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `servers`
--

CREATE TABLE `servers` (
  `id` int(23) NOT NULL,
  `server` varchar(233) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servers`
--

INSERT INTO `servers` (`id`, `server`, `date`) VALUES
(1, 'Server 1', '2018-12-27 10:22:30'),
(2, 'Server 2', '2018-12-27 10:22:49'),
(3, 'Server 3', '2018-12-27 10:23:58'),
(4, 'Server 4', '2018-12-27 10:24:06'),
(5, 'Server 5', '2018-12-27 10:24:16'),
(6, 'Server 6', '2018-12-27 10:24:25'),
(7, 'Server 7', '2018-12-27 10:24:33'),
(8, 'Server 8', '2018-12-27 10:24:42'),
(9, 'Server 9', '2018-12-27 10:24:50'),
(10, 'Server 10', '2018-12-27 10:24:59'),
(11, 'Server 11', '2018-12-27 10:25:09'),
(12, 'Server 12', '2018-12-27 10:25:15'),
(13, 'Server 13', '2018-12-27 10:25:24'),
(14, 'Server 14', '2018-12-27 10:25:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(12) NOT NULL,
  `username` varchar(233) NOT NULL,
  `password` varchar(211) NOT NULL,
  `type` int(123) NOT NULL,
  `email` varchar(213) NOT NULL,
  `con_passwords` varchar(121) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `type`, `email`, `con_passwords`, `date`) VALUES
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'admin@gmail.com', 'admin', '2018-12-15 05:28:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `rack`
--
ALTER TABLE `rack`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `server`
--
ALTER TABLE `server`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servers`
--
ALTER TABLE `servers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rack`
--
ALTER TABLE `rack`
  MODIFY `r_id` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `server`
--
ALTER TABLE `server`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `servers`
--
ALTER TABLE `servers`
  MODIFY `id` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
