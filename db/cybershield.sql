-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2024 at 08:08 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cybershield`
--

-- --------------------------------------------------------

--
-- Table structure for table `casereporting`
--

CREATE TABLE `casereporting` (
  `CaseID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `CaseTitle` varchar(255) NOT NULL,
  `Description` text,
  `ReportDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `ID` int(11) NOT NULL,
  `Sponsor_ID` int(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `message_time` varchar(800) NOT NULL,
  `message_program` varchar(800) NOT NULL,
  `Role` enum('Enable','Dis Enable') NOT NULL,
  `industrycategory` enum('education','ecommerce','entrepreneur','businessman','other') DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`ID`, `Sponsor_ID`, `name`, `email`, `address`, `mobile`, `message_time`, `message_program`, `Role`, `industrycategory`, `date`) VALUES
(1, 0, 'ZEPHANIA JAMES', 'zephaniandoshi@gmail.com', 'MWANZA', '0759770984', 'one mounth', 'Yes,', '', 'entrepreneur', '2024-01-11 17:43:46');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `EmailID` int(11) NOT NULL,
  `SenderID` int(11) DEFAULT NULL,
  `RecipientID` int(11) DEFAULT NULL,
  `Subject` varchar(255) NOT NULL,
  `Body` text,
  `SendDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `ResourceID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` varchar(15) NOT NULL,
  `Type` varchar(400) NOT NULL,
  `Cat` varchar(32) NOT NULL,
  `FilePath` varchar(255) NOT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `UploadDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UserID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`ResourceID`, `name`, `size`, `Type`, `Cat`, `FilePath`, `Description`, `UploadDate`, `UserID`) VALUES
(8, 'phishing simulation module.pdf', '98239', 'Incident Protocol', '', 'forms/phishing simulation module.pdf', 'Delve into our disaster recovery plan, a robust strategy for overcoming unforeseen disruptions', '2024-01-18 12:33:17', 1),
(11, 'NIST CYBERSECURITY FRAME WORK.pdf', '871529', 'Security Compliance', 'International standards', 'forms/CISControls.pdf', 'NIST Cybersecurity Framework', '2024-01-18 13:34:29', 1),
(12, 'CISControls.pdf', '871529', 'Security Compliance', 'International standards', 'forms/CISControls.pdf', 'CIS Critical Security Controls', '2024-01-18 13:36:51', 1),
(13, 'ISO 27001 BUSINESS CONTINUITY CHECKLIST.pdf', '344341', 'Security Compliance', 'Checklist', 'forms/ISO 27001 BUSINESS CONTINUITY CHECKLIST.pdf', 'ISO 27001 BUSINESS CONTINUITY CHECKLIST                    ', '2024-01-18 14:03:24', 1),
(16, 'Understanding the NIST Phish.pdf', '460296', 'Technical Desk', 'Cutting edge', 'forms/SHANGWE E SAID.pdf', 'Document for Understanding the NIST Phish Scale_FINAL', '2024-01-18 14:26:46', 1),
(17, 'NIST.CSWP Paper.pdf', '775990', 'Technical Desk', 'Cutting edge', 'forms/NIST.CSWP Paper.pdf', 'Document for NIST.CSWP Paper', '2024-01-18 14:28:42', 1),
(18, 'CSAC Annual Report CISA.pdf', '226652', 'Technical Desk', 'Cutting edge', 'forms/CSAC Annual Report CISA.pdf', 'Document for CSAC Annual Report CISA', '2024-01-18 14:29:28', 1),
(19, 'resilience_of physical critical_infrastructure strategic plan.pdf', '534265', 'Technical Desk', 'Cutting edge', 'forms/resilience_of physical critical_infrastructure strategic plan.pdf', 'resilience_of physical critical_infrastructure strategic plan', '2024-01-18 14:30:44', 1),
(20, 'ISO 27002 INFORMATION SECURITY.pdf', '496928', 'Security Compliance', 'Checklist', 'forms/ISO 27002 INFORMATION SECURITY.pdf', 'ISO 27002 INFORMATION SECURITY GUIDELINES CHECKLIST TEMPLATE                                               ', '2024-01-18 14:32:36', 1),
(22, 'Uncertain wire transfers Document.pdf', '250340', 'Incident Guidance', '', 'forms/Uncertain wire transfers Document.pdf', 'Uncertain wire transfers', '2024-01-19 16:30:02', 7),
(23, 'find your lost phone..pdf', '377486', 'Incident Guidance', '', 'forms/find your lost phone..pdf', 'Tracking the lost phone/ end device', '2024-01-19 16:33:31', 7),
(24, 'What to do once your device has been compromised with DOS.pdf', '216846', 'Incident Guidance', '', 'forms/What to do once your device has been compromised with DOS.pdf', 'Device compromise/DOS/DDOS', '2024-01-19 16:35:06', 7);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `RoleID` int(11) NOT NULL,
  `RoleName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `SponsorID` int(11) NOT NULL,
  `SponsorName` varchar(100) NOT NULL,
  `SponsorType` varchar(50) DEFAULT NULL,
  `ContactPerson` varchar(100) DEFAULT NULL,
  `ContactEmail` varchar(100) DEFAULT NULL,
  `ContactPhone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `trainingID` int(11) NOT NULL,
  `ResourceID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `terms` varchar(12) NOT NULL,
  `PasswordHash` varchar(255) NOT NULL,
  `Salt` varchar(50) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `Role` enum('admin','user','subscriber') NOT NULL,
  `Age` int(11) DEFAULT NULL,
  `CurrentLocation` varchar(100) DEFAULT NULL,
  `IndustrialCategory` enum('education','ecommerce','entrepreneur','businessman','other') DEFAULT NULL,
  `user_status` enum('Enable','Disable') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `Username`, `Email`, `mobile`, `terms`, `PasswordHash`, `Salt`, `FullName`, `Role`, `Age`, `CurrentLocation`, `IndustrialCategory`, `user_status`) VALUES
