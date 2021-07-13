-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2021 at 05:07 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `P_id` int(11) NOT NULL,
  `P_Name` text NOT NULL,
  `P_Desc` text NOT NULL,
  `P_Category` text NOT NULL,
  `P_Price` float NOT NULL,
  `P_Picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`P_id`, `P_Name`, `P_Desc`, `P_Category`, `P_Price`, `P_Picture`) VALUES
(2, 'Pen', 'Matador', 'stationary', 10, '../file/Screenshot (187).png'),
(3, 'Table', 'wood', 'furniture', 3500, '../file/Screenshot (188).png'),
(4, 'Mouse', 'Logitech', 'accesories', 700, '../file/sgs.jpg'),
(5, 'Water', 'Fresh drinking water(2 liter)', 'Food', 40, '../file/fdfdfd.jpg'),
(6, 'Water', 'Fresh drinking water(2 liter)', 'Food', 40, '../file/fdfdfd.jpg'),
(7, 'Sunglass', 'Raybon', 'eye wear', 2000, '../file/c cx.jpg'),
(8, 'Charger', 'Mobile charger(Type-C)', 'accesories', 1200, '../file/dfkjaf.jpg'),
(9, 'Wifi-Router', 'TP-LINK', 'accesories', 3000, '../file/ffafa.jpg'),
(10, 'Bulb', 'Philips (20w)', 'Electronic', 100, '../file/fa.jpg'),
(11, 'Shoe', 'Adidas', 'Foot wear', 4000, '../file/fdf.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`P_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `P_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
