-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 15, 2018 at 09:12 AM
-- Server version: 5.6.38-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fash_ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(7, 'men'),
(8, 'women'),
(9, 'baby'),
(10, 'kids'),
(11, 'teen'),
(12, 'other'),
(13, 'festi'),
(14, 'value'),
(15, 'example'),
(16, 'sale'),
(17, 'new');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `password` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `email`, `mobile`, `address`, `password`, `updated_at`, `created_at`) VALUES
(32, 'mmuksud@yahoo.com', '01719370201', '365/ 7-8 Manna Sarani , west Shewrapara, Mirpur , Dhaka', '27091981', '2018-04-02 07:22:20', '2018-04-02 07:22:20'),
(31, 'sazzad.muksud@gmail.com', '01719370201', '765/1,2 Shewrapara , Begum rokeya , Sarani, Mirpur , Dhaka,', '1981sazzad', '2018-03-21 06:47:58', '2018-03-21 06:47:58'),
(33, 'sazzad@yahoo.com', '01719370201', 'tyyuufghhjk', '27091981', '2018-04-06 12:08:32', '2018-04-06 12:08:32');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(11) NOT NULL,
  `color_code` varchar(10) NOT NULL,
  `ecom_products_id` int(11) NOT NULL,
  `major_color` varchar(200) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `color_code`, `ecom_products_id`, `major_color`, `category_id`) VALUES
(25, '#000066', 25, 'Dark Blue', 8),
(26, '#cc0000', 28, 'RED', 7),
(28, ' #008ae6', 31, 'BLUE', 10),
(29, '  #007acc', 32, 'BLUE', 10),
(30, ' #00001a', 24, 'NAVY', 8),
(31, '#ff0000', 33, 'RED', 8),
(32, '#4899b9', 27, 'BLUE', 7),
(33, '  #ff0000', 34, 'RED', 7),
(34, '#fafdf2', 35, 'White', 7),
(35, '#ff9999', 36, 'PINK', 10),
(36, '#66c2ff', 37, 'Blue ', 10),
(37, '#4d79ff', 38, 'Navy', 7),
(38, '#046fac', 39, 'BLUE', 10),
(39, '#fe9bb3', 40, 'PINK', 9),
(40, '#d50000', 41, 'RED', 10),
(41, '#ff751a', 42, 'ORANGE ', 10);

-- --------------------------------------------------------

--
-- Table structure for table `ecom_products`
--

