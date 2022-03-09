-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 30, 2021 at 06:34 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mylokalfood`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_type` int(11) NOT NULL COMMENT '1 for superAdmin, 2 for Restaurant Owner',
  `admin_name` varchar(300) NOT NULL,
  `admin_email` varchar(300) NOT NULL,
  `admin_pwd` varchar(50) NOT NULL,
  `pwdHash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_type`, `admin_name`, `admin_email`, `admin_pwd`, `pwdHash`) VALUES
(1, 2, 'Faradeena', 'akmzyra@gmail.com', '123deena', '$2y$10$.iuWe5cYxGnrRlaOw0gW0OJUAVvQurFrin1k76gpPLvLY2wv/KpK2');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `comments`) VALUES
(1, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(50) NOT NULL,
  `cust_email` varchar(50) NOT NULL,
  `cust_pwd` varchar(15) NOT NULL,
  `pwdHash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `cust_email`, `cust_pwd`, `pwdHash`) VALUES
(1, 'Banana bin Banini', 'babanana@minion.com', 'bananaisnice', ''),
(2, 'Podo Podogun', 'grape@gmail.com', 'grapeisnicer', '$2y$10$Lb8x5ede4Z61T5TbRU1FeuOkU9UPnCKKLdvOQEUyTWiPWgsHoIQwq'),
(3, 'Gigi Hadid', 'gigih@hotmail.com', 'gigih21', '$2y$10$na6daGYfoL6AILK6dnQuf.T28pt4nd2Dop4gYRiBBD1Ju4BOaHz/y'),
(4, 'Faradeena', 'afafarah99@gmail.com', '123fara', '$2y$10$O9PXXeAXyYkaag5iUFaIJe7gw.1/FTwwUu1v51sWtnzyRTg7yMWZ.'),
(5, 'Faradeena', 'akmzyra@gmail.com', '123deena', '$2y$10$b6JZN38EfEl6uiOXekJtteI3OPhRmLeTFmh.VvomTZELY8AQSvxp6');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_id` int(11) NOT NULL,
  `rest_id` int(11) NOT NULL COMMENT 'restaurant id',
  `food_name` varchar(100) NOT NULL COMMENT 'menu name',
  `food_cat` int(1) NOT NULL,
  `halal_nonhalal` varchar(3) NOT NULL,
  `food_price` float(8,2) NOT NULL,
  `food_img` varchar(255) NOT NULL,
  `food_availability` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `rest_id`, `food_name`, `food_cat`, `halal_nonhalal`, `food_price`, `food_img`, `food_availability`) VALUES
