-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2024 at 02:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esportsdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ID` int(255) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `quantity` int(180) NOT NULL,
  `size` varchar(255) NOT NULL,
  `initial_amount` int(180) NOT NULL,
  `product_pic` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`ID`, `Username`, `product_name`, `product_type`, `quantity`, `size`, `initial_amount`, `product_pic`) VALUES
(13, 'Radiuss', 'Valorant Pins', 'Clove_pixelated', 30, ' ', 35, ''),
(14, 'Radiuss', 'Kyusi Esports/ ID Lace', ' ', 432, ' ', 50, ''),
(15, 'test', 'Kyusi Esports/ Tote Bag', 'Adawong2', 4, ' ', 250, ''),
(16, 'test', 'Kyusi Esports/ Stickers', 'Omen', 4, ' ', 10, '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_name` varchar(255) NOT NULL,
  `quantity` int(180) NOT NULL,
  `size` varchar(255) NOT NULL,
  `initial_amount` int(180) NOT NULL,
  `product_pic` longblob NOT NULL,
  `product_details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) NOT NULL,
  `studentNumber` varchar(255) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `contactNumber` int(11) NOT NULL,
  `course` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `Username`, `firstName`, `middleName`, `lastName`, `studentNumber`, `dateOfBirth`, `address`, `contactNumber`, `course`, `section`, `email`, `password`) VALUES
(1, 'test', '123', '123123', '123123', '123123', '2024-11-13', '', 0, 'ASD', 'ASDSA', 'ASDAS@zasdfsad', '123123'),
(2, 'Terrestrial ', 'Gelba', '', 'Mesa', '121234', '2024-11-30', '', 0, 'ETG', 'JonasT', 'Terrestrial@Gelba', '123123'),
(3, 'Zam', 'Sam', 'Leonard', 'Barber', '241634', '2008-03-08', '', 0, 'IT', 'SBIT-1E', 'Barber.Sam.Leonard@gmail.com', 'jonasbalantetamayo'),
(4, 'Terrestrial1 ', 'Gelba', 'Leonard', 'Mesa', '123123', '2024-11-01', '', 0, 'ETG', 'ASDSA', 'Terrestrial@Gelba', '123123123'),
(6, 'Radiuss0041', 'Gelba', 'Leonard', '123123', '23-3322', '0000-00-00', '2002-C00LP1AC3', 2147483647, 'ETG', 'SBETG-1A', 'ASDAS@zasdfsad', 'HjQjMQCXCowhV6'),
(7, 'Mark palacious', 'mark', 'laurance', 'palacious', '24-1434', '2001-01-01', '2002-B1DP1AC3', 2147483647, 'IT', 'SBETG-1A', 'Extra@gma', 'qZ09Q5v6DMh7aG'),
(8, 'Zylus', 'Factorio', 'conisql', 'FAQ', '43-2341', '2005-02-01', '2002-C00LP1AC3', 2147483647, 'LET', '1T', 'dsadas@aaassss', 'B0r7bTGrzwMG4r');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `Username` varchar(25) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `quantity` int(180) NOT NULL,
  `size` int(180) NOT NULL,
  `initial_amount` int(180) NOT NULL,
  `payment_amount` int(180) NOT NULL,
  `gcash_number` int(180) NOT NULL,
  `status` varchar(25) NOT NULL,
  `ref_number` int(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
