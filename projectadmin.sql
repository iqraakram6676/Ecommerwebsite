-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 02, 2023 at 10:50 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `adminname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`adminname`, `password`) VALUES
('warda', 'guriyan12%@'),
('Huda', '123');

-- --------------------------------------------------------

--
-- Table structure for table `inquiery`
--

CREATE TABLE `inquiery` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `createdon` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquiery`
--

INSERT INTO `inquiery` (`id`, `name`, `email`, `phone`, `subject`, `message`, `createdon`) VALUES
(1, 'Warda Abdullah', 'wardaabdullah122221@yaho.com', '59809098645', 'Demy data', 'This is the demy data to test the connection the database', '2022-12-22 04:25:19');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `imgname` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `imgpath` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `createdon` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `imgname`, `price`, `img`, `imgpath`, `description`, `status`, `createdon`) VALUES
(15, 'Glove', '1200', '531445', 'images/', 'hg', 1, '2022-12-29 23:23:28');

-- --------------------------------------------------------

--
-- Table structure for table `usermanagement`
--

CREATE TABLE `usermanagement` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `createon` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usermanagement`
--

INSERT INTO `usermanagement` (`id`, `firstname`, `lastname`, `email`, `phone`, `password`, `status`, `createon`) VALUES
(1, 'warda', 'abdullah', 'wardaabdullah122221@yaho.com', '12818201', '928ejdjsa', 1, '2022-12-06 09:20:59'),
(2, 'urooba', 'abdullah', 'uroobaabdullah66@gmail.com', '59809098645', 'guriyan12%@', 1, '2022-12-06 09:23:43'),
(3, 'Huda', 'Aslam', 'hudaaslam12@gmail.com', '12818201', '34568', 1, '2022-12-09 00:47:35'),
(4, 'Hafeeza', 'Zulfiqar', 'hafeezazulfiqar9@gmail.com', '01820129012', 'snbaklazxa', 1, '2022-12-16 01:17:46'),
(5, 'urooba', 'Aslam', 'hudaaslam12@gmail.com', '59809098645', '890-', 1, '2023-01-01 03:22:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inquiery`
--
ALTER TABLE `inquiery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usermanagement`
--
ALTER TABLE `usermanagement`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inquiery`
--
ALTER TABLE `inquiery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `usermanagement`
--
ALTER TABLE `usermanagement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
