-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2020 at 04:30 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desain_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_value_db`
--

CREATE TABLE `admin_value_db` (
  `id` int(11) NOT NULL,
  `role` varchar(10) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_value_db`
--

INSERT INTO `admin_value_db` (`id`, `role`, `level`) VALUES
(1, 'admin', '1'),
(2, 'user', '2');

-- --------------------------------------------------------

--
-- Table structure for table `header_tbl`
--

CREATE TABLE `header_tbl` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `angka` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `header_tbl`
--

INSERT INTO `header_tbl` (`id`, `title`, `subject`, `gambar`, `angka`) VALUES
(1, 'CALL US 24/7', '0896-3672-4042', 'clr-phone-call-31.png', 3),
(2, 'EMAIL US', 'chrryctr1509@gmail.com', 'clr-mail-51.png', 8),
(4, '7 DAYS A WEEK', '09.00 WIB - 17.00 WIB', 'clr-clock-51.png', 9);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_tbl`
--

CREATE TABLE `kategori_tbl` (
  `id` int(11) NOT NULL,
  `kategori_id` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `slug_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_tbl`
--

INSERT INTO `kategori_tbl` (`id`, `kategori_id`, `kategori`, `icon`, `slug_kategori`) VALUES
(20, '', 'X-BANNER', '', 'x-banner'),
(21, '', 'WEDDING CARD', '', 'wedding-card'),
(22, '', 'INVITATION CARD', '', 'invitation-card'),
(23, '', 'MUG', '', 'mug'),
(24, '', 'T-SHIRT', '', 't-shirt'),
(33, '', 'BROSURE', '', 'brosure');

-- --------------------------------------------------------

--
-- Table structure for table `login_tbl`
--

CREATE TABLE `login_tbl` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `role` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` varchar(255) NOT NULL,
  `diskon` varchar(255) NOT NULL,
  `gambar` text NOT NULL,
  `slug_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `title`, `kategori`, `slug`, `deskripsi`, `harga`, `diskon`, `gambar`, `slug_kategori`) VALUES
(19, 'WEDDING CARD MINIMALIS', 'WEDDING CARD', 'wedding-card-minimalis', 'Wedding card custom', '1500', '', 'IMG-20200309-WA0046.jpg', 'wedding-card'),
(20, 'BANNER CUSTOM', 'X-BANNER', 'banner-custom', '<p>BANNER CUSTOM</p>', '25000', '', 'creative-business-web-social-media-banner_1389-685.jpg', 'x-banner'),
(21, 'INVITATION CARD CUSTOM', 'INVITATION CARD', 'invitation-card-custom', '<p>Kartu undangan custom</p>', '5000', '', 'childrens-birthday-card-concept_23-2148472006.jpg', 'invitation-card'),
(22, 'MUG CUSTOM', 'MUG', 'mug-custom', '<p>MUG CUSTOM MURAH</p>', '10000', '', 'white-mug-cup-mockup-your-design-grey-background_34168-1140.jpg', 'mug'),
(23, 'CUSTOM T-SHIRT', 'T-SHIRT', 'custom-t-shirt', '<p>BAJU CUSTOM SATUAN DAN LUSINAN</p>', '100000', '', '05.jpg', 't-shirt'),
(24, 'BROSURE CUSTOM A4', 'X-BANNER', 'brosure-custom-a4', '<p>BROSURE CUSTOM A4</p>', '10000', '', 'modern-annual-report-brochure-with-abstract-shapes_1361-1701.jpg', 'x-banner');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(100) NOT NULL,
  `level` varchar(10) NOT NULL COMMENT '1:admin 2:user',
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `level`, `email`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '1', 'admin1211@gmail.com'),
(2, 'Cherry', 'c7a4476fc64b75ead800da9ea2b7d072', 'cherry', '2', 'chrryctr1509@gmail.com'),
(8, 'sqw', '22f75d966798ae7995aae100bcf80142', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_value_db`
--
ALTER TABLE `admin_value_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_tbl`
--
ALTER TABLE `header_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_tbl`
--
ALTER TABLE `kategori_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_tbl`
--
ALTER TABLE `login_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_value_db`
--
ALTER TABLE `admin_value_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `header_tbl`
--
ALTER TABLE `header_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori_tbl`
--
ALTER TABLE `kategori_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `login_tbl`
--
ALTER TABLE `login_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
