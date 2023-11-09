-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2023 at 02:48 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `available_rides`
--

CREATE TABLE `available_rides` (
  `id` int(255) NOT NULL,
  `Garriki Enugu - Lugbe Abuja` int(255) NOT NULL,
  `Nike Enugu - Aba Abia` int(255) NOT NULL,
  `Arochukwu Imo - Sapelle Delta` int(255) NOT NULL,
  `Awka Anambra - Suleja Niger` int(255) NOT NULL,
  `Lekki Lagos - Osogbo Osun` int(255) NOT NULL,
  `Adamawa Yola - Kano Kano` int(255) NOT NULL,
  `Garriki Enugu - Owerri Imo` int(255) NOT NULL,
  `ninth-mile Enugu - Wuye Abuja` int(255) NOT NULL,
  `Mbyama Rivers - Ajah Lagos` int(255) NOT NULL,
  `Aloma Kogi - Jos Plateau` int(255) NOT NULL,
  `Lafia Nasarawa - Belema Rivers` int(255) NOT NULL,
  `Kaba Abuja - Suleja Niger` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='available rides with price list';

--
-- Dumping data for table `available_rides`
--

INSERT INTO `available_rides` (`id`, `Garriki Enugu - Lugbe Abuja`, `Nike Enugu - Aba Abia`, `Arochukwu Imo - Sapelle Delta`, `Awka Anambra - Suleja Niger`, `Lekki Lagos - Osogbo Osun`, `Adamawa Yola - Kano Kano`, `Garriki Enugu - Owerri Imo`, `ninth-mile Enugu - Wuye Abuja`, `Mbyama Rivers - Ajah Lagos`, `Aloma Kogi - Jos Plateau`, `Lafia Nasarawa - Belema Rivers`, `Kaba Abuja - Suleja Niger`) VALUES
(1, 9200, 12500, 8500, 12000, 12000, 7000, 98766, 11200, 13000, 12500, 76558, 11200);

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE `codes` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `code` varchar(5) NOT NULL,
  `expire` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='this code will be sent to user via mail to reset their password';

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`id`, `email`, `code`, `expire`) VALUES
(1, 'emmanuelodel75@gmail.com', '71492', 1697211179),
(2, 'emmanuelodel75@gmail.com', '14067', 1697211332),
(3, 'emmanuelodel75@gmail.com', '75149', 1697212279),
(4, 'emmanuelodel75@gmail.com', '47509', 1697212340);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_subscribers`
--

CREATE TABLE `newsletter_subscribers` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='users who subscribed to our news letter with their email';

--
-- Dumping data for table `newsletter_subscribers`
--

INSERT INTO `newsletter_subscribers` (`id`, `email`) VALUES
(20, 'chinweokwuemmanuel2004@gmail.c'),
(1, 'chinweokwuemmanuel2004@gmail.com'),
(12, 'chinweokwuemmanuel2004@gmail.comg'),
(15, 'chiweemmanuel2004@gmail.com'),
(18, 'chiweemmanuel2004@gmail.com'),
(21, 'ejike@gmail.com'),
(22, 'err@gmail.com'),
(4, 'kelly@y.o'),
(10, 'olaitan@gmail.comg'),
(19, 'paul001@gmail.com'),
(5, 'rr@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `ride_bookings`
--

CREATE TABLE `ride_bookings` (
  `id` int(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `booking_code` int(255) NOT NULL,
  `seatings` int(255) NOT NULL DEFAULT 1,
  `departure` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='rides that are booked by users';

--
-- Dumping data for table `ride_bookings`
--

INSERT INTO `ride_bookings` (`id`, `location`, `destination`, `booking_code`, `seatings`, `departure`) VALUES
(108, 'Garriki Enugu', 'Lugbe Abuja', 8743563, 2, '25th. Oct. 2023 | 6.00 am'),
(110, 'Garriki Enugu', 'Lugbe Abuja', 2400444, 2, '25th. Oct. 2023 | 6.00 am');

-- --------------------------------------------------------

--
-- Table structure for table `usersdata`
--

CREATE TABLE `usersdata` (
  `id` int(11) NOT NULL,
  `oauth_pro` varchar(50) NOT NULL,
  `oauthid` varchar(100) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `locale` varchar(20) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `password` varchar(255) NOT NULL,
  `notify` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Registered users either by oauth or form';

--
-- Dumping data for table `usersdata`
--

INSERT INTO `usersdata` (`id`, `oauth_pro`, `oauthid`, `f_name`, `l_name`, `username`, `email_id`, `gender`, `locale`, `picture`, `url`, `created_date`, `password`, `notify`) VALUES
(11, 'google', '117350995053007699075', 'CHINWEOKWU', 'EMMANUEL', '', 'chinweokwuemmanuel2004@gmail.com', '', 'en', 'https://lh3.googleusercontent.com/a/ACg8ocLqo5ll-kXetn7YGlZc4pYCPZ60EcKD89bWlCFYvUpjEw=s96-c', '', '2023-09-26 12:22:02', '', ''),
(18, 'google', '111529604185878646222', 'Odel', 'emmanuel', '', 'emmanuelodel75@gmail.com', '', 'en', 'https://lh3.googleusercontent.com/a/ACg8ocJOmOOZ24HJsaxRWSyXuE16C9pCr3X0X42_6cfE-U3KaA=s96-c', '', '2023-09-26 13:09:04', '$2y$10$/A2jrcbtsRtjaxeXL16WIuNGcDJMl0RH1waBMyGezkpXN/StXUO.i', ''),
(36, '', '', '', '', 'israel', 'israel@gmail.com', '', '', '', '', '2023-10-31 15:58:53', '$2y$10$8ycQ7Qi3SSeIPfM7m5mS8.36rdRIebeJOFtdql/v4zliEVmaCg5n2', ''),
(38, '', '', '', '', 'kojo', 'kojo@gmail.com', '', '', '', '', '2023-11-08 19:32:41', '$2y$10$GRDy5PgtHOxw2F8irVj0oOIHF28V8WPGJ5KZYTrykcrP6Phgenq5G', 'notify'),
(37, '', '', '', '', 'aham john', 'ahajohn@gmail.com', '', '', '', '', '2023-11-08 19:29:17', '$2y$10$zXPrMyQNuO1FhhPTRI7NJO.dwZ5y3nBSZXxKOYrJBSP0.iaH8x7Ly', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `available_rides`
--
ALTER TABLE `available_rides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`),
  ADD KEY `email` (`email`),
  ADD KEY `expire` (`expire`);

--
-- Indexes for table `newsletter_subscribers`
--
ALTER TABLE `newsletter_subscribers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `ride_bookings`
--
ALTER TABLE `ride_bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_code` (`booking_code`),
  ADD KEY `location` (`location`),
  ADD KEY `destination` (`destination`);

--
-- Indexes for table `usersdata`
--
ALTER TABLE `usersdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `available_rides`
--
ALTER TABLE `available_rides`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12501;

--
-- AUTO_INCREMENT for table `codes`
--
ALTER TABLE `codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `newsletter_subscribers`
--
ALTER TABLE `newsletter_subscribers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `ride_bookings`
--
ALTER TABLE `ride_bookings`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `usersdata`
--
ALTER TABLE `usersdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
