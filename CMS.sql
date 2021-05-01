-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 01, 2021 at 06:45 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CMS`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `id` int(20) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `joinedDate` datetime(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `catogery`
--

CREATE TABLE `catogery` (
  `category_id` int(22) NOT NULL,
  `category_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catogery`
--

INSERT INTO `catogery` (`category_id`, `category_name`) VALUES
(1, 'PHP'),
(2, 'LARAVEL'),
(3, 'PYTHON'),
(4, 'DJANGO'),
(5, 'C#'),
(6, 'DotNeT');

-- --------------------------------------------------------

--
-- Table structure for table `Comments`
--

CREATE TABLE `Comments` (
  `commentId` int(20) NOT NULL,
  `Post_Id` int(20) NOT NULL,
  `when_comment` datetime(4) NOT NULL,
  `comments` text NOT NULL,
  `who_comment` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(20) NOT NULL,
  `post_category` varchar(60) DEFAULT NULL,
  `who_post` varchar(55) NOT NULL,
  `post_title` varchar(55) DEFAULT NULL,
  `post_content` varchar(2000) DEFAULT NULL,
  `post_status` varchar(33) NOT NULL,
  `post_tag` varchar(33) DEFAULT NULL,
  `post_image` varchar(55) DEFAULT NULL,
  `when_post` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_category`, `who_post`, `post_title`, `post_content`, `post_status`, `post_tag`, `post_image`, `when_post`) VALUES
(24, 'laravel', 'manoj', 'this  is  strong larave', '', 'draft', '#', 'image/24.', '2021-05-01 03:32:16'),
(25, 'python', 'manoj', 'lolu', 'aad', 'draft', '#java', 'image/25.jpg', '2021-05-01 04:16:28'),
(26, 'c-sharp', 'manoj', 'c-sharp', 'asadsgdfgf fdfdds', 'publish', '', 'image/26.jpg', '2021-05-01 09:56:46');

-- --------------------------------------------------------

--
-- Table structure for table `UserDetail`
--

CREATE TABLE `UserDetail` (
  `userid` int(20) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_name` varchar(60) NOT NULL,
  `user_last_name` varchar(55) DEFAULT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_image` varchar(55) DEFAULT NULL,
  `user_role` varchar(55) NOT NULL,
  `randsalt` varchar(44) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `UserDetail`
--

INSERT INTO `UserDetail` (`userid`, `user_email`, `user_name`, `user_last_name`, `user_password`, `user_image`, `user_role`, `randsalt`) VALUES
(10, 'mddasgudiya@gmail.com', 'manoj', NULL, 'md', NULL, '', NULL),
(11, 'mddasgudidya@gmail.com', 'manoj', '', 'ss', '', 'subscriber', ''),
(12, 'mddasgudidya@gmail.com', 'manoj', 'das', 'ss', 'image/12.jpg', 'subscriber', 'muk'),
(13, 'mddasgudidya@gmail.com', 'manoj', 'das', 'ss', 'image/13.jpg', 'subscriber', 'muk'),
(14, 'mddasgudidya@gmail.com', 'cx', 'xc', 'cx', 'usersimage/14.jpg', 'admin', 'cx'),
(15, 'mddasgudidya@gmail.com', 'cx', 'xc', 'cx', 'usersimage/15.jpg', 'admin', 'cx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `catogery`
--
ALTER TABLE `catogery`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `Comments`
--
ALTER TABLE `Comments`
  ADD PRIMARY KEY (`commentId`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `UserDetail`
--
ALTER TABLE `UserDetail`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Admin`
--
ALTER TABLE `Admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `catogery`
--
ALTER TABLE `catogery`
  MODIFY `category_id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Comments`
--
ALTER TABLE `Comments`
  MODIFY `commentId` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `UserDetail`
--
ALTER TABLE `UserDetail`
  MODIFY `userid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
