-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2020 at 02:47 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zenestate`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `author` varchar(100) NOT NULL,
  `title` varchar(500) NOT NULL,
  `preview` varchar(500) NOT NULL,
  `post` longtext NOT NULL,
  `images` longtext NOT NULL,
  `simage` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `author`, `title`, `preview`, `post`, `images`, `simage`) VALUES
(1, 'Samuel Paul', 'Simple and luxury lifestyle', 'It is all about presentation and comfort.', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam eaque ipsa quae illo inventore veritatis quasi architecto beatae vitae dicta explicabo nemo ipsam voluptatem quia voluptas aspernatu', '', ''),
(2, 'Samuel Ejiga', 'Cheaper Housing', '', 'Be sure to use an appropriate type attribute on all inputs (e.g., email for email address or number for numerical information) to take advantage of newer input controls like email verification, number selection, and more.\r\n\r\nHereâ€™s a quick example to demonstrate Bootstrapâ€™s form styles. Keep reading for documentation on required classes, form layout, and more.', '1.jpg', 'axe-1748305_1920.jpg'),
(3, 'Samuel Ejiga', 'Hydro project', 'mixers', 'Be sure to use an appropriate type attribute on all inputs (e.g., email for email address or number for numerical information) to take advantage of newer input controls like email verification, number selection, and more.\r\n\r\nHereâ€™s a quick example to demonstrate Bootstrapâ€™s form styles. Keep reading for documentation on required classes, form layout, and more.', '5.jpg', 'girl-1868930_1920.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `property_type` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `location` text NOT NULL,
  `country` varchar(500) NOT NULL,
  `price` int(11) NOT NULL,
  `pros` text NOT NULL,
  `cons` text NOT NULL,
  `vendor` varchar(80) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `phone2` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `fimage` longtext NOT NULL,
  `images` longblob NOT NULL,
  `transaction_state` varchar(100) NOT NULL,
  `urgency` varchar(100) NOT NULL,
  `property_state` varchar(40) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `title`, `property_type`, `description`, `location`, `country`, `price`, `pros`, `cons`, `vendor`, `phone`, `phone2`, `email`, `fimage`, `images`, `transaction_state`, `urgency`, `property_state`, `created`) VALUES

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(80) NOT NULL,
  `property` varchar(100) NOT NULL,
  `message` varchar(800) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `name`, `phone`, `email`, `property`, `message`, `time`) VALUES
(3, 'Paul Merson', '08094085992', '', 'bungalow', 'HKYFIY', '2020-03-31 01:40:28'),
(4, 'Christopher Ogbe', '+2347059658235', 'olochesamuel2@gmail.com', 'bungalow', 'n,bbjb', '2020-03-31 01:40:28'),
(5, 'Paul Merson', '+2347059658235', 'olochesamuel2@gmail.com', 'bungalow', ',.g u8ogu', '2020-03-31 01:40:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `address` varchar(250) NOT NULL,
  `username` varchar(60) NOT NULL,
  `usertype` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `phone2` varchar(40) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `password` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `end_date` datetime NOT NULL,
  `status` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `username`, `usertype`, `email`, `phone`, `phone2`, `sex`, `password`, `date`, `end_date`, `status`) VALUES
(1, 'Samuel Ejiga', 'bk14b, Democracy Crescent, Gaduwa Estate', 'gamji', 'Admin', 'olochesamuel2@gmail.com', '+2347059658235', '', 'Male', '$2y$10$a.Iyh/YYgtPcasn6bjCw5ex4Xeey.HqlpEgTNIGcI4irnerNzlsn6', '2020-03-30 21:17:20', '0000-00-00 00:00:00', ''),
(2, 'Paul Ejiga', 'bk14b, Democracy Crescent, Gaduwa Estate', 'manjigs', 'Staff', 'manjigs@gmail.com', '+2347059658235', '', 'Male', '$2y$10$NsnZxUN3NEVVmST7Gnc0wu.1CkLR2pocnQ.sZMZaRSQfBpAAmXxme', '2020-03-30 21:57:04', '0000-00-00 00:00:00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
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
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;