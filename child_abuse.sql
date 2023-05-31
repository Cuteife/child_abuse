-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2023 at 01:09 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `child_abuse`
--

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `abuse_type` varchar(30) NOT NULL,
  `what_happened` longtext NOT NULL,
  `person_involved` longtext NOT NULL,
  `Where _happen` longtext NOT NULL,
  `When_happen` longtext NOT NULL,
  `person_present` longtext NOT NULL,
  `told_anyone` longtext NOT NULL,
  `live_with` longtext NOT NULL,
  `living_situation` longtext NOT NULL,
  `additional_information` longtext NOT NULL,
  `Evidence` varchar(250) NOT NULL,
  `reported_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `name`, `phone`, `abuse_type`, `what_happened`, `person_involved`, `Where _happen`, `When_happen`, `person_present`, `told_anyone`, `live_with`, `living_situation`, `additional_information`, `Evidence`, `reported_at`) VALUES
(8, 'Ammar Musa', '9033248408', 'NEGLECT (BASIC NEEDS)', 'Evidence', 'Evidence', 'Evidence', 'Evidence', 'Evidence', 'Evidence', 'Evidence', 'Evidence', 'Evidence', '299-IMG_0007 2.JPG', '2023-05-31 21:56:41');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) DEFAULT NULL,
  `lname` varchar(40) NOT NULL,
  `address` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `age` varchar(40) NOT NULL,
  `dob` varchar(35) NOT NULL,
  `state` varchar(11) NOT NULL,
  `password` varchar(40) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `mname`, `lname`, `address`, `email`, `contact`, `gender`, `age`, `dob`, `state`, `password`, `created_at`) VALUES
(1, 'olaniyan', 'samson', 'olayimika', 'barnawa', 'oremmyluvr@gmail.com', '4532', 'male', '23', '2023-05-17', 'Kano', 'er', '2023-05-17 20:46:54'),
(2, 'Mary', 'Ola', 'Amarachi', 'Sabo gari', 'mary@gmail.com', '081765545433', 'Choose...', '14', '2000-05-03', 'kaduna', 'mary', '2023-05-25 22:36:53'),
(3, 'pat', 'mint', 'Amos', 'dambare', 'pat@gmail.com', '090676899090', 'Choose...', '16', '2001-05-03', 'abia', 'pat', '2023-05-25 22:44:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
