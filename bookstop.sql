-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2016 at 05:55 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstop`
--

-- --------------------------------------------------------

--
-- Table structure for table `addbook`
--

CREATE TABLE IF NOT EXISTS `addbook` (
  `BookID` int(10) unsigned NOT NULL,
  `AuthorID` varchar(10) NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `item_desc` varchar(200) NOT NULL,
  `ISBN` int(13) NOT NULL,
  `item_img` varchar(20) NOT NULL,
  `item_price` decimal(4,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addbook`
--

INSERT INTO `addbook` (`BookID`, `AuthorID`, `item_name`, `item_desc`, `ISBN`, `item_img`, `item_price`) VALUES
(1, '2', 'food', 'various recipies', 0, 'img/foodbook', '11.99');

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE IF NOT EXISTS `author` (
  `AuthorID` int(6) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Pass` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`AuthorID`, `FirstName`, `LastName`, `Email`, `Pass`) VALUES
(1, 'John', 'Steinbeck', 'j.steinbeck@live.com', '1234'),
(2, 'Jimmy', 'macenroye', 'trainboy@live.com', '1234'),
(3, 'ryan ', 'giggs', 'giggsy@live.co.uk', '1234'),
(4, 'martina ', 'cole', 'coldcole@live.com', '1234'),
(5, 'peter', 'brown', 'brownnose@hotmail.co.uk', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `bookdetails`
--

CREATE TABLE IF NOT EXISTS `bookdetails` (
  `BookID` int(10) NOT NULL,
  `ISBN` varchar(13) NOT NULL,
  `AuthorID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `CustomerID` int(6) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `pass1` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `FirstName`, `LastName`, `Email`, `pass1`) VALUES
