-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 19, 2022 at 12:39 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Pass` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Name`, `Email`, `Pass`) VALUES
(1, 'admin', 'admin@gmail.com', 'Admin@123'),
(2, 'Saurav', 'sauravkoshti2000@gmail.com', 'Saurav@1907');

-- --------------------------------------------------------

--
-- Table structure for table `tblblooddonars`
--

DROP TABLE IF EXISTS `tblblooddonars`;
CREATE TABLE IF NOT EXISTS `tblblooddonars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) DEFAULT NULL,
  `Mobile` char(11) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `BloodGroup` varchar(3) NOT NULL,
  `Age` int(11) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Message` mediumtext DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblblooddonars`
--

INSERT INTO `tblblooddonars` (`id`, `Name`, `Mobile`, `Email`, `Gender`, `BloodGroup`, `Age`, `Address`, `Message`) VALUES
(1, 'Anuj Kumar', '9999857868', 'anuj@gmail.com', 'Male', 'A-', 27, 'Hatkeshwar', 'Last week, I received a new lease in life. Thank you for your blood donation.'),
(2, ' Amreliya Akhil', '4124124124', 'dasdasd@dfdsf.com', 'Male', 'AB+', 34, 'Bapunagar', 'No words can express how thankful I am for the blood donation I received from your group. My daughter survived the medical procedure because of your help.'),
(3, 'Amisha', '7596568590', 'ami@gmail.com', 'Female', 'B+', 23, 'Bopal', 'I was one of the recipients of the blood donation and I am forever grateful to all of you who went out of your way to donate blood.'),
(4, 'Sumit Kik', '4444992257', 'ks@gmail.com', 'Male', 'O-', 26, 'Shyamal', 'Because of your generosity, lives will be saved. Thank you for your blood donation.'),
(5, 'Nitesh Kumart', '8569855244', 'niiii@test.com', 'Male', 'O+', 32, 'Maninagar', 'I am deeply thankful for your blood donation of which I was the recipient. If not for your generosity, I would not have been alive today.'),
(6, 'Shah Parvati', '7567405227', 'parvatis@gmail.com', 'Female', 'B+', 20, 'Kankaria', 'As blood donations are needed on a daily basis, we are truly thankful for your regular blood donations. We highly appreciate your initiative to come to the Red Cross center.'),
(7, 'Rajpara Sejal', '7589645873', 'rsejal@gmail.com', 'Female', 'AB+', 20, 'Zundal Circle', 'To all our blood donors, we thank you for your support in our medical mission through your blood donations.'),
(8, 'Barot Nikunj', '7589632145', 'nbarot@gmail.com', 'Male', 'AB-', 20, 'Nikol', 'We thank you for your continued cooperation in connection with the blood donation drive. We hope to see you again next year.'),
(9, 'Bhatt Ramesh', '7859263526', 'rameshb@gmail.com', 'Male', 'A+', 20, 'Vastrapur', 'With your blood donation, you have done a great service to the nation. Thank you for participating.'),
(10, 'Patel Meet', '4789124578', 'meetp@gmail.com', 'Male', 'A-', 25, 'Saraspur                    ', ' was one of the recipients of the blood donation and I am forever grateful to all of you who went out of your way to donate blood.'),
(11, 'Koshti Suarav', '9638477969', 'sauravkoshti2000@gmail.com', 'Male', 'B+', 25, 'Nobalnagar', 'Donate blood for save life.');

-- --------------------------------------------------------

--
-- Table structure for table `tblbloodgroup`
--

DROP TABLE IF EXISTS `tblbloodgroup`;
CREATE TABLE IF NOT EXISTS `tblbloodgroup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `BloodGroup` varchar(20) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbloodgroup`
--

INSERT INTO `tblbloodgroup` (`id`, `BloodGroup`, `PostingDate`) VALUES
(1, 'A+', '2021-01-24 04:43:10'),
(2, 'A-', '2021-01-24 04:43:10'),
(3, 'B+', '2021-01-24 04:43:10'),
(4, 'B-', '2021-01-24 04:43:10'),
(5, 'AB+', '2021-01-24 04:43:10'),
(6, 'AB-', '2021-01-24 04:43:10'),
(7, 'O+', '2021-01-24 04:43:10'),
(8, 'O-', '2021-01-24 04:43:10');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusquery`
--

DROP TABLE IF EXISTS `tblcontactusquery`;
CREATE TABLE IF NOT EXISTS `tblcontactusquery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Mobile` bigint(10) DEFAULT NULL,
  `Message` text DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactusquery`
--

INSERT INTO `tblcontactusquery` (`id`, `Name`, `Email`, `Mobile`, `Message`, `PostingDate`) VALUES
(1, 'Amisha', 'ami@gmail.com', 7596568590, 'Because of your generosity, lives will be saved. Thank you for your blood donation.\r\n', '2021-01-24 07:07:15'),
(2, 'Nitesh Kumart', 'niiii@test.com', 8569855244, 'I am deeply thankful for your blood donation of which I was the recipient. If not for your generosity, I would not have been alive today.', '2021-01-24 07:08:45'),
(3, 'Patel Meet', 'meetp@gmail.com', 4789124578, 'I Want To Arrange the Blood Donation Camp In Our Society. So can you tell that which  date is  posible for that.', '2021-01-24 11:41:30');

-- --------------------------------------------------------

--
-- Table structure for table `tblrequestblood`
--

DROP TABLE IF EXISTS `tblrequestblood`;
CREATE TABLE IF NOT EXISTS `tblrequestblood` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) DEFAULT NULL,
  `Mobile` char(11) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `BloodGroup` varchar(3) NOT NULL,
  `Age` int(11) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblrequestblood`
--

INSERT INTO `tblrequestblood` (`id`, `Name`, `Mobile`, `Email`, `Gender`, `BloodGroup`, `Age`, `Address`) VALUES
(1, 'Anuj Kumar', '9999857868', 'anuj@gmail.com', 'Male', 'A-', 27, 'Hatkeshwar'),
(2, ' Amreliya Akhil', '4124124124', 'dasdasd@dfdsf.com', 'Male', 'AB+', 34, 'Bapunagar'),
(3, 'Amisha', '7596568590', 'ami@gmail.com', 'Female', 'B+', 23, 'Bopal'),
(4, 'Sumit Kik', '4444992257', 'ks@gmail.com', 'Male', 'O-', 26, 'Shyamal'),
(5, 'Nitesh Kumart', '8569855244', 'niiii@test.com', 'Male', 'O+', 32, 'Maninagar'),
(6, 'Shah Parvati', '7567405227', 'parvatis@gmail.com', 'Female', 'B+', 20, 'Kankaria'),
(7, 'Rajpara Sejal', '7589645873', 'rsejal@gmail.com', 'Female', 'AB+', 20, 'Zundal Circle'),
(8, 'Barot Nikunj', '7589632145', 'nbarot@gmail.com', 'Male', 'AB-', 20, 'Nikol'),
(9, 'Bhatt Ramesh', '7859263526', 'rameshb@gmail.com', 'Male', 'A+', 20, 'Vastrapur'),
(10, 'Patel Meet', '4789124578', 'meetp@gmail.com', 'Male', 'A-', 25, 'Saraspur                    '),
(11, 'Koshti Suarav', '9638477969', 'sauravkoshti2000@gmail.com', 'Male', 'B+', 25, 'Nobalnagar');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
