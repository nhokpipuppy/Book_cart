-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2018 at 09:07 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(10) NOT NULL,
  `name_book` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `composer` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `price` varchar(11) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name_book`, `composer`, `price`) VALUES
(1, 'Dế mèn phưu lưu ký', 'Nguyễn Văn A', '200000'),
(2, 'Tây du ký', 'Nguyễn Văn B', '250000'),
(3, 'Hiệp khách giang hồ', 'Nguyễn Văn C', '350000'),
(4, 'Phong Vân', 'Nguyễn Văn D', '450000'),
(5, 'Già Thiên', 'Nguyễn Văn E', '500000');

-- --------------------------------------------------------

--
-- Table structure for table `bookinfo`
--

CREATE TABLE `bookinfo` (
  `id` int(10) NOT NULL,
  `bookname` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `author` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `bookinfo`
--

INSERT INTO `bookinfo` (`id`, `bookname`, `author`, `price`) VALUES
(1, 'Dế mèn phưu lưu ký', 'Nguyễn Văn A', 100000),
(2, 'Tay du ký', 'Nguyễn Văn b', 150000),
(3, 'Phong Vân', 'Nguyễn Văn c', 250000),
(4, 'Già Thiên', 'Nguyễn Văn d', 450000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookinfo`
--
ALTER TABLE `bookinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bookinfo`
--
ALTER TABLE `bookinfo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
