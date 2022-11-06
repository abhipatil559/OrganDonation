-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2022 at 01:26 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `organdonation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `A_id` varchar(20) NOT NULL,
  `A_name` varchar(20) DEFAULT NULL,
  `A_email` varchar(30) DEFAULT NULL,
  `A_pass` varchar(20) DEFAULT NULL,
  `A_mobile` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`A_id`, `A_name`, `A_email`, `A_pass`, `A_mobile`) VALUES
('A101', 'swaroop', 'swaroop1008@gmail.com', 'show1008', '987654323');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `D_id` varchar(20) NOT NULL,
  `D_name` varchar(20) DEFAULT NULL,
  `D_bloodgroup` varchar(5) DEFAULT NULL,
  `D_age` int(11) DEFAULT NULL,
  `D_gender` varchar(5) DEFAULT NULL,
  `Disease` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`D_id`, `D_name`, `D_bloodgroup`, `D_age`, `D_gender`, `Disease`) VALUES
('D21001', 'Abhishek Patil', 'AB+', 21, 'male', 'No'),
('D21002', 'Shreaya', 'A+', 21, 'Femal', 'No'),
('D21003', 'Rohit', 'o+ve', 34, 'Male', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `H_id` varchar(20) NOT NULL,
  `H_name` varchar(20) DEFAULT NULL,
  `H_address` varchar(30) DEFAULT NULL,
  `H_phone` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`H_id`, `H_name`, `H_address`, `H_phone`) VALUES
('H-102', 'Apple', 'kolhapur', '1234567891');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('abhishek', 'asp559');

-- --------------------------------------------------------

--
-- Table structure for table `orderby`
--

CREATE TABLE `orderby` (
  `ID` varchar(20) NOT NULL,
  `H_id` varchar(20) DEFAULT NULL,
  `Name` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `organ`
--

CREATE TABLE `organ` (
  `ID` varchar(10) NOT NULL,
  `D_id` varchar(20) DEFAULT NULL,
  `Name` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organ`
--

INSERT INTO `organ` (`ID`, `D_id`, `Name`) VALUES
('O101', 'D21001', 'Liver');

-- --------------------------------------------------------

--
-- Table structure for table `receiver`
--

CREATE TABLE `receiver` (
  `R_id` varchar(20) NOT NULL,
  `R_name` varchar(20) DEFAULT NULL,
  `R_bloodgroup` varchar(5) DEFAULT NULL,
  `R_age` int(11) DEFAULT NULL,
  `R_gender` varchar(5) DEFAULT NULL,
  `Disease` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receiver`
--

INSERT INTO `receiver` (`R_id`, `R_name`, `R_bloodgroup`, `R_age`, `R_gender`, `Disease`) VALUES
('R21001', 'Akanksha Topage', 'A+', 21, 'Femal', 'No'),
('R21002', 'Abhishek', 'o+ve', 34, 'male', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `requestorgan`
--

CREATE TABLE `requestorgan` (
  `ID` varchar(20) NOT NULL,
  `R_id` varchar(10) DEFAULT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requestorgan`
--

INSERT INTO `requestorgan` (`ID`, `R_id`, `Name`) VALUES
('O102', 'R21001', 'kidney'),
('O105', 'R21002', 'Abhishek');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `number` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `addr` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `name`, `number`, `email`, `dob`, `addr`) VALUES
(3, 'swaroop', '468233', 'swaroopsajane11@gmail.com', '2021-12-15', 'flat no.302,omkar re'),
(9, 'Akanksha Topage', '9307629600', 'atopage1411@gmail.com', '2001-11-14', 'kolhapur.'),
(15, 'unknown', '9547521', 'unknown@gmail.com', '2022-09-14', 'koparde'),
(16, 'Ninad', '98451235', 'ninad@gmail.com', '2022-09-14', 'Kolhapur'),
(17, 'Abhishek Patil asp', '09168310559', 'patilhari022@gmail.com', '2022-10-26', 'A.p. kuditre factory');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`A_id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`D_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`H_id`);

--
-- Indexes for table `orderby`
--
ALTER TABLE `orderby`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `H_id` (`H_id`);

--
-- Indexes for table `organ`
--
ALTER TABLE `organ`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `D_id` (`D_id`);

--
-- Indexes for table `receiver`
--
ALTER TABLE `receiver`
  ADD PRIMARY KEY (`R_id`);

--
-- Indexes for table `requestorgan`
--
ALTER TABLE `requestorgan`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `R_id` (`R_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderby`
--
ALTER TABLE `orderby`
  ADD CONSTRAINT `orderby_ibfk_1` FOREIGN KEY (`H_id`) REFERENCES `hospital` (`H_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `organ`
--
ALTER TABLE `organ`
  ADD CONSTRAINT `organ_ibfk_1` FOREIGN KEY (`D_id`) REFERENCES `donor` (`D_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `requestorgan`
--
ALTER TABLE `requestorgan`
  ADD CONSTRAINT `requestorgan_ibfk_1` FOREIGN KEY (`R_id`) REFERENCES `receiver` (`R_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
