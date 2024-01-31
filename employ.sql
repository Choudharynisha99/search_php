-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2024 at 07:01 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employ`
--

-- --------------------------------------------------------

--
-- Table structure for table `employ_table`
--

CREATE TABLE `employ_table` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `salery` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employ_table`
--

INSERT INTO `employ_table` (`id`, `name`, `email`, `salery`, `city`, `department`) VALUES
(1, 'nitesh', 'ng@gmail.com', '20000', 'delhi', 'developer'),
(2, 'nitin', 'nitin@gmail.com', '30000', 'saket', 'surgeon'),
(3, 'aniket', 'aniket@gmail.com', '40000', 'haryana', 'developer'),
(4, 'ansh', 'ansh12@gmail.com', '50000', 'delhi', 'ortho'),
(5, 'rohit', 'rohit21@gmail.com', '60000', 'patna', 'developer'),
(6, 'rahul', 'rahul112@gmail.com', '70000', 'bihar', 'staff'),
(7, 'shivansh', 'shivansh@gmail.com', '80000', 'rohini', 'developer'),
(8, 'shivam', 'shivam@gmail.com', '90000', 'noida', 'cardio'),
(9, 'charu', 'charu@gmail.com', '100000', 'noida', 'icu'),
(10, 'chawala', 'chawala@gmail.com', '110000', 'bihar', 'eye');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employ_table`
--
ALTER TABLE `employ_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employ_table`
--
ALTER TABLE `employ_table`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