CREATE TABLE `ecom_products` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `product_desc` varchar(1000) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category` varchar(100) NOT NULL,
  `brand_name` tinyint(2) NOT NULL,
  `timing` tinyint(2) NOT NULL,
  `occation_id` int(11) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `tax` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
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

INSERT INTO `ecom_products` (`id`, `title`, `product_desc`, `category_id`, `sub_category`, `brand_name`, `timing`, `occation_id`, `unit`, `price`, `discount`, `tax`, `total_price`, `sku_id`, `quantity`, `item_image1`, `item_image2`, `item_image3`, `item_image4`, `updated_at`, `created_at`) VALUES
(24, 'Dark Navy Half Silk Jamdani Saree', 'Dark Navy Half Silk jamdani Saree with all over red buti Without Blouse piece', 8, 'Women Saree', 2, 2, 7, 'PCS', 1400, 0, 0, 1400, 'SRE0101042168', 1, '1516728143903440.jpg', '1516728143677951.jpg', '151672814353893.jpg', '1516728143162788.jpg', '2018-04-01 16:58:01', '2018-01-23 11:52:25'),
(25, 'Indian Blue Silk Saree', 'Indian Blue Silk Saree , Chocolate achol with golden Work Without Blouse Piece', 8, 'Women Saree', 2, 2, 7, 'Pcs', 1500, 0, 0, 1500, 'SR02042017', 1, '151690847896144.jpg', '1516908478990981.jpg', '1516908480983832.jpg', '1516908480705197.jpg', '2018-01-25 13:58:00', '2018-01-25 13:58:00'),
(27, 'Sky Blue Dobby Executive Shirt', 'Sky Blue , 100% Cotton, Dobby Weave, Yarn Dyed Shirt', 7, 'Men Shirt', 1, 2, 7, 'Pcs', 905, 0, 0, 905, 'STC28011701', 10, '1517158810988822.jpg', '151715881012549.jpg', '1517158810647584.jpg', '1517158810626805.jpg', '2018-01-28 11:30:10', '2018-01-28 11:30:10'),
(28, 'Red Contrast Sleeve Casual Panjabi', '100% Cotton, Contast Sleeve , Regular Fit , Casual Panjabi', 7, 'Men Panjabi', 2, 2, 5, 'Pcs', 1165, 0, 0, 1165, 'PJ29011801', 1, '1517250118570308.jpg', '1517250118905699.jpg', '1517250118924680.jpg', '1517250118534827.jpg', '2018-01-29 12:51:58', '2018-01-29 12:51:58'),
(31, 'COTTON PRINTED BOYS  HALF SHIRT', 'COTTON PRINTED BOYS  HALF SHIRT- MADE BY INDIA', 10, 'Kids Boys Shirt', 2, 2, 7, 'Pcs', 620, 0, 0, 620, 'STB0125032168', 1, '1522260397533219.jpg', '1522260397486925.jpg', '1522260397618030.jpg', '1522260397508999.jpg', '2018-03-28 12:36:37', '2018-03-28 12:36:37'),
(32, 'COTTON  BOYS BLUE   HALF SHIRT', 'COTTON  BOYS  BLUE HALF SHIRT - MADE BY INDIA', 10, 'Kids Boys Shirt', 2, 2, 7, 'PCS', 520, 0, 0, 520, 'STB0225032168', 1, '1522544335356313.jpg', '1522544335813987.jpg', '1522544335396226.jpg', '1522544335223717.jpg', '2018-03-31 19:28:55', '2018-03-31 19:28:55'),
(33, 'RED HALF SILK JAMDANI SAREE', 'RED HALF SILK JAMDANI SAREE WITH  GOLDEN BUTI IN ACHOL WITHOUT BLOUSE PIECE', 8, 'Women Saree', 2, 2, 5, 'PCS', 1300, 0, 0, 1300, 'SRE0302042168', 1, '152260322896559.jpg', '1522603228692562.jpg', '1522603228325082.jpg', '1522603228692074.jpg', '2018-04-01 11:50:28', '2018-04-01 11:50:28'),
(34, 'COTTON MIX RED GINGHUM CHECK SHIRT', 'COTTON MIX RED GINGHUM CHECK, YARN DYE, PLAIN WEAVE SHIRT', 7, 'Men Shirt', 1, 2, 7, 'PCS', 550, 0, 0, 550, 'STE0302042168', 5, '1522630967708666.jpg', '1522630967747677.jpg', '1522630967162740.jpg', '1522630967420560.jpg', '2018-04-01 19:32:47', '2018-04-01 19:32:47'),
(35, 'OFF WHITE BODY GOLDEN  SLEEVE CASUAL PANJABI', '100%  COTTON , OFF WHITE  BODY GOLDEN (CONTRAST)   SLEEVE CASUAL PANJABI', 7, 'Men Panjabi', 2, 2, 5, 'PCS', 1165, 0, 0, 1165, 'PJM02042168', 4, '1522675045975514.jpg', '1522675045866420.jpg', '1522675045421341.jpg', '1522675045670286.jpg', '2018-04-02 07:47:25', '2018-04-02 07:47:25'),
(36, 'COTTON  BOYS  HALF SHIRT WITH  PRINT AND EMBROIDERY', 'COTTON  BOYS  HALF SHIRT WITH  PRINT AND EMBROIDERY WORK- MADE BY INDIA', 10, 'Kids Boys Shirt', 2, 2, 1, 'PCS', 610, 0, 0, 610, 'STB0325032168', 3, '152267773823707.jpg', '1522677738153822.jpg', '1522677738262927.jpg', '152267773878161.jpg', '2018-04-02 08:32:18', '2018-04-02 08:32:18'),
(37, 'COTTON YARN DYE  BOYS  HALF SHIRT', 'COTTON YARN DYE  BOYS  HALF SHIRT EMBROIDERY WORK - MADE BY INDIA', 10, 'Kids Boys Shirt', 2, 2, 1, 'PCS', 610, 0, 0, 610, 'STB0425032168', 2, '1522683527548066.jpg', '1522683527554735.jpg', '1522683527258258.jpg', '1522683527974637.jpg', '2018-04-02 15:48:21', '2018-04-02 10:08:47'),
(38, 'COTTON NAVY BLUE PRINTED MENZ T-SHIRT', '100% COTTON NAVY BLUE PRINTED T-SHIRT - MADE IN THAILAND', 7, 'Men T-Shirt', 2, 2, 5, 'PCS', 550, 0, 0, 550, 'TSM01002042168', 2, '1522687842679515.jpg', '1522687842196910.jpg', '1522687842242741.jpg', '1522687842484217.jpg', '2018-04-02 11:20:42', '2018-04-02 11:20:42'),
(39, 'WHITE BLUE MULTI COLOR BALL PRINTED FROCK', 'WHITE BLUE MULTI COLOR BALL PRINTED FROCK - MADE IN THAILAND', 10, 'Kids Girls Frock', 2, 2, 5, 'PCS', 1350, 0, 0, 1350, 'FRK0110042168', 6, '1523318389364229.jpg', '1523318389541259.jpg', '1523318389542955.jpg', '1523318389121685.jpg', '2018-04-09 18:29:49', '2018-04-09 18:29:49'),
(40, 'PINK CHECK YARN DYE BABY FROCK WITH SOFT COTTON LINING', 'PINK CHECK YARN DYE BABY FROCK WITH SOFT COTTON LINING - MADE IN THAILAND', 9, 'Baby Girl Frock', 2, 2, 7, 'PCS', 1120, 0, 0, 1120, 'FRK0210042168', 6, '1523383067201397.jpg', '1523383067871539.jpg', '1523383067185472.jpg', '1523383067957321.jpg', '2018-04-10 12:27:47', '2018-04-10 12:27:47'),
(41, 'RED - GREEN JERSEY STRIPE BOYS POLO SHIRT , MADE IN THAILAND', '100% COTTON YARN DYE RED - GREEN - RED JERSEY STRIPE BOYS POLO SHIRT; MADE IN THAILAND', 10, 'Kids Boys Polo Shirt', 2, 2, 1, 'PCS', 550, 0, 0, 550, 'POB0104132168', 3, '1523621826266427.jpg', '1523621826325403.jpg', '1523621826266011.jpg', '152362182686718.jpg', '2018-04-13 06:47:06', '2018-04-13 06:47:06'),
(42, 'YELLOW - ORANGE STRIPE  JERSEY FABRICS BOYS POLO SHIRT , MADE IN THAILAND', '100% COTTON YARN DYE YELLOW - ORANGE - STRIPE JERSEY FABRICS  BOYS POLO SHIRT; MADE IN THAILAND', 10, 'Kids Boys Polo Shirt', 2, 2, 1, 'PCS', 550, 0, 0, 550, 'POB0204132168', 3, '1523705501271961.jpg', '1523705501924982.jpg', '1523705501484142.jpg', '152370550192919.jpg', '2018-04-14 11:39:42', '2018-04-14 06:01:41'),
(43, 'YELLOW -PURPLE STRIPE  JERSEY FABRICS BOYS POLO SHIRT , MADE IN THAILAND', '100% COTTON YARN DYE YELLOW - PURPLE - STRIPE JERSEY FABRICS  BOYS POLO SHIRT; MADE IN THAILAND', 10, 'Kids Boys Polo Shirt', 2, 2, 1, 'PCS', 550, 0, 0, 550, 'POB0304132168', 1, '1523706199824514.jpg', '1523706199149437.jpg', '1523706199173545.jpg', '1523706199752286.jpg', '2018-04-14 06:13:19', '2018-04-14 06:13:19');

-- --------------------------------------------------------

--
-- Table structure for table `occations`
--

CREATE TABLE `occations` (
  `occation_id` int(11) NOT NULL,
  `occation_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `occations`
