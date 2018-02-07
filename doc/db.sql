-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2018 at 01:08 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php-oop`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
CREATE TABLE `content` (
  `content_id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE latin1_general_ci NOT NULL,
  `clean_content` text COLLATE latin1_general_ci NOT NULL,
  `title` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `parent_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `is_hidden` tinyint(1) NOT NULL DEFAULT '0',
  `show_in_menu` tinyint(1) NOT NULL DEFAULT '1',
  `sort` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_first_page` tinyint(1) NOT NULL DEFAULT '0',
  `lang` varchar(2) COLLATE latin1_general_ci NOT NULL DEFAULT 'en'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`content_id`, `content`, `clean_content`, `title`, `parent_id`, `is_hidden`, `show_in_menu`, `sort`, `user_id`, `created`, `is_first_page`, `lang`) VALUES
(1, 'Ask to go outside and ask to come inside and ask to go outside and ask to come inside make muffins, or hiss at vacuum cleaner, or please stop looking at your phone and pet me lie in the sink all day but hunt by meowing loudly at 5am next to human slave food dispenser. ', '', 'Roll on the floor purring your whiskers off', 0, 0, 1, 0, 0, '2018-02-06 00:00:00', 1, 'en'),
(2, 'Fall asleep on the washing machine hate dog hide head under blanket so no one can see for chase the pig around the house stares at human while pushing stuff off a table then cats take over the world. Ask to go outside and ask to come inside and ask to go outside and ask to come inside present belly, ', '', 'Sleep in the bathroom sink', 0, 0, 1, 0, 0, '2018-02-06 00:00:00', 0, 'en'),
(6, 'sisu', '', 'pealkiri', 0, 0, 0, 0, 0, '2018-02-07 02:41:46', 0, 'et');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`content_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `content_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
