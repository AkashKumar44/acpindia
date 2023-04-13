-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2023 at 08:30 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin123', 'admin123@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `commet` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `number`, `commet`) VALUES
(56, 'roy', 'roy123@gmail.com', '7867564534', 'bfdhsfkjdf'),
(57, '', '', '', 'hello '),
(58, '', '', '', 'zxdz'),
(59, 'pop', 'pop@gmail.com', '9089786756', '&quot;&quot;&quot;&quot;&quot;&gt;&lt;&gt;&lt;h1&gt;&lt;script&gt;&lt;/'),
(60, 'popo', 'popo@gmail.com', '9089787878', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `webinfo`
--

CREATE TABLE `webinfo` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `textarea` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `webinfo`
--

INSERT INTO `webinfo` (`id`, `name`, `file`, `textarea`) VALUES
(23, 'test', 'Capture.PNG', 'xffddsf'),
(24, 'name', 'Capture.PNG', 'hi'),
(25, 'hello', '4e68bc96844911ea98ef0242ac110003.webp', 'popo'),
(26, 'test', '9e6b5f8e127011e8a1830a9df65c8753.webp', 'hi'),
(27, 'test', '', ''),
(28, 'test', '', ''),
(29, 'popo', '', ''),
(30, 'popioi', '', 'oipoii'),
(31, 'test', '1674982071_8af674e190b6bdcc6875.jpg', 'test'),
(32, 'hellooooooo', '1674982651_834d54612fbe8a072a8e.png', 'heoooooo'),
(33, 'aqwerty', '1674984024_8696d628df0300192db7.jpg', 'qwert'),
(34, 'test00000000000000000000000', '1674984236_b259eeef5d0de86ec9d2.png', 'test'),
(35, 'test', '1681324091_c9debd55c02715185826.jpg', 'zdfsfas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webinfo`
--
ALTER TABLE `webinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `webinfo`
--
ALTER TABLE `webinfo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
