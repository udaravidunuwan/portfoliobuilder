-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2023 at 07:29 AM
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
-- Table structure for table `skills_tab_tb`
--

CREATE TABLE `skills_tab_tb` (
  `skill_id` int(11) NOT NULL,
  `category_id` int(255) DEFAULT NULL,
  `skills_user_id` int(255) NOT NULL,
  `skill_name` varchar(255) NOT NULL,
  `proficiency_percentage` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skills_tab_tb`
--

INSERT INTO `skills_tab_tb` (`skill_id`, `category_id`, `skills_user_id`, `skill_name`, `proficiency_percentage`) VALUES
(1, 1, 9999, 'RedHat ', 50),
(2, 1, 9999, 'Linux', 90),
(3, 2, 9999, 'PHP', 70),
(4, 3, 9999, 'C#', 60),
(5, 4, 9999, 'ETL', 60),
(6, 5, 4951, 'asd ++', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `skills_tab_tb`
--
ALTER TABLE `skills_tab_tb`
  ADD PRIMARY KEY (`skill_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `skills_tab_tb`
--
ALTER TABLE `skills_tab_tb`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `skills_tab_tb`
--
ALTER TABLE `skills_tab_tb`
  ADD CONSTRAINT `skills_tab_tb_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `skill_categories_tab_tb` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
