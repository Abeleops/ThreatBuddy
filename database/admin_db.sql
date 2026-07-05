-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2026 at 05:48 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_db`
--

CREATE TABLE `admin_db` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_db`
--

INSERT INTO `admin_db` (`id`, `username`, `password`) VALUES
(1, 'threatbuddy', 'threatbuddy123');

-- --------------------------------------------------------

--
-- Table structure for table `article_table`
--

CREATE TABLE `article_table` (
  `id` int(11) NOT NULL,
  `author` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `read_more_link` varchar(500) DEFAULT NULL,
  `category` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `media` varchar(255) DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article_table`
--

INSERT INTO `article_table` (`id`, `author`, `title`, `subtitle`, `read_more_link`, `category`, `content`, `media`, `date_added`) VALUES
(5, 'asdf', 'asdf', 'asdf', 'asdf', 'Cybersecurity', 'asdfsad', '1783264861_ESTEP+Poster.png', '2026-07-05 15:21:01'),
(6, 'Abele', 'ang alamat', 'bagong kaalaman', 'https://goole.com', 'Alamat', 'HAHAHAHA', '1783266230_LogoTB.png', '2026-07-05 15:38:38');

-- --------------------------------------------------------

--
-- Table structure for table `author_table`
--

CREATE TABLE `author_table` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `author_name` varchar(100) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `author_table`
--

INSERT INTO `author_table` (`id`, `user_id`, `author_name`, `photo`, `date_created`) VALUES
(3, 0, 'Ivan', '1783261135_645688153_762197846683701_4456408400706656274_n.png', '2026-07-05 14:18:55'),
(4, 0, 'asdf', '1783265173_images (1).jpg', '2026-07-05 15:26:13');

-- --------------------------------------------------------

--
-- Table structure for table `library_table`
--

CREATE TABLE `library_table` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `severity` enum('Low','Medium','High') NOT NULL,
  `about` text NOT NULL,
  `how_it_works` text NOT NULL,
  `prevention` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `library_table`
--

INSERT INTO `library_table` (`id`, `name`, `category`, `severity`, `about`, `how_it_works`, `prevention`, `image`, `date_added`) VALUES
(1, 'sample', 'Phishing', 'Low', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel risus vitae erat luctus faucibus. Sed at augue nec lectus tristique pretium.', '1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n2. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\r\n3.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.\r\n4. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.', '1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n2. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\r\n3.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.\r\n4. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.', 'images (1).jpg', '2026-07-05 12:39:15');

-- --------------------------------------------------------

--
-- Table structure for table `userdata_table`
--

CREATE TABLE `userdata_table` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdata_table`
--

INSERT INTO `userdata_table` (`user_id`, `first_name`, `last_name`, `email`, `phone`, `password`, `created_at`) VALUES
(1, 'Nathaniel Adrian', 'Lizardo', 'ivanmarklizardo@gmail.com', '09171234567', 'nathan123', '2026-07-05 11:07:10'),
(2, 'Abele John ', 'Juarez', 'abele@gmail.com', '09123456853', 'abele123', '2026-07-05 11:21:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_db`
--
ALTER TABLE `admin_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_table`
--
ALTER TABLE `article_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `author_table`
--
ALTER TABLE `author_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library_table`
--
ALTER TABLE `library_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdata_table`
--
ALTER TABLE `userdata_table`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_db`
--
ALTER TABLE `admin_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `article_table`
--
ALTER TABLE `article_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `author_table`
--
ALTER TABLE `author_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `library_table`
--
ALTER TABLE `library_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userdata_table`
--
ALTER TABLE `userdata_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
