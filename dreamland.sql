-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2023 at 06:10 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dreamland`
--

-- --------------------------------------------------------

--
-- Table structure for table `propartyinfo`
--

CREATE TABLE `propartyinfo` (
  `id` int(11) NOT NULL,
  `ownername` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `khotian` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `details` text NOT NULL,
  `image` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `propartyinfo`
--

INSERT INTO `propartyinfo` (`id`, `ownername`, `number`, `email`, `address`, `khotian`, `type`, `location`, `price`, `details`, `image`) VALUES
(1, 'John Doe', '1234567890', 'johndoe@example.com', '123 Main St', 'Khotian123', 'House', 'City', 100000, 'Spacious and beautiful house for sale', 'image(1).jpg'),
(2, 'Jane Smith', '9876543210', 'janesmith@example.com', '456 Elm St', 'Khotian456', 'Apartment', 'Suburb', 75000, 'Cozy apartment in a quiet neighborhood', 'image(3).jpg'),
(3, 'Person 3', '1234567890', 'person3@example.com', '123 Elm St', 'Khotian789', 'Condo', 'Town', 90000, 'Condo with a great view', 'image(4).jpg'),
(4, 'Person 4', '9876543210', 'person4@example.com', '456 Oak St', 'Khotian567', 'Villa', 'Rural', 150000, 'Luxury villa with a pool', 'image(5).jpg'),
(5, 'Person 5', '1234567890', 'person5@example.com', '789 Pine St', 'Khotian333', 'Apartment', 'City', 80000, 'Modern apartment in the heart of the city', 'image(6).jpg'),
(6, 'Person 6', '9876543210', 'person6@example.com', '101 Forest Ave', 'Khotian101', 'House', 'Suburb', 120000, 'Charming family home with a garden', 'image(7).jpg'),
(7, 'Person 7', '1234567890', 'person7@example.com', '555 Beach Rd', 'Khotian555', 'Condo', 'Beach', 110000, 'Beachfront condo with ocean views', 'image(8).jpg'),
(8, 'Person 8', '9876543210', 'person8@example.com', '222 Mountain Dr', 'Khotian222', 'Villa', 'Mountain', 180000, 'Mountain villa with panoramic views', 'image(9).jpg'),
(9, 'Person 9', '1234567890', 'person9@example.com', '333 River Ln', 'Khotian333', 'Apartment', 'City', 75000, 'Downtown apartment near amenities', 'image(10).jpg'),
(10, 'Person 10', '9876543210', 'person10@example.com', '777 Lakeside Dr', 'Khotian777', 'House', 'Lake', 160000, 'Lakefront house with a private dock', 'image(11).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `address`, `email`, `password`) VALUES
(1, 'sun', ' Rajshahi', '1@gmail.com', '123456'),
(2, 'RaselIslamBabu', ' Rajshahi', 'raselahamed785@gmail.com', '1234567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `propartyinfo`
--
ALTER TABLE `propartyinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `propartyinfo`
--
ALTER TABLE `propartyinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
