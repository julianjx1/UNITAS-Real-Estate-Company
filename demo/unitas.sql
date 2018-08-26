-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2018 at 04:08 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

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
  `price_per_floor` varchar(100) NOT NULL,
  `price_per_unit` int(100) NOT NULL,
  `complete_date` date NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commercial`
--

INSERT INTO `commercial` (`id`, `no_of_floor`, `no_of_units_per_floor`, `price_per_floor`, `price_per_unit`, `complete_date`, `picture`) VALUES
('123', 4, 4, '500000', 40000, '2019-04-04', '7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `land`
--

CREATE TABLE `land` (
  `id` varchar(100) NOT NULL,
  `shatangsho` varchar(100) NOT NULL,
  `amount_per_shatangsho` varchar(100) NOT NULL,
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
('123', '4', 'A', 'Azimpur', 'Dhaka', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14610.348014284193!2d90.41451256977538!3d23.7264381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b84f8d00648b%3A0x23756d319772ef84!2z4KaF4KeN4Kav4Ka-4Kao4KeH4KaV4KeN4Ka4IDIsIOCmrOCmv-CmrOCmvyDgprngp4fgpqEg4KaF4Kar4Ka_4Ka4!5e0!3m2!1sbn!2sbd!4v1535217873019\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>');

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
  `property_id` varchar(100) NOT NULL,
  `given_amount` varchar(100) NOT NULL,
  `amount_given_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `bank_name` varchar(100) NOT NULL,
  `bank_account_number` varchar(100) NOT NULL,
  `transaction_id` varchar(100) NOT NULL,
  `card_name` varchar(100) NOT NULL,
  `card_number` varchar(100) NOT NULL,
  `mobile_banking` varchar(100) NOT NULL,
  `mobile_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_banking`
--

INSERT INTO `user_banking` (`user_id`, `property_id`, `given_amount`, `amount_given_date`, `bank_name`, `bank_account_number`, `transaction_id`, `card_name`, `card_number`, `mobile_banking`, `mobile_number`) VALUES
('arifa123', '123', '120', '2018-08-15 18:00:00', '', '', 'xdfref123sdf', 'visa', 'xdfre235sdr', '', ''),
('arifa123', '123', '159', '0000-00-00 00:00:00', '', '', 'CY26EndX8e', '', '', 'bkash', '1535674'),
('arifa123', '123', '333', '2018-08-16 20:57:23', '', '', 'qhEVHIZUjA', 'Visa', '123456987', '', '');

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
-- Indexes for table `user_banking`
--
ALTER TABLE `user_banking`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `property_id` (`property_id`);

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

--
-- Constraints for table `user_banking`
--
ALTER TABLE `user_banking`
  ADD CONSTRAINT `user_banking_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_account` (`id`),
  ADD CONSTRAINT `user_banking_ibfk_2` FOREIGN KEY (`property_id`) REFERENCES `property` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
