-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2023 at 12:43 AM
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
-- Database: `ana_gourmet`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `passwords` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `fullname`, `username`, `passwords`) VALUES
(1, 'Andres', 'amosquera', 'qwertyuiopa'),
(2, 'Juan', 'jmahecha', 'asdfghjklq'),
(3, 'Ana', 'ahernandez', 'asdfghjklqw'),
(5, 'Lucas', 'lmosquera', 'qwertyuiopas');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`) VALUES
(1, 'Hamburguesas'),
(2, 'Perros'),
(3, 'Postres'),
(5, 'Pizzas');

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `title`, `description`, `price`, `category_id`, `admin_id`) VALUES
(1, 'Big Mac', 'Hamburguesa Grande', 20000, 1, 1),
(2, 'Pizza Napolitana', 'Pizza con peperoni y salsa napolitana', 10000, 5, 2),
(3, 'Pizza Mexicana', 'Pizza picante', 10000, 5, 5),
(4, 'Pizza de carne', 'Pizza con carne', 10000, 5, 5),
(6, 'Lasagna', 'Carne molida, queso, pollo', 15000, 5, 2),
(7, 'Hamburguesa Quesisima', 'Hamburguesa con queso cheddar', 22000, 1, 3),
(8, 'Hamburguesa Doble', 'Hamburguesa con doble carne', 25000, 1, 2),
(9, 'Perro especial', 'Perro con doble queso', 15000, 2, 2),
(10, 'Muffin', 'Pastelito', 10000, 3, 3),
(11, 'Tarta de Chocolate', 'Tarta con chocolate', 10000, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `food_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `customer_email` varchar(255) DEFAULT NULL,
  `customer_address` varchar(255) DEFAULT NULL,
  `subtotal` int(11) DEFAULT NULL,
  `iva` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `food_id`, `quantity`, `customer_name`, `customer_email`, `customer_address`, `subtotal`, `iva`, `total`) VALUES
(1, 1, 1, 'Andres Mosquera', 'andresm@gmail.com', 'calle 12a #71c - 20', 20000, 3800, 23800),
(2, 2, 5, 'Bill Gates', 'bgates@gmail.com', 'calle 13b #45 - 30', 75000, 14250, 89250),
(3, 1, 2, 'Steve Jobs', 'sjobs@gmail.com', 'calle 4', 40000, 7600, 47600),
(4, 1, 4, 'Patrick Collison', 'pcollison@gmail.com', 'calle 6', 80000, 15200, 95200),
(5, 1, 1, 'Sergei Brin', 'sbrin@gmail.com', 'calle 1', 20000, 3800, 23800),
(6, 3, 6, 'Larry Ellison', 'lellison@gmail.com', 'calle 10', 60000, 11400, 71400),
(7, 3, 3, 'Christian', 'cdior@gmail.com', 'calle 4', 30000, 5700, 35700),
(8, 2, 7, 'gucci', 'gucci@gmail.com', 'calle 9', 105000, 19950, 124950),
(9, 1, 2, 'Freddie', 'fmercury@gmail.com', 'calle 2', 40000, 7600, 47600),
(10, 1, 1, 'Michael', 'mjackson@gmail.com', 'calle 8', 20000, 3800, 23800),
(11, 3, 2, 'taylor', 'tswift@gmail.com', 'calle 5', 20000, 3800, 23800),
(12, 1, 4, 'Robert', 'rgrenne@gmail.com', 'calle 4', 80000, 15200, 95200),
(13, 1, 4, 'Casanova', 'gcasanova@gmail.com', 'calle 8', 80000, 15200, 95200),
(14, 2, 9, 'Jeff Bezos', 'jbezos@gmail.com', 'calle 6', 135000, 25650, 160650),
(15, 3, 5, 'Simone', 'sbehauvior@gmail.com', 'calle 7', 50000, 9500, 59500),
(16, 2, 3, 'Socrates', 'socrates@gmail.com', 'calle 5', 45000, 8550, 53550),
(17, 2, 5, 'Platon', 'platon@gmail.com', 'Avenida 1', 75000, 14250, 89250),
(18, 1, 2, 'Hermes', 'hermes@gmail.com', 'Avenida 3', 40000, 7600, 47600),
(19, 1, 3, 'Fredrich', 'fnieztche@gmail.com', 'Avenida 9', 60000, 11400, 71400),
(20, 1, 5, 'Goethe', 'goethe@gmail.com', 'Avenida 7', 100000, 19000, 119000),
(21, 1, 3, 'Shopenhaue', 'shopenhauer@gmail.com', 'Avenida 5', 60000, 11400, 71400),
(22, 1, 9, 'Jesus', 'mesias@gmail.com', 'Avenida 7', 180000, 34200, 214200),
(23, 2, 5, 'Napoleon', 'nbonaparte@gmail.com', 'Avenida 6', 75000, 14250, 89250),
(24, 3, 2, 'Luis', 'luis15@gmail.com', 'Avenida 5', 20000, 3800, 23800),
(25, 1, 7, 'Aristoteles', 'aristoteles@gmail.com', 'Avenida 8', 140000, 26600, 166600),
(26, 2, 3, 'Newton', 'newton@gmail.com', 'Avenida 3', 45000, 8550, 53550),
(27, 1, 3, 'Einstein', 'einstein@gmail.com', 'calle 4', 60000, 11400, 71400);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `food_id` (`food_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `foods`
--
ALTER TABLE `foods`
  ADD CONSTRAINT `foods_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `foods_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`food_id`) REFERENCES `foods` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
