-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2023 at 02:19 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `kuliner`
--

CREATE TABLE `kuliner` (
  `id` int NOT NULL,
  `nama_makanan` varchar(255) NOT NULL,
  `deskripsi_makanan` varchar(255) NOT NULL,
  `harga` int NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kuliner`
--

INSERT INTO `kuliner` (`id`, `nama_makanan`, `deskripsi_makanan`, `harga`, `gambar`) VALUES
(2, 'Saumongravlax', 'hwefufhwf', 50, 'm2.png'),
(3, 'carbonara', 'nsnfjfeanff', 50, 'm3.jpg'),
(4, 'avocado salad', 'kshsbj', 30, 'm4.jpg'),
(6, 'sushi', 'fhtfhn', 35000, 'm1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `pasword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `pasword`) VALUES
(2, 'admin', '$2y$10$q2gHQIVavI4kO4MGCCwHQepAlThNInvcqt8iTvVIiSkzZ6ussE/0e'),
(3, 'makanan', '$2y$10$T9nwRf3OZKyxw.monWxLB.cQYBqfibjiwy91MJ32CLStfFDUSn6Yq'),
(4, 'total', '$2y$10$WdGf52wkPujNzvnmzZVQBuMzvjWFK9qyE93bur5vebUj7O5aGvJPS'),
(5, 'run', '$2y$10$R369X83Q5KbM0/FkEzxnfebRyxFpaKt.sQzAWE3HYeRmYU04ek0MS'),
(6, 'memesan', '$2y$10$MsQP2kfrlcertJvqeavy2ekWewFENGBEj2Wulv8T4X7UON4mvE0Aa'),
(7, 'serba', '$2y$10$nSp3y8GxZACqEhxv4ulSdOFL3vvha8qj/EQ0xkS6HSqFHvrw4u6Ea'),
(8, 'ika', '$2y$10$begLmz4KdpY1L.vLhjoEzuMej1M9t4h/cz3Fusi5nn5.sZO8mAiny');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kuliner`
--
ALTER TABLE `kuliner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kuliner`
--
ALTER TABLE `kuliner`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
