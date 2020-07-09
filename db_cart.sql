-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Agu 2017 pada 18.24
-- Versi Server: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_cart`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_produk`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) DEFAULT NULL,
  `product_price` double DEFAULT NULL,
  `product_image` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;



INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Converse Jack Purcell', 500000, '01.jpg'),
(2, 'Adidas Stan Smith', 600000, '02.jpg'),
(3, 'Vans Checkerboard Slip-On', 800000, '03.jpg'),
(4, 'Superga 2311-Cotu', 300000, '04.jpg'),
(5, 'League Sanchez La M. Sneakers', 350000, '05.jpg'),
(6, 'Piero Jogger Full Mesh', 350000, '06.jpg'),
(7, 'Brodo Origin Full Black', 450000, '07.jpg'),
(8, 'Puma Suede Classic All Black', 900000, '08.jpg'),
(9, 'Amble Jarvis Grey', 500000, '09.jpg');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
