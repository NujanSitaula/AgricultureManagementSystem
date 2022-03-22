-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 22, 2022 at 12:20 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ams`
--

-- --------------------------------------------------------

--
-- Table structure for table `ams_crops`
--

CREATE TABLE `ams_crops` (
  `id` int(11) NOT NULL,
  `cropsID` int(11) NOT NULL,
  `cropsName` varchar(50) DEFAULT 'Untitled Crops',
  `cropsPhoto` varchar(200) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ams_users`
--

CREATE TABLE `ams_users` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL DEFAULT '',
  `Surname` varchar(15) NOT NULL DEFAULT '',
  `Email` varchar(50) NOT NULL DEFAULT '',
  `Phone` varchar(15) NOT NULL DEFAULT '',
  `dprofile` varchar(250) NOT NULL DEFAULT '',
  `OTP` varchar(10) NOT NULL DEFAULT '',
  `authToken` varchar(100) DEFAULT '',
  `Environment` varchar(50) NOT NULL DEFAULT 'user',
  `dateBirth` varchar(50) NOT NULL DEFAULT '',
  `Gender` varchar(50) NOT NULL DEFAULT '',
  `localAddress` varchar(50) NOT NULL DEFAULT '',
  `Country` varchar(20) NOT NULL DEFAULT 'Nepal',
  `provinceAddress` varchar(20) NOT NULL DEFAULT '',
  `districtAddress` varchar(20) NOT NULL DEFAULT '',
  `wadAddress` varchar(20) DEFAULT '',
  `familyMember` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ams_users`
--

INSERT INTO `ams_users` (`id`, `Name`, `Surname`, `Email`, `Phone`, `dprofile`, `OTP`, `authToken`, `Environment`, `dateBirth`, `Gender`, `localAddress`, `Country`, `provinceAddress`, `districtAddress`, `wadAddress`, `familyMember`) VALUES
(1, 'Nujan', 'Sitaula', 'nujan@shotcoder.com.np', '9840938854', '1647590976_agrim_nujanDP.jpg', '', 'd0c2decd5c5af47be7ac6cd9d3d91b32', 'vendor', '07/02/2001', 'Male', 'budanilkantha', 'Nepal', 'province3', 'kathmandu', '10', 5),
(2, 'Sabin', 'Adhikari', 'sabinadh023@gmail.com', '9860809011', '1647503791_agrim_Adarsha Sir.png', '', '9ac612c0feb0145f6ca8b09cb42c84f5', 'vendor', '', '', '', '', '', '', '', NULL),
(3, 'Manish', 'Subedi', 'manishsubedi08@gmail.com', '', '', '', '993856b7f1f543a7a790a2296ede6c08', 'user', '', '', '', '', '', '', '', NULL),
(4, 'Prashant', 'KC', 'kesepraszant@gmail.com', '9867281500', '', '', '224db79a98235e9283d8aa1201f19a84', 'user', '', '', '', '', '', '', '', NULL),
(5, '', '', 'adarshghimire101@gmail.com', '', '', '', '', 'user', '', '', 'budanilkantha', '', 'province3', 'kathmandu', '10', 0),
(6, '', '', 'mart.duke20@gmail.com', '', '', '', '', 'user', '', '', 'budanilkantha', '', 'province3', 'kathmandu', '10', 0),
(10, 'Abhinab', 'Prasai', 'abhinabprasai@gmail.com', '', '1647793485_agrim_podcastshotcastlol(1).png', '', '0d4b9916ae4b2080840b9ba840e0229a', 'vendor', '03/14/2001', 'Male', 'budanilkantha', '', 'province3', 'kathmandu', '10', 5),
(11, '', '', '', '9817089174', '', '', 'eb4fca014836cce5b4db664c047f2885', 'user', '', '', '', '', '', '', '', NULL),
(12, 'Bishwash', 'Magar', '', '9861362540', '1647763044_agrim_Pink Gradient Launching Soon Instagram Post.png', '', 'e6e1f96cb42e014f0cf50d7db17cadcd', 'user', '02/28/2001', 'Male', '', '', '', '', '', NULL),
(13, 'Ashim', 'Baral', '', '9861853481', '1647842250_agrim_Gyalpo Losar.png', '', '75eb60823989b983d1b0cbcfb523d430', 'vendor', '04/29/2001', 'Male', 'budanilkantha', '', 'province3', 'kathmandu', '10', 4),
(14, 'Suyogya', 'Gutam', '', '9840856344', '1647843506_agrim_nujanDP.jpg', '', '4cb4e78dc8b36a82702b9961a96f49a0', 'vendor', '03/03/2001', 'Male', 'budanilkantha', '', 'province3', 'kathmandu', '03', 10),
(15, '', '', '', '9807964062', '', '', '818cdb047ba61134f220d23fcf5d0149', 'user', '', '', '', 'Nepal', '', '', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ams_crops`
--
ALTER TABLE `ams_crops`
  ADD PRIMARY KEY (`cropsID`);

--
-- Indexes for table `ams_users`
--
ALTER TABLE `ams_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ams_crops`
--
ALTER TABLE `ams_crops`
  MODIFY `cropsID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ams_users`
--
ALTER TABLE `ams_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
