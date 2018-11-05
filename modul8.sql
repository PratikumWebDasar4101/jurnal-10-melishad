-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2018 at 04:47 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modul8`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurnal`
--

CREATE TABLE `jurnal` (
  `nim` varchar(10) NOT NULL,
  `namadepan` text NOT NULL,
  `namabelakang` text NOT NULL,
  `email` text NOT NULL,
  `kelas` text NOT NULL,
  `hobi` text NOT NULL,
  `genre` text NOT NULL,
  `wisata` text NOT NULL,
  `ttl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurnal`
--

INSERT INTO `jurnal` (`nim`, `namadepan`, `namabelakang`, `email`, `kelas`, `hobi`, `genre`, `wisata`, `ttl`) VALUES
('6701174009', 'debby', 'melishawati', 'debbymelisya99@gmail.com', 'd3mi41-01', 'Memancing, Belanja, Belajar', 'Horor, Action, Drama', 'Array', '2018-11-11'),
('6701174008', 'dea', 'deee', 'debbymelisya99@gmail.com', 'd3mi41-02', 'Olahraga', 'Array', 'Tanjung Selor', '2018-11-11'),
('6701174007', 'zaaaa', 'iii', 'debbymelisya99@gmail.com', 'd3mi41-02', 'Memancing, Olahraga', 'Array', 'Tanjung Selor', '2018-10-28'),
('6701174088', 'momon', 'lalala', 'debby@gmail.com', 'd3mi41-02', 'Memancing, Olahraga', 'Array', 'Tanjung Selor', '2018-11-11'),
('6701174089', 'momon', 'baru', 'debby@gmail.com', 'd3mi41-01', 'Olahraga, Menggambar', 'Array', 'Bali', '2018-11-04'),
('6701174077', 'zizi', 'laila', 'debby@gmail.com', 'd3mi41-01', 'Memancing, Olahraga', 'Array', 'Bali', '2018-11-04'),
('6701174078', 'woww', 'riri', 'debby@gmail.com', 'd3mi41-01', 'Memancing, Menggambar', 'Anime', 'Jakarta', '2018-11-04'),
('6701174044', 'deaaa', 'amandaaa', 'debbymelisya99@gmail.com', 'd3mi41-01', 'Olahraga, Menggambar, Belanja', 'Horor, Anime', 'Bali, Tanjung Selor', '2018-12-02');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('debby', '12345678'),
('gendut', '124'),
('momon', '1234567'),
('sisi', '123'),
('zizi', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
