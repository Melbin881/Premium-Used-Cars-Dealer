-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 28, 2023 at 02:34 PM
-- Server version: 8.0.33-0ubuntu0.22.04.2
-- PHP Version: 8.1.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `premuim_user_cars_dealer`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `registration_no` varchar(20) NOT NULL,
  `make` varchar(50) DEFAULT NULL,
  `model` varchar(50) DEFAULT NULL,
  `year` int DEFAULT NULL,
  `odo` int DEFAULT NULL,
  `engine_no` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `body_type` varchar(50) DEFAULT NULL,
  `engine_type` varchar(50) DEFAULT NULL,
  `transmission_type` varchar(50) DEFAULT NULL,
  `num_previous_owners` int DEFAULT NULL,
  `service_history` varchar(3) DEFAULT NULL,
  `accident_history` varchar(3) DEFAULT NULL,
  `dealer_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`registration_no`, `make`, `model`, `year`, `odo`, `engine_no`, `price`, `location`, `color`, `body_type`, `engine_type`, `transmission_type`, `num_previous_owners`, `service_history`, `accident_history`, `dealer_id`) VALUES
('DL 02 CD 5678', 'Audi', 'A4', 2019, 8000, 'A987654', '2800000.00', 'Delhi', 'White', 'Sedan', 'Diesel', 'Automatic', 2, 'Yes', 'Yes', 2),
('DL 07 MN 6789', 'Audi', 'Q7', 2019, 12000, 'A123456', '3800000.00', 'Delhi', 'Grey', 'SUV', 'Petrol', 'Automatic', 2, 'Yes', 'Yes', 2),
('KA 03 EF 9012', 'Mercedes-Benz', 'C-Class', 2020, 6000, 'M654321', '3000000.00', 'Bangalore', 'Silver', 'Sedan', 'Petrol', 'Automatic', 3, 'Yes', 'No', 3),
('KA 08 OP 0123', 'Mercedes-Benz', 'GLE', 2018, 9000, 'M987654', '4200000.00', 'Bangalore', 'Black', 'SUV', 'Diesel', 'Automatic', 3, 'No', 'No', 3),
('MH 01 AB 1234', 'BMW', '3 Series', 2018, 5000, 'E123456', '2500000.00', 'Mumbai', 'Black', 'Sedan', 'Petrol', 'Automatic', 1, 'Yes', 'No', 1),
('MH 06 KL 2345', 'BMW', 'X5', 2020, 10000, 'B654321', '4500000.00', 'Mumbai', 'White', 'SUV', 'Diesel', 'Automatic', 1, 'Yes', 'No', 1),
('TN 05 IJ 7890', 'Porsche', '911', 2016, 15000, 'P987654', '4000000.00', 'Chennai', 'Red', 'Coupe', 'Petrol', 'Manual', 5, 'Yes', 'No', 5),
('TN 10 ST 6789', 'Jaguar', 'I-PACE', 2022, 1000, 'J987654', '6000000.00', 'Chennai', 'Blue', 'SUV', 'Electric', 'Automatic', 5, 'Yes', 'No', 5),
('WB 04 GH 3456', 'Jaguar', 'F-Type', 2017, 20000, 'J123456', '3500000.00', 'Kolkata', 'Blue', 'Coupe', 'Petrol', 'Automatic', 4, 'No', 'Yes', 4),
('WB 09 QR 3456', 'Land Rover', 'Range Rover', 2021, 3000, 'L654321', '5500000.00', 'Kolkata', 'White', 'SUV', 'Petrol', 'Automatic', 4, 'Yes', 'No', 4);

-- --------------------------------------------------------

--
-- Table structure for table `dealership`
--

CREATE TABLE `dealership` (
  `dealership_id` int NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dealership`
--

INSERT INTO `dealership` (`dealership_id`, `address`, `city`, `state`, `pincode`, `phone_number`, `email`) VALUES
(1, '123 Main Street', 'Mumbai', 'Maharashtra', '400001', '+91-1234567890', 'mumbai@example.com'),
(2, '456 Elm Street', 'Delhi', 'Delhi', '110001', '+91-9876543210', 'delhi@example.com'),
(3, '789 Oak Street', 'Bangalore', 'Karnataka', '560001', '+91-2345678901', 'bangalore@example.com'),
(4, '012 Pine Street', 'Kolkata', 'West Bengal', '700001', '+91-8765432109', 'kolkata@example.com'),
(5, '345 Cedar Street', 'Chennai', 'Tamil Nadu', '600001', '+91-3456789012', 'chennai@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('08binuthomas80@gmail.com', '$2y$10$b/G8AisqocJzBHXk66RX.O8DBQuUovcASZnUoB0ULm9cFD32UV7aW', '2023-05-28 01:32:32');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'test', '08binuthomas80@gmail.com', NULL, '$2y$10$1afSdhE2X9hXAOGicg7VDOpDMzQo.3P47/qeQU/DbM8GdpLaSwVnS', NULL, '2023-05-28 01:02:19', '2023-05-28 01:02:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`registration_no`),
  ADD KEY `dealer_id` (`dealer_id`);

--
-- Indexes for table `dealership`
--
ALTER TABLE `dealership`
  ADD PRIMARY KEY (`dealership_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dealership`
--
ALTER TABLE `dealership`
  MODIFY `dealership_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `car_ibfk_1` FOREIGN KEY (`dealer_id`) REFERENCES `dealership` (`dealership_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
