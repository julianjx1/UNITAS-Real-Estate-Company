-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 30, 2018 at 09:55 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

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
('123', 'arifa123', 'nimba', 'sister', '1.jpg', 4, 0, '2017-09-14', '1.jpg', NULL, NULL),
('121', 'ays123', 'tumpa', 'sister', 'a.jpg', 4, 0, '2017-01-01', '2.jpg', NULL, NULL),
('122', 'mahir123', 'jesia', 'sister', 'b.jpg', 3, 0, '2017-05-22', '3.jpg', NULL, NULL),
('125', 'linkon89', 'tahsan', 'brother', 'c.jpg', 3, 0, '2018-04-12', '5.jpg\r\n', NULL, NULL),
('126', 'rai123', 'sumit', 'brother', 'd.jpg', 4, 0, '2018-02-19', '6.jpg', NULL, NULL);

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
('123', 4, 4, '500000', 40000, '2019-04-04', '7.jpg'),
('121', 6, 2, '20000000', 50000, '2018-11-10', '2.jpg'),
('130', 6, 7, '100000000', 230000, '2017-10-12', '11.jpg'),
('131', 8, 6, '500000000', 120000, '2018-03-12', '12.jpg'),
('132', 8, 7, '300000000', 120000, '2019-11-11', '13.jpg');

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

--
-- Dumping data for table `land`
--

