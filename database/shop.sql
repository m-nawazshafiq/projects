-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2019 at 03:46 PM
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
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `userName`, `email`, `password`) VALUES
(1, 'Muhamad Talha', 'mmm@gmial.com', 'hhh'),
(4, 'Toseef Afzal', 'toseefafzal11212@gmail.com', '1234'),
(5, 'Muhamad javed', 'm.javid@gmail.com', '123'),
(6, 'waseem', 'waseem@gmail.com', 'waseem@123'),
(7, 'waseem1', 'waseem1@gmail.com', 'waseem1@123'),
(8, 'waseem1', 'waseem1@gmail.com', 'waseem1@123');

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `Id` bigint(20) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Status` smallint(6) NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedDate` date NOT NULL,
  `ModifiedBy` int(11) NOT NULL,
  `ModifiedDate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`Id`, `Name`, `Description`, `Status`, `CreatedBy`, `CreatedDate`, `ModifiedBy`, `ModifiedDate`) VALUES
(5, 'first', 'ghgh', 676, 1, '2019-07-15', 1, 2019);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Code` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `ParentCategoryId` int(11) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `Published` smallint(6) NOT NULL,
  `ShowOnHomePage` smallint(6) NOT NULL,
  `IncludeTopMenu` smallint(6) NOT NULL,
  `PriceRange` varchar(255) NOT NULL,
  `DisplayOrder` int(11) NOT NULL,
  `Searchenginefriendly` varchar(255) NOT NULL,
  `Metatitle` varchar(255) NOT NULL,
  `Metakeywords` varchar(1000) NOT NULL,
  `Metadescription` text NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedDate` datetime NOT NULL,
  `ModifiedBy` int(11) NOT NULL,
  `ModifiedDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`Id`, `Name`, `Code`, `Description`, `ParentCategoryId`, `Picture`, `Published`, `ShowOnHomePage`, `IncludeTopMenu`, `PriceRange`, `DisplayOrder`, `Searchenginefriendly`, `Metatitle`, `Metakeywords`, `Metadescription`, `CreatedBy`, `CreatedDate`, `ModifiedBy`, `ModifiedDate`) VALUES
(3, 'hhh', '', '', 0, '<p>You did not select a file to upload.</p>', 0, 0, 0, '', 0, '', '', '', '', 1, '2019-07-10 00:00:00', 0, '0000-00-00 00:00:00'),
(4, 'hhhfgh', '', '', 0, '<p>You did not select a file to upload.</p>', 0, 0, 0, '', 0, '', '', '', '', 1, '2019-07-10 00:00:00', 0, '0000-00-00 00:00:00'),
(5, 'hhhfgh', '', '', 0, '<p>You did not select a file to upload.</p>', 0, 0, 0, '', 0, '', '', '', '', 1, '2019-07-10 00:00:00', 0, '0000-00-00 00:00:00'),
(7, 'nn', '', '', 0, 'C:/xampp/htdocs/toys/upload/ahaha6.PNG', 0, 0, 0, '', 0, '', '', '', '', 1, '2019-07-12 00:00:00', 0, '0000-00-00 00:00:00'),
(8, 'new o', '', '', 0, 'ahaha7.PNG', 0, 0, 0, '', 0, '', '', '', '', 1, '2019-07-12 00:00:00', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Code` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `ParentCategoryId` int(11) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `Published` smallint(6) NOT NULL,
  `ShowOnHomePage` smallint(6) NOT NULL,
  `IncludeTopMenu` smallint(6) NOT NULL,
  `PriceRange` varchar(255) NOT NULL,
  `DisplayOrder` int(11) NOT NULL,
  `Searchenginefriendly` varchar(255) NOT NULL,
  `Metatitle` varchar(255) NOT NULL,
  `Metakeywords` varchar(1000) NOT NULL,
  `Metadescription` text NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedDate` datetime NOT NULL,
  `ModifiedBy` int(11) NOT NULL,
  `ModifiedDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Id`, `Name`, `Code`, `Description`, `ParentCategoryId`, `Picture`, `Published`, `ShowOnHomePage`, `IncludeTopMenu`, `PriceRange`, `DisplayOrder`, `Searchenginefriendly`, `Metatitle`, `Metakeywords`, `Metadescription`, `CreatedBy`, `CreatedDate`, `ModifiedBy`, `ModifiedDate`) VALUES
