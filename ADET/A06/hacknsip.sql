-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2025 at 05:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hacknsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `name`) VALUES
(1, 'Hot'),
(2, 'Cold Brew & Iced Coffee'),
(3, 'Espresso-Based'),
(4, 'Milk Based'),
(5, 'Matcha Series'),
(6, 'Frappes'),
(7, 'Pastries & Snacks');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `code` varchar(20) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `categoryID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `name`, `code`, `price`, `img`, `categoryID`) VALUES
(1, 'Cafe Latte', 'CL', 100.00, 'images/hot.png', 1),
(2, 'Hot Americano', 'HAMER', 70.00, 'images/hot.png', 1),
(3, 'Hot Cappuccino', 'HCAP', 80.00, 'images/hot.png', 1),
(4, 'Hot Mocha', 'HM', 90.00, 'images/hot.png', 1),
(5, 'Hot Caramel Macchiato', 'HCM', 90.00, 'images/hot.png', 1),
(6, 'Flat White', 'FM', 70.00, 'images/hot.png', 1),
(7, 'Hot Chocolate', 'HCC', 80.00, 'images/hot.png', 1),
(8, 'Irish Coffee', 'ICF', 120.00, 'images/hot.png', 1),
(9, 'Chai Latte', 'CHAI', 95.00, 'images/hot.png', 1),
(10, 'Hot Vanilla Latte', 'HVLL', 100.00, 'images/hot.png', 1),
(11, 'Classic Cold Brew', 'CCB', 90.00, 'images/ccoldbrew.png', 2),
(12, 'Vanilla Cream Cold Brew', 'VCCB', 100.00, 'images/vcreambrew.png', 2),
(13, 'Salted Caramel Cold Brew', 'SCCB', 105.00, 'images/scaramelbrew.png', 2),
(14, 'Chocolate Cream Cold Brew', 'CCCB', 110.00, 'images/chococreambrew.png', 2),
(15, 'Brown Sugar Cold Brew', 'BSCB', 115.00, 'images/bsugarbrew.png', 2),
(16, 'Iced Americano', 'ICAM', 80.00, 'images/icedamericano.png', 2),
(17, 'Iced Mocha', 'ICM', 95.00, 'images/icedmocha.png', 2),
(18, 'Iced Spanish Latte', 'ICSL', 105.00, 'images/icedspanishlatte.png', 2),
(19, 'Iced Macchiato', 'ICMAC', 90.00, 'images/icedmacchiato.png', 2),
(20, 'Iced Hazelnut Coffee', 'IHC', 90.00, 'images/icedhazelnutcof.png', 2),
(21, 'Iced Hazelnut Latte', 'IHL', 90.00, 'images/icedhazelnutlat.png', 2),
(22, 'Iced Caramel Latte', 'ICCL', 100.00, 'images/icedcaramellat.png', 2),
(23, 'Iced French Vanilla Latte', 'ICFVL', 105.00, 'images/icedfrenchvanillat.png', 2),
(24, 'Flat White', 'FLWHITE', 85.00, 'images/espresso.png', 3),
(25, 'Espresso Macchiato', 'EMACCH', 75.00, 'images/espresso.png', 3),
(26, 'Cappuccino', 'CAPPUCCINO', 80.00, 'images/espresso.png', 3),
(27, 'Americano', 'AMERICANO', 70.00, 'images/espresso.png', 3),
(28, 'Milky Choco', 'MLCHOCO', 95.00, 'images/millkychoco.png', 4),
(29, 'Milky Caramel', 'MLC', 100.00, 'images/milkycaramel.png', 4),
(30, 'Milky Salted Caramel', 'MLSC', 100.00, 'images/milkysaltedcaramel.png', 4),
(31, 'Milky Butterscotch', 'MLBS', 100.00, 'images/milkybutterscotch.jpg', 4),
(32, 'Matcha Latte', 'MLATTE', 120.00, 'images/matchalatte.png', 5),
(33, 'Matcha Espresso', 'ME', 110.00, 'images/matchaespresso.png', 5),
(34, 'Matcha Strawberry', 'MS', 120.00, 'images/matchastrawberry.png', 5),
(35, 'Caramel Frappe', 'CARFRAP', 100.00, 'images/caramelfrappe.png', 6),
(36, 'Mocha Frappe', 'MOCHFRAP', 105.00, 'images/mochafrappe.png', 6),
(37, 'Java Chip Frappe', 'JCFRAP', 130.00, 'images/javachipfrappe.jpg', 6),
(38, 'White Mocha Frappe', 'WMFRAP', 120.00, 'images/whitemochafrappe.jpg', 6),
(39, 'Cookies and Cream Frappe', 'CCFRAP', 130.00, 'images/ccfrappe.jpg', 6),
(40, 'Chocolate Frappe', 'CFRAP', 100.00, 'images/chocofrappe.jpg', 6),
(41, 'Avocado Frappe', 'AVFRAP', 150.00, 'images/avocadofrappe.jpg', 6),
(42, 'Plain Croissant', 'PCROIS', 60.00, 'images/pcroissant.jpg', 7),
(43, 'Tiramisu Croissant', 'TCROIS', 80.00, 'images/tcroissant.jpg', 7),
(44, 'Caramel Biscoff Croissant', 'CBROIS', 100.00, 'images/cbcroissant.jpg', 7),
(45, 'Blueberry Muffin', 'BBMUFFIN', 60.00, 'images/pcroissant.webp', 7),
(46, 'Banana Muffin', 'BMUFFIN', 60.00, 'images/bmuffin.jpg', 7),
(47, 'Cinnamon Roll', 'CR', 80.00, 'images/cinnamonroll.jpg', 7),
(48, 'Nutella S mores Cookie', 'NSC', 60.00, 'images/nutella.jpg', 7),
(49, 'French Fries', 'FF', 70.00, 'images/fries.jpg', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `categoryID` (`categoryID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`categoryID`) REFERENCES `categories` (`categoryID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
