-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2021 at 12:25 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppvs`
--

-- --------------------------------------------------------

--
-- Table structure for table `locationsubmaster`
--

CREATE TABLE `locationsubmaster` (
  `Location` varchar(50) NOT NULL,
  `LocationCode` varchar(50) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `ProjectCode` varchar(20) NOT NULL,
  `ProjectName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locationsubmaster`
--

INSERT INTO `locationsubmaster` (`Location`, `LocationCode`, `Description`, `ProjectCode`, `ProjectName`) VALUES
('00+050 LHS Haddaththawa Road', '00+050_LHS_Haddaththawa_Road', 'Road', 'MAHIYANGANAYA', 'MAHIYANGANAYA P19 & P23'),
('00+600 LHS - Ranaviru Road', '00+600_LHS_Ranaviru_Road', 'Road', 'MAHIYANGANAYA', 'MAHIYANGANAYA P19 & P23'),
('01+300 RHS Arawaththa Road', '01+300_RHS_Arawaththa_Road', 'Road', 'MAHIYANGANAYA', 'MAHIYANGANAYA P19 & P23'),
('04+100 LHS Gageyaya Road', '04+100_LHS_Gageyaya_Road', 'Road', 'MAHIYANGANAYA', 'MAHIYANGANAYA P19 & P23'),
('Bakmeedeniya Road', 'Bakmeedeniya_Road', 'Road', 'DEHIATHTHAKANDIYA', 'DEHIATHTHAKANDIYA P14 & P15'),
('CEP-59+100', 'CEP-59+100', '', 'CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)'),
('CEP-59+195', 'CEP-59+195', '', 'CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)'),
('CEP-59+300', 'CEP-59+300', '', 'CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)'),
('CEP-59+450', 'CEP-59+450', '', 'CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)'),
('CEP-59+850', 'CEP-59+850', '', 'CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)'),
('CEP-61+650', 'CEP-61+650', '', 'CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)'),
('CEP-61+680', 'CEP-61+680', '', 'CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)'),
('CEP-61+720', 'CEP-61+720', '', 'CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)'),
('CEP-66+150', 'CEP-66+150', '', 'CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)'),
('CEP-66+450', 'CEP-66+450', '', 'CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)'),
('CEP-66+650', 'CEP-66+650', '', 'CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)'),
('CEP-68+080-RHS', 'CEP-68+080-RHS', '', 'CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)'),
('CEP-68+100', 'CEP-68+100', '', 'CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)'),
('CEP-68+120', 'CEP-68+120', '', 'CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)'),
('CEP 68+130', 'CEP-68+130', '', 'CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)'),
('CEP-68+140', 'CEP-68+140', '', 'CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)'),
('CEP-68+150', 'CEP-68+150', '', 'CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)'),
('CEP 59+900', 'CEP_59+900', '', 'CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)'),
('Jaffna 3+300', 'Jaffna_3+300', '', 'IROAD_JAFFNA', 'JAFFNA - I ROAD -04'),
('Kirimatiya 3+446 LHS', 'Kirimatiya_3+446_LHS', '', 'KIRIMETIYA', 'KIRIMETIYA ROAD (0+000 - 4+000) KM'),
('Kirimatiya 3+560 LHS', 'Kirimatiya_3+560_LHS', '', 'KIRIMETIYA', 'KIRIMETIYA ROAD (0+000 - 4+000) KM'),
('Kirimetiya Site', 'Kirimetiya_Site', '', 'KIRIMETIYA', 'KIRIMETIYA ROAD (0+000 - 4+000) KM'),
('Kuliyapitiya 5+000 LHS', 'Kuliyapitiya_5+000_LHS', '', 'KULIYAPITIYA', 'KULIYAPITIYA - PADIWELA'),
('Kuliyapitiya 7+000 RHS', 'Kuliyapitiya_7+000_RHS', '', 'KULIYAPITIYA', 'KULIYAPITIYA - PADIWELA'),
('Nakarkovil Stock Pile', 'Nakarkovil_Stock_Pile', '', 'IROAD_JAFFNA', 'JAFFNA - I ROAD -04'),
('Nuwaraeliya 98+100', 'Nuwaraeliya_98+100', '', 'NUWARAELIYA', 'NUWARAELIYA ROAD(98+460 - 104+460) KM'),
('Nuwaraeliya 99+720', 'Nuwaraeliya_99+720', '', 'NUWARAELIYA', 'NUWARAELIYA ROAD(98+460 - 104+460) KM'),
('Nuwaraeliya Site', 'Nuwaraeliya_Site', '', 'NUWARAELIYA', 'NUWARAELIYA ROAD(98+460 - 104+460) KM'),
('Test Location 01', 'Test_Location_01', 'For Testing Purposes Only', 'TEST_PROJECT', 'TEST PROJECT'),
('Test Location 02', 'Test_Location_02', 'For Testing Purposes Only', 'TEST_PROJECT', 'TEST PROJECT'),
('Weraganthota 0+855 LHS', 'Weraganthota_0+855_LHS', '', 'WERAGANTOTA', 'WERAGANTOTA RANDENIGALA (0+000 - 2+500 KM)'),
('Weraganthota 1+800 LHS', 'Weraganthota_1+800_LHS', '', 'WERAGANTOTA', 'WERAGANTOTA RANDENIGALA (0+000 - 2+500 KM)'),
('Weragantota 2+160 LHS', 'Weragantota_2+160_LHS', '', 'WERAGANTOTA', 'WERAGANTOTA RANDENIGALA (0+000 - 2+500 KM)'),
('Weragantota 2+800_LHS', 'Weragantota_2+800_LHS', '', 'WERAGANTOTA', 'WERAGANTOTA RANDENIGALA (0+000 - 2+500 KM)'),
('Weragantota 3+930 RHS', 'Weragantota_3+930_RHS', 'Road', 'WERAGANTOTA', 'WERAGANTOTA RANDENIGALA (0+000 - 2+500 KM)'),
('Weragantota Site', 'Weragantota_Site', '', 'WERAGANTOTA', 'WERAGANTOTA RANDENIGALA (0+000 - 2+500 KM)'),
('Ssc', 'xcC', 'zCc', 'CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)');

-- --------------------------------------------------------

--
-- Table structure for table `progressmaster`
--

CREATE TABLE `progressmaster` (
  `PpdCode` varchar(100) NOT NULL,
  `ProjectCode` varchar(100) NOT NULL,
  `LocationCode` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `PhotoItem` varchar(100) DEFAULT NULL,
  `Image` varchar(100) NOT NULL,
  `ImgDate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `progressmaster`
