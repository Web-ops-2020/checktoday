-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2018 at 11:20 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `getblood`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `ad_id` int(11) NOT NULL,
  `ad_name` varchar(50) NOT NULL,
  `ad_email` varchar(50) NOT NULL,
  `ad_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`ad_id`, `ad_name`, `ad_email`, `ad_password`) VALUES
(1, 'Mohammad Iftekhar Uddin Tanvir', 'iftekharuddintanvir@gmail.com', '6a4b9d0f78c1fde763e4dba6db454a02'),
(2, 'Shaibal Das', 'shaibal016@gmail.com', 'a1d862b246c36f8e2cfe87a84df6f422');

-- --------------------------------------------------------

--
-- Table structure for table `blood_inventory`
--

CREATE TABLE `blood_inventory` (
  `i_id` int(11) NOT NULL,
  `AB1` int(11) NOT NULL,
  `AB2` int(11) NOT NULL,
  `A1` int(11) NOT NULL,
  `A2` int(11) NOT NULL,
  `B1` int(11) NOT NULL,
  `B2` int(11) NOT NULL,
  `O1` int(11) NOT NULL,
  `O2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_inventory`
--

INSERT INTO `blood_inventory` (`i_id`, `AB1`, `AB2`, `A1`, `A2`, `B1`, `B2`, `O1`, `O2`) VALUES
(1, 33, 42, 50, 41, 70, 52, 23, 21);

-- --------------------------------------------------------

--
-- Table structure for table `doner_history`
--

CREATE TABLE `doner_history` (
  `doner_history_id` int(11) NOT NULL,
  `doner_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `donation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doner_history`
--

INSERT INTO `doner_history` (`doner_history_id`, `doner_id`, `qty`, `donation_date`) VALUES
(1, 4, 5, '2018-03-21 09:36:29'),
(2, 4, 2, '2018-03-21 09:36:41');

-- --------------------------------------------------------

--
-- Table structure for table `donor_info`
--

CREATE TABLE `donor_info` (
  `d_id` int(10) NOT NULL,
  `d_name` varchar(50) NOT NULL,
  `d_dob` date NOT NULL,
  `d_blood_grp` varchar(15) NOT NULL,
  `d_last_donation` date NOT NULL,
  `d_donation_history` int(11) NOT NULL,
  `d_district` varchar(50) NOT NULL,
  `d_phone` varchar(20) NOT NULL,
  `d_phone2` varchar(20) NOT NULL,
  `d_email` varchar(50) NOT NULL,
  `d_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor_info`
--

INSERT INTO `donor_info` (`d_id`, `d_name`, `d_dob`, `d_blood_grp`, `d_last_donation`, `d_donation_history`, `d_district`, `d_phone`, `d_phone2`, `d_email`, `d_password`) VALUES
(1, 'Shaibal Das', '1993-11-28', 'A(positive)', '2018-03-01', 7, 'Chittagong', '01675767211', 'N/A', 'shaibal016@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'abcd', '2018-03-01', 'O(negative)', '2018-03-01', 0, 'qwerty', '12345', 'N/A', 'abcd@getblood.com', 'e2fc714c4727ee9395f324cd2e7f331f'),
(4, 'Md. Shah Mokarrom Hossain', '1993-01-02', 'O(positive)', '2017-09-09', 2, 'Feni', '01675 085631', 'N/A', 'aristocratpolash@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'Mohammad Iftekhar Uddin Tanvir', '1994-12-07', 'O(positive)', '2018-03-01', 0, 'Chittagong', '01628663015', '01516117067', 'iftekharuddintanvir@gmail.com', '900150983cd24fb0d6963f7d28e17f72');

-- --------------------------------------------------------

--
-- Table structure for table `recipient_info`
--

CREATE TABLE `recipient_info` (
  `r_id` int(11) NOT NULL,
  `r_name` varchar(50) NOT NULL,
  `r_dob` date NOT NULL,
  `r_history` varchar(50) NOT NULL,
  `r_district` varchar(50) NOT NULL,
  `r_nid` varchar(50) NOT NULL,
  `r_phone` varchar(20) NOT NULL,
  `r_phone2` varchar(20) NOT NULL,
  `r_email` varchar(50) NOT NULL,
  `r_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipient_info`
--

INSERT INTO `recipient_info` (`r_id`, `r_name`, `r_dob`, `r_history`, `r_district`, `r_nid`, `r_phone`, `r_phone2`, `r_email`, `r_password`) VALUES
(1, 'Mohammad Iftekhar Uddin Tanvir', '1994-12-07', 'A (positive):1 bag, O(negative): 1 bag', 'Chittagong', '12345678901', '01628663015', '01516117067', 'iftekharuddintanvir@gmail.com', '900150983cd24fb0d6963f7d28e17f72'),
(2, 'Shaibal Das', '1993-11-28', '1 bag', 'Chittagong', '19931516167000045', ' 8801675767211', 'N/A', 'shaibal016@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'abcd', '2018-03-01', '2 bags', 'qwerty', '01234567890', '12345', 'N/A', 'abcd@getblood.com', 'e2fc714c4727ee9395f324cd2e7f331f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `blood_inventory`
--
ALTER TABLE `blood_inventory`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `doner_history`
--
ALTER TABLE `doner_history`
  ADD PRIMARY KEY (`doner_history_id`),
  ADD KEY `doner_id` (`doner_id`);

--
-- Indexes for table `donor_info`
--
ALTER TABLE `donor_info`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `recipient_info`
--
ALTER TABLE `recipient_info`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `blood_inventory`
--
ALTER TABLE `blood_inventory`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `doner_history`
--
ALTER TABLE `doner_history`
  MODIFY `doner_history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `donor_info`
--
ALTER TABLE `donor_info`
  MODIFY `d_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `recipient_info`
--
ALTER TABLE `recipient_info`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `doner_history`
--
ALTER TABLE `doner_history`
  ADD CONSTRAINT `doner_history_ibfk_1` FOREIGN KEY (`doner_id`) REFERENCES `donor_info` (`d_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
