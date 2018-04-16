-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2017 at 09:35 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(1, 'Male'),
(2, 'Female'),
(3, 'Kids'),
(4, 'Baby'),
(5, 'Teen'),
(6, 'Infant');

-- --------------------------------------------------------

--
-- Table structure for table `ecom_products`
--

CREATE TABLE `ecom_products` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `product_desc` varchar(1000) NOT NULL,
  `color` varchar(200) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category` varchar(100) NOT NULL,
  `brand_name` tinyint(2) NOT NULL,
  `timing` tinyint(2) NOT NULL,
  `occation_id` int(11) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `sku_id` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `item_image1` varchar(200) NOT NULL,
  `item_image2` text NOT NULL,
  `item_image3` text NOT NULL,
  `item_image4` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ecom_products`
--

INSERT INTO `ecom_products` (`id`, `title`, `product_desc`, `color`, `category_id`, `sub_category`, `brand_name`, `timing`, `occation_id`, `unit`, `price`, `discount`, `size_id`, `sku_id`, `quantity`, `item_image1`, `item_image2`, `item_image3`, `item_image4`, `updated_at`, `created_at`) VALUES
(1, 'ddd', 'dd', 'dd', 1, '1', 1, 2, 1, 'dd', 33, 33, 1, 'ghfgh', 4, 'Desert.jpg', 'Jellyfish.jpg', 'Lighthouse.jpg', 'Penguins.jpg', '2017-12-09 02:18:20', '2017-12-09 02:18:20');

-- --------------------------------------------------------

--
-- Table structure for table `occation`
--

CREATE TABLE `occation` (
  `occation_id` int(11) NOT NULL,
  `occation_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `occation`
--

INSERT INTO `occation` (`occation_id`, `occation_name`) VALUES
(1, 'Summer'),
(2, 'Winter'),
(3, 'Eid-Ul-Fiter'),
(4, 'Eid-Ul-Adha'),
(5, 'Nobo Borsho'),
(6, 'New Year');

-- --------------------------------------------------------

--
-- Table structure for table `prod_size`
--

CREATE TABLE `prod_size` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `size` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prod_size`
--

INSERT INTO `prod_size` (`id`, `category_id`, `size`) VALUES
(1, 1, 'S'),
(2, 1, 'M'),
(3, 1, 'L'),
(4, 1, 'XL'),
(5, 1, 'XXL'),
(6, 2, 'S'),
(7, 2, 'M'),
(8, 2, 'L');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ecom_products`
--
ALTER TABLE `ecom_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `occation_id` (`occation_id`);

--
-- Indexes for table `occation`
--
ALTER TABLE `occation`
  ADD PRIMARY KEY (`occation_id`);

--
-- Indexes for table `prod_size`
--
ALTER TABLE `prod_size`
  ADD PRIMARY KEY (`id`),
  ADD KEY `size_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ecom_products`
--
ALTER TABLE `ecom_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `occation`
--
ALTER TABLE `occation`
  MODIFY `occation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `prod_size`
--
ALTER TABLE `prod_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `ecom_products`
--
ALTER TABLE `ecom_products`
  ADD CONSTRAINT `ecom_products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `ecom_products_ibfk_2` FOREIGN KEY (`occation_id`) REFERENCES `occation` (`occation_id`);

--
-- Constraints for table `prod_size`
--
ALTER TABLE `prod_size`
  ADD CONSTRAINT `prod_size_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
