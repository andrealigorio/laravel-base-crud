-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 14, 2021 at 02:09 PM
-- Server version: 5.7.24
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
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `dresses`
--

CREATE TABLE `dresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT 'img_default.jpg',
  `color` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` tinyint(4) NOT NULL,
  `price` double(6,2) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dresses`
--

INSERT INTO `dresses` (`id`, `name`, `size`, `image`, `color`, `quantity`, `price`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Tommy Hilfiger', 'M', 'tommy-hilfiger-t-shirt.jpg', 'Blue', 10, 39.99, 'LOGO TEE - T-shirt con stampa', NULL, NULL),
(2, 'Jack & Jones', 'M', 'Jack-&-Jones.jpg', 'Black', 6, 99.99, 'JPRBLAFRANCO SUIT - Completo', NULL, NULL),
(3, 'Lindbergh', 'S', 'Lindbergh.jpg', 'Grey', 12, 49.99, 'CLUB PANTS - Pantaloni', NULL, NULL),
(4, 'Timberland', 'M', 'Timberland.jpg', 'Grape', 15, 22.99, 'T-shirt basic', NULL, NULL),
(5, 'Pier One', 'L', 'Pier-one.jpg', 'Olive', 13, 34.99, 'Pantaloni cargo', NULL, NULL),
(6, 'Tommy Hilfiger', 'S', 'Tommy-Hilfiger-red.jpg', 'Red', 11, 25.99, 'TEE - T-shirt con stampa', NULL, NULL),
(13, 'Prodotto Prova', 'M', NULL, 'Green', 1, 25.99, 'Descrizione Prova', '2021-05-14 12:08:25', '2021-05-14 12:08:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dresses`
--
ALTER TABLE `dresses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dresses`
--
ALTER TABLE `dresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
