-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2023 at 07:31 AM
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
-- Database: `project_portfolio_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `skill_categories_tab_tb`
--

CREATE TABLE `skill_categories_tab_tb` (
  `category_id` int(255) NOT NULL,
  `category_user_id` int(255) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `years_of_experience` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skill_categories_tab_tb`
--

INSERT INTO `skill_categories_tab_tb` (`category_id`, `category_user_id`, `category_name`, `years_of_experience`) VALUES
(1, 9999, 'System Administration', 1),
(2, 9999, 'Web Development', 5),
(3, 9999, 'Software Development', 15),
(4, 9999, 'Data Engineering ', 2),
(5, 4951, 'asd developer', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `skill_categories_tab_tb`
--
ALTER TABLE `skill_categories_tab_tb`
  ADD PRIMARY KEY (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `skill_categories_tab_tb`
--
ALTER TABLE `skill_categories_tab_tb`
  MODIFY `category_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
