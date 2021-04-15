-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2021 at 05:28 AM
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
-- Table structure for table `fashion`
--

CREATE TABLE `fashion` (
  `nomor` char(5) NOT NULL,
  `img` varchar(100) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `deskripsi` varchar(250) DEFAULT NULL,
  `harga` int(25) NOT NULL,
  `kategori` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fashion`
--

INSERT INTO `fashion` (`nomor`, `img`, `nama`, `deskripsi`, `harga`, `kategori`) VALUES
('001', 'adaptbb20.jpg', 'Adapt BB 2.0', 'Sepatu olahraga yang nyaman digunakan, tersedia dari ukuran 38-45', 9000000, 'Sport'),
('002', 'embos.jfif', 'Embos', 'Sepatu yang membuat anda menjadi lebih keren 5x lipat', 1800000, 'Casual'),
('003', 'huarache.jpg', 'Huarache', 'Sepatu casual yang nyaman diguanakan untuk kegiatan sehari-hari', 430000, 'Casual'),
('004', 'kanky.jpg', 'Kanky', 'Sepatu yang cocok untuk pergi kesekolah dan untuk main', 350000, 'Casual'),
('005', 'leedoo.png', 'Leedoo', 'Tersedia dalam ukuran 38-46, mendapat gratis sepasang kaos kaki', 203000, 'Casual'),
('006', 'meow.jfif', 'Meow', 'Sepatu wanita lucu dan murah', 26000, 'Casual'),
('007', 'nikeyesus.jpg', 'Nike Yesus', 'Produk baru nike segra beli produk terbatas', 42000000, 'Sport'),
('008', 'satohama.jpg', 'Satohama', 'Sepatu casual yang membuat anda menjadi tampan dan berani', 800000, 'Casual'),
('009', 'sneaker_H2252.jfif', 'Sneaker H 2252', 'Sepatu untuk jalan-jalan santai', 1700000, 'Casual'),
('010', 'ziggman.jpg', 'Ziggman', 'Sepatu lari murah warna merah dan hitam', 65000, 'Sport');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fashion`
--
ALTER TABLE `fashion`
  ADD PRIMARY KEY (`nomor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
