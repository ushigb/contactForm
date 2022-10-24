-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30 авг 2022 в 11:34
-- Версия на сървъра: 10.1.39-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contacts_1`
--

-- --------------------------------------------------------

--
-- Структура на таблица `new_contact`
--

CREATE TABLE `new_contact` (
  `id` int(11) NOT NULL,
  `First_name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `new_contact`
--

INSERT INTO `new_contact` (`id`, `First_name`, `Last_name`, `email`, `Subject`, `Message`) VALUES
(1, 'Ivan', 'Chipriyanov', 'ushi15@abv.bg', 'New', 'fcassgsfgtsgsdg'),
(2, 'Ivan', '', 'ivanchipriqnov@gmail.com', 'New2', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `new_contact`
--
ALTER TABLE `new_contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `new_contact`
--
ALTER TABLE `new_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