--

INSERT INTO `progressmaster` (`PpdCode`, `ProjectCode`, `LocationCode`, `Status`, `PhotoItem`, `Image`, `ImgDate`) VALUES
('CEP-2/PK-C_2021-07-07_02:00:26', 'CEP-2/PK-C', 'CEP-59+300', 'in progress', 'Bridge', 'http://192.243.108.248/MobileApi/upload/front_photo_1624974961912.jpg', 'jan 2020'),
('CEP-2/PK-C_2021-07-07_08:41:16', 'CEP-2/PK-C', 'CEP-59+450', 'in progress', 'Retaining Wall', 'C:/xampp/htdocs/ppvs123/uploads/images/4.PNG', 'jan 2020'),
('CEP-2/PK-C_2021-07-07_08:57:36', 'CEP-2/PK-C', 'CEP-59+195', 'in progress', 'Bridge', 'C:/xampp/htdocs/ppvs123/uploads/images/3_-_Copy1.PNG', 'jan 2020'),
('CEP-2/PK-C_2021-07-07_09:15:01', 'CEP-2/PK-C', 'CEP-59+100', 'in progress', 'Bridge', 'C:/xampp/htdocs/ppvs123/uploads/images/4.PNG', 'jan 2020'),
('CEP-2/PK-C_2021-07-07_11:39:51', 'CEP-2/PK-C', '00+600_LHS_Ranaviru_Road', 'in progress', 'Embankment', 'C:/xampp/htdocs/ppvs123/uploads/images/6_-_Copy.PNG', 'jan 2020'),
('MAHIYANGANAYA_2021-07-07_02:10:55', 'MAHIYANGANAYA', 'CEP-59+100', 'completed', 'Culvert', 'C:/xampp/htdocs/ppvs123/uploads/images/3_-_Copy.PNG', 'feb 2020'),
('MAHIYANGANAYA_2021-07-07_02:38:00', 'MAHIYANGANAYA', '01+300_RHS_Arawaththa_Road', 'in progress', 'Bridge', 'C:/xampp/htdocs/ppvs123/uploads/images/6.PNG', 'jan 2020'),
('MAHIYANGANAYA_2021-07-07_10:25:34', 'MAHIYANGANAYA', 'CEP-59+850', 'in progress', 'Bridge', 'C:/xampp/htdocs/ppvs123/uploads/images/Capture.PNG', 'jan 2020'),
('MAHIYANGANAYA_2021-07-07_11:38:43', 'MAHIYANGANAYA', '00+050_LHS_Haddaththawa_Road', 'fff', 'Bridge', 'C:/xampp/htdocs/ppvs123/uploads/images/download.jpg', 'sdff2222'),
('MAHIYANGANAYA_2021-07-07_11:42:52', 'MAHIYANGANAYA', 'CEP-59+195', 'ss', 'Bridge', 'C:/xampp/htdocs/ppvs123/uploads/images/3.PNG', 'sdff');

