-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2020 at 11:04 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `mini_statement`
--

CREATE TABLE `mini_statement` (
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mini_statement`
--

INSERT INTO `mini_statement` (`sender`, `receiver`, `amount`) VALUES
('dummy1', 'dummy2', 100),
('dummy2', 'dummy3', 50),
('dummy3', 'dummy4', 200),
('dummy4', 'dummy5', 100),
('dummy5', 'dummy6', 110),
('dummy6', 'dummy7', 110);
-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--



INSERT INTO `users` (`name`, `email`, `amount`) VALUES
('dummy1', 'dummy1@gmail.com', 1010),
('dummy2', 'dummy2@gmail.com', 990),
('dummy3', 'dummy3@gmail.com', 1000),
('dummy4', 'dummy4@gmail.com', 950),
('dummy5', 'dummy5@gmail.com', 1000),
('dummy6', 'dummy6@gmail.com', 1000),
('dummy7', 'dummy7@gmail.com', 1000),
('dummy8', 'dummy8@gmail.com', 1050),
('dummy9', 'dummy9@gmail.com', 800),
('dummy10', 'dummy10@gmail.com', 1200);
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
