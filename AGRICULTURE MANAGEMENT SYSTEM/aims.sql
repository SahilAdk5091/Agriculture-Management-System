-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2022 at 06:07 AM
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
-- Database: `aims`
--

-- --------------------------------------------------------

--
-- Table structure for table `cropdetails`
--

CREATE TABLE `cropdetails` (
  `id` int(255) NOT NULL,
  `Farmername` varchar(50) NOT NULL,
  `Production` int(255) NOT NULL,
  `Cropname` varchar(255) NOT NULL,
  `Farmerrate` int(50) NOT NULL,
  `Marketrate` int(255) NOT NULL,
  `Provience` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cropdetails`
--

INSERT INTO `cropdetails` (`id`, `Farmername`, `Production`, `Cropname`, `Farmerrate`, `Marketrate`, `Provience`) VALUES
(1, 'Sahil Adhikarii', 300, 'Wheat', 1500, 2000, 6),
(2, 'Bises Adhikari', 500, 'Wheat', 2000, 3000, 1),
(3, 'Ayam Karki', 400, 'Rice', 1500, 2500, 2),
(6, 'suberna', 3000, 'Soyabean', 6000, 7000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `provienceno` int(1) NOT NULL,
  `wardormuni` varchar(15) NOT NULL,
  `wardmunino` int(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `contactno`, `provienceno`, `wardormuni`, `wardmunino`, `email`, `password`) VALUES
(1, 'Sahil Adhikarii', '9807991363', 2, 'Ward', 6, 'sahiladk345@gmail.com', 'sahil12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cropdetails`
--
ALTER TABLE `cropdetails`
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
-- AUTO_INCREMENT for table `cropdetails`
--
ALTER TABLE `cropdetails`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
