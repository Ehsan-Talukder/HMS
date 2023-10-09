-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 13, 2023 at 09:38 AM
-- Server version: 10.6.14-MariaDB
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unicoit_hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `hotel_name` varchar(90) DEFAULT NULL,
  `full_name` varchar(90) DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `role`, `hotel_name`, `full_name`, `email`) VALUES
(1, 'shifat', '1234', 'admin', 'srsoft', '123455', 'admim@jlajd.com'),
(24, '01942818127', '01942818127', 'Front Desk Office', 'srsoft', 'Ifty', 'ifty@unicoit.com'),
(23, '01318303088', '01318303088', 'Account Management', 'srsoft', 'Surja', 'Skdamarbari@gmail.com'),
(22, '01319673862', '01319673862', 'Room Service', 'srsoft', 'Sanjoy', 'skdamarbari@gmail.com'),
(21, '01791028673', '1234', 'Room Service', 'srsoft', 'asdfd', 'admin@admin.com'),
(20, '01318303084', 'SKDamarbari', 'admin', 'srsoft', 'Admin', 'skdamarbari@gmail.com'),
(19, '01318303082', 'SKDamarbari', 'Front Desk Office', 'srsoft', 'SKD AMAR BARI ', 'frontdesk@skdamarbarism.com'),
(18, '01942818111', '1234', 'Account Management', 'srsoft', 'Musfiq', 'asf@gade.com'),
(16, '01942818109', '1234', 'Front Desk Office', 'srsoft', 'Faisal Alam', 'faisal@unicoit.com'),
(17, '01942818110', '1234', 'HR Management', 'srsoft', 'Saiful', 'asf@gade.com');

-- --------------------------------------------------------

--
-- Table structure for table `amminities`
--

CREATE TABLE `amminities` (
  `id` int(11) NOT NULL,
  `aminity_name` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `hotel_name` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `opening_balance` int(11) NOT NULL,
  `current_balance` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `bank_name`, `account_number`, `opening_balance`, `current_balance`) VALUES
(1, 'Khukon', '1232132132', 100, 23100),
(2, 'Sonali', '383838', 1000, 4500);

-- --------------------------------------------------------

--
-- Table structure for table `bank_statement`
--

