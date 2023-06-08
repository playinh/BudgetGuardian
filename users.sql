-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 03:56 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_sample_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `transactions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `password`, `date`, `transactions`) VALUES
(1, 4545817685636955, 'testuser', 'password', '2023-05-22 09:25:13', ''),
(2, 8580, 'testuser2', 'password', '2023-05-13 18:08:58', ''),
(3, 388776402862111636, 'testuser3', 'abcd', '2023-05-13 18:31:57', ''),
(4, 32691925351069780, 'testuser4', 'efgh', '2023-05-13 18:37:17', ''),
(5, 908782119708033, 'a', 'a', '2023-05-15 06:28:51', ''),
(6, 4324067123715995, 'b', 'b', '2023-05-15 06:30:25', ''),
(7, 56241229153423496, 's', 's', '2023-05-15 06:31:17', ''),
(8, 585288666366, 'm', 'm', '2023-05-15 06:33:56', ''),
(9, 9259853871043, 'abc', 'abc', '2023-05-15 06:47:42', ''),
(10, 324123845, 'hyhy', 'lolo', '2023-05-15 07:14:38', ''),
(11, 3545904882, 'clysel', '1234', '2023-05-22 09:25:46', ''),
(13, 90891644275, 'quian', '1234', '2023-05-15 07:33:54', ''),
(14, 1476014842360, 'Laurenze', '1234', '2023-05-17 03:24:06', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `date` (`date`),
  ADD KEY `username` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
