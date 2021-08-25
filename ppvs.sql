-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2021 at 09:26 AM
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
  `ProjectName` varchar(50) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locationsubmaster`
--

INSERT INTO `locationsubmaster` (`Location`, `LocationCode`, `Description`, `ProjectCode`, `ProjectName`, `Status`) VALUES
('00+050 LHS Haddaththawa Road', '00+050_LHS_Haddaththawa_Road', 'Road', 'MAHIYANGANAYA', 'MAHIYANGANAYA P19 & P23', ''),
('00+600 LHS - Ranaviru Road', '00+600_LHS_Ranaviru_Road', 'Road', 'MAHIYANGANAYA', 'MAHIYANGANAYA P19 & P23', ''),
('01+300 RHS Arawaththa Road', '01+300_RHS_Arawaththa_Road', 'Road', 'NUWARAELIYA', 'NUWARAELIYA ROAD(98+460 - 104+460) KM', 'Work_In_Progress'),
('04+100 LHS Gageyaya Road', '04+100_LHS_Gageyaya_Road', 'Road', 'MAHIYANGANAYA', 'MAHIYANGANAYA P19 & P23', 'Initiated'),
('10+517_LHS_Kekirawa', '10+517_LHS_Kekirawa', 'hume_pipe', 'KEKIRAWA_THALAWA', 'KEKIRAWA - THALAWA', 'Not_Yet_Started'),
('Bakmeedeniya Road', 'Bakmeedeniya_Road', 'Road', 'DEHIATHTHAKANDIYA', 'DEHIATHTHAKANDIYA P14 & P15', 'Work_In_Progress'),
('CEP-59+100', 'CEP-59+100', '', 'CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)', ''),
('CEP-59+195', 'CEP-59+195', '', 'CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)', ''),
('CEP-59+300', 'CEP-59+300', '', 'CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)', ''),
('CEP-59+450', 'CEP-59+450', '', 'CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)', ''),
('CEP-59+850', 'CEP-59+850', '', 'CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)', ''),
('CEP-61+650', 'CEP-61+650', '', 'CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)', ''),
('CEP-61+680', 'CEP-61+680', '', 'CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)', ''),
('CEP-61+720', 'CEP-61+720', '', 'CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)', ''),
('CEP-66+150', 'CEP-66+150', '', 'CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)', ''),
('CEP-66+450', 'CEP-66+450', '', 'CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)', ''),
('CEP-66+650', 'CEP-66+650', '', 'CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)', ''),
('CEP-68+080-RHS', 'CEP-68+080-RHS', '', 'CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)', ''),
('CEP-68+100', 'CEP-68+100', '', 'CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)', ''),
('CEP-68+120', 'CEP-68+120', '', 'CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)', ''),
('CEP 68+130', 'CEP-68+130', '', 'CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)', ''),
('CEP-68+140', 'CEP-68+140', '', 'CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)', ''),
('CEP-68+150', 'CEP-68+150', '', 'CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)', ''),
('CEP 59+900', 'CEP_59+900', '', 'CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)', ''),
('dummy_location', 'dummy_location', 'dummy', 'NUWARAELIYA', 'NUWARAELIYA ROAD(98+460 - 104+460) KM', 'Work_In_Progress'),
('dummy_location1', 'dummy_location1', 'dummy', 'DUMMY', 'DUMMY', 'Completed'),
('dummy_location2', 'dummy_location2', 'dummy', 'TEST_PROJECT', 'TEST PROJECT', 'Initiated'),
('Jaffna 3+300', 'Jaffna_3+300', '', 'IROAD_JAFFNA', 'JAFFNA - I ROAD -04', ''),
('Kirimatiya 3+446 LHS', 'Kirimatiya_3+446_LHS', '', 'KIRIMETIYA', 'KIRIMETIYA ROAD (0+000 - 4+000) KM', ''),
('Kirimatiya 3+560 LHS', 'Kirimatiya_3+560_LHS', '', 'KIRIMETIYA', 'KIRIMETIYA ROAD (0+000 - 4+000) KM', ''),
('Kirimetiya Site', 'Kirimetiya_Site', '', 'KIRIMETIYA', 'KIRIMETIYA ROAD (0+000 - 4+000) KM', ''),
('Kuliyapitiya 5+000 LHS', 'Kuliyapitiya_5+000_LHS', '', 'KULIYAPITIYA', 'KULIYAPITIYA - PADIWELA', ''),
('Kuliyapitiya 7+000 RHS', 'Kuliyapitiya_7+000_RHS', '', 'KULIYAPITIYA', 'KULIYAPITIYA - PADIWELA', ''),
('Nakarkovil Stock Pile', 'Nakarkovil_Stock_Pile', '', 'IROAD_JAFFNA', 'JAFFNA - I ROAD -04', ''),
('nikaweratiyal1', 'nikaweratiyal1', 'hume_pipe', 'NIKAWERATIYA', 'NIKAWERATIYA', 'Not_Yet_Started'),
('nikaweratiyal2', 'nikaweratiyal2', 'box', 'NIKAWERATIYA', 'NIKAWERATIYA', 'Not_Yet_Started'),
('Nuwaraeliya 98+100', 'Nuwaraeliya_98+100', '', 'NUWARAELIYA', 'NUWARAELIYA ROAD(98+460 - 104+460) KM', ''),
('Nuwaraeliya 99+720', 'Nuwaraeliya_99+720', '', 'NUWARAELIYA', 'NUWARAELIYA ROAD(98+460 - 104+460) KM', ''),
('Nuwaraeliya Site', 'Nuwaraeliya_Site', '', 'NUWARAELIYA', 'NUWARAELIYA ROAD(98+460 - 104+460) KM', ''),
('Test Location 01', 'Test_Location_01', 'For Testing Purposes Only', 'TEST_PROJECT', 'TEST PROJECT', ''),
('Test Location 02', 'Test_Location_02', 'For Testing Purposes Only', 'TEST_PROJECT', 'TEST PROJECT', ''),
('Weraganthota 0+855 LHS', 'Weraganthota_0+855_LHS', '', 'WERAGANTOTA', 'WERAGANTOTA RANDENIGALA (0+000 - 2+500 KM)', 'Hold'),
('Weraganthota 1+800 LHS', 'Weraganthota_1+800_LHS', '', 'WERAGANTOTA', 'WERAGANTOTA RANDENIGALA (0+000 - 2+500 KM)', ''),
('Weragantota 2+160 LHS', 'Weragantota_2+160_LHS', '', 'WERAGANTOTA', 'WERAGANTOTA RANDENIGALA (0+000 - 2+500 KM)', ''),
('Weragantota 2+800_LHS', 'Weragantota_2+800_LHS', '', 'WERAGANTOTA', 'WERAGANTOTA RANDENIGALA (0+000 - 2+500 KM)', 'Work_In_Progress'),
('Weragantota 3+930 RHS', 'Weragantota_3+930_RHS', 'Road', 'WERAGANTOTA', 'WERAGANTOTA RANDENIGALA (0+000 - 2+500 KM)', 'Initiated'),
('Weragantota Site', 'Weragantota_Site', '', 'WERAGANTOTA', 'WERAGANTOTA RANDENIGALA (0+000 - 2+500 KM)', ''),
('Ssc', 'xcC', 'zCc', 'CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)', '');

-- --------------------------------------------------------

--
-- Table structure for table `progressmaster`
--

CREATE TABLE `progressmaster` (
  `PpdCode` varchar(100) NOT NULL,
  `ProjectCode` varchar(100) NOT NULL,
  `LocationCode` varchar(100) NOT NULL,
  `PhotoItem` varchar(100) DEFAULT NULL,
  `WorkSide` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `ImgDate` varchar(100) NOT NULL,
  `Remark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `progressmaster`
