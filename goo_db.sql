-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2023 at 04:45 PM
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
-- Table structure for table `api_keys`
--

CREATE TABLE `api_keys` (
  `id` int(255) NOT NULL,
  `paystack_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Api keys';

--
-- Dumping data for table `api_keys`
--

INSERT INTO `api_keys` (`id`, `paystack_key`) VALUES
(1, 'pk_test_4d75f5f5bd6c850d3f4c57fe7a55d9b7c84d566f');

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
(1, 9200, 12500, 8500, 12000, 12000, 7000, 12000, 11200, 13000, 12500, 76558, 11200);

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
  `departure` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='rides that are booked by users';

--
-- Dumping data for table `ride_bookings`
--

INSERT INTO `ride_bookings` (`id`, `location`, `destination`, `booking_code`, `seatings`, `departure`, `price`, `email`, `timestamp`) VALUES
(116, 'Adamawa Yola', 'Kano Kano', 1569430, 5, '3rd. Dec. 2023 | 10.00 am', 35000, 'nkechi@gmail.com', '2023-12-27 23:00:00'),
(144, 'Adamawa Yola', 'Kano Kano', 2972791, 5, '3rd. Dec. 2023 | 10.00 am', 35000, 'nkechi@gmail.com', '2023-12-28 11:01:45'),
(148, 'Aloma Kogi', 'Jos Plateau', 6910057, 7, '15th. Oct. 2023 | 8.00 am', 87500, '', '2023-12-28 16:13:32'),
(149, 'Aloma Kogi', 'Jos Plateau', 3174815, 7, '15th. Oct. 2023 | 8.00 am', 87500, '', '2023-12-28 16:14:46'),
(155, 'Nike Enugu', 'Aba Abia', 9843393, 3, '5th. Nov. 2023 | 7.30 am', 37500, 'adanna@gmail.com', '2023-12-29 09:47:00'),
(156, 'Nike Enugu', 'Aba Abia', 8048633, 3, '5th. Nov. 2023 | 7.30 am', 37500, 'adanna@gmail.com', '2023-12-29 09:47:45'),
(157, 'Nike Enugu', 'Aba Abia', 4197317, 3, '5th. Nov. 2023 | 7.30 am', 37500, 'adanna@gmail.com', '2023-12-29 14:11:53'),
(158, 'Nike Enugu', 'Aba Abia', 7978750, 3, '5th. Nov. 2023 | 7.30 am', 37500, 'adanna@gmail.com', '2023-12-29 14:26:50'),
(159, 'Nike Enugu', 'Aba Abia', 6436622, 3, '5th. Nov. 2023 | 7.30 am', 37500, 'adanna@gmail.com', '2023-12-29 14:42:29'),
(160, 'Nike Enugu', 'Aba Abia', 4529970, 3, '5th. Nov. 2023 | 7.30 am', 37500, 'adanna@gmail.com', '2023-12-29 14:44:24'),
(161, 'Nike Enugu', 'Aba Abia', 5003878, 3, '5th. Nov. 2023 | 7.30 am', 37500, 'adanna@gmail.com', '2023-12-29 14:45:34'),
(162, 'Nike Enugu', 'Aba Abia', 8033408, 3, '5th. Nov. 2023 | 7.30 am', 37500, 'adanna@gmail.com', '2023-12-29 14:47:18'),
(163, 'Nike Enugu', 'Aba Abia', 2115011, 3, '5th. Nov. 2023 | 7.30 am', 37500, 'adanna@gmail.com', '2023-12-29 14:48:02'),
(164, 'Arochukwu Imo', 'Sapelle Delta', 4760348, 4, '30th. Dec. 2023 | 5.00 am', 34000, 'nkechi@gmail.com', '2023-12-29 15:01:20');

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
(37, '', '', '', '', 'aham john', 'ahajohn@gmail.com', '', '', '', '', '2023-11-08 19:29:17', '$2y$10$zXPrMyQNuO1FhhPTRI7NJO.dwZ5y3nBSZXxKOYrJBSP0.iaH8x7Ly', ''),
(39, '', '', '', '', 'nkechi', 'nkechi@gmail.com', '', '', '', '', '2023-12-27 17:39:43', '$2y$10$cXt.rnnQ.DzbgcLia5xJae.69oYbJXt6oKWvA1ELTxGsji2UbNu3G', ''),
(40, '', '', '', '', 'adanna', 'adanna@gmail.com', '', '', '', '', '2023-12-28 17:32:47', '$2y$10$EC7TzB4xRdk28qM3vY23leLGrvfxMquOr8/Z3CG/1HF3tksmWo7CC', 'notify');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `api_keys`
--
ALTER TABLE `api_keys`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `api_keys`
--
ALTER TABLE `api_keys`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `usersdata`
--
ALTER TABLE `usersdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
