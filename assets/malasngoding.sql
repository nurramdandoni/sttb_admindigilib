-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2018 at 04:57 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `malasngoding`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `alamat`, `pekerjaan`) VALUES
(1, 'Andi', 'Surabaya', 'web programmer'),
(2, 'Santoso', 'Jakarta', 'Web Designer'),
(6, 'Samsul', 'Sumedang', 'Pegawai'),
(7, 'Bob', 'jakarta', 'penyanyi'),
(8, 'marley', 'afrika', 'penyanyi'),
(9, 'Bob', 'jakarta', 'penyanyi'),
(10, 'Bob', 'jakarta', 'penyanyi'),
(11, 'Bob', 'jakarta', 'penyanyi'),
(12, 'Bob', 'jakarta', 'penyanyi'),
(13, 'Bob', 'jakarta', 'penyanyi'),
(14, 'Bob', 'jakarta', 'penyanyi'),
(15, 'Bob', 'jakarta', 'penyanyi'),
(16, 'Bob', 'jakarta', 'penyanyi'),
(17, 'Bob', 'jakarta', 'penyanyi'),
(18, 'marley', 'afrika', 'penyanyi'),
(19, 'Bob', 'jakarta', 'penyanyi'),
(20, 'Bob', 'jakarta', 'penyanyi'),
(21, 'Bob', 'jakarta', 'penyanyi'),
(22, 'Bob', 'jakarta', 'penyanyi'),
(23, 'Bob', 'jakarta', 'penyanyi'),
(24, 'Bob', 'jakarta', 'penyanyi'),
(25, 'Bob', 'jakarta', 'penyanyi'),
(26, 'Bob', 'jakarta', 'penyanyi'),
(27, 'Bob', 'jakarta', 'penyanyi'),
(28, 'Bob', 'jakarta', 'penyanyi'),
(29, 'Bob', 'jakarta', 'penyanyi'),
(30, 'Bob', 'jakarta', 'penyanyi'),
(31, 'Bob', 'jakarta', 'penyanyi'),
(32, 'marley', 'afrika', 'penyanyi'),
(33, 'Bob', 'jakarta', 'penyanyi'),
(34, 'Bob', 'jakarta', 'penyanyi'),
(35, 'Bob', 'jakarta', 'penyanyi'),
(36, 'Bob', 'jakarta', 'penyanyi'),
(37, 'Bob', 'jakarta', 'penyanyi'),
(38, 'Bob', 'jakarta', 'penyanyi'),
(39, 'Bob', 'jakarta', 'penyanyi'),
(40, 'Bob', 'jakarta', 'penyanyi'),
(41, 'Bob', 'jakarta', 'penyanyi'),
(42, 'Bob', 'jakarta', 'penyanyi'),
(43, 'Bob', 'jakarta', 'penyanyi'),
(44, 'Bob', 'jakarta', 'penyanyi'),
(45, 'Bob', 'jakarta', 'penyanyi'),
(46, 'Bob', 'jakarta', 'penyanyi'),
(47, 'marley', 'afrika', 'penyanyi'),
(48, 'Bob', 'jakarta', 'penyanyi'),
(49, 'Bob', 'jakarta', 'penyanyi'),
(50, 'Bob', 'jakarta', 'penyanyi'),
(51, 'Bob', 'jakarta', 'penyanyi'),
(52, 'Bob', 'jakarta', 'penyanyi'),
(53, 'Bob', 'jakarta', 'penyanyi'),
(54, 'Bob', 'jakarta', 'penyanyi'),
(55, 'Bob', 'jakarta', 'penyanyi'),
(56, 'Bob', 'jakarta', 'penyanyi'),
(57, 'Bob', 'jakarta', 'penyanyi'),
(58, 'Bob', 'jakarta', 'penyanyi'),
(59, 'Bob', 'jakarta', 'penyanyi'),
(60, 'Bob', 'jakarta', 'penyanyi'),
(61, 'Bob', 'jakarta', 'penyanyi'),
(62, 'marley', 'afrika', 'penyanyi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
