-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 04:29 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `payment_Method` varchar(20) NOT NULL,
  `payment_Amount` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone_number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_ID`, `user_ID`, `payment_Method`, `payment_Amount`, `first_name`, `last_name`, `phone_number`) VALUES
(10, 1, 'Cash', 500, 'Hazan', 'Ahamad', 773456234),
(11, 2, 'Cash', 700, 'Manel', 'Ariyarathne', 773458934),
(13, 16, 'Card', 12000000, 'Pawithra', 'Perera', 774532321);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `Order_ID` int(11) NOT NULL,
  `Full_Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Mobile_No` int(11) NOT NULL,
  `Property_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`Order_ID`, `Full_Name`, `Address`, `Mobile_No`, `Property_ID`) VALUES
(19, 'Dulanka  kawmini', '121,Malabe ', 773456789, 3),
(21, 'Kamal', 'Kaduwela,Malabe', 775678345, 15),
(22, 'Sunil', 'Pamunuwa,Maharagama', 777897838, 5),
(23, 'Jayantha', '11/Colombo 06', 712324321, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_property`
--

CREATE TABLE `tbl_property` (
  `id` int(11) NOT NULL,
  `Property_Title` varchar(50) NOT NULL,
  `Total_Area` int(11) NOT NULL,
  `Property_Price` float NOT NULL,
  `Property_City` varchar(30) NOT NULL,
  `Property_Address` varchar(100) NOT NULL,
  `Property_Owner` varchar(50) NOT NULL,
  `Contact_Details` int(11) NOT NULL,
  `More_details` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE `tbl_registration` (
  `Registration_ID` int(11) NOT NULL,
  `F_name` varchar(100) NOT NULL,
  `L_name` varchar(100) NOT NULL,
  `Date_of_birth` int(11) NOT NULL,
  `Mobile_No` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`Registration_ID`, `F_name`, `L_name`, `Date_of_birth`, `Mobile_No`, `Email`, `Password`) VALUES
(1, 'abc', 'egf', 1, 777494948, 'abd@gmail.com', ''),
(2, 'abc', 'sjjd', 1, 733827238, 'acg@gmail.com', ''),
(3, '', '', 0, 0, '', ''),
(4, '', '', 0, 0, '', ''),
(5, 'Dulanka', 'Kawmini', 2, 777777755, 'ra@gmail.com', ''),
(6, 'Dulanka', 'Kawmini', 2, 777777755, 'ra@gmail.com', ''),
(7, 'Dulanka', 'Kawmini', 2, 777777755, 'ra@gmail.com', ''),
(8, 'din', 'ran', 2, 765433455, 'ra@gmail.com', ''),
(9, 'dilan', 'perera', 1, 713951266, 'bgh@gmail.com', ''),
(10, 'diigjj', 'hgjkl', 1, 777777777, 'abc@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_property`
--

CREATE TABLE `tb_property` (
  `id` int(11) NOT NULL,
  `Property_Title` varchar(50) NOT NULL,
  `Total_Area` int(11) NOT NULL,
  `Property_Price` float NOT NULL,
  `Property_City` varchar(50) NOT NULL,
  `Property_Address` varchar(100) NOT NULL,
  `Property_Owner` varchar(50) NOT NULL,
  `Contact_Details` int(11) NOT NULL,
  `More_details` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_property`
--

INSERT INTO `tb_property` (`id`, `Property_Title`, `Total_Area`, `Property_Price`, `Property_City`, `Property_Address`, `Property_Owner`, `Contact_Details`, `More_details`) VALUES
(4, 'land', 20, 1000000, 'Kasbewa', 'Mirisswatta,Kasbewa', 'Shanthi', 715506134, 'Calm city'),
(5, 'Land for sale Mathara', 20, 1000000, 'Mathara', 'Mathara,Galle', 'Maithri', 718234567, 'More Facilities'),
(13, 'Land-Nugegoda', 20, 10, 'Colombo', 'Kirulapana,Nugegoda', 'Namal', 776746500, 'More facilities'),
(14, 'Land-Dehiwala', 10, 20000000, 'Dehiwala', '20/Dewala Road, Dehiwala', 'Janith Perera', 775434321, 'This land located near dewala road, dehiwala. Good environment.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_ID`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`Order_ID`);

--
-- Indexes for table `tbl_property`
--
ALTER TABLE `tbl_property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  ADD PRIMARY KEY (`Registration_ID`);

--
-- Indexes for table `tb_property`
--
ALTER TABLE `tb_property`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `Order_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_property`
--
ALTER TABLE `tbl_property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  MODIFY `Registration_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_property`
--
ALTER TABLE `tb_property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
