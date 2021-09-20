-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2021 at 07:23 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manabank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cid` int(11) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `cmail` varchar(30) NOT NULL,
  `abalance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `mail`, `balance`) VALUES
(1, 'Ranjan Sharma', 'ranjansharma255@gmail.com', 6150),
(2, 'Varshith', 'varshith1819@gmail.com', 17456),
(3, 'Rajesh Kumar', 'rajeshkumar435@gmail.com', 8290),
(4, 'Sai Prasad', 'saiprasad1234@gmail.com', 1220),
(5, 'Chandan Sharma', 'chandansharma2424@gmail.com', 5339),
(6, 'Rajiv Kumar', 'rajivkumar@gmail.com', 5557.2),
(7, 'Rakesh Singh', 'rakeshsingh@gmail.com', 4500),
(8, 'Swagger Sharma', 'swaggersharma@gmail.com', 3590),
(9, 'Ashish Kumar', 'ashishkumar@gmail.com', 8400),
(10, 'Rohit Reddy', 'rohitreddy@gmail.com', 2079);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` varchar(30) NOT NULL,
  `receiver` varchar(30) NOT NULL,
  `amount` double NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `amount`, `datetime`) VALUES
(1, 'Rajiv Kumar', 'Ranjan Sharma', 25, '2021-07-05 10:39:11'),
(2, 'Rohit Reddy', 'Ranjan Sharma', 20, '2021-07-05 10:42:15'),
(3, 'Rohit Reddy', 'Rajesh Kumar', 20, '2021-07-05 10:43:02'),
(4, 'Rohit Reddy', 'Rajesh Kumar', 20, '2021-07-05 10:43:19'),
(5, 'Ranjan Sharma', 'Varshith', 10, '2021-07-05 10:43:37'),
(6, 'Swagger Sharma', 'Varshith', 10, '2021-07-05 10:48:14'),
(7, 'Sai Prasad', 'Ranjan Sharma', 30, '2021-07-05 10:49:26'),
(8, 'Ashish Kumar', 'Sai Prasad', 50, '2021-07-05 10:51:02'),
(9, 'Rohit Reddy', 'Varshith', 2424, '2021-07-05 10:52:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;