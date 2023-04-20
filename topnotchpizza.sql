-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 18, 2023 at 02:00 PM
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
-- Database: `topnotchpizza`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `idCategories` int(11) NOT NULL,
  `categoryName` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`idCategories`, `categoryName`) VALUES
(1, 'All Time Favourite'),
(2, 'Gourmet'),
(3, 'Traditional');

-- --------------------------------------------------------

--
-- Table structure for table `Checkout`
--

CREATE TABLE `Checkout` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `quantity` double NOT NULL,
  `price` double NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Checkout`
--

INSERT INTO `Checkout` (`id`, `name`, `quantity`, `price`, `email`) VALUES
(1, 'Double Cheese', 1, 15.88, 'gur@gmail.com'),
(1, 'Double Cheese', 1, 15.88, 'gur@gmail.com'),
(1, 'Double Cheese', 10, 158.8, 'gur@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pizza`
--

CREATE TABLE `pizza` (
  `id` int(11) NOT NULL,
  `category` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `productCategory` int(11) NOT NULL,
  `Calories` varchar(30) NOT NULL,
  `Price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pizza`
--

INSERT INTO `pizza` (`id`, `category`, `name`, `description`, `image`, `productCategory`, `Calories`, `Price`) VALUES
(1, 'All Time Favourite', 'Double Cheese', 'Pizza Sauce, Mozzarella cheese, cheddar cheese', 'product/double-cheese.jpg', 1, '200 cal', 15.88),
(2, 'Gourmet', 'All Meat', 'Pizza Sauce Pepperoni Ham Salami Beef Sausage Bacon Mozzarella cheese\r\n', 'product/all-meat.jpg', 2, '250 cal', 22.11),
(3, 'Traditional', 'Canadian Classic', 'Pizza Sauce Pepperoni Ham Mushroom Mozzarella Cheese Cheddar Cheese', 'product/canadian-classic.jpg', 3, '200 cal', 21.19),
(4, 'All Time Favourite', 'Pepperoni Mushroom', 'Pizza Sauce, Mozzarella cheese, pepperoni, Mushroom', 'product/pepperoni-mushroom.jpg', 1, '220 cal', 19.99),
(5, 'Gourmet', 'Chicken Bacon Ranch', 'Ranch Sauce, Green Pepper, Onion, Tomato, Ranch Chicken, Mozzarella cheese', 'product/chicken-bacon-ranch.jpg', 2, '180 cal', 23.11),
(6, 'Traditional', 'Vaggie Fans', 'Pizza Sauce, Mushroom, Green Pepper, Red Onion, Black Olive, Banana Pepper, Tomato, Pineapple, Pizza', 'product/veggie-fans.jpg', 3, '150 cal', 21.1),
(7, 'All Time Favourite', 'Hawaiian', 'Pizza Sauce, Ham, Pineapple, Pizza Sauce & Mozzarella Cheese', 'product/hawaiian.jpg', 1, '200 cal', 19),
(8, 'Gourmet', 'Sweet & Spicy Lover', 'Pizza Sauce, Hot Capicallo, Chorizo Sausage, Green Pepper, Hot Banana Pepper, Pineapple, Pizza Sauce', 'product/sweet-spicy-lovers.jpg', 2, '220 cal', 24.99);

-- --------------------------------------------------------

--
-- Table structure for table `Takeout`
--

CREATE TABLE `Takeout` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `quantity` double NOT NULL,
  `price` double NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Takeout`
--

INSERT INTO `Takeout` (`id`, `name`, `quantity`, `price`, `email`) VALUES
(2, 'All Meat', 10, 221.1, 'gur@gmail.com'),
(2, 'All Meat', 10, 221.1, 'gur@gmail.com'),
(2, 'All Meat', 10, 221.1, 'gur@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `postalcode` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `phone`, `street`, `city`, `province`, `postalcode`, `password`, `usertype`) VALUES
(1, 'guri', 'maan', 'gur@gmail.com', '999999999', '143 weber street', 'waterloo', 'ontario', 'r3ty4j', '202cb962ac59075b964b07152d234b70', ''),
(2, 'sara', 'conestoga', 'saranya@gmail.com', '1234567890', '143 weber street', 'waterloo', 'ontario', 'r3ty4j', '202cb962ac59075b964b07152d234b70', ''),
(3, 'Monika', 'Panchal', 'monika@gmail.com', '2268998610', '62, BARWOOD CRESCENT', 'KITCHENER', 'Ontario', 'N2E 1V', 'aea37482e7798de0bf0b9a421786c8dc', ''),
(4, 'Monika', 'Panchal', 'Monika@gmail.com', '2268998610', '62, BARWOOD CRESCENT', 'KITCHENER', 'Ontario', 'N2E 1V', '752bb8a7bee4c60c5e537965db921b61', ''),
(5, 'monika', 'panchal', 'test@gmail.com', '2268998610', '62, BARWOOD CRESCENT', 'KITCHENER', 'Ontario', 'N2E 1V', 'f925916e2754e5e03f75dd58a5733251', ''),
(6, 'monika', 'panchal', 'm@gmail.com', '2268998610', '62, BARWOOD CRESCENT', 'KITCHENER', 'Ontario', 'N2E 1V', 'a706b2177d6394ea08f098fd121f1b2c', ''),
(7, 'Gurdeep', 'Singh', 'gu@gmail.com', '1111111111', '143 weber street north', 'waterloo', 'ontario', 'n2j3g9', '202cb962ac59075b964b07152d234b70', 'customer'),
(8, 'Monika', 'Panchal', 'monikacomp54@gmail.com', '1234567890', '143 weber street north', 'waterloo', 'ontario', 'n2j3g9', '202cb962ac59075b964b07152d234b70', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`idCategories`);

--
-- Indexes for table `pizza`
--
ALTER TABLE `pizza`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productCategory` (`productCategory`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `idCategories` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pizza`
--
ALTER TABLE `pizza`
  ADD CONSTRAINT `pizza_ibfk_1` FOREIGN KEY (`productCategory`) REFERENCES `categories` (`idCategories`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
