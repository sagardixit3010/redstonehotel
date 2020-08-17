-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2020 at 12:40 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `redstonepro`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`userid`, `firstname`, `lastname`, `email`, `subject`, `message`) VALUES
(4, ' Sanju', 'Kumar', 'sanju.kumar@gmail.cm', 'I ansans sfaskfhkashkfhash', 'asdfasdfasfafaf'),
(5, ' Sanju', 'Kumar', 'sanju.kumar@gmail.cm', 'I ansans sfaskfhkashkfhash', 'asdfasdfasfafaf'),
(6, ' Sanju', 'Kumar', 'sanju.kumar@gmail.cm', 'I ansans sfaskfhkashkfhash', 'asdfasdfasfafaf'),
(7, ' Sanju', 'Kumar', 'sanju.kumar@gmail.cm', 'I ansans sfaskfhkashkfhash', 'asdfasdfasfafaf'),
(8, ' Manish', 'H', 'manish.h@gmail.com', 'I want to talk to developer', 'I would love to contact to the developer as i am facing isssue!');

-- --------------------------------------------------------

--
-- Table structure for table `customer_review`
--

CREATE TABLE `customer_review` (
  `userid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `find_us` varchar(40) NOT NULL,
  `drop_message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_review`
--

INSERT INTO `customer_review` (`userid`, `name`, `email`, `find_us`, `drop_message`) VALUES
(1, 'Atul Kumar', 'atul.kumar@gmail.com', 'search', 'I love to use redstone!!!'),
(2, 'Manoj', 'manoj123@gmail.com', 'other', 'Redstone provided us the best services!'),
(8, 'Virat Kholi', 'virat312@gmail.com', 'ad', 'Redstone is the best hotel managment site i have ever used!'),
(10, 'Sagar Dixit', 'sagar.dixit.3010@gmail.com', 'search', 'safas'),
(11, 'Manish', 'manish@gmail.com', 'ad', 'I love redstone site it is the best site I have ever used !');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `username`, `password`) VALUES
(3, 'max3010', 'sagardixit'),
(4, 'manish h', 'manish');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `card_number` varchar(16) NOT NULL,
  `card_exp_date` varchar(30) NOT NULL,
  `card_cvv` varchar(30) NOT NULL,
  `holder_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `card_number`, `card_exp_date`, `card_cvv`, `holder_name`) VALUES
(21, '1231', '12/12/12', '123', 'Sagar Dixit'),
(22, '1244 12313 1231', '12/10/12', '321', 'Sagar Dixit');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `userid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass1` varchar(30) NOT NULL,
  `pass2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`userid`, `username`, `email`, `pass1`, `pass2`) VALUES
(1, 'sagar', 'sagar.dixit.3010@gmail.com', 'sagar123', 'sagar123'),
(2, 'sagar', 'sagar.dixit.3010@gmail.com', 'sagar123', 'sagar123'),
(3, 'max3010', 'max3010@gmail.com', 'sagardixit', 'sagardixit'),
(4, 'max3010', 'max3010@gmail.com', 'sagardixit', 'sagardixit'),
(5, 'manish h', 'manish@gmail.com', 'manish', 'manish');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `customer_review`
--
ALTER TABLE `customer_review`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer_review`
--
ALTER TABLE `customer_review`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
