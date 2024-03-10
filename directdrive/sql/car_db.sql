-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2024 at 07:13 AM
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
-- Database: `car_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `car_id` int(11) NOT NULL,
  `year` int(11) DEFAULT NULL,
  `rate` decimal(10,2) NOT NULL,
  `availability` tinyint(1) DEFAULT 1,
  `capacity` int(11) DEFAULT NULL,
  `image1` text DEFAULT NULL,
  `image2` text DEFAULT NULL,
  `image3` text DEFAULT NULL,
  `image4` text DEFAULT NULL,
  `image5` text DEFAULT NULL,
  `car_make` varchar(255) DEFAULT NULL,
  `car_model` varchar(255) DEFAULT NULL,
  `transmission` varchar(50) DEFAULT NULL,
  `fuel_type` varchar(50) DEFAULT NULL,
  `license_plate` varchar(20) DEFAULT NULL,
  `car_location` varchar(255) DEFAULT NULL,
  `mileage` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `year`, `rate`, `availability`, `capacity`, `image1`, `image2`, `image3`, `image4`, `image5`, `car_make`, `car_model`, `transmission`, `fuel_type`, `license_plate`, `car_location`, `mileage`) VALUES
(1, 2019, 3900.00, 1, 2, 'https://i.ibb.co/dPg7M4M/image-1.jpg', 'https://i.ibb.co/xFVRNdT/image-2.jpg', 'https://i.ibb.co/S6yGg5B/image-4.jpg', 'https://i.ibb.co/xzNRg7s/image-5.jpg', 'https://i.ibb.co/xftHFG2/image-3.jpg', 'Chevrolet', 'Malibu', 'Automatic', 'Gasoline', 'JKL012', 'Karnataka', 33),
(2, 2022, 2400.00, 1, 4, 'https://i.ibb.co/5sF1hM8/image-1.jpg', 'https://i.ibb.co/Y7vrbS2/image-2.jpg', 'https://i.ibb.co/1bSj8TW/image-5.jpg', 'https://i.ibb.co/CsYcTyt/image-3.jpg', 'https://i.ibb.co/Dg1h7sc/image-4.jpg', 'Nissan', 'Altima', 'CVT', 'Petrol', 'MNO345', 'Goa', 29),
(3, 2021, 4300.00, 1, 4, 'https://i.ibb.co/xqMNY2K/image-1.jpg', 'https://i.ibb.co/2tNnGWD/image-4.jpg', 'https://i.ibb.co/nmmZhsL/image-5.jpg', 'https://i.ibb.co/yBq0HsT/image-2.jpg', 'https://i.ibb.co/drv3dYt/image-3.jpg', 'Honda', 'Civic', 'Automatic', 'Hybrid', 'GHI789', 'Delhi', 25),
(5, 2020, 5200.00, 1, 10, 'https://i.ibb.co/PQSpf7g/image-1.jpg', 'https://i.ibb.co/Sy1ZRJq/image-3.jpg', 'https://i.ibb.co/h8YXpr2/image-4.jpg', 'https://i.ibb.co/tYW3B6k/image-5.jpg', 'https://i.ibb.co/s2HdV2t/image-2.jpg', 'Telsa', 'Model X', 'Automatic', 'Coal', 'ASD252', 'Pune', 19),
(6, 2022, 3620.00, 1, 4, 'https://i.ibb.co/sQnQhY6/image-1.jpg', 'https://i.ibb.co/BPXB4SW/image-2.jpg', 'https://i.ibb.co/ZmtbW0S/image-5.jpg', 'https://i.ibb.co/QrTCyPK/image-4.jpg', 'https://i.ibb.co/w6PQFZt/image-3.jpg', 'Rolls Royce', 'Cullinan', 'Automatic', 'Electric', 'ASD425', 'Himachal Pradesh', 26),
(7, 2018, 4560.00, 1, 2, 'https://i.ibb.co/GtTSnys/image-1.jpg', 'https://i.ibb.co/hfzSwKv/image-4.jpg', 'https://i.ibb.co/4SKcmWJ/image-5.jpg', 'https://i.ibb.co/v4FkBnc/image-3.jpg', 'https://i.ibb.co/C8NjkbR/image-2.jpg', 'Hyundai', 'Creta', 'Manual', 'Petrol', 'JKFK265', 'Haryana', 26),
(8, 2021, 5690.00, 1, 2, 'https://i.ibb.co/zJMDkQY/image-1.jpg', 'https://i.ibb.co/TqvGPHV/image-2.jpg', 'https://i.ibb.co/K9TqY20/image-4.jpg', 'https://i.ibb.co/4swMXLm/image-3.jpg', 'https://i.ibb.co/FDyhjr9/image-5.jpg', 'Jaguar', 'XK', 'Manual', 'Petrol', 'ERW133S', 'Uttarakhand', 41),
(14, 2023, 2480.00, 1, 6, 'https://i.ibb.co/ctdCPWN/image-1.jpg', 'https://i.ibb.co/FXq5BW3/image-2.jpg', 'https://i.ibb.co/Lg1MYH2/image-5.jpg', 'https://i.ibb.co/qsHZcpW/image-4.jpg', 'https://i.ibb.co/Vg65Q0n/image-3.jpg', 'Lotus', 'Eletre R 893', 'Automatic', 'Electric', 'EWR4789', 'Kerala', 44),
(15, 2019, 3205.00, 1, 4, 'https://i.ibb.co/bLjhMGY/image-1.jpg', 'https://i.ibb.co/GnTxy56/image-4.jpg', 'https://i.ibb.co/dQdd6s2/image-5.jpg', 'https://i.ibb.co/Sm2SG9Z/image-2.jpg', 'https://i.ibb.co/n8RgB6J/image-3.jpg', 'Xiami', 'SU7 EV', 'Automatic', 'Electric', 'SFIB481', 'Goa', 36),
(16, 2020, 3250.00, 1, 2, 'https://i.ibb.co/23mBLcd/image-1.jpg', 'https://i.ibb.co/ch8qdGS/image-2.jpg', 'https://i.ibb.co/f0ynVRg/image-5.jpg', 'https://i.ibb.co/hCvX4rC/image-3.jpg', 'https://i.ibb.co/YQmV0RK/image-4.jpg', 'McLaren', '626hp GTS', 'Manual', 'Petrol', 'OIAS925', 'New Delhi', 27),
(17, 2018, 2500.00, 1, 4, 'https://i.ibb.co/2h2BJ8y/image-1.jpg', 'https://i.ibb.co/4Mvk6Xb/image-2.jpg', 'https://i.ibb.co/D1czt2Y/image-3.jpg', 'https://i.ibb.co/mhZshQX/image-5.jpg', 'https://i.ibb.co/LgqH9zV/image-4.jpg', 'Toyota', 'SUV', 'Manual', 'Diesel', 'KPA4185', 'Jharkhand', 20);

-- --------------------------------------------------------

--
-- Table structure for table `hire`
--

CREATE TABLE `hire` (
  `hire_id` int(11) NOT NULL,
  `car_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `total_amount` decimal(10,2) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hire`
--

INSERT INTO `hire` (`hire_id`, `car_id`, `user_id`, `start_date`, `end_date`, `time`, `total_amount`, `status`, `user_email`) VALUES
(39, 8, 7, '2024-03-12', '2024-03-13', '2024-03-10 05:39:05', 11380.00, 'Approved', 'vinay@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `name`, `email`, `message`, `time`) VALUES
(3, 'Ajay', 'ajay231@gmail.com', 'is Mercedes still available?', '2023-12-20 02:56:45');

-- --------------------------------------------------------

--
-- Table structure for table `policy`
--

CREATE TABLE `policy` (
  `id` int(11) NOT NULL,
  `content` text DEFAULT NULL,
  `last_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `policy`