--

INSERT INTO `occations` (`occation_id`, `occation_name`) VALUES
(1, 'Summer'),
(2, 'Winter'),
(3, 'Eid-Ul-Fiter'),
(4, 'Eid-Ul-Adha'),
(5, 'Nobo Borsho'),
(6, 'New Year'),
(7, 'no occation');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `skuid` varchar(1000) NOT NULL,
  `qty` varchar(1000) NOT NULL,
  `color` varchar(1000) NOT NULL,
  `size` varchar(1000) NOT NULL,
  `orderid` varchar(1000) NOT NULL,
  `client_id` varchar(2000) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `skuid`, `qty`, `color`, `size`, `orderid`, `client_id`, `updated_at`, `created_at`) VALUES
(32, 'gvdfg5r5r', '3', '#f00', 'XL', '660005', 'dgdf@gmial.com', '2017-12-16 09:42:24', '2017-12-16 09:42:24'),
(33, 'gvdfg5r5r', '3', '#f00', 'XL', '469969', 'as@gmail.comff', '2017-12-16 09:54:32', '2017-12-16 09:54:32'),
(34, 'gvdfg5r5r vfdvbgdgfb', '8', '#f00', 'XL', '744286', 'a@gmail.com', '2017-12-16 16:55:33', '2017-12-16 09:56:44'),
(35, '', '', '', '', '835894', 'a@gmial.com', '2017-12-16 17:17:09', '2017-12-16 10:01:36'),
(36, 'gvdfg5r5r rfewf4t4f4', '4 3', '#f00 #f00', 'XL XXL', '150063', 'd@gmail.com', '2017-12-16 17:17:25', '2017-12-16 10:44:12'),
(37, 'rfewf4t4f4', '2', '#f00', 'XXL', '300025', 'mmuksud@yahoo.com', '2017-12-16 13:46:15', '2017-12-16 13:46:15'),
(38, 'gvdfg5r5r', '2', '#f00', 'XL', '338553', 'dfds@gmail.com', '2018-01-08 03:45:13', '2018-01-08 03:45:13'),
(39, 'gvdfg5r5r', '3', '#f00', 'XL', '418780', 'abc@gmail.com', '2018-01-08 04:36:20', '2018-01-08 04:36:20'),
(40, 'gvdfg5r5r', '5', '#f00', 'XL', '470332', 'abc@gmail.com', '2018-01-08 04:52:39', '2018-01-08 04:52:39'),
(41, 'gvdfg5r5r', '9', '#f00', 'XL', '580781', 'aa@gmail.com', '2018-01-08 09:35:24', '2018-01-08 09:35:24'),
(42, 'SRNV06624930', '1', '#001a33', 'Free', '244185', 'sazzad.muksud@gmail.com', '2018-01-24 13:13:01', '2018-01-24 13:13:01'),
(43, 'SR02042017', '3', '#000066', 'Free', '401037', 'sazzad.muksud@gmail.com', '2018-03-21 06:47:58', '2018-03-21 06:47:58'),
(44, 'STB0225032168 SR02042017', '3 1', '#4899b9 #000066', 'XL Free', '115638', 'mmuksud@yahoo.com', '2018-04-06 00:37:21', '2018-04-06 00:37:21'),
(45, 'STB0125032168 STB0325032168', '1 1', '#ff0000 #66c2ff', 'FREE 5-6 Yrs', '779781', 'sazzad@yahoo.com', '2018-04-06 12:08:32', '2018-04-06 12:08:32');

