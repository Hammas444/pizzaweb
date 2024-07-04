-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2023 at 08:48 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizzeria`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(255) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(4, 'Shaheen  Afridi', 'Shaheen@gmail.com', '10'),
(6, 'Shadab Khan', 'Shadab@gmail.com', '29'),
(7, 'fakhar', 'fakhar@gmail.com', '111');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `customer_phone` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `item_id` int(255) NOT NULL,
  `item_price` int(255) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `datee` date NOT NULL,
  `order_size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `customer_name`, `customer_email`, `customer_address`, `customer_phone`, `item_name`, `quantity`, `item_id`, `item_price`, `item_image`, `payment_method`, `datee`, `order_size`) VALUES
(47, 'ahmad ali', 'ahmed@gmail.com', 'malir', '248978423789', 'Olives Pizza', 2, 34, 850, 'uploads/pizza-9.jpg', 'ONLINE PAYMENT', '2023-01-26', 'Small'),
(57, 'yerwe', 'hameessheikh10@gmail.com', 'karachi', '348682347234908', 'Afghani Pizza', 2, 33, 500, 'uploads/home-img-3.png', 'Cash', '2023-05-25', 'Small');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_password` int(255) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `customer_phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_address`, `customer_phone`) VALUES
(1, 'Faraz', 'official.tahanaseer@gmail.com', 543543, ' karachi', '2450425054'),
(2, 'Faraz', 'official.tahanaseer@gmail.com', 123545, 'north karachi', '2450425054'),
(3, 'yerwe', 'hameessheikh10@gmail.com', 77, 'karachi', '348682347234908'),
(4, 'ahmad ali', 'ahmed@gmail.com', 222, 'malir', '248978423789'),
(7, 'ali', 'ali@gmail.com', 11, 'lahore', '546756'),
(8, 'Hasan', 'Hasan@gmail.com', 22, 'Lahore', '2347239'),
(9, 'baber', 'baber@gmail.com', 123, 'lahore', '1122874876');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `item_image`, `item_price`) VALUES
(33, 'Afghani Pizza', 'uploads/home-img-3.png', '500'),
(34, 'Olives Pizza', 'uploads/pizza-9.jpg', '850'),
(35, 'Fajita Pizza', 'uploads/home-img-2.png', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `customer_phone` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_id` int(255) NOT NULL,
  `item_price` int(255) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `datee` date NOT NULL,
  `quantity` int(255) NOT NULL,
  `order_size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_name`, `customer_email`, `customer_address`, `customer_phone`, `item_name`, `item_id`, `item_price`, `item_image`, `payment_method`, `datee`, `quantity`, `order_size`) VALUES
(22, 'yasir', 'hameessheikh10@gmail.com', 'karachi', '348682347234908', 'special pizza', 0, 23432, 'uploads/home-img-1.png', 'online_payment', '2022-12-29', 5, 'small'),
(26, 'yerwe', 'hameessheikh10@gmail.com', 'karachi', '348682347234908', 'Afghani Pizza', 33, 500, 'uploads/home-img-3.png', 'Cash', '2022-12-20', 3, 'Medium'),
(27, 'ahmad ali', 'ahmed@gmail.com', 'malir', '248978423789', 'Afghani Pizza', 33, 500, 'uploads/home-img-3.png', 'ONLINE PAYMENT', '2023-01-05', 2, 'Small'),
(28, 'yerwe', 'hameessheikh10@gmail.com', 'karachi', '348682347234908', 'Afghani Pizza', 33, 500, 'uploads/home-img-3.png', 'Cash', '2023-02-02', 3, 'Small'),
(29, 'yerwe', 'hameessheikh10@gmail.com', 'karachi', '348682347234908', 'Olives Pizza', 34, 850, 'uploads/pizza-9.jpg', 'ONLINE PAYMENT', '2023-01-18', 5, 'Small'),
(30, 'yerwe', 'hameessheikh10@gmail.com', 'karachi', '348682347234908', 'Afghani Pizza', 33, 500, 'uploads/home-img-3.png', 'Cash', '2023-02-17', 1, 'Small'),
(31, 'Hasan', 'Hasan@gmail.com', 'Lahore', '2347239', 'Afghani Pizza', 33, 500, 'uploads/home-img-3.png', 'Cash', '2023-04-11', 1, 'Medium'),
(32, 'Hasan', 'Hasan@gmail.com', 'Lahore', '2347239', 'Olives Pizza', 34, 850, 'uploads/pizza-9.jpg', 'ONLINE PAYMENT', '2023-03-30', 1, 'Medium'),
(33, 'yerwe', 'hameessheikh10@gmail.com', 'karachi', '348682347234908', 'Afghani Pizza', 33, 500, 'uploads/home-img-3.png', 'ONLINE PAYMENT', '2023-03-30', 1, 'Small');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
