-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 10:08 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpecom`
-- Primary Key == AUTO_INCREMENT PRIMARY KEY,

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `user_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `prod_qty` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `prod_id`, `prod_qty`, `created_at`) VALUES
(48, 4, 122, 1, '2024-05-05 17:26:46');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `description` mediumtext DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `image` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `status`, `image`, `created_at`) VALUES
(51, 'Sneakers', 'sneakers', 'All Kind of Sneakers', 0, '1714644237.png', '2024-05-02 09:59:22'),
(52, 'Flats', 'flats', 'all kind of flats', 0, '1714644286.png', '2024-05-02 10:00:01'),
(53, 'Foam Footwear', 'foam footwear', 'All kind of foam footwear', 0, '1714644347.png', '2024-05-02 10:00:43'),
(54, 'Sandals', 'sandals', 'All kind of sandals', 0, '1714644073.png', '2024-05-02 10:01:13'),
(55, 'Loafers', 'loafers', 'All kind of laofers', 0, '1714644101.png', '2024-05-02 10:01:41'),
(56, 'Heels', 'heels', 'all kind of heels', 0, '1714644134.png', '2024-05-02 10:02:14'),
(57, 'Running Shoes ', 'running shoes', 'All kind of running shoes', 0, '1714644257.png', '2024-05-02 10:02:51'),
(58, 'Basketball Shoes', 'basketball shoes', 'All kind of basketball shoes', 0, '1714644200.png', '2024-05-02 10:03:20');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `tracking_no` varchar(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` mediumtext NOT NULL,
  `pincode` int(100) NOT NULL,
  `total_price` int(100) NOT NULL,
  `payment_mode` varchar(100) NOT NULL,
  `payment_id` varchar(100) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `tracking_no`, `user_id`, `name`, `email`, `phone`, `address`, `pincode`, `total_price`, `payment_mode`, `payment_id`, `status`, `created_at`) VALUES
(1, 'micsonwebsite381725679933', 4, 'Bob', 'bob@hotmail.com', '0125679933', 'testing code 1', 110033, 1750, 'COD', '', 2, '2024-04-27 23:01:28'),
(2, 'micsonwebsite4857s', 4, 'Samuel', 'test@gmail.com', 'sss', 'ss', 0, 1750, 'COD', '', 2, '2024-04-27 23:04:58'),
(7, 'micsonwebsite2677s', 5, 'sss', 'sss@gmail.com', 'sss', 'sss', 0, 1200, 'COD', '', 2, '2024-04-28 11:33:49'),
(8, 'micsonwebsite351843330000', 5, 'Bob', 'bob@gmail.com', '0143330000', 'sssssssssssssssss', 203375, 2000, 'COD', '', 2, '2024-04-28 14:55:00'),
(9, 'micsonwebsite727369992222', 4, 'Bob', 'bob@email.com', '0169992222', 'sssssssss', 130223, 195, 'COD', '', 2, '2024-04-28 19:38:23'),
(10, 'micsonwebsite715425679933', 4, 'Bob', 'bob@gmail.com', '0125679933', 'sssssssss', 110033, 156, 'COD', '', 1, '2024-04-28 21:15:29'),
(11, 'micsonwebsite3058', 4, 'sss', 'sss@gmail.com', 'ss', 'ss', 0, 52, 'COD', '', 2, '2024-04-28 21:20:36'),
(12, 'micsonwebsite7375sss', 4, 'Bob', 'samuel@hotmail.com', 'sssss', 'xxx', 122111, 150, 'COD', '', 2, '2024-04-29 10:52:41'),
(13, 'micsonwebsite4049ssss', 4, 'ssssss', 'sss@gmail.com', 'ssssss', 'ssssss', 0, 1500, 'COD', '', 2, '2024-04-29 15:19:06'),
(14, 'micsonwebsite7352ss', 4, 'Samuel', 'aa@gmail.com', 'ssss', 'ss', 0, 150, 'COD', '', 2, '2024-04-29 19:35:46'),
(15, 'micsonwebsite7984', 11, 'ss', 'sss@gmail.com', 'ss', 'ssss', 0, 865, 'COD', '', 2, '2024-04-30 17:21:27'),
(16, 'micsonwebsite7245', 11, 'ss', 'sss@gmail.com', 'ss', 'ss', 0, 400, 'COD', '', 2, '2024-04-30 17:33:54'),
(17, 'micsonwebsite605425679933', 11, 'Bob', 'mike@gmail.com', '0125679933', 'ss', 110033, 52, 'COD', '', 1, '2024-04-30 21:59:43'),
(18, 'micsonwebsite113020002222', 11, 'Bob', 'test@gmail.com', '0120002222', 'ss', 110033, 52, 'COD', '', 2, '2024-04-30 22:01:02'),
(19, 'micsonwebsite6612', 11, 'test', 'test@gmail.com', 'ss', 'hhhhhhhh', 110033, 156, 'COD', '', 2, '2024-04-30 22:03:08'),
(20, 'micsonwebsite439925679933', 5, 'Bob', 'gg@email.com', '0125679933', 'ssss', 110033, 60, 'COD', '', 2, '2024-05-01 15:12:47'),
(21, 'micsonwebsite767760) 11 1262 0226', 5, 'JansonThen', 'jansonthen12@gmail.com', '(+60) 11 1262 0226', 'dawdawda wdadaadawd', 680056, 0, 'COD', '', 2, '2024-05-02 16:32:50'),
(22, 'micsonwebsite6904a', 5, 'dwa', 'mikelau@gmail.com', 'dwa', 'dwadawd', 0, 314, 'COD', '', 0, '2024-05-02 16:34:19'),
(23, 'micsonwebsite33253', 5, 'JansonThen', 'jansonthen12@gmail.com', '123', 'dawdadawd', 0, 474, 'COD', '', 0, '2024-05-02 16:35:18'),
(24, 'micsonwebsite40313456789', 5, 'JansonThen', 'jansonthen@gmail.com', '123456789', 'BSD', 680056, 120, 'COD', '', 0, '2024-05-02 17:57:02'),
(25, 'micsonwebsite4810111111', 5, 'Yi Sean', 'ys@gmail.com', '11111111', 'KL', 23456, 180, 'COD', '', 1, '2024-05-02 18:29:56'),
(26, 'micsonwebsite113134567', 5, 'JansonThen', 'jansonthen@gmail.com', '1234567', 'Sunway', 680056, 169, 'COD', '', 1, '2024-05-02 19:04:53'),
(27, 'micsonwebsite920034567', 16, 'Richie', 'RC@gmail.com', '1234567', 'Sunway', 680056, 169, 'COD', '', 1, '2024-05-02 19:22:50'),
(28, 'micsonwebsite41463456', 17, 'awais', 'awais@gmail.com', '123456', 'Sunway', 680056, 169, 'COD', '', 1, '2024-05-02 19:54:57'),
(29, 'micsonwebsite93413456', 18, 'jayden', 'jayden@gmail.com', '123456', 'Sunway', 680056, 169, 'COD', '', 1, '2024-05-02 20:02:33'),
(30, 'micsonwebsite454434567', 5, 'dwad', 'jansonthen12@gmail.com', '1234567', 'Sunway', 23456, 309, 'COD', '', 1, '2024-05-02 20:06:24'),
(31, 'micsonwebsite21253456', 19, 'Muhamad', 'muhamd@gmail.com', '123456', 'sunway', 680056, 169, 'COD', '', 1, '2024-05-02 20:42:30'),
(32, 'micsonwebsite13563456', 20, 'Soon', 'soon@gmail.com', '123456', 'sunway', 680056, 75, 'COD', '', 1, '2024-05-02 20:49:47'),
(33, 'micsonwebsite51593456', 21, 'Ben', 'ben@gmail.com', '123456', 'Sunway', 680056, 169, 'COD', '', 1, '2024-05-02 21:08:49'),
(34, 'micsonwebsite38513456778', 22, 'zach', 'zach@gmail.com', '123456778', 'sunway', 56000, 129, 'COD', '', 1, '2024-05-02 21:31:27'),
(35, 'micsonwebsite3235345678', 23, 'Nich', 'nich@gmail.com', '12345678', 'sunway', 680056, 180, 'COD', '', 1, '2024-05-02 21:55:14'),
(36, 'micsonwebsite354734567', 5, 'JansonThen', 'JW@gmail.com', '1234567', 'lol', 56000, 529, 'COD', '', 0, '2024-05-02 22:01:42'),
(37, 'micsonwebsite48013456', 24, 'cheah', 'cheah@gmail.com', '123456', 'Sunway', 680056, 169, 'COD', '', 1, '2024-05-02 22:19:51'),
(38, 'micsonwebsite670923456789', 25, 'lee', 'lee@gmail.com', '0123456789', 'Kepong Baru, KL', 52100, 169, 'COD', '', 0, '2024-05-05 12:24:51');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `order_id` int(100) NOT NULL,
  `prod_id` int(100) NOT NULL,
  `qty` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `prod_id`, `qty`, `price`, `created_at`) VALUES
(1, 1, 2, 4, 400, '2024-04-27 23:01:28'),
(2, 1, 1, 1, 150, '2024-04-27 23:01:28'),
(3, 2, 2, 4, 400, '2024-04-27 23:04:58'),
(4, 2, 1, 1, 150, '2024-04-27 23:04:58'),
(5, 3, 2, 3, 400, '2024-04-28 10:48:36'),
(6, 5, 2, 3, 400, '2024-04-28 11:15:09'),
(7, 6, 2, 3, 400, '2024-04-28 11:31:58'),
(8, 7, 2, 3, 400, '2024-04-28 11:33:49'),
(9, 8, 2, 5, 400, '2024-04-28 14:55:00'),
(10, 9, 41, 3, 65, '2024-04-28 19:38:23'),
(11, 10, 42, 3, 52, '2024-04-28 21:15:29'),
(12, 11, 42, 1, 52, '2024-04-28 21:20:36'),
(13, 12, 1, 1, 150, '2024-04-29 10:52:41'),
(14, 13, 1, 10, 150, '2024-04-29 15:19:06'),
(15, 14, 1, 1, 150, '2024-04-29 19:35:46'),
(16, 15, 2, 2, 400, '2024-04-30 17:21:27'),
(17, 15, 41, 1, 65, '2024-04-30 17:21:27'),
(18, 16, 2, 1, 400, '2024-04-30 17:33:54'),
(19, 17, 42, 1, 52, '2024-04-30 21:59:43'),
(20, 18, 42, 1, 52, '2024-04-30 22:01:02'),
(21, 19, 42, 3, 52, '2024-04-30 22:03:08'),
(22, 20, 94, 3, 20, '2024-05-01 15:12:47'),
(23, 22, 97, 1, 145, '2024-05-02 16:34:19'),
(24, 22, 96, 1, 169, '2024-05-02 16:34:19'),
(25, 23, 103, 1, 180, '2024-05-02 16:35:18'),
(26, 23, 126, 1, 65, '2024-05-02 16:35:18'),
(27, 23, 96, 1, 169, '2024-05-02 16:35:18'),
(28, 23, 120, 1, 60, '2024-05-02 16:35:18'),
(29, 24, 120, 2, 60, '2024-05-02 17:57:02'),
(30, 25, 103, 1, 180, '2024-05-02 18:29:56'),
(31, 26, 96, 1, 169, '2024-05-02 19:04:53'),
(32, 27, 96, 1, 169, '2024-05-02 19:22:50'),
(33, 28, 96, 1, 169, '2024-05-02 19:54:57'),
(34, 29, 96, 1, 169, '2024-05-02 20:02:33'),
(35, 30, 96, 1, 169, '2024-05-02 20:06:24'),
(36, 30, 157, 1, 140, '2024-05-02 20:06:24'),
(37, 31, 96, 1, 169, '2024-05-02 20:42:30'),
(38, 32, 119, 1, 75, '2024-05-02 20:49:47'),
(39, 33, 96, 1, 169, '2024-05-02 21:08:49'),
(40, 34, 158, 1, 129, '2024-05-02 21:31:27'),
(41, 35, 98, 1, 180, '2024-05-02 21:55:14'),
(42, 36, 172, 2, 180, '2024-05-02 22:01:42'),
(43, 36, 96, 1, 169, '2024-05-02 22:01:42'),
(44, 37, 96, 1, 169, '2024-05-02 22:19:51'),
(45, 38, 96, 1, 169, '2024-05-05 12:24:51');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `category_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `small_description` mediumtext NOT NULL,
  `description` mediumtext NOT NULL,
  `original_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL,
  `image_thumbnail` varchar(100) NOT NULL,
  `image_1` varchar(100) NOT NULL,
  `image_2` varchar(100) NOT NULL,
  `image_3` varchar(100) NOT NULL,
  `image_4` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `trending` tinyint(4) NOT NULL,
  `new_arrival` tinyint(4) NOT NULL,
  `sales` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `small_description`, `description`, `original_price`, `selling_price`, `image_thumbnail`, `image_1`, `image_2`, `image_3`, `image_4`, `qty`, `status`, `trending`, `new_arrival`, `sales`, `created_at`) VALUES
(96, 51, 'MC Sneaker S1', 's1', 'MICSON', 'The MC Sneaker S1 is designed to offer cushioning, arch support, and moisture-wicking properties to enhance comfort and performance. Its flat and wide base provides enhanced stability, while the supportive heel counter ensures a locked-in feel. Additionally, the sneaker features a cushioned collar and tongue for added comfort and incorporates a Torsion System between the heel and forefoot for increased stability during movement.', 0, 169, '1714645132.jpg', '1714645150.jpg', '1714645206.jpg', '1714645215.jpg', '1714645227.jpg', 992, 0, 1, 0, 0, '2024-05-01 18:10:47'),
(97, 51, 'MC Sneaker S2', 's2', 'MICSON', 'The MC Sneaker S2 is designed to offer cushioning, arch support, and moisture-wicking properties to enhance comfort and performance. Its flat and wide base provides enhanced stability, while the supportive heel counter ensures a locked-in feel. Additionally, the sneaker features a cushioned collar and tongue for added comfort and incorporates a Torsion System between the heel and forefoot for increased stability during movement.', 155, 145, '1714645521.jpg', '1714645582.jpg', '1714645592.jpg', '1714645604.jpg', '1714645612.jpg', 497, 0, 0, 0, 1, '2024-05-01 18:25:21'),
(98, 51, 'MC Sneaker S3', 's3', 'MICSON', 'The MC Sneaker S3 is designed to offer cushioning, arch support, and moisture-wicking properties to enhance comfort and performance. Its flat and wide base provides enhanced stability, while the supportive heel counter ensures a locked-in feel. Additionally, the sneaker features a cushioned collar and tongue for added comfort and incorporates a Torsion System between the heel and forefoot for increased stability during movement.', 0, 180, '1714645698.jpg', '1714646104.jpg', '1714646114.jpg', '1714646122.jpg', '1714646133.jpg', 500, 0, 0, 0, 0, '2024-05-01 18:28:18'),
(99, 51, 'MC Sneaker S4', 's4', 'MICSON', 'The MC Sneaker S4 is designed to offer cushioning, arch support, and moisture-wicking properties to enhance comfort and performance. Its flat and wide base provides enhanced stability, while the supportive heel counter ensures a locked-in feel. Additionally, the sneaker features a cushioned collar and tongue for added comfort and incorporates a Torsion System between the heel and forefoot for increased stability during movement.', 0, 135, '1714645768.jpg', '1714646154.jpg', '1714646210.jpg', '1714646199.jpg', '1714646240.jpg', 500, 0, 0, 0, 0, '2024-05-01 18:29:28'),
(100, 51, 'MC Sneaker S5', 's5', 'MICSON', 'The MC Sneaker S5 is designed to offer cushioning, arch support, and moisture-wicking properties to enhance comfort and performance. Its flat and wide base provides enhanced stability, while the supportive heel counter ensures a locked-in feel. Additionally, the sneaker features a cushioned collar and tongue for added comfort and incorporates a Torsion System between the heel and forefoot for increased stability during movement.', 0, 160, '1714645827.jpg', '1714646266.jpg', '1714646285.jpg', '1714646298.jpg', '1714646313.jpg', 500, 0, 0, 0, 0, '2024-05-01 18:30:27'),
(101, 51, 'MC Sneaker S6', 's6', 'MICSON', 'The MC Sneaker S6 is designed to offer cushioning, arch support, and moisture-wicking properties to enhance comfort and performance. Its flat and wide base provides enhanced stability, while the supportive heel counter ensures a locked-in feel. Additionally, the sneaker features a cushioned collar and tongue for added comfort and incorporates a Torsion System between the heel and forefoot for increased stability during movement.', 0, 205, '1714645897.jpg', '1714646467.jpg', '1714646527.jpg', '1714646534.jpg', '1714646543.jpg', 500, 0, 0, 0, 0, '2024-05-01 18:31:37'),
(102, 51, 'MC Sneaker S7', 's7', 'MICSON', 'The MC Sneaker S7 is designed to offer cushioning, arch support, and moisture-wicking properties to enhance comfort and performance. Its flat and wide base provides enhanced stability, while the supportive heel counter ensures a locked-in feel. Additionally, the sneaker features a cushioned collar and tongue for added comfort and incorporates a Torsion System between the heel and forefoot for increased stability during movement.', 0, 235, '1714645935.jpg', '1714646558.jpg', '1714646565.jpg', '1714646576.jpg', '1714646586.jpg', 500, 0, 0, 0, 0, '2024-05-01 18:32:15'),
(103, 51, 'MC Sneaker S8', 's8', 'MICSON', 'The MC Sneaker S8 is designed to offer cushioning, arch support, and moisture-wicking properties to enhance comfort and performance. Its flat and wide base provides enhanced stability, while the supportive heel counter ensures a locked-in feel. Additionally, the sneaker features a cushioned collar and tongue for added comfort and incorporates a Torsion System between the heel and forefoot for increased stability during movement.', 188, 180, '1714645997.jpg', '1714646637.jpg', '1714646645.jpg', '1714646653.jpg', '1714646661.jpg', 496, 0, 0, 1, 1, '2024-05-01 18:33:17'),
(104, 52, 'MC Flats F1', 'f1', 'MICSON', 'The MC Flats F1 feature a classic ballet flat design with a rounded toe and minimalistic silhouette. They are equipped with a flat and wide base that provides enhanced stability and a supportive heel counter for a locked-in feel. Additionally, these flats include a cushioned collar and tongue for added comfort, along with a Torsion System between the heel and forefoot to ensure stability during wear.\r\n\r\n', 0, 110, '1714646931.png', '1714647439.png', '1714647469.jpg', '1714647480.jpg', '1714647487.jpg', 999, 0, 1, 0, 0, '2024-05-01 18:48:51'),
(105, 52, 'MC Flats F2', 'f2', 'MICSON', 'The MC Flats F2 feature a classic ballet flat design with a rounded toe and minimalistic silhouette. They are equipped with a flat and wide base that provides enhanced stability and a supportive heel counter for a locked-in feel. Additionally, these flats include a cushioned collar and tongue for added comfort, along with a Torsion System between the heel and forefoot to ensure stability during wear.', 0, 119, '1714647001.png', '1714647557.png', '1714647566.jpg', '1714647575.jpg', '1714647584.jpg', 500, 0, 0, 0, 0, '2024-05-01 18:50:01'),
(106, 52, 'MC Flats F3', 'f3', 'MICSON', 'The MC Flats F3 feature a classic ballet flat design with a rounded toe and minimalistic silhouette. They are equipped with a flat and wide base that provides enhanced stability and a supportive heel counter for a locked-in feel. Additionally, these flats include a cushioned collar and tongue for added comfort, along with a Torsion System between the heel and forefoot to ensure stability during wear.', 0, 125, '1714647065.png', '1714647610.png', '1714647619.jpg', '1714647627.jpg', '1714647636.jpg', 500, 0, 0, 0, 0, '2024-05-01 18:51:05'),
(107, 52, 'MC Flats F4', 'f4', 'MICSON', 'The MC Flats F4 feature a classic ballet flat design with a rounded toe and minimalistic silhouette. They are equipped with a flat and wide base that provides enhanced stability and a supportive heel counter for a locked-in feel. Additionally, these flats include a cushioned collar and tongue for added comfort, along with a Torsion System between the heel and forefoot to ensure stability during wear.', 128, 123, '1714647167.png', '1714647653.png', '1714647662.jpg', '1714647670.jpg', '1714647678.jpg', 500, 0, 0, 0, 1, '2024-05-01 18:52:47'),
(108, 52, 'MC Flats F5', 'f5', 'MICSON', 'The MC Flats F5 feature a classic ballet flat design with a rounded toe and minimalistic silhouette. They are equipped with a flat and wide base that provides enhanced stability and a supportive heel counter for a locked-in feel. Additionally, these flats include a cushioned collar and tongue for added comfort, along with a Torsion System between the heel and forefoot to ensure stability during wear.', 0, 99, '1714647274.png', '1714647698.png', '1714647711.jpg', '1714647718.jpg', '1714647728.jpg', 500, 0, 0, 0, 0, '2024-05-01 18:54:34'),
(109, 52, 'MC Flats F6', 'f6', 'MICSON', 'The MC Flats F6 feature a classic ballet flat design with a rounded toe and minimalistic silhouette. They are equipped with a flat and wide base that provides enhanced stability and a supportive heel counter for a locked-in feel. Additionally, these flats include a cushioned collar and tongue for added comfort, along with a Torsion System between the heel and forefoot to ensure stability during wear.', 0, 138, '1714647322.png', '1714647750.png', '1714647750.jpg', '1714647761.jpg', '1714647770.jpg', 500, 0, 0, 0, 0, '2024-05-01 18:55:22'),
(110, 52, 'MC Flats F7', 'f7', 'MICSON', 'The MC Flats F7 feature a classic ballet flat design with a rounded toe and minimalistic silhouette. They are equipped with a flat and wide base that provides enhanced stability and a supportive heel counter for a locked-in feel. Additionally, these flats include a cushioned collar and tongue for added comfort, along with a Torsion System between the heel and forefoot to ensure stability during wear.', 0, 135, '1714647376.png', '1714647793.png', '1714647801.jpg', '1714647808.jpg', '1714647817.jpg', 500, 0, 0, 0, 0, '2024-05-01 18:56:16'),
(111, 52, 'MC Flats F8', 'f8', 'MICSON', 'The MC Flats F8 feature a classic ballet flat design with a rounded toe and minimalistic silhouette. They are equipped with a flat and wide base that provides enhanced stability and a supportive heel counter for a locked-in feel. Additionally, these flats include a cushioned collar and tongue for added comfort, along with a Torsion System between the heel and forefoot to ensure stability during wear.', 0, 99, '1714647412.png', '1714647834.png', '1714647863.jpg', '1714647873.jpg', '1714647881.jpg', 500, 0, 0, 1, 0, '2024-05-01 18:56:52'),
(112, 53, 'MC Foam Footwear FF1', 'ff1', 'MICSON', 'The MC Foam Footwear FF1 provides cushioning, arch support, and moisture-wicking properties to enhance comfort and performance. Its flat and wide base offers enhanced stability, complemented by a supportive heel counter for a locked-in feel. Moreover, the footwear features a cushioned collar and tongue for added comfort, and it incorporates a Torsion System between the heel and forefoot to ensure stability during activities.', 0, 88, '1714648136.jpg', '1714648707.jpg', '1714648719.jpg', '1714648728.jpg', '1714648736.jpg', 1000, 0, 0, 0, 0, '2024-05-01 19:08:56'),
(113, 53, 'MC Foam Footwear FF2', 'ff2', 'MICSON', 'The MC Foam Footwear FF2 provides cushioning, arch support, and moisture-wicking properties to enhance comfort and performance. Its flat and wide base offers enhanced stability, complemented by a supportive heel counter for a locked-in feel. Moreover, the footwear features a cushioned collar and tongue for added comfort, and it incorporates a Torsion System between the heel and forefoot to ensure stability during activities.', 0, 88, '1714648178.jpg', '1714648758.jpg', '1714648765.jpg', '1714648771.jpg', '1714648779.jpg', 500, 0, 0, 0, 0, '2024-05-01 19:09:38'),
(114, 53, 'MC Foam Footwear FF3', 'ff3', 'MICSON', 'The MC Foam Footwear FF3 provides cushioning, arch support, and moisture-wicking properties to enhance comfort and performance. Its flat and wide base offers enhanced stability, complemented by a supportive heel counter for a locked-in feel. Moreover, the footwear features a cushioned collar and tongue for added comfort, and it incorporates a Torsion System between the heel and forefoot to ensure stability during activities.', 0, 79, '1714648238.jpg', '1714648801.jpg', '1714648810.jpg', '1714648816.jpg', '1714648824.jpg', 498, 0, 0, 0, 0, '2024-05-01 19:10:38'),
(115, 53, 'MC Foam Footwear FF4', 'ff4', 'MICSON', 'The MC Foam Footwear FF4 provides cushioning, arch support, and moisture-wicking properties to enhance comfort and performance. Its flat and wide base offers enhanced stability, complemented by a supportive heel counter for a locked-in feel. Moreover, the footwear features a cushioned collar and tongue for added comfort, and it incorporates a Torsion System between the heel and forefoot to ensure stability during activities.', 0, 79, '1714648270.jpg', '1714648848.jpg', '1714648857.jpg', '1714648875.jpg', '1714648882.jpg', 500, 0, 0, 0, 0, '2024-05-01 19:11:10'),
(116, 53, 'MC Foam Footwear FF5', 'ff5', 'MICSON', 'The MC Foam Footwear FF5 provides cushioning, arch support, and moisture-wicking properties to enhance comfort and performance. Its flat and wide base offers enhanced stability, complemented by a supportive heel counter for a locked-in feel. Moreover, the footwear features a cushioned collar and tongue for added comfort, and it incorporates a Torsion System between the heel and forefoot to ensure stability during activities.', 0, 79, '1714648311.jpg', '1714648899.jpg', '1714648907.jpg', '1714648915.jpg', '1714648921.jpg', 500, 0, 0, 0, 0, '2024-05-01 19:11:51'),
(117, 53, 'MC Foam Footwear FF6', 'ff6', 'MICSON', 'The MC Foam Footwear FF6 provides cushioning, arch support, and moisture-wicking properties to enhance comfort and performance. Its flat and wide base offers enhanced stability, complemented by a supportive heel counter for a locked-in feel. Moreover, the footwear features a cushioned collar and tongue for added comfort, and it incorporates a Torsion System between the heel and forefoot to ensure stability during activities.', 0, 75, '1714648352.jpg', '1714648936.jpg', '1714648942.jpg', '1714648949.jpg', '1714648956.jpg', 500, 0, 0, 0, 0, '2024-05-01 19:12:32'),
(118, 53, 'MC Foam Footwear FF7', 'ff7', 'MICSON', 'The MC Foam Footwear FF7 provides cushioning, arch support, and moisture-wicking properties to enhance comfort and performance. Its flat and wide base offers enhanced stability, complemented by a supportive heel counter for a locked-in feel. Moreover, the footwear features a cushioned collar and tongue for added comfort, and it incorporates a Torsion System between the heel and forefoot to ensure stability during activities.', 75, 69, '1714648403.jpg', '1714648974.jpg', '1714648981.jpg', '1714648988.jpg', '1714648995.jpg', 500, 0, 0, 0, 0, '2024-05-01 19:13:23'),
(119, 53, 'MC Foam Footwear FF8', 'ff8', 'MICSON', 'The MC Foam Footwear FF8 provides cushioning, arch support, and moisture-wicking properties to enhance comfort and performance. Its flat and wide base offers enhanced stability, complemented by a supportive heel counter for a locked-in feel. Moreover, the footwear features a cushioned collar and tongue for added comfort, and it incorporates a Torsion System between the heel and forefoot to ensure stability during activities.', 0, 75, '1714648451.jpg', '1714649010.jpg', '1714649017.jpg', '1714649025.jpg', '1714649034.jpg', 500, 0, 0, 0, 0, '2024-05-01 19:14:11'),
(120, 54, 'MC Sandals SD1', 'sd1', 'MICSON', 'The MC Sandals SD1 are designed with a soft lining and cushioned footbed for all-day wear, ensuring comfort throughout the day. They feature a flat and wide base that provides enhanced stability, along with a supportive heel counter for a locked-in feel. Additionally, these sandals include a cushioned collar and tongue for added comfort, and they incorporate a Torsion System between the heel and forefoot to maintain stability during movement.', 0, 60, '1714649238.jpg', '1714649919.jpg', '1714649927.jpg', '1714649934.jpg', '1714649940.jpg', 999, 0, 1, 0, 0, '2024-05-01 19:27:18'),
(121, 54, 'MC Sandals-Eco SD2', 'sd2', 'MICSON', 'The MC Sandals-Eco SD2 are designed with a soft lining and cushioned footbed for all-day wear, ensuring comfort throughout the day. They feature a flat and wide base that provides enhanced stability, along with a supportive heel counter for a locked-in feel. Additionally, these sandals include a cushioned collar and tongue for added comfort, and they incorporate a Torsion System between the heel and forefoot to maintain stability during movement.', 0, 62, '1714649325.jpg', '1714649463.jpg', '1714649471.jpg', '1714649479.jpg', '1714649486.jpg', 500, 0, 0, 0, 0, '2024-05-01 19:28:45'),
(122, 54, 'MC Sandals SD3', 'sd3', 'MICOSN', 'The MC Sandals SD3 are designed with a soft lining and cushioned footbed for all-day wear, ensuring comfort throughout the day. They feature a flat and wide base that provides enhanced stability, along with a supportive heel counter for a locked-in feel. Additionally, these sandals include a cushioned collar and tongue for added comfort, and they incorporate a Torsion System between the heel and forefoot to maintain stability during movement.', 58, 52, '1714649369.jpg', '1714649956.jpg', '1714649962.jpg', '1714649970.jpg', '1714649977.jpg', 500, 0, 0, 0, 1, '2024-05-01 19:29:29'),
(123, 54, 'MC Sandals-Eco SD4', 'sd4', 'MICSON', 'The MC Sandals-Eco SD4 are designed with a soft lining and cushioned footbed for all-day wear, ensuring comfort throughout the day. They feature a flat and wide base that provides enhanced stability, along with a supportive heel counter for a locked-in feel. Additionally, these sandals include a cushioned collar and tongue for added comfort, and they incorporate a Torsion System between the heel and forefoot to maintain stability during movement.', 0, 60, '1714649433.jpg', '1714649995.jpg', '1714650002.jpg', '1714650008.jpg', '1714650015.jpg', 498, 0, 0, 0, 0, '2024-05-01 19:30:33'),
(124, 54, 'MC Sandals SD5', 'sd5', 'MICSON', 'The MC Sandals SD4 are designed with a soft lining and cushioned footbed for all-day wear, ensuring comfort throughout the day. They feature a flat and wide base that provides enhanced stability, along with a supportive heel counter for a locked-in feel. Additionally, these sandals include a cushioned collar and tongue for added comfort, and they incorporate a Torsion System between the heel and forefoot to maintain stability during movement.', 0, 75, '1714649545.jpg', '1714650049.jpg', '1714650037.jpg', '1714650058.jpg', '1714650071.jpg', 500, 0, 0, 0, 0, '2024-05-01 19:32:25'),
(125, 54, 'MC Sandals SD6', 'sd6', 'MICSON', 'The MC Sandals SD6 are designed with a soft lining and cushioned footbed for all-day wear, ensuring comfort throughout the day. They feature a flat and wide base that provides enhanced stability, along with a supportive heel counter for a locked-in feel. Additionally, these sandals include a cushioned collar and tongue for added comfort, and they incorporate a Torsion System between the heel and forefoot to maintain stability during movement.', 0, 79, '1714649596.jpg', '1714650084.jpg', '1714650090.jpg', '1714650096.jpg', '1714650103.jpg', 500, 0, 0, 0, 0, '2024-05-01 19:33:16'),
(126, 54, 'MC Sandals--Eco SD7', 'sd7', 'MICSON', 'The MC Sandals-Eco SD7 are designed with a soft lining and cushioned footbed for all-day wear, ensuring comfort throughout the day. They feature a flat and wide base that provides enhanced stability, along with a supportive heel counter for a locked-in feel. Additionally, these sandals include a cushioned collar and tongue for added comfort, and they incorporate a Torsion System between the heel and forefoot to maintain stability during movement.', 69, 65, '1714649676.jpg', '1714650118.jpg', '1714650124.jpg', '1714650131.jpg', '1714650139.jpg', 499, 0, 1, 0, 0, '2024-05-01 19:34:36'),
(127, 54, 'MC Sandals-Eco SD8', 'sd8', 'MICSON', 'The MC Sandals-Ec0 SD8 are designed with a soft lining and cushioned footbed for all-day wear, ensuring comfort throughout the day. They feature a flat and wide base that provides enhanced stability, along with a supportive heel counter for a locked-in feel. Additionally, these sandals include a cushioned collar and tongue for added comfort, and they incorporate a Torsion System between the heel and forefoot to maintain stability during movement.', 0, 75, '1714649848.jpg', '1714649863.jpg', '1714649873.jpg', '1714649880.jpg', '1714649886.jpg', 500, 0, 0, 1, 0, '2024-05-01 19:35:44'),
(128, 55, 'MC Loafers L1', 'l1', 'MICSON', 'The MC Loafer L1 features a slip-on style with a classic penny keeper strap across the vamp, adding a touch of elegance to its design. Its flat and wide base provides enhanced stability, complemented by a supportive heel counter for a secure and locked-in feel. Additionally, the loafer includes a cushioned collar and tongue to enhance comfort, and it incorporates a Torsion System between the heel and forefoot for added stability during wear.', 0, 220, '1714650313.webp', '1714650567.webp', '1714650576.webp', '1714650582.webp', '1714650592.webp', 1000, 0, 1, 0, 0, '2024-05-01 19:45:13'),
(129, 55, 'MC Loafers L2', 'l2', 'MICSON', 'The MC Loafer L2 features a slip-on style with a classic penny keeper strap across the vamp, adding a touch of elegance to its design. Its flat and wide base provides enhanced stability, complemented by a supportive heel counter for a secure and locked-in feel. Additionally, the loafer includes a cushioned collar and tongue to enhance comfort, and it incorporates a Torsion System between the heel and forefoot for added stability during wear.', 220, 205, '1714650392.webp', '1714650609.webp', '1714650615.webp', '1714650623.webp', '1714650630.webp', 500, 0, 0, 0, 1, '2024-05-01 19:46:32'),
(130, 55, 'MC Loafers L3', 'l3', 'MICSON', 'The MC Loafer L3 features a slip-on style with a classic penny keeper strap across the vamp, adding a touch of elegance to its design. Its flat and wide base provides enhanced stability, complemented by a supportive heel counter for a secure and locked-in feel. Additionally, the loafer includes a cushioned collar and tongue to enhance comfort, and it incorporates a Torsion System between the heel and forefoot for added stability during wear.', 0, 188, '1714650435.webp', '1714650648.webp', '1714650657.webp', '1714650663.webp', '1714650670.webp', 500, 0, 0, 0, 0, '2024-05-01 19:47:15'),
(131, 55, 'MC Loafers L4', 'l4', 'MICSON', 'The MC Loafer L4 features a slip-on style with a classic penny keeper strap across the vamp, adding a touch of elegance to its design. Its flat and wide base provides enhanced stability, complemented by a supportive heel counter for a secure and locked-in feel. Additionally, the loafer includes a cushioned collar and tongue to enhance comfort, and it incorporates a Torsion System between the heel and forefoot for added stability during wear.', 0, 199, '1714650476.webp', '1714650686.webp', '1714650695.webp', '1714650701.jpg', '1714650709.webp', 500, 0, 0, 0, 0, '2024-05-01 19:47:56'),
(132, 55, 'MC Loafers L5', 'l5', 'MICSON', 'The MC Loafer L5 features a slip-on style with a classic penny keeper strap across the vamp, adding a touch of elegance to its design. Its flat and wide base provides enhanced stability, complemented by a supportive heel counter for a secure and locked-in feel. Additionally, the loafer includes a cushioned collar and tongue to enhance comfort, and it incorporates a Torsion System between the heel and forefoot for added stability during wear.', 0, 225, '1714650512.webp', '1714650728.webp', '1714650737.webp', '1714650745.webp', '1714650753.webp', 500, 0, 0, 0, 0, '2024-05-01 19:48:32'),
(134, 55, 'MC Loafers L6', 'l6', 'MICSON', 'The MC Loafer L6 features a slip-on style with a classic penny keeper strap across the vamp, adding a touch of elegance to its design. Its flat and wide base provides enhanced stability, complemented by a supportive heel counter for a secure and locked-in feel. Additionally, the loafer includes a cushioned collar and tongue to enhance comfort, and it incorporates a Torsion System between the heel and forefoot for added stability during wear.', 0, 220, '1714650965.webp', '1714650979.webp', '1714650986.webp', '1714650995.webp', '1714651003.webp', 500, 0, 0, 0, 0, '2024-05-01 19:56:05'),
(135, 55, 'MC Loafers L7', 'l7', 'MICSON', 'The MC Loafer L7 features a slip-on style with a classic penny keeper strap across the vamp, adding a touch of elegance to its design. Its flat and wide base provides enhanced stability, complemented by a supportive heel counter for a secure and locked-in feel. Additionally, the loafer includes a cushioned collar and tongue to enhance comfort, and it incorporates a Torsion System between the heel and forefoot for added stability during wear.', 0, 185, '1714651139.jpg', '1714651203.webp', '1714651211.webp', '1714651218.webp', '1714651224.webp', 500, 0, 0, 1, 0, '2024-05-01 19:58:59'),
(136, 55, 'MC Loafers L8', 'l8', 'MICSON', 'The MC Loafer L8 features a slip-on style with a classic penny keeper strap across the vamp, adding a touch of elegance to its design. Its flat and wide base provides enhanced stability, complemented by a supportive heel counter for a secure and locked-in feel. Additionally, the loafer includes a cushioned collar and tongue to enhance comfort, and it incorporates a Torsion System between the heel and forefoot for added stability during wear.', 175, 155, '1714651181.jpg', '1714651244.jpg', '1714651250.webp', '1714651259.webp', '1714651267.webp', 300, 0, 0, 0, 1, '2024-05-01 19:59:41'),
(137, 56, 'MC Heels H1', 'h1', 'MICSON', 'The MC Heels H1 feature a pointed toe design and a slim, elegant stiletto heel that adds height and sophistication to your look. Its flat and wide base offers enhanced stability, while the supportive heel counter ensures a secure and locked-in feel. Additionally, these heels come with a cushioned collar and tongue for added comfort and incorporate a Torsion System between the heel and forefoot to provide stability during wear.', 0, 185, '1714651556.jpg', '1714651567.png', '1714651573.jpg', '1714651580.jpg', '1714651588.jpg', 1000, 0, 1, 0, 0, '2024-05-01 20:04:39'),
(138, 56, 'MC Heels H2', 'h2', 'MICSON', 'The MC Heels H2 feature a pointed toe design and a slim, elegant stiletto heel that adds height and sophistication to your look. Its flat and wide base offers enhanced stability, while the supportive heel counter ensures a secure and locked-in feel. Additionally, these heels come with a cushioned collar and tongue for added comfort and incorporate a Torsion System between the heel and forefoot to provide stability during wear.', 0, 160, '1714651641.png', '1714652690.png', '1714652697.jpg', '1714652704.jpg', '1714652711.jpg', 500, 0, 0, 0, 0, '2024-05-01 20:07:21'),
(139, 56, 'MC Heels H3', 'h3', 'MICSON', 'The MC Heels H3 feature a pointed toe design and a slim, elegant stiletto heel that adds height and sophistication to your look. Its flat and wide base offers enhanced stability, while the supportive heel counter ensures a secure and locked-in feel. Additionally, these heels come with a cushioned collar and tongue for added comfort and incorporate a Torsion System between the heel and forefoot to provide stability during wear.', 180, 175, '1714652049.png', '1714652735.png', '1714652743.jpg', '1714652750.jpg', '1714652757.jpg', 500, 0, 0, 0, 1, '2024-05-01 20:14:09'),
(140, 56, 'MC Heels H4', 'h4', 'MICSON', 'The MC Heels H4 feature a pointed toe design and a slim, elegant stiletto heel that adds height and sophistication to your look. Its flat and wide base offers enhanced stability, while the supportive heel counter ensures a secure and locked-in feel. Additionally, these heels come with a cushioned collar and tongue for added comfort and incorporate a Torsion System between the heel and forefoot to provide stability during wear.', 0, 145, '1714652140.png', '1714652777.png', '1714652784.jpg', '1714652791.jpg', '1714652797.jpg', 500, 0, 0, 0, 0, '2024-05-01 20:15:40'),
(141, 56, 'MC Heels H5', 'h5', 'MICSON', 'The MC Heels H5 feature a pointed toe design and a slim, elegant stiletto heel that adds height and sophistication to your look. Its flat and wide base offers enhanced stability, while the supportive heel counter ensures a secure and locked-in feel. Additionally, these heels come with a cushioned collar and tongue for added comfort and incorporate a Torsion System between the heel and forefoot to provide stability during wear.', 0, 170, '1714652193.png', '1714652812.png', '1714652819.jpg', '1714652826.jpg', '1714652832.jpg', 500, 0, 0, 0, 0, '2024-05-01 20:16:33'),
(142, 56, 'MC Heels H6', 'h6', 'MICSON', 'The MC Heels H6 feature a pointed toe design and a slim, elegant stiletto heel that adds height and sophistication to your look. Its flat and wide base offers enhanced stability, while the supportive heel counter ensures a secure and locked-in feel. Additionally, these heels come with a cushioned collar and tongue for added comfort and incorporate a Torsion System between the heel and forefoot to provide stability during wear.', 0, 205, '1714652307.png', '1714652537.png', '1714652557.jpg', '1714652565.jpg', '1714652574.jpg', 500, 0, 0, 0, 0, '2024-05-01 20:18:27'),
(143, 56, 'MC Heels H7', 'j7', 'MICSON', 'The MC Heels H7 feature a pointed toe design and a slim, elegant stiletto heel that adds height and sophistication to your look. Its flat and wide base offers enhanced stability, while the supportive heel counter ensures a secure and locked-in feel. Additionally, these heels come with a cushioned collar and tongue for added comfort and incorporate a Torsion System between the heel and forefoot to provide stability during wear.', 0, 185, '1714652418.png', '1714653124.png', '1714653146.jpg', '1714653153.jpg', '1714653160.jpg', 500, 0, 0, 0, 0, '2024-05-01 20:20:18'),
(145, 56, 'MC Heels H8', 'h8', 'MICSON', 'The MC Heels H8 feature a pointed toe design and a slim, elegant stiletto heel that adds height and sophistication to your look. Its flat and wide base offers enhanced stability, while the supportive heel counter ensures a secure and locked-in feel. Additionally, these heels come with a cushioned collar and tongue for added comfort and incorporate a Torsion System between the heel and forefoot to provide stability during wear.', 0, 190, '1714653309.png', '1714653327.png', '1714653335.jpg', '1714653342.jpg', '1714653350.jpg', 500, 0, 0, 1, 0, '2024-05-01 20:35:09'),
(146, 57, 'MC Running Shoes RS1', 'rs1', 'MICSON', 'The MC Running Shoes RS1 are designed to provide cushioning, arch support, and moisture-wicking properties, enhancing both comfort and performance during your runs. Their flat and wide base ensures enhanced stability, while the supportive heel counter contributes to a locked-in feel. Additionally, these running shoes feature a cushioned collar and tongue for added comfort and incorporate a Torsion System between the heel and forefoot to maintain stability throughout your run.', 0, 119, '1714653526.jpg', '1714654218.jpg', '1714654225.jpg', '1714654231.jpg', '1714654240.jpg', 1000, 0, 1, 0, 0, '2024-05-01 20:38:46'),
(147, 57, 'MC Running Shoes RS2', 'rs2', 'MICSON', 'The MC Running Shoes RS2 are designed to provide cushioning, arch support, and moisture-wicking properties, enhancing both comfort and performance during your runs. Their flat and wide base ensures enhanced stability, while the supportive heel counter contributes to a locked-in feel. Additionally, these running shoes feature a cushioned collar and tongue for added comfort and incorporate a Torsion System between the heel and forefoot to maintain stability throughout your run.', 0, 125, '1714653561.jpg', '1714654259.jpg', '1714654266.jpg', '1714654273.jpg', '1714654282.jpg', 500, 0, 0, 0, 0, '2024-05-01 20:39:21'),
(148, 57, 'MC Running Shoes RS3', 'rs3', 'MICSON', 'The MC Running Shoes RS3 are designed to provide cushioning, arch support, and moisture-wicking properties, enhancing both comfort and performance during your runs. Their flat and wide base ensures enhanced stability, while the supportive heel counter contributes to a locked-in feel. Additionally, these running shoes feature a cushioned collar and tongue for added comfort and incorporate a Torsion System between the heel and forefoot to maintain stability throughout your run.', 0, 130, '1714653757.png', '1714654313.png', '1714654319.png', '1714654335.png', '1714654342.png', 500, 0, 0, 0, 0, '2024-05-01 20:42:37'),
(149, 57, 'MC Running Shoes RS4', 'r4', 'MICSON', 'The MC Running Shoes RS4 are designed to provide cushioning, arch support, and moisture-wicking properties, enhancing both comfort and performance during your runs. Their flat and wide base ensures enhanced stability, while the supportive heel counter contributes to a locked-in feel. Additionally, these running shoes feature a cushioned collar and tongue for added comfort and incorporate a Torsion System between the heel and forefoot to maintain stability throughout your run.', 0, 150, '1714653817.png', '1714654369.png', '1714654375.png', '1714654382.png', '1714654388.png', 500, 0, 0, 0, 0, '2024-05-01 20:43:37'),
(150, 57, 'MC Running Shoes RS5', 'rs5', 'MICSON', 'The MC Running Shoes RS5 are designed to provide cushioning, arch support, and moisture-wicking properties, enhancing both comfort and performance during your runs. Their flat and wide base ensures enhanced stability, while the supportive heel counter contributes to a locked-in feel. Additionally, these running shoes feature a cushioned collar and tongue for added comfort and incorporate a Torsion System between the heel and forefoot to maintain stability throughout your run.', 0, 145, '1714653913.jpg', '1714654402.jpg', '1714654410.jpg', '1714654466.jpg', '1714654475.jpg', 500, 0, 1, 0, 0, '2024-05-01 20:45:13'),
(151, 57, 'MC Running Shoes RS6', 'rs6', 'MICSON', 'The MC Running Shoes RS6 are designed to provide cushioning, arch support, and moisture-wicking properties, enhancing both comfort and performance during your runs. Their flat and wide base ensures enhanced stability, while the supportive heel counter contributes to a locked-in feel. Additionally, these running shoes feature a cushioned collar and tongue for added comfort and incorporate a Torsion System between the heel and forefoot to maintain stability throughout your run.', 0, 123, '1714653960.jpg', '1714654493.jpg', '1714654500.jpg', '1714654506.jpg', '1714654513.jpg', 500, 0, 0, 0, 0, '2024-05-01 20:46:00'),
(153, 57, 'MC Running Shoes RS7', 'r7', 'MICSON', 'The MC Running Shoes RS7 are designed to provide cushioning, arch support, and moisture-wicking properties, enhancing both comfort and performance during your runs. Their flat and wide base ensures enhanced stability, while the supportive heel counter contributes to a locked-in feel. Additionally, these running shoes feature a cushioned collar and tongue for added comfort and incorporate a Torsion System between the heel and forefoot to maintain stability throughout your run.', 110, 105, '1714654095.png', '1714654534.png', '1714654541.png', '1714654547.png', '1714654552.png', 300, 0, 0, 0, 1, '2024-05-01 20:48:15'),
(154, 57, 'MC Running Shoes RS8', 'rs8', 'MICSON', 'The MC Running Shoes RS8 are designed to provide cushioning, arch support, and moisture-wicking properties, enhancing both comfort and performance during your runs. Their flat and wide base ensures enhanced stability, while the supportive heel counter contributes to a locked-in feel. Additionally, these running shoes feature a cushioned collar and tongue for added comfort and incorporate a Torsion System between the heel and forefoot to maintain stability throughout your run.', 0, 110, '1714654131.jpg', '1714654175.jpg', '1714654182.jpg', '1714654190.jpg', '1714654196.jpg', 300, 0, 0, 1, 0, '2024-05-01 20:48:51'),
(155, 58, 'MC Basketball Shoes BS1', 'bs1', 'MICSON', 'The MC Basketball Shoes BS1 are equipped with a padded collar and tongue, a cushioned insole, and a responsive midsole, providing comfort, impact protection, and stability during lateral movements on the court. Their flat and wide base ensures enhanced stability, complemented by a supportive heel counter for a secure and locked-in feel. Additionally, these basketball shoes feature a Torsion System between the heel and forefoot to maintain stability, along with a cushioned collar and tongue for added comfort during intense gameplay.', 0, 135, '1714654672.jpeg', '1714655041.jpg', '1714655047.jpeg', '1714655053.jpeg', '1714655059.jpeg', 1000, 0, 1, 0, 0, '2024-05-01 20:57:52'),
(156, 58, 'MC Basketball Shoes BS2', 'bs2', 'MICSON', 'The MC Basketball Shoes BS2 are equipped with a padded collar and tongue, a cushioned insole, and a responsive midsole, providing comfort, impact protection, and stability during lateral movements on the court. Their flat and wide base ensures enhanced stability, complemented by a supportive heel counter for a secure and locked-in feel. Additionally, these basketball shoes feature a Torsion System between the heel and forefoot to maintain stability, along with a cushioned collar and tongue for added comfort during intense gameplay.', 0, 125, '1714654703.jpeg', '1714655140.jpg', '1714655147.jpeg', '1714655153.jpeg', '1714655160.jpeg', 500, 0, 0, 0, 0, '2024-05-01 20:58:23'),
(157, 58, 'MC Basketball Shoes BS3', 'bs3', 'MICSON', 'The MC Basketball Shoes BS3 are equipped with a padded collar and tongue, a cushioned insole, and a responsive midsole, providing comfort, impact protection, and stability during lateral movements on the court. Their flat and wide base ensures enhanced stability, complemented by a supportive heel counter for a secure and locked-in feel. Additionally, these basketball shoes feature a Torsion System between the heel and forefoot to maintain stability, along with a cushioned collar and tongue for added comfort during intense gameplay.', 0, 140, '1714654737.jpeg', '1714655175.jpg', '1714655182.jpeg', '1714655189.jpeg', '1714655195.jpeg', 500, 0, 0, 0, 0, '2024-05-01 20:58:57'),
(158, 58, 'MC Basketball Shoes BS4', 'bs4', 'MICSON', 'The MC Basketball Shoes BS4 are equipped with a padded collar and tongue, a cushioned insole, and a responsive midsole, providing comfort, impact protection, and stability during lateral movements on the court. Their flat and wide base ensures enhanced stability, complemented by a supportive heel counter for a secure and locked-in feel. Additionally, these basketball shoes feature a Torsion System between the heel and forefoot to maintain stability, along with a cushioned collar and tongue for added comfort during intense gameplay.', 140, 129, '1714654785.jpeg', '1714655229.jpg', '1714655235.jpeg', '1714655241.jpeg', '1714655247.jpeg', 500, 0, 0, 0, 1, '2024-05-01 20:59:45'),
(159, 58, 'MC Basketball Shoes BS5', 'bs5', 'MICSON', 'The MC Basketball Shoes BS5 are equipped with a padded collar and tongue, a cushioned insole, and a responsive midsole, providing comfort, impact protection, and stability during lateral movements on the court. Their flat and wide base ensures enhanced stability, complemented by a supportive heel counter for a secure and locked-in feel. Additionally, these basketball shoes feature a Torsion System between the heel and forefoot to maintain stability, along with a cushioned collar and tongue for added comfort during intense gameplay.', 130, 125, '1714654824.jpeg', '1714655265.jpg', '1714655271.jpeg', '1714655277.jpeg', '1714655284.jpeg', 500, 0, 0, 0, 1, '2024-05-01 21:00:24'),
(160, 58, 'MC Basketball Shoes BS6', 'bs6', 'MICSON', 'The MC Basketball Shoes BS6 are equipped with a padded collar and tongue, a cushioned insole, and a responsive midsole, providing comfort, impact protection, and stability during lateral movements on the court. Their flat and wide base ensures enhanced stability, complemented by a supportive heel counter for a secure and locked-in feel. Additionally, these basketball shoes feature a Torsion System between the heel and forefoot to maintain stability, along with a cushioned collar and tongue for added comfort during intense gameplay.', 0, 138, '1714654863.jpg', '1714655297.jpg', '1714655304.jpeg', '1714655309.jpeg', '1714655318.jpeg', 500, 0, 0, 0, 0, '2024-05-01 21:01:03'),
(161, 58, 'MC Basketball Shoes BS7', 'bs7', 'MICSON', 'The MC Basketball Shoes BS7 are equipped with a padded collar and tongue, a cushioned insole, and a responsive midsole, providing comfort, impact protection, and stability during lateral movements on the court. Their flat and wide base ensures enhanced stability, complemented by a supportive heel counter for a secure and locked-in feel. Additionally, these basketball shoes feature a Torsion System between the heel and forefoot to maintain stability, along with a cushioned collar and tongue for added comfort during intense gameplay.', 0, 145, '1714654909.jpg', '1714655334.jpg', '1714655343.jpeg', '1714655350.jpeg', '1714655356.jpeg', 500, 0, 0, 0, 0, '2024-05-01 21:01:49'),
(165, 58, 'MC Basketball Shoes BS8', 'bs8', 'MICSON\r\n', 'The MC Basketball Shoes BS8 are equipped with a padded collar and tongue, a cushioned insole, and a responsive midsole, providing comfort, impact protection, and stability during lateral movements on the court. Their flat and wide base ensures enhanced stability, complemented by a supportive heel counter for a secure and locked-in feel. Additionally, these basketball shoes feature a Torsion System between the heel and forefoot to maintain stability, along with a cushioned collar and tongue for added comfort during intense gameplay.\r\n', 0, 148, '1714731233.jpeg', '1714731265.jpg', '1714731269.jpeg', '1714731277.jpeg', '1714731282.jpeg', 500, 0, 0, 1, 0, '2024-05-03 10:13:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `role_as` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `created_at`, `role_as`) VALUES
(2, 'Samuel', 'samuel@hotmail.com', 168983333, '6789', '2024-04-22 21:11:50', 0),
(4, 'Mike', 'mikelau@gmail.com', 123331234, '1111', '2024-04-22 23:33:02', 1),
(5, 'Janson Then', 'jansonthen@gmail.com', 187776666, '3333', '2024-04-23 20:45:46', 1),
(13, 'Bob', 'bob@email.com', 184443333, '0000', '2024-05-01 15:14:42', 1),
(14, 'Joseph Chia', 'joseph@gmail.com', 189995555, '5555', '2024-05-02 07:17:18', 0),
(15, 'CK', 'ck@gmail.con', 12345678, '1111', '2024-05-02 16:49:50', 0),
(16, 'Richie', 'RC@gmail.com', 11111111, '8888', '2024-05-02 19:21:35', 0),
(17, 'AWAIS', 'awais@gmail.com', 1234567, '6666', '2024-05-02 19:54:06', 0),
(18, 'Jayden', 'jayden@gmail.com', 123456, '1234', '2024-05-02 20:01:58', 0),
(19, 'Muhamad', 'muhamd@gmail.com', 123456, '7777', '2024-05-02 20:41:49', 0),
(20, 'Soon', 'soon@gmail.com', 123456, '9999', '2024-05-02 20:49:01', 0),
(21, 'Ben', 'ben@gmail.com', 123456, '6969', '2024-05-02 21:07:30', 0),
(22, 'zach', 'zach@gmail.com', 1234567, '6666', '2024-05-02 21:30:26', 0),
(23, 'Nich', 'nich@gmail.com', 123456, '7777', '2024-05-02 21:54:14', 0),
(24, 'Cheah', 'cheah@gmail.com', 11111111, '1111', '2024-05-02 22:19:21', 0),
(25, 'Lee', 'lee@gmail.com', 123456789, '5555', '2024-05-05 11:29:47', 0);






--
-- Indexes for dumped tables
-- Use AUTO_INCREMENT PRIMARY KEY, so can ignore these ones below.
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
