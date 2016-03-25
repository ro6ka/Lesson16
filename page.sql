-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2016 at 01:03 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oxu.az`
--

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `page_title` varchar(100) NOT NULL,
  `page_link` varchar(200) NOT NULL,
  `page_status` tinyint(4) NOT NULL,
  `page_image` varchar(200) NOT NULL,
  `page_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `page_title`, `page_link`, `page_status`, `page_image`, `page_text`) VALUES
(1, 'klxjalkas', 'dadaldkjadla', 1, '', 'asdadasd'),
(2, 'klxjalkas', 'dadaldkjadla', 1, '', 'asdadasd'),
(3, 'klxjalkas', 'dadaldkjadla', 1, '', 'asdadasd'),
(4, '', '', 0, '', ''),
(5, '', '', 1, '', ''),
(6, '', '', 0, '', ''),
(7, '', '', 1, '', ''),
(8, '', '', 1, '', ''),
(9, '', '', 1, '', ''),
(10, '', '', 0, '', ''),
(11, '', '', 0, '', ''),
(12, '', '', 0, '', ''),
(13, '', '', 1, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
