-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2021 at 06:30 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sc247_vsearch`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_pass` varchar(41) NOT NULL,
  `user_phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`, `user_phone`) VALUES
(1, 'Tombrown Godwin', 'godwintombrown@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '09032129032'),
(2, 'Clara Dennis', 'clara@yahoo.com', '23d1e10df85ef805b442a922b240ce25', '08132903243'),
(3, 'David', 'david@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '09043210932'),
(4, 'yusuf', 'yusuf@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '08132326532');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `vehicle_id` int(11) NOT NULL,
  `vehicle_name` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `vehicle_type` int(11) NOT NULL,
  `manufacturer` varchar(100) NOT NULL,
  `purchase_date` varchar(50) NOT NULL,
  `registered_date` varchar(50) NOT NULL,
  `plate_no` varchar(100) NOT NULL,
  `vehicle_code` varchar(100) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `owner_phone` varchar(100) NOT NULL,
  `owner_address` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`vehicle_id`, `vehicle_name`, `model`, `vehicle_type`, `manufacturer`, `purchase_date`, `registered_date`, `plate_no`, `vehicle_code`, `owner_name`, `owner_phone`, `owner_address`, `date`) VALUES
(1, 'E Class 350', '2018', 1, 'Mercedes Benz', '17/09/2018', '17/09/2018', 'PHC-850-AHD', 'EC4-2022', 'Tombrown Godwin', '09089080876', '34 Ikwerre Road, Portharcourt', '0000-00-00'),
(2, 'Venza', '2018', 1, 'Toyota', '17-09-2018', '17/09/2018', 'PHC-243-OKR', 'VEN432', 'Mrs Joyce', '08065453487', '84 DLine Axis', '0000-00-00'),
(3, 'G-wagon', '2020', 10, 'Mercedes Benz', '17/09/2018', '17-09-2018', 'PHC-850-AHD', 'VEN432', 'Aniekan Boss', '08134356756', 'Lekki, Lagos Island', '0000-00-00'),
(4, 'Almera', '2009', 10, 'Nissan', '23/06/2015', '02/07/2015', 'AK-234-EKT', 'NZ09AB', 'Emem Monday', '08043210931', 'Liverpool Road Eket', '0000-00-00'),
(5, 'Camry', '2012', 10, 'Toyota', '23/04/2016', '29/04/2016', 'RV-987-PHC', 'RV0321', 'Mr Israel', '07043972312', 'Rd Road, Rumuodara, Port Harcourt', '2017-02-08'),
(6, 'Pathfinder', '2015', 12, 'Nissan', '23/02/2016', '30/02/2016', 'RV-920-BNY', 'BN-450', 'Mr Yusuf', '08143098733', 'Eneka Port Harcourt', '2017-02-15');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_type`
--

CREATE TABLE `vehicle_type` (
  `type_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `manufacturer` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_type`
--

INSERT INTO `vehicle_type` (`type_id`, `name`, `manufacturer`, `date`) VALUES
(1, 'Van', 'Innoson', '0000-00-00'),
(2, 'MiniVan', 'Nissan', '0000-00-00'),
(3, 'Jeep', 'Toyota', '0000-00-00'),
(4, 'Bus', 'Hiace', '0000-00-00'),
(5, 'Bus', 'Hiace', '0000-00-00'),
(6, 'Camry', 'Toyota', '0000-00-00'),
(7, 'Highlander', 'Toyota', '0000-00-00'),
(8, 'Avalon', 'Toyota', '0000-00-00'),
(9, 'Lorry', 'Mack', '0000-00-00'),
(10, 'Saloon ', 'Toyota', '2021-06-24'),
(11, 'Van', 'Toyota', '2021-06-24'),
(12, 'Nissan', 'Nissan', '2021-06-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- Indexes for table `vehicle_type`
--
ALTER TABLE `vehicle_type`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vehicle_type`
--
ALTER TABLE `vehicle_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
