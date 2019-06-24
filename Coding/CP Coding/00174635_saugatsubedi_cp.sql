-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2019 at 11:02 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `00174635_saugatsubedi_cp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `a_id` int(11) NOT NULL,
  `a_username` varchar(50) NOT NULL,
  `a_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`a_id`, `a_username`, `a_password`) VALUES
(1, 'admin', 'admin'),
(2, 'saujanya', 'saugat');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `e_id` int(11) NOT NULL,
  `e_title` varchar(255) NOT NULL,
  `e_start_date` date NOT NULL,
  `e_date` date NOT NULL,
  `e_venue` varchar(255) NOT NULL,
  `e_description` text NOT NULL,
  `e_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`e_id`, `e_title`, `e_start_date`, `e_date`, `e_venue`, `e_description`, `e_image`) VALUES
(1, '14th Swimming Inter Competition', '2019-06-23', '2019-06-26', 'Nakhu Laliptur', 'Swimming pool test!', '76300580.jpg'),
(2, '14th Swimming Inter Competition', '2019-06-20', '2019-06-26', 'Nakhu Laliptur', 'Swimming Competition', '41279037.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register_user`
--

CREATE TABLE `tbl_register_user` (
  `u_id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `member_type` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `address` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` enum('Male','Female','Other','') NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_register_user`
--

INSERT INTO `tbl_register_user` (`u_id`, `f_name`, `email`, `contact`, `member_type`, `message`, `address`, `dob`, `gender`, `password`, `confirm_password`) VALUES
(1, 'Saugat Subedi', 'saugat@gmail.com', '9843324022', 'Swimming', 'I love swimming', 'Mahalaxmisthan', '1998-04-01', 'Male', 'saugat123', 'saugat123'),
(2, 'Devish', 'devish@gmail.com', '9843324021', 'Jumba', 'I love Jumba', 'Subarnapur', '2019-06-10', 'Male', 'devish123', 'devish123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sports_facilities`
--

CREATE TABLE `tbl_sports_facilities` (
  `sf_id` int(11) NOT NULL,
  `sf_type` varchar(255) NOT NULL,
  `sf_description` varchar(255) NOT NULL,
  `sf_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sports_facilities`
--

INSERT INTO `tbl_sports_facilities` (`sf_id`, `sf_type`, `sf_description`, `sf_image`) VALUES
(1, 'Badminton', 'Badminton', '20703005.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trainning`
--

CREATE TABLE `tbl_trainning` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(255) NOT NULL,
  `t_date` date NOT NULL,
  `t_venue` varchar(255) NOT NULL,
  `t_description` text NOT NULL,
  `t_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_trainning`
--

INSERT INTO `tbl_trainning` (`t_id`, `t_name`, `t_date`, `t_venue`, `t_description`, `t_image`) VALUES
(1, 'Swimming Training', '2019-06-26', 'Nakhu', 'Swimming Training', '7120721.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `tbl_register_user`
--
ALTER TABLE `tbl_register_user`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_sports_facilities`
--
ALTER TABLE `tbl_sports_facilities`
  ADD PRIMARY KEY (`sf_id`);

--
-- Indexes for table `tbl_trainning`
--
ALTER TABLE `tbl_trainning`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_register_user`
--
ALTER TABLE `tbl_register_user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_sports_facilities`
--
ALTER TABLE `tbl_sports_facilities`
  MODIFY `sf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_trainning`
--
ALTER TABLE `tbl_trainning`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
