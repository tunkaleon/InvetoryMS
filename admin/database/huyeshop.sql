-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2023 at 01:19 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `justin_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(16) NOT NULL,
  `names` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `names`, `image`) VALUES
(6, 'camera12+', 'c5.JPG'),
(7, 'camera12+', 'product-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `coment`
--

CREATE TABLE `coment` (
  `id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `regno` varchar(255) NOT NULL,
  `coment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `full_names` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `full_names`, `email`, `subject`, `message`) VALUES
(1, 'Leon official', 'tunkaleon01@gmail.com', 'question', 'wARQWE');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_cost` varchar(255) NOT NULL,
  `order_stutus` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_names` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `quantity` int(11) NOT NULL,
  `p_names` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_cost`, `order_stutus`, `user_id`, `client_names`, `user_phone`, `user_address`, `order_date`, `quantity`, `p_names`) VALUES
(1, '120000000', 'delivered', 1, 'leon', '789932372', 'kabgayi', '2023-01-06 21:29:44', 2, 'DELL laptop'),
(2, '12000000', 'on_hold', 1, 'lolo', '789932372', 'rwanda/kgl', '2023-01-06 21:30:29', 1, 'hp laptop'),
(3, '36000000', 'on_hold', 1, 'leon', '789932372', 'kicukiro', '2023-01-06 21:30:18', 1, 'laptop'),
(4, '24000000', '0', 1, 'tunka', '789932372', 'kicukiro', '2023-01-07 07:02:08', 2, ''),
(5, '12000000', 'on_hold', 1, 'tunka', '789932372', 'kabgayi', '2023-01-07 11:30:33', 1, 'SUMSUNG phone');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`item_id`, `order_id`, `product_id`, `product_name`, `product_image`, `product_price`, `product_quantity`, `user_id`, `order_date`) VALUES
(1, 1, 22, 'SUMSUNG phone', '3.jpg', '12000000', 10, 1, '2022-12-28 13:23:07'),
(2, 2, 22, 'SUMSUNG phone', '3.jpg', '12000000', 1, 1, '2022-12-28 13:29:17'),
(3, 3, 22, 'SUMSUNG phone', '3.jpg', '12000000', 3, 1, '2023-01-05 12:30:42'),
(4, 4, 22, 'SUMSUNG phone', '3.jpg', '12000000', 2, 1, '2023-01-07 07:02:08'),
(5, 5, 22, 'SUMSUNG phone', '3.jpg', '12000000', 1, 1, '2023-01-07 11:30:33');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `p_names` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `p_names`, `description`, `price`, `quantity`, `date`, `image`, `category`) VALUES
(20, 'camera', 'good look', 12009000, 2, '2022-12-17', '111.jpg', 'camera'),
(21, 'smart', '500', 2500000, 20, '2022-12-17', 't2.jpg', 'tvs'),
(23, 'Fridge', 'high', 1200, 10, '2022-12-17', '44.jpg', 'fridge'),
(24, 'cooker', 'good look and lower power concemotion', 12000000, 10, '2022-12-17', '552.jpg', 'cooker'),
(25, 'speaker', 'high', 120, 20, '2022-12-17', 'Sayonapps-Sayona-Speaker-1.jpg', 'bags'),
(26, 'red bag', 'all', 1200, 2, '2022-12-17', 'bag1.jpg', 'bags'),
(29, 'bag', 'all quality for all fashion and all color every one can like', 12000000, 2, '2023-01-07', 'bag2.jpg', 'bags'),
(30, 'camera12+', 'more', 12000000, 10, '2023-01-07', '111.jpg', 'tvs'),
(34, 'dispense', 'yuyuu', 1200, 20, '2023-02-01', 'dispense.jpg', 'TVS'),
(35, 'disp', 'ihjkhlkhE;ADL', 12000000, 20, '2023-02-01', 'disp.jpg', 'desktop');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `names` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `names`, `email`, `password`, `user_type`) VALUES
(1, 'Leon official', 'tunkaleon01@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1'),
(2, 'Tunka-Leon', 'leon@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0'),
(3, 'Leon official', 'leon01@gmail.com', '25d55ad283aa400af464c76d713c07ad', '0'),
(4, 'roro', 'roro@gmail.com', '1234567', '0'),
(5, 'admin', 'admin@gmail.com', '12345678', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coment`
--
ALTER TABLE `coment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`item_id`);

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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `coment`
--
ALTER TABLE `coment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