--

INSERT INTO `policy` (`id`, `content`, `last_updated`) VALUES
(1, '<h3><strong>1. Information Collection:</strong></h3><p>a. DirectDrive collects personal information such as name, contact details, and payment information for the purpose of processing reservations and providing rental services.</p><p>b. Vehicle usage data, including location and mileage, may be collected during the rental period.</p><h3><br></h3><h3><strong>2. Use of Information:</strong></h3><p>a. Personal information is used to process reservations, facilitate vehicle pick-up and return, and manage customer accounts.</p><p>b. Vehicle usage data may be used for maintenance, analysis, and improvement of our services.</p><h3><br></h3><h3><strong>3. Information Sharing:</strong></h3><p>a. DirectDrive may share necessary information with third-party service providers to fulfill reservations, process payments, and maintain our vehicles.</p><p>b. Personal information will not be sold, rented, or shared for marketing purposes without explicit consent.</p><p><br></p><h3><strong>4. Data Security:</strong></h3><p>a. DirectDrive employs industry-standard security measures to protect personal information from unauthorized access, disclosure, or alteration.</p><p>b. Secure Socket Layer (SSL) technology is used to encrypt sensitive data during transmission.</p><h3><br></h3><h3><strong>5. Cookies and Tracking:</strong></h3><p>a. DirectDrive uses cookies and similar technologies to enhance user experience, analyze website traffic, and track user interactions.</p><p>b. Users can manage cookie preferences through browser settings.</p><p><br></p><h3><strong>6. Marketing Communications:</strong></h3><p>a. Users may opt-in to receive marketing communications from DirectDrive.</p><p>b. Opt-out options are provided in marketing communications for users who no longer wish to receive promotional messages.</p><p><br></p><h3><strong>7. Data Retention:</strong></h3><p>a. Personal information is retained for the duration necessary to fulfill the purpose for which it was collected.</p><p>b. Vehicle usage data may be retained for a reasonable period for analysis and improvement purposes.</p><p><br></p><h3><strong>8. User Rights:</strong></h3><p>a. Users have the right to access, correct, or delete their personal information held by DirectDrive.</p><p>b. Requests for information or data deletion can be submitted to DirectDrive\'s designated contact.</p><p><br></p><h3><strong>9. Compliance with Laws:</strong></h3><p>a. DirectDrive complies with applicable data protection laws and regulations.</p><p>b. Information may be disclosed if required by law or to protect the rights, property, or safety of DirectDrive, its users, or others.</p><p><br></p><h3><strong>10. Changes to the Privacy Policy:</strong></h3><p>DirectDrive reserves the right to update or modify this Privacy Policy at any time. Users will be notified of significant changes.</p><p><br></p><h3><strong>11. Contact Information:</strong></h3><p>For questions or concerns regarding this Privacy Policy, users can contact DirectDrive at the provided contact details.</p>', '2024-01-11 15:23:55');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` int(11) NOT NULL,
  `content` text DEFAULT NULL,
  `last_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `content`, `last_updated`) VALUES