-- --------------------------------------------------------

--
-- Table structure for table `projectmaster`
--

CREATE TABLE `projectmaster` (
  `ProjectName` varchar(100) NOT NULL,
  `ProjectCode` varchar(30) NOT NULL,
  `MainLocation` varchar(50) NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projectmaster`
--

INSERT INTO `projectmaster` (`ProjectName`, `ProjectCode`, `MainLocation`, `Description`) VALUES
('CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)', 'CEP-2/PK-C', '', 'Road'),
('DEHIATHTHAKANDIYA P14 & P15', 'DEHIATHTHAKANDIYA', '', 'Road'),
('HEAD OFFICE', 'HO', '', ''),
('JAFFNA - I ROAD -04', 'IROAD_JAFFNA', '', 'Road'),
('KIRIMETIYA ROAD (0+000 - 4+000) KM', 'KIRIMETIYA', '', 'Road'),
('KULIYAPITIYA - PADIWELA', 'KULIYAPITIYA', '', ''),
('MAHIYANGANAYA P19 & P23', 'MAHIYANGANAYA', '', 'Road'),
('NUWARAELIYA ROAD(98+460 - 104+460) KM', 'NUWARAELIYA', '', 'Road'),
('TEST PROJECT', 'TEST_PROJECT', '', 'For Testing Purposes Only'),
('WERAGANTOTA RANDENIGALA (0+000 - 2+500 KM)', 'WERAGANTOTA', '', 'Road');

-- --------------------------------------------------------

--
-- Table structure for table `usermaster`
--

CREATE TABLE `usermaster` (
  `UserName` char(30) NOT NULL,
  `Name` char(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `RefProject` char(30) NOT NULL,
  `Position` varchar(30) NOT NULL,
  `ContactNumber` varchar(14) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `ProjectNew` varchar(10) NOT NULL,
  `ProjectView` varchar(10) NOT NULL,
  `ProjectEdit` varchar(10) NOT NULL,
  `ProjectDelete` varchar(10) NOT NULL,
  `UserNew` varchar(10) NOT NULL,
  `UserView` varchar(10) NOT NULL,
  `UserEdit` varchar(10) NOT NULL,
  `UserDelete` varchar(10) NOT NULL,
  `UserBlock` varchar(10) NOT NULL,
  `LocationNew` varchar(10) NOT NULL,
  `LocationEdit` varchar(10) NOT NULL,
  `LocationView` varchar(10) NOT NULL,
  `LocationDelete` varchar(10) NOT NULL,
  `PermissionSetup` varchar(10) NOT NULL,
  `ProjectAssign` varchar(10) NOT NULL,
  `ResetPassword` varchar(10) NOT NULL,
  `PermissionGrant` varchar(10) NOT NULL,
  `UserAssign` varchar(10) NOT NULL,
  `ProgressNew` varchar(10) NOT NULL,
  `ProgressView` varchar(10) NOT NULL,
  `ProgressEdit` varchar(10) NOT NULL,
  `ProgressDelete` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usermaster`
--

INSERT INTO `usermaster` (`UserName`, `Name`, `Password`, `RefProject`, `Position`, `ContactNumber`, `Status`, `ProjectNew`, `ProjectView`, `ProjectEdit`, `ProjectDelete`, `UserNew`, `UserView`, `UserEdit`, `UserDelete`, `UserBlock`, `LocationNew`, `LocationEdit`, `LocationView`, `LocationDelete`, `PermissionSetup`, `ProjectAssign`, `ResetPassword`, `PermissionGrant`, `UserAssign`, `ProgressNew`, `ProgressView`, `ProgressEdit`, `ProgressDelete`) VALUES
('adDFAAD', 'DDG', 'bae12da0960932ae81fa12c230867a77969a890b', '', 'CFO', '1111111111', 'ACTIVE', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('ccczxc', 'shehan kaushalya wijesena', '45cdab51176cc1c40aaf20f395a359164b728b98', '', 'GM', '1111111111', 'ACTIVE', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'YES', '', '', '', '', ''),
('shehan.k', 'Shehan Kaushalya', '8cb2237d0679ca88db6464eac60da96345513964', '', 'Headoffice User', '0714519639', 'Active    ', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'YES', 'YES', 'checked', 'checked', 'checked', 'checked'),
('test1', 'test', '8cb2237d0679ca88db6464eac60da96345513964', '', 'Other', '1234567890', 'Active    ', 'checked', 'checked', 'checked', 'checked', 'unchecked', 'unchecked', 'unchecked', 'unchecked', 'unchecked', 'checked', '', '', '', 'checked', 'checked', '', 'YES', 'YES', 'checked', 'checked', 'checked', 'checked');

-- --------------------------------------------------------

--
-- Table structure for table `userproject`
--

CREATE TABLE `userproject` (
  `ProjectCode` varchar(50) NOT NULL,
  `ProjectName` varchar(50) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userproject`
--

INSERT INTO `userproject` (`ProjectCode`, `ProjectName`, `UserName`, `status`) VALUES
('CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)', 'shehan.k', 'checked'),
('TEST_PROJECT', 'TEST PROJECT', 'shehan.k', 'unchecked'),
('KIRIMETIYA', 'KIRIMETIYA ROAD (0+000 - 4+000) KM', 'shehan.k', 'unchecked'),
('NUWARAELIYA', 'NUWARAELIYA ROAD(98+460 - 104+460) KM', 'shehan.k', 'unchecked'),
('IROAD_JAFFNA', 'JAFFNA - I ROAD -04', 'shehan.k', 'unchecked'),
('WERAGANTOTA', 'WERAGANTOTA RANDENIGALA (0+000 - 2+500 KM)', 'shehan.k', 'unchecked'),
('KULIYAPITIYA', 'KULIYAPITIYA - PADIWELA', 'shehan.k', 'unchecked'),
('MAHIYANGANAYA', 'MAHIYANGANAYA P19 & P23', 'shehan.k', 'checked'),
('DEHIATHTHAKANDIYA', 'DEHIATHTHAKANDIYA P14 & P15', 'shehan.k', 'unchecked'),
('CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)', 'test1', 'unchecked'),
('DEHIATHTHAKANDIYA', 'DEHIATHTHAKANDIYA P14 & P15', 'test1', 'unchecked'),
('IROAD_JAFFNA', 'JAFFNA - I ROAD -04', 'test1', 'unchecked'),
('KIRIMETIYA', 'KIRIMETIYA ROAD (0+000 - 4+000) KM', 'test1', 'unchecked'),
('KULIYAPITIYA', 'KULIYAPITIYA - PADIWELA', 'test1', 'unchecked'),
('MAHIYANGANAYA', 'MAHIYANGANAYA P19 & P23', 'test1', 'unchecked'),
('NUWARAELIYA', 'NUWARAELIYA ROAD(98+460 - 104+460) KM', 'test1', 'unchecked'),
('TEST_PROJECT', 'TEST PROJECT', 'test1', 'unchecked'),
('WERAGANTOTA', 'WERAGANTOTA RANDENIGALA (0+000 - 2+500 KM)', 'test1', 'unchecked'),
('HO', 'HEAD OFFICE', 'shehan.k', 'unchecked');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locationsubmaster`
--
ALTER TABLE `locationsubmaster`
  ADD PRIMARY KEY (`LocationCode`),
  ADD KEY `ProjectCode` (`ProjectName`),
  ADD KEY `locationsubmaster_ibfk_1` (`ProjectCode`);

--
-- Indexes for table `progressmaster`
--
ALTER TABLE `progressmaster`
  ADD PRIMARY KEY (`PpdCode`);

--
-- Indexes for table `projectmaster`
--
ALTER TABLE `projectmaster`
  ADD PRIMARY KEY (`ProjectCode`);

--
-- Indexes for table `usermaster`
--
ALTER TABLE `usermaster`
  ADD PRIMARY KEY (`UserName`);

--
-- Indexes for table `userproject`
--
ALTER TABLE `userproject`
  ADD KEY `UserName` (`UserName`),
  ADD KEY `ProjectCode` (`ProjectCode`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `locationsubmaster`
--
ALTER TABLE `locationsubmaster`
  ADD CONSTRAINT `locationsubmaster_ibfk_1` FOREIGN KEY (`ProjectCode`) REFERENCES `projectmaster` (`ProjectCode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `userproject`
--
ALTER TABLE `userproject`
  ADD CONSTRAINT `userproject_ibfk_1` FOREIGN KEY (`UserName`) REFERENCES `usermaster` (`UserName`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `userproject_ibfk_2` FOREIGN KEY (`ProjectCode`) REFERENCES `projectmaster` (`ProjectCode`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
