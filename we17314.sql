-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2023 at 01:41 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `we17314`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL COMMENT '1:Chủ tịch - 2:Kế toán\r\n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `email`, `password`, `role`) VALUES
(3, 'Trinh Xuan Thuy11', 'admin@gmail.com', '$2y$10$AzadeaVUXkD3t6ZcP61FouxhRYz6MVHTQKzrgjJ9wvVfpeRt20/XG', '1'),
(5, 'Trinh Xuan Thuy', 'admin@gmail.com1', '$2y$10$VjdRXSl97i0wfzeepkRwZeJz01UmQEqK10cOYSKd7btY1X4jWpKS2', '2'),
(6, '31231', 'trinhxuanthuy1542003@gmail.com', '$2y$10$AkohpcCpU/inB6vPD6EVXe199zPzeu/BAblSR0dlNHJtu4S1x4xQi', '1');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Thuy'),
(2, 'Xuan'),
(3, 'Thang'),
(4, 'Trinh');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--
-- Error reading structure for table we17314.customer: #1932 - Table &#039;we17314.customer&#039; doesn&#039;t exist in engine
-- Error reading data for table we17314.customer: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `we17314`.`customer`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`) VALUES
(1, 'Tài chính'),
(2, 'Kỹ thuật'),
(3, 'CSKH'),
(4, 'thuy etst1'),
(5, 'eqwe'),
(6, 'aa11');

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `name`) VALUES
(1, 'Chủ tịch'),
(2, 'Phó chủ tịch'),
(3, 'Tổng giám đốc'),
(4, 'Phó tổng giám đốc'),
(5, 'Trưởng phòng'),
(6, 'Nhân viên'),
(7, 'Trinh Xuan Thuy1');

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
(1, 'trinh11', 111),
(2, 'xuan000', 11111),
(3, 'trinhj xuan 11', 200244),
(4, 'eee11', 111115),
(5, 'eee1', 11),
(6, 'thuy111', 66666),
(7, 'eee11', 4),
(8, 'thuy2121', 111),
(9, 'eee1312321', 123),
(10, 'eee', 1),
(12, 'thuy1111111', 111222),
(13, 'thuy', 0),
(17, 'eee1312321', 11111),
(20, 'eee', 123),
(23, 'eee', 11),
(25, 'eee', 12),
(27, 'eee', 11111),
(28, 'eee1312321', 11),
(29, 'thuy1111111', 12);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(10) NOT NULL,
  `staff_id` int(10) NOT NULL,
  `basic_salary` varchar(255) NOT NULL,
  `work_day` varchar(255) NOT NULL,
  `bonus` varchar(255) NOT NULL,
  `allowance` varchar(255) NOT NULL,
  `vat` varchar(255) NOT NULL,
  `total_salary` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `staff_id`, `basic_salary`, `work_day`, `bonus`, `allowance`, `vat`, `total_salary`) VALUES
(1, 3, '4444', '20', '11', '2', '0.1', '888930'),
(2, 2, '2321121', '201', '111', '22', '0.1', '4665454540');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` int(10) NOT NULL,
  `position_id` int(10) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `numberphone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `cmnd` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `department_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `position_id`, `full_name`, `numberphone`, `email`, `avatar`, `address`, `cmnd`, `gender`, `birthday`, `department_id`) VALUES
(1, 1, 'Thắng', '0964540524', 'trinhxuanthuy1542003@gmail.com', './public/upload/63ec9d59a770b-Ảnh chụp màn hình (6).png', '12', '12412412432', 'Nữ', '1222-12-13', 1),
(2, 2, 'Xuân', '0964540524', 'admin@gmail.com', './public/upload/63ec9daa72f88-Screenshot (1).png', '12', '88888', 'Nam', '2131-03-12', 3),
(3, 6, 'Trịnh Xuân Thuỷ', '0387976086', 'trinhxuanthuy1542003@gmail.com1', './public/upload/63ec9dcabc281-Ảnh chụp màn hình (9) - Sao chép.png', 'hà ', '12321', 'Nữ', '12312-03-12', 1),
(4, 6, 'Trịnh', '0964540524', 'admin@gmail.com11', './public/upload/63edce6dafdcd-Ảnh chụp màn hình (6).png', 'HN', '12', 'Nam', '2023-02-16', 3);

-- --------------------------------------------------------

--
-- Table structure for table `timekeepings`
--

CREATE TABLE `timekeepings` (
  `id` int(10) NOT NULL,
  `staff_id` int(10) NOT NULL,
  `basic_salary` varchar(255) NOT NULL,
  `work_day` varchar(255) NOT NULL,
  `overtime` varchar(255) NOT NULL,
  `on_leave` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`),
  ADD KEY `salary_fk0` (`staff_id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staffs_fk0` (`position_id`),
  ADD KEY `staffs_fk1` (`department_id`);

--
-- Indexes for table `timekeepings`
--
ALTER TABLE `timekeepings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `timekeepings_fk0` (`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `salary_fk0` FOREIGN KEY (`staff_id`) REFERENCES `staffs` (`id`);

--
-- Constraints for table `staffs`
--
ALTER TABLE `staffs`
  ADD CONSTRAINT `staffs_fk0` FOREIGN KEY (`position_id`) REFERENCES `positions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `staffs_fk1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `timekeepings`
--
ALTER TABLE `timekeepings`
  ADD CONSTRAINT `timekeepings_fk0` FOREIGN KEY (`staff_id`) REFERENCES `staffs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
