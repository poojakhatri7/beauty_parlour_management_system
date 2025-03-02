-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Feb 25, 2025 at 12:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beauty`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login_details`
--

CREATE TABLE `admin_login_details` (
  `id` int(40) NOT NULL,
  `name` varchar(200) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `address` varchar(40) DEFAULT NULL,
  `password` varchar(40) NOT NULL,
  `role` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login_details`
--

INSERT INTO `admin_login_details` (`id`, `name`, `mobile`, `email`, `address`, `password`, `role`) VALUES
(8, 'pooja1', 8907843122, 'riya@gmail.com', ' RAJAJIPURAM', '11', 1),
(9, 'pooja khatri', 8707858421, 'pooja@gmail.com', 'rjpm1', '123', 1),
(11, 'payal malhotra', 8709875671, 'payal@gmail.com', 'cp', '12345', 2);

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `Sno` bigint(50) NOT NULL,
  `appointment_id` int(50) NOT NULL,
  `bill_amount` bigint(50) NOT NULL,
  `discount_percent` int(20) NOT NULL,
  `bill_after_discount` int(20) NOT NULL,
  `adding_gst` int(50) NOT NULL,
  `round_off_bill` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`Sno`, `appointment_id`, `bill_amount`, `discount_percent`, `bill_after_discount`, `adding_gst`, `round_off_bill`) VALUES
(1, 2, 3200, 12, 2816, 3323, 3323),
(4, 25, 3140, 25, 2355, 2779, 2779),
(7, 23, 300, 7, 279, 329, 329),
(8, 86, 0, 0, 0, 0, 0),
(9, 88, 220, 12, 194, 228, 228);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `appointment_id` int(11) NOT NULL,
  `totalPrice` decimal(10,2) NOT NULL,
  `discount` decimal(5,2) NOT NULL,
  `billing_number` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `appointment_id`, `totalPrice`, `discount`, `billing_number`, `created_at`) VALUES
(1, 23, 3200.00, 7.00, '698543', '2025-02-13 04:42:22'),
(2, 88, 220.00, 12.00, '269932', '2025-02-13 04:42:22'),
(3, 23, 300.00, 7.00, '617848', '2025-02-13 04:42:22');

-- --------------------------------------------------------

--
-- Table structure for table `tb_about`
--

CREATE TABLE `tb_about` (
  `id` int(40) NOT NULL,
  `page_title` varchar(35) NOT NULL,
  `page_description` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_about`
--

INSERT INTO `tb_about` (`id`, `page_title`, `page_description`) VALUES
(1, 'ABOUT US ', '<p>Bhanu Consultancy specializes in delivering top-notch web development and accounting services. Our team is dedicated to providing innovative solutions that cater to your business needs, ensuring both your online presence and financial records are expertly managed.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_appointment`
--

CREATE TABLE `tb_appointment` (
  `id` int(35) NOT NULL,
  `name` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `mobile` bigint(35) NOT NULL,
  `address` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `prefered_time` varchar(35) NOT NULL,
  `appointment_for` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_appointment`
--

INSERT INTO `tb_appointment` (`id`, `name`, `email`, `mobile`, `address`, `date`, `prefered_time`, `appointment_for`) VALUES
(23, 'Sneha tondon', 'sneha@gmail.com', 8907843117, 'Goa7', '2025-02-20', '18:59', 'offline booking'),
(25, 'priya singh', 'priya@gmail.com', 8707858420, 'Hazratganj', '2025-02-14', '00:57', 'LASH APPLICATION'),
(26, 'khanna', 'khanna@gmail.com', 8907843128, 'Alambhag', '2025-02-12', '19:53', 'offline booking'),
(79, 'preeti', 'preeti@gmail.com', 8707858421, 'Hazratganj', '2025-02-20', '19:31', 'MANICURE'),
(80, 'preeti', 'preeti@gmail.com', 8707858421, 'Hazratganj', '2025-02-28', '00:00', 'WAXING'),
(83, 'priya singh', 'priya@gmail.com', 8707858420, 'Hazratganj', '2025-02-22', '00:00', 'FACIAL '),
(84, 'priya singh', 'priya@gmail.com', 8707858420, 'Hazratganj', '2025-02-26', '23:00', 'MENS HAIRCUT'),
(85, 'priya singh', 'priya@gmail.com', 8707858420, 'Hazratganj', '2025-02-26', '23:00', 'MENS HAIRCUT'),
(86, 'Angel John', 'john@gmail.com', 1234456789, 'Goa', '2025-02-13', '02:59', 'CLEAN UP'),
(88, 'Sneha Malhotra', 'Malhotra@gmail.com', 8907843117, ' RAJAJIPURAM', '2025-02-19', '03:00', 'offline booking'),
(89, 'Anuradha', 'preeti@gmail.com', 8707858421, 'Hazratganj', '2025-02-13', '14:25', 'offline booking'),
(92, 'Priyanka Singh', 'Priyanka@gmail.com', 8707858421, 'Hazratganj', '2025-02-18', '09:00', 'offline booking'),
(93, 'PRIYANKA TONDON', 'ankita@gmail.com', 8907843126, 'Hazratganj', '2025-02-14', '06:00', 'offline booking'),
(94, 'write', 'ankita@gmail.com', 8907843126, 'Hazratganj', '2025-02-01', '10:00', 'offline booking'),
(96, 'Priyanka Singh', 'Priyanka@gmail.com', 8707858421, 'Hazratganj', '2025-02-20', '14:35', 'offline booking'),
(97, 'Priyanka Singh', 'Priyanka@gmail.com', 8707858421, 'Hazratganj', '2025-02-13', '20:41', 'offline booking'),
(98, 'Priyanka Singh', 'Priyanka@gmail.com', 8707858421, 'Hazratganj', '2025-02-28', '20:42', 'offline booking'),
(99, 'Priyanka Singh', 'Priyanka@gmail.com', 8707858421, 'Hazratganj', '2025-02-27', '19:44', 'offline booking'),
(100, 'Priyanka Singh', 'Priyanka@gmail.com', 8707858421, 'Hazratganj', '2025-02-13', '20:47', 'offline booking'),
(101, 'Priyanka Singh', 'Priyanka@gmail.com', 8707858421, 'Hazratganj', '2025-02-28', '19:50', 'offline booking'),
(103, 'testuser', 'test@gmail.com', 7657567567, 'Alambhag', '2025-02-28', '21:05', 'offline booking'),
(104, 'test2', 'test2@gmail.com', 8707858425, 'Hazratganj', '2025-02-28', '21:21', 'offline booking');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact_us`
--

CREATE TABLE `tb_contact_us` (
  `id` int(11) NOT NULL,
  `mobile_number` bigint(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email_us` varchar(35) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_contact_us`
--

INSERT INTO `tb_contact_us` (`id`, `mobile_number`, `address`, `email_us`, `time`) VALUES
(1, 987654321, '8721 M Central Avenue, Los Angeles, CA 90036', 'hello@yourdomain.com', '8:00 to 9:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_selected_services`
--

CREATE TABLE `tb_selected_services` (
  `id` int(11) NOT NULL,
  `appointment_id` int(35) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `service_price` decimal(10,2) NOT NULL,
  `billing_number` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `time` time DEFAULT curtime()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_selected_services`
--

INSERT INTO `tb_selected_services` (`id`, `appointment_id`, `service_name`, `service_price`, `billing_number`, `created_at`, `time`) VALUES
(1, 23, 'WOMENS HAIR CUT', 3000.00, '698543', '2025-02-13 04:51:01', '10:28:40'),
(2, 23, 'CLEAN UP', 200.00, '698543', '2025-02-13 04:51:01', '10:28:40'),
(3, 88, 'CHILD HAIR CUT', 120.00, '269932', '2025-02-13 04:51:01', '10:28:40'),
(4, 88, 'V SHAPED HAIR CUT ', 100.00, '269932', '2025-02-13 04:51:01', '10:28:40'),
(10, 23, 'FACIAL ', 200.00, '617848', '2025-02-13 04:51:01', '10:28:40'),
(11, 23, 'WAXING', 100.00, '617848', '2025-02-13 04:51:01', '10:28:40'),
(12, 88, 'MANICURE', 150.00, '521407', '2025-02-13 04:51:01', '10:28:40'),
(13, 88, 'LASH APPLICATION', 20.00, '521407', '2025-02-13 04:51:01', '10:28:40'),
(14, 88, 'MENS HAIRCUT', 200.00, '521407', '2025-02-13 04:51:01', '10:28:40'),
(15, 88, 'FACIAL ', 200.00, '521407', '2025-02-13 04:51:01', '10:28:40'),
(16, 23, 'WAXING', 100.00, '253914', '2025-02-13 04:55:51', '10:28:40'),
(17, 23, 'MANICURE', 150.00, '253914', '2025-02-13 04:55:51', '10:28:40'),
(18, 23, 'CHILD HAIR CUT', 120.00, '253914', '2025-02-13 04:55:51', '10:28:40'),
(19, 23, 'V SHAPED HAIR CUT ', 100.00, '253914', '2025-02-13 04:55:52', '10:28:40'),
(20, 23, 'WAXING', 100.00, '962424', '2025-02-13 04:59:04', '10:29:04'),
(21, 23, 'MANICURE', 150.00, '962424', '2025-02-13 04:59:04', '10:29:04'),
(22, 23, 'CHILD HAIR CUT', 120.00, '962424', '2025-02-13 04:59:04', '10:29:04'),
(23, 23, 'V SHAPED HAIR CUT ', 100.00, '962424', '2025-02-13 04:59:04', '10:29:04');

-- --------------------------------------------------------

--
-- Table structure for table `tb_services`
--

CREATE TABLE `tb_services` (
  `id` int(35) NOT NULL,
  `service_name` varchar(35) NOT NULL,
  `service_price` bigint(35) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_services`
--

INSERT INTO `tb_services` (`id`, `service_name`, `service_price`, `creation_date`) VALUES
(30, 'WOMENS HAIR CUT', 3000, '2025-01-09 08:56:11'),
(31, 'CLEAN UP', 3000, '2025-02-15 06:53:09'),
(32, 'MANICURE', 3000, '2025-02-15 07:01:40'),
(33, 'LASH APPLICATION', 20, '0000-00-00 00:00:00'),
(34, 'MENS HAIRCUT', 200, '0000-00-00 00:00:00'),
(35, 'FACIAL ', 200, '0000-00-00 00:00:00'),
(36, 'WAXING', 40000, '2025-02-17 06:44:47'),
(37, 'MANICURE', 3000, '2025-02-15 07:01:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(35) NOT NULL,
  `name` varchar(35) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(35) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(35) NOT NULL,
  `file` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobile`, `email`, `address`, `password`, `file`) VALUES
(2, 'riya ', 8707858420, 'priya@gmail.com', 'Hazratganj', '123', ''),
(3, 'Priyanka ', 8707858421, 'Priyanka@gmail.com', 'Hazratganj', '123', 'upload-images/avatar3.png'),
(4, 'Pari ', 8907843121, 'pari@gmail.com', 'Alambhag', '123', ''),
(5, 'write', 8907843126, 'ankita@gmail.com', 'Hazratganj', '123', 'upload-images/avatar.png'),
(6, 'Sneha', 8907843117, 'Malhotra@gmail.com', ' RAJAJIPURAM', '123', 'upload-images/avatar2.png'),
(7, 'khanna', 8907843128, 'khanna@gmail.com', 'Alambhag', '1234', 'upload-images/avatar3.png'),
(8, 'Angel ', 1234456789, 'john@gmail.com', 'Goa', '123', 'upload-images/avatar5.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login_details`
--
ALTER TABLE `admin_login_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`Sno`),
  ADD UNIQUE KEY `appointment_id` (`appointment_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_about`
--
ALTER TABLE `tb_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_appointment`
--
ALTER TABLE `tb_appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_contact_us`
--
ALTER TABLE `tb_contact_us`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tb_selected_services`
--
ALTER TABLE `tb_selected_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_services`
--
ALTER TABLE `tb_services`
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
-- AUTO_INCREMENT for table `admin_login_details`
--
ALTER TABLE `admin_login_details`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `Sno` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_about`
--
ALTER TABLE `tb_about`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_appointment`
--
ALTER TABLE `tb_appointment`
  MODIFY `id` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `tb_selected_services`
--
ALTER TABLE `tb_selected_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_services`
--
ALTER TABLE `tb_services`
  MODIFY `id` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