-- --------------------------------------------------------

--
-- Table structure for table `product_informations`
--

CREATE TABLE `product_informations` (
  `id` int(11) NOT NULL,
  `fabrics` varchar(1000) NOT NULL,
  `colour` varchar(1000) NOT NULL,
  `cut` varchar(1000) NOT NULL,
  `sleeve` varchar(1000) NOT NULL,
  `collar` varchar(1000) NOT NULL,
  `length` varchar(1000) NOT NULL,
  `value_ddition` varchar(1000) NOT NULL,
  `occasion` varchar(1000) NOT NULL,
  `others` varchar(1000) NOT NULL,
  `eventt` varchar(1000) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_informations`
--

INSERT INTO `product_informations` (`id`, `fabrics`, `colour`, `cut`, `sleeve`, `collar`, `length`, `value_ddition`, `occasion`, `others`, `eventt`, `prod_id`, `category_id`) VALUES
(8, 'Half Silk Jamdani', 'Navy', '-', '-', '-', '6 Yrds', 'Half Silk', 'Regular', 'Non', 'Non', 24, 8),
(9, 'Artificial Silk', 'Dark Blue ', '-', '-', '-', '6Yrds', 'Silk', 'Regular', '-', 'Any', 25, 8),
(10, '100% cotton ', 'Blue ', 'Fit ', 'Short Sleeve ', 'Band ', 'Regular', 'Digital Print ', 'Festive', 'Made By India ', 'Any ', 31, 10),
(11, '100% Cotton', 'Blue ', 'Fit ', 'Short', 'Band ', 'Regular', 'Check Contrast Fabrics', 'Festive ', 'Made By India ', 'Any ', 32, 10),
(12, '100% Cotton ', 'Sky Blue ', 'Fit ', 'Full', 'Spread Collar', 'Regular', 'Dobby Weave ', '-', 'Executive Shirt ', 'Formal', 27, 7),
(13, 'Cotton Mix ', 'Red Check ', 'Fit ', 'Full', 'Spread Collar', 'Regular', 'Yarn Dye ', '-', 'Executive Shirt ', 'Formal', 34, 7),
(14, '100% Cotton ', 'Off White ', 'Lose', 'Full', 'Band', 'Extra', 'Contrast Sleeve', 'Festive ', 'Fabrics Dobby Weave ', 'Boishake ', 35, 7),
(15, '100% Cotton ', 'Pink', 'Fit ', 'Short ', 'Band ', 'Regular', 'Print & Embroidery Work', 'Festive ', 'Made In India ', '-', 36, 10),
(16, '100% Cotton', 'Blue ', 'Fit', 'Short ', 'Double Band ', 'Regular', 'Embroidery Work ', 'Festive ', 'Made In India ', '-', 37, 10),
(17, '100% Cotton with spandex', 'Navy Blue ', 'Regular', 'Half ', 'Neck', 'Regular', 'Printed ', 'Festive ', 'Made In Thailand ', 'Boishake ', 38, 7),
(18, '100% Cotton ', 'Blue', 'Regular', 'Short', 'Round Neck', 'Extra', 'Multi Colour Ball Print, Made in Thailand', 'Festive', 'A Grade Products', 'Boishake', 39, 10),
(19, '100% Cotton ', 'Pink', 'Regular', 'Sleeve Less', 'Round Neck', 'Regular', 'Neck and Armhole decoration by Lace', 'Festive ', 'Inside soft cotton lining ', 'Any', 40, 9),
(20, '100% Cotton ', 'RED-GREEN STRIPE', 'Regular', 'Short ', 'Shirt Collar', 'Regular', 'Yarn Dye ', 'Festive', 'Made in Thailand ', '-', 41, 10),
(21, '100% Cotton ', 'Yellow- Orange Stripe', 'Regular', 'Short ', 'Shirt Collar', 'Regular', 'Yarn Dye ', 'Festive ', 'Made In Thailand ', '-', 42, 10);

-- --------------------------------------------------------

--
-- Table structure for table `prod_sizes`
--

CREATE TABLE `prod_sizes` (
  `id` int(11) NOT NULL,
  `size` varchar(20) NOT NULL,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prod_sizes`
--

INSERT INTO `prod_sizes` (`id`, `size`, `product_id`, `category_id`) VALUES
(20, 'Free', 25, 8),
(21, '38', 28, 7),
(22, '40', 28, 7),
(23, '42', 28, 7),
(24, '44', 28, 7),
(29, '3-4 Yrs', 31, 10),
(30, '5-6 Yrs', 31, 10),
(31, '5-6 Yrs', 32, 10),
(32, '7-8 Yrs', 32, 10),
(33, 'Free', 24, 8),
(34, 'FREE', 33, 8),
(35, 'S', 27, 7),
(36, 'M', 27, 7),
(37, 'L', 27, 7),
(38, 'XL', 27, 7),
(39, 'S', 34, 7),
(40, 'M', 34, 7),
(41, 'L', 34, 7),
(42, 'XL', 34, 7),
(43, '40', 35, 7),
(44, '42', 35, 7),
(45, '3-4 Yrs', 36, 10),
(46, '3-4 Yrs', 37, 10),
(47, '5-6 Yrs', 37, 10),
(48, 'M', 38, 7),
(49, 'L', 38, 7),
(50, '4-5 YRS', 39, 10),
(51, '6-7 YRS', 39, 10),
(52, '9-10 YRS', 39, 10),
(53, '2-3 Yrs', 40, 9),
(54, '3-4 Yrs', 40, 9),
(55, '3-4 Yrs', 41, 10),
(56, '5-6 Yrs', 41, 10),
(57, '3-4 Yrs', 42, 10),
(58, '5-6 Yrs', 42, 10);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(11) NOT NULL,
  `subcat_name` varchar(300) NOT NULL,
  `categoriyid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `subcat_name`, `categoriyid`) VALUES
(3, 'new', 17),
(4, 'Men Shirt', 7),
(5, 'Men Panjabi', 7),
(6, 'Men Kurta', 7),
(7, 'Men Fatua', 7),
(8, 'Men Polo Shirt', 7),
(9, 'Men T-Shirt', 7),
(10, 'Men Normal pant', 7),
(11, 'Men Jeans Pant', 7),
(12, 'Men Trousers', 7),
(13, 'Men Boxer/ Underwear', 7),
(14, 'Men Lungi', 7),
(15, 'Women Shalware Kamez', 8),
(16, 'Women Saree', 8),
(17, 'Women Kurta', 8),
(18, 'Women Unstitch 03 Pcs', 8),
(19, 'Women Dupatta', 8),
(20, 'Women Scarves', 8),
(21, 'Women Pajama', 8),
(22, 'Women Pant', 8),
(23, 'Women Fabrics', 8),
(24, 'Baby Girl Frock Set', 9),
(25, 'Baby Girl Frock', 9),
(26, 'Baby Girl Nima', 9),
(27, 'Baby Girl Fatua', 9),
(28, 'Baby Girls Gift Set ', 9),
(29, 'Baby boys Shirt Pant Set', 9),
(30, 'Baby boys Shirt', 9),
(31, 'Baby boys Pant (3/4)', 9),
(34, 'Baby boys Fatua ', 9),
(35, 'Baby boys Panjabi & Pajama Set', 9),
(36, 'Baby boys T-Shirt', 9),
(37, 'Baby boys Polo Shirt', 9),
(38, 'Baby boys Gift Set', 9),
(42, 'Kids Girls Frock Set', 10),
(43, 'Kids Girls Frock', 10),
(44, 'Kids Girls Nima', 10),
(45, 'Kids Girls Fatua', 10),
(46, 'Kids Girls Shalware Kamez', 10),
(47, 'Kids Girls Ghagra Choli', 10),
(48, 'Kids Girl Coaty', 10),
(49, 'Kids Girl Pant', 10),
(50, 'Kids Boys Shirt Pant Set', 10),
(51, 'Kids Boys Shirt', 10),
(52, 'Kids Boys Pant', 10),
(53, 'Kids Boys Fatua', 10),
(54, 'Kids Boys Panjabi & Pajama Set', 10),
(55, 'Kids Boys T-Shirt', 10),
(56, 'Kids Boys Polo Shirt', 10),
(57, 'Kids Boys Coaty', 10),
(58, 'Teen Girls Shalware Kamez', 11),
(59, 'Teen Girls Frock Set', 11),
(60, 'Teen Girls Frock', 11),
(61, 'Teen Girls Fatua', 11),
(62, 'Teen Girls Ghagra Choli', 11),
(63, 'Teen Girls Pant', 11),
(64, 'Teen Girls Coaty', 11),
(65, 'Teen Boys Shirt Pant Set', 11),
(66, 'Teen Boys Shirt', 11),
(67, 'Teen Boys Pant', 11),
(68, 'Teen Boys Fatua', 11),
(70, 'Teen Boys Panjabi & Pajama', 11),
(71, 'Teen Boys T-Shirt', 11),
(72, 'Teen Boys Polo Shirt', 11),
(73, 'Teen Boys Coaty', 11);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `passwords` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `passwords`, `email`, `updated_at`, `created_at`, `status`) VALUES
(9, 'sazzad', '1981sazzad', 'sazzad.muksud@gmail.com', '2018-01-23 16:43:19', '2017-12-10 17:24:34', 1),
(10, 'df', 'gd', 'dfg@gmail.com', '2018-03-20 15:58:41', '2017-12-16 17:29:18', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ecom_products_id` (`ecom_products_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `ecom_products`
--
ALTER TABLE `ecom_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `occation_id` (`occation_id`);

--
-- Indexes for table `occations`
--
ALTER TABLE `occations`
  ADD PRIMARY KEY (`occation_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_informations`
--
ALTER TABLE `product_informations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prod_id` (`prod_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `prod_sizes`
--
ALTER TABLE `prod_sizes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoriyid` (`categoriyid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `ecom_products`
--
ALTER TABLE `ecom_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `occations`
--
ALTER TABLE `occations`
  MODIFY `occation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `product_informations`
--
ALTER TABLE `product_informations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `prod_sizes`
--
ALTER TABLE `prod_sizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `colors`
--
ALTER TABLE `colors`
  ADD CONSTRAINT `colors_ibfk_1` FOREIGN KEY (`ecom_products_id`) REFERENCES `ecom_products` (`id`),
  ADD CONSTRAINT `colors_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `ecom_products`
--
ALTER TABLE `ecom_products`
  ADD CONSTRAINT `ecom_products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `ecom_products_ibfk_2` FOREIGN KEY (`occation_id`) REFERENCES `occations` (`occation_id`);

--
-- Constraints for table `product_informations`
--
ALTER TABLE `product_informations`
  ADD CONSTRAINT `product_informations_ibfk_1` FOREIGN KEY (`prod_id`) REFERENCES `ecom_products` (`id`),
  ADD CONSTRAINT `product_informations_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `prod_sizes`
--
ALTER TABLE `prod_sizes`
  ADD CONSTRAINT `prod_sizes_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `ecom_products` (`id`),
  ADD CONSTRAINT `prod_sizes_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_ibfk_1` FOREIGN KEY (`categoriyid`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
