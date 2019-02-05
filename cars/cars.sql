-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2018 at 04:25 PM
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
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_id` int(10) NOT NULL,
  `userFirstName` varchar(255) NOT NULL,
  `userSurName` varchar(255) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `usernameCredentials` varchar(255) NOT NULL,
  `passwordCredentials` varchar(255) NOT NULL,
  `userGender` varchar(6) NOT NULL,
  `userAddress` varchar(255) NOT NULL,
  `accountType` varchar(20) NOT NULL DEFAULT 'staff'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `userFirstName`, `userSurName`, `userEmail`, `usernameCredentials`, `passwordCredentials`, `userGender`, `userAddress`, `accountType`) VALUES
(1, 'Claire', 'Smith', 'claire.smith@gmail.com', 'claire.smith', '$2y$10$xK56SfdluivRS4h8mJ/d/evyzvjTWqOOvSJYlPQKKBGXHput5bRDS', 'Female', 'Northampton', 'admin'),
(4, 'Fred', 'Clark', 'fred.clark123@gmail.com', 'fred.clark', '$2y$10$0ws1XXT0wXWMkRoySIM6tOqtqa.lKmniSMjIIyJXAgspT7T2R0TbO', 'Male', 'London', 'staff'),
(5, 'Sunil', 'Thapa', 'sunil.thapa@gmail.com', 'sunil43thapa', '$2y$10$0fLkUyCeMtPi8B39oSABS.MBkq2.90d5UEFlXeGc0FnYRGxN4s93C', 'Male', 'Nayabazar', 'staff'),
(6, 'Elon', 'Musk', 'elon.musk@gmail.com', 'elon.musk', '$2y$10$DZsDTFPrQyH/BIn0W8k.nOQtf3iXNtzRV/.jHtmNDYsuPFbFzziFS', 'Male', 'Silicon Valley', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `job_id` int(10) NOT NULL,
  `job_description` varchar(2000) NOT NULL,
  `no_of_vacancy` int(3) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`job_id`, `job_description`, `no_of_vacancy`, `status`) VALUES
(1, 'Designer', 2, 'Active'),
(3, 'Content Writer', 5, 'Active'),
(4, 'Manager', 1, 'Expired'),
(5, 'PHP Programmer', 3, 'Expired');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oldPrice` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manufacturerId` int(11) DEFAULT NULL,
  `description` longblob,
  `archive` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `account_id` int(10) NOT NULL,
  `mileage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `engine_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'petrol',
  `imageCounter` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `price`, `oldPrice`, `manufacturerId`, `description`, `archive`, `account_id`, `mileage`, `engine_type`, `imageCounter`) VALUES
(2, 'XJS', '14000', '15000', 2, 0x4d61646520696e20313939362c20617661696c61626c6520696e20677265656e20616e6420626c61636b2e, 'N', 1, '32 km/l', 'petrol', 2),
(3, 'E-Type', '29500', '30000', 2, 0x457863656c6c656e7420636f6e646974696f6e207573656420452d547970652c206f6e6c792032302c303030206d696c65732e20, 'N', 1, '32 km/l', 'petrol', 2),
(4, '280SL', '35000', '35000', 3, 0x476f6c642c20696e20657863656c6c656e7420636f6e646974696f6e, 'N', 1, '20 km/l', 'petrol', 2),
(5, '300SL', '14000', '14000', 3, 0x31393932206d6f64656c2077697468206a7573742037302c303030206d696c65732e, 'N', 4, '45 km/l', 'petrol', 2);

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `enquiry_id` int(10) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `cust_email` varchar(255) NOT NULL,
  `cust_telephone` varchar(255) NOT NULL,
  `cust_enquiry` varchar(2000) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'not complete',
  `staff_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`enquiry_id`, `cust_name`, `cust_email`, `cust_telephone`, `cust_enquiry`, `status`, `staff_id`) VALUES
(2, 'John Johnson', 'john.john123@gmail.com', '015435448', 'Is there any discount on Tesla Model 3?', 'complete', 1),
(3, 'Sunil Thapa', 'sunil.thapa16@my.northampton.ac.uk', '9860740002', 'Do you provide internship?', 'not complete', NULL),
(4, 'Sunil Thapa', 'sunil43thapa@gmail.com', '9860740002', 'Do you have any Tesla 3 model cars?', 'complete', 1);

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`id`, `name`) VALUES
(2, 'Jaguar'),
(3, 'Mercedes'),
(7, 'Tesla');

-- --------------------------------------------------------

--
-- Table structure for table `opening_hrs`
--

CREATE TABLE `opening_hrs` (
  `id` int(9) NOT NULL,
  `day` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opening_hrs`
--

INSERT INTO `opening_hrs` (`id`, `day`, `time`) VALUES
(1, 'Mon-Fri', '09:00-17:30'),
(2, 'Sat', '09:00-17:00'),
(3, 'Sun', '9:00-15:00');

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `story_id` int(9) NOT NULL,
  `story_title` varchar(2000) NOT NULL,
  `story_description` longblob NOT NULL,
  `account_id` int(10) NOT NULL,
  `imageCounter` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`story_id`, `story_title`, `story_description`, `account_id`, `imageCounter`) VALUES
(7, 'Holi', 0x5468697320697320636f6c6f7220666573746976616c2e2057652061726520676976696e672033302520646973636f756e74206f6e20656163682063617220626f6f6b2e, 1, 2),
(8, 'Silver Jubilee ', 0x537563682061206c6f6e672074696d6520666f722074686520636f6d70616e7920616e64206974732073746166662e2057652061726520676976696e672061206875676520646973636f756e74206f6620343025206f6e2074686973206f63636173696f6e2e2054686973206f666665722077696c6c206265206f766572206f6e2032322d4170722d323031382e, 4, 2),
(9, 'New car arrived', 0x54686973206973206e6577206d6f64656c20746861742077696c6c20626520617661696c61626c6520736f6f6e206f6e2074686520636c616972652063617220636f6d70616e792e, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`),
  ADD KEY `account_id` (`account_id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `manufacturerId` (`manufacturerId`),
  ADD KEY `account_id` (`account_id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`enquiry_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `opening_hrs`
--
ALTER TABLE `opening_hrs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`story_id`),
  ADD KEY `account_story_id` (`account_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `account_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `job_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `enquiry_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `opening_hrs`
--
ALTER TABLE `opening_hrs`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `story_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `car_account_id` FOREIGN KEY (`account_id`) REFERENCES `account` (`account_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `manufacturer_car_id` FOREIGN KEY (`manufacturerId`) REFERENCES `manufacturers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD CONSTRAINT `staff_enquiry_id` FOREIGN KEY (`staff_id`) REFERENCES `account` (`account_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `story`
--
ALTER TABLE `story`
  ADD CONSTRAINT `account_story_id` FOREIGN KEY (`account_id`) REFERENCES `account` (`account_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
