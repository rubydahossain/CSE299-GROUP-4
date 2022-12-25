-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2022 at 07:45 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easy_pescribe`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_doctor`
--

CREATE TABLE `user_doctor` (
  `username` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `emailverified` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_doctor`
--

INSERT INTO `user_doctor` (`username`, `email`, `emailverified`, `password`, `date`) VALUES
('shishir', 'purnotawar@gmail.com', '', '0ffe1abd1a08215353c233d6e009613e95eec4253832a761af28ff37ac5a150c', '2022-12-24'),
('tomal12', 'tmc@gmail.com', '', '123456', '2022-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `user_patient`
--

CREATE TABLE `user_patient` (
  `username` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `emailverified` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_patient`
--

INSERT INTO `user_patient` (`username`, `email`, `emailverified`, `password`, `date`) VALUES
('shishir', 'purnotawar@gmail.com', '', '0ffe1abd1a08215353c233d6e009613e95eec4253832a761af28ff37ac5a150c', '2022-12-23'),
('toslima98', 'toslima@gmail.com', '', '10987', '2022-12-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_doctor`
--
ALTER TABLE `user_doctor`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `user_patient`
--
ALTER TABLE `user_patient`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
