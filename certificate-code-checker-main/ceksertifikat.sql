-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 23, 2024 at 07:03 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ceksertifikat`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftaralumni`
--

CREATE TABLE `daftaralumni` (
  `id_alumni` int NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `daftaralumni`
--

INSERT INTO `daftaralumni` (`id_alumni`, `kode`, `nama`, `program`, `keterangan`) VALUES
(1, 'misel', 'Misel Putri', 'XIT-Platinum Training Ethical Elite Hacker', 'Lulus'),
(2, 'deni', 'deni', 'Ethical Basic Web Hacking', 'lulus');

-- --------------------------------------------------------

--
-- Table structure for table `daftaruser`
--

CREATE TABLE `daftaruser` (
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinytext NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `daftaruser`
--

INSERT INTO `daftaruser` (`nama`, `username`, `password`, `status`, `email`) VALUES
('admin', 'admin', '$2y$10$uG/4AhDmtfPcWuqJE2TTw.sKyzgEP6PUGpVJY7s7NZUePXeCAQp82', 'admin', 'admin@gmail.com'),
('admin', 'admin', '$2y$10$haXQk8u3SJw/lt8TPTKEAOR22XgRr/U/5zXc5XQIzgqvxW9iWFmTO', 'admin', 'admin@gmail.com'),
('admin1', 'admin1', '$2y$10$wRppe5RiDw/jcBKs4tmbQe.UKCzSbFw8T1kKBR2cFm68aQ/K2XNwO', 'admin', 'admin1@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftaralumni`
--
ALTER TABLE `daftaralumni`
  ADD PRIMARY KEY (`id_alumni`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftaralumni`
--
ALTER TABLE `daftaralumni`
  MODIFY `id_alumni` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
