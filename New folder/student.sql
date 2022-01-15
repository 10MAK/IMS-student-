-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2022 at 10:52 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(6) NOT NULL,
  `name` varchar(200) NOT NULL,
  `f_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `semester` varchar(200) NOT NULL,
  `contact_no` varchar(200) NOT NULL,
  `society` varchar(200) NOT NULL,
  `designation` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `f_name`, `email`, `department`, `semester`, `contact_no`, `society`, `designation`) VALUES
(1, 'Ahmad', 'ali', 'admin@gmail.com', 'deprtment', 'semester', '000000000', 'society', 'designation'),
(2, 'hamza Khan', 'dbasd', 'coursescomputer7@gmail.com', 'aaaa', '2', '0200220', '15', '4'),
(3, 'hamza Khan', 'dbasd', 'coursescomputer7@gmail.com', 'aaaa', '2', '0200220', '15', '4'),
(4, 'hamza Khan', 'dbasd', 'coursescomputer7@gmail.com', 'aaaa', '2', '0200220', '15', '4'),
(5, 'admin', 'test', 'test@gmail.com', 'aaaa', '9', '1111111', '13', '1'),
(6, 'asad khan', 'asghar khan', 'asad@gmail.com', 'BSSE', '3', '023992932402', 'Think Ink-Study', 'Vice President');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
