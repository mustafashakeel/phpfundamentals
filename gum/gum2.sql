-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 04, 2021 at 08:09 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `gum`
--

DROP TABLE IF EXISTS `gum`;
CREATE TABLE IF NOT EXISTS `gum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(600) NOT NULL,
  `price` float NOT NULL,
  `availability` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gum`
--

INSERT INTO `gum` (`id`, `name`, `image`, `description`, `price`, `availability`) VALUES
(1, 'White Gumshoe', 'shoe1.png', 'Gumshoe, a slang term for a private detective, from those that wore street shoes with a thick, soft and quiet rubber sole', 35.99, 12),
(2, 'Black Gumshoe', 'shoe2.png', 'Gumshoe, a slang term for a private detective, from those that wore street shoes with a thick, soft and quiet rubber sole', 22.99, 32),
(4, 'Pink Gumshoe', 'shoe3.png', 'This shoe is perfect for making your way around town', 49.99, 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
