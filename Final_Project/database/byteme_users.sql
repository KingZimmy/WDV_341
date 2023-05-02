-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2023 at 11:57 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wdv341`
--

-- --------------------------------------------------------

--
-- Table structure for table `byteme_users`
--

CREATE TABLE `byteme_users` (
  `byte_user_id` int(11) NOT NULL,
  `byte_username` varchar(100) NOT NULL,
  `byte_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `byteme_users`
--

INSERT INTO `byteme_users` (`byte_user_id`, `byte_username`, `byte_password`) VALUES
(1, 'wdv341', 'wdv341'),
(2, 'mmandernach', '321Password!?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `byteme_users`
--
ALTER TABLE `byteme_users`
  ADD PRIMARY KEY (`byte_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `byteme_users`
--
ALTER TABLE `byteme_users`
  MODIFY `byte_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
