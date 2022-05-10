-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 10, 2022 at 12:38 PM
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
-- Table structure for table `ams_allinvoice`
--

CREATE TABLE `ams_allinvoice` (
  `paymentOption` varchar(11) NOT NULL,
  `invoiceID` int(11) NOT NULL,
  `cropsID` int(11) NOT NULL,
  `dateCreated` date NOT NULL,
  `datePaid` date NOT NULL,
  `id` int(11) NOT NULL,
  `invoiceNote` text NOT NULL,
  `isPaid` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ams_allinvoice`
--

INSERT INTO `ams_allinvoice` (`paymentOption`, `invoiceID`, `cropsID`, `dateCreated`, `datePaid`, `id`, `invoiceNote`, `isPaid`) VALUES
('Khalti', 1052, 5, '2022-04-10', '2022-04-10', 1, 'Nice Crops', 1),
('Esewa', 1053, 15, '2022-04-10', '2022-04-10', 1, 'Okay Nice ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ams_cart`
--

CREATE TABLE `ams_cart` (
  `cartID` int(11) NOT NULL,
  `cropID` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ams_cart`
--

INSERT INTO `ams_cart` (`cartID`, `cropID`, `id`) VALUES
(72, 15, 29),
(73, 11, 29);

-- --------------------------------------------------------

--
-- Table structure for table `ams_crops`
--

CREATE TABLE `ams_crops` (
  `id` int(11) NOT NULL,
  `cropsID` int(11) NOT NULL,
  `cropsName` varchar(50) DEFAULT 'Untitled Crops',
  `cropsPhoto` varchar(200) NOT NULL DEFAULT '',
  `quantity` varchar(50) NOT NULL DEFAULT '',
  `cropsType` varchar(100) NOT NULL,
  `farmersRate` varchar(100) NOT NULL,
  `cropsDescription` text NOT NULL,
  `cropsAge` varchar(10) NOT NULL DEFAULT '',
  `isApproved` int(11) NOT NULL DEFAULT 0,
  `totalAmount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ams_crops`
--

INSERT INTO `ams_crops` (`id`, `cropsID`, `cropsName`, `cropsPhoto`, `quantity`, `cropsType`, `farmersRate`, `cropsDescription`, `cropsAge`, `isApproved`, `totalAmount`) VALUES
(1, 5, 'SHotCOder ID 4', '1648700717_agrim_SHotCoder Cover.png', '20', 'Vegetables', '150', 'I want new edited Wheat', '', 1, '3,000'),
(17, 10, 'Rasman Crop Edited', '1648830706_agrim_teacher swixhost.png', '10', 'Fruits', '150', 'THis is crop', '', 1, '1,500'),
(29, 11, 'Nice Crop OKay', '1648900841_agrim_SwixHost WordPress Image.png', '4', 'Grains', '34', 'nice', '', 0, '136'),
(1, 15, 'Kobi NUjan', '1649504374_agrim_screenshot(1).png', '20', '', '100', 'Very Tasty and beautiful kobi', '', 0, '2,000'),
(22, 16, 'Tophsingh Weed', '1649571522_agrim_screenshot(1).png', '2', 'Vegetables', '250', 'This is the natural babal jhyap hune wala weed from mustang!', '', 0, '500'),
(29, 17, 'Bishal Crop New Edited', '1649744661_agrim_screenshot.png', '10', '', '150', 'This is bishal crops.', '', 1, '1,500');

-- --------------------------------------------------------

--
-- Table structure for table `ams_cropstype`
--

CREATE TABLE `ams_cropstype` (
  `categoryID` int(11) NOT NULL,
  `cropsType` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ams_cropstype`
--

INSERT INTO `ams_cropstype` (`categoryID`, `cropsType`) VALUES
(1, 'Grains'),
(2, 'Vegetables'),
(3, 'Fruits'),
(4, 'Oil');

-- --------------------------------------------------------

--
-- Table structure for table `ams_transaction`
--

CREATE TABLE `ams_transaction` (
  `tranxID` varchar(100) NOT NULL,
  `invoiceID` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `id` int(11) NOT NULL,
  `productID` varchar(100) NOT NULL,
  `datepaid` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ams_transaction`
--

INSERT INTO `ams_transaction` (`tranxID`, `invoiceID`, `amount`, `status`, `mobile`, `id`, `productID`, `datepaid`) VALUES
('j5LMgECkdX4KT8hFiQEJcg', '1053', '1000', 'success', '98XXXXX854', 0, '0', '2022-05-04 13:46:47'),
('sYTE2eNhBEPFH3ppCbAHm4', '1053', '10', 'success', '98XXXXX854', 0, '0', '2022-05-04 13:46:47'),
('YQZmuS9MjtHUhDZVb6BPh7', '1053', '10', 'success', '98XXXXX750', 0, '0', '2022-05-04 13:46:47'),
('aPDzYxHynJQNVWLrftAThi', '1053', '10', 'success', '98XXXXX944', 0, '0', '2022-05-04 13:46:47'),
('mnjJhZzbqWiGgAdzTmsurW', '1053', '151.42', 'success', '98XXXXX854', 0, '0', '2022-05-04 13:46:47'),
('phSfS2tELRdyesnvEj5wpj', '1053', '151.42', 'success', '98XXXXX854', 1, 'Agrim CheckOut', '2022-05-04 13:49:57'),
('ZKUF7bLj22izi9TmDeq9se', '1053', '151.42', 'success', '98XXXXX854', 1, '15,11,', '2022-05-04 13:52:29');

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
  `Environment` varchar(50) NOT NULL DEFAULT 'vendor',
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
(1, 'Nujan', 'Sitaula', 'sitaula.nujan@gmail.com', '9840938854', '1647590976_agrim_nujanDP.jpg', '54058', 'ac1d45af8a069a2e398e73413dd9d0fe', 'vendor', '03/30/2022', 'Male', 'dhankaul rural municipality', 'Nepal', 'province2', 'sarlahi', '10', 19),
(2, 'Sabin', 'Adhikari', 'sabinadh023@gmail.com', '9860809011', '1647503791_agrim_Adarsha Sir.png', '68243', '9ac612c0feb0145f6ca8b09cb42c84f5', 'vendor', '', '', '', '', '', '', '', NULL),
(3, 'Manish', 'Subedi', 'manishsubedi08@gmail.com', '', '', '', '993856b7f1f543a7a790a2296ede6c08', 'user', '', '', '', '', '', '', '', NULL),
(4, 'Prashant', 'KC', 'kesepraszant@gmail.com', '9867281500', '', '', '2e8d5ac8b9756f4be586d10d9e12f55f', 'user', '', '', 'ratnanagar municipality', 'Nepal', 'province3', 'chitwan', '04', 6),
(5, '', '', 'adarshghimire101@gmail.com', '', '', '', '', 'user', '', '', 'budanilkantha', '', 'province3', 'kathmandu', '10', 0),
(6, 'Nujan', 'Sitaula', 'mart.duke20@gmail.com', '', '1648626597_agrim_screenshot.png', '', 'edcca9f0c5a3df1e6295d967ee246e51', 'user', '03/03/2022', 'Male', 'budanilkantha', '', 'province3', 'kathmandu', '10', 0),
(10, 'Abhinab', 'Prasai', 'abhinabprasai@gmail.com', '', '1647793485_agrim_podcastshotcastlol(1).png', '', '0d4b9916ae4b2080840b9ba840e0229a', 'vendor', '03/14/2001', 'Male', 'budanilkantha', '', 'province3', 'kathmandu', '10', 5),
(11, '', '', '', '9817089174', '', '', 'eb4fca014836cce5b4db664c047f2885', 'user', '', '', '', '', '', '', '', NULL),
(12, 'Bishwash', 'Magar', '', '9861362540', '1647763044_agrim_Pink Gradient Launching Soon Instagram Post.png', '', 'e6e1f96cb42e014f0cf50d7db17cadcd', 'user', '02/28/2001', 'Male', '', '', '', '', '', NULL),
(13, 'Ashim', 'Baral', '', '9861853481', '1647842250_agrim_Gyalpo Losar.png', '', '75eb60823989b983d1b0cbcfb523d430', 'vendor', '04/29/2001', 'Male', 'budanilkantha', '', 'province3', 'kathmandu', '10', 4),
(14, 'Suyogya', 'Gutam', '', '9840856344', '1647843506_agrim_nujanDP.jpg', '', '4cb4e78dc8b36a82702b9961a96f49a0', 'vendor', '03/03/2001', 'Male', 'budanilkantha', '', 'province3', 'kathmandu', '03', 10),
(15, '', '', '', '9807964062', '', '', '818cdb047ba61134f220d23fcf5d0149', 'user', '', '', '', 'Nepal', '', '', '', NULL),
(16, 'Bishal', 'Khadka', '', '9808349417', '1648202493_agrim_anyonecaes.jpg', '', '83a4a8b270e2a32c5d1465cd3ce2be1a', 'vendor', '03/04/1900', 'Male', 'budanilkantha', '', 'province3', 'kathmandu', '10', 10),
(17, 'Rashman', 'Shestha', 'rashmanstha@gmail.com', '', '1648830582_agrim_SwixHost WordPress.png', '', '86c8bbc9f2c3d3696a5c44ad433772bb', 'vendor', '04/06/2001', 'Male', 'chhathar jorpati rural municipality', 'Nepal', 'province1', 'dhankuta', '10', 3),
(18, '', '', 'yogeshrulz1@gmail.com', '', '', '', '5fbb6097ec2759506b45624038b3ff76', 'user', '', '', '', 'Nepal', '', '', '', NULL),
(19, '', '', '', '986080901112', '', '67347', '', 'user', '', '', '', 'Nepal', '', '', '', NULL),
(20, 'Paruhang', 'Rai', 'paruhang37@gmail.com', '', '1649328463_agrim_72711379_413459286233626_8718346417569005568_n.jpg', '', 'e550d141af73bff80995061b2d64413b', 'vendor', '', '', '', '', '', '', '', NULL),
(21, 'Gaurav', 'Thapaliya', 'thapaliyagaurav86@gmail.com', '', '', '', 'ecb072d6744277ba34a68dca1e29b23b', 'vendor', '01/06/2003', 'Male', 'biratnagar metopolitan city', 'Nepal', 'province1', 'morang', '4', 5),
(22, 'TopSIngh', 'Raimajhi', '', '9810064863', '', '', 'd085cb20a86cd6be786a9c9ad22f3ab5', 'vendor', '04/09/1994', 'Other', 'ishnath municipality', 'Nepal', 'province2', 'rautahat', '10', 10),
(23, '', '', '', '9840963885444', '', '38776', '', 'user', '', '', '', 'Nepal', '', '', '', NULL),
(24, 'Suyogya', 'Gautam', 'gsuyogya@gmail.com', '', '1649588374_agrim_suyogya.jpg', '', '21e91f3a5ada7e67c6b77c39111e9a8f', 'vendor', '01/04/2002', 'Male', 'budhanilkantha municipality', 'Nepal', 'province3', 'kathmandu', '03', 5),
(25, 'Hari', 'Slatiya', 'crystallinearc@gmail.com', '', '', '', '59dc53144bfdfed4ca185319ba41c812', 'vendor', '04/21/2022', 'Male', 'rajgadh rural municipality', 'Nepal', 'province2', 'saptari', '10', 13),
(26, 'Bishal', 'Dali', '', '9864239900', '1649744550_agrim_SwixHost WordPress.png', '', '5ff1b489b501110f7fe412b84aae18a9', 'vendor', '02/27/2001', 'Male', 'kathmandu metopolitan city', 'Nepal', 'province3', 'kathmandu', '09', 10),
(27, 'Umanga', 'Shrestha', '', '9827479560', '1649756698_agrim_Untitled design.png', '', 'a1f47b2fdfb94697926293b8506ec863', 'vendor', '04/07/2002', 'Male', 'butwal sub-metropolitan city', 'Nepal', 'province5', 'rupandehi', '10', 4),
(28, 'sabin ', 'adhikari', '', '9840791750', '', '', '3a73536d3515aa60364a0b085c8a4185', 'user', '03/04/1990', 'Male', 'ishwarpur municipality', 'Nepal', 'province2', 'sarlahi', '04', 8),
(29, 'Nujan', 'Sitaula', 'nujan@shotcoder.com.np', '', '1650461164_agrim_SwixHost WordPress.png', '', '7b840de41f36819dcf66427e61395a07', 'user', '07/02/2001', 'Male', 'aathrai triveni rural municipality', 'Nepal', 'province1', 'taplejung', '01', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ams_allinvoice`
--
ALTER TABLE `ams_allinvoice`
  ADD PRIMARY KEY (`invoiceID`);

--
-- Indexes for table `ams_cart`
--
ALTER TABLE `ams_cart`
  ADD PRIMARY KEY (`cartID`);

--
-- Indexes for table `ams_crops`
--
ALTER TABLE `ams_crops`
  ADD PRIMARY KEY (`cropsID`);

--
-- Indexes for table `ams_cropstype`
--
ALTER TABLE `ams_cropstype`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `ams_users`
--
ALTER TABLE `ams_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ams_allinvoice`
--
ALTER TABLE `ams_allinvoice`
  MODIFY `invoiceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1055;

--
-- AUTO_INCREMENT for table `ams_cart`
--
ALTER TABLE `ams_cart`
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `ams_crops`
--
ALTER TABLE `ams_crops`
  MODIFY `cropsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `ams_cropstype`
--
ALTER TABLE `ams_cropstype`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ams_users`
--
ALTER TABLE `ams_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
