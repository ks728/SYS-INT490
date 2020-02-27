-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 23, 2019 at 05:42 AM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `tic_tac`
--

-- --------------------------------------------------------

--
-- Table structure for table `game_data`
--

CREATE TABLE `game_data` (
  `ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `game_data`
--

INSERT INTO `game_data` (`ID`, `USER_ID`, `Status`, `Timestamp`) VALUES
(1, 3, 'win', '2019-11-22 14:40:40'),
(2, 3, 'win', '2019-11-22 14:42:01'),
(3, 3, 'win', '2019-11-22 14:42:13'),
(4, 3, 'draw', '2019-11-22 14:45:05'),
(5, 3, 'win', '2019-11-22 14:47:01'),
(6, 3, 'win', '2019-11-22 14:47:51'),
(7, 3, 'win', '2019-11-22 14:48:30'),
(8, 3, 'win', '2019-11-22 14:49:27'),
(9, 3, 'draw', '2019-11-22 14:51:57'),
(10, 3, 'win', '2019-11-22 14:52:03'),
(11, 3, 'draw', '2019-11-22 14:52:10'),
(12, 3, 'draw', '2019-11-22 14:52:52'),
(13, 3, 'win', '2019-11-22 14:52:59'),
(14, 3, 'win', '2019-11-22 14:53:02'),
(15, 3, 'win', '2019-11-22 14:53:06'),
(16, 3, 'draw', '2019-11-22 14:53:12'),
(17, 3, 'lost', '2019-11-22 14:53:15'),
(18, 3, 'lost', '2019-11-22 15:14:03'),
(19, 3, 'draw', '2019-11-22 15:14:09'),
(20, 3, 'draw', '2019-11-22 15:28:05'),
(21, 3, 'draw', '2019-11-22 16:07:49'),
(22, 3, 'lost', '2019-11-22 16:12:23'),
(23, 4, 'win', '2019-11-23 05:36:26'),
(24, 4, 'win', '2019-11-23 05:36:35'),
(25, 4, 'lost', '2019-11-23 05:36:43');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `ID` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`ID`, `full_name`, `username`, `email`, `password`, `created_at`) VALUES
(3, 'Arindam Pr', 'arin', 'Arindam', '$2y$10$l2AhoAALrKQCzPf0w7hto.o.QHlsCIcqWIP2wRfU0UcB5.j0g.442', '2019-11-22 15:24:35'),
(4, 'Arin pr', 'arinpr', 'Arin pr', '$2y$10$/RnM11KfOa39p8e1sMvAjuZrYxDiIOP.ibvlrUO/HaPSgaYtOxlhi', '2019-11-23 05:35:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game_data`
--
ALTER TABLE `game_data`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `game_data`
--
ALTER TABLE `game_data`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
