-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2020 at 01:02 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resortproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `userid` int(11) NOT NULL,
  `roomid` int(11) NOT NULL,
  `datearrive` date NOT NULL,
  `dateleave` date NOT NULL,
  `duration` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nofication`
--

CREATE TABLE `nofication` (
  `nofiid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `roomid` int(11) NOT NULL,
  `roomame` varchar(200) NOT NULL,
  `mainimage` blob DEFAULT NULL,
  `roomtypeid` varchar(50) NOT NULL,
  `roomprice` int(11) NOT NULL,
  `roomquanlity` int(11) NOT NULL,
  `roomrate` int(11) NOT NULL,
  `discription` varchar(2000) NOT NULL,
  `allowpet` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `roomimage`
--

CREATE TABLE `roomimage` (
  `roomid` int(11) NOT NULL,
  `image1` blob DEFAULT NULL,
  `image2` blob DEFAULT NULL,
  `image3` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `roomtype`
--

CREATE TABLE `roomtype` (
  `roomtypeid` varchar(50) NOT NULL,
  `roomtypename` varchar(200) NOT NULL,
  `roomtypequanlity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `loginname` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `vkey` varchar(1000) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `confirm` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `fullname`, `loginname`, `password`, `email`, `gender`, `phonenumber`, `vkey`, `address`, `confirm`) VALUES
(51, 'Ngô Hữu Văn', 'huuvan', '123qwe@', 'hvan.cuteo.023@gmail.com', 'Nam', '0372746758', '0d33e695dae81e72536af90c9db920c7', 'TG', b'1'),
(999, 'admin', 'admin', '1', 'admin', 'admin', 'admin', '1', 'admin', b'1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD KEY `userid` (`userid`),
  ADD KEY `roomid` (`roomid`);

--
-- Indexes for table `nofication`
--
ALTER TABLE `nofication`
  ADD PRIMARY KEY (`nofiid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`roomid`),
  ADD KEY `roomtypeid` (`roomtypeid`);

--
-- Indexes for table `roomimage`
--
ALTER TABLE `roomimage`
  ADD KEY `roomid` (`roomid`);

--
-- Indexes for table `roomtype`
--
ALTER TABLE `roomtype`
  ADD PRIMARY KEY (`roomtypeid`);

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
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`roomid`) REFERENCES `room` (`roomid`);

--
-- Constraints for table `nofication`
--
ALTER TABLE `nofication`
  ADD CONSTRAINT `nofication_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`roomtypeid`) REFERENCES `roomtype` (`roomtypeid`);

--
-- Constraints for table `roomimage`
--
ALTER TABLE `roomimage`
  ADD CONSTRAINT `roomimage_ibfk_1` FOREIGN KEY (`roomid`) REFERENCES `room` (`roomid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
