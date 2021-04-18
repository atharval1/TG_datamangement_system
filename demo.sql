-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2020 at 09:55 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(2, 'Atharva', 'ath@gmail.com', 'nice'),
(3, 'sopan', 'sopan@gmail.com', 'how to send message'),
(4, 'Atharva', 'ath@gmail.com', 'okk'),
(5, 'tejas', 'nice@gmail.com', 'nice'),
(6, 'sopan', 'sopan@gmail.com', 'i just want to change mother name then what can i do now');

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'head', '$2y$10$Ky2kZMP895PljQmNUF1u.OvzOa2wjJ5GT8CmU7yfAgD7KVPEvLqCu', '2020-09-17 11:54:03');

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `id` int(255) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `roll` int(10) DEFAULT NULL,
  `class` varchar(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `father` varchar(255) DEFAULT NULL,
  `mother` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`id`, `username`, `image`, `email`, `mobile`, `roll`, `class`, `dob`, `father`, `mother`, `address`) VALUES
(1, 'Atharva', 'upload/default.png', 'atharvalabhasetwar@gmail.com', '7517817908', 16, 'TE COMP', '2001-12-05', 'santosh', 'Anusaya', 'pune'),
(3, 'tejas', 'upload/Screenshot (1).png', 'tej@gmail.com', '7851445414', 10, 'comp', '2000-01-01', 'teju', 'tejswini', 'pune'),
(5, 'sopan', 'upload/default.png', 'sopan@gmail.com', '87748748', 78, 'comp', '2001-01-01', 'sop', 'pos', 'pune'),
(17, 'gaesha', 'upload/default.png', 'shreeganesha@gmail.com', '10101', 1, 'comp', '2000-01-01', 'namo namo', 'parvati', 'pune'),
(21, 'Admin', 'upload/Screenshot (7).png', 'admin@gmail.com', '91919191', 1, 'comp', '2001-01-01', 'admin1', 'admin2', 'adminpur'),
(23, 'atharva', 'upload/default.png', 'admin@gmail.com', '7', 1, 'com', '2001-01-01', 's', 'a', 'pune'),
(24, 'Admin', 'upload/Screenshot (7).png', 'atharva@gmail.com', '741', 1, 'comp', '2001-01-01', 'admin1', 'admin2', 'pune'),
(25, 'Atharva', 'upload/Screenshot (7).png', 'ath@gmail.com', '751781', 1, 'comp', '2001-01-01', 'admin1', 'admin2', 'pune'),
(26, 'sopan', 'upload/Screenshot (1).png', 'sopan@gmail.com', '5454894551', 33, 'comp', '2000-12-11', 'uttamrao', 'shilpa', 'pune');

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE `mark` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `dbms` int(20) DEFAULT NULL,
  `isee` int(20) DEFAULT NULL,
  `cn` int(20) DEFAULT NULL,
  `sepm` int(20) DEFAULT NULL,
  `toc` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`id`, `name`, `dbms`, `isee`, `cn`, `sepm`, `toc`) VALUES
(7, 'Atharva', 100, 100, 100, 100, 100),
(8, 'sopan', 1, 2, 3, 4, 5),
(9, 'tejas', 4, 5, 6, 7, 8);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'Admin', '$2y$10$JXdnry0avaVDoUMJ7hLypeCU2D7XFeIHmJEtGEcy2/39azq3.Tr22', '2020-09-17 11:48:04'),
(2, 'Admin1', '$2y$10$QRMpvBvyUZ1s2oLRZhiISeHeteS2OrdyCB/PBDWPhm82qvhU7K5I2', '2020-09-17 11:51:09'),
(3, 'admin3', '$2y$10$7HnX9VodFOBFnmr2bxCz1Oh3afsge6hHHFx77FDbOcAEe5nwNlqMi', '2020-09-27 11:37:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'atharva1', '$2y$10$UCV2YAYTejYjeaqW/.Z34uFSVB6Ebjb63KeqXzQDhTKpiKUJUpSBi', '2020-09-17 10:29:03'),
(2, 'tejas', '$2y$10$YiYSjrWqOY2nUOze0kQ2yOltxB/aUx9PH53bCBXCb62OkllOxclC.', '2020-09-23 09:22:01'),
(3, 'Atharva', '$2y$10$iXxKvYgQwiSYaYCBe3Y5i.94yAVpCQTEOLv1CgMkT.6DOYnXJkQ6W', '2020-09-24 13:34:12'),
(4, 'sopan', '$2y$10$oPwfJ5WJF5E6j7JVRi65deJ5AsDhYCogsHM5vHtm3CrQ1ow7bQUjO', '2020-09-27 11:32:28'),
(5, 'gaurav', '$2y$10$LI52XTKwwybvyQWRLgNd4.w8aJD33RmTI5qkiiVHdCq9ANLVeOkhS', '2020-09-28 18:22:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mark`
--
ALTER TABLE `mark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hod`
--
ALTER TABLE `hod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `mark`
--
ALTER TABLE `mark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
