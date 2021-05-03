-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 03, 2021 at 10:39 AM
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
(1, 'LAraVEl'),
(2, 'Django'),
(3, 'Python'),
(4, 'Dotnet'),
(5, 'Dotnet');

-- --------------------------------------------------------

--
-- Table structure for table `Comments`
--

CREATE TABLE `Comments` (
  `comment_id` int(20) NOT NULL,
  `post_id` int(20) NOT NULL,
  `when_comment` datetime(4) NOT NULL DEFAULT current_timestamp(4),
  `comments` text NOT NULL,
  `who_comment` varchar(60) NOT NULL,
  `comment_status` varchar(33) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Comments`
--

INSERT INTO `Comments` (`comment_id`, `post_id`, `when_comment`, `comments`, `who_comment`, `comment_status`) VALUES
(1, 1, '2021-05-02 03:41:27.9251', 'helo', 'mddas', NULL),
(2, 1, '2021-05-02 03:44:23.2167', '<script>alert(\"hello\");</script>', 'mddas', NULL);

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
(1, 'laravel', 'mddas', 'laravel is strong framework', 'laravel is strongest framework .', 'publish', '#laravel', 'image/1.png', '2021-05-02 03:23:51'),
(2, 'Django', 'mddas', 'django is python framework', 'django s python framework', 'publish', '#django', 'image/1.png', '2021-05-02 03:24:46'),
(3, 'dotnet', 'mddas', 'Dotnet is python framework', 'dotnet is python framework', 'publish', '', 'image/3.png', '2021-05-02 03:26:10'),
(4, 'javascript', 'mddas', 'javascript is best', 'javascript is best', 'publish', 'javascript is best', 'image/4.jpg', '2021-05-02 03:29:47');

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
  `user_role` varchar(55) DEFAULT NULL,
  `randsalt` varchar(44) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `UserDetail`
--

INSERT INTO `UserDetail` (`userid`, `user_email`, `user_name`, `user_last_name`, `user_password`, `user_image`, `user_role`, `randsalt`) VALUES
(1, 'mddasgudiya@gmail.com', 'mddas', '', 'md', 'usersimage/1.jpg', 'admin', NULL),
(2, 'ayon@gmail.com', 'ayon', 'jubery', 'md', 'usersimage/2.jpg', 'admin', 'nothing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catogery`
--
ALTER TABLE `catogery`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `Comments`
--
ALTER TABLE `Comments`
  ADD PRIMARY KEY (`comment_id`);

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
-- AUTO_INCREMENT for table `catogery`
--
ALTER TABLE `catogery`
  MODIFY `category_id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Comments`
--
ALTER TABLE `Comments`
  MODIFY `comment_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `UserDetail`
--
ALTER TABLE `UserDetail`
  MODIFY `userid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
