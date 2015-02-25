-- phpMyAdmin SQL Dump
-- version 4.3.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2015 at 07:25 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wis1-29`
--

-- --------------------------------------------------------

--
-- Table structure for table `baguio_barangay`
--

CREATE TABLE IF NOT EXISTS `baguio_barangay` (
  `City_Town_ID` int(10) NOT NULL,
  `Barangay_Name` int(11) NOT NULL,
  `Barangay_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `case_crime`
--

CREATE TABLE IF NOT EXISTS `case_crime` (
  `Crime_Case_ID` int(10) NOT NULL,
  `Offense_ID` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `case_detail`
--

CREATE TABLE IF NOT EXISTS `case_detail` (
  `Crime_Case_ID` int(10) NOT NULL,
  `BlotterEntryNo` int(50) NOT NULL,
  `ReportingUnit` varchar(50) NOT NULL,
  `DateOfReporting` date NOT NULL,
  `TimeOfReporting` time NOT NULL,
  `Weapon_ID` int(10) NOT NULL,
  `Suspect_ID` int(10) NOT NULL,
  `Victim_ID` int(10) NOT NULL,
  `City_Town_ID` int(5) NOT NULL,
  `Station_ID` int(3) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=1244572 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `case_detail`
--

INSERT INTO `case_detail` (`Crime_Case_ID`, `BlotterEntryNo`, `ReportingUnit`, `DateOfReporting`, `TimeOfReporting`, `Weapon_ID`, `Suspect_ID`, `Victim_ID`, `City_Town_ID`, `Station_ID`) VALUES
(12432, 22141, 's7', '2001-09-23', '21:00:00', 0, 0, 0, 0, 0),
(12312, 12412, 's5', '2003-04-12', '12:04:00', 0, 0, 0, 0, 0),
(44234, 98823, 's2', '2014-09-21', '21:09:00', 0, 0, 0, 0, 0),
(4422, 981211, 's2', '2014-09-21', '21:09:00', 0, 0, 0, 0, 0),
(12431, 125677, 's8', '2013-09-23', '21:10:00', 0, 0, 0, 0, 0),
(44534, 444211, 's8', '2015-04-23', '19:00:00', 0, 0, 0, 0, 0),
(12412, 678845, 's6', '2014-09-13', '21:23:00', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `case_weapon`
--

CREATE TABLE IF NOT EXISTS `case_weapon` (
  `Firearm_ID` int(10) NOT NULL,
  `Weapon_ID` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `crime`
--

CREATE TABLE IF NOT EXISTS `crime` (
  `Crime_Type_ID` int(10) NOT NULL,
  `Crime_Type_Description` varchar(120) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `firearm`
--

CREATE TABLE IF NOT EXISTS `firearm` (
  `Firearm_ID` int(10) NOT NULL,
  `Firearm_Type` varchar(50) NOT NULL,
  `Firearm_Make` varchar(50) NOT NULL,
  `Firearm_Caliber` varchar(30) NOT NULL,
  `Firearm_SerialNo` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `offense`
--

CREATE TABLE IF NOT EXISTS `offense` (
  `Offense_ID` int(10) NOT NULL,
  `Crime_Type_ID` int(10) NOT NULL,
  `Offense_Description` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE IF NOT EXISTS `station` (
  `Station_ID` int(10) NOT NULL,
  `Station_Name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `station_staff`
--

CREATE TABLE IF NOT EXISTS `station_staff` (
  `Station_Staff_ID` int(10) NOT NULL,
  `Staff_Lastname` varchar(30) NOT NULL,
  `Staff_Firstname` varchar(30) NOT NULL,
  `Station_ID` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `suspect_data`
--

CREATE TABLE IF NOT EXISTS `suspect_data` (
  `SuspectID` int(15) NOT NULL,
  `Status` varchar(25) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `MiddleName` varchar(30) NOT NULL,
  `BirthDate` date NOT NULL,
  `BirthPlace` varchar(50) NOT NULL,
  `Occupation` varchar(50) NOT NULL,
  `Nationality` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Height` int(20) NOT NULL,
  `Weight` int(20) NOT NULL,
  `Marital_Status` varchar(20) NOT NULL,
  `Barangay_ID` int(5) NOT NULL,
  `City` varchar(20) NOT NULL,
  `HouseNumber` int(4) NOT NULL,
  `StreetName` varchar(20) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4220 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suspect_data`
--

INSERT INTO `suspect_data` (`SuspectID`, `Status`, `LastName`, `FirstName`, `MiddleName`, `BirthDate`, `BirthPlace`, `Occupation`, `Nationality`, `Gender`, `Height`, `Weight`, `Marital_Status`, `Barangay_ID`, `City`, `HouseNumber`, `StreetName`) VALUES
(4215, 'BJMP Baguio', 'Lopez', 'Julia', 'Madison', '2013-07-23', 'Baguio city', 'Nurse', 'Filipino', 'Female', 160, 45, 'Single', 0, 'Baguio City', 24, 'Kayang Street'),
(4216, 'BJMP Baguio', 'Perez', 'Miko', 'Logu', '2012-04-13', 'Baguio City', 'None', 'Filipino', 'Male', 160, 55, 'Single', 0, 'Baguio City', 34, 'Brentwood Village'),
(4219, 'BJMP Baguio', 'Santiago', 'Jesse', 'Madriaga', '1986-06-16', 'Pampanga', 'Bouncer', 'Filipino', 'Male', 180, 75, 'Single', 0, 'Baguio City', 187, 'Crystal Cave'),
(4217, 'BJMP Baguio', 'Locquiao', 'Maynard', 'Chester', '1980-09-12', 'Baguio City', 'Cook', 'French', 'Male', 178, 76, 'Single', 0, 'Baguio City', 76, 'Rimando Road'),
(4218, 'BJMP Baguio', 'Sta Maria', 'Alfredo', 'Tabing', '1986-06-13', 'Dagupan City', 'None', 'Filipino', 'Male', 173, 64, 'Single', 0, 'Baguio City', 133, 'Pinsao Pilot');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`) VALUES
(1),
(2),
(3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_ID` int(10) NOT NULL,
  `Staff_User_ID` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `victim_data`
--

CREATE TABLE IF NOT EXISTS `victim_data` (
  `Victim_ID` int(10) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Nationality` varchar(15) NOT NULL,
  `Occupation` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Birthdate` date NOT NULL,
  `Marital_Status` varchar(10) NOT NULL,
  `Barangay_ID` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `weapon`
--

CREATE TABLE IF NOT EXISTS `weapon` (
  `Weapon_ID` int(10) NOT NULL,
  `Weapon_Type` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baguio_barangay`
--
ALTER TABLE `baguio_barangay`
  ADD PRIMARY KEY (`City_Town_ID`);

--
-- Indexes for table `case_crime`
--
ALTER TABLE `case_crime`
  ADD PRIMARY KEY (`Crime_Case_ID`);

--
-- Indexes for table `case_detail`
--
ALTER TABLE `case_detail`
  ADD PRIMARY KEY (`Crime_Case_ID`);

--
-- Indexes for table `case_weapon`
--
ALTER TABLE `case_weapon`
  ADD PRIMARY KEY (`Firearm_ID`);

--
-- Indexes for table `crime`
--
ALTER TABLE `crime`
  ADD PRIMARY KEY (`Crime_Type_ID`), ADD UNIQUE KEY `Crime_Type_ID` (`Crime_Type_ID`);

--
-- Indexes for table `firearm`
--
ALTER TABLE `firearm`
  ADD PRIMARY KEY (`Firearm_ID`);

--
-- Indexes for table `offense`
--
ALTER TABLE `offense`
  ADD PRIMARY KEY (`Offense_ID`), ADD UNIQUE KEY `Crime_Type_ID` (`Crime_Type_ID`);

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`Station_ID`);

--
-- Indexes for table `station_staff`
--
ALTER TABLE `station_staff`
  ADD PRIMARY KEY (`Station_Staff_ID`);

--
-- Indexes for table `suspect_data`
--
ALTER TABLE `suspect_data`
  ADD PRIMARY KEY (`SuspectID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_ID`);

--
-- Indexes for table `victim_data`
--
ALTER TABLE `victim_data`
  ADD PRIMARY KEY (`Victim_ID`);

--
-- Indexes for table `weapon`
--
ALTER TABLE `weapon`
  ADD PRIMARY KEY (`Weapon_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baguio_barangay`
--
ALTER TABLE `baguio_barangay`
  MODIFY `City_Town_ID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `case_detail`
--
ALTER TABLE `case_detail`
  MODIFY `Crime_Case_ID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1244572;
--
-- AUTO_INCREMENT for table `suspect_data`
--
ALTER TABLE `suspect_data`
  MODIFY `SuspectID` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4220;
--
-- AUTO_INCREMENT for table `victim_data`
--
ALTER TABLE `victim_data`
  MODIFY `Victim_ID` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
