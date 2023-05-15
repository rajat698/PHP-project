-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db:3306
-- Generation Time: May 15, 2023 at 09:37 PM
-- Server version: 8.0.33
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_docker`
--

-- --------------------------------------------------------

--
-- Table structure for table `UTAH`
--

CREATE TABLE `UTAH` (
  `CId` int NOT NULL,
  `Name` text NOT NULL,
  `Population` int NOT NULL,
  `Homes` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `UTAH`
--

INSERT INTO `UTAH` (`CId`, `Name`, `Population`, `Homes`) VALUES
(101, 'Salt Lake City', 199153, 88155),
(102, 'West Valley City', 139361, 43656),
(103, 'West Jordan', 116045, 35516),
(104, 'Provo', 113538, 35488),
(105, 'Orem', 96734, 31597),
(106, 'Sandy', 96272, 31597),
(107, 'St. George', 92875, 37720),
(108, 'Ogden', 86110, 34154),
(109, 'Layton', 80585, 35154),
(110, 'South Jordan', 75517, 34000),
(101, 'Salt Lake City', 199153, 88155),
(102, 'West Valley City', 139361, 43656),
(103, 'West Jordan', 116045, 35516),
(104, 'Provo', 113538, 35488),
(105, 'Orem', 96734, 31597),
(106, 'Sandy', 96272, 31597),
(107, 'St. George', 92875, 37720),
(108, 'Ogden', 86110, 34154),
(109, 'Layton', 80585, 35154),
(110, 'South Jordan', 75517, 34000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