(1, 'JAMES', 'zephaniandoshi@gmail.com', '0757660790', '', '81dc9bdb52d04dc20036dbd8313ed055', '', 'ZEPHANIA JAMES', 'admin', 28, 'MWANZA', 'education', 'Enable'),
(2, 'Dinner', 'dinahmdollo@gmail.com', '0759770987', 'agree', '81dc9bdb52d04dc20036dbd8313ed055', '', 'DINAH MDOLLO', 'admin', 26, 'Dodoma', 'education', 'Enable'),
(7, '', 'davisdil@gmail.com', '', 'agree', '81dc9bdb52d04dc20036dbd8313ed055', '', 'Davis Dil', 'user', NULL, NULL, NULL, 'Enable');

-- --------------------------------------------------------

--
-- Table structure for table `userroles`
--

CREATE TABLE `userroles` (
  `UserRoleID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `RoleID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `VolunteerID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `ExperitseArea` varchar(255) NOT NULL,
  `JoinDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `casereporting`
--
ALTER TABLE `casereporting`
  ADD PRIMARY KEY (`CaseID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CategoryID`),
  ADD UNIQUE KEY `CategoryName` (`CategoryName`);

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `Sponsor_ID` (`Sponsor_ID`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`EmailID`),
  ADD KEY `SenderID` (`SenderID`),
  ADD KEY `RecipientID` (`RecipientID`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`ResourceID`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`RoleID`),
  ADD UNIQUE KEY `RoleName` (`RoleName`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`SponsorID`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`trainingID`),
  ADD KEY `ResourceID` (`ResourceID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `userroles`
--
ALTER TABLE `userroles`
  ADD PRIMARY KEY (`UserRoleID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `RoleID` (`RoleID`);

--
-- Indexes for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD PRIMARY KEY (`VolunteerID`),
  ADD KEY `UserID` (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `casereporting`
--
ALTER TABLE `casereporting`
  MODIFY `CaseID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `EmailID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `ResourceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `SponsorID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `trainingID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `userroles`
--
ALTER TABLE `userroles`
  MODIFY `UserRoleID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `volunteers`
--
ALTER TABLE `volunteers`
  MODIFY `VolunteerID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `casereporting`
--
ALTER TABLE `casereporting`
  ADD CONSTRAINT `casereporting_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`);

--
-- Constraints for table `email`
--
ALTER TABLE `email`
  ADD CONSTRAINT `email_ibfk_1` FOREIGN KEY (`SenderID`) REFERENCES `user` (`UserID`),
  ADD CONSTRAINT `email_ibfk_2` FOREIGN KEY (`RecipientID`) REFERENCES `user` (`UserID`);

--
-- Constraints for table `resources`
--
ALTER TABLE `resources`
  ADD CONSTRAINT `resources_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`);

--
-- Constraints for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD CONSTRAINT `sponsors_ibfk_1` FOREIGN KEY (`SponsorID`) REFERENCES `donate` (`Sponsor_ID`) ON DELETE CASCADE;

--
-- Constraints for table `training`
--
ALTER TABLE `training`
  ADD CONSTRAINT `training_ibfk_1` FOREIGN KEY (`ResourceID`) REFERENCES `resources` (`ResourceID`);

--
-- Constraints for table `userroles`
--
ALTER TABLE `userroles`
  ADD CONSTRAINT `userroles_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`),
  ADD CONSTRAINT `userroles_ibfk_2` FOREIGN KEY (`RoleID`) REFERENCES `roles` (`RoleID`);

--
-- Constraints for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD CONSTRAINT `volunteers_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