(1, '<h3><strong>1. Rental Agreement:</strong></h3><p>By accessing and using the services provided by DirectDrive, you agree to be bound by the terms and conditions outlined herein. This agreement constitutes a legally binding contract between you (the \"Renter\") and DirectDrive.</p><p><br></p><h3><strong>2. Eligibility:</strong></h3><p>To use DirectDrive\'s car rental services, you must be at least 18 years old, possess a valid driver\'s license, and have a valid payment method.</p><p><br></p><h3><strong>3. Reservation and Booking:</strong></h3><p>a. Reservations are subject to vehicle availability.</p><p>b. DirectDrive reserves the right to modify or cancel reservations based on vehicle availability and other unforeseen circumstances.</p><p><br></p><h3><strong>4. Rental Period:</strong></h3><p>a. The rental period commences and concludes at the times specified in the reservation.</p><p>b. Extensions must be requested in advance and are subject to availability.</p><p><br></p><h3><strong>5. Rental Rates and Payments:</strong></h3><p>a. Rental rates are based on the duration of the rental period and the type of vehicle.</p><p>b. Payments must be made in advance using a valid credit/debit card.</p><p>c. Additional charges may apply for mileage exceeding the agreed limit, fuel charges, or any damage to the vehicle.</p><p><br></p><h3><strong>6. Vehicle Pick-up and Return:</strong></h3><p>a. The Renter is responsible for picking up and returning the vehicle at the specified location and within the agreed-upon timeframe.</p><p>b. Late returns may be subject to additional charges.</p><p><br></p><h3><strong>7. Fuel Policy:</strong></h3><p>a. The Renter must return the vehicle with the same level of fuel as when rented.</p><p>b. A refueling charge will be applied if the fuel level is less than the original amount.</p><p><br></p><h3><strong>8. Maintenance and Repairs:</strong></h3><p>a. DirectDrive is responsible for vehicle maintenance and repairs not caused by the Renter\'s negligence.</p><p>b. The Renter must promptly report any issues with the vehicle to DirectDrive.</p><p><br></p><h3><strong>9. Insurance:</strong></h3><p>a. All vehicles come with basic insurance coverage.</p><p>b. Additional insurance options are available for purchase to cover potential damages and liabilities.</p><p><br></p><h3><strong>10. Prohibited Activities:</strong></h3><p>a. The Renter agrees not to use the vehicle for illegal activities.</p><p>b. Smoking, pets, and off-road driving are strictly prohibited in DirectDrive vehicles.</p><p><br></p><h3><strong>11. Liability:</strong></h3><p>a. DirectDrive is not liable for any personal property left in the rented vehicle.</p><p>b. The Renter is responsible for any fines, penalties, or legal consequences incurred during the rental period.</p><p><br></p><h3><strong>12. Cancellation Policy:</strong></h3><p>a. Cancellations made within 24 hours of the reservation start time may be subject to charges.</p><p>b. Refunds are not provided for early returns.</p><p><br></p><h3><strong>13. Termination of Agreement:</strong></h3><p>DirectDrive reserves the right to terminate the rental agreement if the Renter breaches any terms and conditions.</p><p><br></p><h3><strong>14. Governing Law:</strong></h3><p>This agreement is governed by the laws of the jurisdiction in which the rental takes place.</p>', '2024-01-11 15:24:07');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `admin_id` int(11) DEFAULT 1,
  `amount` decimal(10,2) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `hire_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `admin_id`, `amount`, `status`, `timestamp`, `hire_id`) VALUES
(41, 1, 35100.00, 'Fine: Exceeded Usage', '2024-01-14 05:09:38', 18),
(42, 1, 9615.00, 'Car Booked', '2024-01-14 05:16:41', 36),
(43, 1, -6410.00, 'Refund: Insufficient', '2024-01-14 05:17:50', 36),
(44, 1, 4960.00, 'Car Booked', '2024-01-14 08:16:17', 37),
(45, 1, -4960.00, 'Car Cancelled', '2024-01-14 08:17:21', 37),
(46, 1, 13680.00, 'Car Booked', '2024-01-23 12:20:46', 38),
(47, 1, 14880.00, 'Fine: Exceeded Usage', '2024-01-23 12:20:54', 37),
(48, 1, 11380.00, 'Car Booked', '2024-03-10 05:39:05', 39);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `license` varchar(15) DEFAULT NULL,
  `gender` enum('male','female','other') DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `phone`, `license`, `gender`, `address`, `email`, `password`) VALUES
(8, 'test', '0123456789', 'AB1234567', 'male', '123', 'test@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `hire`
--
ALTER TABLE `hire`
  ADD PRIMARY KEY (`hire_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `policy`
--
ALTER TABLE `policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `hire`
--
ALTER TABLE `hire`
  MODIFY `hire_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `policy`
--
ALTER TABLE `policy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