(1, 1, 'Nasi Lemak', 1, 'H', 5.00, 'img/food/nasi-lemak.jpg', 1),
(2, 2, 'Hainanese Chicken Rice', 1, 'H', 13.00, 'img/food/hainanese-chicken-rice.jpg', 1),
(3, 2, 'Nasi Kerabu', 2, 'H', 7.50, 'img/food/nasi-kerabu.jpg', 1),
(4, 1, 'Roti Canai', 3, 'H', 5.00, 'img/food/roti-canai.jpg', 1),
(5, 3, 'Bak Kut Teh', 4, 'NH', 10.60, 'img/food/bak-kut-teh.jpg', 1),
(6, 1, 'Chicken Satay', 4, 'H', 9.80, 'img/food/satay.jpg', 1),
(7, 4, 'Ais Kacang COOL', 4, 'H', 6.00, 'img/food/ais-kacang.jpg', 1),
(8, 4, 'Cendol COOL', 4, 'H', 3.00, 'img/food/cendol.jpg', 1),
(9, 1, 'Tom Yam', 2, 'H', 5.50, 'img/food/Tom-yum.jpeg', 6),
(10, 3, 'Teh Tarik', 5, 'H', 2.50, 'img/food/teh-tarik.jpeg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `food_category`
--

CREATE TABLE `food_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_desc` text NOT NULL,
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_category`
--

INSERT INTO `food_category` (`cat_id`, `cat_name`, `cat_desc`, `creation_date`) VALUES
(1, 'breakfast', 'food for breakfast', '2021-06-01 00:00:00'),
(2, 'lunch', 'food for lunch', '2021-06-01 00:00:00'),
(3, 'dinner', 'food for dinner', '2021-06-01 00:00:00'),
(4, 'dessert', 'food for dessert', '2021-06-01 00:00:00'),
(5, 'beverages', 'beverages', '2021-06-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `food_review`
--

CREATE TABLE `food_review` (
  `review_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `food_review` text NOT NULL,
  `food_ratings` int(11) NOT NULL,
  `submit_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_review`
--

INSERT INTO `food_review` (`review_id`, `food_id`, `food_review`, `food_ratings`, `submit_date`) VALUES
(1, 1, 'Nice nasi lemak!', 2, '2020-01-16 19:34:08'),
(2, 10, 'Nice teh tarik!', 2, '2021-06-30 04:26:55');

-- --------------------------------------------------------

--
-- Table structure for table `halal_nonhalal`
--

CREATE TABLE `halal_nonhalal` (
  `hnh_id` varchar(3) NOT NULL,
  `hnh_name` varchar(255) NOT NULL,
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `halal_nonhalal`
--

INSERT INTO `halal_nonhalal` (`hnh_id`, `hnh_name`, `creation_date`) VALUES
('H', 'halal', '2021-06-01 00:00:00'),
('NH', 'non-halal', '2021-06-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `order_invoice`
--

CREATE TABLE `order_invoice` (
  `order_id` int(11) NOT NULL,
  `order_datetime` datetime NOT NULL DEFAULT current_timestamp(),
  `order_status` int(11) NOT NULL DEFAULT 1,
  `order_amt` float(8,2) NOT NULL,
  `cust_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_invoice`
--

INSERT INTO `order_invoice` (`order_id`, `order_datetime`, `order_status`, `order_amt`, `cust_id`) VALUES
(1, '2021-06-01 00:00:00', 1, 17.30, 5),
(2, '2021-06-29 11:32:00', 1, 5.00, 5),
(3, '2021-06-29 11:34:41', 1, 6.00, 5),
(4, '2021-06-29 12:52:51', 1, 5.00, 5),
(5, '2021-06-29 12:53:45', 1, 6.00, 5),
(6, '2021-06-29 12:54:32', 1, 3.00, 5),
(7, '2021-06-29 13:31:41', 1, 5.50, 5),
(8, '2021-06-29 13:36:46', 1, 25.50, 5),
(9, '2021-06-29 13:41:24', 1, 5.00, 5),
(10, '2021-06-29 13:46:15', 1, 12.50, 5),
(11, '2021-06-29 13:46:28', 1, 5.00, 5),
(12, '2021-06-29 13:46:40', 1, 3.00, 5),
(13, '2021-06-30 01:24:37', 1, 13.00, 5),
(14, '2021-06-30 01:25:19', 1, 3.00, 5),
(15, '2021-06-30 01:27:00', 1, 19.60, 5),
(16, '2021-06-30 01:31:49', 1, 17.50, 3),
(34, '2021-06-30 03:20:20', 1, 13.00, 5),
(35, '2021-06-30 03:20:40', 1, 3.00, 5),
(36, '2021-06-30 03:21:10', 1, 10.00, 5),
(37, '2021-06-30 03:22:05', 1, 7.50, 1),
(38, '2021-06-30 03:23:26', 1, 7.50, 1),
(39, '2021-06-30 03:24:17', 1, 5.00, 1),
(40, '2021-06-30 03:34:53', 1, 10.00, 5),
(41, '2021-06-30 03:35:53', 1, 10.00, 5);

-- --------------------------------------------------------

--
-- Table structure for table `order_line`
--

CREATE TABLE `order_line` (
  `line_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `food_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_line`
--

INSERT INTO `order_line` (`line_id`, `order_id`, `food_id`, `food_qty`) VALUES
(1, 2, 4, 1),
(2, 3, 8, 2),
(3, 4, 4, 1),
(4, 5, 8, 2),
(5, 6, 8, 1),
(6, 7, 9, 1),
(7, 8, 4, 1),
(8, 8, 3, 1),
(9, 8, 2, 1),
(10, 9, 4, 1),
(11, 10, 3, 1),
(12, 10, 4, 1),
(13, 11, 4, 1),
(14, 12, 8, 1),
(15, 13, 2, 1),
(16, 14, 8, 1),
(17, 15, 6, 2),
(18, 16, 3, 1),
(19, 16, 1, 2),
(20, 34, 2, 1),
(21, 35, 8, 1),
(22, 36, 1, 2),
(23, 37, 3, 1),
(24, 38, 3, 1),
(25, 39, 1, 1),
(26, 40, 4, 2),
(27, 41, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `rest_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL COMMENT 'The admin_id to manage the restaurant',
  `rest_name` varchar(50) NOT NULL,
  `rest_location` varchar(50) NOT NULL,
  `rest_rating` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`rest_id`, `admin_id`, `rest_name`, `rest_location`, `rest_rating`) VALUES
(1, 1, 'Restoran Seri Menanti', 'Kingfisher', 4),
(2, 2, 'GG Cafe', 'Plaza Likas', 5),
(3, 3, 'Kopitiam Chun', 'Menggatal Plaza', 3),
(4, 4, 'COOL CORNER', 'Suria Sabah', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`),
  ADD KEY `rest_id` (`rest_id`) USING BTREE;

--
-- Indexes for table `food_category`
--
ALTER TABLE `food_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `food_review`
--
ALTER TABLE `food_review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `halal_nonhalal`
--
ALTER TABLE `halal_nonhalal`
  ADD PRIMARY KEY (`hnh_id`);

--
-- Indexes for table `order_invoice`
--
ALTER TABLE `order_invoice`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `order_line`
--
ALTER TABLE `order_line`
  ADD PRIMARY KEY (`line_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `menu_id` (`food_id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`rest_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `food_category`
--
ALTER TABLE `food_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `food_review`
--
ALTER TABLE `food_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_invoice`
--
ALTER TABLE `order_invoice`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `order_line`
--
ALTER TABLE `order_line`
  MODIFY `line_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `rest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`rest_id`) REFERENCES `restaurant` (`rest_id`);

--
-- Constraints for table `food_review`
--
ALTER TABLE `food_review`
  ADD CONSTRAINT `food_review_ibfk_1` FOREIGN KEY (`food_id`) REFERENCES `food` (`food_id`);

--
-- Constraints for table `order_invoice`
--
ALTER TABLE `order_invoice`
  ADD CONSTRAINT `order_invoice_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`);

--
-- Constraints for table `order_line`
--
ALTER TABLE `order_line`
  ADD CONSTRAINT `order_line_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order_invoice` (`order_id`),
  ADD CONSTRAINT `order_line_ibfk_2` FOREIGN KEY (`food_id`) REFERENCES `food` (`food_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
