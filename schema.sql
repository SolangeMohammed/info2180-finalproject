-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2021 at 06:05 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bugme`
--

-- --------------------------------------------------------
DROP DATABASE IF EXISTS bugme; 
CREATE DATABASE bugme; 
USE bugme;
--
-- Table structure for table `issues`
--
DROP TABLE IF EXISTS 'cities';
CREATE TABLE `issues` (
  `id` int(11) NOT NULL,
  `title` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `type` varchar(64) NOT NULL,
  `priority` varchar(32) NOT NULL,
  `status` varchar(24) NOT NULL,
  `assigned_to` varchar(24) NOT NULL,
  `created_by` varchar(24) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issues`
--

INSERT INTO `issues` (`id`, `title`, `description`, `type`, `priority`, `status`, `assigned_to`, `created_by`, `created`, `updated`) VALUES
(16, 'Setup Logger', 'njdn uhsi os', 'Proposal', 'Minor', 'Closed', 'Marsha Brady', '', '2015-01-21 16:13:00', '2015-02-14 15:09:00'),
(23, 'Location Service isnt working', 'kdnlkmlsml', 'Bug', 'Major', 'Open', 'Jan Brady', '', '2016-10-16 16:13:00', '2016-09-11 13:13:00'),
(100, 'XSS Vulnerability in Add User From', 'nkjadkjelnfjnnf', 'Proposal', 'Major', 'Open', 'Tom Brady', '', '2016-11-21 16:13:00', '2016-12-21 16:13:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `date_joined` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `password`, `email`, `date_joined`) VALUES
(24, 'admin', '', 'A0F874BC7F54EE086FCE60A37CE7887D', 'admin@project2.com', '0000-00-00 00:00:00'),
(33, 'Kali', 'Soutar', '6A50538D9BB165E66D705F33C7', 'kali23@gmail.com', '0000-00-00 00:00:00'),
(34, 'Solange', 'Mohammed', '*F8818844600FFDDA98098F2AEFB2C5D', 'solangemoh@gmail.com', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `issues`
--
ALTER TABLE `issues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