(25, 'kjafka', '', '', 0, '<p>You did not select a file to upload.</p>', 0, 0, 0, '', 0, '', '', '', '', 1, '2019-07-09 00:00:00', 0, '0000-00-00 00:00:00'),
(27, 'hjjk', '', '', 0, '<p>You did not select a file to upload.</p>', 0, 0, 0, '', 0, '', '', '', '', 1, '2019-07-09 00:00:00', 0, '0000-00-00 00:00:00'),
(29, 'Talha', 'df', '', 6, '<p>You did not select a file to upload.</p>', 1, 1, 1, '333', 21, 'dkkfja', 'dfaghh', 'dag', 'hadf', 1, '2019-07-09 00:00:00', 0, '0000-00-00 00:00:00'),
(30, 'hassan ', '', '', 0, '<p>You did not select a file to upload.</p>', 0, 0, 0, '', 0, '', '', '', '', 1, '2019-07-09 00:00:00', 0, '0000-00-00 00:00:00'),
(32, 'Talha', '', '', 0, '<p>You did not select a file to upload.</p>', 0, 0, 0, '', 0, '', '', '', '', 1, '2019-07-09 00:00:00', 0, '0000-00-00 00:00:00'),
(33, 'Talha', '333', '', 12, '<p>You did not select a file to upload.</p>', 0, 0, 0, '', 0, '', '', '', '', 1, '2019-07-09 00:00:00', 0, '0000-00-00 00:00:00'),
(34, 'Talha', '', '', 0, '<p>You did not select a file to upload.</p>', 0, 0, 0, '', 0, '', '', '', '', 1, '2019-07-09 00:00:00', 0, '0000-00-00 00:00:00'),
(44, 'hhh', '', '', 0, 'ahaha5.PNG', 0, 0, 0, '', 0, '', '', '', '', 1, '2019-07-12 00:00:00', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Id` bigint(20) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `CustomerType` varchar(255) NOT NULL,
  `NewsLetter` smallint(6) NOT NULL,
  `EmailAddress` varchar(300) NOT NULL,
  `Password` varchar(300) NOT NULL,
  `Status` smallint(6) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Address` text NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `ModifiedBy` int(11) NOT NULL,
  `CreatedDate` date NOT NULL,
  `ModifiedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `Id` bigint(20) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `DiscountType` varchar(255) NOT NULL,
  `PerFlat` smallint(6) NOT NULL,
  `ReqCuponCode` smallint(6) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `Status` smallint(6) NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedDate` date NOT NULL,
  `ModifiedBy` int(11) NOT NULL,
  `ModifiedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `discountproduct`
--

CREATE TABLE `discountproduct` (
  `Id` int(11) NOT NULL,
  `ProductId` bigint(20) NOT NULL,
  `DiscountId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `giftcard`
--

CREATE TABLE `giftcard` (
  `Id` bigint(20) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `InitialValue` double NOT NULL,
  `Activated` smallint(6) NOT NULL,
  `CuponCode` varchar(255) NOT NULL,
  `RecName` varchar(1000) NOT NULL,
  `RecEmail` varchar(255) NOT NULL,
  `SendName` varchar(1000) NOT NULL,
  `SendEmail` varchar(255) NOT NULL,
  `Message` text NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedDate` date NOT NULL,
  `ModifiedBy` int(11) NOT NULL,
  `ModifiedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Id` bigint(20) NOT NULL,
  `Code` varchar(255) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `ShortDescription` text NOT NULL,
  `LongDescription` text NOT NULL,
  `CategoryId` int(11) NOT NULL,
  `BrandId` int(11) NOT NULL,
  `Published` smallint(6) NOT NULL,
  `ShowOnHomePage` smallint(6) NOT NULL,
  `ProductType` varchar(255) NOT NULL,
  `VendorId` int(11) NOT NULL,
  `ReqOtherProduct` smallint(6) NOT NULL,
  `CustomerReview` smallint(6) NOT NULL,
  `AvailStartDate` date NOT NULL,
  `AvailEndDate` date NOT NULL,
  `MarkNew` int(11) NOT NULL,
  `Price` double NOT NULL,
  `OldPrice` double NOT NULL,
  `CostPrice` double NOT NULL,
  `RValue` double NOT NULL,
  `STax` double NOT NULL,
  `STaxPer` float NOT NULL,
  `DisableBuyButton` smallint(6) NOT NULL,
  `DisableWishList` smallint(6) NOT NULL,
  `DownloadAble` smallint(6) NOT NULL,
  `Rental` smallint(6) NOT NULL,
  `SEFriendlyPage` text NOT NULL,
  `MetaTitle` varchar(255) NOT NULL,
  `MetaKeyword` text NOT NULL,
  `CallForPrice` smallint(6) NOT NULL,
  `Discount` double NOT NULL,
  `ShippingEnable` smallint(6) NOT NULL,
  `ShipSep` smallint(6) NOT NULL,
  `AddChargesShip` double NOT NULL,
  `DeliveryTime` varchar(255) NOT NULL,
  `InventoryMethod` varchar(255) NOT NULL,
  `MinCartQty` int(11) NOT NULL,
  `MaxCartQty` int(11) NOT NULL,
  `NotReturnAble` smallint(6) NOT NULL,
  `IsGiftCard` smallint(6) NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedDate` date NOT NULL,
  `ModifiedBy` int(11) NOT NULL,
  `ModifiedDate` date NOT NULL,
  `Featured` smallint(6) NOT NULL,
  `BestSeller` smallint(6) NOT NULL,
  `Picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Id`, `Code`, `Name`, `ShortDescription`, `LongDescription`, `CategoryId`, `BrandId`, `Published`, `ShowOnHomePage`, `ProductType`, `VendorId`, `ReqOtherProduct`, `CustomerReview`, `AvailStartDate`, `AvailEndDate`, `MarkNew`, `Price`, `OldPrice`, `CostPrice`, `RValue`, `STax`, `STaxPer`, `DisableBuyButton`, `DisableWishList`, `DownloadAble`, `Rental`, `SEFriendlyPage`, `MetaTitle`, `MetaKeyword`, `CallForPrice`, `Discount`, `ShippingEnable`, `ShipSep`, `AddChargesShip`, `DeliveryTime`, `InventoryMethod`, `MinCartQty`, `MaxCartQty`, `NotReturnAble`, `IsGiftCard`, `CreatedBy`, `CreatedDate`, `ModifiedBy`, `ModifiedDate`, `Featured`, `BestSeller`, `Picture`) VALUES
(62, '', 'talha', '', '', 0, 0, 0, 0, '', 0, 0, 0, '0000-00-00', '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 0, 0, 0, 0, '', '0', 0, 0, 0, 0, 1, '2019-07-15', 1, '2019-07-15', 0, 0, '[\"service-icon-13.png\",\"service-icon-23.png\"]');

-- --------------------------------------------------------

--
-- Table structure for table `productattributes`
--

CREATE TABLE `productattributes` (
  `Id` bigint(20) NOT NULL,
  `ProductId` bigint(20) NOT NULL,
  `AttributeId` bigint(20) NOT NULL,
  `AttValue` varchar(1000) NOT NULL,
  `Status` smallint(6) NOT NULL,
  `CreatedBy` smallint(6) NOT NULL,
  `CreatedDate` date NOT NULL,
  `ModifiedBy` smallint(6) NOT NULL,
  `ModifiedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `productpicture`
--

CREATE TABLE `productpicture` (
  `Id` bigint(20) NOT NULL,
  `ProductId` bigint(20) NOT NULL,
  `PicSmall` varchar(1000) NOT NULL,
  `PicLarge` varchar(1000) NOT NULL,
  `Status` smallint(6) NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedDate` date NOT NULL,
  `ModifiedBy` int(11) NOT NULL,
  `ModifiedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `productreview`
--

CREATE TABLE `productreview` (
  `Id` bigint(20) NOT NULL,
  `ProductId` bigint(20) NOT NULL,
  `CustomerId` bigint(20) NOT NULL,
  `CustomerEmail` varchar(255) NOT NULL,
  `ReviewText` text NOT NULL,
  `ReplyText` text NOT NULL,
  `Rating` int(11) NOT NULL,
  `IsApproved` int(11) NOT NULL,
  `CreatedDate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `productspecification`
--

CREATE TABLE `productspecification` (
  `Id` bigint(20) NOT NULL,
  `ProductId` bigint(20) NOT NULL,
  `SpecificationId` bigint(20) NOT NULL,
  `AttValue` varchar(1000) NOT NULL,
  `Status` smallint(6) NOT NULL,
  `CreatedBy` smallint(6) NOT NULL,
  `CreatedDate` date NOT NULL,
  `ModifiedBy` smallint(6) NOT NULL,
  `ModifiedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `producttag`
--

CREATE TABLE `producttag` (
  `Id` bigint(20) NOT NULL,
  `ProductId` bigint(20) NOT NULL,
  `TagId` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `productwishlist`
--

CREATE TABLE `productwishlist` (
  `Id` bigint(20) NOT NULL,
  `ProductId` bigint(20) NOT NULL,
  `CustomerId` bigint(20) NOT NULL,
  `CreatedDate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `relatedproduct`
--

CREATE TABLE `relatedproduct` (
  `Id` bigint(20) NOT NULL,
  `ProductId` bigint(20) NOT NULL,
  `RelatedProductId` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `specification`
--

CREATE TABLE `specification` (
  `Id` bigint(20) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Status` smallint(6) NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedDate` date NOT NULL,
  `ModifiedBy` int(11) NOT NULL,
  `ModifiedDate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specification`
--

INSERT INTO `specification` (`Id`, `Name`, `Description`, `Status`, `CreatedBy`, `CreatedDate`, `ModifiedBy`, `ModifiedDate`) VALUES
(2, 'jajaj', 'hahaha', 0, 1, '2019-07-15', 1, 2019);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `Id` bigint(20) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Status` smallint(6) NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedDate` date NOT NULL,
  `ModifiedBy` int(11) NOT NULL,
  `ModifiedDate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`Id`, `Name`, `Description`, `Status`, `CreatedBy`, `CreatedDate`, `ModifiedBy`, `ModifiedDate`) VALUES
(2, 'wah', 'kaaka', 0, 1, '2019-07-15', 1, 2019);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `discountproduct`
--
ALTER TABLE `discountproduct`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `giftcard`
--
ALTER TABLE `giftcard`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `productattributes`
--
ALTER TABLE `productattributes`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `productpicture`
--
ALTER TABLE `productpicture`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `productreview`
--
ALTER TABLE `productreview`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `productspecification`
--
ALTER TABLE `productspecification`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `producttag`
--
ALTER TABLE `producttag`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `productwishlist`
--
ALTER TABLE `productwishlist`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `relatedproduct`
--
ALTER TABLE `relatedproduct`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `specification`
--
ALTER TABLE `specification`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `discountproduct`
--
ALTER TABLE `discountproduct`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `giftcard`
--
ALTER TABLE `giftcard`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `productattributes`
--
ALTER TABLE `productattributes`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productpicture`
--
ALTER TABLE `productpicture`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productreview`
--
ALTER TABLE `productreview`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productspecification`
--
ALTER TABLE `productspecification`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `producttag`
--
ALTER TABLE `producttag`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productwishlist`
--
ALTER TABLE `productwishlist`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `relatedproduct`
--
ALTER TABLE `relatedproduct`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `specification`
--
ALTER TABLE `specification`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
