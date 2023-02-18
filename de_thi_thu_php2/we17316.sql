-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 18, 2023 at 01:30 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `we17316`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `ten_sp` varchar(255) NOT NULL,
  `gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `ten_sp`, `gia`) VALUES
(1, 'bbbbbccc', 2000),
(2, 'wwwttt', 33333),
(3, 'wwwww', 33333),
(9, '123', 123),
(10, 'thang', 123),
(11, 'wwwww', 12121),
(12, 'thang', 123),
(13, '22222', 2222),
(14, '2121', 1212),
(15, 'abc', 123),
(16, 'abc', 123),
(17, 'uuuu', 1234),
(18, 'wwww', 333333),
(20, '123123', 13123),
(21, 'wwww', 222),
(22, 'wwwww', 123456),
(23, 'www', 12343),
(24, 'www', 12343),
(25, 'www', 12343),
(26, 'www', 12343),
(27, 'www', 12343),
(28, 'www', 12343),
(29, 'www', 12343),
(30, 'huhihiihi', 123123),
(31, '2222', 222),
(32, '2222', 2222),
(33, '2222', 222),
(34, 'hihiih', 12334),
(35, 'wjwjwjw', 123455);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