CREATE TABLE `bank_statement` (
  `id` int(11) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `transfer` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `ammount` int(11) NOT NULL,
  `current_balance` int(11) NOT NULL,
  `purpose` varchar(255) DEFAULT NULL,
  `bank_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bank_statement`
--

INSERT INTO `bank_statement` (`id`, `bank_name`, `account_number`, `transfer`, `date`, `ammount`, `current_balance`, `purpose`, `bank_id`) VALUES
(1, 'Khukon', '1232132132', 'Deposite', '2023-07-17', 1000, 1100, '', 1),
(2, 'Sonali', '383838', 'Deposite', '2023-07-17', 5000, 6000, '', 2),
(3, 'Sonali', '383838', 'Withdraw', '2023-07-17', 500, 5500, 'Office', 2),
(4, 'Sonali', '383838', 'Withdraw', '2023-07-17', 1000, 4500, 'Bank charge ', 2),
(5, 'Khukon', '1232132132', 'Deposite', '2023-07-17', 22000, 23100, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `booking_request`
--

CREATE TABLE `booking_request` (
  `id` int(11) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `guest_email` varchar(255) NOT NULL,
  `arival_date` date NOT NULL,
  `deperture_date` date NOT NULL,
  `noa` int(11) NOT NULL,
  `noc` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(444) NOT NULL,
  `designation` varchar(333) NOT NULL,
  `status` varchar(255) NOT NULL,
  `salary` int(11) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `work_area` varchar(90) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `designation`, `status`, `salary`, `phone`, `work_area`) VALUES
(1, 'Admin', 'Admin', 'Active', 15000, '01318303084', 'Front Desk Office'),
(2, 'Saiful', 'Hr', 'Active', 20000, '01942818110', 'HR Management'),
(3, 'Musfiq', 'Accounts', 'Active', 20000, '01942818111', 'Account Management'),
(4, 'SKD AMAR BARI ', 'Front Desk ', 'Active', 10000, '01318303082', 'Front Desk Office'),
(5, 'Admin', 'Admin', 'Active', 15000, '01318303084', 'Admin'),
(6, 'asdfd', 'asdfd', 'Active', 23432, '01791028673', 'Room Service'),
(7, 'Sanjoy', 'Room Attendant ', 'Active', 6000, '01319673862', 'Room Service'),
(8, 'Surja', 'Accounts', 'Active', 5777, '01318303088', 'Account Management'),
(9, 'Ifty', 'Developer', 'Active', 15000, '01942818127', 'Front Desk Office');

-- --------------------------------------------------------

--
-- Table structure for table `expences`
--

CREATE TABLE `expences` (
  `id` int(11) NOT NULL,
  `expense_ammount` int(11) NOT NULL,
  `expense_date` date NOT NULL,
  `expense_reason` varchar(255) NOT NULL,
  `hotel_name` varchar(255) DEFAULT NULL,
  `month` varchar(30) DEFAULT NULL,
  `year` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `expences`
--

INSERT INTO `expences` (`id`, `expense_ammount`, `expense_date`, `expense_reason`, `hotel_name`, `month`, `year`) VALUES
(2, 4545, '2023-07-17', 'adfadf', 'srsoft', 'July', '23'),
(3, 2000, '2023-07-17', 'oil', 'srsoft', 'July', '23');

-- --------------------------------------------------------

--
-- Table structure for table `guest_directory`
--

CREATE TABLE `guest_directory` (
  `id` int(11) NOT NULL,
  `guest_name` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `identity` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birth_date` varchar(255) NOT NULL,
  `nationality` varchar(80) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kitchen`
--

CREATE TABLE `kitchen` (
  `id` int(11) NOT NULL,
  `available_item_name` varchar(255) DEFAULT NULL,
  `available_item_quantity` varchar(255) DEFAULT NULL,
  `unit_price` int(11) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kitchen_items`
--

CREATE TABLE `kitchen_items` (
  `id` int(11) NOT NULL,
  `item_name` varchar(40) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `item_price` int(11) NOT NULL,
  `invoice` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laundry`
--

CREATE TABLE `laundry` (
  `id` int(11) NOT NULL,
  `room_number` int(11) NOT NULL,
  `items` varchar(355) NOT NULL,
  `Staus` varchar(255) NOT NULL,
  `hotel_name` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `laundry`
--

INSERT INTO `laundry` (`id`, `room_number`, `items`, `Staus`, `hotel_name`) VALUES
(1, 101, 'kjlkj', 'Go For Laundry', 'srsoft');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `contact_number` varchar(999) NOT NULL,
  `guest_name` varchar(999) NOT NULL,
  `ref_by` varchar(999) NOT NULL,
  `identity` varchar(999) NOT NULL,
  `room_number` int(11) NOT NULL,
  `checkin_date` date NOT NULL,
  `checkout_date` date NOT NULL,
  `special_note` longtext NOT NULL,
  `total_price` int(11) DEFAULT NULL,
  `email` varchar(999) DEFAULT NULL,
  `age` float DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `profession` varchar(999) DEFAULT NULL,
  `pax` int(11) DEFAULT NULL,
  `permanent_address` longtext DEFAULT NULL,
  `present_address` longtext DEFAULT NULL,
  `nationality` varchar(999) DEFAULT NULL,
  `purpose_of_visit` longtext DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `statuss` varchar(255) DEFAULT NULL,
  `advance_payment` int(11) DEFAULT NULL,
  `due_payment` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `payment_method_advance` varchar(299) DEFAULT NULL,
  `payment_method_total` varchar(299) DEFAULT NULL,
  `flag` int(11) DEFAULT NULL,
  `hotel_name` varchar(255) DEFAULT NULL,
  `booking_number` varchar(255) DEFAULT NULL,
  `due_clearance` int(11) DEFAULT NULL,
  `due_clearance_method` int(11) DEFAULT NULL,
  `reservation_date` date DEFAULT NULL,
  `extra_charges` int(11) DEFAULT NULL,
  `reservation_by` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `contact_number`, `guest_name`, `ref_by`, `identity`, `room_number`, `checkin_date`, `checkout_date`, `special_note`, `total_price`, `email`, `age`, `birth_date`, `profession`, `pax`, `permanent_address`, `present_address`, `nationality`, `purpose_of_visit`, `gender`, `statuss`, `advance_payment`, `due_payment`, `discount`, `payment_method_advance`, `payment_method_total`, `flag`, `hotel_name`, `booking_number`, `due_clearance`, `due_clearance_method`, `reservation_date`, `extra_charges`, `reservation_by`) VALUES
(1, '01791028673', 'Shifat dfsd', 'ullashsdfsd', '2323', 210, '2023-07-28', '2023-07-29', '<p>dsdafa</p>', 10000, 'golamkhan368@gmail.com', NULL, '2023-07-19', 'fd', 4, '', '', 'dssd', '', 'Male', 'CHECKEDIN', 788, 9212, 0, 'Nagad', NULL, 1, 'srsoft', '100000', NULL, NULL, '2023-07-17', 0, NULL),
(2, '015', 'Faisal update', 'shifat', '12121', 402, '2023-07-19', '2023-07-27', '<p>Bsbsbd</p>', 88000, 'faisal@gmail.com', NULL, '2023-07-29', 'web', 4, '', '', 'dfadfad', '', 'Male', 'CHECKEDIN', 788, 87212, 0, 'Bkash', NULL, 1, 'srsoft', '100001', NULL, NULL, '2023-07-17', 0, NULL),
(3, '01791028673', 'fdkjlkjd', 'ullash', '54654', 301, '2023-07-28', '2023-08-04', '<p>hjlkj</p>', 91000, 'golamkhan368@gmail.com', NULL, '2023-07-27', 'kjljj', 5, '', '', 'lkjlkjlk', '', 'Male', 'CHECKEDIN', 1000, 90000, 200, 'Card', NULL, 1, 'srsoft', '100002', NULL, NULL, '2023-07-17', 0, NULL),
(4, '01711581801', 'Rezwan Hossain', 'Self', '5466564', 302, '2023-07-27', '2023-07-29', '<p>KLJHKL</p>', 22000, 'skdamarbari@gmail.com', NULL, '2023-07-29', 'fgdfgdf', 4, '', '', 'fghfgh', '', 'Male', 'CHECKEDOUT', 22000, 0, 0, 'Bkash', NULL, 1, 'srsoft', '100003', NULL, NULL, '2023-07-17', 0, NULL),
(5, '01791028673', 'Shifat', 'adsf', '4345', 301, '2023-08-18', '2023-08-18', '<p>adfadsf</p>', 13000, 'golamkhan368@gmail.com', NULL, '2023-07-02', 'sfdsfs', 3, '', '', 'sdfsdf', '', 'Male', 'CHECKEDOUT', 13000, 0, 0, 'Rocket', NULL, 1, 'srsoft', '100004', NULL, NULL, '2023-07-17', 0, NULL),
(6, '01794050055', 'Shifat E Rasul', 'Ullash', '34243', 104, '2023-07-18', '2023-07-18', '<p>hgjhgjh</p>', 11000, 'admim@jlajd.com', NULL, '2023-07-04', 'sfsdfs', 3, '', '', 'asda', '', 'Male', 'CHECKEDIN', 1000, 10000, 0, 'Nagad', NULL, 1, 'srsoft', '100005', NULL, NULL, '2023-07-18', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE `reserve` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`id`, `name`) VALUES
(1, 'Shifat'),
(2, 'Shifat');

-- --------------------------------------------------------

--
-- Table structure for table `restaurent_menu`
--

CREATE TABLE `restaurent_menu` (
  `id` int(11) NOT NULL,
  `image` varchar(9999) NOT NULL,
  `food_name` varchar(255) NOT NULL,
  `food_price` int(11) NOT NULL,
  `food_dtails` longtext NOT NULL,
  `hotel_name` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `restaurent_menu`
--

INSERT INTO `restaurent_menu` (`id`, `image`, `food_name`, `food_price`, `food_dtails`, `hotel_name`) VALUES
(1, '', 'ffgghfgh', 899, 'ghjghjghj', 'srsoft');

-- --------------------------------------------------------

--
-- Table structure for table `restaurent_order`
--

CREATE TABLE `restaurent_order` (
  `id` int(11) NOT NULL,
  `guest_name` varchar(255) NOT NULL,
  `guest_phone` varchar(255) NOT NULL,
  `guest_room` int(11) NOT NULL,
  `food_name` varchar(255) NOT NULL,
  `food_price` int(11) NOT NULL,
  `payment` int(11) NOT NULL,
  `due_ammount` int(11) NOT NULL,
  `order_taken_by` varchar(255) NOT NULL,
  `hotel_name` varchar(255) NOT NULL,
  `ammount` int(11) DEFAULT NULL,
  `order_number` int(11) DEFAULT NULL,
  `statuss` int(11) DEFAULT NULL,
  `booking_number` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `room_number` varchar(999) NOT NULL,
  `room_category` varchar(999) NOT NULL,
  `status` varchar(999) NOT NULL,
  `available_for` varchar(999) NOT NULL,
  `room_rate` int(11) NOT NULL,
  `hotel_name` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `room_number`, `room_category`, `status`, `available_for`, `room_rate`, `hotel_name`) VALUES
(1, '101', 'AC', 'Occupied', 'Couple', 12000, 'srsoft'),
(2, '102', 'AC', 'Ready To Check In', '3 Person Room', 11000, 'srsoft'),
(3, '103', 'AC', 'Ready To Check In', '3 Person Room', 11000, 'srsoft'),
(4, '104', 'AC', 'Occupied', '3 Person Room', 11000, 'srsoft'),
(5, '201', 'AC', 'Ready To Check In', '3 Person Room', 13000, 'srsoft'),
(6, '202', 'AC', 'Ready To Check In', '3 Person Room', 11000, 'srsoft'),
(7, '203', 'AC', 'Occupied', 'Couple', 8000, 'srsoft'),
(8, '204', 'AC', 'Ready To Check In', 'Couple', 8000, 'srsoft'),
(9, '205', 'AC', 'Ready To Check In', 'Couple', 8000, 'srsoft'),
(10, '206', 'AC', 'Ready To Check In', 'Couple', 10000, 'srsoft'),
(11, '207', 'AC', 'Ready To Check In', 'Couple', 10000, 'srsoft'),
(12, '208', 'AC', 'Ready To Check In', '5 Person Room', 16000, 'srsoft'),
(13, '209', 'AC', 'Ready To Check In', '3 Person Room', 10000, 'srsoft'),
(14, '210', 'AC', 'Occupied', '3 Person Room', 10000, 'srsoft'),
(15, '301', 'AC', 'Ready To Check In', '3 Person Room', 13000, 'srsoft'),
(16, '302', 'AC', 'Ready To Check In', '3 Person Room', 11000, 'srsoft'),
(17, '303', 'AC', 'Ready To Check In', 'Couple', 8000, 'srsoft'),
(18, '304', 'AC', 'Ready To Check In', 'Couple', 8000, 'srsoft'),
(19, '305', 'AC', 'Ready To Check In', 'Couple', 8000, 'srsoft'),
(20, '306', 'AC', 'Ready To Check In', 'Couple', 10000, 'srsoft'),
(21, '307', 'AC', 'Ready To Check In', 'Couple', 10000, 'srsoft'),
(22, '308', 'AC', 'Ready To Check In', '5 Person Room', 16000, 'srsoft'),
(23, '309', 'AC', 'Ready To Check In', '3 Person Room', 10000, 'srsoft'),
(24, '310', 'AC', 'Ready To Check In', '3 Person Room', 10000, 'srsoft'),
(25, '401', 'AC', 'Ready To Check In', '3 Person Room', 13000, 'srsoft'),
(26, '402', 'AC', 'Occupied', '3 Person Room', 11000, 'srsoft'),
(27, '403', 'AC', 'Occupied', 'Couple', 8000, 'srsoft'),
(28, '404', 'AC', 'Ready To Check In', 'Couple', 8000, 'srsoft'),
(29, '405', 'AC', 'Ready To Check In', 'Couple', 8000, 'srsoft'),
(30, '406', 'AC', 'Ready To Check In', 'Couple', 10000, 'srsoft'),
(31, '407', 'AC', 'Ready To Check In', 'Couple', 10000, 'srsoft'),
(32, '408', 'AC', 'Ready To Check In', '5 Person Room', 16000, 'srsoft'),
(33, '409', 'AC', 'Ready To Check In', '3 Person Room', 10000, 'srsoft'),
(34, '410', 'AC', 'Ready To Check In', '3 Person Room', 10000, 'srsoft'),
(35, '106', 'AC', 'Ready To Check In', 'Couple', 3000, 'srsoft');

-- --------------------------------------------------------

--
-- Table structure for table `statement`
--

CREATE TABLE `statement` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `stage` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `ammount` int(11) NOT NULL,
  `purpose` varchar(255) DEFAULT NULL,
  `month` varchar(90) DEFAULT NULL,
  `hotel_name` varchar(100) DEFAULT NULL,
  `years` varchar(20) DEFAULT NULL,
  `re_list_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `statement`
--

INSERT INTO `statement` (`id`, `status`, `stage`, `date`, `ammount`, `purpose`, `month`, `hotel_name`, `years`, `re_list_id`) VALUES
(1, 'Earning', 'Reserved', '2023-07-16', 600, 'Room Reservation', 'July', 'srsoft', '23', NULL),
(2, 'Earning', 'Reserved', '2023-07-17', 600, 'Room Reservation', 'July', 'srsoft', '23', NULL),
(3, 'Expense', '-', '2023-07-17', 1000, 'Snacks', 'July', 'srsoft', '23', NULL),
(4, 'Earning', 'Reserved', '2023-07-17', 5000, 'Room Reservation', 'July', 'srsoft', '23', NULL),
(5, 'Earning', 'Reserved', '2023-07-17', 5000, 'Room Reservation', 'July', 'srsoft', '23', NULL),
(6, 'Earning', 'Reserved', '2023-07-17', 600, 'Room Reservation', 'July', 'srsoft', '23', NULL),
(7, 'Earning', 'Reserved', '2023-07-17', 5000, 'Room Reservation', 'July', 'srsoft', '23', NULL),
(8, 'Earning', 'Reserved', '2023-07-17', 500, 'Room Reservation', 'July', 'srsoft', '23', NULL),
(9, 'Earning', 'Reserved', '2023-07-17', 5000, 'Room Reservation', 'July', 'srsoft', '23', NULL),
(10, 'Earning', 'Reserved', '2023-07-17', 1000, 'Room Reservation', 'July', 'srsoft', '23', NULL),
(11, 'Earning', 'Reserved', '2023-07-17', 34234, 'Room Reservation', 'July', 'srsoft', '23', NULL),
(12, 'Earning', 'Reserved', '2023-07-17', 435, 'Room Reservation', 'July', 'srsoft', '23', NULL),
(13, 'Earning', 'Reserved', '2023-07-17', 565, 'Room Reservation', 'July', 'srsoft', '23', NULL),
(14, 'Earning', 'Reserved', '2023-07-17', 0, 'Room Reservation', 'July', 'srsoft', '23', NULL),
(15, 'Earning', 'Reserved', '2023-07-17', 0, 'Room Reservation', 'July', 'srsoft', '23', NULL),
(16, 'Earning', 'Reserved', '2023-07-17', 0, 'Room Reservation', 'July', 'srsoft', '23', NULL),
(17, 'Expense', '-', '2023-07-17', 4545, 'adfadf', 'July', 'srsoft', '23', NULL),
(18, 'Earning', 'Reserved', '2023-07-17', 0, 'Room Reservation', 'July', 'srsoft', '23', NULL),
(19, 'Earning', 'Reserved', '2023-07-17', 0, 'Room Reservation', 'July', 'srsoft', '23', NULL),
(20, 'Earning', 'Reserved', '2023-07-17', 1200, 'Room Reservation', 'July', 'srsoft', '23', NULL),
(21, 'Earning', 'Reserved', '2023-07-17', 788, 'Room Reservation', 'July', 'srsoft', '23', NULL),
(22, 'Earning', 'Reserved', '2023-07-17', 4838, 'Room Reservation', 'July', 'srsoft', '23', NULL),
(23, 'Expense', '-', '2023-07-17', 2000, 'oil', 'July', 'srsoft', '23', NULL),
(24, 'Earning', 'Checked Out', '2023-07-17', 50162, 'Room CheckOut', 'July', 'srsoft', '23', NULL),
(25, 'Earning', 'Reserved', '2023-07-17', 600, 'Room Reservation', 'July', 'srsoft', '23', NULL),
(26, 'Earning', 'Reserved', '2023-07-17', 10000, 'Room Reservation', 'July', 'srsoft', '23', NULL),
(27, 'Earning', 'Checked Out', '2023-07-17', 12000, 'Room CheckOut', 'July', 'srsoft', '23', NULL),
(28, 'Earning', 'Reserved', '2023-07-17', 5000, 'Room Reservation', 'July', 'srsoft', '23', NULL),
(29, 'Earning', 'Checked Out', '2023-07-17', 25200, 'Room CheckOut', 'July', 'srsoft', '23', NULL),
(30, 'Earning', 'Checked Out', '2023-07-17', 13000, 'Room CheckOut', 'July', 'srsoft', '23', NULL),
(31, 'Earning', 'Checked Out', '2023-07-18', 8000, 'Room CheckOut', 'July', 'srsoft', '23', NULL),
(32, 'Earning', 'Reserved', '2023-07-18', 1000, 'Room Reservation', 'July', 'srsoft', '23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `swim`
--

CREATE TABLE `swim` (
  `id` int(11) NOT NULL,
  `guest_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `price` int(11) NOT NULL,
  `token` int(11) DEFAULT NULL,
  `statuss` varchar(222) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `id` int(11) NOT NULL,
  `voucher_name` varchar(99) NOT NULL,
  `voucher_code` int(11) NOT NULL,
  `voucher_discount` int(11) NOT NULL,
  `hotel_name` varchar(90) NOT NULL,
  `voucher_release_date` date DEFAULT NULL,
  `voucher_closing_date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amminities`
--
ALTER TABLE `amminities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_statement`
--
ALTER TABLE `bank_statement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_request`
--
ALTER TABLE `booking_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expences`
--
ALTER TABLE `expences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guest_directory`
--
ALTER TABLE `guest_directory`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contact_number` (`contact_number`);

--
-- Indexes for table `kitchen`
--
ALTER TABLE `kitchen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kitchen_items`
--
ALTER TABLE `kitchen_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laundry`
--
ALTER TABLE `laundry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reserve`
--
ALTER TABLE `reserve`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurent_menu`
--
ALTER TABLE `restaurent_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurent_order`
--
ALTER TABLE `restaurent_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statement`
--
ALTER TABLE `statement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `swim`
--
ALTER TABLE `swim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `amminities`
--
ALTER TABLE `amminities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bank_statement`
--
ALTER TABLE `bank_statement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `booking_request`
--
ALTER TABLE `booking_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `expences`
--
ALTER TABLE `expences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `guest_directory`
--
ALTER TABLE `guest_directory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kitchen`
--
ALTER TABLE `kitchen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kitchen_items`
--
ALTER TABLE `kitchen_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laundry`
--
ALTER TABLE `laundry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reserve`
--
ALTER TABLE `reserve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `restaurent_menu`
--
ALTER TABLE `restaurent_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `restaurent_order`
--
ALTER TABLE `restaurent_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `statement`
--
ALTER TABLE `statement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `swim`
--
ALTER TABLE `swim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
