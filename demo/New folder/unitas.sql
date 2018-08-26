-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2018 at 05:55 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unitas`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy_property`
--

CREATE TABLE `buy_property` (
  `property_id` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `nominee` varchar(100) NOT NULL,
  `relationship_with_nominee` varchar(100) NOT NULL,
  `picture_of_nominee` varchar(1000) NOT NULL,
  `quantity_of_units` int(100) NOT NULL,
  `amount_remaining` int(100) NOT NULL,
  `bond_signature_date` date NOT NULL,
  `documentation_picture_of_property` varchar(1000) NOT NULL,
  `mouza_no.` varchar(100) DEFAULT NULL,
  `spots_no.` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buy_property`
--

INSERT INTO `buy_property` (`property_id`, `user_id`, `nominee`, `relationship_with_nominee`, `picture_of_nominee`, `quantity_of_units`, `amount_remaining`, `bond_signature_date`, `documentation_picture_of_property`, `mouza_no.`, `spots_no.`) VALUES
('123', 'arifa123', 'nimba', 'sister', '', 4, 0, '2018-05-06', '', NULL, NULL),
('123', 'arifa123', 'nimba', 'sister', '1.jpg', 4, 0, '2017-09-14', '1.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `commercial`
--

CREATE TABLE `commercial` (
  `id` varchar(100) NOT NULL,
  `no_of_floor` int(100) NOT NULL,
  `no_of_units_per_floor` int(100) NOT NULL,
  `price_per_unit` int(100) NOT NULL,
  `complete_date` date NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commercial`
--

INSERT INTO `commercial` (`id`, `no_of_floor`, `no_of_units_per_floor`, `price_per_unit`, `complete_date`, `picture`) VALUES
('123', 4, 4, 40000, '2019-04-04', '');

-- --------------------------------------------------------

--
-- Table structure for table `land`
--

CREATE TABLE `land` (
  `id` varchar(100) NOT NULL,
  `acor` varchar(100) NOT NULL,
  `amount_per_acor` varchar(100) NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `name`, `type`) VALUES
('123', 'vandar', 'commercial');

-- --------------------------------------------------------

--
-- Table structure for table `property_address`
--

CREATE TABLE `property_address` (
  `id` varchar(100) NOT NULL,
  `road_no.` varchar(100) NOT NULL,
  `section` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `map_location` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property_address`
--

INSERT INTO `property_address` (`id`, `road_no.`, `section`, `area`, `district`, `map_location`) VALUES
('123', '4', 'A', 'Azimpur', 'Dhaka', '');

-- --------------------------------------------------------

--
-- Table structure for table `property_picture`
--

CREATE TABLE `property_picture` (
  `id` varchar(1000) NOT NULL,
  `picture` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `residential`
--

CREATE TABLE `residential` (
  `id` varchar(100) NOT NULL,
  `width` int(100) NOT NULL,
  `height` int(100) NOT NULL,
  `no_of_rooms` int(100) NOT NULL,
  `no_of_bath` int(100) NOT NULL,
  `no_of_yeird` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `complete_date` date NOT NULL,
  `picture` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subscribre`
--

CREATE TABLE `subscribre` (
  `index` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `admin` varchar(3) NOT NULL,
  `picture` varchar(1000) NOT NULL,
  `phone_number` decimal(11,0) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `national_id` varchar(100) NOT NULL,
  `passport_id` varchar(100) NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `status` varchar(15) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`id`, `name`, `admin`, `picture`, `phone_number`, `address`, `date_of_birth`, `national_id`, `passport_id`, `blood_group`, `gender`, `status`, `religion`, `email`, `password`) VALUES
('arifa123', 'arifa', 'NO', '1.jpg', '123', 'abc123', '2017-06-07', 'sad123', 'sw3123', 'ABC+', 'female', 'unmarried', 'islam', 'arifa123@example.com', 'a123');

-- --------------------------------------------------------

--
-- Table structure for table `user_banking`
--

CREATE TABLE `user_banking` (
  `user_id` varchar(100) NOT NULL,
  `given_amount` int(100) NOT NULL,
  `amount_given_date` date NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `transaction_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `visitor_enquiry`
--

CREATE TABLE `visitor_enquiry` (
  `email` varchar(30) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phone_number` decimal(11,0) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buy_property`
--
ALTER TABLE `buy_property`
  ADD KEY `property_id` (`property_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `commercial`
--
ALTER TABLE `commercial`
  ADD KEY `id` (`id`);

--
-- Indexes for table `land`
--
ALTER TABLE `land`
  ADD KEY `id` (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `property_address`
--
ALTER TABLE `property_address`
  ADD KEY `id` (`id`);

--
-- Indexes for table `residential`
--
ALTER TABLE `residential`
  ADD KEY `id` (`id`);

--
-- Indexes for table `subscribre`
--
ALTER TABLE `subscribre`
  ADD KEY `index` (`index`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor_enquiry`
--
ALTER TABLE `visitor_enquiry`
  ADD PRIMARY KEY (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buy_property`
--
ALTER TABLE `buy_property`
  ADD CONSTRAINT `buy_property_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `property` (`id`),
  ADD CONSTRAINT `buy_property_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user_account` (`id`);

--
-- Constraints for table `commercial`
--
ALTER TABLE `commercial`
  ADD CONSTRAINT `commercial_ibfk_1` FOREIGN KEY (`id`) REFERENCES `property` (`id`);

--
-- Constraints for table `land`
--
ALTER TABLE `land`
  ADD CONSTRAINT `land_ibfk_1` FOREIGN KEY (`id`) REFERENCES `property` (`id`);

--
-- Constraints for table `property_address`
--
ALTER TABLE `property_address`
  ADD CONSTRAINT `property_address_ibfk_1` FOREIGN KEY (`id`) REFERENCES `property` (`id`);

--
-- Constraints for table `residential`
--
ALTER TABLE `residential`
  ADD CONSTRAINT `residential_ibfk_1` FOREIGN KEY (`id`) REFERENCES `property` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
