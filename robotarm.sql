-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 05:27 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `robotarm`
--

-- --------------------------------------------------------

--
-- Table structure for table `robotarm`
--

CREATE TABLE `robotarm` (
  `Id` int(1) NOT NULL,
  `Motor1` int(3) NOT NULL,
  `Motor2` int(3) NOT NULL,
  `Motor3` int(3) NOT NULL,
  `Motor4` int(3) NOT NULL,
  `Motor5` int(3) NOT NULL,
  `Motor6` int(3) NOT NULL,
  `Save_and_Run` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `robotarm`
--

INSERT INTO `robotarm` (`Id`, `Motor1`, `Motor2`, `Motor3`, `Motor4`, `Motor5`, `Motor6`, `Save_and_Run`) VALUES
(1, 92, 14, 149, 167, 140, 153, 'S'),
(2, 0, 0, 0, 0, 0, 0, 'S'),
(3, 25, 3, 5, 2, 11, 5, 'S'),
(4, 180, 118, 103, 119, 117, 116, 'S'),
(5, 28, 44, 179, 73, 95, 62, 'S'),
(6, 60, 69, 51, 0, 36, 0, 'S'),
(7, 126, 29, 16, 8, 80, 96, 'S');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `robotarm`
--
ALTER TABLE `robotarm`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `robotarm`
--
ALTER TABLE `robotarm`
  MODIFY `Id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
