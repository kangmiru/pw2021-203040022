-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 02:55 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040022`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `harga` int(50) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `tipe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `gambar`, `nama`, `harga`, `deskripsi`, `tipe`) VALUES
(1, 'adaptbb20.jpg', 'Adapt BB 20', 8199000, 'sepatu nike adapt merah', 'sepatu'),
(2, 'kanky.jpg', 'kanky', 155000, 'sepatu kanky ori tersedia dalam berbagai ukuran dari 36 sampai 43', 'sepatu'),
(15, '60934a7f119be.jpg', 'pittachi', 247000, 'jaket keren cowok warna hitam ', 'jaket'),
(16, 'leedoo.png', 'leedoo', 300000, 'setiap pembelian sepasang sepatu leedo mendapatkan kaos kaki gratis', 'sepatu'),
(20, '608cb7c33d78a.jpg', 'satohama', 169000, 'sepatu keren untuk cowok keren merk satohama cocok untuk joging dan hangout bersama pasangan ataupun teman', 'sepatu'),
(24, '608cbe07cbe93.jpg', 'Ziggman', 65000, 'sepatu sport murah yang nyaman digunakan saat olahraga', 'sepatu'),
(25, '608fa73d3b7df.jpg', 'Huarache', 247000, 'sepatu keren untuk cowok keren', 'sepatu'),
(26, '608fa77a91b02.jpg', 'Nike Yesus', 2470000, 'sepatu nike baru nike yesus', 'sepatu'),
(27, '608fa872aec00.jpg', 'jaket hodie abu-abu', 247000, 'jaket keren cowok', 'pakaian'),
(28, '608fa8cf73ad7.jpg', 'hodie nike', 300000, 'jaket keren cowok untuk olah raga', 'jaket'),
(31, 'embos.jfif', 'Embos', 155000, 'sepatu keren untuk cowok keren', 'sport');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin', '12345'),
(2, 'admin', 'admin', 'admin1', '$2y$10$pBCV0buL1J2yXefkFpnUJe5FAwfb/JXy9fuWT.iUp3393f0ZxmxjW'),
(3, 'hafadz', 'mirufadz25@gmail.com', 'hafadz', '$2y$10$bPkTHxQBNqseQBvitiBtJeULsHdHe./qAtdOXADmOlzYHS8kHAJdO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
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
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
