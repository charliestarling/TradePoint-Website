-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 13, 2024 at 06:23 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trade_point`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `account_id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `email_address` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`account_id`, `first_name`, `surname`, `email_address`, `password`) VALUES
(1, 'Charlie', 'Starling', 'charliejackstarling1@gmail.com', '$2y$10$/cuYukhsehxbIrcakIaY1OTP9MZ6YYPN9x1hylf9Iue0xcPmfBKdG'),
(2, 'Charlie', 'Starling', 'charliejackstarling@tradepoint.com', '$2y$10$Pi5DbdjjO6nvUC5RIBI99eX.TvMmVpKrNhOyITGQ4XU/pbGundZ.u'),
(3, 'Joe', 'Francois', 'jfrancois@hms.co.uk', '$2y$10$o5uDMYr476XQyv7SRfiW/OoqJIBn08LFUdCCsyskhBanLmvIQbJ1W'),
(4, 'Katie', 'Lewis', 'klewis@hms.co.uk', '$2y$10$dqjjuteMZegGQhrxQ2mr/udqDaTDgmZa79Gg.U0l4ZTX6plyWI7de'),
(5, 'Harri', 'Diver', 'hdiver@gmail.com', '$2y$10$dd3XjDHUPlkJH36XSFgeR.QQ3HiGZ2qNNFI5Jg0vzomredJS6AYCi'),
(6, 'Channia', 'Lewis', 'clewis@gmail.com', '$2y$10$HM.W.6ltY5Gw8D9nrh475..6LppsigoT23UJuLL2H4yPY/2yv1EKu'),
(7, 'Alex', 'Beddus', 'abeddus@hms.co.uk', '$2y$10$3LyFSnm20.9HTNQixTZyfebhy5runlc9evLzPf.lho2Ozim36WnUK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