INSERT INTO `land` (`id`, `shatangsho`, `amount_per_shatangsho`, `picture`) VALUES
('122', '100000000', '27000', '2.jpg\r\n'),
('125', '20000000', '12000', '3.jpg'),
('133', '100000000', '20000', '14.jpg'),
('134', '20000000', '30000', '15.jpg'),
('124', '200000000', '12000', '7.jpg');

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
('121', 'vandar', 'residential'),
('122', 'vandar', 'land'),
('123', 'vandar', 'commercial'),
('124', 'vandar', 'land'),
('125', 'vandar', 'land'),
('126', 'vandar', 'commercial'),
('127', 'vandar', 'residential'),
('128', 'vandar', 'residential'),
('129', 'vandar', 'residential'),
('130', 'vandar', 'commercial'),
('131', 'vandar', 'commercial'),
('132', 'vandar', 'commercial'),
('133', 'vandar', 'land'),
('134', 'vandar', 'land');

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
('123', '4', 'A', 'Azimpur', 'Dhaka', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14610.348014284193!2d90.41451256977538!3d23.7264381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b84f8d00648b%3A0x23756d319772ef84!2z4KaF4KeN4Kav4Ka-4Kao4KeH4KaV4KeN4Ka4IDIsIOCmrOCmv-CmrOCmvyDgprngp4fgpqEg4KaF4Kar4Ka_4Ka4!5e0!3m2!1sbn!2sbd!4v1535217873019\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
('121', '11', 'B', 'Dhanmondi', 'Dhaka', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.1389126255945!2d90.37209501493287!3d23.742425284593292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf4b25f4ae4b%3A0x3d823329bfc40f5a!2sAnam+Rangs+Plaza%2C+House+%23+61%2C+Satmasjid+Road%2C+Dhaka+1209!5e0!3m2!1sen!2sbd!4v1535654809425\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
('122', '1', 'C', 'Dhanmondi', 'Dhaka', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14608.29992830715!2d90.3720757!3d23.7447054!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc1ae318424c5b0de!2sKB+Square!5e0!3m2!1sen!2sbd!4v1535654962956\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
('125', '12', 'A', 'Gulshan', 'Dhaka', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d58433.073104290226!2d90.34386311519378!3d23.74498760889935!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c70e693d17fd%3A0x4573fd56c6132efa!2sChillox+Banani!5e0!3m2!1sen!2sbd!4v1535655103754\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
('126', '15', 'E', 'Dhanmondi', 'Dhaka', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14608.917112652216!2d90.37535!3d23.739202!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6db329263b9d0b51!2sChillox!5e0!3m2!1sen!2sbd!4v1535655186677\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
('127', '7', 'B', 'Banani', 'Dhaka', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d7304.2562812236265!2d90.36655707503603!3d23.742809488372263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d23.739181499999997!2d90.3702316!4m5!1s0x3755bf4c290e15cb%3A0x9f3df3c1d313536c!2sPizza+Hut%2C+Plot+%23+754%2C+Satmasjid+Road%2C+Dhaka+1205!3m2!1d23.7473545!2d90.37031879999999!5e0!3m2!1sen!2sbd!4v1535655292528\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
('124', '1', 'D', 'Dhanmondi', 'Dhaka', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14608.361715613975!2d90.3730705!3d23.7441545!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x11d521009c16ecd1!2sPasta+State+Dhanmondi!5e0!3m2!1sen!2sbd!4v1535658229446\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
('128', '11', 'A', 'Mohammadpur', 'Dhaka', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14606.739006178423!2d90.3623577!3d23.7586187!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x539769507424d4c0!2sPizza+Square!5e0!3m2!1sen!2sbd!4v1535658291677\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
('129', '15', 'A', 'Badda', 'Dhaka', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14608.731244826153!2d90.3744705!3d23.7408595!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb69305423ba5f5ef!2sUniversity+of+Liberal+Arts+Bangladesh+Campus+A!5e0!3m2!1sen!2sbd!4v1535658343160\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
('130', '21', 'C', 'Mohammadpur', 'Dhaka', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14608.173220288143!2d90.371091!3d23.7458351!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xeb0be41c32b04b6b!2sShawarma+King+Restaurant!5e0!3m2!1sen!2sbd!4v1535658417047\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
('131', '1', 'B', 'Mirpur', 'Dhaka', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14601.703469547227!2d90.3548234!3d23.8034508!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcf14921445f8c82f!2sPizzaBurg!5e0!3m2!1sen!2sbd!4v1535658455640\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
('132', '5', 'A', 'Mirpur', 'Dhaka', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14601.74226528929!2d90.3547851!3d23.8031057!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3f88a9d5eb641126!2sPERI+PASTA!5e0!3m2!1sen!2sbd!4v1535658526443\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
('133', '12', 'A', 'Mirpur', 'Dhaka', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14608.152537303471!2d90.3711762!3d23.7460195!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd41619aded0b8b93!2sThe+Dark+Music+Cafe+And+Restaurant!5e0!3m2!1sen!2sbd!4v1535658578224\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
('134', '7', 'A', 'Zigatola', 'Dhaka', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14603.117086582128!2d90.403361!3d23.7908732!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf9ef923ef466fc77!2sCafe+Euphoria!5e0!3m2!1sen!2sbd!4v1535658618052\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `property_picture`
--

CREATE TABLE `property_picture` (
  `id` varchar(1000) NOT NULL,
  `picture` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property_picture`
--

INSERT INTO `property_picture` (`id`, `picture`) VALUES
('121', '1.png'),
('127', '4.png\r\n'),
('122', '2.jpg\r\n'),
('123', '3.jpg'),
('125', '5.jpg'),
('126', '6.jpg\r\n'),
('133', '14.jpg'),
('134', '15.jpg'),
('124', '7.jpg'),
('130', '11.jpg'),
('131', '12,jpg'),
('132', '13.jpg'),
('128', '8.jpg'),
('129', '10.jpg');

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

--
-- Dumping data for table `residential`
--

INSERT INTO `residential` (`id`, `width`, `height`, `no_of_rooms`, `no_of_bath`, `no_of_yeird`, `price`, `complete_date`, `picture`) VALUES
('127', 123, 12, 5, 3, 123, 20000000, '2019-10-12', '2.jpg'),
('126', 123, 12, 5, 4, 123, 23000000, '2019-11-11', '3.jpg'),
('127', 123, 12, 5, 4, 123, 23000000, '2017-05-21', '9.jpg'),
('128', 123, 12, 5, 4, 123, 23000000, '2017-11-11', '8.jpg'),
('129', 123, 12, 5, 4, 123, 23000000, '2019-11-12', '10.jpg');

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
('arifa123', 'arifa', 'NO', '1.jpg', '123', 'abc123', '2017-06-07', 'sad123', 'sw3123', 'ABC+', 'female', 'unmarried', 'islam', 'arifa123@example.com', 'a123'),
('ays123', 'aysha', 'NO', 'd.png', '1234', 'efg123sa', '1995-06-07', 'ays12345', '09785ays', 'O+', 'female', 'unmarried', 'islam', 'aysha123@example.com', 'a123as'),
('linkon89', 'linkon', 'YES', '4.jpg\r\n', '67890', 'efg123', '1995-06-07', 'linkon8979', '098865linkon', 'AB+', 'male', 'unmarried', 'islam', 'linkon879870@example.com', 'asx78'),
('mahir123', 'mahir', 'YES', '3.jpg', '67890', 'adsfg123', '1995-06-07', 'mah1678', '8079mah', 'AB+', 'male', 'unmarried', 'islam', 'mahir123@example.com', 'asx78'),
('rai123', 'raihan', 'YES', '2.jpg', '2345', 'easg123', '1986-06-07', 'ass908', '7800ass', 'AB+', 'male', 'married', 'islam', 'raihan23@example.com', 'asxsa123'),
('sus123', 'susmita', 'NO', 'a.jpg', '123', 'efg123', '1995-06-07', 'susg123', '0123sgh', 'O+', 'female', 'unmarried', 'islam', 'susmi123@example.com', '1234');

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
