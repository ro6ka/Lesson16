-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 24, 2016 at 02:54 
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Lesson15`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `news_title` varchar(100) NOT NULL,
  `news_thumbImg` varchar(100) NOT NULL,
  `news_img` varchar(100) NOT NULL,
  `news_desc` varchar(100) NOT NULL,
  `news_text` text NOT NULL,
  `news_status` tinyint(4) NOT NULL,
  `news_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_title`, `news_thumbImg`, `news_img`, `news_desc`, `news_text`, `news_status`, `news_date`) VALUES
(2, 'UN Secretary-General extends congratularions on Nowruz', 'nikon.jpg', 'nikon.jpg', '"Nowruz is part of the global cultural heritage." On Monday UN Secretary General Ban Ki-moon congrat', '"Nowruz is part of the global cultural heritage."\r\nOn Monday UN Secretary General Ban Ki-moon congratulated those who celebrate Nowruz - the holiday of spring renewal.\r\nAccording to Oxu.Az, at a solemn meeting Ban Ki-moon called Nowruz "a part of the global cultural heritage," and said that this festival meets United Nations principles.', 1, '2016-03-23 20:00:00'),
(3, 'UN Secretary-General extends congratularions on Nowruz', 'nikon.jpg', 'nikon.jpg', '"Nowruz is part of the global cultural heritage." On Monday UN Secretary General Ban Ki-moon congrat', '"Nowruz is part of the global cultural heritage."\r\nOn Monday UN Secretary General Ban Ki-moon congratulated those who celebrate Nowruz - the holiday of spring renewal.\r\nAccording to Oxu.Az, at a solemn meeting Ban Ki-moon called Nowruz "a part of the global cultural heritage," and said that this festival meets United Nations principles.\r\n"Nowruz is an ancient festival, which is older than borders and differences today. It serves as a reminder that the national borders, religious and other superficial differences are not as important as the fact that we are people. In this sense, Nowruz breaks down barriers and builds the bond of trust," Ban Ki-moon said.', 1, '2016-03-22 20:00:00'),
(4, 'UN Secretary-General extends congratularions on Nowruz', 'nikon.jpg', 'nikon.jpg', '"Nowruz is part of the global cultural heritage." On Monday UN Secretary General Ban Ki-moon congrat', '"Nowruz is part of the global cultural heritage."\r\nOn Monday UN Secretary General Ban Ki-moon congratulated those who celebrate Nowruz - the holiday of spring renewal.\r\nAccording to Oxu.Az, at a solemn meeting Ban Ki-moon called Nowruz "a part of the global cultural heritage," and said that this festival meets United Nations principles.\r\n"Nowruz is an ancient festival, which is older than borders and differences today. It serves as a reminder that the national borders, religious and other superficial differences are not as important as the fact that we are people. In this sense, Nowruz breaks down barriers and builds the bond of trust," Ban Ki-moon said.', 1, '2016-03-22 20:00:00'),
(5, 'UN Secretary-General extends congratularions on Nowruz', 'nikon.jpg', 'nikon.jpg', '"Nowruz is part of the global cultural heritage." On Monday UN Secretary General Ban Ki-moon congrat', '"Nowruz is part of the global cultural heritage."\r\nOn Monday UN Secretary General Ban Ki-moon congratulated those who celebrate Nowruz - the holiday of spring renewal.\r\nAccording to Oxu.Az, at a solemn meeting Ban Ki-moon called Nowruz "a part of the global cultural heritage," and said that this festival meets United Nations principles.\r\n"Nowruz is an ancient festival, which is older than borders and differences today. It serves as a reminder that the national borders, religious and other superficial differences are not as important as the fact that we are people. In this sense, Nowruz breaks down barriers and builds the bond of trust," Ban Ki-moon said.', 1, '2016-03-22 20:00:00'),
(6, 'UN Secretary-General extends congratularions on Nowruz', 'nikon.jpg', 'nikon.jpg', '"Nowruz is part of the global cultural heritage." On Monday UN Secretary General Ban Ki-moon congrat', '"Nowruz is part of the global cultural heritage."\r\nOn Monday UN Secretary General Ban Ki-moon congratulated those who celebrate Nowruz - the holiday of spring renewal.\r\nAccording to Oxu.Az, at a solemn meeting Ban Ki-moon called Nowruz "a part of the global cultural heritage," and said that this festival meets United Nations principles.\r\n"Nowruz is an ancient festival, which is older than borders and differences today. It serves as a reminder that the national borders, religious and other superficial differences are not as important as the fact that we are people. In this sense, Nowruz breaks down barriers and builds the bond of trust," Ban Ki-moon said.', 1, '2016-03-22 20:00:00'),
(7, 'UN Secretary-General extends congratularions on Nowruz', 'nikon.jpg', 'nikon.jpg', '"Nowruz is part of the global cultural heritage." On Monday UN Secretary General Ban Ki-moon congrat', '"Nowruz is part of the global cultural heritage."\r\nOn Monday UN Secretary General Ban Ki-moon congratulated those who celebrate Nowruz - the holiday of spring renewal.\r\nAccording to Oxu.Az, at a solemn meeting Ban Ki-moon called Nowruz "a part of the global cultural heritage," and said that this festival meets United Nations principles.\r\n"Nowruz is an ancient festival, which is older than borders and differences today. It serves as a reminder that the national borders, religious and other superficial differences are not as important as the fact that we are people. In this sense, Nowruz breaks down barriers and builds the bond of trust," Ban Ki-moon said.', 1, '2016-03-22 20:00:00'),
(8, 'USD rate falls below AZN 1.59', 'nikon.jpg', 'nikon.jpg', 'Exchange rate of USD against manat for March 28 was set at AZN 1.5876, the Central Bank of Azerbaija', 'Exchange rate of USD against manat for March 28 was set at AZN 1.5876, the Central Bank of Azerbaijan told APA-Economics.\r\nThe exchange rate of USD for today had been set at 1.5971.', 0, '2016-03-24 13:04:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_surname` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_surname`, `user_email`, `user_password`) VALUES
(1, 'jsnldvgnsl', 'bjklznbl', 'nsdj@fg.kosgk', 'shrgdnfkbm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