--

INSERT INTO `progressmaster` (`PpdCode`, `ProjectCode`, `LocationCode`, `PhotoItem`, `WorkSide`, `Image`, `ImgDate`, `Remark`) VALUES
('CEP-2/PK-C_2021-07-22_14:45:11', 'CEP-2/PK-C', 'CEP-59+100', 'Bridge', '', 'http://localhost/ppvs123//uploads/images/1_-_Copy_-_Copy_-_Copy_-_Copy5.PNG', '2021-07-22', ''),
('CEP-2/PK-C_2021-07-26_10:08:25', 'CEP-2/PK-C', 'CEP-59+100', 'Bridge', '', 'http://localhost/ppvs123//uploads/images/30cbb88a-03ed-4f50-ab7c-f1894556dd9e1.jpg', '2021-07-26', ''),
('DEHIATHTHAKANDIYA_2021-07-23_23:05:06', 'DEHIATHTHAKANDIYA', 'CEP-59+195', 'Bridge', '', 'http://localhost/ppvs123//uploads/images/1_-_Copy_-_Copy_-_Copy10.PNG', '2021-07-21', ''),
('DEHIATHTHAKANDIYA_2021-07-23_23:40:23', 'DEHIATHTHAKANDIYA', 'CEP-59+300', 'Bridge', '', 'http://localhost/ppvs123//uploads/images/1_-_Copy_-_Copy_-_Copy_(2)_-_Copy7.PNG', '2021-07-23', ''),
('DEHIATHTHAKANDIYA_2021-07-24_00:07:05', 'DEHIATHTHAKANDIYA', 'CEP-59+300', 'Bridge', '', 'http://localhost/ppvs123//uploads/images/1_-_Copy_-_Copy_-_Copy_(2)6.PNG', '2021-07-23', ''),
('DEHIATHTHAKANDIYA_2021-07-26_10:09:22', 'DEHIATHTHAKANDIYA', 'CEP-59+100', 'Bridge', '', 'http://localhost/ppvs123//uploads/images/7e59dd0f-a361-4ea6-9b5c-998407e58808_(1)2.jpg', '2021-07-26', ''),
('DEHIATHTHAKANDIYA_2021-07-27_15:16:22', 'DEHIATHTHAKANDIYA', 'Bakmeedeniya_Road', 'Retaining_Wall', '', 'http://localhost/ppvs123//uploads/images/f8300de6-bd45-45ad-a33d-5a0b3f8d2eaa1.jpg', '2021-07-07', ''),
('DUMMY11_2021-07-22_14:57:25', 'DUMMY11', '00+050_LHS_Haddaththawa_Road', 'Bridge', '', 'http://localhost/ppvs123//uploads/images/1_-_Copy_-_Copy_-_Copy_(2)4.PNG', '2021-07-28', ''),
('DUMMY1_2021-07-22_14:50:06', 'DUMMY1', '00+050_LHS_Haddaththawa_Road', 'Bridge', '', 'http://localhost/ppvs123//uploads/images/1_-_Copy_-_Copy_-_Copy_(2)_-_Copy3.PNG', '2021-07-27', ''),
('DUMMY22_2021-07-22_14:57:36', 'DUMMY22', '00+600_LHS_Ranaviru_Road', 'Bridge', '', 'http://localhost/ppvs123//uploads/images/1_-_Copy_-_Copy_-_Copy_-_Copy6.PNG', '2021-07-21', ''),
('DUMMY2_2021-07-22_14:50:22', 'DUMMY2', '00+600_LHS_Ranaviru_Road', 'Bridge', '', 'http://localhost/ppvs123//uploads/images/1_-_Copy_-_Copy.PNG', '2021-07-14', ''),
('DUMMY33_2021-07-22_14:57:48', 'DUMMY33', '01+300_RHS_Arawaththa_Road', 'Bridge', '', 'http://localhost/ppvs123//uploads/images/1_-_Copy_-_Copy_-_Copy9.PNG', '2021-07-20', ''),
('DUMMY3_2021-07-22_14:51:01', 'DUMMY3', '00+600_LHS_Ranaviru_Road', 'Bridge', '', 'http://localhost/ppvs123//uploads/images/1_-_Copy_-_Copy_-_Copy_(2)_-_Copy4.PNG', '2021-08-04', ''),
('DUMMY44_2021-07-22_14:58:01', 'DUMMY44', '00+600_LHS_Ranaviru_Road', 'Bridge', '', 'http://localhost/ppvs123//uploads/images/1_-_Copy_-_Copy_-_Copy_(2)_-_Copy5.PNG', '2021-07-30', ''),
('DUMMY4_2021-07-22_14:50:38', 'DUMMY4', '01+300_RHS_Arawaththa_Road', 'Bridge', '', 'http://localhost/ppvs123//uploads/images/1_-_Copy_-_Copy_(2)1.PNG', '2021-07-28', ''),
('DUMMY4_2021-07-22_14:51:16', 'DUMMY4', '00+600_LHS_Ranaviru_Road', 'Bridge', '', 'http://localhost/ppvs123//uploads/images/1_-_Copy_-_Copy_(2)2.PNG', '2021-07-13', ''),
('DUMMY55_2021-07-22_14:58:13', 'DUMMY55', '01+300_RHS_Arawaththa_Road', 'Bridge', '', 'http://localhost/ppvs123//uploads/images/1_-_Copy_-_Copy_(2)6.PNG', '2021-07-28', ''),
('DUMMY55_2021-07-22_14:58:29', 'DUMMY55', '00+600_LHS_Ranaviru_Road', 'Bridge', '', 'http://localhost/ppvs123//uploads/images/1_-_Copy_-_Copy_-_Copy_-_Copy7.PNG', '2021-08-04', ''),
('DUMMY5_2021-07-22_14:51:27', 'DUMMY5', '00+600_LHS_Ranaviru_Road', 'Bridge', '', 'http://localhost/ppvs123//uploads/images/1_-_Copy_-_Copy_(2)3.PNG', '2021-07-05', ''),
('DUMMY66_2021-07-22_14:58:42', 'DUMMY66', '04+100_LHS_Gageyaya_Road', 'Bridge', '', 'http://localhost/ppvs123//uploads/images/1_-_Copy_-_Copy_-_Copy_(2)_-_Copy6.PNG', '2021-08-04', ''),
('DUMMY6_2021-07-22_14:51:41', 'DUMMY6', '00+600_LHS_Ranaviru_Road', 'Bridge', '', 'http://localhost/ppvs123//uploads/images/1_-_Copy_-_Copy1.PNG', '2021-07-12', ''),
('DUMMY7_2021-07-22_14:51:54', 'DUMMY7', '00+600_LHS_Ranaviru_Road', 'Bridge', '', 'http://localhost/ppvs123//uploads/images/1_-_Copy_-_Copy_(2)4.PNG', '2021-07-19', ''),
('DUMMY8_2021-07-22_14:52:11', 'DUMMY8', '00+600_LHS_Ranaviru_Road', 'Bridge', '', 'http://localhost/ppvs123//uploads/images/Capture.PNG', '2021-07-26', ''),
('DUMMY9_2021-07-22_14:52:25', 'DUMMY9', '01+300_RHS_Arawaththa_Road', 'Bridge', '', 'http://localhost/ppvs123//uploads/images/1_-_Copy_-_Copy_(2)5.PNG', '2021-07-28', ''),
('DUMMY_2021-07-22_12:44:35', 'DUMMY', 'dummy_location', 'Bridge', 'None', 'http://localhost/ppvs123//uploads/images/1_-_Copy_-_Copy_-_Copy_-_Copy4.PNG', '2021-06-09', 'new'),
('DUMMY_2021-07-22_12:45:07', 'DUMMY', 'dummy_location', 'Bridge', 'LHS', 'http://localhost/ppvs123//uploads/images/1_-_Copy_-_Copy_-_Copy4.PNG', '2021-07-08', 'new'),
('DUMMY_2021-07-22_13:03:05', 'DUMMY', 'dummy_location', 'Bridge', 'RHS', 'http://localhost/ppvs123//uploads/images/1_-_Copy_-_Copy_-_Copy5.PNG', '2021-07-23', 'first'),
('DUMMY_2021-07-22_14:38:38', 'DUMMY', 'dummy_location', 'Bridge', 'LHS', 'http://localhost/ppvs123//uploads/images/1_-_Copy_-_Copy_-_Copy_(2)_-_Copy1.PNG', '2021-08-05', 'new'),
('DUMMY_2021-07-22_14:38:56', 'DUMMY', 'dummy_location', 'Bridge', 'LHS', 'http://localhost/ppvs123//uploads/images/1_-_Copy_-_Copy_-_Copy6.PNG', '2021-06-29', 'new'),
('DUMMY_2021-07-22_14:39:12', 'DUMMY', 'dummy_location', 'Bridge', 'None', 'http://localhost/ppvs123//uploads/images/1_-_Copy_-_Copy_-_Copy_(2)_-_Copy2.PNG', '2021-07-08', 'first'),
('DUMMY_2021-07-22_14:39:33', 'DUMMY', 'dummy_location', 'Bridge', 'None', 'http://localhost/ppvs123//uploads/images/12.PNG', '2021-07-19', 'new'),
('DUMMY_2021-07-22_14:39:58', 'DUMMY', 'dummy_location', 'Bridge', '', 'http://localhost/ppvs123//uploads/images/6.PNG', '2021-07-14', ''),
('DUMMY_2021-08-05_01:53:23', 'DUMMY', 'dummy_location1', 'Bridge', '', 'http://localhost/ppvs123//uploads/images/f8300de6-bd45-45ad-a33d-5a0b3f8d2eaa2.jpg', '2021-08-05', ''),
('DUMMY_2021-08-09_01:51:51', 'DUMMY', 'dummy_location1', 'Bridge', 'LHS', 'http://localhost/ppvs123//uploads/images/1_-_Copy_-_Copy_-_Copy_(2)_-_Copy8.PNG', '2021-08-09', 'first'),
('DUMMY_2021-08-09_01:57:39', 'DUMMY', 'dummy_location1', 'Bridge', 'None', 'http://localhost/ppvs123//uploads/images/1_-_Copy_-_Copy_-_Copy_(2)7.PNG', '2021-08-25', 'first'),
('DUMMY_2021-08-12_16:10:50', 'DUMMY', 'dummy_location1', 'Bridge', 'RHS', 'http://localhost/ppvs123//uploads/images/30cbb88a-03ed-4f50-ab7c-f1894556dd9e7.jpg', '2021-08-12', 'first'),
('IROAD_JAFFNA_2021-07-22_14:45:42', 'IROAD_JAFFNA', 'CEP-59+450', 'Bridge', '', 'http://localhost/ppvs123//uploads/images/1_-_Copy_-_Copy_-_Copy_(2).PNG', '2021-07-28', ''),
('KEKIRAWA_THALAWA_2021-07-24_01:00:04', 'KEKIRAWA_THALAWA', '10+517_LHS_Kekirawa', 'Bridge', 'LHS', 'http://localhost/ppvs123//uploads/images/7e59dd0f-a361-4ea6-9b5c-998407e58808.jpg', '2021-07-24', 'new'),
('KEKIRAWA_THALAWA_2021-07-24_01:00:22', 'KEKIRAWA_THALAWA', '10+517_LHS_Kekirawa', 'Culvert', 'LHS', 'http://localhost/ppvs123//uploads/images/30cbb88a-03ed-4f50-ab7c-f1894556dd9e.jpg', '2021-07-24', 'first'),
('KEKIRAWA_THALAWA_2021-07-24_01:00:41', 'KEKIRAWA_THALAWA', '10+517_LHS_Kekirawa', 'Culvert', 'LHS', 'http://localhost/ppvs123//uploads/images/f8300de6-bd45-45ad-a33d-5a0b3f8d2eaa.jpg', '2021-07-24', 'new'),
('KEKIRAWA_THALAWA_2021-08-06_09:49:57', 'KEKIRAWA_THALAWA', '10+517_LHS_Kekirawa', 'Culvert', 'None', 'http://localhost/ppvs123//uploads/images/1_-_Copy_-_Copy_-_Copy_-_Copy8.PNG', '2021-08-06', 'new'),
('KIRIMETIYA_2021-07-22_14:46:03', 'KIRIMETIYA', 'CEP-59+300', 'Bridge', '', 'http://localhost/ppvs123//uploads/images/1_-_Copy_-_Copy_-_Copy_(2)1.PNG', '2021-07-27', ''),
('KULIYAPITIYA_2021-07-22_14:46:24', 'KULIYAPITIYA', 'CEP-59+300', 'Bridge', '', 'http://localhost/ppvs123//uploads/images/6_-_Copy.PNG', '2021-07-22', ''),
('MAHIYANGANAYA_2021-07-22_14:46:44', 'MAHIYANGANAYA', 'CEP-59+100', 'Bridge', '', 'http://localhost/ppvs123//uploads/images/1_-_Copy_-_Copy_-_Copy_(2)2.PNG', '2021-07-29', ''),
('NIKAWERATIYA_2021-08-12_09:10:39', 'NIKAWERATIYA', 'nikaweratiyal1', 'Bridge', 'LHS', 'http://localhost/ppvs123//uploads/images/7e59dd0f-a361-4ea6-9b5c-998407e58808_(1)3.jpg', '2021-08-12', 'first'),
('NIKAWERATIYA_2021-08-12_09:13:32', 'NIKAWERATIYA', 'nikaweratiyal1', 'Bridge', 'LHS', 'http://localhost/ppvs123//uploads/images/30cbb88a-03ed-4f50-ab7c-f1894556dd9e5.jpg', '2021-08-12', 'second'),
('NIKAWERATIYA_2021-08-12_09:14:59', 'NIKAWERATIYA', 'nikaweratiyal1', 'Bridge', 'RHS', 'http://localhost/ppvs123//uploads/images/f8300de6-bd45-45ad-a33d-5a0b3f8d2eaa3.jpg', '2021-08-12', 'third'),
('NIKAWERATIYA_2021-08-12_09:22:03', 'NIKAWERATIYA', 'nikaweratiyal2', 'Bridge', 'RHS', 'http://localhost/ppvs123//uploads/images/30cbb88a-03ed-4f50-ab7c-f1894556dd9e6.jpg', '2021-08-12', 'first'),
('NIKAWERATIYA_2021-08-12_16:18:24', 'NIKAWERATIYA', 'nikaweratiyal2', 'Bridge', 'LHS', 'http://localhost/ppvs123//uploads/images/7e59dd0f-a361-4ea6-9b5c-998407e588082.jpg', '2021-08-12', 'first'),
('NIKAWERATIYA_2021-08-13_12:08:29', 'NIKAWERATIYA', 'nikaweratiyal1', 'Bridge', 'LHS', 'http://localhost/ppvs123//uploads/images/f8300de6-bd45-45ad-a33d-5a0b3f8d2eaa4.jpg', '2021-08-13', 'second'),
('NUWARAELIYA_2021-07-22_14:47:06', 'NUWARAELIYA', 'CEP-59+300', 'Bridge', '', 'http://localhost/ppvs123//uploads/images/1_-_Copy_-_Copy_(2).PNG', '2021-07-19', ''),
('NUWARAELIYA_2021-07-26_00:14:04', 'NUWARAELIYA', 'Bakmeedeniya_Road', 'Bridge', '', 'http://localhost/ppvs123//uploads/images/7e59dd0f-a361-4ea6-9b5c-998407e58808_(1)1.jpg', '2021-07-12', ''),
('NUWARAELIYA_2021-07-26_00:14:22', 'NUWARAELIYA', 'Bakmeedeniya_Road', 'Bridge', '', 'http://localhost/ppvs123//uploads/images/7e59dd0f-a361-4ea6-9b5c-998407e588081.jpg', '2021-07-28', ''),
('TEST_PROJECT_2021-07-22_14:47:47', 'TEST_PROJECT', 'CEP-59+100', 'Bridge', '', 'http://localhost/ppvs123//uploads/images/1_-_Copy_-_Copy_-_Copy_(2)3.PNG', '2021-07-26', ''),
('WERAGANTOTA_2021-07-22_14:48:01', 'KEKIRAWA_THALAWA', '10+517_LHS_Kekirawa', 'Culvert', 'RHS', 'http://localhost/ppvs123//uploads/images/1_-_Copy_-_Copy_-_Copy8.PNG', '2021-07-26', 'new'),
('WERAGANTOTA_2021-07-27_18:47:40', 'WERAGANTOTA', 'Weragantota_3+930_RHS', 'Bridge', 'LHS', 'http://localhost/ppvs123//uploads/images/30cbb88a-03ed-4f50-ab7c-f1894556dd9e2.jpg', '2021-07-27', 'new'),
('WERAGANTOTA_2021-07-27_18:48:16', 'WERAGANTOTA', 'Weragantota_3+930_RHS', 'Bridge', 'None', 'http://localhost/ppvs123//uploads/images/30cbb88a-03ed-4f50-ab7c-f1894556dd9e3.jpg', '2021-07-20', 'first'),
('WERAGANTOTA_2021-07-27_18:48:59', 'WERAGANTOTA', 'Weraganthota_0+855_LHS', 'Bridge', '', 'http://localhost/ppvs123//uploads/images/30cbb88a-03ed-4f50-ab7c-f1894556dd9e4.jpg', '2021-07-06', '');

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
('DUMMY', 'DUMMY', '', 'dummy'),
('DUMMY1', 'DUMMY1', '', 'dummy1'),
('DUMMY11', 'DUMMY11', '', 'dummy11'),
('DUMMY2', 'DUMMY2', '', 'dummy2'),
('DUMMY22', 'DUMMY22', '', 'dummy22'),
('DUMMY3', 'DUMMY3', '', 'dummy3'),
('DUMMY33', 'DUMMY33', '', 'dummy33'),
('DUMMY4', 'DUMMY4', '', 'dummy4'),
('DUMMY44', 'DUMMY44', '', 'dummy44'),
('DUMMY5', 'DUMMY5', '', 'dummy5'),
('DUMMY55', 'DUMMY55', '', 'dummy55'),
('DUMMY6', 'DUMMY6', '', 'dummy6'),
('DUMMY66', 'DUMMY66', '', 'dummy66'),
('DUMMY7', 'DUMMY7', '', 'dummy7'),
('DUMMY77', 'DUMMY77', '', 'dummy77'),
('DUMMY8', 'DUMMY8', '', 'dummy8'),
('DUMMY9', 'DUMMY9', '', 'dummy9'),
('HEAD OFFICE', 'HO', '', ''),
('JAFFNA - I ROAD -04', 'IROAD_JAFFNA', '', 'Road'),
('KEKIRAWA - THALAWA', 'KEKIRAWA_THALAWA', '', 'Road'),
('KIRIMETIYA ROAD (0+000 - 4+000) KM', 'KIRIMETIYA', '', 'Road'),
('KULIYAPITIYA - PADIWELA', 'KULIYAPITIYA', '', ''),
('MAHIYANGANAYA P19 & P23', 'MAHIYANGANAYA', '', 'Road'),
('NIKAWERATIYA', 'NIKAWERATIYA', '', 'road'),
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
('shehan.k', 'Shehan Kaushalya', '8cb2237d0679ca88db6464eac60da96345513964', '', 'Headoffice User', '0714519639', 'Active    ', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'YES', 'YES', 'checked', 'checked', 'checked', 'checked'),
('test1', 'test', '8cb2237d0679ca88db6464eac60da96345513964', '', 'Other', '1234567890', 'Active    ', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'YES', 'YES', 'checked', 'checked', 'checked', 'checked'),
('test2', 'test2', '8cb2237d0679ca88db6464eac60da96345513964', '', 'Head Office User', '1234567890', 'ACTIVE', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'YES', 'YES', 'checked', 'checked', 'checked', 'checked');

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
('CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)', 'shehan.k', 'unchecked'),
('TEST_PROJECT', 'TEST PROJECT', 'shehan.k', 'unchecked'),
('KIRIMETIYA', 'KIRIMETIYA ROAD (0+000 - 4+000) KM', 'shehan.k', 'unchecked'),
('NUWARAELIYA', 'NUWARAELIYA ROAD(98+460 - 104+460) KM', 'shehan.k', 'unchecked'),
('IROAD_JAFFNA', 'JAFFNA - I ROAD -04', 'shehan.k', 'unchecked'),
('WERAGANTOTA', 'WERAGANTOTA RANDENIGALA (0+000 - 2+500 KM)', 'shehan.k', 'unchecked'),
('KULIYAPITIYA', 'KULIYAPITIYA - PADIWELA', 'shehan.k', 'unchecked'),
('MAHIYANGANAYA', 'MAHIYANGANAYA P19 & P23', 'shehan.k', 'unchecked'),
('DEHIATHTHAKANDIYA', 'DEHIATHTHAKANDIYA P14 & P15', 'shehan.k', 'unchecked'),
('CEP-2/PK-C', 'CENTRALEXPRSSWAY(57+000-62+330KM&63+950-69+500KM)', 'test1', 'unchecked'),
('DEHIATHTHAKANDIYA', 'DEHIATHTHAKANDIYA P14 & P15', 'test1', 'unchecked'),
('IROAD_JAFFNA', 'JAFFNA - I ROAD -04', 'test1', 'unchecked'),
('KIRIMETIYA', 'KIRIMETIYA ROAD (0+000 - 4+000) KM', 'test1', 'unchecked'),
('KULIYAPITIYA', 'KULIYAPITIYA - PADIWELA', 'test1', 'unchecked'),
('MAHIYANGANAYA', 'MAHIYANGANAYA P19 & P23', 'test1', 'unchecked'),
('NUWARAELIYA', 'NUWARAELIYA ROAD(98+460 - 104+460) KM', 'test1', 'unchecked'),
('TEST_PROJECT', 'TEST PROJECT', 'test1', 'unchecked'),
('WERAGANTOTA', 'WERAGANTOTA RANDENIGALA (0+000 - 2+500 KM)', 'test1', 'checked'),
('HO', 'HEAD OFFICE', 'shehan.k', 'unchecked'),
('HO', 'HEAD OFFICE', 'test1', 'unchecked'),
('DUMMY', 'DUMMY', 'shehan.k', 'unchecked'),
('DUMMY', 'DUMMY', 'test1', 'checked'),
('DUMMY1', 'DUMMY1', 'shehan.k', 'unchecked'),
('DUMMY2', 'DUMMY2', 'shehan.k', 'unchecked'),
('DUMMY3', 'DUMMY3', 'shehan.k', 'unchecked'),
('DUMMY4', 'DUMMY4', 'shehan.k', 'unchecked'),
('DUMMY5', 'DUMMY5', 'shehan.k', 'unchecked'),
('DUMMY6', 'DUMMY6', 'shehan.k', 'unchecked'),
('DUMMY7', 'DUMMY7', 'shehan.k', 'unchecked'),
('DUMMY8', 'DUMMY8', 'shehan.k', 'unchecked'),
('DUMMY9', 'DUMMY9', 'shehan.k', 'unchecked'),
('DUMMY11', 'DUMMY11', 'shehan.k', 'unchecked'),
('DUMMY22', 'DUMMY22', 'shehan.k', 'unchecked'),
('DUMMY33', 'DUMMY33', 'shehan.k', 'unchecked'),
('DUMMY44', 'DUMMY44', 'shehan.k', 'unchecked'),
('DUMMY55', 'DUMMY55', 'shehan.k', 'unchecked'),
('DUMMY66', 'DUMMY66', 'shehan.k', 'unchecked'),
('DUMMY77', 'DUMMY77', 'shehan.k', 'unchecked'),
('KEKIRAWA_THALAWA', 'KEKIRAWA - THALAWA', 'shehan.k', 'unchecked'),
('KEKIRAWA_THALAWA', 'KEKIRAWA - THALAWA', 'test1', 'checked'),
('KEKIRAWA_THALAWA', 'KEKIRAWA - THALAWA', 'test2', 'checked'),
('WERAGANTOTA', 'WERAGANTOTA RANDENIGALA (0+000 - 2+500 KM)', 'test2', 'checked'),
('NIKAWERATIYA', 'NIKAWERATIYA', 'shehan.k', 'checked');

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