(1, 'Payman', 'Sparrow', 'captain@hotmail.com', '1234'),
(2, 'Olly', 'Axcell', 'olly.icycool@live.co.uk', '1234'),
(3, 'Amos', 'King', 'king@hotmail.com', '1234'),
(4, 'Lee', 'Greenaway', 'greensville@hotmail.com', '1234'),
(5, 'Chris', 'Brambles', 'bramble@live.co.uk', '1234'),
(7, 'bob', 'test', 'email2.com', '1234'),
(8, 'Lynzo', 'Cruddas', 'lynsey_loo_@hotmail.co.uk', '1234'),
(9, 'bob', 'builder', 'canwefixiit@build.com', '1234'),
(14, 'Chris', 'Lane', 'example.com', '1234'),
(16, 'tim', 'dug', 'dug@live.com', '1234'),
(17, 'john', 'helpful', 'help@live.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `deletebook`
--

CREATE TABLE IF NOT EXISTS `deletebook` (
  `DeleteID` int(10) unsigned NOT NULL,
  `AuthorID` varchar(10) NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `item_desc` varchar(200) NOT NULL,
  `ISBN` int(13) NOT NULL,
  `item_img` varchar(20) NOT NULL,
  `item_price` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE IF NOT EXISTS `forum` (
  `post_id` int(10) unsigned NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `subject` varchar(60) NOT NULL,
  `message` text NOT NULL,
  `post_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orderreceipt`
--

CREATE TABLE IF NOT EXISTS `orderreceipt` (
  `ReceiptID` int(10) NOT NULL,
  `CustomerID` int(6) NOT NULL,
  `Quantity` int(20) NOT NULL,
  `TimeDate` datetime(6) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `ISBN` varchar(13) NOT NULL,
  `PaymentMethod` enum('PayPal','Visa Debit','Visa','Mastercard') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `order_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_contents`
--

CREATE TABLE IF NOT EXISTS `order_contents` (
  `content_id` int(10) unsigned NOT NULL,
  `order_id` int(10) unsigned NOT NULL,
  `item_id` int(10) unsigned NOT NULL,
  `quantity` int(10) unsigned NOT NULL DEFAULT '1',
  `price` decimal(4,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_contents`
--

INSERT INTO `order_contents` (`content_id`, `order_id`, `item_id`, `quantity`, `price`) VALUES
(1, 0, 3, 1, '16.99'),
(2, 0, 4, 3, '17.99'),
(3, 0, 2, 1, '14.99'),
(4, 0, 3, 1, '16.99'),
(5, 0, 2, 1, '14.99'),
(6, 0, 3, 1, '16.99'),
(7, 0, 1, 1, '19.99'),
(8, 0, 2, 1, '14.99'),
(9, 0, 3, 1, '16.99'),
(10, 0, 1, 1, '19.99'),
(11, 0, 2, 1, '14.99'),
(12, 0, 6, 1, '4.99'),
(13, 0, 1, 1, '19.99'),
(14, 0, 1, 1, '19.99'),
(15, 0, 2, 2, '14.99'),
(16, 0, 1, 1, '19.99'),
(17, 0, 2, 1, '14.99'),
(18, 0, 5, 1, '29.99'),
(19, 0, 1, 1, '19.99'),
(20, 0, 1, 1, '19.99');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
  `item_id` int(10) unsigned NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `item_desc` varchar(200) NOT NULL,
  `item_img` text NOT NULL,
  `item_price` decimal(4,2) NOT NULL,
  `AuthorID` int(6) NOT NULL,
  `filelocation` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`item_id`, `item_name`, `item_desc`, `item_img`, `item_price`, `AuthorID`, `filelocation`) VALUES
(1, 'Cow', 'A friendly field buddy. live and eat like daisy the cow, in this adventure.', 'img/cow.png', '19.99', 1, 'uploads/cowbook.png'),
(2, 'Dog', 'A friendly lap buddy. the life of a farm dog loyal and loving adventure. ', 'img/dog.jpg', '14.99', 1, 'uploads/dogbook.jpg'),
(3, 'Goat', 'A friendly mountain buddy. Gerard the goat settles into a new farm but making friends isnt easy.', 'img/goat.jpg', '16.99', 1, 'uploads/goatbook.jpg'),
(4, 'Leopard', 'A friendly spotted buddy. into the wild survival of the leopard, animated filled with adventure.', 'img/leopard.jpg', '17.99', 1, 'uploads/leopardbook.jpg'),
(5, 'Rhinno', 'A friendly jungle buddy. avoids capture but goes in deep adventure on finding his captured family.', 'img/rhinno.png', '29.99', 1, 'uploads/rhinnobook.png'),
(6, 'Of Mice and men', 'story of two friends trying to live the dream to live on the fat-of-the land, during the depression.', 'img/ofmiceandmen.jpg', '4.99', 1, 'uploads/ofmiceandmenbook.jpg'),
(18, 'thefamily', 'hard times from the beginning to the very end of this heart warming story. ', 'img/thefamily.jpg', '4.49', 4, 'uploads/thefamilybook.jpg'),
(25, 'The Runaway', 'times are hard and family comes first..doesnt it?', 'img/therunaway.jpg', '1.99', 4, 'uploads/therunawaybook.jpg'),
(26, 'The Know', 'Knowledge is a powerful tricky thing and can be vital.', 'img/theknow.jpg', '2.49', 4, 'uploads/theknowbook.jpg'),
(27, 'giggsy 11', 'Autobiography life story of Ryan Giggs', 'img/giggs.jpg', '6.99', 3, 'uploads/giggsbook.jpg'),
(32, 'faceless', 'the life of a Prostitute and her struggles  ', 'img/faceless.jpg', '5.99', 4, 'uploads/facelessbook.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `TransactionID` int(10) NOT NULL,
  `CustomerID` int(6) NOT NULL,
  `TimeDate` datetime(6) NOT NULL,
  `PaymentMethod` enum('PayPal','Visa','Visa Debit','Mastercard') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addbook`
--
ALTER TABLE `addbook`
  ADD PRIMARY KEY (`BookID`),
  ADD UNIQUE KEY `AuthorID` (`AuthorID`),
  ADD KEY `AuthorID_2` (`AuthorID`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`AuthorID`);

--
-- Indexes for table `bookdetails`
--
ALTER TABLE `bookdetails`
  ADD PRIMARY KEY (`BookID`),
  ADD UNIQUE KEY `BookID` (`BookID`),
  ADD UNIQUE KEY `ISBN` (`ISBN`),
  ADD UNIQUE KEY `AuthorID` (`AuthorID`),
  ADD KEY `BookID_2` (`BookID`),
  ADD KEY `ISBN_2` (`ISBN`),
  ADD KEY `AuthorID_2` (`AuthorID`),
  ADD KEY `BookID_3` (`BookID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`),
  ADD UNIQUE KEY `CustomerID_2` (`CustomerID`),
  ADD KEY `CustomerID` (`CustomerID`),
  ADD KEY `CustomerID_3` (`CustomerID`),
  ADD KEY `CustomerID_4` (`CustomerID`),
  ADD KEY `CustomerID_5` (`CustomerID`);

--
-- Indexes for table `deletebook`
--
ALTER TABLE `deletebook`
  ADD PRIMARY KEY (`DeleteID`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `orderreceipt`
--
ALTER TABLE `orderreceipt`
  ADD PRIMARY KEY (`ReceiptID`),
  ADD UNIQUE KEY `ReceiptID` (`ReceiptID`),
  ADD KEY `ReceiptID_2` (`ReceiptID`),
  ADD KEY `CustomerID` (`CustomerID`),
  ADD KEY `ISBN` (`ISBN`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_contents`
--
ALTER TABLE `order_contents`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`TransactionID`),
  ADD UNIQUE KEY `TransactionID_2` (`TransactionID`),
  ADD KEY `TransactionID` (`TransactionID`),
  ADD KEY `TransactionID_3` (`TransactionID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addbook`
--
ALTER TABLE `addbook`
  MODIFY `BookID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `AuthorID` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `deletebook`
--
ALTER TABLE `deletebook`
  MODIFY `DeleteID` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `post_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orderreceipt`
--
ALTER TABLE `orderreceipt`
  MODIFY `ReceiptID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_contents`
--
ALTER TABLE `order_contents`
  MODIFY `content_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `item_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderreceipt`
--
ALTER TABLE `orderreceipt`
  ADD CONSTRAINT `orderreceipt_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
