-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 18, 2021 at 05:39 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acme`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `first_name`, `last_name`, `email_address`) VALUES
(2, 'Bob', 'Smith', 'bob@smith.com'),
(3, 'Bob', 'Smith', 'bob@smith.com'),
(4, 'Joe', 'Doe', 'joe@do.com'),
(5, 'Joe', 'Doe', 'joe@do.com'),
(6, 'Joe', 'Doe', 'joe@do.com'),
(7, 'Joe', 'Doe', 'joe@do.com'),
(8, 'Joe', 'Doe', 'joe@do.com'),
(9, 'Joe', 'Doe', 'joe@do.com'),
(10, 'Joe', 'Doe', 'joe@do.com'),
(12, 'Joe', 'Doe', 'joe@do.com'),
(13, 'Joe', 'Doe', 'joe@do.com'),
(14, 'Joe', 'Doe', 'joe@do.com'),
(15, 'Jane', 'Doe', 'jane@someone.com'),
(16, 'Scott', 'Hastings', 'scott@hastings.com'),
(17, 'Jill', 'McBeth', 'jill@somewhere.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
