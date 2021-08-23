-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2021 at 05:14 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurent`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `CODE` int(11) NOT NULL,
  `Username` varchar(20) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`CODE`, `Username`, `Email`, `Password`) VALUES
(1, 'Thierry2000', 'niyogisubizojoy@gmail.com', '200500'),
(4, 'Muhire120', 'muhire@gmail.com', '8456a'),
(12, 'Thierry', 'thierry@gmail.com', '120');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Code` varchar(10) DEFAULT NULL,
  `Password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Code`, `Password`) VALUES
(5, 'admin001', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `CODE` int(11) NOT NULL,
  `Firstname` char(15) DEFAULT NULL,
  `Lastname` char(15) DEFAULT NULL,
  `Email` varchar(80) DEFAULT NULL,
  `Sex` char(6) DEFAULT NULL,
  `Password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`CODE`, `Firstname`, `Lastname`, `Email`, `Sex`, `Password`) VALUES
(6, 'Niyogisubizo', 'Thierry', 'niyogisubizo@gmail.com', 'Male', '200500');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `CODE` int(11) NOT NULL,
  `Firstname` char(30) DEFAULT NULL,
  `Lastname` char(30) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Telephone` varchar(12) DEFAULT NULL,
  `Province` char(20) DEFAULT NULL,
  `District` char(30) DEFAULT NULL,
  `Sector` char(30) DEFAULT NULL,
  `Cell` char(30) DEFAULT NULL,
  `Village` char(30) DEFAULT NULL,
  `Precised_location` char(30) DEFAULT NULL,
  `Command` text DEFAULT NULL,
  `Nationality` char(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`CODE`, `Firstname`, `Lastname`, `Email`, `Telephone`, `Province`, `District`, `Sector`, `Cell`, `Village`, `Precised_location`, `Command`, `Nationality`) VALUES
(2, 'ISHIMWE', 'Mugisha', 'ishimwe@gmail.com', '0787938344', 'southern', 'kamonyi', 'cyeza', 'shori', 'rusika', 'butare', 'name:pork\r\n quantity: 1kg\r\ncondition:hot', 'rwanda');

-- --------------------------------------------------------

--
-- Table structure for table `headquater`
--

CREATE TABLE `headquater` (
  `CODE` int(11) NOT NULL,
  `Firstname` char(30) DEFAULT NULL,
  `Lastname` char(30) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Phone_number` varchar(13) DEFAULT NULL,
  `Intended_date` varchar(20) DEFAULT NULL,
  `Participants` int(11) DEFAULT NULL,
  `Assigned_place` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `headquater`
--

INSERT INTO `headquater` (`CODE`, `Firstname`, `Lastname`, `Email`, `Phone_number`, `Intended_date`, `Participants`, `Assigned_place`) VALUES
(2, 'Niyogisubizo', 'Thierry', 'niyogisubizothierryjoy@gmail.com', '0786802046', '2021-08-26T16:47', 13, '3 Tables');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `CODE` int(11) NOT NULL,
  `Firstname` char(30) DEFAULT NULL,
  `Lastname` char(30) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `off_site`
--

CREATE TABLE `off_site` (
  `CODE` int(11) NOT NULL,
  `Firstname` char(30) DEFAULT NULL,
  `Lastname` char(30) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Phone_number` varchar(13) DEFAULT NULL,
  `Intended_Date` varchar(16) DEFAULT NULL,
  `City` char(15) DEFAULT NULL,
  `Street_Address` varchar(30) DEFAULT NULL,
  `Place_Tel` varchar(12) DEFAULT NULL,
  `House_number` varchar(5) DEFAULT NULL,
  `Scanned_pdf` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `off_site`
--

INSERT INTO `off_site` (`CODE`, `Firstname`, `Lastname`, `Email`, `Phone_number`, `Intended_Date`, `City`, `Street_Address`, `Place_Tel`, `House_number`, `Scanned_pdf`) VALUES
(16, 'Ishimwe', 'Thierry', 'niyogisubizothierry@gmail.com', '0786802046', '2021-09-11T15:38', 'Kigali', 'ST 203kk', '0782315566', 'H258', 0x6f66662e706466);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `CODE` int(11) NOT NULL,
  `Reported` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`CODE`, `Reported`) VALUES
(1, 'I think We need more Agents To Help At Huye');

-- --------------------------------------------------------

--
-- Table structure for table `restolist`
--

CREATE TABLE `restolist` (
  `CODE` int(11) NOT NULL,
  `Restaurent_Names` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restolist`
--

INSERT INTO `restolist` (`CODE`, `Restaurent_Names`) VALUES
(27, 'ISANGANO'),
(33, 'APPETITTO'),
(34, 'HAPPINESS'),
(35, 'UMUCYO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`CODE`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`CODE`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`CODE`);

--
-- Indexes for table `headquater`
--
ALTER TABLE `headquater`
  ADD PRIMARY KEY (`CODE`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`CODE`);

--
-- Indexes for table `off_site`
--
ALTER TABLE `off_site`
  ADD PRIMARY KEY (`CODE`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`CODE`);

--
-- Indexes for table `restolist`
--
ALTER TABLE `restolist`
  ADD PRIMARY KEY (`CODE`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `CODE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `CODE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `CODE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `headquater`
--
ALTER TABLE `headquater`
  MODIFY `CODE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `CODE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `off_site`
--
ALTER TABLE `off_site`
  MODIFY `CODE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `CODE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `restolist`
--
ALTER TABLE `restolist`
  MODIFY `CODE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`CODE`) REFERENCES `accounts` (`CODE`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
