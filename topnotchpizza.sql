-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 08, 2023 at 05:41 AM
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
-- Table structure for table `pizza`
--

CREATE TABLE `pizza` (
  `id` int(11) NOT NULL,
  `category` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `image` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pizza`
--

INSERT INTO `pizza` (`id`, `category`, `name`, `description`, `image`) VALUES
(1, 'All Time Favourite', 'Double Cheese', 'Pizza Sauce, Mozzarella cheese, cheddar cheese', 'product/double-cheese.jpg'),
(2, 'Gourmet', 'All Meat', 'Pizza Sauce Pepperoni Ham Salami Beef Sausage Bacon Mozzarella cheese\r\n', 'product/all-meat.jpg'),
(3, 'Traditional', 'Canadian Classic', 'Pizza Sauce Pepperoni Ham Mushroom Mozzarella Cheese Cheddar Cheese', 'product/canadian-classic.jpg'),
(4, 'All Time Favourite', 'Pepperoni Mushroom', 'Pizza Sauce, Mozzarella cheese, pepperoni, Mushroom', 'product/pepperoni-mushroom.jpg'),
(5, 'Gourmet', 'Chicken Bacon Ranch', 'Ranch Sauce, Green Pepper, Onion, Tomato, Ranch Chicken, Mozzarella cheese', 'product/chicken-bacon-ranch.jpg'),
(6, 'Traditional', 'Vaggie Fans', 'Pizza Sauce, Mushroom, Green Pepper, Red Onion, Black Olive, Banana Pepper, Tomato, Pineapple, Pizza', 'product/veggie-fans.jpg'),
(7, 'All Time Favourite', 'Hawaiian', 'Pizza Sauce, Ham, Pineapple, Pizza Sauce & Mozzarella Cheese', 'product/hawaiian.jpg'),
(8, 'Gourmet', 'Sweet & Spicy Lover', 'Pizza Sauce, Hot Capicallo, Chorizo Sausage, Green Pepper, Hot Banana Pepper, Pineapple, Pizza Sauce', 'product/sweet-spicy-lovers.jpg'),
(9, 'Traditional', 'Tuscan', 'Pizza Sauce, Hot Chicken, Spinach, Garlic, Pizza Sauce, Feta & Mozzarella Cheese', 'product/tuscan.jpg'),
(10, 'Famous Pizza', 'Italian Pizza', 'This is our italian famous pizza', 'product/double-cheese.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `Description` varchar(400) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `phone`, `street`, `city`, `province`, `postalcode`, `password`) VALUES
(1, 'guri', 'maan', 'gur@gmail.com', '999999999', '143 weber street', 'waterloo', 'ontario', 'r3ty4j', '202cb962ac59075b964b07152d234b70'),
(2, 'sara', 'conestoga', 'saranya@gmail.com', '1234567890', '143 weber street', 'waterloo', 'ontario', 'r3ty4j', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pizza`
--
ALTER TABLE `pizza`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
