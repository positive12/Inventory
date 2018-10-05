-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 05, 2018 at 11:18 PM
-- Server version: 5.7.23-0ubuntu0.18.04.1
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
  `s_id` int(12) NOT NULL,
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

--
-- Dumping data for table `server`
--

INSERT INTO `server` (`s_id`, `s_number`, `s_name`, `s_ipadd`, `s_username`, `s_password`, `s_category`, `s_status`, `s_ipadd1`, `s_ipadd2`, `date`, `pinnumber`, `s_rack`) VALUES
(12, 'Server 16', 'RDCC Database Server', '10.10.1.2', 'It-admin', '12345678', 'RDCC', 'Active', NULL, NULL, '2018-10-04 16:26:48', '', NULL),
(13, 'Server 16', 'RDCC Server /SSH/VM', '10.10.1.2', 'it-admin', '12345678', 'RDCC', 'Active', NULL, NULL, '2018-10-04 16:36:57', NULL, NULL),
(14, 'dsadsa', 'RDCC Server /SSH/VMsss', '10.10.1.2', 'it-admin', '12345678', 'RDCC', 'Active', NULL, NULL, '2018-10-04 16:39:52', 'Cd2035', NULL),
(15, 'Server 16', 'RDCC Server /SSH/VM', '10.4.0.2', 'it-admin', '12345678', 'RDCC', 'Active', NULL, NULL, '2018-10-04 16:41:53', '223409', 'Rack 2');

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
(1, 'dsadsa', '2018-10-03 16:08:50'),
(2, 'sada', '2018-10-03 16:12:48'),
(3, 'sada', '2018-10-03 16:13:56'),
(4, 'Server 16', '2018-10-04 15:58:00');

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
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'edison@g.com', 'admin', '2018-09-22 20:56:05');

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
  ADD PRIMARY KEY (`s_id`);

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
  MODIFY `s_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `servers`
--
ALTER TABLE `servers`
  MODIFY `id` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
